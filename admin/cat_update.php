<?php
include("config/db_connect.php");
$name = $_POST['name'];
$id = $_POST['id'];
$type_id = $_POST['type_id'];
$sql = "UPDATE categories SET name=:value1,type_id=:value3 WHERE id =:value2";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$id);
$statement->bindParam(':value3',$type_id);
$statement->execute();
//$categories = $statement->fetch(PDO::FETCH_ASSOC);
header("location:cat_list.php");
?>