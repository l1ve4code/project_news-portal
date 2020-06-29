<h3 class="mt-5">ПОДПИСКИ:</h3>
<?php
  $user_id = $_SESSION["user"]["id"];

  $subs_db = mysqli_fetch_all(mysqli_query($connect, "SELECT subscribe.id, themes.name FROM `subscribe` JOIN themes ON themes.id = subscribe.theme_id WHERE subscribe.user_id = '$user_id'"));
  echo '<ol class="sub-list">';
  for($i=0;$i < count($subs_db); $i++){
    echo '<li class="sub-list__item"><span class="sub-list__title">'.mb_strtoupper($subs_db[$i][1]).'</span> <a class="sub-list__link" href="/php/includes/unscribe.php/?id='.$subs_db[$i][0].'">ОТПИСАТЬСЯ</a></li>';
  }
  echo '</ol>';
?>