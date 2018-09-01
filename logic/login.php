<?php
	require_once('userdbconnect.php');
	if (isset($_POST['login'])) {
		$manager_name=$_POST["username"];
		$manager_password=md5($_POST["password"]);
		session_start();

		$login_sql = "SELECT * FROM managers WHERE username='$manager_name' AND password='$manager_password'";
		$login_query=mysqli_query($conn,$login_sql);
		$login_rs=mysqli_fetch_assoc($login_query);

		if ($login_rs['username']==$manager_name && $login_rs['password']==$manager_password) {
			$_SESSION['manager_online']=$login_rs['username'];
			$_SESSION['session_time']=time();

			header('Location:../index.php');
		}else{
			$_SESSION['login_error']=$manager_password;
			header('Location:../index.php');
		}
	}
?>