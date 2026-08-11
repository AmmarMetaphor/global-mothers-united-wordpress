<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Events & Calendar — Global Mothers United';
get_header();
?>

<header class="page"><div class="wrap">
<span class="eyebrow g rv">Events & Calendar</span>
<h1 class="rv d1">Where we show up <em>together.</em></h1>
<p class="rv d2" style="color:var(--slate);font-size:18.5px;max-width:50ch;margin-top:18px">Community nights, workshops, cohort launches, and partner events, all in one place. Free to attend unless noted.</p>
<div class="filters rv">
  <button type="button" class="ftab on" data-filter="all" aria-pressed="true">All Events</button>
  <button type="button" class="ftab" data-filter="military" aria-pressed="false">Military</button>
  <button type="button" class="ftab" data-filter="empowerment" aria-pressed="false">Empowerment</button>
  <button type="button" class="ftab" data-filter="leadership" aria-pressed="false">Leadership</button>
  <button type="button" class="ftab" data-filter="partner" aria-pressed="false">Partner Events</button>
</div>
</div></header>

<section style="padding-top:var(--space-md)"><div class="wrap">

<!-- FEATURED -->
<div class="feat rv">
  <div class="feat-inner">
    <div>
      <div class="feat-tag">Featured Event</div>
      <h2>Military Love & War — Community Night</h2>
      <div class="feat-meta"><span>Jul 23, 2026</span> &nbsp;·&nbsp; 6:00 PM EST &nbsp;·&nbsp; <span>Free</span> &nbsp;·&nbsp; Zoom + In-Person</div>
      <div class="feat-actions">
        <a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Reserve Your Spot <span class="arr">→</span></a>
        <button type="button" class="btn" style="background:rgba(255,255,255,.1);color:#fff;padding:10px 20px">Add to Calendar</button>
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
  <div class="ev-card rv" data-category="military">
    <div class="ev-date-box"><div class="month">Jul</div><div class="day">23</div></div>
    <div class="ev-body">
      <h3>Military Love & War — Community Night</h3>
      <p>A space for military mothers to connect, share stories, and find support. Open to all military-connected mothers and families.</p>
      <div class="ev-tags"><span class="etag etag-g">Military</span><span class="etag etag-g">Free</span><span class="etag etag-g">Zoom + In-Person</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-g btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Register <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv d1" data-category="leadership">
    <div class="ev-date-box"><div class="month">Oct</div><div class="day">01</div></div>
    <div class="ev-body">
      <h3>Inner Circle 10X — October Cohort Opens</h3>
      <p>Applications open for the flagship leadership program. Monthly cohort for mothers growing their income and impact. Limited places.</p>
      <div class="ev-tags"><span class="etag etag-p">Leadership</span><span class="etag etag-p">Application Required</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-p btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apply <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv d2" data-category="empowerment">
    <div class="ev-date-box"><div class="month">TBA</div><div class="day" style="font-size:22px;padding-top:4px">Soon</div></div>
    <div class="ev-body">
      <h3>From Homeless to Billionaires — Full-Day Workshop</h3>
      <p>A full-day workshop for mothers rebuilding from hardship. Veterans Affairs and CPA partners in attendance. Limited seats.</p>
      <div class="ev-tags"><span class="etag etag-p">Empowerment</span><span class="etag etag-g">Scholarship Available</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-p btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Join Waitlist <span class="arr">→</span></a></div>
  </div>
  <div class="ev-card rv" data-category="partner">
    <div class="ev-date-box"><div class="month">TBA</div><div class="day" style="font-size:22px;padding-top:4px">Soon</div></div>
    <div class="ev-body">
      <h3>NCATA Community Partnership Event</h3>
      <p>An event with NCATA and Wadsworth partners. Details to be announced. Register your interest to be notified.</p>
      <div class="ev-tags"><span class="etag etag-g">Partner Event</span><span class="etag etag-g">Free</span></div>
    </div>
    <div class="ev-action"><a class="btn btn-g btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Notify Me <span class="arr">→</span></a></div>
  </div>
</div>

<!-- CALENDAR EMBED -->
<div class="cal-wrap rv">
  <div class="cal-inner">
    <h3>Full Calendar Coming Soon</h3>
    <p>We're setting up a full calendar with all upcoming events, recurring community nights, and partner workshops. Check back soon, or join our mailing list to hear when it's ready.</p>
    <a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Join Mailing List <span class="arr">→</span></a>
  </div>
</div>

</div></section>

<section class="fin"><div class="wrap">
<span class="eyebrow p rv" style="border-color:rgba(124,58,237,.3)">Host With Us</span>
<h2 class="rv d1">Want to bring Global Mothers United to your community?</h2>
<p class="rv d2">We partner with organizations to host events, workshops, and community nights. Reach out and let's talk about what that could look like.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Partner With Us <span class="arr">→</span></a></div>
</div></section>

<?php get_footer(); ?>
