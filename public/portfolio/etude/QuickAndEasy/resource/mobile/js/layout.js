/*=================================
intro
=================================*/

// 로드 초기
var winWidth = $(window).width()
var $textOverflow = $('.loadSection .text-overflow')
var $textWrapper = $('.loadSection .title-wrapper')
var $textOverflow_final = $('.loadSection .textBox.end .text-overflow')
var $textWrapper_final = $('.loadSection .textBox.end .title-wrapper')

$textWrapper.css('width', winWidth)

// 리사이즈시
$(window).resize(function(){
	var winWidth = $(window).width();
	$textOverflow.css('width', winWidth)
	$textWrapper.css('width', winWidth)
	$('.bg').css('width', winWidth)
})

// 인트로 스타트
function loadStart (){
	TweenMax.to('.bg', 1, {
		delay: 0.5,
		width:winWidth,
		ease:Power3.easeInOut,
		onUpdate : function(){
			$textOverflow_final.width($('.bg').width())
		},
		onComplete: function() {
			$('.mainOpenBtn').css('visibility','visible').css('transform','matrix(1, 0, 0, 1, 0, 50)')
			TweenMax.to('.mainOpenBtn', 1, {
				opacity:'1',
				ease:Power3.easeInOut
			});
			TweenMax.to('.mainOpenBtn', 1, {
				y:0
			});
		}
	});
}

// 인트로 종료 및 메인오픈
function loadEnd (){
	TweenMax.to('.mainOpenBtn', 0.5, {
		opacity:'0',
		ease:Power3.easeInOut
	});
	TweenMax.to('.mainOpenBtn', 0.5, {
		y:10
	});
	TweenMax.to($textWrapper, 0.5, {
		delay: 0.8,
		top: $textWrapper.height(),
		ease: Power3.easeInOut,
		onComplete: function(){
			TweenMax.to('.loadSection', 1, {
				left:'-100%',
				ease: Power3.easeInOut,
				onUpdate : function(){
					// $('.wrap').css('left', $('.loadSection').css('left'))
				},
				onComplete: function() {
					$('html, body').css({
						height:'auto',
						overflowY:'auto'
					})
					openTabAni()
				}
			});						
		}
	});
}


/*=================================
tab
=================================*/

/* 타이틀 애니메이션  */
function openTabAni(){
	TweenMax.to('.firstPage_ttl1', 1, {
		opacity:'1',
		//x:0,
		//y:0,
		ease:Power3.easeInOut
	});
	TweenMax.to('.firstPage_ttl2', 1, {
		delay:0.5,
		opacity:'1',
		//x:0,
		//y:0,
		ease:Power3.easeInOut
	});
	TweenMax.to('.openTab', 1, {
		delay:1,
		opacity:'1',
		ease:Power3.easeInOut,
		onComplete: function(){	
			openTabAni2();		
		}
	});
}

function openTabAni2(){
	TweenMax.to('.openTab', 0.2, {
		delay:1,
		y:5,
		ease:Power3.easeInOut,
		onComplete: function(){
			TweenMax.to('.openTab', 0.2, {
				y:0,
				onComplete: function(){
					openTabAni2();				
				}
			});						
		}	
	});	
}

/* 메인 스크롤탭 */
var	tab = $('.tabBox > ul > li'),
	ctt = $('.cttBox > li'),
	tabLength = tab.length;


$('.main').css({
	top: $('.firstPage').height()+$('.tabBox').height(),
	paddingBottom: $('.firstPage').height()+$('.tabBox').height()
})

// 리사이즈시
$(window).resize(function(){
	$('.main').css({
		top: $('.firstPage').height()+$('.tabBox').height(),
		paddingBottom: $('.firstPage').height()+$('.tabBox').height()
	})
})

// 탭 컨텐츠로 이동
function openTab(){
	TweenMax.to('body,html', 0.5, {
		scrollTop: $('.firstPage').height(),
		ease: Power3.easeIn
	});	
}

$(window).scroll(function(){
	tab.removeClass('on')

	if ($(this).scrollTop() > $('.ctt3').offset().top - $('.tabBox').height() - 1){
		$('.tab3').addClass('on')
	} else if ($(this).scrollTop() > $('.ctt2').offset().top - $('.tabBox').height() - 1){
		$('.tab2').addClass('on')
	} else {
		$('.tab1').addClass('on')
	}

	if ($(this).scrollTop() >= $('.firstPage').height()){
		$('.tabBox').addClass('show')
	} else {
		$('.tabBox').removeClass('show')
	}

	if ($(this).scrollTop() >= 100){
		$('.openTab').css('z-index','2')
	} else {	
		$('.openTab').css('z-index','3')
	}
	return false;
});

$('.tabBox a').click(function(){
	var IndexOf = $(this).parent('li').index()
	var target = ctt.eq(IndexOf).offset().top

	TweenMax.to('body,html', 0.5, {
		scrollTop:target - $('.tabBox').height() + 1,
		ease: Power3.easeInOut
	});
	return false;
});
	

/*=================================
ctt
=================================*/

var cuScroll = $(window).scrollTop()

// 팝업 열기
function popupOn (e, src, href){
	if (!$(e).hasClass('open')){
		$(e).find('.img').attr('src', src)
		$(e).find('.shopBtn').attr('href', href)
		$('.popupBg').addClass('open')
		$(e).addClass('open')		
		cuScroll = $(window).scrollTop()
		$('html, body').css({
			overflowY:'hidden'
		})
	}
}

// 팝업 닫기
function popupOff (e){
	if ($(e).hasClass('open')){
		$('html, body').css({
			overflowY:'auto'
		})
		$(window).scrollTop(cuScroll)
		$(e).removeClass('open')
		$('.popupBg').removeClass('open')
		$(e).find('.img').attr('src', '')
		$(e).find('.shopBtn').attr('href', '')
	}
}

// 룩스 애니메이션
function viewAnim (target){
	$(target).each(function(){
		var targetTop = $(this).offset().top;

		if ($(this).attr('anime-stlye') == 1){
			if ($(window).scrollTop() >= targetTop - $(window).height()){ // 화면에 나타날때 노출, 유지
				$(this).addClass('on')
			} else {
				$(this).removeClass('on')						
			}
		} else if ($(this).attr('anime-stlye') == 2){
			if ($(window).scrollTop() >= targetTop - $(window).height() && $(window).scrollTop() < targetTop + $(this).height()){ // 화면에 나타날때 노출되며, 화면에서 가려질때 비노출됨.
				$(this).addClass('on')
			} else {
				$(this).removeClass('on')
			}
		}
	})
}

// 리뷰 애니메이션
/*
$('.main .cttBox > li.ctt3 ul li a').on('mouseenter', function(){
	TweenMax.to($(this).children('img'), 1, {
		scale: 1.1
	});
}) 
$('.main .cttBox > li.ctt3 ul li a').on('mouseleave', function(){
	TweenMax.to($(this).children('img'), 1, {
		scale: 1
	});
})
*/