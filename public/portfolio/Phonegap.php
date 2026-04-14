<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
<style>
</style>
<div style="padding:20px;border:1px solid #d1d1d1;line-height:1.8;margin:20px;">
phonegap을 쓸때 안드로이드 설치 아이콘 및 제목 바꾸는 법. <br><br><br>
아이콘 바꾸는 거야 아래 경로의 아이콘 이미지를 바꾸면 되었다. (아이콘명은 다를 수도 있다)<br>
/ic_launcher-web.png <br>
/res/drawable-hdpi/ic_launcher.png<br>
/res/drawable-ldpi/ic_launcher.png<br>
/res/drawable-mdpi/ic_launcher.png<br>
/res/drawable-xdpi/ic_launcher.png<br><br>
같은 이미지가 /bin/res/ 아래 있을 수도 있는데 그럼 이것도 덮어쓰면 된다...<br>
아, 이클립스 프로젝트를 F5 눌러서 갱신하는것도 잊으면 안된다.<br>
만일 바꾼 이미지 관련해서 x표시가 뜨면 그냥 이미지를 한번 더 덮어씌우는 걸로 해결된다... 왜그런지 잘 모르겠지만 말이지.<br>
앱 타이틀 바꾸는건 좀 다르다.  2가지를 바꿔야 한다.<br><br>
1. /AndroidManifest.xml 에 있는 application 테그 안의  android:label 을 바꾸면 process name이 바뀐다.<br>
2. /res/values/strings.xml 에 있는 string name="app_name" 을 바꿔주면 설치된 앱의 명칭이 바뀐다.<br><br>
둘다 바꿔줘야지, 안그러면 설치된 앱 이름 따로, 프로세스에서 죽여야하는 앱 이름 따로 돌아간다...<br>

</div>
<div style="padding:20px;border:1px solid #d1d1d1;line-height:1.8;margin:20px;">
폰갭 아이콘 수정<br><br>
-폰갭 프로젝트 폴더 안에 *.png 로 검색하여, 모든 아이콘 모양을 바꾸어 준다.<br>
여러가지 크기의 이미지 파일이 있는데, 모두 원하는 아이콘으로 바꾸어 준다.(해상도 그대로 유지)<br><br><br>
폰갭 어플 네임 변경<br><br>
-폰갭 프로젝트 폴더 안에 config 로 검색한다. config.xml 파일이 나의 경우 3개 나온다.<br>
3개 모두 열어서 <name></name> 사이에 있는 HelloCordova 라는 처음 네임을 바꾸어 준다.<br>
3개 모두 바꾸어야 앱 네임이 바뀐다. 모두 하지 않으면 원래대로 돌아감 나의 경우는..<br>
</div>
<script>
</script>

</body>

</html>
