<?php
include("config/db_connect.php");
$name = $_POST['name'];
$type_id = $_POST['type_id'];
$category_id = $_POST['category_id'];

$sql = "INSERT INTO subcategories (name, type_id, category_id) VALUES(:value1,:value2,:value3)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$type_id);
$statement->bindParam(':value3',$category_id);
$statement->execute();

header("location:subcat_list.php");
?>