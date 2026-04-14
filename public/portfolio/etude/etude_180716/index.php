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
	#event {position:relative; width:1024px; margin:0px auto; overflow:hidden}
	.sec1{position:relative;width:100%;}
	.sec1 > img{width:100%;display:block;}
	.popup_link {display: block;position: absolute;bottom: 0%;left: 0%;/* width: 100%;height: 0;padding-top: 5%;text-indent: -9999px; */}
	.popup {display:none}
	.popup > span {position:absolute;bottom:0;left:0;width:100%;height:100%;display:block;background:#000;opacity:0.65;filter:alpha(opacity:'65');z-index:99999}
	.popup > div {position: absolute;bottom:20%;left: 27.197%;z-index: 2;z-index:99999}
	.popup > div > img {width:100%;}
	.popup > div > .close {position:absolute;top:0;right:0;display:block;width:12%;height: 0;padding-top: 12%;/* background:#000;opacity:0;filter:alpha(opacity:'0'); */z-index:1}
	.popup > div > .firValue {position:absolute;top:10%;left:0;display:block;z-index:1}
	.popup > div > .secValue {position:absolute;top:20%;left:0;display:block;z-index:1}
	.popup > div > .resValue {position:absolute;top:30%;left:0;display:block;z-index:1}
	.popup > div > .popupCheck {position:absolute;top:40%;left:0;display:block;z-index:1}
</style>
<div id="event">
	<div class="sec1">
		<img src="https://via.placeholder.com/1024X600" alt="" />
		<a href="#none" class="popup_link" onclick="onoff('#quiz1')">응모하기</a>

		<!-- 퀴즈1 -->
		<div class="popup" id="quiz1">
			<span></span>
			<div>
				<img src="https://via.placeholder.com/600X400" alt="" />
				<span id="firValue" class="firValue"></span>
				<span id="secValue" class="secValue"></span>
				<input text="" id="resValue" class="resValue" value="" placeholder="답을 입력해 주세요.">
				<a href="#none" class="popupCheck" onclick="couponCheck()" alt="" />제출</a>
				<a href="#none" class="close" onclick="onoff('#quiz1')" alt="" />닫기</a>
			</div>
		</div>

		<div class="popup" id="coupon1">
			<span></span>
			<div>
				<img src="https://via.placeholder.com/400X300" alt="" />
				<a href="#none" class="close" onclick="onoff('#coupon1')" alt="" />닫기</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var	firValue = Math.ceil(100*Math.random());

	function value (){
		firValue = Math.ceil(100*Math.random());
		$('#firValue').html(firValue)
		$('#secValue').html(101 - firValue)
	}
	value();

	function couponCheck (){
		if ($('#resValue').val() == '101'){
			onoff('#coupon1')
		} else {
			alert('정답이 아닙니다.')
		}		
	}

	// 팝업 열고닫기 토글
	function onoff (target){
		if ($(target).css('display') == 'none'){
			$('#resValue').attr('value', '')
			$('.popup').hide()
			value()
			$(target).show()
		} else {
			$(target).hide()	
		}
	}
</script>
</body>
</html>