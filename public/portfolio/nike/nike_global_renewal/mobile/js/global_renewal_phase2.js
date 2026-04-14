$(function(){
	
	// phase2 - �곹뭹�곸꽭 pdp ��
	// $('.global_tabAear .global_tabTitle a').on('click',function(e){
	// 	$(this).addClass('active').siblings().removeClass('active');
	// 	var gltabIdx = $(this).index();
	// 	$('.global_tabAear').find('.global_tabCont').eq(gltabIdx).show().siblings('.global_tabCont').hide();
	// 	e.preventDefault();
	// });

	// phase2 - 留ㅼ옣�덈궡 �곷떒 寃��� �곸뿭
	$('.global_store_search_box input').keyup(function(event){
		
	  var thisLeng = $(this).val().length;
	  
	  if (thisLeng > 0) {
		$('.global_store_search_box').find('.global_layer_delete').show();
		$('.global_store_search_box').find('.global_search_list').show();

	  }
	  else {
		$('.global_store_search_box').find('.global_layer_delete').hide();
		$('.global_store_search_box').find('.global_search_list').hide();
	  }
	});

	$('.global_search_layer_close .global_layer_delete').on('click', function(e){
		$(this).parents('.global_search_area').find('input').val('').focus().parents('.global_search_area').next().hide();
		$(this).hide();
		e.preventDefault();
	});
	
	var winH = $(window).height();
	var headerH = $('.global_header').height();
	$('.global_store_cont, .global_store_list, .global_store_filter').css('minHeight', winH - headerH);
	// 吏��� or 紐⑸줉 
	$('.global_store_cont').find('a.bt-right').on('click', function(e){
		if ($('.global_store_list').hasClass('is_active')) {
			$('.global_store_list').removeClass('is_active');
			$('.global_store_cont').css('height', '');
		} else {
			$('.global_store_list').addClass('is_active');

			var conH = $('.global_store_list').height();
			$('.global_store_cont').css('height', conH);
		}
		e.preventDefault();
	});
	// 留ㅼ옣李얘린 - 紐⑸줉 �곸꽭蹂닿린
	$('.gl_result_list > a').on('click', function(e){
		$('.global_store_list').addClass('depth2_active');
		$('.global_store_view').addClass('is_active');
		var conH = $('.global_store_view').height();
		if(conH < winH){
			$('.global_store_cont').css('height', winH - 77);
			$('.global_store_view').css('height', winH - 77);
		} else {
			$('.global_store_cont').css('height', conH);
		}
		e.preventDefault();
	});
	// 留ㅼ옣 - 紐⑸줉 �곸꽭 �ㅻ줈媛�湲�
	$('.global_store_view .gl_goback').on('click', function(e){
		$('.global_store_list').removeClass('depth2_active');
		$('.global_store_view').removeClass('is_active');
		var conH = $('.global_store_list').height();
			$('.global_store_cont').css('height', conH);
		e.preventDefault();
	});


	
	// mypage E-mail 臾몄쓽�섍린
	// $('.g_btn_top').find('.btn_enr_email').click(function(){
	// 	$('.g_review_view').show();
	// 	$('.g_bg_cover').addClass('is_active');
	// 	return false;
	// });
	
	$('.g_layerPop').find('.close_layer').click(function(){
		$('.g_bg_cover').removeClass('is_active');
		$(this).parents('.g_layerPop').hide();
		return false;
	});

	// mypage review
	$('.g_review_lst').find('.g_review .g_more').click(function(){
		$(this).parents('.g_review').find('.g_txt').hide();
		$(this).parents('.g_review').find('.g_txt.full_txt').show();

		$(this).hide();
		return false;
	});

	// 1:1 E-mail 臾몄쓽
	$('.g_inquiry_lst').find('ul li > a').click(function(){
		var answer = $(this).parent('li').next('li.answer');
		if(answer.hasClass('is_active')){
			answer.removeClass('is_active');
		} else {
			answer.addClass('is_active');
		}
		return false;
	});


	// �뚯썝�뺣낫愿�由�
	

});

