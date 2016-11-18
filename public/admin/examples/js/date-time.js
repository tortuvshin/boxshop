(function ($) {
	"use strict";

	/**
	 * jQuery datepicker plugin wrapper for compatibility
	 */
	$.fn.plusDatePicker = function () {
		if (! this.length) return;

		if (typeof $.fn.datepicker != 'undefined') {
			this.datepicker();
		}
	};

	/**
	 * jQuery timepicker plugin wrapper for compatibility
	 */
	$.fn.plusTimePicker = function () {
		if (! this.length) return;

		if (typeof $.fn.datepicker != 'undefined') {
			this.timepicker({
				minuteStep: 5,
				showInputs: false,
				disableFocus: true,
				icons: {
					up: 'material-icons up',
					down: 'material-icons down'
				}
			});
		}
	};

	$('.datepicker').plusDatePicker();

	$('#timepicker3').plusTimePicker({
		minuteStep: 5,
		showInputs: false,
		disableFocus: true
	});
})(jQuery);