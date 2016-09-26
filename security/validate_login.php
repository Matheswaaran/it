<?php 
	session_start();
	include 'security/dbconfig.php';
	
	$username = $password = "";
	$usererr = $passerr = "";

	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$password = md5($password);

	$query = "select uid from users where username= '$username' and password = '$password'";
	$result = mysqli_query($db,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);

	if ($count == 1) {
		session_register("username");
		$_SESSION['login_user'] = $username;
		header("location: home.php");
	}else{
		echo "Hello";
	}

?>