<?
require("db.php");
$query="SELECT * FROM structure ORDER BY hot DESC";
$result=mysql_query($query,$connect);

$count=1;
print("<p><b>热点排行</b></p><hr>");
while($row=mysql_fetch_array($result)){
	if($count<=10){
	printf('<div class="rankdraw"><a href="detail.php?id=%s&kind_id=%s">%s %s</a></div><hr>',$row["id"],$row["kind_id"],$count,$row["title"]);
	$count++;
	}
}
?>
