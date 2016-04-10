/*
*/

$(document).ready(function()
{
	// Hide all the tooltips
	$("#jquery .category_box").each(function() {
		$("a span", this).css("opacity", "0");
	});
	
	$("#jquery .category_box").hover(function() { // Mouse over
		$(this)
			.stop().fadeTo(500, 1)
			.siblings().stop().fadeTo(500, 0.3);
			
		$("a span", this)
			.stop()
			.animate({
				opacity: 1,
				top: "-25px"
			}, 300);
		
	}, function() { // Mouse out
		$(this)
			.stop().fadeTo(500, 1)
			.siblings().stop().fadeTo(500, 1);
			
		$("a span", this)
			.stop()
			.animate({
				opacity: 0,
				top: "-1px"
			}, 300);
	});
	
});