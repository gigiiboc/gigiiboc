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
<style type="text/css"></style>


<a href="#none" class="test1">테스트1</a>
<a href="#none" class="test2" onclick="con('test2');">테스트2</a>
<a href="#none" onclick="conthis(this);">테스트3</a>

<script type="text/javascript">
	$(function (){
		$(".test1").click(function(){
			alert($(this).text())
		})		
	});
</script>
<script type="text/javascript">
	function con(ele){
		alert($("."+ele).text())
	}
</script>
<script type="text/javascript">
	function conthis(ele){
		alert($(ele).text())
	}
</script>

</body>
</html>
