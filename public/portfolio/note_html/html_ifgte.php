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
	body {font-size:14px;line-height:1.6;margin:80px auto;max-width:600px;}
	form fieldset {border:1px solid #d1d1d1}
	form div {border:1px solid #d1d1d1;margin:10px;padding:30px;}
	form div h2 {font-weight:bold;font-size:1.2em;margin-bottom: 30px;}
	form div p {font-size: 0.9em;margin-top: 9px;}
	form div p span {color: red;}
	.tip {padding:30px;}
	.tip ul {display: block;list-style: disc;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;-webkit-padding-start: 40px;}
	.tip ul li {display: list-item;list-style: disc;text-align: -webkit-match-parent;}
	.tip p {}
</style>
</head>
<body>

	<div class="tip">
		<h2>특정 브라우저에만 적용시키는 조건문</h2>
		<ul>
			<li>if IE 9  = IE 9 버전 브라우저에만 적용된다 </li>
			<li>if gt IE 9  = IE 9 버전 초과 브라우저에만 적용된다.</li>
			<li>if gte IE 9 = IE 9 버전 이상 브라우저에만 적용된다.</li>
			<li>if lt IE 9 = IE 9 버전 미만 브라우저에만 적용된다.</li>
			<li>if lte IE 9 =  IE 9 버전 이하 브라우저에만 적용된다.</li>
		</ul>
		<p>
			<br>
			사용법)<br><br>		
			{!--[if IE 9]}<br>
			표시하고 싶은 내용<br>
			{![endif]--}<br>
			풀이) 익스플로러 9버전에서만 출력
		</p>
	</div>



</body>
</html>
