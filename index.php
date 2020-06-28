<?php

	session_start();
	require_once "php/includes/connect.php";

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/star-media.png" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
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
					<button class="search__btn"><img src="img/ico/search.svg" alt=""></button>
				</div>
				<div class="social">
					<a class="social__link" href="#"><img src="img/ico/facebook.svg" alt=""></a>
					<a class="social__link" href="#"><img src="img/ico/instagram.svg" alt=""></a>
					<a class="social__link" href="#"><img src="img/ico/youtube.svg" alt=""></a>
					<a class="social__link" href="#"><img src="img/ico/twitter.svg" alt=""></a>
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
				<a class="wrap-enter__link mb-4" href="/profile.php"><img class="wrap-enter__img" src="img/ico/acount.svg" alt=""></a>
				<p class = "text-white"><?=$_SESSION["user"]["name"]?></p>
				<form action="php/includes/logout.php" method = "post">
					<button class="pl-5 pr-5 enter-btn">ВЫЙТИ</button>
				</form>
			</div>
		</div>
	</aside>

	<div class="wrap-content">
		<!-- ШАПКА -->
		<header>
			<h1 class="container-fluid logo"><a href="#">STAR MEDIA</a></h1>
		</header>

		<!-- КОНТЕНТ -->
		<main class="container main">
			<?php
				if(isset($_GET["type"])){
					switch($_GET["type"]){
						case "film":
							include_once "php/news-pages/film.php";
							break;
						case "sport":
							include_once "php/news-pages/sport.php";
							break;
						case "music":
							include_once "php/news-pages/music.php";
							break;
						case "history":
							include_once "php/news-pages/history.php";
							break;
						case "travel":
							include_once "php/news-pages/travel.php";
							break;
						case "art":
							include_once "php/news-pages/art.php";
							break;
						case "mode":
							include_once "php/news-pages/mode.php";
							break;
						case "business":
							include_once "php/news-pages/business.php";
							break;
						case "tech":
							include_once "php/news-pages/tech.php";
							break;
						case "politic":
							include_once "php/news-pages/politic.php";
							break;
					}
				}
				else{
					include_once "php/news-pages/main.php";
				}
			?>
		</main>


		<footer class="footer">
			<p class="footer__title h2 m-0">STAR MEDIA</p>
			<span class="footer__text">&#169; Все права защищены</span>
		</footer>
	</div>

	<!-- ФОРМА ВХОДА -->
	<div class="modal fade" id="form-sign-in">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Вход в личный кабинет</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action = "php/auth/signin.php" method = "post">
						<div class="form-group">
							<label for="enter-log" class="col-form-label"><span class="text-danger">*</span> E-Mail:</label>
							<input type="text" class="form-control" id="enter-log" placeholder="Введите ваш e-mail" name = "email">
						</div>
						<div class="form-group">
							<label for="enter-pass" class="col-form-label"><span class="text-danger">*</span> Пароль:</label>
							<input type="password" class="form-control" id="enter-pass" placeholder="Введите ваш пароль" name = "password">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
							<button type="submit" class="btn btn-primary">Войти</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- ФОРМА РЕГИСТРАЦИИ -->
	<div class="modal fade" id="form-sign-up">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Вход в личный кабинет</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action = "php/register/signup.php" method = "post">
						<div class="form-group">
							<label for="reg-name" class="col-form-label"><span class="text-danger">*</span> ФИО:</label>
							<input type="text" class="form-control" id="reg-name" placeholder="Введите ваше ФИО" name = "name">
						</div>
						<div class="form-group">
							<label for="reg-mail" class="col-form-label"><span class="text-danger">*</span> E-mail:</label>
							<input type="email" class="form-control" id="reg-mail" placeholder="Введите ваш e-mail" name = "email">
						</div>
						<div class="form-group">
							<label for="reg-pass" class="col-form-label"><span class="text-danger">*</span> Пароль:</label>
							<input type="password" class="form-control" id="reg-pass" placeholder="Придумайте надежный пароль" name = "pass1">
						</div>
						<div class="form-group">
							<label for="reg-pass-confirm" class="col-form-label"><span class="text-danger">*</span> Повторите пароль:</label>
							<input type="password" class="form-control" id="reg-pass-confirm" placeholder="Повторите пароль" name = "pass2">
						</div>
						<div class="form-group"><span class="text-danger">*</span> Зарегистрироваться как:</div>
						<div class="form-group">
							<select class = "form-control" name="type" id="">
								<option value="user">Пользователь</option>
								<option value="author">Автор статьи</option>
							</select>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
							<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="libs/js/jquery-3.5.1.min.js"></script>
	<script src="libs/js/masonry.pkgd.min.js"></script>
	<script src="libs/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>