jQuery(document).ready(function ($) {
	var mailAddr = 'ljazzmail@gmail.com';
	$('.js-form__phone-field').mask("+7 (999) 999-99-99");
	$('.js-form__time-field').mask("99:99");
	$('.js-form__date-field').pickmeup({
		first_day: 1
	});
	$('.js-form__btn').click(function () {
		var $b = $(this);
		var $f = $(this).parents('.js-form');
		var $s = $f.find('.js-form__status');
		var data = {};

		var bVal = $b.text();

		var status = [
			'Вы забыли заполнить обязательные поля.',
			'Спасибо, сообщение отправлено.',
			'При отправке сообщения возникли проблемы. Пожалуйста, попробуйте позже.'
		]

		$f.find('*[req=1]').each(function (i) {
			$(this).removeClass('js-form__field-invalid');
			if ($(this).val() == '' || $(this).val() == $(this).attr('placeholder')) {
				$(this).addClass('js-form__field-invalid');
			}
		});

		if ($f.find('.js-form__field-invalid').length) {
			$s.html(status[0]).slideDown(200);
			return false;
		}

		$f.find('input[type=text], input[type=email], textarea, select').each(function (i) {
			var name = $(this).attr('name');
			var label = $(this).attr('placeholder') || $(this).prev().html();
			label = $.trim(label.replace(/[:*]/g, ''));
			data[name] = {
				label: label,
				value: $(this).val()
			};
		});

		$.ajax({
			url: '/assets/forms/send-form.php',
			type: 'POST',
			data: {
				send: 'do',
				to: mailAddr,
				subj: $f.attr('title'),
				data: data
			},
			beforeSend: function () {
				$b.text('Отправка...');
			},
			success: function (response) {
				var r = parseInt(response);

				$b.text(bVal);
				$s.html(status[r]).slideDown(200);

				if (r == 1) {
					$f.find('input[type=text], input[type=email], textarea, select').val('');

					setTimeout(function () {
						$s.slideUp(200);
					}, 5000);
				}
			},
			error: function (jqXHR, textStatus, ex) {
				alert(textStatus + "," + ex + "," + jqXHR.responseText);
			}
		});
		return false;
	});
});
