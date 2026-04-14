$(function(){
	$('.btn').click(function(){
		var ele = 0;
		$('.input').each(function(){
			ele += Number($(this).val())
		})
		for (var i = 0; i < $('.input').length; i++){
			$('<li class="ctt"><span class="ttl">'+ i +'투표</span><div class="graph"><span class="box box_'+ i +'" style="width:'+ (Number($('.val_'+i).val()) / ele) * 100 +'%"></span></div><span class="txt text_'+ i +'">'+ Math.round((Number($('.val_'+i).val()) / ele) * 1000)/10 +'%</span></li>').appendTo('.ctt_box');
		}
	})
})