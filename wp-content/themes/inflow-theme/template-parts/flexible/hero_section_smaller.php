<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');

$main_hero_title = get_sub_field('main_title');
$section_short_description = get_sub_field('section_short_description');
// $link = get_sub_field('button_option');
?>
<section class="hero-section hero-section-smaller wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="hero-section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <div class="hero-section-background-image"<?php  if ( $section_background_image ) : ?> style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"<?php endif; ?>></div>
        <div class="container-fluid">
            <div class="row hero-smaller-row">
                <div class="hero-smaller-text-description-content col-md-12">
                    <div class="hero-smaller-text-description-content-inner">
                        <header class="entry-header main-header align-center">
                            <?php if ( $main_hero_title ) : ?>
                                <h1 class="main-hero-title main-title wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo $main_hero_title; ?></h1>
                            <?php else: ?>
                                <h1 class="main-hero-title main-title wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_title(); ?></h1>
                            <?php endif; ?>
                        </header>
                        <div class="entry-content-button-wrapper">
                            <?php  if ( $section_short_description ) : ?>
                                <div class="entry-content main-hero-description align-center align-center wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
                                    <?php echo $section_short_description; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ( get_sub_field('button_option') !== true ) : ?>
                            <?php
                                // if( $link ): 
                                //     $link_url = $link['url'];
                                //     $link_title = $link['title'];
                                //     $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="button-wrapper align-center">
                                    <a class="button button-secondary smoothscroll wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                                    <!-- <a class="button button-secondary" href="<?php // echo esc_url( $link_url ); ?>" target="<?php // echo esc_attr( $link_target ); ?>"><?php // echo esc_html( $link_title ); ?></a> -->
                                </div>
                        <?php // endif; ?>
                        <?php endif; ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
