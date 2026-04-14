"use strict";

/**
LOADING
**/
$(window).on('load',function(){ //로딩 이미지 호출
	if(window.location.pathname.indexOf("order/write") == -1){
	loadingClose(); // 윈도우 로딩이 끝난시점에 로딩 종료
	}
	
	});

function loadingOpen(){
	$('#loading').stop(true).hide().fadeIn(300);
}
function loadingClose(){
	$('#loading').fadeOut(300);
}

var mainLoadingHtml = '<div class="mainLoading"><span class="hide">로딩중</span></div>';
function mainLoadingOpen(mainTarget){
	$(mainTarget).append(mainLoadingHtml);
}
function mainLoadingClose(mainTarget){
	$(mainTarget).find('.mainLoading').fadeOut(300, function(){
		$(this).remove();
		$(this).css({'overflow' : ''});
	});
}


/**
scrollTop
**/
function scrollSet(scrollPo){
	/* [약관페이지] */
	if ($(scrollPo).closest('.terms_page, .privacy_page')){
		$('html, body').animate({'scrollTop' : $(scrollPo).offset().top - 50},200);
	} else {
		$('html, body').animate({'scrollTop' : $(scrollPo).offset().top + 4},200);
	}	
}

$(document).on('click', '.btnTop', function(){
	$('html, body').animate({'scrollTop' : 0},200);
});

$(window).on('load', function(){
	if ($('.product_detail, .mypage').length > 0){
		$('.btnTop').css('bottom','182px')
	}
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 200){
		$('.btnTop').fadeIn('swing');
	} else {
		$('.btnTop').fadeOut('swing');
	}
	return false;
});


/**
inputType
**/
$(document).on('keyup', '.inp_text input', function(){
	if ($(this).val().length > 0) {
		$(this).closest('.inp_text').find('.btn_clear').addClass('on');
	} else {
		$(this).closest('.inp_text').find('.btn_clear').removeClass('on');
	}
});
$(document).on('click', '.inp_wrap .btn_clear', function(){
	$(this).closest('.inp_text').find('input').val('');
	$(this).removeClass('on');
	$(this).closest(".labelType").removeClass('on')
});

/*
$(function() {
	$(".labelType input").focus(function() {
		$(this).closest(".labelType").addClass('on')
	}).blur(function(){
		$(this).closest(".labelType").removeClass('on')
	});
});
*/
$(function() {
	$(".labelType input").blur(function(){
		if ($(this).val().length > 0) {
			$(this).closest(".labelType").addClass('on')
		} else {
			$(this).closest(".labelType").removeClass('on')
		}
	});
});

/**
selectType
**/
$(document).on('click', '.inp_select .title', function(){
	if ($(this).closest('.inp_select').hasClass('disabled')) {
		return false;
	}
	var target = $(this).closest('.inp_select');
	if (target.hasClass('open')) {
		target.find('.selList').hide().mCustomScrollbar("destroy");
		target.removeClass('open');
	} else {
		$('.selList').hide().mCustomScrollbar("destroy");
		$('.inp_select').removeClass('open');
		$(this).closest('.inp_select').addClass('open');
		$(this).siblings('.selList').show().mCustomScrollbar({
			axis:'y',
			scrollbarPosition:'outside',
			advanced:{autoExpandHorizontalScroll:true}
		});
	};
});

$(document).on('click', '.inp_select .selList label', function (){
	var disabled = $(this).prev('input').prop('disabled');
	if (disabled) {
		return false
	}
	var txt_value = $(this).html();
	var target = $(this).closest('.inp_select');
	target.find('.title').html(txt_value).addClass('on');
	target.find('input').prop('checked',false);
	$(this).prev('input').prop('checked',true);
	target.removeClass('open');
	target.find('.selList').hide();
	if(typeof inp_select_click_callback_prdDetail  === 'function'){
		inp_select_click_callback_prdDetail(this);
	}
});

$(window).on('load', function(){	
	if ($('.inp_select').length > 0){
		$('.inp_select input[type=radio]:checked').each(function(){
			var select_title = $(this).closest('li').find('label').html();
			$(this).closest('.selectBox').find('.title').text(select_title);
		});
	}
});

$(document).on('click', '.inp_email .inp_select input', function() {
	if ($(this).closest('ul').find('li').length == ($(this).closest('li').index()+1))
	{
		$(this).closest('.inp_email').addClass('active');
		$(this).closest('.inp_email').find('.email_input input').focus();
	}
});


