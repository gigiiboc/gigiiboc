/*
 * hnt_ui : PC
 * <UPLEAT> UI Dev Team
 * {Oh Young Ju}, {An Se Jung}, {Lee Yun Hee}, Hwang Mi Ae, Kim So Young, Cho Han Sol, {Kang Young Sun}
 * commnet : pc com
 */

(function() {
    var Class = {
        winHeight: 0,
        winWidth: 0,
        popZIndex: 5000,
        /* 브라우저 체크 */	initBrowserOnce: function initBrowserOnce(a, z) {
            a = navigator.userAgent;
            var u = 'unknown',
                x = 'X',
                m = function(r, h) {
                    for (var i = 0; i < h.length; i = i + 1) {
                        r = r.replace(h[i][0], h[i][1]);
                    }
                    return r;
                },
                c = function(i, a, b, c) {
                    var r = {
                        name: m((a.exec(i) || [u, u])[1], b)
                    };
                    r[r.name] = true;
                    r.version = (c.exec(i) || [x, x, x, x])[3];
                    if (r.name.match(/safari/) && r.version > 400) {
                        r.version = '2.0';
                    }
                    if (r.name === 'presto') {
                        r.version = ($.browser.version > 9.27) ? 'futhark' : 'linear_b';
                    }
                    r.versionNumber = parseFloat(r.version) || 0;
                    r.versionX = (r.version !== x) ? (r.version + '').substr(0, 1) : x;
                    r.className = r.name + r.versionX;
                    return r;
                };
            a = (a.match(/Opera|Navigator|Minefield|KHTML|Chrome/) ? m(a, [
                [/(Firefox|MSIE|KHTML,\slike\sGecko|Konqueror)/, ''],
                ['Chrome Safari', 'Chrome'],
                ['KHTML', 'Konqueror'],
                ['Minefield', 'Firefox'],
                ['Navigator', 'Netscape']
            ]) : a).toLowerCase();
            $.browser = $.extend((!z) ? $.browser : {}, c(a, /(camino|chrome|firefox|netscape|konqueror|lynx|msie|opera|safari)/, [], /(camino|chrome|firefox|netscape|netscape6|opera|version|konqueror|lynx|msie|safari)(\/|\s)([a-z0-9\.\+]*?)(;|dev|rel|\s|$)/));
            $.layout = c(a, /(gecko|konqueror|msie|opera|webkit)/, [
                ['konqueror', 'khtml'],
                ['msie', 'trident'],
                ['opera', 'presto']
            ], /(applewebkit|rv|konqueror|msie)(:|\/|\s)([a-z0-9\.]*?)(;|\)|\s)/);
            $.os = {
                name: (/(win|mac|linux|sunos|solaris|iphone)/.exec(navigator.platform.toLowerCase()) || [u])[0].replace('sunos', 'solaris')
            };
            if (!z) {
                $('html').addClass([$.os.name, $.browser.name, $.browser.className, $.layout.name, $.layout.className].join(' '));
            }
		}
		, /* placeholder 세팅 */	initPlaceholder: function initPlaceholder() {
			//$(this).find('input[placeholder], textarea[placeholder]').placeholder();
			//$('input, textarea').placeholder();
			$(this).find('input[placeholder], textarea[placeholder]').placeholder();
		}
		,
        /* body에 브라우저 CSS 추가 */	initBodyCssOnce: function initBodyCssOnce() {
                var agent = navigator.userAgent.toLowerCase();
                if ((navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1)) {
                    $('body').addClass('msie ie11');

				} else if((navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1)){
					$('body').addClass('msie ie11').removeClass('ie11');
				}

				if (/Edge\/\d./i.test(navigator.userAgent)){
					$('body').addClass('msEdge');
				}

                // if ($.browser.name == 'msie') {
                //     $('body').addClass($.browser.name);
                //     // var str = "msie";
                //     // var console = window.console || {log:function(){}};
                //     // console.log(str);
                // } else {
                //     $('body').addClass($.browser.name);
                // }

		}
        ,
        /* initGnbMotionOnce */	initGnbMotionOnce: function initGnbMotionOnce() {
            $(document)
            .on('mouseenter', '.local_menu_wrap .rolling_wrap', function(e) {
                $(this).addClass('on').next('.rolling_wrap_all').addClass('on');
                e.preventDefault();
            })
            .on('mouseleave', '.local_menu_wrap .rolling_wrap_all.on', function(e) {
                $(this).removeClass('on').prev('.rolling_wrap').removeClass('on');
                e.preventDefault();
			})
            .on('blur', '.local_menu_wrap .rolling_wrap_all a', function(e){
				var $obj = $('.local_menu_wrap .rolling_wrap_all a');
				setTimeout(function() {
					if ($(':focus', $obj).length < 1) {
						$obj.parent('.local_menu_wrap .rolling_wrap_all.on').trigger('mouseleave')
					}
				}, 200);
			})
			.on('mouseenter', '.private_menu>ul>li:first>a', function(e) {
				$(this).addClass('on').next('.my_menu_wrap').addClass('on');
			})
			.on('mouseleave', '.private_menu>ul>li:first', function(e) {
				$(this).find('>a').removeClass('on').next('.my_menu_wrap').removeClass('on');
			})
			.on('blur', '.private_menu>ul>li:first a', function(e){
				var $obj = $('.private_menu>ul>li:first a');
				setTimeout(function() {
					if ($(':focus', $obj).length < 1) {
						$obj.parents('.private_menu').find('>ul>li:first').trigger('mouseleave')
					}
				}, 200);
			})
            .on('click', '.list_special .js_act.more', function(e) {
				if(!$(this).parents('.list_special').next('.list_special_more').hasClass('on')){
					$(this).parents('.list_special').next('.list_special_more').addClass('on');
				} else {
					$(this).parent('.list_special').next('.list_special_more').removeClass('on');
				}
			})
            .on('click', '.list_special_more .js_act.cls', function(e) {
				if(!$(this).parents('.list_special_more').hasClass('on')){
					$(this).parents('.list_special_more').addClass('on');
				} else {
					$(this).parent('.list_special_more').removeClass('on');
				}
			})
            .on('click', '.gnb_menu_wrap .js_act.btn_menu_all', function(e) {
				if(!$(this).hasClass('on')){
					$(this).addClass('on').next('.list_total_menu').addClass('on');
					if($('.list_special_more').hasClass('on'))$('.list_special_more').removeClass('on');
				} else{
					$(this).removeClass('on').next('.list_total_menu').removeClass('on');
				}
				e.preventDefault();
			})
			.on('click', '.list_total_menu.on .js_act.btn_cls', function(e) {
				$(this).parents('.list_total_menu').removeClass('on').prev('.btn_menu_all').removeClass('on');
				e.preventDefault();
			})
			.on('click','.gnb_menu_wrap .list_total_menu .ly_wrap a',function(e){
				$(this).parents('.list_total_menu').removeClass('on').prev('.btn_menu_all').removeClass('on');
			});
        }
        ,
        /* gnb menu */	initGnbMenuOnce: function initGnbMenuOnce() {
			Class.winWidth = $(window).outerWidth();
            $(document)
			.on('mouseenter', '.list_gnb_menu>li', function(e){
				var $left = parseInt((Class.winWidth-1200)/2);
				$(this).parent('.list_gnb_menu').find('li').removeClass('on');
				$(this).addClass('on');

				if(Class.winWidth<=1200){
					$(this).find('.list_depth2_wrap').css({left:-138, right:-($left+362), paddingLeft:138});
				} else{
					$(this).find('.list_depth2_wrap').css({left:-($left+138), right:-($left+362), paddingLeft:($left+138)});
				}

                if($(this).find('ul').length>0){
					$('html').addClass('menu_2dep');
                } else{
                    $('html').removeClass('menu_2dep');
                }
			})
			.on('blur', '.list_gnb_menu>li>a', function(e){
				var $obj = $('.list_gnb_menu>li>a');
				setTimeout(function() {
					if ($(':focus', $obj).length < 1) {
						$obj.parents('.list_gnb_menu').trigger('mouseleave')
					}
				}, 0)
			})
            .on('mouseleave','.list_gnb_menu', function(e){
				$('.list_gnb_menu').find('li').removeClass('on');
				$('html').removeClass('menu_2dep');
			})
            .on('mouseenter', '.list_depth2>li', function(e){
				$(this).parent('.list_depth2').find('li').removeClass('on');
				if(Class.winWidth<=1200){
					$(this).addClass('on');
				} else{
					var $left = parseInt((Class.winWidth-1200)/2);
					$(this).addClass('on'); //.find('.list_depth3_wrap').css({left:-$left, right:-$left});
				}
				$('html').addClass('menu_3dep');
			})
			.on('blur', '.list_depth2>li>a', function(e){
				var $obj = $('.list_depth2>li>a');
				setTimeout(function() {
					if ($(':focus', $obj).length < 1) {
						$obj.parents('.list_depth2').trigger('mouseleave')
					}
				},0)
			})
            .on('mouseleave', '.list_depth2', function(e){
				$('html').removeClass('menu_3dep');
			})
			.on('mouseenter', '.zeus .gnb_menu_wrap>ul>li', function(e){
				if(Class.winWidth<=1200){
					$(this).addClass('on').siblings().removeClass('on');
				} else{
					var $left = parseInt((Class.winWidth-1200)/2);
					$(this).addClass('on').siblings().removeClass('on');
					$(this).find('.list_depth_wrap').css({left:-($left+454), right:-$left});
				}

                if($(this).find('ul').length>0){
                    $('html').addClass('zeus_menu_2dep');
                } else{
                    $('html').removeClass('zeus_menu_2dep');
                }
			})
			.on('blur', '.zeus .gnb_menu_wrap>ul a', function(e){
				var $obj = $('.zeus .gnb_menu_wrap>ul a');
				setTimeout(function() {
					if ($(':focus', $obj).length < 1) {
						$obj.parents('.gnb_menu_wrap').find('>ul').trigger('mouseleave')
					}
				},0)
			})
            .on('mouseleave','.zeus .gnb_menu_wrap>ul', function(e){
				$('.zeus .gnb_menu_wrap>ul').find('li').removeClass('on');
				$('html').removeClass('zeus_menu_2dep');
			});

			if($('#wrapper').hasClass('zeus') && $('#wrapper').find('.contents .submain').length > 0){
				$(document)
				.on('mouseenter', '.zeus .gnb_wrap', function(e){
					$(this).addClass('on');
				})
				.on('blur', '.zeus .gnb_wrap', function(e){
					$(this).removeClass('on');
				})
				.on('mouseleave','.zeus .gnb_wrap', function(e){
					$(this).removeClass('on');
				});
			}
		}
		,
		/* lnb menu */	initLnbMenuOnce: function initLnbMenuOnce() {
			Class.winWidth = $(window).width();
			var $listLnb = $('.lnb .list_lnb');
            $(document)
            .on('click', '.lnb .list_lnb li a', function(e){
				var $obj = $(this);

				$listLnb.find('li').removeClass('on');
				//$listLnb.find('ul').slideUp();
				if(!$obj.parent('li').hasClass('on')){
					if(!$obj.closest('ul').hasClass('list_lnb')){
						$obj.parents('li').addClass('on');
						$obj.parent('li').addClass('on').siblings('li').removeClass('on');
					} else {
						$obj.parent('li').addClass('on').siblings('li').removeClass('on');
						$obj.parent('li').siblings('li').find('ul').slideUp();
						$obj.siblings('ul').slideDown();
					}
				}
				e.preventDefault();
			});
		}
		,
		/* initStepOnce */ initStepOnce : function infiStepOnce(){
			var $stepWrap = $('.js_step_wrap');
			for(var i=0; i<$stepWrap.length; i++) {
				var $num = $($stepWrap[i]).find('.step>li').length;
				$($stepWrap[i]).find('>.step>li').css({'width' : 100/$num +'%'});
			}
		}
		,
		/* filter, sort */ initSortOnce : function initSortOnce(){
			$(document)
			.on('click', '.list_sort.js_act>a, .list_sort.js_act>li', function(e) {
				var $obj = $(this);
				if(!$obj.hasClass('on')){
					$obj.addClass('on').siblings().removeClass('on');
				}
				e.preventDefault();
			})
			.on('click', '.search_field_wrap .btn_cls', function(e){
				var $obj = $(this);
				if(!$obj.closest('.search_field_wrap').hasClass('on')){
					$obj.find('span').text("필터 닫기");
					$obj.closest('.search_field_wrap').addClass('on').find('.filter_option').slideDown();
				} else {
					$obj.find('span').text("필터 열기");
					$obj.closest('.search_field_wrap').removeClass('on').find('.filter_option').slideUp();
				}
				e.preventDefault();
			})
		}
		,
		/* tabsCtrl */	initTabsCtrlOnce: function initTabsCtrlOnce(){
            var $tabWrap = $('.js_tabs');
			//var $scrollTabWrap = $('.js_tabs.scroll');
            //var $tabFolding = $('.js_tabs.folding');
			var $tabIndex = 1000;
			for(var i=0; i<$tabWrap.length; i++) {
				var $tabWraps = $($tabWrap[i]).data('order', $tabIndex++);

				if($($tabWrap[i]).hasClass('scroll')){
					var $num = $($tabWrap[i]).find('.tabs>li').length;
					$($tabWrap[i]).children('ul, a').wrapAll('<div class="scroll_wrap"></div>');
				} else {
					$num = $($tabWrap[i]).find('>.tabs>li').length;
				}
                if(!$($tabWrap[i]).hasClass('swiper-container') && !$($tabWrap[i]).hasClass('no_division') && !$($tabWrap[i]).hasClass('place_list')){
					//$($tabWrap[i]).find('>ul').wrap('<div class="scroll_wrap"></div>');
					//$($tabWrap[i]).append('<a class="prev"></a><a class="next"></a>')
					if($num == 1){
						$($tabWrap[i]).addClass('alone');
					} else if ($num>1){
						$($tabWrap[i]).find('>.tabs>li').css({'width' : 100/$num +'%'});
						if($($tabWrap[i]).hasClass('scroll'))$($tabWrap[i]).find('.tabs>li').css({'width' : 100/$num +'%'});
					}

				}
			}

			$(document)
			.on('click', '.js_tabs:not(.link) .tabs li', function(e) {
				var $current = $(this);
				var index = $current.index();
				var $panels = $current.parent().siblings('.panels').length > 0 ? $current.parent().siblings('.panels') : $current.parents('.scroll_wrap').siblings('.panels');
				var $popObj = $current.parents('.lypop_wrap');

				var $target = $panels.find('>.panel:eq(' + index + ')');
				if(!$current.hasClass('disabled')){
					$current.addClass('selected').find('>a').attr('title','현재 페이지');
					$current.siblings().removeClass('selected').find('>a').removeAttr('title');
					$target.addClass('selected').siblings().removeClass('selected');

					if($popObj.length>0) {
						setTimeout(function() {
                            Class.repositionPopup.call($popObj);
                        }, 250);
					}

					if($current.closest('.js_tabs').hasClass('js_sticky') && $current.closest('.js_tabs').hasClass('fixed')){
						$( 'html, body' ).stop().animate({scrollTop:$target.offset().top},400);
					}

					if($current.closest('.js_tabs').find('.swiper-container').length>0 && !$('body').hasClass('ie11')){
						Class.setSwiper();
						//console.log('setSwiper');
					}

					if($current.closest('.js_tabs').hasClass('type2') && $current.closest('.cont_unit').hasClass('schedule')){
						//console.log('여기' , index);
						$current.closest('.cont_unit.schedule').find('>.js_acc >.inr').find('.header').removeClass('active');
						$current.closest('.cont_unit.schedule').find('>.js_acc >.inr').find('.view').slideUp(200);
						$current.closest('.cont_unit.schedule').find('>.js_acc >.inr:eq(' + index + ')').find('.header').addClass('active');
						$current.closest('.cont_unit.schedule').find('>.js_acc >.inr:eq(' + index + ')').find('.view').slideDown(200);
					}

					e.stopPropagation();
					e.preventDefault();
				}
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
				});
		}
        , /* showHide */	initShowHideOnce: function initShowHideOnce() {
			$(document)
			.on('click', '.js_show', function(e) {
				var $obj = $(this);
				var $objTagName = $obj.prop('tagName');
				if($objTagName == 'A'){
					var target= $obj.attr('href');
				} else {
					var target= $obj.data('target');
				}
				var $target = null;
				//$obj.addClass('on');
				if(typeof target === 'undefined') {
					$target= $obj;
				} else {
					$target = $(target);
					$target.addClass('on').focus();
				}
				e.preventDefault();
			})
            .on('click', '.js_cls', function(e) {
				$(this).parents('.js_show_wrap').removeClass('on');
				e.preventDefault();
			})
			// .on('mouseleave', '.js_show_wrap.on', function(e) {
            //     $(this).removeClass('on');
            //     e.preventDefault();
            // })
            // .on('blur', '.js_show_wrap.on a', function(e){
			// 	var $obj = $('.js_show_wrap.on a');
			// 	setTimeout(function() {
			// 		if ($(':focus', $obj).length < 1) {
			// 			$obj.closest('.js_show_wrap.on').trigger('mouseleave')
			// 		}
			// 	}, 200)
			// })
			.on('mouseup',function(e) {
				var container = $('.js_show_wrap.lypop_calendar, .js_show_wrap.lypop_selectPerson');
				if (!container.is(e.target) && container.has(e.target).length === 0){
						//console.log(e.target.className);
						$('.js_show_wrap.lypop_calendar.on, .js_show_wrap.lypop_selectPerson.on').removeClass('on');
					}
			});
		}
        , /* on 토글 */	initToggleOnce: function initToggleOnce() {
			$(document)
			.on('click', 'a.js_toggle', function(e) {
				var $anchor = $(this);
				var target= $anchor.attr('href');
				var $target = null;
				if(typeof target === 'undefined') {
					$target= $anchor;
				} else {
					$target = $(target);
                    if(!$anchor.hasClass('on')){
                        $anchor.addClass('on');
                        $target.addClass('on');
                    } else {
                        $anchor.removeClass('on');
                        $target.removeClass('on');
                    }

				}
				e.preventDefault();
			})
			.on('click','.flight_price .price_tit .btn_open',function(e){
				$(this).parents('.flight_price').toggleClass('open');
			})

            .on('click','.star_rating a',function(){
                $(this).parent().children("a").removeClass("on");
                $(this).addClass("on").prevAll("a").addClass("on");
                e.preventDefault();
			})
			.on('click', '.js_tbl_show', function(e) {
				var $anchor = $(this);
				var $target= $($anchor.attr('href'));

				if(!$anchor.hasClass('on')){
					$anchor.closest('.tbl').find('.show_area').removeClass('on');
					$anchor.closest('.tbl').find('.js_tbl_show').removeClass('on');
					$anchor.addClass('on');
					$target.addClass('on');
				} else {
					$anchor.removeClass('on');
					$target.removeClass('on');
				}
				e.preventDefault();
			});;
		}
		,/* swiper */   setSwiper : function setSwiper(){
			//console.log('setSwiper start!');

			if($('.swiper-container').length>0){
				var $swiperContainer = $('.swiper-container');

				if(!$('body').hasClass('ie9')){
					$swiperContainer.each(function(){
						//console.log('not ie9 swiper');
						var $swiperContainer = $(this);
						if($swiperContainer.hasClass('notice_list') || $swiperContainer.hasClass('rolling_wrap') || $swiperContainer.hasClass('vertical')){
							var swiper = new Swiper($swiperContainer, {
								direction: 'vertical',
								slidesPerView: 1,
								loop: true,
								autoplay: {
									delay: 2500,
									disableOnInteraction: false,
								},
							});
						} else if($swiperContainer.hasClass('award_list') || $swiperContainer.hasClass('js_tabs type2')) {
							if($swiperContainer.hasClass('js_tabs type2') && $swiperContainer.find('.swiper-slide').length > 10){
								$swiperContainer.addClass('overflow');
								var swiper = new Swiper($swiperContainer, {
									slidesPerView: 11,
									loop: true,
									observer:true,
									observeParents : true,
									navigation: {
										nextEl: '.next',
										prevEl: '.prev',
									},
								});
							} else if(!$swiperContainer.hasClass('js_tabs type2') && !$swiperContainer.find('.swiper-slide').length < 10) {
								var swiper = new Swiper($swiperContainer, {
									slidesPerView: 4,
									slidesPerGroup: 4,
									loop: true,
									observer:true,
									observeParents : true,
									navigation: {
										nextEl: '.btn_next',
										prevEl: '.btn_prev',
									},
								});
							}
						} else {
							if($swiperContainer.hasClass('page') && $swiperContainer.hasClass('prevNext') && $swiperContainer.hasClass('pager')){
								if($swiperContainer.hasClass('control')){
									$swiperContainer.find('.total').html('<em>1</em> / '+ $swiperContainer.find('.swiper-slide').length);

									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 0,
										//loop: true,
										autoplay: {
												delay: 1700
											},
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
											// renderBullet: function (index, className) {
											//     return '<span class="' + className + '">' + (index + 1) + '</span>';
											// },
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
										centeredSlides:true,
										on: {
											slideChangeTransitionEnd: function(){
												//alert(this.activeIndex+1); //this.slides.length
												$swiperContainer.find('.total').html('<em>'+ (this.activeIndex+1) +'</em> / '+this.slides.length);
											},
										},
									});
									$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
										if(!$(this).hasClass('stop')){
											$(this).addClass('stop');
											swiper.autoplay.stop();
										} else{
											$(this).removeClass('stop');
											swiper.autoplay.start();
										}
										e.preventDefault();
									});
								}
							} else if($swiperContainer.hasClass('page') && $swiperContainer.hasClass('prevNext')){ //page : dot 이미지
								if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else {
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								}
							} else if($swiperContainer.hasClass('prevNext') && $swiperContainer.hasClass('pager')){ //pager : fraction
									//$swiperContainer.find('.total').html('<em>1</em> / '+ $swiperContainer.find('.swiper-slide').length);
									if($swiperContainer.hasClass('col3') && $swiperContainer.hasClass('control')){
										var swiper = new Swiper($swiperContainer, {
											slidesPerView: 3,
											spaceBetween: 0,
											observer:true,
											observeParents : true,
											autoplay: {
												delay: 1700
											},
											pagination: {
												el: '.total',
												type: 'fraction',
											},
											navigation: {
												nextEl: '.next',
												prevEl: '.prev',
											},
											//centeredSlides:true,
										});
										$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
											if(!$(this).hasClass('stop')){
												$(this).addClass('stop');
												swiper.autoplay.stop();
											} else{
												$(this).removeClass('stop');
												swiper.autoplay.start();
											}
											e.preventDefault();
										});
										//console.log('swiper pager : fraction prevNext control');
									} else if($swiperContainer.hasClass('control')){
										if($swiperContainer.hasClass('main')){
											var swiper = new Swiper($swiperContainer, {
												slidesPerView: 1,
												spaceBetween: 0,
												slidesPerView: 'auto',
												//loop: true,
												observer:true,
												observeParents : true,
												autoplay: {
													delay: 1700
												},
												pagination: {
													el: '.total',
													type: 'fraction',
												},
												navigation: {
													nextEl: '.next',
													prevEl: '.prev',
												},
												initialSlide: 0,
												centeredSlides:true,
												on: {
													slideChangeTransitionStart : function(swiper) {
														$('.bgItem').fadeOut().removeClass('on');
														$('.bgItem').eq(this.activeIndex).addClass('on').fadeIn(300);
														//console.log('동작');
													}
												},

											});
											$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
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
												spaceBetween: 0,
												loop: true,
												observer:true,
												observeParents : true,
												autoplay: {
													delay: 1700
												},
												pagination: {
													el: '.total',
													type: 'fraction',
												},
												navigation: {
													nextEl: '.next',
													prevEl: '.prev',
												},
												centeredSlides:true,
											});
											$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
												if(!$(this).hasClass('stop')){
													$(this).addClass('stop');
													swiper.autoplay.stop();
												} else{
													$(this).removeClass('stop');
													swiper.autoplay.start();
												}
												e.preventDefault();
											});
										}

									} else {
										var swiper = new Swiper($swiperContainer, {
											slidesPerView: 1,
											spaceBetween: 0,
											loop: true,
											observer:true,
											observeParents : true,
											pagination: {
												el: '.total',
												type: 'fraction',
											},
											navigation: {
												nextEl: '.next',
												prevEl: '.prev',
											},
											centeredSlides:true,
										});
									}
							} else if($swiperContainer.hasClass('page')) {
								if($swiperContainer.hasClass('col5')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 5,
										spaceBetween: 25,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col4')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 4,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col2')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 2,
										spaceBetween: 25,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else {
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								}
							} else if($swiperContainer.hasClass('prevNext')) {
								if($swiperContainer.hasClass('col5')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 5,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else if($swiperContainer.hasClass('col4')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 4,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else if($swiperContainer.hasClass('col2')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 2,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else {
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
									if($swiperContainer.parents().hasClass('js_tabs') && !$('body').hasClass('ie11')){
										$swiperContainer.closest('.js_tabs').find($swiperContainer)
										setTimeout(function () {
											$swiperContainer.closest('.js_tabs').find(swiper).init();
											//console.log('init');
										}, 2000);
									}
									//console.log('prevNext only 1');
								}
							}
						}
					});
				} else {
					$swiperContainer.each(function(){
						//console.log('ie9 swiper');
						var $swiperContainer = $(this);
						if($swiperContainer.hasClass('notice_list') || $swiperContainer.hasClass('rolling_wrap') || $swiperContainer.hasClass('vertical')){
							var swiper = new Swiper($swiperContainer, {
								mode: 'vertical',
								autoplay: 2000,
								slidesPerView: 1,
								loop: true,
							});
						} else if($swiperContainer.hasClass('award_list') || $swiperContainer.hasClass('js_tabs type2')) {
							if($swiperContainer.hasClass('js_tabs type2') && $swiperContainer.find('.swiper-slide').length > 10){
								$swiperContainer.addClass('overflow');
								var swiper = new Swiper($swiperContainer, {
									slidesPerView: 11,
									loop: true,
									observer:true,
									observeParents : true,
									navigation: {
										nextEl: '.next',
										prevEl: '.prev',
									},
								});
							} else if(!$swiperContainer.hasClass('js_tabs type2') && !$swiperContainer.find('.swiper-slide').length < 10) {
								var swiper = new Swiper($swiperContainer, {
									slidesPerView: 4,
									slidesPerGroup: 4,
									loop: true,
									observer:true,
									observeParents : true,
									navigation: {
										nextEl: '.btn_next',
										prevEl: '.btn_prev',
									},
								});
							}
						} else {
							if($swiperContainer.hasClass('page') && $swiperContainer.hasClass('prevNext') && $swiperContainer.hasClass('pager')){
								if($swiperContainer.hasClass('control')){
									$swiperContainer.find('.total').html('<em>1</em> / '+ $swiperContainer.find('.swiper-slide').length);

									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 0,
										//loop: true,
										autoplay: {
												delay: 1700
											},
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
											// renderBullet: function (index, className) {
											//     return '<span class="' + className + '">' + (index + 1) + '</span>';
											// },
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
										centeredSlides:true,
										on: {
											slideChangeTransitionEnd: function(){
												//alert(this.activeIndex+1); //this.slides.length
												$swiperContainer.find('.total').html('<em>'+ (this.activeIndex+1) +'</em> / '+this.slides.length);
											},
										},
									});
									$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
										if(!$(this).hasClass('stop')){
											$(this).addClass('stop');
											swiper.autoplay.stop();
										} else{
											$(this).removeClass('stop');
											swiper.autoplay.start();
										}
										e.preventDefault();
									});
								}
							} else if($swiperContainer.hasClass('page') && $swiperContainer.hasClass('prevNext')){ //page : dot 이미지
								if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else {
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								}
							} else if($swiperContainer.hasClass('prevNext') && $swiperContainer.hasClass('pager')){ //pager : fraction
									//$swiperContainer.find('.total').html('<em>1</em> / '+ $swiperContainer.find('.swiper-slide').length);
									if($swiperContainer.hasClass('col3') && $swiperContainer.hasClass('control')){
										var swiper = new Swiper($swiperContainer, {
											slidesPerView: 3,
											spaceBetween: 0,
											loop: true,
											observer:true,
											observeParents : true,
											loop: true,
											autoplay: {
												delay: 1700
											},
											pagination: {
												el: '.total',
												type: 'fraction',
											},
											navigation: {
												nextEl: '.next',
												prevEl: '.prev',
											},
											centeredSlides:true,
										});
										$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
											if(!$(this).hasClass('stop')){
												$(this).addClass('stop');
												swiper.autoplay.stop();
											} else{
												$(this).removeClass('stop');
												swiper.autoplay.start();
											}
											e.preventDefault();
										});
										//console.log('swiper pager : fraction prevNext control');
									} else if($swiperContainer.hasClass('control')){
										if($swiperContainer.hasClass('main')){
											var swiper = new Swiper($swiperContainer, {
												slidesPerView: 1,
												spaceBetween: 0,
												slidesPerView: 'auto',
												//loop: true,
												observer:true,
												observeParents : true,
												autoplay: {
													delay: 1700
												},
												pagination: {
													el: '.total',
													type: 'fraction',
												},
												navigation: {
													nextEl: '.next',
													prevEl: '.prev',
												},
												initialSlide: 0,
												centeredSlides:true,
												on: {
													slideChangeTransitionStart : function(swiper) {
														$('.bgItem').fadeOut().removeClass('on');
														$('.bgItem').eq(this.activeIndex).addClass('on').fadeIn(300);
														//console.log('동작');
													}
												},

											});
											$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
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
												spaceBetween: 0,
												loop: true,
												observer:true,
												observeParents : true,
												autoplay: {
													delay: 1700
												},
												pagination: {
													el: '.total',
													type: 'fraction',
												},
												navigation: {
													nextEl: '.next',
													prevEl: '.prev',
												},
												centeredSlides:true,
											});
											$swiperContainer.find('.control .btn_cntrl').on('click', function (e) {
												if(!$(this).hasClass('stop')){
													$(this).addClass('stop');
													swiper.autoplay.stop();
												} else{
													$(this).removeClass('stop');
													swiper.autoplay.start();
												}
												e.preventDefault();
											});
										}

									} else {
										var swiper = new Swiper($swiperContainer, {
											slidesPerView: 1,
											spaceBetween: 0,
											loop: true,
											observer:true,
											observeParents : true,
											pagination: {
												el: '.total',
												type: 'fraction',
											},
											navigation: {
												nextEl: '.next',
												prevEl: '.prev',
											},
											centeredSlides:true,
										});
									}
							} else if($swiperContainer.hasClass('page')) {
								if($swiperContainer.hasClass('col5')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 5,
										spaceBetween: 25,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col4')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 4,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 25,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else if($swiperContainer.hasClass('col2')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 2,
										spaceBetween: 25,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								} else {
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 1,
										spaceBetween: 10,
										loop: true,
										observer:true,
										observeParents : true,
										pagination: {
											el: '.swiper-pagination',
											clickable: true,
										},
									});
								}
							} else if($swiperContainer.hasClass('prevNext')) {
								if($swiperContainer.hasClass('col4')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 4,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else if($swiperContainer.hasClass('col3')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 3,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else if($swiperContainer.hasClass('col2')){
									var swiper = new Swiper($swiperContainer, {
										slidesPerView: 2,
										spaceBetween: 24,
										loop: true,
										observer:true,
										observeParents : true,
										//centeredSlides:true,
										navigation: {
											nextEl: '.next',
											prevEl: '.prev',
										},
									});
								} else {
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
								}
							}
						}

						$swiperContainer.find('.prev').on('click', function(e){
							e.preventDefault();
							swiper.swipePrev();
						})
						$swiperContainer.find('.next').on('click', function(e){
							e.preventDefault();
							swiper.swipeNext();
						})
					});
				}
			}
        }
		,
		/* select_box */	initSelectBoxOnce: function initSelectBoxOnce() {
			// $(document)
			// 	.on('click','.select_item select',function(){
			// 		$(this).parent('.select_item').addClass('on');
			// 	})
			// 	.on('blur','.select_item select',function(){
			// 		$(this).parent('.select_item').removeClass('on');
			// 	})
			// 	.on('change','.select_item select',function(){
			// 		var $select_name = $(this).children('option:selected').text();
			// 		$(this).siblings('label').text($select_name);
			// 	});
			var $select = $('select');
			$select.each(function(){
				var $obj = $(this);
				if(!$obj.parent().hasClass('iconType')){
					$obj.sb({ddCtx: function() {return $(this).closest(".select_item");}});
				} else {
					$obj.sb( {ddCtx: function() {return $(this).closest(".select_item"); }, optionFormat: function() {return $(this).attr("alt");}});
				}
			});


		}
        ,/* accordion */    initAccordionOnce: function initAccordionOnce(){
			$(document)
				.on('showAcc', '.js_acc .view', function(e) {
					$(this).closest('.js_acc').find('.view').slideUp(200);
					$(this).slideDown(200);

                    if($(this).closest('.js_acc').hasClass('add_member')){
                        var $styRight = $('.cont_unit.js_sticky');
					    var $styRightH = $styRight.outerHeight();
                        setTimeout(function() {
                            Class.setLayout();
                        }, 250);
					}
					var $popObj = $(this).parents('.lypop_wrap');
					if($popObj.length>0) {
						setTimeout(function() {
							Class.repositionPopup.call($popObj);
                        }, 250);
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('hideAcc', '.js_acc .view', function(e) {
					$(this).closest('.js_acc').find('.view').slideUp(200);
                    if($(this).closest('.js_acc').hasClass('add_member')){
                        var $styRight = $('.cont_unit.js_sticky');
					    var $styRightH = $styRight.outerHeight();
                        setTimeout(function() {
                            Class.setLayout();
                        }, 250);
					}
					var $popObj = $(this).parents('.lypop_wrap');
					if($popObj.length>0) {
						setTimeout(function() {
                            Class.repositionPopup.call($popObj);
                        }, 250);
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('showOneAcc', '.js_acc .view', function(e) {
					$(this).slideDown(200);

                    if($(this).parents('.pay_info').length && $(this).closest('.js_acc').hasClass('filter_wrap')){
						Class.winHeight = $(window).height();
						var $payRight = $('.pay_info .inr.right');
						var $btnH = $payRight.find('.btn_wrap').outerHeight();
                        var $rh = Class.winHeight - ($btnH + 90);

                        setTimeout(function() {
                            var $filterWrapH = $('.pay_info .js_acc.filter_wrap').outerHeight();
                            if($filterWrapH>$rh){
                                $('.js_acc.filter_wrap').css({'height': $rh});
                            }
                        }, 250);
					}
					var $popObj = $(this).parents('.lypop_wrap');
					if($popObj.length>0) {
						setTimeout(function() {
                            Class.repositionPopup.call($popObj);
                        }, 250);
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('hideOneAcc', '.js_acc .view', function(e) {
					$(this).slideUp(200);

                    if($(this).parents('.pay_info').length && $(this).closest('.js_acc').hasClass('filter_wrap') && !$(this).closest('.js_acc').find('.view.active').length){
                        $(this).closest('.js_acc.filter_wrap').removeAttr('style');
					}
					var $popObj = $(this).parents('.lypop_wrap');
					if($popObj.length>0) {
						setTimeout(function() {
                            Class.repositionPopup.call($popObj);
                        }, 250);
					}
					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.js_acc:not(.multi) a.header:not(.disable)', function(e) {
					var $obj = $(this);
					var $target = $obj.attr("href").split("#")[1];

					if(!$obj.hasClass('active')){
						if($obj.parent().hasClass('holder')){
							$obj.parent('.holder').parents('.js_acc').find('.holder > .header').removeClass('active');
							$obj.parent('.holder').parents('.js_acc').find('.view').removeClass('active');
							$obj.parent('.holder').addClass('active');
						} else if($obj.parent().is('li') || $obj.parent().is('div') && !$obj.parent().hasClass('js_acc')){
							$obj.parents('.js_acc').find('.header').removeClass('active');
							$obj.parents('.js_acc').find('.view').removeClass('active');
							$obj.closest('.js_acc').closest('.view').siblings('.header').addClass('active');
						} else{
							$obj.parent('.js_acc').find('> .header').removeClass('active');
							$obj.parent('.js_acc').find('> .view').removeClass('active');
						}
						$("#" + $target).addClass('active').trigger('showAcc');
						$obj.addClass('active');
					} else {
						if($obj.parent().hasClass('holder')){
							$obj.parent('.holder').parents('.js_acc').find('.holder > .header').removeClass('active');
							$obj.parent('.holder').parents('.js_acc').find('.view').removeClass('active');
							$obj.parent('.holder').removeClass('active');
						} else if($obj.parent().is('li') || $obj.parent().is('div')){
							$obj.parents('.js_acc').find('.header').removeClass('active');
							$obj.parents('.js_acc').find('.view').removeClass('active');
						} else{
							$obj.parent('.js_acc').find('> .header').removeClass('active');
							$obj.parent('.js_acc').find('> .view').removeClass('active');
						}
						$("#" + $target).removeClass('active').trigger('hideAcc');
						$obj.removeClass('active');
					}

					if($obj.closest('.js_tabs.js_sticky').hasClass('fixed')){
				 		setTimeout(function() {
				 			$( 'html, body' ).stop().animate({scrollTop:$obj.offset().top - 110},400);
				 		}, 500);
					 }

					 if($obj.parent().hasClass('inr') && $obj.closest('.cont_unit').hasClass('schedule')){
						 //console.log('여기');
						var accIdx = $obj.closest('.inr').index();
						$obj.closest('.cont_unit.schedule').find('>.js_tabs_wrap>.js_tabs.type2 >.tabs>li').removeClass('selected');
						$obj.closest('.cont_unit.schedule').find('>.js_tabs_wrap>.js_tabs.type2 >.tabs>li:eq(' + accIdx + ')').addClass('selected');
					}

					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', '.js_acc.multi a.header:not(.disable)', function(e) {
					var $obj = $(this);
					var $target = $obj.attr("href").split("#")[1];

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
				});
		}
		, /* 레이어 팝업 버튼 세팅 */			initLayerPopupOnce: function initLayerPopupOnce() {
			$(document)
				.on('click', 'a.js_btn_lypop', function(e) {
					//var pop_base = $(".pop_base");
					var popID = $(this).attr('rel');
					var popURL = $(this).attr('href');
					var width = popURL.match(/w=([0-9]+)/);

					if($(this).parents().hasClass('lypop_wrap')){
						$(this).parents('.lypop_wrap').trigger('closePopup');
					}

					if(width.length>1) {
						var popWidth = width[1];
						Class.layerPopupOpen(popID, popWidth);
					}

					e.preventDefault();
					e.stopPropagation();
				})
				.on('click', 'input.js_btn_lypop, button.js_btn_lypop', function() {
					var chk = $(this).is(":checked");
					var popID = $(this).data('target');
					if(chk){
						Class.layerPopupOpen(popID);
					}
					//e.preventDefault();
					//e.stopPropagation();
				})
				.on('click', '.lypop_wrap .js_close', function(e) {
					$(this).parents('.lypop_wrap').trigger('closePopup');
					e.preventDefault();
				})
				.on('closePopup', '.lypop_wrap', function(e) {
					if($(this).hasClass('wide')){
						$(this).removeClass('show wide').removeAttr('style');
					} else {
						$(this).removeClass('show').removeAttr('style');
					}

					$('.lypop_fade').remove();
					if($('.lypop_wrap.show').length<1)
						$('html').removeClass('layer_open');

					e.stopPropagation();
				});

		}
		, /* Layer Popup 열기 */				layerPopupOpen: function layerPopOpen(id, width) {
			var $wrap = $('#wrap').length>0 ? $('#wrap') : $('#winpop_wrap');
			var $container = $('.container');
			var $popObj = $('#' + id);

			//console.log($popObj.height());
			if($popObj.length>0){
				if(Number(width) > 1100){
					$popObj.show().addClass('wide').show().css({ 'width': Number(width) });
				} else{
					$popObj.show().css({ 'width': Number(width) });
				}
				var popMargTop = ($popObj.height()) / 2;
				var popMargLeft = ($popObj.width()) / 2;
				$popObj.css({
					'margin-top': -popMargTop,
					'margin-left': -popMargLeft
				});

                $container.attr("aria-hidden", true);
				$popObj.addClass('show').attr("aria-hidden", false);
                // setTimeout(function() {
				// 	$popObj.addClass('show').attr("aria-hidden", false);
				// }, 300);

				$('.lypop_fade').addClass('show');
				$('html').addClass('layer_open');

                if($popObj.find('.lypop_body').length>0){
                    var lypopBodyH = $popObj.find('.lypop_body').outerHeight();
                    if(lypopBodyH > 614){
                        $popObj.find('.lypop_body').addClass('scroll');
                    }
                }
			}

			if($wrap.find('.lypop_fade').length<1) {
				$wrap.append('<div class="lypop_fade fade"></div>');
			}
			$('.lypop_fade').addClass('show');
			$('html').addClass('layer_open');

		}
		, /* 팝업 위치 조정 */				repositionPopup: function repositionPopup() {
			var $popObj = $(this);

			if($popObj.length>0){
				if($popObj.find('.lypop_body').hasClass('scroll')){
					$popObj.find('.lypop_body').removeClass('scroll');
				}
				var lypopBodyH = $popObj.find('.lypop_body').outerHeight();
				//console.log(lypopBodyH);
				if(lypopBodyH > 614){
					$popObj.find('.lypop_body').addClass('scroll');
				} else {
					$popObj.find('.lypop_body').removeClass('scroll');
				}

				var popMargTop = ($popObj.height()) / 2;
				var popMargLeft = ($popObj.width()) / 2;
				$popObj.css({
					'margin-top': -popMargTop,
					'margin-left': -popMargLeft
				});
			}
		}
		, /* pkg */ initPkgOnce: function initPkgOnce(){
			if($('html.pkg .cont_unit.js_sticky').length>0  && Class.winHeight >= 1200){
                $('html.pkg .cont_unit.js_sticky').css({
                    'min-height':$('.cont_unit.js_sticky').outerHeight() - $('.cont_unit.js_sticky').find('.member_count').outerHeight()
                });
            }

			var $keyPoint = $('.keypoints');
			var $item = $keyPoint.find('.cont_keypoints > .item');
			var $keyPointTab = $keyPoint.find('.tabs');

			if($('.cont_keypoints').length>0){
				$('html.pkg .cont_keypoints').scroll(function(){
					var $scroll = $('.cont_keypoints').scrollTop();

					for(var i=0; i<$item.length; i++) {
						if($scroll >= $($item[i]).position().top){
							var num = $($item[i]).index() + 1;
							$($item[i]).addClass('on').siblings().removeClass('on'); /* 디자인 추가 용 */
							$keyPointTab.find('li:nth-child('+num+')').addClass('selected').siblings('li').removeClass('selected');
						}
					}
				});
			}
			if($('.js_tabs.keypoints').length>0){
				$(document)
					.on('click', '.js_tabs.keypoints>.tabs>li', function(e) {
						var target = $(this).find('a').attr('href');
						//$(this).closest('.keypoints').find('li').removeClass('selected');
						//$(this).addClass('selected');
						$( 'html, body' ).stop().animate({scrollTop:$(target).offset().top + 5},400);
						//console.log(target, $(target).offset().top);
						e.preventDefault();
					});
			}
		}
		, /* htl */ initHtlOnce: function initHtlOnce(){
			if($('html.htl .js_sticky').length>0) {
				$('html.htl .js_sticky.js_tabs').find('a').click(function(){
					var $obj = $(this);
					var target= $obj.attr('href');
					$( 'html, body' ).stop().animate({scrollTop:$(target).offset().top - 152 },400);
				});
			}
		}
		,/* setLayout */ setLayout : function setLayout(){
			Class.winWidth = $(window).width();
			Class.winHeight = $(window).height();
			var $scroll = $(window).scrollTop();

			if($('html.pkg .js_sticky').length>0 && Class.winWidth > 1200){
					var $styleft = $('.js_tabs.js_sticky');
					var $styRight = $('.cont_unit.js_sticky');
                    var $rContWrapH = $styRight.find('.cont_wrap').outerHeight();
					var $styRightH = $styRight.outerHeight();
					var $styleftOff = $styleft.offset();
					var $styRightOff = $styRight.closest('.inr.right').offset();
					var $footer = $('#footer');
					var $footerOff = $footer.offset();
					var $keypoints = $('.js_tabs.keypoints');
					var $banner_wrap = $keypoints.next('.banner_wrap');
					var $point01 = $keypoints.find('#point01').length ? $keypoints.find('#point01').offset().top : 0;
					var $point02 = $keypoints.find('#point02').length ? $keypoints.find('#point02').offset().top : 0;
					var $point03 = $keypoints.find('#point03').length ? $keypoints.find('#point03').offset().top : 0;
					var $point04 = $keypoints.find('#point04').length ? $keypoints.find('#point04').offset().top : 0;
					var $point05 = $keypoints.find('#point05').length ? $keypoints.find('#point05').offset().top : 0;
					var $point06 = $keypoints.find('#point06').length ? $keypoints.find('#point06').offset().top : 0;
					var $point07 = $keypoints.find('#point07').length ? $keypoints.find('#point07').offset().top : 0;
					var $point08 = $keypoints.find('#point08').length ? $keypoints.find('#point08').offset().top : 0;
					var $point09 = $keypoints.find('#point09').length ? $keypoints.find('#point09').offset().top : 0;

					if($footer.length>0 && !$footer.is(':visible') == false && $scroll >= $footerOff.top - 850){
						$('body').removeClass('styleft').addClass('styleft');
                        $styleft.addClass('fixed');
                        if($styRight.length > 0){
                            $('body').removeClass('styRight').addClass('styRight');
                            $styRight.removeClass('fixed').addClass('absolute').css({
                                'right':0,
                                'left':'auto',
                                'height':'auto',
                            });
                            $styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
                        }
					} else if($scroll >= $styleftOff.top){
						$('body').removeClass('styleft').addClass('styleft');
						$styleft.addClass('fixed');
                        if($styRight.length > 0){
                            $('body').removeClass('styRight').addClass('styRight');
                            $styRight.removeClass('absolute').addClass('fixed').css({
                                'right':'auto',
                                'left':$styRightOff.left + 20,
                            });

                            if(Class.winHeight <= $styRightH){
                                $styRight.find('.member_count').removeAttr('style').css({'overflowY':'scroll','min-height':'130px','max-height':'150px'});
                            } else {
                                $styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
                            }
                        }
					} else if($styRight.length > 0 && $scroll >= $styRightOff.top){
						$('body').removeClass('styleft styRight').addClass('styRight');
						$styleft.removeClass('fixed');
						$styRight.removeClass('absolute').addClass('fixed').css({
							'right':'auto',
							'left':$styRightOff.left + 20,
						});

						if(Class.winHeight <= $styRightH){
							$styRight.find('.member_count').removeAttr('style').css({'overflowY':'scroll','min-height':'130px','max-height':'150px'});
						} else {
							$styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
						}

					} else if($scroll >= 0){
						$('body').removeClass('styleft');
						$styleft.removeClass('fixed');
                        if($styRight.length > 0){
                            $('body').removeClass('styRight');
                            $styRight.removeClass('fixed').css({
                                'right':'auto',
                                'left':0,'height':'auto',
                            });
                            $styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
                        }
					}

					if($scroll < $keypoints.offset().top){
						$keypoints.removeClass('fixed');
					} else if ($scroll >= $keypoints.offset().top && $scroll <=$banner_wrap.offset().top - 700){
						$keypoints.addClass('fixed');
						if(!$point09 == 0 && $scroll >= $point09){
							$keypoints.find('li:nth-child(9)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point08 == 0 && $scroll >= $point08){
							$keypoints.find('li:nth-child(8)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point07 == 0 && $scroll >= $point07){
							$keypoints.find('li:nth-child(7)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point06 == 0 && $scroll >= $point06){
							$keypoints.find('li:nth-child(6)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point05 == 0 && $scroll >= $point05){
							$keypoints.find('li:nth-child(5)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point04 == 0 && $scroll >= $point04){
							$keypoints.find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point03 == 0 && $scroll >= $point03){
							$keypoints.find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point02 == 0 && $scroll >= $point02){
							$keypoints.find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
						} else if(!$point01 == 0 && $scroll >= $point01){
							$keypoints.find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
						}
					} else if ($scroll >= $banner_wrap.offset().top - 700){
						$keypoints.removeClass('fixed');
					}
			}

			if($('html.htl .js_sticky').length>0){
				var $htlJSTab = $('html.htl .js_sticky');
				var $tabmenu04 = $('#tabmenu04').offset();
				var $tabmenu03 = $('#tabmenu03').offset();
				var $tabmenu02 = $('#tabmenu02').offset();
				var $tabmenu01 = $('#tabmenu01').offset();

				if($scroll >= $tabmenu04.top - 212){
					$('body').addClass('topFixed');
					$htlJSTab.addClass('fixed').find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
				} else if($scroll >= $tabmenu03.top - 232){
					$('body').addClass('topFixed');
					$htlJSTab.addClass('fixed').find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
				} else if($scroll >= $tabmenu02.top - 212){
					$('body').addClass('topFixed');
					$htlJSTab.addClass('fixed').find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
				} else if($scroll >= $tabmenu01.top){
					$('body').addClass('topFixed');
					$htlJSTab.addClass('fixed').find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
				} else if($scroll >= 0){
					$('body').removeClass('topFixed');
					$htlJSTab.removeClass('fixed').find('li').removeClass('selected');
				}
			}

			if($('#wrapper').hasClass('zeus') && $('#wrapper').find('.contents .submain').length > 0){
				$('#wrapper.zeus').find('.gnb_wrap').removeClass('on');
			}

			if($('.print_wrap').length>0){
				$('.print_wrap').css({'maxHeight': Class.winHeight - 79});
			}

            if($('.ly_wrap.pay_info').length>0){
				var $footerOff = $('#footer').offset();
				var $payLeft = $('.pay_info .inr:not(.right)');
				var $payRight = $('.pay_info .inr.right');
				var $btnH = $payRight.find('.btn_wrap').outerHeight();
				var $bannerH = $payLeft.find('.cont_unit:last .banner_wrap').length>0 ? $payLeft.find('.cont_unit:last .banner_wrap').outerHeight() : 0;
				var $rh = Class.winHeight - ($btnH + 90);
				if($bannerH>0)$('.inr.right').addClass('type');

                if( $scroll > 318 ){
                    $('.inr.right').addClass('fixed');
                }else{
                    $('.inr.right').removeClass('fixed');
                }
                if( $scroll > $footerOff.top - $payRight.outerHeight() ){
                    $('.inr.right').addClass('btm');
                }else{
                    $('.inr.right').removeClass('btm');
                }
			}

			Class.setSwiper();
		}
		, /* top button */  initTopButtonOnce: function initTopButtonOnce(){
			$(document)
				.on('click','.right_fixed .btn_go_top',function(e){
					$( 'html, body' ).stop().animate({scrollTop:0},400);
					//window.scrollTo(0, 0);
					e.preventDefault();
					//e.stopPropagation();
				});
		}
        ,/* scroll */ initWindowScroll: function initWindowScroll(){
			$(window).on('scroll',function(e){
				Class.winWidth = $(window).width();
				Class.winHeight = $(window).height();
				var $scroll = $(window).scrollTop();

					if($('html.pkg .js_sticky').length>0 && Class.winWidth > 1200){
						var $styleft = $('.js_tabs.js_sticky');
						var $styRight = $('.cont_unit.js_sticky');
						var $rContWrapH = $styRight.find('.cont_wrap').outerHeight();
						var $styRightH = $styRight.outerHeight();
						var $styleftOff = $styleft.offset();
						var $styRightOff = $styRight.closest('.inr.right').offset();
						var $footer = $('#footer');
						var $footerOff = $footer.offset();
						var $keypoints = $('.js_tabs.keypoints');
						var $banner_wrap = $keypoints.next('.banner_wrap');
						var $point01 = $keypoints.find('#point01').length ? $keypoints.find('#point01').offset().top : 0;
						var $point02 = $keypoints.find('#point02').length ? $keypoints.find('#point02').offset().top : 0;
						var $point03 = $keypoints.find('#point03').length ? $keypoints.find('#point03').offset().top : 0;
						var $point04 = $keypoints.find('#point04').length ? $keypoints.find('#point04').offset().top : 0;
						var $point05 = $keypoints.find('#point05').length ? $keypoints.find('#point05').offset().top : 0;
						var $point06 = $keypoints.find('#point06').length ? $keypoints.find('#point06').offset().top : 0;
						var $point07 = $keypoints.find('#point07').length ? $keypoints.find('#point07').offset().top : 0;
						var $point08 = $keypoints.find('#point08').length ? $keypoints.find('#point08').offset().top : 0;
						var $point09 = $keypoints.find('#point09').length ? $keypoints.find('#point09').offset().top : 0;

						if($footer.length>0 && !$footer.is(':visible') == false && $scroll >= $footerOff.top - 850){
							$('body').removeClass('styleft').addClass('styleft');
							$styleft.addClass('fixed');
							if($styRight.length > 0){
								$('body').removeClass('styRight').addClass('styRight');
								$styRight.removeClass('fixed').addClass('absolute').css({
									'right':0,
									'left':'auto',
									'height':'auto',
								});
								$styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
							}
						} else if($scroll >= $styleftOff.top){
							$('body').removeClass('styleft').addClass('styleft');
							$styleft.addClass('fixed');
							if($styRight.length > 0){
								$('body').removeClass('styRight').addClass('styRight');
								$styRight.removeClass('absolute').addClass('fixed').css({
									'right':'auto',
									'left':$styRightOff.left + 20,
								});

								if(Class.winHeight <= $styRightH){
									$styRight.find('.member_count').removeAttr('style').css({'overflowY':'scroll','min-height':'130px','max-height':'150px'});
								}
							}
						} else if($styRight.length > 0 && $scroll >= $styRightOff.top){
							$('body').removeClass('styleft styRight').addClass('styRight');
							$styleft.removeClass('fixed');
							$styRight.removeClass('absolute').addClass('fixed').css({
								'right':'auto',
								'left':$styRightOff.left + 20,
							});

							if(Class.winHeight <= $styRightH){
								$styRight.find('.member_count').removeAttr('style').css({'overflowY':'scroll','min-height':'130px','max-height':'150px'});
							}
						} else if($scroll >= 0){
							$('body').removeClass('styleft');
							$styleft.removeClass('fixed');
							if($styRight.length > 0){
								$('body').removeClass('styRight');
								$styRight.removeClass('fixed').css({
									'right':'auto',
									'left':0,'height':'auto',
								});
								$styRight.find('.member_count').removeAttr('style');/* .css({'overflowY':'hidden'}) */
							}
						}

						if($scroll < $keypoints.offset().top){
							$keypoints.removeClass('fixed');
						} else if ($scroll >= $keypoints.offset().top && $scroll <=$banner_wrap.offset().top - 700){
							$keypoints.addClass('fixed');
							if(!$point09 == 0 && $scroll >= $point09){
								$keypoints.find('li:nth-child(9)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point08 == 0 && $scroll >= $point08){
								$keypoints.find('li:nth-child(8)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point07 == 0 && $scroll >= $point07){
								$keypoints.find('li:nth-child(7)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point06 == 0 && $scroll >= $point06){
								$keypoints.find('li:nth-child(6)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point05 == 0 && $scroll >= $point05){
								$keypoints.find('li:nth-child(5)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point04 == 0 && $scroll >= $point04){
								$keypoints.find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point03 == 0 && $scroll >= $point03){
								$keypoints.find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point02 == 0 && $scroll >= $point02){
								$keypoints.find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
							} else if(!$point01 == 0 && $scroll >= $point01){
								$keypoints.find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
							}
						} else if ($scroll >= $banner_wrap.offset().top - 700){
							$keypoints.removeClass('fixed');
						}
					}

					if($('html.htl .js_sticky').length>0){
						var $htlJSTab = $('html.htl .js_sticky');
						var $tabmenu04 = $('#tabmenu04').offset();
						var $tabmenu03 = $('#tabmenu03').offset();
						var $tabmenu02 = $('#tabmenu02').offset();
						var $tabmenu01 = $('#tabmenu01').offset();

						if($scroll >= $tabmenu04.top - 212){
							$('body').addClass('topFixed');
							$htlJSTab.addClass('fixed').find('li:nth-child(4)').addClass('selected').siblings('li').removeClass('selected');
						} else if($scroll >= $tabmenu03.top - 232){
							$('body').addClass('topFixed');
							$htlJSTab.addClass('fixed').find('li:nth-child(3)').addClass('selected').siblings('li').removeClass('selected');
						} else if($scroll >= $tabmenu02.top - 212){
							$('body').addClass('topFixed');
							$htlJSTab.addClass('fixed').find('li:nth-child(2)').addClass('selected').siblings('li').removeClass('selected');
						} else if($scroll >= $tabmenu01.top){
							$('body').addClass('topFixed');
							$htlJSTab.addClass('fixed').find('li:nth-child(1)').addClass('selected').siblings('li').removeClass('selected');
						} else if($scroll >= 0){
							$('body').removeClass('topFixed');
							$htlJSTab.removeClass('fixed').find('li').removeClass('selected');
						}
					}

					if($('.ly_wrap.pay_info').length>0){
						var $footerOff = $('#footer').offset();
						var $payLeft = $('.pay_info .inr:not(.right)');
						var $payRight = $('.pay_info .inr.right');
						var $btnH = $payRight.find('.btn_wrap').outerHeight();
						var $bannerH = $payLeft.find('.cont_unit:last .banner_wrap').length>0 ? $payLeft.find('.cont_unit:last .banner_wrap').outerHeight() : 0;
						var $rh = Class.winHeight - ($btnH + 90);
						if($bannerH>0)$('.inr.right').addClass('type');

                        if( $scroll > 318 ){
                            $('.inr.right').addClass('fixed');
                        }else{
                            $('.inr.right').removeClass('fixed');
                        }
                        if( $scroll > $footerOff.top - $payRight.outerHeight()){
                            $('.inr.right').addClass('btm');
                        }else{
                            $('.inr.right').removeClass('btm');
						}
                    }

					// if($('.zeus .gnb_menu_wrap').length>0 && $scroll > 0){
					// 	$('.zeus .gnb_menu_wrap>ul').trigger('mouseleave');
					// }

				});
		}
		,
        //항상 마지막에
        /* window 세팅 */
        initWindowResizeOnce: function initWindowResizeOnce() {
            $(window)
                .on('resize', function() {
                    Class.winWidth = $(window).width();
                    Class.winHeight = $(window).height();
					//Class.repositionSticky.call($('.js_tabs.js_sticky.fixed'));
					//Class.repositionSticky.call($('.cont_unit.js_sticky.fixed'));
					Class.setLayout();


					var $styleft = $('.js_tabs.js_sticky');
					// var $margin = $styleft.find('>.tabs').css('marginLeft');
					// $margin = $margin.split('px')[0];
					// var $styleftM = parseInt($margin,10);
					var $styRight = $('.cont_unit.js_sticky');
					var $styRightH = $styRight.outerHeight();
					var $styleft = $('.js_tabs.js_sticky');

					if($styRight.length>0 && $styRight.hasClass('fixed')){
						if(Class.winHeight <= $styRightH){
							$styRight.css({'height': Class.winHeight});
						} else {
							$styRight.css({'height':'auto'});
						}
					}
					if(Class.winWidth < 1200){
						$styleft.removeClass('fixed');
						$styRight.removeClass('fixed').css({'min-height':'auto'});;
					}

					// if($('.zeus .gnb_menu_wrap').length>0){
					// 	$('.zeus .gnb_menu_wrap>ul').trigger('mouseleave');
					// }
				});
				Class.setLayout();
        },
        /* hntUI 초기화 */
        init: function() {
            var wrapper = this;

            function init(obj, prefix) {
                prefix = typeof prefix === 'undefined' ? '' : prefix;

                for (var func in obj) {
                    if (obj.hasOwnProperty(func)) {
                        if (func.indexOf('_') == 0) {
                            init(obj[func], prefix + func);
                        } else {
                            if (func !== 'init' && func.indexOf('init') == 0) {
                                var $document = $(document);
                                if (func.lastIndexOf('Once') + 4 == func.length && !$document.data(prefix + func)) {
                                    $document.data(prefix + func, true);
                                    obj[func].call(wrapper);
                                } else if (func.lastIndexOf('Once') + 4 != func.length) {
                                    obj[func].call(wrapper);
                                }

                            }
                        }
                    }
                }
            }
            init(Class);
        }
    };

    if (typeof this['hntUI'] === 'undefined') {
        this['hntUI'] = Class;
    }
})();

$.fn.hntUI = hntUI.init;
$(function() {
	$(document).hntUI();
});

//window pop
var win = null;
function NewWindow(mypage, myname, w, h, scroll) {
    var winl = (screen.width - w) / 2;
    var wint = (screen.height - h) / 2;
    var settings = 'height=' + h + ',';
    settings += 'width=' + w + ',';
    settings += 'top=' + wint + ',';
    settings += 'left=' + winl + ',';
    settings += 'scrollbars=' + scroll + ',';
    settings += 'resizable=yes';
    win = window.open(mypage, myname, settings);
    if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}