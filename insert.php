<!DOCTYPE html>
<html>

<body>

<?php
//插入一条记录
		//连接数据库
		$con=mysql_connect("localhost","root");
		if(!$con)//连接失败
			die('Could not connect: ' . mysql_error() );
			echo "<br />";
		echo "connect mysql ok" . "<br />";
		//使用数据库my_db
		mysql_select_db("my_db",$con);
		//插入一条记录，格式("FirstName,LastName,Age")
		$sql = "INSERT INTO Persons (FirstName,LastName,Age)
		VALUES  
		('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
		//真正插入记录
		if( !mysql_query($sql,$con) )
			die('Error: ' . mysql_error());
		echo '1 record added';
		//关闭连接
		mysql_close($con);
	?>
	</body>
	</html>