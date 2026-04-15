<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>브라우저 크기 변화에 따른 스크립트(jquery) 사용</title>
<style>
*{margin:0;padding:0;}

#quick{width:100px;height:300px;background-color:orange;position:absolute;left:0;top:100px;display:none;}
</style>
</head>
<body>

<div class="w"></div>

<div id="quick"></div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
var qCb = false;
var qC = false;
var quick = $("#quick");
var $window = $(window);

$window.resize(function(){
	var w = $window.width();
	$(".w").text(w);
	
	(w >= 1240) ? qC = true : qC = false;
	if(qCb == qC){ return false; }
	qCb = qC;

	console.log(1);
	quickAction(qC);	
}).resize();

function quickAction(bool){
	if(bool){
		quick.fadeIn(400);
	}else{
		quick.fadeOut(400);
	}
}
</script>











</body>
</html>