<?php
/**
 * Template Name: Account Login
 */
 ?>

<?php // get_header(); ?>
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

<section class="admin admin-login">
  <div id="login" class="login">
    <?php wp_login_form(); ?>
  </div>
</section>

<?php // get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
