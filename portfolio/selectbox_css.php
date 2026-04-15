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

<style type="text/css"> 
.js-SelectBoxBasic {width:120px;font-size:11px;color:#999;} 
.js-SelectBoxBasic div.js-DefaultName {height:24px;line-height:26px;padding:0 0 0 6px;background-color:#fff;border:1px solid #d4d4d4;cursor:pointer;} 
.js-SelectBoxBasic ul {display:none;background-color:#FFF;border-left:1px solid #d4d4d4;border-right:1px solid #d4d4d4;position:absolute;margin:0 0 0 0;padding:0;}
.js-SelectBoxBasic ul.on {display:block;} 
.js-SelectBoxBasic ul li {list-style-type:none;height:24px;line-height:26px;border-bottom:1px solid #d4d4d4;cursor:pointer;padding:0 0 0 6px;} 
</style>

<div class="js-SelectBoxBasic">
	<input type="hidden" value="여름하늘"/>
	<div class="js-DefaultName">선택하세요</div>
	<ul>
		<li data-target="봄하늘">봄하늘</li>
		<li data-target="여름하늘">여름하늘</li>
		<li data-target="가을하늘">가을하늘</li>
		<li data-target="겨울하늘">겨울하늘</li>
	</ul>
</div>

<script type="text/javascript"> 
/*
$(".js-SelectBoxBasic").each(function(){ 
	var SelectVal = $(this).children('input').val(); 
	var SelectDefault = $(this).children('ul').children("#"+SelectVal);
	
	if(SelectVal){ // INPUT TRUE 
		if($(SelectDefault).html()){ 
			$(this).children('.js-DefaultName').html($(SelectDefault).html()); 
		}else{ 
			$(this).children('.js-DefaultName').html("VALUE ERROR"); 
			$(this).children('input').val(""); 
		} 
	} 
}); 
*/
$(".js-SelectBoxBasic").click(function(){
	if (!$(this).children('ul').hasClass('on')){
		$(this).children('ul').addClass('on').css("width",$(".js-SelectBoxBasic").width()+"px");
	} else {
		$(this).children('ul').removeClass('on')
	}
}); 
$(".js-SelectBoxBasic").mouseleave(function() { 
	$(this).children('ul').removeClass('on')
}); 
$(".js-SelectBoxBasic ul li").click(function(){
	$(this).parent('ul').siblings('.js-DefaultName').html($(this).text());
	$(this).parent('ul').siblings('input').val($(this).attr('data-target'));
});
</script> 




</body>

</html>
