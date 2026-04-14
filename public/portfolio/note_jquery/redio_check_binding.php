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
	라디오버튼<br>
	<input type="radio" name="radio" value="신용카드" checked>신용카드<br>
	<input type="radio" name="radio" value="무통장입금">무통장입금<br>
	<input type="radio" name="radio" value="휴대폰결제">휴대폰결제<br><br><br>

	체크박스<br>	
	<input type="checkbox" name="checkbox" value="신용카드" checked>신용카드<br>
	<input type="checkbox" name="checkbox" value="무통장입금">무통장입금<br>
	<input type="checkbox" name="checkbox" value="휴대폰결제">휴대폰결제<br><br><br>

	<script>
		$("input[name='radio']").change(function(){
			console.log($("input[name='radio']:checked").val());			
		});

		$("input[name='checkbox']").change(function(){
			if(this.checked){
				console.log($("input[name='checkbox']:checked").val());	
			}
		});
	</script>

</body>
</html>