/**
textareaType
**/
$(window).on('load', function(){
	if ($('.inp_textArea').length > 0)
	{
		$(document).on('focus', '.inp_textArea textarea', function(){
			$(this).closest('.inp_textArea').addClass('focus');
		});
		$(document).on('blur', '.inp_textArea textarea', function(){
			$(this).closest('.inp_textArea').removeClass('focus');
		});
		/*
		for (var i = 0; i < $('.inp_textArea').length; i++)
		{
			$('.inp_textArea').eq(i).height($('.inp_textArea').eq(i).find('textarea').innerHeight());
			$('.inp_textArea').eq(i).find(".textarea-clone").css({'min-height' : $('.inp_textArea').eq(i).find('textarea').innerHeight()});
			var textareaLineHeight=parseInt($('.inp_textArea').eq(i).find('textarea').css("line-height"));

			$(".inp_textArea").eq(i).mCustomScrollbar({
				scrollInertia:0,
				theme:"dark-3",
				advanced:{autoScrollOnFocus:false},
				mouseWheel:{disableOver:["select","option","keygen","datalist",""]},
				keyboard:{enable:false},
				snapAmount:textareaLineHeight
			});
		}

		$(".inp_textArea textarea").on("keyup keydown",function(e){
			var textarea=$(this),textareaWrapper=$(this).closest(".inp_textArea"),textareaClone=$(this).closest(".inp_textArea").find(".textarea-clone");
			var $this=$(this),textareaContent=$this.val(),clength=textareaContent.length,cursorPosition=textarea.getCursorPosition();
			//console.log(textareaContent.length);
			textareaContent="<span>"+textareaContent.substr(0,cursorPosition)+"</span>"+textareaContent.substr(cursorPosition,textareaContent.length);
			textareaContent=textareaContent.replace(/\n/g,"<br />");
			textareaClone.html(textareaContent+"<br />");
			$this.css("height",textareaClone.innerHeight());
			//console.log(textareaClone.innerHeight());
			var textareaCloneSpan=textareaClone.children("span"),textareaCloneSpanOffset=0,
				viewLimitBottom=(parseInt(textareaClone.css("min-height")))-textareaCloneSpanOffset,viewLimitTop=textareaCloneSpanOffset,
				viewRatio=Math.round(textareaCloneSpan.innerHeight()+textareaWrapper.find(".mCSB_container").position().top);
			if(viewRatio>viewLimitBottom || viewRatio<viewLimitTop){
				if((textareaCloneSpan.innerHeight()-textareaCloneSpanOffset)>0){
					textareaWrapper.mCustomScrollbar("scrollTo",textareaCloneSpan.innerHeight()-textareaCloneSpanOffset-textareaLineHeight);
				}else{
					textareaWrapper.mCustomScrollbar("scrollTo","top");
				}
			}
		});

		$.fn.getCursorPosition=function(){
			var el=$(this).get(0),pos=0;
			if("selectionStart" in el){
				pos=el.selectionStart;
			}else if("selection" in document){
				el.focus();
				var sel=document.selection.createRange(),selLength=document.selection.createRange().text.length;
				sel.moveStart("character",-el.value.length);
				pos=sel.text.length-selLength;
			}
			return pos;
		}
		*/
	}
});


/**
POPUP
**/
var pop = new Array(), popObj, popReady = true;
var pop_idx = -1;

function showLayer(e,t) {
	if (popReady){
		popReady = false;
		pop.push(e);
		pop_idx++;
		popObj = $('#' + pop[pop_idx]);
		if (pop_idx > 0) {
			console.log(pop_idx);
			popObj.css('z-index', + (7000 + pop_idx));
		}
		$('html').css({'overflow-y' : 'hidden', 'width' : 'auto'});
		popObj.fadeIn(300, function(){
			popObj.addClass('open');
			popReady = true;
		});
		if (popObj.find('.reviewPopSlide').length > 0){
			/*slick destroy 추가*/
            if(popObj.find('.reviewPopSlide').is(".slick-slider")){
                popObj.find('.reviewPopSlide').slick('unslick');
            }
			popObj.find('.reviewPopSlide').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: true,
				infinite: false
			});
		}
		imgCrop();
	}
	if (t)
	{
		popObj.find('.tabType li:nth-child('+t.charAt(t.length-1)+') a').click();
	}
}

