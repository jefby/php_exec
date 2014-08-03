<?php
	function myTest(){
		static $x = 0;
		echo $x;
		$x +=1;
	}
	myTest();
	myTest();
?>