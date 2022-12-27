<?php
session_start();

if(!$_SESSION['user']){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang='ru'>
    <head>
        <meta charset='UTF-8' >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <!--<link rel="stylesheet" href="main.css">-->
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
        <title>Профиль</title>

    </head> 
    <body>
        <form>
            <img src="<?= $_SESSION['user']['avatar']?> " width="250px" alt="avatar">
            <h2><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
            <a href="logout.php">Выход</a>
        </form>
    </body>
</html>