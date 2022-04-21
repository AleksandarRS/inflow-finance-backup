<?php
/**
 * Template part for displaying posts.
 *
 * @package inflow
 */

?>


<?php
	$product_prediction_item_title_a = get_field('product_prediction_item_title_a');
	$product_prediction_item_title_b = get_field('product_prediction_item_title_b');
	$product_prediction_item_title_c = get_field('product_prediction_item_title_c');

	$product_prediction_item_data_a = get_field('product_prediction_item_data_a');
	$product_prediction_item_data_b = get_field('product_prediction_item_data_b');
	$product_prediction_item_data_c = get_field('product_prediction_item_data_c');

	


	// $add_hash_for_second = get_field('add_hash_for_second');
	// $second_main_title = get_field('second_main_title');

?>

<div class="posts-cards-case-study-item posts-cards-item col-md-4">
	<div class="posts-cards-case-study-item-inner">
		<?php if( get_the_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>" class="case-study-post-featured-img-link">
				<div class="case-study-post-featured-img-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" area-label="<?php echo get_the_title(); ?>"></div>
			</a>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>" class="case-study-post-featured-img-link">
				<div class="case-study-post-featured-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg');" area-label="Case study alternative default featured image of Inflow Finance website"></div>
			</a>
		<?php endif; ?>
		<div class="post-heading-excerpt-wraper<?php  if ( ( $product_prediction_item_title_a && $product_prediction_item_data_a ) || ( $product_prediction_item_title_b && $product_prediction_item_data_b ) || ( $product_prediction_item_title_c && $product_prediction_item_data_c ) ) : ?> next-section-here<?php endif;?>">
			<?php if( have_rows('product_card_links') ): ?>
				<div class="product-page-links">
					<?php while ( have_rows('product_card_links') ) : the_row(); ?>
						<?php $card_links_to_products = get_sub_field('card_links_to_products'); ?>
							<?php if( $card_links_to_products ): 
								$link_url = $card_links_to_products['url'];
								$link_title = $card_links_to_products['title'];
								$link_target = $card_links_to_products['target'] ? $card_links_to_products['target'] : '_self';
							?>
							<a class="term-name" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif;?>
			<a href="<?php the_permalink(); ?>">
				<header class="post-title entry-header">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>
				<div class="post-product-excerpt entry-content">
					<?php the_excerpt(); ?>
				</div>
			</a>
			<?php  if ( ( $product_prediction_item_title_a && $product_prediction_item_data_a ) || ( $product_prediction_item_title_b && $product_prediction_item_data_b ) || ( $product_prediction_item_title_c && $product_prediction_item_data_c ) ) : ?>
				<div class="post-prediction-items-button-wrapper">
					<a href="<?php the_permalink(); ?>" class="post-prediction-items-link">
						<div class="post-prediction-items">
							<?php  if ( $product_prediction_item_title_a && $product_prediction_item_data_a ) : ?>
								<div class="post-prediction-item">
									<?php  if ( $product_prediction_item_title_a ) : ?>
										<div class="post-prediction-item-title">
											<p><?php echo $product_prediction_item_title_a; ?></p>
										</div>
									<?php // else: ?>
										<!-- <div class="post-prediction-item-title">
											<p><?php // _e('Loan amount', 'inflow') ?></p>
										</div> -->
									<?php endif; ?>
									<?php  if ( $product_prediction_item_data_a ) : ?>
										<div class="post-prediction-item-number">
											<p><?php echo $product_prediction_item_data_a; ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php  if ( $product_prediction_item_title_b && $product_prediction_item_data_b ) : ?>
								<div class="post-prediction-item">
									<?php  if ( $product_prediction_item_title_b ) : ?>
										<div class="post-prediction-item-title">
											<p><?php echo $product_prediction_item_title_b; ?></p>
										</div>
									<?php // else: ?>
										<!-- <div class="post-prediction-item-title">
											<p><?php // _e('ltv', 'inflow') ?></p>
										</div> -->
									<?php endif; ?>
									<?php  if ( $product_prediction_item_data_b ) : ?>
										<div class="post-prediction-item-number">
											<p><?php echo $product_prediction_item_data_b; ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php  if ( $product_prediction_item_title_c && $product_prediction_item_data_c ) : ?>
								<div class="post-prediction-item">
									<?php  if ( $product_prediction_item_title_c ) : ?>
										<div class="post-prediction-item-title">
											<p><?php echo $product_prediction_item_title_c; ?></p>
										</div>
									<?php // else: ?>
										<!-- <div class="post-prediction-item-title">
											<p><?php // _e('Rate', 'inflow') ?></p>
										</div> -->
									<?php endif; ?>
									<?php  if ( $product_prediction_item_data_c ) : ?>
										<div class="post-prediction-item-number">
											<p><?php echo $product_prediction_item_data_c; ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="post-product-read-more read-more-link-wrap link-wrap">
							<span class="link link-arrow link-secondary">
								<?php _e('Read more','inflow'); ?> <i class="icon icon-arrow-right-large"></i>
							</span>
						</div>
					</a>
				</div>
			<?php endif; ?>
		</div> <!-- /.post-heading-excerpt-button-wraper -->
	</div>
</div> <!-- /.posts-cards-item col-md-4 -->


