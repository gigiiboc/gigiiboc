$(function(){
	$('.b').click(function(){
		return $('.c').html(String(Number($('.a').val())*(Number($('.a').val())+1)/2))
	})
})