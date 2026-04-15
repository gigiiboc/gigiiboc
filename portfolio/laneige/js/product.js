/* 상단 비주얼 */
$(function () {
    var isTouch = false;
    var userAgent = navigator.userAgent.toLowerCase();
    if (userAgent.indexOf('iphone') > 0 || userAgent.indexOf('ipod') > 0 || userAgent.indexOf('ipad') > 0 || userAgent.indexOf('windows phone') > 0 || userAgent.indexOf('blackberry') > 0 || userAgent.indexOf('android') > 0) {
        isTouch = true;
        $("body").addClass("touch");
    }  
    var breakPoint = 720;
    var windowScrollTop = $(window).scrollTop();
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var currentLayout = (windowWidth > breakPoint) ? "pc" : "sp";
    var pastLayout = currentLayout;

    function scrollHandler() {
        windowScrollTop = $(window).scrollTop();
    }
    function resizeHandler() {
        windowWidth = $(window).width();
        windowHeight = $(window).height();
        currentLayout = (windowWidth > breakPoint) ? "pc" : "sp";
        if (pastLayout != currentLayout) {
            $(window).trigger("layoutchange");
            pastLayout = currentLayout;
        }
        scrollHandler();
    }
    $(window).on("scroll", scrollHandler);
    $(window).on("resize", resizeHandler);
    resizeHandler();
    function initIndexHero() {
        if (!$(".index__hero").length) 
            return false;
        
        var $hero = $(".index__hero");
        var $blockA = $(".index__hero__visual__a");
        var $blockB = $(".index__hero__visual__b");
        var $blockC = $(".index__hero__visual__c");
        var $imageA = $(".index__hero__visual__a .index__hero__visual__block__img");
        var $imageB = $(".index__hero__visual__b .index__hero__visual__block__img");
        var $imageC = $(".index__hero__visual__c .index__hero__visual__block__img");
        var $copy = $(".index__hero__copy");
        var $prevButton = $(".index__hero__pageButton .pagebutton__prev");
        var $nextButton = $(".index__hero__pageButton .pagebutton__next");
        var $progressBar = $(".index__hero__pageButton__bar span");
        var delayArray = ["delay2", "delay3"];
        var wipeInArray = ["wipeInTop", "wipeInRight", "wipeInBottom", "wipeInLeft"];
        var wipeOutArray = ["wipeOutTop", "wipeOutRight", "wipeOutBottom", "wipeOutLeft"];
        var maxPage = $(".index__hero").attr("data-maxpage") * 1;
        var position = -1;
        var slideTimer = null;
        var moveTimer = null;
        var lastTime = getTime();
        var pauseTime = false;
        var pauseDuration = 0;
        var interval = 8000;
        var durationGap = 2500;
        var buttonActive = false;
        var outOfViewport = false;
        var now = window.performance && (performance.now || performance.mozNow || performance.msNow || performance.oNow || performance.webkitNow);
        if (userAgent.indexOf('msie') != -1 || userAgent.indexOf('trident') != -1 || userAgent.indexOf('edge') != -1) {
            $(".index__hero__visual__block__img img").each(function () {
                var $img = $(this);
                var $parent = $img.parents(".index__hero__visual__block__img");
                $parent.css("background-image", "url(" + (
                    $img.attr("src")
                ) + ")");
                $img.remove();
            });
        }
        function getTime() {
            return(now && now.call(performance)) || (new Date().getTime());
        }
        function intervalManager() {
            var currentTime = getTime();
            if (outOfViewport) {
                if (pauseTime === false) 
                    pauseTime = currentTime;
                
                pauseDuration = currentTime - pauseTime;
            } else if (pauseTime !== false) {
                lastTime = lastTime + pauseDuration;
                pauseTime = false;
                pauseDuration = 0;
            }
            var progress = currentTime - lastTime - pauseDuration;
            if (progress < durationGap) {
                if (buttonActive == true) {
                    buttonActive = false;
                    $prevButton.addClass("disabled");
                    $nextButton.addClass("disabled");
                }
                $progressBar.css({"transform": "scale(0,1)", "transform-origin": "right center", "transition-duration": "1s"});
            } else {
                if (buttonActive == false) {
                    buttonActive = true;
                    $prevButton.removeClass("disabled");
                    $nextButton.removeClass("disabled");
                }
                $progressBar.css({
                    "transform": "scale(" + Math.min(1, (progress - durationGap) / (interval - durationGap)) + ",1)",
                    "transform-origin": "left center",
                    "transition-duration": "0s"
                });
            }
            if (progress > interval) {
                move(true);
            }
            requestAnimationFrame(intervalManager);
        }
        intervalManager();
        function move(toNext) {
            if (toNext) {
                position++;
                if (position >= maxPage) 
                    position = 0;
                
            } else {
                position--;
                if (position < 0) 
                    position = maxPage - 1;
                
            }
            var wipeout = getRandArray(wipeOutArray);
            $hero.attr("data-currentgroup", position);
            $blockA.removeClass(delayArray.join(" ") + " " + wipeInArray.join(" ")).addClass(wipeout[0]);
            $blockB.removeClass(delayArray.join(" ") + " " + wipeInArray.join(" ")).addClass(wipeout[1]);
            $blockC.removeClass(delayArray.join(" ") + " " + wipeInArray.join(" ")).addClass(wipeout[2]);
            $copy.css("height", $copy.find(".index__hero__copy__group[data-number='" + position + "']").outerHeight());
            if (moveTimer) 
                clearTimeout(moveTimer);
            
            if (slideTimer) 
                clearTimeout(slideTimer);
            
            slideTimer = setTimeout(function () {
                var delay = getRandArray(delayArray);
                var wipein = getRandArray(wipeInArray);
                $imageA
                    .removeClass("active")
                    .filter("[data-number='" + position + "']")
                    .addClass("active");
                $imageB
                    .removeClass("active")
                    .filter("[data-number='" + position + "']")
                    .addClass("active");
                $imageC
                    .removeClass("active")
                    .filter("[data-number='" + position + "']")
                    .addClass("active");
                $blockA.removeClass(wipeOutArray.join(" ")).addClass(wipein[0]);
                $blockB.removeClass(wipeOutArray.join(" ")).addClass(wipein[1] + " " + delay[0]);
                $blockC.removeClass(wipeOutArray.join(" ")).addClass(wipein[2] + " " + delay[1]);
            }, 1000);
            lastTime = getTime();
            pauseTime = false;
            pauseDuration = 0;
        }
        $prevButton.on("click", function () {
            if (!$(this).hasClass("disabled")) 
                move(false);
            
            return false;
        });
        $nextButton.on("click", function () {
            if (!$(this).hasClass("disabled")) 
                move(true);
            
            return false;
        });
        function indexHeroScrollHandler() {
            outOfViewport = windowScrollTop > $hero.outerHeight();
        }
        $(window).on("scroll", indexHeroScrollHandler);
        indexHeroScrollHandler();
        function getRandArray(array) {
            var len = array.length;
            var ary = array.concat();
            var res = [];
            while (len) 
                res.push(ary.splice(Math.floor(Math.random() * len--), 1));            
            return res
        }
        var wipein = getRandArray(wipeInArray);
        $blockA.addClass(wipein[0]);
        $blockB.addClass(wipein[1]);
        $blockC.addClass(wipein[2]);
        var initialWait = false;
        $(".index__hero__loading").css("opacity", 1);
        if (isTouch && screen.width > 640) 
            $hero.css("max-height", "960px");
        
        $(".index__hero *").imagesLoaded({
            background: true
        }, initialize);
        moveTimer = setTimeout(initialize, 500);
        function initialize() {
            if (initialWait) {
                $(".index__hero__loading").fadeOut({duration: 500, easing: "linear"});
                moveTimer = setTimeout(function () {
                    $hero.removeClass("loading");
                    $(".index__hero__visual__block").removeClass("initial");
                    move(true);
                }, 1000);
            }
            initialWait = true;
        }
    }
	initIndexHero();
});

