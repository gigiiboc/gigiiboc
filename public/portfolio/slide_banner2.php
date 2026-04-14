<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<style>	
		#wrap{width: 589px;height: 354px;margin:0 auto;position: relative;}
		#banner {width:100%;height: 100%;overflow:hidden;position:relative;}
		#banner ul {position:absolute;left:0;top:0;}
		#banner ul li {float:left;}
		#b_bt .left {position:absolute;width: 30px;height: 30px;background:#333;left: -50px;top:50%;margin-top: -15px;}
		#b_bt .right {position:absolute;width: 30px;height: 30px;background:#333;right: -50px;top:50%;margin-top: -15px;}
	</style>
	<script>
		$(document).ready(function(){	
			var eleWidth = $('#banner ul li').width() // li의 width 값
			var eleIndex= $('#banner ul li').length; // li의 갯수값
			var isOn = true;
			
			$("#banner ul").width(eleWidth*eleIndex) // ul의 width를 li의 갯수만큼 늘린다.

			// left 함수 정의
			function right(){		
				$('#banner ul').stop().animate({left:eleWidth*-1},500,'swing',function(){ // ul이 왼쪽으로 한칸 이동하고
					$(this).children('li:first').insertAfter($(this).children('li:last')); // 첫번째 li가  마지막 li 뒤로 이동한다.
					$(this).css({left:0}); // ul의 left 값을 초기화.
				});
			}

			// right 함수 정의
			function left(){
				$('#banner ul li:last').insertBefore($('#banner ul li:first')); // 마지막 li가 첫번째 li 앞으로 이동한다.
				$('#banner ul').css({left:eleWidth*-1}); // 마지막 li가 앞으로 이동된 만큼, left 값을 조절해주고
				$('#banner ul').stop().animate({left:0},500,'swing',function(){ // 조절된 값을 애니메이트로 초기화시켜 동작을 구현한다.
					$(this).css({left:0});
				});
			}

			// auto 함수 정의
			function auto (){
				playAlert = setInterval(function() {
					left();
				}, 2000);
			}
			auto();

			// left click event
			$(".left").click(function(){
				clearInterval(playAlert);	
				if (isOn){
					clearInterval(playAlert);
					isOn = false;
					if (!isOn){
						left();	// left 함수 호출
						isOn = true;
					}	
					auto();
				}
			});

			// right click event
			$(".right").click(function(){
				clearInterval(playAlert);	
				if (isOn){
					clearInterval(playAlert);
					isOn = false;
					if (!isOn){
						right(); // left 함수 호출
						isOn = true;
					}	
					auto();
				}
			});

			// 배너 마우스 on/off auto 여부
			$('#banner').hover(function(){
				clearInterval(playAlert)
			},function(){	
				auto();
			})

		});//end ready
	</script>
</head>
<body>

<div id="wrap">
	<div id="banner">
		<ul>
			<li class="_1"><img src="http://www.innisfree.cn/upload/mainbanner/1869386170698848mainBanner.jpg" alt=""></li>
			<li class="_2"><img src="http://www.innisfree.cn/upload/mainbanner/1869386170698848mainBanner.jpg" alt=""></li>
			<li class="_3"><img src="http://www.innisfree.cn/upload/mainbanner/1869386170698848mainBanner.jpg" alt=""></li>
		</ul>
	</div>
	<div id="b_bt">
		<a href="#" class="left"></a>
		<a href="#" class="right"></a>
	</div>
</div>

</body>

</html>
