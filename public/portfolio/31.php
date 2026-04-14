<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/note_js_plugin/slick/slick.css">
	<script src="/gigiiboc/portfolio/note_js_plugin/slick/slick.min.js"></script>
	<script src="/gigiiboc/portfolio/note_js_plugin/inview/jquery.inview.js"></script>
</head>
<body>
	<style>
		@charset "utf-8";
		button {display:inline-block; background:none; border:none;}
		button:hover {color:#222;}

		html, body {width:100%;}
		#wrap {width:100%; min-width:1280px; margin:0 auto;}
		header {position:relative; height:68px; border-bottom:1px solid #e7e3e0; background:#fff;}
		header h1 {position:absolute; left:49px; top:21px;}
		header .util {position:absolute; right:51px; top:27px;}
		header .gnb {padding-top:24px; text-align:center;}
		header .gnb li {display:inline-block; margin:0 22px;}


		/* ========== [제품 상세] ========== */

		/* 페이드 배너 */
		.pdtView {height:100%;position: relative;}
		.pdtView .pdt_visual {overflow:hidden;position:relative;height:93vh;min-height:768px;
			 -webkit-box-sizing:border-box;
			 -moz-box-sizing:border-box;
			 -o-box-sizing:border-box;
			 -ms-box-sizing:border-box;
			 box-sizing:border-box;
		}
		.pdtView .pdt_visual .topVisual {position:relative;width:100%;height:100%; /*background:url('/front/ko/images/shop/bg_product.jpg') no-repeat center center / auto 100%;*/ background:#f4f4f4; }
		.pdtView .pdt_visual .visualImg {position:relative;width:100%;height:100%;}
		.pdtView .pdt_visual .visualImg .slick-list {height:100%;}
		.pdtView .pdt_visual .visualImg .slick-track {height:100%;}
		.pdtView .pdt_visual .visualImg .item {width:100%;height:100%;background-repeat:no-repeat;background-size:cover;background-position:center;outline:none}
		.pdtView .pdt_visual .visualImg .item img {width:100%;}
		.pdtView .pdt_visual .visualThumb {position:absolute;left: 100px;top:0;height:100%;z-index:800;}
		.pdtView .pdt_visual .visualThumb:before {content:'';display:inline-block;vertical-align: middle;height:100%;}
		.pdtView .pdt_visual .visualThumb ul {display:inline-block;vertical-align: middle;position: absolute;top: 17%;left: 0;}
		.pdtView .pdt_visual .visualThumb li {margin-top:10px;}
		.pdtView .pdt_visual .visualThumb li:first-child {margin-top:0;}
		.pdtView .pdt_visual .visualThumb button {overflow:hidden;display:block;position:relative;width: 55px;height: 55px;background:#fff;outline:none}
		.pdtView .pdt_visual .visualThumb button:after {content:'';display:block;position:absolute;left:0;top:0;width:100%;height:100%;z-index:2;
			 -webkit-box-sizing:border-box;
			 -moz-box-sizing:border-box;
			 -o-box-sizing:border-box;
			 -ms-box-sizing:border-box;
			 box-sizing:border-box;
		}
		.pdtView .pdt_visual .visualThumb button.on:after {border:1px solid #666;}
		.pdtView .pdt_visual .visualThumb img {position:absolute;left:50%;top:50%;width:auto;height:100%;
			 -webkit-transform:translate(-50%, -50%);
			 -moz-transform:translate(-50%, -50%);
			 -o-transform:translate(-50%, -50%);
			 -ms-transform:translate(-50%, -50%);
			 transform:translate(-50%, -50%);
		}
		.pdtView .pdt_visual .pdt_avg {position:relative;width:100%;height:80px;padding:30px 0;padding-left:40px;line-height:20px;
			 -webkit-box-sizing:border-box;
			 -moz-box-sizing:border-box;
			 -o-box-sizing:border-box;
			 -ms-box-sizing:border-box;
			 box-sizing:border-box;
		}
		.pdtView .pdt_visual .pdt_avg .totalCount {display:inline-block;margin-right:8px;vertical-align:middle;font-size:12px;color:#222;text-decoration:underline;}
		.pdtView .pdt_visual .pdt_avg .other {display:inline-block;font-size:13px;vertical-align:middle;}
		.pdtView .pdt_visual .pdt_avg .other em {color:#222222;}

		.pdtView .pdt_order {position: absolute;top: 15%;right: 100px;width: 330px;padding: 120px 20px 30px;line-height: 1.1;background: #fff;}
		.pdtView .pdt_order .pdt_ttl01 {padding: 0 30px 15px;font-size: 42px;color: #111;}
		.pdtView .pdt_order .pdt_ttl02 {padding: 0 30px 25px;}
		.pdtView .pdt_order .pdt_tag {padding: 0 30px 40px;}
		.pdtView .pdt_order .pdt_tag span {display: inline-block;padding: 5px;margin:0 2px;border: 1px solid #666;font-size: 14px;color: #222;border-radius: 3px;}
		.pdtView .pdt_order .pdt_p {padding: 0 30px 15px;font-size: 15px;line-height: 25px;color: #666;}
		.pdtView .pdt_order .pdt_ml {padding: 0 30px 70px;font-size: 15px;color: #666;}
		.pdtView .pdt_order .pdt_btn a {display: block;width: 100%;text-align: center;font-size: 18px;line-height: 50px;color: #fff;background: #000;}
		.pdtView .pdt_order .pdt_share {position:absolute;right: 20px;top: 30px;z-index: 1;}
		.pdtView .pdt_order .pdt_share a {display:inline-block;width:22px;height:18px;margin:0 5px;vertical-align:middle;background:url('./images/aestura/shsShare.png') no-repeat;}
		.pdtView .pdt_order .pdt_share a.fb {background-position:7px 0;}
		.pdtView .pdt_order .pdt_share a.kt {background-position:-28px 0;}
		.pdtView .pdt_order .pdt_share a.url {background-position:-70px 0;}
		.pdtView .pdt_order .pdt_share .blind {overflow: hidden;visibility: hidden;position: absolute;width: 0;height: 0;font-size: 0;line-height: 0;}

		/* 상세 영역 */
		.pdt_con .big {display: block;margin: 0 auto;}
		.pdt_con .sec1 {position: relative;height: 1664px;}
		.pdt_con .sec1 img {display: block;position: absolute;max-width: 100%;
			-webkit-opacity:0;opacity:0;
			-webkit-transition: .5s ease-out;transition: .5s ease-out
		}
		.pdt_con .sec1 img._a {top: 165px;left: 50%;width: 562px;margin-left:-281px;
			-webkit-transform:translateY(40px);transform:translateY(40px);
		}
		.pdt_con .sec1 img._b {top: 500px;left: 50%;width: 1200px;margin-left:-600px;
			-webkit-transform:translateY(40px);transform:translateY(40px);
		}
		.pdt_con .sec1 img._c {top: 1157px;left: 50%;width: 1200px;margin-left:-600px;
			-webkit-transform:translateY(40px);transform:translateY(40px);
		}
		.pdt_con .sec2 {overflow: hidden;background: url(/gigiiboc/portfolio/images/aestura/pdt_sec02_bg.png) no-repeat fixed center center;}
		.pdt_con .sec2 p {min-width: 1200px;height: 540px;text-align: center;font-size: 28px;line-height: 540px;color: #fff;background: url(/gigiiboc/portfolio/images/aestura/pdt_sec02_bg.png) no-repeat fixed center center;background-size: cover;}
		.pdt_con .sec3 {position:relative;overflow: hidden;max-width: 1200px;margin: 0 auto;}
		.pdt_con .sec3 ul {position: relative;height: 1640px;}
		.pdt_con .sec3 ul li img {display: block;position: absolute;max-width: 100%;
			-webkit-opacity:0;opacity:0;
			-webkit-transition: .5s ease-out;transition: .5s ease-out
		}
		.pdt_con .sec3 ul li img._a {top: 148px;left: 77px;width: 391px;
			-webkit-transform:translateX(-20px);transform:translateX(-20px);
		}
		.pdt_con .sec3 ul li img._b {top: 348px;left: 0;width: 723px;
			-webkit-transform:translateX(-20px);transform:translateX(-20px);
		}
		.pdt_con .sec3 ul li img._c {top: 716px;left: 855px;width: 214px;
			-webkit-transform:translateX(20px);transform:translateX(20px);
		}
		.pdt_con .sec3 ul li img._d {top: 460px;left: 855px;width: 306px;
			-webkit-transform:translateX(20px);transform:translateX(20px);
		}
		.pdt_con .sec3 ul li img._e {top: 1111px;left: 786px;width: 246px;z-index: 1;
			-webkit-transform:translateY(40px);transform:translateY(40px);
		}
		.pdt_con .sec3 ul li img._f {top: 936px;left: 362px;width: 474px;
			-webkit-transform:translateY(40px);transform:translateY(40px);
		}
		.pdt_con .sec3 .video_section {position: relative;width: 1074px;height: 604px;margin: 0 auto;}
		.pdt_con .sec3 .video_section video {position: absolute;left:0;top:0;width:100%;height:100%;}
		.pdt_con .sec3 .video_section .play_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:url(/gigiiboc/portfolio/images/aestura/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .video_section .pause_btn {display:none;position: absolute;left:0;top:0;width:100%;height:100%;background:#000;filter:alpha(opacity:'0');opacity:0;}
		.pdt_con .sec3 .video_section .thumb {position: absolute;left:0;top:0;width:100%;height:100%;background:url(/gigiiboc/portfolio/images/aestura/pdt_sec03_video.jpg) no-repeat center;}
		.pdt_con .sec3 .video_section.play .play_btn {display:none;}
		.pdt_con .sec3 .video_section.play .pause_btn {display:block;}
		.pdt_con .sec3 .video_section.play .thumb {display:none;}
		.pdt_con .sec3 .video_section.pause .play_btn {display:block;}
		.pdt_con .sec3 .video_section.pause .pause_btn {display:none;}
		.pdt_con .sec3 .video_section.pause .thumb {display:none;}
		.pdt_con .sec3 .video_section.end .play_btn {display:none;}
		.pdt_con .sec3 .video_section.end .pause_btn {display:none;}
		.pdt_con .sec3 .video_section.end .thumb {display:block;}


		.pdt_con .sec4 {position:relative;width: 100%;height: 1522px;border-bottom: 1px solid #f2f4fa;background: #fff;
			-webkit-transition: .5s ease-in;transition: .5s ease-in
		}
		.pdt_con .sec4 .bg {display:block;position:absolute;right:0;bottom:0;width:100%;height:100%;background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_bg01_test.png) repeat;filter:alpha(opacity:'5');
			-webkit-transition: .5s ease-in;transition: .5s ease-in;
			-webkit-opacity:0.05;opacity:0.05;
		}
		.pdt_con .sec4 .bg2 {display:block;position:absolute;right:0;bottom:0;width:460px;height:796px;background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_bg02.png) no-repeat right bottom;
			-webkit-transition: .5s ease-in;transition: .5s ease-in
		}
		.pdt_con .sec4 .ctt {display:block;width: 100%;height: 100%;margin: 0 auto;background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_ctt.png) no-repeat center;z-index: 1;
			-webkit-transition: 0.8s ease-out;transition: 0.8s ease-out
		}


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
		.pdt_con .sec4.on .bg {background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_bg01_test_on.png) repeat;filter:alpha(opacity:'10');
			-webkit-opacity:0.1;opacity:0.1;
		}
		.pdt_con .sec4.on .bg2 {background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_bg02_on.png) no-repeat right bottom;}
		.pdt_con .sec4.on .ctt {background: url(/gigiiboc/portfolio/images/aestura/pdt_sec04_ctt_on.png) no-repeat center;}
	</style>
	<div id="wrap">
		<header>
			<h1><a href="#"><img src="/gigiiboc/portfolio/resource/images/aestura/logo.png" alt="AESTURA"></a></h1>
			<ul class="gnb">
				<li><a href="#"><img src="/gigiiboc/portfolio/resource/images/aestura/gnb1.png" alt="PRODUCT"></a></li>
				<li><a href="#"><img src="/gigiiboc/portfolio/resource/images/aestura/gnb2.png" alt="BRAND"></a></li>
				<li><a href="#"><img src="/gigiiboc/portfolio/resource/images/aestura/gnb3.png" alt="A-JOURNAL"></a></li>
				<li><a href="#"><img src="/gigiiboc/portfolio/resource/images/aestura/gnb4.png" alt="EVENT&NEWS"></a></li>
			</ul>
			<span class="util"><img src="/gigiiboc/portfolio/resource/images/aestura/util.jpg" alt=""></span>
		</header>
		<div id="container">
			<div class="pdtView">
				<div class="pdt_visual">
					<div class="topVisual">
						<div class="visualImg">
							<div class="item" style="background-image: url(/gigiiboc/portfolio/images/aestura/img_main1.jpg)"></div>
							<div class="item" style="background-image: url(/gigiiboc/portfolio/images/aestura/img_main2.jpg)"></div>
							<div class="item" style="background-image: url(/gigiiboc/portfolio/images/aestura/img_main3.jpg)"></div>
						</div>
						<div class="visualThumb">
							<ul>
								<li><button class="on" data-index="1"><img src="/gigiiboc/portfolio/resource/images/aestura/img_Thumb1.png" alt=""></button></li>
								<li><button data-index="2"><img src="/gigiiboc/portfolio/resource/images/aestura/img_Thumb2.png" alt=""></button></li>
								<li><button data-index="3"><img src="/gigiiboc/portfolio/resource/images/aestura/img_Thumb3.png" alt=""></button></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="pdt_order">
					<div class="pdt_ttl01">아토베리어<br> 인텐시브 크림</div>
					<div class="pdt_ttl02"><img src="/gigiiboc/portfolio/resource/images/aestura/pdt_order_ttl02.png" alt="ATOBARRIER INTENSIVE CREAM"></div>
					<div class="pdt_tag"><span>극건성</span><span>민감성</span><span>낯/밤</span></div>
					<p class="pdt_p">손상된 피부 장벽 기능을 강화시켜주는 <br>밤 타입의 집중보습제</p>
					<div class="pdt_ml">100ml</div>
					<div class="pdt_btn"><a href="#none">구매하러 가기</a></div>
					<div class="pdt_share">
						<a href="#none" id="share_fb" class="fb"><span class="blind">페이스북 공유하기</span></a>
						<a href="#none" id="share_kt" class="kt"><span class="blind">카카오톡 공유하기</span></a>
						<a href="#none" id="share_url" class="url"><span class="blind">URL 복사하기</span></a>
					</div>
				</div>
			</div>
			<div class="pdt_con">
				<div class="sec1">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg01.jpg" class="big _a viewAnim" data-time="1" alt="">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg02.jpg" class="big _b viewAnim" data-time="1" alt="">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec01_bg03.jpg" class="big _c viewAnim" data-time="1" alt="">
				</div>
				<div class="sec2">
					<p>“손상된 피부 장벽 기능을 강화시켜주는 밤 타입의 집중보습제”</p>
				</div>			
				<div class="sec3">
					<ul>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt01.png" class="_a viewAnim" data-time="1" alt="건강한 피부장벽 강화를 위한 고보습 크림, 손상된 피부 장벽기능 강화에 도움을 주며, 건조함과 그로인한 가려움을 케어해주는 보습크림 입니다.">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img01.gif" class="_b viewAnim" data-time="1" alt="">
						</li>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt02.png" class="_c viewAnim" data-time="1" alt="피부 지질과 유사한 구조의 더마온(DermaON®)소프트 캡슐 기술이 피부속으로 깊게 흡수를 도와줍니다.">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img02.png" class="_d viewAnim" data-time="1" alt="">
						</li>
						<li>
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_txt03.png" class="_e viewAnim" data-time="1" alt="손상된 피부 장벽 기능을 강화시켜주는 밤 타입의 집중보습제">
							<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_img03.png" class="_f viewAnim" data-time="1" alt="">
						</li>
					</ul>
					<div class="video_section">
						<video id="player"><source src="/gigiiboc/portfolio/resource/video/Aestura_1080p.mp4" type="video/mp4"></video>
						<a href="#none" class="play_btn" onclick="videoPlay()"></a>
						<a href="#none" class="pause_btn" onclick="videoPause()"></a>
						<a href="#none" class="thumb" onclick="videoPlay()"></a>
					</div>
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec03_bg.jpg" class="big" alt="">
				</div>
				<div class="sec4 viewAnim" data-time="2">
					<span class="ctt"></span>
					<span class="bg"></span>
					<span class="bg2"></span>
				</div>
				<div class="sec5">
					<img src="/gigiiboc/portfolio/resource/images/aestura/pdt_sec05_bg.png" class="big" alt="">				
				</div>
			</div>
		</div>
	</div>
	<script>
		$(window).scroll(function(){
			viewAnim('.viewAnim')
		})
	</script>
	<script type="text/javascript">
		function visualNav(idx){
			$('.visualThumb button').removeClass('on');
			$('.visualThumb li').eq(idx).find('button').addClass('on');
			$('.visualImg').slick('slickGoTo', idx);
		}	

		$('.visualImg').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			autoplay: true
		});

		$('.visualImg').on('afterChange', function(event, slick, currentSlide){
			visualNav(currentSlide);
		});

		$('.visualThumb button').on('click', function(){
			var idx = $(this).parent().index();
			visualNav(idx);
		});

		$('.visualThumb button').click(function(){
			var idx = $(this).attr('data-index');
			$('.visualImg .item').removeClass('on');
			$('.visualThumb button').removeClass('on');
			$(this).addClass('on');
			$('.visualImg .item').eq(idx).addClass('on');
		});

		// 상세 스크롤 효과
		function viewAnim (target){
			$(target).each(function(){
				var targetTop = $(this).offset().top;

				if ($(this).attr('data-time') == 1){
					if ($(window).scrollTop() >= targetTop - ($(window).height()*0.7)){
						$(this).addClass('on')
					}
				} else if ($(this).attr('data-time') == 2){
					if ($(window).scrollTop() >= targetTop - ($(window).height()*0.4) && $(window).scrollTop() < targetTop + ($(window).height()*0.8)){
						$(this).addClass('on')
					} else {
						$(this).removeClass('on')
					}
				}
			})
		}

		/* 상세 영상 재생 */
		var playerBox = $('.video_section')
		var player = document.getElementById('player');

		$(function(){
			playerBox.on('inview', function(event, isInView) {
				if (isInView) {
					player.play()
					playerBox.addClass('inview');
					playerBox.addClass('play');
					playerBox.removeClass('pause');
					playerBox.removeClass('end');
				} else {
					player.pause()
					playerBox.removeClass('inview');
					playerBox.removeClass('play');
					playerBox.addClass('pause');
					playerBox.removeClass('end');
				}
			});
			$('#player').on('pause', function() {
				if (player.currentTime >= player.duration){
					playerBox.removeClass('play');
					playerBox.removeClass('pause');
					playerBox.addClass('end');
				} else {
					playerBox.removeClass('play');
					playerBox.addClass('pause');
					playerBox.removeClass('end');	
				}
			});
		});
		function videoPlay (){
			player.play()
			playerBox.addClass('play');
			playerBox.removeClass('pause');
			playerBox.removeClass('end');
		}
		function videoPause (){
			player.pause()
			playerBox.removeClass('play');
			playerBox.addClass('pause');
			playerBox.removeClass('end');
		}	
	</script>
</body>
</html>