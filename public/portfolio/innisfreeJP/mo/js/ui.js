"use strict";
/**
공통변수
**/
var winST, openPos, tarObj, tarPos;
var winW = $(window).width(), winH = $(window).height(), docH, layerH;

/**
디바이스체크
**/
var _Device={};_Device.smartphone=false;_Device.tablet=false;_Device.type=0;_Device.os=0;function checkDevice(){if(navigator.userAgent.match(/Android/)!=null){if(navigator.userAgent.match(/mobile|Mobile/)!=null){_Device.type=2}else{_Device.type=1}_Device.os=0}else{var minSiteWidth=480;var maxSiteWidth=1024;var w=($(window).width()<window.screen.width)?$(window).width():window.screen.width;if(navigator.userAgent.match(/iPhone|iPad|iPod/)!=null){_Device.os=1}else{_Device.os=2}if(navigator.userAgent.match(/webOS|iPhone|iPad|iPod|BlackBerry/)!=null){if(w<=minSiteWidth||(navigator.userAgent.match(/iPhone|iPod|BlackBerry/)!=null&&navigator.platform.match(/iPad/)==null)){_Device.type=2}else{_Device.type=1}}else{_Device.type=0}}if(_Device.type==2){_Device.tablet=false;_Device.smartphone=true}else if(_Device.type==1){_Device.tablet=true;_Device.smartphone=false}else{_Device.smartphone=_Device.tablet=false}}var _Browser={};function browserDetect(){_Browser.ie6=false;_Browser.ie7=false;_Browser.ie8=false;_Browser.ie9=false;_Browser.ie10=false;_Browser.ie11_over=false;_Browser.msie=false;_Browser.mozilla=false;_Browser.safari=false;_Browser.chrome=false;_Browser.version=0;_Browser.name="etc";var objappVersion=navigator.appVersion;var objAgent=navigator.userAgent;var objbrowserName=navigator.appName;var objfullVersion=''+parseFloat(navigator.appVersion);var objBrMajorVersion=parseInt(navigator.appVersion,10);var objOffsetName,objOffsetVersion,ix;var iev=0;var ieold=(/MSIE (\d+\.\d+);/.test(navigator.userAgent));var trident=!!navigator.userAgent.match(/Trident\/7.0/);var rv=navigator.userAgent.indexOf("rv:11.0");if(ieold)iev=new Number(RegExp.$1);if(navigator.appVersion.indexOf("MSIE 10")!=-1)iev=10;if(trident&&rv!=-1)iev=11;if(iev!=0||(objOffsetVersion=objAgent.indexOf("MSIE"))!=-1){_Browser.name="Microsoft Internet Explorer";_Browser.msie=true;_Browser.version=iev;if(_Browser.version<7){_Browser.ie6=true}else if(_Browser.version<8){_Browser.ie7=true}else if(_Browser.version<9){_Browser.ie8=true}else if(_Browser.version<10){_Browser.ie9=true}else if(_Browser.version<11){_Browser.ie10=true}else{_Browser.ie11_over=true}}else{if((objOffsetVersion=objAgent.indexOf("Chrome"))!=-1){_Browser.chrome=true;objbrowserName="Chrome";objfullVersion=objAgent.substring(objOffsetVersion+7)}else if((objOffsetVersion=objAgent.indexOf("Firefox"))!=-1){_Browser.mozilla=true;objbrowserName="Firefox"}else if((objOffsetVersion=objAgent.indexOf("Safari"))!=-1){_Browser.safari=true;objbrowserName="Safari";objfullVersion=objAgent.substring(objOffsetVersion+7);if((objOffsetVersion=objAgent.indexOf("Version"))!=-1)objfullVersion=objAgent.substring(objOffsetVersion+8)}else if((objOffsetName=objAgent.lastIndexOf(' ')+1)<(objOffsetVersion=objAgent.lastIndexOf('/'))){objbrowserName=objAgent.substring(objOffsetName,objOffsetVersion);objfullVersion=objAgent.substring(objOffsetVersion+1);if(objbrowserName.toLowerCase()==objbrowserName.toUpperCase()){objbrowserName=navigator.appName}}if((ix=objfullVersion.indexOf(";"))!=-1)objfullVersion=objfullVersion.substring(0,ix);if((ix=objfullVersion.indexOf(" "))!=-1)objfullVersion=objfullVersion.substring(0,ix);objBrMajorVersion=parseInt(''+objfullVersion,10);if(isNaN(objBrMajorVersion)){objfullVersion=''+parseFloat(navigator.appVersion);objBrMajorVersion=parseInt(navigator.appVersion,10)}_Browser.name=objbrowserName;_Browser.version=objBrMajorVersion}}checkDevice();browserDetect();
// 디바이스체크 Pc = 0, Tablet = 1, Mobile = 2
// console.log(_Device.type);

