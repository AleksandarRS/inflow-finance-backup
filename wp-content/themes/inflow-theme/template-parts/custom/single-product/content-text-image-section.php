<?php 
    $add_text_content = get_field('add_text_content');
	$add_image = get_field('add_image');

    $add_text_content_s = get_field('add_text_content_s');
	$add_image_s = get_field('add_image_s');
    
?>
<?php  if ( $add_image || $add_text_content && $add_image_s || $add_text_content_s) : ?>
    <div class="text-image-and-image-text-added-as-sections">
<?php endif; ?>
<?php  if ( $add_image || $add_text_content || $add_image_s || $add_text_content_s) : ?>
    <div class="first-part-of-product text-image-and-image-text-rows-wrapper relative">
        <img class="text-image-decoration-image text-image-decoration-image-top-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/image-text-single-product/blue-triangle.svg" alt="Section blue triangle decoration shape">
        <img class="text-image-decoration-image text-image-decoration-image-middle-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/image-text-single-product/yellow-triangle.svg" alt="Section yello triangle decoration shape">
        <img class="text-image-decoration-image text-image-decoration-image-bottom-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/image-text-single-product/striped-triangle.svg" alt="Section striped triangle decoration shape">
        <?php  if ( $add_image || $add_text_content ) : ?>
            <section class="text-image text-image-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">        
                <div class="container text-image-container">
                    <div class="row text-image-row">
                        <?php  if ( $add_image ) : ?>
                            <div class="text-image-main-image-wrapper col-md-6">
                                <div class="text-image-main-image-list-inner">
                                    <div class="text-image-main-image-wrap">
                                        <img class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s" src="<?php echo esc_url($add_image['url']); ?>" alt="<?php echo esc_attr($add_image['alt']); ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php  if ( $add_text_content ) : ?>
                            <div class="text-image-text-description-content col-md-6">
                                <div class="text-image-header-text-description-wrap">
                                    <div class="entry-content section-description-inner section-description-large wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
                                        <?php echo $add_text_content; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php  if ( $add_image_s || $add_text_content_s ) : ?>
            <section class="image-text image-text-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">        
                <div class="container text-image-container">
                    <div class="row image-text-row">
                        <?php  if ( $add_image_s ) : ?>
                            <div class="image-text-main-image-wrapper col-md-6">
                                <div class="image-text-main-image-list-inner">
                                    <div class="image-text-main-image-wrap">
                                        <img class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s" src="<?php echo esc_url($add_image_s['url']); ?>" alt="<?php echo esc_attr($add_image_s['alt']); ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php  if ( $add_text_content_s ) : ?>
                            <div class="image-text-text-description-content col-md-6">
                                <div class="image-text-header-text-description-wrap">
                                    <div class="entry-content section-description-inner section-description-large wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
                                        <?php echo $add_text_content_s; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php  if ( $add_image || $add_text_content && $add_image_s || $add_text_content_s) : ?>
    </div>
<?php endif; ?>
