<!DOCTYPE HTML>
<html>
<head>
<title> Smoke free counter </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<link rel="apple-touch-icon" href="http://weedmind.com/smoke/smoke.png">
<meta name="apple-mobile-web-app-title" content="Smoke free">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<style>
body,section,h1,h2,p,input,button{margin:0;padding:0;}
body,input,button{font-family:'Helvetica Neue','AppleSDGothicNeo-Thin','Roboto Light','Helvetica-UltraLight';font-weight:100;-webkit-appearance:none;}
body{font-size:20px;color:#fff;text-shadow:0 -0.05em 0 rgba(0,0,0,0.1);line-height:0.8;background:#fff;overflow:hidden;transition:background 1s linear;-webkit-transition:background 1s linear;-moz-transition:background 1s linear;}
body.on{background:#3fbad9;}
em{font-style:normal;}
.i{position:fixed;left:0;top:50%;width:100%;visibility:hidden;transform:translate(0,-50%);-webkit-transform:translate(0,-50%);-moz-transform:translate(0,-50%);}
.i h1{font-weight:300;line-height:1;padding:0 20px;}
.i h1 span{font-size:inherit;white-space:nowrap;display:block;opacity:0;transform:translate3d(0,250px,0);-webkit-transform:translate3d(0,250px,0);-moz-transform:translate3d(0,250px,0);}
.i h1 em{color:#fbfd38;}
.i.show h1 span{transition:all 2s cubic-bezier(0.125,1,0.440,1.000);-webkit-transition:all 2s cubic-bezier(0.125,1,0.440,1.000);-moz-transition:all 2s cubic-bezier(0.125,1,0.440,1.000);}
.i.show h1 span+span{transition-delay:0.25s;}
.i.show h1 span+span+span{transition-delay:0.5s;}
.i.s h1 span{opacity:1;transform:translate3d(0,0.01px,0);-webkit-transform:translate3d(0,0.01px,0);-moz-transform:translate3d(0,0.01px,0);}
.i.d h1 span{opacity:0;transform:translate3d(0,-75px,0) scale(1,1.15);-webkit-transform:translate3d(0,-75px,0) scale(1,1.15);-moz-transform:translate3d(0,-75px,0) scale(1,1.15);transition:all 1.2s 0.8s cubic-bezier(0.550,0.085,0.680,0.530);-webkit-transition:all 1.2s 0.8s cubic-bezier(0.550,0.085,0.680,0.530);-moz-transition:all 1.2s 0.8s cubic-bezier(0.550,0.085,0.680,0.530);}
.i.d h1 span+span{transition-delay:0.9s;}
.i.d h1 span+span+span{transition-delay:1s;}
.o{position:fixed;font-size:14px;line-height:1.2;margin:0 20px;padding:20px 0 2.25em;box-sizing:border-box;visibility:hidden;}
.o h1{font-size:12px;font-weight:100;text-transform:uppercase;line-height:1.2;}
.o p{margin-top:-0.05em;}
.o p,.o p em,.o p input,.o p button{font-size:inherit;line-height:inherit;}
.o p > span{white-space:nowrap;display:inline-block;opacity:0;transform:translate3d(0,1.5em,0);-webkit-transform:translate3d(0,1.5em,0);-moz-transform:translate3d(0,1.5em,0);}
.o p > span.on{opacity:1;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);}
.o p > span.price{position:relative;z-index:1;}
.o p em{position:relative;min-width:1.2em;font-style:normal;padding-right:0.1em;display:inline-block;}
.o p em span,
.o p em input{font-style:normal;border:0;border-radius:0;outline:none;}
.o p em span{visibility:hidden;}
.o p em input{position:absolute;left:0;top:0;width:100%;height:100%;color:#fff;background:none;}
.o p span.date{position:relative;}
.o p span.date input{position:absolute;left:0;top:0;width:100%;height:100%;font-size:0.75em;opacity:0;}
.o p span.date input::-webkit-calendar-picker-indicator{width:100%;}
.o p span.date input::-webkit-inner-spin-button{display:none;}
.o.show p input,.o p span.date em{border-bottom:1px solid rgba(255,255,255,0.5);}
.o.show p input,.o p span.date em{transition:border-color 0.35s ease-out;-webkit-transition:border-color 0.35s ease-out;-moz-transition:border-color 0.35s ease-out;}
.o.show p input:focus,.o p span.date em.focus{border-bottom-color:rgba(255,255,255,1);}
.o p button{position:absolute;bottom:20px;font-family:'AppleSDGothicNeo-Light';color:#fbfd38;border:none;background:none;opacity:0;transform:scale3d(2,2,1);-webkit-transform:scale3d(2,2,1);-moz-transform:scale3d(2,2,1);}
.o p button.on{opacity:1;transform:scale3d(1,1,1);-webkit-transform:scale3d(1,1,1);-moz-transform:scale3d(1,1,1);}
.v{position:fixed;left:0;top:0;width:100%;text-align:center;padding:0 20px;box-sizing:border-box;visibility:hidden;}
.v h1{position:relative;font-size:16px;font-weight:200;text-transform:uppercase;padding-bottom:20px;opacity:0;transform:translate3d(0,50px,0);-webkit-transform:translate3d(0,50px,0);-moz-transform:translate3d(0,50px,0);transition:opacity 0.5s ease-in,-webkit-transform 1s cubic-bezier(0.215,0.610,0.355,1.000);-webkit-transition:opacity 0.5s ease-in,-webkit-transform 1s cubic-bezier(0.215,0.610,0.355,1.000);-moz-transition:opacity 0.5s ease-in,-moz-transform 1s cubic-bezier(0.215,0.610,0.355,1.000);}
.v p{font-size:50px;font-weight:100;color:#fff;line-height:0.73;opacity:0;transition:opacity 0.5s ease-in;-webkit-transition:opacity 0.5s ease-in;-moz-transition:opacity 0.5s ease-in;}
.v p:last-of-type{color:#fbfd38;}
.v a,.v button{position:absolute;left:5px;top:5px;font-family:arial;font-size:25px;color:#fff;line-height:1;margin:0;padding:10px 10px 9px;border:none;background:#3fbad9;opacity:0;visibility:hidden;transition:all 0.5s 2s ease-in-out;-webkit-transition:all 0.5s 2s ease-in-out;-moz-transition:all 0.5s 2s ease-in-out;}
.b .v.show a,.b .v.show button{visibility:visible;opacity:1;}
.v .favorite{-webkit-transform-origin:0 0;transform:scale(1.2,1);-webkit-transform:scale(1.2,1);-moz-transform:scale(1.2,1);}
.v .retry{left:auto;right:5px;text-decoration:none;width:25px;height:25px;z-index:0;}
.v .retry span{position:absolute;left:50%;top:50%;width:16px;height:16px;text-indent:-999em;margin:-9px 0 0 -9px;border:1px solid #fff;border-radius:100%;overflow:hidden;}
.v .retry:before{position:absolute;left:42%;top:25%;width:15%;height:10%;content:'';background:#3fbad9;z-index:1;}
.v .retry:after{position:absolute;left:55%;top:30%;width:12%;height:12%;content:'';border:1px solid #fff;border-width:1px 0 0 1px;z-index:1;}
.q{position:fixed;width:100%;height:100%;font-size:14px;line-height:1.2;background:#3fbad9;visibility:hidden;opacity:0;transform:translate3d(0,100%,0);-webkit-transform:translate3d(0,100%,0);-moz-transform:translate3d(0,100%,0);box-shadow:0 0 5px rgba(0,0,0,0.1);}
.v,.q{transition:all 0.75s cubic-bezier(0.770,0.000,0.175,1.000);-webkit-transition:all 0.75s cubic-bezier(0.770,0.000,0.175,1.000);-moz-transition:all 0.75s cubic-bezier(0.770,0.000,0.175,1.000);}
.f .v{opacity:0;-webkit-transform-origin:50% 0;transform:scale(0.75,0.75) translate3d(0,75%,0);-webkit-transform:scale(0.75,0.75) translate3d(0,75%,0);-moz-transform:scale(0.75,0.75) translate3d(0,75%,0);}
.f .q{visibility:visible;opacity:1;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);}
.q h1{font-size:23px;font-weight:200;color:#fff;text-align:center;line-height:1.2;padding:14px 0;border-bottom:1px solid rgba(255,255,255,0.25);}
.q p{font-size:30px;font-size:9vw;color:#fff;line-height:1.2;padding:20px;}
.q p+p{padding-top:10px;}
.q h1 em,.q p em{color:#fbfd38;}
.q p em,.q p span{white-space:nowrap;}
.q button{position:absolute;left:5px;top:5px;width:45px;height:45px;text-indent:-999em;margin:0;border:none;background:#3fbad9;overflow:hidden;}
.q button:before,.q button:after{position:absolute;left:25%;top:48%;width:50%;height:0;content:'';border-top:1px solid #fff;box-shadow:0 -1px 0 rgba(0,0,0,0.05);transform:rotate(45deg);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);}
.q button:after{transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);}
.show{visibility:visible;}
</style>
</head>
<body>

<section class="i">
	<h1>
		<span><em>Smoke</em></span>
		<span><em>Free</em></span>
		<span>Counter</span>
	</h1>
</section>
<section class="o">
	<p>
		<span>한 갑에</span>
		<span>
			<em>
				<span>4500</span>
				<input type="text" pattern="\d*" maxlength="5" value="4500">
			</em>원짜리
		</span>
		<span>담배를</span>
		<span>하루에</span>
		<span>
			<em>
				<span>20</span>
				<input type="text" pattern="\d*" maxlength="3" value="20">
			</em>개비
		</span> 
		<span>정도</span>
		<span>피우다</span>
		<span class="date"><em>00년 00월 00일</em><input type="date"></span>
		<span>부터 금연.</span>
	</p>
	<p><button type="submit">시작!</button></p>
</section>
<section class="v">
	<h1>Days</h1>
	<p class="days">0</p>
	<h1>Money Saved</h1>
	<p class="moneys">0</p>
	<button type="button" class="favorite">♡</button>
	<a href="?o" class="retry"><span>Retry</span></a>
</section>
<section class="q">
	<h1><em>Smoke free</em> Counter</h1>
	<p><span>금연하는데</span> <span>작은</span> <span>도움이</span> <span>되고자</span> <span>제작했습니다.</span></p>
	<p><span>결과 화면을</span> <span>스마트폰 브라우저에서</span> <em>"홈 화면에 추가"</em><span>하면</span> <span>더욱</span> <span>쉽고</span> <span>편하게</span> <span>사용할 수</span> <span>있습니다.</span></p>
	<button type="button" class="close">Close</button>
</section>

<script>
'use strict';
window.onload = function() {

	var
		$body = document.body,
		$intro = document.querySelector('section.i'),
		$option = document.querySelector('section.o'),
		$view = document.querySelector('section.v'),
		windowwidth = window.innerWidth,
		windowheight = window.innerHeight,
		methods = {},
		xpadding = 40,
		urlquery = query.parse(location.href.split('?')[1]),
		mode = urlquery.s && urlquery.p && urlquery.d ? 'view' : urlquery.o !== undefined ? 'option' : 'intro';

	if (mode == 'view') {
		urlquery.p = parseInt(urlquery.p) - 2000;
		if (isNaN(urlquery.p) || 0 > urlquery.p) {
			mode = 'intro';
		}
	}

	document.querySelector('section.q button.close').addEventListener('click', hideinfo, false);

	methods.intro = function() {

		var $spans = $intro.querySelectorAll('span'),
			$firstspan = $spans[0],
			$lastspan = $spans[2],
			introwidth = (windowwidth-xpadding)*0.6,
			fontsize = parseInt(document.defaultView.getComputedStyle($option, null)['fontSize']),
			nextsteped = false,
			i, max;


		$lastspan.style.display = 'inline';
		while ( introwidth > $lastspan.offsetWidth ) {
			fontsize += 1;
			$intro.style.fontSize = fontsize +'px';
		}
		$lastspan.style.display = '';

		$firstspan.addEventListener('transitionend', hiding, false);
		$firstspan.addEventListener('webkitTransitionEnd', hiding, false);

		$intro.classList.add('show');

		function hiding() {
			if (!$intro.classList.contains('d')) {
				$intro.classList.add('d');
				$lastspan.addEventListener('transitionend', nextstep, false);
				$lastspan.addEventListener('webkitTransitionEnd', nextstep, false);
			}
		}

		function nextstep(e) {
			if (!$intro.classList.contains('e')) {
				$intro.classList.add('e');
			} else if($body.contains($intro)) {
				$body.removeChild($intro);
				setTimeout(function() {
					methods.option();
				}, 500);
			}
		}

		setTimeout(function() {
			$intro.classList.add('s');
		}, 0);

	}

	methods.option = function() {

		var $inputs = $option.querySelectorAll('input[type="text"]'),
			$priceinput = $inputs[0],
			$perdayinput = $inputs[1],
			$dateinput = $option.querySelector('span.date input'),
			$datetext = $option.querySelector('span.date em'),
			$submit = $option.querySelector('button'),

			$spans = $option.querySelectorAll('p > span'),

			fontsize = parseInt(document.defaultView.getComputedStyle($option, null)['fontSize']),

			i, max;


		for ( i = 0, max = $inputs.length; i < max; i++ ) {
			$inputs[i].addEventListener('touchstart', inputdown, false);
			$inputs[i].addEventListener('mousedown', inputdown, false);
			$inputs[i].addEventListener('focus', inputselect, false);
			$inputs[i].addEventListener('click', inputselect, false);
			$inputs[i].addEventListener('input', sync, false);
		}

		$dateinput.onfocus = datefocused;
		$dateinput.onblur = dateblured;
		$dateinput.onchange = datechanged;

		$submit.onclick = function() {
			location.href = location.href.split('?')[0] +'?'+ query.make({
				s: $dateinput.value,
				p: parseInt($priceinput.value),
				d: parseInt($perdayinput.value)
			});
		}

		function inputdown() {
			this.dataset.touched = 'touched';
		}

		function sync() {
			this.parentNode.children[0].innerHTML = this.value || '0';
		}

		function inputselect(e) {
			if ( e.type == 'focus' && this.dataset.touched ) {
				this.dataset.touched = '';
				return;
			}
			this.setSelectionRange(0, 99999);
		}

		function datefocused() {
			$datetext.className = 'focus';
		}

		function dateblured() {
			$datetext.className = '';
		}

		function datechanged() {
			var matched = this.value.match(/[0-9]{2}([0-9]{2})-([0-9]{2})-([0-9]{2})/);
			$datetext.innerHTML = matched[1] +'년 '+ parseInt(matched[2]) +'월 '+ parseInt(matched[3]) +'일';
		}

		function gettoday() {
			var now = new Date();
			return now.getFullYear() +'-'+ addzero(now.getMonth()+1) +'-'+ addzero(now.getDate());
		}

		function addzero(v) {
			return ( 10 > v )? '0'+ v : v;
		}


		while ( windowheight > $option.offsetHeight && windowwidth-40 > $datetext.offsetWidth ) {
			fontsize += 1;
			$option.style.fontSize = fontsize +'px';
		}

		$option.style.cssText = 'height:'+ windowheight +'px; font-size:'+ (fontsize-1) +'px;';

		$dateinput.value = $dateinput.max = gettoday();
		$dateinput.onchange();

		setTimeout(function() {

			$option.classList.add('show');

			for ( i = 0, max = $spans.length; i < max; i++ ) {
				$spans[i].style.webkitTransition = $spans[i].style.transition = 'all 1s '+ easeOutCubic(i, 0, 1350, max) +'ms cubic-bezier(0.215, 0.610, 0.355, 1.000)';
				$spans[i].classList.add('on');
			}
			$submit.style.webkitTransition = $submit.style.transition = 'all 0.35s 2.35s cubic-bezier(0.165, 0.840, 0.440, 1.000)';
			$submit.className = 'on';

		}, 0);

	}

	methods.view = function() {

		var fromdate = new Date(urlquery.s),
			fromtime = new Date(fromdate.getFullYear(), fromdate.getMonth(), fromdate.getDate()).getTime(),
			nowdate = new Date(),
			increasedtime = new Date(2015, 0, 1).getTime(),
			nowtime = new Date(nowdate.getFullYear(), nowdate.getMonth(), nowdate.getDate()).getTime(),
			timegap = nowtime-fromtime,
			oneday = 86400000,
			days = Math.floor(timegap/oneday)+1,
			daysafterincreased = 0,

			moneys = days*(parseInt(urlquery.p)*parseInt(urlquery.d)/20),

			$hs = $view.querySelectorAll('h1'),
			$ps = $view.querySelectorAll('p'),
			$f = $view.querySelector('.favorite'),
			$r = $view.querySelector('.retry'),

			i = 0, max = $ps.length;

		if (nowtime >= increasedtime) {
			daysafterincreased = Math.floor((nowtime-Math.max(fromtime, increasedtime))/oneday)+1;
			daysafterincreased *= parseInt(urlquery.d)/20;
			moneys += daysafterincreased*2000;
		}
		moneys = Math.round(moneys/100)*100;

		setting($ps[0], days, 40);
		setting($ps[1], moneys, 40);

		$f.addEventListener('click', showinfo, false);
		$r.onclick = function() {
			location.href = location.href.replace(/\?.+/, '');
			return false;
		}

		function tt(title, textbox, value, time, callback) {

			var
				starttime = Date.now(),
				fps = 60,
				totalsteps = Math.round(time*fps),
				timer;


			title.style.opacity = 1;
			title.style.webkitTransform = 'translate3d(0, 0, 0)';

			function action() {
				var step = Math.round( (Date.now()-starttime) / (1000/fps) ),
					newvalue = Math.round(easeInOutExpo(step, 0, value, totalsteps));
				if ( totalsteps > step && newvalue != value ) {
					if ( textbox != $ps[1] ) {
						textbox.innerHTML = priceformat(newvalue);
					} else {
						textbox.innerHTML = priceformat(Math.round(newvalue/100)*100);
					}
					timer = window.requestAnimationFrame(action);
				} else {
					textbox.innerHTML = priceformat(value);
					callback && setTimeout(callback, 500);
				}
			}

			setTimeout(function() {
				textbox.style.transitionDuration = time/2+'s';
				textbox.style.opacity = 1;
				setTimeout(action, 20);
			}, 750);

		}

		function setting(textbox, value) {
			textbox.innerHTML = priceformat(value);
			resizefont(textbox);
			textbox.innerHTML = 0;
		}

		function resizefont(target) {

			var
				maxwidth = windowwidth-xpadding,
				span = document.createElement('span'),
				fontsize = 250;

			span.innerHTML = target.innerHTML;
			target.innerHTML = '';
			target.appendChild(span);
			
			do {
				target.style.fontSize = fontsize+'px';
				fontsize -= 5;
			} while ( span.offsetWidth > maxwidth );

		}

		$view.classList.add('show');

		setTimeout(function() {
			tt($hs[0], $ps[0], days, 5, function() {
				tt($hs[1], $ps[1], moneys, 5);
			});
		}, 500);

		$hs[1].style.paddingTop = (windowheight-$view.offsetHeight)/3 + 'px';
		$hs[0].style.paddingTop = (windowheight-$view.offsetHeight)/2 + 'px';
		$view.style.height = '100%';

	}

	function showinfo() {
		$body.classList.add('f');
	}
	function hideinfo() {
		$body.classList.remove('f');
	}
	function priceformat(value) {
		var split, i, max;
		if ( Math.abs(value) > 999 ) {
			split = ( value+'' ).split('').reverse();
			for ( i = 3, max = split.length; i < max; i += 4, max++ ) {
				split.splice(i, 0, ',');
			}
			value = split.reverse().join('');
		}
		return value;
	}
	function easeOutCubic(t,b,c,d) {
		return c*((t=t/d-1)*t*t+1)+b;
	}

	function easeInOutExpo(t,b,c,d) {
		if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b-c*0.0005;return c/2*1.0005*(-Math.pow(2,-10*--t)+2)+b;
	}
	$body.ontouchmove = function() {
		return false;
	}
	setTimeout(function() {
		setTimeout(function() {
			methods[mode]();
		}, mode == 'intro' ? 500 : 0);
		$body.className = 'on b';
	}, 350);

}
var query={parse:function(){function d(a){if(a)if(a=decodeURIComponent(a).replace(/\+/g," "),-1!=a.indexOf(","))for(a=a.split(","),b=0,g=a.length;b<g;b++)a[b]=d(a[b]);else e.test(a)&&(a=parseFloat(a));return a}var e=/^-?[1-9][0-9\.]*$/,c=/([^=&]+)=?([^=&]*)/g,f,b,g;return function(a){var b={};if(a=/^#/.test(a)?a.substring(a.lastIndexOf("#")+1):!a||/\?/.test(a)?(a||location.href).split("?")[1]:a)for(a=a.split("#")[0];f=c.exec(a);)b[f[1]]=d(f[2]);return b}}(),make:function(d){var e,c;c=typeof d;if("string"==
c)return d;if("object"==c){c=[];for(e in d)c.push(e+"="+encodeURIComponent(d[e]));return c.join("&")}}};

</script>

</body>
</html>