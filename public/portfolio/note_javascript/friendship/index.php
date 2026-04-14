<!DOCTYPE HTML>
<html>
<head>
	<title>회비청구</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/note_javascript/friendship/friendship.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

	<div class="wrap">
		<h1 class="blind">DUTCH PAY</h1>
		<div class="account_box">
			<h2 class="blind">계좌정보 입력</h2>
			<div class="text_box">
				<label for="bankName">은행명</label><input type="text" id="bankName" value="" placeholder="입금될 은행을 입력해 주세요." title="입금될 은행을 입력해 주세요.">
			</div>
			<div class="text_box">
				<label for="accountNumber">계좌번호</label><input type="text" id="accountNumber" value="" placeholder="계좌 번호를 숫자만 입력해 주세요." title="계좌 번호를 숫자만 입력해 주세요.">
			</div>
		</div>
		<div class="input_box" id="pay_input">
			<h2 class="blind">지출정보 입력</h2>
			<div class="ctt" data-target="1">
				<div class="text_box">
					<label for="ctt_1_place">지출장소</label><input type="text" id="ctt_1_place" class="place" value="" placeholder="지출 장소를 입력해주세요." title="지출 장소를 입력해 주세요.">
				</div>
				<div class="text_box">
					<label for="ctt_1_pay">총액</label><input type="text" id="ctt_1_pay" class="pay" value="" placeholder="지출한 총액을 숫자만 입력해주세요." title="지출한 총액을 숫자만 입력해 주세요.">
				</div>
				<div class="guest_box">
					<div class="guest_list">
						<span class="guest"><input type="checkbox" class="guest_eab3a0ec9db8ec8899" id="ctt_1_guest_eab3a0ec9db8ec8899"><label for="ctt_1_guest_eab3a0ec9db8ec8899" onclick="label(this)">고인숙</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eab980eab79ceb9e98" id="ctt_1_guest_eab980eab79ceb9e98"><label for="ctt_1_guest_eab980eab79ceb9e98" onclick="label(this)">김규래</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eab980eab8b0ed9884" id="ctt_1_guest_eab980eab8b0ed9884"><label for="ctt_1_guest_eab980eab8b0ed9884" onclick="label(this)">김기현</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eab980ec868cec97b0" id="ctt_1_guest_eab980ec868cec97b0"><label for="ctt_1_guest_eab980ec868cec97b0" onclick="label(this)">김소연</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ec9db4eca095ec9b90" id="ctt_1_guest_ec9db4eca095ec9b90"><label for="ctt_1_guest_ec9db4eca095ec9b90" onclick="label(this)">이정원</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eab980eca780ec84a0" id="ctt_1_guest_eab980eca780ec84a0"><label for="ctt_1_guest_eab980eca780ec84a0" onclick="label(this)">김지선</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ebb095ebb3b4eab8b0" id="ctt_1_guest_ebb095ebb3b4eab8b0"><label for="ctt_1_guest_ebb095ebb3b4eab8b0" onclick="label(this)">박보기</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ebb095ec8898ec9db8" id="ctt_1_guest_ebb095ec8898ec9db8"><label for="ctt_1_guest_ebb095ec8898ec9db8" onclick="label(this)">박수인</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ebb095ec9ab0ed98b8" id="ctt_1_guest_ebb095ec9ab0ed98b8"><label for="ctt_1_guest_ebb095ec9ab0ed98b8" onclick="label(this)">박우호</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ebb095ed9884eca480" id="ctt_1_guest_ebb095ed9884eca480"><label for="ctt_1_guest_ebb095ed9884eca480" onclick="label(this)">박현준</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ebb095ed989ceca784" id="ctt_1_guest_ebb095ed989ceca784"><label for="ctt_1_guest_ebb095ed989ceca784" onclick="label(this)">박혜진</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ec86a1ec8898eca784" id="ctt_1_guest_ec86a1ec8898eca784"><label for="ctt_1_guest_ec86a1ec8898eca784" onclick="label(this)">송수진</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ec9db4eca784ec849d" id="ctt_1_guest_ec9db4eca784ec849d"><label for="ctt_1_guest_ec9db4eca784ec849d" onclick="label(this)">이진석</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eca095eca095ec9db4" id="ctt_1_guest_eca095eca095ec9db4"><label for="ctt_1_guest_eca095eca095ec9db4" onclick="label(this)">정정이</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_eca784ed9dacec9881" id="ctt_1_guest_eca784ed9dacec9881"><label for="ctt_1_guest_eca784ed9dacec9881" onclick="label(this)">진희영</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span
						><span class="guest"><input type="checkbox" class="guest_ed99a9ebafb8eb8298" id="ctt_1_guest_ed99a9ebafb8eb8298"><label for="ctt_1_guest_ed99a9ebafb8eb8298" onclick="label(this)">황미나</label><span class="checkmenu" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span>
					</div>
					<span class="guest_plus" onclick="guest_plus(this)"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
					<span class="total_Check_box">
						<span class="total_Check" onclick="total_Check(this)">
							<span class="checkmenu"><span><span></span></span></span>
							<span class="txt">전체선택</span>
						</span>
					</span>
				</div>
				<span class="form_minus" onclick="form_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		</div>
		<div class="form_btn">
			<span class="form_plus" onclick="form_plus()">지출장소 추가</span>
		</div>
		<h2 class="blind">코멘트 입력</h2>
		<textarea id="comment" placeholder="코멘트를 남겨 주세요!" value=""></textarea>
		<a href="javascript:confirm()" class="dom_btn">결과</a>
	</div>
	<div id="hereInDOM"></div>

	<script src="/gigiiboc/portfolio/note_javascript/friendship/friendship.js"></script>
</body>

</html>
