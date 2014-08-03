<html>

<body>
<!--表单，在action中指定由本PHP文件进行处理-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Name:<input type="text" name="fname">
	<input type="submit">
</form>
<!-- 处理表单，$_REQUEST用于收集HTML表单提交的数据 -->
<?php
	$name=$_REQUEST['fname'];
	echo $name;
?>


</body>

</html>