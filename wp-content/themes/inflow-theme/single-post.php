<?php
/**
 * The template for displaying all single posts.
 *
 * @package inflow
 */

get_header(); ?>

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
					
					<header class="entry-header main-header col-md-12">
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

							get_template_part('template-parts/custom/content', 'blog-page');

						}
						wp_reset_postdata(); ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
