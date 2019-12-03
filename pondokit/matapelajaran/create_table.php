<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<?php
include '../connect/connection.php';

$sql = "CREATE TABLE matapelajaran (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
mapel VARCHAR(20) NOT NULL
)";

mysqli_query($connect, $sql);?>

<?php 
}else{
	header('location:../login.php');
}
 ?>