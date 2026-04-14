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
<style type="text/css">
h3 {margin:30px 10px 10px;}
p {margin:10px 10px;}
</style>
<h3>onclick=""</h3>
<p>해당 태그를 클릭했을 경우 스크립트가 작동한다.</p>
<p>
	<input type="checkbox" name="c" id="c-1" onclick="alertOpen(this)" /><label for="c-1">요소1</label>
	<input type="checkbox" name="c" id="c-2" onclick="alertOpen(this)" /><label for="c-2">요소2</label>
</p>

<h3>onchange=""</h3>
<p>라디오 버튼이나 체크박스 등에서, 사용자 클릭으로 요소가 변경되었을 경우 스크립트가 작동한다.</p>
<p>
	<input type="radio" name="b" id="b-1" onchange="alertOpen(this)" /><label for="b-1">요소1</label>
	<input type="radio" name="b" id="b-2" onchange="alertOpen(this)" /><label for="b-2">요소2</label>
</p>

<h3>onmouseover="" onmouseout="'"</h3>
<p>해당 태그에 마우스를 올리면 오버효과가 나타난다.</p>
<p>
<img src="https://via.placeholder.com/480X280" onmouseover="this.src='https://via.placeholder.com/480X380'" onmouseout="this.src='https://via.placeholder.com/480X280'"> 
</p>

<script type="text/javascript">
	function alertOpen(ele){
		alert($(ele).next("label").text());
	}
</script>

</body>
</html>
