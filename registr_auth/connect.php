<?php

$connect = mysqli_connect('localhost', 'root','','register-bd');

if(!$connect){
    die('Error conect to database');
}
