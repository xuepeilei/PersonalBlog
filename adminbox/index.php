
<html>
	<head>
		<link style="text/css" rel="stylesheet" href="./assets/css/index.css">
		<script type="text/javascript" src="./assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(function(){
		$("#checkimg").click(function(){
			$(this).attr("src",'draw_math.php?' + Math.random());
	});
		$("#login").click(function(){
		var code = $("#code").val();
		$.post("check.php",{code:code},function(msg){
			if(msg==1){
				$("#loginform").submit();
			}else{
				alert("验证码错误！");
			}
		});
	});
});
	
</script>
	</head>
	<body>
		<div class="login">
			<form id="loginform" action="./assets/php/login_exe.php" method="post">
			帐号：<input type="text" name="user" /><br>
			密码：<input type="password" name="pw" /><br>
			验证码：<input type="text" id="code" style="width:75px"/> <img src="draw_math.php" title="看不清，点击换一张" align="absmiddle" id="checkimg" /><br>
			<input type="button" id="login" name="login" value="登录" style="width:75px;height:25px;float:right;display:block;" />
</form>
<?
	@$have=$_GET["have"];
	if($have==1){
		echo " <b>帐号和密码不符合<b>";
	}
?>
			</div>
			

		
	</body>
</html>
