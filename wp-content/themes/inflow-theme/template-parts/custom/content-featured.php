<article <?php post_class('featured-post'); ?>>
    <a href="<?php the_permalink(); ?>" class="featured-post-wrapper">

        <div class="featured-posts-content-wrapper regular">
            <div class="featured-posts-content-inner clearfix">
                <?php if( has_post_thumbnail() ): ?>
                    <div class="featured-posts-thumnail-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    </div>
                <?php else: ?>
                    <div class="featured-posts-thumnail-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg');" area-label="Default Inflow Finance post image">
                    </div>
                <?php endif; ?>
                <div class="featured-blog-title-excerpt-wrapper">
                    <div class="featured-post-title-text-description-wrap">
                        <div class="featured-post-title-text-description-wrap-inner">
                            <div class="featured-post-date">
                                <span class="featured-post-date-value"><?php echo get_the_date(); ?></span>
                            </div><!-- .featured-post-date -->
                            <div class="featured-post-heading">
                                <h2 class="featured-post-title"><?php the_title(); ?></h2>
                            </div>
                            <div class="date-excerpt-wrapper">
                                
                                <?php if( has_excerpt() ): ?>
                                    <div class="featured-post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .featured-post-excerpt -->
                                <?php else : ?>
                                    <div class="featured-post-excerpt">
                                        <?php $content = get_the_content();
                                        $trimmed_content = wp_trim_words( $content, 43, NULL );
                                        echo $trimmed_content; ?>
                                    </div><!-- .featured-post-excerpt -->
                                <?php endif; ?>
                            </div> <!-- /.date-excerpt-wrapper -->
                        </div> <!-- /.featured-post-title-text-description-wrap-inner -->
                    
                    </div> <!-- /.featured-post-title-text-description-wrap -->
                </div> <!-- /.featured-blog-title-excerpt-wrapper -->
            
            </div> <!-- /.featured-posts-content-inner clearfix -->
        </div> <!-- /.featured-posts-content-wrapper regular -->

    </a> <!-- /.featured-post-wrapper -->
</article><!-- .featured-post -->
