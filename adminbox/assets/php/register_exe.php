<?
require_once("./db.php");
$user=$_POST["user"];
$pw=sha1(md5($_POST["pw"]));

$query="SELECT count(*) FROM login WHERE user='".$user."'";
$result=mysql_query($query,$connect);
$row=mysql_fetch_row($result);
if($row[0]){
	mysql_close($connect);
	header("Location:../../register.php?have=1");
}else{
	
$query="INSERT INTO login(user,pw) VALUES('".$user."','".$pw."')";	

$result=mysql_query($query,$connect);


	header("Location:../../index.php");
}
?>
