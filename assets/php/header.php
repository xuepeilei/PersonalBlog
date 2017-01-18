<html>
<head>
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="./assets/css/index.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/none.css">
	<script type="text/javascript" src="./assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.item').hover(function(){
		$(this).find('.extend').show();
		$(this).find('.extend_biger').show();
		$(this).addClass("active").find("line");
	},function(){
		$(this).find('.extend').hide();
		$(this).find('.extend_biger').hide();
		$(this).removeClass("active").find("line");
	});
});

function prepic(kind_id){
		var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
			document.getElementById("ppt1").innerHTML=xmlhttp.responseText;
			document.getElementById("ppt2").innerHTML=xmlhttp.responseText;
			document.getElementById("ppt3").innerHTML=xmlhttp.responseText;	
			}
		}
	xmlhttp.open("GET","./assets/php/prepic_ajax.php?kind_id="+kind_id,"true");
	xmlhttp.send();
	}
function preboard(){
	var xmlhttp;
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
			document.getElementById("ppt4").innerHTML=xmlhttp.responseText;	
			}
		}
	xmlhttp.open("GET","./assets/php/preboard_ajax.php","true");
	xmlhttp.send();
}
</script>
</head>
<body>
<div class="header">

	  <div class="uphead"></div>
	  <a href="index.php" ><div class="name"><img src="./assets/images/system/home.png" /><p align="center">Ê×Ò³</p></div></a>
	  <div class="uphead"></div>
<div class="item">
	  <a href="content.php?kind_id=1"><div class="name" onmouseover="prepic(1)"><img src="./assets/images/system/essay.png" /><p align="center">Ëæ±Ê</p></div></a>
	  <div class="extend first"><span id="ppt1"></span></div>
	  <line></line>
</div>
	  <div class="uphead"></div>

<div class="item">
	  <a href="content.php?kind_id=2"><div class="name" onmouseover="prepic(2)"><img src="./assets/images/system/web.png" /><p align="center">»¥ÁªÍø</p></div></a>
	  <div class="extend second"><span id="ppt2"></span></div>
	  <line></line>
</div>
	  <div class="uphead"></div>

<div class="item">
	  <a href="content.php?kind_id=3" ><div class="name" onmouseover="prepic(3)"><img src="./assets/images/system/basic.png" /><p align="center">»ù´¡Ñ§¿Æ</p></div></a>
	  <div class="extend third"><span id="ppt3"></span></div>
	  <line></line>
</div>
	  <div class="uphead"></div>
<div class="item">
	  <a href="./board.php" target="_parent" ><div class="name" onmouseover="preboard()"><img src="./assets/images/system/board.png" /><p align="center">ÁôÑÔ°å</p></div></a>
	  <div class="extend_biger fourth"><span id="ppt4"></span></div>
	  <line></line>
</div>
	
</div>


