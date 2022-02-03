document.addEventListener("DOMContentLoaded", function() {
    // Dropdown menu
    let entries = document.querySelector("#topmenu").querySelectorAll('ul.nav li');
    for (let i = 0; i < entries.length; i++) {
        let entry = entries[i];
        let mobileIconNode = document.createElement('span');
        mobileIconNode.className = 'mobile-icon';
        let link = entry.querySelector('a, span.separator');
        link.insertBefore(mobileIconNode ,link.firstChild);
        let ul = entry.querySelector('ul');
        if (ul){
            entry.addEventListener('mouseover', function (event) {
                if (!event.target.classList.contains('mobile-icon')){
                    entry.querySelector('ul').style.display = 'block';
                    entry.classList.add('opened');
                }
             }, false);
            entry.addEventListener('mouseout', function (event) {
                if (!event.target.classList.contains('mobile-icon')) {
                    entry.querySelector('ul').style.display = 'none';
                    entry.classList.remove('opened');
                }
            }, false);
            let mobileIcon = entry.querySelector('.mobile-icon');
            mobileIcon.addEventListener('click', function (event) {
                if (entry.classList.contains('opened')) {
                    entry.querySelector('ul').style.display = 'none';
                    entry.classList.remove('opened');
                } else {
                    entry.querySelector('ul').style.display = 'block';
                    entry.classList.add('opened');
                }
                event.preventDefault();
            }, false);
        }
    }
// Searchbox animation
    $('#search').hide().show(400, 'swing');

// Go to top link
    $('a#gotop').click(function () {
        $('html, body').animate({scrollTop: 0}, 1200);
        return false;
    });

// Article Details
    $('.article-info dd').hide();
    $('.article-info-term').click(function () {
        $(this).siblings('.article-info dd').slideToggle('fast');
    });

// Toppanel
    $('a#toppanel-toggle').click(function () {
        $('#toppanel').slideToggle('middle');
        return false;
    });

// Sidepanel
    $('a#sidepanel-toggle').click(function () {
        $('#sidepanel').toggle('middle');
        return false;
    });

// System Messages
    $('div#system-message div').fadeOut({
        duration: 15000
    });

// Turn radios into btn-group
    $('.radio.btn-group label').addClass('btn');

    $('fieldset.btn-group').each(function () {
        // Handle disabled, prevent clicks on the container, and add disabled style to each button
        if ($(this).prop('disabled')) {
            $(this).css('pointer-events', 'none').off('click');
            $(this).find('.btn').addClass('disabled');
        }
    });

    $(".btn-group label:not(.active)").click(function () {
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
    $(".btn-group input[checked=checked]").each(function () {
        if ($(this).val() == '') {
            $("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
        } else if ($(this).val() == 0) {
            $("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
        } else {
            $("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
        }
    });
})
;
