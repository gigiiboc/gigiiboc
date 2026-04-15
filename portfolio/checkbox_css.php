<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko"> 
<head>
<title>gnb lnb dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<style type="text/css">
.checkmenu {display:block;width:16px;height:16px;border:1px solid #dadada;text-indent:-999em}
.checkmenu em {text-indent:-999em}
.checkmenu.checked em {display:block;background:red}
</style>
</head>
 
<body>
<div>
 <span class="checkmenu"><em>체크</em></span>
 <input type="checkbox" id="check1" name="" value="" />
 <label for="check1">영어 스터디</label>
 <span class="checkmenu"><em>체크</em></span>
 <input type="checkbox" id="check2" name="" value="" />
 <label for="check2">영어 스터디</label>
</div>
<script type="text/javascript">
$("label").click(function(){ // 레이블 클릭시
	$(this).prev().prev(".checkmenu").toggleClass("checked"); // 체크메뉴의 클래스를 주거나 지운다.
});
$(".checkmenu").click(function(){ // 체크메뉴를 클릭했을시
	$(this).toggleClass("checked"); // 체크메뉴의 클래스를 주거나 지우고
	$(this).next(':checkbox').each(function(){
		this.checked = !this.checked; // 체크박스의 체크 여부를 반대로 한다.
	});
});
</script>
</body>
</html> 