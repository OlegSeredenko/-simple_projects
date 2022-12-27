<?php
session_start();
$database_path = 'database.json';

if(!file_exists($database_path)){
    $database = range(0,99);
    for($i = 0; $i < 100; $i++){
        $database[$i] = '';
    }
    file_put_contents('database.json', json_encode($database, JSON_UNESCAPED_UNICODE));
}

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    

    if($password === $password_confirm){
        $path = "uploads/".time().$_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], ''. $path)){
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: register.php');
        }
        $password = md5($password);

        $database = file_get_contents('database.json');
        $database = json_decode($database, true);
        for($i = 0; $i < count($database); $i++){
            if($database[$i] == ''){
                $database[$i] = array("$full_name", "$login", "$email", "$password", "$path");
                break;
            }
        }
        file_put_contents('database.json', json_encode($database, JSON_UNESCAPED_UNICODE));

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: index.php');
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: register.php');
    }
