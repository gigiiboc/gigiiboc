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
	<!-- type1 s -->
	<style>	
		/* 180314 메인 레드벨벳 팝업 */
		.main_floating.renewal {position: fixed;right: 5px;top: 100%;bottom: inherit;z-index: 501;margin-top: -36%;}
		.main_floating .main_artistTalk	{width: 69px;height: 63px;padding: 2px 0 0 4px;background-size: cover;display: block;}

		.redVelvet_popup {position: fixed;right: 0;bottom: -100%;z-index: 503;width: 100%;height:100%;}
		.redVelvet_popup .bg {display:none;position: fixed;right: 0;top: 0;width:100%;height:100%;background:#000;opacity:0.3;filter:alpha(opacity:'30');z-index: -1;}
		.redVelvet_popup .ctt {position: absolute;top: 0;left: 0;z-index: 1;width: 100%;}
		.redVelvet_popup .video_a {width: 91.9%;height: 26.5%;top: 31.1%;left: 4%;position: absolute;overflow: hidden;cursor: pointer;}
		.redVelvet_popup .video_link {display:block;height:100%;width:100%;background:#000;opacity:0;filter:alpha(opacity:'0');text-indent:-9999px}
		.redVelvet_popup .btn {position: absolute;top: 0;left: 0;padding-top: 31%;margin-top: -10%;width: 100%;z-index: 2;display: block;}
		.redVelvet_popup .redVelvet_popup_link {display: block;position: absolute;bottom: 2.4%;left: 4.3%;width: 91.2%;height: 8%;background: #000;opacity: 0;filter: alpha(opacity:'0');}

		.redVelvet_popup.open {overflow-y:auto}
		.redVelvet_popup.open .bg {display:block;}
	</style>
	<div class="redVelvet_popup">
		<div class="bg"></div>
		<div style="">
			<span class="btn"></span>
			<div class="ctt">			
				<img src="http://www.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319.png" style="width:100%;">
				<div class="video_a">
					<a href="#none" class="video_link" onclick="oneVideo(this, 'https://www.youtube.com/embed/VXSTeeFtyOo?rel=0&amp;autoplay=1');">비디오 재생</a>
				</div>
				<a href="#none" class="redVelvet_popup_link"></a>
			</div>
			<span style=""></span>
		</div>
	</div>
	<script type="text/javascript"> 
		var winH = $(window).height(),
			winW = $(window).width(),
			touchBox = $('.redVelvet_popup'),
			touchCtt = $('.redVelvet_popup .ctt'),
			touchBtn = $('.redVelvet_popup .btn'),
			startY,
			endY,
			scroll = 0;

		touchBox.css({
			'-webkit-bottom': 'calc(-100% + '+ winW*0.21 +'px)',
			'-moz-bottom': 'calc(-100% + '+ winW*0.21 +'px)',
			'bottom': 'calc(-100% + '+ winW*0.21 +'px)'
		});

		touchBtn.on('touchstart', function(e) {
			var event = e.originalEvent;
			startY =  event.touches[0].clientY; // screenY : 디바이스크기,  clientY : 브라우저크기?
			if (!touchBox.hasClass('open')){
				scroll = $('body, html').scrollTop()
				$('body,html').css({height:'auto', overflow:'hidden'})
			} else {			
			}
			e.preventDefault(); 
			return startY
		});

		touchBtn.on('touchmove', function(e) {
			var event = e.originalEvent;
			endY = event.touches[0].clientY;
			event.preventDefault();
			touchBox.css('bottom',winW*0.21-endY)
			return endY
		});

		touchBtn.on('touchend', function(e) {
			if (endY < startY){
				touchCtt.children('img').attr('src','http://www.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319_open.png')
				touchBox.addClass('open').css({'bottom': 0})//.animate({"bottom":0},200,"easeInOutCubic")
				$('body,html').css({height:'100%', overflow:'hidden'})
			} else {
				touchCtt.children('img').attr('src','http://www.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319.png')
				touchBox.removeClass('open').css({
						'-webkit-bottom': 'calc(-100% + '+ winW*0.21 +'px)',
						'-moz-bottom': 'calc(-100% + '+ winW*0.21 +'px)',
						'bottom': 'calc(-100% + '+ winW*0.21 +'px)'
					})//.animate({"bottom":'-100%'},200,"easeInOutCubic")
				$('body,html').css({height:'auto', overflow:'visible'}).animate({scrollTop: scroll});
			}
		});
	</script>
	<!-- type1 e -->

	<!-- type2 s -->
	<!--
	<style>	
		/* 180314 메인 레드벨벳 팝업 */
		.main_floating.renewal {position: fixed;right: 5px;top: 100%;bottom: inherit;z-index: 501;margin-top: -42%;}
		.main_floating .main_artistTalk	{width: 69px;height: 63px;padding: 2px 0 0 4px;background-size: cover;display: block;}

		.redVelvet_popup {position: fixed;right: 0;bottom: 0;z-index: 503;width: 100%;}
		.redVelvet_popup .bg {display:none;position: fixed;right: 0;top: 0;width:100%;height:100%;background:#000;opacity:0.3;filter:alpha(opacity:'30');z-index: -1;}
		.redVelvet_popup .ctt {position: absolute;top: 0;left: 0;z-index: 1;width: 100%;}
		.redVelvet_popup .video_a {width: 91.9%;height: 26.5%;top: 31.1%;left: 4%;position: absolute;overflow: hidden;cursor: pointer;}
		.redVelvet_popup .video_link {display:block;height:100%;width:100%;background:#000;opacity:0;filter:alpha(opacity:'0');text-indent:-9999px}
		.redVelvet_popup .btn {position: absolute;top: 0;left: 0;padding-top: 21%;width: 100%;z-index: 1;display: block;}
		.redVelvet_popup .redVelvet_popup_link {display: block;position: absolute;bottom: 2.4%;left: 4.3%;width: 91.2%;height: 8%;background: #000;opacity: 0;filter: alpha(opacity:'0');}

		.redVelvet_popup.open {overflow-y:auto}
		.redVelvet_popup.open .bg {display:block;}
	</style>
	<div class="redVelvet_popup">
		<div class="bg"></div>
		<div style="">
			<div class="ctt">			
				<span class="btn"></span>
				<img src="http://www.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319.png" style="width:100%;">
				<div class="video_a">
					<a href="#none" class="video_link" onclick="oneVideo(this, 'https://www.youtube.com/embed/VXSTeeFtyOo?rel=0&amp;autoplay=1');">비디오 재생</a>
				</div>
				<a href="#none" class="redVelvet_popup_link"></a>
			</div>
			<span style=""></span>
		</div>
	</div>
	<script type="text/javascript"> 
		var winH = $(window).height(),
			winW = $(window).width(),
			touchCtt = $('.redVelvet_popup'),
			touchBtn = $('.redVelvet_popup .btn'),
			startY,
			endY;

		touchCtt.css('height', winW*0.21)
		// touchCtt.css({'height': 'calc(100% - '+ winW*0.21 +'px)'});

		touchBtn.on('touchstart', function(e) {
			var event = e.originalEvent;
			startY =  event.touches[0].clientY; // screenY : 디바이스크기,  clientY : 브라우저크기?
			return startY
		});

		touchBtn.on('touchmove', function(e) {
			var event = e.originalEvent;
			endY = event.touches[0].clientY;
			// touchCtt.css('bottom',-endY + winW*0.21)
			if (!touchCtt.hasClass('open')){
				scroll = $('body, html').scrollTop()
				$('body,html').css({height:'auto', overflow:'hidden'})
			}
			return endY
		});

		touchBtn.on('touchend', function(e) {
			if (endY < startY){
				touchCtt.addClass('open').animate({"height": '100%'},200,"easeInOutCubic")
				$('body,html').css({height:'100%', overflow:'hidden'})
			} else {
				touchCtt.removeClass('open').animate({"height":winW*0.21},200,"easeInOutCubic")
				$('body,html').css({height:'auto', overflow:'visible'}).animate({scrollTop: scroll});
			}
		});
	</script>
	-->
	<!-- type2 e -->
</body>
</html>

