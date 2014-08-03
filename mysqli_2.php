<?php
	header("Content-type: text/html;charset=utf-8");
	//建立连接，这儿可能会出现问题，需要修改my.cnf中的sock为/tmp/mysql.lock
	$mysqli = new mysqli("localhost","root","","my_db");
	if(mysqli_connect_errno()){
		printf("连接失败: %s\n", mysqli_connect_error());
		exit();
	}
	$name = "ddd";
	//prepare中查询语句的?是一会需要替换的参数
	if($stmt = $mysqli->prepare("SELECT age FROM Persons WHERE FirstName=?")){
		//绑定查询参数
		$stmt->bind_param("s",$name);
		//执行查询
		$stmt->execute();
		//绑定结果到变量$_age
		$stmt->bind_result($_age);
		//获取结果，此时结果存储在变量$_age中
		while($stmt->fetch())
			echo "$name 的年龄是 $_age" . "<br />";
		//关闭连接
		$stmt->close();
	}
	exit();
?>