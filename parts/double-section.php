<section class="pageSection pageSection-double pageSection-10" style="background: <?php the_field('double_bg'); ?>;">
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

<section class="pageSection pageSection-11" >
	<div class="leap-stripe leap-stripe-11"></div>	
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

<section class="pageSection pageSection-12" >
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