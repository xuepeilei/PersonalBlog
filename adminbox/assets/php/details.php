<?
require("search_fns.php");
$id=$_GET["id"];

$query="SELECT * FROM structure WHERE id=".$id;
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);
?>
<p>����ͼ��<img src="<?=$row['pic'] ?>" width=100px height=100px /></p>
���ݣ�<?=search_content($id) ?>

