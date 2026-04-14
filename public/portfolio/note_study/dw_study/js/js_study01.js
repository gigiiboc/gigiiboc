function text_search (){
	var li_length = $('.b > li').length; // 항목 개수
	for ( var i=0; i<li_length; i++){
		var obj = $('.a').val();
		var objLeng = obj.length; // 입력된 글자수
		var objSubstr = obj.substr(0, objLeng); // 입력된 글자 수까지만 텍스트를 담고
		var li_focus = $('.b > li').eq(i)
		if (objSubstr.toUpperCase() == li_focus.text().substr(0, objLeng).toUpperCase()){ // 담긴 텍스트와 키워드에 담긴 텍스트를 모두 대문자로 변경 후 for문으로 하나씩 비교
			li_focus.css('display', 'inline-block') // 같으면 노출
		} else {
			li_focus.css('display', 'none') // 아니면 숨김
		}
	}	
}
$(function (){
	$('.a').on('keyup', function(){
		text_search();		
	})
	$('.b > li').on('click', function(){
		$('.a').val($(this).text())	
		text_search();
	})
});