"use strict";

/**
디바이스체크
**/
var _Device={};_Device.smartphone=false;_Device.tablet=false;_Device.type=0;_Device.os=0;function checkDevice(){if(navigator.userAgent.match(/Android/)!=null){if(navigator.userAgent.match(/mobile|Mobile/)!=null){_Device.type=2}else{_Device.type=1}_Device.os=0}else{var minSiteWidth=480;var maxSiteWidth=1024;var w=($(window).width()<window.screen.width)?$(window).width():window.screen.width;if(navigator.userAgent.match(/iPhone|iPad|iPod/)!=null){_Device.os=1}else{_Device.os=2}if(navigator.userAgent.match(/webOS|iPhone|iPad|iPod|BlackBerry/)!=null){if(w<=minSiteWidth||(navigator.userAgent.match(/iPhone|iPod|BlackBerry/)!=null&&navigator.platform.match(/iPad/)==null)){_Device.type=2}else{_Device.type=1}}else{_Device.type=0}}if(_Device.type==2){_Device.tablet=false;_Device.smartphone=true}else if(_Device.type==1){_Device.tablet=true;_Device.smartphone=false}else{_Device.smartphone=_Device.tablet=false}}var _Browser={};function browserDetect(){_Browser.ie6=false;_Browser.ie7=false;_Browser.ie8=false;_Browser.ie9=false;_Browser.ie10=false;_Browser.ie11_over=false;_Browser.msie=false;_Browser.mozilla=false;_Browser.safari=false;_Browser.chrome=false;_Browser.version=0;_Browser.name="etc";var objappVersion=navigator.appVersion;var objAgent=navigator.userAgent;var objbrowserName=navigator.appName;var objfullVersion=''+parseFloat(navigator.appVersion);var objBrMajorVersion=parseInt(navigator.appVersion,10);var objOffsetName,objOffsetVersion,ix;var iev=0;var ieold=(/MSIE (\d+\.\d+);/.test(navigator.userAgent));var trident=!!navigator.userAgent.match(/Trident\/7.0/);var rv=navigator.userAgent.indexOf("rv:11.0");if(ieold)iev=new Number(RegExp.$1);if(navigator.appVersion.indexOf("MSIE 10")!=-1)iev=10;if(trident&&rv!=-1)iev=11;if(iev!=0||(objOffsetVersion=objAgent.indexOf("MSIE"))!=-1){_Browser.name="Microsoft Internet Explorer";_Browser.msie=true;_Browser.version=iev;if(_Browser.version<7){_Browser.ie6=true}else if(_Browser.version<8){_Browser.ie7=true}else if(_Browser.version<9){_Browser.ie8=true}else if(_Browser.version<10){_Browser.ie9=true}else if(_Browser.version<11){_Browser.ie10=true}else{_Browser.ie11_over=true}}else{if((objOffsetVersion=objAgent.indexOf("Chrome"))!=-1){_Browser.chrome=true;objbrowserName="Chrome";objfullVersion=objAgent.substring(objOffsetVersion+7)}else if((objOffsetVersion=objAgent.indexOf("Firefox"))!=-1){_Browser.mozilla=true;objbrowserName="Firefox"}else if((objOffsetVersion=objAgent.indexOf("Safari"))!=-1){_Browser.safari=true;objbrowserName="Safari";objfullVersion=objAgent.substring(objOffsetVersion+7);if((objOffsetVersion=objAgent.indexOf("Version"))!=-1)objfullVersion=objAgent.substring(objOffsetVersion+8)}else if((objOffsetName=objAgent.lastIndexOf(' ')+1)<(objOffsetVersion=objAgent.lastIndexOf('/'))){objbrowserName=objAgent.substring(objOffsetName,objOffsetVersion);objfullVersion=objAgent.substring(objOffsetVersion+1);if(objbrowserName.toLowerCase()==objbrowserName.toUpperCase()){objbrowserName=navigator.appName}}if((ix=objfullVersion.indexOf(";"))!=-1)objfullVersion=objfullVersion.substring(0,ix);if((ix=objfullVersion.indexOf(" "))!=-1)objfullVersion=objfullVersion.substring(0,ix);objBrMajorVersion=parseInt(''+objfullVersion,10);if(isNaN(objBrMajorVersion)){objfullVersion=''+parseFloat(navigator.appVersion);objBrMajorVersion=parseInt(navigator.appVersion,10)}_Browser.name=objbrowserName;_Browser.version=objBrMajorVersion}}checkDevice();browserDetect();
// 디바이스체크 Pc = 0, Tablet = 1, Mobile = 2
// console.log(_Device.type);


