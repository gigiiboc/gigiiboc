<!DOCTYPE html>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
	var p = $(".p").width();
	var div = $(".div");
	var box = $(".box");

	$(box).mouseover(function(){
		div.animate({left:p},100);
	});
	$(box).mouseleave(function(){
		div.animate({left:"0px"},100);
	});
})
</script>
<style>
div.box {position:relative; background:#999; width:100%; height:100px; overflow:hidden}
div.p {transition:0.3s; position:absolute; top:10px; left:300px; color:#fff}
div.div {transition:0.3s; position:absolute; top:0px; left:0px; color:#fff}
</style>

<button name="" value="클릭" alt="클릭">클릭하세요</button>
<div class="box">
	<div class="p">p-position</div>
	<div class="div">div-position</div>
</div>



</body>
</html>
