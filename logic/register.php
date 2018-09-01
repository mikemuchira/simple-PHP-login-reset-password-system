<?php
	require_once('userdbconnect.php');
	if (isset($_POST['register'])) {
		$manager_name=$_POST["username"];
		$manager_email=$_POST["email"];
		$manager_password=md5($_POST['password']);

		$insert_query = "INSERT INTO managers (username,email,password) VALUES ('$manager_name','$manager_email','$manager_password')";

		if ($result = $conn->query($insert_query)) {
			session_start();
			$_SESSION['account_success']="Access Denied";

			header('Location:../index.php');
			
		}
		else{
			session_start();
			$_SESSION['account_error']="Access Granted";

			header('Location:../index.php?page=register');
		}
	}
?>