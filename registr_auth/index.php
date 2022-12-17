<?php 
session_start();

if($_SESSION['user']){
    header('Location: profile.php');
}
?>
<!Doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" >
        <title>Регистрация и авторизация</title>
        <link  rel="stylesheet" href="main.css">
    </head>
    <body>
        <form action="signin.php" method="post" >
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин" >
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" >
            <button type="submit" >Войти</button>
            <p>
                У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
            </p>
            <?php
                if($_SESSION['message']){
                    echo ' <p class="msg"> '. $_SESSION['message'] . ' </p>' ;
                }
                unset($_SESSION['message'] );
               
            ?>
        </form>
    </body>
</html>