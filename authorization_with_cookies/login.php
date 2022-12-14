<?php
if(!empty($_POST)){

    require __DIR__.'/auth.php';

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if(checkAuth($login, $password)){
        setcookie('login',$login, 0, '/');
        setcookie('password',$password, 0, '/');
        header ('Location: /index.php');
    }else{
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
    <head>
        <title>Страница входа</title>
    </head>
    <?php if (isset($error)): ?>
    <span style="color: red" ><?= $error ?> </span>
    <?php endif; ?>
    <body>
        <form action="/login.php" method="post" >
            <input type="text" name="login" ><br>
            <input type="password" name="password" ><br>
            <input type="submit" value="Войти" >
        </form>
    </body>
</html>