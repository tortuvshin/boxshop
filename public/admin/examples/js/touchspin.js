(function ($) {
	
	/**
	 * jQuery plugin wrapper for compatibility
	 */
	$.fn.APTouchSpin = function () {
		if (! this.length) return;
		if (typeof $.fn.TouchSpin != 'undefined') {
			this.TouchSpin();
		}
	};
	
	$('[data-toggle="touch-spin"]').APTouchSpin();

}(jQuery));