<?php
include("config/db_connect.php");
$id = $_POST['id'];
$sql = "DELETE FROM types WHERE id = :value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();

header("location:type_list.php");

?>
