$(document).ready(function () {
	$("#mySpriteSpin").spritespin({
		// path to the source images.
		source: [
			"../img/360view/suit/rad_zoom_001.jpg",
			"../img/360view/suit/rad_zoom_003.jpg",
			"../img/360view/suit/rad_zoom_006.jpg",
			"../img/360view/suit/rad_zoom_009.jpg",
			"../img/360view/suit/rad_zoom_012.jpg",
			"../img/360view/suit/rad_zoom_015.jpg",
			"../img/360view/suit/rad_zoom_018.jpg",
			"../img/360view/suit/rad_zoom_021.jpg",
			"../img/360view/suit/rad_zoom_024.jpg",
			"../img/360view/suit/rad_zoom_026.jpg",
			"../img/360view/suit/rad_zoom_027.jpg",
			"../img/360view/suit/rad_zoom_028.jpg",

		],
		width: 480, // width in pixels of the window/frame
		height: 327, // height in pixels of the window/frame
		sense: -1,
		//animate: false
		loop: false,
		stopFrame: 4
	});

});