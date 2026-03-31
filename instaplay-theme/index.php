<?php get_header(); ?>

	<main id="primary" class="site-main">

		<!-- HERO SECTION -->
		<section class="hero-section" aria-label="Instaplay Casino Hero Banner">
			<div class="hero-content">
				<h2 class="hero-title">Philippine's Premium <span class="highlight">Online Casino</span> Experience</h2>
				<p class="hero-subtitle">Instaplay.ph is the elite destination for real money slots. Play top-tier titles from JILI Games, PG Soft, and Pragmatic Play securely. GCash and Maya enabled.</p>
				<div class="hero-cta-group">
					<button class="btn btn-primary btn-large">Claim 100% Welcome Bonus</button>
					<button class="btn btn-outline btn-large">Browse Games</button>
				</div>
				
				<div class="hero-stats">
					<div class="stat-item">
						<span class="stat-value">₱24M+</span>
						<span class="stat-label">Daily Jackpot Pool</span>
					</div>
					<div class="stat-item">
						<span class="stat-value">2,500+</span>
						<span class="stat-label">Certified Slots</span>
					</div>
					<div class="stat-item">
						<span class="stat-value">1 Min</span>
						<span class="stat-label">GCash Payouts</span>
					</div>
				</div>
			</div>
			
			<div class="hero-visual">
				<div class="hero-image-placeholder glass">
					<div class="placeholder-glow"></div>
					<div class="placeholder-text">WIN BIG TODAY</div>
				</div>
			</div>
		</section>

		<!-- SEO LONG CONTEXT INTRO -->
		<section class="long-context-section" id="about">
			<div class="context-container glass">
				<h3>Why Instaplay.ph is the #1 Trusted Online Casino in the Philippines</h3>
				<p>In the rapidly expanding landscape of iGaming in the Philippines, <strong>Instaplay.ph</strong> stands out as the ultimate paragon of security, entertainment, and reliability. We recognized that Filipino players demand seamless transitions between mobile wallets like <strong>GCash</strong> and <strong>Maya</strong>, combined with provably fair algorithms tested by independent international auditing firms. Our platform architecture is meticulously engineered to provide zero latency for high-fidelity slots, particularly focusing on optimizing the mobile experience for titles from industry titans like <em>JILI Games</em> and <em>PG Soft (Pocket Games Soft)</em>.</p>
				<p>Whether you are chasing the high volatility thrills of <strong>Super Ace</strong> or exploring the cascading multiplier mechanics of <strong>Mahjong Ways 2</strong>, Instaplay.ph guarantees instant deposits, frictionless withdrawals, and a localized 24/7 customer support team ready to assist you in Tagalog and English.</p>
			</div>
		</section>

		<!-- PROVIDERS SECTION WITH DESCRIPTIONS -->
		<section class="providers-section" id="providers">
			<div class="section-header">
				<h2 class="section-title">Exclusive Game Providers</h2>
				<p class="section-desc">We partner only with globally certified game studios to ensure every spin is fair and RNG-verified.</p>
			</div>
			
			<div class="providers-grid-detailed">
				<article class="provider-detail-card">
					<div class="provider-logo jili">JILI</div>
					<div class="provider-info">
						<h3>JILI Games Philippines</h3>
						<p>Leading the Asian market, JILI specializes in high-RTP slots and fishing games. Famous for Golden Empire, Fortune Gems, and Boxing King. Designed for extreme payout frequency.</p>
					</div>
				</article>

				<article class="provider-detail-card">
					<div class="provider-logo pg">PG Soft</div>
					<div class="provider-info">
						<h3>Pocket Games Soft</h3>
						<p>Revolutionary 3D mobile slots with cinematic animations. PG Soft dominates with innovative reel mechanics seen in Wild Bandito, Ways of the Qilin, and Treasures of Aztec.</p>
					</div>
				</article>

				<article class="provider-detail-card">
					<div class="provider-logo pp">Pragmatic</div>
					<div class="provider-info">
						<h3>Pragmatic Play</h3>
						<p>An absolute powerhouse offering both multi-award-winning slots like Gates of Olympus and Sweet Bonanza, alongside a state-of-the-art Live Casino dealer experience.</p>
					</div>
				</article>
				
				<article class="provider-detail-card">
					<div class="provider-logo evo">Evolution</div>
					<div class="provider-info">
						<h3>Evolution Gaming</h3>
						<p>The pioneer of Live Casino game shows. Enjoy ultra-HD streaming of Crazy Time, Lightning Roulette, and Live Baccarat from specialized studio environments.</p>
					</div>
				</article>
			</div>
		</section>

		<!-- HOT GAMES GRID -->
		<section class="games-section" id="slots">
			<div class="section-header">
				<h2 class="section-title"><svg class="icon icon-flame"><use href="#icon-flame"></use></svg> Trending Slots Ranked by RTP</h2>
				<div class="game-filters">
					<button class="filter-btn active">All</button>
					<button class="filter-btn">JILI Slots</button>
					<button class="filter-btn">PG Soft</button>
					<button class="filter-btn">Live Casino</button>
				</div>
			</div>
			
			<div class="games-grid">
				<?php 
				$dummy_games = [
					['name' => 'Super Ace', 'provider' => 'JILI', 'desc' => 'Card themed multiplier slot', 'tag' => 'Hot', 'img' => 'superace'],
					['name' => 'Fortune Gems', 'provider' => 'JILI', 'desc' => 'Classic ancient relic mechanics', 'tag' => 'New', 'img' => 'fortunegems'],
					['name' => 'Mahjong Ways 2', 'provider' => 'PG Soft', 'desc' => 'High volatility cascading tiles', 'tag' => 'Hot', 'img' => 'mahjong'],
					['name' => 'Sugar Rush', 'provider' => 'Pragmatic Play', 'desc' => 'Sweet multipliers up to 5000x', 'tag' => '', 'img' => 'sugar'],
					['name' => 'Crazy Time', 'provider' => 'Evolution', 'desc' => 'Live game show with 4 bonus rounds', 'tag' => 'Live', 'img' => 'crazytime'],
					['name' => 'Golden Empire', 'provider' => 'JILI', 'desc' => 'Inca themed megaways', 'tag' => '', 'img' => 'golden'],
					['name' => 'Wild Bandito', 'provider' => 'PG Soft', 'desc' => 'Mexican outlaw expanding wilds', 'tag' => '', 'img' => 'bandito'],
					['name' => 'Gates of Olympus', 'provider' => 'Pragmatic Play', 'desc' => 'Zeus drops heavy multipliers', 'tag' => 'Hot', 'img' => 'olympus'],
				];
				
				foreach($dummy_games as $game): ?>
					<div class="game-card">
						<div class="game-thumb">
							<div class="thumbnail-placeholder <?php echo $game['img']; ?>"></div>
							<?php if($game['tag']): ?>
								<span class="game-tag <?php echo strtolower($game['tag']); ?>"><?php echo $game['tag']; ?></span>
							<?php endif; ?>
							<div class="game-overlay">
								<button class="play-btn" aria-label="Play <?php echo esc_attr($game['name']); ?>"><svg class="icon"><use href="#icon-play"></use></svg></button>
							</div>
						</div>
						<div class="game-info">
							<h3 class="game-name"><?php echo esc_html($game['name']); ?></h3>
							<span class="game-provider"><?php echo esc_html($game['provider']); ?></span>
							<p class="game-micro-desc"><?php echo esc_html($game['desc']); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		<!-- SEO FAQ SECTION (For Rich Snippets / PAA ranking) -->
		<section class="faq-section" id="faq">
			<div class="section-header center">
				<h2 class="section-title">Frequently Asked Questions</h2>
				<p class="section-desc">Everything you need to know about playing real money slots at Instaplay.ph.</p>
			</div>
			
			<div class="faq-accordion">
				<div class="faq-item">
					<h3>Is Instaplay.ph legally licensed to operate in the Philippines?</h3>
					<div class="faq-answer">
						<p>Yes, Instaplay.ph operates under strict regulatory compliance and holds licensing credentials ensuring fair play, secure data encryption, and guaranteed payouts for Filipino players.</p>
					</div>
				</div>
				<div class="faq-item">
					<h3>How do I withdraw my winnings using GCash?</h3>
					<div class="faq-answer">
						<p>Withdrawals are processed instantly via our automated API. Simply navigate to the Cashier, input your registered GCash number, and select amount. Payouts reflect within 1-3 minutes directly to your e-wallet.</p>
					</div>
				</div>
				<div class="faq-item">
					<h3>Which JILI slot has the highest RTP?</h3>
					<div class="faq-answer">
						<p>Games like Super Ace and Charge Buffalo have highly competitive Return to Player (RTP) percentages, historically floating around 97%, making them the most profitable choices for slot enthusiasts in the PH market.</p>
					</div>
				</div>
				<div class="faq-item">
					<h3>What are PG Soft's most popular features?</h3>
					<div class="faq-answer">
						<p>PG Soft (Pocket Games Soft) is renowned for its portrait-first mobile orientation, collapsing reels, and persistent multipliers found in smash hits like Mahjong Ways 2 and Treasure of Aztec.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Schema JSON-LD for FAQ -->
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

	</main><!-- #main -->

<?php get_footer(); ?>
