<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		//�������ݿ�
		$con=mysql_connect("localhost","root");
		if(!$con)//����ʧ��
			die('Could not connect: ' . mysql_error() );
			echo "<br />";
		echo "connect mysql ok" . "<br />";
		//ʹ��mysql_query������������mysql���ӷ��Ͳ�ѯ������������Ǵ������ݿ�my_db
		if(mysql_query("CREATE DATABASE my_db",$con))
			echo "Database created" . "<br />";
		else
			echo "Error creating database:" . mysql_error() . "<br />";
		//ʹ�����ݿ�my_db
		mysql_select_db("my_db",$con);
		//mysql_query("DROP DATABASE my_db",$con);//ɾ�����ݿ�
		//��������ΪpersonID����������������Ϊ�Լӣ����ɾ����AUTO_INCREMENT���ԣ���Ϊ��ͬ�����ݿ��ܻ��ظ����룩
		$sql = "CREATE TABLE Persons
		(
			personID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(personID), 
			FirstName varchar(15),
			LastName varchar(15),
			Age int
		)";
		//������Persons
		if(mysql_query($sql,$con))
			echo "Table Persons created." . "<br />";
		else//����ʧ��
			echo "Error Creating table: " . mysql_error() . "<br />";
/*
		//�����ݿ��в����¼
		if(mysql_query("INSERT INTO Persons (personID,FirstName,LastName,Age)  VALUES(1,'Perter','Griffin','35')"))
			echo "INSERT 1 SUCCESS" . "<br />";
		else
			echo "INSERT 1 ERROR " . mysql_error() . "<br />";

		if(mysql_query("INSERT INTO Persons (personID,FirstName,LastName,Age)  VALUES(2,'Glenn','Quagmire','33')") )
			echo "INSERT 2 SUCCESS" . "<br />";
		else
			echo "INSERT 2 ERROR " . mysql_error() . "<br />";
			*/
		//�ر�����
		mysql_close($con);
	?>
</body>
</html>