(function ($) {

    // GDP by country
    $.fn.tkVectorWorldMapGDP = function () {

        if (! this.length) return;

        var gdpData = window.jVectorMapGdpData;

        if (gdpData === undefined) return;

        this.vectorMap({
            map: 'world_mill_en',
            zoomOnScroll: false,
            backgroundColor: "#fff",
            series: {
                regions: [ {
                    values: gdpData,
                    scale: [ colors[ 'primary-color' ], colors[ 'info-color' ] ],
                    normalizeFunction: 'polynomial'
                } ]
            },
            onLabelShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[ code ] + ')');
            }
        });
    };

    // World map markers
    $.fn.tkVectorWorldMapMarkers = function () {

        if (! this.length) return;

        this.vectorMap({
            map: 'world_mill_en',
            regionStyle: {
                initial: {
                    fill: colors[ 'grey-300' ]
                }
            },
            zoomOnScroll: false,
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            markerStyle: {
                initial: {
                    fill: colors[ 'primary-color' ],
                    stroke: '#fff'
                }
            },
            backgroundColor: "#fff",
            markers: [
                {latLng: [ 41.90, 12.45 ], name: 'Vatican City'},
                {latLng: [ 43.73, 7.41 ], name: 'Monaco'},
                {latLng: [ - 0.52, 166.93 ], name: 'Nauru'},
                {latLng: [ - 8.51, 179.21 ], name: 'Tuvalu'},
                {latLng: [ 43.93, 12.46 ], name: 'San Marino'},
                {latLng: [ 47.14, 9.52 ], name: 'Liechtenstein'},
                {latLng: [ 7.11, 171.06 ], name: 'Marshall Islands'},
                {latLng: [ 17.3, - 62.73 ], name: 'Saint Kitts and Nevis'},
                {latLng: [ 3.2, 73.22 ], name: 'Maldives'},
                {latLng: [ 35.88, 14.5 ], name: 'Malta'},
                {latLng: [ 12.05, - 61.75 ], name: 'Grenada'},
                {latLng: [ 13.16, - 61.23 ], name: 'Saint Vincent and the Grenadines'},
                {latLng: [ 13.16, - 59.55 ], name: 'Barbados'},
                {latLng: [ 17.11, - 61.85 ], name: 'Antigua and Barbuda'},
                {latLng: [ - 4.61, 55.45 ], name: 'Seychelles'},
                {latLng: [ 7.35, 134.46 ], name: 'Palau'},
                {latLng: [ 42.5, 1.51 ], name: 'Andorra'},
                {latLng: [ 14.01, - 60.98 ], name: 'Saint Lucia'},
                {latLng: [ 6.91, 158.18 ], name: 'Federated States of Micronesia'},
                {latLng: [ 1.3, 103.8 ], name: 'Singapore'},
                {latLng: [ 1.46, 173.03 ], name: 'Kiribati'},
                {latLng: [ - 21.13, - 175.2 ], name: 'Tonga'},
                {latLng: [ 15.3, - 61.38 ], name: 'Dominica'},
                {latLng: [ - 20.2, 57.5 ], name: 'Mauritius'},
                {latLng: [ 26.02, 50.55 ], name: 'Bahrain'},
                {latLng: [ 0.33, 6.73 ], name: 'So Tom and Prncipe'}
            ]
        });
    };

    // USA unemployment
    $.fn.tkVectorUSAUnemployment = function () {

        if (! this.length) return;

        var container = this;

        $.getJSON('assets/data/vector-maps/data/us-unemployment.json', function (data) {

            var val = 2009,
                statesValues = jvm.values.apply({}, jvm.values(data.states)),
                metroPopValues = Array.prototype.concat.apply([], jvm.values(data.metro.population)),
                metroUnemplValues = Array.prototype.concat.apply([], jvm.values(data.metro.unemployment));

            container.vectorMap({
                map: 'us_aea_en',
                markers: data.metro.coords,
                backgroundColor: "#fff",
                zoomOnScroll: false,
                series: {
                    markers: [ {
                        attribute: 'fill',
                        scale: [ colors[ 'danger-color' ] ],
                        values: data.metro.unemployment[ val ],
                        min: jvm.min(metroUnemplValues),
                        max: jvm.max(metroUnemplValues)
                    }, {
                        attribute: 'r',
                        scale: [ 5, 20 ],
                        values: data.metro.population[ val ],
                        min: jvm.min(metroPopValues),
                        max: jvm.max(metroPopValues)
                    } ],
                    regions: [ {
                        scale: [ colors[ 'primary-color' ], colors[ 'info-color' ] ],
                        attribute: 'fill',
                        values: data.states[ val ],
                        min: jvm.min(statesValues),
                        max: jvm.max(statesValues)
                    } ]
                },
                onMarkerLabelShow: function (event, label, index) {
                    label.html(
                        '<b>' + data.metro.names[ index ] + '</b><br/>' +
                        '<b>Population: </b>' + data.metro.population[ val ][ index ] + '</br>' +
                        '<b>Unemployment rate: </b>' + data.metro.unemployment[ val ][ index ] + '%'
                    );
                },
                onRegionLabelShow: function (event, label, code) {
                    label.html(
                        '<b>' + label.html() + '</b></br>' +
                        '<b>Unemployment rate: </b>' + data.states[ val ][ code ] + '%'
                    );
                }
            });
        });
    };

    // regions selection
    $.fn.tkVectorRegionSelection = function () {

        if (! this.length) return;

        var container = this,

            map = new jvm.Map({
                container: container,
                map: 'de_merc_en',
                regionsSelectable: true,
                markersSelectable: true,
                backgroundColor: "#fff",
                zoomOnScroll: false,
                markers: [
                    {latLng: [ 52.50, 13.39 ], name: 'Berlin'},
                    {latLng: [ 53.56, 10.00 ], name: 'Hamburg'},
                    {latLng: [ 48.13, 11.56 ], name: 'Munich'},
                    {latLng: [ 50.95, 6.96 ], name: 'Cologne'},
                    {latLng: [ 50.11, 8.68 ], name: 'Frankfurt am Main'},
                    {latLng: [ 48.77, 9.17 ], name: 'Stuttgart'},
                    {latLng: [ 51.23, 6.78 ], name: 'Dusseldorf'},
                    {latLng: [ 51.51, 7.46 ], name: 'Dortmund'},
                    {latLng: [ 51.45, 7.01 ], name: 'Essen'},
                    {latLng: [ 53.07, 8.80 ], name: 'Bremen'}
                ],
                markerStyle: {
                    initial: {
                        fill: colors[ 'danger-color' ]
                    },
                    selected: {
                        fill: colors[ 'success-color' ]
                    }
                },
                regionStyle: {
                    initial: {
                        fill: colors[ 'primary-color' ]
                    },
                    selected: {
                        fill: colors[ 'default-color' ]
                    }
                },
                series: {
                    markers: [ {
                        attribute: 'r',
                        scale: [ 5, 15 ],
                        values: [
                            887.70,
                            755.16,
                            310.69,
                            405.17,
                            248.31,
                            207.35,
                            217.22,
                            280.71,
                            210.32,
                            325.42
                        ]
                    } ]
                },
                onRegionSelected: function () {
                    if (window.localStorage) {
                        window.localStorage.setItem(
                            'jvectormap-selected-regions',
                            JSON.stringify(map.getSelectedRegions())
                        );
                    }
                },
                onMarkerSelected: function () {
                    if (window.localStorage) {
                        window.localStorage.setItem(
                            'jvectormap-selected-markers',
                            JSON.stringify(map.getSelectedMarkers())
                        );
                    }
                }
            });
        map.setSelectedRegions(JSON.parse(window.localStorage.getItem('jvectormap-selected-regions') || '[]'));
        map.setSelectedMarkers(JSON.parse(window.localStorage.getItem('jvectormap-selected-markers') || '[]'));
    };

    // France elections
    $.fn.tkVectorFranceElections = function () {

        if (! this.length) return;

        $.getJSON('assets/data/vector-maps/data/france-elections.json', function (data) {
            new jvm.Map({
                map: 'fr_merc_en',
                backgroundColor: "#fff",
                container: $('#france-2007'),
                zoomOnScroll: false,
                series: {
                    regions: [ {
                        scale: {
                            '1': colors[ 'primary-color' ],
                            '2': colors[ 'danger-color' ]
                        },
                        attribute: 'fill',
                        values: data.year2007.results
                    } ]
                }
            });

            new jvm.Map({
                map: 'fr_merc_en',
                container: $('#france-2012'),
                backgroundColor: "#fff",
                zoomOnScroll: false,
                series: {
                    regions: [ {
                        scale: {
                            '1': colors[ 'primary-color' ],
                            '2': colors[ 'danger-color' ]
                        },
                        attribute: 'fill',
                        values: data.year2012.results
                    } ]
                }
            });
        });
    };

    // random colors
    var palette = [ colors[ 'danger-color' ], colors[ 'primary-color' ], colors[ 'success-color' ], colors[ 'warning-color' ], colors[ 'info-color' ], colors[ 'secondary-color' ] ], colorsMap;

    var generateColors = function () {
        var colors = {},
            key;

        for (key in colorsMap.regions) {
            colors[ key ] = palette[ Math.floor(Math.random() * palette.length) ];
        }
        return colors;
    };

    $.fn.tkVectorRandomColors = function () {

        if (! this.length) return;

        colorsMap = new jvm.Map({
            map: 'es_merc_en',
            backgroundColor: "#fff",
            container: this,
            zoomOnScroll: false,
            series: {
                regions: [ {
                    attribute: 'fill'
                } ]
            }
        });

        colorsMap.series.regions[ 0 ].setValues(generateColors());

        $('#update-colors-button').click(function (e) {
            e.preventDefault();
            colorsMap.series.regions[ 0 ].setValues(generateColors());
        });

    };

    // mall map
    $.fn.tkVectorMallMap = function () {

        if (! this.length) return;

        this.vectorMap({
            map: 'mall',
            backgroundColor: "#fff",
            zoomOnScroll: false,
            markers: [ {
                coords: [ 60, 110 ],
                name: 'Escalator 1',
                style: {fill: colors[ 'danger-color' ], stroke: "#fff"}
            }, {
                coords: [ 260, 95 ],
                name: 'Escalator 2',
                style: {fill: colors[ 'danger-color' ], stroke: "#fff"}
            }, {
                coords: [ 434, 95 ],
                name: 'Escalator 3',
                style: {fill: colors[ 'danger-color' ], stroke: "#fff"}
            }, {
                coords: [ 634, 110 ],
                name: 'Escalator 4',
                style: {fill: colors[ 'danger-color' ], stroke: "#fff"}
            } ],
            series: {
                regions: [ {
                    values: {
                        F102: 'SPORTS & OUTDOOR',
                        F103: 'HOME DECOR',
                        F105: 'FASHION',
                        F106: 'OTHER',
                        F108: 'BEAUTY & SPA',
                        F109: 'FASHION',
                        F110: 'BEAUTY & SPA',
                        F111: 'URBAN FAVORITES',
                        F114: 'SERVICES',
                        F166: 'DINING',
                        F167: 'FASHION',
                        F169: 'DINING',
                        F170: 'ENTERTAINMENT',
                        F172: 'DINING',
                        F174: 'DINING',
                        F115: 'KIDS STUFF',
                        F117: 'LIFESTYLE',
                        F118: 'URBAN FAVORITES',
                        F119: 'FASHION',
                        F120: 'FASHION',
                        F122: 'KIDS STUFF',
                        F124: 'KIDS STUFF',
                        F125: 'KIDS STUFF',
                        F126: 'KIDS STUFF',
                        F128: 'KIDS STUFF',
                        F129: 'LIFESTYLE',
                        F130: 'HOME DECOR',
                        F132: 'DINING',
                        F133: 'SPORTS & OUTDOOR',
                        F134: 'KIDS STUFF',
                        F135: 'LIFESTYLE',
                        F136: 'LIFESTYLE',
                        F139: 'KIDS STUFF',
                        F153: 'DINING',
                        F155: 'FASHION',
                        F156: 'URBAN FAVORITES',
                        F157: 'URBAN FAVORITES',
                        F158: 'LINGERIE & UNDERWEAR',
                        F159: 'FASHION',
                        F160: 'FASHION',
                        F162: 'FASHION',
                        F164: 'FASHION',
                        F165: 'FASHION',
                        FR01: 'REST ROOMS',
                        FR02: 'REST ROOMS',
                        FR03: 'REST ROOMS',
                        FR04: 'REST ROOMS',
                        FFC: 'DINING'
                    },
                    scale: {
                        "FASHION": "#2761ad",
                        "LINGERIE & UNDERWEAR": "#d58aa3",
                        "BEAUTY & SPA": colors[ 'info-color' ],
                        "URBAN FAVORITES": colors[ 'red-300' ],
                        "SPORTS & OUTDOOR": colors[ 'info-color' ],
                        "KIDS STUFF": colors[ 'purple-500' ],
                        "ENTERTAINMENT": colors[ 'success-color' ],
                        "HOME DECOR": colors[ 'grey-400' ],
                        "LIFESTYLE": colors[ 'warning-color' ],
                        "DINING": colors[ 'success-color' ],
                        "REST ROOMS": colors[ 'grey-200' ],
                        "SERVICES": colors[ 'grey-300' ],
                        "OTHER": colors[ 'grey-500' ]
                    }
                } ]
            },
            onRegionLabelShow: function (e, el, code) {
                if (el.html() === '') {
                    e.preventDefault();
                }
            }
        });
    };

    // reverse projection map
    $.fn.tkVectorProjectionMap = function () {

        if (! this.length) return;

        var mapProjection,
            markerIndex = 0,
            markersCoords = {};

        mapProjection = new jvm.Map({
            map: 'us_lcc_en',
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: colors[ 'primary-color' ]
                }
            },
            backgroundColor: "#fff",
            markerStyle: {
                initial: {
                    fill: 'red'
                }
            },
            container: this,
            onMarkerLabelShow: function (e, label, code) {
                mapProjection.label.text(markersCoords[ code ].lat.toFixed(2) + ', ' + markersCoords[ code ].lng.toFixed(2));
            },
            onMarkerClick: function (e, code) {
                mapProjection.removeMarkers([ code ]);
                mapProjection.label.hide();
            }
        });

        mapProjection.container.click(function (e) {
            var latLng = mapProjection.pointToLatLng(e.offsetX, e.offsetY),
                targetCls = $(e.target).attr('class');

            if (latLng && (! targetCls || (targetCls && $(e.target).attr('class').indexOf('jvectormap-marker') === - 1))) {
                markersCoords[ markerIndex ] = latLng;
                mapProjection.addMarker(markerIndex, {latLng: [ latLng.lat, latLng.lng ]});
                markerIndex += 1;
            }
        });
    };

    $('[data-toggle="vector-world-map-gdp"]').tkVectorWorldMapGDP();
    $('[data-toggle="vector-world-map-markers"]').tkVectorWorldMapMarkers();
    $('[data-toggle="vector-usa-unemployment"]').tkVectorUSAUnemployment();
    $('[data-toggle="vector-region-selection"]').tkVectorRegionSelection();
    $('[data-toggle="vector-france-elections"]').tkVectorFranceElections();
    $('[data-toggle="vector-random-colors"]').tkVectorRandomColors();
    $('[data-toggle="vector-mall-map"]').tkVectorMallMap();
    $('[data-toggle="vector-projection-map"]').tkVectorProjectionMap();

})(jQuery);