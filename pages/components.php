<?php
/**
 * Template Name: Components
 */
?>

<?php

$ok      = THEME_URI.'/includes/icons/icon-ok.svg';
$logo    = THEME_URI.'/includes/img/logo.svg';

$home     = esc_url(home_url('/'));
$image   = get_the_post_thumbnail_url($post->ID, 'poster');
$name    = esc_attr( get_bloginfo( 'name', 'display' ) );
$desc    = get_post_field('post_content', $post->ID);

$category = 'led';

$colors       = array(
  'primary'       => 'Primary Color',
  'secondary'     => 'Secondary Color',
  'demonstrated'  => 'Learner Demonstrated',
  'connected'     => 'Learner Connected',
  'focused'       => 'Learner Focused',
  'led'           => 'Learner Led',
  'text'          => 'Text Color',
  'gray'          => 'Gray Color',
  'grey'          => 'Grey Color',
  'white'         => 'White Color'
);

$main_options =  array(
    'theme_location'    => 'main',
    'items_wrap'        => '%3$s',
    'fallback_cb'       => false,
    'container'         => false,
    'container_class'   => false,
    'container_id'      => false,
    'menu_class'        => false,
    'menu_id'           => false,
    'echo'              => false,
    'depth'             => 1,
);
$main_nav = wp_nav_menu($main_options);
$main_menu = strip_tags($main_nav, '<a>');

$more_options =  array(
    'theme_location'    => 'more',
    'items_wrap'        => '%3$s',
    'fallback_cb'       => false,
    'container'         => false,
    'container_class'   => false,
    'container_id'      => false,
    'menu_class'        => false,
    'menu_id'           => false,
    'echo'              => false,
    'depth'             => 1,
);
$more_nav = wp_nav_menu($more_options);
$more_menu = strip_tags($more_nav, '<a>');

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
</style>

<?php get_header(); ?>

<nav class="navbar has-shadow is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="container">

    <div class="navbar-brand">
      <a class="navbar-item" href="<?php echo $home_url; ?>">
        <img src="<?php echo $logo; ?>"alt="<?php echo $name; ?>">
      </a>
      <a role="button" class="navbar-burger" data-target="mainMenu" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-menu" id="mainMenu">
      <div class="navbar-start">
        <?php echo $main_menu; ?>
      </div>
      <div class="navbar-divider"></div>
      <div class="navbar-end">
        <?php echo $more_menu; ?>
      </div>
    </div>
  </div>
</nav>

<section class="hero hero-image is-<?php echo $category; ?>">
  <div class="hero-body"></div>
  <div class="hero-foot">
    <div class="container">
      <div class="tag">
        15 June 2018
      </div>
      <h1 class="title">
        Chicago Public Schools and LEAP Innovations Receive $14 Million in Grants from Chan Zuckerberg Initiative to Support School-Led Personalized Learning Programs
      </h1>
    </div>
  </div>
  <div class="gradient is-overlay"></div>
</section>

<section class="hero hero-color is-<?php echo $category; ?>">
  <div class="hero-body">
    <div class="container">
      <div class="content">
        <?php echo $desc;  ?>
      </div>
    </div>
  </div>
</section>

<section class="section section-buttons">
  <div class="container">

    <div class="title">Buttons</div>
    <div class="columns">
      <div class="column">
          <div class="subtitle">:link</div>
          <button class="button is-primary">See Our Educator Resources</button>
          <button class="button is-secondary">Download The Framework</button>
      </div>
      <div class="column">
          <div class="subtitle">:hover</div>
          <button class="button is-primary is-hovered">See Our Educator Resources</button>
          <button class="button is-secondary is-hovered">Download The Framework</button>
      </div>
    </div>

  </div>
</section>

<section class="section section-inpunts">
  <div class="container">

    <div class="title">Inputs</div>

    <div class="columns">
      <div class="column">

          <div class="subtitle">type=”checkbox”</div>
          <div class="field ">
            <input class="is-checkradio has-background-color is-success" id="test" type="checkbox" name="test">
            <label for="test">Checkbox - success</label>
          </div>

          <div class="subtitle">input</div>
          <input  class="form-control"type="text" name="" value="Your Email">

      </div>
      <div class="column">

          <div class="subtitle">type=”checkbox” checked</div>

          <div class="field ">
            <input class="is-checkradio has-background-color is-success" id="test2" type="checkbox" name="test" checked="checked">
            <label for="test2">Checkbox - success</label>
          </div>

          <div class="subtitle">input focused</div>
          <input class="form-control is-focused" type="text" name="" value="Your Email">

      </div>
    </div>

  </div>
</section>

<section class="section section-colors">
  <div class="container">
    <div class="title">Colors</div>
    <div class="tag is-primary">Primary color</div><br>
    <div class="tag is-secondary">Secondary color</div><br>
    <div class="tag is-demonstrated">Leaner Demonstrated</div><br>
    <div class="tag is-connected">Leaner Connected</div><br>
    <div class="tag is-focused">Leaner Focused</div><br>
    <div class="tag is-led">Leaner Led</div><br>
    <div class="tag is-text">Text color</div><br>
    <div class="tag is-gray">Gray color</div><br>
    <div class="tag is-grey">Grey color</div><br>
  </div>
</section>

