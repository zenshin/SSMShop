	function initMap() {

		var miltonKeynes = {
			lat: 51.501211,
			lng: -0.126747
		};
		var map = new google.maps.Map(document.getElementById('map'), {
			center: miltonKeynes,
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
		var showroom = new google.maps.Marker({
			position: miltonKeynes,
			map: map
		});
	};