<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(a.jpg);">



	
	<p style="color: black; text-decoration: underline; text-align: left;padding: 10px;font-size: 50px; margin: 10px 70px 0px 250px;">
		<i class="fa fa-car" aria-hidden="true"></i>
		<b>Intelligent Parking and Toll System</b><br></p>
	<p style="text-decoration: none; padding: 10px; font-size: 25px;margin: 0px 70px 0px 350px;">
		A small initiative project based on traffic problems and <br>
		traffic around toll plaza in present time.So we have made <br>
		a small model of this using arduino and php. 
	</p>

		<div>
		<?php
			if(isset($_POST['submit']))
			{
				echo "Login succeccfull";
			}
		?>
</div>

	<form >
		<br><br> 
	<div class="extra">
		<div class="a">

		<h1 style="color: black;">Login Page</h1>
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" name="Username" value="" placeholder="Username" required><br><br>

		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" name="password" value="" placeholder="password" required><br><br></div>

	

		<input class="btn" onclick="location.href"='authentication.php'" type="submit" name="submit" placeholder="submit" value="submit">
		
	<div class="main">
			
			<a href="signup.php" style="color: black;"> New User ? Sign Up here </a></div>
	
</div>
</form>


	<div style="text-align: left;padding: 10px 10px 10px 10px;color: black; margin: 30px 70px 0px 1110px; font-size: 18px; border: 4px solid black;" >
			
			<i class="fa fa-star" aria-hidden="true"></i>	
			Prepared by :<br><br>	
			
			<i class="fa fa-arrow-right" aria-hidden="true"></i>
			18DCS105 - AASH SHAH<br>

			<i class="fa fa-arrow-right" aria-hidden="true"></i>
			18DCS112 - SMIT SHAH<br>

			<i class="fa fa-arrow-right" aria-hidden="true"></i>
			18DCS111 - RUSHIL SHAH<br>

			<i class="fa fa-arrow-right" aria-hidden="true"></i>
			18DCS095 - SARTHAK PRAJAPATI<br>
	</div>
</body>
</html>