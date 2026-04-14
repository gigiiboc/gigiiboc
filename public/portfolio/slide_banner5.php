<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="https://www.banila.com/static/front/resources/mobile/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="https://www.banila.com/static/front/resources/mobile/css/common.css">
	<link rel="stylesheet" type="text/css" href="https://www.banila.com/static/front/resources/mobile/css/contents.css">
	<link rel="stylesheet" type="text/css" href="https://www.banila.com/static/front/resources/mobile/css/main.css">
	<style>
		/* .banilaTV */
		.banilaTV{position: fixed;top: 0;left: 0;width: 100%;height: 100%;line-height: 0;font-size: 0;}
		.blTvWrap{}
		.blTvWrap .blTvArea{position: relative;margin: 0 auto;}
		.blTvArea .blTvBox{position: relative;overflow: hidden;height: 87vh;}
		.blTvArea .blTvBox .tvVideoBox{position: absolute;top: 50%;left: 50%;height: 100%;width: 100%;transform: translate(-50%, -50%);}
		.blTvArea .blTvBox .tvVideoBox .tvVideo{display: block;margin: 0 auto;height: 100%;width: 100%;-o-object-fit: cover;object-fit: cover;}
		.blTvArea .blTvBox .tvVideoBox .tvThumb{position: absolute;top: 0;left: 0;background-repeat: no-repeat;background-position: center;background-size: cover;width: 100%;height: 100%;}
		.blTvArea .blTvBox .tvVideoBox.pause .tvVideo .tvVideoThumb{display:block;}
		.blTvArea .blTvBox .tvVideoBox .tvVisual{background-repeat: no-repeat;background-position: center;background-size: cover;width: 100%;height: 100%;}
		.blTvArea .blTvBox .tvCntBox{opacity:0;transition: 1.5s;}
		.blTvArea .blTvBox .tvCntBox .tvTtlCnt{position: absolute;bottom: 21px;left: 15px;}
		.blTvArea .blTvBox .tvCntBox .tvTtlCnt .tvbrandTtl{}
		.blTvArea .blTvBox .tvCntBox .tvTtlCnt .tvbrandTtl span{font-size: 11px;line-height: 24px;color: #fff;margin-left: 6px;}
		.blTvArea .blTvBox .tvCntBox .tvTtlCnt .tvbrandTtl img{width: 24px;overflow: hidden;border-radius: 50%;}
		.blTvArea .blTvBox .tvCntBox .tvTtlCnt .tvCntTtl{font-size: 19px;color: #fff;font-weight: bold;line-height: 28px;margin-top: 10px;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt{}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvBackBtn{position: absolute;top: 15px;left: 18px;width: 22px;height: 20px;background: url(./images/tvBackBtn.png) no-repeat center top / 100% auto;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvMuteBtn{position: absolute;top: 15px;right: 59px;width: 26px;height: 18px;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvMuteBtn .tvMuteOn{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background: url(./images/tvMuteBtn_on.png) no-repeat center top / 100% auto;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvMuteBtn .tvMuteOff{display:block;position:absolute;top:0;left:0;width:100%;height:100%;background: url(./images/tvMuteBtn.png) no-repeat center top / 100% auto;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvMuteBtn.soundOn .tvMuteOn{display:block;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvMuteBtn.soundOn .tvMuteOff{display:none;}
		.blTvArea .blTvBox .tvCntBox .tvMenuCnt .tvShareBtn{position: absolute;top: 15px;right: 20px;width: 20px;height: 20px;background: url(./images/tvShareBtn.png) no-repeat center top / 100% auto;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt{position: absolute;bottom: 21px;right: 12px;text-align: center;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount{position: absolute;top: -57px;left: 0;width: 100%;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime{position: absolute;bottom: 100%;left: 50%;width: 100%;transform: translateX(-50%);}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart01{opacity:0;position: absolute;left: 50%;bottom: 0;width: 32px;height: 24px;margin-left: -16px;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart01:before{position: absolute;content: "";left: 0;top: 0;width: 16px;height: 24px;margin-left: 16px;border-radius: 16px 16px 0 0;transform-origin: 0 100%;transform: rotate(-45deg);background: #ff65af;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart01:after{position: absolute;content: "";left: 16px;top: 0;width: 16px;height: 24px;margin-left: -16px;border-radius: 16px 16px 0 0;transform-origin: 100% 100%;transform: rotate(45deg);background: #ff65af;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart02{opacity:0;position: absolute;left: 50%;bottom: 0;width: 20px;height: 16px;margin-left: -10px;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart02:before{position: absolute;content: "";left: 0;top: 0;width: 10px;height: 16px;margin-left: 10px;border-radius: 10px 10px 0 0;transform-origin: 0 100%;transform: rotate(-45deg);background: #a962ff;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart .heart02:after{position: absolute;content: "";left: 10px;top: 0;width: 10px;height: 16px;margin-left: -10px;border-radius: 10px 10px 0 0;transform-origin: 100% 100%;transform: rotate(45deg);background: #a962ff;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style1 .heart01{animation: flying1 1.5s linear 0s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style1 .heart02{animation: flying2 1.5s linear 0.3s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style2 .heart01{animation: flying3 1.5s linear 0s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style2 .heart02{animation: flying4 1.5s linear 0.3s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style3 .heart01{animation: flying2 1.5s linear 0s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style3 .heart02{animation: flying3 1.5s linear 0.3s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style4 .heart01{animation: flying1 1.5s linear 0s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeAnime .heart.style4 .heart02{animation: flying4 1.5s linear 0.3s forwards;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeBtn{position: relative;display: inline-block;width: 20px;height: 20px;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .likeBtn a{display: block;position:absolute;top:50%;left:50%;width: 100%;height: 100%;background: url(./images/likeCount.png) no-repeat center top / 100% auto;transform: translate(-50%, -50%);}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .likeCount .clickCount{display: block;font-size: 11px;line-height: 15px;margin-top: 3px;font-weight: bold;color: #fff;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt{}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul{}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li{position: relative;margin-bottom: -10px;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li:last-child{margin-bottom: 0;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li a{display: block;overflow: hidden;width: 41px;border: 2px solid #fff;border-radius: 50%;background: #f3f3f3;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li img{}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li.evtType{overflow: visible;position: relative;width: 48px;height: 48px;background: #fff;border-radius: 50%;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li.evtType a{overflow: visible;width: auto;border: 0;border-radius: 0;background: #fff;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .tvPrdCnt ul li.evtType img{position: absolute;top: 50%;left: 50%;width: 55px;height: 55px;transform: translate(-50%, -50%);max-width: none;border: none;border-radius: 0;}
		.blTvArea .blTvBox .tvCntBox .tvObjCnt .moreBtn{position: relative;display: inline-block;width: 33px;line-height: 33px;margin-bottom: -10px;z-index: 10;font-size: 12px;font-weight: bold;color: #222;border-radius: 50%;background: #fff;}
		.blTvArea .blTvBox .tvDimBox{display:none;position: absolute;top: 0;left: 0;width: 100%;height:100%;background: rgba(0,0,0,0.3);}
		.blTvArea .blTvBox.on .tvCntBox{opacity:1;}

		@keyframes flying1 {
		  0% {
			transform: translate(0, 0) scale(1);
			opacity: 1;
		  }
		  100% {
			transform: translate(45px, -200px) scale(1.5);
			opacity: 0;
		  }
		}
		@keyframes flying2 {
		  0% {
			transform: translate(0, 0) scale(1);
			opacity: 1;
		  }
		  100% {
			transform: translate(15px, -200px) scale(1.5);
			opacity: 0;
		  }
		}
		@keyframes flying3 {
		  0% {
			transform: translate(0, 0) scale(1);
			opacity: 1;
		  }
		  100% {
			transform: translate(-15px, -200px) scale(1.5);
			opacity: 0;
		  }
		}
		@keyframes flying4 {
		  0% {
			transform: translate(0, 0) scale(1);
			opacity: 1;
		  }
		  100% {
			transform: translate(-45px, -200px) scale(1.5);
			opacity: 0;
		  }
		}

		/* 바닐라TV 상품리스트 팝업 */
		#banilaTVprdPopup{padding:0;}
		#banilaTVprdPopup:after{vertical-align:bottom;}
		#banilaTVprdPopup .lyPop{padding: 36px 11px 30px 21px;margin:0;vertical-align:bottom;border-radius:15px 15px 0 0;
			-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;transition:all 0.5s ease;
			-webkit-transform:translateY(100%);-ms-transform:translateY(100%);transform:translateY(100%);}
		#banilaTVprdPopup.open .lyPop{-webkit-transform:translateY(0%);-ms-transform:translateY(0%);transform:translateY(0%);}
		#banilaTVprdPopup .lyBody{padding:0;}
		#banilaTVprdPopup .pdt{max-height: 380px;padding-right:11px;overflow-y: auto;}
		#banilaTVprdPopup .pdt li{overflow:hidden;position:relative;margin-top:12px;}
		#banilaTVprdPopup .pdt li:first-child{margin-top:0;}
		#banilaTVprdPopup .pdtImg{float:left;width:60px;background:#f3f3f3;}
		#banilaTVprdPopup .pdtTxt{margin:6px 0 0 72px;}
		#banilaTVprdPopup .pdtBrand{font-size:11px;line-height:1;color:#888;}
		#banilaTVprdPopup .pdtName{margin-top:6px;font-size:12px;line-height:1;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
		#banilaTVprdPopup .pdtPrice{margin-top:7px;font-size:12px;font-weight:600;line-height:12px;}
		#banilaTVprdPopup .pdtPrice em{vertical-align:top;font-size:11px;}
		#banilaTVprdPopup .pdtPrice .sale{display:inline-block;margin-right:4px;vertical-align:top;color:#ff5b5d;}
		#banilaTVprdPopup .pdtPrice .cost{position:relative;display:inline-block;margin-left:4px;vertical-align:top;font-size:11px;font-weight:400;color:#888;}
		#banilaTVprdPopup .pdtPrice .cost:after{content:'';position:absolute;left:0;top:50%;width:100%;height:1px;background:#888;}
		#banilaTVprdPopup .pdtPrice .soldOut{vertical-align:top;font-size:11px;font-weight:400;color:#f95b5d;}
		#banilaTVprdPopup .btn_like{position:absolute;right:25px;bottom:0;}
		#banilaTVprdPopup .btn_cart{position:absolute;right:0;bottom:0;}
		#banilaTVprdPopup .tvPopClose{position:absolute;top:15px;right:15px;width:15px;height:15px;background:url('/static/front/resources/mobile/images/shopping/icon_close.png') no-repeat center / 15px auto;}

		#banilaTVSharePopup{}
		#banilaTVSharePopup ul{text-align: center;font-size: 0;line-height: 0;}
		#banilaTVSharePopup ul li{width: 52px;display: inline-block;vertical-align: top;margin: 0 18px 25px;}
		#banilaTVSharePopup ul li a{display: block;}
		#banilaTVSharePopup ul li a img{display: block;width: 100%;}
	</style>
</head>
<body style="overscroll-behavior-y,contain;">
<div id="wrap" class="h_main">
	<!-- container -->
	<div class="banilaTV">
		<div class="blTvWrap">
			<div class="blTvArea">
				<div class="blTvBox"></div>
				<div class="blTvBox"></div>
				<div class="blTvBox"></div>
				<div class="blTvBox"></div>
				<div class="blTvBox"></div>
			</div>
		</div>
	</div>
	<!-- container -->
	<!-- javascript -->
	<script src="/gigiiboc/portfolio/banilaTV/jquery-3.3.1.min.js"></script>
	<script src="/gigiiboc/portfolio/banilaTV/jquery-ui.min.js"></script>
	<script>
		"use strict";
		var tvCntHeight = document.body.clientHeight*0.87,
			ts;

		function banila_tv_start(){
			$('.blTvArea').find('.blTvBox').css('height', tvCntHeight + 'px');
			$('.blTvArea .blTvBox:first-child').addClass('on');
		}
		function nextVideo(){
			$('.blTvArea .blTvBox').removeClass('on');
			$('.blTvArea .blTvBox').eq(1).addClass('on');

			$('.blTvArea').stop().animate({'top' : -tvCntHeight+'px'},300, function(){
				$('.blTvArea').css('top', '0px');
				$('.blTvArea .blTvBox:first-child').appendTo('.blTvArea')
			});
		}
		function prevVideo(){
			$('.blTvArea .blTvBox:last-child').prependTo('.blTvArea');
			$('.blTvArea').css('top', -tvCntHeight+'px').stop().animate({'top' : 0},300);

			$('.blTvArea .blTvBox').removeClass('on');
			$('.blTvArea .blTvBox:first-child').addClass('on');
		}

		/* 터치 */
		$(document).on('touchstart','.blTvArea', function (e){
			ts = e.originalEvent.touches[0].clientY;
		});
		$(document).on('touchend','.blTvArea', function (e){
			var te = e.originalEvent.changedTouches[0].clientY;
			if(ts > te+5){
				nextVideo()
			} else if (ts < te-5){
				prevVideo()
			}
			if ($('.blTvArea .blTvBox.on .tvVideo').length > 0){
				tvVideoAllStop()
				tvVideoPlay($('.blTvArea .blTvBox.on .tvVideo'))
			}
		});
		$(window).resize(function(){
			tvCntHeight = document.body.clientHeight*0.87
			$('.blTvArea .blTvBox').height(tvCntHeight)
			$('.blTvArea').css('top', '0px');
		})

		banila_tv_start()
	</script>
	<!-- //javascript -->
</div>
</body>
</html>