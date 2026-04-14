<!DOCTYPE html>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<div id="content">
	<ul class="menu-tabs js-menu-tabs">
		<li><a href="#none" data-target="js-all">all</a></li>
		<li><a href="#none" data-target="js-a">a</a></li>
		<li><a href="#none" data-target="js-b">b</a></li>
		<li><a href="#none" data-target="js-c">c</a></li>
		<li><a href="#none" data-target="js-d">d</a></li>	
	</ul>
	<ul class="ctt-tabs js-ctt-tabs" style="margin-top:10px;">
		<li class="js-all js-a">a</li>
		<li class="js-all js-b">b</li>
		<li class="js-all js-c">c</li>
		<li class="js-all js-d">d</li>
		<li class="js-all js-a">a</li>
		<li class="js-all js-b">b</li>
		<li class="js-all js-c">c</li>
		<li class="js-all js-d">d</li>
	</ul>
</div>
<script>
	$(document).ready(function() {
		$(".js-menu-tabs a:first").addClass("active");
		$('.js-menu-tabs a').click(function(){
			$(".js-ctt-tabs .js-all").hide();
			$(".js-menu-tabs a").removeClass("active");
			$(this).addClass("active");
			$('.' + $(this).attr('data-target')).fadeIn(300);
		});
	});
</script>
</body>
</html>