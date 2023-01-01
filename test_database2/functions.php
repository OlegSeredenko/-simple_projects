<?php
function connect(){
    $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);//Подключаемся к базе данных
    mysqli_set_charset($connect, "utf-8");

    if (!$connect) {
        die ("Connection failed: ". mysqli_connect_error());
    }
    return $connect;
}

function select($connect){
    $sql = "SELECT * FROM products";//С помощью SQL запроса выводим всю инофрмацию из таблицы 
    $result = mysqli_query($connect, $sql);

    $array = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    }
    return $array;
} 

function close($connect){
    mysqli_close($connect);
}