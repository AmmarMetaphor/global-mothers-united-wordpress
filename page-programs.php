<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Programs — Global Mothers United</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,ital,wght@9..144,0,700;9..144,1,400;9..144,1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Spline+Sans+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{--green:#1DB954;--green-deep:#0F9B45;--green-mid:#16A34A;--purple:#6B21A8;--purple-soft:#7C3AED;--cream:#F9FAF7;--cream-deep:#F0F4EC;--ink:#0D1F0F;--slate:#4A6350;--hairline:rgba(13,31,15,.1);--ease:cubic-bezier(.32,.72,0,1)}
*{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{background:var(--cream);color:var(--ink);font-family:"Plus Jakarta Sans",sans-serif;font-size:17px;line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}::selection{background:var(--green);color:#fff}
.rv{opacity:0;transform:translateY(24px);filter:blur(4px);transition:opacity .9s var(--ease),transform .9s var(--ease),filter .9s var(--ease)}.rv.d1{transition-delay:.15s}.rv.d2{transition-delay:.3s}.rv.in{opacity:1;transform:translateY(0);filter:blur(0)}@media(prefers-reduced-motion:reduce){.rv{opacity:1;transform:none;filter:none;transition:none}}
nav{position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:40;display:flex;align-items:center;gap:6px;background:rgba(249,250,247,.85);backdrop-filter:blur(20px);border:1px solid var(--hairline);border-radius:999px;padding:8px 10px 8px 22px;white-space:nowrap;box-shadow:0 4px 30px -8px rgba(13,31,15,.12)}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none}.nav-logo img{width:30px;height:30px;border-radius:999px;object-fit:cover}.nav-wordmark{font-family:"Fraunces",serif;font-weight:700;font-size:14px;color:var(--ink)}
.nav-links{display:flex;gap:2px;margin:0 6px}.nav-links a{color:var(--slate);text-decoration:none;font-size:13px;font-weight:500;padding:6px 11px;border-radius:999px;transition:all .4s var(--ease)}.nav-links a:hover,.nav-links a.on{color:var(--ink);background:rgba(13,31,15,.06)}
.btn{display:inline-flex;align-items:center;gap:8px;border:none;border-radius:999px;cursor:pointer;font-family:"Plus Jakarta Sans",sans-serif;font-weight:600;font-size:14px;text-decoration:none;transition:transform .5s var(--ease),background .4s var(--ease)}.btn:active{transform:scale(.97)}.arr{width:28px;height:28px;border-radius:999px;display:flex;align-items:center;justify-content:center;font-size:12px;transition:transform .5s var(--ease)}.btn:hover .arr{transform:translate(2px,-1px) scale(1.08)}
.btn-g{background:var(--green-mid);color:#fff;padding:10px 8px 10px 18px;box-shadow:0 4px 20px -6px rgba(22,163,74,.5)}.btn-g:hover{background:var(--green-deep)}.btn-g .arr{background:rgba(255,255,255,.2)}
.btn-p{background:var(--purple-soft);color:#fff;padding:10px 8px 10px 18px;box-shadow:0 4px 20px -6px rgba(124,58,237,.45)}.btn-p:hover{background:var(--purple)}.btn-p .arr{background:rgba(255,255,255,.2)}
.btn-ghost{background:transparent;color:var(--ink);border:1px solid var(--hairline);padding:10px 20px}.btn-ghost:hover{background:var(--cream-deep)}
.wrap{max-width:1200px;margin:0 auto;padding:0 28px}.eyebrow{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--hairline);border-radius:999px;padding:5px 14px;font-size:10px;letter-spacing:.22em;text-transform:uppercase;font-weight:700;margin-bottom:24px}
.eyebrow.g{color:var(--green-mid);background:rgba(29,185,84,.07);border-color:rgba(29,185,84,.2)}.eyebrow.p{color:var(--purple-soft);background:rgba(124,58,237,.07);border-color:rgba(124,58,237,.2)}
h1{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(40px,5vw,68px);line-height:1.05;letter-spacing:-.03em}h1 em{font-style:italic;font-weight:400;color:var(--green-mid)}
h2{font-family:"Fraunces",serif;font-weight:700;font-size:clamp(28px,3.2vw,42px);line-height:1.1;letter-spacing:-.025em}h2 em{font-style:italic;color:var(--purple-soft)}
h3{font-family:"Fraunces",serif;font-weight:600;font-size:24px;letter-spacing:-.01em}section{padding:90px 0}header.page{padding:155px 0 50px}
.prog-block{margin-top:30px;border-top:1px solid var(--hairline)}
.prog-row{display:grid;grid-template-columns:.9fr 1.1fr;gap:70px;align-items:center;padding:70px 0;border-bottom:1px solid var(--hairline)}
.prog-row.rev{direction:rtl}.prog-row.rev>*{direction:ltr}
.prog-visual{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:2rem;padding:8px}
.prog-visual-inner{border-radius:calc(2rem - 8px);aspect-ratio:4/3;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:16px;position:relative;overflow:hidden}
.prog-visual-inner.g{background:linear-gradient(135deg,rgba(29,185,84,.15),rgba(15,155,69,.08))}
.prog-visual-inner.p{background:linear-gradient(135deg,rgba(124,58,237,.12),rgba(107,33,168,.06))}
.prog-visual-inner .icon{font-size:64px}
.prog-visual-inner .tag{font-family:"Spline Sans Mono",monospace;font-size:11px;letter-spacing:.18em;text-transform:uppercase}
.prog-visual-inner .tag.g{color:var(--green-mid)}.prog-visual-inner .tag.p{color:var(--purple-soft)}
.ptag{display:inline-block;padding:4px 12px;border-radius:999px;font-size:11px;font-weight:600;letter-spacing:.06em;text-transform:uppercase;margin-bottom:14px}
.ptag-g{background:rgba(29,185,84,.1);color:var(--green-mid)}.ptag-p{background:rgba(124,58,237,.09);color:var(--purple-soft)}
.prog-body h3{font-size:30px;margin-bottom:14px}.prog-body p{color:var(--slate);margin-bottom:14px;max-width:52ch}
.prog-detail{display:flex;flex-direction:column;gap:0;margin:20px 0;border-top:1px solid var(--hairline)}
.pd{display:flex;gap:14px;padding:12px 0;border-bottom:1px solid var(--hairline);font-size:14.5px;color:var(--slate)}
.pd strong{color:var(--ink);font-weight:600;min-width:90px}
.fin{background:var(--ink);color:#fff;text-align:center;padding:110px 0;position:relative;overflow:hidden}
.fin::after{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(29,185,84,.17),transparent 55%);pointer-events:none}
.fin h2{color:#fff;margin:0 auto;max-width:22ch;position:relative;z-index:1}.fin p{color:rgba(255,255,255,.62);margin:18px auto 36px;max-width:46ch;position:relative;z-index:1}.fin-cta{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
footer{background:var(--ink);border-top:1px solid rgba(249,250,247,.12);padding:40px 0}.foot-wrap{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}.foot-logo{display:flex;align-items:center;gap:12px}.foot-logo img{width:34px;height:34px;border-radius:999px;object-fit:cover}.foot-logo span{font-family:"Fraunces",serif;font-weight:600;font-size:15px;color:rgba(255,255,255,.9)}.foot-links{display:flex;gap:18px;flex-wrap:wrap}.foot-links a{color:rgba(255,255,255,.5);text-decoration:none;font-size:13px;transition:color .3s}.foot-links a:hover{color:rgba(255,255,255,.9)}.foot-copy{font-size:12px;color:rgba(255,255,255,.32);margin-top:24px;padding-top:18px;border-top:1px solid rgba(249,250,247,.12);text-align:center}
@media(max-width:920px){.nav-links{display:none}.prog-row{grid-template-columns:1fr;gap:36px;padding:50px 0}.prog-row.rev{direction:ltr}header.page{padding:136px 0 30px}section{padding:70px 0}}
</style><?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav><a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span class="nav-wordmark">Global Mothers United</span></a><div class="nav-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>" class="on">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a></nav>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Our Programs</span>
<h1 class="rv d1">Programs built for the mothers <em>who need it most.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:52ch;margin-top:18px">Three flagship programs. Each one built around a different chapter of a mother's life — and designed to meet her exactly where she is.</p>
</div></header>

<section><div class="wrap">
<div class="prog-block">

<div class="prog-row rv">
<div class="prog-visual"><div class="prog-visual-inner g"><div class="icon">🎖️</div><span class="tag g">Military Love & War</span></div></div>
<div class="prog-body">
<span class="ptag ptag-g">Military Support</span>
<h3>Military Love & War</h3>
<p>Behind every service member is a mother holding the family together. This program is built for her — the mother navigating deployments, reunions, loss, and the unique emotional weight of military life.</p>
<p>We partner with Veterans Affairs, community organizations, and peer support networks to ensure no military mother faces it alone.</p>
<div class="prog-detail">
<div class="pd"><strong>Who it's for</strong>Mothers in active-duty, veteran, and military families</div>
<div class="pd"><strong>Support</strong>Peer groups, resources, partner referrals, community events</div>
<div class="pd"><strong>Partners</strong>Veterans Affairs, community organisations</div>
<div class="pd"><strong>Cost</strong>Free to attend</div>
</div>
<a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a>
</div>
</div>

<div class="prog-row rev rv">
<div class="prog-visual"><div class="prog-visual-inner p"><div class="icon">🏠</div><span class="tag p">From Homeless to Billionaires</span></div></div>
<div class="prog-body">
<span class="ptag ptag-p">Empowerment</span>
<h3>From Homeless to Billionaires</h3>
<p>A transformational program for mothers who are rebuilding — from housing instability, financial hardship, or crisis — into stability, confidence, and community.</p>
<p>We work alongside CPAs, financial coaches, and housing partners to give every mother a concrete path forward, not just inspiration.</p>
<div class="prog-detail">
<div class="pd"><strong>Who it's for</strong>Mothers rebuilding after hardship or housing instability</div>
<div class="pd"><strong>Support</strong>Financial literacy, CPA referrals, peer coaching, workshops</div>
<div class="pd"><strong>Partners</strong>CPA network, Wadsworth community organisations</div>
<div class="pd"><strong>Cost</strong>Sliding scale / scholarship available</div>
</div>
<a class="btn btn-p" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Apply Now <span class="arr">→</span></a>
</div>
</div>

<div class="prog-row rv">
<div class="prog-visual"><div class="prog-visual-inner g"><div class="icon">👑</div><span class="tag g">Inner Circle 10X</span></div></div>
<div class="prog-body">
<span class="ptag ptag-g">Leadership</span>
<h3>Inner Circle 10X</h3>
<p>An elite leadership and community program for mothers who are ready to scale — their income, their influence, and their impact. Built around a $100K mindset and the support of a high-calibre inner circle.</p>
<p>Monthly cohorts. October 1st intake opens next. Limited places.</p>
<div class="prog-detail">
<div class="pd"><strong>Who it's for</strong>Mothers scaling their business or leadership presence</div>
<div class="pd"><strong>Format</strong>Monthly cohort, Zoom sessions, inner circle community</div>
<div class="pd"><strong>Intake</strong>October 1 — next cohort opens</div>
<div class="pd"><strong>Investment</strong>Contact us for details</div>
</div>
<a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Express Interest <span class="arr">→</span></a>
</div>
</div>

</div></div></section>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Get Started</span>
<h2 class="rv d1">Not sure which program is right for you?</h2>
<p class="rv d2">Reach out and we will help you find the right fit — no pressure, just a conversation.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a><a class="btn btn-p" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a></div>
</div></section>

<footer><div class="wrap foot-wrap"><div class="foot-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span>Global Mothers United</span></div><div class="foot-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div></div><div class="wrap foot-copy">© 2026 Global Mothers United.</div></footer>
<script>const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add("in");io.unobserve(e.target)}})},{threshold:.1});document.querySelectorAll(".rv").forEach(el=>io.observe(el));</script>
<?php wp_footer(); ?>
</body></html>
