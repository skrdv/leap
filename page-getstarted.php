<?php // Template Name: Get Started ?>
<?php get_header(); ?>

<?php $color = get_field('page_color'); ?>

<div class="content-wrapper">
<section class="heroBanner" style="background-image: url(<?php $bg = get_field('page_banner'); echo $bg[sizes][large]; ?>);">	
	<div class="heroBanner-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="heroBanner-title is-<?php echo $color; ?>"><?php the_field('page_title'); ?></h1>
				</div><!-- column -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- shadow -->	
</section><!-- mainBanner -->	

<section class="pageSection pageSection-1">
	<div class="leap-stripe"></div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-quote"><?php the_field('section1_text'); ?></h2>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->

</section><!-- pageSection -->

<section class="pageSection pageSection-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-photo" style="background-image: url(<?php $image = get_field('section1_photo'); echo $image[sizes][large]; ?>);">
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-3" >
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

<section class="pageSection pageSection-4" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="carousel-get-started" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner" role="listbox">
							
							<?php while (have_rows('section_slider')): the_row(); ?>
							<div class="item <?php if ((get_row_index() == 1)) { echo 'active'; } ?>">
								<div class="getSlider">
									<div class="getSlider-photo">
										<div class="getSlider-icon <?php $title = get_sub_field('slide'); echo $title[value]; ?>"></div>
									</div><!-- slider photo -->
									<div class="getSlider-content">
										<div class="getSlider-title"><?php $title = get_sub_field('slide'); echo $title[label]; ?></div>
										<div class="getSlider-text"><?php the_sub_field('text'); ?></div>
										<a href="<?php the_sub_field('link'); ?>" class="getSlider-button">Explore this componenet</a>
									</div><!-- slider content -->	
								</div><!-- getSlider-item -->
							</div><!-- item -->
							<?php endwhile; ?>
							
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
				<h2 class="pageSection-title centered"><?php the_field('section4_title'); ?></h2>
			</div><!-- column -->
		</div><!-- row -->	
		
		<div class="row flex">
			<?php while ( have_rows('setion4_cards')): the_row(); ?>
			<div class="col-sm-4 readyCard">
				<div class="readyCard-inner">
					<h3 class="readyCard-title"><?php the_sub_field('title'); ?></h3>
					<div class="readyCard-text"><?php the_sub_field('text'); ?></div>
					<a href="<?php the_sub_field('link'); ?>"class="readyCard-button"><?php the_sub_field('button'); ?></a>
				</div>	
			</div><!-- column -->
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
</div>

<?php get_footer(); ?>

