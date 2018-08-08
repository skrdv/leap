<section class="pageSection pageSection-double" style="background: <?php the_field('double_bg'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-text">
				<?php the_field('double_text'); ?>
				</div>
				<?php $photo = get_field('double_photo'); ?>
				<div class="pageSection-photo" style="background-image: url(<?php echo $photo[sizes][large]; ?>);"></div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

