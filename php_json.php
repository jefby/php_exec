<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
$val= json_encode($arr);//json±àÂë
var_dump(json_decode($val));//½âÂë²¢Êä³ö
?>
</body>
</html>