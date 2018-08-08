<?php
/**
 * Template Name: _Modules
 */
?>

<?php

$ok             = THEME_URI.'/includes/icons/icon-ok.svg';
$logo           = THEME_URI.'/includes/img/logo.svg';
$logo_footer    = THEME_URI.'/includes/img/logo-footer.svg';

$home     = esc_url(home_url('/'));
$image   = get_the_post_thumbnail_url($post->ID, 'poster');
$name    = esc_attr( get_bloginfo( 'name', 'display' ) );
$desc    = get_post_field('post_content', $post->ID);

$card_media_image = '/wp-content/uploads/2018/07/72705f984c100205e94c32ecdde73446-300x200.jpg';
$card_cta_photo_image   = '/wp-content/uploads/2018/08/photo-with-cta.jpg';



?>

<style media="screen">
  .admin-bar {
    margin-top: 0 !important;
  }
  .siteHeader,
  .siteFooter {
    display: none !important;
  }
  .hero-image{
    background-image: url(<?php echo $image; ?>);
  }

  .card-media .card-image{
    background-image: url(<?php echo $card_media_image; ?>);
  }

</style>

<?php get_header(); ?>

<section class="section">
  <div class="container">
    <div class="content is-544">
      <strong>Modules</strong>
      <p>For the sake of brevity, what is typically broken out into molecules and organisms in atomic design, we’re combining these and calling them modules for this site. This collection is not exhaustive and only covers the most used and repeated modules. Please reference page designs for all modules.</p>
    </div>
  </div>
</section>

<section class="section section-cards">
  <div class="container">

    <div class="title">Cards and List Items</div>

    <div class="columns">
      <div class="column">

        <div class="subtitle">Card with Media</div>
        <div class="card card-media">
          <div class="card-image">
          </div>
          <div class="card-content">
              <div>Join LEAP at an upcoming conference or event.</div>
              <a href="#">Events</a>
          </div>
        </div>

      </div>
      <div class="column">

        <div class="subtitle">Card with media :HOVER</div>
        <div class="card card-media">
          <div class="card-image">
          </div>
          <div class="card-content">
              <div>Join LEAP at an upcoming conference or event.</div>
              <a class="is-hovered" href="#">Events</a>
          </div>
        </div>

      </div>
    </div>

    <div class="columns">
      <div class="column is-narrow">

        <div class="subtitle">Blue Box with CTA</div>
        <div class="card cta-box">
          <div class="card-content">
            <div class="title">Get the LEAP Learning Framework</div>
            <div class="content">
              Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.
            </div>
            <a class="button" href="#">Download The Framework</a>
          </div>
        </div>

      </div>
      <div class="column">

        <div class="subtitle">Blue Box with CTA:HOVER</div>
        <div class="card cta-box">
          <div class="card-content">
            <div class="title">Get the LEAP Learning Framework</div>
            <div class="content">
              Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.
            </div>
            <a class="button is-hovered" href="#">Download The Framework</a>
          </div>
        </div>

      </div>
    </div>

    <div class="columns">
      <div class="column">

        <div class="subtitle">Photo with CTA</div>
        <div class="card cta-photo">
          <div class="card-image">
            <img src="<?php echo $card_cta_photo_image; ?>" alt="">
          </div>
          <div class="card-content">
            <div class="title">Define</div>
            <div class="content">
              The LEAP Learning Framework, defines personalized learning and delivers sustainable, actionable strategies for every classroom.
            </div>
          </div>
          <footer class="card-footer">
            <a class="button" href="#">Learn More</a>
          </footer>
        </div>

      </div>
      <div class="column">

        <div class="subtitle">BIO with CTA</div>
        <div class="card cta-bio">
          <div class="card-image">
            <img src="<?php echo $card_cta_photo_image; ?>" alt="">
          </div>
          <div class="card-content">
            <div class="title">Define</div>
            <div class="content">
              The LEAP Learning Framework, defines personalized learning and delivers sustainable, actionable strategies for every classroom.
            </div>
          </div>
          <footer class="card-footer">
            <a class="button" href="#">Learn More</a>
          </footer>
        </div>

      </div>
      <div class="column">

        <div class="subtitle">BIO with CTA:HOVER</div>
        <div class="card cta-bio">
          <div class="card-image">
            <img src="<?php echo $card_cta_photo_image; ?>" alt="">
          </div>
          <div class="card-content">
            <div class="title">Define</div>
            <div class="content">
              The LEAP Learning Framework, defines personalized learning and delivers sustainable, actionable strategies for every classroom.
            </div>
          </div>
          <footer class="card-footer">
            <a class="button is-hovered" href="#">Learn More</a>
          </footer>
        </div>
      </div>
    </div>

    <!-- <div class="subtitle">Card: Post Author</div>
    <div class="columns">
      <div class="column is-4">

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
    </div> -->

  </div>
