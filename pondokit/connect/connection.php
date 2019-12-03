<?php
$serve = "localhost";
$user = "root";
$pass = "anda";
$data = "pondokit";

$connect= mysqli_connect($serve,$user,$pass,$data);

if (!$connect) {
	die("Koneksi gagal => " . mysqli_connect_error());
}

