<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>

<script>
function getDayName(a,b){
  var date = new Date(2016, (a - 1), b);
	console.log(date.toString())
    return date.toString().slice(0, 3).toUpperCase();
}

//아래 코드는 테스트를 위한 코드입니다.
console.log(getDayName(5,24));
</script>

</body>

</html>
