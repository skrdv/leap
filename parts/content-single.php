<?php
/**
 * Single post content
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
      <div class="tag">
				<?php the_date(); ?>
			</div>
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

  		<div class="group-cta">
  			<div class="columns">
  				<div class="column">
  					<div class="content">
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at erat in diam dignissim mollis consectetur sit amet lectus. Vivamus vel sagittis erat, sed venenatis ex. Mauris dapibus nisl eget feugiat ornare.</p>
  						<p>Etiam tempor urna malesuada lectus elementum efficitur. Vivamus vel libero non purus accumsan sagittis. Donec est eros, pellentesque sed aliquam sed, suscipit in urna.</p>
  					</div>
  				</div>
  				<div class="column is-narrow">
  					<div class="card card-cta">
  						<div class="card-content">
  							<div class="title">LEAP InnovatED Summit August 28, 2018</div>
  							<a class="button button-secondary" href="#">Register Now</a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

  		<div class="group-authors">
  			<div class="title is-sub">Written By</div>
  			<div class="columns">
  				<div class="column">
  					<div class="card card-author">
  						<div class="card-image">
  							<div class="no-image"></div>
  						</div>
  						<div class="card-content">
  							<div class="title">First Last</div>
  							<div class="subtitle">Community Co-coordinator</div>
  						</div>
  					</div>
  				</div>
  				<div class="column">
  					<div class="card card-author">
  						<div class="card-image">
  							<div class="no-image"></div>
  						</div>
  						<div class="card-content">
  							<div class="title">First Last</div>
  							<div class="subtitle">Community Co-coordinator</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

    </div>
	</div>
</section>

</article>
