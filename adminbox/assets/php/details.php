<?
require("search_fns.php");
$id=$_GET["id"];

$query="SELECT * FROM structure WHERE id=".$id;
$result=mysql_query($query,$connect);
$row=mysql_fetch_array($result);
?>
<p>ËõÂÔÍ¼£º<img src="<?=$row['pic'] ?>" width=100px height=100px /></p>
ÄÚÈÝ£º<?=search_content($id) ?>

