<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
	<title>구글맵 API 활용하기</title>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		function initialize() {

			/* https://www.google.co.kr/maps/place/%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C+%EC%84%B1%EB%8F%99%EA%B5%AC+%EC%84%B1%EC%88%98%EC%9D%B4%EB%A1%9C20%EA%B8%B8+57/@37.5420211,127.0622798,18z/data=!4m13!1m7!3m6!1s0x357ca4eb18ed6ab5:0x15a0961acba0792c!2z7ISc7Jq47Yq567OE7IucIOyEseuPmeq1rCDshLHsiJjsnbTroZwyMOq4uCA1Nw!3b1!8m2!3d37.5420198!4d127.0629305!3m4!1s0x357ca4eb18ed6ab5:0x15a0961acba0792c!8m2!3d37.5420198!4d127.0629305
			 
			페이지 하단 좌표값 참고
			*/

			var Y_point			= 37.542168;		// Y 좌표
			var X_point			= 127.062940;		// X 좌표

			var zoomLevel		= 16;						// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼

			var markerTitle		= "레이어 17";				// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
			var markerMaxWidth	= 300;						// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

			// 말풍선 내용
			var contentString	= '<div>' +
			'<h2>레이어 17</h2>'+
			'<p>부제목</p>' +
			'<a href="http://www.nike.co.kr" target="_blank">http://www.nike.co.kr</a>'+
			'</div>';

			var myLatlng = new google.maps.LatLng(Y_point, X_point);
			var mapOptions = {
								zoom: zoomLevel,
								center: myLatlng,
								mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById('map_view'), mapOptions);

			var marker = new google.maps.Marker({
													position: myLatlng,
													map: map,
													title: markerTitle
			});

			var infowindow = new google.maps.InfoWindow(
														{
															content: contentString,
															maxWidth: markerMaxWidth
														}
			);

			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
		}
	</script>
</head>
<body>
	<div onload="initialize()">
		<div id="map_view" style="width:100%;padding-top:70%"></div>
	</div>
</body>
</html>
