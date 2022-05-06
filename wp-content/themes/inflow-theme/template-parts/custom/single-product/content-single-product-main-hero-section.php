<?php 
    $add_hero_background_color = get_field('main_section_background_color');
	$hero_background_image = get_field('main_section_background_image');

	$section_main_title = get_field('main_section_main_title');
	$short_hero_description = get_field('main_section_short_description');

?>
<?php if ( $section_main_title || $short_hero_description ) : ?>
    <section class="hero-section hero-section-smaller main-hero-section-single-product main-hero-section-single-product-hybrid wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
        <div class="hero-section-wrapper relative"<?php if ( $add_hero_background_color ) : ?> style="background-color:<?php echo $add_hero_background_color; ?>"<?php endif; ?>>
            <div class="hero-section-background-image"<?php  if ( $hero_background_image ) : ?> style="background-image: url(<?php echo esc_url($hero_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_background_image['alt']); ?>"<?php endif; ?>></div>
            <div class="container">
                <div class="row hero-smaller-row">
                    <div class="hero-smaller-text-description-content single-product-hero col-md-12">
                        <div class="hero-single-product-text-description-content-inner">
                            <div class="hero-header-text-description-wrap align-center">
                                <?php if ( $section_main_title ) : ?>
                                    <header class="entry-header main-header">
                                        <h1 class="main-title wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo $section_main_title; ?></h1>
                                    </header>
                                <?php endif; ?>
                                <?php  if ( $short_hero_description ) : ?>
                                    <div class="entry-content main-hero-description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                        <?php echo $short_hero_description; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php 
$first_product_menu_item = get_field('first_product_menu_item');
$second_product_menu_item = get_field('second_product_menu_item');
$add_hash_for_second = get_field('add_hash_for_second');
?>
<?php  if ( $first_product_menu_item || $second_product_menu_item ) : ?>
    <div class="anchor-product-main-navigation wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
        <div class="container">
            <div id="anchor-menu-items" class="anchor-menu-navigation align-center">
                <nav>
                    <ul class="anchor-product-list">
                        <li><a class="product-anchor-link smoothscroll" href="#first-product-hero"><span><?php echo $first_product_menu_item; ?></span></a></li>
                        <li><a class="product-anchor-link smoothscroll" href="#<?php echo $add_hash_for_second; ?>"><span><?php echo $second_product_menu_item; ?></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> <!-- /.    <div class="anchor-product-main-navigation">
 -->
<?php endif; ?>
