<!DOCTYPE HTML>
<html>
<head>
<title>::: note :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
<link rel="stylesheet" type="text/css" href="/gigiiboc/portfolio/resource/css/style.css">
<script src="/gigiiboc/portfolio/resource/js/jquery-1.11.3.min.js"></script>
<script src="/gigiiboc/portfolio/resource/js/jquery.easings.min.js"></script>
<style type="text/css">
	body {font-size:14px;line-height:1.6;margin:80px auto;max-width:900px;}
	form fieldset {border:1px solid #d1d1d1}
	form div {border:1px solid #d1d1d1;margin:10px;padding:30px;}
	form div h2 {font-weight:bold;font-size:1.2em;margin-bottom: 30px;}
	form div p {font-size: 0.9em;margin-top: 9px;}
	form div p span {color: red;}
	.tip {padding:30px;}
	.tip ul {display: block;list-style: disc;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;-webkit-padding-start: 40px;}
	.tip ul li {display: list-item;list-style: disc;text-align: -webkit-match-parent;}
</style>
</head>
<body>

	<form>
		<fieldset>
			<legend>참가자 정보 기입 사항</legend>
			<div>
				<h2>&lt;select&gt;</h2>
				<label for="entry_time">행사 시간</label>
				<select name="" id="entry_time">
					<option value="12:00 - 14:00">12:00 - 14:00</option>
					<option value="14:00 - 16:00">14:00 - 16:00</option>
					<option value="16:00 - 18:00">16:00 - 18:00</option>
				</select>
			</div>
			<div>
				<h2>&lt;label for="input_id"&gt;확인&lt;/label&gt;</h2>
				<p>독자적으론 사용되지 않고 input 사용시 input의 ID와 label의 for를 연동시켜줘야 합니다.</p>
			</div>
			<div>
				<h2>&lt;input type="text" name="" value="" id="text_id" placeholder="아이디입력" size="" maxlength="" readonly&gt;</h2>
				<label for="text_id">ID</label>
				<input type="text" name="" value="" id="text_id" placeholder="아이디입력" size="" maxlength="" readonly>
				<p>
					<span>name :</span> 텍스트필드를 구별하기 쉽도록 붙이는 이름<br>
					<span>size :</span> 텍스트 필드의 길이를 지정<br>
					<span>value :</span> 화면에서 텍스트 박스 안에 표시 될 글의 내용<br>
					<span>maxlength :</span> 텍스트 필드에 입력할 수 있는 최대 문자 개수<br>
					<span>readonly :</span> 비활성화
				</p>
			</div>
			<div>
				<h2>&lt;input type="password" name="" value="" id="password_id" placeholder="패스워드입력" size="" maxlength=""&gt;</h2>
				<label for="password_id">PW</label>
				<input type="password" name="" value="" id="password_id" placeholder="패스워드입력" size="" maxlength="">
				<p>password(패스워드)필드는 비밀번호 입력 상자로 텍스트 필드와 같지만, 박스 안에 입력하는 내용이 화면에 표시 되지 않고 *이나 ●으로 표시됩니다. <br>valud 속성이 없다는 것만 제외하면 텍스트 필드와 똑같습니다.</p>
			</div>
			<div>
				<h2>&lt;input type="radio" name="radio_name" value="" id="radio_id_0119" checked&gt;</h2>
				<input type="radio" name="radio_name" value="" id="radio_id_0119" checked><label for="radio_id_0119">1월 19일(금)</label>
				<input type="radio" name="radio_name" value="" id="radio_id_0120"><label for="radio_id_0120">1월 20일(토)</label>
				<p>
					<span>name :</span> 라디오 버튼이 여러개 있을 경우 구분하기 위하여 이름을 지정. 라디오 버튼은 여러가지 항목 중 한가지만 선택하는 것이기 때문에 관련이 있는 것끼리 그룹으로 묶어야 함.<br>
					<span>value :</span> 버튼을 클릭하여 선택했을 때 그 항목이 선택되었다고 서버로 알려주어야 하는데, value 속성을 사용해서 서버로 넘길 값을 지정합니다.<br>
					<span>checked :</span> 라디오 버튼의 항목들은 처음에 아무것도 선택되지 않은 상태가 화면에 보여지는데, 이 때 미리 선택되어 있는 것을 지정하는 속성입니다.
				</p>
			</div>
			<div>
				<h2>&lt;input type="checkbox" name="" value="" id="checkbox_id1" checked&gt;</h2>
				<input type="checkbox" name="" value="" id="checkbox_id1" checked><label for="checkbox_id1">checkbox1</label>
				<input type="checkbox" name="" value="" id="checkbox_id2"><label for="checkbox_id2">checkbox2</label>
				<p>체크박스도 라디오버튼처럼 여러 항목중에서 원하는 항목을 선택하는 속성입니다. 라디오 버튼과의 차이점은 2개이상도 선택할 수 있다는 점입니다. 속성도 라디오버튼과 같습니다.</p>
			</div>
			</div>
			<div>
				<h2>&lt;input type="file" name="" id="file_id"&gt;</h2>
				<input type="file" name="" id="file_id"><label for="file_id">파일 다운로드</label>
				<p>파일첨부 형태로 서버에 보낼 때 사용하는 컨트롤입니다.</p>
			</div>
			<div>	
				<h2>&lt;input type="image" name="" id="image_id" src="https://via.placeholder.com/480X80"&gt;</h2>		
				<input type="image" name="" id="image_id" src="https://via.placeholder.com/480X80"><label for="image_id">image</label>
				<p>이미지 태그와 다른 점은 마우스를 올라가면 커서가 포인트로 바뀐다는 것, 그리고 submit 버튼 역할을 한다는 점입니다..</p>
			</div>
			<div>
				<h2>&lt;input type="submit" name="" value="보내기" id="submit_id"&gt;</h2>
				<input type="submit" name="" value="보내기" id="submit_id"><label for="submit_id">submit</label>
				<p>사용자가 폼에 입력한 정보를 서버에 전송하는 submit 버튼입니다. 이때, value 속성을 이용하여 버튼 안에 표시할 내용을 지정할 수 있습니다.</p>
			</div>
			<div>
				<h2>&lt;input type="reset" name="" value="다시쓰기" id="reset_id"&gt;</h2>
				<input type="reset" name="" value="다시쓰기" id="reset_id"><label for="reset_id">reset</label>
				<p>reset 버튼은 input 요소에 입력된 정보들을 모두 리셋하는 버튼입니다.</p>
			</div>
			<div>
				<h2>
					&lt;input type="button" name="" value="보내기" id="button_id"&gt;<br>
					&lt;button type="button"&gt;보내기&lt;/button&gt;
				</h2>				
				<input type="button" name="" value="보내기" id="button_id">, <button type="button" disabled >보내기</button>
				<p>submit 과 reset 도 버튼이지만 이 타입은 자제기능없이 버튼만을 만들어줍니다.</p>
				<p>
					<span>disabled :</span> 비활성화
				</p>
			</div>
			<div>
				<h2>&lt;input type="hidden" name="" id="" value=""&gt;</h2>
				<input type="hidden" name="" id="" value="">
				<p>화면상에는 보이지 않지만 사용자가 입력을 마치고 폼을 서버로 전송할때 서버로 함께 전송되는 요소입니다.</p>
			</div>
		</fieldset>
	</form>




	<div class="tip">
		<h2>input & label 웹 접근성에 맞는 코딩법</h2>
		<ul>
			<li>input 과 label 을 동시에 쓰는 경우 > label의 for와 input의 ID를 연동시켜줘야함.</li>
			<li>input 만 쓰는 경우 > 디자인 상 label을 사용하지 않을 경우 title만 적어줘도 문제없음</li>
			<li>input type="image" 를 쓸 경우 > 웹 접근성 연구소에서는 이 경우 alt와 title을 둘다 명시에 줄 것을 권고함.</li>
		</ul>
	</div>



</body>
</html>
