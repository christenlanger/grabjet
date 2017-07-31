/**
 * Custom scripts here
 */

jQuery(document).ready(function($) {
	$('#menu-toggle').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active');

		$('#menu').toggleClass('visible');
	});

	$('#extra-toggle').click(function(e) {
		e.preventDefault();
		$('.addon-items').toggleClass('visible');
	});

	$('#datepicker').datepicker();

	$('.addon-items input[type="checkbox"]').click(function() {
		var total = 0;
		$('.addon-items input[type="checkbox"]').each(function(i) {
			if ($(this).is(':checked')) total += parseInt($(this).val());
		});

		if (total == 0) {
			$('#extra-toggle').html('Choose your add-ons').removeClass('hasvalue');
		}
		else {
			$('#extra-toggle').html('Total add-ons: $' + total).addClass('hasvalue');
		}
		updateTotal(total);
	});

	$('#booking').submit(function() {
		if ($('#book-pick-up').val() == $('#book-drop-off').val()) {
			alert('Please select a different drop-off point.');
			return false;
		} else if ($('#datepicker').val() == '') {
			alert('Please select a booking date.');
			return false;
		}

		if (confirm('Proceed with booking?')) {
			alert('Your booking has been submitted. We will contact you shortly for more details.');
		}
		else {
			return false;
		}
	});

	function updateTotal(value) {
		value = value || 0;

		$('#book-submit > span').html('$' + (199 + value));
	}
});