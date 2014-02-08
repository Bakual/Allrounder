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

	// Tooltips
	$('.lv-tooltip').tooltip({separator:'::',delay:200});
	$('.lv-tooltip-white').tooltip({className:'tip-white',separator:'::',delay:200});
	$('.lv-tooltip-black').tooltip({className:'tip-black',separator:'::',delay:200});
	$('.lv-tooltip-blue').tooltip({className:'tip-blue',separator:'::',delay:200});
	$('.lv-tooltip-red').tooltip({className:'tip-red',separator:'::',delay:200});
	$('.lv-tooltip-green').tooltip({className:'tip-green',separator:'::',delay:200});
	$('.lv-tooltip-yellow').tooltip({className:'tip-yellow',separator:'::',delay:200});
});