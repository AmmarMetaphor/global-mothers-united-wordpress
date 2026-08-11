<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main style="max-width:900px;margin:80px auto;padding:24px;font-family:system-ui,sans-serif;">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>
<?php endwhile; else : ?>
<p>No content found.</p>
<?php endif; ?>
</main>
<?php wp_footer(); ?>
</body>
</html>
