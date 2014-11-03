jQuery(function($) {

	//Hover on .post
	$(".post").hover(function() {
		$(this).css({opacity: '0.7'});
		$(this).css("cursor","pointer");
	}, function() {
		$(this).css({opacity: '1'});
		$(this).css("cursor","");
	});

	//Open Link
	$(".post").click(function(event) {
		location.href = $(this).find("a").attr("href");
		return false;
	});

	//Hover on .work
	$(".work").hover(function() {
		$(this).css({opacity: '0.7'});
		$(this).css("cursor","pointer");
	}, function() {
		$(this).css({opacity: '1'});
		$(this).css("cursor","");
	});

	//Open Link
	$(".work").click(function(event) {
		location.href = $(this).find("a").attr("href");
		return false;
	});

});