<?php
include("config/db_connect.php");
$name = $_POST['name'];
$sql = "INSERT INTO types (name) VALUES(:value1)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->execute();

header("location:type_list.php");
?>