$(document).ready(function(){ // text line script
	var leth = $('.text_line').length
	for (var i=0; i < leth; i++){
		var ele = $('.text_line').eq(i)
		var eleText = ele.text().split(' ').join('</span>&nbsp;<span style="display:inline-block">')
		ele.html('<span style="display:inline-block">'+eleText+'</span>')
	}
})