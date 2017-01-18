<?
require("db.php");
$id=$_GET["id"];
$jump=$_GET["jump"];

$query="DELETE FROM content WHERE id=".$id;
$result=mysql_query($query,$connect);
$query="DELETE FROM structure WHERE id=".$id;
$result=mysql_query($query,$connect);

if($jump==1){header("Location:./see_exe.php");}else header("Location:./right_pre.php");

?>