/**
common
**/
$(window).on('resize', function(){
	winST = $(window).scrollTop();
	winW = $(window).width();
	winH = $(window).height();
});
$(window).on('scroll',function(){
	//didScroll = true;
	winST = $(this).scrollTop();
	winH = $(this).height();

	/*if (didScroll) {
		hasScrolled();
	}*/

	if (winST > winH * 0.5) {
		$('#quick').addClass('show').css({'transform' : 'translateY(-' + ($('.pdtBar').height() - 40) + 'px)'});
	} else {
		$('#quick').removeClass('show').css({'transform' : ''});
	}

});

/* scrollTop */
function scrollSet(scrollPo){
	$('html, body').animate({'scrollTop' : $(scrollPo).offset().top},200);
}
/* header */
$(document).on('click', '#btn_search', function(){
	$('html').css('overflow','hidden');
	$('#schArea').addClass('visible');
	$('#gSearch').focus();
	return false;
});
$(document).on('click', '#schArea .btn_close', function(){
	$('html').css('overflow','');
	$('#schArea').removeClass('visible');
	if (!$('#btn_search').hasClass('active')){
		$('.mask').stop().fadeOut(200);
	}
	return false;
});

/* search temp : S */
$(document).on('focus','#gSearch',function(){
	$('#sch_step1').show();
	$('#sch_step2').hide();
});
$(document).on('keyup','#gSearch',function(){
	var val = $(this).val();
	if (val.length > 0) {
		$('#sch_history').hide();
		$('#sch_auto').show();
	} else {
		$('#sch_auto').hide();
		$('#sch_history').show();
	}
});
$(document).on('click', '#sch_auto li a', function(){
	$('#sch_step1').hide();
	$('#sch_step2').show();
	return false;
});
/* search temp : E */

$(document).on('click', '#btn_cart', function(){
	if ($('#btn_search').hasClass('active')) {
		$('#btn_search').removeClass('active');
		$('#schArea').stop().slideUp(200);
	}
	/*if ($(this).hasClass('active')) {
		$('html, body').css('overflow','');
		$(this).removeClass('active');
		$('#cartArea').removeClass('visible');
		$('.mask').stop().fadeOut(200);
	} else {*/
		$('html').css('overflow','hidden');
		//$(this).addClass('active');
		$('#cartArea').addClass('visible');
		$('.mask').stop().fadeIn(200);
	//}
	return false;
});

$(document).on('click', '#cartArea .btnGift', function(){
	if ($(this).parent().hasClass('open')) {
		$(this).parent().removeClass('open');
		$(this).prev('.giftCon').stop().slideUp(350);
	} else {
		$(this).parent().addClass('open');
		$(this).prev('.giftCon').stop().slideDown(350);
	}
});

$(document).on('keyup', '#cartArea .promoWrap input', function(){
	var val = $(this).val();
	var par = $(this).closest('.inp_wrap');
	if (val.length > 0){
		par.find('.inp_auto').show();
	} else {
		par.find('.inp_auto').hide();
	}
});

