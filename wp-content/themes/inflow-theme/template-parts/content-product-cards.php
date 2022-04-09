<?php
/**
 * Template part for displaying posts.
 *
 * @package inflow
 */

?>

<div class="posts-cards-item col-md-4">
	<?php
		$product_prediction_item_title_a = get_field('product_prediction_item_title_a');
		$product_prediction_item_title_b = get_field('product_prediction_item_title_b');
		$product_prediction_item_title_c = get_field('product_prediction_item_title_c');

		$product_prediction_item_data_a = get_field('product_prediction_item_data_a');
		$product_prediction_item_data_b = get_field('product_prediction_item_data_b');
		$product_prediction_item_data_c = get_field('product_prediction_item_data_c');
	?>
	<a href="<?php the_permalink(); ?>" class="posts-cards-item-link">
		<?php if( get_the_post_thumbnail() ): ?>
			<div class="post-featured-img-wrap">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php else: ?>
			<div class="post-featured-img-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Product alternative default image of Inflow Finance">
			</div>
		<?php endif; ?>
		<div class="post-heading-excerpt-wraper">
			<header class="post-title entry-header">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header>
			<div class="post-product-excerpt entry-content">
				<?php the_excerpt(); ?>
			</div>
			<div class="post-prediction-items-button-wrapper">
				<div class="post-prediction-items">
					<div class="post-prediction-item">
						<?php  if ( $product_prediction_item_title_a ) : ?>
							<div class="post-prediction-item-title">
								<p><?php echo $product_prediction_item_title_a; ?></p>
							</div>
						<?php else: ?>
							<div class="post-prediction-item-title">
								<p>Min rate</p>
							</div>
						<?php endif; ?>
						<?php  if ( $product_prediction_item_data_a ) : ?>
							<div class="post-prediction-item-number">
								<p><?php echo $product_prediction_item_data_a; ?></p>
							</div>
						<?php endif; ?>
					</div>
					<div class="post-prediction-item">
						<?php  if ( $product_prediction_item_title_b ) : ?>
							<div class="post-prediction-item-title">
								<p><?php echo $product_prediction_item_title_b; ?></p>
							</div>
						<?php else: ?>
							<div class="post-prediction-item-title">
								<p>max ltv</p>
							</div>
						<?php endif; ?>
						<?php  if ( $product_prediction_item_data_b ) : ?>
							<div class="post-prediction-item-number">
								<p><?php echo $product_prediction_item_data_b; ?></p>
							</div>
						<?php endif; ?>
					</div>
					<div class="post-prediction-item">
						<?php  if ( $product_prediction_item_title_c ) : ?>
							<div class="post-prediction-item-title">
								<p><?php echo $product_prediction_item_title_c; ?></p>
							</div>
						<?php else: ?>
							<div class="post-prediction-item-title">
								<p>Max loan</p>
							</div>
						<?php endif; ?>
						<?php  if ( $product_prediction_item_data_c ) : ?>
							<div class="post-prediction-item-number">
								<p><?php echo $product_prediction_item_data_c; ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="post-product-read-more read-more-link-wrap link-wrap">
					<span class="link link-arrow link-secondary">
						<?php _e('View product','inflow'); ?> <i class="icon icon-arrow-right-large"></i>
					</span>
				</div>
			</div>
		</div> <!-- /.post-heading-excerpt-button-wraper -->
	</a>
</div> <!-- /.posts-cards-item col-md-4 -->
