<?php

if(empty($_GET)){
    return 'Ничего не передано';
}

if(empty($_GET['operation'])){
    return 'Операция не передана';
}

$x1 = $_GET['x1'] ?? null;
$x2 = $_GET['x2'] ?? null;

if ($x1 === null || $x2 === null) {
    return 'Аргументы 1 или 2 не переданы';
}

$operation = $_GET['operation'];

if (!is_numeric($x1) || !is_numeric($x2)) {
    return 'Введите число';
}

$x1 = (float)$x1;
$x2 = (float)$x2;

if (is_numeric($x1) && is_numeric($x2)){
    switch ($operation){
        case '+':
            $result = $x1 + $x2;
            break;
        case '-':
            $result = $x1 - $x2;
            break;
        case '/':
            $result = $x2 != 0 ? ($x1 / $x2) : 'На ноль делить нельзя';
            break;
        case '*':
            $result = $x1 * $x2;
            break;
        default:
            return 'Операция не поддерживается';
    }
}else {
    return 'Введите число';
}
$expression =  $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

return $expression . $result;