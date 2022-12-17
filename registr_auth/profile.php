<?php 
session_start();

if(!$_SESSION['user']){
    header('Location: index.php');
}
?>
<!Doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" >
        <title>Профиль</title>
        <link  rel="stylesheet" href="main.css">
    </head>
    <body>
        <form>
            <img src="<?= $_SESSION['user']['avatar'] ?> " width="250px"  alt="avatar" >
            <h2 style="margin: 10px 0; " ><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?> </a>
            <a href="logout.php" class="logout" >Выход</a>
        </form>
    </body>
</html>