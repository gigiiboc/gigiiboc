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

<div id="intro">
	<ul>
		<li class="first"><a href="introduction.php"><i class="fa fa-quote-right"></i>introduction</a></li>
		<li class="second"><a href="web.php"><i class="fa fa-quote-right"></i>portfolio</a></li>
		<li class="third"><a href="/bbs/board.php?bo_table=contact"><i class="fa fa-quote-right"></i>contact</a></li>	
		<li class="fourth"><a href="/bbs/board.php?bo_table=webtip"><i class="fa fa-quote-right"></i>webtip</a></li>
	</ul>
</div>

<style>

#intro {width:600px; padding:80px; text-align:center; background:#fff}
#intro li {float:left; width:25%;}
#intro li.first {
	animation:load 1s ease 0.3s backwards;
	-webkit-animation:load 1s ease 0.3s backwards;
	-moz-animation:load 1s ease 0.3s backwards;
	-o-animation:load 1s ease 0.3s backwards;
	-ms-animation:load 1s ease 0.3s backwards;
}
#intro li.second {
	animation:load 1s ease 0.4s backwards;
	-webkit-animation:load 1s ease 0.4s backwards;
	-moz-animation:load 1s ease 0.4s backwards;
	-o-animation:load 1s ease 0.4s backwards;
	-ms-animation:load 1s ease 0.4s backwards;
}
#intro li.third {
	animation:load 1s ease 0.5s backwards;
	-webkit-animation:load 1s ease 0.5s backwards;
	-moz-animation:load 1s ease 0.5s backwards;
	-o-animation:load 1s ease 0.5s backwards;
	-ms-animation:load 1s ease 0.5s backwards;
}
#intro li.fourth {
	animation:load 1s ease 0.6s backwards;
	-webkit-animation:load 1s ease 0.6s backwards;
	-moz-animation:load 1s ease 0.6s backwards;
	-o-animation:load 1s ease 0.6s backwards;
	-ms-animation:load 1s ease 0.6s backwards;
}

@keyframes load {
	0% {
	-webkit-transform:scale(0);
	-moz-transform:scale(0);
	-o-transform:scale(0);
	-ms-transform:scale(0);
	transform:scale(0);
	}
	100% {
	-webkit-transform:scale(1);
	-moz-transform:scale(1);
	-o-transform:scale(1);
	-ms-transform:scale(1);
	transform:scale(1);
	}
}
@-o-keyframes load {
	0% {
	-webkit-transform:scale(0);
	-moz-transform:scale(0);
	-o-transform:scale(0);
	-ms-transform:scale(0);
	transform:scale(0);
	}
	100% {
	-webkit-transform:scale(1);
	-moz-transform:scale(1);
	-o-transform:scale(1);
	-ms-transform:scale(1);
	transform:scale(1);
	}
}
@-moz-keyframes load {
	0% {
	-webkit-transform:scale(0);
	-moz-transform:scale(0);
	-o-transform:scale(0);
	-ms-transform:scale(0);
	transform:scale(0);
	}
	100% {
	-webkit-transform:scale(1);
	-moz-transform:scale(1);
	-o-transform:scale(1);
	-ms-transform:scale(1);
	transform:scale(1);
	}
}
@-webkit-keyframes load {
	0% {
	-webkit-transform:scale(0);
	-moz-transform:scale(0);
	-o-transform:scale(0);
	-ms-transform:scale(0);
	transform:scale(0);
	}
	100% {
	-webkit-transform:scale(1);
	-moz-transform:scale(1);
	-o-transform:scale(1);
	-ms-transform:scale(1);
	transform:scale(1);
	}
}

/*
animations 속성

animation:name \ duration \ timing-function \ delay \ iteration-count \ direction \ fill-mode | play-state;

animation-name: example; // 키프레임이름
animation-duration: 4s; // 1번 움직임에 걸리는 시간
animation-timing-function: ease; // 동작속성 > linear | ease | ease-in | ease-out | ease-in-out | setp-end(%별로 애니메이션을 끊어줌);}
animation-delay: 3s; // 시간 간격, 딜레이
animation-iteration-count: 3; // 움직임 횟수 > infinite=무한
animation-direction: reverse; // 추가속성 > reverse=반전 | alternate=교차
animation-fill-mode: none; // 모드설정 > none= | forwards(멈춤) | backwards | both | initial | inherit
animation-play-state: paused; // 스톱,재생설정 > paused=스톱 | running=재생


transform 속성

translate()
translate3d(x+px,y+px,z+px)
translateX(x+px)
translateY(y+px)
translateZ(z+px)

transform: translate(50%,50%);

rotateX(x+deg) // 가로폭 회전 | 90 이상시 반전됌
rotateY(y+deg) // 세로폭 회전 | 90 이상시 반전됌
rotateZ(z+deg) // 회전
rotate(+deg) // 회전

scaleX(x) // 가로 크기
scaleY(y) // 세로 크기
scale(x,y) // 가로|세로 크기
scale3d(x,y,z) // 가로|세로| 크기

skewX()
skewY()
*/
</style>


</div>

</body>
</html>
