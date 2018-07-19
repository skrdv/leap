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
			<div class="col-sm-12">
				<h2 class="pageSection-title"><?php the_field('section3_title'); ?></h2>
				<h3 class="pageSection-subtitle"><?php the_field('section3_subtitle'); ?></h3>
			</div><!-- col-sm -->
		</div><!-- row  -->
				
		<div class="row sectionCards">
					<?php while (have_rows('section3_cards')): the_row(); ?>
						<div class="col-sm-3 sectionCard">
								<div class="sectionCard-photo"></div>
								<div class="sectionCard-content">
									<h3 class="sectionCard-title"><?php the_sub_field('title'); ?></h3>
									<div class="sectionCard-text"><?php the_sub_field('text'); ?></div>	
								</div>				
								<div class="sectionCard-button">
									<a href="<?php the_sub_field('link'); ?>">Learn More</a>
								</div>
						</div>	
					<?php endwhile; ?>
		</div><!-- sectionCards -->	
				
		
	</div><!-- container -->
</section><!-- pageSection -->
	
	

<section class="pageSection pageSection-13">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title"><?php the_field('section4_title'); ?></h2>
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php $founder = get_field('founder_photo'); ?>
				<?php $founder = $founder[sizes][medium]; ?>
				<?php $team = get_field('founder_photo'); ?>
				<?php $team = $team[sizes][medium]; ?>

				<div class="blockCompany">
					<div class="blockCompany-founder">
						<div class="blockCompany-founder-photo" style="background-image:url(<?php echo  $founder; ?>);"></div>
						<h3 class="blockCompany-founder-name"><?php the_field('founder-name'); ?></h3>
						<h4 class="blockCompany-founder-position"><?php the_field('founder-caption'); ?></h4>
					</div>
					<div class="blockCompany-team"  style="background-image:url(<?php echo  $team; ?>);"></div>
					<div class="blockCompany-button">
						<a href=""></a>
					</div>	
				</div><!-- blockCompany -->	
			</div>		
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<?php /*
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

*/ ?>

</div>

<?php get_footer(); ?>

