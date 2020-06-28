<?php
  $data = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = 'кино'");
  $rows = mysqli_fetch_all($data);
  for($i=0; $i< mysqli_num_rows($data); $i++){
    echo '<div class="box-news__item">
      <p class="m-0"><a class="box-news__title" href="article.php/?type='.$_GET["type"].'&id='.$rows[$i][0].'">'.mb_strtoupper($rows[$i][12]).'</a> <span class="box-news__date">'.$rows[$i][5].'</span></p>
      <div class="wrap-info">
        <a href="article.php/?type='.$_GET["type"].'&id='.$rows[$i][0].'" class="wrap-info__link">
          <div class="wrap-img">
            <img class="box-news__img" src="php/files/'.$rows[$i][6].'" alt="">
          </div>
          <span class="h3 box-news__subtitle">'.$rows[$i][3].'</span>
        </a>
        <p class="box-news__text">'.str_replace("�", "", mb_substr($rows[$i][4], 0, 150)).'</p>
      </div>
    </div>';
  }
?>