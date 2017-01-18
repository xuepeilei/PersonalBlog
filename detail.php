<?
require("./assets/php/header.php");
$id=$_GET["id"];
$kind_id=$_GET["kind_id"];
?>
<div class="divright">
<script type="text/javascript">
function increment(id){
		$.post("./assets/php/increment_ajax.php?id="+id,function(data){$("#perfects #perfect").html(data);});
	}
function num(id){
		$.post("./assets/php/num_ajax.php?id="+id,function(data){$("#perfect").html(data);});
	}
function article(id){
		$.post("./assets/php/article_ajax.php?id="+id,function(data){$("#article").html(data);});
	}
function rank(){
		$.post("./assets/php/rank_ajax.php",function(data){$("#rank").html(data);});
	}
function randoms(){
		$.post("./assets/php/randoms_ajax.php",function(data){$("#randoms .menu").html(data);});
	}
function gap(id,kind_id){
		$.post("./assets/php/gap_ajax.php?id="+id+'&kind_id='+kind_id,function(data){$("#gap").html(data);});
}
</script>
<body onload="rank(),randoms(),article(<?=$id ?>),gap(<?=$id.','.$kind_id ?>),num(<?=$id ?>)">
<!-- 多说评论框-->
<script type="text/javascript">
var duoshuoQuery = {short_name:"firparks"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();

	</script>
	<div class="banner">
	<img src="./assets/images/system/banner.jpg">
	</div>
<div class="iarticle">
	<div id="article"></div>
	<div id="gap"></div>
	<div id="perfects"  onclick="increment(<?=$id ?>)"><img src="./assets/images/system/perfect.png"><div class="nums">(<div id="perfect"> </div>)</div></div>
<!--多说start-->

		<div class="ds-thread" data-thread-key="<?=$id ?>" data-url="http://localhost/station/detail.php"></div>
</div>
	<div class="ran">
		<div id="rank"></div>
		<div id="randoms"><p>随便看看</p><hr><ul class="menu"></ul></div>
		<div class="change" onclick="randoms()">换一组</div>

	</div>
</div>
</body>
