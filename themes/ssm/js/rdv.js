/* $(document).ready(function () {
createDropDown();

 	$(".dropdown dt a").click(function () {
 		$(".dropdown dd ul").toggle();
 	});

 	$(document).bind('click', function (e) {
 		var $clicked = $(e.target);
 		if (!$clicked.parents().hasClass("dropdown"))
 			$(".dropdown dd ul").hide();
 	});

 	$(".dropdown dd ul li a").click(function () {
 		var text = $(this).html();
 		$(".dropdown dt a").html(text);
 		$(".dropdown dd ul").hide();

 		var source = $("#source");
 		source.val($(this).find("span.value").html())
 	});
 });

 function createDropDown() {
 	var source = $(".form-control");
 	var selected = source.find("option[selected]");
 	var options = $("option", source);

 	$("body").append('<dl id="target" class="dropdown"></dl>')
 	$("#target").append('<dt><a href="#">' + selected.text() +
 		'<span class="value">' + selected.val() +
 		'</span></a></dt>')
 	$("#target").append('<dd><ul></ul></dd>')

 	options.each(function () {
 		$("#target dd ul").append('<li><a href="#">' +
 			$(this).text() + '<span class="value">' +
 			$(this).val() + '</span></a></li>');
 	});
 }
*/
function initMap() {


	const miltonKeynes = {
		lat: 52.038137,
		lng: -0.7751537
	};
	const londonLatLng = {
		lat: 51.5285582,
		lng: -0.2416797
	};
	const parisLatLng = {
		lat: 48.8588377,
		lng: 2.2770206
	};
	var showroomImg = {
		url: "http://dev2.suitsurmesur.com/img/ssm-marker-icon.png", // url
		scaledSize: new google.maps.Size(60, 60), // scaled size
		origin: new google.maps.Point(0, 0), // origin
		/*		anchor: new google.maps.Point(0, 0)
		 */
	};

	var londonImg = {
		url: "http://dev2.suitsurmesur.com/img/big-ben-icon.png", // url
		scaledSize: new google.maps.Size(30, 70), // scaled size
		origin: new google.maps.Point(0, 0), // origin
	};

	var parisImg = {
		url: "http://dev2.suitsurmesur.com/img/eiffel-tower-icon.png", // url
		scaledSize: new google.maps.Size(40, 70), // scaled size
		origin: new google.maps.Point(0, 0), // origin
	};
	var showroomCont = '<div class="info row">' +
		'<div class="col-xs-12">' +
		'<h2>Milton Keynes</h2>' +
		'<h3>Suitsurmesur</h3>' +
		'<p></p>' +
		'</div>' +
		'<div class="col-xs-12">' +
		'<figure>' +
		'<img src="../img/elegant-garments.jpg" alt="showroom">' +
		'</figure>' +
		'</div>' +
		'</div>';
	var londonCont = '<div class="info row">' +
		'<div class="col-xs-12">' +
		'<h2>London</h2>' +
		'<h3>The Athenæum</h3>' +
		'<p>Pall Mall</p>' +
		'</div>' +
		'<div class="col-xs-12">' +
		'<figure>' +
		'<img src="../img/athenaeu_9bb4.jpg" alt="atheaneum">' +
		'</figure>' +
		'</div>' +
		'</div>';
	var parisCont = '<div class="info row">' +
		'<div class="col-xs-12">' +
		'<h2>Paris</h2>' +
		'<h3>The Traveller\'s club</h3>' +
		'<p>25 avenue des Champs Elyées</p>' +
		'</div>' +
		'<div class="col-xs-12">' +
		'<figure>' +
		'<img src="../img/travellers.jpg" alt="travellers club">' +
		'</figure>' +
		'</div>' +
		'</div>';

	var locations = [{
			info: showroomCont,
			latlng: miltonKeynes,
			icon: showroomImg
		},
		{
			info: londonCont,
			latlng: londonLatLng,
			icon: londonImg
		},
		{
			info: parisCont,
			latlng: parisLatLng,
			icon: parisImg
		}
	];
	var map = new google.maps.Map(document.getElementById('map'), {
		center: londonLatLng,
		zoom: 4,
		styles: [{
				"featureType": "all",
				"elementType": "all",
				"stylers": [{
						"saturation": -100
					},
					{
						"gamma": 0.5
					}
				]
			},
			{
				"featureType": "all",
				"elementType": "geometry",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "administrative.country",
				"elementType": "geometry.fill",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "landscape.man_made",
				"elementType": "geometry.fill",
				"stylers": [{
						"visibility": "on"
					},
					{
						"saturation": "-4"
					}
				]
			},
			{
				"featureType": "landscape.man_made",
				"elementType": "geometry.stroke",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#000000"
					},
					{
						"saturation": "66"
					},
					{
						"lightness": "-92"
					},
					{
						"gamma": "1.76"
					},
					{
						"weight": "0.20"
					}
				]
			},
			{
				"featureType": "landscape.man_made",
				"elementType": "labels.text",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "labels",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "transit",
				"elementType": "labels",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "water",
				"elementType": "geometry.fill",
				"stylers": [{
						"visibility": "on"
					},
					{
						"saturation": "40"
					},
					{
						"color": "#434343"
					}
				]
			}
		]
	});
	var infowindow = new google.maps.InfoWindow();

	var latlngbounds = new google.maps.LatLngBounds();
	for (var i = 0; i < locations.length; i++) {
		var marker = new google.maps.Marker({
			icon: locations[i].icon,
			position: locations[i].latlng,
			map: map,
		});
		google.maps.event.addListener(marker, 'click', (function (i) {
			return function () {
				// infowindow.setContent(locations[i].info);
				// infowindow.open(map, marker);
				document.getElementById('card').innerHTML = locations[i].info;
			}
		})(i));

		latlngbounds.extend(marker.position);
		//Center map and adjust Zoom based on the position of all markers.
		if (latlngbounds.getNorthEast().equals(latlngbounds.getSouthWest())) {
			var extendPoint = new google.maps.LatLng(latlngbounds.getNorthEast().lat() + 0.01, latlngbounds.getNorthEast().lng() + 0.01);
			latlngbounds.extend(extendPoint);
		}

		map.fitBounds(latlngbounds);
		map.setCenter(latlngbounds.getCenter());

	}
}