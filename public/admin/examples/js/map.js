if ($('#map-canvas').length > 0) {
	var personData = [
		{
			"id": 0,
			"name": "Lynnette Gibson",
			"age": 75,
			"followers": 55,
			"occupation": "amet commodo",
			"from": "Michigan",
			"college": "FSU",
			"lat": 36.848384,
			"lng": -88.486336
		},
		{
			"id": 1,
			"name": "Carla Reese",
			"age": 33,
			"followers": 41,
			"occupation": "pariatur aute",
			"from": "National",
			"college": "MTU",
			"lat": 34.757467,
			"lng": -117.289205
		},
		{
			"id": 2,
			"name": "Mccarthy Blevins",
			"age": 58,
			"followers": 47,
			"occupation": "qui laborum",
			"from": "National",
			"college": "MSU",
			"lat": 40.096377,
			"lng": -118.61762
		},
		{
			"id": 3,
			"name": "Geneva Holcomb",
			"age": 62,
			"followers": 66,
			"occupation": "adipisicing nostrud",
			"from": "National",
			"college": "CMU",
			"lat": 40.113991,
			"lng": -82.080224
		},
		{
			"id": 4,
			"name": "Parker Campbell",
			"age": 41,
			"followers": 32,
			"occupation": "et sit",
			"from": "Michigan",
			"college": "UM",
			"lat": 35.552591,
			"lng": -86.801539
		},
		{
			"id": 5,
			"name": "Osborne Briggs",
			"age": 41,
			"followers": 60,
			"occupation": "ad ipsum",
			"from": "National",
			"college": "FSU",
			"lat": 32.497364,
			"lng": -115.930087
		},
		{
			"id": 6,
			"name": "Tanisha Mercado",
			"age": 30,
			"followers": 12,
			"occupation": "culpa reprehenderit",
			"from": "Michigan",
			"college": "MTU",
			"lat": 34.5362,
			"lng": -114.237048
		},
		{
			"id": 7,
			"name": "Lacy Graves",
			"age": 25,
			"followers": 59,
			"occupation": "ut laboris",
			"from": "Michigan",
			"college": "MSU",
			"lat": 33.865981,
			"lng": -119.604591
		},
		{
			"id": 8,
			"name": "Martina Weeks",
			"age": 31,
			"followers": 42,
			"occupation": "amet laborum",
			"from": "National",
			"college": "UM",
			"lat": 36.149757,
			"lng": -108.240607
		},
		{
			"id": 9,
			"name": "Raymond Gregory",
			"age": 72,
			"followers": 56,
			"occupation": "eiusmod dolor",
			"from": "Michigan",
			"college": "MSU",
			"lat": 36.824384,
			"lng": -80.740186
		},
		{
			"id": 10,
			"name": "Candy Hewitt",
			"age": 20,
			"followers": 24,
			"occupation": "sunt sint",
			"from": "National",
			"college": "MTU",
			"lat": 37.908543,
			"lng": -102.77804
		},
		{
			"id": 11,
			"name": "Loraine Holden",
			"age": 38,
			"followers": 8,
			"occupation": "aliqua sint",
			"from": "Michigan",
			"college": "UM",
			"lat": 41.907026,
			"lng": -77.571907
		},
		{
			"id": 12,
			"name": "Leona Keith",
			"age": 76,
			"followers": 55,
			"occupation": "commodo qui",
			"from": "Michigan",
			"college": "MSU",
			"lat": 34.850248,
			"lng": -81.706418
		},
		{
			"id": 13,
			"name": "Brianna Gilbert",
			"age": 44,
			"followers": 21,
			"occupation": "in in",
			"from": "National",
			"college": "FSU",
			"lat": 38.986633,
			"lng": -77.58432
		},
		{
			"id": 14,
			"name": "Roxanne Finch",
			"age": 46,
			"followers": 69,
			"occupation": "exercitation sit",
			"from": "Michigan",
			"college": "CMU",
			"lat": 39.392528,
			"lng": -79.900012
		},
		{
			"id": 15,
			"name": "Obrien Soto",
			"age": 44,
			"followers": 67,
			"occupation": "esse sint",
			"from": "National",
			"college": "UM",
			"lat": 39.653625,
			"lng": -118.912713
		},
		{
			"id": 16,
			"name": "Erma Hopper",
			"age": 45,
			"followers": 33,
			"occupation": "sint velit",
			"from": "Michigan",
			"college": "FSU",
			"lat": 42.112884,
			"lng": -91.958919
		},
		{
			"id": 17,
			"name": "England Pope",
			"age": 39,
			"followers": 40,
			"occupation": "officia anim",
			"from": "Michigan",
			"college": "MTU",
			"lat": 41.685131,
			"lng": -111.740279
		},
		{
			"id": 18,
			"name": "Booth Cotton",
			"age": 85,
			"followers": 75,
			"occupation": "et aliquip",
			"from": "National",
			"college": "MSU",
			"lat": 37.622846,
			"lng": -86.781389
		},
		{
			"id": 19,
			"name": "Alejandra Burnett",
			"age": 40,
			"followers": 77,
			"occupation": "id nostrud",
			"from": "Michigan",
			"college": "FSU",
			"lat": 33.349217,
			"lng": -83.404649
		},
		{
			"id": 20,
			"name": "Mack Patrick",
			"age": 34,
			"followers": 34,
			"occupation": "sint non",
			"from": "National",
			"college": "MTU",
			"lat": 39.343341,
			"lng": -78.541177
		},
		{
			"id": 21,
			"name": "Lee David",
			"age": 60,
			"followers": 69,
			"occupation": "voluptate duis",
			"from": "Michigan",
			"college": "UM",
			"lat": 34.788327,
			"lng": -81.066577
		},
		{
			"id": 22,
			"name": "Mallory Acevedo",
			"age": 31,
			"followers": 47,
			"occupation": "eu pariatur",
			"from": "National",
			"college": "MTU",
			"lat": 35.167321,
			"lng": -115.169422
		},
		{
			"id": 23,
			"name": "Klein Beard",
			"age": 83,
			"followers": 20,
			"occupation": "duis voluptate",
			"from": "National",
			"college": "UM",
			"lat": 36.303051,
			"lng": -87.086745
		},
		{
			"id": 24,
			"name": "Erickson Bryan",
			"age": 47,
			"followers": 16,
			"occupation": "ipsum ex",
			"from": "Michigan",
			"college": "CMU",
			"lat": 40.498517,
			"lng": -102.575022
		},
		{
			"id": 25,
			"name": "Charity Vaughan",
			"age": 69,
			"followers": 27,
			"occupation": "dolore incididunt",
			"from": "Michigan",
			"college": "FSU",
			"lat": 35.905567,
			"lng": -84.885839
		},
		{
			"id": 26,
			"name": "Holden Rowland",
			"age": 67,
			"followers": 53,
			"occupation": "aliqua voluptate",
			"from": "National",
			"college": "UM",
			"lat": 43.638299,
			"lng": -93.387752
		},
		{
			"id": 27,
			"name": "Miller Roach",
			"age": 31,
			"followers": 34,
			"occupation": "dolore anim",
			"from": "Michigan",
			"college": "MSU",
			"lat": 32.035638,
			"lng": -113.605988
		},
		{
			"id": 28,
			"name": "Ellison Stephens",
			"age": 35,
			"followers": 28,
			"occupation": "laboris quis",
			"from": "National",
			"college": "MSU",
			"lat": 41.381184,
			"lng": -87.383892
		},
		{
			"id": 29,
			"name": "Chasity Strickland",
			"age": 42,
			"followers": 40,
			"occupation": "minim id",
			"from": "Michigan",
			"college": "MTU",
			"lat": 32.141313,
			"lng": -93.564034
		},
		{
			"id": 30,
			"name": "Holt Tanner",
			"age": 40,
			"followers": 56,
			"occupation": "consectetur fugiat",
			"from": "Michigan",
			"college": "MTU",
			"lat": 42.593587,
			"lng": -117.906105
		},
		{
			"id": 31,
			"name": "Hutchinson Dejesus",
			"age": 29,
			"followers": 28,
			"occupation": "Lorem occaecat",
			"from": "National",
			"college": "MSU",
			"lat": 39.44406,
			"lng": -82.69064
		},
		{
			"id": 32,
			"name": "Carmella Ferrell",
			"age": 34,
			"followers": 62,
			"occupation": "occaecat id",
			"from": "Michigan",
			"college": "UM",
			"lat": 42.00958,
			"lng": -90.231567
		},
		{
			"id": 33,
			"name": "Hahn Grimes",
			"age": 55,
			"followers": 46,
			"occupation": "ex commodo",
			"from": "Michigan",
			"college": "FSU",
			"lat": 42.34232,
			"lng": -79.592458
		},
		{
			"id": 34,
			"name": "Lowe Waters",
			"age": 80,
			"followers": 44,
			"occupation": "reprehenderit laboris",
			"from": "National",
			"college": "MTU",
			"lat": 34.932002,
			"lng": -118.502849
		},
		{
			"id": 35,
			"name": "Harrell Riley",
			"age": 59,
			"followers": 72,
			"occupation": "Lorem labore",
			"from": "National",
			"college": "FSU",
			"lat": 39.350606,
			"lng": -114.411983
		},
		{
			"id": 36,
			"name": "Pugh Dillon",
			"age": 20,
			"followers": 41,
			"occupation": "pariatur tempor",
			"from": "National",
			"college": "UM",
			"lat": 37.866368,
			"lng": -103.48079
		},
		{
			"id": 37,
			"name": "Alana Hubbard",
			"age": 61,
			"followers": 79,
			"occupation": "quis nisi",
			"from": "Michigan",
			"college": "UM",
			"lat": 32.095524,
			"lng": -117.575783
		},
		{
			"id": 38,
			"name": "Mia Barton",
			"age": 30,
			"followers": 18,
			"occupation": "nostrud officia",
			"from": "Michigan",
			"college": "CMU",
			"lat": 37.961815,
			"lng": -101.265092
		},
		{
			"id": 39,
			"name": "Ernestine Lindsey",
			"age": 34,
			"followers": 18,
			"occupation": "sit et",
			"from": "National",
			"college": "MTU",
			"lat": 34.832379,
			"lng": -90.592477
		},
		{
			"id": 40,
			"name": "Malinda Nicholson",
			"age": 35,
			"followers": 25,
			"occupation": "proident sit",
			"from": "National",
			"college": "UM",
			"lat": 38.483102,
			"lng": -94.564797
		},
		{
			"id": 41,
			"name": "Selma Mcfarland",
			"age": 54,
			"followers": 40,
			"occupation": "sint qui",
			"from": "National",
			"college": "MSU",
			"lat": 38.233746,
			"lng": -80.296596
		},
		{
			"id": 42,
			"name": "Christie Lopez",
			"age": 57,
			"followers": 22,
			"occupation": "officia cillum",
			"from": "National",
			"college": "FSU",
			"lat": 36.426758,
			"lng": -86.48565
		},
		{
			"id": 43,
			"name": "Torres Alvarez",
			"age": 65,
			"followers": 64,
			"occupation": "qui anim",
			"from": "Michigan",
			"college": "MSU",
			"lat": 41.175339,
			"lng": -98.782334
		},
		{
			"id": 44,
			"name": "Garcia Everett",
			"age": 66,
			"followers": 62,
			"occupation": "esse laboris",
			"from": "Michigan",
			"college": "MTU",
			"lat": 39.830745,
			"lng": -87.660778
		},
		{
			"id": 45,
			"name": "Goodwin Heath",
			"age": 74,
			"followers": 41,
			"occupation": "mollit laboris",
			"from": "National",
			"college": "MTU",
			"lat": 38.80118,
			"lng": -115.886799
		},
		{
			"id": 46,
			"name": "Patel Wong",
			"age": 65,
			"followers": 29,
			"occupation": "dolor occaecat",
			"from": "Michigan",
			"college": "MTU",
			"lat": 33.693607,
			"lng": -101.083627
		},
		{
			"id": 47,
			"name": "Hays Castillo",
			"age": 69,
			"followers": 54,
			"occupation": "ipsum dolore",
			"from": "Michigan",
			"college": "UM",
			"lat": 37.483607,
			"lng": -94.57343
		},
		{
			"id": 48,
			"name": "Bernadine Doyle",
			"age": 68,
			"followers": 19,
			"occupation": "ad nisi",
			"from": "National",
			"college": "FSU",
			"lat": 35.033456,
			"lng": -79.105348
		},
		{
			"id": 49,
			"name": "Larsen Murphy",
			"age": 61,
			"followers": 69,
			"occupation": "elit quis",
			"from": "National",
			"college": "MSU",
			"lat": 40.829281,
			"lng": -107.325249
		}
	]

	var myMap = function() {

		var options = {
			zoom: 4,
			center: new google.maps.LatLng(38.810821,-95.053711),
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
			var people = ( typeof personList !== 'undefined' ) ? personList : personData;

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
					title: person.name,
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

		/*
		 ======
		 FILTER
		 ======
		 */

		// default all filters off
		var filter = {
			followers: 0,
			college: 0,
			from: 0
		}
		var filterMap;

		/*
		 Helper function
		 @param array a (array of arrays)
		 @return array (common elements from all arrays)
		 */
		function reduceArray(a) {
			r = a.shift().reduce(function(res, v) {
				if (res.indexOf(v) === -1 && a.every(function(a) {
					return a.indexOf(v) !== -1;
				})) res.push(v);
				return res;
			}, []);
			return r;
		}

		/*
		 Helper function
		 @param string n
		 @return bool
		 */
		function isInt(n) {
			return n % 1 === 0;
		}
		
		/*
		 Decides which filter function to call and stacks all filters together
		 @param string filterType (the property that will be filtered upon)
		 @param string value (selected filter value)
		 @return undefined
		 */
		function filterCtrl(filterType, value) {
			// result array
			var results = [];
			if( isInt(value) ) {
				filter[filterType] = parseInt(value);
			} else {
				filter[filterType] = value;
			}

			for( k in filter ) {
				if( !filter.hasOwnProperty(k) && !( filter[k] !== 0 ) ) {
					// all the filters are off
					loadMarkers();
					return false;
				} else if ( filter[k] !== 0 ) {
					// call filterMap function and append to r array
					results.push( filterMap[k]( filter[k] ) );
				} else {
					// fail silently
				}
			}

			if( filter[filterType] === 0 ) results.push( personData );

			/*
			 if there is 1 array (1 filter applied) set it,
			 else find markers that are common to every results array (pass every filter)
			 */
			if( results.length === 1 ) {
				results = results[0];
			} else {
				results = reduceArray( results );
			}
			loadMarkers( results );
		}

		/*
		 The keys in this need to be mapped 1-to-1 with the keys in the filter variable.
		 */
		filterMap = {
			followers: function( value ) {
				return filterIntsLessThan('followers', value);
			},

			college: function( value ) {
				return filterByString('college', value);
			},

			from: function( value ) {
				return filterByString('from', value);
			}
		}

		/*
		 Filters marker data based upon a string match
		 @param string dataProperty (the key that will be filtered upon)
		 @param string value (selected filter value)
		 @return array (people that made it through the filter)
		 */
		function filterByString( dataProperty, value ) {
			var people = [];

			for( var i=0; i < personData.length; i++ ) {
				var person = personData[i];
				if( person[dataProperty] == value ) {
					people.push( person );
				} else {
					removePersonMarker( person.id );
				}
			}
			return people;
		}

		/*
		 Filters out integers that are under the provided value
		 @param string dataProperty (the key that will be filtered upon)
		 @param int value (selected filter value)
		 @return array (people that made it through the filter)
		 */
		function filterIntsLessThan( dataProperty, value ) {
			var people = [];

			for( var i=0; i < personData.length; i++ ) {
				var person = personData[i];
				if( person[dataProperty] > value ) {
					people.push( person )
				} else {
					removePersonMarker( person.id );
				}
			}
			return people;
		}

		// Takes all the filters off
		function resetFilter() {
			filter = {
				followers: 0,
				college: 0,
				from: 0
			}
		}

		return {
			init: init,
			loadMarkers: loadMarkers,
			filterCtrl: filterCtrl,
			resetFilter: resetFilter
		};
	}();
}
(function($) {

	if ($('#map-canvas').length > 0) {
		var mapConfig = {
			idSelector: 'map-canvas',
			markerLocation: 'assets/images/markers/marker.png'
		}
		myMap.init(mapConfig);

		$('.load-btn').on('click', function () {
			var $this = $(this);
			// reset everything
			$('select').val(0);
			myMap.resetFilter();
			myMap.loadMarkers();

			if ($this.hasClass('is-success')) {
				$this.removeClass('is-success').addClass('is-default');
			}
		});

		$('.followers-select').on('change', function () {
			myMap.filterCtrl('followers', this.value);
		});

		$('.college-select').on('change', function () {
			myMap.filterCtrl('college', this.value);
		});

		$('.from-select').on('change', function () {
			myMap.filterCtrl('from', this.value);
		});
	}
}(jQuery));