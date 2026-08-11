<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Global Mothers United — Empowering Mothers Worldwide';
get_header();
?>

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

<?php get_footer(); ?>
