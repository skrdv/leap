<?php
/**
 * Main Functions file
 *
 * @package _tk
 */



// Define theme constants
define( 'UPLOAD_DIR', wp_upload_dir() );
define( 'UPLOAD_URI', UPLOAD_DIR['baseurl'] );
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_CSS', get_template_directory_uri().'/includes/css/' );
define( 'THEME_JS', get_template_directory_uri().'/includes/js/' );



// Setup theme defaults
if ( ! function_exists('_tk_setup') ) :
  function _tk_setup() {
  	// global $cap, $content_width;

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

  	load_theme_textdomain( '_tk', THEME_DIR . '/languages' );

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
endif;
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



/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'includes/css/editor.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );



// Enqueue scripts and styles
function _tk_scripts() {

  if( is_admin() ){
    wp_enqueue_style( 'leap-admin', THEME_CSS.'/admin.css' );
  }

  if( is_page('474') ){
    // wp_enqueue_style( 'bulma', THEME_CSS.'/bulma.css' );
  } else {
    wp_enqueue_style( 'bootstrap', THEME_CSS.'bootstrap.min.css' );
  	wp_enqueue_style( 'bootstrap-wp', THEME_CSS.'bootstrap-wp.css' );
  }

  wp_enqueue_style( 'fontawesome', THEME_CSS.'font-awesome.min.css' );
  wp_enqueue_style( 'leap-theme', THEME_CSS.'theme.css' );
	wp_enqueue_style( 'leap-styles', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', THEME_JS . 'bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-wp', THEME_JS . 'bootstrap-wp.js', array('jquery') );
  wp_enqueue_script( 'leap-scripts', THEME_JS . 'scripts.js', array(), '1.0', true );
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
require THEME_DIR . '/includes/custom-header.php';

 // Custom template tags for this theme.
require THEME_DIR . '/includes/template-tags.php';

 // Custom functions that act independently of the theme templates.
require THEME_DIR . '/includes/extras.php';

// Add filter options
require THEME_DIR . '/includes/filter.php';

// Add Custom functions
require THEME_DIR . '/includes/custom-functions.php';

 // Customizer additions.
require THEME_DIR . '/includes/customizer.php';

 // Load Jetpack compatibility file.
require THEME_DIR . '/includes/jetpack.php';

 // Load custom WordPress nav walker.
require THEME_DIR . '/includes/bootstrap-wp-navwalker.php';




// Adds WooCommerce support
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );



// Register Custom Post Type
function events_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Events', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'events_post_type', 0 );



// Register Custom Post Type
function perons_post_type() {

	$labels = array(
		'name'                  => _x( 'Persons', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Persons', 'text_domain' ),
		'name_admin_bar'        => __( 'Persons', 'text_domain' ),
		'archives'              => __( 'Person Archives', 'text_domain' ),
		'attributes'            => __( 'Person Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All persons', 'text_domain' ),
		'add_new_item'          => __( 'Add New Person', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Person', 'text_domain' ),
		'edit_item'             => __( 'Edit Person', 'text_domain' ),
		'update_item'           => __( 'Update Person', 'text_domain' ),
		'view_item'             => __( 'View Person', 'text_domain' ),
		'view_items'            => __( 'View Persons', 'text_domain' ),
		'search_items'          => __( 'Search Person', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Persons list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Person', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'person', $args );

}
add_action( 'init', 'perons_post_type', 0 );
