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
	<script language="javascript"> 
		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i=0; i<ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1);
				if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
			}
			return "";
		}

		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + "; " + expires;
		}

		function couponClose(){
			if($("input[name='chkbox']").is(":checked") ==true){
				setCookie("close","Y",1);
			}
			$("#popup_180320").hide();
		}

		$(document).ready(function(){
			cookiedata = document.cookie;
			if(cookiedata.indexOf("close=Y")<0){
				$("#popup_180320").show();
			}else{
				$("#popup_180320").hide();
			}
			$("#popup_180320 .close").click(function(){
				couponClose();
			});
		});
	</script>
	<style>
		#popup_180320 {position: absolute;top: 148px;left: 50%;margin-left: -600px;z-index: 999;}
		#popup_180320 > img {}
		#popup_180320 > form {position: absolute;bottom: 0;right: 0;color: #fff;width: 100%;font-size: 12px;padding: 0 9px;box-sizing: border-box;height:26px;}
		#popup_180320 > form .check {position: absolute;bottom: 0;left: 10px;height: 100%;display: block;}
		#popup_180320 > form .check input {display: inline-block;vertical-align: middle;height: 100%;width:auto;}
		#popup_180320 > form .check label {display: inline-block;vertical-align: middle;font-size: 10px;margin-left: 4px;}
		#popup_180320 > form .close {position: absolute;bottom: 0;right: 0;width: 50px;height: 100%;background: #000;cursor: pointer;}
		#popup_180320 > a.link {position: absolute;bottom: 53px;right: 50%;width: 106px;margin-right: -53px;height: 28px;background: #000;opacity: 0;filter: alpha(opacity:'0');}
	</style>
	<div id="popup_180320">
		<img src="https://via.placeholder.com/1024X600">
		<form method="post" name="pop_form">
			<span class="check"><input type="checkbox" value="checkbox" name="chkbox" id="chkday"/><label for="chkday">오늘 하루동안 보지 않기</label></span>
			<span class="close">Close</span>
		</form>
	</div>

</body>
</html>