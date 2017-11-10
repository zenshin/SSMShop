$(document).ready(function () {
	// 1st carousel, main
	$('.main-carousel').flickity({
		// options
		cellAlign: 'left',
		pageDots: true
	});
	// 2nd carousel, navigation

	$('.carousel-nav').flickity({
		asNavFor: '.main-carousel',
		contain: true,
		pageDots: false,
		prevNextButtons: false
	});
});