<!DOCTYPE html>
<html>
<body>
	<?php
		$to = "1648349957@qq.com";
		$subject = "test ";
		$message = "i like you php!";
		$from = "928140341@qq.com";
		$headers = "From:$from";
		mail($to,$subject,$message,$headers);
		echo "mail sent.";
	?>
</body>
</html>