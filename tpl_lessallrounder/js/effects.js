jQuery(document).ready(function($) {
	// Dropdown menu
	$('#topmenu').find('ul.menu li').hover(
		function(){
			$(this).find('ul:first').show('fast');
		},
		function(){
			$(this).find('ul:first').hide();
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
		return false;
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
