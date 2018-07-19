<?php get_header(); ?>

<div class="content-wrapper">

<section class="mainBanner" style="background-image: url(<?php the_field('main_banner_image'); ?>);">	
	<div class="mainBanner-cloack">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="mainBanner-title"><?php the_field('main_banner_title'); ?></h1>
				</div><!-- column -->
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- main-banner-cloack -->
</section><!-- mainBanner -->	

<section class="pageSection pageSection-10">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-text">
				<?php the_field('section2_text'); ?>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-11" >
	<div class="leap-stripe leap-stripe-11"></div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-photo" style="background-image: url(<?php the_field('section2_image'); ?>);">
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-12" >
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-1">
				<h2 class="pageSection-title">Crafting Ideal Learning Experiences</h2>
				<div class="pageSection-text">
				<p>We’re defining, refining, distributing and measuring the most effective programs, tools and resources to support and empower educators with a mission to transform every teacher, every classroom and every student. Everywhere.</p>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-13"  style="background-image: url(<?php the_field('page_banner_3'); ?>);">
	<div class="container">
		<div class="row flex">
			<?php $counter = 1; ?>
			<?php while ( $counter < 7): ?>
			<div class="col-sm-4 mainCard">
				<?php if (( $counter != 2) and ($counter !=3)): ?>
				<div class="mainCard-inner">
					<h3 class="mainCard-title">Get the LEAP Learning Framework</h3>
					<div class="mainCard-text">Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.</div>
					<button class="mainCard-button">Download the Framework</button>
				</div>	
			<?php endif; ?>
			</div><!-- column -->
	
			<?php $counter++; ?>
			<?php endwhile; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->


<section class="pageSection pageSection-14">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="pageSection-small">
					<p><strong>Right</strong><br>A student at Talcott works on an individual assignment.</p>
				</div>
			</div><!-- column -->
			<div class="col-sm-7">
				<div class="pageSection-square"  style="background-image: url(<?php the_field('page_banner_4'); ?>);"></div>
			</div><!-- column -->			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-15">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<div class="pageSection-square"  style="background-image: url(<?php the_field('page_banner_5'); ?>);"></div>
			</div><!-- column -->	
			<div class="col-sm-4">
				<div class="pageSection-small">
					<p><strong>Right</strong><br>A student at Talcott works on an individual assignment.</p>
				</div>
			</div><!-- column -->	
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

</div>

<?php get_footer(); ?>

