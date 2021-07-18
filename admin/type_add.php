<?php
include("config/db_connect.php");
$name = $_POST['name'];
$sql = "INSERT INTO types (name) VALUES('$name')";
$statement = $pdo->prepare($sql);
$statement->execute();

header("location:type_list.php");
?>