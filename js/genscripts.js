/* Jquery Code by
ynhat (https://www.jsfiddle.net/ynhat/CeaqU)
*/

$(document).keydown(function(e) {
    if (e.which == 32) {
        return false;
    }
});

Mousetrap.bind('+', function(e) {
    $('body, h2, h3').css("font-size", function() {
        return parseInt($(this).css('font-size')) + 3 + 'px';
    });
});
Mousetrap.bind('-', function(e) {
    $('body, h2, h3').css("font-size", function() {
        return parseInt($(this).css('font-size')) - 3 + 'px';
    });
});

Mousetrap.bind('alt+/', function(e) {
    $('#accessibility').toggleClass('active');
    $('body').toggleClass('access-active');
});

$(document).ready(function() {
    $('#incFont').click(function() {
        $('body').css("font-size", function() {
            return parseInt($(this).css('font-size')) + 3 + 'px';
        });
    });
    $('#next-one').click(function() {
        $('.welcome-screen').hide();
    });
    $('#decFont').click(function() {
        $('body').css("font-size", function() {
            return parseInt($(this).css('font-size')) - 3 + 'px';
        });
    });
    $('.hamburger, .close-menu').click(function() {
        $('.main-header').toggleClass('active');
        $('body').toggleClass('sidebarOpen');
    });

	/* Clear Textbox Contents */
	$('.clearTxt').on('click', function() {
		$('textarea').val('');
	});

    $('.access-btn').on('focus', function(){
        $(this).addClass('focused');
    });

    $(".page-section .access-btn").on('click focus', function(){
        $("#page-section-selection").collapse('toggle').toggleClass('focus');
    });
    $(".menu-section .access-btn").on('click focus', function(){
        $("#menu-section-selection").collapse('toggle').toggleClass('focus');
    });
    $('#header-access').hover(function() {
        $("#main-header").toggleClass('focused');
    });

     /**
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
});

