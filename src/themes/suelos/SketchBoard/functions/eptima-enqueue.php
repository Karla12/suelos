<?php
/************************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
//ENQUEUE STYLE FOR IE BROWSER
function eptima_lite_IE_enqueue_scripts() {
	
	
}
add_action( 'wp_enqueue_scripts', 'eptima_lite_IE_enqueue_scripts' );


//ENQUEUE FRONT SCRIPTS
function eptima_lite_theme_stylesheet()
{
	global $is_IE;
	$theme = wp_get_theme();

	if($is_IE ) {
		wp_enqueue_style( 'eptima-lite-ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version );
		wp_enqueue_style( 'font-awesome-ie7', get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version );
	}
	wp_enqueue_script('eptima-lite-custom-script', get_template_directory_uri() .'/js/custom.js',array('jquery'),'1.0',1 );
	wp_enqueue_script('comment-reply');
	wp_enqueue_script('hoverIntent');
	wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0');
	wp_enqueue_script('AnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),true,'1.0');
	wp_enqueue_script('waypoints',get_template_directory_uri().'/js/waypoints.js',array('jquery'),'1.0',true );
	
	wp_enqueue_style('eptima-lite-style', get_stylesheet_uri() );
	wp_enqueue_style('animation-stylesheet', get_template_directory_uri().'/css/eptima-lite-animation.css', false, $theme->Version);
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', false, $theme->Version);
	
	/*SUPERFISH*/
	wp_enqueue_style( 'superfish', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap-responsive.css', false, $theme->Version);
	
	/*GOOGLE FONTS*/
	wp_enqueue_style( 'google-Fonts-opensans','//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700', false, $theme->Version);
	wp_enqueue_style( 'google-Fonts-greatvibs','//fonts.googleapis.com/css?family=Great+Vibes', false, $theme->Version);

}
add_action('wp_enqueue_scripts', 'eptima_lite_theme_stylesheet');

function eptima_lite_head() {
	if(!is_admin()) {
		require_once(get_template_directory().'/includes/eptima-custom-css.php');
	} 
}
add_action('wp_head', 'eptima_lite_head');