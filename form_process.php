<html>

<body>
<!--������action��ָ���ɱ�PHP�ļ����д���-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name:<input type="text" name="fname">
	<input type="submit">
</form>
<!-- �������$_REQUEST�����ռ�HTML���ύ������ -->
<?php
	$name=$_REQUEST['fname'];
	echo $name;
?>


</body>

</html>