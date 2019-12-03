<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<?php
include 'create_table.php';
$ID = $_POST['id'];
$mapel = $_POST['mapel'];

$sql = "UPDATE matapelajaran SET mapel = '$mapel' WHERE id = '$ID'";
mysqli_query($connect, $sql);
header('location:index.php');?>

<?php 
}else{
	header('location:../login.php');
}
 ?>







