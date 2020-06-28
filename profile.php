<?php 
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location: index.php");
	} 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<title>Document</title>
</head>

<body>

	<!-- НАВИГАЦИЯ -->
	<aside class="sidebar">
		<div class="burger">
			<span></span>
		</div>
		<div style="position: sticky; top: 10px;">
			<div class="wrap-nav">
					<?php
						include_once "php/urls/menu.php"
					?>
				<div class="search">
					<input class="search__input" type="search" placeholder="ПОИСК...">
					<button class="search__btn"><img src="../img/ico/search.svg" alt=""></button>
				</div>
				<div class="social">
					<a class="social__link" href="#"><img src="../img/ico/facebook.svg" alt=""></a>
					<a class="social__link" href="#"><img src="../img/ico/instagram.svg" alt=""></a>
					<a class="social__link" href="#"><img src="../img/ico/youtube.svg" alt=""></a>
					<a class="social__link" href="#"><img src="../img/ico/twitter.svg" alt=""></a>
				</div>
			</div>
			<div class="wrap-enter <?php
															if(isset($_SESSION['user'])){
																echo "enter-btn_disabled";
															}
														?>">
				<button class="enter-btn" data-toggle="modal" data-target="#form-sign-in">ВОЙТИ</button>
				<button class="enter-btn" data-toggle="modal" data-target="#form-sign-up">РЕГИСТРАЦИЯ</button>
			</div>
			<div class="wrap-enter mt-5  <?php
																		if(!isset($_SESSION['user'])){
																			echo "enter-btn_disabled";
																		}
																	?>">
				<a class="wrap-enter__link mb-4" href="#"><img class="wrap-enter__img" src="img/ico/acount.svg" alt=""></a>
				<form action="php/includes/logout.php" method = "post">
					<button class="pl-5 pr-5 enter-btn">ВЫЙТИ</button>
				</form>
			</div>
		</div>
	</aside>

	<div class="wrap-content">
		<!-- ШАПКА -->
		<header>
			<h1 class="container-fluid logo"><a href="../index.html">STAR MEDIA</a></h1>
		</header>

		<!-- КОНТЕНТ -->
		<main class="container main">
			<h2 class="main__title">ЛИЧНЫЙ КАБИНЕТ</h2>
			<h3 class="mt-5">ПОДПИСКИ:</h3>
			<ol class="sub-list">
				<li class="sub-list__item"><span class="sub-list__title">СПОРТ</span> <a class="sub-list__link" href="#">ОТПИСАТЬСЯ</a></li>
				<li class="sub-list__item"><span class="sub-list__title">МУЗЫКА</span> <a class="sub-list__link" href="#">ОТПИСАТЬСЯ</a></li>
			</ol>
			<a class="main__news" href="#">ПРЕДЛОЖИТЬ НОВОСТЬ</a>
			<a class="main__news" href="#">ТАБЛИЦА АВТОРОВ</a>
			<a class="main__news" href="#">ТАБЛИЦА ПОЛЬЗОВАТЕЛЕЙ</a>
			<a class="main__news" href="#">ТАБЛИЦА СТАТЕЙ</a>

		</main>

		<footer class="footer">
			<p class="footer__title h2 m-0">STAR MEDIA</p>
			<span class="footer__text">&#169; Все права защищены</span>
		</footer>
	</div>

	<script src="../libs/js/jquery-3.5.1.min.js"></script>
	<script src="../libs/js/masonry.pkgd.min.js"></script>
	<script src="../libs/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>