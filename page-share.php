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
        Share your personalized learning experiences with other educators. We know teachers love to try new ideas and instructional techniques in their classrooms. Here, you can support other educators as they explore and implement practices that support ideal learning by sharing a favorite teaching resource or an inspiring story from your own classroom experience.
      </div>
    </div>

  </div>
</section>

<section class="shareSesction shareSesction-buttons">
  <div class="container">

    <a class="btn btn-secondary" href="#">Share a Resource</a>
    <div class="shareSesction-or">
      <span></span> OR <span></span>
    </div>
    <a class="btn btn-secondary" href="#">Share a Resource</a>

  </div>
</section>

<section class="shareSesction shareSesction-review">
  <div class="container">

    <div class="card">
      <div class="card-left">
        <div class="card-text">
          "I definitely think that [personalized learning] works for kids. I have seen tremendous growth in my students… their knowledge level, their ability to interact with students and teachers, the 21st century learning skills they’re getting through all this personalization is beyond anything I could have imagined. They can collaborate, they can persevere, they can think outside of this box, and it’s because we’ve given them the opportunity to do so by… meeting every kid where they need to be."
        </div>
        <div class="card-author">
          Ms. Connie Scalzetti
        </div>
        <div class="card-position">
          5th Grade Teacher <br>CICS West Belden
        </div>
      </div>
      <div class="card-right">
        <div class="card-image">

        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
