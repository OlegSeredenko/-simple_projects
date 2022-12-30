<?php
//Использование функции time и метки времение unix
//unix time
$t = time();
echo date('Y-M-D H:i A', $t), '<br>';
echo $t, '<br>';
//change time zone
date_default_timezone_set('America/Los_Angeles');
$t = time();
echo date('Y-M-D H:i A', $t), '<br>';
echo $t,'<br>';
//timestamp to unix
$s = "10 September 2000 20:00";
echo strtotime($s),"<br>";
