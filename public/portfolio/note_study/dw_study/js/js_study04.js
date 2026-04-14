$(function(){
	colorLengMax = false;
	
	
	paletteReStart();
	paletteInnerDep2Set();

	$(document).on('click', '.selectStyle .selTit', function(){
		$(this).closest('.selectStyle').toggleClass('open').find('.selList ul').slideToggle(200);
	});
	$(document).on('click', '.selectStyle label', function(e){
		$(this).closest('.selectStyle').toggleClass('open').find('.selTit').html($(this).html());
		$(this).closest('.selList ul').slideToggle(200);
		if (GetIEVersion() < 9){
			e.preventDefault();
			$(this).siblings('input:radio[id=' + $(this).attr("for") + ']').click();
		}
	});

	/* 용기 SELECT */
	$('input:radio[name=paletteCaseOption]').on('change', function(){
		$('.paletteCaseImg img').attr('src', $(this).attr('data-caseImg'));
		
		var casePrdSeq = $(this).val();
		// caseOptionList(casePrdSeq);
		$('#caseTit').html("팔레트 - 옵션");
		$('#caseOptId').val('');
	});
	
	/* 리필 SELECT */
	$('input:radio[name=paletteInnerOption]').on('change', function(){
		var parentCd = $(this).val();
		// innerList(parentCd);
	});
	
	/* 용기 옵션 선택 */
	$(document).on('click', '#myPalette .caseOption a', function(){		
		$('.paletteCaseImg img').attr('src', $(this).attr('data-caseImg'));
		
		var caseTit = $(this).attr('kindNm');
		$('#caseTit').html(caseTit);
		
		var caseOptId = $(this).attr('id');
		$('#caseOptId').val(caseOptId);
		
		return false;
	});

	/* 선택내역 펼치기/닫기 */
	$('#myPalette .totalPrice .btnSpread').on('click', function(){
		$(this).toggleClass('spread');
		$('#myPalette .orderList .list ul').toggleClass('all');
		return false;
	});

	/* 색상추가구매 펼치기/닫기  */
	$('.addColor .btnSpread').on('click', function(){
		$('.addColor').toggleClass('open');
		return false;
	});

	/* 색상 추가구매 클릭 */
	$('.paletteCon .addColorBtn').on('click', function(){
		if ($(this).hasClass('active')){
			$('.paletteCon .addColor').show();
		}
		return false;
	});
	
	/* 용기 선택 클릭 */
	$(document).on('click', '.paletteStep1 a.confirmBtn', function(){
		
		var caseOptId = $('#caseOptId').val();
		if (caseOptId == '' || typeof(caseOptId) == 'undefined') {
			alert('용기를 선택해 주세요.');
		} else {
			addOrder(caseOptId, 'case');
		}
		
		return false;
	});

	/* 팔레트 삭제 */
	$(document).on('click', '.paletteCart .btnDel', function(){
		var delOptId = $(this).closest('div').find('img').attr('id');
		var sapPrdCd = $("#"+delOptId).attr("sapPrdCd");
		r_del(sapPrdCd);
		
		colorLengMax == false;
		$(this).closest('div').find('img').remove();
		$('.paletteCon .addColorBtn').removeClass('active');
		
		colorLengChk();
		return false;
	});
	
});

/* 용기 스텝선택 */
function paletteStep1(){
	$('.paletteStep1').show();
	$('.paletteStep2').hide();
	$('#myPalette .paletteStep li').removeClass('on');
	$('#myPalette .paletteStep li').eq(0).addClass('on');
	
	innerReset();
}

//리필 초기화
function innerReset() {
	$('.paletteCart').each(function(){
		$(this).closest('div').find('img').remove();
	});
	
	colorLengMax = false;
	//innerOptArr = new Array();
	$('.paletteCon .addColorBtn').removeClass('active');
	$('.paletteCon .addColor').hide();
	$('.paletteCon .addColorList').html('');
}

//리필 추가 스탭선택
function paletteStep2(){
	if ($("li[name=optC]").length > 0){
		$('.paletteStep1').hide();
		$('.paletteStep2').show();
		$('#myPalette .paletteStep li').removeClass('on');
		$('#myPalette .paletteStep li').eq(1).addClass('on');		
	} else {
		layerPop('palettePop');
		$('#palettePop .errorType').hide();
		$('#palettePop .errorType1').show();
		
		return false;
	}
	
	var pSize = 0;
	var pSize2 = 4;//용기 사이즈
	$("input[name=cartSeq]").each(function (){
		pSize = parseInt($(this).attr('psize'));
		if (pSize > pSize2) {
			pSize2 = pSize;
		}
	});
	
	$('#pSize').val(pSize2);
	$('.paletteLeng').removeClass('show');
	$('#paletteLeng'+$('#pSize').val()).addClass('show');
}

