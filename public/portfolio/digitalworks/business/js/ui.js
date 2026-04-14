//"use strict";

var winST;
var openPos;

/**
COMMON
**/
function scrollSet(scrollPo){
	$('html, body').animate({'scrollTop' : $(scrollPo).offset().top},200);
}
$(document).ready(function(){
	// 폼공통
	$('input[type=text], input[type=search], input[type=tel], input[type=password], input[type=number], input[type=email], textarea').blur(function(){
		var tmpval = $(this).val();
		if(tmpval == '') {
			$(this).parent().addClass('empty');
			$(this).parent().removeClass('not-empty');
		} else {
			$(this).parent().addClass('not-empty');
			$(this).parent().removeClass('empty');
		}
	});

	//페이지 타이틀 모션
	$('.titleArea .cate').stop().animate({'top':0, 'opacity': 1}, 900, 'easeOutCubic');
	$('.titleArea .title').stop().delay(300).animate({'top':0, 'opacity': 1}, 900, 'easeOutCubic');
	$('.topVisual .keyVisual').stop().delay(400).animate({'opacity': 1}, 1000, 'easeOutCubic');

	//키 비쥬얼 텍스트 모션
	var topValController = new ScrollMagic.Controller();
	var toCntwrap = $('.topVisual .topCnt');

	toCntwrap.each(function(_idx) {
		var scene1 = new ScrollMagic.Scene({
						triggerElement: toCntwrap.get(_idx),
						triggerHook: 0.4
					})
					.setVelocity('.topCnt_animate', {'opacity': 1, 'top':0}, {'duration': 400})
					// .addIndicators()
					.addTo(topValController);

	});

	//섹션 텍스트 모션
	var secTxtController = new ScrollMagic.Controller();
	var secwrap = $('.sectionWrap');
	var obj = $('.secTitleWrap');
	var dura = [];

	secwrap.each(function(_idx) {
		var _h = $(this).height();
		dura.push(_h);

		var scene2 = new ScrollMagic.Scene({
								triggerElement: secwrap.get(_idx),
								duration: dura[_idx],
								triggerHook: 0.6
							})
							.setClassToggle(secwrap.get(_idx),'visible')
							.on('enter', function(){
								$(secwrap.get(_idx)).find(obj).find('.sec_tit').addClass('animate');
								$(secwrap.get(_idx)).find(obj).find('.sub_tit').addClass('animate');
								$(secwrap.get(_idx)).find(obj).find('.sub_txt').addClass('animate');
								$(secwrap.get(_idx)).find(obj).find('.quote').addClass('animate');
							})
							// .on('leave', function(){
							// 	$(secwrap.get(_idx)).find(obj).find('.sec_tit').removeClass('animate');
							// 	$(secwrap.get(_idx)).find(obj).find('.sub_tit').removeClass('animate');
							// 	$(secwrap.get(_idx)).find(obj).find('.sub_txt').removeClass('animate');
							// 	$(secwrap.get(_idx)).find(obj).find('.quote').removeClass('animate');
							// })
							// .addIndicators()
							.addTo(secTxtController);
	});

	//공통영역 텍스트 모션
	var comTxtController = new ScrollMagic.Controller();
	var comwrap = $('.sec_common');
	var obj2 = $('.com_animate');
	var dura2 = [];

	comwrap.each(function(_idx) {
		var _h = $(this).height();
		dura2.push(_h);

		var scene3 = new ScrollMagic.Scene({
								triggerElement: comwrap.get(_idx),
								duration: dura2[_idx],
								triggerHook: 0.6
							})
							.setClassToggle(comwrap.get(_idx),'visible')
							.on('enter', function(){
								$(comwrap.get(_idx)).find(obj2).addClass('animate');
								
								// if (comwrap.get(_idx) == 0) {
								// 	console.log(1)
								// 	// scene3.setVelocity('.secTitle h2', {'opacity': 1, 'top':0}, {'duration': 400})
								// 	// scene3.setVelocity('.secTitle p', {'opacity': 1, 'top':0}, {'duration': 500})
								// }
								// else if (comwrap.get(_idx) == 0) {
								// 	console.log(2)
								// 	scene3.setVelocity('.sec_perform h2', {'opacity': 1, 'top':0}, {'duration': 400})
								// }
							})
							// .on('leave', function(){
							// 	$(comwrap.get(_idx)).find(obj2).removeClass('animate');
							// })
							// .addIndicators()
							.addTo(comTxtController);
	});
});
/**
폼태그
**/
/* 셀렉트박스 */
$(document).on('click', '.selectType .title', function(){
	if ($(this).parent('.selectType').hasClass('disabled')) {return false;}

	var target = $(this).parent();

	if (target.hasClass('open')) {
		$(this).siblings('.selList').stop().animate({'maxHeight' : 0+'px'}, 250, 'easeOutCubic');
		setTimeout(function(){
			target.find('.selList').hide();
			target.removeClass('open');
		},250);			
	} else {
		//$('.selectType.open .title').click();
		$(this).parent('.selectType').addClass('open');
		$(this).siblings('.selList').show();
		$(this).siblings('.selList').stop().animate({'maxHeight' : 250+'px'}, 500, 'easeOutCubic');
	};
});
$(document).on('click', '.selectType .selList label', function (){
	/*
	var disabled = $(this).prev('input').prop('disabled');
	if (disabled) {return false}
	*/
	var txt_value = $(this).text();
	var target = $(this).parents('.selectType');
	target.find('.title').text(txt_value);
	target.find('input').removeAttr('checked');
	$(this).prev('input').attr('checked','checked');
	$(this).parents('.selList').stop(true, false).animate({'maxHeight' : 0+'px'}, 250, 'easeOutCubic');
	setTimeout(function(){
		target.removeClass('open');
		target.find('.selList').hide();
	},250);
	
	$(this).prev('input').trigger('change');
});
$(document).on('mouseleave', '.selectType', function(){
	var _target = $(this);
	_target.find('.selList').stop(true, false).animate({'maxHeight' : 0+'px'}, 250, 'easeOutCubic');
	setTimeout(function(){
		_target.removeClass('open');
		_target.find('.selList').hide();
	}, 250);
});
/* 체크박스 */
$(document).on('click', '.checkType label', function (){
	if ($(this).parent().hasClass('disabled')){return false;}
	
	var tar = $(this).parent().find('input');
	var chk = tar.prop('checked');
	var grpNm = tar.attr('name');


	if ($(this).parent('.checkType').hasClass('allChk')){ // 전체동의
		var chkStatus = tar.prop('checked');
		$("input:checkbox[name=" + grpNm + "]").each(function() {
			if (chkStatus) {
				$(this).closest(".checkType").removeClass("checked");
				$(this).prop("checked",false);
			} else {
				$(this).closest(".checkType").addClass("checked");
				$(this).prop("checked",true);
			}
		});
	} else {
		if ($(this).parent().hasClass('checked')) {
			$("input:checkbox[name=" + grpNm + "]").each(function() {
				$(this).closest('.checkType.allChk').removeClass('checked');;
				$(this).closest('.checkType.allChk input').prop("checked",false);
			});
			$(this).parent().removeClass('checked');
			tar.prop("checked",false);
		} else {
			$(this).parent().addClass('checked');
			tar.prop("checked",true);
		}
	}
	console.log(tar.prop('checked'));
	return false;
});
/* 라디오버튼 */
$(document).on('click', '.radioType input', function (){
	if ($(this).parent().hasClass('disabled')){return false;}
	var grpNm = $(this).attr('name');
	$('input:radio[name=' + grpNm + ']').each(function() {
		$(this).closest('.radioType').removeClass('checked');
		$(this).prop('checked',false);
	});
	$(this).parent().addClass('checked');
	$(this).parent().find('input').prop('checked',true);
	console.log($(this).parent().find('input').prop('checked'));
});
function getFileName(elm){
	var fn = $(elm).val();
	var _parent = $(elm).parent();
	var filename = fn.match(/[^\\/]*$/)[0]; // remove C:\fakename
	_parent.find('.fileName').html(filename);
	_parent.find('.btn_delFile').show();
}
function delFileName(elm){
	var _parent = $(elm).parent();
	$(elm).hide();
	_parent.find('input').val('');
	_parent.find('.fileName').html('<span>파일 업로드 (3MB 이하)</span>');

}
/**
tabType
**/
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
header
**/
// $(function(){
// 	// Hide Header on on scroll down
// 	var didScroll = false;
// 	var lastScrollTop = 0;
// 	var delta = 20;
// 	var _header = $('#header');
// 	var navbarHeight = _header.outerHeight();
// 	$(window).on('scroll',function(){
// 		winST = $(this).scrollTop();
// 		didScroll = true;
// 		if (winST > 0) {
// 			_header.addClass('fix');
// 		} else {
// 			_header.removeClass('fix nav-down nav-up');
// 		}
// 		if (didScroll) {
// 			hasScrolled();
// 		}
// 	});
// 	function hasScrolled() {
// 		if(Math.abs(lastScrollTop - winST) <= delta) return;
// 		if (winST > lastScrollTop && winST > navbarHeight){
// 			_header.removeClass('nav-down').addClass('nav-up');
// 		} else {
// 			if(winST + $(window).height() < $(document).height()) {
// 				_header.removeClass('nav-up').addClass('nav-down');
// 			}
// 		}
// 		lastScrollTop = winST;
// 		setTimeout(function(){
// 			didScroll = false;
// 		},100);
// 	}
// });


