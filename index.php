<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
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
<?php get_footer(); ?>
