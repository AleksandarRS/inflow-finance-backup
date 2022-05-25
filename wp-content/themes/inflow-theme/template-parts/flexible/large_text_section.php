<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_description = get_sub_field('section_description');
$section_left_column = get_sub_field('section_left_column');
$section_right_column = get_sub_field('section_right_column');
?>
<section class="large-text-section wow fadeIn">
    <div class="large-text-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="large-text-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="large-text-section-wrapper-inner">
            <div class="container-narrow-wide">
                <div class="row large-text-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description large-text-section-description col-md-12 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>
                    <?php  if ( $section_left_column ) : ?>
                        <div class="large-text-section-content-column col-md-6 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $section_left_column; ?>
                        </div>
                    <?php endif; ?>
                    <?php  if ( $section_right_column ) : ?>
                        <div class="large-text-section-content-column large-text-section-content-column-right col-md-6 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $section_right_column; ?>
                        </div>
                    <?php endif; ?>

                    <?php  if ( get_sub_field('enable_button') == true ) : ?>
                        <div class="col-md-12 button-wrapper align-center">
                            <a class="button button-secondary smoothscroll wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
