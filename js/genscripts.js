/* Jquery Code by
ynhat (https://www.jsfiddle.net/ynhat/CeaqU)
*/

$(document).keydown(function(e) {
    if (e.which == 32) {
        return false;
    }
});

Mousetrap.bind('+', function(e) {
  	$('#incFont').click(function() {
        $('body').css("font-size", function() {
            return parseInt($(this).css('font-size')) + 3 + 'px';
        });
    });
});

$(document).ready(function() {
    $('#incFont').click(function() {
        $('body').css("font-size", function() {
            return parseInt($(this).css('font-size')) + 3 + 'px';
        });
    });
    $('#decFont').click(function() {
        $('body').css("font-size", function() {
            return parseInt($(this).css('font-size')) - 3 + 'px';
        });
    });
	$('#screenCon').click(function() {
		$('body').toggleClass('darkmd');
		$(this).toggleClass('active');
	});

	/* 
	var darkmdValue = $('#screenCon').hasClass('active');

	Cookies.set('darkmd', darkmdValue);

	if Cookies.get('darkmd') == 'true' {
		$('body').addClass('darkmd');
	} */

	/* Clear Textbox Contents */
	$('.clearTxt').on('click', function() {
		$('textarea').val('');
	});
});

