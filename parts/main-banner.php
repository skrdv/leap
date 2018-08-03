<?php

$poster   = get_the_post_thumbnail_url($post->ID, 'poster');

$images = get_field('section_gallery');
$size = 'full';

?>


<style media="screen">

	.mainBanner {
		height: 827px;
	}

	.mainBanner-title {
		position: absolute;
    left: 0;
    bottom: 8rem;
    margin: 0;
		width: 100%;
    line-height: 6rem;
		text-align: center;
	}

	.mainBanner-title .container {
		max-width: 82rem;
		margin-left: auto;
		margin-right: auto;
	}

	.mainBanner .gradient {
		background: radial-gradient(613.18px at 50% 25.85%,
								rgba(35, 49, 59, 0) 0%,
								rgba(35, 49, 59, 0.4) 100%);
		opacity: 0.9;
		transform: matrix(-1, 0, 0, 1, 0, 0);
	}

	.mainBanner .gallery-item {
		width: 100%;
		height: 100%;
		background-size: cover;
		background-image: url(<?php echo $poster; ?>);
		transform: scale(1.2);
		transition: 3s;
		opacity: 0;
	}

	.mainBanner .gallery-item.is-active {
		display: block !important;
		opacity: 1;
	}

	.mainBanner .gallery-item.is-hidden {
		display: none !important;
	}

	.mainBanner .gallery-item.is-animated {
	  width: 100%;
	  margin: 0;
	  -webkit-animation: slide 15s ease-out infinite;
	}

	@-webkit-keyframes slide {
	    from { background-position: 0 0; }
	    to { background-position: 0 -100px; }
	}

</style>

<?php if( $images ): ?>
	<section class="mainBanner">
		<div class="gallery is-overlay">
        <?php foreach( $images as $image ): ?>
            <div class="gallery-item is-animated"
								 style="background-image: url(<?php echo $image[url]; ?>);">
            </div>
        <?php endforeach; ?>
    </div>
		<div class="gradient is-overlay"></div>
		<h1 class="mainBanner-title">
			<div class="container">
				<?php the_field('page_title'); ?>
			</div>
		</h1>
		<a class="mainBanner-scroll">
			Scroll<br><img src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.svg">
		</a>
	</section>
<?php endif; ?>





	</div>


<?php /*
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

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

	<a class="mainBanner-scroll">
		Scroll<br><img src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.svg">
	</a>
</div>
*/ ?>
</section><!-- mainBanner -->
