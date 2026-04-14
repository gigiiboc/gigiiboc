function view_change (e){ // 리스트보기 체인지
	if (!$(e).hasClass('cut-3')){
		$(e).addClass('cut-3')
		$('.lcSection').addClass('cut-3');
	} else {		
		$(e).removeClass('cut-3')
		$('.lcSection').removeClass('cut-3');
	}
}
	
function layer_onoff (e){ // 레이어 on&off
	if ($(e).css("display") == "block"){
		$(e).hide();
		$('body').css({overflow:'visible'})
	} else {
		$(e).show();
		$('body').css({overflow:'hidden'})
	}
}

function align_change (e){ // 매장재고예약 매장명/수량 정렬 변경
	if(!$(e).hasClass('align_bottom')){
		$(e).addClass('align_bottom')
		$(e).removeClass('align_top')
	} else {
		$(e).removeClass('align_bottom')
		$(e).addClass('align_top')
	}
}

function select_open(e){ // 매장재고예약, SMS알림, 바로구매 사이즈 선택 on/off
	if (!$(e).hasClass('open')){
		$(e).addClass('open');
		$(e).next('.opt_list').slideDown();
	} else {
		$(e).removeClass('open');						
		$(e).next('.opt_list').slideUp();
	}
}

function size_select (e){ // 매장재고예약, SMS알림, 바로구매 사이즈 선택 후
	if (!$(e).text() == "" /* lc_170810 추가 s */& !$(e).hasClass('sd_out')/* lc_170810 추가 e */){
		var thisEle = $(e).text();
		$('.default').text(thisEle)
		$('.default').addClass("selected")	
		$(e).parent('li').siblings().find('a').removeClass("selected")
		$(e).addClass("selected")
		$(e).parents('.opt_list').siblings('.btn_option').removeClass('open');		
		$(e).parents('.opt_list').slideUp();
	}	
}

function size_tip_open (e){ // 사이즈툴팁 열기
	if ($(e).parents('.cart-area').siblings('.size-area').find('#selectSize').text() == ""){
		$(e).parents('.cart-area').siblings('.size-area').find('#sizeAlert.alert').show();
	}
}
function size_tip_close (e){ // 사이즈툴팁 열기
	$(e).siblings('#sizeAlert.alert').hide();
}