</section>

<section class="section section-lists">

    <div class="subtitle container">List Item With Video</div>
    <div class="card list-item">
      <div class="container">
        <div class="card-content">
          <div class="card-meta">
            <span class="title is-subhead is-focused">Learner focused</span>
          </div>
          <div class="card-title">
            <h3 class="title is-label">Flex Fridays <a target="_blank" class="post-edit-link" href="#">*</a></h3>
          </div>
          <div class="card-text">
            <div class="content">
              <p class="is-small">Watch how educators at Lovett Elementary use Flex Friday as an opportunity for students to experience learning based on their strengths and interests.</p>
            </div>
          </div>
          <div class="card-action">
            <a class="button is-secondary" href="#">Check It Out</a>
          </div>
        </div>
        <div class="card-footer has-photo has-video"
             style="background-image: url(/wp-content/uploads/2018/07/main_section_2.jpg);">
          <div class="card-video is-overlay">
            <?php echo do_shortcode('[video src="/wp-content/uploads/2018/07/More-stuffMatch-Day.mp4"]'); ?>
          </div>
          <div class="card-footer-item">
            <i class="icon fa fa-thumbs-up"></i>
            <span class="title is-subtitle">
              <span data-favorites-post-count-id="24" data-siteid="">10</span> Upvotes
            </span>
          </div>
          <div class="card-footer-item">
            <i class="icon fa fa-comment"></i>
            <span class="title is-subtitle">2 Comments</span>
          </div>
        </div>
      </div>
    </div>

    <div class="subtitle container">List Item WIth Photo</div>
    <div class="card list-item">
      <div class="container">
        <div class="card-content">
          <div class="card-meta">
            <span class="title is-subhead is-focused">Learner focused</span>
          </div>
          <div class="card-title">
            <h3 class="title is-label">Flex Fridays <a target="_blank" class="post-edit-link" href="#">*</a></h3>
          </div>
          <div class="card-text">
            <div class="content">
              <p class="is-small">Watch how educators at Lovett Elementary use Flex Friday as an opportunity for students to experience learning based on their strengths and interests.</p>
            </div>
          </div>
          <div class="card-action">
            <a class="button is-secondary" href="#">Check It Out</a>
          </div>
        </div>
        <div class="card-footer has-photo"
             style="background-image: url(/wp-content/uploads/2018/07/main_section_2.jpg);">
          <div class="card-footer-item">
            <i class="icon fa fa-thumbs-up"></i>
            <span class="title is-subtitle">
              <span data-favorites-post-count-id="24" data-siteid="">10</span> Upvotes
            </span>
          </div>
          <div class="card-footer-divider"></div>
          <div class="card-footer-item">
            <i class="icon fa fa-comment"></i>
            <span class="title is-subtitle">2 Comments</span>
          </div>
        </div>
      </div>
    </div>

    <div class="subtitle container">List Item Without Photo or Video</div>
    <div class="card list-item">
      <div class="container">
        <div class="card-content">
          <div class="card-meta">
            <span class="title is-subhead is-focused">Learner focused</span>
          </div>
          <div class="card-title">
            <h3 class="title is-label">Flex Fridays <a target="_blank" class="post-edit-link" href="#">*</a></h3>
          </div>
          <div class="card-text">
            <div class="content">
              <p class="is-small">Watch how educators at Lovett Elementary use Flex Friday as an opportunity for students to experience learning based on their strengths and interests.</p>
            </div>
          </div>
          <div class="card-action">
            <a class="button is-secondary" href="#">Check It Out</a>
          </div>
        </div>
        <div class="card-footer no-photo">
          <div class="card-footer-item">
            <i class="icon fa fa-thumbs-up"></i>
            <span class="title is-subtitle">
              <span data-favorites-post-count-id="24" data-siteid="">10</span> Upvotes
            </span>
          </div>
          <div class="card-footer-item">
            <i class="icon fa fa-comment"></i>
            <span class="title is-subtitle">2 Comments</span>
          </div>
        </div>
      </div>
    </div>

