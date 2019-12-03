<?php 
session_start();
if (isset($_SESSION['email'])){

 header('location:santri/index.php');

}else{
	header('location:login.php');
}

?>