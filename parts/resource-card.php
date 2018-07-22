<?php
  $category     = get_field('resource_category');
  $description  = get_field('resource_description');
  $permalink    = get_permalink();
  $video        = get_field('resource_video');
  $videoContent = apply_filters('the_content', $video);
  $image        = get_the_post_thumbnail_url($post->ID);
?>

<div class="resourceCard is-<?php echo $category; ?>">
  <div class="container">

    <div class="resourceCard-content">
      <div class="card">
        <div class="card-meta">
          Learner <?php echo $category; ?>
        </div>
        <div class="card-title">
          <?php the_title(); ?>
          <?php edit_post_link('*'); ?>
        </div>
        <div class="card-desc">
          <?php echo $description; ?>
        </div>
        <a class="card-btn" href="<?php echo $permalink; ?>">
          Check It Out
        </a>
      </div>
    </div>

    <div class="resourceCard-media">
      <div class="card">

        <?php if($video): ?>
          <div class="card-video">
            <?php echo $videoContent; ?>
          </div>
        <?php elseif($image): ?>
          <div class="card-image" style="background-image: url('<?php echo $image; ?>');">
          </div>
        <?php else: ?>
          <div class="card-bgcolor"></div>
        <?php endif; ?>

        <div class="card-footer
             <?php if( $video OR $image ){ /* do nothing */ } else { echo 'is-fullheight'; } ?> ">
          <a href="#">
            <i class="fa fa-thumbs-up"></i>
             <span>10 Upvotes</span>
          </a>
          <a href="#">
            <i class="fa fa-comment"></i>
             <span>2 Comments</span>
          </a>
        </div>

      </div>
    </div>

  </div>
</div>
