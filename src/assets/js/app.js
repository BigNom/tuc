$(document).foundation();


$(function() {

	$('#contactForm').submit(function(e) {
			e.preventDefault();

			var $form = $(e.target);


			$.post($form.attr('action'), $form.serialize(), function(result) {
				$('#correct').fadeIn();
           $('input[type="text"], textarea').val('');
           $('input[type="submit"]').val('Success');

				console.log(result);
			}, 'json' );
		});
});
