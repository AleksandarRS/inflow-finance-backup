<article <?php post_class('blog-page-post'); ?>>
    <a href="<?php the_permalink(); ?>" class="blog-page-post-wrapper">

        <div class="blog-page-posts-content-wrapper regular">
            <div class="blog-page-posts-content-inner clearfix">
                
                <?php if( has_post_thumbnail() ): ?>
                    <div class="blog-posts-thumnail-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    </div>
                <?php else: ?>
                    <div class="blog-posts-thumnail-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg');" area-label="Default Inflow Finance post image">
                    </div>
                <?php endif; ?>

                <div class="blog-page-blog-title-excerpt-wrapper">
                    <div class="blog-page-post-title-text-description-wrap">
                        <div class="blog-page-post-title-text-description-wrap-inner">
                            <div class="blog-page-post-date">
                                <span class="blog-page-post-date-value"><?php echo get_the_date(); ?></span>
                            </div><!-- .blog-page-post-date -->
                            <div class="blog-page-post-heading">
                                <h2 class="blog-page-post-title"><?php the_title(); ?></h2>
                            </div>
                            <div class="date-excerpt-wrapper">
                                <?php if( has_excerpt() ): ?>
                                    <div class="blog-page-post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .blog-page-post-excerpt -->
                                    <?php else : ?>
                                        <div class="featured-post-excerpt">
                                            <?php $content = get_the_content();
                                            $trimmed_content = wp_trim_words( $content, 20, NULL );
                                            echo $trimmed_content; ?>
                                        </div><!-- .featured-post-excerpt -->
                                    <?php endif; ?>
                            </div> <!-- /.date-excerpt-wrapper -->
                        </div> <!-- /.blog-page-post-title-text-description-wrap-inner -->
                    
                    </div> <!-- /.blog-page-post-title-text-description-wrap -->
                </div> <!-- /.blog-page-blog-title-excerpt-wrapper -->
            
            </div> <!-- /.blog-page-posts-content-inner clearfix -->
        </div> <!-- /.blog-page-posts-content-wrapper regular -->

    </a> <!-- /.blog-page-post-wrapper -->
</article><!-- .blog-page-post -->
