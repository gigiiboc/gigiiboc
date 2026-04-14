


/**
clipboard
**/
$(function () {
	var clipboard = new ClipboardJS('.eventLink04');

	clipboard.on('success', function () {
		alert("URL이 복사되었습니다.");
	});
});


/**
popup
**/
var scrollVod = true;

function showLayer(target) {
	if ($(target).css("display") == "none"){
		scrollVod = false
		pauseVideoTotal()
		if (target == '#sharePop'){
			$('html').css({'overflow-y' : 'hidden', 'width' : 'auto'});			
		}
		$(target).show()
	}
}
function closeLayer(target){
	if ($(target).css("display") == "block"){
		pauseVideoTotal()
		scrollVod = false
		$(target).hide()
		if (target == '#sharePop'){
			$('html').css({'overflow-y' : '', 'margin-right' : '0', 'width' : '100%'});		
		}
		if (target == '#eventPop'){
			$('#insert_form')[0].reset();
		}
	}
};


/**
youtube api
**/
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 변수선언
var loadedVod = false;
var nowPlaying = false;
var players = new Array();
var playerInfoList = [
	{id:'player0', controls:'0', autohide:'1', videoId:'Us89oWsYXeY'},
	{id:'player1', controls:'0', autohide:'1', videoId:'wpbDubF2MR8'}
];
var onYouTubeIframeAPIReady = function(){
	if (typeof playerInfoList === 'undefined') return;
	for (var i = 0; i < playerInfoList.length; i++) {
		var curplayer = createPlayer(playerInfoList[i]);
		players[i] = curplayer;
	}
}
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
			mute: 1,
			autohide: 1,
			controls: 1,
			showinfo: 0,
			rel: 0,
			modestbranding: 1,
			wmode: 'transparent'
		}
	});
}

// 로딩완료시
function onPlayerReady(event) {
	loadedVod = true;
}

// 영상재생완료시
function onPlayerStateChange(event) { // 플레이어 상태 변화시 이벤트실행			
	if(event.data == YT.PlayerState.ENDED){
		nowPlaying = false;
	}
}

// 정지
function stopVideo(vodNumber) {
	nowPlaying = false;
	players[vodNumber].stopVideo();
}

// 영상 모두 정지
function stopVideoTotal(){
	nowPlaying = false;
	for(var i = 0; i < players.length; i++){
		players[i].stopVideo();
	}
}

// 일시정지
function pauseVideo(vodNumber) {
	nowPlaying = false;
	players[vodNumber].pauseVideo();
}

// 영상 모두 일시정지
function pauseVideoTotal(){
	nowPlaying = false;
	for(var i = 0; i < players.length; i++){
		players[i].pauseVideo();
	}
}

// 다른영상 일시정지 후 영상재생
function playVod(vodNumber){
	players[vodNumber]/*.seekTo(0)*/.playVideo(); // 매번 처음부터 재생 제거
	nowPlaying = true;
}

// 다른영상 일시정지 후 영상재생
function playVideo(vodNumber){
	if (loadedVod) {
		if (nowPlaying) {
			pauseVideoTotal();
		}
		players[vodNumber]/*.seekTo(0)*/.playVideo(); // 매번 처음부터 재생 제거
		nowPlaying = true;
	}
}


/**
image download
**/
function imgDownload(imageURL, fileName) {
	var img = new Image();
		img.crossOrigin = "Anonymous";
		img.id = "getshot";
		img.src = imageURL;
		document.body.appendChild(img);
		
	var a = document.createElement("a");
		a.href = getshot.src;
		a.download = fileName;
		a.click();
		document.body.removeChild(img);
	showLayer('#sharePop')
}
	


/**
scroll
**/
$(window).scroll(function(){
	if (scrollVod){
		if ($(window).scrollTop() >= $('.viewAnim').offset().top - $(window).height()/2){
		//if ($(window).scrollTop() >= $('.viewAnim').offset().top - ($(window).height()*0.9) && $(window).scrollTop() < $('.viewAnim').offset().top){
			$('.viewAnim').addClass('on')
			playVideo(0)
			scrollVod = false
		}
	}
})