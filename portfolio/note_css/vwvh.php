<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<div style="width:20vw;height:20vh;background:#000;color:#fff">20vh, 20vw는 스크롤바를 포함한 뷰포트 기준의 20%이다.</div>
	<div style="width:20vmin;height:20vmin;background:#666;color:#fff">20vmin는 스크롤바를 포함한 뷰포트 기준의 width와 hieght 중 낮은 수치 기준의 20%이다.</div>
	<div style="width:20vmax;height:20vmax;background:#000;color:#fff">20vmax는 스크롤바를 포함한 뷰포트 기준의 width와 hieght 중 큰 수치 기준의 20%이다.</div>
	<div style="width:20%;height:20%;background:#666;color:#fff">%는 스크롤바를 포함하지 않은 20%이다.(상위 태그가 높이값을 가지고 있어야만 함)</div>
	<div style="width:calc( 20% + 10px );height:calc( 20% + 10px );background:#000;color:#fff">calc는 합산수치 지정이 가능하다. 예 calc( 10px + 10px )</div>
</body>
</html>