/**
CSS ANIMATION CHECK
**/
function whichAnimationEvent(){
  var t,
      el = document.createElement("fakeelement");

  var animations = {
    "animation"      : "animationend",
    "OAnimation"     : "oAnimationEnd",
    "MozAnimation"   : "animationend",
    "WebkitAnimation": "webkitAnimationEnd"
  }

  for (t in animations){
    if (el.style[t] !== undefined){
      return animations[t];
    }
  }
}

var animationEvent = whichAnimationEvent();


/**
LOADING
**/
$(window).on('load',function(){ //로딩 이미지 호출
	loadingClose(); // 윈도우 로딩이 끝난시점에 로딩 종료
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
	$('html, body').animate({'scrollTop' : $(scrollPo).offset().top - $('#header').outerHeight()},200);
}

$(document).on('click', '.btnTop', function(){
	$('html, body').animate({'scrollTop' : 0},200);
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
header fixed
**/
$(window).on('scroll', function(){
	if ($('#wrap').hasClass('topBannerShow') && $(window).scrollTop() > $('.topBanner').height())
	{
		$('#wrap').addClass('headerFixed');
	}
	else
	{
		$('#wrap').removeClass('headerFixed');
	}
});


/**
tabType
**/
$(document).on('click', '.tabType a', function(){
	/* [FIXED SCROLL] */
	//console.log($('.tabType.fixedScroll').outerHeight() +','+ $('#header').outerHeight())
	if ($(this).closest('.tabType').hasClass('fixedScroll')){
		$('html, body').animate({'scrollTop' : $($(this).attr('href')).offset().top - $('.tabType.fixedScroll').outerHeight() - $('#header').outerHeight()},500);
		return false;
	}
	/* [SCROLL] */
	if ($(this).closest('.tabType').hasClass('scroll'))	{
		scrollSet($(this).attr('href'));
		$(this).closest('.tabType').find('a').removeClass('current');
		$(this).addClass('current');
		return false;
	}
	/* [SHOW HIDE] */
	else if ($(this).closest('.tabType').hasClass('switch')) {
		$('.'+$(this).closest('.tabType').attr('id')).hide();
		$($(this).attr('href')).show();
		$(this).closest('.tabType').find('a').removeClass('current');
		$(this).addClass('current');
		reviewMoreChk(true);
		return false;
	}
	/* [NOLINK] */
	else if ($(this).closest('.tabType').hasClass('no_link')) {
		$(this).closest('.tabType').find('a').removeClass('current');
		$(this).addClass('current');
		return false;
	}
});

$(window).on('load', function(){
	if ($('.tabType.fixedScroll').length > 0){
		var ftGnb = $('.tabType.fixedScroll'),
			ftGnbPo = ftGnb.offset().top;
		$(window).on('scroll', function(){
			var gnbMenu = $('.tabType.fixedScroll ul li'),
				tabH = $('.tabType.fixedScroll').outerHeight(),
				menuLeng = gnbMenu.length;
			for (var i=0; i<menuLeng; i++){
				if ($(gnbMenu.eq(menuLeng-1-i).find('a').attr('href')).offset().top - tabH - $('#header').outerHeight() - 1 < $(window).scrollTop()){
					gnbMenu.find('a').removeClass('current')
					gnbMenu.eq(menuLeng-1-i).find('a').addClass('current')
					break
				} else {
					gnbMenu.eq(0).find('a').addClass('current')
				}
			}
			if ($(this).scrollTop() > ftGnbPo - $('#header').outerHeight()){
				ftGnb.addClass('fixed').css('top', $('#header').outerHeight());
			} else {
				ftGnb.removeClass('fixed').css('top', '0px');
			}
		});
	}

	if ($('.tabType.tabCenter').length > 0)	{
		$('.tabType.tabCenter').each(function(){
			if ($(this).css('display') != 'none')
			{
				$(this).find('ul').scrollLeft($(this).find('.current').closest('li').offset().left - 12);
			}
		});
	}
});


/**
inputType
**/
$(document).on('focus', '.inp_text input', function(){
	$(this).closest('.inp_text').addClass('active');
	$(this).closest('.inp_text').addClass('focus');
});
$(document).on('blur', '.inp_text input', function(){
	if ($(this).val() == '')
	{
		$(this).closest('.inp_text').removeClass('active');
	}
	$(this).closest('.inp_text').removeClass('focus');
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
	var _parent = $(this).closest('.inp_text');

	_parent.find('input').val('');
	$(this).removeClass('on');
});

$(window).on('load', function(){
	if ($('.inp_text input').length > 0)
	{
		inpValChk();
	}
});

function inpValChk(){
	for (var i = 0; i < $('.inp_text input').length; i++)
	{
		if ($('.inp_text input').eq(i).val() != '')
		{
			$('.inp_text input').eq(i).closest('.inp_text').addClass('active');
		}
	}
}

/* 이메일 직접입력 */
$(document).on('change', '.inp_email .inp_select select', function() {
	if (this.selectedIndex == $(this).find('option').length-1)
	{
		$(this).closest('.inp_email').addClass('active');
		$(this).closest('.inp_email').find('.email_input input').focus();
	}
});

/* 배송 메세지 */
$(document).on('change', '.inp_mesg select', function(){
	if (this.selectedIndex == 1)
	{
		$(this).closest('.inp_mesg').find('.mesg_input').show();
	}
	else
	{
		$(this).closest('.inp_mesg').find('.mesg_input').hide();
	}
});


/**
selectType
**/
$(document).on('click', '.inp_select2 .title', function(){
	if ($(this).closest('.inp_select2').hasClass('disabled')) {return false;}

	var target = $(this).closest('.inp_select2');

	if (target.hasClass('open')) {
		target.find('.selList').hide();
		target.removeClass('open');
	} else {
		$(this).closest('.inp_select2').addClass('open');
		$(this).siblings('.selList').show();
	};
});

$(document).on('click', '.inp_select2 .selList label', function (){
	var disabled = $(this).prev('input').prop('disabled');
	if (disabled) {return false}

	var txt_value = $(this).html();
	var target = $(this).closest('.inp_select2');
	target.find('.title').html(txt_value);
	target.find('input').prop('checked',false);
	$(this).prev('input').prop('checked',true);
	target.removeClass('open');
	target.find('.selList').hide();

	//tel407 20200419[수정] callback 함수 추가
	if(typeof inp_select_click_callback_prdDetail  === 'function'){
		inp_select_click_callback_prdDetail(this);
	}
});

$(window).on('load', function(){
	if ($('.inp_select2').length > 0)
	{
		$('.inp_select2 input[type=radio]:checked').each(function(){
			var select_title = $(this).closest('li').find('label').html();
			$(this).closest('.inp_select2').find('.title').html(select_title);
		});
	}
});

$(document).on('keyup', '.inp_textArea textarea', function(){
	//console.log(this.scrollHeight);
	$(this).height(this.scrollHeight);
});


/**
POPUP
**/
var pop = new Array(), popObj, popReady = true;
var pop_idx = -1;
var openPos;

function showLayer(e, prevTopPos) {
	if(e == "mainFloatingPop"){
		return false;
	}
	if (popReady){
		popReady = false;
		pop.push(e);
		pop_idx++;
		popObj = $('#' + pop[pop_idx]);
		if (pop_idx == 0) {
			if(!prevTopPos){
				openPos = $(window).scrollTop();
			}else{
				openPos = prevTopPos;
			}
			//console.log(openPos);
			$('#wrap').css({'margin-top' : -openPos});
		}
		if (pop_idx > 0) {
			popObj.css('z-index', + (7000 + pop_idx));
		}
		$('html, body').css({'overflow-y' : 'hidden'});
		
		popObj.fadeIn(300, function(){
			popObj.addClass('open');
			popReady = true;
		});
		/* [리뷰 상세보기] */
		if (popObj.find('.reviewPopSlide').length > 0){
			/*slick destroy 추가*/
			if(popObj.find('.reviewPopSlide').is(".slick-slider")){
				popObj.find('.reviewPopSlide').slick('unslick');
			}
			popObj.find('.reviewPopSlide').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				infinite: false,
				swipe : true
			});
		}
		/* [바닐라TV] */
		if ($('.banilaTV.open').length > 0 && $('.blTvBox.on').find('video').length > 0){
			$('.blTvBox.on').find('video').get(0).pause()
		}
		imgCrop();
	}
}

function layerPopClose(callback){
	if (popReady){
		pop.pop();
		if (pop_idx == 0) {
			// 바닐라TV가 띄워진 경우
			if ($('.banilaTV').hasClass('open')){
				$('html, body').css({ 'overflow-y':'hidden' });
			} else {
				$('html, body').css({ 'overflow-y':'' });
				$('#wrap').css({'margin-top' : 0})
				$('html, body').stop().animate({scrollTop:openPos}, 0);			
			}
		}
		if(popObj != null){
			popReady = false;
			popObj.fadeOut(300, function(){
				popReady = true;
				popObj.removeClass('open').css('z-index','');
				if(pop_idx > 0){
					pop_idx = pop_idx - 1;
					popObj = $('#' + pop[pop_idx]);
				}else{
					pop_idx = -1;
					popObj = null;
				}
				//console.log('show idx : ' + pop_idx);
	
				/* [리뷰 작성 팝업] */
				if ($(this).attr('id') == 'reViewWritePop'){
					$(this).find('.StepBox').removeClass("active");
					$(this).find('.StepBox').eq(0).addClass("active");
					$(this).find('.stepCount').html('1')
					$(this).find('.stepBarData').css({width: (100 / $(this).find('.StepBox').length) + '%'}).html('01 별점 선택')
				}
				/* [피부프로필 등록/수정 팝업] */
				if ($(this).attr('id') == 'skinProfileEdt'){
					$(this).find('.StepBox').removeClass("active");
					$(this).find('.StepBox').eq(0).addClass("active");
					$(this).find('.stepCount').html('1')
					$(this).find('.stepBarData span').css({width: (100 / $(this).find('.StepBox').length) + '%'})
				}
				/* 팝업이 리뷰상세보기일 경우 모든 동영상 멈춤 */
				if ($(this).attr('id') == 'reViewDetailPop'){
					videoAllStop()
				}
				/* 바닐라TV 관련된 팝업이라면 해당 동영상 멈춤 */
				if ($('.banilaTV.open').length > 0 && $('.blTvBox.on').find('video').length > 0){
					$('.blTvBox.on').find('video').get(0).play()
				}
				/*close 후 callback 추가*/
				if(typeof callback === 'function'){
					callback();
				}
	
			})
		}
	}
};

/* 원본 이미지 보기 */
function imgViewPop(imgSrc){
	$('#imgViewPop .viewImg').attr('src',imgSrc);
	showLayer('imgViewPop');
}

/* 2뎁스 팝업 */
function depOpen(target){
	$('.dim_wrap').fadeIn(500);
	$('.'+target).addClass('open');
	$('html, body').css({'overflow-y' : 'hidden'});
}

function depClose(){
	$('.dim_wrap').fadeOut(500);
	$('.dep_wrap').removeClass('open');
	$('html, body').css({'overflow-y' : ''});
}

$(document).on('click', '.dep_wrap', function(){
	depClose();
});

$(document).on('click', '.dep_wrap .dep_inner ul', function(e){
	e.stopPropagation();
});

/* 제품 플로팅 배너 */
function jsShopFloating(showTarget, myTarget){
	if(!stringjs.isnull(myTarget)){
		if (myTarget && $(myTarget).hasClass('on'))
		{
			showTarget = showTarget + '2';
			$(myTarget).removeClass('on');
		}
		else
		{
			$(myTarget).addClass('on');
		}
	}
	$('.'+showTarget).fadeIn(500, function(){
		$(this).delay(500).fadeOut(500);
	});
}

/* 리뷰작성 - 코치마크 */
var coachMark = true

/* step Content */
function stepContent(target, count){
	var parenCtt = $(target).closest('.stepContent')
	parenCtt.find('.StepBox').removeClass("active");
	parenCtt.find('.StepBox').eq(count-1).addClass("active");
	/* [리뷰 작성] */
	if (parenCtt.attr('id') == 'reViewWritePop'){
		parenCtt.find('.stepCount').html(count)
		parenCtt.animate({
			scrollTop: 0
		}, '1000');
		parenCtt.find('.stepBarData').css({
			width: ( 100 / (parenCtt.find('.StepBox').length + 1) ) * count+'%'
		})
		if (count == 1){
			parenCtt.find('.stepBarData').html('01 별점 선택')
		} else if (count == 2){
			parenCtt.find('.stepBarData').html('02 느낀점 선택')
		} else if (count == 3){
			parenCtt.find('.stepBarData').html('03 생생한 후기와 사진 등록')
			if (coachMark){
				showLayer('coachmarkArea');
				coachMark = false;
			}
		}
		imgCrop()
	}
	/* [피부프로필 등록/수정 팝업] */
	if (parenCtt.attr('id') == 'skinProfileEdt'){
		parenCtt.find('.stepCount').html(count)
		parenCtt.animate({
			scrollTop: 0
		}, '1000');
		parenCtt.find('.stepBarData span').css({
			width: 100 / parenCtt.find('.StepBox').length * count+'%'
		})
	}
	/* [피부프로필 페이지] */
	if (parenCtt.attr('id') == 'skinProfilePage'){
		$('body, html').animate({
			scrollTop: 0
		}, '1000');
		parenCtt.find('.stepBarData span').css({
			width: 100 / parenCtt.find('.StepBox').length * count+'%'
		})
	}
}

/* 피부프로필 체크검사 */
$(document).on('click', '.skinChkWrap input[type="radio"], .skinChkWrap input[type="checkbox"]', function(){
	var stepClass = $(this).attr('class');
	if (stepClass == 'step3' || stepClass == 'step4'){
		if ($('.skinChkWrap .'+stepClass+':checked').length > 3){
			$(this).prop('checked', false);
			return false;
		}
	}
});

/* 피부프로필 약관동의 */
$(document).on('click', '#skinProfile input[type="checkbox"]', function(){
	if ($(this).prop('checked') == false){
		$('#skinProfile').find('.btn_wrap .btn').addClass('disabled')
	} else {
		$('#skinProfile').find('.btn_wrap .btn').removeClass('disabled')
	}
});

/* 페이지 이동 
function stepPage(e, count){
	 if ($(e).attr('data-reset') == 'true'){
		alert('reset')
		$(e).closest('.skinBox').find('input').prop('checked', false);
	}
	$(e).closest('.skinChkWrap').find('.skinBox').removeClass('open');
	$(e).closest('.skinChkWrap').find('.skinBox').eq(count-1).addClass('open');
	$(e).closest('.skinChkWrap').prev('.stepBar').find('span').css('width', 25*count+'%')
}
function stepResult(e){
	if ($(e).attr('data-reset') == 'true'){
		alert('reset')
		$(e).closest('.skinBox').find('input').prop('checked', false);
	}
	if ($('.skinChkWrap').find(':checked').length > 0){
		showLayer('skinProfile');
	} else {
		alert('회원가입완료')
	}
}
*/


/**
SLIDE
**/	
$(document).on('afterChange', '.js_pdtSlide .js_pdtSlideImg', function(event, slick, currentSlide){
	$('.js_pdtSlideDot').html('<div><span class="currentSlide">'+ (currentSlide+1) +'</span> / <span>'+ slick.slideCount +'</span></div>');
});
$(window).on('load', function(){
	if ($('.js_pdtSlide').length > 0){
		$('.js_pdtSlide .js_pdtSlideImg').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			swipe : true,
			arrows: false
		});
	}
});


