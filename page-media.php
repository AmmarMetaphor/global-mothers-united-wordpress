<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Media — Global Mothers United</title>
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
h3{font-family:"Fraunces",serif;font-weight:600;font-size:20px;letter-spacing:-.01em}
section{padding:90px 0}header.page{padding:155px 0 50px}
.divider{display:flex;align-items:center;gap:20px;margin-bottom:40px}.divider .line{flex:1;height:1px;background:var(--hairline)}
.pod-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.pod-shell{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:2rem;padding:8px;transition:transform .5s var(--ease)}.pod-shell:hover{transform:translateY(-3px)}
.pod{background:var(--cream);border-radius:calc(2rem - 8px);padding:28px;display:flex;gap:18px;box-shadow:inset 0 1px 1px rgba(255,255,255,.9);height:100%}
.pod-thumb{width:70px;height:70px;border-radius:14px;background:var(--ink);display:flex;align-items:center;justify-content:center;font-size:24px;flex-shrink:0;position:relative;overflow:hidden}
.pod-body .show{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.18em;text-transform:uppercase;color:var(--green-mid);margin-bottom:6px}
.pod-body h3{font-size:16px;margin-bottom:6px}.pod-body p{color:var(--slate);font-size:14px;margin-bottom:12px}
.pod-actions{display:flex;gap:8px;flex-wrap:wrap}
.ptag{padding:5px 12px;border-radius:999px;font-size:12px;font-weight:600;border:1px solid var(--hairline);color:var(--slate);text-decoration:none;transition:all .3s var(--ease)}.ptag:hover{background:var(--ink);color:#fff;border-color:var(--ink)}
.ptag.g{background:rgba(29,185,84,.1);color:var(--green-mid);border-color:rgba(29,185,84,.2)}.ptag.g:hover{background:var(--green-mid);color:#fff}
.vid-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px}
.vid-shell{background:rgba(13,31,15,.04);border:1px solid var(--hairline);border-radius:2rem;padding:8px;transition:transform .5s var(--ease)}.vid-shell:hover{transform:translateY(-3px)}
.vid{background:var(--cream);border-radius:calc(2rem - 8px);overflow:hidden;box-shadow:inset 0 1px 1px rgba(255,255,255,.9)}
.vid-thumb{aspect-ratio:16/9;background:var(--ink);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;position:relative}
.vid-thumb.g{background:linear-gradient(135deg,#1A3020,#0D2B14)}.vid-thumb.p{background:linear-gradient(135deg,#2D1B5A,#1A0D40)}
.play{width:50px;height:50px;border-radius:999px;background:rgba(29,185,84,.85);display:flex;align-items:center;justify-content:center;font-size:16px;color:#fff}
.vid-ph{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,255,255,.4)}
.vid-body{padding:20px 22px 24px}.vid-body .src{font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.15em;text-transform:uppercase;color:var(--green-mid);margin-bottom:8px}
.vid-body h3{font-size:16px;margin-bottom:6px}.vid-body p{color:var(--slate);font-size:13.5px;margin-bottom:12px}
.press-list{border-top:1px solid var(--hairline)}
.press-row{display:grid;grid-template-columns:150px 1fr auto;gap:24px;align-items:center;padding:24px 0;border-bottom:1px solid var(--hairline);transition:background .3s var(--ease)}.press-row:hover{background:rgba(29,185,84,.03)}
.press-pub{font-family:"Fraunces",serif;font-weight:700;font-size:16px}.press-pub span{display:block;font-family:"Spline Sans Mono",monospace;font-size:10px;letter-spacing:.16em;text-transform:uppercase;color:var(--green-mid);font-weight:400;margin-bottom:3px}
.press-row h3{font-size:16px;margin-bottom:4px}.press-row p{color:var(--slate);font-size:14px}
.press-date{font-family:"Spline Sans Mono",monospace;font-size:11px;color:var(--slate);white-space:nowrap}
.speak-band{background:var(--cream-deep);border-top:1px solid var(--hairline);border-bottom:1px solid var(--hairline);padding:80px 0;text-align:center}
.fin{background:var(--ink);color:#fff;text-align:center;padding:100px 0;position:relative;overflow:hidden}.fin::after{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(29,185,84,.17),transparent 55%);pointer-events:none}.fin h2{color:#fff;margin:0 auto;max-width:22ch;position:relative;z-index:1}.fin p{color:rgba(255,255,255,.62);margin:18px auto 36px;max-width:46ch;position:relative;z-index:1}.fin-cta{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
footer{background:var(--ink);border-top:1px solid rgba(249,250,247,.12);padding:40px 0}.foot-wrap{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}.foot-logo{display:flex;align-items:center;gap:12px}.foot-logo img{width:34px;height:34px;border-radius:999px;object-fit:cover}.foot-logo span{font-family:"Fraunces",serif;font-weight:600;font-size:15px;color:rgba(255,255,255,.9)}.foot-links{display:flex;gap:18px;flex-wrap:wrap}.foot-links a{color:rgba(255,255,255,.5);text-decoration:none;font-size:13px;transition:color .3s}.foot-links a:hover{color:rgba(255,255,255,.9)}.foot-copy{font-size:12px;color:rgba(255,255,255,.32);margin-top:24px;padding-top:18px;border-top:1px solid rgba(249,250,247,.12);text-align:center}
@media(max-width:920px){.nav-links{display:none}.pod-grid,.vid-grid{grid-template-columns:1fr}.press-row{grid-template-columns:1fr;gap:10px}.press-date{display:none}header.page{padding:136px 0 30px}section{padding:70px 0}}
</style><?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav><a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span class="nav-wordmark">Global Mothers United</span></a><div class="nav-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" class="on">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Us <span class="arr">→</span></a></nav>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Media</span>
<h1 class="rv d1">The voice behind <em>the movement.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:52ch;margin-top:18px">Podcast appearances, video interviews, and press features from Global Mothers United — in one place.</p>
</div></header>

<section><div class="wrap">
<div class="divider rv"><span class="eyebrow g" style="margin:0">Podcast Episodes</span><div class="line"></div></div>
<div class="pod-grid">
  <div class="pod-shell rv"><div class="pod">
    <div class="pod-thumb" style="background:linear-gradient(135deg,#0F9B45,#0D1F0F)">🎙️</div>
    <div class="pod-body">
      <div class="show">Podcast Name Here</div>
      <h3>Episode title — add your first appearance</h3>
      <p>Show name, episode number, and a brief description of what you discussed.</p>
      <div class="pod-actions"><a class="ptag g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">▶ Listen</a><a class="ptag" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Spotify</a><a class="ptag" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apple</a></div>
    </div>
  </div></div>
  <div class="pod-shell rv d1"><div class="pod" style="border:2px dashed var(--hairline);background:rgba(13,31,15,.02);box-shadow:none">
    <div class="pod-thumb" style="background:rgba(13,31,15,.06);border:1px dashed var(--hairline)">🎙️</div>
    <div class="pod-body">
      <div class="show" style="color:var(--slate)">Add Podcast Episode</div>
      <h3 style="color:var(--slate);font-size:15px">Show name, episode title, date, and link</h3>
      <p style="font-size:13px;font-style:italic">Placeholder — replace with a real episode when available</p>
    </div>
  </div></div>
</div>
</div></section>

<section style="padding-top:0;background:var(--cream-deep)"><div class="wrap" style="padding-top:80px;padding-bottom:80px">
<div class="divider rv"><span class="eyebrow p" style="margin:0">Video Interviews</span><div class="line"></div></div>
<div class="vid-grid">
  <div class="vid-shell rv"><div class="vid">
    <div class="vid-thumb g"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description — what you discussed and why it matters.</p><a class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</a></div>
  </div></div>
  <div class="vid-shell rv d1"><div class="vid">
    <div class="vid-thumb p"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description — what you discussed and why it matters.</p><a class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</a></div>
  </div></div>
  <div class="vid-shell rv d2"><div class="vid">
    <div class="vid-thumb g"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description — what you discussed and why it matters.</p><a class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</a></div>
  </div></div>
</div>
</div></section>

<section style="padding-top:0"><div class="wrap" style="padding-top:80px">
<div class="divider rv"><span class="eyebrow g" style="margin:0">Press & Articles</span><div class="line"></div></div>
<div class="press-list">
  <div class="press-row rv">
    <div class="press-pub"><span>Publication</span>Publication Name</div>
    <div><h3>Article or feature title goes here</h3><p>One-line summary of what the piece covers.</p></div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:10px"><span class="press-date">Month YYYY</span><a class="btn-ghost btn" style="font-size:13px;padding:8px 16px">Read →</a></div>
  </div>
  <div class="press-row rv d1" style="opacity:.4">
    <div class="press-pub"><span>Publication</span>—</div>
    <div><h3 style="color:var(--slate)">Add press feature when available</h3><p style="font-style:italic">Placeholder — replace with a real article link</p></div>
    <span class="press-date">—</span>
  </div>
</div>
</div></section>

<div class="speak-band">
  <div class="wrap">
    <span class="eyebrow p rv">Speaking & Appearances</span>
    <h2 class="rv d1" style="text-align:center;margin:0 auto;max-width:24ch">Want Global Mothers United on your podcast or panel?</h2>
    <p class="rv d2" style="color:var(--slate);margin:18px auto 36px;max-width:50ch;text-align:center">We speak on military family support, financial empowerment, community building, and what it really means to rise as a mother.</p>
    <div class="rv" style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get In Touch <span class="arr">→</span></a></div>
  </div>
</div>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Join the Movement</span>
<h2 class="rv d1">Ready to be part of something bigger?</h2>
<p class="rv d2">Find community, access programs, and connect with mothers around the world.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a><a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a></div>
</div></section>

<footer><div class="wrap foot-wrap"><div class="foot-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="GMU"><span>Global Mothers United</span></div><div class="foot-links"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Programs</a><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Events</a><a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div></div><div class="wrap foot-copy">© 2026 Global Mothers United.</div></footer>
<script>const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add("in");io.unobserve(e.target)}})},{threshold:.1});document.querySelectorAll(".rv").forEach(el=>io.observe(el));</script>
<?php wp_footer(); ?>
</body></html>
