<?php
/**
 * Template Name: _Atoms
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

<section class="section">
  <div class="container">
    <div class="content is-544">
      <strong>Atoms</strong>
      <p>These are the smallest functional units of a site. They usually consist of HTML elements or basic colors and typography that make up all of the sites components and modules.</p>
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

<section class="section">
  <div class="container">
    <div class="content is-544">
      <strong>Typography</strong>
      <p>To achieve the correct font-size on tablet and mobile, we will be using using a multiplier based off of the desktop font sizing to calculate font-sizes for various breakpoints.</p>
    </div>
  </div>
</section>

<section class="section section-typography">
  <div class="container">
    <div class="columns">
        <div class="column">
          <div class="title is-subtitle">Desktop</div>
          <h1 class="title is-h1 is-desktop">H1</h1>
          <h3 class="title is-desktop">Section Title</h3>
          <div class="content">
            <strong class="is-desktop">Body Bold</strong>
            <p class="is-desktop">Body Medium</p>
            <strong class="is-lead is-desktop">Body Bold (Big Leading)</strong>
            <p class="is-lead is-desktop">Body Medium (Big Leading)</p>
            <p class="title is-label is-cta is-desktop">CTA Label</p>
            <p class="title is-subhead is-desktop">Subhead</p>
            <small><strong class="is-desktop">Small Paragraph Bold</strong></small>
            <small class="is-desktop">Small Paragraph</small>
            <p class="title is-subtitle is-desktop">Section / Sub</p>
            <p class="title is-caption is-desktop">Caption</p>
          </div>
        </div>
        <div class="column">
          <div class="title is-subtitle">Tablet
            <span>Multiplier</span>
          </div>
          <h1 class="title is-h1 is-touch">H1
            <span>0.8x</span>
          </h1>
          <h3 class="title is-touch">Section Title
            <span>0.8x</span>
          </h3>
          <div class="content">
            <strong class="is-touch">Body Bold
              <span>0.79x</span>
            </strong>
            <p class="is-touch">Body Medium
              <span>0.79x</span>
            </p>
            <strong class="is-lead is-touch">Body Bold (Big Leading)
              <span>0.79x</span>
            </strong>
            <p class="is-lead is-touch">Body Medium (Big Leading)
              <span>0.79x</span>
            </p>
            <p class="title is-label is-cta is-touch">CTA Label
              <span>0.79x</span>
            </p>
            <p class="title is-subhead is-touch">Subhead
              <span>0.88x</span>
            </p>
            <small><strong class="is-touch">Small Paragraph Bold</strong>
              <span>0.875x</span>
            </small>
            <small class="is-touch">Small Paragraph
              <span>0.875x</span>
            </small>
            <p class="title is-subtitle is-touch">Section / Sub
              <span>0.85x</span>
            </p>
            <p class="title is-caption is-touch">Caption
              <span>0.85x</span>
            </p>
          </div>
        </div>
        <div class="column">
          <div class="title is-subtitle">Mobile
            <span>Multiplier</span>
          </div>
          <h1 class="title is-h1 is-mobile">H1
            <span>0.533x</span>
          </h1>
          <h3 class="title is-mobile">Section Title
            <span>0.555x</span>
          </h3>
          <div class="content">
            <strong class="is-mobile">Body Bold
            <span>0.667x</span>
            </strong>
            <p class="is-mobile">Body Medium
              <span>0.667x</span>
            </p>
            <strong class="is-lead is-mobile">Body Bold (Big Leading)
              <span>0.667x</span>
            </strong>
            <p class="is-lead is-mobile">Body Medium (Big Leading)
              <span>0.667x</span>
            </p>
            <p class="title is-cta is-mobile">CTA Label
              <span>0.667x</span>
            </p>
            <p class="title is-subhead is-mobile">Subhead
              <span>0.833x</span>
            </p>
            <small><strong class="is-mobile">Small Paragraph Bold</strong>
              <span>0.875x</span>
            </small>
            <small class="is-mobile">Small Paragraph
              <span>0.875x</span>
            </small>
            <p class="title is-subtitle is-mobile">Section / Sub
              <span>0.857x</span>
            </p>
            <p class="title is-caption is-mobile">Caption
              <span>0.857x</span>
          </p>
          </div>
        </div>
    </table>
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



<?php get_footer(); ?>
