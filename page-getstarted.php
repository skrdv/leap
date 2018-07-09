<?php // Template Name: Get Started ?>
<?php get_header(); ?>



<section class="getstartedBanner" style="background-image: url(<?php the_field('page_banner'); ?>);">	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="getstartedBanner-title">Ignite a passion for learning in every student.</h1>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- mainBanner -->	

<section class="pageSection pageSection-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="pageSection-title">Ideal learning for every student</h2>
				<div class="pageSection-text">
				<p>At LEAP, we believe personalized learning at scale can be transformative, helping every student fulfill the promise of his or her unlimited potential. We’ve worked with educators, school leaders, and national experts to design the LEAP Learning Framework, which defines the keys to personalized learning, and complementary tools and resources that empower educators to make ideal learning a reality in their classrooms.</p>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-2"  style="background-image: url(<?php the_field('page_banner_2'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-3" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-banner">
					<h2 class="pageSection-title">What Is Personalized Learning?</h2>
					<div class="pageSection-text">
						<p>The LEAP Learning Framework defines four core components of a truly learner centered approach and translates them into actionable strategies for every classroom.</p>
					</div>
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-4" >

</section><!-- pageSection -->

<section class="pageSection pageSection-5" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="sectionSlider">
					<div class="sectionSlider-prev"></div>
					<div class="sectionSlider-next"></div>
					<div class="sectionSlider-caption">Samantha, a student at LORCA, participates in a Learner Led activity.</div>
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-6">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title centered">Start Your Journey</h2>
			</div><!-- column -->
		</div><!-- row -->	
		
		<div class="row flex">
			<?php $counter = 1; ?>
			<?php while ( $counter < 4): ?>
			<div class="col-sm-4 sectionCard">
				<div class="sectionCard-inner">
					<h3 class="sectionCard-title">Get the LEAP Learning Framework</h3>
					<div class="sectionCard-text">Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.</div>
					<button class="sectionCard-button">Download the Framework</button>
				</div>	
			</div><!-- column -->
			<?php $counter++; ?>
			<?php endwhile; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-7">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title centered">Other Ways To Get Started</h2>
			</div><!-- column -->
		</div><!-- row -->	
		
		<div class="row flex">
			<?php $counter = 0; ?>
			<?php while ( $counter < 4): ?>
			<div class="col-sm-6 getstartedCard">
				<div class="getstartedCard-inner">
					<div class="getstartedCard-photo"></div>
					<div class="getstartedCard-content">
						<h3 class="getstartedCard-title">Get the LEAP Learning Framework</h3>
						<div class="getstartedCard-link">Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.</div>
					</div>	
				</div>
			</div><!-- column -->
			<?php $counter++; ?>
			<?php endwhile; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->


<?php get_footer(); ?>

