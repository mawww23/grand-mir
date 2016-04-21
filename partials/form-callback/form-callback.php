<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<form title='Обратный звонок с сайта Grand-Mir' class="form-callback / js-form" id="js-form-callback">
	<h2 class="form-callback__title">Оставьте заявку на обратный звонок</h2>
	<fieldset>
		<input type="text" name="ff1" req="1" placeholder="Ваше имя" />
		<input type="text" name="ff2" req="1" placeholder="Ваш телефон" class="js-form__phone-field" />
		<input type="text" name="ff3" placeholder="Удобное время для звонка" class="js-form__time-field" />
		<textarea name="ff4" placeholder="Дополнительные пожелания"></textarea>
		<p class="form-callback__status js-form__status"></p>
		<button class="form-callback__btn / js-form__btn">Оставить заявку</button>
	</fieldset>
</form>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
