<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<?php
include 'create_table.php';
$ID = $_GET['id'];

$sql = "DELETE FROM santri WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');?>


<?php 
}else{
	header('location:../login.php');
}
?>





