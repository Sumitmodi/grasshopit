// JavaScript Document
jQuery(window).ready(function($) {
     $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: true,
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "", //String: Set the text for the "next" directionNav item
        animationLoop: true,
        slideshow: true,
		 //itemWidth: 424,
        //itemMargin: 0,
        sync: "#carousel",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
	$('#slider1').flexslider({
        animation: "slide",
		directionNav: false,
        controlNav: true,
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "", //String: Set the text for the "next" directionNav item
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
		$('#slider2').flexslider({
        animation: "slide",
		directionNav: true,
        controlNav: false,
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "", //String: Set the text for the "next" directionNav item
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
	$('#slider3').flexslider({
        animation: "slide",
		directionNav: true,
        controlNav: false,
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "", //String: Set the text for the "next" directionNav item
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
	

});





 jQuery(document).ready(function($) {
            $('.parallax').parallax();
        })
	
//$(document).ready(function() {
//    $('.nav li.dropdown').hover(function() {
//        $(this).addClass('open');
//    }, function() {
//        $(this).removeClass('open');
//    });
//});	