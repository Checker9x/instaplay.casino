<?php
/**
 * Template Name: Single Article
 * Description: The template for displaying all single posts and articles.
 */
get_header(); ?>

<main id="primary" class="site-main page-template">
	<?php
	while ( have_posts() ) :
		the_post();
		$categories = get_the_category();
		$cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'News';
		?>
		
		<!-- Article Header -->
		<header class="article-header" style="max-width: 800px; margin: 0 auto; padding: 140px 20px 40px; text-align: center;">
			<div class="article-meta" style="color: var(--brand-primary); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; font-size: 0.9rem; margin-bottom: 1rem;">
				<?php echo $cat_name; ?> &bull; <?php echo get_the_date(); ?>
			</div>
			<h1 class="hero-title" style="font-size: 3rem; margin-bottom: 1.5rem; line-height: 1.1;"><?php the_title(); ?></h1>
			<div class="article-author" style="display: flex; align-items: center; justify-content: center; gap: 1rem;">
				<div style="width: 50px; height: 50px; border-radius: 50%; background: #1a2238; border: 2px solid var(--brand-primary); overflow: hidden;">
					<?php echo get_avatar( get_the_author_meta('ID'), 50 ); ?>
				</div>
				<div style="text-align: left;">
					<div style="color: white; font-weight: 600;"><?php the_author(); ?></div>
					<div style="color: var(--text-muted); font-size: 0.85rem;">Instaplay Author</div>
				</div>
			</div>
		</header>

		<!-- Featured Image -->
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="article-featured-image" style="max-width: 1000px; margin: 0 auto 60px; padding: 0 20px;">
				<div class="glass" style="width: 100%; border-radius: var(--radius-lg); overflow: hidden; display: flex; align-items: center; justify-content: center; background: #111827;">
					<?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; object-fit: cover;')); ?>
				</div>
			</div>
		<?php else : ?>
			<div class="article-featured-image" style="max-width: 1000px; margin: 0 auto 60px; padding: 0 20px;">
				<div class="glass" style="width: 100%; height: 400px; border-radius: var(--radius-lg); background: linear-gradient(135deg, #1f2937, #111827); display: flex; align-items: center; justify-content: center;">
					<div class="placeholder-text" style="font-size: 1.5rem; letter-spacing: 0.2em;">FEATURED BANNER</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- Article Body -->
		<section class="single-article-content content-area" style="max-width: 800px; margin: 0 auto 100px; padding: 0 20px; font-size: 1.15rem; line-height: 1.8; color: var(--text-muted);">
			<?php the_content(); ?>
		
			<!-- Sub Promo inside Article Footer -->
			<div class="promo-banner glass" style="padding: 3rem 2rem; border-radius: var(--radius-lg); text-align: center; background: linear-gradient(135deg, rgba(255,183,3,0.1), rgba(247,37,133,0.1)); border: 1px solid rgba(255,255,255,0.1); margin: 4rem 0 2rem;">
				<h3 style="font-size: 1.8rem; color: #fff; margin-bottom: 0.5rem;">Ready to Play?</h3>
				<p style="margin-bottom: 1.5rem; font-size: 1rem;">Implement these strategies now with your 100% Free Welcome Bonus.</p>
				<a href="<?php echo esc_url( home_url( '/promotions' ) ); ?>" class="btn btn-primary">Claim Your Bonus</a>
			</div>
		</section>

		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Article",
		  "headline": "<?php echo esc_js( get_the_title() ); ?>",
		  "image": [
			"<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
		   ],
		  "datePublished": "<?php echo get_the_date('c'); ?>",
		  "dateModified": "<?php echo get_the_modified_date('c'); ?>",
		  "author": [{
			  "@type": "Person",
			  "name": "<?php echo esc_js( get_the_author() ); ?>",
			  "url": "<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"
			}]
		}
		</script>
	<?php
	endwhile;
	?>
</main>

<?php get_footer(); ?>
