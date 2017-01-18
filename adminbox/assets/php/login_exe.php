<?
require("db.php");
$user=$_POST["user"];
$pw=sha1(md5($_POST["pw"]));

$query="SELECT * FROM login WHERE user='".$user."' AND pw ='".$pw."'";
$result=mysql_query($query,$connect);
$row=mysql_fetch_row($result);
if(!$row[0]){
	header("Location:../../index.php?have=1");
}else {
	session_start();
	$_SESSION["user"]=$user;
	header("Location:../../management.php");
	
}
?>
