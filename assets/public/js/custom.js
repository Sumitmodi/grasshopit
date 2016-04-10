$(function() {
	var $wrapper = $('.search-wrap');

	// theme switcher
	var theme_match = String(window.location).match(/[?&]theme=([a-z0-9]+)/);
	var theme = (theme_match && theme_match[1]) || 'default';
	var themes = [];
	$('head').append('<link rel="stylesheet" href="selectize.css">');

	var $themes = $('<div>').addClass('theme-selector').insertAfter('h1');
	for (var i = 0; i < themes.length; i++) {
		$themes.append('<a href="?theme=' + themes[i] + '"' + (themes[i] === theme ? ' class="active"' : '') + '>' + themes[i] + '</a>');
	}

	
	// show current input values
	$('select.selectized,input.selectized', $wrapper).each(function() {
		var $container = $('<div>').addClass('value').html('Current Value: ');
		var $value = $('<span>').appendTo($container);
		var $input = $(this);
		var update = function(e) { $value.text(JSON.stringify($input.val())); }

		$(this).on('change', update);
		update();

		$container.insertAfter($input);
	});
});// JavaScript Document

jQuery(document).ready(function($){
	var _h=$('.left_side ').parent('.row').height()-20;
	$('.left_side ').css({'min-height':_h});
	});