<html>
	<head>
		<title>Ulangan Web Programming</title>
	</head>
	<body>
		<form method="POST">
			<label for="nilai">Masukkan Total belanja Anda: 
				<input type="number" name="nilai">
			</label>
			<input type="submit" value="Go!">
		</form>
		<!-- ?php 
			$nilai = isset($_POST['nilai'])? $_POST['nilai']:"";

			if ($nilai >= 200000) {
				$poin = $_POST['nilai'];
				$diskon = $poin * 20/100;
				$bayar = $poin - $diskon;
				echo "Selamat, kamu mendapat diskon 20%. kamu cukup membayar sebesar: " . $bayar . "Rupiah.";
			} else{
				echo "Kamu Ga Dapet Diskon";
			}
		 ?> -->

		<?php 
			$x = isset($_POST['nilai'])? $_POST['nilai']: "";

			if ($x >= 90 && $x <= 100) {
				echo "Nilai Kamu A";
			}elseif ($x >= 70 && $x <= 89) {
				echo "Nilai Kamu B";
			}elseif ($x >= 50 && $x <= 69) {
				echo "Nilai Kamu C";
			}elseif ($x >= 30 && $x <= 49) {
				echo "Nilai Kamu D";
			}elseif ($x >= 0 && $x <= 29) {
				echo "Nilai Kamu E";
			}else{
				echo "Masukkan Nilai";
			}
         ?>
	</body>
</html>