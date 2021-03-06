<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package inflow
 */

?>

				
				<section id="footer-contact-details-section" class="contact-details-section custom-form-elements-position relative">
					<div id="cta-contact">
						<?php get_template_part( 'template-parts/content', 'theme-contact-details' ); ?>
					</div>
				</section> <!-- /.contact-details-section custom-form-elements-position relative -->
			</div><!-- #content -->
			<!-- <script
                    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
						<lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_7f11ysev.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop  autoplay></lottie-player> -->

			<footer id="colophon" class="site-footer wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s" role="contentinfo">
				<div class="widget-wrapper">
					<div class="container-wide site-footer-container">
						<div class="row footer-widgets-wrapper convert-svg">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
							<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
								<div class="site-info">
									<div class="container">
										<div class="footer-copyright"><?php echo get_theme_mod('footer_customizer_text'); ?></div>
									</div>
								</div><!-- .site-info -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
