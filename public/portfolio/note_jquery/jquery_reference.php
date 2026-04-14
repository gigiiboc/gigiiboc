<!DOCTYPE HTML>
<html>
<head>
<title>::: note :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"> <!-- width=1150, width=device-width, initial-scale=1.0 -->
<link rel="stylesheet" type="text/css" href="/note/resource/css/style.css">
<script src="/note/resource/js/jquery-1.11.3.min.js"></script>
<script src="/note/resource/js/jquery.easings.min.js"></script>
<style type="text/css">
	body {font-size:14px;line-height:1.6;margin:80px auto;max-width:1200px;}
	h2 {text-align:left;margin:50px 0 30px;font-weight:bold;font-size:1.2em}
	.Methods {width:100%;text-align:left}
	.Methods tr {padding:10px;background:#fff}
	.Methods tr:hover {background:#f7f7f7}
	.Methods th {padding:10px;}
	.Methods td {padding:10px;}
	.Methods td a {display:inline-block;padding-bottom:2px;border-bottom:1px solid #000}
	.Methods td .box {padding:10px;}
	.Methods td p {color:#999;font-weight:bold;margin-top:5px;font-size:12px;position:relative;padding:0 0 0 10px;font: normal normal normal 14px/1 FontAwesome;line-height:1.6}
	.Methods td p em {font-style:normal;font-weight:bold}
	.Methods td p:before {position:absolute;top:0;left:0;content: "\f105";}
	.pd {padding:0 10px}
</style>
</head>
<body>

	<h2>jQuery Selectors</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Selector</th>
			<th style="width:25%">Example</th>
			<th>Selects</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_all.asp" target="_blank">*</a></td>
			<td>$("*")</td>
			<td><div class="box"><p>모든 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_id.asp" target="_blank">#<em>id</em></a></td>
			<td>$("#lastname")</td>
			<td><div class="box"><p>id 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_class.asp" target="_blank">.<em>class</em></a></td>
			<td>$(".intro")</td>
			<td><div class="box"><p>class 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_multiple_classes.asp" target="_blank">.<em>class,</em>.<em>class</em></a></td>
			<td>$(".intro,.demo")</td>
			<td><div class="box"><p>다중 선택(class, id 무관)</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_element.asp" target="_blank"><em>element</em></a></td>
			<td>$("p")</td>
			<td><div class="box"><p>태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_multiple_sel.asp" target="_blank"><em>el1</em>,<em>el2</em>,<em>el3</em></a></td>
			<td>$("h1,div,p")</td>
			<td><div class="box"><p>다중 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_first.asp" target="_blank">:first</a></td>
			<td>$("p:first")</td>
			<td><div class="box"><p>첫번째 p 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_last.asp" target="_blank">:last</a></td>
			<td>$("p:last")</td>
			<td><div class="box"><p>마지막 p 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_even.asp" target="_blank">:even</a></td>
			<td>$("tr:even")</td>
			<td><div class="box"><p>홀수 tr 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_odd.asp" target="_blank">:odd</a></td>
			<td>$("tr:odd")</td>
			<td><div class="box"><p>짝수 tr 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_firstchild.asp" target="_blank">:first-child</a></td>
			<td>$("p:first-child")</td>
			<td><div class="box">All &lt;p&gt; elements that are the first child of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_firstoftype.asp" target="_blank">:first-of-type</a></td>
			<td>$("p:first-of-type")</td>
			<td><div class="box">All &lt;p&gt; elements that are the first &lt;p&gt; element of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_lastchild.asp" target="_blank">:last-child</a></td>
			<td>$("p:last-child")</td>
			<td><div class="box">All &lt;p&gt; elements that are the last child of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_lastoftype.asp" target="_blank">:last-of-type</a></td>
			<td>$("p:last-of-type")</td>
			<td><div class="box">All &lt;p&gt; elements that are the last &lt;p&gt; element of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_nthchild.asp" target="_blank">:nth-child(<em>n</em>)</a></td>
			<td>$("p:nth-child(2)")</td>
			<td><div class="box">All &lt;p&gt; elements that are the 2nd child of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_nthlastchild.asp" target="_blank">:nth-last-child(<em>n</em>)</a></td>
			<td>$("p:nth-last-child(2)")</td>
			<td><div class="box">All &lt;p&gt; elements that are the 2nd child of their parent, counting from the 
			last child</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_nthoftype.asp" target="_blank">:nth-of-type(<em>n</em>)</a></td>
			<td>$("p:nth-of-type(2)")</td>
			<td><div class="box">All &lt;p&gt; elements that are the 2nd &lt;p&gt; element of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_nthlastoftype.asp" target="_blank">:nth-last-of-type(<em>n</em>)</a></td>
			<td>$("p:nth-last-of-type(2)")</td>
			<td><div class="box">All &lt;p&gt; elements that are the 2nd &lt;p&gt; element of their parent, counting from the 
			last child</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_onlychild.asp" target="_blank">:only-child</a></td>
			<td>$("p:only-child")</td>
			<td><div class="box">All &lt;p&gt; elements that are the only child of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_onlyoftype.asp" target="_blank">:only-of-type</a></td>
			<td>$("p:only-of-type")</td>
			<td><div class="box">All &lt;p&gt; elements that are the only child, of its type, of their parent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_parent_child.asp" target="_blank">parent &gt; child</a></td>
			<td>$("div &gt; p")</td>
			<td><div class="box"><p>div 의 자식 중 p 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_parent_descendant.asp" target="_blank">parent descendant</a></td>
			<td>$("div p")</td>
			<td><div class="box"><p>div 의 후손 중 p 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_previous_next.asp" target="_blank">element + next</a></td>
			<td>$("div + p")</td>
			<td><div class="box"><p>div 의 다음 인덱스에 있는 p 태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_previous_siblings.asp" target="_blank">element ~ siblings</a></td>
			<td>$("div ~ p")</td>
			<td><div class="box"><p>div 의 형제인 p 태그 모두 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_eq.asp" target="_blank">:eq(<em>index</em>)</a></td>
			<td>$("ul li:eq(3)")</td>
			<td><div class="box"><p>ul의 후손 요소중 4번째 li 선택(동일 인덱스)</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_gt.asp" target="_blank">:gt(<em>no</em>)</a></td>
			<td>$("ul li:gt(3)")</td>
			<td><div class="box"><p>ul의 후손 요소중 4번째 이후부터의 li 선택(동일 인덱스)</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_lt.asp" target="_blank">:lt(<em>no</em>)</a></td>
			<td>$("ul li:lt(3)")</td>
			<td><div class="box"><p>ul의 후손 요소중 4번째 이전까지의 li 선택(동일 인덱스)</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_not.asp" target="_blank">:not(<em>selector</em>)</a></td>
			<td>$("input:not(:empty)")</td>
			<td><div class="box"><p>비어 있는 input 태그를 제외한 모든 태그를 선택.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_header.asp" target="_blank">:header</a></td>
			<td>$(":header")</td>
			<td><div class="box"><p>h1,h2,h3.. 등의 헤딩태그 선택</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_animated.asp" target="_blank">:animated</a></td>
			<td>$(":animated")</td>
			<td><div class="box">All animated elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_focus.asp" target="_blank">:focus</a></td>
			<td>$(":focus")</td>
			<td><div class="box">The element that currently has focus</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_contains.asp" target="_blank">:contains(<em>text</em>)</a></td>
			<td>$(":contains('Hello')")</td>
			<td><div class="box">All elements which contains the text "Hello"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_has.asp" target="_blank">:has(<em>selector</em>)</a></td>
			<td>$("div:has(p)")</td>
			<td><div class="box">All &lt;div&gt; elements that have a &lt;p&gt; element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_empty.asp" target="_blank">:empty</a></td>
			<td>$(":empty")</td>
			<td><div class="box">All elements that are empty</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_parent.asp" target="_blank">:parent</a></td>
			<td>$(":parent")</td>
			<td><div class="box">All elements that are a parent of another element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_hidden.asp" target="_blank">:hidden</a></td>
			<td>$("p:hidden")</td>
			<td><div class="box">All hidden &lt;p&gt; elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_visible.asp" target="_blank">:visible</a></td>
			<td>$("table:visible")</td>
			<td><div class="box">All visible tables</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_root.asp" target="_blank">:root</a></td>
			<td>$(":root")</td>
			<td><div class="box">The document's root element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_lang.asp" target="_blank">:lang(<em>language</em>)</a></td>
			<td>$("p:lang(de)")</td>
			<td><div class="box">All &lt;p&gt; elements with a lang attribute value starting with "de"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute.asp" target="_blank">[<em>attribute</em>]</a></td>
			<td>$("[href]")</td>
			<td><div class="box">All elements with a href attribute</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_equal_value.asp" target="_blank">[<em>attribute</em>=<em>value</em>]</a></td>
			<td>$("[href='default.htm']")</td>
			<td><div class="box">All elements with a href attribute value equal to "default.htm"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_notequal_value.asp" target="_blank">[<em>attribute</em>!=<em>value</em>]</a></td>
			<td>$("[href!='default.htm']")</td>
			<td><div class="box">All elements with a href attribute value not equal to "default.htm"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_end_value.asp" target="_blank">[<em>attribute</em>$=<em>value</em>]</a></td>
			<td>$("[href$='.jpg']")</td>
			<td><div class="box">All elements with a href attribute value ending with ".jpg"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_prefix_value.asp" target="_blank">[<i>attribute</i>|=<i>value</i>]</a></td>
			<td>$("[title|='Tomorrow']")</td>
			<td><div class="box">All elements with a title attribute value equal to 'Tomorrow', or starting 
			with 'Tomorrow' followed by a hyphen</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_beginning_value.asp" target="_blank">[<i>attribute</i>^=<i>value</i>]</a></td>
			<td>$("[title^='Tom']")</td>
			<td><div class="box">All elements with a title attribute value starting with "Tom"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_contains_value.asp" target="_blank">[<i>attribute</i>~=<i>value</i>]</a></td>
			<td>$("[title~='hello']")</td>
			<td><div class="box">All elements with a title attribute value containing the specific word "hello"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_attribute_contains_string_value.asp" target="_blank">[<i>attribute*</i>=<i>value</i>]</a></td>
			<td>$("[title*='hello']")</td>
			<td><div class="box">All elements with a title attribute value containing the word "hello"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input.asp" target="_blank">:input</a></td>
			<td>$(":input")</td>
			<td><div class="box">All input elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_text.asp" target="_blank">:text</a></td>
			<td>$(":text")</td>
			<td><div class="box">All input elements with type="text"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_password.asp" target="_blank">:password</a></td>
			<td>$(":password")</td>
			<td><div class="box">All input elements with type="password"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_radio.asp" target="_blank">:radio</a></td>
			<td>$(":radio")</td>
			<td><div class="box">All input elements with type="radio"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_checkbox.asp" target="_blank">:checkbox</a></td>
			<td>$(":checkbox")</td>
			<td><div class="box">All input elements with type="checkbox"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_submit.asp" target="_blank">:submit</a></td>
			<td>$(":submit")</td>
			<td><div class="box">All input elements with type="submit"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_reset.asp" target="_blank">:reset</a></td>
			<td>$(":reset")</td>
			<td><div class="box">All input elements with type="reset"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_button.asp" target="_blank">:button</a></td>
			<td>$(":button")</td>
			<td><div class="box">All input elements with type="button"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_image.asp" target="_blank">:image</a></td>
			<td>$(":image")</td>
			<td><div class="box">All input elements with type="image"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_file.asp" target="_blank">:file</a></td>
			<td>$(":file")</td>
			<td><div class="box">All input elements with type="file"</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_enabled.asp" target="_blank">:enabled</a></td>
			<td>$(":enabled")</td>
			<td><div class="box">All enabled input elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_disabled.asp" target="_blank">:disabled</a></td>
			<td>$(":disabled")</td>
			<td><div class="box">All disabled input elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_selected.asp" target="_blank">:selected</a></td>
			<td>$(":selected")</td>
			<td><div class="box">All selected input elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/sel_input_checked.asp" target="_blank">:checked</a></td>
			<td>$(":checked")</td>
			<td><div class="box">All checked input elements</div></td>
		</tr>
		</tbody>
	</table>


	<h2>jQuery Event Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:35%">Method / Property</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_bind.asp" target="_blank">bind()</a></td>
			<td><div class="box">Attaches event handlers to elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_blur.asp" target="_blank">blur()</a></td>
			<td><div class="box">Attaches/Triggers the blur event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_change.asp" target="_blank">change()</a></td>
			<td><div class="box">Attaches/Triggers the change event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_click.asp" target="_blank">click()</a></td>
			<td>
			<div class="box">
			$(선택자).click();<p>선택자를 클릭했을때 함수실행</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_dblclick.asp" target="_blank">dblclick()</a></td>
			<td><div class="box">Attaches/Triggers the double click event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_delegate.asp" target="_blank">delegate()</a></td>
			<td><div class="box">Attaches a handler to current, or future, specified child elements of the matching elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_die.asp" target="_blank">die()</a></td>
			<td><div class="box"><span class="deprecated">Removed in version 1.9.</span> Removes all event handlers added with the live() method</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_error.asp" target="_blank">error()</a></td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.8.</span> Attaches/Triggers the error event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_currenttarget.asp" target="_blank">event.currentTarget</a></td>
			<td><div class="box">The current DOM element within the event bubbling phase</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_data.asp" target="_blank">event.data</a></td>
			<td><div class="box">Contains the optional data passed to an event method when the current executing handler is bound</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_delegatetarget.asp" target="_blank">event.delegateTarget</a></td>
			<td><div class="box">Returns the element where the currently-called jQuery event handler was attached</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_isdefaultprevented.asp" target="_blank">event.isDefaultPrevented()</a></td>
			<td><div class="box">Returns whether event.preventDefault() was called for the event object</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_isimmediatepropagationstopped.asp" target="_blank">event.isImmediatePropagationStopped()</a></td>
			<td><div class="box">Returns whether event.stopImmediatePropagation() was called for the event object</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_ispropagationstopped.asp" target="_blank">event.isPropagationStopped()</a></td>
			<td><div class="box">Returns whether event.stopPropagation() was called for the event object</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_namespace.asp" target="_blank">event.namespace</a></td>
			<td><div class="box">Returns the namespace specified when the event was triggered</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_pagex.asp" target="_blank">event.pageX</a></td>
			<td><div class="box">Returns the mouse position relative to the left edge of the document</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_pagey.asp" target="_blank">event.pageY</a></td>
			<td><div class="box">Returns the mouse position relative to the top edge of the document</div></td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_event_mouse_offsetx" target="_blank">event.offsetX</a></td>
			<td><div class="box">기준 박스 내의 X 좌표값 반환</div></td>
		</tr>
		<tr>
			<td><a href="https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_event_mouse_offsety" target="_blank">event.offsetY</a></td>
			<td><div class="box">기준 박스 내의 Y 좌표값 반환</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_preventdefault.asp" target="_blank">event.preventDefault()</a></td>
			<td>
			<div class="box">		
			$(document).ready(function(event) {<br>
			$('a').click(function(event){<br>
			event.preventDefault();<br>
			});<br>
			});
			<p>섬밋의 제출이나, a 태그의 링크연결 등 서버 전송을 막아준다.(선택자에 a링크 관련이 섞여있을 경우 이 명령 하나면 모든 전송을 막아줌)</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_relatedtarget.asp" target="_blank">event.relatedTarget</a></td>
			<td><div class="box">Returns which element being entered or exited on mouse movement.</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_result.asp" target="_blank">event.result</a></td>
			<td><div class="box">Contains the last/previous value returned by an event handler triggered by the specified event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_stopimmediatepropagation.asp" target="_blank">event.stopImmediatePropagation()</a></td>
			<td><div class="box">Prevents other event handlers from being called</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_stoppropagation.asp" target="_blank">event.stopPropagation()</a></td>
			<td><div class="box">Prevents the event from bubbling up the DOM tree, preventing any parent handlers from being notified of the event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_target.asp" target="_blank">event.target</a></td>
			<td><div class="box">Returns which DOM element triggered the event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_timestamp.asp" target="_blank">event.timeStamp</a></td>
			<td><div class="box">Returns the number of milliseconds since January 1, 1970, when the event is triggered</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_type.asp" target="_blank">event.type</a></td>
			<td><div class="box">Returns which event type was triggered</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_which.asp" target="_blank">event.which</a></td>
			<td><div class="box">Returns which keyboard key or mouse button was pressed for the event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_focus.asp" target="_blank">focus()</a></td>
			<td><div class="box">포커스 시 이벤트 부여</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_focusin.asp" target="_blank">focusin()</a></td>
			<td><div class="box">포커스 됐을때 작동</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_focusout.asp" target="_blank">focusout()</a></td>
			<td><div class="box">포커스에서 아웃됐을 때 작동</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_hover.asp" target="_blank">hover()</a></td>
			<td><div class="box">$(선택자).hover("마우스오버이벤트", "마우스아웃이벤트");<p>선택자에 마우스를 올리거나 내렸을때 함수실행</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_keydown.asp" target="_blank">keydown()</a></td>
			<td><div class="box">Attaches/Triggers the keydown event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_keypress.asp" target="_blank">keypress()</a></td>
			<td><div class="box">Attaches/Triggers the keypress event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_keyup.asp" target="_blank">keyup()</a></td>
			<td><div class="box">Attaches/Triggers the keyup event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_live.asp" target="_blank">live()</a></td>
			<td><div class="box"><span class="deprecated">Removed in version 1.9.</span> Adds one or more event handlers to current, or future, selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_load.asp" target="_blank">load()</a></td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.8.</span> Attaches an event handler to the load event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mousedown.asp" target="_blank">mousedown()</a></td>
			<td><div class="box">Attaches/Triggers the mousedown event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mouseenter.asp" target="_blank">mouseenter()</a></td>
			<td>
			<div class="box">
			$(선택자).mouseenter(function(){});<p>선택자에 마우스를 올렸을 때 함수실행</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mouseleave.asp" target="_blank">mouseleave()</a></td>
			<td>
			<div class="box">
			$(선택자).mouseleave(function(){});<p>선택자에 마우스가 벗어났을때 함수실행 , 마우스로 해당 부분이 아닌 다른 곳을 클릭했을때 실행</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mousemove.asp" target="_blank">mousemove()</a></td>
			<td><div class="box">Attaches/Triggers the mousemove event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mouseout.asp" target="_blank">mouseout()</a></td>
			<td><div class="box">Attaches/Triggers the mouseout event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mouseover.asp" target="_blank">mouseover()</a></td>
			<td><div class="box">Attaches/Triggers the mouseover event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_mouseup.asp" target="_blank">mouseup()</a></td>
			<td><div class="box">Attaches/Triggers the mouseup event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_off.asp" target="_blank">off()</a></td>
			<td><div class="box">$(selector).off(event,selector,function(eventObj),map)<br>$('#banner').off('click')<p>.on() 으로 적용된 이벤트를 제거하는 메서드.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_on.asp" target="_blank">on()</a></td>
			<td><div class="box">$(selector).on(event,childSelector,data,function,map)<br>$('#banner').on('click','li',function(){})<p>동적으로 생성될 개체나 요소에 대해서도 이벤트 맵핑 가능.<br>
			예)<br>
			$(document).ready(function(){<br>
			<span class="pd"></span>$("#list").on("click","li", function(){ // .append 로 추가된 li에 동작 가능<br>
			<span class="pd"></span><span class="pd"></span>alert($(this).text());<br>
			<span class="pd"></span>});<br>
			<span class="pd"></span>$("#list ul").append("&lt;li&gt;4&lt;/li&gt;")<br>
			});
			</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_one.asp" target="_blank">one()</a></td>
			<td><div class="box">Adds one or more event handlers to selected elements. This handler can only be triggered once per element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_proxy.asp" target="_blank">$.proxy()</a></td>
			<td><div class="box">Takes an existing function and returns a new one with a particular context</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_ready.asp" target="_blank">ready()</a></td>
			<td><div class="box">Specifies a function to execute when the DOM is fully loaded</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_resize.asp" target="_blank">resize()</a></td>
			<td>
				<div class="box">
				$(window).resize(function(){});<p>브라우저가 리사이즈 되었을때 실행</p>
				</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_scroll.asp" target="_blank">scroll()</a></td>
			<td><div class="box">Attaches/Triggers the scroll event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_select.asp" target="_blank">select()</a></td>
			<td><div class="box">Attaches/Triggers the select event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_submit.asp" target="_blank">submit()</a></td>
			<td><div class="box">Attaches/Triggers the submit event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_toggle.asp" target="_blank">toggle()</a></td>
			<td><div class="box"><span class="deprecated">Removed in version 1.9.</span> Attaches two or more functions to toggle between for the click event</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_trigger.asp" target="_blank">trigger()</a></td>
			<td>
				<div class="box">
				$('a').trigger('click');<p>액션을 실행시킴</p>
				</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_triggerhandler.asp" target="_blank">triggerHandler()</a></td>
			<td><div class="box">Triggers all functions bound to a specified event for the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_unbind.asp" target="_blank">unbind()</a></td>
			<td><div class="box">Removes an added event handler from selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_undelegate.asp" target="_blank">undelegate()</a></td>
			<td><div class="box">Removes an event handler to selected elements, now or in the future</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/event_unload.asp" target="_blank">unload()</a></td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.8.</span> Attaches an event handler to the unload event</div></td>
		</tr>
		</tbody>
	</table>


	<h2>jQuery Effect Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_animate.asp" target="_blank">animate()</a></td>
			<td>
			<div class="box">
				$(선택자).animate({styles},speed,easing,callback)
				<p>styles 의 작성법은 다음과 같음. <br>margin-top > marginTop, z-index > zIndex, background-position > backgroundPosition</p>
				<p>speed 는 10,100,1000 으로 1000 당 1초이며 'fast' 'slow' 등도 가능.</p>
				<p>easing 은 대표적으로 'linear' 와 'swing' 등이 있으며, 그 외 'easeOutBack', 'easeInOutQuint' 등 다양.</p>
				<p>callback 은 효과 완료 후 실행할 function 을 말함.</p>				
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_clearqueue.asp" target="_blank">clearQueue()</a></td>
			<td><div class="box">Removes all remaining queued functions from the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_delay.asp" target="_blank">delay()</a></td>
			<td>
			<div class="box">
			$("선택자").delay("500")<p>선택 요소의 대기 지연시간을 넣어준다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_dequeue.asp" target="_blank">dequeue()</a></td>
			<td><div class="box">Removes the next function from the queue, and then executes the function</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_fadein.asp" target="_blank">fadeIn()</a></td>
			<td>
			<div class="box">
			$(선택자).fadeIn();<p>천천히 보이기</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_fadeout.asp" target="_blank">fadeOut()</a></td>
			<td>
			<div class="box">
			$(선택자).fadeOut();<p>천천히 가리기</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_fadeto.asp" target="_blank">fadeTo()</a></td>
			<td><div class="box">Fades in/out the selected elements to a given opacity</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_fadetoggle.asp" target="_blank">fadeToggle()</a></td>
			<td><div class="box">Toggles between the fadeIn() and fadeOut() methods</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_finish.asp" target="_blank">finish()</a></td>
			<td><div class="box">Stops, removes and completes all queued animations for the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_hide.asp" target="_blank">hide()</a></td>
			<td>
			<div class="box">
			$(선택자).hide(속도);<p>display:none 처리</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_queue.asp" target="_blank">queue()</a></td>
			<td><div class="box">Shows the queued functions on the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_show.asp" target="_blank">show()</a></td>
			<td>
			<div class="box">
			$(선택자).show(속도);<p>display:block 처리</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_slidedown.asp" target="_blank">slideDown()</a></td>
			<td>
			<div class="box">
			$(선택자).slideDown(speed,callback);<p>동적으로 높이감소</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_slidetoggle.asp" target="_blank">slideToggle()</a></td>
			<td><div class="box">Toggles between the slideUp() and slideDown() methods</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_slideup.asp" target="_blank">slideUp()</a></td>
			<td>
			<div class="box">
			$(선택자).sildeUp(speed,callback);<p>동적으로 높이증가</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_stop.asp" target="_blank">stop()</a></td>
			<td><div class="box">Stops the currently running animation for the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/eff_toggle.asp" target="_blank">toggle()</a></td>
			<td>
			<div class="box">
			$(선택자).toggle();<p>display:block/none 처리</p>
			</div>
			</td>
		</tr>
		</tbody>
	</table>


	<h2>jQuery HTML / CSS Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_addclass.asp" target="_blank">addClass()</a></td>
			<td>
			<div class="box">
			$(선택자).addClass();<p>CSS 클래스 부여</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_after.asp" target="_blank">after()</a></td>
			<td>
			<div class="box">
			$(기준대상).after(선택자)<p>특정 노드 뒷부분에 형제 엘리먼트를 삽입하기 위해 사용</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_append.asp" target="_blank">append()</a></td>
			<td>
			<div class="box">
			$(선택자).append()<p>CSS 선택자의 :after 기능과 동일</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_appendto.asp" target="_blank">appendTo()</a></td>
			<td>
			<div class="box">
			$().appendTo("body")<p>선택자를 Body밑의 가장 뒤로 이동</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_attr.asp" target="_blank">attr()</a></td>
			<td>
			<div class="box">
			attr("속성")<p>속성선택 (alt, class, id, data-target 등등)</p>
			</div>
			<div class="box">
			attr("속성","값")<br>
			attr({속성:"값",속성:"값",속성:"값" ..})
			<p>
				속성부여<br><br>
				$(function (){<br>
				<span class="pd"></span>$("a").hover(function(){<br>
				<span class="pd"></span><span class="pd"></span>$(this).find("img").attr('src', $(this).find("img").attr('src').replace('.jpg','_on.jpg'));<br>
				<span class="pd"></span>}, function(){<br>
				<span class="pd"></span><span class="pd"></span>$(this).find("img").attr('src', $(this).find("img").attr('src').replace('_on.jpg','.jpg'));<br>
				<span class="pd"></span>});<br>
				})
			</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_before.asp" target="_blank">before()</a></td>
			<td>
			<div class="box">
			$(기준대상).Before(선택자)<p>특정 노드 앞 부분에 형제 엘리먼트를 삽입하기 위해 사용</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_clone.asp" target="_blank">clone()</a></td>
			<td><div class="box">$(selector).clone(true|false)<p>해당 셀렉터의 클론을 생성한다.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_css.asp" target="_blank">css()</a></td>
			<td><div class="box">Sets or returns one or more style properties for selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_detach.asp" target="_blank">detach()</a></td>
			<td><div class="box">$(selector).detach()<p>선택된 태그를 문서에서 삭제한다.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_empty.asp" target="_blank">empty()</a></td>
			<td><div class="box">Removes all child nodes and content from selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_hasclass.asp" target="_blank">hasClass()</a></td>
			<td>
			<div class="box">
			$(선택자).hasClass();<p>클래스가 있는지 확인하여 트루나 펄스값을 반환한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_height.asp" target="_blank">height()</a></td>
			<td>
			<div class="box">
			$(선택자).height()<p>높이값을 뽑아내는 메서드</p>
			</div>
			<div class="box">
			$(선택자).height(x += 10)<p>동작시 높이값 10px 씩 증가</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_html.asp" target="_blank">html()</a></td>
			<td>
			<div class="box">
			$(선택자).html("글자")<p>선택자에 "글자"라는 텍스트 추가.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_innerheight.asp" target="_blank">innerHeight()</a></td>
			<td>
			<div class="box">
			$(선택자).innerHeight()<p>padding 을 포함한 높이값을 뽑아내는 메서드</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_innerwidth.asp" target="_blank">innerWidth()</a></td>
			<td>
			<div class="box">
			$(선택자).innerWidth()<p>padding 을 포함한 너비값을 뽑아내는 메서드</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_insertafter.asp" target="_blank">insertAfter()</a></td>
			<td>
				<div class="box">
				$(선택자).insertAfter(기준대상)<p>after()와 동일하게 형제 엘리먼트를 삽입하기 위해 사용. 선택자를 사용하는 위치가 뒷부분인 것이 차이가 있다.</p>
				</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_insertbefore.asp" target="_blank">insertBefore()</a></td>
			<td>
				<div class="box">
				$(선택자).insertBefore(기준대상)<p>before()와 동일하게 형제 엘리먼트를 삽입하기 위해 사용. 선택자를 사용하는 위치가 뒷부분인 것이 차이가 있다.</p>
				</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_offset.asp" target="_blank">offset()</a></td>
			<td><div class="box">Sets or returns the offset coordinates for selected elements (relative to the document)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_offsetparent.asp" target="_blank">offsetParent()</a></td>
			<td><div class="box">Returns the first positioned parent element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_outerheight.asp" target="_blank">outerHeight()</a></td>
			<td>
			<div class="box">
			$(선택자).outerHeight()<p>padding / border 를 포함한 높이값을 뽑아내는 메서드</p>
			</div>
			<div class="box">
			$(선택자).outerHeight(true)<p>padding / border / margin 를 포함한 높이값을 뽑아내는 메서드</p>
			</div>
			</td>
		</tr>	
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_outerwidth.asp" target="_blank">outerWidth()</a></td>
			<td>
			<div class="box">
			$(선택자).outerWidth()<p>padding / border 를 포함한 너비값을 뽑아내는 메서드</p>
			</div>
			<div class="box">
			$(선택자).outerWidth(true)<p>padding / border / margin 을 포함한 너비값을 뽑아내는 메서드</p>
			</div>
			</td>
		</tr>	
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_position.asp" target="_blank">position()</a></td>
			<td>
			<div class="box">
			$(선택자).position()<p>선택자의 top에서부터의 좌표값, left에서부터의 좌표값을 반환해줍니다.</p>
			</div>
			</td>
		</tr>	
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_prepend.asp" target="_blank">prepend()</a></td>
			<td>
			<div class="box">
			$(선택자).prepend()<p>CSS 선택자의 :before 기능과 동일</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_prependto.asp" target="_blank">prependTo()</a></td>
			<td>
			<div class="box">
			$(선택자).prependTo("body")<p>선택자를 Body밑의 가장 앞으로 이동</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_prop.asp" target="_blank">prop()</a></td>
			<td><div class="box">$(selector).prop(property)<br>$(selector).prop(property,value)<br>$(selector).prop(property,function(index,currentvalue))<br>$(selector).prop({property:'value', property:'value',...})<br>$(selector).prop("checked", true)<br><p>attr() 처럼 속성부여시 사용되지만, prop()은 cheked, selected, disbled, multiple 프로퍼티와 같은 HTML 프로퍼티에도 접근이 가능</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_remove.asp" target="_blank">remove()</a></td>
			<td><div class="box">Removes the selected elements (including data and events)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_removeattr.asp" target="_blank">removeAttr()</a></td>
			<td><div class="box">Removes one or more attributes from selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_removeclass.asp" target="_blank">removeClass()</a></td>
			<td>
			<div class="box">$(selector).removeClass();<p>CSS 클래스 제거</p></div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_removeprop.asp" target="_blank">removeProp()</a></td>
			<td><div class="box">$(selector).removeProp(property)<br>.removeProp("checked")<p>prop() 에서 사용된 값을 제거한다.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_replaceall.asp" target="_blank">replaceAll()</a></td>
			<td><div class="box">Replaces selected elements with new HTML elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_replacewith.asp" target="_blank">replaceWith()</a></td>
			<td><div class="box">Replaces selected elements with new content</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_scrollleft.asp" target="_blank">scrollLeft()</a></td>
			<td><div class="box">Sets or returns the horizontal scrollbar position of selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_scrolltop.asp" target="_blank">scrollTop()</a></td>
			<td>
			<div class="box">
			$(선택자).scrollTop() > 200<p>스크롤 위치가 200보다 작은 경우</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_text.asp" target="_blank">text()</a></td>
			<td>
			<div class="box">
			$(선택자).text(x += 10)<p>선택자에 "글자"라는 텍스트 추가. (XHTML, XML 에서도 사용 가능)</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_toggleclass.asp" target="_blank">toggleClass()</a></td>
			<td>
			<div class="box">
			$(선택자).toggleClass();<p>동작시 CSS 클래스 부여/제거</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_unwrap.asp" target="_blank">unwrap()</a></td>
			<td><div class="box">Removes the parent element of the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_val.asp" target="_blank">val()</a></td>
			<td><div class="box">$(selector).val()<br>$(selector).val(value)<br>$(selector).val(function(index,currentvalue))
			<p>해당 셀렉터의 value 값을 선택하거나, 교체하거나 할 수 있다. </p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/css_width.asp" target="_blank">width()</a></td>
			<td>
			<div class="box">
			$(선택자).width()<p>너비값을 뽑아내는 메서드</p>
			</div>
			<div class="box">
			$(선택자).width()/2<p>선택자 가로사이즈의 절반값을 반환한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_wrap.asp" target="_blank">wrap()</a></td>
			<td><div class="box">Wraps HTML element(s) around each selected element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_wrapall.asp" target="_blank">wrapAll()</a></td>
			<td><div class="box">Wraps HTML element(s) around all selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/html_wrapinner.asp" target="_blank">wrapInner()</a></td>
			<td><div class="box">Wraps HTML element(s) around the content of each selected element</div></td>
		</tr>
		</tbody>
	</table>

	<h2>jQuery Traversing Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_add.asp" target="_blank">add()</a></td>
			<td><div class="box">Adds elements to the set of matched elements</div></td>
		</tr>
		<tr>
			<td>addBack()</td>
			<td><div class="box">Adds the previous set of elements to the current set</div></td>
		</tr>
		<tr>
			<td>andSelf()</td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.8.</span> An alias for addBack()</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_children.asp" target="_blank">children()</a></td>
			<td>
			<div class="box">
			$(선택자).children();<p>선택자의 자식을 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_closest.asp" target="_blank">closest()</a></td>
			<td>			
			<div class="box">
			$(선택자).closest();<p>선택자의 조상들 중 가장 가까운 조상을 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_contents.asp" target="_blank">contents()</a></td>
			<td><div class="box">Returns all direct children of the selected element (including text and comment nodes)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_each.asp" target="_blank">each()</a></td>
			<td><div class="box">Executes a function for each matched element</div></td>
		</tr>
		<tr>
			<td>end()</td>
			<td><div class="box">Ends the most recent filtering operation in the current chain, and return the set of matched elements to its previous state</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_eq.asp" target="_blank">eq()</a></td>
			<td><div class="box">Returns an element with a specific index number of the selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_filter.asp" target="_blank">filter()</a></td>
			<td><div class="box">Reduce the set of matched elements to those that match the selector or pass the function's test</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_find.asp" target="_blank">find()</a></td>
			<td>
			<div class="box">
			$(선택자).find();<p>선택자의 후손을 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_first.asp" target="_blank">first()</a></td>
			<td>
			<div class="box">
			$(선택자).first()<p>선택자의 첫번째 요소를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_has.asp" target="_blank">has()</a></td>
			<td><div class="box">Returns all elements that have one or more elements inside of them</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_is.asp" target="_blank">is()</a></td>
			<td><div class="box">Checks the set of matched elements against a selector/element/jQuery object, and return true if at least one of these elements matches the given arguments</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_last.asp" target="_blank">last()</a></td>
			<td>
			<div class="box">
			$(선택자).last()<p>선택자의 마지막 요소를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td>map()</td>
			<td><div class="box">Passes each element in the matched set through a function, producing a new jQuery object containing the return values</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_next.asp" target="_blank">next()</a></td>
			<td>
			<div class="box">
			$(선택자).next()<p>선택자의 위치가 동일한 요소중에서 다음 인덱스를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_nextall.asp" target="_blank">nextAll()</a></td>
			<td><div class="box">Returns all next sibling elements of the selected element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_nextuntil.asp" target="_blank">nextUntil()</a></td>
			<td><div class="box">Returns all next sibling elements between two given arguments</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_not.asp" target="_blank">not()</a></td>
			<td>
			<div class="box">
			$(선택자).not(선택자2)<p>선택자의 요소 중, 선택자2를 제외한 나머지를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_offsetparent.asp" target="_blank">offsetParent()</a></td>
			<td><div class="box">Returns the first positioned parent element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_parent.asp" target="_blank">parent()</a></td>
			<td>
			<div class="box">
			$(선택자).parent()<p>선택자의 부모를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_parents.asp" target="_blank">parents()</a></td>
			<td>
			<div class="box">
			$(선택자).parents()<p>선택자의 조상들을 선택한다. (매개변수는 검색대상)</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_parentsuntil.asp" target="_blank">parentsUntil()</a></td>
			<td><div class="box">Returns all ancestor elements between two given arguments</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_prev.asp" target="_blank">prev()</a></td>
			<td>
			<div class="box">
			$(선택자).prev()<p>선택자의 위치가 동일한 요소중에서 이전 인덱스를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_prevall.asp" target="_blank">prevAll()</a></td>
			<td><div class="box">Returns all previous sibling elements of the selected element</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_prevuntil.asp" target="_blank">prevUntil()</a></td>
			<td><div class="box">Returns all previous sibling elements between two given arguments</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_siblings.asp" target="_blank">siblings()</a></td>
			<td>
			<div class="box">
			$(선택자).siblings()<p>선택자의 형제를 선택한다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/traversing_slice.asp" target="_blank">slice()</a></td>
			<td><div class="box">Reduces the set of matched elements to a subset specified by a range of indices</div></td>
		</tr>
		</tbody>
	</table>

	<h2>jQuery AJAX Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajax.asp" target="_blank">$.ajax()</a></td>
			<td><div class="box">Performs an async AJAX request</div></td>
		</tr>
		<tr>
			<td>$.ajaxPrefilter()</td>
			<td><div class="box">Handle custom Ajax options or modify existing options before each request is sent and before they are processed by $.ajax()</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxsetup.asp" target="_blank">$.ajaxSetup()</a></td>
			<td><div class="box">Sets the default values for future AJAX requests</div></td>
		</tr>
		<tr>
			<td>$.ajaxTransport()</td>
			<td><div class="box">Creates an object that handles the actual transmission of Ajax data</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_get.asp" target="_blank">$.get()</a></td>
			<td><div class="box">Loads data from a server using an AJAX HTTP GET request</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_getjson.asp" target="_blank">$.getJSON()</a></td>
			<td><div class="box">Loads JSON-encoded data from a server using a HTTP GET request</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_getscript.asp" target="_blank">$.getScript()</a></td>
			<td><div class="box">Loads (and executes) a JavaScript from a server using an AJAX HTTP GET request</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_param.asp" target="_blank">$.param()</a></td>
			<td><div class="box">Creates a serialized representation of an array or object (can be used as URL query string for AJAX requests)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_post.asp" target="_blank">$.post()</a></td>
			<td><div class="box">Loads data from a server using an AJAX HTTP POST request</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxcomplete.asp" target="_blank">ajaxComplete()</a></td>
			<td><div class="box">Specifies a function to run when the AJAX request completes</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxerror.asp" target="_blank">ajaxError()</a></td>
			<td><div class="box">Specifies a function to run when the AJAX request completes with an error</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxsend.asp" target="_blank">ajaxSend()</a></td>
			<td><div class="box">Specifies a function to run before the AJAX request is sent</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxstart.asp" target="_blank">ajaxStart()</a></td>
			<td><div class="box">Specifies a function to run when the first AJAX request begins</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxstop.asp" target="_blank">ajaxStop()</a></td>
			<td><div class="box">Specifies a function to run when all AJAX requests have completed</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_ajaxsuccess.asp" target="_blank">ajaxSuccess()</a></td>
			<td><div class="box">Specifies a function to run when an AJAX request completes successfully</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_load.asp" target="_blank">load()</a></td>
			<td>
			<div class="box">
			$(window).load(function(){});<p>브라우저가 로드되었을때 실행</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_serialize.asp" target="_blank">serialize()</a></td>
			<td><div class="box">Encodes a set of form elements as a string for submission</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/ajax_serializearray.asp" target="_blank">serializeArray()</a></td>
			<td><div class="box">Encodes a set of form elements as an array of names and values</div></td>
		</tr>
		</tbody>
	</table>

	<h2>jQuery Misc Methods</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_data.asp" target="_blank">data()</a></td>
			<td><div class="box">Attaches data to, or gets data from, selected elements</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_each.asp" target="_blank">each()</a></td>
			<td><div class="box">$(selector).each(function(index,element))<p>자바스크립트의 for문과 같은 역할을 한다. 해당 요소를 반복한다.</p></div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_get.asp" target="_blank">get()</a></td>
			<td><div class="box">Get the DOM elements matched by the selector</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_index.asp" target="_blank">index()</a></td>
			<td>
			<div class="box">
			$(선택자).index();<p>선택 대상의 인덱스값(순서값)을 가져온다.</p>
			</div>
			</td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_noconflict.asp" target="_blank">$.noConflict()</a></td>
			<td><div class="box">Release jQuery's control of the $ variable</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_param.asp" target="_blank">$.param()</a></td>
			<td><div class="box">Create a serialized representation of an array or object (can be used as URL query string for AJAX requests)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_removedata.asp" target="_blank">removeData()</a></td>
			<td><div class="box">Removes a previously-stored piece of data</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_size.asp" target="_blank">size()</a></td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.8.</span> Return the number of DOM elements matched by the jQuery selector</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/misc_toarray.asp" target="_blank">toArray()</a></td>
			<td><div class="box">Retrieve all the DOM elements contained in the jQuery set, as an array</div></td>
		</tr>
		</tbody>
	</table>

	<h2>jQuery Properties</h2>
	<table class="Methods" border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
		<tr>
			<th style="width:20%">Method</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_context.asp" target="_blank">context</a></td>
			<td><div class="box"><span class="deprecated">Deprecated in version 1.10.</span> Contains the 
			original context passed to jQuery()</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_jquery.asp" target="_blank">jquery</a></td>
			<td><div class="box">Contains the jQuery version number</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_jquery_fx_interval.asp" target="_blank">jQuery.fx.interval</a></td>
			<td><div class="box">Change the animation firing rate in milliseconds</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_jquery_fx_off.asp" target="_blank">jQuery.fx.off</a></td>
			<td><div class="box">Globally disable/enable all animations</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_jquery_support.asp" target="_blank">jQuery.support</a></td>
			<td><div class="box">A collection of properties representing different browser features or bugs (Intended for jQuery's internal use)</div></td>
		</tr>
		<tr>
			<td><a href="http://www.w3schools.com/jquery/prop_length.asp" target="_blank">length</a></td>
			<td>
			<div class="box">
			$("ul > li").length<p>ul 밑에 li의 갯수값을 반환해준다.</p>
			</div>
			</td>
		</tr>
		</tbody>
	</table>


	<script type="text/javascript"></script>
</body>
</html>
