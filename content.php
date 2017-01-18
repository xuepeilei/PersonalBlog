<?
require("./assets/php/header.php");
$kind_id=$_GET["kind_id"];
$page=isset($_GET['page'])?intval($_GET['page']):1;

?>

<div class="divright">
<script type="text/javascript">

function contents(kind_id,page){
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
			document.getElementById("contents").innerHTML=xmlhttp.responseText;	
			}
		}
	xmlhttp.open("GET","./assets/php/content_ajax.php?kind_id="+kind_id+'&page='+page,"true");
	xmlhttp.send();
	}
function rank(){
		$.post("./assets/php/rank_ajax.php",function(data){$("#rank").html(data);});
	}
function randoms(){
		$.post("./assets/php/randoms_ajax.php",function(data){$("#randoms .menu").html(data);});
	}
</script>
<body onload="contents(<?=$kind_id.','.$page ?>),rank(),randoms()">
	<div class="banner">
	<img src="./assets/images/system/banner.jpg">
	</div>
	<div id="contents">
	</div>
	<div class="ran">
		<div id="rank"></div>
		<div id="randoms"><p>随便看看</p><hr><ul class="menu"></ul></div>
		<div class="change" onclick="randoms()">换一组</div>
	</div>
</div>
</body>
