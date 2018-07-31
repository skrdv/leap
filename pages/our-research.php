<?php // Template Name: Our Research ?>
<?php get_header(); ?>

<?php $color = get_field('page_color'); ?>

<div class="content-wrapper">

<?php get_template_part('parts/section','hero'); ?>

<?php get_template_part('parts/double','section'); ?>
	
<?php get_template_part('parts/section','repeater'); ?>		
	
<?php get_template_part('parts/section','2cards'); ?>			

</div>

<?php get_footer(); ?>

