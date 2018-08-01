<?php
/**
 * Template Name: Components
 */
?>

<?php
  $logo = THEME_URI.'/includes/icons/icon-ok.svg';
  $colors = array(
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
?>

<?php get_header(); ?>

<section class="section section-buttons">
  <div class="container">

    <div class="title">Buttons</div>
    <div class="columns">
      <div class="column is-half">
          <div class="subtitle">:link</div>
          <button class="button button-primary is-full">See Our Educator Resources</button>
          <button class="button button-secondary is-full">Download The Framework</button>
      </div>
      <div class="column is-half">
          <div class="subtitle">:hover</div>
          <button class="button button-primary is-full is-hover">See Our Educator Resources</button>
          <button class="button button-secondary is-full is-hover">Download The Framework</button>
      </div>
    </div>

  </div>
</section>

<section class="section section-inpunts">
  <div class="container">

    <div class="title">Inputs</div>
    <div class="columns">
      <div class="column is-half">
          <div class="subtitle">type=”checkbox”</div>
          <div class="form-group">
            <input type="checkbox" name="name-one" value="connected" id="checkbox">
            <div class="button-group button-group-connected">
              <label for="checkbox" class="button button-connected">
                <span><img src="<?php echo $logo; ?>" alt=""></span>
                <span>&nbsp;</span>
              </label>
              <label for="checkbox" class="button button-default">Learner Connected</label>
            </div>
          </div>
          <div class="subtitle">input</div>
          <input  class="form-control"type="text" name="" value="Your Email">
      </div>
      <div class="column is-half">
          <div class="subtitle">type=”checkbox” checked</div>
          <div class="form-group">
            <input type="checkbox" name="name-two" value="connected" id="checkbox-checked" checked="checked">
            <div class="button-group button-group-connected">
              <label for="checkbox-checked" class="button button-connected">
                <span><img src="<?php echo $logo; ?>" alt=""></span>
                <span>&nbsp;</span>
              </label>
              <label for="checkbox-checked" class="button button-default">Learner Connected</label>
            </div>
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
    <div class="items">
      <?php foreach ($colors as $key => $value) { ?>
        <div class="item">
            <div class="item-color is-<?php echo $key; ?>"></div>
            <div class="item-title"><?php echo $value; ?></div>
        </div>
    <?php } ?>
    </div>

  </div>
</section>

<section class="section section-typography">
  <div class="container">

    <div class="title">Typography</div>
    <h1 class="title is-title">H1</h1>
    <h3 class="title is-subtitle">Section Title</h3>
    <p class="is-bold">Body Bold</p>
    <p class="is-medium">Body Medium</p>
    <p class="is-bold-bl">Body Bold (Big Leading)</p>
    <p class="is-medium-bl">Body Medium (Big Leading)</p>
    <div>CTA Label</div>
    <div>Subhead</div>
    <div>Small Paragraph Bold</div>
    <div>Small Paragraph</div>
    <div>Section / Sub</div>
    <div>Caption</div>

  </div>
</section>

<section class="section section-components">
  <div class="container">

    <div class="title">Site Components</div>

    <div class="subtitle">Card with media</div>

    <div class="subtitle">Card: Blue with CTA</div>

    <div class="subtitle">Card: Photo with CTA</div>

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
