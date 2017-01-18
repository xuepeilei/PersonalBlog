<?
require("search_fns.php");

$id=$_GET["id"];

$query="SELECT * FROM structure WHERE id=".$id;
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);
printf('<div class="reltitle"><b>标题:%s</b></div><div class="reltime">时间:%s</div><hr /><div class="relintroduce"><b>简介:</b><p>%s</p></div><hr><div class="relarticle"><b>正文:</b><p>%s</p></div><hr></div>',$row["title"],$row["content_time"],$row["introduce"],search_content($row["id"]));
?>
