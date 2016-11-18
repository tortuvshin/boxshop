if ($('#map-single').length > 0) {
	
	var data = [{
			"lat": $('#map-single').data('lat'),
			"lng": $('#map-single').data('lng')
		}];

	var myMap = function() {

		var options = {
			zoom: 12,
			center: new google.maps.LatLng(data[0].lat,data[0].lng),
			//mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles:
					[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color": colors['primary-color']},{"visibility":"on"}]}]
		}

		/*
		 Load the map then markers
		 @param object settings (configuration options for map)
		 @return undefined
		 */
		function init(settings) {
			map = new google.maps.Map(document.getElementById( settings.idSelector ), options);
			markerLocation = settings.markerLocation;
			loadMarkers();
		}

		/*
		 =======
		 MARKERS
		 =======
		 */
		markers = {};
		markerList = [];

		/*
		 Load markers onto the Google Map from a provided array or demo personData (data.js)
		 @param array personList [optional] (list of people to load)
		 @return undefined
		 */
		function loadMarkers(personList) {
			// optional argument of person
			var people = ( typeof personList !== 'undefined' ) ? personList : data;

			var j = 1; // for lorempixel

			for( i=0; i < people.length; i++ ) {
				var person = people[i];

				// if its already on the map, dont put it there again
				if( markerList.indexOf(person.id) !== -1 ) continue;

				var lat = person.lat,
						lng = person.lng,
						markerId = person.id;

				var infoWindow = new google.maps.InfoWindow({
					maxWidth: 400
				});

				var marker = new google.maps.Marker({
					position: new google.maps.LatLng( lat, lng ),
					markerId: markerId,
					icon: markerLocation,
					map: map
				});

				markers[markerId] = marker;
				markerList.push(person.id);

				if( j > 10 ) j = 1; // for lorempixel, the thumbnail image
				var content = ['<div class="map-box"><img src="http://lorempixel.com/90/90/people/',
					j, '" width="90" height="90">', '<div class="iw-text"><h4 class="margin-none">', person.name,
					'</h4>Age: ', person.age, '<br/>Followers: ', person.followers,
					'<br/>College: ', person.college, '</div></div>'].join('');
				j++; // lorempixel

				google.maps.event.addListener(marker, 'click', (function (marker, content) {
					return function() {
						infoWindow.setContent(content);
						infoWindow.open(map, marker);
					}
				})(marker, content));
			}
		}

		/*
		 Remove marker from map and our list of current markers
		 @param int id (id of the marker element)
		 @return undefined
		 */
		function removePersonMarker(id) {
			if( markers[id] ) {
				markers[id].setMap(null);
				loc = markerList.indexOf(id);
				if (loc > -1) markerList.splice(loc, 1);
				delete markers[id];
			}
		}

		return {
			init: init,
			loadMarkers: loadMarkers
		};
	}();
}

(function($) {

	if ($('#map-single').length > 0) {
		var mapConfig = {
			idSelector: 'map-single',
			markerLocation: 'assets/images/markers/marker.png'
		}
		myMap.init(mapConfig);
	}
}(jQuery));