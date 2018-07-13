<?php // Template Name: Get Started ?>
<?php get_header(); ?>


<div class="content-wrapper">
<section class="getstartedBanner" style="background-image: url(<?php the_field('page_banner'); ?>);">	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
				<h1 class="getstartedBanner-title">Ignite a passion for learning in every student.</h1>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- mainBanner -->	

<section class="pageSection pageSection-1">
	<div class="leap-stripe"></div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-quote"><strong>At LEAP, we believe personalized learning at scale can be transformative</strong>, helping every student fulfill the promise of his or her unlimited potential. We’ve worked with educators, school leaders, and national experts to design the LEAP Learning Framework, which defines the keys to personalized learning, and complementary tools and resources that empower educators to make ideal learning a reality in their classrooms.</h2>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->

</section><!-- pageSection -->

<section class="pageSection pageSection-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-photo" style="background-image: url(<?php the_field('page_banner_2'); ?>);">
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-3" >
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="pageSection-title">What Is Personalized Learning?</h2>
				<div class="pageSection-text">
					<p>The LEAP Learning Framework defines four core components of a truly learner centered approach and translates them into actionable strategies for every classroom.</p>
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-4" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="carousel-get-started" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="getSlider">
									<div class="getSlider-photo">
										<div class="getSlider-icon"></div>
									</div><!-- slider photo -->
									<div class="getSlider-content">
										<div class="getSlider-title">Learner Connected</div>
										<div class="getSlider-text">Students learn how to thrive and advance in a connected world that is driven by relationships.</div>
										<div class="getSlider-button">Explore this componenet</div>
									</div><!-- slider content -->	
								</div><!-- getSlider-item -->
							</div><!-- item -->
							<div class="item">
								<div class="getSlider">
									<div class="getSlider-photo">
										<div class="getSlider-icon"></div>
									</div><!-- slider photo -->
									<div class="getSlider-content">
										<div class="getSlider-title">Learner Connected</div>
										<div class="getSlider-text">Students learn how to thrive and advance in a connected world that is driven by relationships.</div>
										<div class="getSlider-button">Explore this componenet</div>
									</div><!-- slider content -->	
								</div><!-- getSlider-item -->
							</div><!-- item -->
						</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-get-started" role="button" data-slide="prev">
						<img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png">
					</a>
					<a class="right carousel-control" href="#carousel-get-started" role="button" data-slide="next">
						<img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png">
					  </a>
					</div>	

			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->	
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
	<div class="leap-stripe"></div>	
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
</div>

<?php get_footer(); ?>

