<?php
function connect(){
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);//Подключаемся к базе данных
    mysqli_set_charset($connect, "utf-8");

    if (!$connect) {
        die ("Connection failed: ". mysqli_connect_error());
    }
    return $connect;
}

function close($connect){
    mysqli_close($connect);
}
