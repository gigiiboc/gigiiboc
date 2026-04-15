//window.onDynamicContentReady(function() {
	$(document).on('click', '.dwrk_tab a', function(){
		$('html, body').animate({'scrollTop' : $($(this).attr('href')).offset().top - $('#layout__header').outerHeight()},500);
		return false;
	});

	$(function(){
		var gnb = $('.dwrk_tab'),
			gnbPo = gnb.offset().top,
			gnbH = $('.dwrk_tab').outerHeight(),
			gnbMenu = $('.dwrk_tab ul li'),
			gnbMenuLeng = gnbMenu.length;
		$(window).on('scroll', function(){
			for (var i=0; i<gnbMenuLeng; i++){
				if ($(gnbMenu.eq(gnbMenuLeng-1-i).find('a').attr('href')).offset().top - gnbH - $('#layout__header').outerHeight() < $(window).scrollTop()){
					gnbMenu.find('a').removeClass('current')
					gnbMenu.eq(gnbMenuLeng-1-i).find('a').addClass('current')
					break
				} else {
					gnbMenu.eq(0).find('a').addClass('current')
				}
			}
			if ($(this).scrollTop() > gnbPo - $('#layout__header').outerHeight()){
				gnb.addClass('fixed').css('top', $('#layout__header').outerHeight() + 'px');
			} else {
				gnb.removeClass('fixed').css('top', '0px');
			}
		});
	});

	function dwrk_viewAnim (target){
		$(target).each(function(){
			var targetTop = $(this).offset().top;

			if ($(this).attr('anime-stlye') == 1){ // 화면에 나타날때 노출, 유지
				if ($(window).scrollTop() >= targetTop - ($(window).height()/2)){
					$(this).addClass('on')
					// 영상있을경우
					if ($(this).hasClass('videoItem') && !$(this).hasClass('end')){
						$(this).find('.videoCtt').get(0).play();
					}
				} else {
					//$(this).removeClass('on')					
				}
			} else if ($(this).attr('anime-stlye') == 2){ // 화면에 나타날때 노출되며, 화면에서 가려질때 비노출됨.
				if ($(window).scrollTop() >= targetTop - $(window).height() && $(window).scrollTop() < targetTop + $(this).height()){
					$(this).addClass('on')
				} else {
					$(this).removeClass('on')
				}
			}
		})
	}
	dwrk_viewAnim('.dwrk_viewAnim')
	$(window).scroll(function(){
		dwrk_viewAnim('.dwrk_viewAnim')
	})
		
	$(function(){
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
	});
//});