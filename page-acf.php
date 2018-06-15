<?php //Template Name: ACF Form ?>
<?php get_header(); ?>
		<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
				<?php acf_form(array(
					'post_id'		=> 'new_post',
					'new_post'		=> array(
						'post_type'		=> 'resource',
						'post_status'		=> 'publish'
					),
					'submit_value'		=> 'Add new resource'
				)); ?>

	<?php endwhile; // end of the loop. ?>
		</div>

<?php get_footer(); ?>
