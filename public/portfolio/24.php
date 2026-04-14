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
	<!-- <script src="http://hammerjs.github.io/dist/hammer.min.js"></script> -->	
	<div style="width:100%;height:900px;"></div>



	<style>	
		/* 180314 메인 레드벨벳 팝업 */
		.main_floating {position: fixed;right: 5px;top: 100%;bottom: inherit;z-index: 501;margin-top: -38%;}
		.main_floating .main_artistTalk.renewal	{width: 69px;height: 63px;padding: 2px 0 0 4px;background-size: cover;display: block;}
		.mainWrap .quickWrap {bottom: inherit;top: 100%;margin-top: -50%;}

		.redVelvet_popup {position: fixed;right: 0;bottom: -100%;z-index: 140;width: 100%;height:100%;}
		.redVelvet_popup .bg {display:none;position: fixed;right: 0;top: 0;width:100%;height:100%;background:#000;opacity:0.3;filter:alpha(opacity:'30');z-index: -1;}
		.redVelvet_popup .ctt {position: absolute;top: 0;left: 0;z-index: 1;width: 100%;}
		.redVelvet_popup .video_a {width: 91.9%;height: 26.7%;top: 32%;left: 4%;position: absolute;overflow: hidden;cursor: pointer;}
		.redVelvet_popup .video_link {display:block;height:100%;width:100%;background:#000;opacity:0;filter:alpha(opacity:'0');text-indent:-9999px}
		.redVelvet_popup .btn {position: absolute;top: 0;left: 0;padding-top: 30%;margin-top: -5%;width: 100%;z-index: 2;display: block;}
		.redVelvet_popup .redVelvet_popup_link {display: block;position: absolute;bottom: 2.1%;left: 4.3%;width: 91.2%;height: 8%;background: #000;opacity: 0;filter: alpha(opacity:'0');}

		.redVelvet_popup.open {overflow-y:auto}
		.redVelvet_popup.open .bg {display:block;}
	</style>
	<div class="redVelvet_popup">
		<div class="bg"></div>
		<div style="">
			<span class="btn"></span>
			<div class="ctt">			
				<img src="http://m.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319.png" style="width:100%;">
				<div class="video_a">
					<a href="#none" class="video_link" onclick="oneVideo(this, 'https://www.youtube.com/embed/VXSTeeFtyOo?rel=0&amp;autoplay=1');">비디오 재생</a>
				</div>
				<a href="http://m.etudehouse.com/kr/ko/mobile/event.do?method=view&amp;flag=1&amp;bltnCntSeq=2054" class="redVelvet_popup_link"></a>
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
			'-webkit-bottom': 'calc(-100% + '+ winW*0.25 +'px)',
			'-moz-bottom': 'calc(-100% + '+ winW*0.25 +'px)',
			'bottom': 'calc(-100% + '+ winW*0.25 +'px)'
		});

		touchBtn.on('touchstart', function(e) {
			var event = e.originalEvent;
			startY =  event.touches[0].clientY; // screenY : 디바이스크기,  clientY : 브라우저크기?
			/*
			if (!touchBox.hasClass('open')){
				// scroll = $('body, html').scrollTop()
				//$('body,html').css({height:'auto', overflow:'hidden'})
				touchBox.css('z-index','504')
				touchBox.css('bottom',winW*0.25-startY)
			} else {
				touchBox.css('z-index','504')
				touchBox.css('bottom',winW*0.25-startY)
			}
			*/
			touchBox.css('z-index','504')
			// touchBox.css('bottom',winW*0.25-startY)
			e.preventDefault(); 
			return startY
		});

		touchBtn.on('touchmove', function(e) {
			var event = e.originalEvent;
			endY = event.touches[0].clientY;
			event.preventDefault();
			touchBox.css('bottom',winW*0.25-endY)
			return endY
		});

		touchBtn.on('touchend', function(e) {
			if (!touchBox.hasClass('open')){
				touchCtt.children('img').attr('src','http://m.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319_open.png')
				touchBox.addClass('open').css({'bottom': 0})
				//.animate({"bottom":0},200,"easeInOutCubic")
				//$('body,html').css({height:'100%', overflow:'hidden'})
			} else {
				touchCtt.children('img').attr('src','http://m.etudehouse.com/kr/ko/web_resource/mobile/images/common/redVelvet_bg_180319.png')
				touchBox.removeClass('open').css({
						'-webkit-bottom': 'calc(-100% + '+ winW*0.25 +'px)',
						'-moz-bottom': 'calc(-100% + '+ winW*0.25 +'px)',
						'bottom': 'calc(-100% + '+ winW*0.25 +'px)'
					})
				touchBox.css('z-index','140')
				//.animate({"bottom":'-100%'},200,"easeInOutCubic")
				//$('body,html').css({height:'auto', overflow:'visible'}).animate({scrollTop: scroll});
			}
		});

		function oneVideo(t, e){                          
			$(t).parent().html('<iframe width="100%" height="100%" src="' +e+ '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
		}
	</script>


</body>
</html>