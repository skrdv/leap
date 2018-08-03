<?php // Template Name: 2. Tiled List Page Template ?>

<?php get_header(); ?>

<?php get_template_part('parts/section','hero'); ?>

<section class="pageSection border">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pageSection-big">
				<?php the_field('double_text'); ?>
				</div>
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->

<?php $query = new WP_Query( array( 'category_name' => 'news' ) ); ?>


<?php

$post_type = get_field('content_type');

$args = array(
	'post_type' => $post_type,
	'posts_per_page' => 99
);

$query = new WP_Query( $args );

	while ( $query->have_posts() ):
		$query->the_post();
		get_template_part('parts/resource','card');
	endwhile; 

wp_reset_postdata();

?>

<?php get_footer(); ?>
