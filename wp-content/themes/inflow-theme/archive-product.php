<?php
/**
 * The template for displaying pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package inflow
 */

get_header(); ?>

<div class="archive-hero-section-wrapper">
    <?php get_template_part('template-parts/custom/content', 'archive-product-hero-section'); ?>
</div>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php 
                //if(have_posts()):
                   // while (have_posts()) : the_post(); ?>

                <?php  $product_posts = get_field('products_list', 'option');
                    if( $product_posts ): ?>
                    <div class="posts-items-cards-wrapper col-md-12">
                        <div class="row post-posts-items-cards-list-row archive-posts-cards-items posts-cards-items posts-card-list-items wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                            <?php foreach( $product_posts as $post ): 
                                setup_postdata($post); ?>
                                <?php get_template_part( 'template-parts/content', 'product-archive-list' ); ?>
                            <?php endforeach; ?>
                        </div> <!-- /.row post-posts-items-cards-row -->
                    </div> <!-- /.posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12 -->
                    <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php 
                   // endwhile;
               // endif;
                ?>
                
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
