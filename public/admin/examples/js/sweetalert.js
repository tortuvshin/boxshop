(function ($) {
	
	$('body').on('click', '.try-sweet-simpleMessage', function () {
		swal({ 
			title: "Here's a message!", 
			confirmButtonColor: "#039BE5" 
		});
	});

	$('body').on('click', '.try-sweet-simpleTitle', function () {
		swal({ 
			title:"Here's a message!", 
			text: "It's pretty, isn't it?", 
			confirmButtonColor: "#039BE5" 
		});
	});

	$('body').on('click', '.try-sweet-successMessage', function () {
		swal({ 
			title:"Good job!", 
			text:"You clicked the button!", 
			type:"success", 
			confirmButtonColor: "#039BE5"
		})
	});

	$('body').on('click', '.try-sweet-warningConfirm', function () {
		swal({ 
			title: "Are you sure?", 
			text: "You will not be able to recover this imaginary file!", 
			type: "warning", 
			showCancelButton: true, 
			confirmButtonColor: "#039BE5", 
			confirmButtonText: "Yes, delete it!", 
			closeOnConfirm: false 
		}, function() { 
			swal({
				title:"Deleted!", 
				text: "Your imaginary file has been deleted.", 
				type:"success", 
				confirmButtonColor: "#039BE5"
			}); 
		});
	});

	$('body').on('click', '.try-sweet-warningCallback', function () {
		swal({ 
			title: "Are you sure?", 
			text: "You will not be able to recover this imaginary file!", 
			type: "warning", 
			showCancelButton: true, 
			confirmButtonColor: "#039BE5", 
			confirmButtonText: "Yes, delete it!", 
			cancelButtonText: "No, cancel plx!", 
			closeOnConfirm: false, 
			closeOnCancel: false 
		}, function (isConfirm) {
			if (isConfirm) { 
				swal({
					title: "Deleted!", 
					text: "Your imaginary file has been deleted.", 
					type:"success", 
					confirmButtonColor: "#039BE5"
				});
			} 
			else {
				swal({ 
					title: "Cancelled", 
					text: "Your imaginary file is safe :)", 
					type: "error", 
					confirmButtonColor: "#039BE5" 
				});
			} 
		});
	});

	$('body').on('click', '.try-sweet-htmlMessage', function () {
		swal({
			title: 'HTML <small>Title</small>!',
			text: 'A custom <span style="color:#F8BB86">html<span> message.',
			html: true,
			confirmButtonColor: "#039BE5"
		});
	});
	
}(jQuery));