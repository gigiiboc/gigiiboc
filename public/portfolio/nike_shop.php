<!doctype html>
<html><head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/note/resource/css/common.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<style type="text/css">
#wrap {width:100%;overflow:hidden;position:relative;color:#fff;}
#wrap #front1 {background:#333;text-align:center;}
#wrap #front2 {background:#fa5400;text-align:center;width:100%;position:absolute;top:0;right:-100%;}
#wrap #front3 {background:#c7282d;text-align:center;width:100%;position:absolute;top:0;right:-100%;}
.list_button {padding:10px;position:absolute;right:20px;top:20px;display:block;background:#fff;color:#333;cursor:pointer;}
.prev_button {padding:10px;position:absolute;left:20px;top:20px;display:block;background:#fff;color:#333;cursor:pointer;}
.icon_button {padding:10px;position:absolute;right:50%;margin-right:-28px;top:30%;display:block;background:#fff;color:#333;cursor:pointer;}
</style>

<div id="wrap">
	<div id="front1">
		<p style="padding:200px 0">지도</p>
		<span class="list_button" onclick="openList();">목록</span>
		<span class="icon_button" onclick="openView();">아이콘</span>
	</div>		
	<div id="front2">
		<p style="padding:250px 0">목록</p>
		<span class="list_button" onclick="openList();">지도</span>
		<span class="icon_button" onclick="openView();">상세</span>
	</div>
	<div id="front3">
		<p style="padding:300px 0">상세</p>
		<span class="prev_button" onclick="openView();">이전</span>
	</div>
</div>

<script type="text/javascript">

	var indexCon = $("#front1");
	var listCon = $("#front2");
	var viewCon = $("#front3");
	var listHeight = $("#front2").outerHeight();
	var viewHeight = $("#front3").outerHeight();

	function openList (){ // 목록 <-> 지도
		if ($(listCon).hasClass("active") !== true){ // 목록이 가려졌을때
			$(listCon).addClass("active").animate({right:"0%"},400,"easeOutExpo",function(){
				$(indexCon).css("height",listHeight); // index 박스의 높이를 목록 높이로 바꾸고
			}); // 목록을 띄움.
		} else { // 목록이 노출했을때
			$(listCon).removeClass("active").animate({right:"-100%"},400,"easeOutExpo",function(){
				$(indexCon).css("height","auto"); // index 박스의 높이를 auto 값으로 바꾸고
			}); // 목록을 가림
		}
	}

	function openView (){ // 지도 <-> 상세, 목록 <-> 상세
		if ($(listCon).hasClass("active") !== true){ // 목록이 가려지고
			if ($(viewCon).hasClass("active") !== true){ // 상세도 가려졌을때
				$(viewCon).addClass("active").animate({right:"0%"},400,"easeOutExpo",function(){
					$(indexCon).css("height",viewHeight); // index 박스의 높이를 상세 높이로 바꾸고
				}); // 상세를 띄움
			} else { // 상세는 노출됐을때				
				$(viewCon).removeClass("active").animate({right:"-100%"},400,"easeOutExpo",function(){
					$(indexCon).css("height","auto"); // index 박스의 높이를 auto 값으로 바꾸고
				}); // 상세를 가림
			}
		} else { // 목록이 노출했고
			if ($(viewCon).hasClass("active") !== true){ // 상세는 가려졌을때
				$(viewCon).addClass("active").animate({right:"0%"},400,"easeOutExpo",function(){		
					$(indexCon).css("height",viewHeight); // index 박스의 높이를 상세 높이로 바꾸고
					$(listCon).css("height",viewHeight); // 목록 박스의 높이를 상세 높이로 바꾸고
				}); // 상세를 노출
			} else { // 상세가 띄워졌을때
				$(viewCon).removeClass("active").animate({right:"-100%"},400,"easeOutExpo",function(){
					$(indexCon).css("height",listHeight); // index 박스의 높이를 목록 높이로 바꾸고
					$(listCon).css("height",listHeight); // 목록 박스의 높이를 목록 높이로 바꾸고
				}); // 상세를 가림
			}
		}
	}
</script>

		






</body>
</html>