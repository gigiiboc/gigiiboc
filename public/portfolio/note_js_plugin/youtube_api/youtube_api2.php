<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<style>
		body {max-width: 1200px;margin: 5% auto;}
		.ytcon {position:relative;width: 50%;padding-top: 28.125%;}
		.ytcon .playerCover {overflow:hidden;position:absolute;left:0;top:0;z-index:2;width:100%;height:100%;z-index:2}
		.ytcon .vodArea {overflow:hidden;position:absolute;left:0;top:0;z-index:1;width:100%;height:100%;}
		.ytcon .vodArea.playing {z-index:500;}
	</style>
	<div class="ytwrap">
		<div class="ytcon">
			<div class="vodArea vod1">
				<div id="player0" class="vodplayer"></div>
			</div>
		</div>
		<div class="ytcon">
			<div class="vodArea vod2">
				<div id="player1" class="vodplayer"></div>
			</div>
		</div>
	</div>
	<script>
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// 변수선언
		var loadedVod = false;
		var nowPlaying = false;
		var players = new Array();
		var playerInfoList = [
			{id:'player0', controls:'0', autohide:'1', videoId:'wpbDubF2MR8'},
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
		function playVideo(vodNumber){
			if (loadedVod) {
				if (nowPlaying) {
					pauseVideoTotal();
				}
				players[vodNumber]/*.seekTo(0)*/.playVideo(); // 매번 처음부터 재생 제거
				nowPlaying = true;
			}
		}
	</script>

	<div style="margin-top:5%;">
		유튜브 플레이어 매개변수<br><br>
		<table class="details responsive">
			<colgroup>
				<col width="200px">
				<col width="*">
			</colgroup>
			<tbody>
				<tr>
					<td>
						<h3 id="autoplay"><code class="notranslate" itemprop="property">autoplay</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>0</span></code>입니다. 플레이어가 로드될 때 초기 동영상을 자동재생할지 여부를 설정합니다.
					</td>
				</tr>
	
				<tr>
					<td>
						<h3 id="cc_load_policy"><code class="notranslate" itemprop="property">cc_load_policy</code></h3>
					</td>
					<td>
						값: <code><span>1</span></code>. 기본값은 사용자 환경설정에 따라 다릅니다. <code><span>1</span></code>로 설정하면 사용자가 자막을 끈 경우에도 자막이 기본적으로 표시됩니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="color"><code class="notranslate" itemprop="property">color</code></h3>
					</td>
					<td>
						이 매개변수는 시청자가 동영상에서 이미 본 부분을 강조표시하기 위해 플레이어의 동영상 진행률 표시줄에서 사용할 색상을 지정합니다. 유효한 매개변수 값은 <code><span>red</span></code> 및 <code><span>white</span></code>이며 기본적으로 플레이어는 동영상 진행률 표시줄에서 빨간색을 사용합니다. 색상 옵션에 대한 자세한 내용은 <a href="http://apiblog.youtube.com/2011/08/coming-soon-dark-player-for-embeds.html?hl=ko">YouTube API 블로그</a>를 참조하세요.<br><br><strong>참고:</strong> <code><span>color</span></code> 매개변수를 <code><span>white</span></code>로 설정하면 <code><a href="#modestbranding"><span>modestbranding</span></a></code> 옵션이 사용 중지됩니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="controls"><code class="notranslate" itemprop="property">controls</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code>, <code><span>1</span></code> 또는 <code><span>2</span></code>. 기본값은 <code><span>1</span></code>입니다. 이 매개변수는 동영상 플레이어 컨트롤을 표시할지 여부를 나타냅니다. Flash 플레이어를 로드하는 IFrame 삽입의 경우 이 매개변수가 플레이어에서 컨트롤이 표시되는 시점 및 플레이어가 로드되는 시점도 정의합니다.
						<p></p>
						<ul>
							<li><code>controls=0</code> – 플레이어 컨트롤이 플레이어에서 표시되지 않습니다. IFrame 삽입의 경우 Flash 플레이어가 즉시 로드됩니다.</li>
							<li><code>controls=1</code> – 플레이어 컨트롤이 플레이어에서 표시됩니다. IFrame 삽입의 경우 컨트롤이 즉시 표시되고 Flash 플레이어 또한 즉시 로드됩니다.</li>
							<li><code>controls=2</code> – 플레이어 컨트롤이 플레이어에서 표시됩니다. IFrame 삽입의 경우 사용자가 동영상 재생을 시작한 후 컨트롤이 표시되고 Flash 플레이어가 로드됩니다.</li>
						</ul>
						<p></p>
						<strong>참고:</strong> 매개변수 값 <code><span>1</span></code> 및 <code><span>2</span></code>는 동일한 사용자 환경을 제공하기 위해 마련되었지만 <code><span>controls=2</span></code>는 IFrame 삽입에 <code><span>controls=1</span></code>보다 개선된 성능을 제공합니다. 현재 두 값에는 동영상 제목의 글꼴 크기와 같은 몇 가지 시각적인 플레이어 상의 차이가 있습니다. 그러나 두 값의 차이점이 사용자에게 완전히 투명하게 보이면 기본 매개변수 값이 <code><span>1</span></code>에서 <code><span>2</span></code>로 변경될 수도 있습니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="disablekb"><code class="notranslate" itemprop="property">disablekb</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>0</span></code>입니다. <code><span>1</span></code>로 설정하면 플레이어 키보드 컨트롤이 사용 중지됩니다. 키보드 컨트롤은 다음과 같습니다.
						<p></p>
						<ul>
							<li>스페이스바: 재생/일시중지</li>
							<li>왼쪽 화살표: 현재 동영상에서 뒤로 10% 이동</li>
							<li>오른쪽 화살표: 현재 동영상에서 앞으로 10% 이동</li>
							<li>위쪽 화살표: 볼륨 높임</li>
							<li>아래쪽 화살표: 볼륨 낮춤</li>
						</ul>
						<p></p>
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="enablejsapi"><code class="notranslate" itemprop="property">enablejsapi</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>0</span></code>입니다. 이 매개변수를 <code><span>1</span></code>로 설정하면 JavaScript API를 사용하도록 설정됩니다. JavaScript API에 대한 자세한 내용과 사용 방법은 <a href="https://developers.google.com/youtube/js_api_reference?hl=ko">JavaScript API 설명서</a>를 참조하세요.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="end"><code class="notranslate" itemprop="property">end</code></h3>
					</td>
					<td>
						값: 양의 정수. 이 매개변수는 플레이어가 동영상 재생을 중지해야 할 시간을 동영상 시작 부분부터 초 단위로 측정하여 지정합니다. 시간은 동영상을 로드하거나 대기열에 넣기 위해 YouTube Player API 함수에서 사용하는 <code><span>start</span></code> 플레이어 매개변수 또는 <code><span>startSeconds</span></code> 매개변수의 값으로 측정되는 것이 아니라 동영상 시작 부분부터 측정됩니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="fs"><code class="notranslate" itemprop="property">fs</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>1</span></code>이며 전체화면 버튼이 표시됩니다. 이 매개변수를 <code><span>0</span></code>으로 설정하면 전체화면 버튼이 표시되지 않습니다.<br><br>
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="hl"><code class="notranslate" itemprop="property">hl</code></h3>
					</td>
					<td>
						플레이어의 인터페이스 언어를 설정합니다. 매개변수 값은 <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php">ISO 639-1 두 문자 언어 코드</a>입니다. IETF 언어 태그(BCP 47)와 같이 다른 언어 입력 코드를 사용해도 올바르게 처리될 수 있습니다.<br><br>인터페이스 언어는 플레이어의 툴팁에 사용되며 기본 자막 트랙에도 영향을 줍니다. YouTube는 사용자의 개별 언어 환경설정과 자막 트랙의 사용 가능 여부에 따라 특정 사용자의 자막 트랙 언어를 다르게 선택할 수 있습니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="iv_load_policy"><code class="notranslate" itemprop="property">iv_load_policy</code></h3>
					</td>
					<td>
						값: <code><span>1</span></code> 또는 <code><span>3</span></code>. 기본값은 <code><span>1</span></code>입니다. <code><span>1</span></code>로 설정하면 동영상 특수효과가 기본적으로 표시됩니다. 반면에 <code><span>3</span></code>으로 설정하면 동영상 특수효과가 기본적으로 표시되지 않습니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="list"><code class="notranslate" itemprop="property">list</code></h3>
					</td>
					<td>
						<code><span>list</span></code> 매개변수는 <code><a href="#listType"><span>listType</span></a></code> 매개변수와 함께 플레이어에서 로드될 콘텐츠를 식별합니다.<br>
						<p></p>
						<ul>
							<li><code><a href="#listType">listType</a></code> 매개변수 값이 <code>search</code>인 경우 <code>list</code> 매개변수 값이 검색어를 지정합니다.</li>
							<li><code><a href="#listType">listType</a></code> 매개변수 값이 <code>user_uploads</code>인 경우 <code>list</code> 매개변수 값이 로드할 동영상을 업로드한 YouTube 채널을 식별합니다.</li>
							<li><code><a href="#listType">listType</a></code> 매개변수 값이 <code>playlist</code>인 경우 <code>list</code> 매개변수 값이 YouTube 재생목록 ID를 지정합니다. 매개변수 값에서 아래 예에 표시된 것처럼 재생목록 ID 앞에 <code>PL</code> 문자를 붙여야 합니다.<br>
								<pre><div class="devsite-code-button-wrapper"><div class="devsite-code-button gc-analytics-event material-icons devsite-dark-code-button" data-category="Site-Wide Custom Events" data-label="Dark Code Toggle" track-type="exampleCode" track-name="darkCodeToggle" data-tooltip-align="b,c" data-tooltip="어두운 코드 테마" aria-label="어두운 코드 테마" data-title="어두운 코드 테마"></div></div>http://www.youtube.com/embed?listType=playlist&amp;list=PLC77007E23FF423C6</pre>
							</li>
						</ul>
						<p></p>
						<strong>참고:</strong> <code><a href="#list"><span>list</span></a></code> 및 <code><span>listType</span></code> 매개변수에 대한 값을 지정하는 경우 IFrame 삽입 URL에서 동영상 ID를 지정할 필요가 없습니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="listtype"><code class="notranslate" itemprop="property">listType</code></h3>
					</td>
					<td>
						<code><span>listType</span></code> 매개변수는 <code><a href="#list"><span>list</span></a></code> 매개변수와 함께 플레이어에서 로드할 콘텐츠를 식별합니다. 유효한 매개변수 값은 <code><span>playlist</span></code>, <code><span>search</span></code> 및 <code><span>user_uploads</span></code>입니다.<br><br><code><a href="#list"><span>list</span></a></code> 및 <code><span>listType</span></code> 매개변수에 대한 값을 지정하는 경우 IFrame 삽입 URL에서 동영상 ID를 지정할 필요가 없습니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="loop"><code class="notranslate" itemprop="property">loop</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>0</span></code>입니다. 단일 동영상 플레이어의 경우 <code><span>1</span></code>로 설정하면 플레이어가 초기 동영상을 반복해서 재생합니다. 재생목록 플레이어(또는 맞춤 플레이어)의 경우 플레이어가 전체 재생목록을 재생한 다음 첫 번째 동영상부터 다시 시작합니다.<br><br><strong>참고:</strong> 이 매개변수는 AS3 플레이어 및 AS3 또는 HTML5 플레이어를 로드할 수 있는 IFrame 삽입에서 제한적으로 지원됩니다. 현재 <code><span>loop</span></code> 매개변수는 <code><a href="#playlist"><span>playlist</span></a></code> 매개변수와 함께 사용하는 경우에만 AS3 플레이어에서 작동합니다. 단일 동영상을 반복 재생하려면 <code><span>loop</span></code> 매개변수 값을 <code><span>1</span></code>로 설정하고 <code><a href="#playlist"><span>playlist</span></a></code> 매개변수 값을 Player API URL에서 이미 지정한 동일한 동영상 ID로 설정합니다.<br>
						<pre><div class="devsite-code-button-wrapper"><div class="devsite-code-button gc-analytics-event material-icons devsite-dark-code-button" data-category="Site-Wide Custom Events" data-label="Dark Code Toggle" track-type="exampleCode" track-name="darkCodeToggle" data-tooltip-align="b,c" data-tooltip="어두운 코드 테마" aria-label="어두운 코드 테마" data-title="어두운 코드 테마"></div></div>http://www.youtube.com/v/<strong>VIDEO_ID</strong>?version=3&amp;loop=1&amp;playlist=<strong>VIDEO_ID</strong></pre>
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="modestbranding"><code class="notranslate" itemprop="property">modestbranding</code></h3>
					</td>
					<td>
						이 매개변수를 통해 YouTube 로고를 표시하지 않는 YouTube 플레이어를 사용할 수 있습니다. YouTube 로고가 컨트롤바에 표시되지 않도록 하려면 매개변수 값을 <code><span>1</span></code>로 설정합니다. 하지만 사용자가 마우스 포인터를 플레이어 위에 올려놓으면&nbsp;작은 <code><span>YouTube</span></code> 텍스트 라벨이 일시중지된 동영상의 오른쪽 상단에 표시됩니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="origin"><code class="notranslate" itemprop="property">origin</code></h3>
					</td>
					<td>
						이 매개변수는 IFrame API에 대한 추가 보안 수단을 제공하며 IFrame 삽입에서만 지원됩니다. <code><a href="#enablejsapi"><span>enablejsapi</span></a></code> 매개변수를 <code><span>1</span></code>로 설정하여 IFrame API를 사용하는 경우 도메인을 항상 <code><span>origin</span></code> 매개변수 값으로 지정해야 합니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="playlist"><code class="notranslate" itemprop="property">playlist</code></h3>
					</td>
					<td>
						값은 재생할 동영상 ID를 쉼표로 구분한 목록입니다. 값을 지정하는 경우 URL 경로에서 지정한 <code><span>VIDEO_ID</span></code>가 먼저 재생되며 <code><span>playlist</span></code> 매개변수에서 지정한 동영상이 그 후에 재생됩니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="playsinline"><code class="notranslate" itemprop="property">playsinline</code></h3>
					</td>
					<td>
						이 매개변수는 iOS의 HTML5 플레이어에서 동영상을 인라인으로 재생할지 전체화면으로 재생할지 여부를 제어합니다. 유효한 값은 다음과 같습니다.
						<p></p>
						<ul>
							<li><code>0</code>: 이 값을 지정하면 전체화면으로 재생됩니다. 현재 기본값이지만 기본값은 변경될 수 있습니다.</li>
							<li><code>1</code>: 이 값을 지정하면 <code>TRUE</code>로 설정된 <code>allowsInlineMediaPlayback</code> 속성과 함께 만들어진 <code>UIWebViews</code>이 인라인으로 재생됩니다.</li>
						</ul>
						<p></p>
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="rel"><code class="notranslate" itemprop="property">rel</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 기본값은 <code><span>1</span></code>입니다. 이 매개변수는 초기 동영상의 재생이 종료되면 플레이어에서 관련 동영상을 표시할지 여부를 나타냅니다.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="showinfo"><code class="notranslate" itemprop="property">showinfo</code></h3>
					</td>
					<td>
						값: <code><span>0</span></code> 또는 <code><span>1</span></code>. 매개변수의 기본값은 <code><span>1</span></code>입니다. 매개변수 값을 <code><span>0</span></code>으로 설정하면 플레이어에서 동영상 재생을 시작하기 전에 동영상 제목 및 업로더와 같은 정보를 표시하지 않습니다.<br><br>플레이어가 재생목록을 로드하고 있고 매개변수 값을 명시적으로 <code><span>1</span></code>로 설정한 경우 로드 후에 플레이어에 재생목록에 있는 동영상에 대한 미리보기 이미지도 표시됩니다.이 기능은 재생목록을 로드할 수 있는 유일한 플레이어인 AS3 플레이어에서만 지원된다는 점에 유의하세요.
					</td>
				</tr>
				<tr>
					<td>
						<h3 id="start"><code class="notranslate" itemprop="property">start</code></h3>
					</td>
					<td>
						값: 양의 정수. 이 매개변수는 플레이어가 동영상 시작 부분에서 특정 시간(단위: 초) 이후에 동영상 재생을 시작하도록 합니다. 플레이어는 <code><a href="https://developers.google.com/youtube/js_api_reference?hl=ko#seekTo"><span>seekTo</span></a></code> 함수와 비슷하게 지정한 시간에 가장 가까운 키프레임을 찾는다는 점에 유의하세요. 즉, 재생 헤드에서 요청한 시간의 바로 앞 부분을 찾을 수도 있으며 일반적으로 2초 이내입니다.
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<style>
		.details {border-top:1px solid #d1d1d1;border-left:1px solid #d1d1d1}
		.details tr {}
		.details th,
		.details td {padding:10px;border-left:1px solid #d1d1d1;border-bottom:1px solid #d1d1d1;line-height:1.5}
	</style>
	<a href="https://developers.google.com/youtube/iframe_api_reference" target="_blank">https://developers.google.com/youtube/iframe_api_reference</a>
</body>
</html>