/* paletteInnerDep2 */
function paletteInnerDep2Set(){
	paletteInnerDep2Po = 0;
	if ($('.paletteInnerDep2 ul').length > 1){
		$('.paletteInnerDep2 .cont').width($('.paletteInnerDep2 ul').width()*$('.paletteInnerDep2 ul').length);
	} else {
		$('.paletteInnerDep2 .btn').hide();
	}
}
function paletteInnerDep2Prev(){
	if (paletteInnerDep2Po > 0)
	{
		paletteInnerDep2Po -= $('.paletteInnerDep2 ul').width();
		$('.paletteInnerDep2 .cont').animate({'margin-left' : -paletteInnerDep2Po })
	}
}
function paletteInnerDep2Next(){
	if (paletteInnerDep2Po < $('.paletteInnerDep2 .cont').width() - $('.paletteInnerDep2 ul').width())
	{
		paletteInnerDep2Po += $('.paletteInnerDep2 ul').width();
		$('.paletteInnerDep2 .cont').animate({'margin-left' : -paletteInnerDep2Po })
	}
}

/* 팔레트 드레그 */
function paletteReStart(){
	$( ".paletteInnerDep2 .dragCon" ).draggable({
		appendTo: '.paletteCon.paletteStep2',
		helper: "clone",
		cursor: "move"
	});

	$( ".paletteLeng .paletteCartSizeB > img").draggable({
		appendTo: '.paletteCon.paletteStep2',
		helper: "clone",
		cursor: "move"
	});

	$( ".paletteLeng .paletteCartSizeS > img").draggable({
		appendTo: '.paletteCon.paletteStep2',
		helper: "clone",
		cursor: "move"
	});

	$('.paletteLeng .paletteCartSizeB').droppable({
		accept: ".dragCon.size2, .paletteLeng .paletteCartSizeB > img",
		drop: function( event, ui ) {
			if (colorLengMax == true){
				layerPop('palettePop');
				$('#palettePop .errorType').hide();
				$('#palettePop .errorType2').show();
				//팔레트 완성후 추가했을때 경고창
				return;
			}
			if (ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2'))	{
				if ($(this).find('img').length <= 0){
					//색상추가액션
					$(this).append(ui.draggable.html());
					
					var innerOptId = $(this).find('img').attr('id');
					addOrder(innerOptId, 'inner');//주문내역에 추가
				}
			} else {
				if ($(this).find('img').length < 1){
					$(this).append(ui.draggable);
				} else {
					after = ui.draggable.closest('div').html();
					before = $(this).html();
					$(this).html(after);
					ui.draggable.closest('div').html(before);
				}
			}
			
			colorLengChk();
			paletteReStart();
			
		}
	});
	
	$('.paletteLeng .paletteCartSizeS').droppable({
		accept: ".dragCon.size1, .paletteLeng .paletteCartSizeS > img",
		drop: function( event, ui ) {
			if (colorLengMax == true){
				layerPop('palettePop');
				$('#palettePop .errorType').hide();
				$('#palettePop .errorType2').show();
				//팔레트 완성후 추가했을때 경고창
				return;
			}
			if (ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2')){
				if ($(this).closest('.paletteCartSizeS').find('> img').length <= 0){
					//색상추가액션
					$(this).append(ui.draggable.html());
					
					var innerOptId = $(this).find('img').attr('id');
					addOrder(innerOptId, 'inner');//주문내역에 추가
				}
			} else {
				if ($(this).parents('.paletteCartSizeB').find('> img').length < 1){
					if ($(this).find('> img').length < 1){
						$(this).append(ui.draggable);
					} else {
						after = ui.draggable.closest('div').html();
						before = $(this).html();
						$(this).html(after);
						ui.draggable.closest('div').html(before);
					}
				} else {
					after = ui.draggable.closest('.paletteCartSizeB').html();
					before = $(this).closest('.paletteCartSizeB').html();
					$(this).closest('.paletteCartSizeB').html(after);
					ui.draggable.closest('.paletteCartSizeB').html(before);
				}
			}
			
			colorLengChk();
			paletteReStart();
			
		}
	});

	$('.addColorList').droppable({
		accept: ".dragCon.size1, .dragCon.size2",
		drop: function( event, ui ) {
			
			var innerOptId = ui.draggable.find('img').attr('id');
			var sapPrdCd = $("#"+innerOptId).attr("sapPrdCd");
			
			//색상추가액션
			$('.addColorList').append(
				'<li class="addOptLi_'+sapPrdCd+'">' +
					'<p class="img"><img src="'+ ui.draggable.find('img').attr('src') +'" /></p>' +
					'<p class="colorName">'+ ui.draggable.find('img').attr('alt') +'</p>' +
					'<a href="javascript:onclick=r_del('+sapPrdCd+');" class="btnDel"><img src="/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a>' +
				'</li>'
			);
			
			addOrder(innerOptId, 'inner');//주문내역에 추가
		}
	});
}

