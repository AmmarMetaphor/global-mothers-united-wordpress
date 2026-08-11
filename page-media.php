<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Media — Global Mothers United';
get_header();
?>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Media</span>
<h1 class="rv d1">Podcasts, interviews, and <em>press.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:52ch;margin-top:18px">A home for podcast appearances, interviews, and press mentions as they come in.</p>
</div></header>

<section style="padding-top:var(--space-md)"><div class="wrap">
<div class="divider rv"><h2 class="eyebrow g" style="margin:0">Podcast Episodes</h2><div class="line"></div></div>
<div class="pod-grid">
  <div class="pod-shell rv"><div class="pod">
    <div class="pod-thumb" style="background:linear-gradient(135deg,#0F9B45,#0D1F0F)"></div>
    <div class="pod-body">
      <div class="show">Podcast Name Here</div>
      <h3>Episode title: add your first appearance</h3>
      <p>Show name, episode number, and a brief description of what you discussed.</p>
      <div class="pod-actions"><a class="ptag g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">▶ Listen</a><a class="ptag" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Spotify</a><a class="ptag" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apple</a></div>
    </div>
  </div></div>
  <div class="pod-shell rv d1"><div class="pod" style="border:2px dashed var(--hairline);background:rgba(13,31,15,.02);box-shadow:none">
    <div class="pod-thumb" style="background:rgba(13,31,15,.06);border:1px dashed var(--hairline)"></div>
    <div class="pod-body">
      <div class="show" style="color:var(--slate)">Add Podcast Episode</div>
      <h3 style="color:var(--slate);font-size:15px">Show name, episode title, date, and link</h3>
      <p style="font-size:13px;font-style:italic">Placeholder: replace with a real episode when available</p>
    </div>
  </div></div>
</div>
</div></section>

<section style="padding-top:0;background:var(--cream-deep)"><div class="wrap" style="padding-top:80px;padding-bottom:80px">
<div class="divider rv"><h2 class="eyebrow p" style="margin:0">Video Interviews</h2><div class="line"></div></div>
<div class="vid-grid">
  <div class="vid-shell rv"><div class="vid">
    <div class="vid-thumb g"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description: what you discussed and why it matters.</p><button type="button" class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</button></div>
  </div></div>
  <div class="vid-shell rv d1"><div class="vid">
    <div class="vid-thumb p"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description: what you discussed and why it matters.</p><button type="button" class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</button></div>
  </div></div>
  <div class="vid-shell rv d2"><div class="vid">
    <div class="vid-thumb g"><div class="play">▶</div><span class="vid-ph">Add YouTube or Vimeo link</span></div>
    <div class="vid-body"><div class="src">Interview · Channel Name</div><h3>Interview title goes here</h3><p>Brief description: what you discussed and why it matters.</p><button type="button" class="btn-ghost btn" style="font-size:13px;padding:8px 18px">▶ Watch</button></div>
  </div></div>
</div>
</div></section>

<section style="padding-top:0"><div class="wrap" style="padding-top:80px">
<div class="divider rv"><h2 class="eyebrow g" style="margin:0">Press & Articles</h2><div class="line"></div></div>
<div class="press-list">
  <div class="press-row rv">
    <div class="press-pub"><span>Publication</span>Publication Name</div>
    <div><h3>Article or feature title goes here</h3><p>One-line summary of what the piece covers.</p></div>
    <div style="display:flex;flex-direction:column;align-items:flex-end;gap:10px"><span class="press-date">Month YYYY</span><button type="button" class="btn-ghost btn" style="font-size:13px;padding:8px 16px">Read →</button></div>
  </div>
  <div class="press-row rv d1" style="opacity:.4">
    <div class="press-pub"><span>Publication</span>—</div>
    <div><h3 style="color:var(--slate)">Add press feature when available</h3><p style="font-style:italic">Placeholder: replace with a real article link</p></div>
    <span class="press-date">—</span>
  </div>
</div>
</div></section>

<div class="speak-band">
  <div class="wrap">
    <span class="eyebrow p rv">Speaking & Appearances</span>
    <h2 class="rv d1" style="text-align:center;margin:0 auto;max-width:24ch">Want Global Mothers United on your podcast or panel?</h2>
    <p class="rv d2" style="color:var(--slate);margin:18px auto 36px;max-width:50ch;text-align:center">We speak on military family support, financial empowerment, and community building.</p>
    <div class="rv" style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get In Touch <span class="arr">→</span></a></div>
  </div>
</div>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Join Us</span>
<h2 class="rv d1">Let's stay connected.</h2>
<p class="rv d2">Find community, access programs, and connect with mothers around the world.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a><a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a></div>
</div></section>

<?php get_footer(); ?>