// function openNavi(){
// 	openPos = $(window).scrollTop();
// 	$('#sideNavi').addClass('open');
// 	$('html, body').css('overflow','hidden');
// 	$('body').append('<div class="mask"></div>');
// 	$('#wrap').css('transform','translateY(-' + openPos + 'px)');
// }
// function closeNavi(){
// 	$('#sideNavi').removeClass('open');
// 	$('#wrap').css('transform','');
// 	$('.mask').remove();
// 	$('html, body').css('overflow','');
// 	$('html, body').stop().animate({scrollTop:openPos}, 0);
// }


/* vh 설정 */
document.addEventListener("DOMContentLoaded", () => {	
	function updateViewportHeight() {
		const vh = window.innerHeight;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	}
	updateViewportHeight();
	window.addEventListener('resize', updateViewportHeight);
});
/* vh 설정 */

/* header */
document.addEventListener("DOMContentLoaded", () => {
	let lastScrollTop = 0;
	const delta = 15;
	const header = document.getElementById("header");

	window.addEventListener("scroll", () => {
		const currSt = window.scrollY;
		if (Math.abs(lastScrollTop - currSt) <= delta) return;
		if (currSt > lastScrollTop && lastScrollTop > 0) {
			if (!menuOpen) {
				// 아래로 스크롤
				gsap.to(header, {
					yPercent: -101,
					duration: 0.3,
					onComplete: () => {
						setTimeout(() => {
							header.classList.add("bg_on");
						}, 30);
					},
				})
			}			
		} else {
			// 위로 스크롤
			gsap.to(header, {
				yPercent: 0,
				duration: 0.3
			})
			if (currSt <= 10) { // 최상단
				header.classList.remove("bg_on")
			}
		}
		lastScrollTop = currSt;
	});

	const menuBtn = document.querySelector('.hbg_menu');
	const toggleSpan = gsap.utils.toArray('.hbg_menu .toggle span');
	const overlay = document.querySelector('.overlay');
	const menuItemsLi = gsap.utils.toArray('nav ul li');
	const menuItems = gsap.utils.toArray('nav ul li a');
	const menuSubTxts = gsap.utils.toArray('nav ul li span');
	const downBtn = document.querySelector(".nav_wrap .download");
	const navWrap = document.querySelector(".nav_wrap");

	let menuOpen = false;

	gsap.set(overlay, {scaleY: 0})
	gsap.set(menuItems, {yPercent: 100,})
	gsap.set(menuSubTxts, {opacity: 0, xPercent: -10})
	gsap.set(downBtn, {opacity: 0, visibility: 'hidden'})
	gsap.set(navWrap, {visibility: 'hidden'})

	const navTl = gsap.timeline({defaults: {ease: 'power4.inOut', duration: 1,}})
	.fromTo(overlay, { scaleY: 0 }, { scaleY: 1, duration: 0.9})
	.to(navWrap, {
		visibility: "visible"
	},"-=1")		
	.to(menuItems, {
		yPercent: 0,
		stagger: 0.085,
		duration: 1.3
	}, "-=1")
	.to(downBtn, {
		visibility: 'visible',
		opacity: 1,
		duration: 0.8
	}, "-=1")
	.to(toggleSpan, {
		marginBottom: -2,
		backgroundColor: "#fff",
		duration: 0.7
	}, "-=1.3")	
	.to(toggleSpan[0], {
		rotate: "-45deg",
		duration: 0.6
	}, "-=1.1")	
	.to(toggleSpan[1], {
		rotate: "45deg",
		duration: 0.6
	}, "-=1.1")
	.to(toggleSpan[2], {
		visibility: "hidden",
		opacity: 0,
		duration: 0.4
	}, "-=1.1")	
	navTl.pause();

	menuBtn.addEventListener('click', () => {
		const bodyElement = document.body;	
		if (!menuOpen) {
			navTl.play();
			bodyElement.style.overflowY = 'hidden';
			menuOpen = true;
		} else {
			navTl.reverse();
			bodyElement.style.overflowY = 'visible';
			menuOpen = !menuOpen;
		}
	});

	menuItemsLi.forEach(li => {
		const anchor = li.querySelector('a');
		const span = li.querySelector('span');			
		anchor.addEventListener('mouseenter', () => {
			gsap.to(span, { 
				duration: 0.4,
				opacity: 1,
				xPercent: 0,
				ease: 'power1.inOut',
			});
		});
		li.addEventListener('mouseleave', () => {
			gsap.to(span, {
				duration: 0.4,
				opacity: 0,
				xPercent: -10,
				ease: 'power1.inOut',
			});
		});
	});
	
});
/* header */

