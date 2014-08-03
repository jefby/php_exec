<!DOCTYPE HTML>
<html>

<head>
	<!-- 错误为红色-->
	<style>
		.error { color: #FF0000; } 
	</style>
</head>

<body>
<h2>PHP 表单验证</h2>
<?php
		//定义变量并初始化为空字符串
		$name=$email=$gender=$comment=$website="";
		$nameErr = $emailErr = $genderErr = $websiteErr = "";

		//如果表单的推送方法为POST，则将数据分别存取到各个变量中
		if( $_SERVER["REQUEST_METHOD"] == "POST"  ) {
				if( empty($_POST["name"]) ) 
					$nameErr = "姓名是必填的";
				else{
					$name = test_input($_POST["name"]);
					if( !preg_match("/^[a-zA-Z ]*$/",$name)  )
						$nameErr="只允许字母和空格";
				}
				if( empty($_POST["email"]) )
					$emailErr = "电邮是必填的";
				else{
					$email = test_input($_POST["email"]);
					if( !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email) )
						$emailErr="无效的Email格式";
				}
				if( empty($_POST["gender"]) )
					$genderErr = "性别是必选的";
				else
					$gender = test_input($_POST["gender"]);
				if( empty($_POST["comment"]) )
					$comment = "";
				else
					$comment = test_input($_POST["comment"]);
				if( empty($_POST["website"]) )
					$websiteErr = "网址是必填的";
				else{
					$website = test_input($_POST["website"]);
					// 检查 URL 地址语言是否有效（此正则表达式同样允许 URL 中的下划线）
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%
						=~_|]/i",$website)) 
						$websiteErr = "Invalid URL"; 
				}
		}
		//规范化输入
		function test_input($val){
			$val = trim($val);//去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
			$val = stripslashes($val);//删除用户输入数据中的反斜杠
			$val = htmlspecialchars($val);//函数把特殊字符转换为 HTML 实体，安全性考虑
			return $val;
		}
	?>



<p><span class="error">* 必需的字段 </span></p>
<!--表单，交给本文件处理，使用POST方法发送 , htmlspecialchars函数将特殊字符转换为HTML实体，安全型考虑-->
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!-- 一小段php脚本是为了保存原来的值，避免提交时被刷新为空 -->
	姓名: <input type ="text" name ="name" value="<?php echo $name;?>"> 
	<span class="error">* <?php echo $nameErr;?></span>
	<br />
	电邮: <input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">*<?php echo $emailErr;?></span>
	<br />
	网址: <input type="text" name="website" value ="<?php echo $website;?>">
	<span class="error">*<?php echo $websiteErr;?></span>
	<br />
	<!-- textarea是一个输入框，rows和cols分别指定行和列-->
	评论: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br />
	<!-- 性别：单选框-->
	性别:
		<input type="radio" name="gender"
			<?php 
						if(isset($gender) && $gender == "female") 
								echo "checked";
			?>
		value="female">女
		<input type="radio" name="gender"
			<?php 
				if(isset($gender) && gender=="male") 
					echo "checked";
			?>
		value="male">男
		<span class="error">*<?php echo $genderErr;?></span>
		<br />

	<input type="submit" name="submit" value="提交">
	</form>

	

	<?php
		echo "<h2>您的输入：</h2>";
		echo "姓名：$name"."<br />";
		echo "电邮 : $email" . "<br />";
		echo "性别 : $gender ". "<br />";
		echo "网址 : $website". "<br />";
		echo "评论 : $comment" . "<br />";
	?>

</body>
</html>