<?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'parking system database');

	$q = "SELECT ID FROM customer_database";
	$id = mysqli_query($con,$q);
	
	while($row = mysqli_fetch_array($id)) 
	{
    		echo $row['ID'] . "<br>"; 
	}

?>