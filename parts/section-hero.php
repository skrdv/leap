<section class="heroBanner" style="background-image: url(<?php $bg = get_field('page_banner'); echo $bg[sizes][large]; ?>);">	
	<div class="heroBanner-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="heroBanner-title is-<?php echo $color; ?>"><?php the_field('page_title'); ?></h1>
				</div><!-- column -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- shadow -->	
</section><!-- mainBanner -->	