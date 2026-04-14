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
.header {position:relative;width:990px;margin:0 auto;}
.header ul li {float:left;width:100px;text-align:center;}
.header ul li a {display:block;padding:10px 0}
.header ul li ul {opacity:0}
.header span.bd {opacity:0;position:absolute;top:30px;left:0px;width:100px;border-bottom:1px solid #333}
.header span.bd.on {}

</style>

<div class="header">
	<ul class="nav">
		<li><a href="">메뉴1</a>
			<ul>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
			</ul>
		</li>
		<li><a href="">메뉴2</a>
			<ul>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
			</ul>
		</li>
		<li><a href="">메뉴3</a>
			<ul>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
			</ul>
		</li>
		<li><a href="">메뉴4</a>
			<ul>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
			</ul>
		</li>
		<li class="active"><a href="">메뉴5</a>
			<ul>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
				<li>메뉴</li>
			</ul>
		</li>
	</ul>
	<span class="bd"></span>
</div>

<script>
$(function(){

	var acPosi = $(".nav > li.active").position();
	var bg = $(".bd")
	    
	/*
	$(window).load(function(){
		$('.bd').animate({left:acPosi.left,"opacity":0},400,"easeInOutCubic")
    });
    */

	$(".nav > li").mouseenter(function(){

        var focus = $(this).position()
		var sub = $(this).children("ul")

		sub.stop().animate({"opacity":1},200,"easeInOutCubic")
		bg.stop().animate({left:focus.left,"opacity":1},200,"easeInOutCubic")
		$(this).addClass("on");		
    });
    
	$(".nav > li").mouseleave(function(){

        var focus = $(this).position()
		var sub = $(this).children("ul")

    	sub.stop().animate({"opacity":0},400,"easeInOutCubic")
		bg.stop().animate({/*left:acPosi.left,*/"opacity":0},200,"easeInOutCubic")
		$(this).removeClass("on");
    });
});
</script>

</body>
</html>