/**
영상 재생 
**/
$(window).on('load', function(){
	if ($('.videoCtt').length > 0){
		videoAllStop()
		$('.videoCtt').on('pause', function() {
			if ($(this).get(0).currentTime >= $(this).get(0).duration){
				$(this).closest('.videoItem').removeClass('play');
				$(this).closest('.videoItem').removeClass('pause');
				$(this).closest('.videoItem').addClass('end');
			} else {
				$(this).closest('.videoItem').removeClass('play');
				$(this).closest('.videoItem').addClass('pause');
				$(this).closest('.videoItem').removeClass('end');	
			}
		});		
	}
});
function videoAllStop(){
	$('.videoCtt').each(function(){
		$(this).get(0).pause()
		$(this).closest('.videoItem').removeClass('play');
		$(this).closest('.videoItem').addClass('pause');
		$(this).closest('.videoItem').removeClass('end');
	})
}
function videoPlay(e){
	videoAllStop()
	$(e).siblings('.videoCtt').get(0).play()
	$(e).closest('.videoItem').addClass('play');
	$(e).closest('.videoItem').removeClass('pause');
	$(e).closest('.videoItem').removeClass('end');
}
function videoPause(e){
	$(e).closest('.pauseBtnBox').siblings('.videoCtt').get(0).pause()
	$(e).closest('.videoItem').removeClass('play');
	$(e).closest('.videoItem').addClass('pause');
	$(e).closest('.videoItem').removeClass('end');
}
$('.pdtSlide .pdtSlideImg').on('beforeChange', function(event, slick, currentSlide){
	videoAllStop()
});
$(document).on('click', '.pauseBtnBox', function(){
	$(this).find('a').css('display', 'block')
});

