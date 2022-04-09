<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package inflow
 */

?>

				<?php 
					$section_descriptin = get_field('section_descriptin', 'option');
					$after_form_section = get_field('after_form_section', 'option');

					$add_section_left_image = get_field('add_section_left_image', 'option');
					$add_section_right_image = get_field('add_section_right_image', 'option');
				?>
				<section class="contact-details-section custom-form-elements-position relative">
					<div class="contact-details-section-wrapper section-wrapper">
						<div class="container-wide">
							<div class="row contact-details-row">
								<?php if($section_descriptin || $section_form_shortcode): ?>
									<div class="col-md-12 contact-details-content">
										<div class="contact-details-content-inner">
											<?php  if ( $section_descriptin ) : ?>
												<div class="entry-content section-description">
													<?php echo $section_descriptin; ?>
												</div>
											<?php endif; ?>
											<?php  if ( $after_form_section ) : ?>
												<div class="contact-details-after-form">
													<?php echo $after_form_section; ?>
												</div>
											<?php endif; ?>
										</div>
									</div>
								<?php endif ?>
							</div> <!-- /.row contact-details-row -->
						</div> <!-- /.container-wide -->
						
					</div> <!-- /.contact-details-section-wrapper section-wrapper -->
					<?php  if ( $add_section_left_image ) : ?>
						<div class="contact-section-decoration-image contact-section-decoration-image-left">
							<img src="<?php echo esc_url($add_section_left_image['url']); ?>" alt="<?php echo esc_attr($add_section_left_image['alt']); ?>">
						</div>
					<?php endif ?>
					<?php  if ( $add_section_right_image ) : ?>
						<div class="contact-section-decoration-image contact-section-decoration-image-right">
							<img src="<?php echo esc_url($add_section_right_image['url']); ?>" alt="<?php echo esc_attr($add_section_right_image['alt']); ?>">
						</div>
					<?php endif ?>
				</section> <!-- /.contact-details-section custom-form-elements-position relative -->
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container">
					<!-- <i class="icon icon-check-ok"></i> -->
					<i class="icon icon-check-solid"></i>
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
					</div>
				</div>
				<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
					<div class="site-info">
						<div class="container">
							<div class="footer-copyright col-md-12 align-center"><?php echo get_theme_mod('footer_customizer_text'); ?></div>
						</div>
					</div><!-- .site-info -->
				<?php endif; ?>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