</section>

<section class="section section-modules">

    <div class="subtitle container">Step Section</div>
    <div class="card card-step">
      <div class="container">
        <div class="card-header">
          <div class="title is-label">Step 1.</div>
        </div>
        <div class="card-content">
          <div class="card-meta">
            <div class="title is-subhead is-focused">Learner Focused / Balance individual needs with the needs of the class community</div>
          </div>
          <div class="card-text">
            <div class="content">
              <strong>Consider individual student interests when planning learning experiences</strong>
              <p>As teachers develop activities for Flex Friday, they consider individual student interests and the needs of the class community. They determine skills that will meet class needs, and then incorporate those skills into experiences focused on student interests.</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="card-footer-icon">
            <img src="<?php echo THEME_CSS.'../img/logo_star.svg'; ?>" alt="">
          </div>
          <div class="card-footer-text">
            <div class="content">
              <small><strong>LEAP:</strong> Consider how you can meet academic or social-emotional needs while incorporating student interests. If the class needs practice with collaboration or team skills, design activities focused on student interests that require teamwork to create and problem solve.</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="subtitle container">Quote Section</div>
    <div class="subtitle container">Color Block Quote</div>
    <div class="subtitle container">Big Stats Section</div>
    <div class="subtitle container">Small Stats Section</div>
    <div class="subtitle container">Inline Photo Or Video With Caption</div>

    <div class="subtitle container">Inline CTA</div>
    <!-- <div class="group-cta">
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
    </div> -->

    <div class="subtitle container">Text Image and CTA</div>
    <div class="subtitle container">Text, Image And CTA (Right)</div>
    <div class="subtitle container">Text And CTA (Center)</div>
    <div class="subtitle container">Pagination</div>
    <div class="subtitle container">Social Page Controls</div>

  </div>
</section>

<div class="subtitle container">Footer</div>
<footer class="site-footer">
  <div class="container">

    <?php if (!is_front_page()): ?>
      <div class="site-footer-title title is-label is-center">Get The Latest</div>
      <?php echo do_shortcode('[contact-form-7 id="200" title="Subscribe"]'); ?>
    <?php endif; ?>

    <div class="columns">
      <div class="column">
        <div class="columns">
          <div class="column">
            <div class="menu">
              <p class="menu-label title is-label">Why LEAP?</p>
              <ul class="menu-list">
                <?php wp_nav_menu(array(
                  'theme_location'  => 'main',
                  'items_wrap'      => '%3$s',
                  'container'       => false,
                  'menu_class'      => false,
                  'menu_id'         => false,
                  'depth'            => 1,
                  'walker'          => new Bulmascores_Nav_Walker(),
                )); ?>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="menu">
              <p class="menu-label title is-label">Learn More</p>
              <ul class="menu-list">
                <?php wp_nav_menu(array(
                  'theme_location'  => 'more',
                  'items_wrap'      => '%3$s',
                  'container'       => false,
                  'menu_class'      => false,
                  'menu_id'         => false,
                  'depth'            => 1,
                  'walker'          => new Bulmascores_Nav_Walker(),
                )); ?>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="menu">
              <p class="menu-label title is-label">Connect</p>
              <ul class="menu-list">
                <?php wp_nav_menu(array(
                  'theme_location'  => 'footer-3',
                  'items_wrap'      => '%3$s',
                  'container'       => false,
                  'menu_class'      => false,
                  'menu_id'         => false,
                  'depth'            => 1,
                  'walker'          => new Bulmascores_Nav_Walker(),
                )); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-narrow">
        <div class="site-footer-social">
          <a class="icon">
            <i class="fa fa-twitter"></i>
          </a>
          <a class="icon">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="icon">
            <i class="fa fa-instagram"></i>
          </a>
          <a class="icon">
            <i class="fa fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="site-footer-logo">
      <img src="<?php echo $logo_footer; ?>" alt="<?php echo $name; ?>">
    </div>

    <div class="site-footer-copy">
      <span class="subtitle">© 2018 — LEAP Innovations</span> •
      <a class="title is-caption">Terms & Conditions</a> •
      <a class="title is-caption">Privacy Policy</a>
    </div>

  </div>
</footer>

<?php get_footer(); ?>
