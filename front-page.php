<?php get_header(); ?>

<div class="content-wrapper">

<?php get_template_part('parts/main','banner'); ?>

<?php get_template_part('parts/double','section'); ?>
				
<?php get_template_part('parts/main','4cards'); ?>
	
<?php get_template_part('parts/main','text'); ?>
		
<?php get_template_part('parts/section','team'); ?>

<?php get_template_part('parts/main','facts'); ?>

<?php get_template_part('parts/section','2columns'); ?>


<section class="pageSection pageSection-16 pageSection-12" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title"><?php the_field('section7_title'); ?></h2>
				<h3 class="pageSection-subtitle"><?php the_field('section7_subtitle'); ?></h3>
				<img style="margin: 100px 0 0 0" src="<?php echo get_template_directory_uri(); ?>/images/form-placeholder.png">
			</div><!-- col-sm -->
		</div><!-- row  -->
	</div><!-- container -->
</section><!-- pageSection -->
 

</div><!-- wrapper -->

<?php get_footer(); ?>

