<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<section class="reviews-slideshow">
	<div class="reviews-slideshow__wrap">
		<div class="reviews-slideshow__slides / js-reviews-slideshow">

			<figure class="reviews-slideshow__item">
				<div class="reviews-slideshow__item-image" style="background-image:url(partials/reviews-slideshow/img/1.jpg);"></div>
				<div class="reviews-slideshow__item-content">
					<p>Дорогой Гранд Мир! Спасибо вам за осуществление мечты и великолепную организацию моего отпуска! Все что от меня потребовалось - сдать документы! Все билеты в нужное время и с нужными местами.</p>
					<p>С вами отпуск прошел организовано и просто чудесно! Никогда не забуду великолепную Европу! Следующее путешествие с вами!</p>
				</div>
				<figcaption class="reviews-slideshow__item-info">
					<span class="reviews-slideshow__item-reviewer-name">Екатерина</span>
					<a href="#" class="reviews-slideshow__item-readmore-btn">Все отзывы</a>
				</figcaption>
			</figure>

			<figure class="reviews-slideshow__item">
				<div class="reviews-slideshow__item-image" style="background-image:url(partials/reviews-slideshow/img/2.jpg);"></div>
				<div class="reviews-slideshow__item-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore eius maiores eaque tempora quaerat omnis labore eligendi quis similique ullam natus, atque quam, dolorum minus ducimus doloribus non commodi cupiditate.</p>
				</div>
				<figcaption class="reviews-slideshow__item-info">
					<span class="reviews-slideshow__item-reviewer-name">Екатерина</span>
					<a href="#" class="reviews-slideshow__item-readmore-btn">Все отзывы</a>
				</figcaption>
			</figure>

		</div>
		<nav class="reviews-slideshow__navigation">
			<figure class="reviews-slideshow__counter">
				<i class="reviews-slideshow__counter-cur / js-reviews-slideshow__counter-cur"></i>
				/
				<i class="reviews-slideshow__counter-sum / js-reviews-slideshow__counter-sum"></i>
			</figure>
		</nav>
	</div>
</section>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
