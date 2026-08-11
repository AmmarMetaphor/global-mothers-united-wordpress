<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gmu_title = 'Programs — Global Mothers United';
get_header();
?>

<header class="page"><div class="wrap">
<h1 class="rv d1">Programs built for the mothers <em>who need it most.</em></h1>
<p class="page-lede rv d2">Three flagship programs, each built around a different chapter of a mother's life.</p>
</div></header>

<section style="padding-top:var(--space-md)"><div class="wrap">
<h2 class="sr-only">Our Programs</h2>
<div class="prog-block">

<div class="prog-row rv">
<div class="prog-visual"><div class="prog-visual-inner g"><img class="prog-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/programs/military-love-war.jpg' ) ); ?>" alt="A mother spending time with her children at home." width="1536" height="1024" loading="lazy" onerror="this.style.display='none'"></div></div>
<div class="prog-body">
<span class="ptag ptag-g">Military Support</span>
<h3>Military Love & War</h3>
<p>Behind every service member is a mother holding the family together. This program is for her, through deployments, reunions, and loss.</p>
<p>We partner with Veterans Affairs, community organizations, and peer support networks so no military mother has to face it alone.</p>
<div class="prog-detail">
<div class="pd"><strong>Who it's for</strong>Mothers in active-duty, veteran, and military families</div>
<div class="pd"><strong>Support</strong>Peer groups, resources, partner referrals, community events</div>
<div class="pd"><strong>Partners</strong>Veterans Affairs, community organizations</div>
<div class="pd"><strong>Cost</strong>Free to attend</div>
</div>
<a class="btn btn-g" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a>
</div>
</div>

<div class="prog-row rev rv">
<div class="prog-visual"><div class="prog-visual-inner p"><img class="prog-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/programs/homeless-to-billionaires.jpg' ) ); ?>" alt="Two women reviewing financial plans together at a table." width="1536" height="1024" loading="lazy" onerror="this.style.display='none'"></div></div>
<div class="prog-body">
<span class="ptag ptag-p">Empowerment</span>
<h3>From Homeless to Billionaires</h3>
<p>A program for mothers rebuilding after housing instability, financial hardship, or crisis.</p>
<p>We work alongside CPAs, financial coaches, and housing partners to give every mother a concrete path forward, not just inspiration.</p>
<div class="prog-detail">
<div class="pd"><strong>Who it's for</strong>Mothers rebuilding after hardship or housing instability</div>
<div class="pd"><strong>Support</strong>Financial literacy, CPA referrals, peer coaching, workshops</div>
<div class="pd"><strong>Partners</strong>CPA network, Wadsworth community organizations</div>
<div class="pd"><strong>Cost</strong>Sliding scale / scholarship available</div>
</div>
<a class="btn btn-p" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Apply Now <span class="arr">→</span></a>
</div>
</div>

<div class="prog-row rv">
<div class="prog-visual"><div class="prog-visual-inner g"><img class="prog-photo" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/programs/inner-circle-10x.jpg' ) ); ?>" alt="A group of women discussing ideas around a meeting table." width="1536" height="1024" loading="lazy" onerror="this.style.display='none'"></div></div>
<div class="prog-body">
<span class="ptag ptag-g">Leadership</span>
<h3>Inner Circle 10X</h3>
<p>A leadership and community program for mothers ready to grow their income and their influence. Built around a $100K mindset and a high-caliber inner circle of support.</p>
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
<p class="rv d2">Reach out and we'll help you find the right fit. No pressure, just a conversation.</p>
<div class="fin-cta rv"><a class="btn btn-g" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us <span class="arr">→</span></a><a class="btn btn-p" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Get Involved <span class="arr">→</span></a></div>
</div></section>

<?php get_footer(); ?>
