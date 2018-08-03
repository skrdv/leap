
<section class="pageSection columns2 border">
	<div class="leap-stripe"></div>
	<div class="container">
		<div class="row flex">
			<div class="col-sm-5">
				<h3 class="columns2-title"><?php the_field('2columns_title'); ?></h3>
				<div class="columns2-text"><?php the_field('2columns_text'); ?></div>	
				<a class="btn btn-primary" href="<?php the_field('2columns_link'); ?>"><?php the_field('2columns_button'); ?></a>
			</div><!-- column -->
			<div class="col-sm-5 col-sm-offset-2">
				<div class="columns2-photo"  style="background-image: url(<?php $image = get_field('2columns_photo'); echo $image[sizes][block]; ?>);"></div>
			</div><!-- column -->			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->