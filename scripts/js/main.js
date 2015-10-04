$(document).ready(function(){
	$(document).foundation();

	$('.image-carousel').slick({
		dots: true,
		mobileFirst: true,
		autoplay: true,
		autoplaySpeed: 2000,
	});
});
