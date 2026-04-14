//window.onDynamicContentReady(function() {
//	$nuxt.$loadScript("https://pubfiles.lghomin.com/contents/ds/magazine/slick.min.js").then(function () {
		function dwrk_viewAnim (target){
			$(target).each(function(){
				var targetTop = $(this).offset().top;

				if ($(this).attr('anime-stlye') == 1){ // 화면에 나타날때 노출, 유지
					if ($(window).scrollTop() >= targetTop - ($(window).height()/2)){
						$(this).addClass('on')
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
		$('.dwrk_slick').slick({
			fade: true,
			arrows: false,
			dots: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 1000,
			pauseOnFocus: false,
			pauseOnHover: false
		});
//	});
//});