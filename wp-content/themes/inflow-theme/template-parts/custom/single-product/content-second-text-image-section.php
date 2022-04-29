<?php 
    $add_text_content = get_field('add_text_content_c');
	$add_image = get_field('add_image_c');
    
?>
<?php  if ( $add_image || $add_text_content ) : ?>
    <section class="text-image text-image-single-product">        
        <div class="container">
            <div class="row text-image-row">
                <?php  if ( $add_image ) : ?>
                    <div class="text-image-main-image-wrapper col-md-6">
                        <div class="text-image-main-image-list-inner">
                            <div class="text-image-main-image-wrap">
                                <img src="<?php echo esc_url($add_image['url']); ?>" alt="<?php echo esc_attr($add_image['alt']); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php  if ( $add_text_content ) : ?>
                    <div class="text-image-text-description-content col-md-6">
                        <div class="text-image-header-text-description-wrap">
                            <div class="entry-content section-description-inner section-description-large">
                                <?php echo $add_text_content; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
