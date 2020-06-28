<?php
  require_once "../../php/includes/connect.php";
  if(!isset($_GET["who"])){
    echo '<a class="main__news" href="?who=authors">ТАБЛИЦА АВТОРОВ</a>
          <a class="main__news" href="?who=users">ТАБЛИЦА ПОЛЬЗОВАТЕЛЕЙ</a>
          <a class="main__news" href="?who=articles">ТАБЛИЦА СТАТЕЙ</a>';
  }
  else{
    switch($_GET["who"]){
      case "authors":
        print_r(mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `authors`")));
        break;
      case "users":
        print_r();
        break;
      case "articles":
        print_r();
        break;
    }
  }
?>