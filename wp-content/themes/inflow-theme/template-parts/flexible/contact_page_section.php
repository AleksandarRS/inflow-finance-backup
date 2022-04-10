<?php 
    $include_map_into_page = get_sub_field('include_map_into_page');

    $add_map = get_field('add_map', 'option');
?>
<section id="page-contact-details-section" class="contact-details-section contact-page-details-section custom-form-elements-position<?php  if ( $include_map_into_page ) : ?> map-is-included-into-page<?php endif ?>">
    <div class="contact-page-details-section-wrapper section-wrapper relative">
        <div class="contact-page-details-section-inner">
            <?php get_template_part( 'template-parts/content', 'theme-contact-details' ); ?>

            <?php  if ( $include_map_into_page ) : ?>
                <?php  if ( $add_map ) : ?>
                    <div class="contact-details-map-section-details">
                        <img src="<?php echo esc_url($add_map['url']); ?>" alt="<?php echo esc_attr($add_map['alt']); ?>">
                    </div>
                <?php endif ?>
            <?php endif ?>

        </div>
    </div>
</section>
