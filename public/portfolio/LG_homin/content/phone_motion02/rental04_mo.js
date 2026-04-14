//window.onDynamicContentReady(function() {
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
			} else if ($(this).attr('anime-stlye') == 3){ // dwrk_cttBox05
				if ($(window).scrollTop() >= $(this).closest('.dwrk_cttBox05').offset().top - ($(window).height()/2)){
					$(this).addClass('on')
					// 영상있을경우
					if ($(this).hasClass('videoItem') && !$(this).hasClass('end')){
						$(this).find('.videoCtt').get(0).play();
					}
				} else {
					//$(this).removeClass('on')					
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