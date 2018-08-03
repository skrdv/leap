<?php
/**
 * Template Name: 11. Login and Registration
 */
 ?>

<?php
$logo = THEME_URI.'/includes/img/logo.svg';
$bgimage = get_the_post_thumbnail_url($post->ID, 'poster');

$args = array(
  'redirect'        => '/account/',
  'form_id'         => 'login-form',
  'label_username'  => __( 'Email' ),
  'label_password'  => __( 'Password' ),
  'label_log_in'    => __( 'Sign In' ),
  'label_remember'  => __( 'Remember' ),
  'remember'        => false,
);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('login-page'); ?> style="background-image: url('<?php echo $bgimage; ?>');">

<?php if ( !is_user_logged_in() ): ?>

  <div class="login" id="login">
    <div class="login-header">
      <a class="login-logo-link" href="<?php home_url(); ?>">
        <img class="login-logo-image" src="<?php echo $logo; ?>" alt="">
      </a>
    </div>
    <div class="login-content">
      <?php wp_login_form( $args ); ?>
      <p class="login-register">
        <?php wp_register('', ''); ?>
      </p>
    </div>
  </div>

  <?php /*
    <form class="login login-formm" id="login-formm" action="ajaxlogin"  method="post">
      <div class="login-head">
        <a class="login-logo-link" href="<?php home_url('/'); ?>">
          <img class="login-logo-image" src="<?php echo $logo; ?>" alt="">
        </a>
      </div>
      <div class="login-content">
        <p class="login-username">
          <label for="username">Email</label>
          <input id="username" type="text" name="username">
          <a class="login-link" href="<?php echo wp_lostpassword_url(); ?>">Forgot Email?</a>
        </p>
        <p class="login-password">
          <label for="password">Password</label>
          <input id="password" type="password" name="password">
          <a class="login-link" href="<?php echo wp_lostpassword_url(); ?>">Forgot password?</a>
        </p>
        <p class="login-register">
          <?php wp_register('', ''); ?>
        </p>
        <p class="login-submit">
          <input class="btn btn-secondary" type="submit" value="Sign In" name="submit">
        </p>
        <p class="login-status"></p>
        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
      </div>
    </form>
    */ ?>

<?php else: ?>

  <?php wp_redirect("/account/"); ?>

<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
