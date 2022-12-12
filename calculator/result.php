<?php

$result =  require __DIR__ .'/calc.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Калькулятор</title>
    </head>
    <body>
        <b>Результат вычислений:</b>
        <br>
        <?= $result ?>
    </body>
</html>