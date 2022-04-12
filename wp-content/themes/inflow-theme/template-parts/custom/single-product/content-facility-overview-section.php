<?php 
    $section_background_color_fo = get_field('section_background_color_fo');
	$section_background_image_fo = get_field('section_background_image_fo');

	$short_section_description_fo = get_field('short_section_description_fo');
?>
<section class="facility-overview facility-overview-single-product">
    <?php if ( (have_rows('first_box_details_list')) || (have_rows('second_box_details_list_s')) || $short_section_description_fo ): ?>
        <div class="facility-overview-wrapper relative"<?php if ( $section_background_color_fo ) : ?> style="background-color:<?php echo $section_background_color_fo; ?>"<?php endif; ?>>
            
                <div class="section-background-image"<?php  if ( $section_background_image_fo ) : ?> style="background-image: url(<?php echo esc_url($section_background_image_fo['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image_fo['alt']); ?>"<?php endif; ?>></div>
            
            <div class="container">
                <div class="row facility-overview-row">
                    <div class="facility-overview-text-description-content col-md-12">
                        <div class="facility-overview-header-text-description-wrap">
                            <?php  if ( $short_section_description_fo ) : ?>
                                <div class="entry-content section-description">
                                    <?php echo $short_section_description_fo; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="facility-overview-tables-wrapper col-md-12">
                        <div class="facility-overview-tables-inner">

                            <?php if( have_rows('first_box_details_list') ): ?>
                                <div class="facility-overview-table-wrap facility-overview-first-table-wrap">
                                    <div class="facility-overview-table facility-overview-table-first">
                                        <?php while ( have_rows('first_box_details_list') ) : the_row(); ?>
                                            <div class="facility-overview-table-item">
                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column'); ?></div>
                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column'); ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif;?>

                            <?php if( have_rows('second_box_details_list_s') ): ?>
                                <div class="facility-overview-table-wrap facility-overview-second-table-wrap">
                                    <div class="facility-overview-table facility-overview-table-second">
                                        <?php while ( have_rows('second_box_details_list_s') ) : the_row(); ?>
                                            <div class="facility-overview-table-item">
                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column_s'); ?></div>
                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column_s'); ?><span class="cell-note"><?php the_sub_field('details_item_note'); ?></span></div>
                                                
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif;?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
</section>
