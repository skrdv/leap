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



// Add Account Role for new users
// ...



// Restyle media player
// add_action( 'wp_enqueue_scripts', 'mytheme_deregister_media_element_styles' );
// function mytheme_deregister_media_element_styles() {
// 	wp_deregister_style( 'mediaelement' );
// 	wp_deregister_style( 'wp-mediaelement' );
// }
