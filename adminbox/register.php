<html>

	<head>
		<title>Register</title>
		<link type="text/css" rel="stylesheet" href="./assets/css/index.css"/>
	</head>

	<html>
	<body>
<div class="register">
		<b>ע�᣺</b><br>
		<form action="./assets/php/register_exe.php" method="post">
			�ʺţ�<input type="text" name="user" size="20" />
<?
@$have=$_GET["have"];

if($have==1){
	echo "(*���û��Ѿ�����)";
}else echo "(����)";
?>
<br />
			���룺<input type="password" name="pw" size="20" />(����)<br>
</div>
<div class="register_sub">
			<input type="submit" name="submit" value="ע��" />
		</form>
</div>
	</body>
</html>
