<!DOCTYPE HTML>
<html>
<head>
<title>::: note :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
<style type="text/css">
	body {font-size:14px;line-height:1.6;margin:80px auto;max-width:1200px;}
	h2 {text-align:left;margin:50px 0 30px;font-weight:bold;font-size:1.2em}
	.Methods {width:100%;text-align:left}
	.Methods tr {padding:10px;background:#fff}
	.Methods tr:hover {background:#f7f7f7}
	.Methods th {padding:10px;}
	.Methods td {padding:10px;}
	.Methods td a {display:inline-block;padding-bottom:2px;border-bottom:1px solid #000}
	.Methods td .box {padding:10px;}
	.Methods td p {color:#999;font-weight:bold;margin-top:5px;font-size:12px;position:relative;padding:0 0 0 10px;font: normal normal normal 14px/1 FontAwesome;line-height:1.6}
	.Methods td p em {font-style:normal;font-weight:bold}
	.Methods td p:before {position:absolute;top:0;left:0;content: "\f105";}
	.pd {padding:0 10px}
	.guide .ttl_box {cursor:pointer}
	.guide .ttl {font-size:1.2em;display:inline-block;margin:0 5px 0 0}
	.guide .ctt_box {display:none;margin:10px 0 20px;padding:30px;border:1px solid #ddd;background:#f7f7f7;}
	.guide .link {display:inline-block;margin:0 0 20px;color:#c7282d}
	.guide .box {background: #fff;padding: 15px;border: 1px solid #d1d1d1;margin: 15px 0 0;}
	.guide .text {margin:15px 0;}
	.guide .text dt {line-height:1.5em;margin:0 0 5px;font-weight:bold;}
	.guide .text dd {display: block;margin:0 0 5px;font-weight: normal;font-size: 13px;color: #555;}
	.guide .text dd ~ dt{margin:15px 0 5px;}
	.guide .text .space {display:inline-block;width:50px;}
	.guide .info {margin:15px 0;color:#c7282d;}
	.guide .info dt {}
	.guide .info .btn {text-decoration: underline;cursor:pointer;}
</style>
<script>
	function on_off(btn, arw){
		if ($(btn).siblings("*").css("display") == "none"){
			$(btn).siblings("*").css("display","block");
			$(btn).children(arw).text("▲")
		} else {
			$(btn).siblings("*").css("display","none");
			$(btn).children(arw).text("▼")
		}
	}
</script>
</head>
<body>

	<h2>javascript guide</h2>
	<div class="guide">
		
		<!-- Math -->
		<div>
			<div class="ttl_box" onclick="on_off(this,'.ctt_box','.arrow')">
				<h3 class="ttl">Math</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<a href="https://opentutorials.org/course/743/4647" target="_blank" class="link">https://opentutorials.org/course/743/4647</a>
				<div class="box">
					<dl class="text">
						<dt>Math.pow(3,2);</dt>
						<dd>- 결과값 9,   3의 2승</dd>
						<dt>Math.round(10.6);</dt>
						<dd>- 결과값 11,  소스점 반올림</dd>
						<dt>Math.ceil(10.2);</dt>
						<dd>- 결과값 11,  소수점 올림</dd>
						<dt>Math.floor(10.6);</dt>
						<dd>- 결과값 10,  소수점 내림</dd>
						<dt>Math.sqrt(9);</dt>
						<dd>- 결과값 3,   3의 제곱근</dd>
						<dt>Math.random();</dt>
						<dd>- 0부터 1.0 사이의 랜덤한 숫자</dd>
						<dt>Math.round(100*Math.random())</dt>
						<dd>- 1부터 100 사이의 랜덤한 숫자에서 소수점 반올림</dd>
						<dt>Math.max(a, b)</dt>
						<dd>- a와 b중 높은 숫자만 리턴</dd>
						<dt>Math.min(a, b)</dt>
						<dd>- a와 b중 낮은 숫자만 리턴</dd>
					</dl>						
					<div class="info">
						<dl>
							<dt>예제)</dt>
							<dd>
								<ul>
									<li>0부터 1까지 랜덤숫자 <span class="btn" onclick="content1_1(this)">click</span></li>
									<li>0부터 100까지 랜덤숫자 <span class="btn" onclick="content1_2(this)">click</span></li>
									<li>0부터 100까지 랜덤숫자에서 소수점 반올림 <span class="btn" onclick="content1_3(this)">click</span></li>
								</ul>
							</dd>
						</dl>
						<script>
							function content1_1(ele){
								alert(Math.random())
							}
							function content1_2(ele){
								alert(Math.random()*100)
							}
							function content1_3(ele){
								alert(Math.round(Math.random()*100))
							}
						</script>
					</div>
				</div>
			</div>
		</div>
		<!-- // Math -->
		
		<!-- 연산자 -->
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">연산자</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<a href="https://koonsland.tistory.com/118" target="_blank" class="link">https://koonsland.tistory.com/118</a>
				<div class="box">
					<dl class="text">
						<dt>+</dt>
						<dd>더하기</dd>
						<dd>예) num1 + num2</dd>
						<dt>-</dt>
						<dd>빼기</dd>
						<dd>예) num1 - num2</dd>
						<dt>*</dt>
						<dd>곱하기</dd>
						<dd>예) num1 * num2</dd>
						<dt>/</dt>
						<dd>나누기</dd>
						<dd>예) num1 / num2</dd>
						<dt>%</dt>
						<dd>나머지	</dd>
						<dd>예) num1 % num2</dd>
						<dt>++</dt>
						<dd>증가 (1 증가함)</dd>
						<dd>예) ++num1, num1++</dd>
						<dt>--</dt>
						<dd>감소 (1 감소함)</dd>
						<dd>예) --num1, num1--</dd>
						<dt>**</dt>
						<dd>지수</dd>
						<dd>예) num1 ** num2</dd>
						<dt>+=</dt>
						<dd>더하고 할당</dd>
						<dd>예) num += 10 // num = num + 10</dd>
						<dt>--</dt>
						<dd>빼고 할당</dd>
						<dd>예) num -= 10 // num = num - 10</dd>
						<dt>*=</dt>
						<dd>곱하고 할당</dd>
						<dd>예) num *= 10 // num = num * 10</dd>
						<dt>/=</dt>
						<dd>나누고 할당</dd>
						<dd>예) num /= 10 // num = num / 10</dd>
						<dt>%=</dt>
						<dd>나눈 나머지 할당</dd>
						<dd>예) num %= 10 // num = num % 2</dd>
						<dt>**=</dt>
						<dd>제곱 할당</dd>
						<dd>예) num **= 10 // num = num ** 10</dd>
						<dt>==</dt>
						<dd>두 수가 같은지 확인. 같은 경우 true</dd>
						<dd>예) num1 == num2</dd>
						<dt>!=</dt>
						<dd>두 수가 다른지 확인. 다른 경우 true</dd>
						<dd>예) num1 != num2</dd>
						<dt>===</dt>
						<dd>두 수의 타입과 값이 같은지 확인. 같은 경우 true</dd>
						<dd>예) num1 === num2</dd>
						<dt>!==</dt>
						<dd>두 수의 타입과 갘이 다른지 확인. 다른 경우 true</dd>
						<dd>예) num1 !== num2</dd>
						<dt>></dt>
						<dd>두 수중 좌측이 더 크면 true</dd>
						<dd>예) num1 > num2</dd>
						<dt>>=</dt>
						<dd>두 수중 좌측이 크거나 같으면 true</dd>
						<dd>예) num1 >= num2</dd>
						<dt><</dt>
						<dd>두 수중 우측이 더 크면 true</dd>
						<dd>예) num1 < num2</dd>
						<dt><= </dt>
						<dd>두 수중 우측이 크거나 같으면 true</dd>
						<dd>예) num1 <= num2</dd>
						<dt>&&(AND)</dt>
						<dd>&&는 좌항과 우항이 모두 참(true)일 때 참이된다. 이러한 논리 연산자를 and 연산자라고 한다.</dd>
						<dd>true && ture 이면 결과는 true, true && false 이면 결과는 false, false && false 이면 결과는 false</dd>
						<dd>예) a && b</dd>
						<dt>||(OR)</dt>
						<dd>'||'는 '||'의 좌우항 중에 하나라도 true라면 true가 되는 논리 연산자다. |기호는 통상 엔터키 위에 있는 원화표시 키를 쉬프트와 함께 누르면 입력된다. or 연산자라고 부른다.</dd>
						<dd>true && true 이면 결과는 true, true && false 이면 결과는 true, false && false 이면 결과는 false</dd>
						<dd>예) a || b</dd>
						<dt>!(NOT)</dt>
						<dd>'!'는 부정의 의미로, Boolean의 값을 역전시킨다. true를 false로 false를 true로 만든다. not 연산자라고 부른다.</dd>
						<dd>true 이면 결과는 false, false 이면 결과는 true</dd>
						<dd>예) !a</dd>
						<dt>& (AND)</dt>
						<dd>AND 연산으로 모두 true이면 결과는 true</dd>
						<dd>예) a & b</dd>
						<dt>| (OR)</dt>
						<dd>OR 연산으로 하나라도 true이면 결과는 true</dd>
						<dd>예) a | b</dd>
						<dt>^ (XOR)</dt>
						<dd>eXclusive-OR 연산으로 두 수가 서로 다르면 결과는 true</dd>
						<dd>예) a ^ b</dd>
						<dt>~ (NOT)</dt>
						<dd>NOT 연산으로 결과는 반대</dd>
						<dd>예) ~a</dd>
						<dt><< (Left shift)</dt>
						<dd>Shift 연산으로 n bit 좌측으로 이동</dd>
						<dd>예) a << 3</dd>
						<dt>>> (Right shift)</dt>
						<dd>Shift 연산으로 n bit 우측으로 이동</dd>
						<dd>예) a >> 3</dd>
						<dt>>>> (Zero-fill right shift)</dt>
						<dd>Shift 연산이로 n bit 우측으로 이동하면서 빈공간은 0으로 채움</dd>
						<dd>예) a >>> 3</dd>
						<dt>Boolean</dt>
						<dd>- 비교 연산의 결과로 참(true)이나 거짓(false)을 얻을 수 있는데, 이를 Boolean(불린)이라고 부르고 불린으로 올 수 있는 값은 true와 false 두가지 밖에 없다. 불린은 조건문에서 핵심적인 역할을 담당한다.</dd>
						<dt>if</dt>
						<dd>- 조건문은 if로 시작한다. if 뒤의 괄호에 조건이 오고, 조건이 될 수 있는 값는 Boolean이다. Boolean의 값이 true라면 조건이 담겨진 괄호 다음의 중괄호 구문이 실행된다.</dd>
						<dt>else</dt>
						<dd>- if문의 조건이 true라면 if의 중괄호 구간이 실행되고, false라면 else 이후의 중괄호 구간이 실행된다. 즉 else는 주어진 조건이 거짓일 때 실행할 구간을 정의하는 것이다.</dd>
						<dt>else if</dt>
						<dd>- else if는 좀 더 다양한 케이스의 조건을 검사할 수 있는 기회를 제공한다. else if의 특징은 if나 else와는 다르게 여러개가 올 수 있다는 점이다. else if의 모든 조건이 false라면 else가 실행된다. else는 생략 가능하다.</dd>
						<dt>01</dt>
						<dd>- 조건문에 사용될 수 있는 데이터 형이 꼭 불린만 되는 것은 아니다. 관습적인 이유로 0는 false 0이 아닌 값은 true로 간주된다.</dd>
						<dt>기타 false로 간주되는 데이터 형</dt>
						<dd>
							- 다음은 false와 0 외에 false로 간주되는 데이터형의 리스트다. if문의 조건으로 !(부정) 연산자를 사용했기 때문에 각 조건문의 첫번째 블록이 실행되는 것은 주어진 값이 false이기 때문이다.<br>
							- if(!''), if(!undefined), var a;if(!a), if(!null), if(!NaN)
						</dd>						
					</dl>
				</div>
			</div>
		</div>
		<!-- // 연산자 -->
		
		<!-- 반복문 -->
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">반복문</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<a href="https://opentutorials.org/course/743/4728" target="_blank" class="link">https://opentutorials.org/course/743/4728</a>
				<div class="box">
					<dl class="text">
						<dt>while</dt>
						<dd>- 반복문의 명령</dd>
						<dd>- 조건을 true나 false로 지정해줘야 정상적으로 출력된다.</dd>
						<dd>- while문은 while문 뒤에 따라오는 괄호 안의 조건이 참(true)면 중괄호 안의 코드 구간을 반복적으로 실행한다. 조건이 false면 반복문이 실행되지 않는다. 여기서 true와 false는 종료조건이 되는데, 이 값을 변경하는 것을 통해서 반복문을 종료시킬 수 있다. 반복문에서 종료조건을 잘못 지정하면 무한반복이 되거나, 반복문이 실행되지 않는다.</dd>
					</dl>
					<div class="info">
						<dl>
							<dt>예제)</dt>
							<dd>
								<ul>
									<li><span class="ele" onclick="while1(this)">while(무한출력) <span class="btn">click</span></span></li>
									<li><span class="ele" onclick="while2(this)">while(1씩 증가하며 출력) <span class="btn">click</span></span></li>
									<li><span class="ele" onclick="while3(this)">while(10 이하까지 출력) <span class="btn">click</span></span></li>
								</ul>
							</dd>
						</dl>
						<script>
							function while1 (e){
								while (i <= 10){
									alert(i)
								}
							}
							function while2 (e){
								var i = 1;
								while (true){
									alert(i)
									i++
								}
							}
							function while3 (e){
								var i = 1;
								while (i <= 10){
									alert(i)
									i++
								}
							}
						</script>
					</div>
				</div>
				<div class="box">
					<dl class="text">
						<dt>for</dt>
						<dd>for문은 제일 먼저 '초기화'를 한다. 위의 예제에서 초기화는 var i = 0;이다. 즉 변수 i의 값을 0으로 설정한 것이다. 그 다음에는 '반복조건'인 i < 10이 실행된다. 현재 i의 값은 0이다. 그렇기 때문에 이 조건은 참이다. 반복조건이 참이면 중괄호 안의 내용이 실행된다. i의 값이 0이기 때문에 'coding everybody0<br />'이라는 텍스트가 출력된다. '반복해서 실행될 코드'의 실행이 끝나면 '반복이 될 때마다 실행되는 코드'가 실행된다. i++는 현재 i의 값에 1을 더하라는 의미다. 현재 i의 값은 0이다. 따라서 i++의 결과로 i는 1이 되었다. 그리고 '반복조건'이 실행된다. 현재 i의 값은 1이기 때문에 i < 10은 참이다. 다시 '반복해서 실행될 코드'가 실행된다. 그렇게 반복해서 작업이 실행된다. 이 과정에서 i의 값은 반복 할 때마다 1씩 증가한다. 결국 i의 값이 10이 되는 순간 i < 10을 충족시키지 못하게 되고 반복문은 종료된다.</dd>
						<dd>break = 반복문을 중간에 중단</dd>
						<dd>continue = 해당 반복은 중단하지만 다음 반복부터 재실행.</dd>
					</dl>
					<div class="info">
						<dl>
							<dt>예제)</dt>
							<dd>
								<li><span class="ele" onclick="for1(this)">for(10까지 출력) <span class="btn">click</span></span></li>
								<li>
									<span class="ele" onclick="for2(this)">for(구구단) <span class="btn">click</span></span>
									<div class="gugudan"></div>
								</li>
							</dd>
						</dl>
						<script>
							function for1 (e){
								for (var i = 0; i <= 10; i++){
									alert(i)
								}
							}	
							function for2 (e){
								if ($(".gugudan div").css("display") !== "block"){
									var str = "";
									str += "<div>";
									for (var a = 1; a < 10; a++){
										str += "<p>";
										for (var b = 1; b < 10; b++){
											str += (a +"x"+ b +"="+ (a*b)+"<br>")
										}
										str += "</p>";
									}
									str += "</div>";
									$(str).appendTo(".gugudan")
								} else {
									$(".gugudan div").detach();
								}
							}
						</script>
						<style type="text/css">
							.info .gugudan {overflow:hidden;}
							.info .gugudan p {width:60px;float:left;}
						</style>
					</div>
				</div>
			</div>
		</div>
		<!-- // 반복문 -->

		<!-- 조건문 -->
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">조건문</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<div class="box">
					<dl class="text">
						<dt>?: 조건문</dt>
						<dd>- n > 10 ? 11 : 9</dd>
					</dl>
				</div>
			</div>
		</div>		
		<!-- // 조건문 -->

		<!-- 함수선언 -->		
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">함수 선언</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<div class="box" style="margin-top:0;">
					<dl class="text">
						<dt>문자(string) 선언</dt>
						<dd>var a = "";</dd>
					</dl>
				</div>
				<div class="box">
					<dl class="text">
						<dt>숫자(number) 선언</dt>
						<dd>var a = 0;</dd>
					</dl>
				</div>
				<div class="box">
					<dl class="text">
						<dt>배열(array) 선언</dt>
						<dd>var a = [1,2,3]</dd>
					</dl>
				</div>
				<div class="box">
					<dl class="text">
						<dt>객체(object) 선언</dt>
						<dd>
							var b = {<br>
							<span class="space"></span>a:"1",<br>
							<span class="space"></span>b:2,<br>
							<span class="space"></span>c:[],<br>
							<span class="space"></span>d:{}<br>
							}
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<!-- // 함수선언 -->
		
		<!-- 함수접근 -->		
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">함수 접근</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<div class="box" style="margin-top:0;">
					<dl class="text">
						<dt>문자(String)접근</dt>
						<dd>string[number]</dd>
					</dl>
				</div>
				<div class="box">
					<dl class="text">
						<dt>배열(Array)접근</dt>
						<dd>array[number]</dd>
					</dl>
				</div>
				<div class="box">
					<dl class="text">
						<dt>객체(object)접근</dt>
						<dd>
							object.name<br>
							object.["name"]
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<!-- // 함수접근 -->
		
		<!-- 연산자를 활용한 아이디/비밀번호 인증 -->
		<div>
			<div class="ttl_box" onclick="on_off(this,'.arrow')">
				<h3 class="ttl">연산자를 활용한 아이디/비밀번호 인증</h3>
				<span class="arrow">▼</span>
			</div>
			<div class="ctt_box">
				<a href="https://opentutorials.org/course/743/4724" target="_blank" class="link">https://opentutorials.org/course/743/4724</a>
				<div class="box">
					<dl class="text">
						<dt>var id = prompt('아이디를 입력해주세요.')</dt>
						<dd>- 변수로 제공 시, 괄호 안의 텍스트와 함께 입력창을 띄움.</dd>
					</dl>
					<div class="info">
						<dl>
							<dt>예제)</dt>
							<dd>
								<ul>
									<li><span class="ele" onclick="content2(this)">아이디 인증 후 비밀번호인증 <span class="btn">click</span></span></li>
									<li><span class="ele" onclick="content3(this)">아이디/비밀번호 함께 인증 <span class="btn">click</span></span></li>
								</ul>
							</dd>
						</dl>
						<script>
							function content2(ele){
								var id = prompt('아이디를 입력해주세요.')
								if (id == "gigiiboc"){
									var id2 = prompt('비밀번호를 입력해주세요.')
									if (id2 == "ahffkdy2"){
										alert("인증에 성공했습니다.")
									} else if (id2 == ""){
										alert("비밀번호를 입력해주세요.")
									} else {
										alert("인증에 실패했습니다.")	
									}
								} else if (id == ""){
									alert("아이디를 입력해주세요.")
								} else {
									alert("인증에 실패했습니다.")	
								}						
							}
							function content3(ele){
								var id = prompt('아이디를 입력해주세요.')
								var id2 = prompt('비밀번호를 입력해주세요.')
								if (id == "gigiiboc" && id2 == "ahffkdy2"){
									alert("인증에 성공했습니다.")
								} else if (id == "" && id2 == ""){
									alert("인증에 실패했습니다.")
								} else {
									alert("인증에 실패했습니다.")
								}
							}
						</script>
					</div>
				</div>
			</div>
		</div>
		<!-- // 연산자를 활용한 아이디/비밀번호 인증 -->
	</div>

	<h2>window Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_win_open.asp" target="_blank">window.open()</a></td>
			<td>
			<div class="box">
			var myWindow = window.open(URL, name, specs, replace)<br>
			var myWindow = window.open("http://whweb.cafe24.com", name, "top=500,left=500,width=400,height=400", "_blank")<br>
			<p>
				window 메소드로서, 새 창을 오픈한다.<br>
				name 의 경우, myWindow.name 의 형태로 열리는 페이지 내부에 해당 인자값을 넣을 수 있다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_win_close.asp" target="_blank">window.close()</a></td>
			<td>
			<div class="box">
				function openWin() {<br>
				<span class="pd"></span>myWindow = window.open("", "", "width=200, height=100", "");<br>
				}<br><br>
				function closeWin() {<br>
				<span class="pd"></span>myWindow.close();<br>
				}
			<p>
				window 메소드로서, 열린 윈도우 창을 닫는다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="#none" target="_blank">window.onload = function(){}</a></td>
			<td>
			<div class="box">
				window.onload = function(){<br>
				<span class="pd"></span>명령<br>
				}
			<p>
				window 메소드로서, 페이지가 모두 로드된 후 실행한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_win_setinterval.asp" target="_blank">setInterval()</a></td>
			<td>
			<div class="box">
			setInterval(function, milliseconds, param1, param2, ...)<br>
			setInterval(function(){ alert("Hello"); }, 3000);<br>
			setInterval(function(){반복할 함수}, 시간);<br>
			1000 ms = 1 second
			<p>
				window 메소드로서, 함수의 시간을 제어할때 사용한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_win_clearinterval.asp" target="_blank">clearInterval()</a></td>
			<td>
			<div class="box">
			clearInterval(id_of_setinterval)<br>
			clearInterval(중단할 setinterval 함수/변수);<br>
			<p>
				window 메소드로서, setInterval 를 정지시킬때 사용한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/met_win_prompt.asp" target="_blank">prompt()</a></td>
			<td>
			<div class="box">
			prompt(text, defaultText)<br>
			prompt(질문내용, 기본답변)<br>
			prompt("이름을 입력해주세요", "홍길동")<br>
			var a = prompt("이름을 입력해주세요", "홍길동")
			<p>
				window 메소드로서, prompt() 사용자에게 팝업창으로 값을 입력받는다.
			</p>
			</div>
			</td>
		</tr>
		</tbody>
	</table>

	<h2>javascript Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_html_innerhtml.asp" target="_blank">.innerHTML()</a></td>
			<td>
			<div class="box">
			HTMLElementObject.innerHTML<br>
			<p>document.getElementById('javascript').innerHTML = "text";<br>document(문서 전체)에서 "javascript" 라는 id 를 가진 태그에 "text" 이라는 string으로 HTML 지정(추가 개념이 아니라 전체를 바꿈)</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_html_innertext.asp" target="_blank">.innerHTML()</a></td>
			<td>
			<div class="box">
			HTMLElementObject.innerTEXT<br>
			<p>document.getElementById('javascript').innerTEXT = "text";<br>document(문서 전체)에서 "javascript" 라는 id 를 가진 태그에 "text" 이라는 string으로 TEXT 지정(추가 개념이 아니라 전체를 바꿈)</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/met_document_getelementbyid.asp" target="_blank">.getElementById()</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID)
			<p>document.getElementById("javascript");<br>document(문서 전체)에서 "javascript" 라는 id 를 가진 태그를 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/met_document_getelementsbyclassname.asp" target="_blank">.getElementsByClassName()</a></td>
			<td>
			<div class="box">
			document.getElementsByClassName(elementClass)
			<p>document.getElementsByClassName("javascript");<br>document(문서 전체)에서 "javascript" 라는 class 를 가진 태그를 모두 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp" target="_blank">.getElementsByTagName()</a></td>
			<td>
			<div class="box">
			document.getElementsByTagName(tagname)
			<p>document.getElementsByTagName("p");<br>document(문서 전체)에서 "p" 라는 HTML 태그를 모두 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_doc_getelementsbyname.asp" target="_blank">.getElementsByName()</a></td>
			<td>
			<div class="box">
			document.getElementsByName(elementName)
			<p>document.getElementsByName("javascript");<br>document(문서 전체)에서 "javascript" 라는 name 을 가진 태그를 모두 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_element_children.asp" target="_blank">.children</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).children
			<p>해당 ID 태그의 자식 노드에 대한 배열</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_node_parentnode.asp" target="_blank">.parentNode</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).parentNode
			<p>해당 ID 태그의 부모 노드에 대한 배열</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_element_firstelementchild.asp" target="_blank">.firstElementChild</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).firstElementChild
			<p>해당 ID 태그의 첫 자식 엘리먼트</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_element_lastelementchild.asp" target="_blank">.lastElementChild</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).lastElementChild
			<p>해당 ID 태그의 마지막 자식 엘리먼트</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_element_nextelementsibling.asp" target="_blank">.nextElementSibling</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).nextElementSibling
			<p>해당 ID 태그의 다음 엘리먼트 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/prop_element_previouselementsibling.asp" target="_blank">.previousElementSibling</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).previousElementSibling
			<p>해당 ID 태그의 이전 엘리먼트 선택</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/dom_obj_style.asp" target="_blank">.style</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).style.color = "red"<br>
			document.getElementById(elementID).style.fontSize = "15px"
			<p>해당 ID 태그의 스타일을 변경</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_element_getattribute.asp" target="_blank">.getAttribute</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).getAttribute("src")
			<p>해당 ID 태그의 attribute 값을 선택<br>직접 객체에 동기화되지 않는 속성에 대해서도 접근이 가능</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/met_element_setattribute.asp" target="_blank">.setAttribute</a></td>
			<td>
			<div class="box">
			document.getElementById(elementID).setAttribute("src", "http://whweb.cafe24.com")
			<p>해당 ID 태그의 attribute 값을 변경<br>직접 객체에 동기화되지 않는 속성에 대해서도 값 설정이 가능</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_obj_date.asp" target="_blank">Date reference</a></td>
			<td>
			<div class="box">
			시간제어 속성의 모든것
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_getday.asp" target="_blank">.getDay()</a></td>
			<td>
			<div class="box">
			Date.getDay()
			<p>
				- 해당 날짜의 요일 index 값을 반환해주는 함수
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_number.asp" target="_blank">Number()</a></td>
			<td>
			<div class="box">
			Number()
			<p>
				- 괄호 안의 형태를 'number'의 형태로 변환해주는 명령
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_string.asp" target="_blank">String()</a></td>
			<td>
			<div class="box">
			String()
			<p>
				- 괄호 안의 형태를 'string'의 형태로 변환해주는 명령
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_tostring_number.asp" target="_blank">toString()</a></td>
			<td>
			<div class="box">
			toString()
			<p>
				- 괄호 안의 형태를 'string'의 형태로 변환해주는 명령
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_parsefloat.asp" target="_blank">parseFloat()</a></td>
			<td>
			<div class="box">
			parseFloat(string)<br>
			parseFloat("10")
			<p>
				- 괄호 안의 'string' 형태의 숫자를 <em>실수까지 포함</em>된 'number'의 형태로 변환해주는 명령<br>
				- 앞글자가 숫자가 아닌 경우 NaN 처리됌.<br>
				- 띄어쓰기, 첫글자가 0인경우 생략처리<br>
				- 콤마로 여러가지를 넣을 수 없으며 한가지만 넣을 수 있다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/js/js_type_conversion.asp" target="_blank">typeof()</a></td>
			<td>
			<div class="box">
			typeof("string")<br>
			typeof(number)<br>
			<p>
				- 괄호 안의 대상의 형태를 알아내는 명령<br>
				string, number, boolean, object, function, Date, Array, null, undefined
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td>
				<a href="http://www.w3schools.com/jsref/jsref_length_string.asp" target="_blank">string.length</a><br>
				<a href="https://www.w3schools.com/jsref/jsref_length_array.asp" target="_blank">array.length</a>
			</td>
			<td>
			<div class="box">
			string.length;<br>
			array.length;
			<p>
				string 이나 array 의 갯수를 가져온다
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_match.asp" target="_blank">.match()</a></td>
			<td>
			<div class="box">
			string.match(/ain/g)
			string.match(/ain/gi)
			<p>
				string 요소중 "ain" 문자를 찾아 object 로 반환한다.
				기본적으로 대소문자를 구별하지만 string.match(/ain/ig) 인경우 대소문자를 구별하지 않고 수집한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_charat.asp" target="_blank">.charAt()</a></td>
			<td>
			<div class="box">
			string.charAt(index)
			<p>
				string 요소중 해당하는 위치의 문자를 선택한다.
				string[index] 와 같은 기능을 하지만, 위치를 벗어난 index를 선택할 경우, charAt() 과는 다르게 undefined 값을 반환한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_substr.asp" target="_blank">.substr()</a></td>
			<td>
			<div class="box">
			string.substr(start, length)<br>
			string.substr(시작 ,시작점을 기준으로 나타낼 수);<br>
			string.substr(시작);<br>
			string.substr(-4, 2);<br>
			<p>
				string 요소중 시작부터 시작점을 기준으로 나타낼 횟수만큼 문자를 선택한다.<br>
				나타낼 횟수를 별도로 표기하지 않으면 문자의 끝까지 전부 선택한다.<br>
				<em>또한 시작점에 음수를 넣을 경우 뒤에서부터 읽어오기가 가능하다.</em>
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_substring.asp" target="_blank">.substring()</a></td>
			<td>
			<div class="box">
			string.substring(start, end);<br>
			string.substring(시작 ,끝);<br>
			string.substring(시작);<br>
			string.substring(0, 4);<br>
			string.substring(4, 0);
			<p>
				string 요소중 시작부터 끝까지의 문자를 선택한다.<br>
				끝을 별도로 표기하지 않으면 문자의 끝까지 전부 선택한다.<br>
				<em>.substr() 과 다르게 음수를 읽어드리기 못한다.</em>
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td>
				<a href="https://www.w3schools.com/jsref/jsref_indexof.asp" target="_blank">.indexOf(string)</a><br>
				<a href="https://www.w3schools.com/jsref/jsref_indexof_array.asp" target="_blank">.indexOf(array)</a>
			</td>
			<td>
			<div class="box">
			string.indexOf(string)<br>
			array.indexOf(array)
			<p>
				- string 이나 array 요소중 괄호안에 string 이나 array 의 값을 입력하면 index 위치를 반환해준다.<br>
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_lastindexof.asp" target="_blank">.lastIndexOf()</a></td>
			<td>
			<div class="box">
			string.lastIndexOf(searchvalue, start)<br>
			string.lastIndexOf("planet", 20)
			<p>
				string 요소중 해당하는 문자의 가장 <em>마지막 위치</em>를 검색한다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_replace.asp" target="_blank">.replace()</a></td>
			<td>
			<div class="box">
			string.replace(searchvalue, newvalue)<br>
			<p>string.replace("Microsoft", "W3Schools");<br>선택자의 요소중 "Microsoft" 문자를 "W3Schools" 로 변경</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_slice_string.asp" target="_blank">.slice()</a></td>
			<td>
			<div class="box">
			string.slice(start, end);<br>
			string.slice(시작, 끝);<br>
			string.slice(시작);<br>
			string.slice(0, 4);<br>
			string.slice(4, 0);<br>
			string.slice(-2, -1);
			<p>
				string 의 내용중 시작부터 끝까지의 요소를 가져온다<br>
				끝을 별도로 표기하지 않으면 요소의 끝까지 전부 가져온다.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_repeat.asp" target="_blank">.repeat()</a></td>
			<td>
			<div class="box">
			string.repeat(count);
			<p>
				string 요소를 횟수만큼 반복한다
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_concat_string.asp" target="_blank">string.concat()</a></td>
			<td>
			<div class="box">
			string.concat(string1,string2)
			<br>
			<p>
				- 붙일 string 뒤에 해당하는 string을 추가.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_concat_array.asp" target="_blank">array.concat()</a></td>
			<td>
			<div class="box">
			array.concat(array1,array2)
			<br>
			<p>
				- 붙일 array 뒤에 해당하는 array을 추가.
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_unshift.asp" target="_blank">.unshift()</a></td>
			<td>
			<div class="box">
			array.unshift(item1, item2, ..., itemX)<br>
			배열.unshift(추가할 엘리먼트)
			<p>- 배열의 앞에 엘리먼트 추가</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_push.asp" target="_blank">.push()</a></td>
			<td>
			<div class="box">
			array.push(item1, item2, ..., itemX)<br>
			배열.push(추가할 엘리먼트)
			<p>- 배열의 뒤에 엘리먼트 추가</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_shift.asp" target="_blank">.shift()</a></td>
			<td>
			<div class="box">
			array.shift()
			<p>- 배열의 앞에 엘리먼트를 삭제하고 리턴</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_pop.asp" target="_blank">.pop()</a></td>
			<td>
			<div class="box">
			array.pop()
			<p>- 배열의 뒤에 엘리먼트를 삭제하고 리턴</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_split.asp" target="_blank">.split()</a></td>
			<td>
			<div class="box">
			string.split()
			<p>Code<br>var str="1,2,3,4,5";<br>arr = str.split(",");<br><br>결과<br>arr = ["1", "2", "3", "4", "5"];</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_join.asp" target="_blank">.join()</a></td>
			<td>
			<div class="box">
			array.join()
			<p>Code<br>var fruits = ["Banana", "Orange", "Apple", "Mango"];<br>var energy = fruits.join();<br><br>결과<br>Banana,Orange,Apple,Mango</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_reverse.asp" target="_blank">.reverse()</a></td>
			<td>
			<div class="box">
			array.reverse()
			<p>배열 순서를 뒤집어 줌.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jsref/jsref_sort.asp" target="_blank">.sort()</a></td>
			<td>
			<div class="box">
			array.sort()
			<p>배열 순서를 재정렬해줌(숫자와 문자 등의 고유의 순서로).</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_touppercase.asp" target="_blank">string.toUpperCase()</a></td>
			<td>
			<div class="box">
			string.toUpperCase()
			<p>해당 string 을 모두 대문자로 바꿔줌</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_tolowercase.asp" target="_blank">string.toLowerCase()</a></td>
			<td>
			<div class="box">
			string.toLowerCase()
			<p>해당 string 을 모두 소문자로 바꿔줌</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/jsref_tolocalestring.asp" target="_blank">string.toLocaleString()</a></td>
			<td>
			<div class="box">
			Date.toLocaleString()<br>
			Number.toLocaleString()<br>
			Number.toLocaleString('en')
			<p>toLocaleString 은 Number 타입의 내장 함수이며, 인자로 들어온 지역 값에 따른 숫자 표기 방식을 적용하여, 문자열로 반환하는 역할을 합니다. 'en'은 영어권 국가의 숫가 표기 방식을 사용하겠다는 것을 지정한 것입니다. 미국이나 영어권 국가에서는 숫자를 표기할 때, 3자리마다 숫자를 끊어 콤마를 삽입하여 사용합니다.<br><br>* 만약 지역 값을 입력하지 않고 호출하는 경우, 해당 시스템의 지역 값에 따라서 숫자가 표기되는데, 시스템에 따라서 뒤에 소수점 2자리가 붙는 경우가 있습니다.<br>- Number("12345").toLocaleString('en'); ===> 12,345.00<br>이럴 때에는 단순히 소수점을 날려버리는 코드만 추가해 주시면 됩니다.<br>- Number(data_value).toLocaleString('en').split(".")[0] ===> 12,345<br><br>숫자가 아닌, Date 타입도 toLocaleString 함수를 제공하는데, 이 때에는 함수 인자값에 해당하는 지역의 Date 표기 형식의 값을 반환해줍니다.</p>
			</div>
			</td>
		</tr>

		toLocaleString 
		</tbody>
	</table>
</body>
</html>
