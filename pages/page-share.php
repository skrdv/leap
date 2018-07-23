<?php //Template Name: Share Resource ?>

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

    <div class="shareSesction-resource">
      <a class="btn btn-secondary" href="#">Share a Resource</a>

      <?php acf_form(array(
        'post_id'		=> 'new_post',
        'new_post'		=> array(
          'post_type'		=> 'resource',
          'post_status'		=> 'draft'
        ),
        'submit_value'		=> 'Add new resource'
      )); ?>

    </div>
    <div class="shareSesction-or">
      <span></span> OR <span></span>
    </div>
    <div class="shareSesction-resource">
      <a class="btn btn-secondary" href="#">Share a Story</a>

    </div>

  </div>
</section>

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
