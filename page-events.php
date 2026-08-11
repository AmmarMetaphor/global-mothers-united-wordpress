<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Events & Calendar — Global Mothers United</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,ital,wght@9..144,0,700;9..144,1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Spline+Sans+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{--green:#1DB954;--green-deep:#0F9B45;--green-mid:#16A34A;--purple:#6B21A8;--purple-soft:#7C3AED;--cream:#F9FAF7;--cream-deep:#F0F4EC;--ink:#0D1F0F;--slate:#4A6350;--hairline:rgba(13,31,15,.1);--ease:cubic-bezier(.32,.72,0,1)}
*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{background:var(--cream);color:var(--ink);font-family:"Plus Jakarta Sans",sans-serif;font-size:17px;line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}::selection{background:var(--green);color:#fff}
.rv{opacity:0;transform:translateY(24px);filter:blur(4px);transition:opacity .9s var(--ease),transform .9s var(--ease),filter .9s var(--ease)}.rv.d1{transition-delay:.15s}.rv.d2{transition-delay:.3s}.rv.in{opacity:1;transform:translateY(0);filter:blur(0)}@media(prefers-reduced-motion:reduce){.rv{opacity:1;transform:none;filter:none;transition:none}}
nav{position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:40;display:flex;align-items:center;gap:6px;background:rgba(249,250,247,.85);backdrop-filter:blur(20px);border:1px solid var(--hairline);border-radius:999px;padding:8px 10px 8px 22px;white-space:nowrap;box-shadow:0 4px 30px -8px rgba(13,31,15,.12)}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none}.nav-logo img{width:30px;height:30px;border-radius:999px;object-fit:cover}.nav-wordmark{font-family:"Fraunces",serif;font-weight:700;font-size:14px;color:var(--ink)}
.nav-links{display:flex;gap:2px;margin:0 6px}.nav-links a{color:var(--slate);text-decoration:none;font-size:13px;font-weight:500;padding:6px 11px;border-radius:999px;transition:all .4s var(--ease)}.nav-links a:hover,.nav-links a.on{color:var(--ink);background:rgba(13,31,15,.06)}
.btn{display:inline-flex;align-items:center;gap:8px;border:none;border-radius:999px;cursor:pointer;font-family:"Plus Jakarta Sans",sans-serif;font-weight:600;font-size:14px;text-decoration:none;transition:transform .5s var(--ease),background .4s var(--ease)}.btn:active{transform:scale(.97)}.arr{width:28px;height:28px;border-radius:999px;display:flex;align-items:center;justify-content:center;font-size:12px;transition:transform .5s var(--ease)}.btn:hover .arr{transform:translate(2px,-1px) scale(1.08)}
.btn-g{background:var(--green-mid);color:#fff;padding:10px 8px 10px 18px}.btn-g:hover{background:var(--green-deep)}.btn-g .arr{background:rgba(255,255,255,.2)}
.btn-p{background:var(--purple-soft);color:#fff;padding:10px 8px 10px 18px}.btn-p:hover{background:var(--purple)}.btn-p .arr{background:rgba(255,255,255,.2)}
.btn-ghost{background:transparent;color:var(--ink);border:1px solid var(--hairline);padding:10px 20px}.btn-ghost:hover{background:var(--cream-deep)}
.wrap{max-width:1200px;margin:0 auto;padding:0 28px}.eyebrow{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--hairline);border-radius:999px;padding:5px 14px;font-size:10px;letter-spacing:.22em;text-transform:uppercase;font-weight:700;margin-bottom:24px}
.eyebrow.g{color:var(--green-mid);background:rgba(29,185,84,.07);border-color:rgba(29,185,84,.2)}.eyebrow.p{color:var(--purple-soft);background:rgba(124,58,237,.07);border-color:rgba(124,58,237,.2)}
h1{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(40px,5vw,68px);line-height:1.05;letter-spacing:-.03em}h1 em{font-style:italic;font-weight:400;color:var(--green-mid)}
h2{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(26px,3vw,40px);line-height:1.1;letter-spacing:-.025em}
h3{font-family:"Fraunces",serif;font-weight:600;font-size:22px;letter-spacing:-.01em}
section{padding:90px 0}header.page{padding:155px 0 50px}

/* FILTER TABS */
.filters{display:flex;gap:8px;margin:40px 0 10px;flex-wrap:wrap}
.ftab{padding:8px 18px;border-radius:999px;border:1px solid var(--hairline);font-size:13.5px;font-weight:500;cursor:pointer;background:transparent;color:var(--slate);transition:all .3s var(--ease);font-family:"Plus Jakarta Sans",sans-serif}
.ftab.on,.ftab:hover{background:var(--ink);color:#fff;border-color:var(--ink)}

/* FEATURED EVENT */
.feat{background:var(--ink);border-radius:2rem;padding:10px;margin-bottom:12px}
.feat-inner{background:linear-gradient(135deg,#1A3020,#0D1F0F);border-radius:calc(2rem - 10px);padding:48px 52px;display:grid;grid-template-columns:1fr auto;gap:40px;align-items:center;position:relative;overflow:hidden}
.feat-inner::after{content:"";position:absolute;top:0;right:0;width:400px;height:100%;background:radial-gradient(ellipse at 100% 50%,rgba(29,185,84,.2),transparent 60%);pointer-events:none}
.feat-tag{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.2em;text-transform:uppercase;color:rgba(29,185,84,.8);margin-bottom:12px}
.feat-inner h2{color:#fff;max-width:26ch;position:relative;z-index:1}
.feat-meta{margin-top:12px;font-family:"Spline Sans Mono",monospace;font-size:12px;color:rgba(255,255,255,.5);display:flex;gap:20px;flex-wrap:wrap;position:relative;z-index:1}
.feat-meta span{color:rgba(29,185,84,.8)}
.feat-actions{display:flex;gap:10px;margin-top:28px;position:relative;z-index:1}
.feat-side{background:rgba(29,185,84,.12);border:1px solid rgba(29,185,84,.2);border-radius:16px;padding:28px 24px;min-width:200px;position:relative;z-index:1;flex-shrink:0}
.feat-side .label{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:10px}
.feat-side .val{font-family:"Fraunces",serif;font-weight:700;font-size:28px;color:rgba(29,185,84,.9);line-height:1}
.feat-side p{font-size:13px;color:rgba(255,255,255,.5);margin-top:6px}

/* EVENT LIST */
.ev-list{border-top:1px solid var(--hairline)}
.ev-card{display:grid;grid-template-columns:100px 1fr auto;gap:24px;align-items:start;padding:28px 0;border-bottom:1px solid var(--hairline);transition:background .3s var(--ease)}
.ev-card:hover{background:rgba(29,185,84,.03)}
.ev-date-box{text-align:center;background:var(--cream-deep);border:1px solid var(--hairline);border-radius:16px;padding:12px 8px}
.ev-date-box .month{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.2em;text-transform:uppercase;color:var(--slate)}
.ev-date-box .day{font-family:"Fraunces",serif;font-weight:700;font-size:34px;letter-spacing:-.03em;color:var(--ink);line-height:1}
.ev-body h3{font-size:19px;margin-bottom:5px}
.ev-body p{color:var(--slate);font-size:14.5px;max-width:58ch;margin-bottom:12px}
.ev-tags{display:flex;gap:8px;flex-wrap:wrap}
.etag{padding:4px 12px;border-radius:999px;font-size:11.5px;font-weight:600}
.etag-g{background:rgba(29,185,84,.1);color:var(--green-mid)}.etag-p{background:rgba(124,58,237,.09);color:var(--purple-soft)}
.ev-action{align-self:center}
.btn-sm{font-size:13px;padding:8px 6px 8px 16px}.btn-sm .arr{width:24px;height:24px;font-size:11px}

/* CALENDAR EMBED PLACEHOLDER */
.cal-wrap{background:rgba(13,31,15,.03);border:1px solid var(--hairline);border-radius:2rem;padding:8px;margin-top:52px}
.cal-inner{background:var(--cream);border-radius:calc(2rem - 8px);padding:56px;text-align:center;box-shadow:inset 0 1px 1px rgba(255,255,255,.9)}
.cal-inner .icon{font-size:48px;margin-bottom:16px}
.cal-inner h3{margin-bottom:8px}
.cal-inner p{color:var(--slate);font-size:15px;max-width:44ch;margin:0 auto 24px}

.fin{background:var(--ink);color:#fff;text-align:center;padding:100px 0;position:relative;overflow:hidden}.fin::after{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(29,185,84,.17),transparent 55%);pointer-events:none}.fin h2{color:#fff;margin:0 auto;max-width:22ch;position:relative;z-index:1}.fin p{color:rgba(255,255,255,.62);margin:18px auto 36px;max-width:46ch;position:relative;z-index:1}.fin-cta{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
footer{background:var(--ink);border-top:1px solid rgba(249,250,247,.12);padding:40px 0}.foot-wrap{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}.foot-logo{display:flex;align-items:center;gap:12px}.foot-logo img{width:34px;height:34px;border-radius:999px;object-fit:cover}.foot-logo span{font-family:"Fraunces",serif;font-weight:600;font-size:15px;color:rgba(255,255,255,.9)}.foot-links{display:flex;gap:18px;flex-wrap:wrap}.foot-links a{color:rgba(255,255,255,.5);text-decoration:none;font-size:13px;transition:color .3s}.foot-links a:hover{color:rgba(255,255,255,.9)}.foot-copy{font-size:12px;color:rgba(255,255,255,.32);margin-top:24px;padding-top:18px;border-top:1px solid rgba(249,250,247,.12);text-align:center}
@media(max-width:920px){.nav-links{display:none}.feat-inner{grid-template-columns:1fr;gap:24px;padding:32px 24px}.feat-side{min-width:auto}.ev-card{grid-template-columns:80px 1fr;gap:16px}.ev-action{display:none}header.page{padding:136px 0 30px}section{padding:70px 0}}
</style><?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav><a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span class="nav-wordmark">Global Mothers United</span></a><div class="nav-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>" class="on">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a></nav>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Events & Calendar</span>
<h1 class="rv d1">Where we show up <em>together.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:50ch;margin-top:18px">Community nights, workshops, cohort launches, and partner events — all in one place. Free to attend unless noted.</p>
<div class="filters rv">
  <button class="ftab on">All Events</button>
  <button class="ftab">Military</button>
  <button class="ftab">Empowerment</button>
  <button class="ftab">Leadership</button>
  <button class="ftab">Partner Events</button>
</div>
</div></header>

<section style="padding-top:20px"><div class="wrap">

<!-- FEATURED -->
<div class="feat rv">
  <div class="feat-inner">
    <div>
      <div class="feat-tag">Featured Event</div>
      <h2>Military Love & War — Community Night</h2>
      <div class="feat-meta"><span>Jul 23, 2026</span> &nbsp;·&nbsp; 6:00 PM EST &nbsp;·&nbsp; <span>Free</span> &nbsp;·&nbsp; Zoom + In-Person</div>
      <div class="feat-actions">
        <a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Reserve Your Spot <span class="arr">→</span></a>
        <a class="btn" style="background:rgba(255,255,255,.1);color:#fff;padding:10px 20px">Add to Calendar</a>
      </div>
    </div>
    <div class="feat-side">
      <div class="label">Date</div>
      <div class="val">Jul 23</div>
      <p>2026 · Community Night</p>
    </div>
  </div>
</div>

<!-- EVENT LIST -->
<div class="ev-list" style="margin-top:10px">
  <div class="ev-card rv">
    <div class="ev-date-box"><div class="month">Jul</div><div class="day">23</div></div>
    <div class="ev-body">
      <h3>Military Love & War — Community Night</h3>
      <p>A safe space for military mothers to connect, share stories, and find support. Open to all military-connected mothers and families.</p>
      <div class="ev-tags"><span class="etag etag-g">Military</span><span class="etag etag-g">Free</span><span class="etag etag-g">Zoom + In-Person</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-g btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Register <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv d1">
    <div class="ev-date-box"><div class="month">Oct</div><div class="day">01</div></div>
    <div class="ev-body">
      <h3>Inner Circle 10X — October Cohort Opens</h3>
      <p>Applications open for the flagship leadership program. Monthly cohort for mothers scaling their income and impact. Limited places.</p>
      <div class="ev-tags"><span class="etag etag-p">Leadership</span><span class="etag etag-p">Application Required</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-p btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apply <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv d2">
    <div class="ev-date-box"><div class="month">TBA</div><div class="day" style="font-size:22px;padding-top:4px">Soon</div></div>
    <div class="ev-body">
      <h3>From Homeless to Billionaires — Full-Day Workshop</h3>
      <p>A transformational full-day workshop for mothers rebuilding from hardship. Veterans Affairs and CPA partners in attendance. Limited seats.</p>
      <div class="ev-tags"><span class="etag etag-p">Empowerment</span><span class="etag etag-g">Scholarship Available</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-p btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Join Waitlist <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv">
    <div class="ev-date-box"><div class="month">TBA</div><div class="day" style="font-size:22px;padding-top:4px">Soon</div></div>
    <div class="ev-body">
      <h3>NCATA Community Partnership Event</h3>
      <p>A collaborative event with NCATA and Wadsworth partners. Details to be announced — register interest to be notified.</p>
      <div class="ev-tags"><span class="etag etag-g">Partner Event</span><span class="etag etag-g">Free</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-g btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Notify Me <span class="arr">→</span></a></div>
  </div>
</div>

<!-- CALENDAR EMBED -->
<div class="cal-wrap rv">
  <div class="cal-inner">
    <div class="icon">📅</div>
    <h3>Full Calendar Coming Soon</h3>
    <p>We are setting up an embedded calendar with all upcoming events, recurring community nights, and partner workshops. Check back soon or join our mailing list to be notified.</p>
    <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Mailing List <span class="arr">→</span></a>
  </div>
</div>

</div></section>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Host With Us</span>
<h2 class="rv d1">Want to bring Global Mothers United to your community?</h2>
<p class="rv d2">We partner with organisations to host events, workshops, and community nights. Reach out to explore what we can build together.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Partner With Us <span class="arr">→</span></a></div>
</div></section>

<footer><div class="wrap foot-wrap"><div class="foot-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span>Global Mothers United</span></div><div class="foot-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div></div><div class="wrap foot-copy">© 2026 Global Mothers United.</div></footer>
<script>const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add("in");io.unobserve(e.target)}})},{threshold:.1});document.querySelectorAll(".rv").forEach(el=>io.observe(el));</script>
<?php wp_footer(); ?>
</body></html>
