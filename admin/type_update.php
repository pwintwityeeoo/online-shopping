<?php
include("config/db_connect.php");
$id = $_POST['id'];
$name = $_POST['name'];
$sql = "UPDATE types SET name='$name' WHERE id = $id";
$statement = $pdo->prepare($sql);
$statement->execute();
$types = $statement->fetchAll(PDO::FETCH_ASSOC);
header("location:type_list.php");
?>