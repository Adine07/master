<?php 
include '../connect.php';
$table = $_POST['table'];
$item = $_POST['item'];
$qty = $_POST['qty'];

function total($item,$connect){
	$sql = "SELECT * FROM item WHERE id=".$item;
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
	return $row['price'];
}
$price = total($item,$connect);
$total = $price * $qty;

$sql = "INSERT INTO orderr (table_number, item_id, qty, total) VALUES ('$table','$item','$qty','$total')";
mysqli_query($connect,$sql);
header('location:index.php');

 ?>