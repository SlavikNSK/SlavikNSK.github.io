<!DOCTYPE html>
<html lang="ru">

<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/head.html'; ?>

<body>

	<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/header.html'; ?>

	<!-- Тело сайта -->
	<div class="home-pages home-rent">
		<!-- Главный экран -->
		<div class="container-1240 rent-container">			
			
			<div class="rent-item form-personal active">
				<div class="contact-form">
					<div class="contact-form-content">

						<h2><span>Контактная информация</span></h2>

						<div class="group">
							<span>Ваше имя</span>
							<input type="text">
						</div>

						<div class="group">
							<span>Телефон</span>
							<input type="text">
						</div>

						<div class="group">
							<input type="submit" class="button">
						</div>

					</div>					
				</div>
				<div class="ask-form">
					<h2>Выберите, что вам нужно</h2>
				</div>
			</div>

			<div class="rent-item form-ask">
				<h2>Выберите, что вам нужно</h2>
			</div>
			<div class="rent-item form-hotel">3</div>
			<div class="rent-item form-equipment">4</div>
			<div class="rent-item form-food">5</div>				
		</div>

			


		<!-- Footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/include/footer.html'; ?>

	</div> <!-- Конец тела -->

	<link rel="stylesheet" href="/css/main.min.css">
	<script src="/js/scripts.min.js"></script>
	<script src="/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

</body>
</html>
