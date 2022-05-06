<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
?>
<section class="steps-section  wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
    <div class="steps-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="steps-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="steps-section-wrapper-inner">
            <div class="container">
                <div class="row steps-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <?php echo $section_description; ?>
                            <div class="step-animation-wrapper">
                                <div id="entry-step-animation"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('add_steps') ): ?>
                        <div class="steps-items">
                            <?php $i = 1; ?>
                            <?php $ii = 2; ?>
                            <?php while ( have_rows('add_steps') ) : the_row(); ?>
                                <div class="steps-item wow fadeInUp" data-wow-delay="0.<?php echo $ii; ?>s" data-wow-duration="1s">
                                    <span class="step-number"><?php echo $i; ?>. </span>
                                    <div class="description-step">
                                        <?php the_sub_field('add_step'); ?>
                                    </div>
                                </div>
                                <?php $i++; ?>
                                <?php $ii+=2; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
