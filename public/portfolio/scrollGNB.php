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
	<style type="text/css">
		.Bby_wrap{position:relative;}		
		.Bby_wrap .Bby_tab{position: absolute;top: 500px;left: 0;width: 100%;background: #222;}
		.Bby_wrap .Bby_tab.fixed{top:0;position: fixed;}
		.Bby_wrap .Bby_tab ul{}
		.Bby_wrap .Bby_tab li{text-align: center;float: left;width: 33.33%;}
		.Bby_wrap .Bby_tab li a{color: #fff;display: block;padding: 20px 0;background: #222;}
		.Bby_wrap .Bby_tab li a.current,
		.Bby_wrap .Bby_tab li a:hover{    background: #555;}
		.Bby_wrap .Bby_tab li a span{}
		.Bby_wrap .Bby_logo{}
		.Bby_wrap #front{height: 500px;background: #fff;}
		.Bby_wrap #Bby_Lip{height: 2000px;background: #444;}
		.Bby_wrap #Bby_Eye{height: 2000px;background: #666;}
		.Bby_wrap #Bby_Face{height: 2000px;background: #888;}
	</style>
		<div class="Bby_wrap">
			<div class="Bby_tab">
				<ul>
					<li><a href="javascript:void(0);" data-target="#Bby_Lip" class="current"><span>Lip</span></a></li>
					<li><a href="javascript:void(0);" data-target="#Bby_Eye"><span>Eye</span></a></li>
					<li><a href="javascript:void(0);" data-target="#Bby_Face"><span>Face</span></a></li>
				</ul>
			</div>
			<div id="front"></div>
			<div id="Bby_Lip"></div>
			<div id="Bby_Eye"></div>
			<div id="Bby_Face"></div>
		</div>
	<script type="text/javascript">
		$(document).on('click', '.Bby_tab a', function(){
			$('html, body').animate({'scrollTop' : $($(this).attr('data-target')).offset().top},500);
			return false;
		});

		$(function(){
			var gnb = $('.Bby_tab'),
				gnbPo = gnb.offset().top,
				gnbH = $('.Bby_tab').outerHeight(),
				gnbMenu = $('.Bby_tab ul li'),
				gnbMenuLeng = gnbMenu.length;
			$(window).on('scroll', function(){
				for (var i=0; i<gnbMenuLeng; i++){
					if ($(gnbMenu.eq(gnbMenuLeng-1-i).find('a').attr('data-target')).offset().top - gnbH - 1 < $(window).scrollTop()){
						gnbMenu.find('a').removeClass('current')
						gnbMenu.eq(gnbMenuLeng-1-i).find('a').addClass('current')
						break
					} else {
						gnbMenu.eq(0).find('a').addClass('current')
					}
				}
				if ($(this).scrollTop() > gnbPo){
					gnb.addClass('fixed');
				} else {
					gnb.removeClass('fixed');
				}
			});
		});
	</script>
</body>
</html>