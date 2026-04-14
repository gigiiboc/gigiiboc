<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/note/note_js_plugin/slick/slick.css">
	<script src="/note/note_js_plugin/slick/slick.min.js"></script>
	<script src="/note/note_js_plugin/inview/jquery.inview.js"></script>
</head>
<body>
<div class="img-wrap" style="width:50px;height:50px;background:#000;position:absolute;top:0;left:0;">
</div>
<script>
    var idx=0;
    var end=3;
    setInterval(function(){
        idx==end? idx=0 : idx++;
        $('.img-wrap').animate({left:idx+'%'},1000);
    },1000)
</script>
</body>
</html>