<?php
include("config/db_connect.php");
$colorcode = $_POST['colorcode'];
$sql = "INSERT INTO colors (colorcode)VALUES(:value1)";
$statement = $conn->prepare($sql);
$statement->bindParam(':value1',$colorcode);
$statement->execute();

header("location:color_list.php");
?>