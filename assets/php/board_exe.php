<?
require("search_fns_gb2312.php");


$page=isset($_GET['page'])?intval($_GET['page']):1;
$num=5;


$query="SELECT * FROM post WHERE parent = 0";
$result=mysql_query($query,$connect);
$total=mysql_num_rows(mysql_query($query));
$pages=ceil($total/$num);
$offset=($page-1)*$num;
$count=$total-($page-1)*$num;


$query_l="SELECT * FROM post WHERE parent = 0 ORDER BY id DESC LIMIT ".$offset.",".$num;
$result_l=mysql_query($query_l,$connect);


while($row=mysql_fetch_array($result_l)){
	echo '<div class="board">';
	$message=mess($row["id"]);

		printf('<div class="bheader"><div class="bfrom"><b>来自：</b>%s</div><div class="bfloor"><b>第%s楼</b></div></div><div class="bbody">%s</div><div class="bfooter"><div class="bdate">日期:%s | </div><div id="re">&nbsp<a href="./response.php?id=%d&page=%d">评论</a></div></div>',$row["poster"],$count,$message,$row["posted"],$row["id"],$page);
	$count--;
	echo "</div>";
		if($row["children"]){
			response($row["id"]);
	}

}

?>
<div class="pages">

<?
if($page>1) printf('<a href="./board.php?page=%d">上一页 </a>',$page-1);

for($i=1;$i<=$pages;$i++){
		 $show=($i!=$page)?"<a href='./board.php?page=".$i."' > $i </a>":"<b> $i </b>";
		echo $show;
}
if($page<$pages) printf("<a href='./board.php?page=%d' > 下一页</a> ",$page+1);
?>
</div>
<div class="anchor"><div class="toup"><a href="#toup"><img src="./assets/images/system/top.png"></a></div><div class="post"><a href="#post"><img src="./assets/images/system/chat.png"></a></div><div class="todown"><a href="./board.php?page=<? if($page<$pages){printf('%d',$page+1);}else{printf('%d',$page);} ?>"><img src="./assets/images/system/next.png"></a></div></div>
