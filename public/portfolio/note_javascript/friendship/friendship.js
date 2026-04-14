/* ==============================
추가기능
============================== */

// 체크 on/off
function label (e){
	if (!$(e).next('.checkmenu').hasClass('checked')){
		$(e).next('.checkmenu').addClass('checked')
		$(e).addClass('checked')
	} else {
		$(e).next('.checkmenu').removeClass('checked')
		$(e).removeClass('checked')
		$(e).parents('.guest_box').find('.total_Check').removeClass('checked')
	}
}
function checkmenu (e){
	if (!$(e).hasClass('checked')){
		$(e).addClass('checked')
		$(e).prev('label').addClass('checked')
		$(e).prev().prev(':checkbox').prop("checked", true)		
	} else {
		$(e).removeClass('checked')
		$(e).prev('label').removeClass('checked')
		$(e).prev().prev(':checkbox').removeProp("checked")
		$(e).parents('.guest_box').find('.total_Check').removeClass('checked')
	}
	return false
}

// 모두 체크 on/off
function total_Check (e){
	if (!$(e).hasClass('checked')){
		$(e).addClass('checked')
		$(e).parent().prev().prev('.guest_list').find('.guest').each(function(){
			$(this).find('label').addClass('checked')
			$(this).find('.checkmenu').addClass('checked')
			$(this).find(':checkbox').prop("checked", true)
		})
	} else {
		$(e).removeClass('checked')
		$(e).parent().prev().prev('.guest_list').find('.guest').each(function(){
			$(this).find('label').removeClass('checked')
			$(this).find('.checkmenu').removeClass('checked')
			$(this).find(':checkbox').removeProp("checked")
		})
	}
	return false
}
	
	
/* ==============================
장소 및 인원 추가/삭제
============================== */

var cttNumber = $('.ctt').length // 항목 수를 초기값으로 정의

// 지출장소 추가
function form_plus (){
	cttNumber += 1
	var cttLength = $('.ctt').length
	var cttClone = $('.ctt').eq(cttLength-1).clone();
	$(cttClone).addClass('ctt_plus_anime');
	$(cttClone).attr('data-target', cttNumber);
	$(cttClone).find('.place').each(function(){
		$(this).val('');
		$(this).attr('id','ctt_'+ cttNumber +'_'+'place');
		$(this).prev().attr('for',$(this).attr('id'));
	});
	$(cttClone).find('.pay').each(function(){
		$(this).val('');
		$(this).attr('id','ctt_'+ cttNumber +'_'+'pay');
		$(this).prev().attr('for',$(this).attr('id'));
	});
	$(cttClone).find('.guest').each(function(){
		$(this).removeClass('user_plus_anime');
	});
	$(cttClone).find('input[type="checkbox"]').each(function(){
		$(this).attr('id','ctt_'+ cttNumber +'_'+$(this).attr('class'));
		$(this).next().attr('for',$(this).attr('id'));
	});
	$(cttClone).appendTo('#pay_input');
	// $(window).scrollTop($('#pay_input').position().top + $('.ctt:last-child').position().top + 5)
}

// 지출장소 제거
function form_minus (e){
	var cttLength = $('.ctt').length // 현재 항목 수

	if (cttLength == 1){
		alert('지출장소는 최소 1개입니다!')
	} else if (cttLength == 2){
		$(e).parents('.ctt').detach();
		// $(window).scrollTop($('.ctt:last-child').position().top + 5)	
	} else {
		$(e).parents('.ctt').detach();
		// $(window).scrollTop($('#pay_input').position().top + $('.ctt:last-child').position().top + 5)
	}
}

