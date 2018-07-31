<section class="pageSection pageSection-12" >
	<div class="container">
		<div class="row sectionCards">
					<?php while (have_rows('section3_cards')): the_row(); ?>
						<div class="col-sm-3 sectionCard">
								<div class="sectionCard-photo" style="background-image: url(<?php $bg = get_sub_field('image'); echo $bg[sizes][medium]; ?>);"></div>
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