<!DOCTYPE html>
<html>
<body>
<?php
	$x = 5;
	$y = 10;

	function myTest() {
		global $x,$y;//��Ҫ�ں����ڲ�����ȫ�ֱ���ʱ����Ҫʹ��global��ǩ
		$y = $x+$y;
	}
	myTest();
	echo  "$y";
?>
</body>

</html>