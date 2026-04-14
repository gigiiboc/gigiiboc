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
	body {padding: 5%}
	h2 {text-align: left;margin: 50px 0 30px;font-weight: bold;font-size: 1.2em}
	table {width: 90%;text-align: left}
	table tr {padding: 10px;background: #fff}
	table tr:hover {background: #f7f7f7}
	table th {padding: 10px;}
	table td {padding: 10px;line-height:1.5}
</style>
</head>

<body>

    <h2>Selector</h2>

	<table border="1" cellspacing="0" cellpadding="0" style="">
		<tbody>
			<tr>
				<th style="width:20%">Selector</th>
				<th style="width:20%">Example</th>
				<th style="width:52%">Example description</th>
				<th>CSS</th>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_class.asp" target="_blank">.<i>class</i></a></td>
				<td class="notranslate">.intro</td>
				<td>Selects all elements with class="intro"</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_id.asp" target="_blank">#<i>id</i></a></td>
				<td class="notranslate">#firstname</td>
				<td>Selects the element with id="firstname"</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_all.asp" target="_blank">*</a></td>
				<td class="notranslate">*</td>
				<td>Selects all elements</td>
				<td>2</td>
			</tr>
			<tr>
				<td><i><a href="http://www.w3schools.com/cssref/sel_element.asp" target="_blank">element</a></i></td>
				<td class="notranslate">p</td>
				<td>Selects all &lt;p&gt; elements</td>
				<td>1</td>
			</tr>
			<tr>
				<td><i><a href="http://www.w3schools.com/cssref/sel_element_comma.asp" target="_blank">element,element</a></i></td>
				<td class="notranslate">div, p</td>
				<td>Selects all &lt;div&gt; elements and all &lt;p&gt; elements</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_element_element.asp" target="_blank"><i>element</i> <i>element</i></a></td>
				<td class="notranslate">div p</td>
				<td>Selects all &lt;p&gt; elements inside &lt;div&gt; elements</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_element_gt.asp" target="_blank"><i>element</i>&gt;<i>element</i></a></td>
				<td class="notranslate">div &gt; p</td>
				<td>Selects all &lt;p&gt; elements where the parent is a &lt;div&gt; element</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_element_pluss.asp" target="_blank"><i>element</i>+<i>element</i></a></td>
				<td class="notranslate">div + p</td>
				<td>Selects all &lt;p&gt; elements that are placed immediately after &lt;div&gt; elements</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_gen_sibling.asp" target="_blank"><i>element1</i>~<i>element2</i></a></td>
				<td>p ~ ul</td>
				<td>Selects every &lt;ul&gt; element that are preceded by a &lt;p&gt; element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attribute.asp" target="_blank">[<i>attribute</i>]</a></td>
				<td class="notranslate">[target]</td>
				<td>Selects all elements with a target attribute</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attribute_value.asp" target="_blank">[<i>attribute</i>=<i>value</i>]</a></td>
				<td class="notranslate">[target=_blank]</td>
				<td>Selects all elements with target="_blank"</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attribute_value_contains.asp" target="_blank">[<i>attribute</i>~=<i>value</i>]</a></td>
				<td class="notranslate">[title~=flower]</td>
				<td>Selects all elements with a title attribute containing the word "flower"</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attribute_value_lang.asp" target="_blank">[<i>attribute</i>|=<i>value</i>]</a></td>
				<td class="notranslate">[lang|=en]</td>
				<td>Selects all elements with a lang attribute value starting with "en"</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attr_begin.asp" target="_blank">[<i>attribute</i>^=<i>value</i>]</a></td>
				<td>a[href^="https"]</td>
				<td>Selects every &lt;a&gt; element whose href attribute value begins with "https"</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attr_end.asp" target="_blank">[<i>attribute</i>$=<i>value</i>]</a></td>
				<td>a[href$=".pdf"]</td>
				<td>Selects every &lt;a&gt; element whose href attribute value ends with ".pdf"</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_attr_contain.asp" target="_blank">[<i>attribute</i>*=<i>value</i>]</a></td>
				<td>a[href*="w3schools"]</td>
				<td>Selects every &lt;a&gt; element whose href attribute value contains the substring "w3schools"</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_active.asp" target="_blank">:active</a></td>
				<td class="notranslate">a:active</td>
				<td>Selects the active link</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_after.asp" target="_blank">::after</a></td>
				<td class="notranslate">p::after</td>
				<td>Insert something after the content of each &lt;p&gt; element</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_before.asp" target="_blank">::before</a></td>
				<td class="notranslate">p::before</td>
				<td>Insert something before&nbsp;the content of each &lt;p&gt; element</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_checked.asp" target="_blank">:checked</a></td>
				<td>input:checked</td>
				<td>Selects every checked &lt;input&gt; element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_disabled.asp" target="_blank">:disabled</a></td>
				<td>input:disabled</td>
				<td>Selects every disabled &lt;input&gt; element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_empty.asp" target="_blank">:empty</a></td>
				<td>p:empty</td>
				<td>Selects every &lt;p&gt; element that has no children (including text nodes)</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_enabled.asp" target="_blank">:enabled</a></td>
				<td>input:enabled</td>
				<td>Selects every enabled &lt;input&gt; element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_firstchild.asp" target="_blank">:first-child</a></td>
				<td class="notranslate">p:first-child</td>
				<td>Selects every &lt;p&gt; element that is the first child of its parent</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_firstletter.asp" target="_blank">::first-letter</a></td>
				<td class="notranslate">p::first-letter</td>
				<td>Selects the first letter of every &lt;p&gt; element</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_firstline.asp" target="_blank">::first-line</a></td>
				<td class="notranslate">p::first-line</td>
				<td>Selects the first line of every &lt;p&gt; element</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_first-of-type.asp" target="_blank">:first-of-type</a></td>
				<td>p:first-of-type</td>
				<td>Selects every &lt;p&gt; element that is the first &lt;p&gt; element of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_focus.asp" target="_blank">:focus</a></td>
				<td class="notranslate">input:focus</td>
				<td>Selects the input element which has focus</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_hover.asp" target="_blank">:hover</a></td>
				<td class="notranslate">a:hover</td>
				<td>Selects links on mouse over</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_in-range.asp" target="_blank">:in-range</a></td>
				<td class="notranslate">input:in-range</td>
				<td>Selects input elements with a value within a specified range</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_invalid.asp" target="_blank">:invalid</a></td>
				<td class="notranslate">input:invalid</td>
				<td>Selects all input elements with an invalid value</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_lang.asp" target="_blank">:lang(<i>language</i>)</a></td>
				<td class="notranslate">p:lang(it)</td>
				<td>Selects every &lt;p&gt; element with a lang attribute equal to "it" (Italian)</td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_last-child.asp" target="_blank">:last-child</a></td>
				<td>p:last-child</td>
				<td>Selects every &lt;p&gt; element that is the last child of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_last-of-type.asp" target="_blank">:last-of-type</a></td>
				<td>p:last-of-type</td>
				<td>Selects every &lt;p&gt; element that is the last &lt;p&gt; element of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_link.asp" target="_blank">:link</a></td>
				<td class="notranslate">a:link</td>
				<td>Selects all unvisited links</td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_not.asp" target="_blank">:not(<i>selector</i>)</a></td>
				<td>:not(p)</td>
				<td>Selects every element that is not a &lt;p&gt; element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_nth-child.asp" target="_blank">:nth-child(<i>n</i>)</a></td>
				<td>p:nth-child(2)</td>
				<td>Selects every &lt;p&gt; element that is the second child of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_nth-last-child.asp" target="_blank">:nth-last-child(<i>n</i>)</a></td>
				<td>p:nth-last-child(2)</td>
				<td>Selects every &lt;p&gt; element that is the second child of its parent, counting from the last child</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_nth-last-of-type.asp" target="_blank">:nth-last-of-type(<i>n</i>)</a></td>
				<td>p:nth-last-of-type(2)</td>
				<td>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent, counting from the last child</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_nth-of-type.asp" target="_blank">:nth-of-type(<i>n</i>)</a></td>
				<td>p:nth-of-type(2)</td>
				<td>Selects every &lt;p&gt; element that is the second &lt;p&gt; element of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_only-of-type.asp" target="_blank">:only-of-type</a></td>
				<td>p:only-of-type</td>
				<td>Selects every &lt;p&gt; element that is the only &lt;p&gt; element of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_only-child.asp" target="_blank">:only-child</a></td>
				<td>p:only-child</td>
				<td>Selects every &lt;p&gt; element that is the only child of its parent</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_optional.asp" target="_blank">:optional</a></td>
				<td class="notranslate">input:optional</td>
				<td>Selects input elements with no "required" attribute</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_out-of-range.asp" target="_blank">:out-of-range</a></td>
				<td class="notranslate">input:out-of-range</td>
				<td>Selects input elements with a value outside a specified range</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_read-only.asp" target="_blank">:read-only</a></td>
				<td class="notranslate">input:read-only</td>
				<td>Selects input elements with the "readonly" attribute specified</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_read-write.asp" target="_blank">:read-write</a></td>
				<td class="notranslate">input:read-write</td>
				<td>Selects input elements with the "readonly" attribute NOT specified</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_required.asp" target="_blank">:required</a></td>
				<td class="notranslate">input:required</td>
				<td>Selects input elements with the "required" attribute specified</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_root.asp" target="_blank">:root</a></td>
				<td>:root</td>
				<td>Selects the document's root element</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_selection.asp" target="_blank">::selection</a></td>
				<td>::selection</td>
				<td>Selects the portion of an element that is selected by a user</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_target.asp" target="_blank">:target</a></td>
				<td>#news:target </td>
				<td>Selects the current active #news element (clicked on a URL containing that anchor name)</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_valid.asp" target="_blank">:valid</a></td>
				<td class="notranslate">input:valid</td>
				<td>Selects all input elements with a valid value</td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="http://www.w3schools.com/cssref/sel_visited.asp" target="_blank">:visited</a></td>
				<td class="notranslate">a:visited</td>
				<td>Selects all visited links</td>
				<td>1</td>
			</tr>
		</tbody>
	</table>

    <h2><a id="color">Color Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_color.asp" target="_blank">color</a></td>
                <td>Sets the color of text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_opacity.asp" target="_blank">opacity</a></td>
                <td>Sets the opacity level for an element</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>


    <h2><a id="background">Background and Border Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_background.asp" target="_blank">background</a></td>
                <td>A shorthand property for setting all the background properties in one declaration
                </td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-attachment.asp" target="_blank">background-attachment</a></td>
                <td>Sets whether a background image is fixed or scrolls with the rest of the page</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-blend-mode.asp" target="_blank">background-blend-mode</a></td>
                <td>Specifies the blending mode of each background layer (color/image)</td>
                <td>3&nbsp;</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-color.asp" target="_blank">background-color</a></td>
                <td>Specifies the background color of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-image.asp" target="_blank">background-image</a></td>
                <td>Specifies one or more background images for an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-position.asp" target="_blank">background-position</a></td>
                <td>Specifies the position of a background image</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_background-repeat.asp" target="_blank">background-repeat</a></td>
                <td>Sets how a background image will be repeated</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_background-clip.asp" target="_blank">background-clip</a></td>
                <td>Specifies the painting area of the background</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_background-origin.asp" target="_blank">background-origin</a></td>
                <td>Specifies where the background image(s) is/are positioned</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_background-size.asp" target="_blank">background-size</a></td>
                <td>Specifies the size of the background image(s)</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border.asp" target="_blank">border</a></td>
                <td>Sets all the border properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-bottom.asp" target="_blank">border-bottom</a></td>
                <td>Sets all the bottom border properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-bottom_color.asp" target="_blank">border-bottom-color</a></td>
                <td>Sets the color of the bottom border</td>
                <td>1&nbsp;</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-bottom-left-radius.asp" target="_blank">border-bottom-left-radius</a></td>
                <td>Defines the shape of the border of the bottom-left corner</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-bottom-right-radius.asp" target="_blank">border-bottom-right-radius</a></td>
                <td>Defines the shape of the border of the bottom-right corner</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-bottom_style.asp" target="_blank">border-bottom-style</a></td>
                <td>Sets the style of the bottom border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-bottom_width.asp" target="_blank">border-bottom-width</a></td>
                <td>Sets the width of the bottom border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-color.asp" target="_blank">border-color</a></td>
                <td>Sets the color of the four borders</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image.asp" target="_blank">border-image</a></td>
                <td>A shorthand property for setting all the border-image-* properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image-outset.asp" target="_blank">border-image-outset</a></td>
                <td>Specifies the amount by which the border image area extends beyond the border box</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image-repeat.asp" target="_blank">border-image-repeat</a></td>
                <td>Specifies whether the border image should be repeated, rounded or stretched</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image-slice.asp" target="_blank">border-image-slice</a></td>
                <td>Specifies how to slice the border image</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image-source.asp" target="_blank">border-image-source</a></td>
                <td>Specifies the path to the image to be used as a border</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-image-width.asp" target="_blank">border-image-width</a></td>
                <td>Specifies the widths of the image-border</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-left.asp" target="_blank">border-left</a></td>
                <td>Sets all the left border properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-left_color.asp" target="_blank">border-left-color</a></td>
                <td>Sets the color of the left border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-left_style.asp" target="_blank">border-left-style</a></td>
                <td>Sets the style of the left border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-left_width.asp" target="_blank">border-left-width</a></td>
                <td>Sets the width of the left border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-radius.asp" target="_blank">border-radius</a></td>
                <td>A shorthand property for setting all the four border-*-radius properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-right.asp" target="_blank">border-right</a></td>
                <td>Sets all the right border properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-right_color.asp" target="_blank">border-right-color</a></td>
                <td>Sets the color of the right border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-right_style.asp" target="_blank">border-right-style</a></td>
                <td>Sets the style of the right border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-right_width.asp" target="_blank">border-right-width</a></td>
                <td>Sets the width of the right border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-style.asp" target="_blank">border-style</a></td>
                <td>Sets the style of the four borders</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-top.asp" target="_blank">border-top</a></td>
                <td>Sets all the top border properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-top_color.asp" target="_blank">border-top-color</a></td>
                <td>Sets the color of the top border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-top-left-radius.asp" target="_blank">border-top-left-radius</a></td>
                <td>Defines the shape of the border of the top-left corner</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_border-top-right-radius.asp" target="_blank">border-top-right-radius</a></td>
                <td>Defines the shape of the border of the top-right corner</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-top_style.asp" target="_blank">border-top-style</a></td>
                <td>Sets the style of the top border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-top_width.asp" target="_blank">border-top-width</a></td>
                <td>Sets the width of the top border</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-width.asp" target="_blank">border-width</a></td>
                <td>Sets the width of the four borders</td>
                <td>1</td>
            </tr>
            <tr>
                <td>box-decoration-break</td>
                <td>Sets the behaviour of the background and border of an element at page-break, or, for in-line elements, at line-break.</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_box-shadow.asp" target="_blank">box-shadow</a></td>
                <td>Attaches one or more drop-shadows to the box</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="basic">Basic Box Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_bottom.asp" target="_blank">bottom</a></td>
                <td>Specifies the bottom position of a positioned element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_clear.asp" target="_blank">clear</a></td>
                <td>Specifies which sides of an element where other floating elements are not allowed</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_clip.asp" target="_blank">clip</a></td>
                <td>Clips an absolutely positioned element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_display.asp" target="_blank">display</a></td>
                <td>Specifies how a certain HTML element should be displayed</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_float.asp" target="_blank">float</a></td>
                <td>Specifies whether or not a box should float</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_height.asp" target="_blank">height</a></td>
                <td>Sets the height of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_left.asp" target="_blank">left</a></td>
                <td>Specifies the left position of a positioned element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_margin.asp" target="_blank">margin</a></td>
                <td>Sets all the margin properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_margin-bottom.asp" target="_blank">margin-bottom</a></td>
                <td>Sets the bottom margin of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_margin-left.asp" target="_blank">margin-left</a></td>
                <td>Sets the left margin of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_margin-right.asp" target="_blank">margin-right</a></td>
                <td>Sets the right margin of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_margin-top.asp" target="_blank">margin-top</a></td>
                <td>Sets the top margin of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_max-height.asp" target="_blank">max-height</a></td>
                <td>Sets the maximum height of an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_max-width.asp" target="_blank">max-width</a></td>
                <td>Sets the maximum width of an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_min-height.asp" target="_blank">min-height</a></td>
                <td>Sets the minimum height of an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_min-width.asp" target="_blank">min-width</a></td>
                <td>Sets the minimum width of an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_overflow.asp" target="_blank">overflow</a><br>
                </td>
                <td>Specifies what happens if content overflows an element's box
                </td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_overflow-x.asp" target="_blank">overflow-x</a></td>
                <td>Specifies whether or not to clip the left/right edges of the content, if it overflows the element's content area</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_overflow-y.asp" target="_blank">overflow-y</a></td>
                <td>Specifies whether or not to clip the top/bottom edges of the content, if it overflows the element's content area</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_padding.asp" target="_blank">padding</a></td>
                <td>Sets all the padding properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_padding-bottom.asp" target="_blank">padding-bottom</a></td>
                <td>Sets the bottom padding of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_padding-left.asp" target="_blank">padding-left</a></td>
                <td>Sets the left padding of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_padding-right.asp" target="_blank">padding-right</a></td>
                <td>Sets the right padding of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_padding-top.asp" target="_blank">padding-top</a></td>
                <td>Sets the top padding of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_position.asp" target="_blank">position</a></td>
                <td>Specifies the type of positioning method used for an element (static, relative, absolute or fixed)</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_right.asp" target="_blank">right</a></td>
                <td>Specifies the right position of a positioned element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_top.asp" target="_blank">top</a></td>
                <td>Specifies the top position of a positioned element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_visibility.asp" target="_blank">visibility</a></td>
                <td>Specifies whether or not an element is visible</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_width.asp" target="_blank">width</a></td>
                <td>Sets the width of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_vertical-align.asp" target="_blank">vertical-align</a></td>
                <td>Sets the vertical alignment of an element</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_pos_z-index.asp" target="_blank">z-index</a></td>
                <td>Sets the stack order of a positioned element</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="flexible">Flexible Box Layout</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_align-content.asp" target="_blank">align-content</a></td>
                <td>Specifies the alignment between the lines inside a flexible container when the items do not use all available space</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_align-items.asp" target="_blank">align-items</a></td>
                <td>Specifies the alignment for items inside a flexible container</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_align-self.asp" target="_blank">align-self</a></td>
                <td>Specifies the alignment for selected items inside a flexible container</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex.asp" target="_blank">flex</a></td>
                <td>Specifies the length of the item, relative to the rest</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-basis.asp" target="_blank">flex-basis</a></td>
                <td>Specifies the initial length of a flexible item</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-direction.asp" target="_blank">flex-direction</a></td>
                <td>Specifies the direction of the flexible items</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-flow.asp" target="_blank">flex-flow</a></td>
                <td>A shorthand property for the flex-direction and the flex-wrap properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-grow.asp" target="_blank">flex-grow</a></td>
                <td>Specifies how much the item will grow relative to the rest</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-shrink.asp" target="_blank">flex-shrink</a></td>
                <td>Specifies how the item will shrink relative to the rest</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_flex-wrap.asp" target="_blank">flex-wrap</a></td>
                <td>Specifies whether the flexible items should wrap or not</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_justify-content.asp" target="_blank">justify-content</a></td>
                <td>Specifies the alignment between the items inside a flexible container when the items do not use all available space</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_order.asp" target="_blank">order</a></td>
                <td>Sets the order of the flexible item, relative to the rest</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="text">Text Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_hanging-punctuation.asp" target="_blank">hanging-punctuation</a></td>
                <td>Specifies whether a punctuation character may be placed outside the line box</td>
                <td>3</td>
            </tr>
            <tr>
                <td>hyphens</td>
                <td>Sets how to split words to improve the layout of paragraphs</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_letter-spacing.asp" target="_blank">letter-spacing</a></td>
                <td>Increases or decreases the space between characters in a text</td>
                <td>1</td>
            </tr>
            <tr>
                <td>line-break</td>
                <td>Specifies how/if to break lines</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_dim_line-height.asp" target="_blank">line-height</a></td>
                <td>Sets the line height</td>
                <td>1</td>
            </tr>
            <tr>
                <td>overflow-wrap</td>
                <td>Specifies whether or not the browser may break lines within words in order to prevent overflow (when a string is too long to fit its containing box)
                </td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_tab-size.asp" target="_blank">tab-size</a></td>
                <td>Specifies the length of the tab-character</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_text-align.asp" target="_blank">text-align</a></td>
                <td>Specifies the horizontal alignment of text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-align-last.asp" target="_blank">text-align-last</a></td>
                <td>Describes how the last line of a block or a line right before a forced line break is aligned when text-align is "justify"</td>
                <td>3</td>
            </tr>
            <tr>
                <td>text-combine-upright</td>
                <td>Specifies the combination of multiple characters into the space of a single character</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_text-indent.asp" target="_blank">text-indent</a></td>
                <td>Specifies the indentation of the first line in a text-block</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-justify.asp" target="_blank">text-justify</a></td>
                <td>Specifies the justification method used when text-align is "justify"
                </td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_text-transform.asp" target="_blank">text-transform</a></td>
                <td>Controls the capitalization of text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_white-space.asp" target="_blank">white-space</a></td>
                <td>Specifies how white-space inside an element is handled</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_word-break.asp" target="_blank">word-break</a></td>
                <td>Specifies line breaking rules for non-CJK scripts</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_word-spacing.asp" target="_blank">word-spacing</a></td>
                <td>Increases or decreases the space between words in a text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_word-wrap.asp" target="_blank">word-wrap</a></td>
                <td>Allows long, unbreakable words to be broken and wrap to the next line</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="textdecor">Text Decoration Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_text-decoration.asp" target="_blank">text-decoration</a></td>
                <td>Specifies the decoration added to text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-decoration-color.asp" target="_blank">text-decoration-color</a></td>
                <td>Specifies the color of the text-decoration</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-decoration-line.asp" target="_blank">text-decoration-line</a></td>
                <td>Specifies the type of line in a text-decoration</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-decoration-style.asp" target="_blank">text-decoration-style</a></td>
                <td>Specifies the style of the line in a text decoration</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-shadow.asp" target="_blank">text-shadow</a></td>
                <td>Adds shadow to text </td>
                <td>3</td>
            </tr>
            <tr>
                <td>text-underline-position</td>
                <td>Specifies the position of the underline which is set using the text-decoration property</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="font">Font Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_font-face_rule.asp" target="_blank">@font-face</a></td>
                <td>A rule that allows websites to download and use fonts other than the "web-safe" fonts</td>
                <td>3</td>
            </tr>
            <tr>
                <td>@font-feature-values</td>
                <td>Allows authors to use a common name in font-variant-alternate for feature activated differently in OpenType</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_font.asp" target="_blank">font</a></td>
                <td>Sets all the font properties in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_font-family.asp" target="_blank">font-family</a></td>
                <td>Specifies the font family for text</td>
                <td>1</td>
            </tr>
            <tr>
                <td>font-feature-settings</td>
                <td>Allows control over advanced typographic features in OpenType fonts</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-kerning</td>
                <td>Controls the usage of the kerning information (how letters are spaced)</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-language-override</td>
                <td>Controls the usage of language-specific glyphs in a typeface</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_font-size.asp" target="_blank">font-size</a></td>
                <td>Specifies the font size of text</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_font-size-adjust.asp" target="_blank">font-size-adjust</a></td>
                <td>Preserves the readability of text when font fallback occurs</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_font-stretch.asp" target="_blank">font-stretch</a></td>
                <td>Selects a normal, condensed, or expanded face from a font family</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_font-style.asp" target="_blank">font-style</a></td>
                <td>Specifies the font style for text</td>
                <td>1</td>
            </tr>
            <tr>
                <td>font-synthesis</td>
                <td>Controls which missing typefaces (bold or italic) may be synthesized by the browser</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_font-variant.asp" target="_blank">font-variant</a></td>
                <td>Specifies whether or not a text should be displayed in a small-caps font</td>
                <td>1</td>
            </tr>
            <tr>
                <td>font-variant-alternates</td>
                <td>Controls the usage of alternate glyphs associated to alternative names defined in @font-feature-values</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-variant-caps</td>
                <td>Controls the usage of alternate glyphs for capital letters</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-variant-east-asian</td>
                <td>Controls the usage of alternate glyphs for East Asian scripts (e.g Japanese and Chinese)</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-variant-ligatures</td>
                <td>Controls which ligatures and contextual forms are used in textual content of the elements it applies to</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-variant-numeric</td>
                <td>Controls the usage of alternate glyphs for numbers, fractions, and ordinal markers</td>
                <td>3</td>
            </tr>
            <tr>
                <td>font-variant-position</td>
                <td>Controls the usage of alternate glyphs of smaller size positioned as superscript or subscript regarding the baseline of the font</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_font_weight.asp" target="_blank">font-weight</a></td>
                <td>Specifies the weight of a font</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="writing">Writing Modes Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_direction.asp" target="_blank">direction</a></td>
                <td>Specifies the text direction/writing direction</td>
                <td>2</td>
            </tr>
            <tr>
                <td>text-orientation</td>
                <td>Defines the orientation of the text in a line</td>
                <td>3</td>
            </tr>
            <tr>
                <td>text-combine-upright</td>
                <td>Specifies the combination of multiple characters into the space of a single character</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_text_unicode-bidi.asp" target="_blank">unicode-bidi</a></td>
                <td>Used together with the <a href="http://www.w3schools.com/cssref/pr_text_direction.asp" target="_blank">direction</a> property to set or return whether the text should be overridden to support multiple languages in the same document</td>
                <td>2</td>
            </tr>
            <tr>
                <td>writing-mode</td>
                <td></td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="table">Table Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-collapse.asp" target="_blank">border-collapse</a></td>
                <td>Specifies whether or not table borders should be collapsed</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_border-spacing.asp" target="_blank">border-spacing</a></td>
                <td>Specifies the distance between the borders of adjacent cells</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_tab_caption-side.asp" target="_blank">caption-side</a></td>
                <td>Specifies the placement of a table caption</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_tab_empty-cells.asp" target="_blank">empty-cells</a></td>
                <td>Specifies whether or not to display borders and background on empty cells in a table</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_tab_table-layout.asp" target="_blank">table-layout</a></td>
                <td>Sets the layout algorithm to be used for a table</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="lists">Lists and Counters Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_gen_counter-increment.asp" target="_blank">counter-increment</a></td>
                <td>Increments one or more counters</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_gen_counter-reset.asp" target="_blank">counter-reset</a></td>
                <td>Creates or resets one or more counters</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_list-style.asp" target="_blank">list-style</a></td>
                <td>Sets all the properties for a list in one declaration</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_list-style-image.asp" target="_blank">list-style-image</a></td>
                <td>Specifies an image as the list-item marker</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_list-style-position.asp" target="_blank">list-style-position</a></td>
                <td>Specifies if the list-item markers should appear inside or outside the content flow</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_list-style-type.asp" target="_blank">list-style-type</a></td>
                <td>Specifies the type of list-item marker</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="animation">Animation Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-keyframes.asp" target="_blank">@keyframes</a></td>
                <td>Specifies the animation code</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation.asp" target="_blank">animation</a></td>
                <td>A shorthand property for all the animation properties (except animation-play-state and animation-fill-mode)</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-delay.asp" target="_blank">animation-delay</a></td>
                <td>Specifies a delay for the start of an animation</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-direction.asp" target="_blank">animation-direction</a></td>
                <td>Specifies whether or not the animation should play in reverse on alternate cycles</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-duration.asp" target="_blank">animation-duration</a></td>
                <td>Specifies how many seconds or milliseconds an animation takes to complete one cycle</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-fill-mode.asp" target="_blank">animation-fill-mode</a></td>
                <td>Specifies a style for the element when the animation is not playing (when it is finished, or when it has a delay)</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp" target="_blank">animation-iteration-count</a></td>
                <td>Specifies the number of times an animation should be played</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-name.asp" target="_blank">animation-name</a></td>
                <td>Specifies the name of the @keyframes animation</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-play-state.asp" target="_blank">animation-play-state</a></td>
                <td>Specifies whether the animation is running or paused</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_animation-timing-function.asp" target="_blank">animation-timing-function</a></td>
                <td>Specifies the speed curve of an animation</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="transform">Transform Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_backface-visibility.asp" target="_blank">backface-visibility</a></td>
                <td>Defines whether or not an element should be visible when not facing the screen</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_perspective.asp" target="_blank">perspective</a></td>
                <td>Specifies the perspective on how 3D elements are viewed</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_perspective-origin.asp" target="_blank">perspective-origin</a></td>
                <td>Specifies the bottom position of 3D elements</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transform.asp" target="_blank">transform</a></td>
                <td>Applies a 2D or 3D transformation to an element</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transform-origin.asp" target="_blank">transform-origin</a></td>
                <td>Allows you to change the position on transformed elements</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transform-style.asp" target="_blank">transform-style</a></td>
                <td>Specifies how nested elements are rendered in 3D space</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="transitions">Transitions Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transition.asp" target="_blank">transition</a></td>
                <td>A shorthand property for setting the four transition properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transition-property.asp" target="_blank">transition-property</a></td>
                <td>Specifies the name of the CSS property the transition effect is for</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transition-duration.asp" target="_blank">transition-duration</a></td>
                <td>Specifies how many seconds or milliseconds a transition effect takes to complete
                </td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transition-timing-function.asp" target="_blank">transition-timing-function</a></td>
                <td>Specifies the speed curve of the transition effect</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_transition-delay.asp" target="_blank">transition-delay</a></td>
                <td>Specifies when the transition effect will start</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="user">Basic User Interface Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_box-sizing.asp" target="_blank">box-sizing</a></td>
                <td>Tells the browser what the sizing properties (width and height) should include
                </td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_gen_content.asp" target="_blank">content</a></td>
                <td>Used with the :before and :after pseudo-elements, to insert generated content</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_class_cursor.asp" target="_blank">cursor</a></td>
                <td>Specifies the type of cursor to be displayed</td>
                <td>2</td>
            </tr>
            <tr>
                <td>ime-mode</td>
                <td>Controls the state of the input method editor for text fields</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_nav-down.asp" target="_blank">nav-down</a></td>
                <td>Specifies where to navigate when using the arrow-down navigation key</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_nav-index.asp" target="_blank">nav-index</a></td>
                <td>Specifies the tabbing order for an element</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_nav-left.asp" target="_blank">nav-left</a></td>
                <td>Specifies where to navigate when using the arrow-left navigation key</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_nav-right.asp" target="_blank">nav-right</a></td>
                <td>Specifies where to navigate when using the arrow-right navigation key</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_nav-up.asp" target="_blank">nav-up</a></td>
                <td>Specifies where to navigate when using the arrow-up navigation key</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_outline.asp" target="_blank">outline</a></td>
                <td>Sets all the outline properties in one declaration</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_outline-color.asp" target="_blank">outline-color</a></td>
                <td>Sets the color of an outline</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_outline-offset.asp" target="_blank">outline-offset</a></td>
                <td>Offsets an outline, and draws it beyond the border edge</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_outline-style.asp" target="_blank">outline-style</a></td>
                <td>Sets the style of an outline</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_outline-width.asp" target="_blank">outline-width</a></td>
                <td>Sets the width of an outline</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_resize.asp" target="_blank">resize</a></td>
                <td>Specifies whether or not an element is resizable by the user</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_text-overflow.asp" target="_blank">text-overflow</a></td>
                <td>Specifies what should happen when text overflows the containing element</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="multicol">Multi-column Layout Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>break-after</td>
                <td>Specifies the page-, column-, or region-break behavior after the generated box</td>
                <td>3</td>
            </tr>
            <tr>
                <td>break-before</td>
                <td>Specifies the page-, column-, or region-break behavior before the generated box</td>
                <td>3</td>
            </tr>
            <tr>
                <td>break-inside</td>
                <td>Specifies the page-, column-, or region-break behavior inside the generated box</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-count.asp" target="_blank">column-count</a></td>
                <td>Specifies the number of columns an element should be divided into</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-fill.asp" target="_blank">column-fill</a></td>
                <td>Specifies how to fill columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-gap.asp" target="_blank">column-gap</a></td>
                <td>Specifies the gap between the columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-rule.asp" target="_blank">column-rule</a></td>
                <td>A shorthand property for setting all the column-rule-* properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-rule-color.asp" target="_blank">column-rule-color</a></td>
                <td>Specifies the color of the rule between columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-rule-style.asp" target="_blank">column-rule-style</a></td>
                <td>Specifies the style of the rule between columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-rule-width.asp" target="_blank">column-rule-width</a></td>
                <td>Specifies the width of the rule between columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-span.asp" target="_blank">column-span</a></td>
                <td>Specifies how many columns an element should span across</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_column-width.asp" target="_blank">column-width</a></td>
                <td>Specifies the width of the columns</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_columns.asp" target="_blank">columns</a></td>
                <td>A shorthand property for setting column-width and column-count</td>
                <td>3</td>
            </tr>
            <tr>
                <td>widows</td>
                <td>Sets the minimum number of lines that must be left at the top of a page when a page break occurs inside an element</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="paged">Paged Media</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>orphans</td>
                <td>Sets the minimum number of lines that must be left at the bottom of a page when a page break occurs inside an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_print_pageba.asp" target="_blank">page-break-after</a></td>
                <td>Sets the page-breaking behavior after an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_print_pagebb.asp" target="_blank">page-break-before</a></td>
                <td>Sets the page-breaking behavior before an element</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_print_pagebi.asp" target="_blank">page-break-inside</a></td>
                <td>Sets the page-breaking behavior inside an element</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="gencon">Generated Content for Paged Media</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>marks</td>
                <td>Adds crop and/or cross marks to the document</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/pr_gen_quotes.asp" target="_blank">quotes</a></td>
                <td>Sets the type of quotation marks for embedded quotations</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="filter">Filter Effects Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td><a href="http://www.w3schools.com/cssref/css3_pr_filter.asp" target="_blank">filter</a></td>
                <td>Defines effects (e.g. blurring or color shifting) on an element before the element is displayed</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="image">Image Values and Replaced Content</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>image-orientation</td>
                <td>Specifies a rotation in the right or clockwise direction that a user agent applies to an image (This property is likely going to be deprecated and its functionality moved to HTML)</td>
                <td>3</td>
            </tr>
            <tr>
                <td>image-rendering</td>
                <td>Gives a hint to the browser about what aspects of an image are most important to preserve when the image is scaled</td>
                <td>3</td>
            </tr>
            <tr>
                <td>image-resolution</td>
                <td>Specifies the intrinsic resolution of all raster images used in/on the element
                </td>
                <td>3</td>
            </tr>
            <tr>
                <td>object-fit</td>
                <td>Specifies how the contents of a replaced element should be fitted to the box established by its used height and width</td>
                <td>3</td>
            </tr>
            <tr>
                <td>object-position</td>
                <td>Specifies the alignment of the replaced element inside its box</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="masking">Masking Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>mask</td>
                <td></td>
                <td>3</td>
            </tr>
            <tr>
                <td>mask-type</td>
                <td></td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="speech">Speech Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>mark</td>
                <td>A shorthand property for setting the mark-before and mark-after properties</td>
                <td>3</td>
            </tr>
            <tr>
                <td>mark-after</td>
                <td>Allows named markers to be attached to the audio stream</td>
                <td>3</td>
            </tr>
            <tr>
                <td>mark-before</td>
                <td>Allows named markers to be attached to the audio stream</td>
                <td>3</td>
            </tr>
            <tr>
                <td>phonemes</td>
                <td>Specifies a phonetic pronunciation for the text contained by the corresponding element</td>
                <td>3</td>
            </tr>
            <tr>
                <td>rest</td>
                <td>A shorthand property for setting the rest-before and rest-after properties </td>
                <td>3</td>
            </tr>
            <tr>
                <td>rest-after</td>
                <td>Specifies a rest or prosodic boundary to be observed after speaking an element's content</td>
                <td>3</td>
            </tr>
            <tr>
                <td>rest-before</td>
                <td>Specifies a rest or prosodic boundary to be observed before speaking an element's content</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-balance</td>
                <td>Specifies the balance between left and right channels</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-duration</td>
                <td>Specifies how long it should take to render the selected element's content</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-pitch</td>
                <td>Specifies the average pitch (a frequency) of the speaking voice</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-pitch-range</td>
                <td>Specifies variation in average pitch</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-rate</td>
                <td>Controls the speaking rate</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-stress</td>
                <td>Indicates the strength of emphasis to be applied</td>
                <td>3</td>
            </tr>
            <tr>
                <td>voice-volume</td>
                <td>Refers to the amplitude of the waveform output by the speech synthesises</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="marquee">Marquee Properties</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>marquee-direction</td>
                <td>Sets the direction of the moving content</td>
                <td>3</td>
            </tr>
            <tr>
                <td>marquee-play-count</td>
                <td>Sets how many times the content move</td>
                <td>3</td>
            </tr>
            <tr>
                <td>marquee-speed</td>
                <td>Sets how fast the content scrolls</td>
                <td>3</td>
            </tr>
            <tr>
                <td>marquee-style</td>
                <td>Sets the style of the moving content</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

    <h2><a id="marquee">custom</a></h2>
    <table border="1" cellspacing="0" cellpadding="0" style="">
        <tbody>
            <tr>
                <th style="width:25%;">Property</th>
                <th style="width:67%;">Description</th>
                <th style="width:8%;">CSS</th>
            </tr>
            <tr>
                <td>text-align:justify</td>
                <td>단락의 좌우크기에 맞춰서 문장을 벌려줌</td>
                <td></td>
            </tr>
            <tr>
                <td>white-space:nowrap;</td>
                <td>두줄을 한줄로 만드는 속성</td>
                <td></td>
            </tr>
            <tr>
                <td>word-break:break-all;</td>
                <td>여백에 맞게 글자 채워주는 속성</td>
                <td></td>
            </tr>
            <tr>
                <td>overflow:hidden;<br>text-overflow:ellipsis;<br>white-space:nowrap;</td>
                <td>한줄말줄임 사용시</td>
                <td></td>
            </tr>
            <tr>
                <td>overflow: hidden;<br>display: -webkit-box;<br>word-break: keep-all;<br>-webkit-line-clamp: 2;<br>-webkit-box-orient: vertical;</td>
                <td>2줄이상 말줄임 사용시</td>
                <td></td>
            </tr>
            <tr>
                <td>-ms-overflow-style: none; 속성 추가 후, <br>해당 div에 div::-webkit-scrollbar {display:none;} 추가</td>
                <td>스크롤바를 가려줌.</td>
                <td></td>
            </tr>
            <tr>
                <td>overflow:auto</td>
                <td>정해진 높이에 이상의 경우 스크롤박스로 변경</td>
                <td></td>
            </tr>
            <tr>
                <td>overflow:scroll</td>
                <td>높이와 상관없이 스크롤 생성</td>
                <td></td>
            </tr>
            <tr>
                <td>transform:rotate(360deg)</td>
                <td>360도 회전</td>
                <td></td>
            </tr>
            <tr>
                <td>content:'';</td>
                <td>공란 만듬</td>
                <td></td>
            </tr>
            <tr>
                <td>content:"텍스트";</td>
                <td>텍스트 입력</td>
                <td></td>
            </tr>
            <tr>
                <td>clear:left | right | both;</td>
                <td>왼쪽/오른쪽/양쪽, float을 제거한다.</td>
                <td></td>
            </tr>
            <tr>
                <td>content:"("attr(href)")";</td>
                <td>해당 태그의 href 값을 불러옴</td>
                <td></td>
            </tr>
            <tr>
                <td>content:url(smiley.gif);</td>
                <td>해당 url 값의 이미지를 불러옴</td>
                <td></td>
            </tr>
            <tr>
                <td>opacity:0.7</td>
                <td>투명도 70& 적용, 익스9부터 적용</td>
                <td></td>
            </tr>
            <tr>
                <td>filter:alpha(opacity:'70');</td>
                <td>투명도 70%, 익스7,8 이하 적용</td>
                <td></td>
            </tr>
            <tr>
                <td>background:rgba(255,255,255,0.1)</td>
                <td>ie10+ 크로스 브라우징 백그라운드 투명도</td>
                <td></td>
            </tr>
            <tr>
                <td>-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#e6ffffff', endColorstr=#e6ffffff')";</td>
                <td>
                    익스8 전용 백그라운드 투명도<br> 투명도 10% (#1AFFFFFF)<br> 투명도 20% (#33FFFFFF)<br> 투명도 30% (#4DFFFFFF)<br> 투명도 40% (#66FFFFFF)<br> 투명도 50% (#80FFFFFF)<br> 투명도 60% (#99FFFFFF)<br> 투명도 70% (#B3FFFFFF)<br> 투명도 80% (#CCFFFFFF)<br> 투명도 90% (#E6FFFFFF)
                </td>
                <td></td>
            </tr>
            <tr>
                <td>filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#e6ffffff', endColorstr=#e6ffffff');</td>
                <td>익스7 전용 백그라운드 투명도 <br> 투명도 10% (#1AFFFFFF)<br> 투명도 20% (#33FFFFFF)<br> 투명도 30% (#4DFFFFFF)<br> 투명도 40% (#66FFFFFF)<br> 투명도 50% (#80FFFFFF)<br> 투명도 60% (#99FFFFFF)<br> 투명도 70% (#B3FFFFFF)<br> 투명도 80% (#CCFFFFFF)<br> 투명도 90% (#E6FFFFFF)
                </td>
                <td></td>
            </tr>
            <tr>
                <td>background-size:cover</td>
                <td>백그라운드 이미지를 가로크기에 맞춰줌 익스9이상 적용</td>
                <td></td>
            </tr>
            <tr>
                <td>background-size:contain</td>
                <td>백그라운드 이미지를 세로크기에 맞춰줌. 익스9이상 적용</td>
                <td></td>
            </tr>
            <tr>
                <td>visibility: hidden</td>
                <td>컨텐츠 숨기기, display:none 은 미출력이지만 이 속성은 출력은 시키되, 숨겨주는 속성 </td>
                <td></td>
            </tr>
            <tr>
                <td>visibility: visible</td>
                <td>컨텐츠 보이기</td>
                <td></td>
            </tr>
            <tr>
                <td>resize:horizontal | vertical | both</td>
                <td>사용자가 임의로 텍스트박스의 크기를 조절가능하게 해준다. 가로/세로/모두</td>
                <td></td>
            </tr>
            <tr>
                <td>cursor:pointer</td>
                <td>커서변경</td>
                <td></td>
            </tr>
            <tr>
                <td>-webkit-overflow-scrolling:touch</td>
                <td><a href="https://blog.outsider.ne.kr/971" target="_blank" style="color:red;text-decoration:underline">모멘텀 스크롤</a>(모바일 기기에서 손가락으로 튕기면 가속도가 붙어 스크롤이 빠르게 내려가는 현상)을 가능하게 해준다. <br>또, 아이폰에서 iframe 스크롤이 안되는 문제를 해결해주는 열쇠이기도 하다. <a href="http://euntori7.tistory.com/234" target="_blank" style="color:red;text-decoration:underline">http://euntori7.tistory.com/234</a> </td>
                <td></td>
            </tr>
            <tr>
                <td>-webkit-scrollbar</td>
                <td></td>
                <td></td>
            </tr>			
        </tbody>
    </table>




    <script type="text/javascript"></script>
</body>

</html>