<!DOCTYPE html>
<html lang="ru">

<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/head.html'; ?>

<body>

	<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/header.html'; ?>

	<!-- Тело сайта -->
	<div class="home-pages home-hotel">
		<h1 style="background-image: url(/img/grid-information/hotel.jpg);">Отель</h1>
		<!-- Главный экран -->
		<div class="container-1240 hotel-container">		
			<div class="about-hotel"></div>
			<div class="hotel-rooms">
				<div class="rooms-item">
					<h2>Однокомнатный номер</h2>
					<div class="description-img">
						<div class="description-room">
							<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Пунктуация которое живет семантика свой обеспечивает, большого составитель, деревни гор бросил собрал она последний осталось вопрос даль рукописи? Запятой, что?</p>
							<div class="button">Забронировать</div>
							<span>1500р / сутки</span>
						</div>
						<div class="fotorama" data-nav="thumbs">
						  <img src="/img/hotel.jpg">
						  <img src="/img/hotel.jpg">
						</div>
					</div>
				</div>

				<div class="rooms-item">
					<h2>Двухкомнатный номер</h2>
					<div class="description-img">
						<div class="description-room">
							<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Пунктуация которое живет семантика свой обеспечивает, большого составитель, деревни гор бросил собрал она последний осталось вопрос даль рукописи? Запятой, что?</p>
							<div class="button">Забронировать</div>
							<span>2700р / сутки</span>
						</div>
						<div class="fotorama" data-nav="thumbs">
						  <img src="/img/hotel.jpg">
						  <img src="/img/hotel.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>

		


		<!-- Footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/footer.html'; ?>

	</div> <!-- Конец тела -->

	<link rel="stylesheet" href="/libs/fotorama-4.6.4/fotorama.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<script src="/js/scripts.min.js"></script>
	<script src="/libs/fotorama-4.6.4/fotorama.js"></script>
	<script src="/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

</body>
</html>
