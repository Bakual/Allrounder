jQuery(document).ready(function(jq) {

	// Mainmenu with suffix _menu	
	jq('.module_menu ul.menu li a').hover(function(){
		jq(this).stop().animate({'padding-left':'20px'},{
			queue:false,
			duration:'fast'
		});
	}, function(){
		jq(this).stop().animate({'padding-left':'0'},{
			queue:false,
			duration:'middle'
		});
	});


	// Searchbox animation
	jq("#search").hide().show({},"swing"); 


	// Go to top link
	jq('a#gotop').click(function(){
	jq('html, body').animate({scrollTop:0}, 1200); 
		return false; 
	});


	// Tooltips
	jq('.lv-tooltip').tooltip({separator:'::',delay:200});
	jq('.lv-tooltip-white').tooltip({className:'tip-white',separator:'::',delay:200});
	jq('.lv-tooltip-black').tooltip({className:'tip-black',separator:'::',delay:200});
	jq('.lv-tooltip-blue').tooltip({className:'tip-blue',separator:'::',delay:200});
	jq('.lv-tooltip-red').tooltip({className:'tip-red',separator:'::',delay:200});
	jq('.lv-tooltip-green').tooltip({className:'tip-green',separator:'::',delay:200});
	jq('.lv-tooltip-yellow').tooltip({className:'tip-yellow',separator:'::',delay:200});
	
	// Captions
	jq('.lv-caption').caption({opacity:0.6,animation:'fade',separator: '::',button:true});
	jq('.lv-caption-fade').caption({opacity:0.6,fixed:false,animation:'fade',separator: '::'});
	jq('.lv-caption-slide').caption({opacity:0.6,fixed:false,animation:'slide',separator: '::'});
	jq('.lv-caption-bounce').caption({opacity:0.6,fixed:false,animation:'bounce',separator: '::'});
	jq('.lv-caption-gravity').caption({opacity:0.6,fixed:false,animation:'gravity',separator: '::'});
	jq('.lv-caption-zoom').caption({opacity:0.6,fixed:false,animation:'zoom',separator: '::'});
	jq('.lv-caption-racer').caption({opacity:0.6,fixed:false,animation:'racer',separator: '::'});
	jq('.lv-caption-move').caption({opacity:0.6,fixed:false,animation:'move',separator: '::'});
	


	// Atricle Details
	jq('dl.article-info').hide('', function(){});

	jq('a.article-detailer').click(function(){
		jq(this).stop();
		jq(this).next('.article-info').slideToggle("fast");
	});


	// Accordion
	jq('.hideme').hide();
	jq('.lvacc').click( function() {
		var trig = jq(this);
		if ( trig.hasClass('lvacc_active') ) {
			trig.next('.hideme').slideToggle('slow');
			trig.removeClass('lvacc_active');
		} else {
			jq('.lvacc_active').next('.hideme').slideToggle('slow');
			jq('.lvacc_active').removeClass('lvacc_active');
			trig.next('.hideme').slideToggle('slow');
			trig.addClass('lvacc_active');
		};
	return false;
	});
	jq('.lvacc-all').click(function(){
		jq('.hideme').stop().toggle();
	
	});
	
	// Toppanel
//	jq('#toppanel').hide();
	jq('a#toppanel-toggle').click(function(){
		jq('#toppanel').slideToggle("middle");
		return true;
	});


	// Sidepanel
//	jq('#sidepanel').hide();
	jq('a#sidepanel-toggle').click(function(){
		jq('#sidepanel').toggle("middle");
		return false;
	});


	// System Messages
	jq('dl#system-message').hide('', function(){
	});
	jq("dl#system-message").slideDown({
		duration: 'slow'
	});
	jq("dl#system-message").fadeOut({
		duration: 10000
	});

});
