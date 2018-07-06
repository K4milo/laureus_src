(function($){

	// Slick slider for carousel

	var light_carousel = $('.light-carousel'),
		dblue_carousel = $('.dark-carousel');

	if(light_carousel) {

		light_carousel.slick({
		dots: true,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: 
			[
				{
					breakpoint: 1024,
					settings: {
						infinite: true,
						slidesToScroll: 3,
						centerMode: true,
						speed: 300,
						slidesToShow: 3,

					}
				},
				{
					breakpoint: 768,
					settings: {
						infinite: true,
						dots: false,
						slidesToScroll: 2,
						centerMode: true,
						speed: 300,
						slidesToShow: 2,

					}
				},
				{
					breakpoint: 480,
					settings: {
						infinite: true,
						dots: false,
						slidesToScroll: 1,
						centerMode: true,
						speed: 300,
						slidesToShow: 1,
					}
				}
			]
		});
		// EOF CAROUSEL
	}

	if(dblue_carousel) {
		dblue_carousel.slick({
		dots: true,
		infinite: true,
		arrows: false,
		centerMode: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: 
			[
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: true,
						centerMode: true
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false
					}
				}
			]
		});
		// EOF CAROUSEl
	}

	// Select all links with hashes
	$('a[href*="#"]')
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function(event) {
	// On-page links
		if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			&& 
			location.hostname == this.hostname
		) {
		// Figure out element to scroll to
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function() {
					// Callback after animation
					// Must change focus!
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) { // Checking if the target was focused
						return false;
					} else {
						$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
						$target.focus(); // Set focus again
					};
				});
			}
		}
	});

	// Counter Up srpt

	var counterItem = $('.portfolio-home-block .container .side-portfolio.items-wrapper ul li span h5');

	if(counterItem) {
		counterItem.counterUp({
		    delay: 10,
		    time: 1000
		});
	}

	// Behavior wrap for hero title
	
	// Team Script
	var team_items = $('.team-wrapper .team-item');

	if(team_items) {
		team_items.each(function(index, el) {
			var instance = $(this),
				image_id = instance.data('display');

				if(image_id > 5) {
					instance.hide();
				}

		});
		
		$('.read_more a').on('click', function(event) {
			event.preventDefault();
			/* Act on the event */
			team_items.fadeIn(500);
			$(this).hide(300);
		});
	
	}
	

})(jQuery)