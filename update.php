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
	
	//查询
	if( !mysql_query("UPDATE Persons  SET age = 34 WHERE FirstName ='admin'") )
		echo "update error";
	echo "update ok";
	
	mysql_close($con);//关闭数据库
?>
</body>
</html>