<?php
/**
 * Resourse Card Template
 */
?>

<?php
  $category     = get_field('resource_category');
  $description  = get_field('resource_description');
  $permalink    = get_permalink();
  $video        = get_field('resource_video');
  $videoWP      = apply_filters('the_content', $video);
  $image        = get_the_post_thumbnail_url($post->ID);
  $comments     = get_comments_number($post->ID);
  $favorites    = get_favorites_count($post->ID);
?>

<div class="resourceCard is-<?php echo $category; ?>">
  <div class="container">

    <div class="resourceCard-content">
      <div class="card">
        <div class="card-meta">Learner <?php echo $category; ?></div>
        <div class="card-title"><?php the_title(); ?> <?php edit_post_link('*'); ?></div>
        <div class="card-desc"><?php echo $description; ?></div>
        <a class="btn btn-secondary" href="<?php echo $permalink; ?>">Check It Out</a>
      </div>
    </div>

    <div class="resourceCard-media">
      <div class="card">
        <?php if($video): ?>
          <div class="card-video"><?php echo $videoWP; ?></div>
        <?php elseif($image): ?>
          <div class="card-image" style="background-image: url('<?php echo $image; ?>');"></div>
        <?php else: ?>
          <div class="card-bgcolor"></div>
        <?php endif; ?>
        <div class="card-footer <?php if( $video OR $image ){ } else { echo 'is-fullheight'; } ?> ">
          <div class="item">
            <i class="fa fa-thumbs-up"></i>
            <span><?php echo $favorites; ?> Upvotes</span>
          </div>
          <div class="item">
            <i class="fa fa-comment"></i>
             <span><?php echo $comments; ?> Comments</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
