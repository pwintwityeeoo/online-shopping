<?php
include("config/db_connect.php");
$name = $_POST['name'];
$id = $_POST['id'];
$type_id = $_POST['type_id'];
$cover = $_FILES['cover']['name'];
$tmp = $_FILES['cover']['tmp_name'];

if($cover) {
  move_uploaded_file($tmp, "covers/$cover");
  $sql = "UPDATE categories SET name=:value1,type_id=:value3,cover=:value4 WHERE id =:value2";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':value1',$name);
  $statement->bindParam(':value2',$id);
  $statement->bindParam(':value3',$type_id);
  $statement->bindParam(':value4',$cover);
  $statement->execute();
  } else {
    $sql = "UPDATE categories SET name=:value1,type_id=:value3 WHERE id =:value2";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':value1',$name);
    $statement->bindParam(':value2',$id);
    $statement->bindParam(':value3',$type_id);
    $statement->execute();
  }

  header("location:cat_list.php");
?>