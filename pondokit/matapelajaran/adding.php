<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="png" href="../layout/image/title-icon.png">
	<title>Adding Data</title>
</head>
<body>
	<?php
		include '../layout/menu.php';
	?>
	<form action="add_proccess.php" method="POST">
		<table class="adding">
			<tr>
				<td>Mapel</td>
				<td>:</td>
				<td><input type="text" name="mapel"></td>
			</tr>
			<tr>
				<td colspan="3">
					<label>
						<img src="../layout/image/add.png">
						<input type="submit">
					</label>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php 
}else{
	header('location:../login.php');
}
 ?>



