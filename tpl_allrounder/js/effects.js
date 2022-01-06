jQuery(document).ready(function($) {
  // Mobile dropdown menu
  $('#topmenu ul.nav li').find('a, span.separator').prepend('<span class="mobile-icon"></span>');
  $('#topmenu ul.nav li').find('.mobile-icon, span.separator').click(
    function(e){
      $(this).closest('li').toggleClass('opened');
      $('#topmenu ul.nav li').not('.opened').find('li.opened').removeClass('opened');
      $('#topmenu ul.nav li').not('.opened').find('ul').hide();
      $('#topmenu ul.nav li.opened > ul').show('fast');
      return false;
    }
  );

  // Dropdown menu
  $('#topmenu').find('ul.nav li').hover(
    function(){
      if ($('#topmenu .navbar-toggler').css('display') == 'none') {
        $(this).find('ul:first').show('fast');
      }
    },
    function(){
      if ($('#topmenu .navbar-toggler').css('display') == 'none') {
        $(this).find('ul:first').hide();
      }
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

	// Turn radios into btn-group
	$('.radio.btn-group label').addClass('btn');

	$('fieldset.btn-group').each(function() {
		// Handle disabled, prevent clicks on the container, and add disabled style to each button
		if ($(this).prop('disabled')) {
			$(this).css('pointer-events', 'none').off('click');
			$(this).find('.btn').addClass('disabled');
		}
	});

	$(".btn-group label:not(.active)").click(function()
	{
		var label = $(this);
		var input = $('#' + label.attr('for'));

		if (!input.prop('checked')) {
			label.closest('.btn-group').find("label").removeClass('active btn-success btn-danger btn-primary');
			if (input.val() == '') {
				label.addClass('active btn-primary');
			} else if (input.val() == 0) {
				label.addClass('active btn-danger');
			} else {
				label.addClass('active btn-success');
			}
			input.prop('checked', true);
			input.trigger('change');
		}
	});
	$(".btn-group input[checked=checked]").each(function()
	{
		if ($(this).val() == '') {
			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
		} else if ($(this).val() == 0) {
			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
		} else {
			$("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
		}
	});
});
