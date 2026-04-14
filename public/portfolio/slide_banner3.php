<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
	<style>	
		#wrap{width: 589px;height: 354px;margin:0 auto;position: relative;}
		#banner {width:100%;height: 100%;overflow:hidden;position:relative;}
		#banner ul {position:absolute;left:0;top:0;}
		#banner ul li {float:left;}
		#b_bt .left {position:absolute;width: 30px;height: 30px;background:#333;left: -50px;top:50%;margin-top: -15px;}
		#b_bt .right {position:absolute;width: 30px;height: 30px;background:#333;right: -50px;top:50%;margin-top: -15px;}
	</style>
	<script type="text/javascript">
		function mainBannerRoll(){
			var timer; // 타이머 초기화
			var maxNum = $('#mainBanner1 .pager li').length; // 페이지수 초기화
			var i = 0; // i값 초기화
			$('#mainBanner1 .pager li').css({'width' : Math.floor(580 / maxNum)}); //
			
			function fadeFunction(now){
				$('#mainBanner1 .pager li').removeClass('on');
				$('#mainBanner1 .pager li').eq(now).addClass('on');
				$('#mainBanner1 .contList li').stop().animate({'opacity' : 0}).hide();
				$('#mainBanner1 .contList li').eq(now).show().stop().animate({'opacity' : 1});
			};
			fadeFunction(i);
			
			function Action(){
				timer = setInterval(function(){
					i ++;
					i = (i > maxNum-1) ? 0 : i;
					fadeFunction(i);
				}, 3000)
			};
			Action();
		
			$('#mainBanner1 button').each(function(){
				$(this).bind('click', function(){
					if($(this).hasClass('prev')){
						var btnNum = $(this).parent('li').index();
						i--;
						i = (i < 0) ? maxNum-1 : i;
						fadeFunction(i);
						clearInterval(timer);
						Action();
						return false;
					} else {
						var btnNum = $(this).parent('li').index();
						i++;
						i = (i > maxNum-1) ? 0 : i;
						fadeFunction(i);
						clearInterval(timer);
						Action();
						return false;
					}
				});
			});
		
			$('#mainBanner1 .pager li a').bind('click', function(){
				i = $(this).parent('li').index();
				fadeFunction(i);
				clearInterval(timer);
				Action();
				return false;
			});
		
			$('#mainBanner1 .contList li').mouseenter(function(){
				clearInterval(timer);
			});
		
			$('#mainBanner1 .contList li').mouseleave(function(){
				fadeFunction(i);
				Action();
			});
		};
	</script>
</head>
<body>

<div class="mainBannerSec1">
	<div id="mainBanner1" class="mainBanner1">
		<ul class="contList">
			<li><img src="http://www.innisfree.cn/upload/mainbanner/1869386170698848mainBanner.jpg" alt="20170302_2단좌측배너_여신절_2.jpg"></li>		
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2138545690688569mainBanner.jpg" alt="170306_세럼수정.jpg" usemap="#LRmap3"></li>		
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9373725845703953mainBanner.jpg" alt="170303_2단좌측배너_Mycushion_수정.jpg"></li>		
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140770180520456mainBanner.jpg" alt="10607873385178044mainBanner.jpg"></li>		
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2139537462451637mainBanner.jpg" alt="170301_2단좌측배너_화이트펑거스크림_2.jpg"></li>		
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140846722847116mainBanner.jpg" alt="170301_2단좌측배너_젤리_1.jpg"></li>	
		</ul>
		<ul class="pager">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
		</ul>
		<button type="button" class="prev">Preview</button>
		<button type="button" class="next">Next</button>
	</div>
	<script type="text/javascript">mainBannerRoll();</script>
</div>

</body>

</html>
