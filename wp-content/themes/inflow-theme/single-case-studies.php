<?php
/**
 * The template for displaying all single posts.
 *
 * @package inflow
 */

get_header(); ?>

<?php

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<div class="single-case-study-hero-wrapper">
			<?php get_template_part('template-parts/custom/single-case-study/content', 'single-case-study-hero-section'); ?>
		</div>

		<div class="single-case-study-text-image-wrapper">
			<?php get_template_part('template-parts/custom/single-case-study/content', 'image-text-section'); ?>
		</div>
		
		<div class="single-case-study-similar-work-wrapper">
			<?php get_template_part('template-parts/custom/single-case-study/content', 'similar-work-section'); ?>
		</div>
				   
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
