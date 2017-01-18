<?
require("db_gb2312.php");
function response($search_id=0){
	global $connect;
	global $page;
	$query_c="SELECT * FROM post WHERE parent=".$search_id;
	$result_c=mysql_query($query_c,$connect);
	

	while($row_c=mysql_fetch_array($result_c)){
		$message=mess($row_c["id"]);
		$parent=parent_name($search_id);
		printf('<div class="response"><div class="retitle"> %sถิ%sหต: </div><div class="remessage">%s</div><div class="rere"><a href="./response.php?id=%d&page=%d">ปุธด</a></div></div>',$row_c["poster"],$parent,$message,$row_c["id"],$page);
		response($row_c["id"]);
	}
}
function mess($id){
	global $connect;
	$query_m="SELECT * FROM message WHERE id=".$id;
	$result_m=mysql_query($query_m,$connect);
	$row_m=mysql_fetch_array($result_m);
	return $row_m["message"];
}
function parent_name($parent_id){
	global $connect;
	$query_p="SELECT * FROM post WHERE id=".$parent_id;
	$result_p=mysql_query($query_p,$connect);
	$row_p=mysql_fetch_array($result_p);
	return $row_p["poster"];
}

?>
