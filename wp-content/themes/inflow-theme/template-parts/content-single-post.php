<?php
/**
 * Template part for displaying single posts.
 *
 * @package inflow
 */

?>
<div class="single-post-categories align-center">
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
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header align-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="blog-page-post-date">
			<span class="post-date-value blog-page-post-date-value"><?php echo get_the_date('F j'); ?></span>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="single-post-featured-image-wrap">
			<?php if( has_post_thumbnail() ): ?>
				<div class="blog-posts-thumbnail-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" area-label="<?php echo get_the_title(); ?>"></div>
			<?php else: ?>
				<div class="blog-posts-thumbnail-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg');" area-label="Default Inflow Finance post image">
				</div>
			<?php endif; ?>
		</div>
		<div class="single-page-content-wrapper relative">
			<div class="social-share-options">
				<div class="share-title">
					<span><?php _e('Share', 'inflow') ?></span>
				</div>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="icon icon-facebook"></i></a>

				<a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source=<?php the_permalink(); ?>"><i class="icon icon-linkedin"></i></a>

				<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title() ?>&url=<?php the_permalink(); ?>&via=<?php site_url(); ?>"><i class="icon icon-twitter"></i></a>

				<div class="share-option"><i class="icon icon-share"></i></div>
			</div>
			<div class="single-page-content-inner">
				<?php the_content(); ?>
			</div>
		</div>
		
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

