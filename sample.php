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
?>
</body>
</html>