$(document).on('click', '#cartArea .btn_close', function(){
	$('html').css('overflow','');
	//$('#btn_cart').removeClass('active');
	$('#cartArea').removeClass('visible');
	if (!$('#btn_search').hasClass('active')){
		$('.mask').stop().fadeOut(200);
	}
	return false;
});

/* side menu */
function sideNavi(e){
	if ($(e).hasClass('on')){
		$(e).removeClass('on');
		$('#sideNavi').removeClass('open');
		$('html').css('overflow','');
		//$('#wrap').css('transform','');
		//$('html').stop().animate({scrollTop:openPos}, 0);
	} else {
		openPos = $(window).scrollTop();
		$(e).addClass('on');
		$('#sideNavi').addClass('open');
		$('html').css('overflow','hidden');
		//$('#wrap').css('transform','translateY(-' + openPos + 'px)');
	}
}
$(document).on('click', '#nav a', function(){
	var obj = $(this).parent();
	if (obj.hasClass('hasSub')) {
		if (obj.hasClass('open')){
			obj.removeClass('open');
			$(this).next('.sub').stop().slideUp(200);
		} else {
			obj.addClass('open');
			$(this).next('.sub').stop().slideDown(200);
		}
		return false;
	}
});
/* footer menu */
$(document).on('click', '#foot_menu .dep1 > a', function(){
	var obj = $(this).parent();
	if (obj.hasClass('hasSub')) {
		if (obj.hasClass('open')){
			obj.removeClass('open');
			$(this).next('ul').stop().slideUp(200);
		} else {
			obj.addClass('open');
			$(this).next('ul').stop().slideDown(200);
		}
		return false;
	}
});
/* reply */
$(document).on('click', '.cmt_list .toggle', function(){
	var obj = $(this).closest('.cmt_item');
	if ($(this).hasClass('open')) {
		$(this).removeClass('open');
		obj.next('.replyBox').stop().slideUp(200);
	} else {
		$(this).addClass('open');
		obj.next('.replyBox').stop().slideDown(200);
	}
});

/**
POPUP
**/
var pop = new Array(), popObj;
var pop_idx = -1;
var popONOFF = false;

function showLayerJp(e) {
	pop.push(e);
	pop_idx++;
	popObj = $('#' + pop[pop_idx]);
	popObj.fadeIn(300, function(){
		popObj.addClass('open');
	});
	if (pop_idx > 0) {
		popObj.css('z-index', + (3500 + pop_idx));
	}
	$('html').css({'overflow-y' : 'hidden'});
	popONOFF = true
}

function layerPopClose(){
	popObj.fadeOut(300, function(){
		popObj.removeClass('open').css('z-index','');
	})
	pop.pop();
	pop_idx = pop_idx - 1;
	popObj = $('#' + pop[pop_idx]);
	if (pop_idx < 0) {
		$('html').css({ 'overflow-y':'' });
	}
	popONOFF = false
};

function reviewPopOpen (e, target){
	if ($(target).css('display') == 'none'){
		$(target).css('z-index', '3600')
		$(target).fadeIn(300, function(){
			$(target).addClass('open');			
		})
		$('html').css({'overflow-y' : 'hidden'});
	} else {
		$(target).fadeOut(300, function(){
			$(target).removeClass('open');
			$(target).css('z-index', '')
		})
		$('html').css({'overflow-y' : ''});
	}
}

function videoPopOn(e, videoCode){
	$('#' + e).find('.vodCon1').html(
		'<iframe src="https://player.vimeo.com/video/' + videoCode + '?title=0&byline=0&portrait=0&autoplay=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>'
	)
	showLayerJp(e);
	return false;
}

function videoPopOff(e){
	layerPopClose();
	$('#' + e).find('.vodCon1').html('')
}

function videoPageOn(e, videoCode){
	$('#' + e).html(
		'<iframe src="https://player.vimeo.com/video/' + videoCode + '?title=0&byline=0&portrait=0&autoplay=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>'
	)
	return false;
}

