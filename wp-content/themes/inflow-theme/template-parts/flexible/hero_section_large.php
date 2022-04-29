<?php
$main_hero_title = get_sub_field('main_title');
$section_short_description = get_sub_field('section_short_description');
// $link = get_sub_field('button_option');

$section_background_image = get_sub_field('section_background_image');

$section_main_image = get_sub_field('section_main_image');
?>
<section class="hero-section hero-section-large">
    <div class="hero-section-wrapper">
        <?php  if ( $section_background_image ) : ?>
            <div class="hero-section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="container-fluid">
            <div class="row hero-row">
                <div class="hero-image-content col-md-6">
                    <?php  if ( $section_main_image ) : ?>
                        <div id="lottie-hero-static" class="hero-image-wrap">
                            <img src="<?php echo esc_url($section_main_image['url']); ?>" alt="<?php echo esc_attr($section_main_image['alt']); ?>">
                        </div>
                    <?php else: ?>
                        <div id="lottie-hero" class="hero-image-wrap"></div>
                    <?php endif; ?>
                </div>
                <div class="hero-text-description-content col-md-6">
                    <div class="hero-text-description-content-inner left-calc-wide">
                        <header class="entry-header main-header">
                            <?php if ( $main_hero_title ) : ?>
                                <h1 class="main-hero-title main-title"><?php echo $main_hero_title; ?></h1>
                            <?php else: ?>
                                <h1 class="main-hero-title main-title"><?php the_title(); ?></h1>
                            <?php endif; ?>
                        </header>
                        <?php  if ( $section_short_description || $link ) : ?>
                            <div class="entry-content-button-wrapper">
                                <?php  if ( $section_short_description ) : ?>
                                    <div class="entry-content main-hero-description">
                                        <?php echo $section_short_description; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                    // if( $link ): 
                                    //     $link_url = $link['url'];
                                    //     $link_title = $link['title'];
                                    //     $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <div class="button-wrapper">
                                        <!-- <a class="button button-secondary" href="<?php // echo esc_url( $link_url ); ?>" target="<?php // echo esc_attr( $link_target ); ?>"><?php // echo esc_html( $link_title ); ?></a> -->
                                        <a class="button button-secondary smoothscroll" href="#cta-contact"><?php _e('Start your next property project', 'inflow') ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php // endif; ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
