<?php
include("config/db_connect.php");
$id = $_POST['id'];
$sql = "DELETE FROM subcategories WHERE id = :value1";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$id);
$statement->execute();

header("location:subcat_list.php");
?>