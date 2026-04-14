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
	<div id="text" style="font-size: 100vw;text-align: center;">김</div>
</body>
<script>
	var textEl = '김미후일찍자라';
	var length = textEl.length;
	var firstEl = 0;

	function textReturn (){
		if (firstEl < length){
			$('#text').html(textEl.charAt(firstEl))
			firstEl ++
		} else {
			firstEl = 0
			$('#text').html(textEl.charAt(firstEl))	
			firstEl ++
		}
	}
	setInterval(function(){textReturn()}, 500);
</script>
</html>