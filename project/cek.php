<?php 
include "koneksi.php";

$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$login=mysql_query($koneksi,"select * from user where nama='$nama' and kelas='$kelas'");
$cek=mysql_num_rows($login);

echo $cek;

 ?>