<section class="section section-typography">
  <div class="container">
    <div class="title">Typography</div>
    <h1 class="is-h1">H1</h1>
    <h3 class="is-title">Section Title</h3>
    <strong class="is-bold">Body Bold</strong>
    <p class="is-medium">Body Medium</p>
    <p class="is-lead is-bold">Body Bold (Big Leading)</p>
    <p class="is-lead is-medium">Body Medium (Big Leading)</p>
    <p class="is-cta">CTA Label</p>
    <p class="is-subhead">Subhead</p>
    <small class="is-bold">Small Paragraph Bold</small>
    <small class="">Small Paragraph</small>
    <sub class="is-sub">Section / Sub</sub>
    <div class="is-caption">Caption</div>
  </div>
</section>

<section class="section section-components">
  <div class="container">

    <div class="title">Site Components</div>

    <div class="subtitle">Card: Post Author</div>
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
    </div>

    <div class="subtitle">Card: Blue with CTA</div>
    <div class="columns">
      <div class="column is-4">

        <div class="card card-cta">
          <div class="card-content">
            <div class="title">Get the LEAP Learning Framework</div>
            <div class="content">
              Get the LEAP Learning Framework, including definitions and strategies for putting personalized learning into practice today.
            </div>
            <a class="button button-secondary" href="#">Download The Framework</a>
          </div>
        </div>

      </div>
    </div>

    <div class="subtitle">Card: Photo with CTA</div>
    <div class="columns">
      <div class="column is-4">

        <!-- <div class="card card-image">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="title">Define</div>
            <div class="content">
              The LEAP Learning Framework, defines personalized learning and delivers sustainable, actionable strategies for every classroom.
            </div>
          </div>
          <footer class="card-footer">
            <a class="btn btn-secondary" href="#">Learn More</a>
          </footer>
        </div> -->

      </div>
    </div>

    <div class="subtitle">Card with media</div>
    <div class="columns">
      <div class="column is-4">

        <!-- <div class="card card-video">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="content">
              Join LEAP at an upcoming conference or event.
              <br>
              <a href="#">Events</a>
            </div>
          </div>
        </div> -->

      </div>
    </div>

    <div class="subtitle">List Item: Video</div>
    <div class="resourceCard is-focused">
      <div class="container">
        <div class="resourceCard-content">
          <div class="card">
            <div class="card-meta">Learner focused</div>
            <div class="card-title">Spotlight: Flex Fridays <a target="_blank" class="post-edit-link" href="http://leap.precision-frontiers.com/wp-admin/post.php?post=24&amp;action=edit">*</a></div>
            <div class="card-desc">Get the step-by-step details on how Mr. Steve McWade, teacher at Lovett Elementary School, uses Flex Friday as an opportunity for students to experience learning based on their interests.</div>
            <a class="button button-secondary" href="http://leap.precision-frontiers.com/resource/spotlight-flex-fridays/">Check It Out</a>
          </div>
        </div>
        <div class="resourceCard-media">
          <div class="card">
            <div class="card-bgcolor"></div>
            <div class="card-footer is-fullheight ">
              <div class="item">
                <i class="fa fa-thumbs-up"></i>
                <span><span data-favorites-post-count-id="24" data-siteid="">1</span> Upvotes</span>
              </div>
              <div class="item">
                <i class="fa fa-comment"></i>
                 <span>0 Comments</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="subtitle">List Item: Photo</div>
    <div class="resourceCard is-connected">
      <div class="container">
        <div class="resourceCard-content">
          <div class="card">
            <div class="card-meta">Learner connected</div>
            <div class="card-title">Spotlight: Flex Fridays <a target="_blank" class="post-edit-link" href="http://leap.precision-frontiers.com/wp-admin/post.php?post=24&amp;action=edit">*</a></div>
            <div class="card-desc">Get the step-by-step details on how Mr. Steve McWade, teacher at Lovett Elementary School, uses Flex Friday as an opportunity for students to experience learning based on their interests.</div>
            <a class="button button-secondary" href="http://leap.precision-frontiers.com/resource/spotlight-flex-fridays/">Check It Out</a>
          </div>
        </div>
        <div class="resourceCard-media">
          <div class="card">
            <div class="card-bgcolor"></div>
            <div class="card-footer is-fullheight ">
              <div class="item">
                <i class="fa fa-thumbs-up"></i>
                <span><span data-favorites-post-count-id="24" data-siteid="">1</span> Upvotes</span>
              </div>
              <div class="item">
                <i class="fa fa-comment"></i>
                 <span>0 Comments</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="subtitle">List Item: No Photo or Video</div>
    <div class="resourceCard is-connected">
      <div class="container">
        <div class="resourceCard-content">
          <div class="card">
            <div class="card-meta">Learner connected</div>
            <div class="card-title">Spotlight: Flex Fridays <a target="_blank" class="post-edit-link" href="http://leap.precision-frontiers.com/wp-admin/post.php?post=24&amp;action=edit">*</a></div>
            <div class="card-desc">Get the step-by-step details on how Mr. Steve McWade, teacher at Lovett Elementary School, uses Flex Friday as an opportunity for students to experience learning based on their interests.</div>
            <a class="button button-secondary" href="http://leap.precision-frontiers.com/resource/spotlight-flex-fridays/">Check It Out</a>
          </div>
        </div>
        <div class="resourceCard-media">
          <div class="card">
            <div class="card-bgcolor"></div>
            <div class="card-footer is-fullheight ">
              <div class="item">
                <i class="fa fa-thumbs-up"></i>
                <span><span data-favorites-post-count-id="24" data-siteid="">1</span> Upvotes</span>
              </div>
              <div class="item">
                <i class="fa fa-comment"></i>
                 <span>0 Comments</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>

<?php get_footer(); ?>
