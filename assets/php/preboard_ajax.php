<?
require("search_fns.php");

$query="SELECT * FROM post WHERE parent = 0 ORDER BY posted DESC";
$result=mysql_query($query,$connect);
$count=0;
print('<div class="prepost"><b>最新留言<hr></b></div>');
while($row=mysql_fetch_array($result)){
	$message=mess($row["id"]);
	$strmess=substr($message,0,60);
	if($message!=$strmess){$strmess=$strmess.'...';}
	printf('<div class="onetitle"><div class="oneposter"><b>%s说:</b></div><div class="onemessage">%s</div></div>',$row["poster"],$strmess);
	$count++;
	if($count==5){exit;}
}
?>
