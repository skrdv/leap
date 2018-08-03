<?php
/**
 * Site Header
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

// User ACF
$account_name       = get_field('account_fullname', 'user_'. $user_id);
$account_pic        = get_field('account_userpic', 'user_'. $user_id);
$account_bg         = get_field('account_userbg', 'user_'. $user_id);
$account_org        = get_field('account_organisation', 'user_'. $user_id);
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
<body <?php body_class('is-fixed'); ?>>
<?php do_action( 'before' ); ?>

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
