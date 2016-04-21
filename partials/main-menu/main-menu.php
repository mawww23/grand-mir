<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<nav class="main-menu / js-main-menu">
	<div class="main-menu__content-wrap">

		<ul class="main-menu__list">
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">О нас</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link main-menu__list-link--state--active">MICE-агентство</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">Франшиза</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">Агентствам</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">Школа туризма</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">Отзывы</a>
			</li>
			<li class="main-menu__list-item">
				<a href="#" class="main-menu__list-link">Контакты</a>
			</li>
		</ul>

		<form action="" class="main-menu__city">
			<label for="city-list" class="main-menu__city-label">Ваш город:</label>
			<select class="main-menu__city-list" name="" id="city-list" >
				<option value="Севастополь" selected>Севастополь</option>
				<option value="Ялта">Ялта</option>
				<option value="Алупка">Алупка</option>
			</select>
		</form>

	</div>
</nav>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