$(document).on('touchstart', '.lyPopArea', function(){
	if ($(this).hasClass('open')){
		layerPopClose();
		// 190609
		if ($(this).attr('id') == 'productVideo' || $(this).attr('id') == 'innistarVideo'){
			$(this).find('.vodCon1').html('')
		}
	}
	
	if ($(this).hasClass('jpTeaserTermsPop')){
		layerPopCloseLogOut();
	}
});
$(document).on('touchstart', '.pdpQuickShop', function(){
	if ($(this).hasClass('show')){
		hidePdpQuickShop();
	}
});
$(document).on('touchstart', '.lyPopArea .lyPop, .pdpQuickShop .lyPop', function(e){
	e.stopPropagation();
});

/**
inputType
**/
$(document).ready(function(){
	$('input[type=text], input[type=search], input[type=tel], input[type=password], input[type=number], input[type=email], textarea').focus(function(){
		if ($(this).closest('.inp_text').hasClass('line_type')) {
			$(this).closest('.inp_text').addClass('focused');
		}
	});
	$('input[type=text], input[type=search], input[type=tel], input[type=password], input[type=number], input[type=email], textarea').blur(function(){
		var tmpval = $(this).val();
		if (tmpval == '') {
			$(this).removeClass('not-empty');
		} else {
			$(this).addClass('not-empty');
		}
		if ($(this).closest('.inp_text').hasClass('line_type')) {
			$(this).closest('.inp_text').removeClass('focused');
		}
	});
	$(document).on('focus', '.inp_text > input', function(){
		var _Value = $(this).val();
		var _parent = $(this).closest('.inp_text');
		if (_Value.length > 0){
			_parent.find('.btn_clear').addClass('on');
		}
	});
	$(document).on('blur', '.inp_text > input', function(){
		var _parent = $(this).closest('.inp_text');
		_parent.find('.btn_clear').removeClass('on');
	});

	$(document).on('keyup', '.inp_text > input', function(){
		var _Value = $(this).val();
		var _parent = $(this).closest('.inp_text');

		if (_Value.length > 0) {
			_parent.find('.btn_clear').addClass('on');
		} else {
			_parent.find('.btn_clear').removeClass('on');
		}
	});
	$(document).on('click', '.inp_wrap .btn_clear', function(){
		var _parent = $(this).closest('.inp_wrap');

		$(this).removeClass('on');
		$(this).closest('.inp_text').find('input').removeClass('not-empty').val('');
		_parent.find('.inp_auto:visible').hide();

		if (_parent.attr('id') == 'inp_search'){
			$('#sch_history').show();
			$('#sch_auto').hide();
		}
	});
	$(document).on('click', '.inp_auto > button', function(){
		var val = $(this).text();
		var parent = $(this).closest('.inp_wrap');
		parent.find('input').val(val);
		$(this).parent('.inp_auto').hide();
	});

});

/**
selectType
**/
$(document).on('click', '.inp_optlist .title', function(){
	if ($(this).parent('.inp_optlist').hasClass('disabled')) {return false;}

	var target = $(this).parent();

		if (target.hasClass('open')) {
			target.find('.selList').hide();
			target.removeClass('open');
		} else {
			$(this).parent('.inp_optlist').addClass('open');
			$(this).siblings('.selList').show();
		};
});

$(document).on('click', '.inp_optlist .selList label', function (){
	var txt_value = $(this).html();
	var target = $(this).parents('.inp_optlist');

		target.find('.title').html(txt_value);
		target.find('input').removeAttr('checked');
		$(this).prev('input').attr('checked','checked');
		target.removeClass('open');
		target.find('.selList').hide();

		if ($(this).hasClass('soldout')){
			target.find('.title').addClass('soldout');
		} else {
			target.find('.title').removeClass('soldout');		
		}
});

/**
checkType
**/

