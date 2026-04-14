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
body {min-height:3000px}
/* 위로 가기 */
#back-top {display:none;position:fixed;bottom:70px;right:20px;}
#back-top a {display:block;width:33px;height:33px;background:#333}
</style>
<div id="back-top"><a href="#none" title="맨 위로 가기"></a></div>


<script>
$(document).ready(function(){
	$(function(){
		$(window).scroll(function(){
			if ($(this).scrollTop() > 200){
				$('#back-top').stop().fadeIn('swing');
			} else {
				$('#back-top').stop().fadeOut('swing');
			}
			return false;
		});
		$('#back-top a').click(function(){
			$('body,html').animate({
				scrollTop: 0
			}, '1000');
			return false;
		});
	});
});
</script>
</body>
</html>
