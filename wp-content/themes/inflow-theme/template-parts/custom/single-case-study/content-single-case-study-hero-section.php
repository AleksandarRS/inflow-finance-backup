<?php 
    $add_hero_background_color = get_field('add_hero_background_color');
	$hero_background_image = get_field('hero_background_image');

    $location = get_field('location');
    $property_type = get_field('property_type');

    $product_prediction_item_title_a = get_field('product_prediction_item_title_a');
    $product_prediction_item_title_b = get_field('product_prediction_item_title_b');
    $product_prediction_item_title_c = get_field('product_prediction_item_title_c');

    $product_prediction_item_data_a = get_field('product_prediction_item_data_a');
    $product_prediction_item_data_b = get_field('product_prediction_item_data_b');
    $product_prediction_item_data_c = get_field('product_prediction_item_data_c');

    $product_prediction_item_title_a_c = get_field('product_prediction_item_title_a_c');
    $product_prediction_item_title_b_c = get_field('product_prediction_item_title_b_c');
    $product_prediction_item_title_c_c = get_field('product_prediction_item_title_c_c');

    $product_prediction_item_data_a_c = get_field('product_prediction_item_data_a_c');
    $product_prediction_item_data_b_c = get_field('product_prediction_item_data_b_c');
    $product_prediction_item_data_c_c = get_field('product_prediction_item_data_c_c');
?>

<section class="hero-section hero-section-single-product hero-posts">
    <div class="hero-section-wrapper single-case-study-hero relative"<?php if ( $add_hero_background_color ) : ?> style="background-color:<?php echo $add_hero_background_color; ?>"<?php endif; ?>>
        <div class="hero-section-background-image"<?php  if ( $hero_background_image ) : ?> style="background-image: url(<?php echo esc_url($hero_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_background_image['alt']); ?>"<?php endif; ?>></div>
        <div class="container-middle-wide-large container-middle-wide-large-case-study">
            <div class="row hero-smaller-row">
                <div class="single-case-study-featured-image col-md-6" style="background-image: url('<?php if( get_the_post_thumbnail() ): ?><?php the_post_thumbnail_url(); ?><?php else: ?><?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg<?php endif; ?>');"></div>
                <div class="hero-smaller-text-description-content single-product-hero col-md-6">
                    <div class="hero-single-case-study-text-description-content-inner">
                        <div class="hero-header-text-description-wrap">
                            <header class="entry-header main-header">
                                <h1 class="main-hero-title main-title"><?php echo the_title(); ?></h1>
                            </header>
                            <?php if( have_rows('product_card_links') ): ?>
                                <div class="product-page-links">
                                    <?php while ( have_rows('product_card_links') ) : the_row(); ?>
                                        <?php $card_links_to_products = get_sub_field('card_links_to_products'); ?>
                                            <?php if( $card_links_to_products ): 
                                                $link_url = $card_links_to_products['url'];
                                                $link_title = $card_links_to_products['title'];
                                                $link_target = $card_links_to_products['target'] ? $card_links_to_products['target'] : '_self';
                                            ?>
                                            <a class="term-name" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif;?>

                            <?php  if ( $location || $property_type ) : ?>
                                <div class="location-type-details">
                                    <?php  if ( $location ) : ?>
                                        <p><strong><?php _e('Location: ', 'inflow') ?></strong><?php echo $location; ?></p>
                                    <?php endif;?>
                                    <?php  if ( $property_type ) : ?>
                                        <p><strong><?php _e('Property Type: ', 'inflow') ?></strong><?php echo $property_type; ?></p>
                                    <?php endif;?>
                                </div>
                            <?php endif;?>

                        </div>
                        <div class="hero-prediction-button-wrap">
                            <div class="posts-cards-items">
                                <div class="case-study-prediction-items-button-wrapper">
                                    <div class="post-prediction-items">
                                        <?php  if ( $product_prediction_item_title_a && $product_prediction_item_data_a ) : ?>
                                            <div class="post-prediction-item">
                                                <?php  if ( $product_prediction_item_title_a ) : ?>
                                                    <div class="post-prediction-item-title">
                                                        <p><?php echo $product_prediction_item_title_a; ?></p>
                                                    </div>
                                                <?php // else: ?>
                                                    <!-- <div class="post-prediction-item-title">
                                                        <p><?php // _e('Loan amount', 'inflow') ?></p>
                                                    </div> -->
                                                <?php endif; ?>
                                                <?php  if ( $product_prediction_item_data_a ) : ?>
                                                    <div class="post-prediction-item-number">
                                                        <p><?php echo $product_prediction_item_data_a; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php  if ( $product_prediction_item_title_b && $product_prediction_item_data_b ) : ?>
                                            <div class="post-prediction-item">
                                                <?php  if ( $product_prediction_item_title_b ) : ?>
                                                    <div class="post-prediction-item-title">
                                                        <p><?php echo $product_prediction_item_title_b; ?></p>
                                                    </div>
                                                <?php // else: ?>
                                                    <!-- <div class="post-prediction-item-title">
                                                        <p><?php // _e('Ltv', 'inflow') ?></p>
                                                    </div> -->
                                                <?php endif; ?>
                                                <?php  if ( $product_prediction_item_data_b ) : ?>
                                                    <div class="post-prediction-item-number">
                                                        <p><?php echo $product_prediction_item_data_b; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php  if ( $product_prediction_item_title_c && $product_prediction_item_data_c ) : ?>
                                            <div class="post-prediction-item">
                                                <?php  if ( $product_prediction_item_title_c ) : ?>
                                                    <div class="post-prediction-item-title">
                                                        <p><?php echo $product_prediction_item_title_c; ?></p>
                                                    </div>
                                                <?php // else: ?>
                                                    <!-- <div class="post-prediction-item-title">
                                                        <p><?php // _e('Rate', 'inflow') ?></p>
                                                    </div> -->
                                                <?php endif; ?>
                                                <?php  if ( $product_prediction_item_data_c ) : ?>
                                                    <div class="post-prediction-item-number">
                                                        <p><?php echo $product_prediction_item_data_c; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>