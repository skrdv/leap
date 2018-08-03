<?php // Template Name: 9. Site Section Landing Page Template ?>
<?php get_header(); ?>

<?php $color = get_field('page_color'); ?>

<div class="content-wrapper">
		
<?php get_template_part('parts/section','hero'); ?>


<?php get_template_part('parts/double','section'); ?>

<?php $block = get_field('select_content_block'); ?>>	
<?php get_template_part('parts/section', $block); ?>	

<?php get_template_part('parts/section','repeater'); ?>		
	
<?php get_template_part('parts/section','2cards'); ?>

</div>

<?php get_footer(); ?>

