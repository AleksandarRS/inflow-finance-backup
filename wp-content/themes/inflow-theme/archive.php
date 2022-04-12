<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package inflow
 */

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="archive-category-posts-content-wrapper blog-page-latest-posts-content-wrapper">
            <div class="container blog-page-posts-container">
                <div class="row blog-page-posts-row">
                    <?php if (have_posts()) : ?>
                        <div class="hero-section hero-posts col-md-12">
                            <header class="page-header align-center">
                                <?php
                                echo inflow_archive_title('<h1 class="page-title">', '</h1>');
                                the_archive_description('<div class="taxonomy-description">', '</div>');
                                ?>
                            </header><!-- .page-header -->
                        </div>
                        <div class="archive-category-content-inner blog-page-latest-posts-content-inner">
                        
                            <?php /* Start the Loop */ ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <?php

                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part('template-parts/custom/content', 'blog-page-cards');
                                ?>

                            <?php endwhile; ?>
                            
                            <?php inflow_post_navigation(); ?>
                            

                        <?php else : ?>

                            <?php get_template_part('template-parts/content', 'none'); ?>

                        
                        </div> <!-- /.blog-page-latest-posts-content-inner -->
                    <?php endif; ?>
                </div> <!-- /.row blog-page-posts-row -->
            </div> <!-- /.container blog-page-posts-container -->
        </div> <!-- /.blog-page-latest-posts-content-wrapper -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
