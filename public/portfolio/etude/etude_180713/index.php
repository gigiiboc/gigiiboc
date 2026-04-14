<!DOCTYPE HTML>
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
<style type="text/css">
	#event {position:relative; width:1024px; margin:0px auto; overflow:hidden}
	.sec1,
	.sec2,
	.sec3,
	.sec4 {position:relative;width:100%;}
	.sec1 > img,
	.sec2 > img,
	.sec3 > img,
	.sec4 > img {width:100%;display:block;}

	.link_1 {text-indent: -9999px;display: block;position: absolute;position: absolute;top: 86.9%;left: 21.7%;width: 56.6%;height: 0;padding-top: 8.9%;}
	.link_2 {text-indent: -9999px;display: block;position: absolute;top: 78.2%;right: 11.3%;width: 27%;height: 0;padding-top: 6.1%;}
	.video_link_1 {text-indent: -9999px;display: block;position: absolute;top: 74.8%;left: 36.5%;width: 27%;height: 0;padding-top: 6.1%;}
	.video_link_2 {text-indent: -9999px;display: block;position: absolute;top: 95.4%;left: 54.9%;width: 27%;height: 0;padding-top: 6.1%;}

	.popup_link {position: absolute;bottom: 1.7%;left: 25.5%;width: 49.7%;padding-top: 10.4%;height: 0;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;}
	.popup {display:none}
	.popup > span {position:absolute;top:0;left:0;width:100%;height:100%;display:block;background:#000;opacity:0.65;filter:alpha(opacity:'65');z-index:99999}
	.popup > div {position: absolute;bottom:10%;left: 27.197%;z-index: 2;max-width: 468px;width: 45.706%;z-index:99999}
	.popup > div > img {width:100%;}
	.popup > div > .close {position:absolute;top:0;right:0;display:block;width:10%;height: 0;padding-top: 10%;background:#000;opacity:0;filter:alpha(opacity:'0');z-index:1}
	.popup > div > .question_1 {display: block;overflow: hidden;position: absolute;bottom: 16.4%;left: 50%;width: 80%;height: 0;padding-top: 4.5%;margin-left: -40%;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;z-index: 1;}
	.popup > div > .question_2 {display: block;overflow: hidden;position: absolute;bottom: 10.4%;left: 50%;width: 80%;height: 0;padding-top: 4.5%;margin-left: -40%;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;z-index: 1;}
	.popup > div > .question_3 {display: block;overflow: hidden;position: absolute;bottom: 4.4%;left: 50%;width: 80%;height: 0;padding-top: 4.5%;margin-left: -40%;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;z-index: 1;}
	.popup > div > .nextBtn {display: block;overflow: hidden;position: absolute;bottom: 5.4%;left: 17.4%;width: 62.7%;height: 0;padding-top: 13.3%;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;z-index: 1;}
	.popup > div > .resetBtn {display: block;overflow: hidden;position: absolute;bottom: 5.4%;left: 17.4%;width: 62.7%;height: 0;padding-top: 13.3%;background: #000;opacity: 0;filter: alpha(opacity:'0');text-indent: -9999px;z-index: 1;}
	.popup > div > .videoArea {display: block;overflow: hidden;position: absolute;top: 0;left: 10%;width: 80%;padding-top: 44.8%;}
	.popup > div > .videoArea iframe {position: absolute;top: 0;left: 0;}

	#quiz2 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz3 > div > .videoArea {position: absolute;top: 28%;left: 4.1%;width: 88.8%;padding-top: 50.1%;}
	#quiz4 > div > .videoArea {position: absolute;top: 28%;left: 4.1%;width: 88.8%;padding-top: 50.1%;}
	#quiz6 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz7 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz8 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz10 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz11 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
	#quiz12 > div > .videoArea {position: absolute;top: 27.8%;left: 23.1%;width: 50.8%;padding-top: 50.9%;}
</style>
<div id="event">
	<div class="sec1">
		<img src="/gigiiboc/portfolio/etude/etude_180713/images/index.jpg" alt="" />
		<a href="#none" class="popup_link" onclick="onoff('#quiz1')">문제풀기</a>

		<!-- O 팝업 -->
		<div class="popup" id="true_popup">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/true_popup.png" alt="" />
				<a href="#none" class="nextBtn" onclick="nextQuiz()" alt="" />다음 문제 풀기</a>
				<a href="#none" class="close" onclick="quizClose('#true_popup')" alt="" />닫기</a>
			</div>
		</div>
		<!-- X 팝업 -->
		<div class="popup" id="false_popup">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/false_popup.png" alt="" />
				<a href="#none" class="resetBtn" onclick="quizReset()" alt="" />처음부터 풀기</a>
				<a href="#none" class="close" onclick="quizClose('#false_popup')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈1 -->
		<div class="popup" id="quiz1">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz1.png" alt="" />
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz1')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈2 -->
		<div class="popup" id="quiz2">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz2.png" alt="" />
				<div class="videoArea">
					<div id="player0" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz2')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈3 -->
		<div class="popup" id="quiz3">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz3.png" alt="" />
				<div class="videoArea">
					<div id="player1" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz3')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈4 -->
		<div class="popup" id="quiz4">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz4.png" alt="" />
				<div class="videoArea">
					<div id="player2" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz4')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈5 -->
		<div class="popup" id="quiz5">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz5.png" alt="" />
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz5')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈6 -->
		<div class="popup" id="quiz6">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz6.png" alt="" />
				<div class="videoArea">
					<div id="player3" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz6')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈7 -->
		<div class="popup" id="quiz7">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz7.png" alt="" />
				<div class="videoArea">
					<div id="player4" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz7')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈8 -->
		<div class="popup" id="quiz8">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz8.png" alt="" />
				<div class="videoArea">
					<div id="player5" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz8')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈9 -->
		<div class="popup" id="quiz9">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz9.png" alt="" />
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz9')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈10 -->
		<div class="popup" id="quiz10">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz10.png" alt="" />
				<div class="videoArea">
					<div id="player6" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz10')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈11 -->
		<div class="popup" id="quiz11">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz11.png" alt="" />
				<div class="videoArea">
					<div id="player7" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz11')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 퀴즈12 -->
		<div class="popup" id="quiz12">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/quiz12.png" alt="" />
				<div class="videoArea">
					<div id="player8" class="vodplayer"></div>
				</div>
				<a href="#none" class="question_1" onclick="quizCheck('1')">보기1</a>
				<a href="#none" class="question_2" onclick="quizCheck('0')">보기2</a>
				<a href="#none" class="question_3" onclick="quizCheck('0')">보기3</a>
				<a href="#none" class="close" onclick="quizClose('#quiz12')" alt="" />닫기</a>
			</div>
		</div>
		<!-- 응모완료 팝업 -->
		<div class="popup" id="coupon">
			<span></span>
			<div>
				<img src="/gigiiboc/portfolio/etude/etude_180713/images/coupon.png" alt="" />
				<a href="#none" class="close" onclick="quizClose('#coupon')" alt="" />닫기</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	/* Youtube 변수선언
	var players = new Array();
	var playerInfoList = [
		{id:'player0', controls:'0', autohide:'1', videoId:'mowRaPWLN7g'},
		{id:'player1', controls:'0', autohide:'1', videoId:'PQuuQ3mXjrc'},
		{id:'player2', controls:'0', autohide:'1', videoId:'EH_G-zmZIjw'},
		{id:'player3', controls:'0', autohide:'1', videoId:'qgnVZraEKZc'},
		{id:'player4', controls:'0', autohide:'1', videoId:'agJ97AKNGiE'},
		{id:'player5', controls:'0', autohide:'1', videoId:'BROfh1YXgvU'},
		{id:'player6', controls:'0', autohide:'1', videoId:'051UwnfCYvs'},
		{id:'player7', controls:'0', autohide:'1', videoId:'0lmfcuniSuQ'},
		{id:'player8', controls:'0', autohide:'1', videoId:'BP4J5_wI26E'}
	];

	// Youtube API 생성
	function loadYT(){
		var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		window.onYouTubeIframeAPIReady = function(){
			if (typeof playerInfoList === 'undefined') return;
			for (var i = 0; i < playerInfoList.length; i++) {
				var curplayer = createPlayer(playerInfoList[i]);
				players[i] = curplayer;
			}
		}
	};
	function createPlayer(playerInfo) {
		return new YT.Player(playerInfo.id, {
			width: '100%',
			height: '100%',
			videoId: playerInfo.videoId,
			wmode: 'transparent',
			playerVars: {
				autoplay: 0,
				autohide: 1,
				controls: 1,
				showinfo: 0,
				rel: 0,
				modestbranding: 1,
				wmode: 'transparent'
			}
		});
	}

	// 영상정지
	function stopVideo(){
		for(var i = 0; i < players.length; i++){
			players[i].stopVideo();
		}
	}
	loadYT();
	*/

	// 회원 정답 카운트
	var trueCount = 1;

	// 오답체크
	var Check = true
	function quizCheck(e){
		if (String(e) == '1'){
			if (trueCount >= 12){
				onoff('#coupon')
			} else {
				onoff('#true_popup')
				trueCount ++				
			}
		} else {
			onoff('#false_popup')
			trueCount = 1
		}
		//stopVideo();
	}

	// 이어서 풀기
	function nextQuiz(){
		onoff('#quiz' + String(trueCount))
	}

	// 다시 풀기
	function quizReset(){
		trueCount = 1
		onoff('#quiz' + String(trueCount))
	}

	// 퀴즈팝업 닫기
	function quizClose (target){
		trueCount = 1
		onoff(target)			
		//stopVideo();
	}

	// 팝업 열고닫기 토글
	function onoff (target){
		if ($(target).css('display') == 'none'){
			$('.popup').hide()
			$(target).show()
		} else {
			$(target).hide()	
		}
	}
</script>
</body>
</html>