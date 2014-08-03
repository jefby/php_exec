<!DOCTYPE html>
<html>
<body>
<?php
	$x = 5;
	$y = 10;

	function myTest() {
		global $x,$y;//当要在函数内部访问全局变量时，需要使用global标签
		$y = $x+$y;
	}
	myTest();
	echo  "$y";
?>
</body>

</html>