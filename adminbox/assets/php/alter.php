<?
require("search_fns.php");
$id=$_GET["id"];
$jump=$_GET["jump"];

$query="SELECT * FROM structure WHERE id=".$id; 	
$result=mysql_query($query,$connect);
$row = mysql_fetch_array($result);
?>
<html>
<head>
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>   
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>   
<script type="text/javascript">  
        window.onload = function(){   
            CKEDITOR.replace('introduce');  
	  CKEDITOR.replace('article');  
        };
</script>
</head>
<form action="alter_exe.php" method="post">
	<input type="hidden" name="id" value="<?=$id ?>">
	<input type="hidden" name="jump" value="<?=$jump ?>">
	标题:<input type="text" name="title" value="<?=$row['title'] ?>" /><br>
	类别:<select name="kind_id">
<?
$query_kind="SELECT * FROM kind";
$result_kind=mysql_query($query_kind,$connect);

while($row_kind = mysql_fetch_array($result_kind))		
	{
		printf('<option value="%d">%s</option>',$row_kind["id"],$row_kind["name"]);
		
	}
?>	
		</select><br>
	简介:<textarea name="introduce"><?=$row['introduce'] ?></textarea><br>
	内容:<textarea name="article" ><?=search_content($id) ?></textarea>
<div id="submit">
	<input type="submit" name="submit" value="确定" style="width:100px;height:30px;float:right;"/>
</div>
</html>