/* 유튜브 api */
var loadedVod = false;
var nowPlaying = false;
var players = new Array();
var playerInfoList = [
	{id:'player0', controls:'0', autohide:'1', videoId:'UuQOxh9uTHo'},
	{id:'player1', controls:'0', autohide:'1', videoId:'NVGxRYl6S6c'}
];
function loadYT(){
	var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	window.onYouTubeIframeAPIReady = function(){
		if (typeof playerInfoList === 'undefined') return;
		for (var i = 0; i < playerInfoList.length; i++) {
			var curplayer = createPlayer(playerInfoList[i]);
			players[i] = curplayer;
		}
	}
};
function createPlayer(playerInfo) {
	return new YT.Player(playerInfo.id, {
		width: '100%',
		height: '100%',
		videoId: playerInfo.videoId,
		wmode: 'transparent',
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		},
		playerVars: {
			autoplay: 0,
			autohide: 1,
			controls: 1,
			showinfo: 0,
			rel: 0,
			modestbranding: 1,
			wmode: 'transparent'
		}
	});
}
function onPlayerReady(event) {
	loadedVod = true;
}
function onPlayerStateChange(event) {
	if(event.data == YT.PlayerState.ENDED){
		$('.vodArea').removeClass('playing');
		nowPlaying = false;
	}
}
function playVOD(ele,videoId){
	if (loadedVod) {
		if (nowPlaying) {
			stopVideo();
		}
		players[ele].loadVideoById(videoId);
		players[ele].setPlaybackQuality('hd1080');
		players[ele].seekTo(0).playVideo();
		if (ele == 0) {
			$('.vodArea.vod1').stop().animate({'opacity':'1'}, 200, 'easeInOutQuad', function(){
				$(this).addClass('playing');
				nowPlaying = true;
			})
		} else if (ele == 1) {
			$('.vodArea.vod2').stop().animate({'opacity':'1'}, 200, 'easeInOutQuad', function(){
				$(this).addClass('playing');
				nowPlaying = true;
			})
		}
	}
}
function stopVideo(){
	nowPlaying = false;
	for(var i = 0; i < players.length; i++){
		players[i].stopVideo();
	}
	$('.vodArea').stop().animate({'opacity':'0'}, 100, 'easeInOutQuad', function(){
		$(this).removeClass('playing');
		$(this).css({'opacity':''});
	});
}
loadYT();

/* 상세 애니메이션 */
function viewAnim (target){
	$(target).each(function(){
		var targetTop = $(this).offset().top;
		if ($(this).attr('anime-stlye') == 'img'){
			if ($(window).scrollTop() >= targetTop - $(window).height()){ // 화면에 나타날때 노출, 유지
				$(this).addClass('on')
			} else {
				$(this).removeClass('on')						
			}
		}
	})
}
$(window).scroll(function(){
	viewAnim('.viewAnim')
})
viewAnim('.viewAnim')

/* 반응형 이미지 변경 */
function responsibleImg (){
	$('.responsibleImg').each(function(){
		if ($(window).width() < 721){
			$(this).attr('src', $(this).attr('src').replace('_w','_m'))
		} else {
			$(this).attr('src', $(this).attr('src').replace('_m','_w'))
		}
	})
}

$(window).resize(function(){
	responsibleImg();
})
responsibleImg();