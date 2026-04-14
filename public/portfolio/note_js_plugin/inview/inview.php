<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<script src="/gigiiboc/portfolio/note_js_plugin/inview/jquery.inview.js"></script>
	<div class="video_section" style="height:2000px;background:#000;" data-target="1"></div>
	<div class="video_section" style="height:2000px;background:#333;" data-target="2"></div>
	<div class="video_section" style="height:2000px;background:#666;" data-target="3"></div>
	<div class="video_section" style="height:2000px;background:#999;" data-target="4"></div>
	<script type="text/javascript">
		$(function(){
			$('.video_section').on('inview', function(event, isInView) {
				if (isInView) {
					console.log($(this).attr('data-target') + ' on')
				} else {
					console.log($(this).attr('data-target') + ' off')
				}
			});
		});
	</script>
</body>
</html>