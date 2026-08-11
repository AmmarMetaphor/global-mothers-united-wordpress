<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Contact — Global Mothers United';
get_header();
?>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Contact Us</span>
<h1 class="rv d1">We would love to <em>hear from you.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:50ch;margin-top:18px">Whether you are a mother seeking support, an organisation ready to partner, or someone who wants to get involved — reach out.</p>
</div></header>

<section style="padding-top:20px"><div class="wrap">
<div class="contact-grid">
  <div>
    <span class="eyebrow g rv">Get In Touch</span>
    <h2 class="rv d1">We are here.</h2>
    <div class="contact-info rv d2">
      <div class="ci"><div class="ci-icon">📧</div><div><h3>Email Us</h3><a href="mailto:info@globalmothersunited.org">info@globalmothersunited.org</a></div></div>
      <div class="ci"><div class="ci-icon">📅</div><div><h3>Events & Calendar</h3><p>See our upcoming community events and workshops.</p><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">View Calendar →</a></div></div>
      <div class="ci"><div class="ci-icon">🤝</div><div><h3>Partnerships</h3><p>Veterans Affairs, CPAs, NCATA, and community organisations welcome.</p></div></div>
      <div class="ci"><div class="ci-icon">🌍</div><div><h3>Programs</h3><p>Military Love & War · From Homeless to Billionaires · Inner Circle 10X</p></div></div>
    </div>
  </div>
  <div class="form-shell rv d1">
    <form class="form-box" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
      <h3 style="margin-bottom:24px">Send us a message</h3>
      <?php if ( isset( $_GET['sent'] ) && '1' === $_GET['sent'] ) : ?>
        <p style="padding:12px 14px;border-radius:10px;background:#e9f8ef;color:#176b37;margin:-8px 0 18px;">Thank you. Your message has been sent.</p>
      <?php elseif ( isset( $_GET['mail'] ) && '0' === $_GET['mail'] ) : ?>
        <p style="padding:12px 14px;border-radius:10px;background:#fff1f1;color:#8a1f1f;margin:-8px 0 18px;">Your message could not be sent. Please email us directly.</p>
      <?php endif; ?>
      <input type="hidden" name="action" value="gmu_contact">
      <?php wp_nonce_field( 'gmu_contact_submit', 'gmu_contact_nonce' ); ?>
      <input type="text" name="website" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;">
      <div class="fg">
        <div class="field"><label>First Name</label><input type="text" name="first_name" placeholder="First name" required></div>
        <div class="field"><label>Last Name</label><input type="text" name="last_name" placeholder="Last name" required></div>
        <div class="field full"><label>Email</label><input type="email" name="email" placeholder="you@example.com" required></div>
        <div class="field full"><label>I am reaching out as...</label>
          <select name="role" required><option>A mother seeking community</option><option>A nonprofit / partner organisation</option><option>A CPA or financial professional</option><option>A veteran or military family</option><option>A journalist or media contact</option><option>Other</option></select>
        </div>
        <div class="field full"><label>Message</label><textarea name="message" placeholder="Tell us how we can help or how you would like to get involved..." required></textarea></div>
        <div class="field full"><button type="submit" class="btn btn-g" style="font-size:16px;padding:14px 10px 14px 24px;width:100%;justify-content:center">Send Message <span class="arr" style="width:32px;height:32px;font-size:14px">→</span></button></div>
      </div>
    </form>
  </div>
</div>
</div></section>

<?php get_footer(); ?>
