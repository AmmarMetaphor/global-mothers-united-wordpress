<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function gmu_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'gmu_theme_setup' );

function gmu_enqueue_assets() {
    $theme = wp_get_theme();

    wp_enqueue_style(
        'gmu-site',
        get_theme_file_uri( 'assets/css/site.css' ),
        array(),
        $theme->get( 'Version' )
    );

    wp_enqueue_script(
        'gmu-site',
        get_theme_file_uri( 'assets/js/site.js' ),
        array(),
        $theme->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'gmu_enqueue_assets' );

function gmu_create_site_pages() {
    $pages = array(
        'home'         => 'Home',
        'programs'     => 'Programs',
        'events'       => 'Events',
        'get-involved' => 'Get Involved',
        'media'        => 'Media',
        'contact'      => 'Contact',
    );

    $ids = array();
    foreach ( $pages as $slug => $title ) {
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            $ids[ $slug ] = $existing->ID;
            continue;
        }
        $id = wp_insert_post(
            array(
                'post_title'  => $title,
                'post_name'   => $slug,
                'post_status' => 'publish',
                'post_type'   => 'page',
            )
        );
        if ( ! is_wp_error( $id ) ) {
            $ids[ $slug ] = $id;
        }
    }

    if ( ! empty( $ids['home'] ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $ids['home'] );
    }

    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'gmu_create_site_pages' );

function gmu_mail_target() {
    $email = get_option( 'admin_email' );
    return is_email( $email ) ? $email : '';
}

function gmu_handle_contact() {
    if ( ! isset( $_POST['gmu_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gmu_contact_nonce'] ) ), 'gmu_contact_submit' ) ) {
        wp_die( 'Security check failed.' );
    }

    if ( ! empty( $_POST['website'] ) ) {
        wp_safe_redirect( home_url( '/contact/' ) );
        exit;
    }

    $first   = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';
    $last    = isset( $_POST['last_name'] ) ? sanitize_text_field( wp_unslash( $_POST['last_name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $role    = isset( $_POST['role'] ) ? sanitize_text_field( wp_unslash( $_POST['role'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( '' === $first || '' === $last || ! is_email( $email ) || '' === $message ) {
        wp_safe_redirect( add_query_arg( 'mail', '0', home_url( '/contact/' ) ) );
        exit;
    }

    $to      = gmu_mail_target();
    $subject = 'Website enquiry from ' . $first . ' ' . $last;
    $body    = "Name: {$first} {$last}\nEmail: {$email}\nReaching out as: {$role}\n\nMessage:\n{$message}\n";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email );
    $sent    = $to ? wp_mail( $to, $subject, $body, $headers ) : false;

    wp_safe_redirect( add_query_arg( $sent ? 'sent' : 'mail', $sent ? '1' : '0', home_url( '/contact/' ) ) );
    exit;
}
add_action( 'admin_post_nopriv_gmu_contact', 'gmu_handle_contact' );
add_action( 'admin_post_gmu_contact', 'gmu_handle_contact' );

function gmu_handle_join() {
    if ( ! isset( $_POST['gmu_join_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gmu_join_nonce'] ) ), 'gmu_join_submit' ) ) {
        wp_die( 'Security check failed.' );
    }

    if ( ! empty( $_POST['website'] ) ) {
        wp_safe_redirect( home_url( '/get-involved/' ) );
        exit;
    }

    $first       = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';
    $last        = isset( $_POST['last_name'] ) ? sanitize_text_field( wp_unslash( $_POST['last_name'] ) ) : '';
    $email       = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone       = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
    $involvement = isset( $_POST['involvement'] ) ? sanitize_text_field( wp_unslash( $_POST['involvement'] ) ) : '';
    $message     = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( '' === $first || '' === $last || ! is_email( $email ) || '' === $message ) {
        wp_safe_redirect( add_query_arg( 'mail', '0', home_url( '/get-involved/' ) ) );
        exit;
    }

    $to      = gmu_mail_target();
    $subject = 'Get involved enquiry from ' . $first . ' ' . $last;
    $body    = "Name: {$first} {$last}\nEmail: {$email}\nPhone: {$phone}\nInterest: {$involvement}\n\nMessage:\n{$message}\n";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email );
    $sent    = $to ? wp_mail( $to, $subject, $body, $headers ) : false;

    wp_safe_redirect( add_query_arg( $sent ? 'joined' : 'mail', $sent ? '1' : '0', home_url( '/get-involved/' ) ) );
    exit;
}
add_action( 'admin_post_nopriv_gmu_join', 'gmu_handle_join' );
add_action( 'admin_post_gmu_join', 'gmu_handle_join' );
