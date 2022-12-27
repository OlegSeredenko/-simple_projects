<?php
session_start();

if($_SESSION['user']){
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang='ru'>
    <head>
        <meta charset='UTF-8' >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        
        <style>
            body {
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Roboto', sans-serif;
                padding: 20px 0;
            }
            p {
                margin: 10px 0;
            }
            div {
                margin: 20px 0;
            }
            a {
                color: #333;
                text-decoration: none;
                cursor: pointer;
                display: inline-block;
            }
            a:visited {
                color: #8F8E8E;
            }
            a:hover {
                color: #CE242B;
            }
            .msg {
                border: 1px solid #ffa908;
                border-radius: 3px;
                text-align: center;
                font-weight: 700;
            }
        </style>
        <title>Авторизация и регистрация</title>

    </head> 
    <body>
        <form  action="signup.php" method="post" enctype="multipart/form-data" >
            <div>
            <label>ФИО</label><br>
            <input type="text" name="full_name"  placeholder="Введите своё полное имя" >
            </div>
            <div>
            <label>Логин</label><br>
            <input type="text" name="login"  placeholder="Введите свой логин" >
            </div>
            <div>
            <label>Почта</label><br>
            <input type="email" name="email"  placeholder="Введите свой email" >
            </div>
            <div>
            <label>Изображение профиля</label><br>
            <input type="file" name="avatar" >
            </div>
            <div>
            <label>Пароль</label><br>
            <input type="password" name="password"  placeholder="Введите пароль" >
            </div>
            <div>
            <label>Подтверждение пароля</label><br>
            <input type="password" name="password_confirm"  placeholder="Введите пароль ещё раз" >
            </div>
            <button type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="index.php"> авторизируйтесь</a>!
            </p>
                <?php
                    if($_SESSION['message']){
                        echo '<p class="msg" >' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message']);
                 ?>
        </form>
    </body>
</html>