/**
ACORDION
**/

/* 테이블 */
function tblAco(e){
	if ($(e).closest('.js_acoList').find('.js_acoCon').css('display') == 'none'){
		$(e).closest('.js_acoList').addClass('on');
		$(e).closest('.js_acoList').find('.js_acoCon').stop().slideDown(300, function(){
			/* [클릭시 스크롤이동] */
			if ($(e).closest('.js_acoList').hasClass('noScrolling')){
				return false;
			} else {
				/* [제품상세일경우] */
				if ($('.product_detail').length > 0){
					$('body,html').animate({
						scrollTop: $(e).closest('.js_acoList').offset().top - 96
					}, '500');
				/* [그외 페이지] */
				} else {
					$('body,html').animate({
						scrollTop: $(e).closest('.js_acoList').offset().top - 51
					}, '500');				
				}
			}
		})
		imgCrop();
	} else {
		$(e).closest('.js_acoList').removeClass('on');
		$(e).closest('.js_acoList').find('.js_acoCon').stop().slideUp(300)
	}
}
$(document).on('click', '.js_acoLink', function(){
	/* [클릭시 다른 항목 닫기] */
	if ($(this).closest('.js_acoBox').hasClass('type02')){
		/* [비밀글이 있을 경우] */
		if ($(this).closest('.js_acoList').hasClass('lock')){
			if ($(this).closest('.js_acoList').hasClass('userOn')){
				$(this).closest('.js_acoBox').find('.js_acoList').removeClass('on');
				$(this).closest('.js_acoBox').find('.js_acoCon').stop().slideUp(300);
				tblAco(this)
			} else {
				alert('비밀글입니다.')			
			}
		} else {			
			$(this).closest('.js_acoBox').find('.js_acoList').removeClass('on');
			$(this).closest('.js_acoBox').find('.js_acoCon').stop().slideUp(300);
			tblAco(this)
		}
	}
	/* [해당 항목만 열고 닫기] */
	else {
		tblAco(this)
	}
});


