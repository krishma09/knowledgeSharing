<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>ASP.NET Tutorials | knowledge.com</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all"/>
<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/rs-plugin/settings.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-layout.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.animation.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/tribe-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.portfolio.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/wp-mediaelement.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.customizer/front.customizer.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.messages/core.messages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/swiper/idangerous.swiper.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>
</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
 
<?php include 'userheader.php'; ?>  
 
<div class="page_content_wrap">
<div class="content_wrap">
 
<div class="content">


<article class="post_item post_item_single page">
<section class="post_content">
<?php 
	$sid=308;
	$obj=new conclass();
	$res=$obj->getdata("select * from subcat_tbl where pk_s_id='$sid'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			$sname=$row["s_name"];
			$desc1=$row["s_desc1"];
			$desc2=$row["s_desc2"];
			$desc3=$row["s_desc3"];
		}
?>



<h3 class="widget_title" style="text-align:center"><?php echo $sname;?></h3>
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p>In this chapter, we will discuss the basic controls available in ASP.NET.</p>
<h4>Button Controls</h4>
<p>ASP.NET provides three types of button control:</p>
<ul class="list">
<li><p><b>Button</b> : It displays text within a rectangular area.</p></li>
<li><p><b>Link Button</b> : It displays text that looks like a hyperlink.</p></li>
<li><p><b>Image Button</b> : It displays an image.</p></li>
</ul>
<p>When a user clicks a button, two events are raised: Click and Command.</p>
<p>Basic syntax of button control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Button1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Button1_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Click"</span><span class="pln"> </span><span class="pun">/</span><span class="pln"> </span><span class="tag">&gt;</span></pre>
<p>Common properties of the button control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>Text</td>
<td>The text displayed on the button. This is for button and link button controls only.</td>
</tr>
<tr>
<td>ImageUrl</td>
<td>For image button control only. The image to be displayed for the button.</td>
</tr>
<tr>
<td>AlternateText</td>
<td>For image button control only. The text to be displayed if the browser cannot display the image.</td>
</tr>
<tr>
<td>CausesValidation</td>
<td>Determines whether page validation occurs when a user clicks the button. The default is true.</td>
</tr>
<tr>
<td>CommandName</td>
<td>A string value that is passed to the command event when a user clicks the button.</td>
</tr>
<tr>
<td>CommandArgument</td>
<td>A string value that is passed to the command event when a user clicks the button.</td>
</tr>
<tr>
<td>PostBackUrl</td>
<td>The URL of the page that is requested when the user clicks the button.</td>
</tr>
</tbody></table>
<h4>Text Boxes and Labels</h4>
<p>Text box controls are typically used to accept input from the user. A text box control can accept one or more lines of text depending upon the settings of the TextMode attribute.</p>
<p>Label controls provide an easy way to display text which can be changed from one execution of a page to the next. If you want to display text that does not change, you use the literal text.</p>
<p>Basic syntax of text control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtstate"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">&gt;&lt;/asp:TextBox&gt;</span></pre>
<p>Common Properties of the Text Box and Labels:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>TextMode</td>
<td>Specifies the type of text box. SingleLine creates a standard text box, MultiLIne creates a text box that accepts more than one line of text and the Password causes the characters that are entered to be masked. The default is SingleLine.</td>
</tr>
<tr>
<td>Text</td>
<td>The text content of the text box.</td>
</tr>
<tr>
<td>MaxLength</td>
<td>The maximum number of characters that can be entered into the text box.</td>
</tr>
<tr>
<td>Wrap</td>
<td>It determines whether or not text wraps automatically for multi-line text box; default is true.</td>
</tr>
<tr>
<td>ReadOnly</td>
<td>Determines whether the user can change the text in the box; default is false, i.e., the user can not change the text.</td>
</tr>
<tr>
<td>Columns</td>
<td>The width of the text box in characters. The actual width is determined based on the font that is used for the text entry.</td>
</tr>
<tr>
<td>Rows</td>
<td>The height of a multi-line text box in lines. The default value is 0, means a single line text box.</td>
</tr>
</tbody></table>
<p>The mostly used attribute for a label control is 'Text', which implies the text displayed on the label.</p>
<h4>Check Boxes and Radio Buttons</h4>
<p>A check box displays a single option that the user can either check or uncheck and radio buttons present a group of options from which the user can select just one option.</p>
<p>To create a group of radio buttons, you specify the same name for the GroupName attribute of each radio button in the group. If more than one group is required in a single form, then specify a different group name for each group.</p>
<p>If you want check box or radio button to be selected when the form is initially displayed, set its Checked attribute to true. If the Checked attribute is set to true for multiple radio buttons in a group, then only the last one is considered as true.</p>
<p>Basic syntax of check box:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:CheckBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"chkoption"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Server"</span><span class="tag">&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/asp:CheckBox&gt;</span></pre>
<p>Basic syntax of radio button:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:RadioButton</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"rdboption"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Server"</span><span class="tag">&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/asp</span><span class="pln">: </span><span class="atn">RadioButton</span><span class="tag">&gt;</span></pre>
<p>Common properties of check boxes and radio buttons:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>Text</td>
<td>The text displayed next to the check box or radio button.</td>
</tr>
<tr>
<td>Checked</td>
<td>Specifies whether it is selected or not, default is false.</td>
</tr>
<tr>
<td>GroupName</td>
<td>Name of the group the control belongs to.</td>
</tr>
</tbody></table>
<h4>List Controls</h4>
<p>ASP.NET provides the following controls</p>
<ul class="list">
<li>Drop-down list,</li>
<li>List box,</li>
<li>Radio button list,</li>
<li>Check box list,</li>
<li>Bulleted list.</li>
</ul>
<p>These control let a user choose from one or more items from the list. List boxes and drop-down lists contain one or more list items. These lists can be loaded either by code or by the ListItemCollection editor.</p>
<p>Basic syntax of list box control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:ListBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ListBox1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln">    </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">ListBox1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:ListBox&gt;</span></pre>
<p>Basic syntax of drop-down list control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"DropDownList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln">   </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">DropDownList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:DropDownList&gt;</span></pre>
<p>Common properties of list box and drop-down Lists:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>Items</td>
<td>The collection of ListItem objects that represents the items in the control. This property returns an object of type ListItemCollection.</td>
</tr>
<tr>
<td>Rows</td>
<td>Specifies the number of items displayed in the box. If actual list contains more rows than displayed then a scroll bar is added.</td>
</tr>
<tr>
<td>SelectedIndex</td>
<td>The index of the currently selected item. If more than one item is selected, then the index of the first selected item. If no item is selected, the value of this property is -1.</td>
</tr>
<tr>
<td>SelectedValue</td>
<td>The value of the currently selected item. If more than one item is selected, then the value of the first selected item. If no item is selected, the value of this property is an empty string ("").</td>
</tr>
<tr>
<td>SelectionMode</td>
<td>Indicates whether a list box allows single selections or multiple selections.</td>
</tr>
</tbody></table>
<p>Common properties of each list item objects:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>Text</td>
<td>The text displayed for the item.</td>
</tr>
<tr>
<td>Selected</td>
<td>Indicates whether the item is selected.</td>
</tr>
<tr>
<td>Value</td>
<td>A string value associated with the item.</td>
</tr>
</tbody></table>
<p>It is important to notes that:</p>
<ul class="list">
<li><p>To work with the items in a drop-down list or list box, you use the Items property of the control. This property returns a ListItemCollection object which contains all the items of the list.</p></li>
<li><p>The SelectedIndexChanged event is raised when the user selects a different item from a drop-down list or list box.</p></li>
</ul>
<h4>The ListItemCollection</h4>
<p>The ListItemCollection object is a collection of ListItem objects. Each ListItem object represents one item in the list. Items in a ListItemCollection are numbered from 0.</p>
<p>When the items into a list box are loaded using strings like:  lstcolor.Items.Add("Blue"), then both the Text and Value properties of the list item are set to the string value you specify. To set it differently you must create a list item object and then add that item to the collection.</p>
<p>The ListItemCollection Editor is used to add item to a drop-down list or list box. This is used to create a static list of items. To display the collection editor, select edit item from the smart tag menu, or select the control and then click the ellipsis button from the Item property in the properties window.</p>
<p>Common properties of ListItemCollection:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>Item(integer)</td>
<td>A  ListItem object that represents the item at the specified index.</td>
</tr>
<tr>
<td>Count</td>
<td>The number of items in the collection.</td>
</tr>
</tbody></table>
<p>Common methods of ListItemCollection:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Add(string)</td>
<td>Adds a new item at the end of the collection and assigns the string parameter to the Text property of the item.</td>
</tr>
<tr>
<td>Add(ListItem)</td>
<td>Adds a new item at the end of the collection.</td>
</tr>
<tr>
<td>Insert(integer, string)</td>
<td>Inserts an item at the specified index location in the collection, and assigns string parameter to the text property of the item.</td>
</tr>
<tr>
<td>Insert(integer, ListItem)</td>
<td>Inserts the item at the specified index location in the collection.</td>
</tr>
<tr>
<td>Remove(string)</td>
<td>Removes the item with the text value same as the string.</td>
</tr>
<tr>
<td>Remove(ListItem)</td>
<td>Removes the specified item.</td>
</tr>
<tr>
<td>RemoveAt(integer)</td>
<td>Removes the item at the specified index as the integer.</td>
</tr>
<tr>
<td>Clear</td>
<td>Removes all the items of the collection.</td>
</tr>
<tr>
<td>FindByValue(string)</td>
<td>Returns the item whose value is same as the string.</td>
</tr>
<tr>
<td>FindByValue(Text)</td>
<td>Returns the item whose text is same as the string.</td>
</tr>
</tbody></table>
<h4>Radio Button list and Check Box list</h4>
<p>A radio button list presents a list of mutually exclusive options.  A check box list presents a list of independent options. These controls contain a collection of ListItem objects that could be referred to through the Items property of the control.</p>
<p>Basic syntax of radio button list:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:RadioButtonList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"RadioButtonList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> 
   </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">RadioButtonList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:RadioButtonList&gt;</span></pre>
