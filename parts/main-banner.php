<section class="mainBanner" style="background-image: url(<?php the_field('main_banner_image'); ?>);">	
	
<div id="carousel-main" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators mainBanner-indicators">
	<?php while ( have_rows('main_slider')): the_row(); ?>  
	<?php if (get_row_index() == 1) { $class = 'active'; } else {$class=""; }  ?>
	<?php $slide = get_row_index() -1; ?>  
    <li data-target="#carousel-main" data-slide-to="<?php echo $slide; ?>" class="<?php echo $class; ?>"></li>
	<?php endwhile; ?>  	  
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php while ( have_rows('main_slider')): the_row(); ?>  
	<?php if (get_row_index() == 1) { $class = 'active'; } else {$class=""; }  ?>
	<?php $bg = get_sub_field('image'); $bg = $bg[sizes][large]; ?>  
	  
    <div class="mainBanner-item item <?php echo $class; ?>" style="background-image: url(<?php echo $bg; ?>);">
		<div class="mainBanner-cloack">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2 class="mainBanner-title"><?php the_sub_field('title'); ?></h2>
					</div>
				</div><!-- row -->
			</div><!-- container -->	
		</div><!-- cloack -->	
    </div><!-- item -->
	 <?php endwhile; ?> 
  </div><!-- carousel-inner -->

<?php /*
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
*/ ?>
	<a class="mainBanner-scroll">
		Scroll<br><img src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.svg">
		
	</a>
</div>

	
</section><!-- mainBanner -->	