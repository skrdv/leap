<?php
/**
 * The Template for single posts
 *
 */
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'parts/content', 'single' ); ?>

		<?php _tk_pagination(); ?>

		<?php
			// if ( comments_open() || '0' != get_comments_number() )
			// 	comments_template();
		?>

	<?php endwhile; ?>


<?php get_footer(); ?>
