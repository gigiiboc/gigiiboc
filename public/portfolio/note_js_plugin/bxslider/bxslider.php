<!DOCTYPE html>
<html>
	<head>
		<title>::: note :::</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
		<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
		<link rel="stylesheet" type="text/css" href="/note/note_js_plugin/bxslider/jquery.bxslider.css">
		<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
		<script src="/note/note_js_plugin/bxslider/jquery.bxslider.js"></script>
		<script src="/note/note_js_plugin/bxslider/jquery.fitvids.js"></script>

	</head>
	<body>
		<style>
			/*===========================================================================
			메인배너
			===========================================================================*/
			#mbanner {position:relative; width:100%; height:492px; margin:0 auto; overflow:hidden;}
			#mbanner .mtopslider li {text-align:center; height:492px}

			/* 플레이 재생버튼 */
			#mbanner .bx-wrapper .bx-controls-auto {position:absolute; right:10px; bottom:20px;}
			
			/* 버튼 위치 */
			#mbanner .bx-wrapper .bx-pager {position:absolute; bottom:20px; text-align:center;}
			
			/* 버튼 평상시 속성 */
			#mbanner .bx-wrapper .bx-pager.bx-default-pager a {transition:0.3s; display:block; width:10px; height:10px; font-size:0px; margin:0px 2px; border:2px solid #fff; overflow:hidden}

			/* 버튼 선택시 속성 */
			#mbanner .bx-wrapper .bx-pager.bx-default-pager a:hover,
			#mbanner .bx-wrapper .bx-pager.bx-default-pager a.active,
			#mbanner .bx-wrapper .bx-pager.bx-default-pager a:focus {background:#fff;}

			/*===========================================================================
			s메인배너
			===========================================================================*/
			#sbanner {position:relative; width:100%; height:492px; margin:0 auto; overflow:hidden;}
			#sbanner .stopslider li {text-align:center; height:492px}

			/* 플레이 재생버튼 */
			#sbanner .bx-wrapper .bx-controls-auto {position:absolute; right:10px; bottom:20px;}
			
			/* 버튼 위치 */
			#sbanner .bx-wrapper .bx-pager {position:absolute; bottom:20px; text-align:center;}
			
			/* 버튼 평상시 속성 */
			#sbanner .bx-wrapper .bx-pager.bx-default-pager a {transition:0.3s; display:block; width:10px; height:10px; font-size:0px; margin:0px 2px; border:2px solid #fff; overflow:hidden}

			/* 버튼 선택시 속성 */
			#sbanner .bx-wrapper .bx-pager.bx-default-pager a:hover,
			#sbanner .bx-wrapper .bx-pager.bx-default-pager a.active,
			#sbanner .bx-wrapper .bx-pager.bx-default-pager a:focus {background:#fff;}

			/*===========================================================================
			n메인배너
			===========================================================================*/
			#nbanner {position:relative; width:100%; height:492px; margin:0 auto; overflow:hidden;}
			#nbanner .ntopslider li {text-align:center; height:492px}

			/* 플레이 재생버튼 */
			#nbanner .bx-wrapper .bx-controls-auto {position:absolute; right:10px; bottom:20px;}
			
			/* 버튼 위치 */
			#nbanner .bx-wrapper .bx-pager {position:absolute; bottom:20px; text-align:center;}
			
			/* 버튼 평상시 속성 */
			#nbanner .bx-wrapper .bx-pager.bx-default-pager a {transition:0.3s; display:block; width:10px; height:10px; font-size:0px; margin:0px 2px; border:2px solid #fff; overflow:hidden}

			/* 버튼 선택시 속성 */
			#nbanner .bx-wrapper .bx-pager.bx-default-pager a:hover,
			#nbanner .bx-wrapper .bx-pager.bx-default-pager a.active,
			#nsbanner .bx-wrapper .bx-pager.bx-default-pager a:focus {background:#fff;}
		</style>

		<div id="mbanner">
			<ul class="mtopslider">
				<li style="background:#111"></li>
				<li style="background:#222"></li>
				<li style="background:#333"></li>
				<li style="background:#444"></li>
				<li style="background:#555"></li>
				<li style="background:#666"></li>
			</ul>
		</div>
		<div id="sbanner">
			<ul class="stopslider">
				<li style="background:#333"></li>
				<li style="background:#c7282d"></li>
				<li style="background:#999"></li>
			</ul>
		</div>
		<div id="nbanner">
			<ul class="ntopslider">
				<li style="background:#999"></li>
				<li style="background:#c7282d"></li>
				<li style="background:#333"></li>
			</ul>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".mtopslider").bxSlider({
					auto: true,
					 // slideWidth: 5000,슬라이드 안쪽 내용 가로 사이즈 기본 0
					slideZIndex: 0, // 슬라이드 레이어 위치 값
					speed: 1000, // 슬라이드 속도
					mode: "horizontal", // 전환모드 'horizontal', 'vertical', 'fade'
					easing: "swing", // 슬라이드 에니메이션 easing-in, swing
					autoControls: true, // 플레이 정지버튼 출력 여부
					controls: true, //좌우버튼 출력 여부
					infiniteLoop: false, // 슬라이드 끝일 경우 되돌림 여부
					hideControlOnEnd: false, //슬라이드 끝일 경우 화살표 보임 여부
					moveSlides: 1 // 슬라이드 한번에 이동 개수
				});
				$(".stopslider").bxSlider({

				});
				$(".ntopslider").bxSlider({
					auto: true,
					 // slideWidth: 5000,슬라이드 안쪽 내용 가로 사이즈 기본 0
					slideZIndex: 0, // 슬라이드 레이어 위치 값
					speed: 1000, // 슬라이드 속도
					mode: "fade", // 전환모드 'horizontal', 'vertical', 'fade'
					easing: "swing", // 슬라이드 에니메이션 easing-in, swing
					autoControls: true, // 플레이 정지버튼 출력 여부
					controls: true, //좌우버튼 출력 여부
					infiniteLoop: true, // 슬라이드 끝일 경우 되돌림 여부
					hideControlOnEnd: false, //슬라이드 끝일 경우 화살표 보임 여부
					captions: false, // title 설명글을 보여 줄 경우
					video: false, // 동영상이 있을 경우
					adaptiveHeight: false, //높이 자동 조절 여부
					minSlides: 1, // 최소 출력 개수
					maxSlides: 3, // 최대 출력 개수
					slideMargin: 0, // 슬라이드 간격
					moveSlides: 1, // 슬라이드 한번에 이동 개수
					randomStart: false, // 랜덤 슬라이드
					responsive: true, // 해상도에 따른 자동 크리 변경
					useCSS: false, //css를 별도 적용 할 경우		
					startText: 'Start',
					stopText: 'Stop',
					//pagerCustom: '#bx-pager', // 탭 방식 구현시 탭메뉴 스타일 명 
					onSliderLoad: function () { //슬라이드 활성화 될 때
						$(".mtitle").addClass("animated bounceInRight");
						$(".mtext").addClass("animated bounceInUp");
					},
					onSlideAfter: function(){
						$(".mtitle").addClass("animated bounceInLeft");
						$(".mtext").addClass("animated bounceInUp");
					},
					onSlideBefore: function(){
						$(".title").removeClass("animated bounceInLeft");
						$(".text").removeClass("animated bounceInLeft");
					}
				});
			}); 		
		</script>
	</body>
</html>