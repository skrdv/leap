<?php


// Add the target attribute to edit post link
add_filter( 'edit_post_link', function( $link, $post_id, $text )
{
    if( false === strpos( $link, 'target=' ) )
        $link = str_replace( '<a ', '<a target="_blank" ', $link );

    return $link;
}, 10, 3 );




// Restyle media player
// add_action( 'wp_enqueue_scripts', 'mytheme_deregister_media_element_styles' );
// function mytheme_deregister_media_element_styles() {
// 	wp_deregister_style( 'mediaelement' );
// 	wp_deregister_style( 'wp-mediaelement' );
// }
