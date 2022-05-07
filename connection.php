<?php  
     	$servername = "127.0.0.1";
	$username = "root";  
       	$password = "";
		   $database ="travel";  
       	$conn = mysqli_connect ($servername , $username , $password, $database) or die("unable to connect to host");  
	$sql = mysqli_select_db ($conn, 'travel') or die("unable to connect to database");	
?>