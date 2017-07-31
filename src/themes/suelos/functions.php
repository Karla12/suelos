<?php
/**
 *  functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */
 
/**
 * FUNTION TO ADD CSS CLASS TO BODY
 */
function eptima_lite_add_class( $classes ) {
	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}
add_filter( 'body_class','eptima_lite_add_class' );

 
/**
 * REGISTERS WIDGET AREAS
 */
function eptima_lite_widgets_init() {
	register_sidebar(array(
		'name' => __('Page Sidebar','eptima-lite'),
		'id' => 'page-sidebar',
		'before_widget' => '<li id="%1$s" class="eptima-lite-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="eptima-lite-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Blog Sidebar','eptima-lite'),
		'id' => 'blog-sidebar',
		'before_widget' => '<li id="%1$s" class="eptima-lite-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="eptima-lite-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Sidebar','eptima-lite'),
		'id' => 'footer-sidebar',
		'before_widget' => '<div id="%1$s" class="eptima-lite-footer-container span3 eptima-lite-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="eptima-lite-title eptima-lite-footer-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'eptima_lite_widgets_init' );

/**
 * Sets up theme defaults and registers the various WordPress features that
 *  supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
*/
function eptima_lite_theme_setup() {
	/*
	 * Makes  available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'eptima-lite' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'eptima-lite', get_template_directory() . '/languages' );
	 
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	add_theme_support( 'title-tag' );

	$pre_options = ( get_option('option_tree') != '' ) ? get_option( 'option_tree' ) : false ;
	if ( $pre_options) {
		$header_image = eptima_lite_get_option( 'eptima_frontslider_stype' );
	} else {
		$header_image = get_template_directory_uri() . '/images/slider-image.png';
	}

	add_theme_support( 'custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 500, 'default-image' => $header_image ) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'avis_custom_background_args', array('default-color' => 'ffffff', ) ) );

	/**
	* SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	*/
	global $content_width;
	if ( ! isset( $content_width ) ){
	      $content_width = 900;
	}

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for Post Formats
	 */
	set_post_thumbnail_size( 850, 400, true );
	add_image_size( 'eptima_lite_standard_img',850,400,true);  //standard size
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Header' => __( 'Main Navigation', 'eptima-lite' ),
	));
}
add_action( 'after_setup_theme', 'eptima_lite_theme_setup' ); 


/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Add Config File 
 */
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');

/**
 * Get Option.
 *
 * Helper function to return the option value.
 * If no value has been saved, it returns $default.
 *
 * @param     string    The option ID.
 * @param     string    The default option value.
 * @return    mixed
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'eptima_lite_get_option' ) ) {

  function eptima_lite_get_option( $option_id, $default = '' ) {
    
    /* get the saved options */ 
    $options = get_option( 'option_tree' );
    

    /* look for the saved value */
    if ( isset( $options[$option_id] ) && '' != $options[$option_id] ) {

      return eptima_lite_wpml_filter( $options, $option_id );
      
    }
    
    return $default;
    
  }
  
}

//---------------------------------------------------------------------
//---------------------------------------------------------------------
/* Theme Recommended Plugins
/*---------------------------------------------------------------------------*/
if ( !defined( 'EPTIMA_REQUIRED_PLUGINS' ) ) {
	define( 'EPTIMA_REQUIRED_PLUGINS', trailingslashit(get_theme_root()) . 'eptima-lite/includes/plugins' );
}
include_once('includes/skt-required-plugins.php');
//---------------------------------------------------------------------
/* Upshell Pro Theme
/*---------------------------------------------------------------------------*/
require_once( trailingslashit( get_template_directory() ) . 'sketchthemes-upsell/class-customize.php' );

/**
 *
 * Add options Sub Page - General, Home Page, Header, Footer
 *
 */
if ( function_exists( 'acf_add_options_sub_page' ) ) {
	acf_add_options_sub_page( 'General' );
	acf_add_options_sub_page( 'Home Page' );
	acf_add_options_sub_page( 'Page' );
}
