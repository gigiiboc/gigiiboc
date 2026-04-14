<!DOCTYPE html>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<style>
.toggle .toggle-content {padding:10px 15px 20px; display:none;}
</style>

<div class="step">
	<ul>
		<li class="toggle js-toggle">
			<h4 class="toggle-button js-toggle-button"><b>1</b>상담<span></span></h4>
			<p class="toggle-content js-toggle-content">국제결혼 전반적인 소개와 이해를 도와 드립니다. <br>이미 국제결혼에 대한 정보나 상황을 잘 알고 계신 분은 시스템만 체크하십시오. 계약 전 여성상담은 하지 마십시오. 고객님을 보지도 못하고, 제대로 알지도 못하는데, 어떻게 여성추천을 한다는 말입니까. 추천 여성이라고 사진을 보내준다고 절대 현혹되지 마십시오. 홈페이지의 여성이 결혼했는지 안했는지 알아보는 것도 의미가 없습니다. 예쁘고 착한 여성이 지난달에도 있고, 이번달에도 있다는건 조금만 생각해보시면 거짓이라는 걸 짐작할 수 있을 겁니다. 그리고 선택하신 여성에게 보내주신 프로필을 전달하고 의사를 묻기 위해서는 교통비, 식대, 인건비, 시간 등 적지 않은 비용이 드는데 계약도 안한 상태에서 할 수 있다면 봉사이거나 장난 둘 중에 하나일 것입니다.<br>정상적인 비용을 지불하시고 정확하고 진실성있는 정보를 받으시는 것이 옳은 일이라 생각됩니다. 말로 하는 여성상담은 상담사와 회원님의 뜬구름 잡는 이야기에 불과합니다.</p>
		</li>
		<li class="toggle js-toggle">
			<h4 class="toggle-button js-toggle-button"><b>2</b>계약<span></span></h4>
			<p class="toggle-content js-toggle-content">회사에 대한 믿음과 신뢰가 가고 국제결혼에 대한 결심이 섰을 때 계약을 합니다.<br>가계약금은 100만원이고, 이때부터 남성의 이상형과 프로필, 그리고 다양한 사진들을 현지로 전달하여 적합한 여성회원을 모집/추천하는 사전 매칭이 시작됩니다. 현재 대부분의 국제결혼회사에서 진행 중인 일사천리, 속전속결 시스템에 의문을 갖고 계신 회원님이 많으신 줄로 압니다. 내가 찜한 여성을 현지에 가면 정말 만날 수 있는 걸까? 그 여성과 진짜 결혼할 수 있을까? 결혼 후 잘 살 수 있을까? 등의 걱정과 불안을 안고 출국하는 회원님 또한 상당수이실 것입니다.<br>서원국제결혼의 1:1 사전매칭시스템은, 무조건 현지로 출발하여 평생의 반려자를 10여분 만에 결정해야했던 예전의 방식과 달리, 양 당사자가 사전에 충분한 시간을 갖고 신중한 결정을 할 수 있게 해드립니다.</p>
		</li>
		<li class="toggle js-toggle">
			<h4 class="toggle-button js-toggle-button"><b>3</b>여성의 의사결정 및 부모님의 동의<span></span></h4>
			<p class="toggle-content js-toggle-content">호감여성을 선정하시면 여성의 의사를 확인하고 가족의 동의를 구합니다. <br>만약 수차례에 걸쳐 여성을 선정하여 의사를 물었음에도 동의를 구하지 못해 회원님이 계약 취소를 원할 시에는 50만원을 환불해 드립니다. 동의를 받아 출국했는데 여성이 맞선에 나오지 않을 시, 또 결혼을 원치 않을 시에도 회사에서 비용을 부담합니다. 이에 대해서는 하단에 자세히 명시하겠습니다.</p>
		</li>
		<li class="toggle js-toggle">
			<h4 class="toggle-button js-toggle-button"><b>4</b>신상정보제공을 위한 서류준비<span></span></h4>
			<p class="toggle-content js-toggle-content">양 당사자의 맞선합의가 이루어지면 정확한 신상정보제공을 위해 남녀 모두 미혼증명, 건강진단, 범죄경력, 직업에 관련된 서류를 제출합니다. 서원국제결혼은 취합한 서류를 상대방의 언어로 번역/공증하고 대사관 인증을 받아 양측에 제공해드립니다.</p>
		</li>
	</ul>
</div>

<script>
	$(document).ready(function(){
		var title = $(".js-toggle > .js-toggle-button");
		var info = $(".js-toggle > .js-toggle-content");

		$(title).find("span").html("+")

		$(title).click(function(){
			if("block" == $(this).next(info).css("display")){
				$(this).find("span").html("+")
				$(this).next(info).stop().slideUp(300)
			}else{
				$(this).find("span").html("-")
				$(this).next(info).stop().slideDown(300)
			}
		})
	});
</script>


</body>
</html>