/* 팔레트 컬러 갯수 체크 */
function colorLengChk(){
	var colorLeng = 0;
	$('.paletteLeng:visible .paletteCart div').removeClass('btnShow');
	$('.paletteLeng:visible .paletteCart img').each(function(){
		colorLeng += parseInt($(this).attr('data-imgsize'));
		$(this).closest('div').addClass('btnShow');
	});
	if ($('.paletteLeng:visible').hasClass('paletteLeng4') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng){
		colorLengMax = true;
	} else if ($('.paletteLeng:visible').hasClass('paletteLeng8') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng){
		colorLengMax = true;
	} else if ($('.paletteLeng:visible').hasClass('paletteLeng18') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng){
		colorLengMax = true;
	} else {
		colorLengMax = false;
	}
	if (colorLengMax == true){
		$('.paletteCon .addColorBtn').addClass('active');
	}
}

/* 어드민 중분류 클릭시 */
function paletteInnerDep2Change(parentCd){	
	innerOptionList(parentCd)
};

//용기 옵션 리스트
function caseOptionList(prdSeq){
	var url = "/kr/ko/MyPaletteCaseOptionList.do";
	new jQuery.ajax({ 
		type: "POST",
		url : url,
		data: {
			prdSeq : prdSeq
		},
		success: function(msg) {
			$('#caseOption').html(msg);
		}
	});
}

//리필 중분류 리스트
function innerList(parentCd){
	var url = "/kr/ko/MyPaletteInnerList.do";
	new jQuery.ajax({ 
		type: "POST",
		url : url,
		data: {
			cd : parentCd,
			listType : 'B'//(A-대분류 B-중분류)
		},
		success: function(msg) {
			
			var data = $.trim(msg);
			if (data == "") {
				$('#paletteInnerDep1').html('');
				innerOptionList(parentCd);
			} else {
				$('#paletteInnerDep1').html(msg);
				$('#innerOption').html('');
			}
			
			//$('#paletteInnerDep1').html(msg);
			//$('#innerOption').html('');
		}
	});
}

//리필 옵션 리스트
function innerOptionList(parentCd){
	var url = "/kr/ko/MyPaletteInnerOptionList.do";
	new jQuery.ajax({ 
		type: "POST",
		url : url,
		data: {
			cd : parentCd
		},
		success: function(msg) {
			$('#innerOption').html(msg);
			paletteReStart();
			paletteInnerDep2Set();
		}
	});
}


