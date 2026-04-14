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


<style>
h2 {margin:50px 0 10px}
</style>



<h2>라인 긋는 기법</h2>
<style> 
div.line {position:relative; text-align:center; width:100%;}
div.line a {display:inline-block; margin:0 auto; padding:20px; background:#fff; color:#333;}
div.line:before {position:absolute; bottom:30px; content:""; height:1px; width:100%; display:block; background:#000; color:#fff; z-index:-1}
</style>
<div class="line">
	<a href="">asdasdasd</a>
</div>




<h2>세로정렬기법1 table-cell</h2>
<style> 
.align1-1 {display:table; width:200px; height:200px; background:#d1d1d1;} 
.align1-2 {display:table-cell; vertical-align:middle; text-align:center;}
.align1-2 p {margin:0 auto}
</style> 
<div class="align1-1"> 
	<div class="align1-2">
			<p style="display:block; float:left; width:50px; height:50px; background:#fff"></p>
			<p style="display:block; float:left; width:40px; height:40px; background:#fff"></p>
	</div> 
</div>




<h2>세로정렬기법2 position</h2>
<style> 
.align2-1 {position:relative; top:0px; width:200px; height:200px; background:#c7282d;} 
.align2-2 {position:absolute; top:50%; left:50%; margin-top:-50px; margin-left:-50px; height:100px;}
</style>
<div class="align2-1"> 
	<div class="align2-2">
		<p style="display:inline-block; width:100px; height:100px; background:#fff"></p>
	</div> 
</div>



<h2>세로정렬기법3 inline-block, vertical-middle </h2>
<style> 
.ex1 {background:#d1d1d1; overflow:hidden}
.ex2 {display:inline-block; vertical-align:middle;} 
</style>
<div class="ex1">
	<div class="ex2">
		<p style="display:block; float:left; width:50px; height:50px; background:#fff"></p>
	</div>
	<div class="ex2">
		<p style="display:block; float:left; width:50px; height:100px; background:red"></p>
	</div>
</div> 





<h2>정 가운데 정렬기법 translate</h2>
<style>
.thumbnail-wrapper {width:300px;background:#f7f7f7}
.thumbnail {position:relative;padding-top:100%;  /* 1:1 ratio */overflow:hidden;}
.thumbnail .centered  {position:absolute;top:0;left:0;right:0;bottom:0;transform:translate(50%,50%);}
.thumbnail .centered img {position:absolute;top:0;left:0;max-width:100%;height:auto;transform:translate(-50%,-50%);}
</style>
<div class="thumbnail-wrapper">
    <div class="thumbnail">
        <div class="centered">
        <img src="https://via.placeholder.com/50X50" class="con1">
        </div>
    </div>
</div>



<h2>정 가운데 정렬기법 flex</h2>
<style>
.flex-wrapper {width:300px;height:500px;background:#f7f7f7;display: flex;align-items: center;justify-content: center;}
.flex {height:50px;width:50px;background:#121212}
</style>
<div class="flex-wrapper">
    <div class="flex">
    </div>
</div>




<style>
	div.fixed {position:fixed; top:50%; margin-top:-250px; left:50%; margin-left:-250px; width:500px; height:500px; background:#d1d1d1; border:1px solid #000;}
</style>
<div class="fixed"><h2>정 가운데 정렬기법 posiyion fixed</h2></div>



</body>
</html>
