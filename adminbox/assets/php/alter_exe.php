<?
require("search_fns.php");

$title=$_POST["title"];
$introduce=$_POST["introduce"];
$article=$_POST["article"];
$kind_id=$_POST["kind_id"];
$jump=$_POST["jump"];
$id=$_POST["id"];


$query="UPDATE content SET article='".$article."' WHERE id=".$id;
$result=mysql_query($query);
$query="UPDATE structure SET title='".$title."',introduce='".$introduce."',kind_id='".$kind_id."',content_time=now() WHERE id=".$id;
$result=mysql_query($query);

if($jump==1){header("Location:./see_exe.php");}else header("Location:./right_pre.php");
?>
