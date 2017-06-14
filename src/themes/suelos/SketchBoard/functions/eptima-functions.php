<?php
/***************** EXCERPT LENGTH ************/
function eptima_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'eptima_lite_excerpt_length');


/***************** READ MORE ****************/
function eptima_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'eptima_lite_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'eptima_lite_title' );
function eptima_lite_title($title)
{
	$eptima_lite_title = $title;
	if ( is_home() && !is_front_page() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_front_page() ){
		$eptima_lite_title .=  get_bloginfo('name');
		$eptima_lite_title .= ' | '; 
		$eptima_lite_title .= get_bloginfo('description');
	}

	if ( is_search() ) {
		$eptima_lite_title .=  get_bloginfo('name');
	}

	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$eptima_lite_title .= __('Author: ','eptima-lite');
		$eptima_lite_title .= $curauth->display_name;
		$eptima_lite_title .= ' | ';
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_single() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_page() && !is_front_page() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_category() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_year() ) { 
		$eptima_lite_title .= get_bloginfo('name');
	}
	
	if ( is_month() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if ( is_day() ) {
		$eptima_lite_title .= get_bloginfo('name');
	}

	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$eptima_lite_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$eptima_lite_title .= get_bloginfo('name');
		}					
	}
	
	return $eptima_lite_title;
}