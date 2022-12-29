<?php
// Открыть и прочитать CSV файл
$res = [];
if (($file = fopen('Mall_Customers.csv', 'r')) !== false) {
    while (($data = fgetcsv($file, 1000, " ")) !== false) {
        $out = '';
        for($i = 0; $i < count($data); $i++){
            $out .= $data[$i]." ";
        }
        $res[] = $out;
        echo $out;
        echo '<hr>';
    }
    fclose($file);
}
