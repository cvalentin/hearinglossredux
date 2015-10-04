$(document).ready(function(){
	// $(document).foundation({
	// 	orbit: {
	// 		slide_number: false,
	// 		bullets: false
	// 	}
	// });
	
	$(document).foundation();

	$('.image-carousel').slick({
		dots: true,
		mobileFirst: true
	})
});