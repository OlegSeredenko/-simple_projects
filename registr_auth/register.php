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
        <form action="signup.php" method="post" enctype="multipart/form-data" >
            <label>ФИО</label>
            <input type="text" name="full_name" placeholder="Введите своё полное имя" >
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин" >
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите адрес своей почты" >
            <label>Изображение профиля</label>
            <input type="file" name="avatar" placeholder="Введите пароль" >
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" >
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Введите пароль" >
            <button type="submit" >Войти</button>
            <p>
                У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
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