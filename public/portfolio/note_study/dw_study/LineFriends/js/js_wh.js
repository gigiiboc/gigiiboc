$(window).load(function(){
	setTimeout(function() {
		$(".loader").addClass("complt");
	}, "1000");	
})

function onoff (e){ // on&off
	if ($(e).hasClass("on")){
		$(e).removeClass('on').addClass('off')
		// $('body').css({overflow:'visible'})
	} else {
		$(e).removeClass('off').addClass('on')
		//if (e == '.lction_setup'){
		//	$('.lction_not').removeClass('off')
		//}
		// $('body').css({overflow:'hidden'})
	}
}

/*
<iframe src="https://www.youtube.com/embed/62ZmWjhiofM" frameborder="0" allowfullscreen></iframe><a href="#none" class="video_close"></a>	
*/