<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Contact — Global Mothers United</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,ital,wght@9..144,0,700;9..144,1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root{--green:#1DB954;--green-deep:#0F9B45;--green-mid:#16A34A;--purple:#6B21A8;--purple-soft:#7C3AED;--cream:#F9FAF7;--cream-deep:#F0F4EC;--ink:#0D1F0F;--slate:#4A6350;--hairline:rgba(13,31,15,.1);--ease:cubic-bezier(.32,.72,0,1)}
*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{background:var(--cream);color:var(--ink);font-family:"Plus Jakarta Sans",sans-serif;font-size:17px;line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}::selection{background:var(--green);color:#fff}
.rv{opacity:0;transform:translateY(24px);filter:blur(4px);transition:opacity .9s var(--ease),transform .9s var(--ease),filter .9s var(--ease)}.rv.d1{transition-delay:.15s}.rv.d2{transition-delay:.3s}.rv.in{opacity:1;transform:translateY(0);filter:blur(0)}@media(prefers-reduced-motion:reduce){.rv{opacity:1;transform:none;filter:none;transition:none}}
nav{position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:40;display:flex;align-items:center;gap:6px;background:rgba(249,250,247,.85);backdrop-filter:blur(20px);border:1px solid var(--hairline);border-radius:999px;padding:8px 10px 8px 22px;white-space:nowrap;box-shadow:0 4px 30px -8px rgba(13,31,15,.12)}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none}.nav-logo img{width:30px;height:30px;border-radius:999px;object-fit:cover}.nav-wordmark{font-family:"Fraunces",serif;font-weight:700;font-size:14px;color:var(--ink)}
.nav-links{display:flex;gap:2px;margin:0 6px}.nav-links a{color:var(--slate);text-decoration:none;font-size:13px;font-weight:500;padding:6px 11px;border-radius:999px;transition:all .4s var(--ease)}.nav-links a:hover,.nav-links a.on{color:var(--ink);background:rgba(13,31,15,.06)}
.btn{display:inline-flex;align-items:center;gap:8px;border:none;border-radius:999px;cursor:pointer;font-family:"Plus Jakarta Sans",sans-serif;font-weight:600;font-size:14px;text-decoration:none;transition:transform .5s var(--ease),background .4s var(--ease)}.btn:active{transform:scale(.97)}.arr{width:28px;height:28px;border-radius:999px;display:flex;align-items:center;justify-content:center;font-size:12px;transition:transform .5s var(--ease)}.btn:hover .arr{transform:translate(2px,-1px) scale(1.08)}
.btn-g{background:var(--green-mid);color:#fff;padding:10px 8px 10px 18px}.btn-g:hover{background:var(--green-deep)}.btn-g .arr{background:rgba(255,255,255,.2)}
.wrap{max-width:1200px;margin:0 auto;padding:0 28px}.eyebrow{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--hairline);border-radius:999px;padding:5px 14px;font-size:10px;letter-spacing:.22em;text-transform:uppercase;font-weight:700;margin-bottom:24px}
.eyebrow.g{color:var(--green-mid);background:rgba(29,185,84,.07);border-color:rgba(29,185,84,.2)}.eyebrow.p{color:var(--purple-soft);background:rgba(124,58,237,.07);border-color:rgba(124,58,237,.2)}
h1{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(40px,5vw,68px);line-height:1.05;letter-spacing:-.03em}h1 em{font-style:italic;font-weight:400;color:var(--green-mid)}
h2{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(26px,3vw,40px);line-height:1.1;letter-spacing:-.025em}
h3{font-family:"Fraunces",serif;font-weight:600;font-size:20px;letter-spacing:-.01em}
section{padding:90px 0}header.page{padding:155px 0 50px}
.contact-grid{display:grid;grid-template-columns:.85fr 1.15fr;gap:70px;align-items:start;margin-top:50px}
.contact-info{display:flex;flex-direction:column;gap:0}
.ci{padding:24px 0;border-bottom:1px solid var(--hairline);display:flex;gap:18px;align-items:flex-start}
.ci:first-child{border-top:1px solid var(--hairline)}
.ci-icon{width:44px;height:44px;border-radius:12px;background:rgba(29,185,84,.1);border:1px solid rgba(29,185,84,.2);display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.ci h3{font-size:15px;margin-bottom:3px}.ci p,.ci a{color:var(--slate);font-size:14.5px;text-decoration:none}.ci a:hover{color:var(--green-mid)}
.form-shell{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:2rem;padding:8px}
.form-box{background:var(--cream);border-radius:calc(2rem - 8px);padding:44px;box-shadow:inset 0 1px 1px rgba(255,255,255,.9)}
.fg{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.field{display:flex;flex-direction:column;gap:7px}.field label{font-size:13.5px;font-weight:600}
.field input,.field select,.field textarea{background:var(--cream-deep);border:1px solid var(--hairline);border-radius:12px;padding:12px 16px;font-family:"Plus Jakarta Sans",sans-serif;font-size:15px;color:var(--ink);outline:none;transition:border-color .3s var(--ease)}
.field input:focus,.field select:focus,.field textarea:focus{border-color:var(--green-mid);box-shadow:0 0 0 3px rgba(22,163,74,.1)}
.field textarea{resize:vertical;min-height:110px}.full{grid-column:1/-1}
footer{background:var(--ink);border-top:1px solid rgba(249,250,247,.12);padding:40px 0}.foot-wrap{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}.foot-logo{display:flex;align-items:center;gap:12px}.foot-logo img{width:34px;height:34px;border-radius:999px;object-fit:cover}.foot-logo span{font-family:"Fraunces",serif;font-weight:600;font-size:15px;color:rgba(255,255,255,.9)}.foot-links{display:flex;gap:18px;flex-wrap:wrap}.foot-links a{color:rgba(255,255,255,.5);text-decoration:none;font-size:13px;transition:color .3s}.foot-links a:hover{color:rgba(255,255,255,.9)}.foot-copy{font-size:12px;color:rgba(255,255,255,.32);margin-top:24px;padding-top:18px;border-top:1px solid rgba(249,250,247,.12);text-align:center}
@media(max-width:920px){.nav-links{display:none}.contact-grid{grid-template-columns:1fr;gap:40px}.fg{grid-template-columns:1fr}header.page{padding:136px 0 30px}section{padding:70px 0}}
</style><?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav><a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span class="nav-wordmark">Global Mothers United</span></a><div class="nav-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="on">Contact</a></div><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a></nav>

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

<footer><div class="wrap foot-wrap"><div class="foot-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span>Global Mothers United</span></div><div class="foot-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div></div><div class="wrap foot-copy">© 2026 Global Mothers United.</div></footer>
<script>const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add("in");io.unobserve(e.target)}})},{threshold:.1});document.querySelectorAll(".rv").forEach(el=>io.observe(el));</script>
<?php wp_footer(); ?>
</body></html>
