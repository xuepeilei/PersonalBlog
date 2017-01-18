
<?
require("db_gb2312.php");
$message=$_GET["message"];
$poster=$_GET["poster"];
$title=$_GET["title"];

$query="INSERT INTO post(parent,children,poster,title) VALUES(0,0,'".$poster."','".$title."')";
$result=mysql_query($query,$connect);

$query="select post.id from post left join message on post.id = message.id
                   where parent = 0
                   and poster = '".$poster."'
		and title = '".$title."'
                   and message.id is NULL";
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);

$query="INSERT INTO message(id,message) VALUES('".$row[0]."','".$message."')";
$result=mysql_query($query,$connect);

header("Location:../../board.php");
?>
