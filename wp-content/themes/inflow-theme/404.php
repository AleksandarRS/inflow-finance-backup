<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package inflow
 */

get_header(); ?>

<?php 
	$add_image = get_field('add_image', 'option');
	$add_main_content = get_field('add_main_content', 'option');

	$add_menu_text = get_field('add_menu_text', 'option');
?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found-content-area not-found wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
                    <div id="lottie-hero" class="error-404-main-image wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
                        <!-- <img src="<?php //echo esc_url($add_image['url']); ?>" alt="<?php // echo esc_attr($add_image['alt']); ?>"> -->
                    </div>
                    <?php  if ( $add_main_content ) : ?>
                        <div class="error-404-entry-content section-description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $add_main_content; ?>
                        </div>
                    <?php else : ?>
                        <header class="page-header align-center">
                            <h1 class="page-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><?php esc_html_e('Oops, it looks like this page does not exist.', 'inflow'); ?></h1>
                        </header><!-- .page-header -->
                    <?php endif; ?>

                    <?php  if ( $add_menu_text ) : ?>
                        <div class="page-subcontent align-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $add_menu_text; ?>
                        </div><!-- .page-subcontent -->
                    <?php endif; ?>
                    <nav class="error-404-page-menu wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <?php wp_nav_menu(
							array(
								'theme_location' 		=> 	'error',
								'menu_id' 				=> 	'error-menu',
								'menu_class' 			=> 	'main-content-menu',
								'container_class'		=>	'main-menu-container'
							)
						); ?>
                    </nav>
                </section><!-- .error-404 -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
