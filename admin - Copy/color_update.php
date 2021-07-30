<?php
include("config/db_connect.php");
$color_name = $_POST['colorcode'];
$id = $_POST['id'];

$sql = "UPDATE colors SET colorcode=:value1 WHERE id =:value2";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$color_name);
$statement->bindParam(':value2',$id);
$statement->execute();

  header("location:color_list.php");
?>