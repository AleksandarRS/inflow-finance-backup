<?php 
    $section_background_color_kf = get_field('section_background_color_kf_c');
	$section_background_image_kf = get_field('section_background_image_kf_c');

	$short_section_description_kf = get_field('short_section_description_kf_c');

	$section_content_image_kf = get_field('section_content_image_kf_c');
	$section_list_items_kf = get_field('section_list_items_kf_c');
    
?>
<section class="second-part-of-product key-features key-features-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="key-features-wrapper relative"<?php if ( $section_background_color_kf ) : ?> style="background-color:<?php echo $section_background_color_kf; ?>"<?php endif; ?>>
        <div class="section-background-image"<?php  if ( $section_background_image_kf ) : ?> style="background-image: url(<?php echo esc_url($section_background_image_kf['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image_kf['alt']); ?>"<?php endif; ?>></div>
        <div class="container">
            <?php if ( (have_rows('section_list_items_kf_c')) || $section_content_image_kf || $short_section_description_kf ): ?>
                <div class="row key-features-row">
                    <div class="key-features-text-description-content col-md-12">
                        <div class="key-features-header-text-description-wrap">
                            <?php  if ( $short_section_description_kf ) : ?>
                                <div class="entry-content section-description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                    <?php echo $short_section_description_kf; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="key-features-main-image-list-wrapper col-md-12">
                        <?php if ( (have_rows('section_list_items_kf_c')) || $section_content_image_kf ): ?>
                            <div class="key-features-main-image-list-inner wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                                <?php  if ( $section_content_image_kf ) : ?>
                                    <div class="key-features-main-image-wrap">
                                        <img class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s" src="<?php echo esc_url($section_content_image_kf['url']); ?>" alt="<?php echo esc_attr($section_content_image_kf['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                                <?php if( have_rows('section_list_items_kf_c') ): ?>
                                    <div class="key-features-main-list-wrap">
                                        <ul class="key-features-main-list">
                                            <?php //$i = 0; ?>
                                            <?php while ( have_rows('section_list_items_kf_c') ) : the_row(); ?>
                                                <li class="key-features-main-list-item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="icon icon-list-triangle-decor"></i><?php the_sub_field('add_list_item_c'); ?></li>
                                                <?php //$i+=2; ?>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
