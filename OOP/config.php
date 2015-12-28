<?php
	$host     ="localhost";
	$username ="root";
	$password ="";
	$db_name  ="first_project";
	mysqli_connect($host, $username, $password)or die("cannot connect");
	$conn = mysqli_connect($host, $username, $password);
	//mysqli_select_db($db_name, $conn)or die("cannot select DB");
	mysqli_select_db($conn, $db_name)or die("cannot select DB");
	$mysqli = new mysqli($host, $username, $password, $db_name);
?>