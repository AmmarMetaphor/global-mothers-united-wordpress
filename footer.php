<?php
/**
 * Shared site footer.
 *
 * The homepage keeps its original longer copyright line; every other
 * page keeps the shorter line it already used, so no visible copy changes.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer>
  <div class="wrap foot-wrap">
    <div class="foot-logo">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU">
      <span>Global Mothers United</span>
    </div>
    <div class="foot-links">
      <a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a>
      <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a>
      <a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a>
      <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
    </div>
  </div>
  <div class="wrap foot-copy"><?php echo is_front_page() ? '© 2026 Global Mothers United. All rights reserved.' : '© 2026 Global Mothers United.'; ?></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
