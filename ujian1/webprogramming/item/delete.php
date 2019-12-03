<?php 
	include '../connect.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM item WHERE id='$id'";
	$result = mysqli_query($connect,$sql);
	header('location:index.php');
?>