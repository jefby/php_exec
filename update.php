<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
	$con = mysql_connect("localhost","root");//�������ݿ�
	if(!$con)
		die( ' Could not connect to mysql' . mysql_error() );
	mysql_select_db("my_db");
	
	//��ѯ
	if( !mysql_query("UPDATE Persons  SET age = 34 WHERE FirstName ='admin'") )
		echo "update error";
	echo "update ok";
	
	mysql_close($con);//�ر����ݿ�
?>
</body>
</html>