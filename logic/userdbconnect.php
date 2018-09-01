<?php
	$host="localhost";
	$username="root";
	$password="";
	$dbname="M.M.S";

	$conn = mysqli_connect($host,$username,$password,$dbname);
	if (mysqli_connect_error()) {
		echo "No connection to the database";
	}
?>