//주문내역 담기 공통
var mapPrd = new MapPrd();//주문선택 리스트map
function addOrder(id, prdType) {
	
	if(loginYn == 'false') {
		$.jhead.fnChkLoginPage();
		return false;
	}
	
	var prdSeq;
	var sapCd;
	var salPrc;
	var kindNm;
	var stkStat;
	var stk;
	var p_type;
	var sapLength;
	var pSize;
	var step;
	var idType;
	
	prdSeq = $("#"+id).attr("prdseq");
	sapCd = $("#"+id).attr("sapPrdCd");
	salPrc = parseInt($("#"+id).attr("salPrc"));
	kindNm = $("#"+id).attr("kindNm");
	stkStat = $("#"+id).attr("stkStat");
	stk = $("#"+id).attr("stk");
	p_type = $("#"+id).attr("p_type");
	sapLength = $("#"+id).attr("sapLength");
	pSize = $("#"+id).attr("psize");
	
	if (prdType == 'case') {
		step = '선택한 용기_'+ kindNm;
		idType = 'optC';
	} else {
		step = '선택한 리필_'+ kindNm;
		idType = 'optI';
	}
	
	var optCnt = 1;
	var html = "";
	html += '<li class="case" name="'+idType+'" id="optLi_'+sapCd+'">\n';
	html += '	<input type="hidden" class="input-text" id="qty_'+ sapCd +'" name="qty" value="1" />';
	html += '	<input type="hidden" class="input-text" id="prc_'+ sapCd +'" name="prc" value="'+ salPrc +'" />';
	html += '	<input type="hidden" name="prdSeq" id="prdSeq" value="'+prdSeq+'" />';
	html += '	<input type="hidden" name="prdType" id="prdType" value="'+prdType+'" />';
	html += '	<input type="hidden" name="cartSeq" id="cartSeq" value="'+prdSeq+'$'+sapCd+'$'+p_type+'$'+sapLength+'" psize="'+pSize+'" />';
	html += '	<input type="hidden" class="input-text" id="stk_'+ sapCd +'" name="stk" value="'+stk+'" />';
	html += '	<input type="hidden" class="input-text" id="stkStat_'+ sapCd +'" name="stkStat" value="'+stkStat+'" />';
	
	html += '	<p class="optionName">'+step+'</p>\n';
	html += '	<div class="count">\n';
	html += '	<a href="javascript:onclick=cnt_add_del('+ sapCd +',\'-\');" class="btnMinus"><em>-</em><span></span></a>\n';
	html += '		<p id="cartNum_'+ sapCd +'">1</p>\n';
	html += '	<a href="javascript:onclick=cnt_add_del('+ sapCd +',\'+\');" class="btnPlus"><em>+</em><span></span></a>\n';
	html += '	</div>\n';
	html += '	<div class="price"><span id="sapPrc_'+ sapCd +'">'+$.jutil.setComma(salPrc+"")+'</span>원</div>\n';
	html += '	<a href="javascript:onclick=fnOptDel('+sapCd+');" class="btnDel"><img src="/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a>\n';
	html += '</li>\n';
	
	var totSumVal = parseInt($("#totSumAmt").val());
	if(!$("#cartNum_"+sapCd).html()) {
		totSumVal = totSumVal + salPrc;
	} else {
		optCnt = parseInt($("#cartNum_"+sapCd).text()) + 1;
		if(stkStat == "2" && optCnt > stk*1) {
			$.jcom.showCommonLayer("상품재고가 부족합니다.");
			return;
		}
		
		$("#qty_"+sapCd).val(optCnt);
		var sum = salPrc * optCnt;
		$("#cartNum_"+sapCd).text(optCnt);
		$("#sapPrc_"+sapCd).html($.jutil.setComma(sum+""));
		totSumVal = totSumVal + salPrc;
	}
	
	$("#sumAmt").html($.jutil.setComma(totSumVal+""));
	$("#totSumAmt").val(totSumVal);
	
	if(mapPrd.containsKey(sapCd)){
	} else {
		$("#optCntSelect").append(html);
		mapPrd.put(sapCd, sapCd);
	}
}

//수량 추가 감소 (+,-)
function cnt_add_del(sapCd, flag) {
	var tmpCnt = 0;
	var sum = 0;
	var qty = parseInt($("#qty_"+sapCd).val());
	var prc = parseInt($("#prc_"+sapCd).val());
	var stk = parseInt($("#stk_"+sapCd).val());
	var stkStat = parseInt($("#stkStat_"+sapCd).val());
	var totSumVal = parseInt($("#totSumAmt").val());
	
	if (flag == "+") {
		tmpCnt = qty + 1;
		if(stkStat == "2" && tmpCnt > stk*1) {
			alert('상품재고가 부족합니다.');
			return;
		}
		
		totSumVal =totSumVal + prc;
	} else {
		tmpCnt = qty - 1;
		if (tmpCnt < 1) {
			return;
		}
		
		totSumVal = totSumVal - prc;
	}
	
	$("#cartNum_"+sapCd).text(tmpCnt);
	$("#qty_"+sapCd).val(tmpCnt);
	sum = tmpCnt*prc;
	
	$("#sapPrc_"+sapCd).html($.jutil.setComma(sum+""));
	$("#sumAmt").html($.jutil.setComma(totSumVal+""));
	$("#totSumAmt").val(totSumVal);
	
	//r_del2(sapCd, 'cnt_add_del');
}

//리필그리드 추가색상 삭제
function r_del(sapCd) {
	var tmpCnt = 0;
	var qty = $("#qty_"+sapCd).val();

	$('.addOptLi_'+ sapCd).each(function(index){
		$(this).remove();
		return false;
	});
	
	if (typeof qty == 'undefined') {
		return;
	}
	
	tmpCnt = parseInt(qty) - 1;
	if (tmpCnt < 1) {
		fnOptDel(sapCd);
		return;
	} else {
		cnt_add_del(sapCd, '-');
	}
	
}

