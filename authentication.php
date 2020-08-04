<?php
$message="";
if(count($_POST)>0) 
{
	$conn = mysqli_connect("localhost","root","","parking system database");

	$result = mysqli_query($conn,"SELECT * FROM customer_database WHERE Username='" . $_POST["username"] . "' and password = '". $_POST["Password"]."'");

	$count  = mysqli_num_rows($result);

	if($count==0) 
	{
		echo "Invalid Username or Password!";
	} 
	else 
	{
		echo "You are successfully authenticated!";
	}
}
?>