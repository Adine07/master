<?php 
include '../connect.php';
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "INSERT INTO item (category_id, name, price, status) VALUES ('$category','$name','$price','$status')";
mysqli_query($connect,$sql);
header('location:index.php');

 ?>