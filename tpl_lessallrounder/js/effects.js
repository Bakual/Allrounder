jQuery(document).ready(function($) {
	// Dropdown menu
	$('#topmenu ul.menu ul').css({display:'none'}); // Opera Fix
	$('#topmenu ul.menu li').hover(
		function(){
			$(this).find('ul:first').css({visibility:'visible', display:'none'}).show('fast');
		},
		function(){
			$(this).find('ul:first').css({visibility:'hidden'});
		}
	);

	// Mainmenu with suffix _menu
	$('.module_menu ul.menu li a').hover(
		function(){
			$(this).animate(
				{'padding-left':'35px'},
				{
					queue:false,
					duration:'fast'
				}
			);
		},
		function(){
			$(this).animate(
				{'padding-left':'15px'},
				{
					queue:false,
					duration:'middle'
				}
			);
		}
	);

	// Searchbox animation
	$('#search').hide().show(400, 'swing');

	// Go to top link
	$('a#gotop').click(function(){
		$('html, body').animate({scrollTop:0}, 1200);
		return false;
	});

	// Article Details
	$('.article-info dd').hide();
	$('.article-info-term').click(function(){
		$(this).siblings('.article-info dd').slideToggle('fast');
	});

	// Toppanel
	$('a#toppanel-toggle').click(function(){
		$('#toppanel').slideToggle('middle');
		return true;
	});

	// Sidepanel
	$('a#sidepanel-toggle').click(function(){
		$('#sidepanel').toggle('middle');
		return false;
	});

	// System Messages
	$('div#system-message div').fadeOut({
		duration: 15000
	});
});
