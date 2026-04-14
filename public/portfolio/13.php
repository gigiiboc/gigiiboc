<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
	<style type="text/css">
		.mainBanner1 {position: relative;float: left;padding-bottom: 46px;width: 589px;height: 354px;overflow: hidden;}
		.mainBanner1 .contList {}
		.mainBanner1 .contList li {position: absolute;left: 0;top: 0;width: 589px;}
		.mainBanner1 .contList li img {width: 100%;}
		.mainBanner1 .pager {position: absolute;left: 0;bottom: 0;}
		.mainBanner1 .pager li {}
		.mainBanner1 .pager li a {color:#000}
		.mainBanner1 .pager li.on a {color:#fff;}
		.mainBanner1 .pager-dot {position: absolute;right: 0;bottom: 0;}
		.mainBanner1 .pager-dot li {}
		.mainBanner1 .pager-dot li a {display: block;width: 9px;height: 9px;border-radius: 50%;border: 1px solid #000;background:#000}
		.mainBanner1 .pager-dot li.on a {background: #fff;}
		.mainBanner1 .pager-dot li a span {display: inline-block;text-indent: -9999em;font-size: 0;}
	</style>
</head>
<body>
	<div id="mainBanner1" class="mainBanner1">
		<ul class="contList">
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2138545690688569mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140846722847116mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2138545690688569mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140846722847116mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/2138545690688569mainBanner.jpg" /></li>
			<li><img src="http://www.innisfree.cn/upload/mainbanner/9140846722847116mainBanner.jpg" /></li>
		</ul>
		<ul class="pager"></ul>
		<ul class="pager-dot"></ul>
	</div>
	<script type="text/javascript">
		$(function(){
			var timer;
			var maxNum = $('.contList li').length
			var i = 0;			

			// 페이퍼 갯수만큼 도트버튼 추가하고 첫번째 요소에 on 클래스 부여하는 '도트추가' 함수 세팅
			function setPager(){
				for(var i=0; i<maxNum; i++){
					$('.pager-dot').append('<li><a href="#"><span>'+i+'</span></a></li>');
					$('.pager').append('<li><a href="#">'+ (i+1)+ '/' + maxNum +'</li>');
				}
			}
			setPager(); // 도트추가 함수 실행

			// 모든 컨텐츠의 액션을 지우고 현재 컨텐츠에만 액션을 실행하는 '액션' 함수 세팅
			function fadeFunction(now){
				$('#mainBanner1 .pager li').removeClass('on'); // 모든 넘버표기에 on 클래스 삭제
				$('#mainBanner1 .pager li').eq(now).addClass('on'); // 현재 넘버표기에 on 클래스 추가
				$('#mainBanner1 .pager-dot li').removeClass('on'); // 모든 도트에 on 클래스 삭제
				$('#mainBanner1 .pager-dot li').eq(now).addClass('on'); // 현재 도트에 on 클래스 추가
				$('#mainBanner1 .contList li').stop().animate({'opacity' : 0}).hide(); // 모든 페이지에 on 클래스 삭제
				$('#mainBanner1 .contList li').eq(now).show().stop().animate({'opacity' : 1}); // 현재 페이지에 on 클래스 추가
			};
			
			// 3초마다 i를 증가시키고, 1가 총 페이퍼 갯수보다 커질 경우 0으로 만드는 '타이머' 함수 세팅
			function Action(){
				timer = setInterval(function(){
					i ++;
					i = (i > maxNum-1) ? 0 : i;
					fadeFunction(i);
				}, 3000)
			};

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
