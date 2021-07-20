<?php
include("config/db_connect.php");
$name = $_POST['name'];
$codeno = $_POST['codeno'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$subcategory_id = $_POST['subcategory_id'];
$sql = "INSERT INTO items (name, codeno, price, discount, subcategory_id) VALUES(:value1,:value2,:value3,:value4,:value5)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$codeno);
$statement->bindParam(':value3',$price);
$statement->bindParam(':value4',$discount);
$statement->bindParam(':value5',$subcategory_id);
$statement->execute();

header("location:item_list.php");
?>