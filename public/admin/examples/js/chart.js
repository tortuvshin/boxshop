(function ($) {
	if ($('#stats').length) {
		new Morris.Bar({
			element: 'stats',
			data: [
				{ y: '2006', a: 100 },
				{ y: '2007', a: 75 },
				{ y: '2008', a: 50 },
				{ y: '2009', a: 75 },
				{ y: '2010', a: 50 },
				{ y: '2011', a: 75 },
				{ y: '2012', a: 100 },
				{ y: '2013', a: 200 },
				{ y: '2014', a: 300 },
				{ y: '2015', a: 260 },
				{ y: '2016', a: 40}
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Sales'],
			barColors: [ colors[ 'chart-primary' ] ],
			barShape: 'soft',
			xLabelMargin: 10,
			resize: true
		});
	}
	
	if ($('#line1').length) {
		new Morris.Line({
			element: 'line1',
			data: [
				{ y: '2008', a: 150, b:50 },
				{ y: '2009', a: 75, b:90 },
				{ y: '2010', a: 200, b:120 },
				{ y: '2011', a: 75, b:340 },
				{ y: '2012', a: 130, b:60 }
			],
			xkey: 'y',
			ykeys: ['a', 'b'],
			labels: ['New', 'Resolved'],
			lineColors: [ colors[ 'chart-primary' ], colors[ 'chart-secondary' ]],
			resize: true
		});
	}

	if ($('#bar2').length) {
		new Morris.Bar({
			element: 'bar2',
			data: [
				{ y: '2006', a: 100 },
				{ y: '2007', a: 75 },
				{ y: '2008', a: 50 },
				{ y: '2009', a: 75 },
				{ y: '2010', a: 50 },
				{ y: '2011', a: 75 },
				{ y: '2012', a: 100 },
				{ y: '2013', a: 200 },
				{ y: '2014', a: 300 },
				{ y: '2015', a: 260 },
				{ y: '2016', a: 40 }
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Sales'],
			barColors: [ colors[ 'chart-primary' ] ],
			barShape: 'soft',
			xLabelMargin: 10,
			resize: true
		});
	}

	if ($('#bar').length) {
		new Morris.Bar({
			element: 'bar',
			data: [
				{ y: 'January', a: 100 },
				{ y: 'February', a: 75 },
				{ y: 'March', a: 50 },
				{ y: 'April', a: 75 },
				{ y: 'May', a: 90 },
				{ y: 'June', a: 50 },
				{ y: 'July', a: 75 },
				{ y: 'August', a: 100 },
				{ y: 'September', a: 200 },
				{ y: 'October', a: 300 },
				{ y: 'November', a: 260 },
				{ y: 'December', a: 40}
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Sales'],
			barColors: [ colors[ 'chart-primary' ] ],
			barShape: 'soft',
			xLabelMargin: 10,
			resize: true
		});
	}

	if ($('#line').length) {
		new Morris.Line({
			element: 'line',
			data: [
				{ y: '2008', a: 150, b:50 },
				{ y: '2009', a: 75, b:90 },
				{ y: '2010', a: 200, b:120 },
				{ y: '2011', a: 75, b:340 },
				{ y: '2012', a: 130, b:60 },
				{ y: '2013', a: 75, b:340 },
				{ y: '2014', a: 50, b:260 },
				{ y: '2015', a: 130, b:160 },
				{ y: '2016', a: 210, b:180 }
			],
			xkey: 'y',
			ykeys: ['a','b'],
			labels: ['New', 'Resolved'],
			lineColors: [ colors[ 'chart-primary' ],  colors[ 'chart-secondary' ]],
			resize: true
		});
	}

	if ($('#area').length) {
		new Morris.Area({
			element: 'area',
			data: [
				{ y: '2006', a: 340 },
				{ y: '2007', a: 750 },
				{ y: '2008', a: 652 },
				{ y: '2009', a: 1231 },
				{ y: '2010', a: 544 },
				{ y: '2011', a: 753 },
				{ y: '2012', a: 1533 }
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Series A'],
			lineColors: [ colors[ 'chart-primary' ] ],
			fillOpacity: .3,
			grid: .1,
			gridTextColor: '000',
			resize: true
		});
	}
	
	if ($('#donut').length) {
		new Morris.Donut({
			element: 'donut',
			data: [
				{ label: "Download Sales", value: 12 },
				{ label: "In-Store Sales", value: 30 },
				{ label: "Mail-Order Sales", value: 20 }
			],
			colors: [ colors[ 'chart-primary' ],  colors[ 'chart-secondary' ],  colors[ 'chart-third' ]],
			resize: true
		});
	}
	if ($('#donut2').length) {
		new Morris.Donut({
			element: 'donut2',
			data: [
				{ label: "Red Team", value: 54 },
				{ label: "Green Team", value: 26 },
				{ label: "Blue Team", value: 34 },
				{ label: "Orange Team", value: 16 }
			],
			colors: [ '#EF5350', '#66BB6A', '#03A9F4', '#FFA726'],
			resize: true
		});
	}
}(jQuery));