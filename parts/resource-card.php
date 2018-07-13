<div class="col-sm-4">
<div class="resourceCard">

  <div class="resourceCard-header category-<?php the_field('resource_category'); ?>">
    <img class="resourceCard-header-logo" src="<?php echo get_template_directory_uri() . '/images/' . get_field('resource_category') . '.png'; ?>">
    <h4><?php the_field('resource_format'); ?></h4>
    <h2 class="resourceCard-title">
      <a href="<?php echo get_permalink(); ?>">
        <?php the_title(); ?> <?php edit_post_link('*'); ?>
      </a>
    </h2>
  </div>

  <div class="resourceCard-content">
    <?php if (get_field('resource_format') == 'tool'): ?>
      <img src="<?php the_field('resource_image'); ?>">
    <?php elseif (get_field('resource_format') == 'video'): ?>
      <?php $video = get_field('resource_video'); ?>
      <?php $video = apply_filters('the_content', $video); ?>
      <div class="resourceCard-video"><div class="offset"><?php echo $video; ?></div></div>
    <?php endif; ?>

    <div class="resourceCard-authors">
      <?php while (have_rows('resource_authors')): the_row(); ?>
        <p><?php the_sub_field('gender'); ?> <?php the_sub_field('name'); ?> <?php the_sub_field('position'); ?></p>
      <?php endwhile; ?>
    </div>

    <div class="resourceCard-description">
      <?php the_field('resource_description'); ?>
    </div>

    <div class="resourceCard-files">
      <ul>
      <?php while (have_rows('resource_files')): the_row(); ?>
        <?php $file = get_sub_field('file'); ?>
        <li><a href="<?php echo $file[url] ; ?>"><?php echo $file[title];  ?></a><?php  //print_r($file); ?></li>
      <?php endwhile; ?>
      </ul>
    </div>

    <div class="resourceCard-keywords"></div>

  </div>

</div>
</div>
