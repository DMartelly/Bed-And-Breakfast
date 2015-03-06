$(document).ready(function() {

	var nav_item = $('nav ul li');

	nav_item.mouseenter(function() {
		$(this).css('background-color', '#663333');
	});
	nav_item.mouseleave(function() {
		$(this).css('background-color', '#202020');
	});

	$('#banner-fade').bjqs({
		'height' : 320,
		'width' : 620,
		'responsive' : true

	});
});
