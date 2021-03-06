<?php

// Resources post type filter
function leap_filter_function(){

	global $wp_query;

	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args = array(
    'post_type' => array('resource'),
		'posts_per_page' => '5',
		'paged' => $paged,
		'orderby' => 'date',
		'order'	=> $_POST['date'],
		'meta_query' => $meta_query,
	);

	$catArray = $_POST['resource_category'];
	foreach($catArray as $key => $value) {
		$testArray[$key] = array(
		 'key'		=> 'resource_category',
		 'value'  => $value,
		 'compare'	=> 'LIKE'
	 );
	}

	$args['meta_query'] = array(
		'relation'		=> 'OR',
		$testArray[0],
		$testArray[1],
		$testArray[3],
		$testArray[4],
	);

	$wp_query = new WP_Query( $args );

	if( $wp_query->have_posts() ) :
		while( $wp_query->have_posts() ):
			$wp_query->the_post();
			get_template_part('parts/resource','card');
		endwhile;






		wp_reset_postdata();
		previous_posts_link( 'Newer posts &raquo;' );
    next_posts_link('Older &raquo;');
	else :
		get_template_part('parts/resource','none');
	endif;

	die();
}

add_action('wp_ajax_myfilter', 'leap_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'leap_filter_function');
