<?php 
    $add_hero_background_color = get_field('add_hero_background_color_c');
	$hero_background_image = get_field('hero_background_image_c');

	$short_hero_description = get_field('short_hero_description_c');

	// $product_prediction_cta_button_option = get_field('product_prediction_cta_button_option');

    $product_prediction_item_title_a_c = get_field('product_prediction_item_title_a_c');
    $product_prediction_item_title_b_c = get_field('product_prediction_item_title_b_c');
    $product_prediction_item_title_c_c = get_field('product_prediction_item_title_c_c');

    $product_prediction_item_data_a_c = get_field('product_prediction_item_data_a_c');
    $product_prediction_item_data_b_c = get_field('product_prediction_item_data_b_c');
    $product_prediction_item_data_c_c = get_field('product_prediction_item_data_c_c');


    $add_hash_for_second = get_field('add_hash_for_second');
    $second_main_title = get_field('second_main_title');
    $second_excerpt = get_field('second_excerpt');

    $add_hero_title_here_c = get_field('add_hero_title_here_c');
    
?>
<?php if ( ($add_hero_title_here_c || $short_hero_description) || ( $product_prediction_item_data_a_c || $product_prediction_item_data_b_c || $product_prediction_item_data_c_c ) ) : ?>
<section id="<?php echo $add_hash_for_second; ?>" class="hero-section hero-section-single-product<?php  if ( $add_hash_for_second ) : ?> second-hero-activated<?php endif; ?>">
    <div class="hero-section-wrapper relative"<?php if ( $add_hero_background_color ) : ?> style="background-color:<?php echo $add_hero_background_color; ?>"<?php endif; ?>>
        <div class="hero-section-background-image"<?php  if ( $hero_background_image ) : ?> style="background-image: url(<?php echo esc_url($hero_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_background_image['alt']); ?>"<?php endif; ?>></div>
        <div class="container">
            <div class="row hero-smaller-row">
                <div class="hero-smaller-text-description-content single-product-hero col-md-12">
                    <div class="hero-single-product-text-description-content-inner d-flex">
                        <div class="hero-header-text-description-wrap">
                            <?php if ( $add_hero_title_here_c ) : ?>
                                <header class="entry-header main-header">
                                    <h1 class="main-title"><?php echo $add_hero_title_here_c; ?></h1>
                                </header>
                            <?php endif; ?>
                            <?php  if ( $short_hero_description ) : ?>
                                <div class="entry-content main-hero-description">
                                    <?php echo $short_hero_description; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php  if ( $product_prediction_item_data_a_c || $product_prediction_item_data_b_c || $product_prediction_item_data_c_c ) : ?>
                        <div class="hero-prediction-button-wrap">
                            <div class="posts-cards-items">
                                <div class="post-prediction-items-button-wrapper">
                                    <div class="post-prediction-items">
                                        <div class="post-prediction-item">
                                            <?php  if ( $product_prediction_item_title_a_c ) : ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php echo $product_prediction_item_title_a_c; ?></p>
                                                </div>
                                            <?php else: ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php _e('Min rate', 'inflow') ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php  if ( $product_prediction_item_data_a_c ) : ?>
                                                <div class="post-prediction-item-number">
                                                    <p><?php echo $product_prediction_item_data_a_c; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="post-prediction-item">
                                            <?php  if ( $product_prediction_item_title_b_c ) : ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php echo $product_prediction_item_title_b_c; ?></p>
                                                </div>
                                            <?php else: ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php _e('Max ltv', 'inflow') ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php  if ( $product_prediction_item_data_b_c ) : ?>
                                                <div class="post-prediction-item-number">
                                                    <p><?php echo $product_prediction_item_data_b_c; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="post-prediction-item">
                                            <?php  if ( $product_prediction_item_title_c_c ) : ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php echo $product_prediction_item_title_c_c; ?></p>
                                                </div>
                                            <?php else: ?>
                                                <div class="post-prediction-item-title">
                                                    <p><?php _e('Min loan', 'inflow') ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php  if ( $product_prediction_item_data_c_c ) : ?>
                                                <div class="post-prediction-item-number">
                                                    <p><?php echo $product_prediction_item_data_c_c; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php
                                // if( $product_prediction_cta_button_option ): 
                                //     $link_url = $product_prediction_cta_button_option['url'];
                                //     $link_title = $product_prediction_cta_button_option['title'];
                                //     $link_target = $product_prediction_cta_button_option['target'] ? $product_prediction_cta_button_option['target'] : '_self';
                                ?>
                                <div class="button-wrapper">
                                    <!-- <a class="button button-secondary" href="<?php // echo esc_url( $link_url ); ?>" target="<?php // echo esc_attr( $link_target ); ?>"><?php // echo esc_html( $link_title ); ?></a> -->
                                    <a class="button button-secondary smoothscroll" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                                </div>
                            <?php // endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
