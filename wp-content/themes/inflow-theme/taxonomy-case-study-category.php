<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package inflow
 */

get_header(); ?>

<div class="archive-hero-section-wrapper archive-case-studies-hero-section-wrapper">
    <?php get_template_part('template-parts/custom/content', 'taxonomy-case-studies-hero-section'); ?>
</div>

<div class="container-middle-wide-large">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>
                    <div class="taxonomy-case-study-page-latest-items-wrapper archive-case-study-page-latest-items-wrapper col-md-12">
                        <div class="row post-posts-items-cards-row posts-cards-items case-study-post-cards-items">
                            <?php while ( have_posts() ) : ?>
                                <?php
                                the_post();
                                get_template_part( 'template-parts/content', 'case-study-cards' );
                                ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
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
                    <?php //inflow_post_navigation(); ?>

                    <?php else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>
                
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
