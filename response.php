<?
require("./assets/php/header.php");
require("./assets/php/db_gb2312.php");

$id=$_GET["id"];
$page=$_GET["page"];


$query="SELECT * FROM post WHERE id=".$id;
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);

?>
<div class="divright">
<body>
<div class="banner">
<img src="./assets/images/system/banner.jpg">
</div>
<div class="repanel">
回复:<?
printf(' %s',$row["poster"]);
?>
<form action="./assets/php/response_exe.php" method="GET">
<input type="hidden" value="<?=$id ?>" name="parent_id" />
<input type="hidden" value="<?=$page ?>" name="page" />
昵称：<input type="text" name="poster" value="侠客"/><br>
内容：<textarea name="message" style="width:95%;height:30%;"></textarea>
<div class="board_submit">
	<input type="submit" value="回复" />
</div>
</form>
</div>
</div>
</body>

