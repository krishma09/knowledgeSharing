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
<title>BOOTSTRAP Tutorials | knowledge.com</title>
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
	$sid=140;
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




<p>Bootstrap uses Helvetica Neue, Helvetica, Arial, and sans-serif in its default font stack. Using typography feature of Bootstrap you can create headings, paragraphs, lists and other inline elements. Let see learn each one of these in the following sections.</p> 
<h4>Headings</h4>
<p>All HTML headings (h1 to h6) are styled in Bootstrap. An example is shown below −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;h1&gt;</span><span class="pln">I'm Heading1 h1</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
</span><span class="tag">&lt;h4&gt;</span><span class="pln">I'm Heading2 h4</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;h5&gt;</span><span class="pln">I'm Heading3 h5</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
</span><span class="tag">&lt;h4&gt;</span><span class="pln">I'm Heading4 h4</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;h5&gt;</span><span class="pln">I'm Heading5 h5</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
</span><span class="tag">&lt;h6&gt;</span><span class="pln">I'm Heading6 h6</span><span class="tag">&lt;/h6&gt;</span></pre>
<h5>Inline Subheadings</h5>
<p>To add an inline subheading to any of the headings, simply add &lt;small&gt; around any of the elements or add <b>.small</b> class and you will get smaller text in a lighter color as shown in the example below −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;h1&gt;</span><span class="pln">I'm Heading1 h1. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading1 h1</span><span class="tag">&lt;/small&gt;&lt;/h1&gt;</span><span class="pln"> 
</span><span class="tag">&lt;h4&gt;</span><span class="pln">I'm Heading2 h4. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading2 h4</span><span class="tag">&lt;/small&gt;&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;h3&gt;</span><span class="pln">I'm Heading3 h3. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading3 h3</span><span class="tag">&lt;/small&gt;&lt;/h3&gt;</span><span class="pln">
</span><span class="tag">&lt;h4&gt;</span><span class="pln">I'm Heading4 h4. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading4 h4</span><span class="tag">&lt;/small&gt;&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;h5&gt;</span><span class="pln">I'm Heading5 h5. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading5 h5</span><span class="tag">&lt;/small&gt;&lt;/h5&gt;</span><span class="pln">
</span><span class="tag">&lt;h6&gt;</span><span class="pln">I'm Heading6 h6. </span><span class="tag">&lt;small&gt;</span><span class="pln">I'm secondary Heading1 h6</span><span class="tag">&lt;/small&gt;&lt;/h6&gt;</span></pre>
<h4>Lead Body Copy</h4>
<p>To add some emphasis to a paragraph, add class = "lead". This will give you a larger font size, lighter weight, and a taller line height as in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;h4&gt;</span><span class="pln">Lead Example</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"lead"</span><span class="tag">&gt;</span><span class="pln">This is an example paragraph demonstrating 
   the use of lead body copy. This is an example paragraph 
   demonstrating the use of lead body copy.This is an example 
   paragraph demonstrating the use of lead body copy.This is an 
   example paragraph demonstrating the use of lead body copy.
   This is an example paragraph demonstrating the use of lead body copy.</span><span class="tag">&lt;/p&gt;</span></pre>
   <h4>Emphasis</h4>
   <p>HTML's default emphasis tags such as &lt;small&gt; sets text at 85% the size of the parent, &lt;strong&gt; emphasizes a text with heavier font-weight, and &lt;em&gt; emphasizes a text in italics.</p>
   <p>Bootstrap offers a few classes that can be used to provide emphasis on texts as seen in the following example −</p>
   <pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;small&gt;</span><span class="pln">This content is within tag</span><span class="tag">&lt;/small&gt;&lt;br&gt;</span><span class="pln">
</span><span class="tag">&lt;strong&gt;</span><span class="pln">This content is within tag</span><span class="tag">&lt;/strong&gt;&lt;br&gt;</span><span class="pln">
</span><span class="tag">&lt;em&gt;</span><span class="pln">This content is within tag and is rendered as italics</span><span class="tag">&lt;/em&gt;&lt;br&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-left"</span><span class="tag">&gt;</span><span class="pln">Left aligned text.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-center"</span><span class="tag">&gt;</span><span class="pln">Center aligned text.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-right"</span><span class="tag">&gt;</span><span class="pln">Right aligned text.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-muted"</span><span class="tag">&gt;</span><span class="pln">This content is muted</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-primary"</span><span class="tag">&gt;</span><span class="pln">This content carries a primary class</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-success"</span><span class="tag">&gt;</span><span class="pln">This content carries a success class</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-info"</span><span class="tag">&gt;</span><span class="pln">This content carries a info class</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-warning"</span><span class="tag">&gt;</span><span class="pln">This content carries a warning class</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text-danger"</span><span class="tag">&gt;</span><span class="pln">This content carries a danger class</span><span class="tag">&lt;/p&gt;</span></pre>
<h4>Abbreviations</h4>
<p>The HTML &lt;abbr&gt; element provides markup for abbreviations or acronyms, like WWW or HTTP. Bootstrap styles &lt;abbr&gt; elements with a light dotted border along the bottom and reveals the full text on hover (as long as you add that text to the &lt;abbr&gt; title attribute). To get a a slightly smaller font size add .initialism to &lt;abbr&gt;.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"World Wide Web"</span><span class="tag">&gt;</span><span class="pln">WWW</span><span class="tag">&lt;/abbr&gt;&lt;br&gt;</span><span class="pln">
</span><span class="tag">&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Real Simple Syndication"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"initialism"</span><span class="tag">&gt;</span><span class="pln">RSS</span><span class="tag">&lt;/abbr&gt;</span></pre>
<h4>Addresses</h4>
<p>Using &lt;address&gt; tag you can display the contact information on your web page. Since the &lt;address&gt; defaults to display: block; you’ll need to use</p>
<p>Tags to add line breaks to the enclosed address text.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;address&gt;</span><span class="pln">
   </span><span class="tag">&lt;strong&gt;</span><span class="pln">Some Company, Inc.</span><span class="tag">&lt;/strong&gt;&lt;br&gt;</span><span class="pln">
   007 street</span><span class="tag">&lt;br&gt;</span><span class="pln">
   Some City, State XXXXX</span><span class="tag">&lt;br&gt;</span><span class="pln">
   </span><span class="tag">&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Phone"</span><span class="tag">&gt;</span><span class="pln">P:</span><span class="tag">&lt;/abbr&gt;</span><span class="pln"> (123) 456-7890
