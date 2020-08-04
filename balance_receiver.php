<?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'parking system database');

	$q = "SELECT BALANCE FROM customer_database WHERE ID='89 15 F6 30'";
	$balance = mysqli_query($con,$q);
	
	echo $balance;

	mysqli_close($con);

?>