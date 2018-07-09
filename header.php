<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
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

<?php // if (($post->ID == 116) or ($post->ID == 131)): ?>

<?php /*
<header class="siteHeader">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			</div>
		</div>
	</div>
</header>
*/ ?>

<?php // else: ?>

<?php /*
<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description lead"><?php bloginfo( 'description' ); ?></p>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->
*/ ?>

<div class="site-navigation">
	<div class="container-fluid">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</div>

					<nav class="collapse navbar-collapse" id="navbar-collapse">
						<?php wp_nav_menu(
							array(
								'depth'           => 2,
								'theme_location' 	=> 'main',
								'menu_class' 			=> 'nav navbar-nav navbar-header',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'walker' 					=> new wp_bootstrap_navwalker()
							)
						); ?>

						<ul class="nav navbar-nav navbar-account pull-right">
							<li class="menu-item">
								<a href="/account/">Account</a>
							</li>
							<?php if ( is_user_logged_in() ) { ?>
								<li class="menu-item">
									<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
								</li>
							<?php } ?>
						</ul>

						<?php wp_nav_menu(
							array(
								'depth'           => 2,
								'theme_location' 	=> 'more',
								'menu_class' 			=> 'nav navbar-nav navbar-account pull-right',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'walker' 					=> new wp_bootstrap_navwalker()
							)
						); ?>
					</nav>

				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .site-navigation -->

<?php // endif; ?>
