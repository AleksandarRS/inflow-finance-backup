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
				<div class="case-study-post-featured-img-wrap wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" area-label="<?php echo get_the_title(); ?>"></div>
			</a>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>" class="case-study-post-featured-img-link">
				<div class="case-study-post-featured-img-wrap wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg');" area-label="Case study alternative default featured image of Inflow Finance website"></div>
			</a>
		<?php endif; ?>
		<div class="post-heading-excerpt-wraper<?php  if ( ( $product_prediction_item_title_a && $product_prediction_item_data_a ) || ( $product_prediction_item_title_b && $product_prediction_item_data_b ) || ( $product_prediction_item_title_c && $product_prediction_item_data_c ) ) : ?> next-section-here<?php endif;?>">
			<?php if( have_rows('product_card_links') ): ?>
				<?php $i = 1; ?>
				<div class="product-page-links" data-equal='product-links-eq'>
					
					<?php while ( have_rows('product_card_links') ) : the_row(); ?>
						<?php $card_links_to_products = get_sub_field('card_links_to_products'); ?>
							<?php if( $card_links_to_products ): 
								$link_url = $card_links_to_products['url'];
								$link_title = $card_links_to_products['title'];
								$link_target = $card_links_to_products['target'] ? $card_links_to_products['target'] : '_self';
							?>
							<a class="term-name wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
						
					<?php endwhile; ?>
				</div>
			<?php endif;?>
			<a href="<?php the_permalink(); ?>">
				<header class="post-title entry-header">
					<h2 class="entry-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><?php the_title(); ?></h2>
				</header>
				<div class="post-product-excerpt entry-content wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
					<?php the_excerpt(); ?>
				</div>
			</a>
			<?php  if ( ( $product_prediction_item_title_a && $product_prediction_item_data_a ) || ( $product_prediction_item_title_b && $product_prediction_item_data_b ) || ( $product_prediction_item_title_c && $product_prediction_item_data_c ) ) : ?>
				<div class="post-prediction-items-button-wrapper">
					<a href="<?php the_permalink(); ?>" class="post-prediction-items-link">
						<div class="post-prediction-items wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
							<?php  if ( $product_prediction_item_title_c && $product_prediction_item_data_c ) : ?>
								<div class="post-prediction-item post-prediction-item-location">
									<?php  // if ( $product_prediction_item_title_c ) : ?>
										<!-- <div class="post-prediction-item-title">
											<p><?php // echo $product_prediction_item_title_c; ?></p>
										</div> -->
									<?php // else: ?>
										<!-- <div class="post-prediction-item-title">
											<p><?php // _e('Rate', 'inflow') ?></p>
										</div> -->
									<?php // endif; ?>
									<?php  if ( $product_prediction_item_data_c ) : ?>
										<div class="post-prediction-item-number">
										<svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M6.43084 15.8168C6.61971 16.0259 6.94821 16.0247 7.13562 15.8144L11.5965 10.8074C15.324 6.62359 12.3541 6.10352e-05 6.75068 6.10352e-05C1.12578 6.10352e-05 -1.83588 6.66752 1.93512 10.8411L6.43084 15.8168ZM6.5898 9.00003C7.86846 9.00003 8.90503 7.88075 8.90503 6.50003C8.90503 5.11932 7.86846 4.00003 6.5898 4.00003C5.31113 4.00003 4.27456 5.11932 4.27456 6.50003C4.27456 7.88075 5.31113 9.00003 6.5898 9.00003Z" fill="#CCCCCC"/>
											</svg>
											<p><?php echo $product_prediction_item_data_c; ?></p>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
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
							
						</div>
						<!-- <div class="post-product-read-more read-more-link-wrap link-wrap">
							<span class="link link-arrow link-secondary wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
								<?php // _e('Read more','inflow'); ?> <i class="icon icon-arrow-right-large"></i>
							</span>
						</div> -->
					</a>
				</div>
			<?php endif; ?>
		</div> <!-- /.post-heading-excerpt-button-wraper -->
	</div>
</div> <!-- /.posts-cards-item col-md-4 -->


