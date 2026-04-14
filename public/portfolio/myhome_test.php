<!doctype html>
<html><head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/common.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<style type="text/css">
body {width: 100%;overflow-x: hidden;}
#wrap {position:relative;width: 200%;left:0px;overflow:hidden}
#wrap #front1 {width:50%;float:left;background:#333;height:1500px;position:relative;}
#wrap #front2 {width:50%;float:left;background:#fa5400;height:2000px;position:relative;}
.button {height:30px;width:30px;position:fixed;right:20px;bottom:20px;display:block;background:#fff}
</style>

<div id="wrap">
	<div id="front1">
		<span class="button" onclick="wideContent();"></span>
	</div>
	<div id="front2">
		<span class="button" onclick="wideContent();"></span>
	</div>
</div>

<script type="text/javascript">

$(function(){
	$("#wrap").css("height",$("#front1").height());
})

function wideContent(){
	var front1Height = $("#front1").height()
	var front2Height = $("#front2").height()
	if ($("#wrap").css("left") == "0px"){
		$("#front2").css("visibility","visible");
		$("#wrap").css("height",front2Height);
		$("#wrap").animate({left:"-100%"},500,"easeInOutQuint",function(){
			$("#front1").css("visibility","hidden");
		})		
	}else{
		$("#front1").css("visibility","visible");
		$("#wrap").css("height",front1Height);
		$("#wrap").animate({left:"0px"},500,"easeInOutQuint",function(){
			$("#front2").css("visibility","hidden");
		})		
	}	
 }

</script>



</body>
</html>