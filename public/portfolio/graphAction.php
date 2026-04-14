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
		.myProgress {width: 100%;height: 30px;position: relative;background-color: #ddd;margin:5px 0}
		.myBar {display:block;background-color: #4CAF50;width: 0;height: 30px;position: absolute;}
	</style>
	<script>

		function move (t, n){
			for (var i=0; i<=n/2; i++){
				n%2 == 1 ? t.animate({width:i*2+1+'%'},10) : t.animate({width:i*2+'%'},10);
			}
		}

		$(window).load(function(){ // 로드시 액션
			var item = $(".auto");
			var itemLength = item.length;

			for (var leng=0; leng<itemLength; leng++){
				var tar = item.eq(leng).find('.myBar') // 타겟
				var tarNumber = Number(tar.attr('data-target')) // 게이지
				
				move(tar, tarNumber) // 타겟과 게이지 반환			
			}
		})

		function click_move (e){ // 클릭시 액션
			var tar = $(e).find('.myBar') // 타겟
			var tarNumber = Number(tar.attr('data-target')) // 게이지
			
			move(tar, tarNumber) // 타겟과 게이지 반환
		}

		function alert_move (e){ // alert 액션
			var tar = $(e).find('.myBar') // 타겟
			var tarNumber = Number(prompt("숫자를 입력해주세요.")) // 입력

			tar.attr('data-target', tarNumber)
			move(tar, tarNumber) // 타겟과 게이지 반환
		}
	</script>
</head>
<body>

<p class="myProgress auto">
  <span class="myBar bar" data-target="70"></span>
</p>
<p class="myProgress auto">
  <span class="myBar bar" data-target="100"></span>
</p>
<p class="myProgress" onclick="click_move(this)">
  <span class="myBar bar" data-target="99"></span>
</p>
<p class="myProgress" onclick="click_move(this)">
  <span class="myBar bar" data-target="98"></span>
</p>
<p class="myProgress" onclick="alert_move(this)">
  <span class="myBar bar" data-target="98"></span>
</p>



</body>
</html>
