<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
	<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<!-- type1 s -->
	<!-- 
	<style>
		#sakura .sakura {position: fixed;top: 0;left: 0;right: 0;bottom: 0;width: 100%;z-index: 1;height: 100%;}
		#sakura .sakura img {width:100%;}
	</style>
	<div id="sakura">
	</div>
	<script>
		var sakuraOn = true;
	
		function sakura(value){
			if (value){
				$('#sakura').html('<div class="sakura"><img src="/gigiiboc/portfolio/etude/etude_sakura/images.gif" alt="" class="sakura_img"></div>')
				setTimeout(function () {
					$('#sakura').html('')
					sakuraOn = false
					console.log('end')
				}, "2640");
			}
		}
	
		window.onload = function () {
		  sakura(sakuraOn)
		}
	</script> -->
	<!-- type1 e -->

	<!-- type2 e -->
	<style>
		#sakura {display:none;position: fixed;top: 0;left: 0;right: 0;bottom: 0;width: 100%;z-index: 1;height: 100%;}
		#sakura img {width:100%;}
		#loadImg {visibility:hidden;height:0;opacity:0;width:0;}
		#loadImg img {visibility:hidden;height:0;opacity:0;width:0;}
	</style>
	<div id="sakura">
		<img src="/gigiiboc/portfolio/etude/etude_sakura/images/petals_00063.png" alt="" class="sakura_img">
	</div>
	<script>
		var sakuraImg = [
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00000.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00001.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00002.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00003.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00004.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00005.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00006.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00007.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00008.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00009.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00010.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00011.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00012.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00013.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00014.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00015.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00016.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00017.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00018.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00019.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00020.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00021.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00022.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00023.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00024.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00025.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00026.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00027.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00028.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00029.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00030.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00031.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00032.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00033.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00034.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00035.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00036.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00037.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00038.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00039.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00040.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00041.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00042.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00043.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00044.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00045.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00046.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00047.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00048.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00049.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00050.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00051.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00052.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00053.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00054.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00055.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00056.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00057.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00058.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00059.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00060.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00061.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00062.png",
			"/gigiiboc/portfolio/etude/etude_sakura/images/petals_00063.png"
		]

		var sakuraOn = true;

		function sakura(value){
			if (value){
				$('#sakura').show()

				var i = 0;
				var settime = setInterval(function(){
					if (i < sakuraImg.length){
						$('.sakura_img').attr('src', sakuraImg[i])
						i++
					} else {
						clearInterval(settime);
						$('#sakura').hide()
						console.log('end')
						sakuraOn = false
					}
				}, 30);
			}
		}

		window.onload = function () {
		  setTimeout(function () {
			  sakura(sakuraOn)
		  }, "1000");
		}
	</script>
	<!-- type2 e -->
</body>
</html>

