<?php print '<!--REQUIRE: /partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.php-->'; ?>
<link rel="stylesheet" href="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.css' ?>">

<section class="video-reviews">
	<div class="video-reviews__content-wrap">
		<strong class="video-reviews__title">Отзывы наших клиентов</strong>
		<div class="video-reviews__items-wrap">

			<figure class="video-reviews__item / js-video-review-1_open">
				<div class="video-reviews__item-image" style="background-image:url(/partials/video-reviews/img/1.jpg);"></div>
				<figcaption class="video-reviews__item-caption">Мария</figcaption>
			</figure>
			<figure class="video-reviews__lightbox" id="js-video-review-1">
				<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ZOiX6cIT8o" frameborder="0" allowfullscreen></iframe> -->
			</figure>

			<figure class="video-reviews__item / js-video-review-2_open">
				<div class="video-reviews__item-image" style="background-image:url(/partials/video-reviews/img/2.jpg);"></div>
				<figcaption class="video-reviews__item-caption">Павел</figcaption>
			</figure>
			<figure class="video-reviews__lightbox" id="js-video-review-2">
				<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ZOiX6cIT8o" frameborder="0" allowfullscreen></iframe> -->
			</figure>

			<figure class="video-reviews__item / js-video-review-3_open">
				<div class="video-reviews__item-image" style="background-image:url(/partials/video-reviews/img/3.jpg);"></div>
				<figcaption class="video-reviews__item-caption">Ольга</figcaption>
			</figure>
			<figure class="video-reviews__lightbox" id="js-video-review-3">
				<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-ZOiX6cIT8o" frameborder="0" allowfullscreen></iframe> -->
			</figure>

		</div>
	</div>
</section>

<script type="text/javascript" src="<?php echo '/partials/' . basename(__FILE__, '.php') . '/' . basename(__FILE__, '.php') . '.js' ?>"></script>