/**
리뷰 더보기
**/
$(window).on('load', function(){
	if ($('.js_acoCtt').length > 0){
		reviewMoreChk();
	}
});

var tabChk = false;

function reviewMoreChk(tabType){
	if (!tabChk)
	{
		$('.js_acoCtt').each(function(){
			var more = $(this).siblings('.js_acoMore'),
				cttline = Number(parseInt($(this).css('line-height'))),
				custumline = Number($(this).attr('data-line'));

			if ($(this).height() > cttline*custumline){
				$(this).css({
					height: cttline*custumline
				}).addClass('heightOn')
				more.css('display', 'inline-block');
			}
		});
	}
	if (tabType)
	{
		tabChk = true;
	}
}

$(document).on('click', '.js_acoMore', function(e){
	var ctt = $(this).siblings('.js_acoCtt'),
		cttline = Number(parseInt(ctt.css('line-height'))),
		custumline = Number(ctt.attr('data-line'));

	if (ctt.hasClass('heightOn')){
		$(this).addClass('on').html('닫기')
		ctt.css({
			height: ctt.find('div').height()
		}).removeClass('heightOn')
	} else {
		$(this).removeClass('on').html('더보기')
		ctt.css({
			height: cttline*custumline
		}).addClass('heightOn')					
	}
})


