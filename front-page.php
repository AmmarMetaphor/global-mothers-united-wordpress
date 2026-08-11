<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Global Mothers United — Supporting Mothers Worldwide';
get_header();
?>

<!-- HERO -->
<header>
  <div class="hero-wide hero-zones">
    <div class="hero-logo-col rv d1">
      <img class="hero-logo-img" src="<?php echo esc_url( get_theme_file_uri( 'assets/gmu-logo.jpg' ) ); ?>" alt="Global Mothers United logo">
    </div>
    <div>
      <span class="eyebrow g rv">Global Mothers United</span>
      <h1 class="rv d1">Mothers helping mothers <em>move forward.</em></h1>
      <p class="hero-sub rv d2">Global Mothers United connects mothers with programs and support, including military families and mothers rebuilding after hardship.</p>
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
<section class="mission" style="padding-top:var(--space-md)">
  <div class="wrap mission-grid">
    <div>
      <span class="eyebrow g rv" style="border-color:rgba(29,185,84,.25)">Our Mission</span>
      <h2 class="rv d1">Mothers supporting mothers, in practice, not just theory.</h2>
      <p class="lede rv d2">We run programs for military families, mothers rebuilding after hardship, and mothers building their careers and income.</p>
      <div class="rv d2" style="margin-top:26px"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">Explore Programs <span class="arr">→</span></a></div>
    </div>
    <div class="pillars rv d1">
      <div class="pill"><div><h3>Empowerment</h3><p>Financial literacy and leadership skills for mothers ready to rebuild.</p></div></div>
      <div class="pill"><div><h3>Community</h3><p>A network of mothers who show up for each other.</p></div></div>
      <div class="pill"><div><h3>Military Families</h3><p>Support built around the realities of military life.</p></div></div>
      <div class="pill"><div><h3>Partnerships</h3><p>We work with Veterans Affairs, CPAs, NCATA, and community organizations.</p></div></div>
    </div>
  </div>
</section>

<!-- PROGRAMS -->
<section>
  <div class="wrap">
    <span class="eyebrow g rv">Our Programs</span>
    <h2 class="rv d1">Three ways to get <em>support.</em></h2>
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
            <p>Peer support and practical resources for mothers in military families.</p>
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
            <p>Financial coaching and community for mothers rebuilding after hardship.</p>
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
            <p>A leadership program for mothers ready to grow their income and influence. October cohort now open.</p>
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
    <h2 class="rv d1">See what's <em>coming up.</em></h2>
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
    <h2 class="rv d1" style="margin:0 auto;max-width:22ch;text-align:center">We work with organizations that share our values.</h2>
    <p class="rv d2" style="color:var(--slate);margin:14px auto 30px;max-width:50ch;text-align:center">Veterans Affairs, CPAs, NCATA, Wadsworth community organizations, and more.</p>
    <div class="rv" style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">
      <a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Become a Partner <span class="arr">→</span></a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved</a>
    </div>
  </div>
</div>

<!-- FINAL CTA -->
<section class="final">
  <div class="wrap final-inner">
    <span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Join Us</span>
    <h2 class="rv d1">Ready to get <em>involved?</em></h2>
    <p class="rv d2">Reach out and tell us what you're looking for.</p>
    <div class="final-cta rv">
      <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a>
      <a class="btn btn-p" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
