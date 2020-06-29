<?php
	session_start();
	require_once "php/includes/connect.php";
	if(!isset($_GET['type']) and !isset($_GET['id'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/star-media.png" type="image/png">
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
						include_once "php/urls/menu.php";
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
				<a class="wrap-enter__link mb-4" href="/profile.php"><img class="wrap-enter__img" src="../img/ico/acount.svg" alt=""></a>
				<p class = "text-white"><?=$_SESSION["user"]["name"]?></p>
				<form action="php/includes/logout.php" method = "post">
					<button class="pl-5 pr-5 enter-btn">ВЫЙТИ</button>
				</form>
			</div>
		</div>
	</aside>

	<div class="wrap-content" style="height: 100%;">
		<!-- ШАПКА -->
		<header>
			<h1 class="container-fluid logo"><a href="../index.html">STAR MEDIA</a></h1>
		</header>

		<!-- КОНТЕНТ -->
		<?php
			$type = $_GET["type"];
			$id = $_GET["id"];
			switch($type){
				case "film":
					$type = "кино";
					break;
				case "sport":
					$type = "спорт";
					break;
				case "music":
					$type = "музыка";
					break;
				case "history":
					$type = "история";
					break;
				case "travel":
					$type = "путешествия";
					break;
				case "art":
					$type = "искусство";
					break;
				case "mode":
					$type = "мода";
					break;
				case "business":
					$type = "бизнес";
					break;
				case "tech":
					$type = "технологии";
					break;
				case "politic":
					$type = "политика";
					break;
			}
			
			$data = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = '$type' AND articles.id = '$id'"))[0];
		?>
		<main class="container-fluid main mt-3">
				<?php
					switch($_SESSION["user"]["type"]){
						case "admin":
							include_once "php/urls/edit.php";
							break;
						case "author":
							include_once "php/urls/edit.php";
							break;
					}
				?>
			<h2 class="main__title"><?=$data[3]?></h2>
			<!-- СТАТЬЯ -->
			<div class="box-article">
				<div class="box-article__item">
					<img src="../php/files/<?=$data[6]?>" alt="kek">
					<p class="box-article__info ml-4">
						<span class="box-article__author"><?=mb_strtoupper($data[8])?></span>
						<span class="box-article__date"><?=$data[5]?></span>
					</p>
				</div>
				<div class="col-md-10 box-article__text mt-5">
					<p><?=$data[4]?></p>
				</div>
				<div>
					<h3 class="mt-5">ПОСЛЕДНИЕ НОВОСТИ:</h3>
					<div class="box-article__last">
						<div class="box-article__wrap-info">
							<a href="#" class="box-article__link">
								<div class="wrap-img">
									<img class="box-article__img" src="../img/Lukashenko.jpg" alt="Лукашенко">
									<span class="h4 box-article__title">Лукашенко назвал Москву столицей родины</span>
								</div>
							</a>
						</div>
						<div class="box-article__wrap-info">
							<a href="#" class="box-article__link">
								<div class="wrap-img">
									<img class="box-article__img" src="../img/Lukashenko.jpg" alt="Лукашенко">
									<span class="h4 box-article__title">Лукашенко назвал Москву столицей родины</span>
								</div>
							</a>
						</div>
						<div class="box-article__wrap-info">
							<a href="#" class="box-article__link">
								<div class="wrap-img">
									<img class="box-article__img" src="../img/Lukashenko.jpg" alt="Лукашенко">
									<span class="h4 box-article__title">Лукашенко назвал Москву столицей родины</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
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
					<form action = "/php/auth/signin.php" method = "post">
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
					<form action = "/php/register/signup.php" method = "post">
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

	<script src="../libs/js/jquery-3.5.1.min.js"></script>
	<script src="../libs/js/masonry.pkgd.min.js"></script>
	<script src="../libs/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>