<?php 
include '../connect.php';
$id = $_POST['id'];
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

$sql = "UPDATE orderr SET table_number='$table', item_id='$item', qty='$qty', total='$total' WHERE id='$id'";
mysqli_query($connect,$sql);
header('location:index.php');
