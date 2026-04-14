function viewToggle(e){ // list view change
	var proList = $('.lc_renewal_probox .pro_list')
	if (!$(e).hasClass('_2d')){
		$(e).stop().addClass('_2d').find('span').text("크게 보기")
		proList.addClass('_2d')
	} else {
		$(e).stop().removeClass('_2d').find('span').text("작게 보기")
		proList.removeClass('_2d');
	}
}

function SizeSelect (e){ // size select
	var is_option = $(e).find('option:selected').attr('data-type')
	$(e).siblings('.size_label').find('label').html(is_option)
}

function snkr_menu (){ // snkr_menu
	if (!$('body').hasClass('snkr_active')){
		$('body').addClass('snkr_active')
	} else {
		$('body').removeClass('snkr_active')	
	}
}

$(document).ready(function(){ // goTop
	$('.lc_renewal_goTop a').click(function(){
		$('body,html').animate({
			scrollTop: 0
		}, '1000');
		return false;
	});
})

$(document).ready(function(){ // text line script
	var leth = $('.pdt_info').length
	for (var i=0; i < leth; i++){
		var ele = $('.pdt_info').eq(i)
		var eleText = ele.text().split(' ').join('</span>&nbsp;<span style="display:inline-block">')
		ele.html('<span style="display:inline-block">'+eleText+'</span>')
	}
})

function favicon_layer_close (e){
	$(e).parents(".favicon_layer").hide();
}

function detail_open() { // 매장상세 on/off
	if ($('.pop_storeStock').hasClass('active')) {
		$('.pop_storeStock').removeClass('active');
	} else {
		$('.pop_storeStock').addClass('active');
	}
	if ($('.pop_storeStockService').hasClass('active')) {
		$('.pop_storeStockService').removeClass('active');
	} else {
		$('.pop_storeStockService').addClass('active');
	}
}

function show_Service(){ // 예약확인 on
	$('.pop_storeStockService').show();
	$('body').css({
		overflow:'hidden',
		position:'relative'
	})
}
function close_Service (){ // 예약확인 off
	$('.pop_storeStockService').hide();					
	$('body').css({
		overflow:'visible',
		position:'static'
	})
}




function layer_onoff (e){ // 레이어 on&off
	if ($(e).css("display") == "block"){
		$(e).hide();
		$('body').css({overflow:'visible'})
	} else {
		$(e).show();
		if (e == '.lction_setup'){
			$('.lction_not').hide();
		}
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
	if (!$(e).text() == ""/* lc_170810 추가 s */ & !$(e).hasClass('sd_out')/* lc_170810 추가 e */){
		var thisEle = $(e).text();
		$('.selected-opt').text(thisEle)
		$('.selected-opt').addClass("selected")		
		$(e).parent('li').siblings().find('a').removeClass("selected")
		$(e).addClass("selected")
		$(e).parents('.opt_list').siblings('.btn_option').removeClass('open');		
		$(e).parents('.opt_list').slideUp();
	}	
}