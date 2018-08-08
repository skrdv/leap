<?php // Template Name: 9. Site Section Landing Page Template ?>
<?php get_header(); ?>

<?php $color = get_field('page_color'); ?>

<div class="content-wrapper">
		
<?php get_template_part('parts/section','hero'); ?>

<?php get_template_part('parts/double','section'); ?>
<div class="diagonal-bg">		
	<?php get_template_part('parts/double','section-2'); ?>	

	<?php $block = get_field('select_content_block'); ?>	
	<?php get_template_part('parts/section', $block); ?>	

	<?php get_template_part('parts/section','repeater'); ?>		
	
	<?php get_template_part('parts/section','2cards'); ?>
</div>
	
</div>

<?php get_footer(); ?>

