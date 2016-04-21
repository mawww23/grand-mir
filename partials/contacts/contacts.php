<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<section class="contacts">
	<div class="contacts__content-wrap">
		<address class="contacts__content">
			<header class="contacts__title">Контакты</header>
			<form action="" class="contacts__city">
				<label for="city-list" class="contacts__city-label">Ваш город:</label>
				<select class="contacts__city-list" name="" id="city-list">
					<option value="Севастополь" selected="">Севастополь</option>
					<option value="Ялта">Ялта</option>
					<option value="Алупка">Алупка</option>
				</select>
			</form>
			<div class="contacts__col contacts__col--size--sm">
				<table>
					<tbody>
						<tr>
							<th rowspan="2">Тел.:</th>
							<td>
								<a href="tel:88007757343" class="contacts__phone-lnk">8 800-77-57-343</a>
							</td>
						</tr>
						<tr>
							<td>
								<button class="contacts__btn contacts__btn--icon--1 / js-form-callback_open">Заказать звонок</button>
							</td>
						</tr>
						<tr>
							<th rowspan="2">E-mail:</th>
							<td>
								<a href="mailto:info@grand-mir.ru" class="contacts__mail-lnk">info@grand-mir.ru</a>
							</td>
						</tr>
						<tr>
							<td>
								<button class="contacts__btn contacts__btn--icon--2 / js-form-contact-us_open">Написать нам</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="contacts__col contacts__col--size--bg">
				<table>
					<tbody>
						<tr>
							<th rowspan="3">График работы:</th>
							<th><strong>Пн-Пт</strong></th>
							<td>с 10:00 до 18:00</td>
						</tr>
						<tr>
							<th><strong>Сб</strong></th>
							<td>с 11:00 до 15:00</td>
						</tr>
						<tr>
							<th><strong>Вс</strong></th>
							<td>выходной</td>
						</tr>
						<tr>
							<th rowspan="2">Адрес:</th>
							<td colspan="2">299011, Россия, г. Севастополь, ул.Очаковцев, д. 36</td>
						</tr>
						<tr>
							<td colspan="2">
								<button class="contacts__map-btn / js-map-lightbox_open">Посмотреть на карте</button>
								<address class="contacts__map-lightbox" id="js-map-lightbox">
									<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7qh8qpYM4wfqdRbBWR38Qi9zoiY0auWt&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
								</address>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<a href="#header" class="contacts__totop-lnk">наверх</a>
		</address>
	</div>
</section>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
