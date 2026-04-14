<!DOCTYPE html>
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
<style>
body {min-height:3000px;}
#header .mobile-open {position:absolute; /*top:50%; margin-top:-12px;*/ top:25px; left:15px; width:25px; height:24px; padding:5px; display:block; cursor:pointer; transition:0.3s; -webkit-transition:0.3s; -moz-transition:0.3s; -o-transition:0.3s; z-index:3; box-sizing:content-box}
#header.mb .mobile-open {background:#125aac; position:fixed;}
#header .mobile-open .line {z-index:2; width:25px; height:24px; }
#header .mobile-open span {position:absolute; height:4px; width:25px; background:#3378c1; left:5px; border-radius:3px; transition:0.3s; -webkit-transition:0.3s; -moz-transition:0.3s; -o-transition:0.3s;}
#header .mobile-open .line1 {top:7px}
#header .mobile-open .line2 {top:15px}
#header .mobile-open .line3 {top:23px}
#header.mb .mobile-open span {/*background:#0B50A1;*/background:#fff;}
#header.mb .mobile-open .line1 {
	transform:translateY(8px) rotate(405deg);
	-webkit-transform:translateY(8px) rotate(405deg);
	-ms-transform:translateY(8px) rotate(405deg);
	-moz-transform:translateY(8px) rotate(405deg);
	-o-transform:translateY(8px) rotate(405deg);
}
#header.mb .mobile-open .line2 {opacity:0}
#header.mb .mobile-open .line3 {
	transform:translateY(-8px) rotate(-405deg);
	-webkit-transform:translateY(-8px) rotate(-405deg); 
	-ms-transform:translateY(-8px) rotate(-405deg); 
	-moz-transform:translateY(-8px) rotate(-405deg); 
	-o-transform:translateY(-8px) rotate(-405deg);
}
#header .mobile-nav {display:block; position:fixed; left:-100%; top:0; width:100%; min-width:200px; max-width:300px; height:100%; background:#fff; overflow-y:auto; z-index:2;}
#header .mobile-bg {display:none; width:100%; height:100%; position:fixed; top:0; left:0; right:0; bottom:0; z-index:1;
background: linear-gradient(top,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.8) 100%);
background: -moz-linear-gradient(top,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.8) 100%);
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.8) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.8) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc000000', endColorstr='#cc000000',GradientType=0 );}
</style>

<div id="header">
	<div class="header-box">
		<div class="mobile-open">
			<span class="line1"></span>
			<span class="line2"></span>
			<span class="line3"></span>
		</div>
		<div class="mobile-nav"></div>
		<div class="mobile-bg"></div>
	</div>
</div>

<script>
$(document).ready(function(){ // mobile nav
	var menu = false;
	var bottun = $(".mobile-open");

	$(bottun).click(function(){
		if(menu == false){
			$("#header").addClass("mb");
			$(".mobile-nav, .mobile-nav > div").stop().animate({left:"0px"},300);
			$(".mobile-bg").stop().fadeIn(300);
			menu = true;
		}else{			
			$("#header").removeClass("mb");
			$(".mobile-nav, .mobile-nav > div").stop().animate({left:"-100%"},300);
			$(".mobile-bg").stop().fadeOut(300);
			menu = false;
		}
	});
});
</script>
</body>
</html>
