<!DOCTYPE html>
<html lang="en">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<script src="/note/note_js_plugin/TweenMax/TweenMax.min.js"></script>
</head>
<body>
	<script src="swiper.min.js"></script>
	<link rel="stylesheet" href="swiper.min.css">
	<div id="innerBg" style="width:100%;height:300px;"></div>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" data-color="#999" style="background:#000;height:500px;width:300px"></div>
			<div class="swiper-slide" data-color="#666" style="background:#333;height:500px;width:300px"></div>
			<div class="swiper-slide" data-color="#333" style="background:#666;height:500px;width:300px"></div>
			<div class="swiper-slide" data-color="#000" style="background:#999;height:500px;width:300px"></div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>

	<script>
	var swiper01 = new Swiper('.swiper-container', {
		autoplay: {
			delay: 0,
		},
		freeMode: true,
		slidesPerView: 'auto',
		centeredSlides: true,
		spaceBetween: 0,
		loop: true,
		pagination: '.swiper-pagination',
		paginationClickable: true,
		// freeMode: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		onSlideChangeStart: function(e){
			console.log(e.realIndex)
			var bgColor = $('.swiper-container .swiper-slide.swiper-slide-active').attr('data-color')
			$('#innerBg').animate({
				backgroundColor: bgColor
			});
		}
	});
	function swiperNext (){
		swiper01.slideNext(true, 300)
		//swiper01.slideTo(0, 300, true);
	}
	function swiperPrev (){
		swiper01.slidePrev(true, 300)
	}
	</script>

	<style>
		.markdown-body table {display: block;width: 100%;overflow: auto;}
		.markdown-body table tr {background-color: #fff;border-top: 1px solid #c6cbd1;}
		.markdown-body table tr:nth-child(2n) {background-color: #f6f8fa;}
		.markdown-body table th, .markdown-body table td {padding: 6px 13px;border: 1px solid #dfe2e5;}
		.markdown-body table a {color: #0366d6;text-decoration: none;}
	</style>
	<div class="markdown-body">
		<table>
			<colgroup>
				<col width="20%">
				<col width="10%">
				<col width="10%">
				<col width="">
			</colgroup>
			<thead>
				<tr>
					<th>Option</th>
					<th>Type</th>
					<th>Default</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>slidesPerView</td>
					<td>number or 'auto'</td>
					<td>1</td>
					<td>한 화면에 보여질 개체 수. 소수점 사용 가능. auto 시 임의 넓이 설정 가능.</td>
				</tr>
				<tr>
					<td>centeredSlides</td>
					<td>boolean</td>
					<td>false</td>
					<td>개체 중앙정렬 사용여부</td>
				</tr>
				<tr>
					<td>spaceBetween</td>
					<td>number</td>
					<td>0</td>
					<td>개체 사이사이의 margin 값 지정.</td>
				</tr>
				<tr>
					<td>loop</td>
					<td>boolean</td>
					<td>false</td>
					<td>개체 슬라이드 반복여부</td>
				</tr>
				<tr>
					<td>pagination</td>
					<td>string / HTMLElement</td>
					<td>null</td>
					<td>페이징(도트 혹은 숫자)</td>
				</tr>
				<tr>
					<td>paginationClickable</td>
					<td>boolean</td>
					<td>false</td>
					<td>클릭 가능 여부</td>
				</tr>
				<tr>
					<td>freeMode</td>
					<td>boolean</td>
					<td>false</td>
					<td></td>
				</tr>
				<tr>
					<td>nextButton</td>
					<td>string / HTMLElement</td>
					<td>null</td>
					<td></td>
				</tr>
				<tr>
					<td>prevButton</td>
					<td>string / HTMLElement</td>
					<td>null</td>
					<td></td>
				</tr>
				<tr>
					<td>initialSlide</td>
					<td>number</td>
					<td>0</td>
					<td>시작 슬라이드 지정</td>
				</tr>
				<tr>
					<td>onSlideChangeStart(swiper)</td>
					<td>function</td>
					<td></td>
					<td>슬라이드가 체인지 된 후 발생하는 function 지정</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>