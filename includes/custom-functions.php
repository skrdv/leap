<?php

// Add thubnails sizes
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'poster', 1800, 1200 );
	add_image_size( 'avatar', 256, 256 );
	add_image_size( 'block', 448, 398 );
	add_image_size( 'card', 272, 255 );
	add_image_size( 'userpic', 42, 42 );
}



// Add target blank to post edit link
add_filter( 'edit_post_link', function( $link, $post_id, $text ) {
	if( false === strpos( $link, 'target=' ) )
  	$link = str_replace( '<a ', '<a target="_blank" ', $link );
  return $link;
}, 10, 3 );




// Update Admin Logo
function my_login_logo() { ?>
    <style type="text/css">
			#login h1 a,
			.login h1 a {
					height: 96px;
					width: 228px;
					background-size: 228px 96px;
					background-repeat: no-repeat;
					background-position: left center;
					background-image: url(<?php echo THEME_URI.'/includes/images/logo.svg'; ?>);
			}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );







function ajax_login_init(){

    wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') );
    wp_enqueue_script('ajax-login-script');

    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array(
        // 'ajaxurl' => home_url().'/wp-admin/admin-ajax.php',
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}


function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = false;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}
