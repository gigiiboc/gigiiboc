<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<style>
	.banilaTV{position: fixed;top: 0;left: 0;width: 100%;height: 100%;overflow: auto;overflow-x: hidden;line-height: 0;font-size: 0;}
	.blTvWrap{}
	.blTvWrap .blTvArea{max-width: 600px;margin: 0 auto;}
	.blTvWrap .blTvArea .video01{}
	.blTvWrap .blTvArea .video02{}
	.blTvWrap .blTvArea .video03{}
	.blTvArea .blTvBox{position: relative;overflow: hidden;height: 87vh;}
	.blTvArea .blTvBox div{position: absolute;top: 50%;left: 50%;height: 100%;width: 100%;transform: translate(-50%, -50%);}
	.blTvArea .blTvBox div	.videoCtt{display: block;margin: 0 auto;height: 100%;width: 100%;-o-object-fit: cover;object-fit: cover;}
	@media all and (max-width:600px){
		.blTvArea .blTvBox div{}
		.blTvArea .blTvBox div	.videoCtt{}	
	}
	</style>
</head>
<body>
	<div class="wrap">
		<div style="background:#222;height:500px;"></div>
		<div style="background:#333;height:500px;"></div>
		<div style="background:#444;height:500px;"></div>
		<div style="background:#555;height:500px;"></div>
	</div>
	<div class="banilaTV">
		<div class="blTvWrap">
			<div class="blTvArea">
				<div class="blTvBox">
					<div class="background:#222;">
						<!-- <video class="videoCtt" muted controls autoplay playsinline><source src="/gigiiboc/portfolio/resource/video/banilaTV01.mp4" type="video/mp4"></video> -->
					</div>
				</div>
				<div class="blTvBox">
					<div class="background:#333;">
						<!-- <video class="videoCtt" muted controls autoplay playsinline><source src="/gigiiboc/portfolio/resource/video/banilaTV02.mp4" type="video/mp4"></video> -->
					</div>
				</div>
				<div class="blTvBox">
					<div class="background:#444;">
						<!-- <video class="videoCtt" muted controls autoplay playsinline><source src="/gigiiboc/portfolio/resource/video/banilaTV03.mp4" type="video/mp4"></video> -->
					</div>
				</div><!-- 
				<div class="blTvBox">
					<div>
						<video class="videoCtt" muted controls autoplay playsinline><source src="/gigiiboc/portfolio/resource/video/banilaTV04.mp4" type="video/mp4"></video>
					</div>
				</div>
				<div class="blTvBox">
					<div>
						<video class="videoCtt" muted controls autoplay playsinline><source src="/gigiiboc/portfolio/resource/video/banilaTV05.mp4" type="video/mp4"></video>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<script src="http://whweb.cafe24.com/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="http://whweb.cafe24.com/note/resource/js/jquery.easings.min.js"></script>
	<script>
	$('body').css({
		overflow: 'hidden',
		height: '100%'
	})
	var ts;
	$('.blTvArea').bind('touchstart', function (e){
		ts = e.originalEvent.touches[0].clientY;
	});

	$('.blTvArea').bind('touchend', function (e){
		var te = e.originalEvent.changedTouches[0].clientY;
		if(ts > te+5){
			console.log('down')
			$(this).find()
		}else if(ts < te-5){
			console.log('up')
	}
	});
	</script>
</body>
</html>