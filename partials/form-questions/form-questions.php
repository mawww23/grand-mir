<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
	<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

	<section class="form-questions">
		<div class="form-questions__content-wrap">
			<form title='Обратный звонок с сайта Grand-Mir' class="form-questions__form / js-form">
				<strong class="form-questions__form-title">Остались вопросы? Оперативно проконсультируем!</strong>
				<div class="form-questions__form-fieldset">
					<input type="text" name="ff1" req="1" placeholder="Ваше имя" />
					<input type="text" name="ff2" req="1" placeholder="Ваш email" />
					<button class="form-questions__form-btn / js-form__btn">Оставить заявку</button>
				</div>
				<p class="form-questions__form-status / js-form__status"></p>
			</form>
		</div>
	</section>

	<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>