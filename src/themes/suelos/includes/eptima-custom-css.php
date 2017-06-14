<?php
function eptima_lite_Hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

	$fullparallax_image = esc_url( get_theme_mod('_fullparallax_image', get_template_directory_uri().'/images/Parralx-section-image.png' ) );
	$innerheader_image = esc_url( get_theme_mod('_innerheader_stype', get_template_directory_uri().'/images/Inner-slider-image.png' ) );

	$_primary_color_scheme = esc_attr( get_theme_mod('_primary_color_scheme', '#03386f') );
	$color_scheme = esc_attr( get_theme_mod('_colorpicker', '#bef243') );
	$mobi_menu_width = esc_attr( get_theme_mod('_moblie_menu', '1025') );
	

	$rgb=array();
	$rgb = eptima_lite_Hex2RGB($color_scheme);
	$R = $rgb['red'];
	$G = $rgb['green'];
	$B = $rgb['blue'];
	$rgbcolor = "rgba(". $R .",". $G .",". $B .",.4)";
	$bdrrgbcolor = "rgba(". $R .",". $G .",". $B .",.7)";


	$hrgb = eptima_lite_Hex2RGB($_primary_color_scheme);
	$hR = $hrgb['red'];
	$hG = $hrgb['green'];
	$hB = $hrgb['blue'];
	$hrgbcolor = "rgba(". $hR .",". $hG .",". $hB .",.7)";

