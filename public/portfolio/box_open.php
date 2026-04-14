<!DOCTYPE html>
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
.open_box {height:300px;width:100%;background:#333}
.close_box {display:none;height:300px;width:100%;background:#333}
</style>

<div><a href="#none" class="open" onclick="openCon('.open_box')">열기</a></div>
<div class="open_box"></div>


<div><a href="#none" class="close" onclick="openCon('.close_box')">열기</a></div>
<div class="close_box"></div>

<script>
/*
function openCon(ele){
	if ($("."+$(ele).attr("class")+"_box").css("display") == "none"){
		$("."+$(ele).attr("class")+"_box").show();
	} else {
		$("."+$(ele).attr("class")+"_box").hide();
	}	
}
*/
function openCon(ele){
	if ($(ele).css("display") == "none"){
		$(ele).show()
	}else{
		$(ele).hide()
	}
}

</script>
</body>
</html>
