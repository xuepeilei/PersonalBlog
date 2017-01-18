<?
require("search_fns.php");

//post:title introduce  article kind_id
$title=$_POST["title"];
$introduce=$_POST["introduce"];
$article=$_POST["article"];
$kind_id=$_POST["kind_id"];


//upload
$path="/opt/lampp/htdocs/station/assets/images/".$_FILES["file"]["name"];
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
	if(!move_uploaded_file($_FILES["file"]["tmp_name"],$path)){
		printf('error=%s<br>',$_FILES["file"]["error"]);
		printf('tmp_name=%s<br>',$_FILES["file"]["tmp_name"]);
		printf('name=%s<br>',$_FILES["file"]["name"]);
		printf('pic=%s<br>',$path);
		exit;
	}
}
$pic="/station/assets/images/".$_FILES["file"]["name"];

$query="INSERT INTO structure(title,introduce,pic,kind_id) VALUES('".$title."','".$introduce."','".$pic."',".$kind_id.")";
$result=mysql_query($query);


$id=search_id($title,$kind_id);
$query="INSERT INTO content(id,article) VALUES(".$id.",'".$article."')";
$result=mysql_query($query);
header("Location:new.php?kind_id='".$kind_id."'");
?>
