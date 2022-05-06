<?php
/**
 * The template for displaying all single posts.
 *
 * @package inflow
 */

get_header(); ?>
<?php 
$page_background_image = get_field('page_background_image');
?>
<div class="single-page-background-image"<?php  if ( $page_background_image ) : ?> style="background-image: url(<?php echo esc_url($page_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($page_background_image['alt']); ?>"<?php endif; ?>>
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area col-md-12 col-sm-12">
				<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single-post' );
						
					endwhile; // End of the loop.
					?>
					
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php // get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->

	<section class="related-posts-section">
		<div class="related-posts-wrapper">
			<div class="related-posts-inner">
				<div class="container">
					<div class="row blog-page-posts-row">
						<header class="entry-header main-header col-md-12 wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
							<h3 class="section-title"><?php _e('Related', 'inflow'); ?></h3>
							<div class="post-product-read-more read-more-link-wrap link-wrap">
								<a href="#" class="link link-arrow link-secondary"><?php _e('See all articles', 'inflow'); ?> <i class="icon icon-arrow-right-large"></i></a>
							</div>
						</header>
						<div class="blog-page-latest-posts-content-inner">
							<?php
								$related = get_posts( array( 
									'category__in' => wp_get_post_categories($post->ID), 
									'numberposts' => 3, 
									'post__not_in' => array($post->ID) ) 
								);
								if( $related ) foreach( $related as $post ) {
								setup_postdata($post);

								get_template_part('template-parts/custom/content', 'blog-page-cards');

							}
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
