/**
컨텐츠영역 공통
**/
$(function(){
	$('.uinav a').click(function(){
		var tar = $(this).attr('href');
		var tarPos = $(tar).offset().top;
			tarPos = tarPos - $('.uinav').outerHeight();
		$('html, body').animate({'scrollTop':tarPos}, 300);
		return false;
	});
	$('#uiwrap .moreBox .btn_more').click(function(){
		$(this).next('.code').stop().slideToggle(200);
	});
});

/**
스타일가이드_PC
**/

/* 라디오버튼 */
$(document).on('click', '.radioType input', function (){
	if ($(this).parent().hasClass('readOnly')){return false;}
	if ($(this).parent().hasClass('disabled')){return false;}
	var grpNm = $(this).attr("name");
	$("input:radio[name=" + grpNm + "]").each(function() {
		$(this).closest(".radioType").removeClass("checked");
    	$(this).prop("checked",false);
	});
	$(this).parent().addClass("checked");
    $(this).parent().find("input").prop("checked",true);
});

$(function(){
	//셀렉트바 초기 선택 표기
	$('.selectType').each(function(){
		var txt_value = $(this).find('.selList input[checked=checked]').next('label').text();
		if (txt_value != '') {
			$(this).find('.selList label').parents('.selectType').find('.title').text(txt_value);
		}
	});
});