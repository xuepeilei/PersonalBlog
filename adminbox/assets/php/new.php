<?
$kind_id=$_GET["kind_id"];
?>
<html>
<head>
	<link style="text/css" rel="stylesheet" href="../css/index.css">
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>   
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>   
<script type="text/javascript">  
        window.onload = function(){   
            CKEDITOR.replace('introduce');  
	  CKEDITOR.replace('article');  
        };
	$(document).ready(function(){
		$("input").focus(function(){
			$(this).css("border","2px solid #D0D0FF");
	});
		$("input").blur(function(){
			$(this).css("border","none");
	});
});
</script> 
</head>
<body>
<div class="new">

<!--ѡ��ͼƬ-->
<br>
	
<form action="new_exe.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="kind_id" value="<?=$kind_id ?>">
	Ԥ��ͼƬ:<input type="file" name="file" id="file" /><br>
	����:<input type="text" name="title" /><br>
	���:<textarea name="introduce"></textarea><br>
	����:<textarea name="article"></textarea>
<div id="submit">
	<input type="submit" name="submit" value="ȷ��" />
</div>
</form>
</div>
</body>
</html>
