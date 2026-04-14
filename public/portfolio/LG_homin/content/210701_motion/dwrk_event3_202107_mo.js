//window.onDynamicContentReady(function() {
//	$nuxt.$loadScript("https://pubfiles.lghomin.com/contents/pr/exhibition/TweenMax.min.js").then(function () {	
		$(document).on('click', '.dwrk_scrollTab a', function(){
			$('html, body').animate({'scrollTop' : $($(this).attr('href')).offset().top},500);
			return false;
		});
		$(document).ready(function() {
			$(".dwrk_menuTab a").click(function(e) {
				$(".dwrk_menuTab li").removeClass("active");
				$(this).parent("li").addClass("active");
				$(".dwrk_cttTab li").removeClass("active")
				$("." + $(this).attr("data-target")).addClass("active")
				e.preventDefault();
			});
		});
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
		
		var crntlTime = 0;
		var myTimer;
		function graphOn(){			
			myTimer = setInterval(function(){
				togleeClass(crntlTime)
				crntlTime = Math.floor(Math.random() * ($('.animeBox:not(.aniStrat)').length)) // 실행 안된 항목만 따로잡음
			}, 300)
		}
		function togleeClass (target){
			var targetIndex = $('.animeBox:not(.aniStrat)').eq(target).index()
			switch($('.animeBox').eq(targetIndex).index()) {
				case 0: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 1600);
					break;
				case 1: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 1700);
					break;
				case 2: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 1800);
					break;
				case 3: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 1900);
					break;
				case 4: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 600);
					break;
				case 5: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 2000);
					break;
				case 6: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 700);
					break;
				case 7: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 2200);
					break;
				case 8: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat")}, 800);
					break;
				default: setTimeout(function(){$('.animeBox').eq(targetIndex).removeClass("aniStrat");}, 1500);
					break;
			}
			$('.animeBox:not(.aniStrat)').eq(target).addClass("aniStrat");
		}
		graphOn()
//	});
//});