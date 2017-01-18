<?
require("db.php");
$kind_id=$_GET["kind_id"];

$query="SELECT * FROM structure WHERE kind_id=".$kind_id." ORDER BY content_time DESC LIMIT 0,5";
$result=mysql_query($query,$connect);
print('<div class="prewords"><b><p>最</p><p>新</p><p>文<p></p>章</p></p></b></div>');
while($row=mysql_fetch_array($result)){
	printf('<div class="prepic"><a href="detail.php?id=%s&kind_id=%s"><div class="pic"><img src="%s" width=100px height=80px></div><p align="center" style="font-size:15px;">%s</p></a></div>',$row["id"],$row["kind_id"],$row["pic"],$row["title"]);
}
?>
