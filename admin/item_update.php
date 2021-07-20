<?php
include("config/db_connect.php");
$id = $_POST['id'];
$name = $_POST['name'];
$codeno = $_POST['codeno'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$subcategory_id = $_POST['subcategory_id'];
$sql = "UPDATE items SET name=:value1,codeno=:value2,price=:value3,discount=:value4,subcategory_id=:value5 WHERE id=:value6";
$statement = $pdo->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$codeno);
$statement->bindParam(':value3',$price);
$statement->bindParam(':value4',$discount);
$statement->bindParam(':value5',$subcategory_id);
$statement->bindParam(':value6',$id);
$statement->execute();

header("location:item_list.php");
?>