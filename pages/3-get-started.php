<?php // Template Name: 3. Get Started ?>
<?php get_header(); ?>

<div class="content-wrapper">
	
<?php get_template_part('parts/section','hero'); ?>

<?php get_template_part('parts/double','section'); ?>	
	
<?php /*  <section class="pageSection pageSection-3" >
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="pageSection-title"><?php the_field('section2_title'); ?></h2>
				<div class="pageSection-text">
					<p><?php the_field('section2_text'); ?></p>
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
*/ ?>
	
<?php get_template_part('parts/slider','llf'); ?>	

<?php get_template_part('parts/slider','full'); ?>	

<?php get_template_part('parts/section','3cards'); ?>
	
<?php get_template_part('parts/section','2cards'); ?>	

<?php 	/*
<section class="pageSection pageSection-7">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title centered">Other Ways To Get Started</h2>
			</div><!-- column -->
		</div><!-- row -->	
		
		<div class="row flex">
			<?php while (have_rows('section5_cards')): the_row(); ?>
			<div class="col-sm-6 getstartedCard">
				<div class="getstartedCard-inner">
					<div class="getstartedCard-photo" style="background-image: url(<?php $bg = get_sub_field('photo'); echo $bg[sizes][medium]; ?>);"></div>
					<div class="getstartedCard-content">
						<h3 class="getstartedCard-title"><?php the_sub_field('title'); ?></h3>
						<a href="<?php the_sub_field('link'); ?>" class="getstartedCard-link"><?php the_sub_field('button'); ?></a>
					</div>	
				</div>
			</div><!-- column -->
			<?php endwhile; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
*/ ?>

</div><!-- content-wrapper -->

<?php get_footer(); ?>

