<?php
define('IS_PASS', true);
include_once('./_common.php');
//$sql = "SELECT * FROM ajax_test ORDER BY id DESC";
//$result = sql_query($sql);
if(!defined("_INDEX_")){ // index에서만 실행

}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>KB국민카드 ESG 캠페인</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
    <script src="/resource/js/jquery-1.11.3.min.js"></script>
    <script src="/resource/js/jquery.easings.min.js"></script>
    <script src="/resource/js/clipboard.min.js"></script>
    
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-26X0FRSNH6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-26X0FRSNH6');
	</script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/resource/css/contents.css">

<div class="wrapper">
    <div class="contents">
        <img src="/resource/images/contents_pc.jpg" class="viewPc" alt="">
        <img src="/resource/images/contents_mo.jpg" class="viewMo" alt="">

        <div class="ytcon viewAnim">
            <div class="vodArea vod0">
                <div id="player0" class="vodplayer"></div>
            </div>
        </div>

        <a href="javascript:void(0);" class="eventLink01" onclick="showLayer('#KeebPop')"><span class="hide">KeeB 카드란 무엇인가요?</span></a>
        <a href="javascript:void(0);" class="eventLink02" onclick="showLayer('#eventPop')"><span class="hide">응모하기</span></a>
        <a href="https://www.youtube.com/watch?v=Us89oWsYXeY" class="eventLink03" target="_blank"><span class="hide">유튜브 댓글 달러가기</span></a>

        <!-- 응모하기 팝업 -->
        <div id="eventPop" class="layerPop eventPop">
            <div class="popCon">
                <img src="/resource/images/eventPop.png" alt="">
                <form method="post" id="insert_form">
                    <fieldset>
                        <div class="inputArea">
                            <div class="inputBox01">
                                <!-- 기존 <label for="q_answer"><span class="hide">정답</span></label><input type="text" name="answer" id="q_answer"> -->
								<input type="radio" name="answer" value="KeeP" id="radio_id01" class="hide">
								<label for="radio_id01" class="radio01"><span class="hide">KeeP 카드</span></label>
								<input type="radio" name="answer" value="KeeB" id="radio_id02" class="hide">
								<label for="radio_id02" class="radio02"><span class="hide">KeeB 카드</span></label>
								<input type="radio" name="answer" value="KB" id="radio_id03" class="hide">
								<label for="radio_id03" class="radio03"><span class="hide">KB 카드</span></label>
                            </div>
                            <div class="inputBox02">
                                <label for="q_name"><span class="hide">이름</span></label><input type="text" name="name" id="q_name">
                            </div>
                            <div class="inputBox03">
                                <label for="q_hpno"><span class="hide">휴대폰번호</span></label><input type="text" name="hpno" id="q_hpno" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                        </div>
                        <div class="checkArea">
                            <input type="checkbox" id="check1" class="hide">
                            <label for="check1"><span class="hide">이용약관 및 필수 동의사항</span></label>
                        </div>
                        <div class="PrivacyArea">
                            <span class="hide">개인정보 필수적 수집/이용 동의</span>
                            <a href="javascript:void(0);" class="PrivacyLink" onclick="showLayer('#PrivacyPop')">자세히보기</a>
                        </div>
                        <button type="submit" id="submitBtn">응모확인</button>
                    </fieldset>
                </form>
                <a href="javascript:void(0);" class="closeBtn" onclick="closeLayer('#eventPop')">닫기</a>
            </div>
        </div>

        <!-- 개인정보 팝업 -->
        <div id="PrivacyPop" class="layerPop PrivacyPop">
            <div class="popCon">
                <img src="/resource/images/PrivacyPop.png" alt="">
                <a href="javascript:void(0);" class="closeBtn" onclick="closeLayer('#PrivacyPop')">닫기</a>
            </div>
        </div>

        <!-- KeeB 소개 팝업 -->
        <div id="KeebPop" class="layerPop KeebPop">
            <div class="popCon">
                <img src="/resource/images/KeebPop.png" alt="">
                <div class="ytcon">
                    <div class="vodArea vod1">
                        <div id="player1" class="vodplayer"></div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="closeBtn" onclick="closeLayer('#KeebPop')">닫기</a>
            </div>
        </div>

        <!-- 공유 팝업 -->
        <div id="sharePop" class="layerPop sharePop">
            <div class="popCon">
                <img src="/resource/images/sharePop.png" alt="">
                <input type="button" class="eventLink04" value="링크 공유하기" data-clipboard-text="https://keebgoing.com/"/>
                <a href="javascript:void(0);" class="closeBtn" onclick="closeLayer('#sharePop')">닫기</a>
            </div>
        </div>

        <!-- floating -->
        <div class="floatingBox">
            <div class="floating">
				<a href="javascript:void(0);" onclick="imgDownload('../resource/images/kb_wallpaper_mo.png', 'kb_웰페이퍼_세로형_01.png')"><span class="hide">웰페이퍼 다운로드 모바일</span></a>
				<a href="javascript:void(0);" onclick="imgDownload('../resource/images/kb_wallpaper_pc.png', 'kb_월페이퍼PC(3840x2160).png')"><span class="hide">웰페이퍼 다운로드 PC</span></a>
            </div>
        </div>
    </div>
</div>

<script src="/resource/js/contents.js"></script>
<script>
    $(document).ready(function(){
        $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if(!$('input[name="answer"]').is(':checked')) {
                alert("정답을 선택해주세요");
            } else if($('#q_name').val() == '') {
                alert("응모자 이름을 입력해주세요.");
            } else if($('#q_hpno').val() == '') {
                alert("응모자 전화번호를 입력해주세요.");
            } else if( !telValidator($('#q_hpno').val()) ){
                alert('유효하지 않는 전화번호입니다.');
            }  else if($('#check1').is(":checked") == '') {
                alert("이용약관 및 필수 동의사항을 체크해주세요");
            } else {
                if($('#submitBtn').data('ing')){
                    alert('현재 응모 진행중 입니다. 잠시 후 다시 시도해주세요');
                    return false;
                }
                $.ajax({
                    url:"/apply/insert.php",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    beforeSend:function(){
                        $('#submitBtn').data('ing',true);
                    },
                    success:function(data){
                        $('#submitBtn').data('ing',false);
                        alert('응모가 완료되었습니다.');
                        closeLayer('#eventPop');
                        $('#insert_form')[0].reset();
                    },
                    error: function(request,status,error){
                        $('#submitBtn').data('ing',false);
                        alert('응모중 에러가 발생하였습니다. 다시 시도해주세요');
                    }
                });
            }
        });
    });

    function telValidator(args) {
        phoneNum = args;
        phoneNum = $.trim(phoneNum); // 앞뒤 공백제거
        phoneNum = phoneNum.replace(/-/gi, ""); // - 하이픈 제거
        phoneNum = phoneNum.replace(/^(\d{2,3})(\d{3,4})(\d{4})$/, "$1-$2-$3");
        if (/^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}/.test(phoneNum)) {
            return true;
        }
        return false;
    }
</script>
</body>
</html>