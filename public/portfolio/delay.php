<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
	<style type="text/css">
		.box {position:relative;display:none;}
		.box .text1 {position:absolute;top:55px;left:0;background:#000;color:#fff;display:none;}
		.box .text2 {position:relative;top:75px;left:0;background:#000;color:#fff;display:none;}
	</style>
</head>
<body>

<a href="#none" class="btn" data-target="data1">버튼</a>
<a href="#none" class="btn" data-target="data2">버튼2</a>
<a href="#none" class="btn" data-target="data3">버튼3</a>
<a href="#none" class="btn" data-target="data4">버튼4</a>
<div class="box data1">
	<span class="text1">텍스트1</span>
	<span class="text2">텍스트1</span>
</div>
<div class="box data2">
	<span class="text1">텍스트2</span>
	<span class="text2">텍스트2</span>
</div>
<div class="box data3">
	<span class="text1">텍스트3</span>
	<span class="text2">텍스트3</span>
</div>
<div class="box data4">
	<span class="text1">텍스트4</span>
	<span class="text2">텍스트4</span>
</div>




<script type="text/javascript">
$(function (){
	$(".btn").click(function(){
		var thisEle = $(this).attr("data-target");

		$(".box, .text1, .text2").hide();
		$("."+thisEle).show(0, function(){			
			$(this).children("span:first-child").delay(500).show(0);
			$(this).children("span:nth-child(2)").delay(1000).show(0);
		});
	})
});
</script>

</body>
</html>
