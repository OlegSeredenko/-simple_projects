<?php

session_start();

if($_GET['do'] === 'exit'){
    unset($_SESSION['admin']);
    unset($_SESSION['admin_password']);
    header("Location: session1.php");
}

if( !isset($_SESSION['admin']) ){
    die('Вы не авторизованы');
}

echo "Добро пожаловать, {$_SESSION['admin']} ";
?>
<a href="secret.php?do=exit">Выйти</a>

<ul>
    <li><a href="session1.php">Session1</a></li>
    <li><a href="secret.php">Secret</a></li>
</ul>

