<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<header class="header" id="header">
	<div class="header__content-wrap">

		<figure class="header__logo">
			<a href="/" class="header__logo-link"></a>
			<strong class="header__logo-title">Образование и отдых за рубежом</strong>
			<span class="header__logo-subtitle">Международный Центр
				<br>Путешествий и Образования</span>
		</figure>

		<address class="header__contacts-wrap">
			<a href="mailto:info@grand-mir.ru" class="header__mail-link">info@grand-mir.ru</a>
			<a href="tel:88007757343" class="header__phone-link">8 800-77-57-343</a>
			<button class="header__contact-us-btn / js-form-contact-us_open">Написать нам</button>
			<button class="header__callback-btn / js-form-callback_open">Заказать звонок</button>
			<form action="" class="header__search">
				<input type="text" class="header__search-field" placeholder="Например, Au-Pair">
				<button class="header__search-btn">Найти</button>
			</form>
		</address>

	</div>
</header>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
