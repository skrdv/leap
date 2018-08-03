<?php
/**
 * Template for page content in page.php
 *
 */
?>

<?php
$image   = get_the_post_thumbnail_url($post->ID, 'poster');
$category = 'connected';
?>

<style media="screen">
  .hero-image{
    background-image: url(<?php echo $image; ?>);
  }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section class="hero hero-image is-<?php echo $category; ?>">
  <div class="hero-body"></div>
  <div class="hero-foot">
    <div class="container">
			<?php edit_post_link( __( 'Edit', '_tk' ), '<div class="tag edit-link">', '</div>' ); ?>
      <h1 class="title">
        <?php the_title(); ?>
      </h1>
    </div>
  </div>
  <div class="gradient is-overlay"></div>
</section>

<section class="section section-single">
	<div class="container">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

</article>
