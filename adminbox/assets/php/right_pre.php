<html>
<head>
<script type="text/javascript">
function search(str){
		var xmlhttp;
		if(str.length==0){
			document.getElementById("searchbox").innerHTML="";
			return;
		}
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
			document.getElementById("searchbox").innerHTML=xmlhttp.responseText;	
			}
		}
	xmlhttp.open("GET","search_exe.php?str="+str,"true");
	xmlhttp.send();
	}
</script>
</head>
<body>
<form action=""> 
��ѯ:<input type="text" onkeyup="search(this.value)" /></form>
�����<span id="searchbox"></span>
</body>
</html>
