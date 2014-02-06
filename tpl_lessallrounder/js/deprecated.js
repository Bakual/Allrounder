jQuery(document).ready(function($) {
	// Accordion
	$('.hideme').hide();
	$('.lvacc').click( function() {
		var trig = $(this);
		if ( trig.hasClass('lvacc_active') ) {
			trig.next('.hideme').slideToggle('slow');
			trig.removeClass('lvacc_active');
		} else {
			$('.lvacc_active').next('.hideme').slideToggle('slow');
			$('.lvacc_active').removeClass('lvacc_active');
			trig.next('.hideme').slideToggle('slow');
			trig.addClass('lvacc_active');
		};
	return false;
	});
	$('.lvacc-all').click(function(){
		$('.hideme').stop().toggle();
	});
});