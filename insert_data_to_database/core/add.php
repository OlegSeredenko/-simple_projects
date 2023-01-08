<?php
error_reporting(E_ALL);
require_once 'config.php';
require_once 'functions.php';

$title = $_POST['title'];
$descr_min = $_POST['descr_min'];
$description = $_POST['description'];

move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.time().$_FILES['image']['name']);

$connect = connect();
$sql = "INSERT INTO info (title, descr_min, description, image)
VALUES ('".$title."', '".$descr_min."', '".$description."', '".time().$_FILES['image']['name']."')";

if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }

close($connect);