<?php  $featured_blog_posts = get_field('choose_similar_case_studies');
    if( $featured_blog_posts ): ?>
    <div class="container-middle-wide-large">
        <div class="row similar-work-case-studies-row">
                <!-- <header class="entry-header main-header col-md-12">
                    <h1 class="main-title"></h1>
                </header> -->
            <div class="related-posts-section col-md-12 wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
                <header class="entry-header main-header">
                    <h3 class="section-title"><?php _e('Explore more of our work', 'inflow') ?></h3>
                    <div class="post-product-read-more read-more-link-wrap link-wrap">
                        <a href="#" class="link link-arrow link-secondary"><?php _e('See all case studies', 'inflow'); ?> <i class="icon icon-arrow-right-large"></i></a>
                    </div>
                </header>
            </div>
            <div class="posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12">
                <div class="row post-posts-items-cards-row posts-cards-items case-study-post-cards-items">
                    <?php foreach( $featured_blog_posts as $post ): 
                        setup_postdata($post); ?>
                        <?php get_template_part( 'template-parts/content', 'case-study-cards' ); ?>
                    <?php endforeach; ?>
                </div>
            </div> <!-- /.posts-items-cards-wrapper post-product-items-cards-wrapper col-md-12 -->
            <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>