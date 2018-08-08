<section class="pageSection pageSection-empty" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<?php if (( get_field('double_title') ) or ( get_field('double_text2') )): ?>

<section class="pageSection center <?php if (get_field('bottom_border')) { echo 'border'; } ?>">
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

