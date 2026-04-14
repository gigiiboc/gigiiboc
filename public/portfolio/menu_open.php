<!DOCTYPE html>
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


<script>
$(document).ready(function(){
	var menu = false;
	var bottun = $(".top-open");

	$(bottun).click(function(){
		if(menu == false){
			$(this).css({
					transform:"rotate(360deg)",
					color:"#083352"
			});
			$("#gnb").stop().animate({top:50},"swing");
			menu = true;
		}else{			
			$(this).css({
					transform:"rotate(0deg)",
					color:"#999"
			});
			$("#gnb").stop().animate({top:-300},"swing");
			menu = false;
		}
	});
});

/*
$(document).ready(function() {

	var curQm = false;
	var bottun = $(".top-open");

	$(bottun).click(function(){
		if(curQm == false){
			$("#gnb").stop().animate({top : 50}, 500 , 'swing');
			curQm = true;
		}else{
			$("#gnb").stop().animate({top : -300}, 500 , 'swing');
			curQm = false;
		}
	});
});
*/

</script>


<style>
.top-open {margin:100px; cursor:pointer}
#gnb {position:absolute; top:-300px; left:300px;}
</style>

<div id="header">

	<div id="logo-bar">
		<div class="top-open fa fa-bars" onclick="javascript:menuopen()">클릭</div>
	</div>

	<ul id="gnb">
		<li><a href="/introduction.php" class="menu">introduction</a></li>
		<li class="activated">
			<a href="javascript:void(0);" class="menu">portfolio</a>
			<div class="sub-menu">
				<div>
					<ul>
						<li><a href="" class="selected">web</a></li>
						<li><a href="">mobile</a></li>
						<li><a href="">etc</a></li>
					</ul>
					<span class="bg"></span>
				</div>
			</div>
			<div class="mobile-menu">
				<ul>
					<li><a href="" class="selected">web</a></li>
					<li><a href="">mobile</a></li>
					<li><a href="">etc</a></li>
				</ul>
			</div>
		</li>			
		<li><a href="/bbs/board.php?bo_table=contact" class="menu">contact</a></li>			
		<li><a href="/bbs/board.php?bo_table=webtip" class="menu">webtip</a></li>
	</ul>
</div>


</body>
</html>
