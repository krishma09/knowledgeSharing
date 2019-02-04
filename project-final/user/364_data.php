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
<title>UNIX Tutorials | knowledge.com</title>
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
	$sid=364;
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
<p>In this chapter, we will discuss in detail about the Shell quoting mechanisms. We will start by discussing the metacharacters.</p>
<h4>The Metacharacters</h4>
<p>Unix Shell provides various metacharacters which have special meaning while using them in any Shell Script and causes termination of a word unless quoted.</p>
<p>For example, <b>?</b> matches with a single character while listing files in a directory and an <b>*</b> matches more than one character. Here is a list of most of the shell special characters (also called metacharacters) −</p>

<pre class="result notranslate">* ? [ ] ' " \ $ ; &amp; ( ) | ^ &lt; &gt; new-line space tab
</pre>
<p>A character may be quoted (i.e., made to stand for itself) by preceding it with a <b>\</b>.</p>
<h5>Example</h5>
<p>Following example shows how to print a <b>*</b> or a <b>?</b> −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

echo </span><span class="typ">Hello</span><span class="pun">;</span><span class="pln"> </span><span class="typ">Word</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Hello
./test.sh: line 2: Word: command not found

shell returned 127
</pre>
<p>Let us now try using a quoted character −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

echo </span><span class="typ">Hello</span><span class="pln">\; </span><span class="typ">Word</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Hello; Word
</pre>
<p>The <b>$</b> sign is one of the metacharacters, so it must be quoted to avoid special handling by the shell −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

echo </span><span class="str">"I have \$1200"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">I have $1200
</pre>
<p>The following table lists the four forms of quoting −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Quoting &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>Single quote</b></p>
<p>All special characters between these quotes lose their special meaning.</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>Double quote</b></p>
<p>Most special characters between these quotes lose their special meaning with these exceptions −</p>
<ul class="list">
<li>$</li>
<li>`</li>
<li>\$</li>
<li>\'</li>
<li>\"</li>
<li>\\</li>
</ul>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>Backslash</b></p>
<p>Any character immediately following the backslash loses its special meaning.</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>Back quote</b></p>
<p>Anything in between back quotes would be treated as a command and would be executed.</p>
</td>
</tr>
</tbody></table>
<h4>The Single Quotes</h4>
<p>Consider an echo command that contains many special shell characters −</p>
<pre class="result notranslate">echo &lt;-$1500.**&gt;; (update?) [y|n]
</pre>
<p>Putting a backslash in front of each special character is tedious and makes the line difficult to read −</p>
<pre class="result notranslate">echo \&lt;-\$1500.\*\*\&gt;\; \(update\?\) \[y\|n\]
</pre>
<p>There is an easy way to quote a large group of characters. Put a single quote (') at the beginning and at the end of the string −</p>
<pre class="result notranslate">echo '&lt;-$1500.**&gt;; (update?) [y|n]'
</pre>
<p>Characters within single quotes are quoted just as if a backslash is in front of each character. With this, the echo command displays in a proper way.</p>
<p>If a single quote appears within a string to be output, you should not put the whole string within single quotes instead you should precede that using a backslash (\) as follows −</p>
<pre class="result notranslate">echo 'It\'s Shell Programming'
</pre>
<h4>The Double Quotes</h4>
<p>Try to execute the following shell script. This shell script makes use of single quote −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pln">VAR</span><span class="pun">=</span><span class="pln">ZARA
echo </span><span class="str">'$VAR owes &lt;-$1500.**&gt;; [ as of (`date +%m/%d`) ]'</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">$VAR owes &lt;-$1500.**&gt;; [ as of (`date +%m/%d`) ]
</pre>
<p>This is not what had to be displayed. It is obvious that single quotes prevent variable substitution. If you want to substitute variable values and to make inverted commas work as expected, then you would need to put your commands in double quotes as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pln">VAR</span><span class="pun">=</span><span class="pln">ZARA
echo </span><span class="str">"$VAR owes &lt;-\$1500.**&gt;; [ as of (`date +%m/%d`) ]"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">ZARA owes &lt;-$1500.**&gt;; [ as of (07/02) ]
</pre>
<p>Double quotes take away the special meaning of all characters except the following −</p>
<ul class="list">
<li><p><b>$</b> for parameter substitution</p></li>
<li><p>Backquotes for command substitution</p></li>
<li><p><b>\$</b> to enable literal dollar signs</p></li>
<li><p><b>\`</b> to enable literal backquotes</p></li>
<li><p><b>\"</b> to enable embedded double quotes</p></li>
<li><p><b>\\</b> to enable embedded backslashes</p></li>
<li><p>All other <b>\</b> characters are literal (not special)</p></li>
</ul>
<p>Characters within single quotes are quoted just as if a backslash is in front of each character. This helps the echo command display properly.</p>
<p>If a single quote appears within a string to be output, you should not put the whole string within single quotes instead you should precede that using a backslash (\) as follows −</p>
<pre class="result notranslate">echo 'It\'s Shell Programming'
</pre>
<h4>The Backquotes</h4>
<p>Putting any Shell command in between <b>backquotes</b> executes the command.</p>
<h5>Syntax</h5>
<p>Here is the simple syntax to put any Shell <b>command</b> in between backquotes −</p>
<h5>Syntax</h5>
<pre class="result notranslate">var = `command`
</pre>
<h5>Example</h5>
<p>The <b>date</b> command is executed in the following example and the produced result is stored in DATA variable.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pln">DATE</span><span class="pun">=</span><span class="str">`date`</span><span class="pln">

echo </span><span class="str">"Current Date: $DATE"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Current Date: Thu Jul  2 05:28:45 MST 2009
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="363_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="365_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'unix_header.php'; ?></aside>
 
  
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