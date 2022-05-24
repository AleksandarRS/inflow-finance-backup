<?php 
    $section_background_color_fo = get_field('section_background_color_fo');
	$section_background_image_fo = get_field('section_background_image_fo');
	
    $short_section_description_fo = get_field('short_section_description_fo');
?>
<section class="first-part-of-product facility-overview facility-overview-single-product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
    <?php if ( (have_rows('first_box_details_list')) || (have_rows('second_box_details_list_s')) || $short_section_description_fo ): ?>
        <div class="facility-overview-wrapper relative"<?php if ( $section_background_color_fo ) : ?> style="background-color:<?php echo $section_background_color_fo; ?>"<?php endif; ?>>
            <div class="section-background-image"<?php  if ( $section_background_image_fo ) : ?> style="background-image: url(<?php echo esc_url($section_background_image_fo['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image_fo['alt']); ?>"<?php endif; ?>></div>
                
            <div class="container">
                <div class="row facility-overview-row">
                    <div class="facility-overview-text-description-content col-md-12">
                        <div class="facility-overview-header-text-description-wrap">
                            <?php  if ( $short_section_description_fo ) : ?>
                                <div class="entry-content section-description wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                    <?php echo $short_section_description_fo; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                        $first_tab_title = get_field('first_tab_title');
                        $second_tab_title = get_field('second_tab_title');
                    ?>
                    <?php if ( get_field('activate_tabs') == true ) : ?>
                        <div class="tabs wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class='tab-nav'>
                                <ul class="tabs-nav-list">
                                    <li class="active-tab">
                                        <a href='#content-one'>
                                            <?php echo $first_tab_title; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='#content-two'>
                                        <?php echo $second_tab_title; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class='tab-content'>
                                <div id="content-one">
                                    <div class="facility-overview-tables-wrapper col-md-12">
                                        <div class="facility-overview-tables-inner<?php if( have_rows('first_box_details_list') ): ?><?php while ( have_rows('first_box_details_list') ) : the_row(); ?><?php  if ( get_sub_field('details_item_third_column') ) : ?> third-facility-added<?php endif; ?><?php endwhile; ?><?php endif; ?>">
                                            <?php if( have_rows('first_box_details_list') ): ?>
                                                <div class="facility-overview-table-wrap facility-overview-first-table-wrap">
                                                    <div class="facility-overview-table facility-overview-table-first">
                                                        <?php while ( have_rows('first_box_details_list') ) : the_row(); ?>
                                                            <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column') ) : ?> facility-overview-table-item-third-item-added<?php endif; ?>">
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column'); ?></div>
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column'); ?></div>
                                                                <?php  if ( get_sub_field('details_item_third_column') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_third_column'); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                            <?php endif;?>
                                            <?php if( have_rows('second_box_details_list_s') ): ?>
                                                <div class="facility-overview-table-wrap facility-overview-second-table-wrap">
                                                    <div class="facility-overview-table facility-overview-table-second">
                                                        <?php while ( have_rows('second_box_details_list_s') ) : the_row(); ?>
                                                            <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column_s') ) : ?> third-field-added-title-manipulate<?php endif; ?>">
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column_s'); ?></div>
                                                                <?php  if ( get_sub_field('details_item_second_column_s') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column_s'); ?>
                                                                        <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                            <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                                        <?php endif;?>
                                                                    </div>
                                                                <?php endif;?>
                                                                <?php  if ( get_sub_field('details_item_third_column_s') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_third_column_s'); ?>
                                                                        <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                            <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                                        <?php endif;?>
                                                                    </div>
                                                                <?php endif;?>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                            <?php endif;?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="content-two">
                                    <div class="facility-overview-tables-wrapper col-md-12">
                                        <div class="facility-overview-tables-inner<?php if( have_rows('first_box_details_list_second_tab') ): ?><?php while ( have_rows('first_box_details_list_second_tab') ) : the_row(); ?><?php  if ( get_sub_field('details_item_third_column_st') ) : ?> third-facility-added<?php endif; ?><?php endwhile; ?><?php endif; ?>">

                                            <?php if( have_rows('first_box_details_list_second_tab') ): ?>
                                                <div class="facility-overview-table-wrap facility-overview-first-table-wrap">
                                                    <div class="facility-overview-table facility-overview-table-first">
                                                        <?php while ( have_rows('first_box_details_list_second_tab') ) : the_row(); ?>
                                                            <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column_st') ) : ?> facility-overview-table-item-third-item-added<?php endif; ?>">
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column_st'); ?></div>
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column_st'); ?></div>
                                                                <?php  if ( get_sub_field('details_item_third_column_st') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_third_column_st'); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                            <?php endif;?>

                                            <?php if( have_rows('second_box_details_list_s_second_tab') ): ?>
                                                <div class="facility-overview-table-wrap facility-overview-second-table-wrap">
                                                    <div class="facility-overview-table facility-overview-table-second">
                                                        <?php while ( have_rows('second_box_details_list_s_second_tab') ) : the_row(); ?>
                                                            <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column_s_st') ) : ?> third-field-added-title-manipulate<?php endif; ?>">
                                                                <div class="facility-overview-table-cell"><?php the_sub_field('details_item_first_column_s_st'); ?></div>
                                                                <?php  if ( get_sub_field('details_item_second_column_s_st') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_second_column_s_st'); ?>
                                                                        <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                            <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                                        <?php endif;?>
                                                                    </div>
                                                                <?php endif;?>
                                                                <?php  if ( get_sub_field('details_item_third_column_s_st') ) : ?>
                                                                    <div class="facility-overview-table-cell"><?php the_sub_field('details_item_third_column_s_st'); ?>
                                                                        <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                            <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                                        <?php endif;?>
                                                                    </div>
                                                                <?php endif;?>
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

                    <?php else: ?>

                        <div class="facility-overview-tables-wrapper col-md-12">
                            <div class="facility-overview-tables-inner<?php if( have_rows('first_box_details_list') ): ?><?php while ( have_rows('first_box_details_list') ) : the_row(); ?><?php  if ( get_sub_field('details_item_third_column') ) : ?> third-facility-added<?php endif; ?><?php endwhile; ?><?php endif; ?>">

                                <?php if( have_rows('first_box_details_list') ): ?>
                                    <div class="facility-overview-table-wrap facility-overview-first-table-wrap">
                                        <div class="facility-overview-table facility-overview-table-first wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                                            <?php while ( have_rows('first_box_details_list') ) : the_row(); ?>
                                                <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column') ) : ?> facility-overview-table-item-third-item-added<?php endif; ?>">
                                                    <div class="facility-overview-table-cell wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_first_column'); ?></div>
                                                    <div class="facility-overview-table-cell wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_second_column'); ?></div>
                                                    <?php  if ( get_sub_field('details_item_third_column') ) : ?>
                                                        <div class="facility-overview-table-cell wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_third_column'); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                <?php endif;?>

                                <?php if( have_rows('second_box_details_list_s') ): ?>
                                    <div class="facility-overview-table-wrap facility-overview-second-table-wrap">
                                        <div class="facility-overview-table facility-overview-table-second wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                                            <?php while ( have_rows('second_box_details_list_s') ) : the_row(); ?>
                                                <div class="facility-overview-table-item<?php  if ( get_sub_field('details_item_third_column_s') ) : ?> third-field-added-title-manipulate<?php endif; ?>">
                                                    <div class="facility-overview-table-cell wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_first_column_s'); ?></div>
                                                    <?php  if ( get_sub_field('details_item_second_column_s') ) : ?>
                                                        <div class="facility-overview-table-cell wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_second_column_s'); ?>
                                                            <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                            <?php endif;?>
                                                        </div>
                                                    <?php endif;?>
                                                    <?php  if ( get_sub_field('details_item_third_column_s') ) : ?>
                                                        <div class="facility-overview-table-cell wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_sub_field('details_item_third_column_s'); ?>
                                                            <?php  if ( get_sub_field('details_item_note') ) : ?>
                                                                <span class="cell-note"><?php the_sub_field('details_item_note'); ?></span>
                                                            <?php endif;?>
                                                        </div>
                                                    <?php endif;?>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                <?php endif;?>
                                
                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif;?>
</section>
