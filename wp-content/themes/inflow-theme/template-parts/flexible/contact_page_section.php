<?php 
    $include_map_into_page = get_sub_field('include_map_into_page');
    $add_map = get_field('add_map', 'option');
    $map_link = get_field('map_link', 'option');
?>
<section id="page-contact-details-section" class="contact-details-section contact-page-details-section wow fadeIn custom-form-elements-position<?php  if ( $include_map_into_page ) : ?> map-is-included-into-page<?php endif ?>" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="contact-page-details-section-wrapper section-wrapper relative">
        <div class="contact-page-details-section-inner">
            <?php get_template_part( 'template-parts/content', 'theme-contact-details' ); ?>

            <?php  if ( $include_map_into_page ) : ?>
                <?php  if ( $add_map ) : ?>
                    <div class="contact-details-map-section-details wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <?php  if ( $map_link ) : ?>
                            <a href="<?php echo $map_link; ?>" target="_blank">
                        <?php endif ?>
                            <img src="<?php echo esc_url($add_map['url']); ?>" alt="<?php echo esc_attr($add_map['alt']); ?>">
                        <?php  if ( $map_link ) : ?>
                            </a>
                        <?php endif ?>
                    </div>
                <?php endif ?>
            <?php endif ?>

        </div>
    </div>
</section>
