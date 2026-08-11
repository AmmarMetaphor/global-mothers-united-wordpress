<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Global Mothers United — Empowering Mothers Worldwide</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,ital,wght@9..144,0,700;9..144,1,400;9..144,1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Spline+Sans+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  --green:#1DB954;--green-deep:#0F9B45;--green-mid:#16A34A;
  --purple:#6B21A8;--purple-soft:#7C3AED;
  --cream:#F9FAF7;--cream-deep:#F0F4EC;
  --ink:#0D1F0F;--slate:#4A6350;
  --hairline:rgba(13,31,15,.1);--hairline-light:rgba(249,250,247,.12);
  --ease:cubic-bezier(.32,.72,0,1);
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{background:var(--cream);color:var(--ink);font-family:'Plus Jakarta Sans',sans-serif;font-size:16px;line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}
::selection{background:var(--green);color:#fff}
.rv{opacity:0;transform:translateY(20px);transition:opacity .8s var(--ease),transform .8s var(--ease)}
.rv.d1{transition-delay:.12s}.rv.d2{transition-delay:.24s}
.rv.in{opacity:1;transform:none}
@media(prefers-reduced-motion:reduce){.rv{opacity:1;transform:none;transition:none}}

/* NAV */
nav{position:fixed;top:18px;left:50%;transform:translateX(-50%);z-index:40;display:flex;align-items:center;gap:4px;background:rgba(249,250,247,.88);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);border:1px solid var(--hairline);border-radius:999px;padding:7px 8px 7px 20px;white-space:nowrap;box-shadow:0 4px 24px -8px rgba(13,31,15,.1)}
.nav-logo{display:flex;align-items:center;gap:9px;text-decoration:none}
.nav-logo img{width:28px;height:28px;border-radius:999px;object-fit:cover}
.nav-wordmark{font-family:'Fraunces',serif;font-weight:700;font-size:13.5px;color:var(--ink)}
.nav-links{display:flex;gap:1px;margin:0 4px}
.nav-links a{color:var(--slate);text-decoration:none;font-size:13px;font-weight:500;padding:5px 10px;border-radius:999px;transition:all .3s var(--ease)}
.nav-links a:hover,.nav-links a.on{color:var(--ink);background:rgba(13,31,15,.06)}
.btn{display:inline-flex;align-items:center;gap:8px;border:none;border-radius:999px;cursor:pointer;font-family:'Plus Jakarta Sans',sans-serif;font-weight:600;font-size:14px;text-decoration:none;transition:transform .4s var(--ease),background .3s}
.btn:active{transform:scale(.97)}
.arr{width:26px;height:26px;border-radius:999px;display:flex;align-items:center;justify-content:center;font-size:12px;transition:transform .4s var(--ease)}
.btn:hover .arr{transform:translate(2px,-1px) scale(1.06)}
.btn-g{background:var(--green-mid);color:#fff;padding:9px 7px 9px 17px}.btn-g:hover{background:var(--green-deep)}.btn-g .arr{background:rgba(255,255,255,.2)}
.btn-p{background:var(--purple-soft);color:#fff;padding:9px 7px 9px 17px}.btn-p:hover{background:var(--purple)}.btn-p .arr{background:rgba(255,255,255,.2)}
.btn-ghost{background:transparent;color:var(--ink);border:1px solid var(--hairline);padding:9px 18px}.btn-ghost:hover{background:var(--cream-deep)}
.wrap{max-width:1160px;margin:0 auto;padding:0 24px}
.eyebrow{display:inline-flex;align-items:center;gap:6px;border:1px solid var(--hairline);border-radius:999px;padding:4px 12px;font-size:10px;letter-spacing:.2em;text-transform:uppercase;font-weight:700;margin-bottom:18px}
.eyebrow.g{color:var(--green-mid);background:rgba(29,185,84,.07);border-color:rgba(29,185,84,.2)}
.eyebrow.p{color:var(--purple-soft);background:rgba(124,58,237,.07);border-color:rgba(124,58,237,.2)}
h1{font-family:'Fraunces',serif;font-weight:700;font-size:clamp(40px,5vw,70px);line-height:1.05;letter-spacing:-.03em}
h1 em{font-style:italic;font-weight:400;color:var(--green-mid)}
h2{font-family:'Fraunces',serif;font-weight:700;font-size:clamp(26px,3.2vw,44px);line-height:1.1;letter-spacing:-.025em}
h2 em{font-style:italic;font-weight:400;color:var(--purple-soft)}
h3{font-family:'Fraunces',serif;font-weight:600;font-size:20px;letter-spacing:-.01em}
section{padding:80px 0}

/* HERO */
header{padding:130px 0 70px;position:relative;overflow:hidden}
header::after{content:"";position:absolute;top:-160px;right:-160px;width:560px;height:560px;border-radius:999px;background:radial-gradient(circle,rgba(29,185,84,.13) 0%,transparent 70%);pointer-events:none}
header::before{content:"";position:absolute;bottom:-100px;left:-60px;width:380px;height:380px;border-radius:999px;background:radial-gradient(circle,rgba(124,58,237,.08) 0%,transparent 70%);pointer-events:none}
.hero-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:52px;align-items:center}
.hero-sub{margin-top:18px;color:var(--slate);font-size:17.5px;max-width:46ch}
.hero-cta{margin-top:30px;display:flex;gap:10px;flex-wrap:wrap}

/* BENTO — tighter */
.bento-wrap{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:1.75rem;padding:7px}
.bento-inner{border-radius:calc(1.75rem - 7px);overflow:hidden;background:var(--cream)}
.bento{display:grid;grid-template-columns:1fr 1fr;gap:7px;padding:7px}
.bc{padding:22px;border-radius:calc(1.25rem - 3px)}
.bc-big{grid-column:1/-1;background:var(--ink);position:relative;overflow:hidden}
.bc-big::after{content:"";position:absolute;top:-40px;right:-40px;width:160px;height:160px;border-radius:999px;background:radial-gradient(circle,rgba(29,185,84,.28),transparent 70%)}
.bc-big .num{font-family:'Fraunces',serif;font-weight:700;font-size:42px;letter-spacing:-.03em;color:var(--green);position:relative;z-index:1}
.bc-big p{color:rgba(255,255,255,.58);font-size:13.5px;max-width:26ch;margin-top:5px;position:relative;z-index:1}
.bc-g{background:linear-gradient(135deg,var(--green-mid),var(--green-deep));color:#fff}
.bc-p{background:linear-gradient(135deg,var(--purple-soft),var(--purple));color:#fff}
.bc-g .num,.bc-p .num{font-family:'Fraunces',serif;font-weight:700;font-size:32px;letter-spacing:-.03em}
.bc-g p,.bc-p p{font-size:12.5px;opacity:.85;margin-top:4px}

/* MISSION */
.mission{background:var(--ink);color:#fff;position:relative;overflow:hidden}
.mission::after{content:"";position:absolute;top:0;right:0;width:480px;height:100%;background:radial-gradient(ellipse at 100% 50%,rgba(29,185,84,.12),transparent 60%);pointer-events:none}
.mission-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;position:relative;z-index:1}
.mission h2{color:#fff;max-width:17ch}
.mission .lede{color:rgba(255,255,255,.6);margin-top:16px;font-size:17px;max-width:46ch}
.pillars{display:flex;flex-direction:column}
.pill{padding:18px 0;border-bottom:1px solid var(--hairline-light);display:flex;gap:14px;align-items:flex-start}
.pill:first-child{border-top:1px solid var(--hairline-light)}
.pill-icon{width:38px;height:38px;border-radius:10px;background:rgba(29,185,84,.12);border:1px solid rgba(29,185,84,.2);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
.pill h3{color:#fff;font-size:16px;margin-bottom:2px}
.pill p{color:rgba(255,255,255,.55);font-size:13.5px}

/* PROGRAMS — photo cards */
.prog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:44px}
.pc-shell{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:1.75rem;padding:7px;transition:transform .4s var(--ease),box-shadow .4s var(--ease);overflow:hidden}
.pc-shell:hover{transform:translateY(-4px);box-shadow:0 18px 40px -18px rgba(13,31,15,.14)}
.pc{background:var(--cream);border-radius:calc(1.75rem - 7px);height:100%;display:flex;flex-direction:column;overflow:hidden}
.pc-photo{width:100%;aspect-ratio:16/10;object-fit:cover;display:block}
.pc-photo-placeholder{width:100%;aspect-ratio:16/10;display:flex;align-items:center;justify-content:center;font-size:32px}
.pc-body{padding:22px;display:flex;flex-direction:column;gap:10px;flex:1}
.ptag{display:inline-block;padding:3px 11px;border-radius:999px;font-size:10.5px;font-weight:600;letter-spacing:.06em;text-transform:uppercase}
.ptag-g{background:rgba(29,185,84,.1);color:var(--green-mid)}
.ptag-p{background:rgba(124,58,237,.09);color:var(--purple-soft)}
.pc-body p{color:var(--slate);font-size:14px;flex:1}

/* STATS */
.stats{background:var(--cream-deep);border-top:1px solid var(--hairline);border-bottom:1px solid var(--hairline);padding:0}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);border-left:1px solid var(--hairline)}
.st{padding:38px 28px;border-right:1px solid var(--hairline)}
.st .num{font-family:'Fraunces',serif;font-weight:700;font-size:clamp(30px,3.4vw,46px);letter-spacing:-.03em;line-height:1}
.st .num.g{color:var(--green-mid)}.st .num.p{color:var(--purple-soft)}
.st p{color:var(--slate);font-size:13.5px;margin-top:6px;max-width:20ch}

/* EVENTS */
.ev-list{margin-top:40px;border-top:1px solid var(--hairline)}
.ev-row{display:grid;grid-template-columns:96px 1fr auto;gap:22px;align-items:center;padding:22px 0;border-bottom:1px solid var(--hairline);transition:background .25s var(--ease)}
.ev-row:hover{background:rgba(29,185,84,.04)}
.ev-date{font-family:'Spline Sans Mono',monospace;font-size:11px;letter-spacing:.08em;color:var(--slate)}
.ev-date strong{display:block;font-family:'Fraunces',serif;font-weight:700;font-size:24px;letter-spacing:-.02em;color:var(--ink);line-height:1}
.ev-row h3{font-size:16.5px;margin-bottom:2px}
.ev-row p{color:var(--slate);font-size:13.5px}
.ebadge{padding:4px 13px;border-radius:999px;font-size:11px;font-weight:600;white-space:nowrap}
.ebadge-g{background:rgba(29,185,84,.1);color:var(--green-mid)}
.ebadge-p{background:rgba(124,58,237,.09);color:var(--purple-soft)}

/* PARTNER BAND */
.partner-band{background:var(--cream-deep);border-top:1px solid var(--hairline);border-bottom:1px solid var(--hairline);padding:60px 0;text-align:center}

/* FINAL CTA */
.final{background:var(--ink);color:#fff;text-align:center;position:relative;overflow:hidden}
.final::after{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(29,185,84,.16),transparent 55%);pointer-events:none}
.final-inner{position:relative;z-index:1}
.final h2{color:#fff;margin:0 auto;max-width:22ch}
.final p{color:rgba(255,255,255,.6);margin:16px auto 32px;max-width:46ch}
.final-cta{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}

footer{background:var(--ink);border-top:1px solid var(--hairline-light);padding:32px 0}
.foot-wrap{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}
.foot-logo{display:flex;align-items:center;gap:10px}
.foot-logo img{width:32px;height:32px;border-radius:999px;object-fit:cover}
.foot-logo span{font-family:'Fraunces',serif;font-weight:600;font-size:14px;color:rgba(255,255,255,.9)}
.foot-links{display:flex;gap:18px;flex-wrap:wrap}
.foot-links a{color:rgba(255,255,255,.5);text-decoration:none;font-size:13px;transition:color .3s}
.foot-links a:hover{color:rgba(255,255,255,.9)}
.foot-copy{font-size:12px;color:rgba(255,255,255,.3);margin-top:20px;padding-top:16px;border-top:1px solid var(--hairline-light);text-align:center}

@media(max-width:920px){
  .nav-links{display:none}
  .hero-grid,.mission-grid{grid-template-columns:1fr;gap:36px}
  .prog-grid{grid-template-columns:1fr}
  .stats-grid{grid-template-columns:1fr 1fr}
  .bento{grid-template-columns:1fr}.bc-big{grid-column:auto}
  header{padding:120px 0 60px}section{padding:60px 0}
  .ev-row{grid-template-columns:72px 1fr;gap:12px}.ebadge{display:none}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
  <a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU">
    <span class="nav-wordmark">Global Mothers United</span>
  </a>
  <div class="nav-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="on">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div>
  <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a>
</nav>

<!-- HERO -->
<header>
  <div class="wrap hero-grid">
    <div>
      <span class="eyebrow g rv">🌍 Global Mothers United</span>
      <h1 class="rv d1">Mothers who <em>rise</em> together, lift the world.</h1>
      <p class="hero-sub rv d2">A global community supporting mothers through programs, partnerships, and resources — from military families to mothers rebuilding their lives.</p>
      <div class="hero-cta rv d2">
        <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a>
        <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Our Programs</a>
      </div>
    </div>
    <div class="bento-wrap rv d1">
      <div class="bento-inner">
        <div class="bento">
          <div class="bc bc-big">
            <div class="num">10,000+</div>
            <p>Mothers supported across the US and globally through our programs and partner network.</p>
          </div>
          <div class="bc bc-g"><div class="num">50+</div><p>Community Partners</p></div>
          <div class="bc bc-p"><div class="num">12</div><p>Active Programs</p></div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- MISSION -->
<section class="mission">
  <div class="wrap mission-grid">
    <div>
      <span class="eyebrow g rv" style="border-color:rgba(29,185,84,.25)">Our Mission</span>
      <h2 class="rv d1">Every mother deserves a community that shows up.</h2>
      <p class="lede rv d2">We build programs, forge partnerships, and create pathways — for military mothers, mothers rebuilding after hardship, and every mother in between.</p>
      <div class="rv d2" style="margin-top:26px"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Explore Programs <span class="arr">→</span></a></div>
    </div>
    <div class="pillars rv d1">
      <div class="pill"><div class="pill-icon">💪</div><div><h3>Empowerment</h3><p>Financial literacy, leadership skills, and real pathways from hardship to stability.</p></div></div>
      <div class="pill"><div class="pill-icon">🤝</div><div><h3>Community</h3><p>A global network of mothers who show up for each other, every stage of life.</p></div></div>
      <div class="pill"><div class="pill-icon">🎖️</div><div><h3>Military Families</h3><p>Dedicated support for mothers carrying the weight of military life.</p></div></div>
      <div class="pill"><div class="pill-icon">🌱</div><div><h3>Partnerships</h3><p>Working with Veterans Affairs, CPAs, NCATA, and community organisations.</p></div></div>
    </div>
  </div>
</section>

<!-- PROGRAMS -->
<section>
  <div class="wrap">
    <span class="eyebrow g rv">Our Programs</span>
    <h2 class="rv d1">Built for the mothers who need it <em>most.</em></h2>
    <div class="prog-grid">

      <!-- Military Love & War — military stock photo -->
      <div class="pc-shell rv">
        <div class="pc">
          <img
            class="pc-photo"
            src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=640&q=80&auto=format&fit=crop"
            alt="Military mothers community"
            onerror="this.style.display='none'">
          <div class="pc-body">
            <span class="ptag ptag-g">Military</span>
            <h3>Military Love & War</h3>
            <p>Support, resources, and community for mothers carrying the weight of military family life.</p>
            <a class="btn btn-g" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>" style="font-size:13px;padding:7px 6px 7px 15px;align-self:flex-start;margin-top:auto">Learn More <span class="arr" style="width:22px;height:22px;font-size:10px">→</span></a>
          </div>
        </div>
      </div>

      <!-- From Homeless to Billionaires — women rebuilding / empowerment stock photo -->
      <div class="pc-shell rv d1">
        <div class="pc">
          <img
            class="pc-photo"
            src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=640&q=80&auto=format&fit=crop"
            alt="Women financial empowerment"
            onerror="this.style.display='none'">
          <div class="pc-body">
            <span class="ptag ptag-p">Empowerment</span>
            <h3>From Homeless to Billionaires</h3>
            <p>Helping mothers rebuild financial confidence and community — from the ground up.</p>
            <a class="btn btn-p" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>" style="font-size:13px;padding:7px 6px 7px 15px;align-self:flex-start;margin-top:auto">Learn More <span class="arr" style="width:22px;height:22px;font-size:10px">→</span></a>
          </div>
        </div>
      </div>

      <!-- Inner Circle 10X — women leadership circle stock photo -->
      <div class="pc-shell rv d2">
        <div class="pc">
          <img
            class="pc-photo"
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=640&q=80&auto=format&fit=crop"
            alt="Women leadership group"
            onerror="this.style.display='none'">
          <div class="pc-body">
            <span class="ptag ptag-g">Leadership</span>
            <h3>Inner Circle 10X</h3>
            <p>For mothers ready to scale their impact, income, and influence. October cohort now open.</p>
            <a class="btn btn-g" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>" style="font-size:13px;padding:7px 6px 7px 15px;align-self:flex-start;margin-top:auto">Learn More <span class="arr" style="width:22px;height:22px;font-size:10px">→</span></a>
          </div>
        </div>
      </div>

    </div>
    <div style="margin-top:26px;text-align:center" class="rv"><a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">View All Programs</a></div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="wrap">
    <div class="stats-grid">
      <div class="st rv"><div class="num g">10K+</div><p>Mothers supported through our programs</p></div>
      <div class="st rv d1"><div class="num p">50+</div><p>Nonprofit and community partners nationwide</p></div>
      <div class="st rv"><div class="num g">12</div><p>Active programs across the US</p></div>
      <div class="st rv d1"><div class="num p">3</div><p>Flagship programs: Military, Empowerment, Leadership</p></div>
    </div>
  </div>
</div>

<!-- EVENTS -->
<section>
  <div class="wrap">
    <span class="eyebrow g rv">Upcoming Events</span>
    <h2 class="rv d1">Where we show up <em>together.</em></h2>
    <div class="ev-list">
      <div class="ev-row rv">
        <div class="ev-date"><strong>23</strong>Jul 2026</div>
        <div><h3>Military Love & War — Community Night</h3><p>A space for military mothers to connect, share, and find support.</p></div>
        <span class="ebadge ebadge-g">Free</span>
      </div>
      <div class="ev-row rv d1">
        <div class="ev-date"><strong>01</strong>Oct 2026</div>
        <div><h3>Inner Circle 10X — October Cohort Opens</h3><p>Applications open for the flagship leadership program. Limited places.</p></div>
        <span class="ebadge ebadge-p">Apply</span>
      </div>
      <div class="ev-row rv d2">
        <div class="ev-date"><strong>TBA</strong></div>
        <div><h3>From Homeless to Billionaires — Workshop</h3><p>Full-day workshop. Veterans Affairs and CPA partners attending. Limited seats.</p></div>
        <span class="ebadge ebadge-g">Register</span>
      </div>
    </div>
    <div style="margin-top:26px" class="rv"><a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/events/' ) ); ?>">See Full Calendar →</a></div>
  </div>
</section>

<!-- PARTNER BAND -->
<div class="partner-band">
  <div class="wrap">
    <span class="eyebrow p rv">Partners & Collaborators</span>
    <h2 class="rv d1" style="margin:0 auto;max-width:22ch;text-align:center">We work with organisations that share our values.</h2>
    <p class="rv d2" style="color:var(--slate);margin:14px auto 30px;max-width:50ch;text-align:center">Veterans Affairs, CPAs, NCATA, Wadsworth community organisations, and more.</p>
    <div class="rv" style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Become a Partner <span class="arr">→</span></a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a>
    </div>
  </div>
</div>

<!-- FINAL CTA -->
<section class="final">
  <div class="wrap final-inner">
    <span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Join the Movement</span>
    <h2 class="rv d1">There is a place for <em>you</em> here.</h2>
    <p class="rv d2">Whether you are a mother seeking community, an organisation wanting to partner, or someone who wants to give back — we want to hear from you.</p>
    <div class="final-cta rv">
      <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a>
      <a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a>
    </div>
  </div>
</section>

<footer>
  <div class="wrap foot-wrap">
    <div class="foot-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span>Global Mothers United</span></div>
    <div class="foot-links">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a>
      <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a>
      <a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a>
      <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
    </div>
  </div>
  <div class="wrap foot-copy">© 2026 Global Mothers United. All rights reserved.</div>
</footer>

<script>
const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.1});
document.querySelectorAll('.rv').forEach(el=>io.observe(el));
</script>
<?php wp_footer(); ?>
</body>
</html>
