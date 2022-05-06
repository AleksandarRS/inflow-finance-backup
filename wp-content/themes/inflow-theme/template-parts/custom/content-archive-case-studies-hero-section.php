<?php 
	
	$case_study_page_hero_image = get_field('case_study_page_hero_image', 'option');

	$case_study_page_hero_title = get_field('case_study_page_hero_title', 'option');
	$case_study_page_description = get_field('case_study_page_description', 'option');

	// $product_page_cta_button_link = get_field('product_page_cta_button_link', 'option');
?>
<section class="hero-section hero-section-case-study-archive hero-posts wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="hero-section-wrapper relative">
        <div class="hero-section-background-image"<?php  if ( $case_study_page_hero_image ) : ?> style="background-image: url(<?php echo esc_url($case_study_page_hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($case_study_page_hero_image['alt']); ?>"<?php endif; ?>></div>
        <div class="container-fluid">
            <div class="row hero-smaller-row">
                <div class="hero-smaller-text-description-content archive-hero-case-study col-md-12">
                    <div class="hero-smaller-text-description-content-inner">
                        <header class="entry-header main-header align-center">
                            <?php if ( $case_study_page_hero_title ) : ?>
                                <h1 class="main-hero-title main-title wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo $case_study_page_hero_title; ?></h1>
                            <?php else: ?>
                                <h1 class="main-hero-title main-title wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo inflow_archive_title(); ?></h1>
                            <?php endif; ?>
                        </header>
                        <?php  if ( $case_study_page_description ) : ?>
                            <div class="entry-content-button-wrapper">
                                <?php  if ( $case_study_page_description ) : ?>
                                    <div class="entry-content main-hero-description align-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                        <?php echo $case_study_page_description; ?>
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
