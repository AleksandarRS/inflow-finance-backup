<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$section_description = get_sub_field('section_description');
?>
<section class="icons-items-section wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="icons-items-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="icons-items-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="icons-items-section-wrapper-inner">
            <div class="container">
                <div class="row icons-items-row">
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>


                    <?php if( have_rows('icon_items_sections') ): ?>
                        <div class="features-items icons-items-features col-md-12">
                            <?php while ( have_rows('icon_items_sections') ) : the_row(); ?>
                                <div class="row features-items-row icons-items-features-row">

                                    <?php if( have_rows('add_icon_items_row') ): ?>
                                        <?php while ( have_rows('add_icon_items_row') ) : the_row(); ?>
                                            <?php 
                                                $add_icon = get_sub_field('add_icon'); 
                                                $add_description = get_sub_field('add_description'); 
                                            ?>
                                            <div class="features-item col-md-4 align-center">
                                                <div class="features-item-inner wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                                    <div class="features-icon-wrap">
                                                        <img src="<?php echo esc_url($add_icon['url']); ?>" alt="<?php echo esc_attr($add_icon['alt']); ?>">
                                                    </div>
                                                    <div class="features-item-heading-text-decription">
                                                        <?php echo $add_description; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif;?>

                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;?>
                    
                        
                            
                        
                    
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
