<?php
	include 'security/session.php';
	
	$username = $_SESSION['login_user'];
	
	$date = date('Y-m-d',strtotime($_POST['date']));
	$day = $_POST['day'];
	$hour = $_POST['hour'];
	
	$date_check_sql="Select COUNT(*) from booking where bookdate = '$date'"; 
	echo $date_check_sql; exit;
	$date_check_result=mysql_query($date_check_sql);  
	$row = mysql_fetch_array($date_check_result, MYSQL_NUM);
	$ml=$row[0];
	echo $ml;

exit;
	
	
	
?>