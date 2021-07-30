<?php
include("config/db_connect.php");
$names = $_POST['name'];
$subcategory_id = $_POST['subcategory_id'];
foreach($names as $name){
  $sql = "INSERT INTO sizes(name, subcategory_id) VALUES (:value1,:value2)";
  $statement = $conn->prepare($sql);
  $statement->bindParam(':value1',$name);
  $statement->bindParam(':value2',$subcategory_id);
  $statement->execute();
}
header("location: size_list.php");
?>