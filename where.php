<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
	$con = mysql_connect("localhost","root");//连接数据库
	if(!$con)
		die( ' Could not connect to mysql' . mysql_error() );
	mysql_select_db("my_db");
	//打印表格
	echo "<table border = '1'>
	<tr>
	<th>FirstName</th>
	<th>LastName</th>
	</tr>";

	//查询
	$result = mysql_query("SELECT * FROM Persons WHERE FirstName ='admin'");
	while ($row = mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['FirstName'] .  "</td>";
		echo "<td>" .  $row['LastName'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($con);//关闭数据库
?>
</body>
</html>