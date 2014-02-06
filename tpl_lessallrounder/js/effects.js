jQuery(document).ready(function($) {
	// Mainmenu with suffix _menu
	$('.module_menu ul.menu li a').hover(function(){
		$(this).stop().animate({'padding-left':'20px'},{
			queue:false,
			duration:'fast'
		});
	}, function(){
		$(this).stop().animate({'padding-left':'0'},{
			queue:false,
			duration:'middle'
		});
	});

	// Searchbox animation
	$("#search").hide().show({},"swing");

	// Go to top link
	$('a#gotop').click(function(){
	$('html, body').animate({scrollTop:0}, 1200);
		return false;
	});

	// Tooltips
	$('.lv-tooltip').tooltip({separator:'::',delay:200});
	$('.lv-tooltip-white').tooltip({className:'tip-white',separator:'::',delay:200});
	$('.lv-tooltip-black').tooltip({className:'tip-black',separator:'::',delay:200});
	$('.lv-tooltip-blue').tooltip({className:'tip-blue',separator:'::',delay:200});
	$('.lv-tooltip-red').tooltip({className:'tip-red',separator:'::',delay:200});
	$('.lv-tooltip-green').tooltip({className:'tip-green',separator:'::',delay:200});
	$('.lv-tooltip-yellow').tooltip({className:'tip-yellow',separator:'::',delay:200});

	// Captions
	$('.lv-caption').caption({opacity:0.6,animation:'fade',separator: '::',button:true});
	$('.lv-caption-fade').caption({opacity:0.6,fixed:false,animation:'fade',separator: '::'});
	$('.lv-caption-slide').caption({opacity:0.6,fixed:false,animation:'slide',separator: '::'});
	$('.lv-caption-bounce').caption({opacity:0.6,fixed:false,animation:'bounce',separator: '::'});
	$('.lv-caption-gravity').caption({opacity:0.6,fixed:false,animation:'gravity',separator: '::'});
	$('.lv-caption-zoom').caption({opacity:0.6,fixed:false,animation:'zoom',separator: '::'});
	$('.lv-caption-racer').caption({opacity:0.6,fixed:false,animation:'racer',separator: '::'});
	$('.lv-caption-move').caption({opacity:0.6,fixed:false,animation:'move',separator: '::'});

	// Article Details
	$('.article-info dd').hide();
	$('.article-info-term').click(function(){
		$(this).stop();
		$('.article-info dd').slideToggle("fast");
	});

	// Toppanel
//	$('#toppanel').hide();
	$('a#toppanel-toggle').click(function(){
		$('#toppanel').slideToggle("middle");
		return true;
	});

	// Sidepanel
//	$('#sidepanel').hide();
	$('a#sidepanel-toggle').click(function(){
		$('#sidepanel').toggle("middle");
		return false;
	});

	// System Messages
	$("div#system-message div").fadeOut({
		duration: 15000
	});
});
