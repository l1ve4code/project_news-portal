<?php
  $type_ar = "";
  switch($_GET["type"]){
    case "film":
      $type_ar = "кино";
      break;
    case "sport":
      $type_ar = "спорт";
      break;
    case "music":
      $type_ar = "музыка";
      break;
    case "history":
      $type_ar = "история";
      break;
    case "travel":
      $type_ar = "путешествия";
      break;
    case "art":
      $type_ar = "искусство";
      break;
    case "mode":
      $type_ar = "мода";
      break;
    case "business":
      $type_ar = "бизнес";
      break;
    case "tech":
      $type_ar = "технологии";
      break;
    case "politic":
      $type_ar = "политика";
      break;
  }
  if(isset($_GET["search"])){
    $search = base64_decode($_GET["search"]);
    $data = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = '$type_ar' AND articles.title LIKE "."'".$search."%'"."");
  }else{
    $data = mysqli_query($connect, "SELECT * FROM articles JOIN authors ON articles.author_id = authors.id JOIN themes ON articles.theme_id = themes.id WHERE themes.name = '$type_ar'");
  }
  $rows = mysqli_fetch_all($data);
  if(isset($_SESSION["user"])){
    if($_SESSION["user"]["type"] == "user"){
      $id = $rows[0][1];
      echo '<a class="mainnews main_update px-3 " href="php/includes/subscribe.php/?id='.$id.'">Подписаться</a>';
    }
  }
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