<!DOCTYPE html>
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
<style>

body {min-height:3000px;background:#333}

/*=================================
header
=================================*/

#header {position:absolute;left:0;top:0;height:84px;width:100%;background:#fff;z-index:1;}
#header .header-box {position:relative;height:84px; overflow:visible}
#header .header-box.on {}

/* 네비게이션 */
#header .navArea01{overflow: hidden;height: 84px}
#header .navbox01{display: flex;flex-wrap: nowrap;align-items: flex-start;}
#header .navbox01 > li{}
#header .navlink01{display: block;padding: inherit;line-height: 78px;padding: 3px 20px 0;border-bottom: 3px solid transparent;}
#header .navArea02{display:none;position:absolute;top:84px;left:0;width:100%;padding:30px 0px;overflow:hidden;}
#header .navbox02{float:left;width:50%;position:relative;}
#header .navbox02 > li{}
#header .navlink02{display:block;font-size:1.15em;font-weight:bold;color:#3378c1;padding:0px 10px 0px 20px;border-right:1px solid #f2f2f3;}
#header .navArea03{display:none;width:100%;position:absolute;top:0;left:100%;height:100%;overflow:hidden}
#header .navbox03{}
#header .navbox03 > li{}
#header .navlink03{display:block;font-size:1.1em;font-weight:normal;color:#6e7179;padding-left:20px;}

.navbox01 > li:hover .navlink01 {border-bottom: 3px solid #3378c1}
.navlink03:hover {background:#f2f2f3; color:#3378c1;}
</style>

<div id="header">
	<div class="header-box">
		<div class="navArea01">
			<ul class="navbox01">
				<li>
					<a href="#" class="navlink01">진료예약</a>
					<div class="navArea02">
						<ul class="navbox02">
							<li>
								<a href="#" class="navlink02"><span class="bg">진료과/의료진</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>의료진검색</span></a></li>
										<li><a href="#" class="navlink03"><span>센터/진료과검색</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료일정 검색</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">예약하기</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>진료예약</span></a></li>
										<li><a href="#" class="navlink03"><span>건강검진예약</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료예약안내</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">진료절차안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>외래진료절차</span></a></li>
										<li><a href="#" class="navlink03"><span>의료전달체계안내</span></a></li>
										<li><a href="#" class="navlink03"><span>선택진료안내</span></a></li>
										<li><a href="#" class="navlink03"><span>오픈카드서비스안내</span></a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" class="navlink02"><span class="bg">입퇴원안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>입퇴원절차</span></a></li>
										<li><a href="#" class="navlink03"><span>입원생활안내</span></a></li>
										<li><a href="#" class="navlink03"><span>면회안내</span></a></li>
										<li><a href="#" class="navlink03"><span>가정간호</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>응급진료안내</span></a></li>
							<li><a href="#" class="navlink02"><span>비급여 진료비안내</span></a></li>
							<li><a href="#" class="navlink02"><span>수납 및 환불안내</span></a></li>
							<li><a href="#" class="navlink02"><span>제증명 의무기록 발급</span></a></li>
							<li><a href="#" class="navlink02"><span>건강보험(진단코드)</span></a></li>
							<li><a href="#" class="navlink02"><span>위/변조문서조회</span></a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" class="navlink01">진료예약</a>
					<div class="navArea02">
						<ul class="navbox02">
							<li>
								<a href="#" class="navlink02"><span class="bg">진료과/의료진</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>의료진검색</span></a></li>
										<li><a href="#" class="navlink03"><span>센터/진료과검색</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료일정 검색</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">예약하기</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>진료예약</span></a></li>
										<li><a href="#" class="navlink03"><span>건강검진예약</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료예약안내</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">진료절차안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>외래진료절차</span></a></li>
										<li><a href="#" class="navlink03"><span>의료전달체계안내</span></a></li>
										<li><a href="#" class="navlink03"><span>선택진료안내</span></a></li>
										<li><a href="#" class="navlink03"><span>오픈카드서비스안내</span></a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" class="navlink02"><span class="bg">입퇴원안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>입퇴원절차</span></a></li>
										<li><a href="#" class="navlink03"><span>입원생활안내</span></a></li>
										<li><a href="#" class="navlink03"><span>면회안내</span></a></li>
										<li><a href="#" class="navlink03"><span>가정간호</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>응급진료안내</span></a></li>
							<li><a href="#" class="navlink02"><span>비급여 진료비안내</span></a></li>
							<li><a href="#" class="navlink02"><span>수납 및 환불안내</span></a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" class="navlink01">진료예약</a>
					<div class="navArea02">
						<ul class="navbox02">
							<li>
								<a href="#" class="navlink02"><span class="bg">진료과/의료진</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>의료진검색</span></a></li>
										<li><a href="#" class="navlink03"><span>센터/진료과검색</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료일정 검색</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">예약하기</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>진료예약</span></a></li>
										<li><a href="#" class="navlink03"><span>건강검진예약</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>진료예약안내</span></a></li>
							<li>
								<a href="#" class="navlink02"><span class="bg">진료절차안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>외래진료절차</span></a></li>
										<li><a href="#" class="navlink03"><span>의료전달체계안내</span></a></li>
										<li><a href="#" class="navlink03"><span>선택진료안내</span></a></li>
										<li><a href="#" class="navlink03"><span>오픈카드서비스안내</span></a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" class="navlink02"><span class="bg">입퇴원안내</span></a>
								<div class="navArea03">
									<ul class="navbox03">
										<li><a href="#" class="navlink03"><span>입퇴원절차</span></a></li>
										<li><a href="#" class="navlink03"><span>입원생활안내</span></a></li>
										<li><a href="#" class="navlink03"><span>면회안내</span></a></li>
										<li><a href="#" class="navlink03"><span>가정간호</span></a></li>
									</ul>
								</div>
							</li>
							<li><a href="#" class="navlink02"><span>응급진료안내</span></a></li>
							<li><a href="#" class="navlink02"><span>위/변조문서조회</span></a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>


<script>
$(function() {
	$(".navbox01 > li").on('mouseenter keyup', function(){
		var height = $(this).find(".navArea02").outerHeight()

		$(this).find(".navArea02").stop().fadeIn(100);
		$("#header").addClass("on");
		$("#header").stop().animate({height:height+84}, 600, 'easeInOutQuint');
	})

	$(".navbox01 > li").on('mouseleave keydown', function(){
		$(this).find(".navArea02").stop().fadeOut(100);
		$("#header").removeClass("on");
		$("#header").stop().animate({height:84}, 300, 'easeInOutQuint');
	})

	$(".navbox02 > li").on('mouseenter keyup', function(){
		$(this).find(".navArea03").stop().fadeIn(100);
	})

	$(".navbox02 > li").on('mouseleave keydown', function(){
		$(this).find(".navArea03").stop().fadeOut(100);
	})
});
</script>

</body>
</html>
