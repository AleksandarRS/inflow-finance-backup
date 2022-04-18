<?php 
    $text_content = get_field('text_content');
    $add_section_image = get_field('add_section_image');
    $text_content_s = get_field('text_content_s');
    $add_section_image_s = get_field('add_section_image_s');
?>

<?php  if ( $add_section_image || $text_content || $add_section_image_s || $text_content_s ) : ?>
    <div class="text-image-image-text-sections-wrapper">
        <div class="container">
            <div class="row main-section-row">
                <?php  if ( $add_section_image || $text_content ) : ?>
                    <section class="text-image-image-text-section text-image text-image-single-case-study">        
                        <div class="container-fluid">
                            <div class="row text-image-row">
                                <?php  if ( $add_section_image ) : ?>
                                    <div class="text-image-main-image-wrapper col-md-4">
                                        <div class="text-image-main-image-list-inner">
                                            <div class="text-image-main-image-wrap">
                                                <img src="<?php echo esc_url($add_section_image['url']); ?>" alt="<?php echo esc_attr($add_section_image['alt']); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php  if ( $text_content ) : ?>
                                    <div class="text-image-text-description-content col-md-8">
                                        <div class="text-image-header-text-description-wrap">
                                            <div class="entry-content section-description-inner section-description-large">
                                                <?php echo $text_content; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
                <?php  if ( $add_section_image_s || $text_content_s ) : ?>
                    <section class="text-image-image-text-section image-text image-text-single-case-study">        
                        <div class="container-fluid">
                            <div class="row image-text-row">
                                <?php  if ( $add_section_image_s ) : ?>
                                    <div class="image-text-main-image-wrapper col-md-4">
                                        <div class="image-text-main-image-list-inner">
                                            <div class="image-text-main-image-wrap">
                                                <img src="<?php echo esc_url($add_section_image_s['url']); ?>" alt="<?php echo esc_attr($add_section_image_s['alt']); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php  if ( $text_content_s ) : ?>
                                    <div class="image-text-text-description-content col-md-8">
                                        <div class="image-text-header-text-description-wrap">
                                            <div class="entry-content section-description-inner section-description-large">
                                                <?php echo $text_content_s; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <div class="section-button-wrapper align-center col-md-12">
                    <a class="button button-secondary smoothscroll" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
        