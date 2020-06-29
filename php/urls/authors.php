<?php
  if(!isset($_GET["who"])){
    echo '<a class="main__news" href="?who=add">ПРЕДЛОЖИТЬ НОВОСТЬ</a>';
  }
  else{
    if($_GET["who"] == "add"){
      echo '<h4 class="main__title">ПРЕДЛОЖИТЬ НОВОСТЬ</h4>
              <form class="col-md-8 text-body font-weight-bold row" action = "php/includes/add.php" method = "post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="mb-0 mt-3" for="select-theme">ВЫБЕРЕТЕ ТЕМУ:</label>
                  <select class="custom-select" id="select-theme" name = "type" required>
                    <option selected disabled>ВЫБЕРИТЕ ТЕМУ:</option>
                    <option value="1">СПОРТ</option>
                    <option value="2">МУЗЫКА</option>
                    <option value="3">КИНО</option>
                    <option value="4">ПУТЕШЕСТВИЯ</option>
                    <option value="5">БИЗНЕС</option>
                    <option value="6">ИСТОРИЯ</option>
                    <option value="7">ИСКУССТВО</option>
                    <option value="8">МОДА</option>
                    <option value="9">ПОЛИТИКА</option>
                    <option value="10">ТЕХНОЛОГИИ</option>
                  </select>
                  <label class="mb-0 mt-3" for="name-article">НАЗВАНИЕ СТАТЬИ (максимум 60 символов):</label>
                  <input type="text" class="form-control" id="name-article" placeholder="ВВЕДИТЕ НАЗВАНИЕ СТАТЬИ" value=""
                    required name = "title">
                  <label class="mb-0 mt-3" for="description">ОПИСАНИЕ СТАТЬИ:</label>
                  <textarea class="form-control description-articles" id="description" placeholder="ВВЕДИТЕ ОПИСАНИЕ СТАТЬИ" name = "description"></textarea>
                  <label class="mb-0 mt-3" for="download-file">ЗАГРУЗИТЕ ФОТО:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="download-file" name = "img" required>
                    <label class="custom-file-label" for="download-file">ЗАГРУЗИТЕ ПРЕВЬЮ СТАТЬИ</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-info ml-auto mt-3">ОТПРАВИТЬ</button>
              </form>';
    }
  }
?>