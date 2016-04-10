// JavaScript Document
jQuery(document).ready(function($) {
	
	$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
	
}); 

jQuery(window).ready(function($) {
     $('.flexslider').flexslider({
        animation: "slide",
		controlNav: false,
        directionNav: true,
        prevText: "", //String: Set the text for the "previous" directionNav item
        nextText: "", //String: Set the text for the "next" directionNav item
        animationLoop: false,
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
	 $('.csstransforms *[data-animate-to]').addClass('animate').waypoint(function(direction) {
        var _animateTo = $(this).attr('data-animate-to');
        $(this).removeClass('animate').addClass('animated').addClass(_animateTo);
    }, {
        offset: '80%',
        triggerOnce: true
    });
	 //Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				
				$(".inline-block").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
});
