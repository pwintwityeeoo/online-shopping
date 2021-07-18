<?php
include("config/db_connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM types WHERE id = $id";
$statement = $pdo->prepare($sql);
$statement->execute();
$types = $statement->fetchAll(PDO::FETCH_ASSOC);
header("location:type_list.php");

?>
