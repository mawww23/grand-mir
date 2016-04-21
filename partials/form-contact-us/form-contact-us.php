<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<form title='Письмо с сайта Grand-Mir' class="form-contact-us / js-form" id="js-form-contact-us">
	<h2 class="form-contact-us__title">Напишите нам</h2>
	<fieldset>
		<input type="text" name="ff1" req="1" placeholder="Ваше имя" />
		<input type="text" name="ff2" req="1" placeholder="Ваш E-mail" />
		<textarea name="ff3" placeholder="Ваше сообщение"></textarea>
		<p class="form-contact-us__status / js-form__status"></p>
		<button class="form-contact-us__btn / js-form__btn">Отправить письмо</button>
	</fieldset>
</form>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
