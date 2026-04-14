<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>


<script type="text/javascript">
function intet (){
	var DOM_div = document.createElement('div'); // div 생성하여 DOM_div에 대입
	var DOM_dl = document.createElement('dl'); // dl 생성하여 DOM_dl에 대입
	var DOM_dt = document.createElement('dt'); // dt 생성하여 DOM_dt에 대입
	var DOM_dd = document.createElement('dd'); // dd 생성하여 DOM_dd에 대입

	DOM_div.appendChild(DOM_dl); // DOM_div 안에 DOM_dl 을 넣음
	DOM_dl.appendChild(DOM_dt); // DOM_dl 안에 DOM_dt 을 넣음
	DOM_dl.appendChild(DOM_dd); // DOM_dl 안에 DOM_dd 을 넣음

	var	whereIsDOM = document.getElementById("hereInDOM");
	whereIsDOM.appendChild(DOM_div);
}
</script>

<div><a href="#none" onclick="javascript:intet()">결과</a></div>

<div id="hereInDOM"></div>

</body>

</html>
