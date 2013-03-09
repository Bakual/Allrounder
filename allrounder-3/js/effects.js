jQuery(document).ready(function(jQuery) {

	// Mainmenu with suffix _menu	
	jQuery('.module_menu ul.menu li a').hover(function(){
		jQuery(this).stop().animate({'padding-left':'20px'},{
			queue:false,
			duration:'fast'
		});
	}, function(){
		jQuery(this).stop().animate({'padding-left':'0'},{
			queue:false,
			duration:'middle'
		});
	});


	// Searchbox animation
	jQuery("#search").hide().show({},"swing"); 


	// Go to top link
	jQuery('a#gotop').click(function(){
	jQuery('html, body').animate({scrollTop:0}, 1200); 
		return false; 
	});


	// Tooltips
	jQuery('.lv-tooltip').tooltip({separator:'::',delay:200});
	jQuery('.lv-tooltip-white').tooltip({className:'tip-white',separator:'::',delay:200});
	jQuery('.lv-tooltip-black').tooltip({className:'tip-black',separator:'::',delay:200});
	jQuery('.lv-tooltip-blue').tooltip({className:'tip-blue',separator:'::',delay:200});
	jQuery('.lv-tooltip-red').tooltip({className:'tip-red',separator:'::',delay:200});
	jQuery('.lv-tooltip-green').tooltip({className:'tip-green',separator:'::',delay:200});
	jQuery('.lv-tooltip-yellow').tooltip({className:'tip-yellow',separator:'::',delay:200});
	
	// Captions
	jQuery('.lv-caption').caption({opacity:0.6,animation:'fade',separator: '::',button:true});
	jQuery('.lv-caption-fade').caption({opacity:0.6,fixed:false,animation:'fade',separator: '::'});
	jQuery('.lv-caption-slide').caption({opacity:0.6,fixed:false,animation:'slide',separator: '::'});
	jQuery('.lv-caption-bounce').caption({opacity:0.6,fixed:false,animation:'bounce',separator: '::'});
	jQuery('.lv-caption-gravity').caption({opacity:0.6,fixed:false,animation:'gravity',separator: '::'});
	jQuery('.lv-caption-zoom').caption({opacity:0.6,fixed:false,animation:'zoom',separator: '::'});
	jQuery('.lv-caption-racer').caption({opacity:0.6,fixed:false,animation:'racer',separator: '::'});
	jQuery('.lv-caption-move').caption({opacity:0.6,fixed:false,animation:'move',separator: '::'});
	


	// Atricle Details
	jQuery('dl.article-info').hide('', function(){});

	jQuery('a.article-detailer').click(function(){
		jQuery(this).stop();
		jQuery(this).next('.article-info').slideToggle("fast");
	});


	// Accordion
	jQuery('.hideme').hide();
	jQuery('.lvacc').click( function() {
		var trig = jQuery(this);
		if ( trig.hasClass('lvacc_active') ) {
			trig.next('.hideme').slideToggle('slow');
			trig.removeClass('lvacc_active');
		} else {
			jQuery('.lvacc_active').next('.hideme').slideToggle('slow');
			jQuery('.lvacc_active').removeClass('lvacc_active');
			trig.next('.hideme').slideToggle('slow');
			trig.addClass('lvacc_active');
		};
	return false;
	});
	jQuery('.lvacc-all').click(function(){
		jQuery('.hideme').stop().toggle();
	
	});
	
	// Toppanel
//	jQuery('#toppanel').hide();
	jQuery('a#toppanel-toggle').click(function(){
		jQuery('#toppanel').slideToggle("middle");
		return true;
	});


	// Sidepanel
//	jQuery('#sidepanel').hide();
	jQuery('a#sidepanel-toggle').click(function(){
		jQuery('#sidepanel').toggle("middle");
		return false;
	});


	// System Messages
	jQuery('dl#system-message').hide('', function(){
	});
	jQuery("dl#system-message").slideDown({
		duration: 'slow'
	});
	jQuery("dl#system-message").fadeOut({
		duration: 10000
	});

});
