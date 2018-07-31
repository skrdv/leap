
<section class="pageSection pageSection-15">
	<div class="leap-stripe"></div>
	<div class="container">
		<div class="row flex">
			<div class="col-sm-5">
				<h2 class="pageSection-title"><?php the_field('section6_title'); ?></h2>
				<div class="pageSection-text"><?php the_field('section6_text'); ?></div>	
				<a class="pageSection-button" href="<?php the_field('section6_link'); ?>"><?php the_field('section6_button'); ?></a>
			</div><!-- column -->
			<div class="col-sm-6 col-sm-offset-1">
				<div class="pageSection-photo"  style="background-image: url(<?php $image = get_field('section6_photo'); echo $image[sizes][large]; ?>);"></div>
			</div><!-- column -->			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->