<section class="pageSection center border">		
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