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
				alert("验证码错误！");
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
用户：<input type="text" value="匿名" name="poster" /><br>
标题：<input type="text" name="title" />
验证码：<input type="text" id="code" style="width:75px"/> <img src="draw_math.php" title="看不清，点击换一张" align="absmiddle" id="checkimg" style="width:80px;height:25px;" /><br>
留言：<br><textarea name="message" style="width:95%;height:30%;"></textarea>
<div class="board_submit">
	<input type="button" id="login" name="login" value="发布" />
</div>
</form>
</div>
<a name="post"></a>
</div>


