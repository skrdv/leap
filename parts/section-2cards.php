<section class="pageSection pageSection-7">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="pageSection-title centered"><?php the_field('2cards-title'); ?></h2>
			</div><!-- column -->
		</div><!-- row -->	
		
		<div class="row flex">
			<?php while (have_rows('2cards')): the_row(); ?>
			<div class="col-sm-6 getstartedCard">
				<div class="getstartedCard-inner">
					<div class="getstartedCard-photo" style="background-image: url(<?php $bg = get_sub_field('photo'); echo $bg[sizes][medium]; ?>);"></div>
					<div class="getstartedCard-content">
						<div style="font-size: 16px; line-height: 28px;"><?php the_sub_field('text'); ?></div>
						<a href="<?php the_sub_field('link'); ?>" class="getstartedCard-link"><?php the_sub_field('button'); ?></a>
					</div>	
				</div>
			</div><!-- column -->
			<?php endwhile; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
