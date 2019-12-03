<head>
	<style>
		body{
			font-family:sans-serif;
		}
		#container{
			width:25%;
			height:370px;
			background-color:white;box-shadow:2px 2px 4px black;
			margin:100px auto ;border-radius:15px;
			position:relative;
		}
		#title{
			width:100%;
			height:70px;border-radius:10px 10px 0px 0px;
			color:white;background-color:rgba(26, 25, 54);text-align:center;line-height:70px;
			font-size:18pt;font-family:sans-serif;
			
			
		}
		input{
			width:100%;
			height:40px;margin-top:5px;margin-bottom:5px;border-radius:8px;
			border:1px solid rgba(26, 25, 54);
		}
		#for{
			width:94%;
			height:280px;position:relative;
			bottom:0;padding:10px;
		}
		#sub{
			width:100%;
			height:40px;margin-top:20px;margin-bottom:5px;
			
		}
		.label{
			margin-top:10px;
		}
	</style>
<head>
<body>
 <div id="container">
 	<div id="title">
 		Create New Acount
 	</div>
 <div id="for">
   <form method="post" action="prosesdaftar.php">
 	
 		<span class="label">Nama</span><br>
 		<input type="text" name="username"><br>
 		<span class="label">Pass</span><br>
 		<input type="password" name="password"><br>
 		<span class="label">Ulang Pass</span><br>
 		<input type="password" name="ulang"><br>
 		<input id="sub" type="submit" value="daftar">
 	</form>
 </div>	 
 </div>	 
</body>

