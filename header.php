<?php
/**
 * Shared site header: doctype, <head>, nav, and Join Us CTA.
 *
 * Templates that need a custom <title> should set $gmu_title before
 * calling get_header().
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $gmu_title;

$gmu_body_extra_class = '';
if ( is_page( 'programs' ) ) {
	$gmu_body_extra_class = 'gmu-programs';
} elseif ( is_page( 'events' ) ) {
	$gmu_body_extra_class = 'gmu-events';
} elseif ( is_page( 'get-involved' ) ) {
	$gmu_body_extra_class = 'gmu-get-involved';
} elseif ( is_page( 'media' ) ) {
	$gmu_body_extra_class = 'gmu-media';
} elseif ( is_page( 'contact' ) ) {
	$gmu_body_extra_class = 'gmu-contact';
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html( $gmu_title ? $gmu_title : get_bloginfo( 'name' ) ); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,ital,wght@9..144,0,700;9..144,1,400;9..144,1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Spline+Sans+Mono:wght@400;500&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class( $gmu_body_extra_class ); ?>>
<?php wp_body_open(); ?>

<nav>
  <a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU">
    <span class="nav-wordmark">Global Mothers United</span>
  </a>
  <div class="nav-links" id="primary-nav-links">
    <a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"<?php echo is_page( 'programs' ) ? ' class="on"' : ''; ?>>Programs</a>
    <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>"<?php echo is_page( 'events' ) ? ' class="on"' : ''; ?>>Events</a>
    <a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>"<?php echo is_page( 'get-involved' ) ? ' class="on"' : ''; ?>>Get Involved</a>
    <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>"<?php echo is_page( 'media' ) ? ' class="on"' : ''; ?>>Media</a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo is_page( 'contact' ) ? ' class="on"' : ''; ?>>Contact</a>
  </div>
  <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a>
  <button type="button" class="nav-toggle" aria-controls="primary-nav-links" aria-expanded="false" aria-label="Menu">
    <span class="nav-toggle-bar"></span>
    <span class="nav-toggle-bar"></span>
    <span class="nav-toggle-bar"></span>
  </button>
</nav>
