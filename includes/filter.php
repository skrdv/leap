<?php

function leap_filter_function(){

	$args = array(
    'post_type' => array('resource'),
		'orderby' => 'date',
		'order'	=> $_POST['date']
	);

	if( isset($_POST['resource_category']) ) {
		$args['meta_query'] = array(
      'relation'		=> 'AND',
		 	array(
				'key'		=> 'resource_category',
				'value'  => $_POST['resource_category'],
				'compare'	=> 'LIKE'
			)
		);
  }

	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			get_template_part('parts/resource','card');
		endwhile;
		wp_reset_postdata();
	else :
		echo 'Resources not found';
	endif;

	die();
}

add_action('wp_ajax_myfilter', 'leap_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'leap_filter_function');





/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );
