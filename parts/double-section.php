<section class="pageSection pageSection-double" style="background: <?php the_field('double_bg'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-text">
				<?php the_field('double_text'); ?>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<section class="pageSection pageSection-double-photo" >
	<div class="leap-stripe"></div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php $photo = get_field('double_photo'); ?>
				<div class="pageSection-photo" style="background-image: url(<?php echo $photo[sizes][large]; ?>);">
				</div>	
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->


<?php if (( get_field('double_title') ) or ( get_field('double_text2') )): ?>

<section class="pageSection center <?php if (get_field('double_text2')) { echo 'border'; } ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if (get_field('double_title')): ?>
				<h2 class="pageSection-title"><?php the_field('double_title'); ?></h2>
				<h3 class="pageSection-subtitle"><?php the_field('double_text2'); ?></h3>
				<?php else: ?>
				<h3 class="pageSection-big"><?php the_field('double_text2'); ?></h3>
				<?php endif; ?>
			</div><!-- col-sm -->
		</div><!-- row  -->
	</div><!-- container -->
</section>	

<?php endif; ?>