// 인원 추가
function guest_plus (e){
	var onoff = true; // 유효성 체크 함수
	var name = prompt('추가할 사용자를 입력하세요!');
	var name_encode = encodeURIComponent(name).replace(/%/g, '').toLowerCase(); // 유니코드 문자 형태로 변경 > '%' 표기를 제거 > 소문자 변경

	if (name == null){ // 취소 시
		return false
	} else if (name == ""){ // 사용자명을 입력 안했을 시
		alert('사용자명을 입력해 주세요!')
	} else if (name.substr(0,1) == " "){ // 첫 글자가 공백일 경우
		alert('첫 글자는 공백이 올 수 없어요!')
	} else {

		var checkBox = $(e).parents('.ctt').find('input[type="checkbox"]')

		for (var i=0; i<checkBox.length; i++){
			if (checkBox.eq(i).attr('class') == 'guest_' + name_encode){
				alert('이미 등록된 친구에요!')
				onoff = false; // 만약 같은 사용자 명이 있으면 홀드 처리
			}
		}	

		if (onoff){ // 모든 분기를 통과하면 실행
			var ctt_step = $(e).parents('.ctt').attr('data-target');

			if ($(e).parents('.guest_box').find('.guest_comment')){
				$(e).parents('.guest_box').find('.guest_comment').detach();
				$(e).parents('.guest_box').find('.total_Check_box').append('<span class="total_Check" onclick="total_Check(this)"><span class="checkmenu"><span><span></span></span></span><span class="txt">전체선택</span></span>')
			}
			$(e).parents('.ctt').find('.guest_list').append('<span class="guest user_plus_anime"><input type="checkbox" class="guest_' + name_encode + '" id="ctt_' + ctt_step + '_' + 'guest_' + name_encode + '" checked><label for="ctt_' + ctt_step + '_' + 'guest_' + name_encode + '" onclick="label(this)" class="checked">' + name + '</label><span class="checkmenu checked" onclick="checkmenu(this)"><span><span></span></span></span><span class="guest_minus" onclick="guest_minus(this)"><i class="fa fa-times" aria-hidden="true"></i></span></span>')
		}

	}
}
// 인원 삭제
function guest_minus (e){
	if ($(e).parents('.guest_box').find('.guest').length == 1){
		$(e).parents('.guest_box').find('.total_Check_box').find('.total_Check').detach();
		$(e).parents('.guest_box').find('.guest_list').html('<span class="guest_comment">사용자를 추가해주세요!</span>')
	} else {
		$(e).parents('.guest').detach();
	}	
}


/* ==============================
유효성 검사
============================== */
function confirm (){
	var bankOn = true,
		accountOn = true,
		placeOn = true,
		payOn = true,
		guestOn = true

	// 은행 검증
	if ($('#bankName').val() == ''){ 
		alert('송금될 은행을 입력해 주세요!')
		$('#bankName').focus();
		bankOn = false;
		return false
	}

	// 계좌 번호 검증
	if ($('#accountNumber').val() == ''){
		alert('계좌 번호를 입력해 주세요!')
		$('#accountNumber').focus();
		accountOn = false;
		return false
	} else if (!Number($('#accountNumber').val())){
		alert('계좌 번호는 숫자만 입력 가능합니다!')
		$('#accountNumber').focus();
		accountOn = false;
		return false
	}

	for (var i=0; i<$('.ctt').length; i++){
		// 지출 장소 검증
		if ($('.place').eq(i).val() == ""){
			alert('지출장소를 입력해 주세요!')
			$('.place').eq(i).focus();
			placeOn = false;
			break
		}
		// 총액 검증
		if ($('.pay').eq(i).val() == ""){
			alert('총액을 입력해 주세요!')
			$('.pay').eq(i).focus();
			payOn = false;
			break
		} else if (!Number($('.pay').eq(i).val())){
			alert('총액은 숫자만 입력 가능합니다!')
			$('.pay').eq(i).focus();
			payOn = false;
			break
		}
		// 인원 체크
		if ( $('.ctt').eq(i).find('input[type="checkbox"]:checked').length == 0 ){
			$('.ctt').removeClass('ctt_plus_anime')
			alert('참여자는 최소 1명 이상이어야 합니다!')
			$(window).scrollTop($('.ctt').eq(i).position().top + $('.account_box').outerHeight() - 20)
			$('.ctt').eq(i).addClass('ctt_plus_anime')
			guestOn = false;
			break
		}
	}

	if (bankOn == true && accountOn == true && placeOn == true && payOn == true && guestOn == true){
		result()
	} else {
		return false	
	}
}


