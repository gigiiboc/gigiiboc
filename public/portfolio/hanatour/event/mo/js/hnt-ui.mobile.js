/*
 * hnt_ui.mobile : MOBILE
 * <UPLEAT> UI Dev Team
 * {Oh Young Ju}, {An Se Jung}, {Lee Yun Hee}, Hwang Mi Ae, Kim So Young, Cho Han Sol, {Kang Young Sun}
 * commnet : pc com
 */

(function() {
	var Class = {
		winHeight:0
		, winWidth:0
		, didScroll:false
		, headerWrapHeight : 0
		, coBrandHeight : 0
		, ribbonHeight : 0
		, isMobile: navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i) ? true : false
		, isWide : false
		, evTouchStart: navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i) ? 'touchstart' : 'mousedown'
		, evTouchMove: navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i) ? 'touchmove' : 'mousemove'
		, evTouchEnd: navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i) ? 'touchend' : 'mouseup'
		, animEndEventName : {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		}[ Modernizr.prefixed( 'animation' ) ]
		,/* initBrowser */  initBrowserOnce: function initBrowserOnce() {
			if((/Android/i).test(navigator.userAgent)) {
				$('html').addClass('Android').data('browser', 'Android');
			} else if((/iPad|iPhone|iPod/i).test(navigator.userAgent)) {
				$('html').addClass('iOS').data('browser', 'iOS');
			} else if((/Chrome/i).test(navigator.userAgent)) {
				$('html').addClass('Chrome').data('browser', 'Chrome');
			}
			if(navigator.userAgent.match(/Android 4\.2/))
				$('html').addClass('fixAndroid42Scroll');
		}
		, /* address bar 감추기 */  initHideAddressBarOnce: function initHideAddressBarOnce() {
			setTimeout(function() {
				window.scrollTo(0, 1)}, 0);
		}
		, /* toast */   toast: function toast(str, toastTarget) { //toast(str, toastTarget)
			var $toast = $('#toast');
			if($toast.length<1) {
				$toast=$('<div id="toast"></div>');
				if(toastTarget){
					toastTarget.prepend($toast);
				} else{
					$('body').append($toast);
				}
			}
			$toast.append('<span>'+str+'</span>').addClass('on');
			var $toastTimer = setTimeout(function(){
				$toast.removeClass('on');
				$toast.remove();
				},3500);
		}
		, /* side menu */   initSideMenuOnce: function initSideMenuOnce() {
			var $leftMenu = $('nav.left_menu');
			var $rightMenu = $('.right_menu');
			var $wrap = $('#wrap');
			$(document)
				.on('showLeftMenu', function() {
					$('body').addClass('js_left_view');
				})
				.on('hideLeftMenu', function() {
					$('body').removeClass('js_left_view');
				})
				.on('showRightMenu', function() {
					$('body').addClass('js_right_view');
				})
				.on('hideRightMenu', function() {
					$('body').removeClass('js_right_view');
				})
				.on('click', 'a.js_act.btn_left_menu', function(e) {
					if(!$('body').hasClass('js_left_view')) {
						$(document).trigger('showLeftMenu');
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.left_menu a.js_act.btn_left_menu_close', function(e) {
					$(document).trigger('hideLeftMenu');
					e.preventDefault();
				})
				.on('click', 'a.js_act.btn_right_menu, a.js_act.btn_totalmenu', function(e) {
					if(!$('body').hasClass('js_right_view')) {
						$(document).trigger('showRightMenu');
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.right_menu a.js_act.btn_right_menu_close', function(e) {
					$(document).trigger('hideRightMenu');
					e.preventDefault();
				})
				.on(Class.evTouchStart, '#wrap', function() {
					$(document).trigger('hideLeftMenu');
					$(document).trigger('hideRightMenu');
				});
		}
		, /* headerShowHide */  initHeaderShowHideOnce: function initHeaderShowHideOnce() {
			var lastScrollTop = 0;
			var delta = 5;
			var $filter = $('.header_srch_wrap .filter_top_wrap');

			$(document)
				.on('ribbonHide',function(e){
					$('.ribbon_popup').addClass('off');
					$('html').removeClass('ribbon');
					setTimeout(function() {
						Class.setLayout();
					}, 300);
					e.preventDefault();
				})
				.on('gnbExpand',function(e){
					$('.gnb').addClass('on');
					$('html').addClass('gnbExpand');
					e.preventDefault();
					e.stopPropagation();
				})
				.on('gnbCollapse',function(e){
					$('.gnb').removeClass('on');
					$('html').removeClass('gnbExpand');
					e.preventDefault();
					e.stopPropagation();
				})
				.on(Class.evTouchStart, '.ribbon_popup .js_act.btn_cls', function() {
					$(document).trigger('ribbonHide');
				})
				.on('click', '.ribbon_popup .js_act.btn_cls', function() {
					$(document).trigger('ribbonHide');
				})
				.on('click', '.gnb .js_act.btn_show',function(e){
					if(!$(this).parent('.gnb').hasClass('on')){
						$(document).trigger('gnbExpand');
					} else{
						$(document).trigger('gnbCollapse');
					}
					e.preventDefault();
					e.stopPropagation();
				});
				setInterval(function() {
					if (Class.didScroll) {
						hasScrolled();
						Class.didScroll = false;
					}
					if($(window).scrollTop() == 0){
						Class.didScroll = false;
					}


				}, 100);

				function hasScrolled() {
					var st = $(this).scrollTop();
					var $quickMenu= $('.quick_menu');
					var $contents = $('.contents');//190730 sejung submain
					if(Math.abs(lastScrollTop - st) <= delta)
						return;
					//console.log(Class.headerWrapHeight);
					if (st > lastScrollTop && st > Class.headerWrapHeight-30){
						if($('.co_brand').length>0 && $('.ribbon_popup').length>0){
							$(".header_wrap").css({'top' : - (Class.coBrandHeight + Class.ribbonHeight)});
						} else if($('.co_brand').length>0 && $('.ribbon_popup').length == 0){
							$(".header_wrap").css({'top' : - (Class.coBrandHeight)});
						}
						$quickMenu.addClass('off');
						$('.srch_top').addClass('scrolled');
						//190730 sejung submain
						if($contents.hasClass('hanapack') || $contents.hasClass('zeus')|| $contents.hasClass('gmt')){
							$('.srch_top #header.type h1.title').show();
						 }

					} else {
						$quickMenu.removeClass('off');

						if(st + $(window).height() < $(document).height() && st < Class.headerWrapHeight-30) {
							$(".header_wrap").css({'top' : 0});
							$('.srch_top').removeClass('scrolled');
							//190730 sejung submain
							if($contents.hasClass('hanapack') || $contents.hasClass('zeus')|| $contents.hasClass('gmt')){
								$('.srch_top #header.type h1.title').hide();
							 }
						}

					}
					lastScrollTop = st;
				}
		}
		, /* top button */  initTopButtonOnce: function initTopButtonOnce(){
			$(document)
				.on('click','#footer .js_act.btn_top',function(e){
					$( 'html, body' ).stop().animate({scrollTop:0},400);
					//window.scrollTo(0, 0);
					e.preventDefault();
				});
		}
		, /* a preventDefault */ initHrefOnce: function initHrefOnce(){
			$(document)
				.on('click', 'a[href="#"]', function(e){
					e.preventDefault();
				});
		}
        , /* 증감    initInptCounterOnce :function initInptCounterOnce(){
            $(document)
				.on('click','.num_count_group button',function(e){
                    $obj = $(this);
                    $inptCounter = $obj.parent('.num_count_group').find('.inpt_counter');
					if($inptCounter.text() == 1 && $(this).hasClass('down') ||
                    +$inptCounter.data("max") == +$inptCounter.text()
                    && $(this).hasClass('up'))
                        return;

                    if($(this).hasClass('up'))
                    $inptCounter.text($inptCounter.text() * 1 + 1);
                    else
                    $inptCounter.text($inptCounter.text() * 1 - 1);
				});
        }
        , */ /* main */	initMainActionOnce :function initMainActionOnce(){
            $(document)
				.on('click','.box_user_adjust .js_act',function(e){
                    if(!$(this).closest('.main_visual').hasClass('off')){
                        $(this).closest('.main_visual').addClass('off');
                        //$(this).parent('.box_user_adjust').addClass('off');
                    } else{
                        $(this).closest('.main_visual').removeClass('off');
                        //$(this).parent('.box_user_adjust').removeClass('off');
                    }
				});
        }
		, /* toolTip */ initToolTipOnce: function initToolTipOnce() {
			$(document)
			.on('click','.tooltip_wrap .btn_tooltip',function(e){
				var $obj = $(this);
				if(!$obj.hasClass('on')){
					$obj.addClass('on').find('.blind>span').text('닫기');
					$obj.closest('.tooltip_wrap').find('.cls').focus();
				} else{
					$obj.remove('on').find('.blind>span').text('열기');
				}
				e.preventDefault();
			})
			.on('click','.tooltip_wrap .cls',function(e){
				var $csl = $(this);
				$csl.closest('.tooltip_wrap').find('.btn_tooltip').removeClass('on').focus();
				e.preventDefault();
			});
		}
        , /* on 토글 */	initToggleOnce: function initToggleOnce() {
			$(document)
			.on('click', 'a.js_toggle', function(e) {
				var $anchor = $(this);
				var target= $anchor.attr('href');
				var $target = null;
				$anchor.toggleClass('on');
				if(typeof target === 'undefined') {
					$target= $anchor;
				} else {
					$target = $(target);
					$target.toggleClass('on');
				}
				e.preventDefault();
			})
			.on('click','.flight_price .price_tit .btn_open',function(e){
				$(this).parents('.flight_price').toggleClass('open');
			})
			.on('click','.flight_price .js_close_btn',function(e){
				$(this).parents('.flight_price').removeClass('open');
			});
		}
		,/* showLoading */  showLoading: function showLoading(loadingTarget) {
			var $loading = $('#loading');
			if(loadingTarget){
				$multiLoading = $('<span class="loading"><span class="inr"><span>Loading ...</span></span></span>').appendTo(loadingTarget);
				setTimeout(function() {
					$multiLoading.addClass('on');
				}, 100);
			} else {
				if($loading.length<1) {
					$loading = $('<div id="loading"><div class="inr"><span>Loading ...</span></div></div>').appendTo('body');
					setTimeout(function() {
						$loading.addClass('on');
					}, 100);
				} else {
					$loading.addClass('on');
				}
			}



		}
		,/* history back */ initHistoryBackOnce: function initHistoryBackOnce(){
			$(document)
				.on('click','header .js_act.btn_prev',function(e){
					window.history.back();
				});
		}
		,/* calendar */ initCalendarOnce: function initCalendarOnce(){
			var $lypop_body = $('.lypop_body');
			var $lypop_header = $('.lypop_header');
			var $lypop_headerH = $lypop_header.outerHeight();
			if($('.calendar_wrap').length>0 && !$('.calendar_wrap').hasClass('swiper-container')){
				var $calendarWrap = $('.calendar_wrap');
				var $calendar = $calendarWrap.find('>.calendar');

				$lypop_body.on('scroll',function(e){
					//console.log('item01 : '+ $('.calendar.item01').offset().top, 'item02 : '+ $('.calendar.item02').offset().top, 'item03 : '+ $('.calendar.item03').offset().top, 'item04 : '+ $('.calendar.item04').offset().top);
					//console.log($lypop_body.scrollTop());

					$calendar.each(function(i, e){
						var $calendarH = $(this).offset().top;
						if($calendarH > 0 && $calendarH <= ($lypop_headerH * 2.7)){ //, $lypop_headerH * 1.5
							$calendar.removeClass('current');
							$(this).addClass('current');
							//console.log('add current');
						}
						$('.calendar_wrap').find('>.calendar_header>.header>p').text($('.current').find('.header>p').text());
						// if($lypop_body.scrollTop() == 0){
						// 	$calendar.removeClass('current');
						// 	$calendar.first().addClass('current');
						// }
					});
				});

			}
		}
		,/* accordion */    initAccordionOnce: function initAccordionOnce(){
			$(document)
				.on('showAcc', '.js_acc .view', function(e) {
					$(this).closest('.js_acc').find('.view').slideUp(200);
					$(this).slideDown(200);
					e.preventDefault();
					e.stopPropagation();
					//console.log('showAcc');
				})
				.on('hideAcc', '.js_acc .view', function(e) {
					$(this).closest('.js_acc').find('.view').slideUp(200);
					e.preventDefault();
					e.stopPropagation();
					//console.log('hideAcc');
				})
				.on('showOneAcc', '.js_acc > .view', function(e) {
					$(this).slideDown(200);
					e.preventDefault();
					e.stopPropagation();
				})
				.on('hideOneAcc', '.js_acc > .view', function(e) {
					$(this).slideUp(200);
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.js_acc:not(.multi) .header', function(e) {
					var $obj = $(this);
					var $target = $obj.attr("href").split("#")[1];
					//console.log($target);

					if(!$obj.hasClass('active')){
                        if($obj.parent().hasClass('holder')){
                            $obj.parent('.holder').parent('.js_acc').find('> .holder > .header').removeClass('active');
							$obj.parent('.holder').parent('.js_acc').find('> .view').removeClass('active');
							$obj.parent('.holder').addClass('active');
							//console.log('1');
                        } else if($obj.parent().is('li') || $obj.parent().is('div') && !$obj.parent().hasClass('js_acc')){
                            $obj.parents('.js_acc').find('.header').removeClass('active');
							$obj.parents('.js_acc').find('.view').removeClass('active');
							$obj.closest('.js_acc').closest('.view').siblings('.header').addClass('active');
							//console.log('2');
                        } else{
                            $obj.parent('.js_acc').find('> .header').removeClass('active');
							$obj.parent('.js_acc').find('> .view').removeClass('active');
							//console.log('3');
                        }
						$("#" + $target).addClass('active').trigger('showAcc');
						$obj.addClass('active');
					} else {
                        if($obj.parent().hasClass('holder')){
                            $obj.parent('.holder').parent('.js_acc').find('> .holder > .header').removeClass('active');
							$obj.parent('.holder').parent('.js_acc').find('> .view').removeClass('active');
							$obj.parent('.holder').removeClass('active');
							//console.log('4');
                        } else if($obj.parent().is('li') || $obj.parent().is('div')){
                            $obj.parents('.js_acc').find('.header').removeClass('active');
							$obj.parents('.js_acc').find('.view').removeClass('active');
							//console.log('5');
                        } else{
                            $obj.parent('.js_acc').find('> .header').removeClass('active');
							$obj.parent('.js_acc').find('> .view').removeClass('active');
							//console.log('6');
                        }
						$("#" + $target).removeClass('active').trigger('hideAcc');
						$obj.removeClass('active');
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.js_acc.multi .header', function(e) {
					var $obj = $(this);
					var $target = $obj.attr("href").split("#")[1];
					//console.log($target);

					if(!$obj.hasClass('active')){
						$("#" + $target).addClass('active').trigger('showOneAcc');
						$obj.parent('.holder').addClass('active');
						$obj.addClass('active');
					} else {
						$("#" + $target).removeClass('active').trigger('hideOneAcc');
						$obj.parent('.holder').removeClass('active');
						$obj.removeClass('active');
					}
					e.preventDefault();
				})
				.on('showAgreeAcc', '.agree.acc .view', function(e) {
					$(this).closest('.agree.acc').find('.view').slideUp(200);
					$(this).slideDown(200);
					e.preventDefault();
					e.stopPropagation();
				})
				.on('hideAgreeAcc', '.agree.acc .view', function(e) {
					$(this).closest('.agree.acc').find('.view').slideUp(200);
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.agree.acc .open', function(e) {
					var $obj = $(this);
					var $target = $obj.attr("href").split("#")[1];

					if(!$obj.hasClass('active')){
                        $obj.closest('.agree.acc').find('.open').removeClass('active');
                        $obj.closest('.agree.acc').find('.view').removeClass('active');
						$("#" + $target).addClass('active').trigger('showAgreeAcc');
						$obj.addClass('active');
					} else {
                        $obj.closest('.agree.acc').find('.open').removeClass('active');
                        $obj.closest('.agree.acc').find('.view').removeClass('active');
						$("#" + $target).removeClass('active').trigger('hideAgreeAcc');
						$obj.removeClass('active');
					}
					e.preventDefault();
				})
				// .on('click', 'a.btn_schedule',function(e){
				// 	var $obj = $(this);
				// 	var target= $obj.attr('href');
				// 	$(target).find('> .header').addClass('active');
				// 	$(target).find('> .view').addClass('active').slideDown(200);
				// 	e.preventDefault();
				// 	e.stopPropagation();
				// });
		}
		, /* 레이어 팝업 버튼 세팅 */   initLayerPopupOnce: function initLayerPopupOnce() {
			$(document)
				.on('click', 'a.js_btn_lypop', function(e) {
					var popID = $(this).attr('href');
                    if($(this).parent('.btn_wrap').hasClass('open')){
                        $(this).parent('.btn_wrap').addClass('ing');
					}
					//$('body').bind(Class.evTouchMove,function(e){e.preventDefault()}).css({'background-color':'pink'});
					setTimeout(function() {
						Class.setLayout();
					}, 300);
					Class.layerPopupOpen(popID);
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', 'input.js_btn_lypop, button.js_btn_lypop', function() {
					var chk = $(this).is(":checked");
					var popID = $(this).data('target');
					if(chk){
						//console.log('checked');
						Class.layerPopupOpen(popID);
					}
					//e.preventDefault();
					//e.stopPropagation();
				})
				.on('click', '.lypop_wrap .js_close, .lypop_header .js_close', function(e) {
					$(this).parents('.lypop_wrap').trigger('closePopup');
					e.preventDefault();
				})
				.on('closePopup', '.lypop_wrap', function(e) {
                    var $container = $('.container');
                    $container.attr("aria-hidden", false);
					$curLayerPop = $(this).removeClass('show');
					$curLayerPop.find('.lypop_container').removeAttr('tabindex');
					var target = '#'+$curLayerPop.attr("id");
                    //console.log(target)
					var $target = $('[href="'+ target +'"]');
                    if($target.parent('.btn_wrap').hasClass('ing')){
                        $target.parent('.btn_wrap').removeClass('ing');
                    }
					$target.focus();

					setTimeout(function() {
						$curLayerPop.hide().attr("aria-hidden", true);
					}, 300);
					if($('.lypop_wrap.show').length<1){
						$('html').removeClass('layer_open');
					}
					setTimeout(function() {
						if(!$('html').hasClass('layer_open'))
						$('.lypop_fade').remove();
					}, 300);

					//$('body').unbind(Class.evTouchMove).css({'background-color':'white'});

					e.stopPropagation();
				})
				//.on(Class.evTouchStart, '#wrap', function() {
					//$('.lypop_wrap.fade.show').find('.js_close').click();
				//});
		}
		, /* 레이어 팝업 열기 */    layerPopupOpen: function layerPopOpen(id) {
			var $wrap = $('#wrap');
            var $container = $('.container');
			var $popObj = $(id);
			var $maxPopH = Class.winHeight;

			//console.log($maxPopH);

			if($popObj.length>0){
				$popObj.show();
                $container.attr("aria-hidden", true);

                setTimeout(function() {
					$popObj.addClass('show').attr("aria-hidden", false);
				}, 300);

				if($popObj.hasClass('slide')){
					setTimeout(function() {
						$popObj.find('.lypop_container').attr('tabindex','0');
						$popObj.find('.lypop_header .searchform_com .input_keyword').focus();
					}, 1000);
				} else {
					setTimeout(function() {
						$popObj.find('.lypop_container').attr('tabindex','0').focus();
					}, 1000);
				}

				if($wrap.find('.lypop_fade').length<1) {
					$wrap.append('<div class="lypop_fade fade"></div>');
				}
				$('.lypop_fade').addClass('show');
				$('html').addClass('layer_open');



				if($popObj.find('.lypop_cont').outerHeight() > $maxPopH *.5){
					$popObj.find('.lypop_body').css({'overflowY' : 'scroll', height : $maxPopH *.5});
				}
				if($popObj.hasClass('full')){
					var $header = $popObj.find('.lypop_header').length > 0 ? $popObj.find('.lypop_header').outerHeight() : 0 ;
					var $footer = $popObj.find('.lypop_footer').length > 0 ? $popObj.find('.lypop_footer').outerHeight() : 0 ;
					if($popObj.is('#app_notice')){
						$popObj.find('.lypop_body').css({'overflowY' : 'scroll', height : $maxPopH - ($header + $footer + 40)});
					} else {
						$popObj.find('.lypop_body').css({'overflowY' : 'scroll', height : $maxPopH - ($header + $footer)});
					}

				} else if($popObj.hasClass('open_layer')){
					var $pageHeader = $popObj.parents('#wrap').find('.header_wrap').outerHeight();
					var $header = $popObj.find('.lypop_header').length > 0 ? $popObj.find('.lypop_header').outerHeight() : 0 ;
					var $footer = $popObj.parents('#wrap').find('.fixed_con .btn_wrap').outerHeight();
					$popObj.find('.lypop_body').css({'overflowY' : 'scroll', height : $maxPopH - ($pageHeader + $header + $footer)});
					//console.log($pageHeader, $header, $footer)
				}

			}
		}
		,/* tabsCtrl */ initTabsCtrlOnce: function initTabsCtrlOnce(){
			var $tabWrap = $('.js_tabs');
			var $scrollTabWrap = $('.js_tabs.scroll');
            var $tabFolding = $('.js_tabs.folding');
			var $tabIndex = 1000;
			for(var i=0; i<$tabWrap.length; i++) {
				//var $tabWraps = $($tabWrap[i]).data('order', $tabIndex++);
				//var $num = $($tabWrap[i]).find('.tabs>li').length;
				if($($tabWrap[i]).hasClass('scroll')){
					$($tabWrap[i]).find('>ul').wrap('<div class="scroll_wrap"></div>');
				}

                if($($tabWrap[i]).hasClass('folding') && $($tabWrap[i]).find('>ul>li').length > 4){
					var $clone = $($tabWrap[i]).find('.tabs').clone();
					$($tabWrap[i]).addClass('scroll').find('>ul').wrap('<div class="scroll_wrap"></div>')
					$($tabWrap[i]).find('.scroll_wrap').after('<a href="#" class="btn_show">열고닫기</a>');
					var $obj = $clone.addClass('btnType');

                    if($($tabWrap[i]).find('.panels').length>0){
                        $($tabWrap[i]).find('.panels').before($obj);
                    } else {
                        $($tabWrap[i]).append($obj);
                    }
				}
			}
			// 스크롤 tab 위치조정
			Class.winWidth = window.innerWidth;

			$scrollTabWrap.each(function() {
					var $obj = $(this);
					var $tabPos = $obj.find('.selected').position().left;

					$obj.find('.scroll_wrap').scrollLeft($tabPos - (Class.winWidth*0.55));
			});

			$(document)
            .on('click', '.js_tabs:not(.link) .tabs>li', function(e) {
                var $current = $(this);
                var index = $current.index();
				var $panels = $current.parent().siblings('.panels').length > 0 ? $current.parent().siblings('.panels') : $current.parents('.scroll_wrap').siblings('.panels');
                var $xOPos = 0;

                if($current.parents('.js_tabs').hasClass('folding')){
                    var $obj = $current.parent().hasClass('btnType') ? $current.parents('.folding').find('.scroll_wrap>.tabs') : $current.parents('.folding').find('.btnType');
                    var $objTarget = $obj.find('>li:eq(' + index + ')');
					$objTarget.addClass('selected').siblings().removeClass('selected');
                    for( i = 0 ; i < index ; i++ ) {
                        $xOPos += $current.parents('.folding').find('.scroll_wrap>.tabs li').eq(i).outerWidth();
                    }
                    $current.parents('.folding').find('.scroll_wrap').stop().animate({scrollLeft:$xOPos}, 1000);
				}

                $current.addClass('selected').find('>a').attr('title','현재 페이지');
                $current.siblings().removeClass('selected').find('>a').removeAttr('title');

                var $target = $panels.find('>.panel:eq(' + index + ')');
				$target.addClass('selected').siblings().removeClass('selected');

				if($current.parents('.js_tabs').hasClass('place_list')){
					$panels.animate({scrollTop:0}, 800);
					//console.log('place_list');
				}
                if($current.parents('.js_tabs').find('.panels .js_tabs').hasClass('place_list')){
                    setTimeout(function(){
                        Class.setLayout();
                    }, 500 );
				}

                e.stopPropagation();
                e.preventDefault();
			})
			.on('click', '.js_tabs .btn_show', function(e) {
				var $folding = $(this).parents('.js_tabs.folding');
				if(!$folding.hasClass('show')){
					$folding.addClass('show').next('.js_tabs.btnType').slideDown();
				} else{
					$folding.removeClass('show').next('.js_tabs.btnType').slideUp();
				}

                e.stopPropagation();
                e.preventDefault();
			});
		}
		,/* form 삭제버튼 */    initFormMotionOnce : function initFormMotionOnce(){
			var $body = $('body');
			if($('.deletable').length>0){
				$('.deletable').each(function(){
					$(this).append('<button type="button" class="btn_reset"><span>입력 텍스트 삭제</span></button>');
				});
			}

			$(document)
                .on('showAuto','.searchform_com',function(){
                    $('.searchform_com').find('.list_srchword_wrap').addClass('on');
                    //console.log('showAuto')
                })
                .on('hideAuto','.searchform_com',function(){
                    $('.searchform_com').find('.list_srchword_wrap').removeClass('on');
                })
	            .on('focus, focusin, click', '.deletable input:not([readonly])' , function(e){
	            	if(this.value.length>0){
	            		$(this).addClass('inputed').parent('.deletable').addClass('on');
                        $(this).parents('.searchform_com').trigger('showAuto');
	                } else{
	                	$(this).removeClass('inputed').parent('.deletable').removeClass('on');
                        $(this).parents('.searchform_com').trigger('hideAuto');
	                }

	            	$body.addClass('keypad');
	            })
	            .on('keypress, keyup', '.deletable input:not([readonly])' , function(e){
	            	if(this.value.length>0){
	            		$(this).addClass('inputed').parent('.deletable').addClass('on');
                        $(this).parents('.searchform_com').trigger('showAuto');
	                } else{
	                	$(this).removeClass('inputed').parent('.deletable').removeClass('on');
                        $(this).parents('.searchform_com').trigger('hideAuto');
	                }
	                $body.addClass('keypad');
	            })
	            // .on('blur, focusout', '.deletable input:not([readonly])' , function(e){
	            // 	$(this).parent('.deletable').removeClass('on');
                //     $(this).parents('.searchform_com').trigger('hideAuto');
	            // 	$body.removeClass('keypad');
	            // })
	            .on('click, mouseenter', '.deletable .btn_reset', function(e){
            		$(this).parent('.deletable').removeClass('on').find('input').focus().val('');
            		//$(this).parent('.deletable').find('.mdb-autocomplete-wrap').empty();
                    $(this).parents('.searchform_com').trigger('hideAuto');
	            	e.preventDefault();
	            });
		}
		, /* radio, checkbox target show */	initCheckboxRadioOnce: function initCheckboxRadioOnce(){
			$(document)
				.on('click', 'input:radio, input:checkbox', function() {
					var $input = $(this);
					var name = $input.attr('name');
					var id = $input.attr('id');
					var type = $input.attr('type');
					var $chk = $input.is(":checked");
					var target = $input.data('target');
					var $target = null;

					if(typeof target === 'undefined') {
						if(type=='radio') {
							$('input[name="'+name+'"]')
								.each(function() {
									var target=$(this).data('target');
									$target = $(target);
									$target.removeClass('on');
								});
						} else {
							$target= $input;
						}
					} else {
						if(type=='radio') {
							$('input[name="'+name+'"]')
								.each(function() {
									var target=$(this).data('target');
									$target = $(target);
									$target.removeClass('on');
								});
							$target = $(target);
							$target.addClass('on');
						} else {
							$target = $(target);
							if($input.is(':checked')) {
								$target.addClass('on');
							} else {
								$target.removeClass('on');
							}
						}
					}
                    //console.log('radio')
                    if(type=='radio' && $input.parents('.form_tab_group').hasClass('star')){
						$input.parents('.form_tab_group').addClass('on');
                        $input.parent('.form_holder').addClass('checked').siblings().removeClass('checked');
                        //console.log('star')
                    }
				})
                // .on('click', '.form_tab_group.baggage input[type=radio]', function(){
                //     var inp=$(this);
                //     if (inp.is(".active")) {
                //         inp.prop("checked",false).removeClass("active");
                //     } else {
                //         $("input:radio[name='"+inp.prop("name")+"'].active").removeClass("active");
                //         inp.addClass("active");
                //     }
                // })
                // .on('click', '.form_tab_group.baggage input[type=radio]', function(){
                //     if (this.previous) {
                //         this.checked = false;
                //     }
                //     this.previous = this.checked;
                // });
		}
		,/* chareter counter */ initCharacterCounterOnce : function initCharacterCounterOnce(){
			$(document)
				.on('keyup', '.form_textarea textarea' ,function(e){
					var $objval = $(this).val();
			        var $objLength = $objval.length;
			        var $conter = $(this).parents('.custom_item').find('.char_count_group');
			        if($objLength<=100){
						$conter.html('<span class="char_count">' + $objval.length + '</span> / 100');
			        } else {
			        	$(this).val($(this).val().substring(0,100));
			        }
			        //console.log('textare');
				}).keyup();
		}
		,/* search_text_wrap */ initRelateWordOnce : function initRelateWordOnce(){
			$(document)
				.on('click', '.search_text_wrap .related_search a' ,function(e){
					var $obj = $(this);
					if(!$obj.parent('.related_search').hasClass('on')){
						$obj.parent('.related_search').addClass('on');
					} else {
						$obj.parent('.related_search').removeClass('on');
					}
				})
                .on('click', '.list_srchword li a.btn_del.js_act' ,function(e){
                    var $obj = $(this);
        	        $obj.parents('li').remove();
				})
                .on('click', '.list_srchword_wrap .js_act_all' ,function(e){
                    var $obj = $(this);
        	        $obj.parents('.list_srchword_wrap').find('.list_srchword').empty();
				});
		}
        ,/* swiper */   initSwiperOnce : function initSwiperOnce(){
			if($('.swiper-container').length>0){
				var $swiperContainer = $('.swiper-container');
				$swiperContainer.each(function(){
					var $swiperContainer = $(this);
					if($swiperContainer.hasClass('spinner')){
						var swiper = new Swiper($swiperContainer, {
							direction: 'vertical',
							mousewheelControl: true,
							slidesPerView: 3,
							centeredSlides: true,
							observer:true,
      						observeParents : true,
							loop: true,
						});
                        //console.log('spinner swiper')
					} else if($swiperContainer.hasClass('fraction') && !$swiperContainer.hasClass('prevNext')){
                        var swiper = new Swiper($swiperContainer, {
                            slidesPerView: 1,
                            spaceBetween: 12,
                            observer:true,
                            observeParents : true,
                            loop: true,
                            pagination: {
                                el: '.swiper-pagination',
                                type: 'fraction',
                            },
                        });

                        //console.log('fraction swiper')
					} else if($swiperContainer.hasClass('fraction') && $swiperContainer.hasClass('prevNext')){
                        var swiper = new Swiper($swiperContainer, {
                            slidesPerView: 1,
                            spaceBetween: 12,
                            observer:true,
                            observeParents : true,
							loop: true,
							pagination: {
                                el: '.swiper-pagination',
                                type: 'fraction',
                            },
                            navigation: {
                                nextEl: '.next',
                                prevEl: '.prev',
                            },
                        });

                        //console.log('fraction prevNext swiper')
					} else if($swiperContainer.hasClass('cir')){
						var swiper = new Swiper($swiperContainer, {
							slidesPerView: '3',
							centeredSlides: true,
						    loop: true,
							pagination: {
								el: '.swiper-pagination',
								clickable: true,
							},
						});
                        //console.log('fraction swiper')
					} else if($swiperContainer.hasClass('bar')){
                        $swiperContainer.find('.total').html('<em>1</em>/'+ $swiperContainer.find('.swiper-slide').length);
                        var swiper = new Swiper($swiperContainer, {
							slidesPerView: 1,
							spaceBetween: 0,
							pagination: {
								el: '.swiper-pagination',
                                type: 'progressbar',
							},
							centeredSlides:true,
							on: {
                                slideChangeTransitionEnd: function(){
                                    //alert(this.activeIndex+1); //this.slides.length
                                    $swiperContainer.find('.total').html('<em>'+ (this.activeIndex+1) +'</em>/'+this.slides.length);
                                },
                            },
						});
                        //console.log('fraction bar swiper')
                    } else if($swiperContainer.hasClass('nospace')) {
						var swiper = new Swiper($swiperContainer, {
							slidesPerView: 1,
							spaceBetween: 10,
							loop: true,
							observer:true,
							observeParents : true,
							pagination: {
								el: '.swiper-pagination',
							},
						});
                        //console.log('default nospace swiper')
					 } else if($swiperContainer.hasClass('gallery-thumbs')) {
						var galleryThumbs = new Swiper($swiperContainer, {
							slidesPerView: 5,
							observer:true,
							observeParents:true,
							//slideToClickedSlide:true,

						});
                       // console.log('gallery swiper')
					} else if($swiperContainer.hasClass('nopaging')) {
						var swiper = new Swiper($swiperContainer, {
							slidesPerView: 1,
							spaceBetween: 12,
							observer:true,
      						observeParents : true,
      						//loop: true,
						});
                        //console.log('default nopaging swiper')
					} else if($swiperContainer.hasClass('vertical')) {
						var swiper = new Swiper($swiperContainer, {
							direction: 'vertical',
							loop: true,
							autoplay: {
							delay: 2500,
							// disableOnInteraction: false,
							},
						});
                        //console.log('vertical swiper')
					} else if($swiperContainer.hasClass('control')) {
						if($swiperContainer.hasClass('main')){
							var swiper = new Swiper($swiperContainer, {
								slidesPerView: 1,
								//spaceBetween: 12,
								observer:true,
								observeParents : true,
								loop: true,
								autoplay: {
									delay: 1700
								},
								pagination: {
									el: '.swiper-pagination',
									type: 'fraction',
								},
							});
							//console.log('main control')
							$swiperContainer.find('.cntrl a').on('click', function (e) {
								if(!$(this).hasClass('stop')){
									$(this).addClass('stop');
									swiper.autoplay.stop();
								} else{
									$(this).removeClass('stop');
									swiper.autoplay.start();
								}
								e.preventDefault();
							});
						} else {
							var swiper = new Swiper($swiperContainer, {
								slidesPerView: 1,
								spaceBetween: 10,
								observer:true,
								observeParents : true,
								loop: true,
								autoplay: {
									delay: 1700
								},
								pagination: {
									el: '.swiper-pagination',
									clickable:true
								}
							});
							$swiperContainer.find('.cntrl a').on('click', function (e) {
								if(!$(this).hasClass('stop')){
									$(this).addClass('stop');
									swiper.autoplay.stop();
								} else{
									$(this).removeClass('stop');
									swiper.autoplay.start();
								}
								e.preventDefault();
							});
							$swiperContainer.find('.apps').on('click',function(){
								if($('.cntrl a').hasClass('stop')){
									swiper.autoplay.stop();
								} else{
									swiper.autoplay.start();
								}
							})
						}


                        //console.log('default control swiper')
					} else {
						if($swiperContainer.hasClass('calendar_wrap')){
							var swiper = new Swiper($swiperContainer, {
								slidesPerView: 1,
								spaceBetween: 10,
								loop: true,
								observer:true,
								observeParents : true,
								navigation: {
									nextEl: '.next',
									prevEl: '.prev',
								},
							});
						} else{
							var swiper = new Swiper($swiperContainer, {
								slidesPerView: 1,
								spaceBetween: 10,
								loop: true,
								observer:true,
								observeParents : true,
								pagination: {
									el: '.swiper-pagination',
								},
							});
						}

                        //console.log('default swiper')
					}
				});
			}
		}
		, /* pkg 0200 */ initPkgOnce: function initPkgOnce(){

			if($('#sticky_tab').length>0){
				$('.js_sticky li').find('a').click(function(){
					var $obj = $(this);
					//var $txt = $obj.attr("href").split("#")[1];
					var idx = $($obj.attr('href'));
					idxT = idx.offset().top;
					$('html,body').stop().animate({scrollTop:idxT},500);
					Class.setLayout();
				});
			}

		}
		, /* 레이아웃 세팅 */   setLayout: function setLayout() {
			Class.winWidth = window.innerWidth;
			Class.winHeight = window.innerHeight;
			Class.headerWrapHeight = $(".header_wrap").outerHeight();
			Class.coBrandHeight = $('.co_brand').outerHeight();
			Class.ribbonHeight = $('.ribbon_popup').outerHeight();
			var $contents = $('.contents');
			//hntMobileUI.mobile.toast(navigator.userAgent);
			if($('.js_acc').length > 0){
				$('.js_acc').each(function(){
					$('.js_acc').find('.view.active').slideDown(200);
				});
			}
			if($('.ribbon_popup').length>0 && !$('.ribbon_popup').hasClass('off')){
				$('html').addClass('ribbon');
			}
            if($('.co_brand').length>0 && !$('.co_brand').hasClass('off')){
				$('html').addClass('coBrand');
			}
			if($('.header_wrap .gnb.default').length>0 && !$('.header_wrap .gnb.default').hasClass('off')){
				$('html').addClass('showGnb');
			}
            if($('.inpt_counter').length>0){
                $('.inpt_counter').each(function(){
                    $('.inpt_counter').text($(this).data('min'));
                });
            }
            if($('#header .searchform_com').length>0){
                $('#header .searchform_com .input_keyword').focus();
            }
            if($('.place_list').length>0){
				var $obj = $('.place_list');
                if(!$obj.parents('.panel')){
                    var placeH = $obj.find('.tabs').outerHeight();
                } else{
                    var placeH = $obj.parents('.panel.selected').find('.tabs').outerHeight();
                }

				var $lybody = Class.winHeight - ($('.lypop_header').outerHeight()*1.2);
				if($obj.parent('.lypop_body').hasClass('place_wrap')){
                    var $etcH = $obj.parents('.place_wrap').find('.text_wrap').length>0 ? $obj.parents('.place_wrap').find('.text_wrap').outerHeight() : 0;
					$obj.parents('.place_wrap').find('.place_list').css('height',$lybody - $etcH);
					$obj.parents('.place_wrap').find('.place_scroll, .tabs').css('height',$lybody - $etcH -1);
                    // console.log($etcH, $lybody);
				} else {
					$('.place_scroll').css('height',placeH);
                    // console.log(placeH);
				}

			}
			if($contents.find('>.cont_unit').hasClass('region') || $contents.find('>.cont_unit').hasClass('sub_top')){
			$('#header').addClass('black');
			}

			if($('#sticky_tab').length>0){
				var $styPos01 = Math.floor($('#sticky_01').offset().top);
				var $styPos02 = Math.floor($('#sticky_02').offset().top);
				var $styPos03 = Math.floor($('#sticky_03').offset().top);
				var $styPos04 = Math.floor($('#sticky_04').offset().top);

				var $scroll = $(window).scrollTop();
				var $stickyTab = $('#sticky_tab');
				var $stickyAdd = $('.sticky_add');
				//console.log('setLayout sticky tab ' + $scroll, $styPos01, $styPos02);
				if($scroll >= ($styPos04)){
					$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_04');
					$stickyTab.find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
					$stickyAdd.removeClass('fixed');
				} else if($scroll >= ($styPos03)){
					$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_03');
					$stickyTab.find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
					$stickyAdd.removeClass('fixed');
				} else if($scroll >= ($styPos02)){
					$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_02');
					$stickyTab.find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
					$stickyAdd.removeClass('fixed');
				} else if($scroll >= ($styPos01)){
					$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_01');
					$stickyTab.find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
					$stickyAdd.addClass('fixed');
				} else if($scroll >= 0){
					$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04');
					$stickyAdd.removeClass('fixed');
				}
			}

			//console.log('setLayout');
		}
		,/* scroll */ initWindowScroll: function initWindowScroll(){
            var $sticky = $('.js_sticky');
			//var $stickyAdd = $('.sticky_add');
			var $stickyOffset = $sticky.offset();

			$(window).on('scroll',function(e){
				var $docHeight = $(document).height();
				Class.winHeight = window.innerHeight;
				var scrollPercent;
				if ($(this).scrollTop() > 200) {
					$('#footer .js_act.btn_top').fadeIn();
				} else {
					$('#footer .js_act.btn_top').fadeOut();
				}
				scrollPercent = $(window).scrollTop() / ($docHeight - Class.winHeight) * 100;
				$('.progressbar').width(scrollPercent + '%');
				Class.didScroll = true;
				//console.log(Class.didScroll);

                if( $sticky.length>0 && $(document).scrollTop() > $stickyOffset.top){
					$sticky.addClass('fixed');
					//if( $stickyAdd.length) $stickyAdd.addClass('fixed');

                } else {
					$sticky.removeClass('fixed');
					//if( $stickyAdd.length) $stickyAdd.removeClass('fixed');
				}

				if($sticky.hasClass('select_date')){
					$('.select_date').click(function(e){
						$( 'html, body' ).stop().animate({scrollTop:0},400);
						//window.scrollTo(0, 0);
						$(this).removeClass('fixed');
						e.preventDefault();
					});
				}

				if($('#sticky_tab').length>0){
					var $styPos01 = Math.floor($('#sticky_01').offset().top);
					var $styPos02 = Math.floor($('#sticky_02').offset().top);
					var $styPos03 = Math.floor($('#sticky_03').offset().top);
					var $styPos04 = Math.floor($('#sticky_04').offset().top);

					var $scroll = $(window).scrollTop();
					var $stickyTab = $('#sticky_tab');
					var $stickyAdd = $('.sticky_add');
					//console.log('setLayout sticky tab ' + $scroll, $styPos01, $styPos02);
					if($scroll >= ($styPos04)){
						$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_04');
						$stickyTab.find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
						$stickyAdd.removeClass('fixed');
					} else if($scroll >= ($styPos03)){
						$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_03');
						$stickyTab.find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
						$stickyAdd.removeClass('fixed');
					} else if($scroll >= ($styPos02)){
						$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_02');
						$stickyTab.find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
						$stickyAdd.removeClass('fixed');
					} else if($scroll >= ($styPos01)){
						$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04').addClass('sticky_01');
						$stickyTab.find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
						$stickyAdd.addClass('fixed');
					} else if($scroll >= 0){
						$('body').removeClass('sticky_01 sticky_02 sticky_03 sticky_04');
						$stickyAdd.removeClass('fixed');
					}
				}
			});

			$('.lypop_body').on('scroll',function(e){
				//var $docHeight = $(document).height();
				Class.winHeight = window.innerHeight;
				if( $sticky.length>0 && $('.lypop_body').scrollTop() > $stickyOffset.top){
					$sticky.addClass('fixed');
					//if( $stickyAdd.length) $stickyAdd.addClass('fixed');

                } else {
					$sticky.removeClass('fixed');
					//if( $stickyAdd.length) $stickyAdd.removeClass('fixed');
				}
			});
		}
		, /* 스크린 크기 변경시 */			initResizeOnce: function initResizeOnce() {
			$(window)
				.on('resize', function() {
					Class.winWidth = window.innerWidth;
					Class.winHeight = window.innerHeight;

					/* 가로비율 */
					if(Class.winWidth>=768) {
						$('html').removeClass('small normal').addClass('mobile wide');
						Class.isWide = true;
					} else if(Class.winWidth<=320) {
						$('html').removeClass('wide normal').addClass('mobile small');
						Class.isWide = false;
					} else {
						$('html').removeClass('wide small').addClass('mobile normal');
						Class.isWide = false;
					}
					Class.setLayout();
				})
				.trigger('resize');
		}
		, /* hntMobileUI 초기화 */				init: function() {
			for(var func in Class) {
				if(Class.hasOwnProperty(func)) {
					if(func !== 'init' && func.indexOf('init')==0) {
						var $document = $(document);
						if(func.lastIndexOf('Once')+4 == func.length && !$document.data(func)) {
							$document.data(func, true);
							Class[func].call(this);
						} else if ( func.lastIndexOf('Once')+4 != func.length) {
							Class[func].call(this);
						}
					}
				}
			}
		}
	};
	if(typeof this['hntMobileUI'] !== 'undefined') {
		this['hntMobileUI']['mobile']=Class;
	} else {
		this['hntMobileUI'] = {mobile:Class};
	}
})();

$.fn.hntMobileUI = hntMobileUI.mobile.init;
$(function() {
	$(document).hntMobileUI();
});