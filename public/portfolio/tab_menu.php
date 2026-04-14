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
<style>
.js-ctt-tabs li {display:none;}
.js-ctt-tabs li.active {display:block;}
</style>

<div>
<ul class="js-menu-tabs">
	<li class="active"><a href="javascript:void(0)" data-target="js-menutab1_box">메뉴1</a></li>			
	<li><a href="javascript:void(0)" data-target="js-menutab2_box">메뉴2</a></li>
	<li><a href="javascript:void(0)" data-target="js-menutab3_box">메뉴3</a></li>
</ul>

<ul class="js-ctt-tabs">
	<li class="js-menutab1_box active" style="width:100%;height:300px;background:#333;"></li>
	<li class="js-menutab2_box" style="width:100%;height:300px;background:#666"></li>
	<li class="js-menutab3_box" style="width:100%;height:300px;background:#999"></li>
</ul>
<script>
	$(document).ready(function() {
		$(".js-menu-tabs a").click(function(e) {
			$(".js-menu-tabs li").removeClass("active");
			$(this).parent("li").addClass("active");
			$(".js-ctt-tabs li").removeClass("active")
			$("." + $(this).attr("data-target")).addClass("active")
			e.preventDefault();
		});
	});
</script>
</div>
</body>
</html>
