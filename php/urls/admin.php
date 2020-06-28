<?php
  if(!isset($_GET["who"])){
    echo '<a class="main__news" href="?who=authors">ТАБЛИЦА АВТОРОВ</a>
          <a class="main__news" href="?who=users">ТАБЛИЦА ПОЛЬЗОВАТЕЛЕЙ</a>
          <a class="main__news" href="?who=articles">ТАБЛИЦА СТАТЕЙ</a>';
  }
  else{
    switch($_GET["who"]){
      case "authors":
        $arr = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `authors`")); 
        $names = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `authors`")); 
        echo "<div style = 'overflow-x: scroll;'><table class = 'table'>
        <thead class = 'thead-dark'>
          <tr>";
            for($i = 0; $i < count(array_keys($names)); $i++){
              echo "<th scope='col'>".array_keys($names)[$i]."</th>";
            }
          echo "</tr>
        </thead>
        <tbody>";
          foreach($arr as $value){
            echo "<tr>";
            for($i = 0; $i < count(array_keys($value)); $i++){
              echo "<td>".$value[array_keys($value)[$i]]."</td>";
            }
            echo "</tr>";
          }
        echo "</tbody>
      </table></div>"; 
        break;
      case "users":
        $arr = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `users`")); 
        $names = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `users`")); 
        echo "<div style = 'overflow-x: scroll;'><table class = 'table'>
        <thead class = 'thead-dark'>
          <tr>";
            for($i = 0; $i < count(array_keys($names)); $i++){
              echo "<th scope='col'>".array_keys($names)[$i]."</th>";
            }
          echo "</tr>
        </thead>
        <tbody>";
          foreach($arr as $value){
            echo "<tr>";
            for($i = 0; $i < count(array_keys($value)); $i++){
              echo "<td>".$value[array_keys($value)[$i]]."</td>";
            }
            echo "</tr>";
          }
        echo "</tbody>
      </table></div>"; 
        break;
      case "articles":
        $arr = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `articles`")); 
        $names = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `articles`")); 
        echo "<div style = 'overflow-x: scroll;'><table class = 'table'>
        <thead class = 'thead-dark'>
          <tr>";
            for($i = 0; $i < count(array_keys($names)); $i++){
              echo "<th scope='col'>".array_keys($names)[$i]."</th>";
            }
          echo "</tr>
        </thead>
        <tbody>";
          foreach($arr as $value){
            echo "<tr>";
            for($i = 0; $i < count(array_keys($value)); $i++){
              echo "<td>".$value[array_keys($value)[$i]]."</td>";
            }
            echo "</tr>";
          }
        echo "</tbody>
      </table></div>"; 
        break;
    }
  }
?>