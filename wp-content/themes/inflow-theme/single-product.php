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

		<div class="single-product-main-hero-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'single-product-main-hero-section'); ?>
		</div>
		
		<div class="single-product-hero-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'single-product-hero-section'); ?>
		</div>

		<div class="single-product-main-hero-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'single-product-bespoke-section'); ?>
		</div>

		<div class="single-product-key-features-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'key-features'); ?>
		</div>

		<div class="single-product-text-image-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'text-image-section'); ?>
		</div>

		<div class="single-product-image-text-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'image-text-section'); ?>
		</div>

		<div class="single-product-image-text-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'facility-overview-section'); ?>
		</div>

		<div class="second-single-product-hero-wrapper single-product-hero-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'second-single-product-hero-section'); ?>
		</div>

		<div class="second-single-product-key-features-wrapper single-product-key-features-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'second-key-features'); ?>
		</div>

		<div class="second-single-product-text-image-wrapper single-product-text-image-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'second-text-image-section'); ?>
		</div>

		<div class="second-single-product-image-text-wrapper single-product-image-text-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'second-image-text-section'); ?>
		</div>

		<div class="second-single-product-image-text-wrapper single-product-image-text-wrapper">
			<?php get_template_part('template-parts/custom/single-product/content', 'second-facility-overview-section'); ?>
		</div>

		<div class="single-product-case-studies-wrapper">
			<?php get_template_part('template-parts/custom/content', 'latest-case-studies-section'); ?>
		</div>

		
				   
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
