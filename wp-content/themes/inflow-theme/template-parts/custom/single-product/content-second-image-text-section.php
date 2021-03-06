<?php 
    $add_text_content_s = get_field('add_text_content_s_c');
	$add_image_s = get_field('add_image_s_c');
    
?>
<?php  if ( $add_image_s || $add_text_content_s ) : ?>
    <section class="second-part-of-product image-text image-text-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">        
        <div class="container">
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
