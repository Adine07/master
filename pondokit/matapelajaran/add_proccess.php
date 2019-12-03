<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<?php
include 'create_table.php';
$mapel = $_POST['mapel'];

$sql = "INSERT INTO matapelajaran (mapel) values ('$mapel')";
mysqli_query($connect,$sql);
header('location:index.php');
?>

<?php 
}else{
	header('location:../login.php');
}
 ?>