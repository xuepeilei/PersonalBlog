<?
require("./assets/php/header.php");
?>
<div class="divright">
<script type="text/script">
$(function(){
	$("#re").click(function(){
		$.post("./assets/php/response.php",function(data){$(".response").html(data);});
	});
});
</script>
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
<a name="toup"></a>
<div class="banner">
<img src="./assets/images/system/banner.jpg">
</div>

<?
require("./assets/php/board_exe.php");
?>

<div class="panel">

<form id="loginform" action="./assets/php/goboard_exe.php" method="get">
�û���<input type="text" value="����" name="poster" /><br>
���⣺<input type="text" name="title" />
��֤�룺<input type="text" id="code" style="width:75px"/> <img src="draw_math.php" title="�����壬�����һ��" align="absmiddle" id="checkimg" style="width:80px;height:25px;" /><br>
���ԣ�<br><textarea name="message" style="width:95%;height:30%;"></textarea>
<div class="board_submit">
	<input type="button" id="login" name="login" value="����" />
</div>
</form>
</div>
<a name="post"></a>
</div>


