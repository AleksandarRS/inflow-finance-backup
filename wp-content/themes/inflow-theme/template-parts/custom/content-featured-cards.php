<article <?php post_class('featured-post'); ?>>
    <div class="featured-post-wrapper">

        <div class="featured-posts-content-wrapper regular">
            <div class="featured-posts-content-inner wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
                <?php if( has_post_thumbnail() ): ?>
                    <a href="<?php the_permalink(); ?>" class="featured-posts-thumbnail-image-link">
                        <div class="featured-posts-thumbnail-image wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" area-label="<?php echo get_the_title(); ?>">
                        </div>
                    </a>
                <?php else: ?>
                    <a href="<?php the_permalink(); ?>" class="featured-posts-thumbnail-image-link">
                        <div class="featured-posts-thumbnail-image wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg');" area-label="Default Inflow Finance post image">
                        </div>
                    </a>
                <?php endif; ?>
                <div class="featured-blog-title-excerpt-wrapper wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
                    <div class="featured-post-title-text-description-wrap">
                        <div class="featured-post-title-text-description-wrap-inner">
                            <div class="post-categories-list">
                                <?php
                                    $categories = get_the_category();
                                    foreach($categories as $category) {
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="term-name"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
                                        }
                                    }
                                ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="featured-post-date">
                                    <span class="post-date-value featured-post-date-value"><?php echo get_the_date('F j'); ?></span>
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
                            </a>
                        </div> <!-- /.featured-post-title-text-description-wrap-inner -->
                    
                    </div> <!-- /.featured-post-title-text-description-wrap -->
                </div> <!-- /.featured-blog-title-excerpt-wrapper -->
            
            </div> <!-- /.featured-posts-content-inner -->
        </div> <!-- /.featured-posts-content-wrapper regular -->

    </div> <!-- /.featured-post-wrapper -->
</article><!-- .featured-post -->
