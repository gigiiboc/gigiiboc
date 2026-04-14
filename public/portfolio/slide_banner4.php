<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<style type="text/css">
		.mainBanner1 {position: relative;float: left;padding-bottom: 46px;width: 589px;height: 354px;overflow: hidden;}
		.mainBanner1 .contList {}
		.mainBanner1 .contList li {position: absolute;left: 0;top: 0;width: 589px;}
		.mainBanner1 .contList li img {width: 100%;}
		.mainBanner1 .pager {position: absolute;left: 0;bottom: 0;width: 589px;height: 46px;}
		.mainBanner1 .pager li {text-align: left;width:100%;position: absolute;top: 0;left: 0;}
		.mainBanner1 .pager li a {display: none;margin: 0;padding: 0 106px 0 34px;background: #045321;letter-spacing: -1px;text-decoration: none;color: #fff;line-height: 46px;height: 46px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
		.mainBanner1 .pager li.on a {padding: 0 106px 0 34px;border:none;background: #045321;color:#fff;display: block;}
		.mainBanner1 .pager-dot {position: absolute;right: 15px;bottom: 18px;}
		.mainBanner1 .pager-dot li {display: inline-block;width: 10px;height: 10px;margin: 0 2px;}
		.mainBanner1 .pager-dot li a {display: block;width: 9px;height: 9px;border-radius: 50%;border: 1px solid #fff;}
		.mainBanner1 .pager-dot li.on a {background: #fff;}
		.mainBanner1 .pager-dot li a span {display: inline-block;text-indent: -9999em;font-size: 0;}
	</style>
</head>
<body>
	<div id="mainBanner1" class="mainBanner1">
		<ul class="contList">
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140770180520456mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2138545690688569mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9373725845703953mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140770180520456mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2139537462451637mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140846722847116mainBanner.jpg" /></li>
		</ul>
		<ul class="pager">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
		</ul>
		<ul class="pager-dot"></ul>
	</div>
	<script type="text/javascript">
		$(function(){
			var timer;
			var maxNum = $('#mainBanner1 .pager li').length;
			var i = 0;
			

			// 페이퍼 갯수만큼 도트버튼 추가하고 첫번째 요소에 on 클래스 부여하는 '도트추가' 함수 세팅
			function setPager(){
				for(var i=0; i<maxNum; i++){
					$('.pager-dot').append('<li><a href="#"><span>'+i+'</span></a></li>');
				}
				// $('.pager-dot').find('li').eq(0).addClass('on');
			}

			// 모든 컨텐츠의 액션을 지우고 현재 컨텐츠에만 액션을 실행하는 '액션' 함수 세팅
			function fadeFunction(now){
				$('#mainBanner1 .pager li').removeClass('on');
				$('#mainBanner1 .pager li').eq(now).addClass('on');
				$('#mainBanner1 .pager-dot li').removeClass('on');
				$('#mainBanner1 .pager-dot li').eq(now).addClass('on');
				$('#mainBanner1 .contList li').stop().animate({'opacity' : 0}).hide();
				$('#mainBanner1 .contList li').eq(now).show().stop().animate({'opacity' : 1});
			};
			
			// 3초마다 i를 증가시키고, 1가 총 페이퍼 갯수보다 커질 경우 0으로 만드는 '타이머' 함수 세팅
			function Action(){
				timer = setInterval(function(){
					i ++;
					i = (i > maxNum-1) ? 0 : i;
					fadeFunction(i);
				}, 3000)
			};

			setPager();// 도트추가 함수 실행
			Action(); // 타이머 함수 실행
			fadeFunction(i); // 액션 함수 실행

			// .pager-dot li a 을 클릭했을때(.append 로 추가된 li에 동작 가능), this 에 따른 액션 함수가 실행되고 타이머 함수를 중단한 뒤, 재실행
			$('#mainBanner1 .pager-dot').on('click', 'li a', function(){
				i = $(this).parent('li').index();
				fadeFunction(i);
				clearInterval(timer);
				Action();
				return false;
			});

			// .pager li a 을 클릭했을때, this 에 따른 액션 함수가 실행되고 타이머 함수를 중단한 뒤, 재실행
			$('#mainBanner1 .pager li a').bind('click', function(){
				i = $(this).parent('li').index();
				fadeFunction(i);
				clearInterval(timer);
				Action();
				return false;
			});

			// 마우스를 올릴경우 타이머 함수 중지
			$('#mainBanner1 .contList li').mouseenter(function(){
				clearInterval(timer);
			});

			// 마우스가 벗어날 경우 액션 함수 실행, 타이머 함수 실행
			$('#mainBanner1 .contList li').mouseleave(function(){
				fadeFunction(i);
				Action();
			});
		});
	</script>
</body>
</html>
