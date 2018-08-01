<?php
/**
 * Template Name: Share Resource
 */
?>

<?php global $post; ?>

<?php get_header(); ?>

<section class="shareSesction shareSesction-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');">
  <div class="container">

    <div class="card">
      <h1 class="card-title">
        <?php the_title(); ?>
      </h1>
    </div>

  </div>
	<div class="bg-overlay"></div>
</section>

<section class="shareSesction shareSesction-description">
  <div class="container">

    <div class="card">
      <div class="card-content">
        <?php the_field('share_description'); ?>
      </div>
    </div>

  </div>
</section>

<section class="shareSesction shareSesction-buttons">
  <div class="container">
	 <div class="row">
		 <div class=col-sm-5>
    		<div class="shareSesction-resource">
      			<a id="btn-resource" class="btn btn-secondary" >Share a Resource</a>
			 </div>
		</div><!-- col-sm -->
		<div class="col-sm-2">
    		<div class="shareSesction-or">
      			<span></span> OR <span></span>
    		</div>
		</div><!-- col-sm -->
		 <div class=col-sm-5>
    		<div class="shareSesction-resource">
      			<a id="btn-story" class="btn btn-secondary" >Share a Story</a>
			</div>
		 </div><!-- col-sm -->
	</div><!-- row -->
  </div><!-- container -->
</section><!-- shareSesction-buttons -->

<section class="shareSesction shareSesction-buttons">
  <div class="container">
	 <div class="row">
		 <div class=col-sm-12>
			 <div id="form-resource" class="collapse">
				 <h1>Resource</h1>
			       <?php  acf_form(array(
		'id' => 377,
        'post_id'		=> 'new_post',
        'new_post'		=> array(
          'post_type'		=> 'post',
          'post_status'		=> 'draft'
        ),
        'submit_value'		=> 'Add new resource'
      ));  ?>
				</div>
			 <div id="form-story" class="collapse">
				 <h1>Story</h1>
			       <?php /* acf_form(array(
        'post_id'		=> 'new_post',
        'new_post'		=> array(
          'post_type'		=> 'resource',
          'post_status'		=> 'draft'
        ),
        'submit_value'		=> 'Add new resource'
      ));  */ ?>
				</div>


		 </div><!-- col-sm -->
	</div><!-- row -->
  </div><!-- container -->
</section><!-- shareSesction-buttons -->

<script>
jQuery(document).on('click', '#btn-resource', function() {
		jQuery('#form-resource').toggleClass('in');
		jQuery('#form-story').removeClass('in');
		console.log('dfdsf');
	} );

jQuery(document).on('click', '#btn-story', function() {
		jQuery('#form-story').toggleClass('in');
		jQuery('#form-resource').removeClass('in');
} );
</script>



<?php if( have_rows('share_reviews') ): ?>
  <section class="shareSesction shareSesction-review">
    <div class="container">
      <?php while( have_rows('share_reviews') ): the_row();
        $image = get_sub_field('image');
        $content = get_sub_field('content');
        $author = get_sub_field('author');
        $position = get_sub_field('position'); ?>

        <div class="card">
          <?php if($image): ?>
            <div class="card-left">
          <?PHP else: ?>
            <div class="card-full">
          <?php endif; ?>
              <div class="card-content">
                "<?php echo $content; ?>"
              </div>
              <div class="card-author">
                <?php echo $author; ?>
              </div>
              <div class="card-position">
                <?php echo $position; ?>
              </div>
            </div>
          <?php if($image): ?>
            <div class="card-right">
              <div class="card-image" style="background-image: url('<?php echo $image; ?>');"></div>
            </div>
          <?php endif; ?>
        </div>

      <?php endwhile; ?>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
