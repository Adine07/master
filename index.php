<html>
<head>
	<title>Adine Source | Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="thead">
				<h2>LOG IN</h2>
			</div>
			<form method="post" action="proseslogin.php">
				<label class="isicard">User Name :</label>
				<input type="text" name="username">
				<label class="isicard">Password  :</label>
				<input type="password" name="password">
				<input type="submit" value="log-in">
				<p><a href="daftar.php">Create New Acount</a></p>
			</form>
		</div>
	</div>
</body>
</html>
