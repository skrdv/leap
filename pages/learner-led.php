<?php // Template Name: Learner Led ?>
<?php get_header(); ?>

<?php $color = get_field('page_color'); ?>
<?php $bg = get_field('page_banner'); ?>

<div class="content-wrapper">
	
<section class="heroBanner" style="background-image: url(<?php echo $bg[sizes][large]; ?>);">	
	<div class="heroBanner-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="heroBanner-title  is-<?php echo $color; ?>"><?php the_field('page_title'); ?></h1>
					<h3 class="heroBanner-subtitle"><?php the_field('page_subtitle'); ?></h3>
				</div><!-- column -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- shadow -->	
</section><!-- mainBanner -->	

<section class="pageSection pageSection-color is-<?php echo $color; ?>">
	<div class="leap-stripe"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-quote"><?php the_field('section1_text'); ?></h2>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-20">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="resultsBlock">
					<div class="resultsBlock-number">41<sup>%</sup></div>
					<h2 class="resultsBlock-title"><?php //the_field('section2_title'); ?>increase in skills among children 
that were taught self-monitoring versus those who were not<sup>1</sup></h2>
				</div><!-- results -->
				
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
	
<section class="pageSection pageSection-21">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="pageSection-title"><?php the_field('section3_title'); ?></h2>
			</div>
		</div><!-- row -->	
		<div class="row">	

			<div class="col-sm-6">
				<p><?php the_field('section3_text'); ?></p>
			</div><!-- column -->
			
			<div class="col-sm-5 col-sm-offset-1">
				<img class="column-image" src="<?php $image = get_field('section3_image'); echo $image[sizes][large]; ?>">
			</div><!-- column -->
			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->	

	<section class="pageSection pageSection-22">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title"><?php the_field('section4_title'); ?></h2>
			</div>
		</div><!-- row -->	
		
			
		<?php while (have_rows('section4_elements')): the_row(); ?>	
			<div style="border-bottom: 1px solid #e6e6e6; padding: 40px 0">

				<div  class="row" >	
				<div class="col-sm-7">
					<?php the_sub_field('description'); ?>
				</div><!-- column -->

				<div class="col-sm-4 col-sm-offset-1">
					<a class="btn btn-primary" role="button" style="width: 100%; display: block;" data-toggle="collapse" href="#element-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="collapseExample">Show Strategies</a>
				</div><!-- column -->
			</div><!-- row -->
			
			<div id="element-<?php echo get_row_index(); ?>" class="collapse row" style="padding: 40px 0;">
					<?php $counter = 1; ?>
					<?php while ( $counter < 5 ): ?>
						<div class="col-sm-4 readyCard"style="margin-bottom: 32px; " >
						<div class="readyCard-inner" style="min-height: 100px;">
							<div class="readyCard-text">Collaborate with learners to develop standards- aligned activities to meet their learning goals.</div>
							<a href="<?php the_sub_field('link'); ?>" class="readyCard-button" style="margin-top: 40px;">Show Example</a>
						</div>
						</div>
					<?php $counter++; ?>
					<?php endwhile; ?>
				</div><!--  collapse -->
			</div><!--  -->		
		<?php endwhile; ?> 	
			
			
		
	</div><!-- container -->
</section><!-- pageSection -->	
	
<section class="pageSection pageSection-23">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-text"><?php the_field('section5_text'); ?></h2>
				<a href="<?php the_field('section5_link'); ?>" class="pageSection-button btn btn-primary"><?php the_field('section5_button'); ?></a>
			</div>
		</div><!-- row -->	
	</div><!-- container -->
</section><!-- pageSection -->		
	
<section class="pageSection pageSection-24  pageSection-color is-<?php echo $color; ?>">
	<div class="leap-stripe"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="ledQuote-title"><?php the_field('section6_quote'); ?></h2>
				<h3 class="ledQuote-author"><?php the_field('section6_author'); ?></h3>				
				<div class="ledQuote-caption"><?php the_field('section6_caption'); ?></div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->	
	
<section class="pageSection pageSection-25">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="pageSection-title"><?php the_field('section7_title'); ?></h2>
			</div>
		</div><!-- row -->	
		<div class="row">	

			<div class="col-sm-6">
				<div><?php the_field('section7_text'); ?></div>
			</div><!-- column -->
			
			<div class="col-sm-5 col-sm-offset-1">
				<img class="column-image" src="<?php $image = get_field('section7_image'); echo $image[sizes][large]; ?>">
				<div class="pageSection-small"><?php the_field('section7_text2'); ?></div>
			</div><!-- column -->
			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
	
<section class="pageSection pageSection-26">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class=""><?php the_field('section8_title'); ?></div>
				<div><a href="<?php the_field('section8_link'); ?>" class="pageSection-button btn btn-primary"><?php the_field('section8_button'); ?></a></div>
				<div><a href="<?php the_field('section8_link2'); ?>"><?php the_field('section8_text'); ?></a></div>
			</div>
		</div><!-- row -->	
	</div><!-- container -->
</section><!-- pageSection -->	
	
</div><!-- content-wrapper -->

<?php get_footer(); ?>