</span><span class="tag">&lt;/address&gt;</span><span class="pln">

</span><span class="tag">&lt;address&gt;</span><span class="pln">
   </span><span class="tag">&lt;strong&gt;</span><span class="pln">Full Name</span><span class="tag">&lt;/strong&gt;&lt;br&gt;</span><span class="pln">
   </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mailto:#"</span><span class="tag">&gt;</span><span class="pln">mailto@somedomain.com</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/address&gt;</span></pre>
<h4>Blockquotes</h4>
<p>You can use the default &lt;blockquote&gt; around any HTML text. Other options include, adding a &lt;small&gt; tag for identifying the source of the quote and  right-aligning the blockquote using class <i>.pull-right</i>. The following example demonstrates all these features −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;blockquote&gt;</span><span class="pln">
   </span><span class="tag">&lt;p&gt;</span><span class="pln">This is a default blockquote example. This is a default 
      blockquote example. This is a default blockquote 
      example.This is a default blockquote example. This is a 
      default blockquote example.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/blockquote&gt;</span><span class="pln">

</span><span class="tag">&lt;blockquote&gt;</span><span class="pln">
   This is a blockquote with a source title.
   </span><span class="tag">&lt;small&gt;</span><span class="pln">Someone famous in </span><span class="tag">&lt;cite</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Source Title"</span><span class="tag">&gt;</span><span class="pln">Source Title</span><span class="tag">&lt;/cite&gt;&lt;/small&gt;</span><span class="pln">
</span><span class="tag">&lt;/blockquote&gt;</span><span class="pln">

</span><span class="tag">&lt;blockquote</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"pull-right"</span><span class="tag">&gt;</span><span class="pln">This is a blockquote aligned to the right.
   </span><span class="tag">&lt;small&gt;</span><span class="pln">Someone famous in </span><span class="tag">&lt;cite</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Source Title"</span><span class="tag">&gt;</span><span class="pln">Source Title</span><span class="tag">&lt;/cite&gt;&lt;/small&gt;</span><span class="pln">
</span><span class="tag">&lt;/blockquote&gt;</span></pre>
<h4>Lists</h4>
<p>Bootstrap supports ordered lists, unordered lists, and definition lists.</p>
<ul class="list">
<li><p><b>Ordered lists</b> − An ordered list is a list that falls in some sort of sequential order and is prefaced by numbers.</p></li>
<li><p><b>Unordered lists</b> − An unordered list is a list that doesn’t have any particular order and is traditionally styled with bullets. If you do not want the bullets to appear, then you can remove the styling by using the class <i>.list-unstyled</i>. You can also place all list items on a single line using the class <i>.list-inline</i>.</p></li>
<li><p><b>Definition lists</b> − In this type of list, each list item can consist of both the &lt;dt&gt; and the &lt;dd&gt; elements. &lt;dt&gt; stands for <i>definition term</i>, and like a dictionary, this is the term (or phrase) that is being defined. Subsequently, the &lt;dd&gt; is the definition of the &lt;dt&gt;. You can make terms and descriptions in &lt;dl&gt; line up side-by-side using class <i>dl-horizontal</i>.</p></li>
</ul>
<p>The following example demonstrates each of these types −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;h4&gt;</span><span class="pln">Example of Ordered List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;ol&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ol&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of UnOrdered List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">

</span><span class="tag">&lt;ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ul&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of Unstyled List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">

</span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-unstyled"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ul&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of Inline List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">

</span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-inline"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ul&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of Definition List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">

</span><span class="tag">&lt;dl&gt;</span><span class="pln">
   </span><span class="tag">&lt;dt&gt;</span><span class="pln">Description 1</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
   </span><span class="tag">&lt;dd&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
   </span><span class="tag">&lt;dt&gt;</span><span class="pln">Description 2</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
   </span><span class="tag">&lt;dd&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;/dl&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of Horizontal Definition List</span><span class="tag">&lt;/h4&gt;</span><span class="pln">

</span><span class="tag">&lt;dl</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dl-horizontal"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;dt&gt;</span><span class="pln">Description 1</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
   </span><span class="tag">&lt;dd&gt;</span><span class="pln">Item 1</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
   </span><span class="tag">&lt;dt&gt;</span><span class="pln">Description 2</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
   </span><span class="tag">&lt;dd&gt;</span><span class="pln">Item 2</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;/dl&gt;</span></pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="139_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="141_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'bootstrap_header.php'; ?>
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