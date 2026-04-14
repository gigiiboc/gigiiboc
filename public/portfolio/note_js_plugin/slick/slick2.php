<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/reset.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/note_js_plugin/slick/slick.css">
	<script src="/gigiiboc/portfolio/note_js_plugin/slick/slick.min.js"></script>
	<style>
	img {width:100%}
	</style>

	<h2>Filtering</h2>
	<div class="slider filtering">
	</div>
	<div class="slider filtering02" style="margin-top:20px">
	</div>
	<div class="filter">
		<a href="javascript:void(0)" onclick="slickChange(this)" class="button js-filter" data-image="111,333,555">Slides1</a>
		<a href="javascript:void(0)" onclick="slickChange(this)" class="button js-filter" data-image="111,333,555,777">Slides2</a>
		<a href="javascript:void(0)" onclick="slickChange(this)" class="button js-filter" data-image="111,333,555,777,999">Slides3</a>
		<a href="javascript:void(0)" onclick="slickChange(this)" class="button js-filter" data-image="111,333,555,777,999,aaa">Slides4</a>
	</div>

	<script type="text/javascript">
		function slickChange (e){
			$('.filtering, .filtering02').slick('unslick')
			var innerHTML = '',
				innerHTML02 = '',
				ele = $(e).attr('data-image').split(','),
				eleCount = ele.length;

			for (i=0; i<eleCount; i++){
				innerHTML += '<div><h3><div style="height:500px;background:#' + ele[i] + '"></div></h3></div>'
				innerHTML02 += '<div><h3><div style="height:30px;background:#' + ele[i] + '"></div></h3></div>'
			}
			$('.filtering').html(innerHTML)
			$('.filtering02').html(innerHTML02)
			slickOn()
		}

		function slickOn (){
			$('.filtering').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				asNavFor: '.filtering02',
				arrows: false,
				infinite: false,
				swipe : false
			});
			$('.filtering02').slick({
				slidesToShow: 4,
				slidesToScroll: 4,
				asNavFor: '.filtering',
				dots: false,
				infinite: false,
				swipe : false,
				focusOnSelect: true
			});
		}
		slickOn()
	</script>
</body>
</html>