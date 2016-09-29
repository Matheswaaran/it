<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style type="text/css">
		table{
			border-style:solid;
			border-width:4px;
			border-color:red;
		}
	</style>
</head>
<body>
<?php
	include 'security/dbconfig.php';
	$query = mysqli_query($db,"Select * from users");
	echo "<table border=1>
				<tr>
					<th>Uid</th>
					<th>Username</th>
					<th>StaffID</th>
				</tr>";
	while ($row = mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td>" . $row['uid'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['staffid'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	$times = 1475064591;
	$tinc = 86400;
	$times = $times + (2*$tinc);
	//echo $times;
	$date = date("Y-m-d" , +$times);
	//echo $date;
	$status_sql = "SELECT * FROM booking WHERE bookdate = '$date'";
	$status = mysqli_query($db,$status_sql);
	$row = mysqli_fetch_array($status);
	$res_date = $row['bookdate'];
	echo date("d/m/Y",strtotime($res_date));
	echo "<br>";
	echo $res_date;
	//$myinput='2005/15/09'; $sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate;
?>
</body>
</html>