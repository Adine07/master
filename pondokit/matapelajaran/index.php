<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<html>
	<head>
	<link rel="icon" type="png/jpg" href="../layout/image/title-icon.png">
		<title>Form Santri | MAPEL</title>
	</head>
	<body>
		<?php 
			include '../layout/menu.php';
		?>
		<form>
			<p class="add"><a href="adding.php"><img src="../layout/image/add_book.png"></a></p>
			<table class="tabeel" id="mapel">
				<tr>
					<th>No</th>
					<th>Matapelajaran</th>
					<th>Edit</th>
				</tr>
				<?php
					include 'create_table.php';
					$no = 1;
					$sql = "SELECT * FROM matapelajaran";
					$result = mysqli_query($connect,$sql);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "
								<tr>
									<td>".$no++."</td>
									<td>".$row['mapel']."</td>
									<td>
										<a href='edit.php?id=".$row['id']."'><img src='../layout/image/edit.png'></a>
										<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Are You Sure to Delete This Mapel?\")'><img src='../layout/image/delete.png'></a>
									</td>
								</tr>
							";	
						}
					}
				?>
			</table>
		</form>
	</body>
</html>


<?php 
}else{
	header('location:../login.php');
}
 ?>

