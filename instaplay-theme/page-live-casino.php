<?php
/**
 * Template Name: Live Casino Page
 */
get_header(); ?>

<main id="primary" class="site-main page-template">
	<!-- HERO SECTION -->
	<section class="hero-section" id="home">
		<div class="hero-content">
			<h2 class="hero-title">Premium <span class="highlight">Live Casino</span> Table Games</h2>
			<p class="hero-subtitle">Immerse yourself in real-time HD streams of Baccarat, Roulette, and Blackjack broadcast exclusively from Evolution Gaming.</p>
			<div class="hero-cta-group">
				<button class="btn btn-primary btn-large">Enter Live Lobby</button>
			</div>
			<div class="hero-stats">
				<div class="stat-item"><span class="stat-value">Sub-1s</span><span class="stat-label">Stream Latency</span></div>
				<div class="stat-item"><span class="stat-value">24/7</span><span class="stat-label">Live Dealers</span></div>
			</div>
		</div>
		<div class="hero-visual">
			<div class="hero-image-placeholder glass"><div class="placeholder-glow"></div><div class="placeholder-text">HD LIVE STREAMS</div></div>
		</div>
	</section>

	<!-- SEO LONG CONTEXT INTRO -->
	<section class="long-context-section" id="about">
		<div class="context-container glass">
			<h3>Authentic Casino Atmosphere Streaming Direct to Your Device</h3>
			<p>For Filipino players seeking the palpable tension and social reality of a physical casino floor from the comfort of their homes, <strong>Instaplay.ph Live Casino</strong> represents the zenith of remote gaming. We utilize cutting-edge WebRTC streaming API technology to deliver sub-second latency from premium broadcast studios located in Europe and Asia.</p>
			<p>Our flagship provider, <strong>Evolution Gaming</strong>, offers an unprecedented portfolio of live dealer experiences. Participate in the high-stakes elegance of <em>Lightning Baccarat</em> where RNG multiplier cards can boost your payouts exponentially, or interact directly with charismatic game hosts on live TV-show style formats.</p>
		</div>
	</section>

	<!-- PROVIDERS SECTION -->
	<section class="providers-section" id="providers">
		<div class="section-header">
			<h2 class="section-title">Live Studio Providers</h2>
		</div>
		<div class="providers-grid-detailed">
			<article class="provider-detail-card">
				<div class="provider-logo evo">Evolution</div>
				<div class="provider-info"><h3>Evolution Gaming</h3><p>The pioneer of Live Casino game shows. Enjoy ultra-HD streaming of Crazy Time, Lightning Roulette, and Live Baccarat.</p></div>
			</article>
			<article class="provider-detail-card">
				<div class="provider-logo pp">Pragmatic</div>
				<div class="provider-info"><h3>Pragmatic Play Live</h3><p>Offering a state-of-the-art Live Casino dealer experience with Speed Baccarat and Mega Wheel.</p></div>
			</article>
		</div>
	</section>

	<!-- HOT GAMES GRID -->
	<section class="games-section" id="slots">
		<div class="section-header">
			<h2 class="section-title"><svg class="icon icon-flame"><use href="#icon-flame"></use></svg> Trending Live Tables</h2>
		</div>
		<div class="games-grid">
			<div class="game-card">
				<div class="game-thumb"><div class="thumbnail-placeholder"></div><span class="game-tag live">Live</span><div class="game-overlay"><button class="play-btn"><svg class="icon"><use href="#icon-play"></use></svg></button></div></div>
				<div class="game-info"><h3 class="game-name">Live Speed Baccarat</h3><span class="game-provider">Evolution</span><p class="game-micro-desc">Fast-paced, high limit baccarat.</p></div>
			</div>
			<div class="game-card">
				<div class="game-thumb"><div class="thumbnail-placeholder"></div><span class="game-tag live">Live</span><div class="game-overlay"><button class="play-btn"><svg class="icon"><use href="#icon-play"></use></svg></button></div></div>
				<div class="game-info"><h3 class="game-name">Crazy Time</h3><span class="game-provider">Evolution</span><p class="game-micro-desc">Wheel of fortune with 4 bonus rounds.</p></div>
			</div>
			<div class="game-card">
				<div class="game-thumb"><div class="thumbnail-placeholder"></div><span class="game-tag hot">Hot</span><div class="game-overlay"><button class="play-btn"><svg class="icon"><use href="#icon-play"></use></svg></button></div></div>
				<div class="game-info"><h3 class="game-name">Lightning Roulette</h3><span class="game-provider">Evolution</span><p class="game-micro-desc">Up to 500x random lightning multipliers.</p></div>
			</div>
			<div class="game-card">
				<div class="game-thumb"><div class="thumbnail-placeholder"></div><div class="game-overlay"><button class="play-btn"><svg class="icon"><use href="#icon-play"></use></svg></button></div></div>
				<div class="game-info"><h3 class="game-name">Mega Wheel</h3><span class="game-provider">Pragmatic Play Live</span><p class="game-micro-desc">Colorful live host giant wheel.</p></div>
			</div>
		</div>
	</section>

	<!-- PROMO BANNER -->
	<section class="promo-banner-section" id="promos">
		<div class="promo-banner glass">
			<div class="promo-content">
				<h2>Live Casino Rebate</h2>
				<p>Get up to 0.8% daily unlimited rebate on all your Live Casino table turnover.</p>
				<a href="#claim" class="btn btn-primary">Activate Auto-Rebate</a>
			</div>
		</div>
	</section>

	<!-- SEO FAQ SECTION -->
	<section class="faq-section" id="faq">
		<div class="section-header center">
			<h2 class="section-title">Live Casino FAQ</h2>
		</div>
		<div class="faq-accordion">
			<div class="faq-item"><h3>Is the Live Casino fair?</h3><div class="faq-answer"><p>100%. All table games are physically audited and tracked using Optical Character Recognition (OCR) cameras so every physical card draw instantly registers on your UI without manipulation.</p></div></div>
			<div class="faq-item"><h3>Can I play live tables on mobile?</h3><div class="faq-answer"><p>Yes, WebRTC streaming technology delivers HD video feeds directly to your portrait-mode mobile screens without dedicated apps.</p></div></div>
		</div>
	</section>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org/",
	  "@type": "WebPage",
	  "name": "Live Dealer Casino Philippines | Baccarat & Roulette",
	  "description": "Immerse yourself in real-time HD streams of Baccarat, Roulette, and Blackjack broadcast exclusively from Evolution Gaming."
	}
	</script>
</main>

<?php get_footer(); ?>
