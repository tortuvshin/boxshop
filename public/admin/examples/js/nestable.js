(function ($) {
	/**
	 * jQuery plugin wrapper
	 */
	$.fn.APNestable = function () {
		if (! this.length) return;
		if (typeof $.fn.nestable != 'undefined') {
			this.nestable({
				rootClass: 'nestable',
				listNodeName: 'ul',
				listClass: 'nestable-list',
				itemClass: 'nestable-item',
				dragClass: 'nestable-drag',
				handleClass: 'nestable-handle',
				collapsedClass: 'nestable-collapsed',
				placeClass: 'nestable-placeholder',
				emptyClass: 'nestable-empty'
			});
		}
	};
	$('.nestable').APNestable();
}(jQuery));