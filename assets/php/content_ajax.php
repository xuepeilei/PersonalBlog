<?
require("db.php");
$kind_id=$_GET["kind_id"];
$page=$_GET['page'];
$num=10;

$query="SELECT * FROM structure WHERE kind_id = ".$kind_id;
$result=mysql_query($query,$connect);
$total=mysql_num_rows($result);
$pages=ceil($total/$num);
$offset=($page-1)*$num;


$query_l="SELECT * FROM structure WHERE kind_id = ".$kind_id." ORDER BY content_time DESC LIMIT ".$offset.",".$num;

$result_l=mysql_query($query_l,$connect);

while($row=mysql_fetch_array($result_l)){
	printf('<div class="predetail"><div class="detitle"><a href="detail.php?id=%s&kind_id=%s">%s</a></div><div class="depic"><a href="detail.php?id=%s&kind_id=%s"><img src="%s"></a></div><div class="detime"><b>%s</b></div><div class="deintroduce">%s<a href="detail.php?id=%d&kind_id=%d">阅读全文</a></div></div>',$row["id"],$kind_id,$row["title"],$row["id"],$kind_id,$row["pic"],$row["content_time"],$row["introduce"],$row["id"],$kind_id);
	}
print("<hr>");
?>
<p align="center">
<?
if($page>1){printf('<a href="content.php?page=%d&kind_id=%d" style="font-size:15px;">上一页',$page-1,$kind_id);}
for($i=1;$i<=$pages;$i++){
		if($i!=$page){
printf('<a href="content.php?page=%d&kind_id=%d" style="font-size:16px;">%s</a>',$i,$kind_id,$i);
		}else{printf('<b style="font-size:16px;">%s</b>',$i);}
}
if($page<$pages){printf('<a href="content.php?page=%d&kind_id=%d" style="font-size:15px;">下一页',$page+1,$kind_id);}
?>
</p>