/* ==============================
결과 출력
============================== */

// 결과 출력
function result(){

	var result = '';

	// 지출장소 및 참여 인원당 금액
	$('.ctt').each(function(){
		var userCnt = $(this).find('input[type="checkbox"]:checked').length; // 항목의 참여한 인원
		var userPay = Number($(this).find('.pay').val()) / userCnt; // 항목의 총액에서 참여한 인원만큼 나눈 값
		
		/*
		if ($(this).find('.pay').val().substr(0, 1) == '-'){
			userPay = Number('-' + uncomma($(this).find('.pay').val())) / userCnt; // 항목의 총액에서 참여한 인원만큼 나눈 값
		} else {
			userPay = Number(uncomma($(this).find('.pay').val())) / userCnt; // 항목의 총액에서 참여한 인원만큼 나눈 값
		}
		*/

		$(this).find('input[type="checkbox"]:checked').val(userPay); // 항목의 총액에서 참여한 인원만큼 나눈 값을 각 체크박스 val 에 할당
		result += $(this).find('.place').val() + '<br>' + $(this).find('.pay').val() + '원 / ' + userCnt  + ' = ' + userPay.toLocaleString('en') + '원<br><br>'; // 총액 / 참여한 인원 = 인원당 청구 금액
	});	

	// 각 유저에게 할당
	$('input:checked').each(function(){ // 체크된 체크박스 중에서
		var ele = $(this).attr('class')
		if ($('.'+ele+':checked').eq(0).attr('id') == $(this).attr('id')){ // 각 이름별로 한개(첫번째)만 가져온다.
			if (userTotal($(this).attr('class')) !== 0){
				result += $(this).next().html() + ' = ' + Math.round(userTotal($(this).attr('class'))).toLocaleString('en') + '원 <span style="font-size: 0.9em;color: #999;">(소수점 반올림)</span><br>';
			}
		}
	});
	
	// 은행과 계좌정보
	result += '<br><strong class="em">' + $('#bankName').val() + ' ' + $('#accountNumber').val() + '</strong>';
	
	// 남길말
	if ($('#comment').val() !== ''){
		result += '<br><br>' + $('#comment').val();
	}

	$('#hereInDOM').html('<div class="result"><div class="result_box"><div id="copyEle">' + result + '</div><span id="copy" data-clipboard-action="copy" data-clipboard-target="#copyEle">클립보드에 복사하기</span><a href="javascript:result_close()" class="result_close"><i class="fa fa-times" aria-hidden="true"></i></a></div><span class="heightalign"></span></div>');
	$('body').css('overflow','hidden')

}

// 각각 유저에게 회비 할당
function userTotal(str){
	var total = 0; // 초기화
	$('.'+str+':checked').each(function(){ // 체크된 class 에 반복 명령
		total += Number($(this).val()); // total에 이것의 벨류값을 더함.
	});
	return total; // 결과값 반환
}

// 콤마 제거
function uncomma(str) {
	str = String(str);
	return str.replace(/[^\d]+/g, '');
}

// 클립보드에 복사
$(function(){
	var clipboard = new Clipboard('#copy');
	clipboard.on('success', function(e){
		alert('클립보드에 복사되었어요!')
	});
	clipboard.on('error', function(e){
		alert('선택된 영역을 복사해 주세요!')
	});
})

// 결과 닫기
function result_close (){
	$('.result').detach();
	$('body').css('overflow','visible')
}