<?
require("search_fns.php");
$page=isset($_GET['page'])?intval($_GET['page']):1;
$num=5;


$query="SELECT * FROM structure";
$result=mysql_query($query,$connect);
$total=mysql_num_rows($result);
$pages=ceil($total/$num);
$offset=($page-1)*$num;
$query_l="SELECT * FROM structure LIMIT ".$offset.",".$num;
$result_l=mysql_query($query_l);
	

print('<table border="1">');
	print('<tr style="text-align:center;height:50px"><th width=30px>ID</th><th width=200px>����</th><th width=400px>���</th><th width=50px>����</th><th width=200px>ͼƬ��ַ</th><th width=100px>ʱ��</th><th width=50px>�޸�</th><th width=50px>ɾ��</th></tr>');
 	
while($row=mysql_fetch_array($result_l)){
	printf('<tr style="text-align:center;height:50px"><td width=30px>%d</td><td width=200px><a href="details.php?id=%d">%s</a></td><td width=400px>%s</td><td width=50px>%s</td><td width=200px>%s</td><td width=100px>%s</td><td width=50px><a href="alter.php?id=%d&jump=1">�޸�</a></td><td width=50px><a href="delete_exe.php?id=%d&jump=1">ɾ��</a></td></tr>',$row["id"],$row["id"],$row["title"],$row["introduce"],search_kind($row["kind_id"]),$row["pic"],$row["content_time"],$row["id"],$row["id"]);
	}
print("</table>");
print("<hr>");
?>
<p align="center">
<?
if($page>1){printf('<a href="see_exe.php?page=%d">��һҳ',$page-1);}
for($i=1;$i<=$pages;$i++){
		 $show=($i!=$page)?"<a href='see_exe.php?page=".$i."'>$i</a>":"<b>$i</b>";
		print("$show");
}
if($page<$pages){printf('<a href="see_exe.php?page=%d">��һҳ',$page+1);}
?>
</p>
