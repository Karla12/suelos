var $j = jQuery.noConflict();

// MOBILE MENU -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready(function(){
	'use strict';
	jQuery('#menu-main').superfish();
	jQuery('#menu-main li.current-menu-item,#menu-main li.current_page_item,#menu-main li.current-menu-parent,#menu-main li.current-menu-ancestor,#menu-main li.current_page_ancestor').each(function(){
		jQuery(this).prepend('<span class="item_selected"></span>');
	});
});

(function( $ ) {
'use strict';
	$.fn.sktmobilemenu = function(options) { 
	var defaults = {
		'fwidth': 700
	};

		//call in the default otions
		var options = $.extend(defaults, options);
		var obj = $(this);
		return this.each(function() {
			if($(window).width() < options.fwidth) {
				sktMobileRes();
			}

			$(window).resize(function() {
				if($(window).width() < options.fwidth) {
					sktMobileRes();
				}else{
					sktDeskRes();
				}
			});
			function sktMobileRes() {
				jQuery('#menu-main').superfish('destroy');
				obj.addClass('eptima-lite-mob-menu').hide();
				obj.parent().css('position','relative');
					if(obj.prev('.sktmenu-toggle').length === 0) {
						obj.before('<div class="sktmenu-toggle" id="responsive-nav-button"></div>');
					}
				obj.parent().find('.sktmenu-toggle').removeClass('active');
			}

			function sktDeskRes() {
				jQuery('#menu-main').superfish('init');
				obj.removeClass('eptima-lite-mob-menu').show();
				if(obj.prev('.sktmenu-toggle').length) {
					obj.prev('.sktmenu-toggle').remove();
				}
			}

			obj.parent().on('click','.sktmenu-toggle',function() {
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).next('ul').stop(true,true).slideDown();
				}
				else{
					$(this).removeClass('active');
					$(this).next('ul').stop(true,true).slideUp();
				}
			});
		});
};
})( jQuery );

jQuery(document).ready(function ($) {
	'use strict';
	document.getElementById('s') && document.getElementById('s').focus();
});

jQuery(window).load(function(){ 
	if(jQuery('#skenav .skt-mob-menu').length > 0){		
		jQuery('#skenav .skt-mob-menu').css('width',jQuery('.row-fluid').width());
	}
});

/* ---------------------------------------------------- */
/*	PARALLAX											*/
/* ---------------------------------------------------- */
jQuery.fn.parallax = function(xpos, speedFactor) {
'use strict';
var firstTop, methods = {};
return this.each(function(idx, value) {
var $this = jQuery(value), firstTop = $this.offset().top;
if (arguments.length < 1 || xpos === null)
xpos = "50%";
if (arguments.length < 2 || speedFactor === null)
speedFactor = 0.1;
methods = {
update: function() {
var pos = jQuery(window).scrollTop();
$this.each(function() {
$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
});
},
init: function() {
this.update();
jQuery(window).on('scroll', methods.update);
}
}
return methods.init();
});
};

//BACK TO TOP -----------------------------------------
//-----------------------------------------------------
jQuery(document).ready( function() {
'use strict';
jQuery('#back-to-top,#backtop').hide();
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 100) {
jQuery('#back-to-top,#backtop').fadeIn();
} else {
jQuery('#back-to-top,#backtop').fadeOut();
}
});
jQuery('#back-to-top,#backtop').click(function(){
jQuery('html, body').animate({scrollTop:0}, 'slow');
});
});

//WAYPOINTS MAGIC -----------------------------------------
//---------------------------------------------------------
if ( typeof window['vc_waypoints'] !== 'function' ) {
	function vc_waypoints() {
	if (typeof jQuery.fn.waypoint !== 'undefined') {
		$j('.fade_in_hide').waypoint(function() {
				$j(this).addClass('eptima_lite_start_animation');
			}, { offset: '90%' });
			$j('.eptima_lite_animate_when_almost_visible').waypoint(function() {
				$j(this).addClass('eptima_lite_start_animation');
			}, { offset: '90%' });
		}
	}
}
jQuery(document).ready(function($) {
'use strict';
vc_waypoints();
 }); 
//------------------------------------------------------------
 
jQuery(document).ready(function($) {
	'use strict';
	//SEARCH BOX
	jQuery('.search-strip, .hsearch .hsearch-close').on('click', function(){
		jQuery('.hsearch .row-fluid').slideDown( "fast", "linear" );
	});
	jQuery('.hsearch .hsearch-close').on('click', function(){
		jQuery('.hsearch .row-fluid').slideUp( "fast", "linear" );
	});
});

// jQuery for header flags

jQuery(document).ready(function($) {
    'use strict';
    jQuery('#header-top .dropdown-toggle').on('click', function(){
        jQuery('#header-top .dropdown-menu.langs').fadeToggle( "fast", "linear" );
    });
});