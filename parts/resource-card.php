<div class="resourceCard">
<div class="container">



  <div class="resourceCard-header category-<?php the_field('resource_category'); ?>">
    <div class="resourceCard-category is-<?php the_field('resource_category'); ?>">
      Learner <?php the_field('resource_category'); ?>
    </div>
    <h3 class="resourceCard-title">
      <?php the_title(); ?> <?php edit_post_link('*'); ?>
    </h3>
    <div class="resourceCard-text">
      <?php the_field('resource_description'); ?>
    </div>
    <a class="resourceCard-button" href="<?php echo get_permalink(); ?>">Check It Out</a>
  </div>

  <div class="resourceCard-content">
    <img src="<?php the_field('resource_image'); ?>">
    <?php if (get_field('resource_format') == 'tool'): ?>

    <?php elseif (get_field('resource_format') == 'video'): ?>
      <?php $video = get_field('resource_video'); ?>
      <?php $video = apply_filters('the_content', $video); ?>
      <div class="resourceCard-video"><div class="offset"><?php echo $video; ?></div></div>
    <?php endif; ?>



  </div>

</div>
</div>
