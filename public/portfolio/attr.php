<!DOCTYPE HTML>
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
<style type="text/css">
</style>


<span href="#" class="btn1" style="cursor:pointer;">dd</span>
<span href="#" class="btn2" style="cursor:pointer;">dd</span>

<div class="ele">
	<img src="https://via.placeholder.com/480X280" alt="" />
</div>


<script type="text/javascript">


	$(function (){
		$(".btn1").click(function(){
			var eleIMAGE = $(".ele").find("img");
//			$(eleIMAGE).attr("src","https://via.placeholder.com/280X480");
//			$(eleIMAGE).attr("alt","https://via.placeholder.com/280X480");
			$(eleIMAGE).addClass($(this).attr("class"));
		})
		$(".btn2").click(function(){
			var eleIMAGE = $(".ele").find("img");
//			$(eleIMAGE).attr("src","https://via.placeholder.com/480X280");
//			$(eleIMAGE).attr("alt","https://via.placeholder.com/480X280");
			$(eleIMAGE).addClass($(this).attr("class"));
		})
	})
</script>

</body>
</html>
