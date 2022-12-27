<?php
    session_start();

    $login = $_POST['login'];

    $password = md5($_POST['password']);

    $database = file_get_contents('database.json');
        $database = json_decode($database, true);
        for($i = 0; $i < count($database); $i++){
            if(($database[$i][1] == $login) && ($database[$i][3] == $password)) {
                $_SESSION['user'] = [
                    //"id" => $user['id'],
                    "full_name" => $database[$i][0],
                    "avatar" => $database[$i][4],
                    "email" => $database[$i][2]
                ];
                header('Location: profile.php');
                break;
            }else{
                $_SESSION['message'] = 'Не верный логин или пароль';
                header('Location: index.php');
            }
        }

