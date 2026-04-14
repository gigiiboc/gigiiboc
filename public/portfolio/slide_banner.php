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
		#wrap{width:900px;position:relative;margin:0 auto;}
		#banner {width:100%;height:45px;overflow:hidden;position:relative;}
		#banner ul {position:absolute;left:0;top:0;}
		#banner ul li {float:left;}
		#b_bt .left {position:absolute;width:10px;height:10px;background:#333;left:-20px;top:50%;margin-top:-5px;;}
		#b_bt .right {position:absolute;width:10px;height:10px;background:#333;right:-20px;top:50%;margin-top:-5px;;}
	</style>
	<script>
		$(document).ready(function(){	
			var eleWidth = $('#banner ul li').width() // li의 width 값
			var eleIndex= $('#banner ul li').length // li의 갯수값
			var isOn = true; // left, right 연속 클릭방지 변수
			
			$("#banner ul").width(eleWidth*eleIndex)
			
			// left 함수 정의
			function right(){
				if(!isOn){
					$('#banner ul').stop().animate({left:eleWidth*-1},500,'swing',function(){
						$(this).children('li:first').insertAfter($(this).children('li:last'));
						$(this).css({left:0});
						isOn = true;
					});	
				}
			}

			// right 함수 정의
			function left(){
				if(!isOn){					
					$('#banner ul li:last').insertBefore($('#banner ul li:first'));
					$('#banner ul').css({left:eleWidth*-1});
					$('#banner ul').stop().animate({left:0},500,'swing',function(){
						$(this).css({left:0});
						isOn = true;
					});
				}
			}

			// left click event
			$(".left").click(function(){
				if(isOn){
					isOn = false;
					left();	// 왼쪽으로 움직이는 메서드 호출
				}
			});

			// right click event
			$(".right").click(function(){
				if(isOn){
					isOn = false;
					right();
				}
			});

			setInterval(function(){
				if(isOn){
					isOn = false;
					left();	// 왼쪽으로 움직이는 메서드 호출
				}
			},2000)
		});//end ready
	</script>
</head>
<body>



<div id="wrap">
	<div id="banner">
		<ul>
			<li class="_1"><a href="#"><span style="display:block;background:#333;width:300px;height:100px;"></span></a></li>
			<li class="_2"><a href="#"><span style="display:block;background:#999;width:300px;height:100px;"></span></a></li>
			<li class="_3"><a href="#"><span style="display:block;background:#333;width:300px;height:100px;"></span></a></li>
			<li class="_4"><a href="#"><span style="display:block;background:#999;width:300px;height:100px;"></span></a></li>
			<li class="_5"><a href="#"><span style="display:block;background:#333;width:300px;height:100px;"></span></a></li>
			<li class="_4"><a href="#"><span style="display:block;background:#999;width:300px;height:100px;"></span></a></li>
		</ul>
	</div>
	<div id="b_bt">
		<a href="#" class="left"></a>
		<a href="#" class="right"></a>
	</div>
</div>

</body>

</html>
