<?php 
    $add_text_content = get_field('add_text_content');
	$add_image = get_field('add_image');
    
?>
<?php  if ( $add_image || $add_text_content ) : ?>
    <section class="text-image text-image-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">        
        <div class="container">
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
