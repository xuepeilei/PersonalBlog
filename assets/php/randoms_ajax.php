
<?
require("db.php");
$query="SELECT * FROM structure";
$result=mysql_query($query,$connect);
$nums=mysql_num_rows($result);

$titles=array();
while($row=mysql_fetch_array($result)){
	array_push($titles,$row["title"]);
}
shuffle($titles);

for($i=0;$i<$num=($nums<=6)?$nums:6;$i++){
	$query_ran="SELECT * FROM structure WHERE title='".$titles[$i]."'";
	$result_ran=mysql_query($query_ran,$connect);
	$row_ran=mysql_fetch_array($result_ran);
	printf('<li><a href="detail.php?id=%s&kind_id=%s"><span class="title">%s</span></a></li>',$row_ran["id"],$row_ran["kind_id"],$titles[$i]);
}

?>


