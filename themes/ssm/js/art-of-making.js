	jQuery(document).ready(function ($) {
		$("#suit-box .point").click(function () {
			var point = $(this);
			$("#info-box").removeClass("hidden").prepend('<div class="info-block"><div class="close-button"></div><h2 class="info-box-title">' + point.children(".title").html() + '</h2><p class="info-box-description">' + point.children(".description").html() + '</p></div>');
			$(".info-block").animate({
				opacity: "1"
			}, 500, function () {
				$("#info-box").children().each(function (index) {
					if (index != 0) {
						if ($(this).hasClass("intro-text")) {
							$(".intro-text").css("display", "none");
						} else {
							$(this).remove();
						}
					} else {
						$(this).css("z-index", "2");
					}
				});
			});
		});
		$("#info-box").on('click', '.close-button', function (e) {
			$(".intro-text").css("display", "inline");
			$(".info-block").animate({
				opacity: "0"
			}, 500, function (index) {
				$(this).css("display", "none");
			});
		});

		$("#suit-box-2 .point").click(function () {
			var point = $(this);
			$("#info-box-2").removeClass("hidden").prepend('<div class="info-block"><div class="close-button"></div><h2 class="info-box-title">' + point.children(".title").html() + '</h2><p class="info-box-description">' + point.children(".description").html() + '</p></div>');
			$(".info-block").animate({
				opacity: "1"
			}, 500, function () {
				$("#info-box-2").children().each(function (index) {
					if (index != 0) {
						if ($(this).hasClass("intro-text")) {
							$(".intro-text").css("display", "none");
						} else {
							$(this).remove();
						}
					} else {
						$(this).css("z-index", "2");
					}
				});
			});
		});
		$("#info-box-2").on('click', '.close-button', function (e) {
			$(".intro-text").css("display", "inline");
			$(".info-block").animate({
				opacity: "0"
			}, 500, function (index) {
				$(this).css("display", "none");
			});
		});

	});