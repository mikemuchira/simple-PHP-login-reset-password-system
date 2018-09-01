<?php
	require_once('userdbconnect.php');
	if (isset($_POST['reset'])) {
		$manager_name=$_POST["username"];
		$manager_password1=md5($_POST["password1"]);
		$manager_password2=md5($_POST["password2"]);

		if ($manager_password1 == $manager_password2) {
			$new_password=$manager_password1;

			$update_query = "UPDATE managers SET password='$new_password' WHERE username='$manager_name'";

			if ($result = $conn->query($update_query)) {
				session_start();
				$_SESSION['reset_success']=$new_password;

				header('Location:../index.php');
			}else{
				session_start();
				$_SESSION['reset_error']=$manager_password2;

				header('Location:../index.php?page=reset');
			}

		}else{
			session_start();
			$_SESSION['password_nomatch']=$manager_password1;

			header('Location:../index.php?page=reset');

		}
	}
?>