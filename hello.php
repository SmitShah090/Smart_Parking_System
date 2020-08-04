<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'parking system database';

$conn = mysqli_connect($servername, $username, $password, $database);   //This function is used to connect database with the server

if(!$conn)
{
	die("Connection failed : ".mysqli_connect_error());  //die function is used to kill the script, If die function works it will print what u have written and give the error that occured..
}

else
{
	echo "Connnected Successfully";
}

mysqli_close($conn);  //use to close the connection. If u don't write this function then also connection will close when the script ends. 

?>