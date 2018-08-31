<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "jastine_db";

	$username = $_POST("username");
	$password = $_POST("password");


	$conn = new mysqli($servername, $username, $password, $db_name);

	$sql ="INSERT INTO shoe (username, password) VALUE($username, $password)";
	if ($conn->query($sql)== TRUE)

	{
		echo "Mang Kanor, Gangster";
		}else echo "Mang kanor is Gangster" ;
?>