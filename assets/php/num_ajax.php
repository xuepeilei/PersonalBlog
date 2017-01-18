<?
require("db.php");
$id=$_GET["id"];

$query="SELECT * FROM structure WHERE id=".$id;
$result=mysql_query($query,$connect);
while($row=mysql_fetch_array($result)){
	printf('%s',$row["hot"]);
}
?>
