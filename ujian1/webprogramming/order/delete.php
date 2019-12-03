<?php 
	include '../connect.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM orderr WHERE id='$id'";
	$result = mysqli_query($connect,$sql);
	header('location:index.php');
?>