<?php
include("config/db_connect.php");
$id = $_POST['id'];
$name = $_POST['name'];
$category_id = $_POST['category_id'];
$type_id = $_POST['type_id'];
$sql = "UPDATE subcategories SET name=:value2,category_id=:value3,type_id=:value4 WHERE id=:value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value2',$name);
$statement->bindParam(':value3',$category_id);
$statement->bindParam(':value4',$type_id);
$statement->bindParam(':value1',$id);
$statement->execute();

header("location:subcat_list.php");
?>