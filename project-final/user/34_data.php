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
	$sid=34;
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




<p>A webpage layout is very important to give better look to your website. It takes considerable time to design a website's layout with great look and feel.</p>
<p>Now a days, all modern websites are using CSS and Javascript based framework to come up with responsive and dynamic websites but you can  create a good layout using simple HTML tables or division tags in combination with other formatting tags. This chapter will give you few examples on how to create a simple but working layout for your webpage using pure HTML and its attributes.</p>
<h4>HTML Layout - Using Tables</h4>
<p>The simplest and most popular way of creating layouts is using HTML &lt;table&gt; tag. These tables are arranged in columns and rows, so you can utilize these rows and columns in whatever way you like.</p>
<h5>Example</h5>
<p>For example, the following HTML layout example is achieved using a table with 3 rows and 2 columns but the header and footer column spans both columns using the colspan attribute:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Layout using Tables</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;tr&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#b5dcb3"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is Web Page Main title</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
  </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
  </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">valign</span><span class="pun">=</span><span class="atv">"top"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#aaa"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"50"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;b&gt;</span><span class="pln">Main Menu</span><span class="tag">&lt;/b&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      HTML</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PHP</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PERL...
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#eee"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="tag">&gt;</span><span class="pln">
        Technical and Managerial Tutorials
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
  </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
  </span><span class="tag">&lt;tr&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#b5dcb3"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;center&gt;</span><span class="pln">
      Copyright © 2007 Tutorialspoint.com
      </span><span class="tag">&lt;/center&gt;</span><span class="pln">
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
  </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table width="100%" border="0">
  <tbody><tr>
    <td colspan="2" bgcolor="#b5dcb3">
      <h1>This is Web Page Main title</h1>
    </td>
  </tr>
  <tr valign="top">
    <td bgcolor="#aaa" width="50">
      <b>Main Menu</b><br>
      HTML<br>
      PHP<br>
      PERL...
    </td>
    <td bgcolor="#eee" width="100" height="200">
        Technical and Managerial Tutorials
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#b5dcb3">
        <center>
      Copyright © 2007 Tutorialspoint.com
        </center>
    </td>
  </tr>
</tbody></table>
</div>
<h4>Multiuple Columns Layout - Using Tables</h4>
<p>You can design your webpage to put your web content in multiple pages. You can keep your content in middle column and you can use left column to use menu and right column can be used to put advertisement or some other stuff. This layout will be very similar to what we have at our website tutorialspoint.com.</p>
<h5>Example</h5>
<p>Here is an example to create three column layout:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Three Column HTML Layout</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">valign</span><span class="pun">=</span><span class="atv">"top"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#aaa"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"20%"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;b&gt;</span><span class="pln">Main Menu</span><span class="tag">&lt;/b&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      HTML</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PHP</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PERL...
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#b5dcb3"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"60%"</span><span class="tag">&gt;</span><span class="pln">
        Technical and Managerial Tutorials
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
    </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#aaa"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"20%"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;b&gt;</span><span class="pln">Right Menu</span><span class="tag">&lt;/b&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      HTML</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PHP</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PERL...
    </span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;table&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<table width="100%" border="0">
  <tbody><tr valign="top">
    <td bgcolor="#aaa" width="20%">
      <b>Main Menu</b><br>
      HTML<br>
      PHP<br>
      PERL...
    </td>
    <td bgcolor="#b5dcb3" height="200" width="60%">
        Technical and Managerial Tutorials
    </td>
    <td bgcolor="#aaa" width="20%">
        <b>Right Menu</b><br>
      HTML<br>
      PHP<br>
      PERL...
    </td>
   </tr>
</tbody></table>
</div>
<h4>HTML Layouts - Using DIV, SPAN</h4>
<p>The &lt;div&gt; element is a block level element used for grouping HTML elements. While the &lt;div&gt; tag is a block-level element, the HTML &lt;span&gt; element is used for grouping elements at an inline level.</p>
<p>Although we can achieve pretty nice layouts with HTML tables, but tables weren't really designed as a layout tool. Tables are more suited to presenting tabular data.</p>
<blockquote><b>Note: </b>This example makes use of Cascading Style Sheet (CSS), so before understanding this example you need to have a better understanding on how CSS works.</blockquote>
<h5>Example</h5>
<p>Here we will try to achieve same result using &lt;div&gt; tag along with CSS,  whatever you have achieved using &lt;table&gt; tag in previous example.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Layouts using DIV, SPAN</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">100</span><span class="pun">%</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">b5dcb3</span><span class="pun">;</span><span class="pln"> width</span><span class="pun">:</span><span class="lit">100</span><span class="pun">%</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is Web Page Main title</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">aaa</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="lit">200px</span><span class="pun">;</span><span class="pln">width</span><span class="pun">:</span><span class="lit">100px</span><span class="pun">;</span><span class="kwd">float</span><span class="pun">:</span><span class="pln">left</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;&lt;b&gt;</span><span class="pln">Main Menu</span><span class="tag">&lt;/b&gt;&lt;/div&gt;</span><span class="pln">
      HTML</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PHP</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PERL...
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">eee</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="lit">200px</span><span class="pun">;</span><span class="pln">width</span><span class="pun">:</span><span class="lit">350px</span><span class="pun">;</span><span class="kwd">float</span><span class="pun">:</span><span class="pln">left</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;p&gt;</span><span class="pln">Technical and Managerial Tutorials</span><span class="tag">&lt;/p&gt;</span><span class="pln">
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">aaa</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="lit">200px</span><span class="pun">;</span><span class="pln">width</span><span class="pun">:</span><span class="lit">100px</span><span class="pun">;</span><span class="kwd">float</span><span class="pun">:</span><span class="pln">right</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;&lt;b&gt;</span><span class="pln">Right Menu</span><span class="tag">&lt;/b&gt;&lt;/div&gt;</span><span class="pln">
      HTML</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PHP</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      PERL...
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">b5dcb3</span><span class="pun">;</span><span class="pln">clear</span><span class="pun">:</span><span class="pln">both</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;center&gt;</span><span class="pln">
      Copyright © 2007 Tutorialspoint.com
  </span><span class="tag">&lt;/center&gt;</span><span class="pln">
  </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<div style="width:100%">
  <div style="background-color:#b5dcb3; width:100%">
      <h1>This is Web Page Main title</h1>
  </div>
  <div style="background-color:#aaa; height:200px;width:100px;float:left;">
      <div><b>Main Menu</b></div>
      HTML<br>
      PHP<br>
      PERL...
  </div>
  <div style="background-color:#eeeeee; height:200px;width:350px;float:left;">
	<p>Technical and Managerial Tutorials</p>
  </div>
    <div style="background-color:#aaa; height:200px;width:100px;float:right;">
      <div><b>Right Menu</b></div>
      HTML<br>
      PHP<br>
      PERL...
  </div>
  <div style="background-color:#b5dcb3;clear:both">
  <center>
      Copyright © 2007 Tutorialspoint.com
  </center>
  </div>
</div>
</div><br>
<p>You can create better layout using DIV, SPAN along with CSS. For more information on CSS, please refer to CSS Tutorial.</p>







</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="33_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

 
 
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