/**
tabType 기간 설정
**/
$(document).on('click', '.searchDate a.btn', function(){
	if($(this).hasClass('btn_primary')){
		$('.detailDatebtn a.btn').removeClass('btn_default');
		$('.detailDatebtn a.btn').addClass('btn_primary');
		$(this).removeClass('btn_primary');
		$(this).addClass('btn_default');
		$('.noData').hide();
		$('.detailDate').hide();	
		$('.pointList').show();	
		if($(this).hasClass('detailSD')){
			$('.detailDatebtn a.btn').removeClass('btn_default');
			$('.detailDatebtn a.btn').addClass('btn_primary');
			$(this).removeClass('btn_primary');
			$(this).addClass('btn_default');
			$('.pointList').hide();
			$('.detailDate').show();		
		}
	}
	return false;
});

/**
tabType
**/
$(function(){
	if ($('.tabTypeAuto').length > 0){
		$('.tabTypeAuto').each(function(){
			var tabSize = $(this).find('li').length;
			$(this).find('li').css({'width' : 100/tabSize + '%'});
		});
	}
});
$(document).on('click', '.tabType a', function(){
	/* [SCROLL] */
	if ($(this).parents('.tabType').hasClass('scroll'))	{
		scrollSet($(this).attr('href'));
		$(this).parent().siblings().removeClass('on');
		$(this).parent().addClass('on');
		return false;
	}
	/* [SHOW HIDE] */
	else if ($(this).parents('.tabType').hasClass('switch')) {
		
		$('.'+$(this).parents('.tabType').attr('id')).hide();
		$($(this).attr('href')).show();
		$(this).parent().siblings().removeClass('on');
		$(this).parent().addClass('on');
		return false;
	}
	/* [NOLINK] */
	else if ($(this).parents('.tabType').hasClass('no_link')) {
		$(this).parents('.tabType').find('li').removeClass('on');
		$(this).parents('li').addClass('on');
		return false;
	}
});

/**
TOGGLE LIST
**/
$(document).on('click', '.toggleList button', function(){
	if ($(this).hasClass('open')) {
		$(this).removeClass('open');
		$(this).next('.toggleCon').stop().slideUp(200);
	} else {
		/*$(this).closest('.toggleList').find('button').removeClass('open');
		$(this).closest('.toggleList').find('.toggleCon').stop().slideUp(200);*/
		$(this).addClass('open');
		$(this).next('.toggleCon').stop().slideDown(200);
	}

});

/**
VOD
**/
var video, video_par;
function fnVideoPlay(e,st){
	video = document.getElementById(e);
	video.play();

	video_par = $('#' + e).closest('.vod_area');
	video_par.find('.play').stop().fadeOut();
	if (st) {		
		video_par.find('.stop').hide();
		video_par.find('.golink').stop().fadeIn();
	} else {
		video_par.find('.stop').stop().fadeIn();
		video_par.find('.golink').hide();
	}
};
function fnVideoStop(e,st){
	video = document.getElementById(e);
	video.pause();
	//video.currentTime = 1;

	video_par = $('#' + e).closest('.vod_area');
	video_par.find('.play').stop().fadeIn();
	if (st) {		
		video_par.find('.stop').show();
		video_par.find('.golink').stop().fadeOut();
	} else {
		video_par.find('.stop').stop().fadeOut();
		video_par.find('.golink').show();
	}
};

/**
SHOPPING
**/
var alarm = true;
$(document).on('click', 'button.btn_wish', function(){
	if (alarm){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
			shopAlarm('WD');
		} else {
			$(this).addClass('on');
			shopAlarm('W');
		}
	}
});

// 쇼핑 토스트팝업
function shopAlarm(val){
	if (alarm){
		var alramPop = $('<div id="shopAlarm"></div>');
		alarm = false;
		alramPop.appendTo('#wrap');
		if (val == 'C'){
			$('#shopAlarm').addClass('cart').addClass('ani');
		} else if (val == 'CP'){
			$('#shopAlarm').addClass('compare').addClass('ani');
		}  else if (val == 'W'){
			$('#shopAlarm').addClass('wish').addClass('ani');
		} else if (val == 'WD'){
			$('#shopAlarm').addClass('wishD').addClass('ani');
		}
		setTimeout(function(){
			$('#shopAlarm').remove();
			alarm = true;
		}, 1500);
	};
};

