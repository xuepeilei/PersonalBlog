
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
				alert("��֤�����");
			}
		});
	});
});
	
</script>
	</head>
	<body>
		<div class="login">
			<form id="loginform" action="./assets/php/login_exe.php" method="post">
			�ʺţ�<input type="text" name="user" /><br>
			���룺<input type="password" name="pw" /><br>
			��֤�룺<input type="text" id="code" style="width:75px"/> <img src="draw_math.php" title="�����壬�����һ��" align="absmiddle" id="checkimg" /><br>
			<input type="button" id="login" name="login" value="��¼" style="width:75px;height:25px;float:right;display:block;" />
</form>
<?
	@$have=$_GET["have"];
	if($have==1){
		echo " <b>�ʺź����벻����<b>";
	}
?>
			</div>
			

		
	</body>
</html>
