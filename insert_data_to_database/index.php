<?php
  error_reporting(E_ALL);
  require_once 'core/config.php';
  require_once 'core/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <link href="core/main.css" rel="stylesheet">
         <title>project</title> 
    </head>
    <body>
      <div class="action_form">
        <form action="core/add.php" method="post" enctype="multipart/form-data">
          <div class="mb-2">
          <p>Title: <input type="text" name="title" class="form-control"></p></div>
          <div class="mb-2">
          <p>Min description:</p>
          <textarea name="descr_min" id="" cols="30" rows="10" class="form-control"></textarea></div>
          <div class="mb-2">
          <p>Description:</p>
          <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea></div>
          <div class="mb-2">
            Photo: <input type="file" name="image">
          </div>
          <div class="mb-2">
          <p><button type="sumbit" class="btn btn-secondary btn-lg btn-block" >Добавить</p></div>
        </form>
      </div>
    </body>
</html>