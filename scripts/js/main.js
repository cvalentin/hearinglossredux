$(document).ready(function(){
	$(document).foundation({
		orbit: {
			slide_number: false,
			bullets: false,
			timer_speed: 2000,
			timer: true

		}
	});

	$(document).foundation('orbit', 'start'); // stop_timer, toggle_timer
});
