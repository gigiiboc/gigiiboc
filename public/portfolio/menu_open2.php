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


<script>
	$(document).ready(function(){
		$("#open, #close").click(function(){
			$("#img").slideToggle('callback');
		});
	});



</script>
<style>
#open {display:block; color:#fff; width:100%; line-height:30px; text-align:center; background:#d1d1d1; cursor:pointer;}
#img {display:none; position:fixed; bottom:0; left:0; width:100%; height:100%; background:#d1d1d1; overflow:hidden}
#img #close {display:block; position:relative; top:0; left:0; width:100%; line-height:30px; text-align:center; background:#ccc; cursor:pointer;}
</style>
</head>

<body>

	<a href="javascript:void(0);" id="open">open</a>	
	<div id="img">
		<a href="javascript:void(0);" id="close">close</a>
		<img src="https://via.placeholder.com/480X280" alt="test-image">
	</div>

</body>

</html>
