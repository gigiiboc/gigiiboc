<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
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
				$('#sakura').html('<div class="sakura"><img src="/note/etude/etude_sakura/images.gif" alt="" class="sakura_img"></div>')
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
		<img src="/note/etude/etude_sakura/images/petals_00063.png" alt="" class="sakura_img">
	</div>
	<script>
		var sakuraImg = [
			"/note/etude/etude_sakura/images/petals_00000.png",
			"/note/etude/etude_sakura/images/petals_00001.png",
			"/note/etude/etude_sakura/images/petals_00002.png",
			"/note/etude/etude_sakura/images/petals_00003.png",
			"/note/etude/etude_sakura/images/petals_00004.png",
			"/note/etude/etude_sakura/images/petals_00005.png",
			"/note/etude/etude_sakura/images/petals_00006.png",
			"/note/etude/etude_sakura/images/petals_00007.png",
			"/note/etude/etude_sakura/images/petals_00008.png",
			"/note/etude/etude_sakura/images/petals_00009.png",
			"/note/etude/etude_sakura/images/petals_00010.png",
			"/note/etude/etude_sakura/images/petals_00011.png",
			"/note/etude/etude_sakura/images/petals_00012.png",
			"/note/etude/etude_sakura/images/petals_00013.png",
			"/note/etude/etude_sakura/images/petals_00014.png",
			"/note/etude/etude_sakura/images/petals_00015.png",
			"/note/etude/etude_sakura/images/petals_00016.png",
			"/note/etude/etude_sakura/images/petals_00017.png",
			"/note/etude/etude_sakura/images/petals_00018.png",
			"/note/etude/etude_sakura/images/petals_00019.png",
			"/note/etude/etude_sakura/images/petals_00020.png",
			"/note/etude/etude_sakura/images/petals_00021.png",
			"/note/etude/etude_sakura/images/petals_00022.png",
			"/note/etude/etude_sakura/images/petals_00023.png",
			"/note/etude/etude_sakura/images/petals_00024.png",
			"/note/etude/etude_sakura/images/petals_00025.png",
			"/note/etude/etude_sakura/images/petals_00026.png",
			"/note/etude/etude_sakura/images/petals_00027.png",
			"/note/etude/etude_sakura/images/petals_00028.png",
			"/note/etude/etude_sakura/images/petals_00029.png",
			"/note/etude/etude_sakura/images/petals_00030.png",
			"/note/etude/etude_sakura/images/petals_00031.png",
			"/note/etude/etude_sakura/images/petals_00032.png",
			"/note/etude/etude_sakura/images/petals_00033.png",
			"/note/etude/etude_sakura/images/petals_00034.png",
			"/note/etude/etude_sakura/images/petals_00035.png",
			"/note/etude/etude_sakura/images/petals_00036.png",
			"/note/etude/etude_sakura/images/petals_00037.png",
			"/note/etude/etude_sakura/images/petals_00038.png",
			"/note/etude/etude_sakura/images/petals_00039.png",
			"/note/etude/etude_sakura/images/petals_00040.png",
			"/note/etude/etude_sakura/images/petals_00041.png",
			"/note/etude/etude_sakura/images/petals_00042.png",
			"/note/etude/etude_sakura/images/petals_00043.png",
			"/note/etude/etude_sakura/images/petals_00044.png",
			"/note/etude/etude_sakura/images/petals_00045.png",
			"/note/etude/etude_sakura/images/petals_00046.png",
			"/note/etude/etude_sakura/images/petals_00047.png",
			"/note/etude/etude_sakura/images/petals_00048.png",
			"/note/etude/etude_sakura/images/petals_00049.png",
			"/note/etude/etude_sakura/images/petals_00050.png",
			"/note/etude/etude_sakura/images/petals_00051.png",
			"/note/etude/etude_sakura/images/petals_00052.png",
			"/note/etude/etude_sakura/images/petals_00053.png",
			"/note/etude/etude_sakura/images/petals_00054.png",
			"/note/etude/etude_sakura/images/petals_00055.png",
			"/note/etude/etude_sakura/images/petals_00056.png",
			"/note/etude/etude_sakura/images/petals_00057.png",
			"/note/etude/etude_sakura/images/petals_00058.png",
			"/note/etude/etude_sakura/images/petals_00059.png",
			"/note/etude/etude_sakura/images/petals_00060.png",
			"/note/etude/etude_sakura/images/petals_00061.png",
			"/note/etude/etude_sakura/images/petals_00062.png",
			"/note/etude/etude_sakura/images/petals_00063.png"
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

