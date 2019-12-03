<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="png/jpg" href="../layout/image/title-icon.png">
	<title>Form Santri | MAPEL SANTRI</title>
</head>
<body>
	<?php include '../layout/menu.php';?>
	<form>
		<p class="add"><a href="add.php"><img src="../layout/image/add_book2.png"></a></p>
		<table class="tabeel">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Matapelajaran</th>
				<th>Nilai</th>
				<th>Rank</th>
				<th>SET</th>
			</tr>
			<?php
				include 'create_table.php';
				$no =1;
				$sql = "SELECT matapelajaran.mapel, mapel_santri.id, mapel_santri.nilai_num, mapel_santri.nilai_alpha, santri.name, mapel_santri.mapel_id FROM mapel_santri JOIN matapelajaran ON mapel_santri.mapel_id = matapelajaran.id JOIN santri ON mapel_santri.santri_id = santri.id";
				$result = mysqli_query($connect, $sql);
				if (mysqli_num_rows($result)>0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "
							<tr>
								<td>".$no++."</td>
								<td>".$row['name']."</td>
								<td>".$row['mapel']."</td>
								<td>".$row['nilai_num']."</td>
								<td>".$row['nilai_alpha']."</td>
								<td>
									<a href='edit.php?id=".$row['id']."'><img src='../layout/image/edit.png'></a>
									<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Are You Sure to Delete This?\")'><img src='../layout/image/delete.png'></a>
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





