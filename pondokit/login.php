<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<style>
		/* CSS RESET*/

		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed, 
		figure, figcaption, footer, header, hgroup, 
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}
		/* HTML5 display-role reset for older browsers */
		article, aside, details, figcaption, figure, 
		footer, header, hgroup, menu, nav, section {
			display: block;
		}
		body {
			line-height: 1;
		}
		ol, ul {
			list-style: none;
		}
		blockquote, q {
			quotes: none;
		}
		blockquote:before, blockquote:after,
		q:before, q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}	

		/* My Style */

		.container{
			width: 100%;
			height: 100vh;
			background-image: url("img/1.jpg");
		    background-size: cover;
		    background-repeat: no-repeat;
		    background-position: 50% 50%;
		    font-family: 'Roboto', sans-serif;

		}

		.container .card{
			position: absolute;
			width: 320px;
			height: 320px;
			background-color: #F1F1F1;
			top: 50%;
			left: 28%;
			transform: translate(-50%, -50%);
			border-radius: 16px;
			box-shadow: 0px 0px 8px rgba(0,0,0,1)
		}

		.card input[type=email],.card input[type=password]{
		    width: 90%;
		    padding: 12px 20px;
		    margin: 8px 5%;
		    display: inline-block;
		    border-radius: 4px;
		    border: 3px solid grey;
		    box-sizing: border-box;
		}

		.thead h2{
			font-size: 32px;
			padding-top: 20px;
			padding-bottom: 20px;
			text-align: center;
		}

		.isicard{
			padding-left: 5%;
		}

		.card input[type=submit]{
		    width: 90%;
		    padding-left: 12px;
		    padding-right: 12px;
		    margin: 8px 5%;
		    display: inline-block;
		    border-radius: 4px;
		    background: grey;
		    color: white;
		    box-sizing: border-box;
		    border: 3px solid grey;
		    font-size: 32px;
		}

		.card input[type=submit]:hover{
		    width: 90%;
		    padding-left: 12px;
		    padding-right: 12px;
		    margin: 8px 5%;
		    display: inline-block;
		    border-radius: 4px;
		    background: grey;
		    opacity: 0.7;
		    color: white;
		    box-sizing: border-box;
		    border: 3px solid grey;
		    font-size: 32px;
		}

		.card p, .card a{
			text-decoration: none;
			text-align: center;
			color: grey;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="thead">
				<h2>LOG IN</h2>
			</div>
			<form method="post" action="proseslogin.php">
				<label class="isicard">E-Mail :</label>
				<input type="email" name="email">
				<label class="isicard">Password  :</label>
				<input type="password" name="passwd">
				<input type="submit" value="log-in">
				<p><a href="daftar.php">Create New Acount</a></p>
			</form>
		</div>
	</div>
	
</body>
</html>