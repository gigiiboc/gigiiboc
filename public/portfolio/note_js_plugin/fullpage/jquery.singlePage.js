/* --------------------------------------------
 READY FUNCTION
-------------------------------------------- */	
$(document).ready(function() {
		
	/* --------------------------------------------
	 SCROLL NAVIGATION
	-------------------------------------------- */		
		/*$('.scroll').bind('click', function(event) {
			var $anchor = jQuery(this);
			var headerH = jQuery('#navigation').outerHeight();
				

					$('html, body').stop().animate({					
						scrollTop : $($anchor.attr('href')).offset().top - 120 + "px"
					}, 1200, 'easeInOutExpo');	
					event.preventDefault();
				
				if ($('.popup_area').height()>50) {
					$('html, body').stop().animate({					
						scrollTop : $($anchor.attr('href')).offset().top - 245 + "px"
					}, 1200, 'easeInOutExpo');	
					event.preventDefault();
				}
				
		});*/
		

		
		$('.scroll').bind('click', function(event) {
			var $anchor = jQuery(this);
			var headerH = jQuery('#navigation').outerHeight();
			$(".nav").find('li.active').removeClass('active'); 
			$(this).parent().addClass('active');	
				$('html, body').stop().animate({					
					scrollTop : $($anchor.attr('href')).offset().top - 0 + "px"
				}, 1200, 'easeInOutExpo');	
			event.preventDefault();
		});
	
	
		

		
	/* --------------------------------------------
	 FILTERS / PORTFOLIO SCRIPT
	-------------------------------------------- */			
		/*var $proJects = $('#projects').isotope();
			// filter items on button click
			$('#filters').on( 'click', 'li', function() {
			$(this).parent().find('li.active').removeClass('active');    
			$(this).addClass('active');
				var filterValue = $(this).attr('data-filter');
					$proJects.isotope({
					filter: filterValue
			});
		});*/
		
	/* --------------------------------------------
	 MENU HIDE AFTER CLICK --  mobile devices
	-------------------------------------------- */
		/*$('.nav li a').click(function () {
			 $('.navbar-collapse').removeClass('in');
		});*/

	/* --------------------------------------------
	 FIXED MENU ON SCROLL
	-------------------------------------------- */
		$("#sticky-section").sticky({topSpacing:0});
	
	/* --------------------------------------------
	 ANIMATED ITEMS
	-------------------------------------------- */
		$('.animated').appear(function() {
			var elem = $(this);
				var animation = elem.data('animation');
					if ( !elem.hasClass('visible') ) {
					var animationDelay = elem.data('animation-delay');
						if ( animationDelay ) {	
						
						if( navigator.appName.indexOf("Microsoft") > -1 ) // IE
						{
							if( navigator.appVersion.indexOf("MSIE 9") > -1 || navigator.appVersion.indexOf("MSIE 8") > -1 || navigator.appVersion.indexOf("MSIE 7") > -1) // IE8
							{
								setTimeout(function(){ elem.addClass( animation + " visible" );}, 0);	
							}else{
								setTimeout(function(){ elem.addClass( animation + " visible" );}, animationDelay);	 //IE9 이상	
							}
						}else{
							setTimeout(function(){ elem.addClass( animation + " visible" );}, animationDelay);//IE가 아니면
						}
				
						} else {
					elem.addClass( animation + " visible" );
				}
			}
		});
		
	
	/* 네비게이션 활성화 */
		$('body').scrollspy({ 
			target: '#parallax',
			offset: 122
		});	

	/* --------------------------------------------
	 EFFECT OVERLAY 
	-------------------------------------------- */
		/*if (Modernizr.touch) {
			// show the close overlay button
			$(".close-overlay").removeClass("hidden");
			// handle the adding of hover class when clicked
			$(".img").click(function(e){
				if (!$(this).hasClass("hover")) {
					$(this).addClass("hover");
				}
			});
			// handle the closing of the overlay
			$(".close-overlay").click(function(e){
				e.preventDefault();
				e.stopPropagation();
				if ($(this).closest(".img").hasClass("hover")) {
					$(this).closest(".img").removeClass("hover");
				}
			});
		} else {
			// handle the mouseenter functionality
			$(".img").mouseenter(function(){
				$(this).addClass("hover");
			})
			// handle the mouseleave functionality
			.mouseleave(function(){
				$(this).removeClass("hover");
			});
		}
		
		*/
});
	
	

	
/* ---------------------------------------------------------------------
 LOAD FUNCTION
------------------------------------------------------------------------ */

