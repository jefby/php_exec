<!DOCTYPE html>
<html>

<body>

<?php
//����һ����¼
		//�������ݿ�
		$con=mysql_connect("localhost","root");
		if(!$con)//����ʧ��
			die('Could not connect: ' . mysql_error() );
			echo "<br />";
		echo "connect mysql ok" . "<br />";
		//ʹ�����ݿ�my_db
		mysql_select_db("my_db",$con);
		//����һ����¼����ʽ("FirstName,LastName,Age")
		$sql = "INSERT INTO Persons (FirstName,LastName,Age)
		VALUES  
		('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
		//���������¼
		if( !mysql_query($sql,$con) )
			die('Error: ' . mysql_error());
		echo '1 record added';
		//�ر�����
		mysql_close($con);
	?>
	</body>
	</html>