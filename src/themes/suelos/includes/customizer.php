<?php

function eptima_lite_customize_register( $wp_customize ) {

	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	// Do stuff with $wp_customize, the WP_Customize_Manager object.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->remove_control('header_textcolor');

	// ====================================
	// = eptima Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'sketchthemes', array(
		'title' => __( 'Eptima Lite Options', 'eptima-lite'),
		'priority' => 10,
	) );

	// ====================================
	// = eptima Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_featured_section' , array(
		'title' 		=> __('Home Featured Box','eptima-lite'),
		'panel'	 => 'sketchthemes',
		'active_callback' => 'is_front_page'
	) );
	$wp_customize->add_section( 'home_parallax_section' , array(
		'title' 		=> __('Home Parallax Settings','eptima-lite'),
		'panel'	 => 'sketchthemes',
		'active_callback' => 'is_front_page'
	) );
	$wp_customize->add_section( 'home_blog_section' , array(
		'title' 		=> __('Home Blog Settings','eptima-lite'),
		'panel'	 => 'sketchthemes',
		'active_callback' => 'is_front_page'
	) );
	$wp_customize->add_section( 'general_settings' , array(
		'title' => __('General Settings','eptima-lite'),
		'panel' => 'sketchthemes',
	) );
	$wp_customize->add_section( 'header_settings' , array(
		'title' => __('Header Settings','eptima-lite'),
		'panel' => 'sketchthemes',
	) );
	$wp_customize->add_section( 'social_links' , array(
		'title' => __('Social Links','eptima-lite'),
		'panel' => 'sketchthemes',
	) );
	$wp_customize->add_section( 'blog_page_settings' , array(
		'title' => __('Blog Page Settings','eptima-lite'),
		'panel' => 'sketchthemes',
	) );
	$wp_customize->add_section( 'footer_settings' , array(
		'title' => __('Footer Settings','eptima-lite'),
		'panel' => 'sketchthemes',
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( '_primary_color_scheme', array(
		'default'           => '#03386f' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_primary_color_scheme', array(
		'label'       => __( 'Primary Color Scheme', 'eptima-lite' ),
		'description' => __( 'Theme Primary Color.', 'eptima-lite' ),
		'section'     => 'general_settings',
	) ) );
	$wp_customize->add_setting( '_colorpicker', array(
		'default'           => '#bef243',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_colorpicker', array(
		'label'       => __( 'Secondary Color Scheme', 'eptima-lite' ),
		'description' => __( 'Theme Secondary Color.', 'eptima-lite' ),
		'section'     => 'general_settings',
	) ) );	

	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( '_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_logo_img', array(
		'label' => __( 'Logo Image', 'eptima-lite' ),
		'description' => __('Recomended - width:134px and height:29px', 'eptima-lite'),
		'section' => 'header_settings',
		'mime_type' => 'image',
	) ) );
	$wp_customize->add_setting( '_moblie_menu', array(
		'default'           => '1025',
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( '_moblie_menu', array(
		'type' => 'range',
		'section' => 'header_settings',
		'label' => __( 'Mobile Menu Activate Width', 'eptima-lite' ),
		'description' => __( 'Layout width after which mobile menu will get activated', 'eptima-lite' ),
		'input_attrs' => array(
			'min' => 100,
			'max' => 1180,
			'step' => 1,
		),
	) );
	$wp_customize->add_setting( '_innerheader_stype', array(
		'default'           => $imagepath.'Inner-slider-image.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_innerheader_stype', array(
		'label' => __( 'Inner Page Header Background', 'eptima-lite' ),
		'section' => 'header_settings',
		'mime_type' => 'image',
	) ) );

	// ====================================
	// = Top Bar Settings Sections
	// ====================================
	// Facebook
	$wp_customize->add_setting( '_fbook_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fbook_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Facebook URL', 'eptima-lite' ),
	) );
	// Twitter
	$wp_customize->add_setting( '_twitter_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_twitter_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Twitter URL', 'eptima-lite' ),
	) );
	// Goggle+
	$wp_customize->add_setting( '_gplus_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_gplus_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Google+ URL', 'eptima-lite' ),
	) );
	// LinkedIn
	$wp_customize->add_setting( '_linkedin_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_linkedin_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'LinkedIn URL', 'eptima-lite' ),
	) );
	// Pinterest
	$wp_customize->add_setting( '_pinterest_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_pinterest_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Pinterest URL', 'eptima-lite' ),
	) );
	// Flickr
	$wp_customize->add_setting( '_flickr_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_flickr_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Flickr URL', 'eptima-lite' ),
	) );
	// skype
	$wp_customize->add_setting( '_skype_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_skype_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Skype URL', 'eptima-lite' ),
	) );
	// instagram
	$wp_customize->add_setting( '_instagram_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_instagram_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Instagram URL', 'eptima-lite' ),
	) );
	// vk
	$wp_customize->add_setting( '_vk_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_vk_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Vk URL', 'eptima-lite' ),
	) );
	// whatsapp
	$wp_customize->add_setting( '_whatsapp_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_whatsapp_link', array(
		'type'     		=> 'url',
		'section'  		=> 'social_links',
		'label'    		=> __( 'Whatsapp URL', 'eptima-lite' ),
	) );
	

	// ====================================
	// = Home Featured Settings Sections
	// ====================================
	$wp_customize->add_setting( '_featured_heading', array(
		'default'        => __('AMAZING FEATURES', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_heading', array(
		'section' => 'home_featured_section',
		'label' => __('Feature Section Heading','eptima-lite'),
	));
	$wp_customize->add_setting( '_featured_desc', array(
		'default'        => __('No more tons of useless features!</br>All of our features created with functionality and design in mind.', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Feature Section Description','eptima-lite'),
	));
	// Fist Feature Section
	$wp_customize->add_setting( '_featured_title1', array(
		'default'        => __('CREATIVE TEAM', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_title1', array(
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Title','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb1_first_part_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_fb1_first_part_link', array(
		'type' => 'url',
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Link','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb1_desc', array(
		'default'        => __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Content','eptima-lite'),
	));
	// Second Feature Section
	$wp_customize->add_setting( '_featured_title2', array(
		'default'        => __('EASY TO CUSTOMIZE', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_title2', array(
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Title','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb2_second_part_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_fb2_second_part_link', array(
		'type' => 'url',
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Link','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb2_desc', array(
		'default'        => __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Content','eptima-lite'),
	));
	// Third Feature Section
	$wp_customize->add_setting( '_featured_title3', array(
		'default'        => __('RESPONSIVE DESIGN', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_title3', array(
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Title','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb3_third_part_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('_fb3_third_part_link', array(
		'type' => 'url',
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Link','eptima-lite'),
	));
	$wp_customize->add_setting( '_fb3_desc', array(
		'default'        => __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_desc', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Content','eptima-lite'),
	));
	
	// ====================================
	// = Home Parallax Settings Sections
	// ====================================
	// Parallax Section
	$wp_customize->add_setting( '_fullparallax_image', array(
		'default'           => $imagepath.'Parralx-section-image.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_fullparallax_image', array(
		'section' 		=> 'home_parallax_section',
		'label' 		=> __( 'Parallax Image', 'eptima-lite' ),
		'description' 	=> __('Recomended size min. 1600x750 px.', 'eptima-lite' ),
	) ) );
	$wp_customize->add_setting( '_para_content_left', array(
		'default'        => __('A few words about what we do Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis felis at tortor sagittis iaculis. Suspendisse nec tellus mattis, sollicitudin velit at, mattis nunc. Cras mi diam, efficitur ac lectus nec, luctus sodales orci. Maecenas sodales urna nisi. Duis eu dolor in leo varius faucibus ornare eget odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur malesuada magna a arcu rhoncus sollicitudin. Duis purus ex, accumsan et diam eu, semper interdum felis. Nam semper quam et leo facilisis tempus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis felis at tortor sagittis iaculis. Suspendisse nec tellus mattis, sollicitudin velit at, mattis nunc. Cras mi diam, efficitur ac lectus nec, luctus sodales orci. Maecenas sodales urna nisi. A few words about what we do Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis felis at tortor sagittis iaculis. Suspendisse nec tellus mattis, sollicitudin velit at, mattis nunc. Cras mi diam, efficitur ac lectus nec, luctus sodales orci. Maecenas sodales urna nisi. Duis eu dolor in leo varius faucibus ornare eget odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur malesuada magna a arcu rhoncus sollicitudin. Duis purus ex, accumsan et diam eu, semper interdum felis. Nam semper quam et leo facilisis tempus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis felis at tortor sagittis iaculis. Suspendisse nec tellus mattis, sollicitudin velit at, mattis nunc. Cras mi diam, efficitur ac lectus nec, luctus sodales orci. Maecenas sodales urna nisi.', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_para_content_left', array(
		'type'	=> 'textarea',
		'section' => 'home_parallax_section',
		'label' => __('Parallax Section Content','eptima-lite'),
	));
	
	// ====================================
	// = Home Blog Settings Sections
	// ====================================
	$wp_customize->add_setting( 'home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'eptima_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_blog_sec', array(
		'label' => __( 'Home Blog Section ON/OFF', 'eptima-lite' ),
		'section' => 'home_blog_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'home_blog_title', array(
		'default'        => __('Blog', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_title', array(
		'label' => __('Home Blog Section Title','eptima-lite'),
		'section' => 'home_blog_section',
	));
	$wp_customize->add_setting( 'home_blog_num', array(
		'default'        => __('6', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_num', array(
		'label' => __('Number Of Blogs','eptima-lite'),
		'section' => 'home_blog_section',
	));

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( '_blogpage_heading', array(
		'default'        => __('Blog', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('_blogpage_heading', array(
		'label' => __('Blog Page Title','eptima-lite'),
		'section' => 'blog_page_settings',
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( '_copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'eptima-lite'),
		'sanitize_callback' => 'eptima_lite_sanitize_textarea',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('_copyright', array(
		'label' => __('Copyright Text','eptima-lite'),
		'section' => 'footer_settings',
	));
}
add_action( 'customize_register', 'eptima_lite_customize_register' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Twenty Fifteen 1.0
 */
function eptima_lite_customize_preview_js() {
	wp_enqueue_script( 'eptima-lite-customizer-js', get_template_directory_uri() . '/js/eptima-lite-customizer.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'eptima_lite_customize_preview_js' );


// sanitize textarea
function eptima_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function eptima_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

?>