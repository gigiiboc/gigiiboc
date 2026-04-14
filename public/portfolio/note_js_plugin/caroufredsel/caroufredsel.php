<!DOCTYPE html>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<style>
#feature-start-promotion {width:482px;margin:0 auto}

/* 메인배너 */
#feature-start-promotion .carousel-wrapper {position:relative}
#feature-start-promotion ul.carousel {overflow:hidden;}
#feature-start-promotion ul.carousel li {position:relative;float:left;}
#feature-start-promotion ul.carousel .featureIntro {position:absolute;left:0;bottom:-96px;width:100%;padding:10px 0 15px;text-align:center;background:#f7f7f7}
#feature-start-promotion ul.carousel .featureIntro span {display:block;margin-top:5px;}

/* 메인배너 - 좌우버튼 */
#feature-start-promotion .button-set .button {position:absolute;top:0;z-index:1;width:25%;height:100%;display:block;text-indent:-9999px;}
#feature-start-promotion .button-set .button.prev {left:0;background:rgba(0,0,0,0.6)}
#feature-start-promotion .button-set .button.next {right:0;background:rgba(0,0,0,0.6)}

/* 메인배너 - 메뉴버튼 */
#feature-start-promotion .button-set .index {position:absolute;bottom:-52px;left:0;width:100%;z-index:1;text-align:center}
#feature-start-promotion .button-set .index a span {display:inline-block;color:#555;width:20%;text-align:center;background:#222;padding:20px 0px}
#feature-start-promotion .button-set .index a.selected span {color:#fff}

</style>


<!-- 이슈 브랜드 시작 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js"></script>
<div style="height:300px;"></div>
<div id="feature-start-promotion">
	<div class="carousel-wrapper">
		<div class="button-set">
			<span class="index">
				<a href="#" class="selected"><span>1</span></a>
				<a href="#" class=""><span>2</span></a>
				<a href="#" class=""><span>3</span></a>
				<a href="#" class=""><span>4</span></a>
				<a href="#" class=""><span>5</span></a>
			</span>
			<a href="#none" class="button prev">이전</a>
			<a href="#none" class="button next">다음</a>
		</div>
		<ul class="carousel">
			<li>
				<a href="">
					<img src="img/product1.jpg">
					<span class="featureIntro">
						<span class="subject">LUV IS TRUE</span>
						<span class="explain">사랑스러움을 함께 입어요. 유니섹스케쥬얼브랜드</span>
						<span class="linked">Shop</span>
					</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/product2.jpg">
					<span class="featureIntro">
						<span class="subject">NOIR</span>
						<span class="explain">가을을 편안하고 따듯한 감성으로 담아낸 여성복 브랜드.</span>
						<span class="linked">Shop</span>
					</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/product3.jpg">
					<span class="featureIntro">
						<span class="subject">OUTSTANDING ORDINARY</span>
						<span class="explain">꾸미지 않아도 사랑스러운 소녀처럼, 아웃스탠딩오디너리</span>
						<span class="linked">Shop</span>
					</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/product4.jpg">
					<span class="featureIntro">
						<span class="subject">polo ralph lauren</span>
						<span class="explain">클래식은 영원하다</span>
						<span class="linked">Shop</span>
					</span>
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/product1.jpg">
					<span class="featureIntro">
						<span class="subject">polo ralph lauren</span>
						<span class="explain">클래식은 영원하다</span>
						<span class="linked">Shop</span>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#feature-start-promotion ul.carousel').children().each(function(i) {
		jQuery(this).addClass('itm'+i );
		jQuery(this).addClass('item');
	});
	var totBlength = jQuery('#feature-start-promotion ul.carousel li').length;
	//jQuery('#feature-start-promotion ul.carousel .itm1').addClass('selected');

	//마지막 요소 삭제 후 맨앞으로 추가
	var itmLast = jQuery('#feature-start-promotion ul.carousel .itm4').html();
	jQuery('#feature-start-promotion ul.carousel .itm4').remove();
	jQuery('#feature-start-promotion ul.carousel').prepend('<li class="item itm4">'+itmLast+'</li>');

	jQuery('#feature-start-promotion ul.carousel').carouFredSel({
		width:"100%",
		height:"auto",
		circular: true,
		auto : {
			play: false,
			timeoutDuration: 6000
		},
		items: {
			visible: 3,
			start: 0
		},
		onCreate: function() {
			jQuery('#feature-start-promotion ul.carousel .item.itm0').children().children(".featureIntro").animate({"bottom":"0px"});
		},
		scroll: {
			items: 1,
			duration: 500,
			onBefore: function() {
				var pos = jQuery(this).triggerHandler( 'currentPosition' );
				jQuery(this).triggerHandler('currentVisible');
				jQuery('#feature-start-promotion ul.carousel .item').children().children(".featureIntro").animate({"bottom":"-130px"});
			},
			onAfter : function() {
				var pos2 = jQuery(this).triggerHandler( 'currentPosition' );
				if (pos2 != totBlength) {
					jQuery('#feature-start-promotion ul.carousel .item.itm'+pos2).children().children(".featureIntro").animate({"bottom":"0px"});
				} else {
					jQuery('#feature-start-promotion ul.carousel .item.itm0').children().children(".featureIntro").animate({"bottom":"0px"});
				}
			}
		},
		pagination: "#feature-start-promotion .button-set .index",
		prev:"#feature-start-promotion .button-set a.prev",
		next:"#feature-start-promotion .button-set a.next"
	});

	//idx 클래스명 지정 추기
	jQuery('.index a').each(function(i) {
		jQuery(this).addClass('idx'+i);
	});
})
</script>
<!-- 이슈 브랜드 끝 -->



</body>
</html>
