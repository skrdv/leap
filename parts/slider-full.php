<section class="pageSection" >
	<div id="carousel-full" class="carousel slide carouselFull" data-ride="carousel">
		  <div class="carousel-inner" role="listbox">
			  <?php while (have_rows('slider_full')): the_row(); ?>
			  	<?php $bg = get_sub_field('photo'); ?>
			  	<?php $bg = $bg[sizes][large]; ?>
			  
			      <div class="item carouselFull-item <?php if ( get_row_index() == 1) { echo 'active'; } ?>" style="background-image: url(<?php echo $bg; ?>)">
					  <div class="carouselFull-item-inner">
							<div class="container">
								<div class="carouselFull-caption"><?php the_sub_field('text'); ?></div>
							</div><!-- container -->
					  </div>  
			</div><!-- item -->
			  
			  <?php endwhile; ?>
		</div><!-- carousel-inner -->	

	<!-- Controls -->
		<div class="carouselFull-controls">
			<div class="container">
				<a class="sectionSlider-prev" href="#carousel-full" role="button" data-slide="prev"></a>
				<a class="sectionSlider-next" href="#carousel-full" role="button" data-slide="next"></a>
			</div>	
		</div>	
		
	</div><!-- carousel-full -->	
</section><!-- pageSection -->

