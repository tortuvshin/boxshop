(function ($) {
	/**
	 * jQuery plugin wrapper for compatibility
	 */
	$.fn.APSummernote = function () {
		if (! this.length) return;
		if (typeof $.fn.summernote != 'undefined') {
			this.summernote({
				popover: {
					image: [],
					link: [],
					air: []
				}
			});
		}
	};
	
	$('#summernote').APSummernote();

}(jQuery));