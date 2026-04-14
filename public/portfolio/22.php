<!DOCTYPE HTML>
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
<style>
.shopSatis {}
.shopSatis .bg {position:fixed;bottom:0;left:0;width:100%;height:100%;background:#000;opacity:0.8;filter:alpha(opacity:'80');z-index:1}
.shopSatis .ctt_box {position:fixed;bottom:0;left:0;width:100%;text-align:center;background:#fff;z-index:2}
.shopSatis p {padding: 60px 0;color:#222;font-size:14px;font-weight:600}
.shopSatis ul {}
.shopSatis ul li {float:left;width:50%;}
.shopSatis ul li a {padding:19px 0;display:block;}
.shopSatis ul li a span {width:22px;height:22px;display:inline-block;vertical-align:middle;margin-right:5px;}
.shopSatis ul li.no a {background:#f5f5f5;color:#222;font-size:14px;font-weight:600}
.shopSatis ul li.yes a {background:#f6497e;color:#fff;font-size:14px;font-weight:600}
</style>
<div class="shopSatis">
	<span class="bg"></span>
	<div class="ctt_box">
		<p>구매에 만족하셨나요?</p>
		<ul>
			<li class="no"><a href=""><span style="background:url(icon_no.png) no-repeat left center;background-size:100% auto;"></span>아니오</a></li>
			<li class="yes"><a href=""><span style="background:url(icon_yes.png) no-repeat left center;background-size:100% auto;"></span>예</a></li>
		</ul>
	</div>
</div>

<script>
$(function(){
	function fade_bg (){
		if (!$('.artistTalk').hasClass('on')){
			$('.artistTalk').addClass('on')
		} else {
			$('.artistTalk').removeClass('on')
		}
	}
	settime = setInterval(fade_bg, 6000) // 1/2
})
</script>
</body>

</html>
