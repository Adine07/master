<?php 
session_start();
if (isset($_SESSION['email'])){
 ?>

<head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Fjalla+One|Teko&display=swap" rel="stylesheet">
	<link rel="icon" type="png/jpg" href="../layout/image/title-icon.png">
	<style>
		<?php 
			include 'style.css';
		?>
	</style>
</head>
<body>
	<div id="fixed"></div>
	<div id="bg"></div>
	<div id="layer"></div>
	<div id="anime">
		<img src="../layout/image/fixed-image.png">
	</div>
	<div id="container">
		<header class="clearfix">
			<nav>
				<ul>
					<li>
						<a href="../santri/index.php">
							<img src="../layout/image/user-image.png">
							santri
						</a>
					</li>
					<li>
						<a href="../matapelajaran/index.php">
							<img src="../layout/image/book.png">
							matapelajaran
						</a>
					</li>
					<li>
						<a href="../matapelajaran_santri/index.php">
							<img src="../layout/image/study-icon.png">
							mapel santri
						</a>
					</li>
				</ul>
				<div id="image">
					<img src="../layout/image/php.png">
				</div>
			</nav>		
		</header>
	</div>
</body>

<?php 
}else{
	header('location:../login.php');
}
 ?>


