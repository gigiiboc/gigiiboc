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
<script>
	var nowTime = new Date(), // 현재 한국시간
		aTime = new Date(9999, 0, 1, 0, 0, 0), // 한국 9999년 1월 1일 0시 0분 0초
		bTime = new Date(9999, 0, 1, 0, 0, 0), // 한국 9999년 1월 1일 0시 0분 0초
		cTime = new Date(9999, 0, 1, 0, 0, 0), // 한국 9999년 1월 1일 0시 0분 0초
		dTime = new Date(9999, 0, 1, 0, 0, 0), // 한국 9999년 1월 1일 0시 0분 0초

		get_nowTime = nowTime.getTime(),
		get_aTime = aTime.getTime(),
		get_bTime = bTime.getTime(),
		get_cTime = cTime.getTime(),
		get_dTime = dTime.getTime();

	$(document).ready(function(){

		if (nowTime >= get_dTime){
			alert('d')
		} else if (nowTime >= get_cTime){
			alert('c')
		} else if (nowTime >= get_bTime){
			alert('b')
		} else if (nowTime >= get_aTime){
			alert('a')
		} else {
			alert('now')
		}
	})
</script>
</body>
</html>