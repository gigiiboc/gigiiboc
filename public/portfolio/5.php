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

<style> 
.l { float:left; border:1px solid #000; width:150px; height:200px; background-color:#FFF; position:relative; } 
.l2 { float:left; border:1px solid #FFF; border-top:1px solid #000; width:150px; height:1px; position:relative; } 
.s { float:left; width:10px; height:200px } 
</style> 
<script> 
$(document).ready(function() { 
   $(".l").filter(function(idx) { 
      $(this).bind("mouseover", function() { 
         $("#m2 .l:eq(" + idx + ")").css("top", "-50px"); 
      }); 
      $(this).bind("mouseout", function() { 
         $("#m2 .l:eq(" + idx + ")").css("top", ""); 
      }); 
   }); 
}); 
</script> 
<div style="height:300px; overflow:hidden"> 
<div id="m1"> 
<div class="l"> 
</div> 
<div class="s">&nbsp;</div> 
<div class="l"> 
</div> 
<div class="s">&nbsp;</div> 
<div class="l"> 
</div> 
<div style="clear:both">&nbsp;</div> 
</div> 
<div id="m2" style="position:relative; top:-50px"> 
<div class="l"> 
1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9 
</div> 
<div class="s">&nbsp;</div> 
<div class="l"> 
1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9 
</div> 
<div class="s">&nbsp;</div> 
<div class="l"> 
1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9 
</div> 
<div style="clear:both">&nbsp;</div> 
</div> 
<div style="position:relative; top:-145px; z-index:9"> 
<div class="l2"> 
</div> 
<div class="s">&nbsp;</div> 
<div class="l2"> 
</div> 
<div class="s">&nbsp;</div> 
<div class="l2"> 
</div> 
<div style="clear:both">&nbsp;</div> 
</div> 
</div> 

</body>

</html>
