<!DOCTYPE html>
<html lang="ru">

<?php include 'pages/include/head.html'; ?>
	
	<?php include 'pages/include/header.html'; ?>

	<!-- Тело сайта -->
	<div class="home">
		<!-- Главный экран -->
		<section class="intro" style="background-image: url(img/architecture-cliffside-cold-789380.jpg);">
			<div class="intro-content">
				<img src="img/introR.png" alt="">			
				<div class="intro-buttons">
					<a href="#road-to-us" class="button button-gray">Как добраться</a>
					<a href="/pages/mainrent.php" class="button">Бронирование</a>
				</div>			
			</div>
		</section>



		<!-- Приветствие -->
		<section class="welcome translate-30">
			<div class="container-1240 translate-70">
				<h2 class="title">Добро пожаловать на отдых, наполненный приятными моментами!</h2>
				<p>Мы рады приветствовать вас как наших гостей. <br> Отдохните вместе с семьей, друзьями или своими любимыми.</p>
				<p>Насладитесь волшебной атмосферой Тирольских Альп, в окружении <br> красивейших гор, свежего воздуха и приятного окружения</p>
				<p>Кроме того, вы можете быть уверены, что у нас вы получите <br> лучшее соотношение цены и качества!</p>
			</div>
		</section>



		<!-- Информация Грид -->
		<section id="grid-information" class="grid-information translate-70">
			<div class="container-1240">
				<div class="grid-information-content">

					<a href="pages/grid-info/roads.php" class="grid-information-item" style="background-image: url(img/grid-information/roads.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Склоны и трассы</h2>
							<p>Все найдут трассу по себе. Подготовленные трассы для новичков и экстримальные спуски для опытных райдеров</p>				
						</span>
					</a>

					<a href="pages/grid-info/equipment.php" class="grid-information-item" style="background-image: url(img/grid-information/equipment.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Доступное снаряжение</h2>
							<p>Сноубордическое и лыжное снаряжение, защита для всего тела, а также Action-камеры</p>				
						</span>
					</a>

					<a href="pages/grid-info/bar.php" class="grid-information-item" style="background-image: url(img/grid-information/bar.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Бар</h2>
							<p>Вечений бар, отличное место чтобы поболеть за свою любимую команду и насладиться вечером со старыми, а быть может и новыми друзьями</p>
						</span>
					</a>

					<a href="pages/grid-info/restourant.php" class="grid-information-item" style="background-image: url(img/grid-information/restourant.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Ресторан</h2>
							<p>Вкусная и полезная еда в сопровождении прятной музыки. Голод точно не застанет вас на склоне</p>
						</span>
					</a>

					<a href="pages/grid-info/hotel.php" class="grid-information-item" style="background-image: url(img/grid-information/hotel.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Отель</h2>
							<p>Первоклассные номера, общий зал с камином, сауна и отличный сервис. Что еще нужно для завершения отличного дня!</p>
						</span>
					</a>

					<a href="pages/grid-info/others.php" class="grid-information-item" style="background-image: url(img/grid-information/other2.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Остальные развлечения</h2>
							<p>Пешие походы в горы, каток, прогулки на лошадях и др.</p>
						</span>
					</a>

					<a href="pages/grid-info/safe.php" class="grid-information-item" style="background-image: url(img/grid-information/safe.jpg);">
						<span class="information-item-desc">
							<h2 class="title">Безопасность</h2>
							<p>Узнайте больше о действиях при ЧС и правилах нахождения на ГК Adventure</p>
						</span>
					</a>
				</div>
				<span class="grid-information-question">Возник вопрос? Возможно вы найдете ответ <a href="#">ЗДЕСЬ</a></span>
			</div>
		</section>



		<!-- Форма брони -->
		<section class="form-arrival">
			<div class="container-1240">
				<h2 class="title">Попасть к нам легко, просто предупредите нас об этом!</h2>
				<form action="" class="arrival-content">
					<div><input type="text" name="name" placeholder="Номер в отеле"></div>
					<div><input type="text" name="name" placeholder="Дата приезда" onfocus="(this.type='date')" onblur="(this.type='text')"></div>
					<div><input type="number" name="name" placeholder="Кол-во ночей"></div>
					<div><button class="button">Подтвердить</button></div>
				</form>				
			</div>
		</section>

	
		

		<!-- Double-Info -->
		<section class="double-info">
			<div class="container-1240">
				<div class="container-item personal">
					<div class="desc">
						<h2 class="title">Впервые встаете на склон?</h2>
						<p>На склоне вы можете бесплатно попросить помощи у наших инструкторов. Ребята очень опытные и доброжелательные. Учебная трасса поможет освоиться и одолеть ваш первый склон</p>
						<h3><a href="#">Правила поведения на склоне</a></h3>
						<p>Так же на территории комплекса работают спасатели. При возникновении ЧП телефон спасателей:</p>
						<h3><i class="fas fa-phone-volume"></i> +7 999 469 23 16</h3>
					</div>
					<div class="item-img" style="background-image: url(img/649352.png);"></div>
				</div>
				<div class="container-item road-to-us" id="road-to-us">
					<div class="item-img" style="background-image: url(img/dostavka.jpg);"></div>
					<div class="desc">
						<h2 class="title">Как к нам добраться?</h2>
						<p>Есть несколько простых путей добраться к нам своим ходом, вот несколько из них. Советуем воспользоваться <a href="#map" class="title">картой</a> чтобы случайно не заплутать в дороге</p>
						<ul>
							<li><i class="fas fa-car" style="width: 30px; text-align: center"></i> На машине</li>
							<li><i class="fas fa-walking" style="width: 30px; text-align: center"></i> Пешком</li>
							<li><i class="fas fa-helicopter" style="width: 30px; text-align: center"></i> На вертолете</li>
						</ul>
						<p>Или вы можете воспользоваться услугами наших автобусов в городе Инсбурк. Забронировать место в автобусе можно во время бронирования отеля и снаряжения</p>
					</div>
				</div>
			</div>
		</section>



		<!-- Местоположение -->
		<section class="placement" id="map">
			<div class="container-1240">
				<h2 class="title">Карта</h2>
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1tx_4pM8iLBFt_XvMl3jL-kfuWEKKL_O-" width="640" height="480"></iframe>
				</div>
				<div class="map-desc">
					<span style="background-image: url(img/road_with_text.jpg);"></span>
					<h4 class="title-before-after title">Схема проезда от аэропорта Инсбурга до комплекса</h4>
					<p>Если добираетесь до нас своим ходом изучите схему проезда, чтобы не заплутать в дороге</p>
					<h5><a href="#">Открыть карту</a></h5>
				</div>
			</div>			
		</section>



		<!-- Медиа -->
		<section class="info-section">
			<div class="orange-section">
				<h2 class="title">Чуть больше информации о нас</h2>
			</div>
			<div class="container-1240">

				<div class="info-item video" style="background-image: url()">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/-ClNrBe-fr4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

				<div class="info-item twitter" style="background-image: url()">
					<a class="twitter-timeline" data-width="220" data-height="200" href="https://twitter.com/slavik_nsk?ref_src=twsrc%5Etfw">Tweets by slavik_nsk</a> 
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>

				<a href="pages/news.php" class="info-item info-item-dark news" style="background-image: url(img/news.jpg);">
						<div class="marker"><span><i class="fas fa-external-link-square-alt"></i></span></div>	
				</a>	

				<!-- <div class="info-item info-item-dark merch" style="background-image: url()">
					<h2>Сувенирная продукция</h2>
					<div class="shop">
						<div class="owl-carousel owl-theme">
						  <div class="carousel-item" style="background-image: url(img/57ae072d8a02b1567fcc09fd.png);"> Your Content </div>
						  <div class="carousel-item" style="background-image: url(img/pr_4487_1.png);"> Your Content </div>
						  <div class="carousel-item" style="background-image: url(img/114_1_1_zoom.png);"> Your Content </div>
						  <div class="carousel-item" style="background-image: url(img/b12f137e1a912c4850fd748172e3d51d.png);"> Your Content </div>
						</div>
					</div>
				</div>

				<div class="info-item info-item-dark" style="background-image: url()">
					что тут будет?
				</div>

				<div class="info-item" style="background-image: url()">
					что тут будет?
				</div> -->
			</div>			
		</section>



		<!-- Footer -->
		<?php include 'pages/include/footer.html'; ?>

	</div> <!-- Конец тела -->

	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>
	<script src="libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

</body>
</html>
