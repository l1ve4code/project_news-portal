<?php 
	session_start();
	require_once "php/includes/connect.php";
	if(!isset($_SESSION["user"])){
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
						include_once "php/urls/menu.php"
					?>
				<div class="search">
					<input class="search__input" type="search" placeholder="ПОИСК...">
					<button class="search__btn"><img src="../img/ico/search.svg" alt=""></button>
				</div>
				<div class="social">
					<a class="social__link" href="#"><img src="/img/ico/facebook.svg" alt=""></a>
					<a class="social__link" href="#"><img src="/img/ico/instagram.svg" alt=""></a>
					<a class="social__link" href="#"><img src="/img/ico/youtube.svg" alt=""></a>
					<a class="social__link" href="#"><img src="/img/ico/twitter.svg" alt=""></a>
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
				<a class="wrap-enter__link mb-4" href="/profile.php"><img class="wrap-enter__img" src="/img/ico/acount.svg" alt=""></a>
				<p class = "text-white"><?=$_SESSION["user"]["name"]?></p>
				<form action="/php/includes/logout.php" method = "post">
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
			  <!-- Модальное окно -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Удаление</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action = "/php/includes/delete.php/?who=<?=$_GET["who"]?>" method = "POST">
								<div class="form-group">
										<label for="disabledSelect">Выберете</label>
										<select id="disabledSelect" class="form-control" name = "option">
											<option>Выбрать</option>
											<?php
												if($_GET["who"] == "authors"){
													$arr = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `authors`")); 
												}
												else if($_GET["who"] == "users"){
													$arr = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `users`")); 
												}
												else if($_GET["who"] == "articles"){
													$arr = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `articles`")); 
												}
												for($i = 0; $i < count(array_keys($arr)); $i++){
													echo "<option value = '".array_keys($arr)[$i]."'>".array_keys($arr)[$i]."</option>";
												}
											?>
										</select>
									</div><br>
									<div class="form-group">
										<label for="disabledTextInput">Данные</label>
										<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" name = "text">
									</div>
									<div class="form-check">
										<label class="form-check-label">Подтверждаю свои действия
											<input class="form-check-input ml-2" type="checkbox" name = "enabled">
										</label>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
										<input type = "submit" value = "Удалить" class="btn btn-danger">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				    <!-- Модальное окно изменения -->
				<div class="modal fade" id="edit" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Редактирование</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="/php/includes/edit.php/?who=articles" method="POST">
									<div class="form-group">
										<label>Введите ID
										</label>
										<input type="text" class="form-control" placeholder="Введите ID" name="unique_id">
									</div>
									<div class="form-group">
									<?php
										$arr = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `articles`")); 
											for($i = 0; $i < count(array_keys($arr)); $i++){
												if($_GET["who"] == "articles" && $i == 0){
													continue;
												}
												echo "<label>".array_keys($arr)[$i]."</label>";
												echo "<input type='text' class='form-control' placeholder='Введите данные' name='edit".$i."'>";
											}
										?>
									</div>
									<div class="form-check p-0 mb-3">
										<label class="form-check-label">Подтверждаю свои действия
											<input class="form-check-input ml-2" type="checkbox" name = "editable">
										</label>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
										<input type="submit" value="Сохранить" class="btn btn-primary">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			<h2 class="main__title">ЛИЧНЫЙ КАБИНЕТ</h2>
				<?php
					require_once "php/includes/connect.php";
					switch($_SESSION["user"]["type"]){
						case "admin":
							include_once "php/urls/admin.php";
							break;
						case "author":
							include_once "php/urls/authors.php";
							break;
						case "user":
							include_once "php/urls/subs.php";
							break;
					}
				?>
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