<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Get Involved — Global Mothers United';
get_header();
?>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Get Involved</span>
<h1 class="rv d1">There is a place <em>for you</em> here.</h1>
<p class="page-lede rv d2">Whether you're a mother looking for community, an organization ready to partner, or someone who wants to help, we'd like to hear from you.</p>
</div></header>

<section style="padding-top:var(--space-md)"><div class="wrap">
<span class="eyebrow g rv">Ways to Join</span>
<h2 class="rv d1">How would you like to <em>show up?</em></h2>
<div class="ways-grid">
  <div class="way-shell rv">
    <div class="way">
      <h3>Join as a Member</h3>
      <p>Join programs, events, and a community of mothers who have each other's back.</p>
      <a class="btn btn-g" href="#join-form">Join the Community <span class="arr">→</span></a>
    </div>
  </div>
  <div class="way-shell rv d1">
    <div class="way">
      <h3>Partner With Us</h3>
      <p>We partner with nonprofits, CPAs, veterans organizations, schools, and community groups working toward the same goals.</p>
      <a class="btn btn-p" href="#join-form">Become a Partner <span class="arr">→</span></a>
    </div>
  </div>
  <div class="way-shell rv">
    <div class="way dark">
      <h3>Volunteer</h3>
      <p>Give your time or expertise. We're always looking for volunteers who want to help mothers directly.</p>
      <a class="btn" style="background:rgba(255,255,255,.12);color:#fff;padding:12px 20px" href="#join-form">Volunteer <span class="arr" style="background:rgba(255,255,255,.1)">→</span></a>
    </div>
  </div>
  <div class="way-shell rv d1">
    <div class="way dark">
      <h3>Invite Us to Speak</h3>
      <p>Bring Global Mothers United to your event, school, organization, or community. We speak on empowerment, military families, and financial resilience.</p>
      <a class="btn" style="background:rgba(29,185,84,.25);color:#fff;padding:12px 20px" href="#join-form">Book a Speaker <span class="arr" style="background:rgba(255,255,255,.1)">→</span></a>
    </div>
  </div>
</div>
</div></section>

<section style="padding-top:0" id="join-form"><div class="wrap">
<span class="eyebrow p rv">Sign Up</span>
<h2 class="rv d1">Tell us how you want to be involved.</h2>
<div class="form-wrap rv d1">
  <form class="form-inner" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
    <?php if ( isset( $_GET['joined'] ) && '1' === $_GET['joined'] ) : ?>
      <p style="padding:12px 14px;border-radius:10px;background:#e9f8ef;color:#176b37;margin:0 0 18px;">Thank you. We received your details.</p>
    <?php elseif ( isset( $_GET['mail'] ) && '0' === $_GET['mail'] ) : ?>
      <p style="padding:12px 14px;border-radius:10px;background:#fff1f1;color:#8a1f1f;margin:0 0 18px;">Your details could not be sent. Please contact us directly.</p>
    <?php endif; ?>
    <input type="hidden" name="action" value="gmu_join">
    <?php wp_nonce_field( 'gmu_join_submit', 'gmu_join_nonce' ); ?>
    <input type="text" name="website" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;">
    <div class="form-grid">
      <div class="field"><label for="join-first-name">First Name</label><input type="text" id="join-first-name" name="first_name" placeholder="Your first name" required></div>
      <div class="field"><label for="join-last-name">Last Name</label><input type="text" id="join-last-name" name="last_name" placeholder="Your last name" required></div>
      <div class="field"><label for="join-email">Email Address</label><input type="email" id="join-email" name="email" placeholder="you@example.com" required></div>
      <div class="field"><label for="join-phone">Phone (optional)</label><input type="tel" id="join-phone" name="phone" placeholder="+1 (000) 000-0000"></div>
      <div class="field full"><label for="join-involvement">How would you like to get involved?</label>
        <select id="join-involvement" name="involvement" required><option>Join as a Member</option><option>Partner with GMU</option><option>Volunteer</option><option>Invite GMU to Speak</option><option>Apply for a Program</option><option>Other</option></select>
      </div>
      <div class="field full"><label for="join-message">Tell us a little about yourself or your organisation</label><textarea id="join-message" name="message" placeholder="A few sentences about who you are and how you'd like to connect..." required></textarea></div>
      <div class="field full" style="margin-top:8px"><button type="submit" class="btn btn-g" style="font-size:16px;padding:14px 10px 14px 24px;width:100%;justify-content:center">Submit <span class="arr" style="width:32px;height:32px;font-size:14px">→</span></button></div>
    </div>
  </form>
</div>
</div></section>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Questions?</span>
<h2 class="rv d1">Not sure where to start?</h2>
<p class="rv d2">Send us a message and we'll point you in the right direction.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a></div>
</div></section>

<?php get_footer(); ?>
