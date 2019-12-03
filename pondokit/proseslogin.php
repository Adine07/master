<?php 

	session_start();
	include "./connect/connection.php";

	$email = $_POST['email'];
	$passwd = $_POST['passwd'];

	if(!empty($email)){

		$sql = "select * from santri where email='$email' and password='$passwd'";
		$result = mysqli_query($connect,$sql);

		if (mysqli_num_rows($result)>0) {
			$data = mysqli_fetch_assoc($result);
			$_SESSION['email']=$data['email'];
			$_SESSION['nama']=$data['name'];
			header('location:index.php');
		}else{
			header('location:login.php');
		}
	}else{
		header('location:login.php');
	}

 ?>