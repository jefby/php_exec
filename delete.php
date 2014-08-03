<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
	$con = mysql_connect("localhost","root");
	if($con){
		echo "connect mysql ok";
		echo "<br />";
	}else{
		echo "connect mysql error" . mysql_error();
		echo "<br />";
	}
	mysql_select_db("my_db",$con);
	$del = "DELETE FROM Persons  WHERE FirstName = 'jefby' ";
	if(mysql_query($del,$con))
		echo "delete ok";
	else
		echo "delete error" . mysql_error();
		
	mysql_close($con);
?>
</body>
</html>