/**
GRADE
**/
$(window).on('load', function(){
	if ($('.js_rating').length > 0)
	{
		for (var i = 0; i < $('.js_rating').length; i++)
		{
			var rating_W = Math.round($('.js_rating').eq(i).width()) * ($('.js_rating').eq(i).find('span').text() * 0.2);
			$('.js_rating').eq(i).find('span').width(rating_W);
		}
	}
});
$(document).on('click', '.js_userRating .userRatingBox button', function(e){
	var resultRtg = Number($(this).text()),
		rating_W = Math.round($(this).closest('.js_rating').width()) * (resultRtg * 0.2);
	$(this).closest('.userRatingBox').siblings('span').width(rating_W).text(resultRtg)
})


/**
IMAGE CROP
**/
$(window).on('load', function(){
	if ($('.imgBox').length > 0){	
		imgCrop();
	}
});

function imgCrop(){
	$('.imgBox').each(function() {
		//set size
		var th = $(this).height(),//box height
			tw = $(this).width(),//box width
			im = $(this).children('img'),//image
			ih = im.height(),//inital image height
			iw = im.width();//initial image width
		if (ih>iw) {//if portrait
			im.addClass('ww').removeClass('wh');//set width 100%
		} else {//if landscape
			im.addClass('wh').removeClass('ww');//set height 100%
		}
	});
}


/**
PRODUCT COUNT
**/
function productCountMinus(e,_callback){
	var buyInput = $(e).siblings('input[type="text"]'),
		buyCount = buyInput.attr('value');

	if (buyCount > 2){
		buyCount--;
		buyInput.attr('value', buyCount);
		if (typeof _callback == "function") {
			_callback();
		}
	} else {
		buyCount--;
		buyInput.attr('value', buyCount);
		$(e).prop('disabled', true);
		if (typeof _callback == "function") {
			_callback();
		}
	}	
}
function productCountPlus(e,_callback){
	var buyInput = $(e).siblings('input[type="text"]'),
		buyCount = buyInput.attr('value'),
		buyDataMax = buyInput.attr('data-max');

	if (!buyDataMax){
		buyCount++;
		buyInput.attr('value', buyCount);
		if (typeof _callback == "function") {
			_callback();
		}
	} else {
		if (buyCount < Number(buyDataMax)){
			buyCount++;
			buyInput.attr('value', buyCount);
			if (typeof _callback == "function") {
				_callback();
			}
		} else {
			alert('일일 최대 구매 수량을 초과하였습니다.');
		}
	}
	if (buyCount >= 2){
		$(e).siblings('.js_pdtCountMinus').prop('disabled', false);
	}
}
$(window).on('load', function(){
	if ($('.js_pdtCount').length > 0)
	{
		for (var i = 0; i < $('.js_pdtCount').length; i++)
		{
			if ($('.js_pdtCount').eq(i).find('input[type="text"]').attr('value') == 1)
			{
				$('.js_pdtCount').eq(i).find('.js_pdtCountMinus').prop('disabled', true)
			}
		}
	}
});


