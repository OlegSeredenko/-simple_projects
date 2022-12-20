<?php

session_start();
define('ADMIN','admin');
define('ADMIN_PASSWORD','7777');

if(!empty($_POST['login'])){
    if(($_POST['login']=== ADMIN) && ($_POST['password']=== ADMIN_PASSWORD) ){
        $_SESSION['admin'] = ADMIN;
        $_SESSION['admin_password'] = ADMIN_PASSWORD;
        $_SESSION['result'] = 'Вы успешно авторизовались';
    }else{
        $_SESSION['result'] = 'Неверный логин или пароль!';
    }
    header("Location: session1.php");
    die;
}

?>

<ul>
    <li><a href="session1.php">Session1</a></li>
    <li><a href="secret.php">Secret</a></li>
</ul>

<hr>
<?php
    if(isset($_SESSION['result'])){
         echo $_SESSION['result'];
         unset($_SESSION['result']);
    }
?>
<form action="" method="post" >
    <input type="text" name="login" placeholder="Enter login" >
    <input type="password" name="password" placeholder="Enter password" >
    <button type="submit" >Enter</button>
</form>