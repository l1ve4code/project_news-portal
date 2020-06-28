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
				<nav class="nav">
					<a class="nav__link" href="../index.html">ГЛАВНАЯ</a>
					<a class="nav__link" href="#">КИНО</a>
					<a class="nav__link" href="#">СПОРТ</a>
					<a class="nav__link" href="#">МУЗЫКА</a>
					<a class="nav__link" href="#">ИСТОРИЯ</a>
					<a class="nav__link" href="#">ПУТЕШЕСТВИЯ</a>
					<a class="nav__link" href="#">ИСКУССТВО</a>
					<a class="nav__link" href="#">МОДА</a>
					<a class="nav__link" href="#">БИЗНЕС</a>
					<a class="nav__link" href="#">ТЕХНОЛОГИИ</a>
					<a class="nav__link" href="#">ПОЛИТИКА</a>
				</nav>
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
			<div class="wrap-enter">
				<button class="enter-btn" data-toggle="modal" data-target="#form-sign-in">ВОЙТИ</button>
				<button class="enter-btn" data-toggle="modal" data-target="#form-sign-up">РЕГИСТРАЦИЯ</button>
			</div>
		</div>
	</aside>

	<div class="wrap-content">
		<!-- ШАПКА -->
		<header>
			<h1 class="container-fluid logo"><a href="../index.html">STAR MEDIA</a></h1>
		</header>

		<!-- КОНТЕНТ -->
		<main class="container-fluid main">
			<h2 class="main__title">Заголовок из БД</h2>
			<!-- СТАТЬЯ -->
			<div class="box-article">
				<div class="box-article__item">
					<img src="../img/poli.jpg" alt="">
					<p class="box-article__info ml-4">
						<span class="box-article__author">АВТОР: ИЗ БД</span>
						<span class="box-article__date">ДАТА ИЗ БД</span>
					</p>
				</div>
				<div class="col-md-10 box-article__text mt-5">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis illum dignissimos ullam error eius
						adipisci? Hic, ea tempore quam cupiditate quisquam earum repellat natus quidem pariatur totam accusamus
						porro ipsam magni voluptate? Veniam asperiores commodi beatae molestiae? Saepe minus labore vel quod
						harum. Ratione omnis nulla modi earum sapiente, natus delectus ea quis assumenda nihil nobis consequatur
						odit hic, quaerat aliquam voluptatem maxime qui ex alias laborum consectetur aliquid. Deleniti praesentium
						animi autem. Deleniti veritatis qui delectus totam, esse asperiores eligendi id libero sed atque sapiente
						recusandae ullam doloremque, veniam perferendis reiciendis quo fugit odio magnam nulla? Esse debitis
						aperiam, nobis rem pariatur labore dignissimos illum excepturi quis nisi, asperiores maxime quod
						laboriosam distinctio neque id consequuntur vitae exercitationem est, illo eaque laborum accusantium vel.
						Voluptate dolore obcaecati fuga maiores deleniti unde. Esse quod unde asperiores earum dolore tempora?
						Quaerat non vitae eligendi minus recusandae officia quos et dolorem perspiciatis!
					</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis illum dignissimos ullam error eius
						adipisci? Hic, ea tempore quam cupiditate quisquam earum repellat natus quidem pariatur totam accusamus
						porro ipsam magni voluptate? Veniam asperiores commodi beatae molestiae? Saepe minus labore vel quod
						harum. Ratione omnis nulla modi earum sapiente, natus delectus ea quis assumenda nihil nobis consequatur
						odit hic, quaerat aliquam voluptatem maxime qui ex alias laborum consectetur aliquid. Deleniti praesentium
						animi autem. Deleniti veritatis qui delectus totam, esse asperiores eligendi id libero sed atque sapiente
						recusandae ullam doloremque, veniam perferendis reiciendis quo fugit odio magnam nulla? Esse debitis
						aperiam, nobis rem pariatur labore dignissimos illum excepturi quis nisi, asperiores maxime quod
						laboriosam distinctio neque id consequuntur vitae exercitationem est, illo eaque laborum accusantium vel.
						Voluptate dolore obcaecati fuga maiores deleniti unde. Esse quod unde asperiores earum dolore tempora?
						Quaerat non vitae eligendi minus recusandae officia quos et dolorem perspiciatis!
					</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis illum dignissimos ullam error eius
						adipisci? Hic, ea tempore quam cupiditate quisquam earum repellat natus quidem pariatur totam accusamus
						porro ipsam magni voluptate? Veniam asperiores commodi beatae molestiae? Saepe minus labore vel quod
						harum. Ratione omnis nulla modi earum sapiente, natus delectus ea quis assumenda nihil nobis consequatur
						odit hic, quaerat aliquam voluptatem maxime qui ex alias laborum consectetur aliquid. Deleniti praesentium
						animi autem. Deleniti veritatis qui delectus totam, esse asperiores eligendi id libero sed atque sapiente
						recusandae ullam doloremque, veniam perferendis reiciendis quo fugit odio magnam nulla? Esse debitis
						aperiam, nobis rem pariatur labore dignissimos illum excepturi quis nisi, asperiores maxime quod
						laboriosam distinctio neque id consequuntur vitae exercitationem est, illo eaque laborum accusantium vel.
						Voluptate dolore obcaecati fuga maiores deleniti unde. Esse quod unde asperiores earum dolore tempora?
						Quaerat non vitae eligendi minus recusandae officia quos et dolorem perspiciatis!
					</p>
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
					<form>
						<div class="form-group">
							<label for="enter-log" class="col-form-label"><span class="text-danger">*</span> Логин:</label>
							<input type="text" class="form-control" id="enter-log" placeholder="Введите ваш логин">
						</div>
						<div class="form-group">
							<label for="enter-pass" class="col-form-label"><span class="text-danger">*</span> Пароль:</label>
							<input type="text" class="form-control" id="enter-pass" placeholder="Введите ваш пароль">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary">Войти</button>
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
					<form>
						<div class="form-group">
							<label for="reg-name" class="col-form-label"><span class="text-danger">*</span> ФИО:</label>
							<input type="text" class="form-control" id="reg-name" placeholder="Введите ваше ФИО">
						</div>
						<div class="form-group">
							<label for="reg-mail" class="col-form-label"><span class="text-danger">*</span> E-mail:</label>
							<input type="email" class="form-control" id="reg-mail" placeholder="Введите ваш e-mail">
						</div>
						<div class="form-group">
							<label for="reg-pass" class="col-form-label"><span class="text-danger">*</span> Пароль:</label>
							<input type="password" class="form-control" id="reg-pass" placeholder="Придумайте надежный пароль">
						</div>
						<div class="form-group">
							<label for="reg-pass-confirm" class="col-form-label"><span class="text-danger">*</span> Повторите
								пароль:</label>
							<input type="password" class="form-control" id="reg-pass-confirm" placeholder="Повторите пароль">
						</div>
						<div class="form-group"><span class="text-danger">*</span> Зарегистрироваться как:</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reg-check" id="reg-check-user" value="">
							<label class="form-check-label" for="reg-check-user">
								Пользователь
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="reg-check" id="reg-check-author" value="">
							<label class="form-check-label" for="reg-check-author">
								Автор статьи
							</label>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary">Зарегистрироваться</button>
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