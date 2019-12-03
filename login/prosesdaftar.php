<?php
include 'koneksi.php';

$nama=$_POST['username'];
$password=$_POST['password'];

$dat=mysqli_query($koneksi,"INSERT INTO data (username,password) values('$nama','$password')");

	if($dat){
		echo "berhasil daftar";
	}else{
		echo "gagal daftar<a href=\"index.php\">silahkan login</a>";
	}
?>
