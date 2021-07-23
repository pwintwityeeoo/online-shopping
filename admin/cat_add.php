<?php
include("config/db_connect.php");
$name = $_POST['name'];
$type_id = $_POST['type_id'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
if($cover) {
  move_uploaded_file($tmp, "covers/$cover");
  } 
$sql = "INSERT INTO categories (name, type_id, cover) VALUES(:value1,:value2,:value3)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$type_id);
$statement->bindParam(':value3',$cover);
$statement->execute();

header("location:cat_list.php");
?>