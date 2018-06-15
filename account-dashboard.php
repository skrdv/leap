<?php
/**
 * Template Name: Account Dashboard
 */
get_header(); ?>

<?php $query = new WP_Query( array(
	'post_type' => array('resource')
) ); ?>

<section class="admin admin-dashboard" style="background:gray;">


</section>

<section class="resourcesGrid" id="response">
	<div class="container">
		<div class="row is__flex">
		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</div><!-- row -->
	</div><!-- container -->
</section>

<?php get_footer(); ?>
