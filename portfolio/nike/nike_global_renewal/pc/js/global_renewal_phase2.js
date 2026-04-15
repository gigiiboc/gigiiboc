

//적용하기 버튼 
$(window).scroll(function(){

	var scrollTop = $(document).scrollTop();
	var lnbH = $('.global_lnb').height(); 
	var lnbOffset = $('.global_lnb').offset(); 
	var windowH = $(window).height();

	if ((windowH <= lnbH) && (scrollTop <= lnbH/3 ))
	{
		$(".global_btn_gap").css("position", 'fixed');
	}else {
		$(".global_btn_gap").css("position", 'static');
	}

});


$(function(){
	//위시리스트 sns 팝업
	$('.btn_sns_area > a').on('click',function(){
		$(this).siblings(".global_laypop_sns").show();
	});
	$('.global_laypop_sns > .btn_close').on('click',function(){
		$(this).parent(".global_laypop_sns").hide();
	});

	// mypage 상품리뷰 불량리뷰 신고하기
	$('.global_review_view').find('.g_btn .b_dec').click(function(){
		$('.g_decLayer').show();
		$('.bg_cover').show();
		return false;
	});
	$('.g_decLayer').find('.btn_close').click(function(){
		$('.g_decLayer').hide();
		$('.bg_cover').hide();
		return false;
	});

	// 1:1 E-mail 문의 답변 toggle
	$('.tbl_style_01').find('.btn_question').click(function(){
		var is_active = $(this).parents('tr');
		if(is_active.hasClass('is_active')){
			is_active.removeClass('is_active');
			is_active.next('tr.answer').find('> td').removeClass('is_active');
		} else {
			is_active.addClass('is_active');
			is_active.next('tr.answer').find('> td').addClass('is_active');
		}
		return false;
	});

	// order 상세 tab jq
	$('.g_tab_jq').find('.g_order_step li a').click(function(){
		var curr = $(this).attr('href');
		$('.g_tab_jq').find('.g_order_con').hide();
		$(curr).show();

		$('.g_tab_jq').find('li').removeClass('active');
		$(this).parent('li').addClass('active');
		return false;
	});

	
});

// layer popup
function g_layer_show(e, h){ // this / hidden
	$('.bg_cover').show();
	$('.' + e).show();
	$('.' + h).hide();
}
function g_layer_close(e){
	$('.bg_cover').hide();
	$('.' + e).hide();
}


