<section class="pageSection pageSection-llf" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="carousel-get-started" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner" role="listbox">
							
							<?php while (have_rows('section_slider')): the_row(); ?>
							<div class="item <?php if ((get_row_index() == 1)) { echo 'active'; } ?>">
								<div class="getSlider">
									<div class="getSlider-photo">
										<div class="getSlider-icon <?php $title = get_sub_field('slide'); echo $title[value]; ?>"></div>
									</div><!-- slider photo -->
									<div class="getSlider-content">
										<div class="getSlider-title"><?php $title = get_sub_field('slide'); echo $title[label]; ?></div>
										<div class="getSlider-text"><?php the_sub_field('text'); ?></div>
										<a href="<?php the_sub_field('link'); ?>" class="getSlider-button">Explore this componenet</a>
									</div><!-- slider content -->	
								</div><!-- getSlider-item -->
							</div><!-- item -->
							<?php endwhile; ?>
							
						</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-get-started" role="button" data-slide="prev">
						<img src="<?php echo get_template_directory_uri(); ?>/images/left-arrow.png">
					</a>
					<a class="right carousel-control" href="#carousel-get-started" role="button" data-slide="next">
						<img src="<?php echo get_template_directory_uri(); ?>/images/right-arrow.png">
					  </a>
					</div>	

			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->	
</section><!-- pageSection -->