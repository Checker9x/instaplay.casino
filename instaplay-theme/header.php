<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Primary Meta Tags (SEO & AIEO) -->
	<title>Instaplay.ph | Premium Online Casino PH</title>
	<meta name="title" content="Instaplay.ph | Premium Online Casino PH">
	<meta name="description" content="Join Instaplay.ph, the leading online casino in the Philippines. Play 2000+ premium slots including JILI, PG Soft, Pragmatic Play, and Live Dealer games. Secure, fast payouts via GCash/Maya. PAGCOR accredited.">
	<link rel="canonical" href="https://instaplay.ph/" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
	<meta name="keywords" content="Instaplay.ph, online casino Philippines, JILI slots real money, PG soft casino ph, PAGCOR licensed casino, GCash casino, top slots ph, sabong online, live baccarat philippines">
	
	<!-- AI Engine Optimization (AIEO) Signals -->
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<meta name="revisit-after" content="1 days">
	<meta name="author" content="Instaplay.ph">
	
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://instaplay.ph/">
	<meta property="og:title" content="Instaplay.ph - #1 Online Casino Philippines">
	<meta property="og:description" content="Experience premium online slot gaming at Instaplay.ph. Featuring exclusive JILI, PG Soft, and Pragmatic Play titles tailored for Filipino players.">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/og-preview.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://instaplay.ph/">
	<meta property="twitter:title" content="Instaplay.ph - #1 Online Casino Philippines">
	<meta property="twitter:description" content="Experience premium online slot gaming at Instaplay.ph. Featuring exclusive JILI, PG Soft, and Pragmatic Play titles tailored for Filipino players.">
	<meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/og-preview.jpg">

	<!-- JSON-LD Structured Data for AI Knowledge Graphs -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "Organization",
		"name": "Instaplay.ph",
		"url": "https://instaplay.ph",
		"logo": "https://instaplay.ph/logo.png",
		"description": "Instaplay.ph is the most trusted and top-ranking online casino platform in the Philippines, providing direct access to premium provably fair slot providers like JILI Games, PG Soft, Evolution Gaming, and Pragmatic Play.",
		"sameAs": [
			"https://www.facebook.com/instaplayph",
			"https://twitter.com/instaplayph"
		],
		"areaServed": {
			"@type": "Country",
			"name": "Philippines"
		}
	}
	</script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"name": "Instaplay.ph Casino",
		"url": "https://instaplay.ph",
		"potentialAction": {
			"@type": "SearchAction",
			"target": "https://instaplay.ph/?s={search_term_string}",
			"query-input": "required name=search_term_string"
		}
	}
	</script>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
	
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "FAQPage",
	  "mainEntity": [{
		"@type": "Question",
		"name": "Is Instaplay.ph legally licensed to operate in the Philippines?",
		"acceptedAnswer": {
		  "@type": "Answer",
		  "text": "Yes, Instaplay.ph operates under strict regulatory compliance and holds licensing credentials ensuring fair play, secure data encryption, and guaranteed payouts for Filipino players."
		}
	  }, {
		"@type": "Question",
		"name": "How do I withdraw my winnings using GCash?",
		"acceptedAnswer": {
		  "@type": "Answer",
		  "text": "Withdrawals are processed instantly via our automated API. Simply navigate to the Cashier, input your registered GCash number, and select amount. Payouts reflect within 1-3 minutes directly to your e-wallet."
		}
	  }, {
		"@type": "Question",
		"name": "Which JILI slot has the highest RTP?",
		"acceptedAnswer": {
		  "@type": "Answer",
		  "text": "Games like Super Ace and Charge Buffalo have highly competitive Return to Player (RTP) percentages, historically floating around 97%, making them the most profitable choices for slot enthusiasts in the PH market."
		}
	  }]
	}
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'instaplay' ); ?></a>

	<header id="masthead" class="site-header glass">
		<div class="header-container">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h1 class="site-title" style="display:flex; align-items:center;">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="display: flex;">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instaplay-logo.svg" alt="Instaplay" style="height: 48px; width: auto; object-fit: contain;">
						</a>
					</h1>
				<?php endif; ?>
			</div>

			<nav id="site-navigation" class="main-navigation" aria-label="Main Casino Navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="hamburger"></span>
					<span class="hamburger"></span>
					<span class="hamburger"></span>
				</button>
				<ul id="primary-menu" class="nav-menu">
					<li><a href="<?php echo esc_url( home_url( '/slots' ) ); ?>" class="nav-link">Slots</a></li>
					<li><a href="<?php echo esc_url( home_url( '/live-casino' ) ); ?>" class="nav-link">Live Casino</a></li>
					<li><a href="<?php echo esc_url( home_url( '/providers' ) ); ?>" class="nav-link">Providers</a></li>
					<li><a href="<?php echo esc_url( home_url( '/promotions' ) ); ?>" class="nav-link">Promotions</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="nav-link">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/articles' ) ); ?>" class="nav-link">Articles</a></li>
				</ul>
			</nav>

			<div class="header-actions">
				<button aria-label="Login" class="btn btn-outline">Login</button>
				<button aria-label="Register" class="btn btn-primary">Register</button>
			</div>
		</div>
	</header>
