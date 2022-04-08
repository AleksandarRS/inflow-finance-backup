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
				?>
				<section class="contact-details-section custom-form-elements-position">
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
							</div>
						</div>
					</div>
				</section>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container">
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
