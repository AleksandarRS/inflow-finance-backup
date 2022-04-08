<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
?>
<section class="steps-section">
    <div class="steps-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="steps-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="steps-section-wrapper-inner">
            <div class="container">
                <div class="row steps-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('add_steps') ): ?>
                        <div class="steps-items">
                            <?php $i = 1; ?>
                            <?php while ( have_rows('add_steps') ) : the_row(); ?>
                                <div class="steps-item">
                                    <span class="step-number"><?php echo $i; ?>. </span>
                                    <div class="description-step">
                                        <?php the_sub_field('add_step'); ?>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
