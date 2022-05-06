<?php
$case_study_section_title = get_field('case_study_section_title', 'option');
$add_case_study_section_link = get_field('add_case_study_section_link', 'option');

?>
<section class="most-popular-case-studies-section latest-case-studies-section">
    <div class="most-popular-case-studies-section-wrapper latest-case-studies-section-wrapper section-wrapper relative">
        <div class="most-popular-case-studies-section-wrapper-inner">
            <div class="container-middle-wide-large">
                <div class="row most-popular-case-studies-row">
                    <?php if ( $case_study_section_title ) : ?>
                        <header class="entry-header main-header col-md-12 align-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <h1 class="main-title"><?php echo $case_study_section_title; ?></h1>
                        </header>
                    <?php else : ?>
                        <header class="entry-header main-header col-md-12 align-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <h1 class="main-title"><?php _e('Our case studies', 'inflow') ?></h1>
                        </header>
                    <?php endif; ?>
                    
                    <?php
                        $args = array(
                            'post_type' 		=> 'case-studies',
                            'posts_per_page'	=> 3
                        );

                        $query = new WP_Query( $args );
                    ?>

                    <?php if ( $query->have_posts() ) : ?>
                        <div class="single-product-page-case-studies-latest-items-wrapper col-md-12">
                            <div class="row post-posts-items-cards-row posts-cards-items case-study-post-cards-items">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'case-study-cards' ); ?>

                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php wp_reset_query(); ?>

                    <?php
                        if( $add_case_study_section_link ): 
                            $link_url = $add_case_study_section_link['url'];
                            $link_title = $add_case_study_section_link['title'];
                            $link_target = $add_case_study_section_link['target'] ? $add_case_study_section_link['target'] : '_self';
                        ?>
                        <div class="button-wrapper align-center col-md-12">
                            <a class="button button-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
