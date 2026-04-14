<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=1100"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>

</head>
<body>
<style>
#wrapper {height:950px}
</style>

<div id="wrapper"></div>

<script>
	$(function(){
		$("#wrapper").click(function(){
			if ($(this).height() < 940){
				$(this).css({
					height: $(this).height()+1
				})
			} else if ($(this).height() > 940){
				$(this).css({
					height: $(this).height()-1
				})
			} else {					
				alert("높이가 같습니다.")
			}
		})		
	})	

/*
	$(function(){
		$("#wrapper").click(function(){
			if ($(this).height() < "940px"){
				$(this).css({
					height: $(this).height()+1
				})
			} else if ($(this).height() > "940px"){
				$(this).css({
					height: $(this).height()-1
				})
			} else {
				alert("높이가 n같습니다.")
			}
		})		
	})	
*/

/*
	$(function (){		
		var wh = $(window).height();	
		$("#wrapper").css({
			height:wh
		});
	})
*/

</script> 




</body>
</html>