<article <?php post_class('blog-page-post'); ?>>
    <div class="blog-page-post-wrapper">

        <div class="blog-page-posts-content-wrapper regular">
            <div class="blog-page-posts-content-inner clearfix">
                
                <?php if( has_post_thumbnail() ): ?>
                    <a href="<?php the_permalink(); ?>" class="blog-posts-thumbnail-image-link">
                        <div class="blog-posts-thumbnail-image wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" area-label="<?php echo get_the_title(); ?>"></div>
                    </a>
                <?php else: ?>
                    <a href="<?php the_permalink(); ?>" class="blog-posts-thumbnail-image-link">
                        <div class="blog-posts-thumbnail-image wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg');" area-label="Default Inflow Finance post image"></div>
                    </a>
                <?php endif; ?>

                <div class="blog-page-blog-title-excerpt-wrapper">
                    <div class="blog-page-post-title-text-description-wrap">
                        <div class="blog-page-post-title-text-description-wrap-inner">
                            <div class="post-categories-list">
                                <?php
                                    $categories = get_the_category();
                                    foreach($categories as $category) {
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="term-name wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
                                        }
                                    }
                                ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog-page-post-date">
                                    <span class="post-date-value blog-page-post-date-value wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><?php echo get_the_date('F j'); ?></span>
                                </div><!-- .blog-page-post-date -->
                                <div class="blog-page-post-heading">
                                    <h2 class="blog-page-post-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_title(); ?></h2>
                                </div>
                                <div class="date-excerpt-wrapper">
                                    <?php if( has_excerpt() ): ?>
                                        <div class="blog-page-post-excerpt wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                            <?php the_excerpt(); ?>
                                        </div><!-- .blog-page-post-excerpt -->
                                        <?php else : ?>
                                            <div class="featured-post-excerpt wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                                                <?php $content = get_the_content();
                                                $trimmed_content = wp_trim_words( $content, 20, NULL );
                                                echo $trimmed_content; ?>
                                            </div><!-- .featured-post-excerpt -->
                                        <?php endif; ?>
                                </div> <!-- /.date-excerpt-wrapper -->
                            </a>
                        </div> <!-- /.blog-page-post-title-text-description-wrap-inner -->
                    
                    </div> <!-- /.blog-page-post-title-text-description-wrap -->
                </div> <!-- /.blog-page-blog-title-excerpt-wrapper -->
            
            </div> <!-- /.blog-page-posts-content-inner clearfix -->
        </div> <!-- /.blog-page-posts-content-wrapper regular -->

    </div> <!-- /.blog-page-post-wrapper -->
</article><!-- .blog-page-post -->