<p>Basic syntax of check box list:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:CheckBoxList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"CheckBoxList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> 
   </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">CheckBoxList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:CheckBoxList&gt;</span></pre>
<p>Common properties of check box and radio button lists:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>RepeatLayout</td>
<td>This attribute specifies whether the table tags or the normal html flow to use while formatting the list when it is rendered. The default is Table.</td>
</tr>
<tr>
<td>RepeatDirection</td>
<td>It specifies the direction in which the controls to be repeated. The values available are Horizontal and Vertical. Default is Vertical.</td>
</tr>
<tr>
<td>RepeatColumns</td>
<td>It specifies the number of columns to use when repeating the controls; default is 0.</td>
</tr>
</tbody></table>
<h4>Bulleted lists and Numbered lists</h4>
<p>The bulleted list control creates bulleted lists or numbered lists. These controls contain a collection of ListItem objects that could be referred to through the Items property of the control.</p>
<p>Basic syntax of a bulleted list:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:BulletedList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"BulletedList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:BulletedList&gt;</span></pre>
<p>Common properties of the bulleted list:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>BulletStyle</td>
<td>This property specifies the style and looks of the bullets, or numbers.</td>
</tr>
<tr>
<td>RepeatDirection</td>
<td>It specifies the direction in which the controls to be repeated. The values available are Horizontal and Vertical. Default is Vertical.</td>
</tr>
<tr>
<td>RepeatColumns</td>
<td>It specifies the number of columns to use when repeating the controls; default is 0.</td>
</tr>
</tbody></table>
<h4>HyperLink Control</h4>
<p>The HyperLink control is like the HTML &lt;a&gt; element.</p>

