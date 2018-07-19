<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
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
					'menu_class' 			=> 'nav navbar-nav navbar-main',
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'walker' 					=> new wp_bootstrap_navwalker()
				)
			); ?>
			<?php wp_nav_menu(
				array(
					'depth'           => 2,
					'container'       => false,
					'theme_location' 	=> 'more',
					'menu_class' 			=> 'nav navbar-nav navbar-more',
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'walker' 					=> new wp_bootstrap_navwalker()
				)
			); ?>
		</nav>
	</div>
</header>
