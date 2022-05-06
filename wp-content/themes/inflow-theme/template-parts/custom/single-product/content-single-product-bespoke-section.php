<?php 
    $section_background_color_b = get_field('section_background_color_b');
	$section_background_image_b = get_field('section_background_image_b');

	$first_row_content = get_field('first_row_content');
	$first_column_content = get_field('first_column_content');
	$second_column_content = get_field('second_column_content');
    
?>
<?php if ( $first_row_content || $first_column_content || $second_column_content ): ?>
    <section class="bespoke-section bespoke-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
        <div class="bespoke-section-wrapper relative"<?php if ( $section_background_color_b ) : ?> style="background-color:<?php echo $section_background_color_b; ?>"<?php endif; ?>>
            
            <div class="section-background-image"<?php  if ( $section_background_image_b ) : ?> style="background-image: url(<?php echo esc_url($section_background_image_b['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image_b['alt']); ?>"<?php endif; ?>></div>
            
            <div class="container bespoke-section-container">
                <?php if ( $first_row_content || $first_column_content || $second_column_content ): ?>
                    <div class="row bespoke-row">
                        <?php  if ( $first_row_content ) : ?>
                            <div class="bespoke-text-description-content col-md-12">
                                <div class="bespoke-header-text-description-wrap">
                                    <div class="entry-content section-description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                        <?php echo $first_row_content; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php  if ( $first_column_content ) : ?>
                            <div class="bespoke-column-content-wrapper col-md-6">
                                <div class="bespoke-column-content-inner wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
                                    <?php echo $first_column_content; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php  if ( $second_column_content ) : ?>
                            <div class="bespoke-column-content-wrapper col-md-6 wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
                                <div class="bespoke-column-content-inner">
                                    <?php echo $second_column_content; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
<?php endif;?>
