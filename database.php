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
	echo "Connected Successfully";
}


if (isset($_POST['submit'])) {
  // receive all input values from the form
  $ID = mysqli_real_escape_string($conn, $_POST['id']);
  $Name = mysqli_real_escape_string($conn, $_POST['name']);
  $Mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $Email = mysqli_real_escape_string($conn, $_POST['email']);
  $Username = mysqli_real_escape_string($conn, $_POST['username']);  
  $Password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $SQL = "INSERT INTO customer_database (ID, NAME, MOBILE, EMAIL, USERNAME, PASSWORD) VALUES ('$ID', '$Name', '$Mobile', '$Email', '$Username', '$Password')";
    
    if (mysqli_query($conn, $SQL)) {
      echo "<br>" . "New record created successfully";
    }//inserting data into database using sql query...

    else
    {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);  //displays an error message if our query isn't successful
    }
}
 
?>