function layerPopClose(callback){
	if (popReady){
		popReady = false;
		popObj = $('#' + pop[pop_idx]);
		pop.pop();
		pop_idx = pop_idx - 1;
		popReady = true;
		popObj.fadeOut(300, function(){
			if (pop_idx < 0) {
				//$('html').css({ 'overflow-y':'' });
				$('html').css({'overflow-y' : '', 'margin-right' : '0', 'width' : '100%'});
			}
			popObj.removeClass('open');
			/*close 후 callback 추가*/
			if(typeof callback === 'function'){
				callback();
			}
		})
	}
};


/**
SCROLL
**/
$(window).on('load', function(){
	if ($('.hScroll').length > 0){
		hScroll();
	}
	if ($('.vScroll').length > 0){
		vScroll();
	}
});

function hScroll(){
	$('.hScroll').mCustomScrollbar("destroy");
	$('.hScroll').mCustomScrollbar({
		axis:'x',
		//autoHideScrollbar:true,
		scrollbarPosition:'outside',
		advanced:{autoExpandHorizontalScroll:true}

	});
}

function vScroll(){
	$('.vScroll').mCustomScrollbar("destroy");
	$('.vScroll').mCustomScrollbar({
		axis:'y',
		//autoHideScrollbar:true,
		scrollbarPosition:'outside',
		advanced:{autoExpandHorizontalScroll:true}
	});
}



/**
ACORDION
**/
/* 테이블 */
function tblAco(e){
	if ($(e).closest('tr').next().css('display') == 'none'){
		$(e).addClass('on')
		$(e).closest('tr').find('.js_arrow, .js_ListTtl').addClass('on')
		$(e).closest('tr').next().css('display', 'table-row')
		$(e).closest('tr').next().find('.js_replyCtt').stop().slideDown(500, function(){
			/* [클릭시 스크롤이동] */
			if ($(e).closest('tr').hasClass('noScrolling')){
				return false;
			} else {
				/* [제품상세일경우] */
				if ($('.product_detail').length > 0){
					$('body,html').animate({
						scrollTop: $(e).closest('tr').offset().top - 48
					}, '500');
				} else {
					$('body,html').animate({
						scrollTop: $(e).closest('tr').offset().top - 50
					}, '500');
				}			
			}
		})
	} else {
		$(e).removeClass('on')
		$(e).closest('tr').find('.js_arrow, .js_ListTtl').removeClass('on')
		$(e).closest('tr').next().find('.js_replyCtt').stop().slideUp(500, function(){
			$(this).parents('tr').css('display', 'none')
		})
	}
	imgCrop();
}
$(document).on('click', '.js_ListTtl', function(){
	/* [비밀글이 있을 경우] */
	if ($(this).closest('tr').hasClass('lock')){
		if ($(this).closest('tr').hasClass('userOn')){
			$(this).closest('.js_tblList').find('.js_ListTtl').removeClass('on')
			$(this).closest('.js_tblList').find('.js_arrow').removeClass('on')
			$(this).closest('.js_tblList').find('.js_replyCtt').stop().slideUp(500, function(){
				$(this).closest('tr').css('display', 'none')
			})
			tblAco(this)
		} else {
			alert('비밀글입니다.')
		}
	} else {
		$(this).closest('.js_tblList').find('.js_ListTtl').removeClass('on')
		$(this).closest('.js_tblList').find('.js_arrow').removeClass('on')
		$(this).closest('.js_tblList').find('.js_replyCtt').stop().slideUp(500, function(){
			$(this).closest('tr').css('display', 'none')
		})
		tblAco(this)
	}
});
$(document).on('click', '.js_acoLink', function(){
	/* [오픈시 다른 항목 닫힘] */
	if ($(this).closest('.js_acoBox').hasClass('type02')){
		$(this).closest('.js_acoBox').find('.js_acoList').removeClass('on');
		$(this).closest('.js_acoBox').find('.js_acoCon').stop().slideUp(300);
	}
	/* [해당 항목만 열고 닫기] */
	if ($(this).closest('.js_acoList').find('.js_acoCon').css('display') == 'block'){
		$(this).closest('.js_acoList').removeClass('on');
		$(this).closest('.js_acoList').find('.js_acoCon').stop().slideUp(300)
	} else {
		$(this).closest('.js_acoList').addClass('on');
		$(this).closest('.js_acoList').find('.js_acoCon').stop().slideDown(300)
	}
});


/**
HEADER
**/