<?php 
	$product_page_hero_bg_color = get_field('product_page_hero_bg_color', 'option');
	$product_page_hero_image = get_field('product_page_hero_image', 'option');

	$product_page_hero_title = get_field('product_page_hero_title', 'option');
	$product_page_description = get_field('product_page_description', 'option');

	$product_page_cta_button_link = get_field('product_page_cta_button_link', 'option');
?>
<section class="hero-section hero-section-smaller">
    <div class="hero-section-wrapper relative"<?php if ( $product_page_hero_bg_color ) : ?> style="background-color:<?php echo $product_page_hero_bg_color; ?>"<?php endif; ?>>
        <?php  if ( $product_page_hero_image ) : ?>
            <div class="hero-section-background-image" style="background-image: url(<?php echo esc_url($product_page_hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($product_page_hero_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="container-fluid">
            <div class="row hero-smaller-row">
                <div class="hero-smaller-text-description-content archive-hero col-md-12">
                    <div class="hero-smaller-text-description-content-inner">
                        <header class="entry-header main-header align-center">
                            <?php if ( $product_page_hero_title ) : ?>
                                <h1 class="main-hero-title main-title"><?php echo $product_page_hero_title; ?></h1>
                            <?php else: ?>
                                <h1 class="main-hero-title main-title"><?php echo inflow_archive_title(); ?></h1>
                            <?php endif; ?>
                        </header>
                        <?php  if ( $product_page_description || $product_page_cta_button_link ) : ?>
                            <div class="entry-content-button-wrapper">
                                <?php  if ( $product_page_description ) : ?>
                                    <div class="entry-content main-hero-description align-center">
                                        <?php echo $product_page_description; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                    if( $product_page_cta_button_link ): 
                                        $link_url = $product_page_cta_button_link['url'];
                                        $link_title = $product_page_cta_button_link['title'];
                                        $link_target = $product_page_cta_button_link['target'] ? $product_page_cta_button_link['target'] : '_self';
                                    ?>
                                    <div class="button-wrapper align-center">
                                        <a class="button button-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
