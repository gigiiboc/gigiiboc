<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<style type="text/css"> #divTest{width:150px;height:200px;overflow:auto} </style>
</head>
<body>
<script type="text/javascript">
	window.onload = function(){ var strCook = document.cookie; //alert(strCook); 
		if(strCook.indexOf("!~")!=0) { 
			var intS = strCook.indexOf("!~");
			var intE = strCook.indexOf("~!");
			var strPos = strCook.substring(intS+2,intE);
			
			//alert("strCook=" +strCook + "\n\n"+ intS +"/"+ intS +"/"+strPos); 
			document.getElementsByTagName("body").scrollTop = strPos; 
		} 
	} 
	function SetDivPosition(){ 
		var intY = document.getElementsByTagName("body").scrollTop; 
		document.title = intY; 
		document.cookie = "yPos=!~" + intY + "~!"; 
	}
	/* var a = 'this'; var reg = /t/gi; alert(reg.test(a)); alert(reg.test(a)); alert(reg.test(a));*/ 
</script>
<div style="background:#000;height:1000px;"></div>
<div style="background:#333;height:1000px;"></div>
<div style="background:#555;height:1000px;"></div>
<div style="background:#777;height:1000px;"></div>
</body>
</html>
