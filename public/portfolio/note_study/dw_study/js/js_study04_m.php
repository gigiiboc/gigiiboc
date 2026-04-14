<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>마이팔레트 | Natural benefits from Jeju, innisfree</title>
	<meta http-equiv="Content-Type" content="application/octet-stream; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="generator" content="editplus" />
	<meta name="keywords" content="" />
	<meta name="subject" content="마이팔레트" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="author" content="innisfree.com" />
	<meta name="copyright" content="innisfree.com" />
	<meta name="writer" content="innisfree" />
	<meta name="language" content="ko" />
	<meta name="build" content="2016. 01. 08" />
	<!--// shlee 0923  -->
	<meta property="og:image" content="https://images.innisfree.co.kr/resources/web/images/brand/logo.png" />
	<meta name="title" content="" />

	<link href="https://images.innisfree.co.kr/resources/web/images/common/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="https://images.innisfree.co.kr/resources/web/css/ui.css" />
	<link rel="stylesheet" href="https://images.innisfree.co.kr/resources/web/css/slick.css" />
	<link rel="stylesheet" href="https://images.innisfree.co.kr/resources/web/css/prdDetail.css" />
	<!-- 정기배송 171113 추가  -->
	<link rel="stylesheet" href="https://images.innisfree.co.kr/resources/web/css/jquery-ui.custom.css" />
	<!-- 171113 추가 -->
	<!-- 라이브러리 -->
	<script src="https://images.innisfree.co.kr/resources/common/js/lib/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="http://www.innisfree.com/kr/ko/resources/web/js/cartUtil.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/imagesloaded.pkgd.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/slick.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/css3-mediaqueries.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/jquery.masonry.min.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/common/js/lib/jquery.lazyload.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/ui.js" type="text/javascript"></script>
	<script src="https://images.innisfree.co.kr/resources/web/js/pdtDetail.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://images.innisfree.co.kr/resources/common/js/search/search.js"></script>
	<script type="text/javascript" src="https://images.innisfree.co.kr/resources/common/js/search/beta.fix.js"></script>
	<script type="text/javascript" src="https://images.innisfree.co.kr/resources/common/js/search/ark.js"></script>
	<script type="text/javascript">
		var loginYn = 'false';
		var innerOptArr = new Array();
		//JS Map
		function MapPrd() {
			this.elements = new Array();
			this.put = function (_key, _value) {
				this.elements.push({
					key: _key,
					value: _value
				});
			};
			this.containsKey = function (_key) {
				var bln = false;
				try {
					for(var j = 0; j < this.elements.length; j++) {
						if(this.elements[j].key == _key) {
							bln = true;
						}
					}
				} catch(e) {
					bln = false;
				}
				return bln;
			};
			this.remove = function (_key) {
				var bln = false;
				try {
					for(var j = 0; j < this.elements.length; j++) {
						if(this.elements[j].key == _key) {
							this.elements.splice(j, 1);
							return true;
						}
					}
				} catch(e) {
					bln = false;
				}
				return bln;
			};
		}
		$(function () {
			colorLengMax = false;
			paletteReStart();
			paletteInnerDep2Set();
			$(document).on('click', '.selectStyle .selTit', function () {
				$(this).closest('.selectStyle').toggleClass('open').find('.selList ul').slideToggle(200);
			});
			$(document).on('click', '.selectStyle label', function (e) {
				$(this).closest('.selectStyle').toggleClass('open').find('.selTit').html($(this).html());
				$(this).closest('.selList ul').slideToggle(200);
				if(GetIEVersion() < 9) {
					e.preventDefault();
					$(this).siblings('input:radio[id=' + $(this).attr("for") + ']').click();
				}
			});
			/* 용기 SELECT */
			$('input:radio[name=paletteCaseOption]').on('change', function () {
				$('.paletteCaseImg img').attr('src', $(this).attr('data-caseImg'));
				var casePrdSeq = $(this).val();
				caseOptionList(casePrdSeq);
				$('#caseTit').html("팔레트 - 옵션");
				$('#caseOptId').val('');
				//innerReset();
			});
			/* 리필 SELECT */
			$('input:radio[name=paletteInnerOption]').on('change', function () {
				var parentCd = $(this).val();
				innerList(parentCd);
				//innerReset();
			});
			/* 용기 옵션 선택 */
			$(document).on('click', '#myPalette .caseOption a', function () {
				$('.paletteCaseImg img').attr('src', $(this).attr('data-caseImg'));
				var caseTit = $(this).attr('kindNm');
				$('#caseTit').html(caseTit);
				var caseOptId = $(this).attr('id');
				$('#caseOptId').val(caseOptId);
				return false;
			});
			/* 용기 선택 클릭 */
			$(document).on('click', '.paletteStep1 a.confirmBtn', function () {
				var caseOptId = $('#caseOptId').val();
				if(caseOptId == '' || typeof (caseOptId) == 'undefined') {
					alert('용기를 선택해 주세요.');
				} else {
					addOrder(caseOptId, 'case');
				}
				return false;
			});
			/* 선택내역 펼치기/닫기 */
			$('#myPalette .totalPrice .btnSpread').on('click', function () {
				$(this).toggleClass('spread');
				$('#myPalette .orderList .list ul').toggleClass('all');
				return false;
			});
			/* 색상추가구매 펼치기/닫기  */
			$('.addColor .btnSpread').on('click', function () {
				$('.addColor').toggleClass('open');
				return false;
			});
			/* 색상 추가구매 클릭 */
			$('.paletteCon .addColorBtn').on('click', function () {
				if($(this).hasClass('active')) {
					$('.paletteCon .addColor').show();
				}
				return false;
			});
			/* 팔레트 삭제 */
			$(document).on('click', '.paletteCart .btnDel', function () {
				var delOptId = $(this).closest('div').find('img').attr('id');
				var sapPrdCd = $("#" + delOptId).attr("sapPrdCd");
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
		function paletteStep1() {
			$('.paletteStep1').show();
			$('.paletteStep2').hide();
			$('#myPalette .paletteStep li').removeClass('on');
			$('#myPalette .paletteStep li').eq(0).addClass('on');
			innerReset();
		}
		//리필 초기화
		function innerReset() {
			$('.paletteCart').each(function () {
				$(this).closest('div').find('img').remove();
			});
			colorLengMax = false;
			//innerOptArr = new Array();
			$('.paletteCon .addColorBtn').removeClass('active');
			$('.paletteCon .addColor').hide();
			$('.paletteCon .addColorList').html('');
		}
		//리필 추가 스탭선택
		function paletteStep2() {
			if($("li[name=optC]").length > 0) {
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
			var pSize2 = 4; //용기 사이즈
			$("input[name=cartSeq]").each(function () {
				pSize = parseInt($(this).attr('psize'));
				if(pSize > pSize2) {
					pSize2 = pSize;
				}
			});
			$('#pSize').val(pSize2);
			$('.paletteLeng').removeClass('show');
			$('#paletteLeng' + $('#pSize').val()).addClass('show');
			/* $('.paletteStep1').hide();
			$('.paletteStep2').show();
			$('#myPalette .paletteStep li').removeClass('on');
			$('#myPalette .paletteStep li').eq(1).addClass('on'); */
		}
		/* paletteInnerDep2 */
		function paletteInnerDep2Set() {
			paletteInnerDep2Po = 0;
			if($('.paletteInnerDep2 ul').length > 1) {
				$('.paletteInnerDep2 .cont').width($('.paletteInnerDep2 ul').width() * $('.paletteInnerDep2 ul').length);
			} else {
				$('.paletteInnerDep2 .btn').hide();
			}
		}

		function paletteInnerDep2Prev() {
			if(paletteInnerDep2Po > 0) {
				paletteInnerDep2Po -= $('.paletteInnerDep2 ul').width();
				$('.paletteInnerDep2 .cont').animate({
					'margin-left': -paletteInnerDep2Po
				})
			}
		}

		function paletteInnerDep2Next() {
			if(paletteInnerDep2Po < $('.paletteInnerDep2 .cont').width() - $('.paletteInnerDep2 ul').width()) {
				paletteInnerDep2Po += $('.paletteInnerDep2 ul').width();
				$('.paletteInnerDep2 .cont').animate({
					'margin-left': -paletteInnerDep2Po
				})
			}
		}
		/* 팔레트 드레그 */
		function paletteReStart() {
			$(".paletteInnerDep2 .dragCon").draggable({
				appendTo: '.paletteCon.paletteStep2',
				helper: "clone",
				cursor: "move"
			});
			$(".paletteLeng .paletteCartSizeB > img").draggable({
				appendTo: '.paletteCon.paletteStep2',
				helper: "clone",
				cursor: "move"
			});
			$(".paletteLeng .paletteCartSizeS > img").draggable({
				appendTo: '.paletteCon.paletteStep2',
				helper: "clone",
				cursor: "move"
			});
			$('.paletteLeng .paletteCartSizeB').droppable({
				accept: ".dragCon.size2, .paletteLeng .paletteCartSizeB > img",
				drop: function (event, ui) {
					if(colorLengMax == true) {
						layerPop('palettePop');
						$('#palettePop .errorType').hide();
						$('#palettePop .errorType2').show();
						//팔레트 완성후 추가했을때 경고창
						return;
					}
					if(ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2')) {
						if($(this).find('img').length <= 0) {
							//색상추가액션
							$(this).append(ui.draggable.html());
							var innerOptId = $(this).find('img').attr('id');
							addOrder(innerOptId, 'inner'); //주문내역에 추가
						}
					} else {
						if($(this).find('img').length < 1) {
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
				drop: function (event, ui) {
					if(colorLengMax == true) {
						layerPop('palettePop');
						$('#palettePop .errorType').hide();
						$('#palettePop .errorType2').show();
						//팔레트 완성후 추가했을때 경고창
						return;
					}
					if(ui.draggable.closest('.dragZone').hasClass('paletteInnerDep2')) {
						if($(this).closest('.paletteCartSizeS').find('> img').length <= 0) {
							//색상추가액션
							$(this).append(ui.draggable.html());
							var innerOptId = $(this).find('img').attr('id');
							addOrder(innerOptId, 'inner'); //주문내역에 추가
						}
					} else {
						if($(this).parents('.paletteCartSizeB').find('> img').length < 1) {
							if($(this).find('> img').length < 1) {
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
				drop: function (event, ui) {
					var innerOptId = ui.draggable.find('img').attr('id');
					var sapPrdCd = $("#" + innerOptId).attr("sapPrdCd");
					//색상추가액션
					$('.addColorList').append(
						'<li class="addOptLi_' + sapPrdCd + '">' +
						'<p class="img"><img src="' + ui.draggable.find('img').attr('src') + '" /></p>' +
						'<p class="colorName">' + ui.draggable.find('img').attr('alt') + '</p>' +
						'<a href="javascript:onclick=r_del(' + sapPrdCd + ');" class="btnDel"><img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a>' +
						'</li>'
					);
					addOrder(innerOptId, 'inner'); //주문내역에 추가
				}
			});
		}
		/* 팔레트 컬러 갯수 체크 */
		function colorLengChk() {
			var colorLeng = 0;
			$('.paletteLeng:visible .paletteCart div').removeClass('btnShow');
			$('.paletteLeng:visible .paletteCart img').each(function () {
				colorLeng += parseInt($(this).attr('data-imgsize'));
				$(this).closest('div').addClass('btnShow');
			});
			if($('.paletteLeng:visible').hasClass('paletteLeng4') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng) {
				colorLengMax = true;
			} else if($('.paletteLeng:visible').hasClass('paletteLeng8') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng) {
				colorLengMax = true;
			} else if($('.paletteLeng:visible').hasClass('paletteLeng18') && $('.paletteLeng:visible .paletteCartSizeS').length == colorLeng) {
				colorLengMax = true;
			} else {
				colorLengMax = false;
			}
			if(colorLengMax == true) {
				$('.paletteCon .addColorBtn').addClass('active');
			}
		}
		/* 어드민 중분류 클릭시 */
		function paletteInnerDep2Change(parentCd) {
			innerOptionList(parentCd)
		};
		//용기 옵션 리스트
		function caseOptionList(prdSeq) {
			var url = "http://www.innisfree.com/kr/ko/MyPaletteCaseOptionList.do";
			new jQuery.ajax({
				type: "POST",
				url: url,
				data: {
					prdSeq: prdSeq
				},
				success: function (msg) {
					$('#caseOption').html(msg);
				}
			});
		}
		//리필 중분류 리스트
		function innerList(parentCd) {
			var url = "http://www.innisfree.com/kr/ko/MyPaletteInnerList.do";
			new jQuery.ajax({
				type: "POST",
				url: url,
				data: {
					cd: parentCd,
					listType: 'B' //(A-대분류 B-중분류)
				},
				success: function (msg) {
					var data = $.trim(msg);
					if(data == "") {
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
		function innerOptionList(parentCd) {
			var url = "http://www.innisfree.com/kr/ko/MyPaletteInnerOptionList.do";
			new jQuery.ajax({
				type: "POST",
				url: url,
				data: {
					cd: parentCd
				},
				success: function (msg) {
					$('#innerOption').html(msg);
					paletteReStart();
					paletteInnerDep2Set();
				}
			});
		}
		//주문내역 담기 공통
		var mapPrd = new MapPrd(); //주문선택 리스트map
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
			prdSeq = $("#" + id).attr("prdseq");
			sapCd = $("#" + id).attr("sapPrdCd");
			salPrc = parseInt($("#" + id).attr("salPrc"));
			kindNm = $("#" + id).attr("kindNm");
			stkStat = $("#" + id).attr("stkStat");
			stk = $("#" + id).attr("stk");
			p_type = $("#" + id).attr("p_type");
			sapLength = $("#" + id).attr("sapLength");
			pSize = $("#" + id).attr("psize");
			if(prdType == 'case') {
				step = '선택한 용기_' + kindNm;
				idType = 'optC';
			} else {
				step = '선택한 리필_' + kindNm;
				idType = 'optI';
			}
			var optCnt = 1;
			var html = "";
			html += '<li class="case" name="' + idType + '" id="optLi_' + sapCd + '">\n';
			html += '	<input type="hidden" class="input-text" id="qty_' + sapCd + '" name="qty" value="1" />';
			html += '	<input type="hidden" class="input-text" id="prc_' + sapCd + '" name="prc" value="' + salPrc + '" />';
			html += '	<input type="hidden" name="prdSeq" id="prdSeq" value="' + prdSeq + '" />';
			html += '	<input type="hidden" name="prdType" id="prdType" value="' + prdType + '" />';
			html += '	<input type="hidden" name="cartSeq" id="cartSeq" value="' + prdSeq + '$' + sapCd + '$' + p_type + '$' + sapLength + '" psize="' + pSize + '" />';
			html += '	<input type="hidden" class="input-text" id="stk_' + sapCd + '" name="stk" value="' + stk + '" />';
			html += '	<input type="hidden" class="input-text" id="stkStat_' + sapCd + '" name="stkStat" value="' + stkStat + '" />';
			html += '	<p class="optionName">' + step + '</p>\n';
			html += '	<div class="count">\n';
			html += '	<a href="javascript:onclick=cnt_add_del(' + sapCd + ',\'-\');" class="btnMinus"><em>-</em><span></span></a>\n';
			html += '		<p id="cartNum_' + sapCd + '">1</p>\n';
			html += '	<a href="javascript:onclick=cnt_add_del(' + sapCd + ',\'+\');" class="btnPlus"><em>+</em><span></span></a>\n';
			html += '	</div>\n';
			html += '	<div class="price"><span id="sapPrc_' + sapCd + '">' + $.jutil.setComma(salPrc + "") + '</span>원</div>\n';
			html += '	<a href="javascript:onclick=fnOptDel(' + sapCd + ');" class="btnDel"><img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a>\n';
			html += '</li>\n';
			var totSumVal = parseInt($("#totSumAmt").val());
			if(!$("#cartNum_" + sapCd).html()) {
				totSumVal = totSumVal + salPrc;
			} else {
				optCnt = parseInt($("#cartNum_" + sapCd).text()) + 1;
				if(stkStat == "2" && optCnt > stk * 1) {
					$.jcom.showCommonLayer("상품재고가 부족합니다.");
					return;
				}
				$("#qty_" + sapCd).val(optCnt);
				var sum = salPrc * optCnt;
				$("#cartNum_" + sapCd).text(optCnt);
				$("#sapPrc_" + sapCd).html($.jutil.setComma(sum + ""));
				totSumVal = totSumVal + salPrc;
			}
			$("#sumAmt").html($.jutil.setComma(totSumVal + ""));
			$("#totSumAmt").val(totSumVal);
			if(mapPrd.containsKey(sapCd)) {} else {
				$("#optCntSelect").append(html);
				mapPrd.put(sapCd, sapCd);
			}
		}
		//수량 추가 감소 (+,-)
		function cnt_add_del(sapCd, flag) {
			var tmpCnt = 0;
			var sum = 0;
			var qty = parseInt($("#qty_" + sapCd).val());
			var prc = parseInt($("#prc_" + sapCd).val());
			var stk = parseInt($("#stk_" + sapCd).val());
			var stkStat = parseInt($("#stkStat_" + sapCd).val());
			var totSumVal = parseInt($("#totSumAmt").val());
			if(flag == "+") {
				tmpCnt = qty + 1;
				if(stkStat == "2" && tmpCnt > stk * 1) {
					alert('상품재고가 부족합니다.');
					return;
				}
				totSumVal = totSumVal + prc;
			} else {
				tmpCnt = qty - 1;
				if(tmpCnt < 1) {
					return;
				}
				totSumVal = totSumVal - prc;
			}
			$("#cartNum_" + sapCd).text(tmpCnt);
			$("#qty_" + sapCd).val(tmpCnt);
			sum = tmpCnt * prc;
			$("#sapPrc_" + sapCd).html($.jutil.setComma(sum + ""));
			$("#sumAmt").html($.jutil.setComma(totSumVal + ""));
			$("#totSumAmt").val(totSumVal);
			//r_del2(sapCd, 'cnt_add_del');
		}
		//리필그리드 추가색상 삭제
		function r_del(sapCd) {
			var tmpCnt = 0;
			var qty = $("#qty_" + sapCd).val();
			$('.addOptLi_' + sapCd).each(function (index) {
				$(this).remove();
				return false;
			});
			if(typeof qty == 'undefined') {
				return;
			}
			tmpCnt = parseInt(qty) - 1;
			if(tmpCnt < 1) {
				fnOptDel(sapCd);
				return;
			} else {
				cnt_add_del(sapCd, '-');
			}
		}
		//주문내역 삭제
		function fnOptDel(sapCd) {
			if(!sapCd || $("#optLi_" + sapCd).length <= 0) {
				return;
			}
			mapPrd.remove(sapCd);
			var qty = parseInt($("#qty_" + sapCd).val());
			var prc = parseInt($("#prc_" + sapCd).val());
			var sum = qty * prc;
			var totSumVal = $("#totSumAmt").val() - sum;
			$("#optLi_" + sapCd).remove();
			$("#sumAmt").html($.jutil.setComma(totSumVal + ""));
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
		function DirectCart(mode) {
			var ordType = '01';
			if(loginYn == 'false') {
				$.jhead.fnChkLoginPage();
				return false;
			}
			if($("input[name=cartSeq]").length > 0) {} else {
				$.jcom.showCommonLayer("제품을 선택하지 않으셨습니다. 주문할 수 없습니다.");
				return;
			}
			if($("li[name=optC]").length > 0) {} else {
				$.jcom.showCommonLayer("용기를 선택하지 않으셨습니다. 주문할 수 없습니다.");
				return;
			}
			if($("li[name=optI]").length > 0) {} else {
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
			$("input[name=cartSeq]").each(function (index) {
				sapPrdSt = $(this).val();
				sapPrdArr = sapPrdSt.split("$");
				p_type = sapPrdArr[2];
				sapLength = sapPrdArr[3];
				console.log("p_type : " + p_type + ", sapLength : " + sapLength);
				if((sapLength == '1' || p_type == 'P' || p_type == 'E') === 'true') {
					prdType = "SINGLE_PRD";
				} else {
					prdType = "OPTION_PRD";
				}
				if(typeof p_type == 'undefined' || sapLength == 'undefined') {
					prdType = "SINGLE_PRD";
				}
				console.log("prdType : " + prdType);
				var prd = {
					prdSeq: sapPrdArr[0],
					sapPrdCd: sapPrdArr[1],
					ordQty: $("#qty_" + sapPrdArr[1]).val(),
					ordType: ordType,
					prdType: prdType
				}
				prdList.push(prd);
			});
			$.jcom.cartAdd(mode, prdList, function (data) {
				var r_code = data.orderBean.r_code;
				if(r_code === 'CART_SUCCESS') {
					layerPop('addCartEndPop');
				} else if(r_code === '0008') {
					setMoveDefaultValue("", "", "", "", "Y");
					layerPop('onlineJoinInfo');
				} else if(r_code === 'ORDER_SUCCESS') {
					alert("TODO : 바로구매 완료");
				} else if(r_code === 'REQUIRE_LOGIN_MEMBER_PRD') {
					$.jhead.fnChkLoginPage();
				} else if(r_code === 'REQUIRE_LOGIN_GIFT') {
					$.jhead.fnChkLoginPage();
				} else if(r_code === null) {
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
	</script>
</head>

<body>
	<div id="wrap" class="footUp">

		<!-- blackScreen -->
		<div class="blackScreen"></div>

		<!-- container -->
		<div id="container">
			<!-- 페이지id -->
			<div id="myPalette">
				<!-- //pageVisual -->
				<!-- 관리자 등록 배너 -->
				<div id="pageVisual" class="conArea2 pdtVisual1" style="background:url('https://www.innisfree.com/kr/ko/upload/product//0_pltBnrW1.jpg') center center no-repeat;background-size:auto 100%;-ms-behavior: url('/resources/web/css/backgroundsize.min.htc');behavior: url('/resources/web/css/backgroundsize.min.htc');">
					<!-- <h2 class="vCenter">
							마이 팔레트 메인배너
						</h2> -->
				</div>
				<!-- //pageVisual -->

				<!-- 마이 팔레트 컨텐츠 -->
				<div class="paletteArea">
					<div class="paletteStep">
						<ol>
							<li class="on"><em><span></span>STEP 1. 용기 선택</em></li>
							<li><em><span></span>STEP 2. 리필 선택</em></li>
						</ol>
					</div>
					<div class="conBox">
						<!-- STEP1 -->
						<input type="hidden" id="caseOptId" value="" />
						<input type="hidden" id="pSize" value="" />
						<div class="paletteCon paletteStep1">
							<div class="leftCon">
								<div class="tit">
									<p>제품 View</p>
								</div>
								<p class="paletteCaseOption" id="caseTit">팔레트 - 옵션</p>
								<div class="paletteCaseImg">
									<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" alt="" />
								</div>
								<a href="#none" class="confirmBtn">선택하기</a>
							</div>
							<div class="rightCon">
								<div class="selectStyle">
									<button class="selTit" type="button">용기 선택</button>
									<div class="selList">
										<ul>
											<li>
												<input type="radio" id="paletteCaseOption0" name="paletteCaseOption" value="16001" data-caseImg="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" />
												<label for="paletteCaseOption0">(LTD) 마이 팔레트 X 올림피아 자그놀리 [Small]</label>
											</li>
											<li>
												<input type="radio" id="paletteCaseOption1" name="paletteCaseOption" value="16002" data-caseImg="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" />
												<label for="paletteCaseOption1">(LTD) 마이 팔레트 X 올림피아 자그놀리 [Medium]</label>
											</li>
											<li>
												<input type="radio" id="paletteCaseOption2" name="paletteCaseOption" value="14782" data-caseImg="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" />
												<label for="paletteCaseOption2">마이 팔레트 [Small]</label>
											</li>
											<li>
												<input type="radio" id="paletteCaseOption3" name="paletteCaseOption" value="14783" data-caseImg="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" />
												<label for="paletteCaseOption3">마이 팔레트 [Medium]</label>
											</li>
											<li>
												<input type="radio" id="paletteCaseOption4" name="paletteCaseOption" value="14784" data-caseImg="http://www.innisfree.com/kr/ko/resources/web/images/shopping/MyPalette.png" />
												<label for="paletteCaseOption4">마이 팔레트 [Large]</label>
											</li>
										</ul>
									</div>
								</div>
								<ul class="caseOption" id="caseOption">
									<li><a href="#" id="opt_111791714" data-caseimg="https://www.innisfree.com/kr/ko/upload/product/16001_0_pltW1.png" kindnm="마이 팔레트S X 올림피아 자그놀리 1호" sapprdp="0.0" saplength="0" p_type="N" stk="335" stkstat="2" salprc="7000.0" prdseq="16001" sapprdcd="111791714" prdimg1st="올림피아-자그놀리s_1_450.png" colorchipimg="" salfl="1" psize="4"><img src="https://www.innisfree.com/kr/ko/upload/product/16001_0_pltT1.png"></a></li>
									<li><a href="#" id="opt_111791715" data-caseimg="https://www.innisfree.com/kr/ko/upload/product/16001_1_pltW1.png" kindnm="마이 팔레트S X 올림피아 자그놀리 2호" sapprdp="0.0" saplength="0" p_type="N" stk="324" stkstat="2" salprc="7000.0" prdseq="16001" sapprdcd="111791715" prdimg1st="올림피아-자그놀리s_1_450.png" colorchipimg="" salfl="1" psize="4"><img src="https://www.innisfree.com/kr/ko/upload/product/16001_1_pltT1.png"></a></li>
									<li><a href="#" id="opt_111791716" data-caseimg="https://www.innisfree.com/kr/ko/upload/product/16001_2_pltW1.png" kindnm="마이 팔레트S X 올림피아 자그놀리 3호" sapprdp="0.0" saplength="0" p_type="N" stk="368" stkstat="2" salprc="7000.0" prdseq="16001" sapprdcd="111791716" prdimg1st="올림피아-자그놀리s_1_450.png" colorchipimg="" salfl="1" psize="4"><img src="https://www.innisfree.com/kr/ko/upload/product/16001_2_pltT1.png"></a></li>
									<li><a href="#" id="opt_111791717" data-caseimg="https://www.innisfree.com/kr/ko/upload/product/16001_3_pltW1.png" kindnm="마이 팔레트S X 올림피아 자그놀리 4호" sapprdp="0.0" saplength="0" p_type="N" stk="308" stkstat="2" salprc="7000.0" prdseq="16001" sapprdcd="111791717" prdimg1st="올림피아-자그놀리s_1_450.png" colorchipimg="" salfl="1" psize="4"><img src="https://www.innisfree.com/kr/ko/upload/product/16001_3_pltT1.png"></a></li>
								</ul>
							</div>
						</div>

						<!-- STEP2 -->
						<div class="paletteCon paletteStep2">
							<input type="hidden" id="innerOptId" value="" />
							<div class="leftCon">
								<div class="tit">
									<p>제품 View</p>
								</div>
								<p class="paletteInfo">오른편에서 원하는 색상을 끌어다가 팔레트에 놓으세요.<br />나만의 팔레트가 완성됩니다.</p>

								<div class="paletteLeng4 paletteLeng" id="paletteLeng4">
									<!-- 4기본 클래스 show -->
									<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteLeng4.png" alt="4구 팔레트 -옵션 01" />
									<div class="paletteCart">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
								</div>
								<div class="paletteLeng8 paletteLeng" id="paletteLeng8">
									<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteLeng8.png" alt="4구 팔레트 -옵션 01" />
									<div class="paletteCart paletteCart1">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
									<div class="paletteCart paletteCart2">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
								</div>
								<div class="paletteLeng18 paletteLeng" id="paletteLeng18">
									<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteLeng18.png" alt="4구 팔레트 -옵션 01" />
									<div class="paletteCart paletteCart1">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
									<div class="paletteCart paletteCart2">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
									<div class="paletteCart paletteCart3">
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
										<div class="paletteCartSizeB">
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<div class="paletteCartSizeS"><a href="#" class="btnDel"><em class="hide">삭제</em></a></div>
											<a href="#" class="btnDel"><em class="hide">삭제</em></a>
										</div>
									</div>
								</div>

								<a href="#" class="addColorBtn">색상 추가 구매하기</a>
								<div class="addColor">
									<p class="txt">오른편에서 추가 구매 할 색상을 선택하세요. </p>
									<ul class="addColorList">
										<li>
											<!-- <p class="img"><img src="http://www.innisfree.com/kr/ko/resources/web/images/temp/colorList2.jpg" /></p>
												<p class="colorName">섀도우명01</p>
												<a href="#" class="btnDel"><img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/btnDel.png" alt="삭제" /></a> -->
										</li>
									</ul>
									<a href="#" class="btnSpread"><span class="hide">펼치기/닫기</span></a>
								</div>
							</div>

							<div class="rightCon">
								<div class="selectStyle">
									<button class="selTit" type="button">리필 선택</button>
									<div class="selList">
										<ul>
											<li>
												<input type="radio" id="paletteInnerOption0" name="paletteInnerOption" value="AA">
												<label for="paletteInnerOption0">아이섀도우</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption1" name="paletteInnerOption" value="BB">
												<label for="paletteInnerOption1">블러셔</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption2" name="paletteInnerOption" value="CC">
												<label for="paletteInnerOption2">하이라이터</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption3" name="paletteInnerOption" value="DD">
												<label for="paletteInnerOption3">아이브로우</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption4" name="paletteInnerOption" value="EE">
												<label for="paletteInnerOption4">쉐이딩</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption5" name="paletteInnerOption" value="FF">
												<label for="paletteInnerOption5">컬러코렉터</label>
											</li>
											<li>
												<input type="radio" id="paletteInnerOption6" name="paletteInnerOption" value="GG">
												<label for="paletteInnerOption6">컨실러</label>
											</li>
										</ul>
									</div>
								</div>

								<!-- 중분류 -->
								<ul class="paletteInnerDep1" id="paletteInnerDep1">
								</ul>

								<!-- 리필 옵션 -->
								<div class="paletteInnerDep2 dragZone">
									<div class="cont after">
										<ul class="after" id="innerOption">
										</ul>
									</div>
									<div class="btn">
										<a href="javascript:void(0);" onclick="paletteInnerDep2Prev();" class="prev"><span class="hide">PREV</span></a>
										<a href="javascript:void(0);" onclick="paletteInnerDep2Next();" class="next"><span class="hide">NEXT</span></a>
									</div>
								</div>
							</div>
						</div>

						<!-- 주문내역 -->
						<div class="orderList">
							<h3 class="tit">현재 선택 내역</h3>
							<div class="list">
								<ul id="optCntSelect">
								</ul>
							</div>
							<dl class="totalPrice">
								<a href="#" class="btnSpread"><span class="first">펼치기</span><span class="last">접기</span></a>
								<dt>최종 결제 금액</dt>
								<input type="hidden" id="totSumAmt" name="totSumAmt" value="0" />
								<dd><span id="sumAmt">0</span>원</dd>
							</dl>
							<div class="btnArea">
								<ul class="paletteStep1">
									<li><a href="#" onClick="DirectCart('CART'); return false;"><span>장바구니 담기</span></a></li>
									<li><a href="javascript:void(0);" onclick="paletteStep2();"><span>리필 추가 선택하기</span></a></li>
								</ul>
								<ul class="paletteStep2">
									<li><a href="javascript:void(0);" onclick="paletteStep1();"><span>용기 선택 가기</span></a></li>
									<li><a href="#" onClick="DirectCart('CART'); return false;"><span>최종 장바구니 담기</span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="paletteDetail">
						<div class="detailCon">
							<div class="visual">
								<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteDetailVisual.jpg" alt="내맘대로 마이팔레트" />
								<ul>
									<li>
										<p class="tit">140개 컬러 , 7가지 유형으로<br /> 구성하는 세상에 하나뿐인<br /> 나만의 Only 1 팔레트.</p>
										<p class="txt">쿠션과 립스틱 사이의 섀도우, 블러셔,<br /> 쉐이딩, 하이라이터, 브로우, 컨실러 ,컬러<br /> 코렉터 7가지 유형으로 구성된 다채로운 텍스춰와<br /> 세분화된 컬러 라인으로<br /> 나만의 맞춤 메이크업 룩 연출이 가능 합니다.</p>
									</li>
									<li>
										<p class="tit">쉽고 간편하게 누구나 착착!<br /> 사용 가능한 자석 용기</p>
										<p class="txt">자석으로 간편하게 체결되는 용기 구조로<br /> 단품으로도 사용 가능하며 팔레트 용기에<br /> 손쉽게 부착하여 나만의 컬러로<br /> 맞춤 팔레트를 만들 수 있습니다.</p>
									</li>
									<li>
										<p class="tit">이태리의 기술력을 담은<br /> 우수한 발색력과 밀착력</p>
										<p class="txt">MADE IN ITALY 제조로 이태리의 우수한<br /> 기술력을 담아 고급스러운 컬러감과<br /> 우수한 밀착력을 선사해 줍니다. <br /> <span class="colorRed">마이 아이섀도우(쉬머), 마이 블러셔/<br /> 하이라이터/컨투어링 파우더 타입에 한함)</span></p>
									</li>
								</ul>
							</div>

							<div class="paletteSlider">
								<div>
									<div class="imgWrap"><img src="https://images.innisfree.co.kr/kr/ko/upload/pdtDetail/makeup/color/myPalette/common02_8.jpg" alt=""></div>
									<div class="descWrap">
										<p class="colorTit">마이팔레트 퍼스널 컬러 4가지 룩</p>
										<div class="vCenter">
											<h4 class="tit">[봄웜]</h4>
											<p class="sTit">이달소 비비의<br /> COZY(따듯한 오렌지레드) 메이크업</p>
											<p>
												<span class="ngB">아이</span><br /> 마이 아이 섀도우 매트 32호 흩날리는 살구꽃<br /> 마이 아이 섀도우 매트 43호 볼 빨간 장미<br /> 마이 아이섀도우 글리터 6호 한조각 티라미수<br /> 마이 아이섀도우 글리터 21호 작약 꽃다발<br /> 스키니 꼼꼼 라이너 3호 초콜릿 봉봉<br />

												<span class="ngB">블러셔</span><br /> 마이 블러셔 (크림) 1호 나른나른 살구<br /> 마이 블러셔 17호 아련한 목련화<br />

												<span class="ngB">립</span><br /> 리얼핏 립스틱 21호 첫 햇살 코랄
											</p>
										</div>
									</div>
								</div>
								<div>
									<div class="imgWrap"><img src="https://images.innisfree.co.kr/kr/ko/upload/pdtDetail/makeup/color/myPalette/common02_9.jpg" alt=""></div>
									<div class="descWrap">
										<p class="colorTit">마이팔레트 퍼스널 컬러 4가지 룩</p>
										<div class="vCenter">
											<h4 class="tit">[여름쿨]</h4>
											<p class="sTit">이달소 희진의<br /> CHEERFUL(상큼한 과즙상레드) 메이크업</p>
											<p>
												<span class="ngB">아이</span><br /> 마이 아이 섀도우 쉬머 3호 벚꽃 나빌레라<br /> 마이 아이 섀도우 쉬머 32호 마른 수국 향기<br /> 마이 아이섀도우 글리터 22호 달빛 새벽 이슬<br /> 마이 아이섀도우 글리터 24호 달콤 자두 사탕<br /> 스키니 꼼꼼 라이너 1호 속삭이는 솔방울<br />

												<span class="ngB">블러셔</span><br /> 마이 블러셔 (크림) 3호 두근두근 체리<br /> 마이 블러셔 15호 반짝이는 아기장미<br />

												<span class="ngB">립</span><br /> 비비드 크리미 틴트 3호 촉촉 산딸기 푸딩
											</p>
										</div>
									</div>
								</div>
								<div>
									<div class="imgWrap"><img src="https://images.innisfree.co.kr/kr/ko/upload/pdtDetail/makeup/color/myPalette/common02_10.jpg" alt=""></div>
									<div class="descWrap">
										<p class="colorTit">마이팔레트 퍼스널 컬러 4가지 룩</p>
										<div class="vCenter">
											<h4 class="tit">[가을웜]</h4>
											<p class="sTit">이달소 하슬의<br /> ROMANTIC(페미닌한 브라운레드) 메이크업</p>
											<p>
												<span class="ngB">아이</span><br /> 마이 아이 섀도우 매트 34호 볼 빨간 튤립<br /> 마이 아이 섀도우 쉬머 37호 오독오독 맛밤<br /> 마이 아이섀도우 쉬머 40호 도로록 진주 한알<br /> 마이 아이섀도우 쉬머 41호 석양 아래 동백꽃<br /> 스키니 꼼꼼 라이너 4호 말린 체리 열매<br />

												<span class="ngB">블러셔</span><br /> 마이 블러셔 18호 크림 가득 메리골드<br />

												<span class="ngB">하이라이터</span><br /> 마이 하이라이터 1호 별빛 가득 새벽<br />

												<span class="ngB">립</span><br /> 리얼핏 립스틱 24호 갓 햇살 레드
											</p>
										</div>
									</div>
								</div>
								<div>
									<div class="imgWrap"><img src="https://images.innisfree.co.kr/kr/ko/upload/pdtDetail/makeup/color/myPalette/common02_11.jpg" alt=""></div>
									<div class="descWrap">
										<p class="colorTit">마이팔레트 퍼스널 컬러 4가지 룩</p>
										<div class="vCenter">
											<h4 class="tit">[겨울쿨]</h4>
											<p class="sTit">이달소 현진의<br /> CRUSH(쿨내진동 플럼레드) 메이크업</p>
											<p>
												<span class="ngB">아이</span><br /> 마이 아이 섀도우 쉬머 7호 말린 자두<br /> 마이 아이 섀도우 10호 따끈따끈 고구마<br /> 마이 아이섀도우 글리터 22호 달빛 새벽 이슬<br /> 마이 아이섀도우 23호 보라 장미 부케<br /> 스키니 꼼꼼 라이너 5호 깜깜한 밤<br />

												<span class="ngB">블러셔</span><br /> 마이 블러셔 20호 달콤한 피오니<br />

												<span class="ngB">컨투어링</span><br /> 마이 컨투어링 1호 부드러운 머랭쿠키<br />

												<span class="ngB">립</span><br /> 비비드 크리미 틴트 12호 따뜻한 뱅쇼 한 모금
											</p>
										</div>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								$('.paletteSlider').slick({
									infinite: true,
									speed: 300,
									slidesToShow: 1,
									autoplay: true,
									autoplaySpeed: 3000,
									draggable: false
								});
							</script>

							<div class="paletteYoutube">
								<div class="youtubeCon">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/w9O7joGceNo?rel=0?ecver=1" frameborder="0" allowfullscreen></iframe>
								</div>
								<!-- <a href="http://www.innisfree.com/kr/ko/EventView.do?eventSeq=351&procStat=2&channelTyp=" target="_blank" class="personalColorLink">나의 퍼스널 컬러 진단하기</a> -->
							</div>

							<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteImg.png" alt="" class="paletteStep1" />
							<img src="http://www.innisfree.com/kr/ko/resources/web/images/shopping/paletteImg2.png" alt="" class="paletteStep2" />

							<div class="paletteLink">
								<p class="tit">상품 요약 정보 및 구매 유의 사항 보기</p>
								<p class="txt">제품명을 누르시면 각 제품의 상세 페이지로 연결됩니다. 각 제품 상세페이지에서 확인해 주세요.</p>
								<ul class="paletteStep1">
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14782">마이팔레트 공용기 [Small]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14783">마이팔레트 공용기 [Medium]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14784">마이팔레트 공용기 [Large]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=16001">마이팔레트 x 올림피아 [Small]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=16002">마이팔레트 x 올림피아 [Medium]</a></li>
								</ul>
								<ul class="paletteStep2">
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14772">마이 아이섀도우 [글리터]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14771">마이 아이섀도우 [매트]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14769">마이 아이섀도우 [쉬머]</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14774">마이 블러셔</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14775">마이 블러셔 (크림)</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14773">마이 아이브로우</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14781">마이 컨실러</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14779">마이 컨투어링</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14780">마이 컬러 코렉터</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14776">마이 하이라이터</a></li>
									<li><a href="http://www.innisfree.com/kr/ko/ProductView.do?prdSeq=14777">마이 크림 하이라이터</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- //마이 팔레트 컨텐츠 -->
			</div>
			<!-- //페이지id -->
		</div>
		<!-- //container -->

		<!-- 공통팝업 -->
		<div class="popArea">
			<div class="popAreaBox">

				<!-- 공통개발팝업 -->
				<div class="popWrap PopBasic" id="commonPopup" style="width:570px;">
					<div class="popPadding">

						<p class="popTit">알려 드립니다.(공통 문구 지정 필요...)</p>
						<div class="popCon">

							<p class="txt1"></p>

						</div>

						<div class="popBtn">
							<p><span class="btnType sizeR colorB"><a href="#" onclick="layerPopClose();return false;" id="commonPopupBtn">확인</a></span></p>
						</div>

						<a href="javascript:void(0)" onclick="layerPopClose();return false;" class="popClose"><span class="hide">닫기</span></a>

					</div>
				</div>

				<!-- 공통 개발 컨펌 창 -->
				<div class="popWrap PopBasic" style="width:570px;" id="commonConfirmPopup">
					<div class="popPadding">

						<p class="popTit">알려 드립니다</p>
						<div class="popCon">
							<p class="txt1">
								<!-- 내용 -->
							</p>
							<p class="txt2"></p>
						</div>
						<div class="popBtn popBtn2">
							<ul>
								<li><span class="btnType sizeR colorW"><a href="javascript:void(0);" onclick="layerPopClose();return false;">취소</a></span></li>
								<li><span class="btnType sizeR colorB"><a href="javascript:void(0);" onclick="confirmOK();return false;">확인</a></span></li>
							</ul>
						</div>
						<a href="javascript:void(0)" onclick="layerPopClose();return false;" class="popClose"><span class="hide">닫기</span></a>
					</div>
				</div>
				<!-- //공통 개발 컨펌 창 -->

				<!-- 2017-11 추가 정기배송 로그인 팝업 -->
				<div class="popWrap PopBasic" id="pdelivNeedLogin">
					<div class="popPadding">
						<p class="popTit">정기배송 로그인 안내</p>
						<div class="popCon">
							<p class="txt2">정기배송 주문시 로그인이 필요합니다.<br>로그인 페이지로 이동하시겠습니까?</p>
						</div>
						<div class="popBtn">
							<ul>
								<li><span class="btnType sizeR colorB"><a href="javascript:$.jhead.fnChkLoginPage();">로그인 페이지로 이동</a></span>
								</li>
								<li><span class="btnType sizeR colorW"><a href="javascript:layerPopClose();">취소</a></span>
								</li>
							</ul>
						</div>
						<a href="javascript:layerPopClose();" class="popClose"><span class="hide">닫기</span></a>
					</div>
				</div>
				<!-- /2017-11 추가 정기배송 로그인 팝업 -->

				<!-- 정기배송 이용가이드 팝업 -->
				<div id="pdelivGuidePop" class="popWrap">
					<div class="popPadding">
						<p class="popTit">이니스프리 정기배송 이용가이드</p>
						<div class="popCon colorBlack">
							<!-- 2017-12-19 내용변경 -->
							<div class="popDef">
								<div class="ngB">1. 정기배송 기준</div>
								<ul class="dashedList mgt7">
									<li>최소 2번 이상 주문 + 배송 최소 합산금액이 2만원 이상 시 이용 가능합니다.</li>
								</ul>
								<ul class="staredList mgt7 colorGray">
									<li>정기배송 진행 중 중도 주기변경은 불가능하며 한달 미루기 또는 정기배송 주문취소 후 재주문 해주시기 바랍니다. 자세한 사항은 고객센터 FAQ를 참조해주시기 바랍니다.</li>
								</ul>
							</div>
							<div class="popDef">
								<div class="ngB">2. 결제</div>
								<ul class="dashedList mgt7">
									<li>매달 지정된 주기에 따라 등록하신 카드로 자동 결제됩니다.</li>
								</ul>
							</div>
							<div class="popDef">
								<div class="ngB">3. 정기배송 혜택</div>
								<ul class="dashedList mgt7">
									<li>무료 배송</li>

								</ul>
								<ul class="staredList mgt7 colorGray">
									<li>정기배송 제품은 모든 쿠폰/포인트/사은품의 사용이 불가합니다. (등급산정은 허용)</li>
									<li>제품 단종, 리뉴얼 시 자동 결제와 정기배송 중단 후 메시지와 알림톡으로 공지됩니다.</li>
								</ul>
							</div>
							<div class="popDef">
								<div class="ngB">4. 정기배송 패널티(할인 프로모션 적용 시)</div>
								<ul class="dashedList mgt7">
									<li>1번 배송 완료 후 서비스 중단 시 패널티가 발생됩니다.<br>(2번 이상 진행 후 중단 시 패널티 없음)</li>
									<li>패널티로 서비스 중단 시점에 할인받은 결제금액 취소 후 해당제품 정가로 재결제 진행됩니다.</li>
								</ul>
							</div>
							<!-- //2017-12-19 내용변경 -->
						</div>
						<a href="javascript:void(0);" onclick="layerPopClose();" class="popClose"><span class="hide">닫기</span></a>
					</div>
				</div>
				<!-- //정기배송 이용가이드 팝업  -->

			</div>
		</div>
		<!-- //공통팝업 -->

		<!-- popup -->
		<div class="popArea">
			<div class="popAreaBox">
				<!-- 용기 선택 -->
				<div class="popWrap" id="palettePop">
					<div class="popPadding">
						<p class="popTit">알림</p>
						<div class="popCon">
							<p class="errorType1 errorType">용기를 먼저 선택해 주세요.</p>
							<p class="errorType2 errorType">용기가 가득차서 추가선택해주세요</p>
						</div>
						<div class="popBtn">
							<p><span class="btnType sizeR colorB"><a href="#" onclick="layerPopClose();return false;">확인</a></p>
							</div>
							<a href="#" onclick="layerPopClose();return false;" class="popClose"><span class="hide">닫기</span></a>
						</div>
					</div>

					<!-- 장바구니 담기 완료 -->
					<div class="popWrap PopBasic" id="addCartEndPop" style="width:570px;">
						<div class="popPadding">
							<p class="popTit">장바구니 담기 완료</p>
							<div class="popCon">
								<p class="txt1">장바구니에 추가 되었습니다.</p>
								<p class="txt2">예약상품 구매 시 배송은 지정일에 진행되며,<br />함께 주문된 제품도 예약상품과 함께 배송됩니다<br />장바구니로 이동하시겠습니까?</p>
							</div>
							<div class="popBtn">
								<ul>
									<li><span class="btnType sizeR colorB"><a href="javascript:void(0);" onclick="layerPopClose(); fReset();">계속 쇼핑</a></span></li>
									<li><span class="btnType sizeR colorW"><a href="javascript:void(0);" onclick="openCart('cartArea', cartOpen); fReset();">장바구니로 이동</a></span></li>
								</ul>
							</div>
							<a href="javascript:layerPopClose(); fReset();" class="popClose"><span class="hide">닫기</span></a>
						</div>
					</div>
					<!-- //장바구니 담기 완료 -->

				</div>
			</div>
			<!-- //popup -->
	</div>
</body>

</html>