$(window).load(function() {
	
	/* --------------------------------------------
	 PAGE LOADER
	-------------------------------------------- */
		$(".loader-item").delay(700).fadeOut();
		$("#pageloader").delay(800).fadeOut("slow");
		
		
	 
		$('.text-slider').flexslider({
			animation: "slide",
			selector: ".slide-text li",
			controlNav: false,
			directionNav: false,
			slideshowSpeed: 4000,
			touch: true,
			useCSS: false,
			direction: "vertical",
			before: function(slider){        
			var height = $('.text-slider').find('.flex-viewport').innerHeight();
			$('.text-slider').find('li').css({ height: height + 'px' });
			}		
		});	
	
	/* -------------------------------------------- 
	 PORTFOLIO SCRIPTS
	-------------------------------------------- */
		/*$(function() {
			$('.gallery-col-4').imagesLoaded( function() {
				$('.gallery-col-4').isotope({
					layoutMode: 'masonry',
					itemSelector: '.gallery-items',
					transformsEnabled: false,
					resizesContainer: true   
				}); 
			});
			
			$(window).resize(function() { 
				$('.gallery-col-4').imagesLoaded( function() {
					$('.gallery-col-4').isotope({
					layoutMode: 'masonry',
					itemSelector: '.gallery-items',
					transformsEnabled: false,
					resizesContainer: true   
					}); 
				});
			});
		});
	
	*/
	
	
	
	
	
	





});
	
	
	
	
	//https://github.com/jquery/jquery-mousewheel
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});


var $win = $(window),
	sTop,
	wH,
	scrollIndex = 0,
	htmlclass = $("html").prop("class");

	
	function onScroll() {
		sTop = $win.scrollTop();
		/*if(sTop < 300) {
			$(".scrolling").fadeIn();
		}else{
			$(".scrolling").fadeOut();
		}*/
		
		if(sTop > 300) {
			$(".scrolling").fadeOut();
		}
		
		if(sTop > 0) {
			scrollIndex = 0;
			//$(".home_btn_con li").removeClass("animated");
			if(sTop >= 790) {
				scrollIndex = 1;
				if(sTop >= 1535) {
					scrollIndex = 2;
					if(sTop >= 2115) {
						scrollIndex = 3;
						if(sTop >= 2528) {
							scrollIndex = 4;
							if(sTop >= 3360) {
								scrollIndex = 5;
							}
						}
					}
				
				} else {
					//opBar.removeClass("last");
				}
			} else {
				//$topBar.removeClass("colored");
			}
		} else {
			//$topBar.removeClass("moving");
		}
	}
	/*function scrollPage(num) {
		var dur = 600;
		
			if(num == 0) {
				var targetAxis = 0;
			} else if(num == 1) {
				var targetAxis = 790;
			} else if(num == 2) {
				var targetAxis = 1535;
			} else if(num == 3) {
				var targetAxis = 2115;
			} else if(num == 4) {
				var targetAxis = 2528;
			}  else if(num == 5) {
				var targetAxis = 3360;
			} 
		
		
		
		console.log(num);
		$("body, html").stop().animate({
			scrollTop : targetAxis
		}, {
			duration : dur,
			easing : "easeOutCubic",
			queue : false
		});
	}
	function nextPage() {
		var toPage = scrollIndex + 1;
		if(toPage > 5) {
			toPage = 5;
		}
		scrollPage(toPage);
	}
	function prevPage() {
		var toPage = scrollIndex - 1;
		if(toPage < 0) {
			toPage = 0;
		}
		scrollPage(toPage);
	}
	
	
	
	$win.on("mousewheel", function(e) {
		e.preventDefault();
		e.stopPropagation();
		if($("body").is(":animated") || $("html").is(":animated") ) {
			return false;
		}
		if(e.deltaY < 0) {
			nextPage();
		} else if(e.deltaY > 0) {
			prevPage();
		}
	});
	*/
	$win.on("scroll", function() {
		onScroll();
	});
	
	



/*  */