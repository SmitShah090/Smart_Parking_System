<?php

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'parking system database');

	$q = "UPDATE customer_database SET BALANCE = $_GET[balance] WHERE ID = $_GET['id']";

	mysqli_query($con,$q);
	mysqli_close($con);

?>