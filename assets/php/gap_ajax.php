<?
require("db.php");
$id=$_GET["id"];
$kind_id=$_GET["kind_id"];

$query_up="SELECT * FROM structure WHERE id > ".$id." AND kind_id=".$kind_id." ORDER BY content_time LIMIT 0,1";
$query_down="SELECT * FROM structure WHERE id < ".$id." AND kind_id=".$kind_id." ORDER BY content_time DESC LIMIT 0,1";


$result_up=mysql_query($query_up,$connect);
if(mysql_num_rows($result_up)){
	$row_up=mysql_fetch_array($result_up);	
	printf('<div class="up"><a href="detail.php?id=%s&kind_id=%s"><img src="./assets/images/system/up.png">上一篇:%s</a></div>',$row_up["id"],$kind_id,$row_up["title"]);
}else{printf('<div class="up"></div>');}
$result_down=mysql_query($query_down,$connect);
if(mysql_num_rows($result_down)){
	$row_down=mysql_fetch_array($result_down);	
	printf('<div class="down"><a href="detail.php?id=%s&kind_id=%s">下一篇:%s<img src="./assets/images/system/down.png"></a></div>',$row_down["id"],$kind_id,$row_down["title"]);
}else{printf('<div class="down"></div>');}
?>
