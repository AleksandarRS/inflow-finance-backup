<?php
/**
 * Template part for displaying posts.
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
<?php endif; ?>
<?php  if ( $add_section_right_image ) : ?>
	<div class="contact-section-decoration-image contact-section-decoration-image-right">
		<img src="<?php echo esc_url($add_section_right_image['url']); ?>" alt="<?php echo esc_attr($add_section_right_image['alt']); ?>">
	</div>
<?php endif; ?>