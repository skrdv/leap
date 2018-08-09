<?php
/**
 * Site Header
 */
?>

<?php
// User
$current_user 			= wp_get_current_user();
$user_id            = get_current_user_id();
$user               = get_userdata($user_id);
$user_url           = $user->user_url;
$user_login         = $user->user_login;
$user_pass          = $user->user_pass;
$user_email         = $user->user_email;
$user_status        = $user->user_status;
$user_registered    = $user->user_registered;
$user_fname     		= $user->first_name;
$user_sname      		= $user->last_name;
$user_nicename      = $user->user_nicename;
$display_name       = $user->display_name;

// Profile
// $account_name       = get_field('account_fullname', 'user_'. $user_id);
$account_pic        = get_field('account_userpic', 'user_'. $user_id);
$account_bg         = get_field('account_userbg', 'user_'. $user_id);
$account_org        = get_field('account_organisation', 'user_'. $user_id);
$account_nick				= $user_fname[0].'. '.$user_sname[0].'. ';

// Vars
$site_url     	= esc_url(home_url());
$site_name     	= esc_attr( get_bloginfo( 'name', 'display' ) );

// Images
$logo_star   = THEME_URI.'/includes/img/logo_star.svg';
$logo_header = THEME_URI.'/includes/img/leap_innovations.svg';
$logo_footer = THEME_URI.'/includes/img/logo-footer.svg';
$icon_ok     = THEME_URI.'/includes/icons/icon-ok.svg';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>

<header class="site-header">
  <div class="container-fluid">
    <div class="site-header-logo">
      <a class="site-header-link" href="<?php echo $site_url; ?>">
        <img src="<?php echo $logo_header; ?>"alt="<?php echo $site_name; ?>">
      </a>
    </div>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo $site_url; ?>">
          <img src="<?php echo $logo_star; ?>" alt="<?php echo $site_name; ?>">
        </a>
        <?php if ($user->caps['account'] === true OR $user->caps['administrator']): ?>
          <a class="navbar-account" href="/account/">
            <span class="username"><?php echo $account_nick; ?></span>
            <span class="userpic" style="background-image: url(<?php echo $account_pic[sizes][userpic]; ?>);"></span>
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
					<a class="navbar-item" href="<?php echo $site_url; ?>">
	          <img src="<?php echo $logo_star; ?>" alt="<?php echo $site_name; ?>">
						<div class="navbar-divider"></div>
	        </a>
          <?php wp_nav_menu(array(
            'theme_location'  => 'main',
            'items_wrap'      => '%3$s',
            'container'       => false,
            'menu_class'      => false,
            'menu_id'         => false,
            'walker'          => new Bulmascores_Nav_Walker(),
          )); ?>
        </div>
        <div class="navbar-divider"></div>
        <div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
        		<a class="navbar-link" href="#">More</a>
						<div class="navbar-dropdown is-boxed">
							<?php wp_nav_menu(array(
		            'theme_location'  => 'more',
		            'items_wrap'      => '%3$s',
		            'container'       => false,
		            'menu_class'      => false,
		            'menu_id'         => false,
		            'walker'          => new Bulmascores_Nav_Walker(),
		          )); ?>
							<?php if ( is_user_logged_in() ): ?>
								<a class="navbar-item" href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a>
							<?php endif; ?>
		        </div>
					</div>

          <?php if ($user->caps['account'] === true OR $user->caps['administrator']): ?>
            <a class="navbar-item navbar-account" href="/account/">
              <span class="username"><?php echo $account_nick; ?></span>
              <span class="userpic" style="background-image: url(<?php echo $account_pic[sizes][userpic]; ?>);"></span>
            </a>
					<?php else: ?>
						<a class="navbar-item" href="/login/">Log In</a>
					<?php endif; ?>
        </div>
      </div>
    </nav>
  </div>
	<!-- <div class="gradient is-overlay"></div> -->
</header>

<?php /*
<header class="siteHeader navbar navbar-expand-xl navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
				<div class="icon-group">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<span class="icon-text"><?php _e('Menu','_tk') ?> </span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/leap-logo.svg">
			</a>
		</div>
		<nav class="collapse navbar-collapse" id="navbar-collapse">
			<?php wp_nav_menu(
				array(
					'depth'           => 2,
					'container'       => false,
					'theme_location' 	=> 'main',
					'menu_class' 			=> 'nav navbar-nav navbar-main'
				)
			); ?>
			<ul id="menu-account" class="nav navbar-nav navbar-account">
				<?php if ($user->caps['account'] === true OR $user->caps['administrator']): ?>
					<li id="menu-item-0" class="menu-item">
						<a href="/account/">
							<div class="userpic" style="background-image: url(<?php echo $account_pic[sizes][userpic]; ?>);"></div>
							<div class="username"><?php echo $user_login; ?></div>
						</a>
					</li>
				<?php else: ?>
					<li id="menu-item-0" class="menu-item">
						<a href="/login/">Log In</a>
					</li>
				<?php endif; ?>
			</ul>
			<?php wp_nav_menu(
				array(
					'depth'           => 2,
					'container'       => false,
					'theme_location' 	=> 'more',
					'menu_class' 			=> 'nav navbar-nav navbar-more'
				)
			); ?>
		</nav>
	</div>
</header>
*/ ?>

<main class="site-main">
