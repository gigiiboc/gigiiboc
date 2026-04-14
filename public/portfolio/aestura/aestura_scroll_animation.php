<!doctype html>
<html lang="ko">
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
		.pdt_con .big {display: block;margin: 0 auto;}
		.pdt_con .sec1 {position: relative;height: 1664px;}
		.pdt_con .sec1 img {display: block;position: absolute;max-width: 100%;-webkit-opacity:0;opacity:0;-webkit-transition: .5s ease-out;transition: .5s ease-out}
		.pdt_con .sec1 img._a {top: 165px;left: 50%;width: 562px;margin-left:-281px;-webkit-transform:translateY(40px);transform:translateY(40px);}
		.pdt_con .sec1 img._b {top: 500px;left: 50%;width: 1200px;margin-left:-600px;-webkit-transform:translateY(40px);transform:translateY(40px);}
		.pdt_con .sec1 img._c {top: 1157px;left: 50%;width: 1200px;margin-left:-600px;-webkit-transform:translateY(40px);transform:translateY(40px);}
		.pdt_con .sec3 {position:relative;overflow: hidden;max-width: 1200px;margin: 0 auto;}
		.pdt_con .sec3 ul {position: relative;height: 1640px;}
		.pdt_con .sec3 ul li img {display: block;position: absolute;max-width: 100%;-webkit-opacity:0;opacity:0;-webkit-transition: .5s ease-out;transition: .5s ease-out}
		.pdt_con .sec3 ul li img._a {top: 148px;left: 77px;width: 391px;-webkit-transform:translateX(-20px);transform:translateX(-20px);}
		.pdt_con .sec3 ul li img._b {top: 348px;left: 0;width: 723px;-webkit-transform:translateX(-20px);transform:translateX(-20px);}
		.pdt_con .sec3 ul li img._c {top: 716px;left: 855px;width: 214px;-webkit-transform:translateX(20px);transform:translateX(20px);}
		.pdt_con .sec3 ul li img._d {top: 460px;left: 855px;width: 306px;-webkit-transform:translateX(20px);transform:translateX(20px);}
		.pdt_con .sec3 ul li img._e {top: 1111px;left: 786px;width: 246px;z-index: 1;-webkit-transform:translateY(40px);transform:translateY(40px);}
		.pdt_con .sec3 ul li img._f {top: 936px;left: 362px;width: 474px;-webkit-transform:translateY(40px);transform:translateY(40px);}
		.pdt_con .sec3 .video_section {position: relative;width: 1074px;height: 604px;margin: 0 auto;}
		.pdt_con .sec3 .video_section video {position: absolute;left:0;top:0;width:100%;height:100%;}
		.pdt_con .sec3 .video_section .play_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .video_section .pause_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:#000;filter:alpha(opacity:'0');opacity:0;}
		.pdt_con .sec3 .video_section .thumb {position: absolute;left:0;top:0;width:100%;height:100%;background:url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .video_section.play .play_btn {display:none;}
		.pdt_con .sec3 .video_section.play .pause_btn {display:block;}
		.pdt_con .sec3 .video_section.play .thumb {display:none;}
		.pdt_con .sec3 .video_section.pause .play_btn {display:block;}
		.pdt_con .sec3 .video_section.pause .pause_btn {display:none;}
		.pdt_con .sec3 .video_section.pause .thumb {display:none;}
		.pdt_con .sec3 .video_section.end .play_btn {display:none;}
		.pdt_con .sec3 .video_section.end .pause_btn {display:none;}
		.pdt_con .sec3 .video_section.end .thumb {display:block;}
		.pdt_con .sec4 {position:relative;width: 100%;height: 1522px;border-bottom: 1px solid #f2f4fa;background: #fff;-webkit-transition: .5s ease-in;transition: .5s ease-in}
		.pdt_con .sec4 .bg {display:block;position:absolute;right:0;bottom:0;width:100%;height:100%;background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_bg01_test.png) repeat;filter:alpha(opacity:'5');-webkit-transition: .5s ease-in;transition: .5s ease-in;-webkit-opacity:0.05;opacity:0.05;}
		.pdt_con .sec4 .bg2 {display:block;position:absolute;right:0;bottom:0;width:460px;height:796px;background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_bg02.png) no-repeat right bottom;-webkit-transition: .5s ease-in;transition: .5s ease-in}
		.pdt_con .sec4 .ctt {display:block;width: 100%;height: 100%;margin: 0 auto;background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_ctt.png) no-repeat center;z-index: 1;-webkit-transition: 0.8s ease-out;transition: 0.8s ease-out}

		.pdt_con .sec1 img.on {-webkit-opacity:1;opacity:1;}
		.pdt_con .sec1 img._a.on {-webkit-transform:translateY(0px);transform:translateY(0px);}
		.pdt_con .sec1 img._b.on {-webkit-transform:translateY(0px);transform:translateY(0px);}
		.pdt_con .sec1 img._c.on {-webkit-transform:translateY(0px);transform:translateY(0px);}
		.pdt_con .sec3 ul li img.on {-webkit-opacity:1;opacity:1;}
		.pdt_con .sec3 ul li img._a.on {-webkit-transform:translateX(0px);transform:translateX(0px);}
		.pdt_con .sec3 ul li img._b.on {-webkit-transform:translateX(0px);transform:translateX(0px);}
		.pdt_con .sec3 ul li img._c.on {-webkit-transform:translateX(0px);transform:translateX(0px);}
		.pdt_con .sec3 ul li img._d.on {-webkit-transform:translateX(0px);transform:translateX(0px);}
		.pdt_con .sec3 ul li img._e.on {-webkit-transform:translateY(0px);transform:translateY(0px);}
		.pdt_con .sec3 ul li img._f.on {-webkit-transform:translateY(0px);transform:translateY(0px);}
		.pdt_con .sec4.on {background: #879bd0;}
		.pdt_con .sec4.on .bg {background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_bg01_test_on.png) repeat;filter:alpha(opacity:'10');-webkit-opacity:0.1;opacity:0.1;}
		.pdt_con .sec4.on .bg2 {background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_bg02_on.png) no-repeat right bottom;}
		.pdt_con .sec4.on .ctt {background: url(/gigiiboc/portfolio/aestura_scroll_animation/images/pdt_sec04_ctt_on.png) no-repeat center;}
	</style>
	<div id="wrap">
		<div id="container">
			<div class="pdt_con">
				<div class="sec1">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg01.jpg" class="big _a viewAnim" anime-stlye="2" alt="">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg02.jpg" class="big _b viewAnim" anime-stlye="2" alt="">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg03.jpg" class="big _c viewAnim" anime-stlye="2" alt="">
				</div>		
				<div class="sec3">
					<ul>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt01.png" class="_a viewAnim" anime-stlye="2" alt="건강한 피부장벽 강화를 위한 고보습 크림, 손상된 피부 장벽기능 강화에 도움을 주며, 건조함과 그로인한 가려움을 케어해주는 보습크림 입니다.">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img01.gif" class="_b viewAnim" anime-stlye="2" alt="">
						</li>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt02.png" class="_c viewAnim" anime-stlye="2" alt="피부 지질과 유사한 구조의 더마온(DermaON®)소프트 캡슐 기술이 피부속으로 깊게 흡수를 도와줍니다.">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img02.png" class="_d viewAnim" anime-stlye="2" alt="">
						</li>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt03.png" class="_e viewAnim" anime-stlye="2" alt="손상된 피부 장벽 기능을 강화시켜주는 밤 타입의 집중보습제">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img03.png" class="_f viewAnim" anime-stlye="2" alt="">
						</li>
					</ul>
				</div>
				<div class="sec4 viewAnim" anime-stlye="2">
					<span class="ctt"></span>
					<span class="bg"></span>
					<span class="bg2"></span>
				</div>
				<div style="height:1000px;"></div>
			</div>
		</div>
	</div>
	<script>
		$(window).scroll(function(){
			viewAnim('.viewAnim')
		})
		$(window).load(function(){
			viewAnim('.viewAnim')
		})
	</script>
	<script type="text/javascript">
		// 상세 스크롤 효과
		function viewAnim (target){
			$(target).each(function(){
				var targetTop = $(this).offset().top;

				if ($(this).attr('anime-stlye') == 1){
					if ($(window).scrollTop() >= targetTop - ($(window).height()*0.9)){ // 화면에 나타날때 노출, 유지
						$(this).addClass('on')
					} else {
						$(this).removeClass('on')						
					}
				} else if ($(this).attr('anime-stlye') == 2){
					if ($(window).scrollTop() >= targetTop - ($(window).height()*0.9) && $(window).scrollTop() < targetTop + ($(this).height()*0.8)){ // 화면에 나타날때 노출되며, 화면에서 가려질때 비노출됨.
						$(this).addClass('on')
					} else {
						$(this).removeClass('on')
					}
				}
			})
		}
	</script>
</body>
</html>