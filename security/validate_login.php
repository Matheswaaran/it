<?php 
	session_start();
	include 'dbconfig.php';

	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$password = md5($password);
	$login_err = "";

	$query = mysqli_query($db,"select uid from users where username= '$username' and password = '$password'");
	$result = mysqli_fetch_row($query);

	if ($result) {
		$_SESSION['login_user'] = $username;
		header("location: ../home.php");
	}else{
		echo '<script> alert("Invalid credentials");</script>';
		echo '<script> window.location="../index.php"; </script>';
	}

?>