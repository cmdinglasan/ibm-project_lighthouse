/* Jquery Code by
ynhat (https://www.jsfiddle.net/ynhat/CeaqU)
*/

Mousetrap.bind('up', function(e) {
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
});

