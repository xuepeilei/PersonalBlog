<?
require("db.php");
$id=$_GET["id"];

if(isset($_COOKIE["vote"."_".$id])){
	$query_v="SELECT * FROM structure WHERE id=".$id;
	$result_v=mysql_query($query_v,$connect);
while($row_v=mysql_fetch_array($result_v)){
	printf('%s',$row_v["hot"]);
	}
}else{

$query="UPDATE structure SET hot=hot+1 WHERE id=".$id;
$result=mysql_query($query,$connect);
$query_p="SELECT * FROM structure WHERE id=".$id;
$result_p=mysql_query($query_p,$connect);
while($row_p=mysql_fetch_array($result_p)){
	printf('%s',$row_p["hot"]);
}
$expire=time()+60*60*24*30;
setcookie("vote"."_".$id,$expire);
}
?>
