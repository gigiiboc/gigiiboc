<!DOCTYPE HTML>
<html>
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>


<table> 
  <tr><td id="hereInDOM"> 
  </td></tr> 
</table> 

<script type="text/javascript"> 
var DOM_table = document.createElement('table'); // table를 DOM_table로 명명.
var DOM_tr = document.createElement('tr'); // tr를 DOM_tr로 명명.
var DOM_td = document.createElement('td'); // td를 DOM_td로 명명.

DOM_table.appendChild(DOM_tr); //DOM_table 안에 DOM_tr 을 넣고
DOM_tr.appendChild(DOM_td); //


var whereIsDOM = document.getElementById("hereInDOM");
whereIsDOM.appendChild(DOM_table);
</script> 




</body>

</html>
