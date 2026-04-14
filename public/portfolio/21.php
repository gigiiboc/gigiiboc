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
	@keyframes img_ani {
		0 {
			transform: translateY(0);
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			-moz-transform: translateY(0);
			-o-transform: translateY(0);
		}
		50% {
			transform: translateY(-20%);
			-webkit-transform: translateY(-20%);
			-ms-transform: translateY(-20%);
			-moz-transform: translateY(-20%);
			-o-transform: translateY(-20%);
		}
		70% {
			transform: translateY(0);
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			-moz-transform: translateY(0);
			-o-transform: translateY(0);
		}
		80% {
			transform: translateY(-5%);
			-webkit-transform: translateY(-5%);
			-ms-transform: translateY(-5%);
			-moz-transform: translateY(-5%);
			-o-transform: translateY(-5%);
		}
		100% {
			transform: translateY(0);
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			-moz-transform: translateY(0);
			-o-transform: translateY(0);
		}
	}
	.artistTalk.on {
		animation: img_ani 0.6s ease 0s 4 backwards;
		-webkit-animation: img_ani 0.6s ease 0s 4 backwards;
		-moz-animation: img_ani 0.6s ease 0s 4 backwards;
		-o-animation: img_ani 0.6s ease 0s 4 backwards;
		-ms-animation: img_ani 0.6s ease 0s 4 backwards;
	}
</style>
<img src="http://m.etudehouse.com/web_resource/mobile/images/common/main_artistTalk.png" class="artistTalk on" alt="">
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
