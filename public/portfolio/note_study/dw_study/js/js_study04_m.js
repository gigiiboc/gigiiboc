
var loginYn = 'true';
var innerOptArr = new Array();

//JS Map
function MapPrd() {
this.elements = new Array();
this.put = function(_key, _value) {
	this.elements.push( {
		key : _key,
		value : _value
	});
};
this.containsKey = function(_key) {
	var bln = false;
	try {
		for (var j = 0; j < this.elements.length; j++) {
			if (this.elements[j].key == _key) {
				bln = true;
			}
		}
	} catch (e) {
		bln = false;
	}
	return bln;
};
this.remove = function(_key) {
	var bln = false;
	try {
		for (var j = 0; j < this.elements.length; j++) {
			if (this.elements[j].key == _key) {
				this.elements.splice(j, 1);
				return true;
			}
		}
	} catch (e) {
		bln = false;
	}
	return bln;
};
}

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
	if (GetIEVersion() < 9)
	{
		e.preventDefault();
		$(this).siblings('input:radio[id=' + $(this).attr("for") + ']').click();
	}
});

/* 용기 SELECT */
$('input:radio[name=paletteCaseOption]').on('change', function(){
	$('.paletteCaseImg img').attr('src', $(this).attr('data-caseImg'));
	
	var casePrdSeq = $(this).val();
	caseOptionList(casePrdSeq);
	$('#caseTit').html("팔레트 - 옵션");
	$('#caseOptId').val('');
	
	//innerReset();
});

/* 리필 SELECT */
$('input:radio[name=paletteInnerOption]').on('change', function(){
	var parentCd = $(this).val();
	innerList(parentCd);
	//innerReset();
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
	if ($(this).hasClass('active'))
	{
		$('.paletteCon .addColor').show();
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
	/* $('.paletteCon .addColor').hide();
	$('.paletteCon .addColorList').html(''); */
	
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
if ($("li[name=optC]").length > 0)
{
	$('.paletteStep1').hide();
	$('.paletteStep2').show();
	$('#myPalette .paletteStep li').removeClass('on');
	$('#myPalette .paletteStep li').eq(1).addClass('on');
	
}
else
{
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

/* $('.paletteStep1').hide();
$('.paletteStep2').show();
$('#myPalette .paletteStep li').removeClass('on');
$('#myPalette .paletteStep li').eq(1).addClass('on'); */
}

/* paletteInnerDep2 */
function paletteInnerDep2Set(){
paletteInnerDep2Po = 0;
if ($('.paletteInnerDep2 ul').length > 1)
{
	$('.paletteInnerDep2 .cont').width($('.paletteInnerDep2 ul').width()*$('.paletteInnerDep2 ul').length);
}
else
{
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
		if (colorLengMax == true)
		{
			layerPop('palettePop');
			$('#palettePop .errorType').hide();
			$('#palettePop .errorType2').show();
			//팔레트 완성후 추가했을때 경고창
			return;
		}

		if (ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2'))
		{
			if ($(this).find('img').length <= 0)
			{
				//색상추가액션
				$(this).append(ui.draggable.html());
				
				var innerOptId = $(this).find('img').attr('id');
				addOrder(innerOptId, 'inner');//주문내역에 추가
			}
		}
		else
		{
			if ($(this).find('img').length < 1)
			{
				$(this).append(ui.draggable);
			}
			else
			{
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
		if (colorLengMax == true)
		{
			layerPop('palettePop');
			$('#palettePop .errorType').hide();
			$('#palettePop .errorType2').show();
			//팔레트 완성후 추가했을때 경고창
			return;
		}

		if (ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2'))
		{
			if ($(this).closest('.paletteCartSizeS').find('> img').length <= 0)
			{
				//색상추가액션
				$(this).append(ui.draggable.html());
				
				var innerOptId = $(this).find('img').attr('id');
				addOrder(innerOptId, 'inner');//주문내역에 추가
			}
		}
		else
		{
			if ($(this).parents('.paletteCartSizeB').find('> img').length < 1)
			{
				if ($(this).find('> img').length < 1)
				{
					$(this).append(ui.draggable);
				}
				else
				{
					after = ui.draggable.closest('div').html();
					before = $(this).html();
					$(this).html(after);
					ui.draggable.closest('div').html(before);
				}
			}
			else
			{
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
				'<a href="javascript:onclick=r_del('+sapPrdCd+');" class="btnDel"><img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a>' +
			'</li>'
		);…