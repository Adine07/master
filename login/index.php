<html>
<head>
	<title>LOGIN</title>
	<style>
		#log{
			width:25%;
			height:350px;
			position:absolute;left:37.5%;top:150px;
			background-color:rgba(26, 25, 54);
			padding:10px;border-radius:12px;box-shadow:2px 2px 4px black;
		}
		.field{
			width:100%;
			height:50px;margin-top:5px;border-radius:7px;
			font-size:16pt;color:rgba(26, 25, 54);
			padding:5px;margin-top:15px;margin-bottom:10px;
		}
		.label{
			color:white;margin-top:5px;
			font-family:sans-serif;font-size:14pt;
			
		}
		#sub{
			width:100%;
			height:50px;
			margin-top:16px;font-size:18pt;color:white;
			font-family:sans-serif;
			border:2px solid;background-color:rgba(26, 25, 54);
			border-radius:7px;
		}
		#sil{
			text-align:center;color:white;font-size:20pt;
			font-family:sans-serif;
			padding:10px;margin-bottom:10px;
		}
	</style>
</head>
<body>
	<div id="log">
		<div id="sil">
			<b>SILAHKAN LOGIN</b>
		</div>
		<form method="post" action="proseslogin.php">
			<label class="label">User Name :</label>
			<input class="field" type="text" name="username" ><br>
			<label class="label">Password  :</label>
			<input class="field" type="password" name="password"><br>
			<input id="sub" type="submit" value="login">
			<center style="color:white; margin-top:8px; padding:3px;"><a style="text-decoration:none; color:white;"href="daftar.php">Create New Acount</a></center>
		</form>
	</div>
</body>
</html>
