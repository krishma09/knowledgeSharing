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
	$sid=18;
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




<p>HTML offers web authors three ways  for specifying lists of information. All lists must contain one or more list elements. Lists may contain:</p>
<ul class="list">
<li><b>&lt;ul&gt;</b> - An unordered list. This will list items using plain bullets.</li>
<li><b>&lt;ol&gt;</b> - An ordered list. This will use different schemes of numbers to list your items.</li>
<li><b>&lt;dl&gt;</b> - A definition list. This arranges your items in the same way as they are arranged in a dictionary.</li>
</ul>
<h4>HTML Unordered Lists</h4>
<p>An unordered list is a collection of related items that have no special order or sequence. This list is created by using HTML <b>&lt;ul&gt;</b> tag. Each item in the list is marked with a bullet.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Unordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;ul&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ul>
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ul>
</div>
<h4>The type Attribute</h4>
<p>You can use <b>type</b> attribute for &lt;ul&gt; tag to specify the type of bullet you like. By default it is a disc. Following are the possible options:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"square"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"disc"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"circle"</span><span class="tag">&gt;</span></pre>
<h5>Example</h5>
<p>Following is an example where we used &lt;ul type="square"&gt;</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Unordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"square"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ul type="square">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ul>
</div>
<h5>Example</h5>
<p>Following is an example where we used &lt;ul type="disc"&gt; :</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Unordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"disc"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ul type="disc">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ul>
</div>
<h5>Example</h5>
<p>Following is an example where we used &lt;ul type="circle"&gt; :</p>x
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Unordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"circle"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ul type="circle">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ul>
</div>
<h4>HTML Ordered Lists</h4>
<p>If you are required to put your items in a numbered list instead of bulleted then HTML ordered list will be used. This list is created by using <b>&lt;ol&gt;</b> tag. The numbering starts at one and is incremented by one for each successive ordered list element tagged with &lt;li&gt;.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Ordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;ol&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ol>
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ol>
</div>

<h4>The type Attribute</h4>
<p>You can use <b>type</b> attribute for &lt;ol&gt; tag to specify the type of numbering you like. By default it is a number. Following are the possible options:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln"> - Default-Case Numerals.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"I"</span><span class="tag">&gt;</span><span class="pln"> - Upper-Case Numerals.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"i"</span><span class="tag">&gt;</span><span class="pln"> - Lower-Case Numerals.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"a"</span><span class="tag">&gt;</span><span class="pln"> - Lower-Case Letters.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"A"</span><span class="tag">&gt;</span><span class="pln"> - Upper-Case Letters.</span></pre>
<h5>Example</h5>
<p>Following is an example where we used &lt;ol type="1"&gt;</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Ordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ol type="1">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ol>
</div>
<h5>Example</h5>
<p>Following is an example where we used &lt;ol type="I"&gt;</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Ordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"I"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ol type="I">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ol>
</div>
<h5>Example</h5>
<p>Following is an example where we used &lt;ol type="A"&gt;</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Ordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"A"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ol type="A">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ol>
</div>
<h4>The start Attribute</h4>

<p>You can use <b>start</b> attribute for &lt;ol&gt; tag to specify the starting point of numbering you need. Following are the possible options:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">    - Numerals starts with 4.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"I"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">    - Numerals starts with IV.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"i"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">    - Numerals starts with iv.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"a"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">    - Letters starts with d.
</span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"A"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">    - Letters starts with D.</span></pre>
<h5>Example</h5>
<p>Following is an example where we used &lt;ol type="i" start="4" &gt;</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Ordered List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;ol</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"i"</span><span class="pln"> </span><span class="atn">start</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<ol type="i" start="4">
<li>Beetroot</li>
<li>Ginger</li>
<li>Potato</li>
<li>Radish</li>
</ol>
</div>
<h4>HTML Definition Lists</h4>
<p>HTML and XHTML support a list style which is called <b>definition lists</b> where entries are listed like in a dictionary or encyclopedia. The definition list is the ideal way to present a glossary, list of terms, or other name/value list.</p>
<p>Definition List makes use of following three tags.</p>
<ul class="list">
<li>&lt;dl&gt; - Defines the start of the list</li>
<li>&lt;dt&gt; - A term</li>
<li>&lt;dd&gt; - Term definition</li>
<li>&lt;/dl&gt; - Defines the end of the list</li>
</ul>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Definition List</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;dl&gt;</span><span class="pln">
</span><span class="tag">&lt;dt&gt;&lt;b&gt;</span><span class="pln">HTML</span><span class="tag">&lt;/b&gt;&lt;/dt&gt;</span><span class="pln">
</span><span class="tag">&lt;dd&gt;</span><span class="pln">This stands for Hyper Text Markup Language</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;dt&gt;&lt;b&gt;</span><span class="pln">HTTP</span><span class="tag">&lt;/b&gt;&lt;/dt&gt;</span><span class="pln">
</span><span class="tag">&lt;dd&gt;</span><span class="pln">This stands for Hyper Text Transfer Protocol</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;/dl&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<dl>
<dt><b>HTML</b></dt>
<dd>This stands for Hyper Text Markup Language</dd>
<dt><b>HTTP</b></dt>
<dd>This stands for Hyper Text Transfer Protocol</dd>
</dl>
</div>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="17_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="19_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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