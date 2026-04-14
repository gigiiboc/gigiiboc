function visualNav(idx){
	$('.visualThumb button').removeClass('on');
	$('.visualThumb li').eq(idx).find('button').addClass('on');
	$('.visualImg').slick('slickGoTo', idx);
}	

$('.visualImg').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	autoplay: true
});

$('.visualImg').on('afterChange', function(event, slick, currentSlide){
	visualNav(currentSlide);
});

$('.visualThumb button').on('click', function(){
	var idx = $(this).parent().index();
	visualNav(idx);
});

$('.visualThumb button').click(function(){
	var idx = $(this).attr('data-index');
	$('.visualImg .item').removeClass('on');
	$('.visualThumb button').removeClass('on');
	$(this).addClass('on');
	$('.visualImg .item').eq(idx).addClass('on');
});

// 상세 스크롤 효과
function viewAnim (target){
	$(target).each(function(){
		var targetTop = $(this).offset().top;

		if ($(this).attr('data-time') == 1){
			if ($(window).scrollTop() >= targetTop - ($(window).height()*0.7)){
				$(this).addClass('on')
			}
		} else if ($(this).attr('data-time') == 2){
			if ($(window).scrollTop() >= targetTop - ($(window).height()*0.4) && $(window).scrollTop() < targetTop + ($(window).height()*0.8)){
				$(this).addClass('on')
			} else {
				$(this).removeClass('on')
			}
		}
	})
}


/* 상세 영상 재생 */
var playerBox = $('.video_section')
var player = document.getElementById('player');

$(function(){
	playerBox.on('inview', function(event, isInView) {
		if (isInView) {
			player.play()
			playerBox.addClass('inview');
			playerBox.addClass('play');
			playerBox.removeClass('pause');
			playerBox.removeClass('end');
		} else {
			player.pause()
			playerBox.removeClass('inview');
			playerBox.removeClass('play');
			playerBox.addClass('pause');
			playerBox.removeClass('end');
		}
	});
	$('#player').on('pause', function() {
		if (player.currentTime >= player.duration){
			playerBox.removeClass('play');
			playerBox.removeClass('pause');
			playerBox.addClass('end');
		} else {
			playerBox.removeClass('play');
			playerBox.addClass('pause');
			playerBox.removeClass('end');	
		}
	});
});

function videoPlay (){
	player.play()
	playerBox.addClass('play');
	playerBox.removeClass('pause');
	playerBox.removeClass('end');
}
function videoPause (){
	player.pause()
	playerBox.removeClass('play');
	playerBox.addClass('pause');
	playerBox.removeClass('end');
}