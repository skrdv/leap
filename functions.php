<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */



// Set constants
 define( 'THEME_PATH', get_template_directory() );
 define( 'THEME_DIR_PATH', get_template_directory() );
 define( 'THEME_DIR_URI', get_template_directory_uri() );
 define( 'THEME_CSS', get_template_directory_uri().'/includes/css/' );
 define( 'THEME_JS', get_template_directory_uri().'/includes/js/' );



// Set content width
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */



// Set up theme defaults
if ( ! function_exists('_tk_setup') ) :
  function _tk_setup() {
  	global $cap, $content_width;

  	add_editor_style();
    add_theme_support( 'post-thumbnails' );
  	add_theme_support( 'automatic-feed-links' );
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

  	load_theme_textdomain( '_tk', THEME_DIR_PATH . '/languages' );
  	register_nav_menus( array(
  		'main'      => __( 'Main', '_tk' ),
  		'more'      => __( 'More', '_tk' ),
  		'footer-1'  => __( 'Footer 1', '_tk' ),
  		'footer-2'  => __( 'Footer 2', '_tk' ),
  		'footer-3'  => __( 'Footer 3', '_tk' ),
  		'footer-4'  => __( 'Footer 4', '_tk' ),
  	));

    // add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
  	// add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
  	// 	'default-color' => 'ffffff',
  	// 	'default-image' => '',
  	// )));

  }
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );



// Register sidebar widgets
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', '_tk_widgets_init' );



// Enqueue scripts and styles
function _tk_scripts() {

  if( is_admin() ){
    wp_enqueue_style( 'leap-admin', THEME_CSS.'/admin.css' );
  }

  wp_enqueue_style( 'bootstrap', THEME_CSS.'bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-wp', THEME_CSS.'bootstrap-wp.css' );
  wp_enqueue_style( 'fontawesome', THEME_CSS.'font-awesome.min.css' );
  wp_enqueue_style( 'leap-theme', THEME_CSS.'theme.css' );
  wp_enqueue_style( 'leap-custom', THEME_CSS.'/custom.css' );
	wp_enqueue_style( 'leap-style', get_stylesheet_uri() );

	wp_enqueue_script('bootstrap', THEME_JS . 'bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-wp', THEME_JS . 'bootstrap-wp.js', array('jquery') );
	wp_enqueue_script( 'link-focus-fix', THEME_JS . 'skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', THEME_JS . 'keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );




 // Implement the Custom Header feature.
require THEME_PATH . '/includes/custom-header.php';

 // Custom template tags for this theme.
require THEME_PATH . '/includes/template-tags.php';

 // Custom functions that act independently of the theme templates.
require THEME_PATH . '/includes/extras.php';

// Update search options
require THEME_PATH . '/includes/filter.php';

 // Customizer additions.
require THEME_PATH . '/includes/customizer.php';

 // Load Jetpack compatibility file.
require THEME_PATH . '/includes/jetpack.php';

 // Load custom WordPress nav walker.
require THEME_PATH . '/includes/bootstrap-wp-navwalker.php';



// Adds WooCommerce support
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
