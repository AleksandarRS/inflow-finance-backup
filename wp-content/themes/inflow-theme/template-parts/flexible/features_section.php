<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');

$add_icon_a = get_sub_field('add_icon_a');
$add_icon_c = get_sub_field('add_icon_c');
$add_large_icon_image = get_sub_field('add_large_icon_image');
$add_description_a = get_sub_field('add_description_a');
$add_description_c = get_sub_field('add_description_c');

$add_icon_d = get_sub_field('add_icon_d');
$add_icon_e = get_sub_field('add_icon_e');
$add_icon_f = get_sub_field('add_icon_f');
$add_description_d = get_sub_field('add_description_d');
$add_description_e = get_sub_field('add_description_e');
$add_description_f = get_sub_field('add_description_f');

?>
<section class="features-section">
    <div class="features-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="features-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="features-section-wrapper-inner">
            <div class="container">
                <div class="row features-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>

                    <div class="features-items col-md-12">
                        <div class="row features-items-row">
                            <?php  if ( $add_icon_a || $add_description_a ) : ?>
                                <div class="features-item col-md-4 align-center">
                                    <div class="features-item-inner">
                                        <div class="features-icon-wrap">
                                            <img src="<?php echo esc_url($add_icon_a['url']); ?>" alt="<?php echo esc_attr($add_icon_a['alt']); ?>">
                                        </div>
                                        <div class="features-item-heading-text-decription">
                                            <?php echo $add_description_a; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( $add_large_icon_image ) : ?>
                                <div class="features-item col-md-4">
                                    <div class="features-item-inner">
                                        <div class="features-image-wrap">
                                            <img src="<?php echo esc_url($add_large_icon_image['url']); ?>" alt="<?php echo esc_attr($add_large_icon_image['alt']); ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( $add_icon_c || $add_description_c ) : ?>
                                <div class="features-item col-md-4 align-center">
                                    <div class="features-item-inner">
                                        <div class="features-icon-wrap">
                                            <img src="<?php echo esc_url($add_icon_c['url']); ?>" alt="<?php echo esc_attr($add_icon_c['alt']); ?>">
                                        </div>
                                        <div class="features-item-heading-text-decription">
                                            <?php echo $add_description_c; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( $add_icon_d || $add_description_d ) : ?>
                                <div class="features-item col-md-4 align-center">
                                    <div class="features-item-inner">
                                        <div class="features-icon-wrap">
                                            <img src="<?php echo esc_url($add_icon_d['url']); ?>" alt="<?php echo esc_attr($add_icon_d['alt']); ?>">
                                        </div>
                                        <div class="features-item-heading-text-decription">
                                            <?php echo $add_description_d; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( $add_icon_e || $add_description_e ) : ?>
                                <div class="features-item col-md-4 align-center">
                                    <div class="features-item-inner">
                                        <div class="features-icon-wrap">
                                            <img src="<?php echo esc_url($add_icon_e['url']); ?>" alt="<?php echo esc_attr($add_icon_e['alt']); ?>">
                                        </div>
                                        <div class="features-item-heading-text-decription">
                                            <?php echo $add_description_e; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( $add_icon_f || $add_description_f ) : ?>
                                <div class="features-item col-md-4 align-center">
                                    <div class="features-item-inner">
                                        <div class="features-icon-wrap">
                                            <img src="<?php echo esc_url($add_icon_f['url']); ?>" alt="<?php echo esc_attr($add_icon_f['alt']); ?>">
                                        </div>
                                        <div class="features-item-heading-text-decription">
                                            <?php echo $add_description_f; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div> <!-- /.features-items col-md-12 -->

                </div>
            </div>
        </div> <!-- /.features-section-wrapper-inner -->
    </div>
</section>
