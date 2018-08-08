<?php
/**
 * Template Name: _Navigation
 */
?>

<?php

// User Data
$current_user 			= wp_get_current_user();
$user_id            = get_current_user_id();
$user               = get_userdata($user_id);
$user_login         = $user->user_login;
$user_pass          = $user->user_pass;
$user_email         = $user->user_email;
$user_url           = $user->user_url;
$user_registered    = $user->user_registered;
$user_status        = $user->user_status;
$user_nicename      = $user->user_nicename;
$display_name       = $user->display_name;
$account_name       = get_field('account_fullname', 'user_'. $user_id);
$account_pic        = get_field('account_userpic', 'user_'. $user_id);
$account_bg         = get_field('account_userbg', 'user_'. $user_id);
$account_org        = get_field('account_organisation', 'user_'. $user_id);

// Page Data
$home     = esc_url(home_url());
$name     = esc_attr( get_bloginfo( 'name', 'display' ) );
$desc     = get_post_field('post_content', $post->ID);
$image    = get_the_post_thumbnail_url($post->ID, 'poster');

$logo_footer = THEME_URI.'/includes/img/logo-footer.svg';
$logo_big    = THEME_URI.'/includes/img/leap_innovations.svg';
$logo        = THEME_URI.'/includes/img/logo_star.svg';
$ok          = THEME_URI.'/includes/icons/icon-ok.svg';



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

<header class="site-header">
  <div class="container-fluid">
    <div class="site-header-logo">
      <a class="site-header-link" href="<?php echo $home_url; ?>">
        <img src="<?php echo $logo_big; ?>"alt="<?php echo $name; ?>">
      </a>
    </div>
    <nav class="navbar" id="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo $home_url; ?>">
          <img src="<?php echo $logo; ?>"alt="<?php echo $name; ?>">
        </a>
        <div class="navbar-divider"></div>
        <?php if ($user->caps['account'] === true OR $user->caps['administrator']): ?>
          <a class="navbar-account" href="/account/">
            <div class="username"><?php echo $user_login; ?></div>
            <div class="userpic" style="background-image: url(<?php echo $account_pic[sizes][userpic]; ?>);"></div>
          </a>
        <?php endif; ?>
        <a class="navbar-burger" role="button" data-target="menuHeader" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <strong>Menu</strong>
        </a>
      </div>
      <div class="navbar-menu" id="menuHeader">
        <div class="navbar-start">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'main',
            'items_wrap'      => '%3$s',
            'container'       => false,
            'menu_class'      => false,
            'menu_id'         => false,
            'walker'          => new Bulmascores_Nav_Walker(),
          ));
          ?>
        </div>
        <div class="navbar-divider"></div>
        <div class="navbar-end">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'more',
            'items_wrap'      => '%3$s',
            'container'       => false,
            'menu_class'      => false,
            'menu_id'         => false,
            'walker'          => new Bulmascores_Nav_Walker(),
          ));
          ?>
          <?php if ($user->caps['account'] === true OR $user->caps['administrator']): ?>
            <a class="navbar-item is-account" href="/account/">
              <div class="username"><?php echo $user_login; ?></div>
              <div class="userpic" style="background-image: url(<?php echo $account_pic[sizes][userpic]; ?>);"></div>
            </a>
					<?php else: ?>
						<a class="navbar-item" href="/login/">Log In</a>
					<?php endif; ?>
        </div>
      </div>
    </nav>
  </div>
</header>



<section class="hero hero-image">
  <!-- <div class="hero-head">
    <div class="content">
      <img src="<?php echo $logo_big; ?>"alt="<?php echo $name; ?>">
    </div>
  </div> -->
  <div class="hero-body"></div>
  <!-- <div class="hero-foot">
    <div class="container">
      <div class="tag">
        15 June 2018
      </div>
      <h1 class="title">
        Chicago Public Schools and LEAP Innovations Receive $14 Million in Grants from Chan Zuckerberg Initiative to Support School-Led Personalized Learning Programs
      </h1>
    </div>
  </div> -->
  <div class="gradient is-overlay"></div>
</section>

<section class="section">
  <div class="container">
    <div class="title">Title</div>
    <div class="content">
      Content
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="title">Title</div>
    <div class="content">
      Content
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="title">Title</div>
    <div class="content">
      Content
    </div>
  </div>
</section>

<nav class="navbar has-shadow is-fixed-top is-hidden" role="navigation" aria-label="main navigation">
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

<section class="hero hero-image is-connected is-hidden">
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

<section class="hero hero-color is-connected is-hidden">
  <div class="hero-body">
    <div class="container">
      <div class="content">
        <?php echo $desc;  ?>
      </div>
    </div>
  </div>
</section>

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
