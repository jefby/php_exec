<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
	$con = mysql_connect("localhost","root");
	if(!$con)
		die( ' Could not connect to mysql' . mysql_error() );
	mysql_select_db("my_db");//�������ݿ�
	//��ӡ���
	echo "<table border = '1'>
	<tr>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Age</th>
	</tr>";

	//��ѯ
	$result = mysql_query("SELECT * FROM Persons");
	while ($row = mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['FirstName'] .  "</td>";
		echo "<td>" .  $row['LastName'] . "</td>";
		echo "<td>" . $row['Age'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($con);//�ر����ݿ�
?>
</body>
</html>