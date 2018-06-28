(function($){

	// Slick slider for carousel

	var light_carousel = $('.light-carousel'),
		dblue_carousel = $('.dark-carousel');

	if(light_carousel) {

		light_carousel.slick({
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: 
			[
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		// EOF CAROUSEL
	}

	if(dblue_carousel) {
		dblue_carousel.slick({
		dots: true,
		arrows: false,
		infinite: true,
		centerMode: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: 
			[
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		// EOF CAROUSEL
	}

})(jQuery)