?>
<style type="text/css">

	/***************** THEME *****************/

	/*************** TOP HEADER **************/
	.social_icon li a:hover,.topbar_info:hover i{color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	blockquote, #header.skehead-headernav.skehead-headernav-shrink, #header.skehead-headernav.skehead-headernav-shrink #logo { background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }
	.botton_style .leftsquare:before, .botton_style .rightsquare:after {border-top: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }

	.eptima-lite-iconbox.iconbox-top .iconbox-icon {background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.iconbox-icon i{color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.eptima-lite-section h2.section_heading {color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.we_are_here_html .inner_html .fa {color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.we_are_here_content .inner_html li:hover .fa{color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}

	.call_to_action .button-link.medium-button, #latest-project-section .port-readmore a.button-link {background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?> !important;}
	.call_to_action .button-link.medium-button:hover, #latest-project-section .port-readmore a.button-link:hover {background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;}

	#full-twitter-box #bot-twitter .foot-tw-control-paging a.foot-tw-active{background-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}

	.filter a:hover,.filter li a.selected {color:<?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; border-bottom: 1px solid <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>; }
	#container-isotop .project_box:hover .portfolio_overlay {background-color: rgba(0, 0, 0, 0.7); }
	.port_single_link a {background-color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;}
	.port_single_link a:hover, .leftsquare:after, .rightsquare:before{background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}

	.flex-control-paging li a.flex-active,.eptima_lite_price_table .price_table_inner ul li.table_title{background: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	.sticky-post {color : <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;border-color:<?php if(isset($bdrrgbcolor)){ echo $bdrrgbcolor; } ?>}
	.eptima_lite_price_table .price_table_inner .price_button a, .comments-template .reply a:hover { border-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	.social li a:hover{background: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.social li a:hover:before{color:#fff; }
	.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover,a#backtop,.slider-link a:hover,#respond input[type="submit"]:hover,.eptima-lite-ctabox div.eptima-lite-ctabox-button a:hover,#portfolio-division-box a.readmore:hover,.project-item .icon-image,.project-item:hover,.widget_tag_cloud a:hover,.widget_product_tag_cloud a:hover, .continue a:hover,.eptima-lite-quote,#eptima-lite-paginate .eptima-lite-current,#eptima-lite-paginate a:hover,.postformat-gallerydirection-nav li a:hover,.comments-template .reply a:hover,#content .contact-left form input[type="submit"]:hover,.service-icon:hover,.eptima-lite-parallax-button:hover,.sktmenu-toggle,.eptima_lite_price_table .price_table_inner .price_button a:hover,#content .eptima-lite-service-page div.one_third:hover .service-icon,#content div.one_half .eptima-lite-service-page:hover .service-icon  {background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	.eptima-lite-ctabox div.eptima-lite-ctabox-button a,#portfolio-division-box .readmore,.teammember,.comments-template .reply a,,.slider-link a,.eptima_lite_tab_v ul.eptima_lite_tabs li.active,.eptima_lite_tab_h ul.eptima_lite_tabs li.active,,.service-icon,.eptima-lite-parallax-button,#eptima-lite-paginate a:hover,#eptima-lite-paginate .eptima-lite-current,#content .contact-left form textarea:focus,#content .contact-left form input[type="text"]:focus, #content .contact-left form input[type="email"]:focus, #content .contact-left form input[type="url"]:focus, #content .contact-left form input[type="tel"]:focus, #content .contact-left form input[type="number"]:focus, #content .contact-left form input[type="range"]:focus, #content .contact-left form input[type="date"]:focus, #content .contact-left form input[type="file"]:focus,form input[type="text"]:focus,form input[type="email"]:focus, form input[type="url"]:focus,form input[type="tel"]:focus, form input[type="number"]:focus,form input[type="range"]:focus, form input[type="date"]:focus,form input[type="file"]:focus,form textarea:focus,.eptima-lite-iconbox .iconbox-content h4 hr {border-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;} 	
	.clients-items li a:hover{border-bottom-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	a,.eptima-lite-footer-container ul li:hover:before,.eptima-lite-footer-container ul li:hover > a,.eptima_lite_widget ul ul li:hover:before,.eptima_lite_widget ul ul li:hover,.eptima_lite_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,.post-tags a:hover,.entry-title a:hover ,.readmore a:hover,#Site-map .sitemap-rows ul li a:hover ,.childpages li a,#Site-map .sitemap-rows .title,.eptima_lite_widget a,.eptima_lite_widget a:hover,#Site-map .sitemap-rows ul li:hover,#footer .third_wrapper a:hover,.eptima-lite-title,.service-icon i,.service-icon i,span.team_name, a.comment-edit-link,.eptima_lite_price_table .price_in_table .value,#full-subscription-box .sub-txt .first-word,.flex-caption .slider-title,.skepost-meta .fa{color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;text-decoration: none;}
	.single #content .title,#content .post-heading,.childpages li ,.fullwidth-heading,.comment-meta a:hover,#respond .required{color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;} 

	*::-moz-selection{background: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;color:#fff;}
	::selection {background: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;color:#fff;}
	#full-twitter-box,.progress_bar {background: none repeat scroll 0 0 <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	.eptima-lite-front-subs-widget input[type="submit"]{ background-color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?>;color:#fff;}
	form input[type="submit"],#respond input[type="submit"],.continue a,#wp-calendar{ background-color:<?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;color:#fff;}
	.reply a{ background-color:none;color:#747474;}
	.reply a:hover, a.comment-edit-link:hover {  color: <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;  }

	#skenav ul li.current_page_item > a,
	#skenav ul li.current-menu-ancestor > a,
	#skenav ul li.current-menu-item > a,
	#skenav ul li.current-menu-parent > a,
	#skenav ul li:hover > a { border-bottom: 2px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	#searchform input[type="submit"],#sidebar #searchform input[type="submit"]{ background: none repeat scroll 0 0 <?php if(isset($_primary_color_scheme)){ echo $_primary_color_scheme; } ?>;  }
	.eptima-lite-footer-container ul li {}
	.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title {color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;  }
	.eptima-lite-counter-h i {  color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
		
	#full-division-box { background-image: url("<?php echo $fullparallax_image; ?>"); }

	.footer-seperator{background-color: rgba(0,0,0,.2);}
	#footer div.follow-icons li:hover a{background: none repeat scroll 0 0 <?php if(isset($color_scheme)){ echo $color_scheme; } ?> !important;}
	#footer div.follow-icons .social li:hover a:before{color: #747474 !important; }
	.eptima-lite-title.eptima-lite-footer-title {color:<?php if(isset($color_scheme)){ echo $color_scheme; } ?> }


	.eptima-lite-iconbox.iconbox-top:hover .iconboxhover, #searchform input[type="submit"]:hover, #sidebar #searchform input[type="submit"]:hover {  background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	section > h1,#footer .eptima-lite-footer-container ul li:hover:before,#footer .eptima-lite-footer-container ul li a:hover { color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#eptima-lite-product-cat li > a { background-color: <?php if(isset($hrgbcolor)){ echo $hrgbcolor; } ?>; }
	#eptima-lite-product-cat .owl-buttons .owl-prev:hover, #eptima-lite-product-cat .owl-buttons .owl-next:hover, #eptima-lite-re-product .owl-buttons .owl-prev:hover, #eptima-lite-re-product .owl-buttons .owl-next:hover { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; color: #fff; border: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>;}
	#eptima-lite-product-cat .owl-buttons .owl-prev, #eptima-lite-product-cat .owl-buttons .owl-next, #eptima-lite-re-product .owl-buttons .owl-prev, #eptima-lite-re-product .owl-buttons .owl-next { border: 1px solid <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; } 
	.header-cart > a { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#eptima-lite-re-product .item .overlay a.prolink:hover { background-color: <?php if(isset($color_scheme)){ echo $color_scheme; } ?>; }
	#content .featured-image-shadow-box .fa { color: #ccc; }
	
	
	#header_wrap{background:url("<?php echo $innerheader_image; ?>") no-repeat scroll 0 0 transparent; }
	
	
	/********************** MAIN NAVIGATION PERSISTENT **********************/
	

	@media only screen and (max-width : <?php if(isset($mobi_menu_width)){ echo $mobi_menu_width; } ?>px) {
		#menu-main {
			display:none;
		}

		#header .container {
			width:97%;
		}
	}
</style>

<script type="text/javascript">
jQuery(document).ready(function(){
'use strict';
	jQuery('#menu-main').sktmobilemenu({'fwidth':'<?php if(isset($mobi_menu_width)){ echo $mobi_menu_width; } ?>'});
});
</script> 