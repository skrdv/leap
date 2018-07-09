<?php

/// Creating a WP archive with custom field filter
$GLOBALS['my_query_filters'] = array(
	'field_1'	=> 'resource_format',
	'field_2'	=> 'resource_category'
);

// action
add_action('pre_get_posts', 'my_pre_get_posts', 10, 1);
function my_pre_get_posts( $query ) {
	// bail early if is in admin
	if( is_admin() ) return;
	// bail early if not main query
	// - allows custom code / plugins to continue working
	if( !$query->is_main_query() ) return;

	// get meta query
	$meta_query = $query->get('meta_query');

	// loop over filters
	foreach( $GLOBALS['my_query_filters'] as $key => $name ) {

		// continue if not found in url
		if( empty($_GET[ $name ]) ) {
			continue;
		}
		// get the value for this filter
		// eg: http://www.website.com/events?city=melbourne,sydney
		$value = explode(',', $_GET[ $name ]);
		// append meta query
    $meta_query[] = array(
      'key'		=> $name,
      'value'		=> $value,
      'compare'	=> 'IN',
    );

	}

	// update meta query
	$query->set('meta_query', $meta_query);

}




// /**
//  * Extend WordPress search to include custom fields
//  *
//  * https://adambalee.com
//  */
//
// /**
//  * Join posts and postmeta tables
//  *
//  * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
//  */
// function cf_search_join( $join ) {
//     global $wpdb;
//
//     if ( is_search() ) {
//         $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
//     }
//
//     return $join;
// }
// add_filter('posts_join', 'cf_search_join' );
//
// /**
//  * Modify the search query with posts_where
//  *
//  * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
//  */
// function cf_search_where( $where ) {
//     global $pagenow, $wpdb;
//
//     if ( is_search() ) {
//         $where = preg_replace(
//             "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
//             "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
//     }
//
//     return $where;
// }
// add_filter( 'posts_where', 'cf_search_where' );
//
// /**
//  * Prevent duplicates
//  *
//  * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
//  */
// function cf_search_distinct( $where ) {
//     global $wpdb;
//
//     if ( is_search() ) {
//         return "DISTINCT";
//     }
//
//     return $where;
// }
// add_filter( 'posts_distinct', 'cf_search_distinct' );
//
//
