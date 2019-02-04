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
<title>HTML Tutorials | knowledge.com</title>
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
	$sid=17;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">




<p>The HTML tables allow web authors to arrange data like text, images, links, other tables, etc. into rows and columns of cells.</p>
<p>The HTML tables are created using the <b>&lt;table&gt;</b> tag in which the <b>&lt;tr&gt;</b> tag is used to create table rows and <b>&lt;td&gt;</b> tag is used to create data cells.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Tables</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>

<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" style="border-collapse: separate; border-spacing: 1px;">
<tbody><tr>
<td>Row 1, Column 1</td>
<td>Row 1, Column 2</td>
</tr>
<tr>
<td>Row 2, Column 1</td>
<td>Row 2, Column 2</td>
</tr>
</tbody></table>
</div>
<p>Here <b>border</b> is an attribute of &lt;table&gt; tag and it is used to put a border across all the cells. If you do not need a border then you can use border="0".</p>
<h4>Table Heading</h4>
<p>Table heading can be defined using <b>&lt;th&gt;</b> tag. This tag will be put to replace &lt;td&gt; tag, which is used to represent actual data cell. Normally you will put your top row as table heading as shown below, otherwise you can use &lt;th&gt; element in any row.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Header</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Salary</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Ramesh Raman</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">5000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Shabbir Hussein</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">7000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" style="border-collapse: separate; border-spacing: 1px;">
<tbody><tr>
<th style="background:#fff;">Name</th>
<th style="background:#fff;">Salary</th>
</tr>
<tr>
<td>Ramesh Raman</td>
<td>5000</td>
</tr>
<tr>
<td>Shabbir Hussein</td>
<td>7000</td>
</tr>
</tbody></table>
</div>
<h4>Cellpadding and Cellspacing Attributes</h4>
<p>There are two attribiutes called  <i>cellpadding</i> and <i>cellspacing</i> which you will use to adjust the white space in your table cells. The cellspacing attribute defines the width of the border, while cellpadding represents the distance between cell borders and the content within a cell.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Cellpadding</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">cellpadding</span><span class="pun">=</span><span class="atv">"5"</span><span class="pln"> </span><span class="atn">cellspacing</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Salary</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Ramesh Raman</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">5000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Shabbir Hussein</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">7000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" style="padding:5px !important;  border-spacing: 1px;  border-collapse: separate;">
<tbody><tr>
<th style="padding:5px;background:#fff;">Name</th>
<th style="padding:5px;background:#fff;">Salary</th>
</tr>
<tr>
<td style="padding:5px;">Ramesh Raman</td>
<td style="padding:5px;">5000</td>
</tr>
<tr>
<td style="padding:5px;">Shabbir Hussein</td>
<td style="padding:5px;">7000</td>
</tr>
</tbody></table>
</div>
<h4>Colspan and Rowspan Attributes</h4>
<p>You will use <b>colspan</b> attribute if you want to merge two or more columns into a single column. Similar way you will use <b>rowspan</b> if you want to merge two or more rows.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Colspan/Rowspan</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 1</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 2</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 3</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">rowspan</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span><span class="pln">Row 1 Cell 1</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">Row 3 Cell 1</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>	
<div class="result notranslate">
<table border="1" style="border-collapse: separate;border-spacing: 1px;">
<tbody><tr>
<th style="background:#fff;">Column 1</th>
<th style="background:#fff;">Column 2</th>
<th style="background:#fff;">Column 3</th>
</tr>
<tr><td rowspan="2">Row 1 Cell 1</td>
<td>Row 1 Cell 2</td><td>Row 1 Cell 3</td></tr>
<tr><td>Row 2 Cell 2</td><td>Row 2 Cell 3</td></tr>
<tr><td colspan="3">Row 3 Cell 1</td></tr>
</tbody></table>
</div>
<h4>Tables Backgrounds</h4>
<p>You can set table background using one of the following two ways:</p>
<ul class="list">
<li><p><b>bgcolor</b> attribute - You can set background color for whole table or just for one cell.</p></li>
<li><p><b>background</b> attribute - You can set background image for whole table or just for one cell.</p></li>
</ul>
<p>You can also set border color also using <b>bordercolor</b> attribute.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: pointer;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Background</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">bordercolor</span><span class="pun">=</span><span class="atv">"green"</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"yellow"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 1</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 2</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 3</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">rowspan</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span><span class="pln">Row 1 Cell 1</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">Row 3 Cell 1</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" bordercolor="green" style="background:yellow !important; border-collapse: separate;border-spacing: 1px;">
<tbody><tr>
<th style="background:yellow !important">Column 1</th>
<th style="background:yellow !important">Column 2</th>
<th style="background:yellow !important">Column 3</th>
</tr>
<tr><td rowspan="2">Row 1 Cell 1</td>
<td>Row 1 Cell 2</td><td>Row 1 Cell 3</td></tr>
<tr><td>Row 2 Cell 2</td><td>Row 2 Cell 3</td></tr>
<tr><td colspan="3">Row 3 Cell 1</td></tr>
</tbody></table>
</div>
<p>Here is an example of using <b>background</b> attribute. Here we will use an image available in /images directory.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Background</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">bordercolor</span><span class="pun">=</span><span class="atv">"green"</span><span class="pln"> </span><span class="atn">background</span><span class="pun">=</span><span class="atv">"/images/test.png"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 1</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 2</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;th&gt;</span><span class="pln">Column 3</span><span class="tag">&lt;/th&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">rowspan</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span><span class="pln">Row 1 Cell 1</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 1 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 2</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">Row 2 Cell 3</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">Row 3 Cell 1</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result. Here background image did not apply to table's header.</p>
<div class="result notranslate">
<table border="1" bordercolor="green" background="/images/test.png" style="border-collapse: separate;border-spacing: 1px;">
<tbody><tr>
<th style="background:#fff;">Column 1</th>
<th style="background:#fff;">Column 2</th>
<th style="background:#fff;">Column 3</th>
</tr>
<tr><td rowspan="2">Row 1 Cell 1</td>
<td>Row 1 Cell 2</td><td>Row 1 Cell 3</td></tr>
<tr><td>Row 2 Cell 2</td><td>Row 2 Cell 3</td></tr>
<tr><td colspan="3">Row 3 Cell 1</td></tr>
</tbody></table>
</div>
<h4>Table Height and Width</h4>
<p>You can set a table width and height using <b>width</b> and <b>height</b> attrubutes. You can specify table width or height in terms of pixels or in terms of percentage of available screen area.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Width/Height</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"400"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"150"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 1, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Row 2, Column 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" width="400" height="150" style="border-collapse: separate;border-spacing: 1px;">
<tbody><tr>
<td>Row 1, Column 1</td>
<td>Row 1, Column 2</td>
</tr>
<tr>
<td>Row 2, Column 1</td>
<td>Row 2, Column 2</td>
</tr>
</tbody></table>
</div>
<h4>Table Caption</h4>
<p>The <b>caption</b> tag will serve as a title or explanation for the table and it shows up at the top of the table. This tag is deprecated in newer version of HTML/XHTML.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table Caption</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;caption&gt;</span><span class="pln">This is the caption</span><span class="tag">&lt;/caption&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">row 1, column 1</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">row 1, columnn 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">row 2, column 1</span><span class="tag">&lt;/td&gt;&lt;td&gt;</span><span class="pln">row 2, columnn 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" style="border-collapse: separate;border-spacing: 1px;" width="100%">
<caption>This is the caption</caption>
<tbody><tr>
<td>row 1, column 1</td><td>row 1, columnn 2</td>
</tr>
<tr>
<td>row 2, column 1</td><td>row 2, columnn 2</td>
</tr>
</tbody></table>
</div>
<h4>Table Header, Body, and Footer</h4>
<p>Tables can be divided into three portions: a header, a body, and a foot. The head and foot are rather similar to headers and footers in a word-processed document that remain the same for every page, while the body is the main content holder of the table.</p>
<p>The three elements for separating the head, body, and foot of a table are:</p>
<ul class="list">
<li><b>&lt;thead&gt; - </b>to create a separate table header.</li>
<li><b>&lt;tbody&gt; - </b>to indicate the main body of the table.</li>
<li><b>&lt;tfoot&gt; - </b>to create a separate table footer.</li>
</ul>
<p>A table may contain several &lt;tbody&gt; elements to indicate different <i>pages</i> or groups of data. But it is notable that &lt;thead&gt; and &lt;tfoot&gt; tags should appear before &lt;tbody&gt;</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;thead&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">This is the head of the table</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/thead&gt;</span><span class="pln">
</span><span class="tag">&lt;tfoot&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">This is the foot of the table</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/tfoot&gt;</span><span class="pln">
</span><span class="tag">&lt;tbody&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 1</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 2</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 3</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">Cell 4</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/tbody&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" width="100%" style="border-collapse: separate;border-spacing: 1px;">
<thead>
<tr>
<td colspan="4">This is the head of the table</td>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="4">This is the foot of the table</td>
</tr>
</tfoot>
<tbody>
<tr>
<td>Cell 1</td>
<td>Cell 2</td>
<td>Cell 3</td>
<td>Cell 4</td>
</tr>
</tbody>
</table>
</div>
<h4>Nested Tables</h4>
<p>You can use one table inside another table. Not only tables you can use almost all the tags inside table data tag &lt;td&gt;.</p>
<h4>Example</h4>
<p>Following is the example of using another table and other tags inside a table cell.</p>

<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Table</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;</span><span class="pln">
</span><span class="tag">&lt;td&gt;</span><span class="pln">
   </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
   </span><span class="tag">&lt;th&gt;</span><span class="pln">Salary</span><span class="tag">&lt;/th&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;td&gt;</span><span class="pln">Ramesh Raman</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;td&gt;</span><span class="pln">5000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;td&gt;</span><span class="pln">Shabbir Hussein</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;td&gt;</span><span class="pln">7000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/td&gt;</span><span class="pln">
</span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table border="1" style="border-collapse: separate;border-spacing: 1px; width:100%">
<tbody><tr>
   <td>
      <table border="1" style="border-collapse: separate;border-spacing: 1px;width:100%">
      <tbody><tr>
         <th style="background:#fff;">Name</th>
         <th style="background:#fff;">Salary</th>
      </tr>
      <tr>
         <td>Ramesh Raman</td>
         <td>5000</td>
      </tr>
      <tr>
         <td>Shabbir Hussein</td>
         <td>7000</td>
      </tr>
      </tbody></table>
   </td>
</tr>
</tbody></table>
</div>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="16_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="18_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'html_header.php'; ?>
</aside>
 
  
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