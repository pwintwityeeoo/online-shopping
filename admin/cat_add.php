<?php
include("config/db_connect.php");
$name = $_POST['name'];
$type_id = $_POST['type_id'];
$sql = "INSERT INTO categories (name, type_id) VALUES(:value1,:value2)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$type_id);
$statement->execute();

header("location:cat_list.php");
?>