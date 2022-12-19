<?php

if(!empty($_FILES)){
    

    $x = $_FILES['file']['name'];
    
    $extension = strrchr($x, ".");
    if($_POST['name'] != ''){
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$_POST['name']."$extension" );
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.time().$_FILES['file']['name'] );
    }
    if($_FILES['file']['error'] === 0){
        header('Location: succes_upload.php');
    }elseif(!empty($_POST)){
        header('Location: error_upload.php');
    }else{
        header('Location: index.php'); 
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" >
    <title>Загрузка файлов</title>
    <link  rel="stylesheet" href="main.css">
</head>
    <body>
        <form action="" method="post" enctype="multipart/form-data" >
            <p>
                <label >Задайте имя, с которым файл сохранится на сервере</label>
                <input placeholder="Имя файла" type="text" name="name">
            </p>
            <p>     
                <label >Файл размером не более 50 мегабайт</label>
                <input type="file" name="file">
            </p>
            <p>
                <button type="submit" name="send" value="test">Отправить</button>
            </p>
        </form>
    </body>
</html>