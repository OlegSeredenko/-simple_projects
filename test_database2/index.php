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
        require_once 'functions.php';

        $connect = connect();
        //обновим цену у товара 'яблоки'
        $sql = "UPDATE products SET cost='85' WHERE name='яблоки'";
        if (mysqli_query($connect, $sql)) {
            echo "Record updated successfully"."<br>";
          } else {
            echo "Error updating record: " . mysqli_error($connect);
          }
        //добавление данных в базу
        $sql_insert = "INSERT INTO products (id, name, description, cost, amount, image) 
        VALUES (8, 'вишня', 'молодая', 115, 1150, 'product8.png' )";
        if (mysqli_query($connect, $sql_insert)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($connect);
          }
        
        $array = select($connect);      
        echo '<pre>';
        print_r($array);//Выводим всю информацию
        echo '<pre>';
        close($connect);
        ?>
    </body>
</html>