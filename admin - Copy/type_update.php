<?php
include("config/db_connect.php");
$name = $_POST['name'];
$id = $_POST['id'];
$sql = "UPDATE types SET name=:value1 WHERE id =:value2";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$id);
$statement->execute();
//$types = $statement->fetch(PDO::FETCH_ASSOC);
header("location:type_list.php");
?>