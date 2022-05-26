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
            <div class="container large-text-section-container relative">
                <div class="street-light-image-animation">
                    <svg width="602" height="850" viewBox="0 0 602 850" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="animated-light" d="M346.013 119.037C331.955 82.9877 259.079 82.9877 245.021 119.037L0 849H602L346.013 119.037Z" fill-opacity="0.55"/>
                        <path d="M125 849V41C125 18.9086 142.909 1 165 1H257C279.091 1 297 18.9086 297 41V71.3352" stroke="#262727" stroke-width="2" stroke-linecap="round"/>
                        <circle r="59.8033" transform="matrix(-1 0 0 1 296.599 145.276)" fill="#FFD67E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M216.395 161.943C216.335 160.673 216.305 159.394 216.305 158.109C216.305 113.761 252.256 77.8105 296.604 77.8105C340.951 77.8105 376.902 113.761 376.902 158.109C376.902 159.394 376.872 160.673 376.812 161.943H216.395Z" fill="#50C6DB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M187.92 161.943C194.305 112.185 236.819 73.7324 288.314 73.7324C339.809 73.7324 382.323 112.185 388.708 161.943H390.725C384.327 111.077 340.915 71.7324 288.314 71.7324C235.713 71.7324 192.301 111.077 185.904 161.943H187.92Z" fill="#262727"/>
                    </svg>
                </div>
                <div class="container-narrow-wide large-text-container-narrow-wide">
                    <div class="row large-text-row">
                        <?php  if ( $section_description ) : ?>
                            <div class="entry-content section-description large-text-section-description col-md-12 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                <?php echo $section_description; ?>
                            </div>
                        <?php endif; ?>
                        <!-- <?php // if ( $section_left_column ) : ?>
                            <div class="large-text-section-content-column col-md-6 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                <?php // echo $section_left_column; ?>
                            </div>
                        <?php // endif; ?>
                        <?php // if ( $section_right_column ) : ?>
                            <div class="large-text-section-content-column large-text-section-content-column-right col-md-6 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                <?php // echo $section_right_column; ?>
                            </div>
                        <?php // endif; ?> -->

                        <?php  if ( get_sub_field('enable_button') == true ) : ?>
                            <div class="col-md-12 button-wrapper align-center">
                                <a class="button button-secondary smoothscroll wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