//필터toggle
$(document).on('click', '.cate_item button', function(){
	$(this).toggleClass('open');
	$(this).next('ul').stop().slideToggle(200);
});

//제품수량 up down 버튼
function qtyUp(num){
	if ($(num).parent('.inp_qty').hasClass('readOnly')) {return false;}
	var thisVal = parseInt($(num).parents('.inp_qty').find("input").val());
	var intVal = thisVal+1;
	$(num).parents('.inp_qty').find("input").val(intVal);
}
function qtyDown(num){
	if ($(num).parent('.inp_qty').hasClass('readOnly')) {return false;}
	var thisVal = parseInt($(num).parents('.inp_qty').find("input").val());
	if(thisVal > 1){
		var value = thisVal-1;
		$(num).parents('.inp_qty').find("input").val(value);
	}
}

/* 제품상세_구매하기pop */
function showPdpQuickShop(){
	$('html').css('overflow','hidden');
	$('#pdpQuickShop').stop().fadeIn(300, function(){
		$(this).addClass('show');
	});
}
function hidePdpQuickShop(){
	$('#pdpQuickShop').removeClass('show').stop().fadeOut(300);
	$('html').css('overflow','');
}

/* 제품비교하기pop */
function showPdtCompare(){
	$('#lyPdtCompare').addClass('show');
}
function hidePdtCompare(){
	$('#lyPdtCompare').removeClass('show');
}
function delPdtCompare(e){
	$(e).parent().remove();
}
function resetPdtCompare(){
	$('#lyPdtCompare .pdtCompareList').html('');
	$('#lyPdtCompare .n').text(0);
}
/* 제품리뷰 별점부여 */
$(document).on('click', '.rating_star_large .starPoint button', function(){
	var point = $(this).index() + 1;
	$('#rinfo').html($(this).attr('data-value'));
	$('.rating_star_large .pointBg em').text(point);
	$('.rating_star_large .pointBg').css({'width': (point * 20) + '%'});

	$(this).parent().parent('.pointArea').siblings('.innerPoint').html(point + '.0')
});
/* 제품리뷰상세 좋아요 */
$(document).on('click', '#rvDetail .ico_heart', function(){
	if ($(this).hasClass('on')) {
		$('#rvDetail .ico_heart').removeClass('on');
	} else {
		$('#rvDetail .ico_heart').addClass('on');
	}
});


/*
teaser
*/
function onoff (e, target){
	if ($(target).css('display') == 'none'){
		$(target).slideDown()
		$(e).addClass('on')
	} else {
		$(target).slideUp()
		$(e).removeClass('on')
	}
}
/* 190604 네비 스크립트 변경 */
function navi (e, target){
	if ($(target).hasClass('open')){
		$('#sideNavi').removeClass('open');
		$('html').css('overflow','');
	} else {
		$('#sideNavi').addClass('open');
		$('html').css('overflow','hidden');
	}
}

/* ========== [공통] ========== */
//팝업열기 showLayer(팝업아이디(또는클래스) , 검정배경아닐땐 'N')
function showLayer(ele , modalScreen, callback){
	var tempT = $(window).scrollTop() + 100;

	$(ele).css({'top' : tempT}).show();
	$('html').addClass('popOpen');
	if(modalScreen != 'N'){
		$('.modalScreen').show();
	};
	
	// [181126] 모달을 열 때 특정한 액션을 취할 수 있도록, 콜백 함수 옵션을 추가 (3번째 매개변수로 고정)
	// @example
	// showLayer('#layerPhone', undefined, function() {
	//    // do something here...
	// });
	if (typeof callback === 'function') {
		callback( $(ele) );
	}
};
//팝업닫기 hideLayer(팝업아이디(또는클래스) , 검정배경유지할땐'N')
function hideLayer(ele , modalScreen){
	$(ele).hide();
	$('html').removeClass('popOpen');
	if(modalScreen != 'N'){
		$('.modalScreen').hide();
	};
};