<?php
include("config/db_connect.php");
$id = $_POST['id'];
$name = $_POST['name'];
$codeno = $_POST['codeno'];
$price = $_POST['price'];
$discount = $_POST['discount'];

$subcategory_id = $_POST['subcategory_id'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];
if($cover){
  move_uploaded_file($tmp, "covers/$cover");
  $sql = "UPDATE items SET name=:value2,codeno=:value3,cover=:value4,price=:value5,discount=:value6,subcategory_id=:value8 WHERE id=:value1";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':value2',$name);
  $statement->bindParam(':value3',$codeno);
  $statement->bindParam(':value4',$cover);
  $statement->bindParam(':value5',$price);
  $statement->bindParam(':value6',$discount);
  $statement->bindParam(':value8',$subcategory_id);
  $statement->bindParam(':value1',$id);
  $statement->execute();
}else {
  $sql = "UPDATE items SET name=:value2,codeno=:value3,price=:value5,discount=:value6,subcategory_id=:value8 WHERE id=:value1";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':value2',$name);
  $statement->bindParam(':value3',$codeno);
  $statement->bindParam(':value5',$price);
  $statement->bindParam(':value6',$discount);

  $statement->bindParam(':value8',$subcategory_id);
  $statement->bindParam(':value1',$id);
  $statement->execute();
}

header("location:item_list.php");
?>