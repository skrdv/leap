<?php $color = get_field('page_color'); ?>
<?php $bg = get_field('page_banner'); ?>

<section class="heroBanner" style="background-image: url(<?php $bg = get_field('page_banner'); echo $bg[sizes][large]; ?>);">	
	<div class="heroBanner-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="heroBanner-title is-<?php echo $color; ?>">
						<?php the_field('page_title'); ?><br>
						<span><?php the_field('page_subtitle'); ?></span>					
					</h1>					
				</div><!-- column -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- shadow -->	
</section><!-- mainBanner -->	

<section class="pageSection pageSection-color is-<?php echo $color; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-text">
				<?php the_field('section1_text'); ?>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->