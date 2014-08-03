<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		//连接数据库
		$con=mysql_connect("localhost","root");
		if(!$con)//连接失败
			die('Could not connect: ' . mysql_error() );
			echo "<br />";
		echo "connect mysql ok" . "<br />";
		//使用mysql_query函数，用于向mysql连接发送查询或者命令，本次是创建数据库my_db
		if(mysql_query("CREATE DATABASE my_db",$con))
			echo "Database created" . "<br />";
		else
			echo "Error creating database:" . mysql_error() . "<br />";
		//使用数据库my_db
		mysql_select_db("my_db",$con);
		//mysql_query("DROP DATABASE my_db",$con);//删除数据库
		//设置主键为personID，并且设置其属性为自加（最后删除了AUTO_INCREMENT属性，因为相同的数据可能会重复插入）
		$sql = "CREATE TABLE Persons
		(
			personID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(personID), 
			FirstName varchar(15),
			LastName varchar(15),
			Age int
		)";
		//创建表Persons
		if(mysql_query($sql,$con))
			echo "Table Persons created." . "<br />";
		else//创建失败
			echo "Error Creating table: " . mysql_error() . "<br />";
/*
		//向数据库中插入记录
		if(mysql_query("INSERT INTO Persons (personID,FirstName,LastName,Age)  VALUES(1,'Perter','Griffin','35')"))
			echo "INSERT 1 SUCCESS" . "<br />";
		else
			echo "INSERT 1 ERROR " . mysql_error() . "<br />";

		if(mysql_query("INSERT INTO Persons (personID,FirstName,LastName,Age)  VALUES(2,'Glenn','Quagmire','33')") )
			echo "INSERT 2 SUCCESS" . "<br />";
		else
			echo "INSERT 2 ERROR " . mysql_error() . "<br />";
			*/
		//关闭连接
		mysql_close($con);
	?>
</body>
</html>