<p>Basic syntax for a hyperlink control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:HyperLink</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"HyperLink1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   HyperLink
</span><span class="tag">&lt;/asp:HyperLink&gt;</span><p>Basic syntax for a hyperlink control:</p></pre>
<p>It has the following important properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>ImageUrl</td>
<td>Path of the image to be displayed by the control.</td>
</tr>
<tr>
<td>NavigateUrl</td>
<td>Target link URL.</td>
</tr>
<tr>
<td>Text</td>
<td>The text to be displayed as the link.</td>
</tr>
<tr>
<td>Target</td>
<td>The window or frame which loads the linked page.</td>
</tr>
</tbody></table>
<h4>Image Control</h4>
<p>The image control is used for displaying images on the web page, or some alternative text, if the image is not available.</p>
<p>Basic syntax for an image control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Image</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Image1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span></pre>
<p>It has the following important properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>AlternateText</td>
<td>Alternate text to be displayed in absence of the image.</td>
</tr>
<tr>
<td>ImageAlign</td>
<td>Alignment options for the control.</td>
</tr>
<tr>
<td>ImageUrl</td>
<td>Path of the image to be displayed by the control.</td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="307_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="309_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
</div>
 
</div>
</div>
 
 

<?php include 'userfooter.php'; ?>  
 
 
</div>
</div>
 
<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/shortcodes/shortcodes.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/shortcodes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
</html>