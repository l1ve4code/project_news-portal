<h2 class="main__title">НОВОСТИ</h2>
				<?php
					$pol = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'политика'");
					$pol_row = mysqli_fetch_assoc($pol);
					$sport = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'спорт'");
					$sport_row = mysqli_fetch_assoc($sport);
					echo '<div class="box-news">
									<div class="box-news__item">
										<p class="m-0"><a class="box-news__title" href="#">ПОЛИТИКА</a> <span class="box-news__date">'.$pol_row["date"].'</span></p>
										<div class="wrap-info">
											<a href="#" class="wrap-info__link">
												<div class="wrap-img">
													<img class="box-news__img" src="img/Lukashenko.jpg" alt="Лукашенко">
												</div>
												<span class="h3 box-news__subtitle">'.$pol_row["title"].'</span>
											</a>
										</div>
									</div>
									<div class="box-news__item">
										<p class="m-0"><a class="box-news__title" href="#">СПОРТ</a> <span class="box-news__date">'.$sport_row["date"].'</span></p>
										<div class="wrap-info">
											<a href="#" class="wrap-info__link">
												<div class="wrap-img">
													<img class="box-news__img" src="img/boxing.jpg" alt="Лукашенко">
												</div>
												<span class="h3 box-news__subtitle">'.$sport_row["title"].'</span>
											</a>
										</div>
									</div>';


					$film = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'кино'");
					$film_row = mysqli_fetch_assoc($film);
					$tech = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'технологии'");
					$tech_row = mysqli_fetch_assoc($tech);
					$music = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'музыка'");
					$music_row = mysqli_fetch_assoc($music);
					echo '<div class="box-news__item">
									<div>
										<p class="m-0"><a class="box-news__title" href="#">КИНО</a> <span class="box-news__date">'.$film_row["date"].'</span></p>
										<a href="#" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$film_row["title"].'</span>
										</a>
									</div>
									<div>
										<p class="m-0"><a class="box-news__title" href="#">ТЕХНОЛОГИИ</a> <span class="box-news__date">'.$tech_row["date"].'</span></p>
										<a href="#" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$tech_row["title"].'</span>
										</a>
									</div>
									<div>
										<p class="m-0"><a class="box-news__title" href="#">МУЗЫКА</a> <span class="box-news__date">'.$music_row["date"].'</span></p>
										<a href="#" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$music_row["title"].'</span>
										</a>
									</div>
								</div>';

								$travel = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'путешествия'");
								$travel_row = mysqli_fetch_assoc($travel);
								echo '<div class="box-news__item">
												<p class="m-0"><a class="box-news__title" href="#">ПУТЕШЕСТВИЯ</a> <span class="box-news__date">'.$travel_row["date"].'</span></p>
												<div class="wrap-info">
													<a href="#" class="wrap-info__link">
														<div class="wrap-img">
															<img class="box-news__img" src="img/train.png" alt="Лукашенко">
														</div>
														<span class="h3 box-news__subtitle">'.$travel_row["title"].'</span>
													</a>
												</div>
											</div>';

				?>
			</div>