<?php
	include 'session.php';
	$username = $_SESSION['login_user'];
	$curr_pass = $_POST['CurrentPassword'];
	$new_pass = $_POST['NewPassword'];
	$renew_pass = $_POST['ReNewPassword'];
	$curr_pass = md5($curr_pass);
	$new_pass = md5($new_pass);
	$renew_pass = md5($renew_pass);

	$pass_check_sql = "SELECT * FROM users WHERE username = '".$username."'";
	$pass_query_result = mysqli_query($db,$pass_check_sql);
	$pass_query_array = mysqli_fetch_array($pass_query_result);

	if ($pass_query_array['password'] == $curr_pass) {
		if ($new_pass == $renew_pass) {
			$repass_sql = "UPDATE users SET password = '".$new_pass ."' WHERE username = '".$username."'";
			mysqli_query($db,$repass_sql);
			echo '<script> alert("Password Changed Successfully");</script>';
			header("Refresh:1 ; URL=../home.php");
		}else {
			echo '<script> alert("Password does not match");</script>';
			echo '<script> window.location="../changepass.html"; </script>';
		}
	}else {
		echo '<script> alert("The Current password is wrong. Please Try again.");</script>';
		echo '<script> window.location="../changepass.html"; </script>';
	}
?>