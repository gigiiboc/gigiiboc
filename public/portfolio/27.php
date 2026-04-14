<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="http://m.etudehouse.com/kr/ko/web_resource/mobile/css/swiper.min.css">
	<script type="text/javascript" src="http://m.etudehouse.com/kr/ko/web_resource/mobile/js/swiper.jquery.min.js"></script>
	<script type="text/javascript" src="http://m.etudehouse.com/kr/ko/web_resource/mobile/js/swipe.min.js"></script>
	<style>	
		/* gnb */
		#chEtude_gnb {position: relative;}
		#chEtude_gnb .chEtude_gnbList {position: relative; overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%; margin-right: 29px; background: url(/kr/ko/web_resource/mobile/images/common/dot_1X1_gray.gif) repeat-x 0 bottom;}
		#chEtude_gnb .chEtude_gnbList::-webkit-scrollbar {height: 0;}
		#chEtude_gnb .chEtude_gnbList ul {width: 100%; height: 40px; padding: 0 0 0 10px; white-space: nowrap;}
		#chEtude_gnb .chEtude_gnbList ul:after {content: ''; display: block; clear: both;}
		#chEtude_gnb .chEtude_gnbList li {position: relative; float: left;}
		#chEtude_gnb .chEtude_gnbList li a {height: 40px; line-height: 40px; padding: 0 6px; font-size: 14px; font-weight: 500; color: #777;}
		#chEtude_gnb .chEtude_gnbList li .line {position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #f54a7e; -webkit-transition-duration: 0.35s; transition-duration: 0.35s;}
		#chEtude_gnb .chEtude_gnbList li.active a {color: #f54a7e;}
		#chEtude_gnb .chEtude_gnbList li.active .line {left: 0;width: 100%;}
		#chEtude_gnb .chEtude_btn_allMenu {position: absolute; right:0; top: 0px; width: 29px; height: 40px; background: #fff; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc; z-index: 15; transition: -webkit-transform 0.4s ease, transform 0.4s ease; -webkit-transform: rotateX(0deg); transform: rotateX(0deg);}
		#chEtude_gnb .chEtude_btn_allMenu img {position: absolute; left: 9px; top: 15px; width:12px; transition: -webkit-transform 0.4s ease, transform 0.4s ease; -webkit-transform: rotateX(0deg); transform: rotateX(0deg);}
		#chEtude_gnb.menuOpen .chEtude_btn_allMenu img { -webkit-transform: rotateX(180deg); transform: rotateX(180deg);} 
		#chEtude_gnb.menuOpen .chEtude_gnbList {width: auto; margin-right: 0;-webkit-transition:all 0.1s ease; transition:all 0.1s ease;}
		#chEtude_gnb.menuOpen .chEtude_gnbList ul {overflow: hidden; width: auto; height: auto; padding: 10px 30px 10px 10px; white-space: normal; background: none; border-top: 0;}
		#chEtude_gnb.menuOpen .chEtude_gnbList li {display: inline-block; float:none;}
		#chEtude_gnb.menuOpen .chEtude_gnbList li a {height: 30px; line-height: 30px; -webkit-transition:all 0.2s ease; transition:all 0.2s ease;}
		#chEtude_gnb.menuOpen .line {display: none;}
		#chEtude_gnb.menuOpen .chEtude_btn_allMenu {background-position: 0 bottom;}

		#chEtude_ctt .chEtude_mainSectionWrap {overflow: hidden; position: relative;}
		#chEtude_ctt .chEtude_mainSectionWrap .chEtude_mainContent {overflow: hidden; position: relative;}
		#chEtude_ctt .chEtude_mainSectionWrap .chEtude_mainContent .chEtude_mainSection {overflow: hidden; position: relative; float:left; width:100%;}

		/* gnb */
		#chEtude_gnb2 {position: relative;}
		#chEtude_gnb2 .chEtude_gnbList2 {position: relative; overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%; margin-right: 29px; background: url(/kr/ko/web_resource/mobile/images/common/dot_1X1_gray.gif) repeat-x 0 bottom;}
		#chEtude_gnb2 .chEtude_gnbList2::-webkit-scrollbar {height: 0;}
		#chEtude_gnb2 .chEtude_gnbList2 ul {width: 100%; height: 40px; padding: 0 0 0 10px; white-space: nowrap;}
		#chEtude_gnb2 .chEtude_gnbList2 ul:after {content: ''; display: block; clear: both;}
		#chEtude_gnb2 .chEtude_gnbList2 li {position: relative; float: left;}
		#chEtude_gnb2 .chEtude_gnbList2 li a {height: 40px; line-height: 40px; padding: 0 6px; font-size: 14px; font-weight: 500; color: #777;}
		#chEtude_gnb2 .chEtude_gnbList2 li .line {position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: #f54a7e; -webkit-transition-duration: 0.35s; transition-duration: 0.35s;}
		#chEtude_gnb2 .chEtude_gnbList2 li.active a {color: #f54a7e;}
		#chEtude_gnb2 .chEtude_gnbList2 li.active .line {left: 0;width: 100%;}
		#chEtude_gnb2 .chEtude_btn_allMenu2 {position: absolute; right:0; top: 0px; width: 29px; height: 40px; background: #fff; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc; z-index: 15; transition: -webkit-transform 0.4s ease, transform 0.4s ease; -webkit-transform: rotateX(0deg); transform: rotateX(0deg);}
		#chEtude_gnb2 .chEtude_btn_allMenu2 img {position: absolute; left: 9px; top: 15px; width:12px; transition: -webkit-transform 0.4s ease, transform 0.4s ease; -webkit-transform: rotateX(0deg); transform: rotateX(0deg);}
		#chEtude_gnb2.menuOpen .chEtude_btn_allMenu2 img { -webkit-transform: rotateX(180deg); transform: rotateX(180deg);} 
		#chEtude_gnb2.menuOpen .chEtude_gnbList2 {width: auto; margin-right: 0;-webkit-transition:all 0.1s ease; transition:all 0.1s ease;}
		#chEtude_gnb2.menuOpen .chEtude_gnbList2 ul {overflow: hidden; width: auto; height: auto; padding: 10px 30px 10px 10px; white-space: normal; background: none; border-top: 0;}
		#chEtude_gnb2.menuOpen .chEtude_gnbList2 li {display: inline-block; float:none;}
		#chEtude_gnb2.menuOpen .chEtude_gnbList2 li a {height: 30px; line-height: 30px; -webkit-transition:all 0.2s ease; transition:all 0.2s ease;}
		#chEtude_gnb2.menuOpen .line {display: none;}
		#chEtude_gnb2.menuOpen .chEtude_btn_allMenu2 {background-position: 0 bottom;}

		#chEtude_ctt2 .chEtude_mainSectionWrap2 {overflow: hidden; position: relative;}
		#chEtude_ctt2 .chEtude_mainSectionWrap2 .chEtude_mainContent2 {overflow: hidden; position: relative;}
		#chEtude_ctt2 .chEtude_mainSectionWrap2 .chEtude_mainContent2 .chEtude_mainSection2 {overflow: hidden; position: relative; float:left; width:100%;}

		#chEtude_ctt2 .chEtude_mainSection2 {}
		#chEtude_ctt2 .chEtude_mainSection2 ul {overflow: hidden;margin: 0 -2px;}
		#chEtude_ctt2 .chEtude_mainSection2 ul li {width: 50%;float: left;padding: 0 1px 30px;box-sizing: border-box;}
		#chEtude_ctt2 .chEtude_mainSection2 ul li a {}
		#chEtude_ctt2 .chEtude_mainSection2 ul li a img {width:100%}
		#chEtude_ctt2 .chEtude_mainSection2 ul li a p {padding: 5px;}
		#chEtude_ctt2 .chEtude_mainSection2 ul li a p span.ch_new {background: url(http://10.155.8.76:8200/kr/ko/web_resource/mobile/images/common/chEtude_new_icon.jpg) no-repeat left top;background-size: 7.5px auto;width: 7.5px;height: 9.5px;display: inline-block;margin-right: 5px;}
		#chEtude_ctt2 .chEtude_mainSection2 .btn_listMore {margin: 0 15px;border-top: 1px solid #d1d1d1;text-align: center;}
		#chEtude_ctt2 .chEtude_mainSection2 .btn_listMore .inBox {display: inline-block;background: url(http://10.155.8.76:8200/kr/ko/web_resource/mobile/images/common/chEtude_more_icon.jpg) no-repeat right center;background-size: 10.5px 6.5px;padding-right: 22px;}

		/* 상세 */
		.chEtude_view .movie_area.Square {padding-bottom: 100%;}
		.chEtude_view .coupon_area .chEtude_coupon {margin-top: 17px;}
		.chEtude_view .banner_area {}
		.chEtude_view .banner_area a {}
		.chEtude_view .banner_area a img {}

		.chEtude_view .rtdWrap {border-bottom: 10px solid #f5f5f5;}
		.chEtude_view .rtdWrap .rtdTop {}
		.chEtude_view .rtdWrap .rtdTop strong {}
		.chEtude_view .rtdWrap .rtdTop strong .swiper_num {}
		.chEtude_view .rtdWrap .rtdTop .ico_dow {}
		.chEtude_view .rtdWrap .rtdCon_lr {}
		.chEtude_view .rtdWrap .rtdCon_lr.on {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide > a {padding: 6px;overflow: hidden;display:block;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdImg {position: static;margin: 5px 0;display: inline-block;vertical-align: middle;width: 37%;height: auto;text-align: left;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdImg img  {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox {position: static;margin: 5px 0;display: inline-block;vertical-align: middle;width: 58%;margin-left: 3%;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdTit {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdTxt {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdPrice {position: relative;min-height: 19px;padding-right: 22px;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdPrice em  {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdPrice em .ft_type1 {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdPrice .ft_type1.big {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox .prdPrice .cart_plus {background:url(/web_resource/mobile/images/common/head_cartChk_off.png) no-repeat left center;background-size:19px auto;width:19px;height:19px;display:inline-block;text-indent:-9999px;position: absolute;top: 0;right: 2px;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper-slide .prdBox select {margin-top: 5px;}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper_numWrap {}
		.chEtude_view .rtdWrap .rtdCon_lr .rtdlr .swiper_numWrap .swiper_num {}
		.chEtude_view .rtdWrap .rtdCon_nm {}
		.chEtude_view .rtdWrap .rtdCon_nm ul {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li > a {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdImg {position: static;margin: 5px 0;display: inline-block;vertical-align: middle;width: 37%;height: auto;text-align: left;}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdImg img  {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox {position: static;margin: 5px 0;display: inline-block;vertical-align: middle;width: 58%;margin-left: 3%;padding: 0;}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdTit {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdTxt {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdPrice {position: relative;min-height: 19px;padding-right: 22px;}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdPrice em  {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdPrice em .ft_type1 {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdPrice .ft_type1.big {}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox .prdPrice .cart_plus {background:url(/web_resource/mobile/images/common/head_cartChk_off.png) no-repeat left center;background-size:19px auto;width:19px;height:19px;display:inline-block;text-indent:-9999px;position: absolute;top: 0;right: 2px;}
		.chEtude_view .rtdWrap .rtdCon_nm ul li .prdBox select {margin-top: 5px;}

		.chEtude_view .etude_box {}
		.chEtude_view .etude_box .h3_title {position:relative}
		.chEtude_view .etude_box .chEtude_more {position: absolute;top: 0;right: 15px;font-size: 13px;padding-right: 10px;background: url(/web_resource/mobile/images/common/chEtude_more_icon2.jpg) no-repeat right center;background-size: 6px auto;}
		.chEtude_view .etude_box ul {overflow: hidden;margin: 0 -2px;}
		.chEtude_view .etude_box ul li {width: 50%;float: left;padding: 0 1px 30px;box-sizing: border-box;}
		.chEtude_view .etude_box ul li a {}
		.chEtude_view .etude_box ul li a img {}
		.chEtude_view .etude_box ul li a p {padding: 5px;}
		.chEtude_view .etude_box ul li a p span.ch_new {background: url(/kr/ko/web_resource/mobile/images/common/chEtude_new_icon.jpg) no-repeat left top;background-size: 7.5px auto;width: 7.5px;height: 9.5px;display: inline-block;margin-right: 5px;}
	</style>

	<div id="chEtude">
		<div id="chEtude_gnb">
			<div class="chEtude_gnbList">
				<ul id="chEtude_ulGnbMenuList">				
					<li class="active"><a href="#none">홈</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
					<li><a href="#none">신제품</a><span class="line"></span></li>
				</ul>
			</div>
			<a href="#none" class="chEtude_btn_allMenu">
				<img src="http://m.etudehouse.com/web_resource/mobile/images/common/btn_allMenu.gif" alt="현제 메뉴 전체 보기">
			</a>
		</div>
		<div id="chEtude_ctt">
			<div class="chEtude_mainSectionWrap" id="chEtude_mainHomeSlide">
				<div class="chEtude_mainContent">
					<div class="chEtude_mainSection active">
						<div id="chEtude_gnb2">
							<div class="chEtude_gnbList2">
								<ul id="chEtude_ulGnbMenuList2">				
									<li class="active"><a href="#none">홈</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
									<li><a href="#none">신제품</a><span class="line"></span></li>
								</ul>
							</div>
							<a href="#none" class="chEtude_btn_allMenu2">
								<img src="http://m.etudehouse.com/web_resource/mobile/images/common/btn_allMenu.gif" alt="현제 메뉴 전체 보기">
							</a>
						</div>
						<div id="chEtude_ctt2">
							<div class="chEtude_mainSectionWrap2" id="chEtude_mainHomeSlide2">
								<div class="chEtude_mainContent2">
									<div class="chEtude_mainSection2 active">									
										<ul>
											<li>
												<a href="#none">
													<img src="http://10.155.8.76:8200/web_resource/mobile/images/common/test_bg.jpg">
													<p><span class="ch_new"></span>N 마이 리틀 넛 래쉬펌 컬픽스 마스카라 또렷한 블랙</p>
												</a>
											</li>
											<li>
												<a href="#none">
													<img src="http://10.155.8.76:8200/web_resource/mobile/images/common/test_bg.jpg">
													<p><span class="ch_new"></span>N 마이 리틀 넛 래쉬펌 컬픽스 마스카라 또렷한 블랙</p>
												</a>
											</li>
											<li>
												<a href="#none">
													<img src="http://10.155.8.76:8200/web_resource/mobile/images/common/test_bg.jpg">
													<p><span class="ch_new"></span>N 마이 리틀 넛 래쉬펌 컬픽스 마스카라 또렷한 블랙</p>
												</a>
											</li>
										</ul>
										<div class="btn_listMore"><div class="inBox">더 보기 (<em class="ft_c1">3</em>/3)</div>
									</div>
									</div>
									<div class="chEtude_mainSection2"><div style="height:300px;background:red"></div></div>
									<div class="chEtude_mainSection2"><div style="height:400px;background:green"></div></div>
									<div class="chEtude_mainSection2"><div style="height:500px;background:red"></div></div>
									<div class="chEtude_mainSection2"><div style="height:600px;background:green"></div></div>
									<div class="chEtude_mainSection2"><div style="height:700px;background:red"></div></div>
									<div class="chEtude_mainSection2"><div style="height:800px;background:green"></div></div>
									<div class="chEtude_mainSection2"><div style="height:900px;background:red"></div></div>
									<div class="chEtude_mainSection2"><div style="height:1000px;background:green"></div></div>
								</div>
							</div>
						</div>
					</div>
					<div class="chEtude_mainSection"><div style="height:300px;background:red"></div></div>
					<div class="chEtude_mainSection"><div style="height:400px;background:green"></div></div>
					<div class="chEtude_mainSection"><div style="height:500px;background:red"></div></div>
					<div class="chEtude_mainSection"><div style="height:600px;background:green"></div></div>
					<div class="chEtude_mainSection"><div style="height:700px;background:red"></div></div>
					<div class="chEtude_mainSection"><div style="height:800px;background:green"></div></div>
					<div class="chEtude_mainSection"><div style="height:900px;background:red"></div></div>
					<div class="chEtude_mainSection"><div style="height:1000px;background:green"></div></div>
				</div>
			</div>
		</div>
	</div>

	<script>
		// gnb width
		var _gnbLen = $('.chEtude_gnbList > ul > li').length; // gnb 개수 측정
		var _gnbWidth = 0;

		for(var i = 0; i<_gnbLen; i++){
			_gnbWidth += $('.chEtude_gnbList > ul > li').eq(i).width(); // 갯수만큼 가로 사이즈를 지정
		}

		var _cttHeight = $('.chEtude_mainSectionWrap > .chEtude_mainSection.active').height()

		$('.chEtude_gnbList > ul').css({'width' : _gnbWidth + 50}); // gnb 가로 사이즈 지정
		$('.chEtude_mainSectionWrap').css({'height' : _cttHeight}); // ctt 세로 사이즈 지정
		//컨텐츠 초기 높이
		//$(window).load(function(){
			//var _loadHomeH = $('#homeSection').height();
			//$('.mainSectionWrap .mainContent').css({'height' : _loadHomeH});
		//});
		
		
		// 메인에 삽입된 화면 슬라이드
		window.homeSlide = new Swipe(document.getElementById('chEtude_mainHomeSlide'), {
			// continuous: false,
			stopPropagation: true,
			callback: function(index, elem) {
				//alert("!!! " +index);
				//current
				$(".chEtude_mainSection").removeClass('active').eq(index).addClass("active");
				$('.chEtude_gnbList > ul > li').removeClass('active').eq(index).addClass("active");

				//컨텐츠 높이
				var _newH = $('.chEtude_mainSectionWrap > .chEtude_mainContent > .chEtude_mainSection').eq(index).innerHeight();
				$('.chEtude_mainSectionWrap > .chEtude_mainContent').css({'height' : _newH+'px'});

				//gnb move
				var _winW = $(window).width();
				var _target = $('.chEtude_gnbList > ul > li').eq(index);
				var _targetOffset = $('.chEtude_gnbList > ul > li').eq(index).offset().left;
				var _targetW = $('.chEtude_gnbList > ul > li').eq(index).width();
				var _offset = 0;
				for(var i = 0; i<index; i++){
					_offset += $('.chEtude_gnbList > ul > li').eq(i).width();
				}

				var _scroll = _offset - _winW + _targetOffset + _targetW + 55 ;

				$('.chEtude_gnbList').stop().animate({'scrollLeft' :_scroll});
				$('html, body').stop().animate({scrollTop : 0}, 10);
				
				
				if(!main_onloadFlag)	// 최초 온로드시 가 아닐때 해쉬 초기화 처리  
					location.hash = "";	// 해쉬초기화 
				else 
					main_onloadFlag = false;
				
				resetAddPageInfo();
				setPageIdAjax();
				// 메인 페이지 로드 처리 
				//doLoadMainPageProc((Number(currentSlide) + 1));
				
				if (isGoBackBestPage != 'true') {
					doLoadMainPageProc((Number(index) + 1));
				}
				
			},
		});
		
		//goto slide
		$(document).on('click', '.chEtude_gnbList > ul > li > a', function(event){
			event.preventDefault();
			var gnb_idx = $(".chEtude_gnbList > ul > li > a").index(event.currentTarget);
			homeSlide.slide(gnb_idx);
			$(this).parents('#chEtude_gnb').removeClass('menuOpen');
			$(".chEtude_gnbList > ul > li").removeClass('active')
			$(this).parent('li').addClass('active')
			$('.chEtude_gnbList > ul').css({'width' : _gnbWidth + 50});
		});

		$(document).on("click",".nearest_prd",function(){
			var prdCd = $(this).find("input[name=prdCd]").val();
			var sapCd = $(this).find("input[name=sapCd]").val();
			$(location).attr("href","/kr/ko/mobile/product.do?method=view&prdCd="+prdCd+"&sapCd="+sapCd);
			return false;
		});

		//더보기 버튼 클릭시 컨텐츠 높이 반영
		function setNewH2(setTimeFl){
			
			var _newH2 = $('.chEtude_mainSection.active > .content').innerHeight();
			//console.log(_newH2);
			//$('.mainSection.active').css({'height' : _newH2+'px'});
			if (_newH2 != 0) {
				$('.chEtude_mainContent').css({'height' : _newH2+'px'});
			}
			/*
			var _newH2 = $("#dvMainPage_"+menuIdx).find('.content').height();
			$("#dvMainPage_"+menuIdx).css({'height' : _newH2+'px'});
			$(".mainSectionWrap .slick-list").css({'height' : _newH2+'px'});
			*/
			
			if(setTimeFl) {
				setTimeout(function(){
					setNewH2(false);
				},2000);
			}
		}

		//gnb 펼침
		$(function(){
			$('.chEtude_btn_allMenu').click(function(){
				if ($(this).parent().hasClass('menuOpen')) {
					$(this).parent().removeClass('menuOpen');
					// newGnbWidth();
					$('.chEtude_gnbList > ul').css({'width' : _gnbWidth + 50});
				}else{
					$(this).parent().addClass('menuOpen');
					$('.chEtude_gnbList > ul').css({'width' : 'auto'});
				}
			});
		});
	</script>

	<script>
		// gnb width
		var _gnbLen2 = $('.chEtude_gnbList2 > ul > li').length; // gnb 개수 측정
		var _gnbWidth2 = 0;

		for(var i = 0; i<_gnbLen2; i++){
			_gnbWidth2 += $('.chEtude_gnbList2 > ul > li').eq(i).width(); // 갯수만큼 가로 사이즈를 지정
		}

		var _cttHeight2 = $('.chEtude_mainSectionWrap2 > .chEtude_mainSection2.active').height()

		$('.chEtude_gnbList2 > ul').css({'width' : _gnbWidth2 + 50}); // gnb 가로 사이즈 지정
		$('.chEtude_mainSectionWrap2').css({'height' : _cttHeight2}); // ctt 세로 사이즈 지정

		$('#chEtude_gnb2').on('touchmove', function(e){
			e.stopPropagation();
		})

		//컨텐츠 초기 높이
		//$(window).load(function(){
			//var _loadHomeH = $('#homeSection').height();
			//$('.mainSectionWrap .mainContent').css({'height' : _loadHomeH});
		//});

		var height = $('.chEtude_gnbList').outerHeight(true)

		// 메인에 삽입된 화면 슬라이드
		window.homeSlide2 = new Swipe(document.getElementById('chEtude_mainHomeSlide2'), {
			// continuous: false,
			stopPropagation: true,
			callback: function(index, elem) {
				//alert("!!! " +index);
				//current
				$(".chEtude_mainSection2").removeClass('active').eq(index).addClass("active");
				$('.chEtude_gnbList2 > ul > li').removeClass('active').eq(index).addClass("active");

				// var _prevHeight = $('.chEtude_mainSectionWrap2').children('.chEtude_mainSection2.active').height()

				
				//컨텐츠 높이
				var _newH2 = $('.chEtude_mainSectionWrap2 > .chEtude_mainContent2 > .chEtude_mainSection2').eq(index).innerHeight();
				$('.chEtude_mainSectionWrap > .chEtude_mainContent').css({'height' : _newH2+height+'px'});
				$('.chEtude_mainSectionWrap2 > .chEtude_mainContent2').css({'height' : _newH2+'px'});

				//gnb move
				var _winW2 = $(window).width();
				var _target2 = $('.chEtude_gnbList2 > ul > li').eq(index);
				var _targetOffset2 = $('.chEtude_gnbList2 > ul > li').eq(index).offset().left;
				var _targetW2 = $('.chEtude_gnbList2 > ul > li').eq(index).width();
				var _offset2 = 0;
				for(var i = 0; i<index; i++){
					_offset2 += $('.chEtude_gnbList2 > ul > li').eq(i).width();
				}

				var _scroll2 = _offset2 - _winW2 + _targetOffset2 + _targetW2 + 55 ;

				$('.chEtude_gnbList2').stop().animate({'scrollLeft' :_scroll2});
				$('html, body').stop().animate({scrollTop : 0}, 10);
				
				/*
				if(!main_onloadFlag)	// 최초 온로드시 가 아닐때 해쉬 초기화 처리  
					location.hash = "";	// 해쉬초기화 
				else 
					main_onloadFlag = false;
				
				resetAddPageInfo();
				setPageIdAjax();
				// 메인 페이지 로드 처리 
				//doLoadMainPageProc((Number(currentSlide) + 1));
				
				if (isGoBackBestPage != 'true') {
					doLoadMainPageProc((Number(index) + 1));
				}
				*/
				
			},
		});
		
		//goto slide
		$(document).on('click', '.chEtude_gnbList2 > ul > li > a', function(event){
			event.preventDefault();
			var gnb_idx2 = $(".chEtude_gnbList2 > ul > li > a").index(event.currentTarget);
			homeSlide2.slide(gnb_idx2);
			$(this).parents('#chEtude_gnb2').removeClass('menuOpen');
			$(".chEtude_gnbList2 > ul > li").removeClass('active')
			$(this).parent('li').addClass('active')
			$('.chEtude_gnbList2 > ul').css({'width' : _gnbWidth2 + 50});
		});

		//더보기 버튼 클릭시 컨텐츠 높이 반영
		function setNewH2(setTimeFl){
			
			var _newH2 = $('.chEtude_mainSection2.active > .content').innerHeight();
			//console.log(_newH2);
			//$('.mainSection.active').css({'height' : _newH2+'px'});
			if (_newH2 != 0) {
				$('.chEtude_mainContent2').css({'height' : _newH2+'px'});
			}
			/*
			var _newH2 = $("#dvMainPage_"+menuIdx).find('.content').height();
			$("#dvMainPage_"+menuIdx).css({'height' : _newH2+'px'});
			$(".mainSectionWrap .slick-list").css({'height' : _newH2+'px'});
			*/
			
			if(setTimeFl) {
				setTimeout(function(){
					setNewH2(false);
				},2000);
			}
		}

		//gnb 펼침
		$(function(){
			$('.chEtude_btn_allMenu2').click(function(){
				if ($(this).parent().hasClass('menuOpen')) {
					$(this).parent().removeClass('menuOpen');
					// newGnbWidth();
					$('.chEtude_gnbList2 > ul').css({'width' : _gnbWidth2 + 50});
				}else{
					$(this).parent().addClass('menuOpen');
					$('.chEtude_gnbList2 > ul').css({'width' : 'auto'});
				}
			});
		});
	</script>
</body>
</html>