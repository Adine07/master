<?php
include 'koneksi.php';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($koneksi,"SELECT * FROM data where username='$username' and password='$password'");
	$isi=mysqli_num_rows($query);
	
	if ($isi>0){
		header('location:dashboard.html');
	}else{
		header('location:index.php');
		
	}
	
	
?>
