<html>

	<head>
		<title>Register</title>
		<link type="text/css" rel="stylesheet" href="./assets/css/index.css"/>
	</head>

	<html>
	<body>
<div class="register">
		<b>注册：</b><br>
		<form action="./assets/php/register_exe.php" method="post">
			帐号：<input type="text" name="user" size="20" />
<?
@$have=$_GET["have"];

if($have==1){
	echo "(*该用户已经存在)";
}else echo "(必填)";
?>
<br />
			密码：<input type="password" name="pw" size="20" />(必填)<br>
</div>
<div class="register_sub">
			<input type="submit" name="submit" value="注册" />
		</form>
</div>
	</body>
</html>
