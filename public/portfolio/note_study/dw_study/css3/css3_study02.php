<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css3_study02.css">
<div class="frame">
  <div class="heart">
	<span class="dot_box">
		<span class="dot _1"></span>
		<span class="dot _2"></span>
		<span class="dot _3"></span>
		<span class="dot _4"></span>
		<span class="dot _5"></span>
		<span class="dot _6"></span>
		<span class="dot _7"></span>
	</span>
    <span class="heart_figure"></span>
	<span class="circle_1"><span></span></span>
	<span class="circle_2"><span></span></span>
    <span class="heart_figure2"></span>
  </div>
</div>

<script>
$(function (){
	$('.heart').click(function(){
		if (!$(this).hasClass('on')){
			$(this).addClass('on')
		} else {
			$(this).removeClass('on')
		}
	})
})
</script>


</body>
</html>
