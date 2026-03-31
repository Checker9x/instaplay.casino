<?php
/**
 * Template Name: Articles Archive Page
 */
get_header(); ?>

<main id="primary" class="site-main page-template">
	<!-- HERO SECTION -->
	<section class="hero-section" id="home">
		<div class="hero-content">
			<h2 class="hero-title">Instaplay <span class="highlight">Intelligence</span></h2>
			<p class="hero-subtitle">Read the latest strategies, provider news, GCash deposit guides, and casino industry updates written by our Philippine iGaming experts.</p>
		</div>
		<div class="hero-visual">
			<div class="hero-image-placeholder glass"><div class="placeholder-glow"></div><div class="placeholder-text">LATEST NEWS</div></div>
		</div>
	</section>

	<section class="games-section" id="articles">
		<div class="section-header">
			<h2 class="section-title">Latest Articles</h2>
		</div>
		
		<div class="games-grid">
			<?php
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => 12,
				'post_status'    => 'publish',
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
					$categories = get_the_category();
					$cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'News';
			?>
				<!-- Dynamic Article Card -->
				<div class="game-card article-card">
					<div class="game-thumb">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 180px; object-fit: cover;')); ?>
						<?php else : ?>
							<div class="thumbnail-placeholder" style="background: linear-gradient(135deg, #FFB703, #F72585);"></div>
						<?php endif; ?>
						<span class="game-tag new"><?php echo $cat_name; ?></span>
					</div>
					<div class="game-info article-info">
						<span class="game-provider"><?php echo get_the_date(); ?></span>
						<h3 class="game-name"><?php the_title(); ?></h3>
						<p class="game-micro-desc" style="margin-bottom: 1rem;">
							<?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
						</p>
						<a href="<?php the_permalink(); ?>" class="btn btn-outline" style="width: 100%;">Read Article</a>
					</div>
				</div>
			<?php
				endwhile;
				wp_reset_postdata();
			else :
			?>
				<p style="color: var(--text-muted); grid-column: 1 / -1; text-align: center; padding: 2rem;">No articles found. Please publish your first post!</p>
			<?php
			endif;
			?>
		</div>
	</section>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Blog",
	  "name": "<?php bloginfo('name'); ?> Blog & News",
	  "url": "<?php echo esc_url( home_url( '/articles' ) ); ?>",
	  "description": "The latest online casino strategies, slot reviews, and GCash platform updates."
	}
	</script>
</main>
<?php get_footer(); ?>
