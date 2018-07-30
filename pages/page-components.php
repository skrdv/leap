<?php
/**
 * Template Name: Components (Layout)
 */
?>
<?php get_header(); ?>

<section class="componentsSection componentsSection-buttons">
  <div class="container">
    <div class="componentsSection-title">Buttons</div>
    <div class="componentsSection-cols">
      <div class="componentsSection-col">
          <div class="componentsSection-subtitle">:link</div>
          <button class="btn btn-primary is-full">See Our Educator Resources</button>
          <button class="btn btn-secondary is-full">Download The Framework</button>
      </div>
      <div class="componentsSection-col">
          <div class="componentsSection-subtitle">:hover</div>
          <button class="btn btn-primary is-full is-hover">See Our Educator Resources</button>
          <button class="btn btn-secondary is-full is-hover">Download The Framework</button>
      </div>
    </div>
  </div>
</section>

<section class="componentsSection componentsSection-inpunts">
  <div class="container">
    <div class="componentsSection-title">Inputs</div>
    <div class="componentsSection-cols">
      <div class="componentsSection-col">
          <div class="componentsSection-subtitle">type=”checkbox”</div>
          <div class="form-group">
            <input type="checkbox" name="name-one" value="connected" id="checkbox">
            <div class="btn-group btn-group-connected">
              <label for="checkbox" class="btn btn-connected">
                <!-- <span class="fa fa-check"></span> -->
                <span>
                  <img src="<?php echo THEME_URI.'/includes/icons/icon-ok.svg'; ?>" alt="">
                </span>
                <span>&nbsp;</span>
              </label>
              <label for="checkbox" class="btn btn-default">Learner Connected</label>
            </div>
          </div>
          <div class="componentsSection-subtitle">input</div>
          <input  class="form-control"type="text" name="" value="Your Email">
      </div>
      <div class="componentsSection-col">
          <div class="componentsSection-subtitle">type=”checkbox” checked</div>
          <div class="form-group">
            <input type="checkbox" name="name-two" value="connected" id="checkbox-checked" checked="checked">
            <div class="btn-group btn-group-connected">
              <label for="checkbox-checked" class="btn btn-connected">
                <!-- <span class="fa fa-check"></span> -->
                <span>
                  <img src="<?php echo THEME_URI.'/includes/icons/icon-ok.svg'; ?>" alt="">
                </span>
                <span>&nbsp;</span>
              </label>
              <label for="checkbox-checked" class="btn btn-default">Learner Connected</label>
            </div>
          </div>
          <div class="componentsSection-subtitle">input focused</div>
          <input class="form-control" type="text" name="" value="Your Email">
      </div>
    </div>
  </div>
</section>

<section class="componentsSection componentsSection-colors">
  <div class="container">
    <div class="componentsSection-title">Colors</div>
    <div class="block">
        <div class="block-color is-primary is-connected"></div>
        <div class="block-title">Primary/Learner Connected</div>
    </div>
    <div class="block">
        <div class="block-color is-secondary"></div>
        <div class="block-title">Secondary</div>
    </div>
    <div class="block">
        <div class="block-color is-led"></div>
        <div class="block-title">Learner Led</div>
    </div>
    <div class="block">
        <div class="block-color is-demonstrated"></div>
        <div class="block-title">Learner Demonstrated</div>
    </div>
    <div class="block">
        <div class="block-color is-focused"></div>
        <div class="block-title">Learner Focused</div>
    </div>
    <div class="block">
        <div class="block-color is-black"></div>
        <div class="block-title">Text Color</div>
    </div>
    <div class="block">
        <div class="block-color is-gray"></div>
        <div class="block-title">Gray</div>
    </div>
  </div>
</section>

<section class="componentsSection componentsSection-colors">
  <div class="container">
    <div class="componentsSection-title">Typography</div>
    <h1 class="title is-title">H1</h1>
    <h3 class="title is-subtitle">Section Title</h3>
    <p class="is-bold">Body Bold</p>
    <p class="is-medium">Body Medium</p>
    <p class="is-bold-bl">Body Bold (Big Leading)</p>
    <p class="is-medium-bl">Body Medium (Big Leading)</p>
    <!-- <div>CTA Label</div>
    <div>Subhead</div>
    <div>Small Paragraph Bold</div>
    <div>Small Paragraph</div>
    <div>Section / Sub</div>
    <div>Caption</div> -->
  </div>
</section>

<section class="componentsSection componentsSection-colors">
  <div class="container">
    <div class="componentsSection-title">Site Components</div>

  </div>
</section>


<?php get_footer(); ?>
