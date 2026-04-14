<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<style type="text/css"> 
		.ctt{display:none;background: #d1d1d1;text-align: center;padding: 100px;}
	</style>

	<a href="https://whweb.cafe24.com/note/parameter/index.php?category=1">피라미터1</a>
	<a href="https://whweb.cafe24.com/note/parameter/index.php?category=2">피라미터2</a>
	<a href="https://whweb.cafe24.com/note/parameter/index.php?category=3">피라미터3</a>

	<div class="ctt ctt01">콘텐츠1</div>
	<div class="ctt ctt02">콘텐츠2</div>
	<div class="ctt ctt03">콘텐츠3</div>
	<script type="text/javascript">
		const url = new URL(window.location.href);
		const urlParams = url.searchParams;

		if (urlParams.has('category')){
			if(urlParams.get('category') == '1'){
				$('.ctt01').show();
			} else if (urlParams.get('category') == '2'){
				$('.ctt02').show();
			} else if (urlParams.get('category') == '3'){
				$('.ctt03').show();
			} else {
				$('.ctt01').show();			
			}
		}
	</script> 
</body>
</html>
