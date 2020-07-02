<h2 class="main__title">НОВОСТИ</h2>
				<?php
					$pol = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id"));
					echo '<div class="box-news">
									<div class="box-news__item">
										<p class="m-0"><a class="box-news__title" href="/article.php/?type=politic&id='.$pol[0][0].'">ПОЛИТИКА</a> <span class="box-news__date">'.$pol[0][5].'</span></p>
										<div class="wrap-info">
											<a href="/article.php/?type=politic&id='.$pol[0][0].'" class="wrap-info__link">
												<div class="wrap-img">
													<img class="box-news__img" src="/php/files/'.$pol[0][6].'" alt="Лукашенко">
												</div>
												<span class="h3 box-news__subtitle">'.$pol[0][3].'</span>
											</a>
										</div>
									</div>
									<div class="box-news__item">
										<p class="m-0"><a class="box-news__title" href="/article.php/?type=sport&id='.$pol[1][0].'">СПОРТ</a> <span class="box-news__date">'.$pol[1][5].'</span></p>
										<div class="wrap-info">
											<a href="/article.php/?type=sport&id='.$pol[1][0].'" class="wrap-info__link">
												<div class="wrap-img">
													<img class="box-news__img" src="/php/files/'.$pol[1][6].'" alt="Лукашенко">
												</div>
												<span class="h3 box-news__subtitle">'.$pol[1][3].'</span>
											</a>
										</div>
									</div>';
					echo '<div class="box-news__item">
									<div>
										<p class="m-0"><a class="box-news__title" href="#">ПУТЕШЕСТВИЯ</a> <span class="box-news__date">'.$pol[2][5].'</span></p>
										<a href="/article.php/?type=travel&id='.$pol[2][0].'" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$pol[2][3].'</span>
										</a>
									</div>
									<div>
										<p class="m-0"><a class="box-news__title" href="#">ФИЛЬМЫ</a> <span class="box-news__date">'.$pol[3][5].'</span></p>
										<a href="/article.php/?type=film&id='.$pol[3][0].'" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$pol[3][3].'</span>
										</a>
									</div>
									<div>
										<p class="m-0"><a class="box-news__title" href="/article.php/?type=tech&id='.$pol[4][0].'">ТЕХНОЛОГИИ</a> <span class="box-news__date">'.$pol[4][5].'</span></p>
										<a href="/article.php/?type=tech&id='.$pol[4][0].'" class="wrap-info__link">
											<span class="h3 box-news__subtitle underline">'.$pol[4][3].'</span>
										</a>
									</div>
								</div>';
								echo '<div class="box-news__item">
												<p class="m-0"><a class="box-news__title" href="/article.php/?type=music&id='.$pol[5][0].'">МУЗЫКА</a> <span class="box-news__date">'.$pol[5][5].'</span></p>
												<div class="wrap-info">
													<a href="/article.php/?type=music&id='.$pol[5][0].'" class="wrap-info__link">
														<div class="wrap-img">
															<img class="box-news__img" src="/php/files/'.$pol[5][6].'" alt="Лукашенко">
														</div>
														<span class="h3 box-news__subtitle">'.$pol[5][3].'</span>
													</a>
												</div>
											</div>';

				?>
			</div>