<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<script src="/note/note_js_plugin/TweenMax/TweenMax.min.js"></script>
</head>
<body>
	<style>
		.loadSection {position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index: 200;overflow: hidden;display: block;}
		.loadSection .textBox {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
		.loadSection .textBox:before {content:'';display:inline-block;vertical-align:middle;height:100%;}
		.loadSection .textBox .text-overflow {display:inline-block;vertical-align:middle;}
		.loadSection .textBox .text-overflow .title-wrapper {width:100%;text-align:center;position:relative;}
		.loadSection .textBox .text-overflow .title-wrapper .text {font-size: 6vw;line-height: 8vw;letter-spacing: 5px;text-transform: uppercase;color: #202020;}

		.loadSection .bg {position: absolute;top: 0;left: 0;width: 0%;height: 100%;background-color: #202020;overflow: hidden;}
		.loadSection .textBox.end .text-overflow {width: 0%;overflow: hidden;}
		.loadSection .textBox.end .text-overflow .title-wrapper .text {color: #fff;}
		.loadSection .mainOpenBtn {opacity:0;position: absolute;top: 50%;left: 50%;width: 100px;height: 40px;line-height: 40px;text-align: center;margin: 80px 0 0 -50px;color: #111;background: #fff;font-weight: bold;border-radius: 5px;visibility: hidden;}
	</style>

	<div class="loadSection">
		<div class="textBox first"><div class="text-overflow"><div class="title-wrapper"><p class="text">Richland</p></div></div></div>
		<div class="bg"></div>
		<div class="textBox end"><div class="text-overflow"><div class="title-wrapper"><p class="text">Richland</p></div></div><div><a href="#none" class="mainOpenBtn" onclick="loadEnd()">open</a></div></div>
	</div>

	<script>
		// 로드 초기
		$('.loadSection .textBox .text-overflow .title-wrapper').css('width', $(window).width())
		$(window).resize(function(){
			var winWidth = $(window).width();
			$('.loadSection .textBox .text-overflow .title-wrapper').css('width', winWidth)
			$('.textBox.end .text-overflow').css('width', winWidth)
			$('.bg').css('width', winWidth)
		})

		// 인트로 스타트
		function loadStart (){
			TweenMax.to('.bg', 1, {
				delay: 0.5,
				width:'100%',
				ease:Power3.easeInOut,
				onStart: function() { // 동작이 시작할때 실행
				},
				onUpdate : function(){ // 동작하면서 한번씩 실행
					$('.textBox.end .text-overflow').width($('.bg').width())
				},
				onComplete: function() { // 동작이 끝난 뒤 실행
					$('.mainOpenBtn').css('visibility','visible')
					TweenMax.to('.mainOpenBtn', 1, {
						opacity:'100',
						y:-5,
						ease:Power3.easeInOut
					});
				}
			});
		}

		// 인트로 종료 및 메인오픈
		function loadEnd (){
			TweenMax.to('.mainOpenBtn', 1, {
				opacity:'0',
				y:0,
				ease:Power3.easeInOut
			});
			TweenMax.to('.loadSection .textBox.end .text-overflow .title-wrapper', 0.5, {
				delay: 1,
				top:53,
				ease: Power3.easeInOut,
				onComplete: function(){
					TweenMax.to('.loadSection', 1, {
						left:'-100%',
						ease: Power3.easeInOut
					});						
				}
			});
		}
		loadStart()
	</script>
</body>
</html>