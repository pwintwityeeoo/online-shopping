<?php
include("config/db_connect.php");
$name = $_POST['name'];
$codeno = $_POST['codeno'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
if($cover) {
  move_uploaded_file($tmp, "covers/$cover");
  }
$price = $_POST['price'];
$discount = $_POST['discount'];
$subcategory_id = $_POST['subcategory_id'];
$sql = "INSERT INTO items (name, codeno, cover, price, discount, subcategory_id) VALUES(:value1,:value2,:value3,:value4,:value5,:value7)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$name);
$statement->bindParam(':value2',$codeno);
$statement->bindParam(':value3',$cover);
$statement->bindParam(':value4',$price);
$statement->bindParam(':value5',$discount);
$statement->bindParam(':value7',$subcategory_id);

$statement->execute();
$last_id = $conn->lastInsertId();

if($statement->rowCount()){
  header("location:item_detail.php?id=$last_id");
}
?>