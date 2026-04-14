<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<style>
		.pdt_con .sec3{}
		.pdt_con .sec3 .videoItem {position: relative;width: 100%;/* padding-top:56%; */height:300px;margin: 0 auto;}
		.pdt_con .sec3 .videoItem video {position: absolute;left:0;top:0;width:100%;height:100%;object-fit: cover;}
		.pdt_con .sec3 .videoItem video[poster] {}
		.pdt_con .sec3 .videoItem .play_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:url(/note/images/aestura/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .videoItem .pause_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:#000;filter:alpha(opacity:'0');opacity:0;}
		.pdt_con .sec3 .videoItem .thumb {position: absolute;left:0;top:0;width:100%;height:100%;background:url(/note/images/aestura/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .videoItem.play .play_btn {display:none;}
		.pdt_con .sec3 .videoItem.play .pause_btn {display:block;}
		.pdt_con .sec3 .videoItem.play .thumb {display:none;}
		.pdt_con .sec3 .videoItem.pause .play_btn {display:block;}
		.pdt_con .sec3 .videoItem.pause .pause_btn {display:none;}
		.pdt_con .sec3 .videoItem.pause .thumb {display:none;}
		.pdt_con .sec3 .videoItem.end .play_btn {display:none;}
		.pdt_con .sec3 .videoItem.end .pause_btn {display:none;}
		.pdt_con .sec3 .videoItem.end .thumb {display:block;}
	</style>
	<!--		
		1. 오토플레이는 muted(음소거) 설정이 잡혀야 모바일에서 재생됨 
		2. 아이폰 동영상 코딩시, 오토플레이 설정을 잡아줘야 썸네일이 보이며, playsinline 설정이 잡혀야 영역 내에서 재생됨.
		3. video 태그에 -o-object-fit: cover;object-fit: cover; 속성을 넣으면 background:cover 처럼 됨.
	-->
	<div id="wrap">
		<div id="container">
			<div class="pdt_con">		
				<div class="sec3">
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player01" muted autoplay playsinline poster="https://ssl.pstatic.net/tveta/libs/1303/1303623/87734eecf2139bd0aa1f_20200907112650236.png"><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player01')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player01')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player01')"></a>
					</div>
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player02" muted autoplay playsinline><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player02')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player02')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player02')"></a>
					</div>
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player03" muted autoplay playsinline><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player03')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player03')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player03')"></a>
					</div>
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player04" muted autoplay playsinline><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player04')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player04')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player04')"></a>
					</div>
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player05" muted autoplay playsinline><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player05')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player05')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player05')"></a>
					</div>
					<div class="videoItem dwrk_viewAnim" anime-stlye="1">
						<video class="videoCtt" id="player06" muted autoplay playsinline><source src="/note/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay('#player06')"></a>
						<a href="#none" class="pause_btn" onclick="videoPause('#player06')"></a>
						<a href="#none" class="thumb" onclick="videoPlay('#player06')"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function dwrk_viewAnim (target){
			$(target).each(function(){
				var targetTop = $(this).offset().top;

				if ($(this).attr('anime-stlye') == 1){ // 화면에 나타날때 노출, 유지
					if ($(window).scrollTop() >= targetTop - ($(window).height()/2)){
						$(this).addClass('on')
						// 영상있을경우
						if ($(this).hasClass('videoItem') && !$(this).hasClass('end')){
							$(this).removeClass('pause', 'end').addClass('play').find('.videoCtt').get(0).play();
						}
					} else {
						//$(this).removeClass('on')					
					}
				}
			})
		}
		dwrk_viewAnim('.dwrk_viewAnim')
		$(window).scroll(function(){
			dwrk_viewAnim('.dwrk_viewAnim')
		})
		$(function(){
			$('.videoCtt').on('pause', function() {
				if ($(this).get(0).currentTime >= $(this).get(0).duration){
					$(this).closest('.videoItem').removeClass('play');
					$(this).closest('.videoItem').removeClass('pause');
					$(this).closest('.videoItem').addClass('end');
				} else {
					$(this).closest('.videoItem').removeClass('play');
					$(this).closest('.videoItem').addClass('pause');
					$(this).closest('.videoItem').removeClass('end');	
				}
			});
		});
		function videoAllStop(){
			$('.videoCtt').each(function(){
				$(this).get(0).pause()
				$(this).closest('.videoItem').removeClass('play');
				$(this).closest('.videoItem').addClass('pause');
				$(this).closest('.videoItem').removeClass('end');
			})
		}
		function videoPlay (e){
			videoAllStop()
			$(e).get(0).play()
			$(e).closest('.videoItem').addClass('play');
			$(e).closest('.videoItem').removeClass('pause');
			$(e).closest('.videoItem').removeClass('end');
		}
		function videoPause (e){
			$(e).get(0).pause()
			$(e).closest('.videoItem').removeClass('play');
			$(e).closest('.videoItem').addClass('pause');
			$(e).closest('.videoItem').removeClass('end');
		}
		videoAllStop()
	</script>
</body>
</html>