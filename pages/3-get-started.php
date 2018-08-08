<?php // Template Name: 3. Get Started ?>
<?php get_header(); ?>

<div class="content-wrapper">
	
<?php get_template_part('parts/section','hero'); ?>

<?php get_template_part('parts/double','section'); ?>	
	
<div class="diagonal-bg">	
	<?php get_template_part('parts/double','section-2'); ?>		

	<?php get_template_part('parts/slider','llf'); ?>	
</div>
	
<?php get_template_part('parts/slider','full'); ?>	

<div class="diagonal-bg">	
	<?php get_template_part('parts/section','3cards'); ?>

	<?php get_template_part('parts/section','2cards'); ?>	
</div>	
</div><!-- content-wrapper -->

<?php get_footer(); ?>

