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

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

<div id="foo">value<br>="asdasd"</div>
<span class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copy to clipboard</span>

<script>
	var clipboard = new Clipboard('.btn');
	clipboard.on('success', function(e){
		alert('클립보드에 복사되었어요!')
	});
	clipboard.on('error', function(e){
		alert('선택된 영역을 복사해 주세요!')
	});
</script>


</body>

</html>