/**
상품 상세
**/

/* 상세페이지 구매하기 툴바 */
$(document).on('click', '.pdtToolbar', function(){
	$('.dim_wrap').fadeOut(500);
	$('.pdtToolbar').removeClass('open');
	$('html, body').css({'overflow-y' : ''});
});
$(document).on('click', '.pdtToolbar .toolbarBox .tbPdtArea', function(e){
	e.stopPropagation();
});

/* 바닐라룩 */
$(document).on('click', '.makeUpAnchor', function(){
	if ($(this).next('.makeUpText').css('display') == 'none'){
		$(this).next('.makeUpText').show()
		$(this).closest('.posiBox').addClass('on')
		$(this).addClass('on')
	} else {
		$(this).next('.makeUpText').hide()
		$(this).closest('.posiBox').removeClass('on')
		$(this).removeClass('on')
	}
})

/* 리뷰별점 */
$(document).on('click', '.statMore', function(){
	$('.statBar').each(function(){
		$(this).find('span').css('width', $(this).siblings('.statData').text())
	})
});

/**
ORDER
**/
/* 결제방법 */
$(document).on('click', '.order_wrap input[name="sttlmethod"]', function(){
	var target = $(this).attr('id').replace('payment_list','payment_info');
	order_payment(target);
});

$(window).on('load', function(){
	if ($('.order_wrap input[name="sttlmethod"]:checked').attr('id'))
	{
		var target = $('.order_wrap input[name="sttlmethod"]:checked').attr('id').replace('payment_list','payment_info');
		order_payment(target);
	}
});

function order_payment(target){
	$('.order_wrap .info_wrap').hide();
	$('.order_wrap .' + target).show();
}


/**
EVENT
**/
/* 구매금액별 사은품 더보기 */
function btnGiftMore(target){
	$(target).closest('.giftImg').find('.giftMore').show();
}
function btnGiftMoreClose(target){
	$(target).closest('.giftImg').find('.giftMore').hide();
}

/* 이벤트 제품 스크롤 */
$(document).on('change', '.eventPdtSlt', function(){
	if ($(this).find('option:selected').val() != '')
	{
		scrollSet($(this).find('option:selected').val());
	}
});


/**
footer
**/
/* KCP 구매안전서비스 가입사실 확인 */
function go_check(){
	var status = "width=500 height=450 menubar=no,scrollbars=no,resizable=no,status=no";
	var obj = window.open('', 'kcp_pop', status);
	document.shop_check.method = "post";
	document.shop_check.target = "kcp_pop";
	document.shop_check.action = "https://admin.kcp.co.kr/Modules/escrow/kcp_pop.jsp";
	document.shop_check.submit();
}


/**
HEADER
**/
/* GNB OPEN */
function gnbOpen(){

	$('#wrap').toggleClass('gnbOpen');

	//모바일 이중 스크롤 방지
	if($('#wrap').hasClass('gnbOpen')){
		$('body').css('overflow','hidden');
	}else{
		$('body').css('overflow','auto');
	}
	
	if ($('.gnbBrandSlick').not('.slick-initialized').length > 0)
	{
		setGnbImageSlick();
	}
	
	$('.gnbBrandSlick').slick('setPosition');
}

/* GNB FLOATING */
if ($('.banilaTV').length == 0){
	var lastScrollTop = 0;
	setTimeout(function(){
		$(window).scroll(function(event){
			var nowPo = $(this).scrollTop();
			if ($(window).scrollTop() <= 0)
			{
				return false;
			}

			if (nowPo > lastScrollTop)
			{
				$('.gnbFloating').addClass('hidden');
				$('.footerFloation, #groobee-container').addClass('bottom');
			}
			else
			{
				$('.gnbFloating').removeClass('hidden');
				$('.footerFloation, #groobee-container').removeClass('bottom');
			}

			if ($(window).scrollTop() + $(window).height() >= $(document).height())
			{
				$('.gnbFloating').removeClass('hidden');
				$('.footerFloation, #groobee-container').removeClass('bottom');
			}

			lastScrollTop = nowPo;
		});
		if ($('#wrap').hasClass('toolsNo'))
		{
			$('body').addClass('groobeeUp');
		}
	},500)
}

