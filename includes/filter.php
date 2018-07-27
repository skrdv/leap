<?php

global $query;

// Resources post type filter
function leap_filter_function(){

	// Default params
	$args = array(
    'post_type' => array('resource'),
		'orderby' => 'date',
		'order'	=> $_POST['date']
	);

	// Category conditions
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

	// WP_Query and templates
	$the_query = new WP_Query( $args );

	if( $the_query->have_posts() ) :
		while( $the_query->have_posts() ): $the_query->the_post();
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
