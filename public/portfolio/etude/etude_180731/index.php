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
<link rel="stylesheet" type="text/css" href="./style.css">
<div id="event">
	<div class="sec1">
		<img src="./images/sec1.jpg" alt="" />
		<a href="#none" class="popup_link" onclick="vote()">소중한 한 표 참여하기</a>
		<div class="popup" id="votePopup">
			<span></span>
			<!-- 초기값이 동등할 경우 기본 배경 -->
			<div>
				<!-- 초기값이 왼쪽이 높을 경우 노출 -->
				<span class="leftWin"></span>
				<!-- 초기값이 오른쪽이 높을 경우 노출 -->
				<span class="rightWin"></span>
				<!-- 왼쪽에 투표했을 경우 노출 -->
				<span class="leftVote"></span>
				<!-- 오른쪽에 투표했을 경우 노출 -->
				<span class="rightVote"></span>
				<!-- 왼쪽값 투표 -->
				<span id="leftValue" class="leftValue"></span>
				<!-- 오른쪽값 투표 -->
				<span id="rightValue" class="rightValue"></span>
				<!-- 왼쪽 투표 -->
				<a href="#none" id="voteBtnleft" class="voteBtnleft" onclick="voteLeft()" alt="" />1투표하기</a>
				<!-- 오른쪽 투표 -->
				<a href="#none" id="voteBtnRight" class="voteBtnRight" onclick="voteRight()" alt="" />2투표하기</a>
				<!-- 팝업 닫기 -->
				<a href="#none" class="close" onclick="onoff('#votePopup')" alt="" />닫기</a>
				<!-- 투표완료 팝업 -->
				<span class="VoteComplete">				
					<a href="#none" class="close" onclick="onoff('#votePopup')" alt="" />닫기</a>
				</span>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var leftValue = 2
		rightValue = 3;

	function compare (){
		if (leftValue > rightValue){
			$('#votePopup').removeClass('rightWin').addClass('leftWin')
			$('#leftValue').html(leftValue)
			$('#rightValue').html(rightValue)
		} else if (leftValue < rightValue){
			$('#votePopup').removeClass('leftWin').addClass('rightWin')
			$('#leftValue').html(leftValue)
			$('#rightValue').html(rightValue)
		} else {
			$('#votePopup').removeClass('leftWin rightWin')	
			$('#leftValue').html(leftValue)
			$('#rightValue').html(rightValue)	
		}
	}

	function vote (){
		onoff('#votePopup')
		compare()
	}
	function voteLeft (){
		leftValue ++;
		compare()
		$('#votePopup').removeClass('rightVote').addClass('leftVote VoteComplete')
	}
	function voteRight (){
		rightValue ++;
		compare()
		$('#votePopup').removeClass('leftVote').addClass('rightVote VoteComplete')
	}

	// 팝업 열고닫기 토글
	function onoff (target){
		if ($(target).css('display') == 'none'){
			$(target).show()
		}  else {
			if (target == '#votePopup'){
				$(target).removeClass('leftWin rightWin leftVote rightVote VoteComplete')
			}
			$(target).hide()
		}
	}
</script>
</body>
</html>