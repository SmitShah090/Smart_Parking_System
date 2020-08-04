<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="abcd.css">
</head>
 
<body>
	<form method="post" action="database.php" style="color: black;text-align: left;margin:0px 0px 0px 40px; padding:0px 550px;">
		<h1 style="color: black;padding: 80px 20px 0px 0px;margin: 23px 0px 15px 23px; font-size: 40px;text-decoration: underline;">Sign Up</h1>
		<div class="a">
		ID : <br>
		<input style="border: 2px solid black;" type="text" name="id" required=""><br><br>

		Name : <br>
		<input style="border: 2px solid black;" type="text" name="name" required=""><br><br>

		Mobile_No : <br>
		<input style="border: 2px solid black;" type="tel" name="mobile" required=""><br><br>

		Email : <br>
		<input style="border: 2px solid black;" type="text" name="email" required=""><br><br>

		Username : <br>
		<input style="border: 2px solid black;" type="text" name="username" required=""><br><br>

		Password : <br>
		<input style="border: 2px solid black;" type="password" name="password" required=""><br><br>


		<input style="background-color: black; color: black; font-size: 17px; width: 85%; background: none;
	border: 2px solid black;" onclick="location.href='database.php'" type="submit" name="submit" placeholder="submit" value="submit">
	</form>
</body>
</html>