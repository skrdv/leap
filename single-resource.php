<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <section class="resourceSesction resourceSesction-hero is-<?php the_field('resource_category'); ?>" style="background-image: url(<?php the_field('resource_image'); ?>);">
    <div class="container">
      <div class="card">
        <div class="card-meta">
          Learner <?php the_field('resource_category'); ?>
        </div>
        <h1 class="card-title">
          <?php the_title(); ?>
        </h1>
        <h2 class="card-subtitle">
          <?php the_field('resource_subtitle'); ?>
        </h2>
      </div>
    </div>
  </section>

  <section class="resourceSesction resourceSesction-description is-<?php the_field('resource_category'); ?>">
    <div class="container">
      <div class="card">
        <div class="card-content">
          <?php the_field('resource_description'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php if( have_rows('resource_reviews') ): ?>
    <section class="resourceSesction resourceSesction-reviews">
      <div class="container">
        <div class="resourceSesction-title"><?php the_field('resource_reviews_title'); ?></div>
        <div class="resourceSesction-line"></div>
	      <?php while( have_rows('resource_reviews') ): the_row();
		      $image = get_sub_field('image');
		      $content = get_sub_field('content');
		      $author = get_sub_field('author');
		      $position = get_sub_field('position'); ?>
          <div class="reviewItem">
            <div class="reviewItem-left">
              <?php if($image): ?>
                <div class="reviewItem-image" style="background-image: url('<?php echo $image; ?>');">
                </div>
              <?php else: ?>
                <div class="reviewItem-image">
                  <div class="blank"></div>
                </div>
              <?php endif; ?>
            </div>
            <div class="reviewItem-right">
              <div class="reviewItem-content">
                <?php echo $content; ?>
              </div>
              <div class="reviewItem-author">
                <?php echo $author; ?>
              </div>
              <div class="reviewItem-position">
                <?php echo $position; ?>
              </div>
            </div>
          </div>
	      <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if( have_rows('resource_statistic') ): ?>
    <section class="resourceSesction resourceSesction-statistic bg-secondary">
      <div class="container">
        <div class="card">
          <div class="card-title">
            <?php the_field('resource_statistic_title'); ?>
          </div>
          <div class="card-subtitle">
            <?php the_field('resource_statistic_subtitle'); ?>
          </div>
          <div class="card-content">
            <div class="card-square">
              <ul>
        <?php while( have_rows('resource_statistic') ): the_row();
          $item = get_sub_field('item'); ?>
                <li><?php echo $item; ?></li>
        <?php endwhile; ?>
              </ul>
            </div>
          </div>
          <div class="card-footer">
            <?php the_field('resource_statistic_comment'); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if( have_rows('resource_steps') ): ?>
    <section class="resourceSesction resourceSesction-steps">
      <div class="container">
        <div class="resourceSesction-title"><?php the_field('resource_steps_title'); ?></div>
        <div class="resourceSesction-line"></div>
	      <?php while( have_rows('resource_steps') ): the_row();
		      $step = get_sub_field('step');
		      $category = get_sub_field('category');
		      $content = get_sub_field('content'); ?>
          <div class="stepItem">
            <div class="container">
              <div class="stepItem-category is-<?php echo $category; ?>">
                Learner <?php echo $category; ?>
              </div>
              <div class="stepItem-label">
                <?php echo $step; ?>
              </div>
              <div class="stepItem-content">
                <?php echo $content; ?>
              </div>
            </div>
          </div>
	      <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>

<section class="resourceSesction resourceSesction-footer">

  <div class="form-section form-download">
    <div class="container">
    <div class="form-title">Download the Flex Fridays Resource</div>
    <div class="form-content">
      <div class="form-label">PDF</div>
      <a class="form-icon" href="#"><i class="fa fa-file-pdf"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-upvote">
    <div class="container">
    <div class="form-title">Upvote and Say “Thanks” (10)</div>
    <div class="form-content">
      <div class="form-label">Upvote</div>
      <a class="form-icon" href="#"><i class="fa fa-findsome"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-comments">
    <div class="container">
    <div class="form-title">Comments (10)</div>
    <div class="form-content">
      <div class="form-label">Show comments</div>
      <a class="form-icon" href="#"><i class="fa fa-findsome"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-share">
    <div class="container">
    <div class="form-title">Share This Resource</div>
    <div class="form-content">
      <a class="form-icon" href="#"><i class="fa fa-twitter"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-facebook"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-instagram"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-share"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-navigation">
    <div class="container">
    <div class="form-title">
      Post navigation
    </div>
    <div class="form-content">
      Arrows
    </div>
    </div>
  </div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>