/**
footer
**/
$(document).ready(function(){
	$("#footer .scroll-block").slick({
		vertical: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		verticalSwiping: true,
		draggable: false,
		swipe: false,
		pauseOnFocus: false,
		pauseOnHover: false
	});
	$("#footer .scroll-block *").on("touchmove", function  (e) {		
		e.stopPropagation();
	});
});

/**
layer
**/
var open_target;
var open_pos;
// 레이어 열기
function showPopup(popupID,target){
	open_target = target;
	open_pos = $(window).scrollTop();

	var Selector = $('<div id="Selector"></div>');

	if ($('#Selector').length <= 0){ //중복체크
		Selector.appendTo('#wrap');
		if (popupID == 'newsletter_pop') {} 
		else {$('#wrap').addClass('layer');}
	} else {
		$('.lay_inner.open').css({
			'position' : 'absolute', 'top' : '-200%'
		});
	}

	$('.layerWrap').fadeTo(500, 1);
	$('#' + popupID).fadeTo(500, 1).addClass('open');
};

// 레이어 닫기
function hidePopup(popupID){
	var popupLen = $('body').find('.lay_inner:visible').length;

	if (popupLen === 0){
		if (open_target === document) {
			return false;
		} else {
			open_target.focus();
		}
	} else if (popupLen > 1) {
		$('#' + popupID).fadeOut(0).removeClass('open');
		$('.lay_inner.open').css({
			'position' : 'relative', 'top' : '0'
		});
		open_target.focus();
		return;
	}
	
	$('.layerWrap').fadeOut(500, 0);
	$('#' + popupID).fadeOut(500, 0).removeClass('open');
	$('#Selector').remove();
	$('#wrap').removeClass('layer');
	$('html, body').stop().animate({scrollTop : open_pos}, 200);
	open_target.focus();
};