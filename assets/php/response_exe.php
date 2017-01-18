<?
require("db_gb2312.php");
$poster=$_GET["poster"];
$message=$_GET["message"];
$parent_id=$_GET["parent_id"];
$page=$_GET["page"];


$query="UPDATE post SET children = 1 WHERE id=".$parent_id;
$result=mysql_query($query,$connect);

$query="INSERT INTO post(parent,children,poster) VALUES(".$parent_id.",0,'".$poster."')";
$result=mysql_query($query,$connect);

$query="select post.id from post left join message on post.id = message.id
                   where parent = '".$parent_id."'
                   and poster = '".$poster."'
                   and message.id is NULL";
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);

$query="INSERT INTO message(id,message) VALUES('".$row[0]."','".$message."')";
$result=mysql_query($query,$connect);

header("Location:../../board.php?page=".$page);
?>
