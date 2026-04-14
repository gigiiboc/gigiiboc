/*
$(function(){
	function fade_bg (){
		var box = $('#background');
		var length = $('#background div').length; // 슬라이드 수
		var	last = $('#background div').eq(length-1); // 마지막 슬라이드 선택
		var	scd_last = $('#background div').eq(length-2); // 뒤에서 두번째 슬라이드 선택

		scd_last.animate({width:'110%',height:'110%',margin:'-5%'},500,'swing'); 
		last.animate({opacity:'0'},500,'swing',function(){ // '-2' 슬라이드가 확대됨과 동시에 '-1' 슬라이드가 사라짐.  
			$(this).animate({width:'100%',height:'100%',margin:'0'},500,'swing').prependTo(box).css('opacity','1') // '-1' 슬라이드가 완전히 사라지면 크기가 원래로 돌아옴과 동시에 box의 가장 앞으로 이동함
		})

		scd_last.animate(
			{
				width: '110%',
				height: '110%',
				margin: '-5%'
			}, 500, 'swing', function() {
				// callback here
			}
		);

	}
		
	settime = setInterval(fade_bg, 2000) // 무한 반복
})
*/

$(function(){
	// 초기 설정
	$('#background div').eq(0).css('z-index','2');
	$('#background div').eq(1).css('z-index','1');

	function fade_bg (){
		var box = $('#background');
		var length = $('#background div').length; // 슬라이드 수
		var	fir = $('#background div').eq(0); // 첫번째 슬라이드 선택
		var	scd = $('#background div').eq(1); // 두번째 슬라이드 선택

		scd
			.css(
				{
					zIndex:'2',
					opacity:'0'
				}
			).animate(
				{
					opacity:'1',
					width:'110%',
					height:'110%',
					margin:'-5%'
				}, 500, 'swing', function(){
				fir.appendTo(box).css({
					zIndex:'2',
					opacity:'0',
					width:'100%',
					height:'100%',
					margin:'0'
				})
		});
	}

	settime = setInterval(fade_bg, 2000) // 무한 반복
})