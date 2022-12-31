<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>databasetest</title> 
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        require_once 'config.php';

        $connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);//Подключаемся к базе данных
        mysqli_set_charset($connect, "utf-8");

        if (!$connect) {
            die ("Connection failed: ". mysqli_connect_error());
        }
        $sql = "SELECT * FROM products";//С помощью SQL запроса выводим всю инофрмацию из таблицы 
        $result = mysqli_query($connect, $sql);

        $array = [];
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $array[] = $row;
            }
        }else{
            echo "0 results";
        }
        echo '<pre>';
        print_r($array);//Выводим всю информацию
        echo '<pre>';
        mysqli_close($connect);
        ?>
    </body>
</html>