//주문내역 삭제
function fnOptDel(sapCd) {
	if (!sapCd || $("#optLi_"+sapCd).length <= 0) {
		return;
	}
	
	mapPrd.remove(sapCd);
	var qty = parseInt($("#qty_"+sapCd).val());
	var prc = parseInt($("#prc_"+sapCd).val());
	var sum = qty * prc;
	var totSumVal = $("#totSumAmt").val() - sum;
	
	$("#optLi_"+sapCd).remove();
	$("#sumAmt").html($.jutil.setComma(totSumVal+""));
	$("#totSumAmt").val(parseInt(totSumVal));
	
	//r_del2(sapCd, 'fnOptDel');
}

/**
 * 장바구니
 *
 * mode 	: 장바구니:CART, 즉시구매:ORDER, 팝업에서 장바구니:POPCART, 즉시구매:POPORDER
 * sapCode	: sapCode
 * countObj	: 주문갯수//오브젝트이름 또는 
 * seq		: 상품SEQ
 * stkStat	: 재고타입(0,1)
 * stk		: 재고수량		
 * @return
 */
function DirectCart(mode){
	var ordType ='01';
	
	if(loginYn == 'false') {
		$.jhead.fnChkLoginPage();
		return false;
	}
	
	if ($("input[name=cartSeq]").length > 0) {
	} else {
		$.jcom.showCommonLayer("제품을 선택하지 않으셨습니다. 주문할 수 없습니다.");
		return;
	}
	
	if ($("li[name=optC]").length > 0){
	} else {
		$.jcom.showCommonLayer("용기를 선택하지 않으셨습니다. 주문할 수 없습니다.");
		return;
	}
	if ($("li[name=optI]").length > 0){
	} else {
		$.jcom.showCommonLayer("리필을 선택하지 않으셨습니다. 주문할 수 없습니다.");
		return;
	}
	
	var sapPrdSt;
	var sapPrdArr;
	var sapPrdCd;
	var prdSeq;
	var ordQty;
	var prdType;
	var p_type;
	var sapLength;
	
	var prdList = new Array();
	
	$("input[name=cartSeq]").each(function(index){
		sapPrdSt = $(this).val();
		sapPrdArr = sapPrdSt.split("$");
		p_type = sapPrdArr[2];
		sapLength = sapPrdArr[3];
		console.log("p_type : " + p_type + ", sapLength : " + sapLength);
		if ((sapLength == '1' || p_type == 'P' || p_type == 'E') === 'true') {
			prdType = "SINGLE_PRD";
		} else {
			prdType = "OPTION_PRD";
		}
		
		if( typeof p_type == 'undefined' || sapLength == 'undefined' ) {
			prdType = "SINGLE_PRD";
		}
		console.log("prdType : " + prdType);
		var prd = {
			prdSeq: sapPrdArr[0],
			sapPrdCd: sapPrdArr[1],
			ordQty: $("#qty_"+sapPrdArr[1]).val(),
			ordType: ordType,
			prdType: prdType
		}
		prdList.push(prd);
	});
	
	$.jcom.cartAdd(mode, prdList, function(data) {
		var r_code = data.orderBean.r_code;
		if (r_code === 'CART_SUCCESS') {
			layerPop('addCartEndPop');
		} else if (r_code === '0008') {
			setMoveDefaultValue("","","","","Y");
			layerPop('onlineJoinInfo');
		} else if (r_code === 'ORDER_SUCCESS') {
			alert("TODO : 바로구매 완료");
		} else if (r_code === 'REQUIRE_LOGIN_MEMBER_PRD') {
			$.jhead.fnChkLoginPage();
		} else if (r_code === 'REQUIRE_LOGIN_GIFT') {
			$.jhead.fnChkLoginPage();
		} else if (r_code === null) {
			$.jcom.showCommonLayer("서버 오류로 인해 장바구니 담기에 실패 하였습니다.");
		} else {
			$.jcom.showCommonLayer(data.orderBean.r_message);
		}
	});
}

function fReset() {
	$("#optCntSelect").html("");
	$("#totSumAmt").val(0);
	$("#sumAmt").html("0");
	mapPrd = new MapPrd();
	
	innerReset();
	
	/* $('#caseTit').html("팔레트 - 옵션");
	$('#caseOptId').val(''); */
}