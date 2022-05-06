<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package inflow
 */

get_header(); ?>
<?php 
	$add_blog_page_top_image = get_field('add_blog_page_top_image', 'option');
	$add_blog_page_description = get_field('add_blog_page_description', 'option');
?>
<section class="blog-hero-section wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="blog-hero-section-wrapper section-wrapper">
        <?php  if ( $add_blog_page_top_image ) : ?>
            <div class="blog-hero-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($add_blog_page_top_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($add_blog_page_top_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="blog-hero-section-wrapper-inner">
            <div class="container">
                <div class="row blog-hero-row">
                    <?php  if ( $add_blog_page_description ) : ?>
                        <div class="entry-content section-description col-md-12 wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $add_blog_page_description; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container relative">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main site-blog-main" role="main">

				<div class="featured-post-item-wrapper">
					<div class="container featured-post-container">
						<div class="row featured-post-row">
							<div class="featured-post-item-inner col-md-12">
								<?php
									$args = array(
										'post_type' => 'post',
										'posts_per_page'  => -1,
										'meta_key' => 'featured',
										'meta_value'  => '1'
									);
									$featured_posts = new WP_Query($args);
									if($featured_posts->have_posts()): ?>
										<div class="featured-post-item">
											<?php while($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
												<?php get_template_part('template-parts/custom/content', 'featured-cards');?>
											<?php endwhile; ?>
										</div> <!-- /.featured-post-item -->
									<?php endif;
									wp_reset_query(); 
								?>
							</div> <!-- /.featured-post-items-inner -->
						</div> <!-- /.row featured-post-row -->
					</div> <!-- /.container featured-post-container -->
				</div> <!-- /.featured-post-item-wrapper -->

				<div class="blog-page-latest-posts-content-wrapper wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
					<div class="container blog-page-posts-container">
						<div class="row blog-page-posts-row">
							<div class="blog-page-latest-posts-content-inner">
							<?php
								$args1 = array(
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'paged' => $paged,
									'meta_query' => array(
										'relation' => 'OR',
										array(
											'key' => 'featured',
											'value'  => '0',
										),
										array(
											'key' => 'featured',
											'compare'  => 'NOT EXISTS',
										)
									)      
								);
								$post1s = new WP_Query($args1);
								if ($post1s->have_posts()) : ?>
									<?php /* Start the Loop */ ?>
									<?php while ($post1s->have_posts()) : $post1s->the_post(); ?>
										<?php
										/*
											* Include the Post-Format-specific template for the content.
											* If you want to override this in a child theme, then include a file
											* called content-___.php (where ___ is the Post Format name) and that will be used instead.
											*/
											get_template_part('template-parts/custom/content', 'blog-page-cards');
										?>
									<?php endwhile; ?>
									<div class="blog-navigation nav-links wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
										<?php 
											$big = 999999999;
											echo paginate_links( array(
												'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
												'format' => '?paged=%#%',
												'mid_size' => 0,
												'current' => max( 1, get_query_var('paged') ),
												'next_text' => '<i class="icon icon-angle-right"></i><i class="icon icon-angle-right"></i>',
												'prev_text' => '<i class="icon icon-angle-left"></i><i class="icon icon-angle-left"></i>',
												'total' => $post1s->max_num_pages
											) ); 
										?>
									</div>
								<?php else : ?>
									<?php get_template_part('template-parts/content', 'none'); ?>
								<?php endif; ?>
							</div> <!-- /.blog-page-latest-posts-content-inner -->
						</div> <!-- /.row blog-page-posts-row -->
					</div> <!-- /.container blog-page-posts-container -->
				</div> <!-- /.blog-page-latest-posts-content-wrapper -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
