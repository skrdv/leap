<section class="pageSection pageSection-14">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="pageSection-title"><?php the_field('section5_title'); ?></h2>
				<div class="blockFacts">
					<?php while (have_rows('section5_facts')): the_row(); ?>
					<div class="fact-element fact-<?php echo get_row_index(); ?>">
						<div class="fact-number"><?php the_sub_field('number'); ?></div>
						<div class="fact-label"><?php the_sub_field('label'); ?></div>
					</div>	
					<?php endwhile; ?>
				</div>	
			</div>		
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->
	