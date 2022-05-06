<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');

$after_products_cta_section = get_sub_field('after_products_cta_section');

$see_all_products_link = get_sub_field('see_all_products_link');

$left_bg_decoration_image = get_sub_field('left_bg_decoration_image');
$right_bg_decoration_image = get_sub_field('right_bg_decoration_image');
?>

<section class="most-popular-products-section wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="most-popular-products-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $left_bg_decoration_image ) : ?>
            <div class="most-popular-products-decorational-image most-popular-products-decorational-image-left wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
                <img src="<?php echo esc_url($left_bg_decoration_image['url']); ?>" alt="<?php echo esc_attr($left_bg_decoration_image['alt']); ?>">
            </div>
        <?php endif; ?>
        <?php  if ( $right_bg_decoration_image ) : ?>
            <div class="most-popular-products-decorational-image most-popular-products-decorational-image-right wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">
                <img src="<?php echo esc_url($right_bg_decoration_image['url']); ?>" alt="<?php echo esc_attr($right_bg_decoration_image['alt']); ?>">
            </div>
        <?php endif; ?>
        <?php  if ( $section_background_image ) : ?>
            <div class="most-popular-productssection-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="most-popular-products-section-wrapper-inner">
            <div class="container-middle-wide">
                <div class="row most-popular-products-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>

                    <?php  $featured_blog_posts = get_sub_field('choose_most_popular_products');
                        if( $featured_blog_posts ): ?>
                        <div class="posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12">
                            <div class="row post-posts-items-cards-row posts-cards-items">
                                <?php foreach( $featured_blog_posts as $post ): 
                                    setup_postdata($post); ?>
                                    <?php get_template_part( 'template-parts/content', 'product-cards' ); ?>
                                <?php endforeach; ?>
                            </div> <!-- /.row post-posts-items-cards-row -->
                        </div> <!-- /.posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12 -->
                        <?php 
                            // Reset the global post object so that the rest of the page works correctly.
                            wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <?php if ( $after_products_cta_section ) : ?>
                        <div class="after-products-cta-element col-md-12 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <?php echo $after_products_cta_section; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                        if( $see_all_products_link ): 
                            $link_url = $see_all_products_link['url'];
                            $link_title = $see_all_products_link['title'];
                            $link_target = $see_all_products_link['target'] ? $see_all_products_link['target'] : '_self';
                        ?>
                        <div class="button-wrapper align-center col-md-12">
                            <a class="button button-secondary wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
