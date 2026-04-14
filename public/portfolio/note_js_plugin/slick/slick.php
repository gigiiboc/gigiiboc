<!doctype html>
<html lang="ko">
<head>
	<title>::: note :::</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
	<link rel="stylesheet" type="text/css" href="/note/resource/css/reset.css">
	<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
	<script src="/note/resource/js/jquery.easings.min.js"></script>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="/note/note_js_plugin/slick/slick.css">
	<script src="/note/note_js_plugin/slick/slick.min.js"></script>
	<style>
		.pdtView {height:100%;position: relative;}
		.pdtView .pdt_visual {overflow:hidden;position:relative;height:100vh;min-height:768px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-o-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;}
		.pdtView .pdt_visual .topVisual {position:relative;width:100%;height:100%; /*background:url('/front/ko/images/shop/bg_product.jpg') no-repeat center center / auto 100%;*/ background:#f4f4f4; }
		.pdtView .pdt_visual .visualImg {position:relative;width:100%;height:100%;}
		.pdtView .pdt_visual .visualImg .slick-list {height:100%;}
		.pdtView .pdt_visual .visualImg .slick-track {height:100%;}
		.pdtView .pdt_visual .visualImg .item {width:100%;height:100%;background-repeat:no-repeat;background-size:cover;background-position:center;outline:none}
		.pdtView .pdt_visual .visualImg .item img {width:100%;}
		.pdtView .pdt_visual .visualImg .slick-arrow {position: absolute;top: 50%;height: 30px;margin-top: -15px;z-index:9999}
		.pdtView .pdt_visual .visualImg .slick-prev {left:10px;}
		.pdtView .pdt_visual .visualImg .slick-next {right:10px;}
		.pdtView .pdt_visual .visualThumb {position:absolute;left: 100px;top:0;height:100%;z-index:800;}
		.pdtView .pdt_visual .visualThumb:before {content:'';display:inline-block;vertical-align: middle;height:100%;}
		.pdtView .pdt_visual .visualThumb ul {display:inline-block;vertical-align: middle;position: absolute;top: 17%;left: 0;}
		.pdtView .pdt_visual .visualThumb li {margin-top:10px;}
		.pdtView .pdt_visual .visualThumb li:first-child {margin-top:0;}
		.pdtView .pdt_visual .visualThumb button {overflow:hidden;display:block;position:relative;width: 55px;height: 55px;background:#fff;outline:none;border:none;cursor:pointer}
		.pdtView .pdt_visual .visualThumb button:after {content:'';display:block;position:absolute;left:0;top:0;width:100%;height:100%;z-index:2;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-o-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;}
		.pdtView .pdt_visual .visualThumb button.on:after {border:1px solid #666;}
		.pdtView .pdt_visual .visualThumb img {position:absolute;left:50%;top:50%;width:auto;height:100%;-webkit-transform:translate(-50%, -50%);-moz-transform:translate(-50%, -50%);-o-transform:translate(-50%, -50%);-ms-transform:translate(-50%, -50%);transform:translate(-50%, -50%);}
	</style>
	<div class="pdtView">
		<div class="pdt_visual">
			<div class="topVisual">
				<div class="visualImg">
					<div class="item" style="background:#fff"></div>
					<div class="item" style="background:#aaa"></div>
					<div class="item" style="background:#666"></div>
				</div>
				<div class="visualThumb">
					<ul>
						<li><button class="on" data-index="1"><img src="/note/resource/images/aestura/img_Thumb1.png" alt=""></button></li>
						<li><button data-index="2"><img src="/note/resource/images/aestura/img_Thumb2.png" alt=""></button></li>
						<li><button data-index="3"><img src="/note/resource/images/aestura/img_Thumb3.png" alt=""></button></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		/*
		$.fn.randomize = function (selector) {
			var $elems = selector ? $(this).find(selector) : $(this).children(),
				$parents = $elems.parent();

			$parents.each(function () {
				$(this).children(selector).sort(function (childA, childB) {
					// * Prevent last slide from being reordered
					if($(childB).index() !== $(this).children(selector).length - 1) {
						return Math.round(Math.random()) - 0.5;
					}
				}.bind(this)).detach().appendTo(this);
			});
			return this;
		};

		$(".visualImg").randomize().slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			autoplay: true
		});
		*/
		$(".visualImg").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			autoplay: true
		});

		function visualNav(idx){
			$('.visualImg .item').removeClass('on');
			$('.visualThumb button').removeClass('on');
			$('.visualImg .item').eq(idx).addClass('on');
			$('.visualThumb button').eq(idx).addClass('on');
			$('.visualImg').slick('slickGoTo', idx);
		}	

		// 이미지가 체인지 됐을 때
		$('.visualImg').on('afterChange', function(event, slick, currentSlide){
			visualNav(currentSlide);
		});

		// 버튼을 클릭했을 때
		$('.visualThumb button').on('click', function(){
			var idx = $(this).parent().index();
			visualNav(idx);
		});
	</script>

	<style>
		.markdown-body table {display: block;width: 100%;overflow: auto;}
		.markdown-body table tr {background-color: #fff;border-top: 1px solid #c6cbd1;}
		.markdown-body table tr:nth-child(2n) {background-color: #f6f8fa;}
		.markdown-body table th, .markdown-body table td {padding: 6px 13px;border: 1px solid #dfe2e5;}
		.markdown-body table a {color: #0366d6;text-decoration: none;}
	</style>
	<div class="markdown-body">
		<table>
			<colgroup>
				<col width="20%">
				<col width="10%">
				<col width="10%">
				<col width="">
			</colgroup>
			<thead>
				<tr>
					<th>Option</th>
					<th>Type</th>
					<th>Default</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>accessibility</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enables tabbing and arrow key navigation. Unless <code>autoplay: true</code>, sets browser focus to current slide (or first of current slide set, if multiple <code>slidesToShow</code>) after slide change. For full a11y compliance enable focusOnChange in addition to this.</td>
				</tr>
				<tr>
					<td>adaptiveHeight</td>
					<td>boolean</td>
					<td>false</td>
					<td>Adapts slider height to the current slide</td>
				</tr>
				<tr>
					<td>appendArrows</td>
					<td>string</td>
					<td>$(element)</td>
					<td>Change where the navigation arrows are attached (Selector, htmlString, Array, Element, jQuery object)</td>
				</tr>
				<tr>
					<td>appendDots</td>
					<td>string</td>
					<td>$(element)</td>
					<td>Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)</td>
				</tr>
				<tr>
					<td>arrows</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enable Next/Prev arrows</td>
				</tr>
				<tr>
					<td>asNavFor</td>
					<td>string</td>
					<td>$(element)</td>
					<td>Enables syncing of multiple sliders</td>
				</tr>
				<tr>
					<td>autoplay</td>
					<td>boolean</td>
					<td>false</td>
					<td>Enables auto play of slides</td>
				</tr>
				<tr>
					<td>autoplaySpeed</td>
					<td>int</td>
					<td>3000</td>
					<td>Auto play change interval</td>
				</tr>
				<tr>
					<td>centerMode</td>
					<td>boolean</td>
					<td>false</td>
					<td>Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.</td>
				</tr>
				<tr>
					<td>centerPadding</td>
					<td>string</td>
					<td>'50px'</td>
					<td>Side padding when in center mode. (px or %)</td>
				</tr>
				<tr>
					<td>cssEase</td>
					<td>string</td>
					<td>'ease'</td>
					<td>CSS3 easing</td>
				</tr>
				<tr>
					<td>customPaging</td>
					<td>function</td>
					<td>n/a</td>
					<td>Custom paging templates. See source for use example.</td>
				</tr>
				<tr>
					<td>dots</td>
					<td>boolean</td>
					<td>false</td>
					<td>Current slide indicator dots</td>
				</tr>
				<tr>
					<td>dotsClass</td>
					<td>string</td>
					<td>'slick-dots'</td>
					<td>Class for slide indicator dots container</td>
				</tr>
				<tr>
					<td>draggable</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enables desktop dragging</td>
				</tr>
				<tr>
					<td>easing</td>
					<td>string</td>
					<td>'linear'</td>
					<td>animate() fallback easing</td>
				</tr>
				<tr>
					<td>edgeFriction</td>
					<td>integer</td>
					<td>0.15</td>
					<td>Resistance when swiping edges of non-infinite carousels</td>
				</tr>
				<tr>
					<td>fade</td>
					<td>boolean</td>
					<td>false</td>
					<td>Enables fade</td>
				</tr>
				<tr>
					<td>focusOnSelect</td>
					<td>boolean</td>
					<td>false</td>
					<td>Enable focus on selected element (click)</td>
				</tr>
				<tr>
					<td>focusOnChange</td>
					<td>boolean</td>
					<td>false</td>
					<td>Puts focus on slide after change</td>
				</tr>
				<tr>
					<td>infinite</td>
					<td>boolean</td>
					<td>true</td>
					<td>Infinite looping</td>
				</tr>
				<tr>
					<td>initialSlide</td>
					<td>integer</td>
					<td>0</td>
					<td>Slide to start on</td>
				</tr>
				<tr>
					<td>lazyLoad</td>
					<td>string</td>
					<td>'ondemand'</td>
					<td>Accepts 'ondemand' or 'progressive' for lazy load technique. 'ondemand' will load the image as soon as you slide to it, 'progressive' loads one image after the other when the page loads.</td>
				</tr>
				<tr>
					<td>mobileFirst</td>
					<td>boolean</td>
					<td>false</td>
					<td>Responsive settings use mobile first calculation</td>
				</tr>
				<tr>
					<td>nextArrow</td>
					<td>string (html | jQuery selector) | object (DOM node | jQuery object)</td>
					<td><code>&lt;button type="button" class="slick-next"&gt;Next&lt;/button&gt;</code></td>
					<td>Allows you to select a node or customize the HTML for the "Next" arrow.</td>
				</tr>
				<tr>
					<td>pauseOnDotsHover</td>
					<td>boolean</td>
					<td>false</td>
					<td>Pauses autoplay when a dot is hovered</td>
				</tr>
				<tr>
					<td>pauseOnFocus</td>
					<td>boolean</td>
					<td>true</td>
					<td>Pauses autoplay when slider is focussed</td>
				</tr>
				<tr>
					<td>pauseOnHover</td>
					<td>boolean</td>
					<td>true</td>
					<td>Pauses autoplay on hover</td>
				</tr>
				<tr>
					<td>prevArrow</td>
					<td>string (html | jQuery selector) | object (DOM node | jQuery object)</td>
					<td><code>&lt;button type="button" class="slick-prev"&gt;Previous&lt;/button&gt;</code></td>
					<td>Allows you to select a node or customize the HTML for the "Previous" arrow.</td>
				</tr>
				<tr>
					<td>respondTo</td>
					<td>string</td>
					<td>'window'</td>
					<td>Width that responsive object responds to. Can be 'window', 'slider' or 'min' (the smaller of the two).</td>
				</tr>
				<tr>
					<td>responsive</td>
					<td>array</td>
					<td>null</td>
					<td>Array of objects <a href="#responsive-option-example">containing breakpoints and settings objects (see example)</a>. Enables settings at given <code>breakpoint</code>. Set <code>settings</code> to "unslick" instead of an object to disable slick at a given breakpoint.</td>
				</tr>
				<tr>
					<td>rows</td>
					<td>int</td>
					<td>1</td>
					<td>Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.</td>
				</tr>
				<tr>
					<td>rtl</td>
					<td>boolean</td>
					<td>false</td>
					<td>Change the slider's direction to become right-to-left</td>
				</tr>
				<tr>
					<td>slide</td>
					<td>string</td>
					<td>''</td>
					<td>Slide element query</td>
				</tr>
				<tr>
					<td>slidesPerRow</td>
					<td>int</td>
					<td>1</td>
					<td>With grid mode initialized via the rows option, this sets how many slides are in each grid row.</td>
				</tr>
				<tr>
					<td>slidesToScroll</td>
					<td>int</td>
					<td>1</td>
					<td># of slides to scroll at a time</td>
				</tr>
				<tr>
					<td>slidesToShow</td>
					<td>int</td>
					<td>1</td>
					<td># of slides to show at a time</td>
				</tr>
				<tr>
					<td>speed</td>
					<td>int</td>
					<td>300</td>
					<td>Transition speed</td>
				</tr>
				<tr>
					<td>swipe</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enables touch swipe</td>
				</tr>
				<tr>
					<td>swipeToSlide</td>
					<td>boolean</td>
					<td>false</td>
					<td>Swipe to slide irrespective of slidesToScroll</td>
				</tr>
				<tr>
					<td>touchMove</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enables slide moving with touch</td>
				</tr>
				<tr>
					<td>touchThreshold</td>
					<td>int</td>
					<td>5</td>
					<td>To advance slides, the user must swipe a length of (1/touchThreshold) * the width of the slider.</td>
				</tr>
				<tr>
					<td>useCSS</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enable/Disable CSS Transitions</td>
				</tr>
				<tr>
					<td>useTransform</td>
					<td>boolean</td>
					<td>true</td>
					<td>Enable/Disable CSS Transforms</td>
				</tr>
				<tr>
					<td>variableWidth</td>
					<td>boolean</td>
					<td>false</td>
					<td>Disables automatic slide width calculation</td>
				</tr>
				<tr>
					<td>vertical</td>
					<td>boolean</td>
					<td>false</td>
					<td>Vertical slide direction</td>
				</tr>
				<tr>
					<td>verticalSwiping</td>
					<td>boolean</td>
					<td>false</td>
					<td>Changes swipe direction to vertical</td>
				</tr>
				<tr>
					<td>waitForAnimate</td>
					<td>boolean</td>
					<td>true</td>
					<td>Ignores requests to advance the slide while animating</td>
				</tr>
				<tr>
					<td>zIndex</td>
					<td>number</td>
					<td>1000</td>
					<td>Set the zIndex values for slides, useful for IE9 and lower</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>