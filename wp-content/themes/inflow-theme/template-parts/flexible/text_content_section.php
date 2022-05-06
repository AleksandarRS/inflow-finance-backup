<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_content = get_sub_field('section_content');
?>
<section class="text-content-section wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="text-content-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="text-content-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="text-content-section-wrapper-inner">
            <div class="container-narrow-wide">
                <div class="row text-content-row">
                    <?php  if ( $section_content ) : ?>
                        <div class="entry-content section-content col-md-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                            <?php echo $section_content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