/* 검색창 */
function searchCall(){
	if ($('#wrap').hasClass('searchOpen'))
	{
		if ($('#wrap').hasClass('searchPage'))
		{
			window.history.back();
		}
		else
		{
			$('#wrap').removeClass('searchOpen').addClass('searchClose');
			$('#wrap').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
				$('#wrap').removeClass('searchClose');
			});
		}
	}
	else
	{
		$('#wrap').addClass('searchOpen');
	}
}


$(document).on('focus keyup', '#headerSearch', function(){
	if (!$('#wrap').hasClass('searchPage'))
	{
		if ($('#headerSearch').val() == '')
		{
			$('.searchInfo').show();
		}
		else
		{
			$('.searchInfo').hide();
		}
	}
	if ($('#headerSearch').val() == '')
	{
		$('.autoWord').hide();
	}
	else
	{
		$('.autoWord').show();
		$('.searchWrap').addClass('firstTop');
	}
});


/**
정품확인 팝업
**/
$(window).on('load', function(){
	if ($('#genuineProductVideo').length > 0)
	{
		var genuineProductVideo = document.getElementById("genuineProductVideo");
		genuineProductVideo.onpause = function() {
			$('#genuineProduct .video .btn_play').show();
		};

		genuineProductVideo.onplay = function() {
			$('#genuineProduct .video .btn_play').hide();
		};

		$(document).on('click', '#genuineProduct .video .btn_play', function(){
			genuineProductVideo.play();
		});
	}
});

/**
topBannerHide
**/
function topBannerHide(){
	$('.topBanner').slideUp(300, function(){
		//24시간
		localstoragejs.sessionSet("loginFlBanner","Y",1440);
		$('#wrap').removeClass('topBannerShow');
	});
}

var jsSearchNum = 0;

function jsSearchRoll(){
	$('.jsSearchTxt .rollCon').slick({
		pauseOnHover:false,
		autoplay:true,
		autoplaySpeed:2000,
		infinite:true,
		speed:300,
		vertical:true,
		arrows:false,
		initialSlide:jsSearchNum
	});
}

$(document).on('click', '.jsSearchTxt', function(){
	$('#headerSearch').focus();
});

$(document).on('focus', '#headerSearch', function(){
	$('#loginLayer').hide();
	$('.latestPdtH').stop().slideUp(300);
	$('.jsSearchTxt').hide();
	if ($('.jsSearchTxt .rollCon .txt').length > 0)
	{
		jsSearchNum = $('.jsSearchTxt .rollCon').slick('slickCurrentSlide');
		$('.jsSearchTxt .rollCon').slick('slickPause');
		$('.jsSearchTxt .rollCon').find('.slick-current').removeClass('slick-active');
	}

	if ($('#headerSearch').val() == '')
	{
		$('#header .searchInfo').show();
		$('#header .searchH .autoWord').hide();
	}
	else
	{
		$('#header .searchH .autoWord').show();
		$('#header .searchInfo').hide();
	}
});

$(document).on('keyup', '.searchWrap', function(){
	if ($('#headerSearch').val() == '')
	{
		$('#header .searchInfo').show();
		$('#header .searchH .autoWord').hide();
	}
	else
	{
		$('#header .searchH .autoWord').show();
		$('#header .searchInfo').hide();
	}
});

$(document).on('blur', '.searchWrap', function(){
	if ($('#headerSearch').val() == '' && $('.jsSearchTxt .rollCon .txt').length > 0)
	{
		$('.jsSearchTxt .rollCon').find('.slick-current').addClass('slick-active');
		$('.jsSearchTxt .rollCon').slick('slickPlay');
		$('.jsSearchTxt').show();
	}
	$('#header .searchInfo, #header .searchH .autoWord').hide();
});

$(document).on('mousedown', '#header .searchInfo, #header .searchH .autoWord, #header .searchWrap button', function(e){
	e.preventDefault();
});

$(document).on('focus', '.gnbFloating .searchBox', function(){
	if ($('#floatingSearch').val() == '')
	{
		$('.gnbFloating .autoWord').hide();
	}
	else
	{
		$('.gnbFloating .autoWord').show();
	}
});

$(document).on('keyup', '.gnbFloating .searchBox', function(){
	if ($('#floatingSearch').val() == '')
	{
		$('.gnbFloating .autoWord').hide();
	}
	else
	{
		$('.gnbFloating .autoWord').show();
	}
});

$(document).on('blur', '.gnbFloating .searchBox', function(){
	$('#header .searchInfo, .gnbFloating .autoWord').hide();
});

$(document).on('mousedown', '.gnbFloating .autoWord', function(e){
	e.preventDefault();
});