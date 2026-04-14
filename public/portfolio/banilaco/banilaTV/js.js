"use strict";
var tvCntHeight = document.body.clientHeight*0.87,
	ts;

function banila_tv_start(){
	$('.blTvArea').find('.blTvBox').css('height', tvCntHeight + 'px');
	$('.blTvArea .blTvBox:first-child').addClass('on');

	if ($('.blTvArea .blTvBox:first-child .tvVideo').length > 0){
		tvVideoPlay($('.blTvArea .blTvBox:first-child .tvVideo'));
	}
	$('.tvPrdCnt li').each(function(){
		$(this).css('z-index',$(this).index())
	});	 
	$('.likeBtn a').on('click', function() {
		$(this).stop().animate({height: '14px', width: '14px'}, 100, function(){
			$(this).stop().animate({height: '100%', width: '100%'}, 100)
		})
		$(this).closest('.likeCount').find('.likeAnime').append('<span class="heart style'+Math.floor(4*Math.random()+1)+'"><span class="heart01"></span><span class="heart02"></span></span>')
		$(this).closest('.likeCount').find('.clickCount').html(parseFloat($(this).closest('.likeCount').find('.clickCount').html())+1)
	})
}
function nextVideo(){
	$('.blTvArea .blTvBox').removeClass('on');
	$('.blTvArea .blTvBox').eq(1).addClass('on');

	$('.blTvArea').stop().animate({'top' : -tvCntHeight+'px'},300, function(){
		$('.blTvArea').css('top', '0px');
		$('.blTvArea .blTvBox:first-child').appendTo('.blTvArea')
	});
}
function prevVideo(){
	$('.blTvArea .blTvBox:last-child').prependTo('.blTvArea');
	$('.blTvArea').css('top', -tvCntHeight+'px').stop().animate({'top' : 0},300);

	$('.blTvArea .blTvBox').removeClass('on');
	$('.blTvArea .blTvBox:first-child').addClass('on');
}
$(document).on('touchstart','.blTvArea', function (e){
	ts = e.originalEvent.touches[0].clientY;
});
$(document).on('touchend','.blTvArea', function (e){
	var te = e.originalEvent.changedTouches[0].clientY;
	if(ts > te+5){
		nextVideo()
	} else if (ts < te-5){
		prevVideo()
	}
	if ($('.blTvArea .blTvBox.on .tvVideo').length > 0){
		tvVideoAllStop()
		tvVideoPlay($('.blTvArea .blTvBox.on .tvVideo'))
	}
});
$(window).resize(function(){
	tvCntHeight = document.body.clientHeight*0.87
	$('.blTvArea .blTvBox').height(tvCntHeight)
	$('.blTvArea').css('top', '0px');
})
function tvVideoControll(){
	$('.tvVideo').on('pause', function() {
		if ($(this).get(0).currentTime >= $(this).get(0).duration){
			$(this).closest('.tvVideoBox').removeClass('play');
			$(this).closest('.tvVideoBox').removeClass('pause');
			$(this).closest('.tvVideoBox').addClass('end');
			nextVideo()
		} else {
			$(this).closest('.tvVideoBox').removeClass('play');
			$(this).closest('.tvVideoBox').addClass('pause');
			$(this).closest('.tvVideoBox').removeClass('end');	
		}
	});
}
function tvVideoPlay (e){	
	$(e).siblings('.tvThumb').hide()
	$(e).get(0).play()
	$(e).closest('.tvVideoBox').addClass('play');
	$(e).closest('.tvVideoBox').removeClass('pause');
	$(e).closest('.tvVideoBox').removeClass('end');
}
function tvVideoAllStop(){
	$('.tvVideo').each(function(){
		$(this).get(0).pause()
		$(this).closest('.tvVideoBox').removeClass('play');
		$(this).closest('.tvVideoBox').addClass('pause');
		$(this).closest('.tvVideoBox').removeClass('end');
	})
}
function videoAllMuteOn (){
	$('.tvVideo').each(function(){
		$(this).get(0).muted = true
	})
	$('.tvMuteBtn').each(function(){
		$(this).removeClass('soundOn')
	})
}
function videoAllMuteOff (){
	$('.tvVideo').each(function(){
		$(this).get(0).muted = false
	})
	$('.tvMuteBtn').each(function(){
		$(this).addClass('soundOn')
	})
}
	
tvVideoControll()