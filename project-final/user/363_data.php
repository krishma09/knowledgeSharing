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
	$sid=363;
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


<h4>What is Substitution?</h4>
<p>The shell performs substitution when it encounters an expression that contains one or more special characters.</p>
<h5>Example</h5>
<p>Here, the printing value of the variable is substituted by its value. Same time, <b>"\n"</b> is substituted by a new line −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="com">#!/bin/sh</span><span class="pln">

a</span><span class="pun">=</span><span class="lit">10</span><span class="pln">
echo </span><span class="pun">-</span><span class="pln">e </span><span class="str">"Value of a is $a \n"</span></pre>
<p>You will receive the following result. Here the <b>-e</b> option enables the interpretation of backslash escapes.</p>
<pre class="result notranslate">Value of a is 10
</pre>
<p>Following is the result without <b>-e</b> option −</p>
<pre class="result notranslate">Value of a is 10\n
</pre>
<p>Here are following escape sequences which can be used in echo command −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;width:7%">S.No.</th>
<th style="text-align:center;">Escape &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>\\</b></p>
<p>backslash</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>\a</b></p>
<p>alert (BEL)</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>\b</b></p>
<p>backspace</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>\c </b></p>
<p>suppress trailing newline</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>\f </b></p>
<p>form feed</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>\n</b></p>
<p>new line</p>
</td>
</tr>
<tr>
<td class="ts">7</td>
<td>
<p><b>\r</b></p>
<p>carriage return</p>
</td>
</tr>
<tr>
<td class="ts">8</td>
<td>
<p><b>\t </b></p>
<p>horizontal tab</p>
</td>
</tr>
<tr>
<td class="ts">9</td>
<td>
<p><b>\v </b></p>
<p>vertical tab</p>
</td>
</tr>
</tbody></table>
<p>You can use the <b>-E</b> option to disable the interpretation of the backslash escapes (default).</p>
<p>You can use the <b>-n</b> option to disable the insertion of a new line.</p>
<h4>Command Substitution</h4>
<p>Command substitution is the mechanism by which the shell performs a given set of commands and then substitutes their output in the place of the commands.</p>
<h5>Syntax</h5>
<p>The command substitution is performed when a command is given as −</p>
<pre class="result notranslate">`command`
</pre>
<p>When performing the command substitution make sure that you use the backquote, not the single quote character.</p>
<h5>Example</h5>
<p>Command substitution is generally used to assign the output of a command to a variable. Each of the following examples demonstrates the command substitution −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

DATE</span><span class="pun">=</span><span class="str">`date`</span><span class="pln">
echo </span><span class="str">"Date is $DATE"</span><span class="pln">

USERS</span><span class="pun">=</span><span class="str">`who | wc -l`</span><span class="pln">
echo </span><span class="str">"Logged in user are $USERS"</span><span class="pln">

UP</span><span class="pun">=</span><span class="str">`date ; uptime`</span><span class="pln">
echo </span><span class="str">"Uptime is $UP"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Date is Thu Jul  2 03:59:57 MST 2009
Logged in user are 1
Uptime is Thu Jul  2 03:59:57 MST 2009
03:59:57 up 20 days, 14:03,  1 user,  load avg: 0.13, 0.07, 0.15
</pre>
<h4>Variable Substitution</h4>
<p>Variable substitution enables the shell programmer to manipulate the value of a variable based on its state.</p>
<p>Here is the following table for all the possible substitutions −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Form &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>${var}</b></p>
<p>Substitute the value of <i>var</i>.</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>${var:-word}</b></p>
<p>If <i>var</i> is null or unset, <i>word</i> is substituted for <b>var</b>. The value of <i>var</i> does not change.</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>${var:=word}</b></p>
<p>If <i>var</i> is null or unset, <i>var</i> is set to the value of <b>word</b>.</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>${var:?message}</b></p>
<p>If <i>var</i> is null or unset, <i>message</i> is printed to standard error. This checks that variables are set correctly.</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>${var:+word}</b></p>
<p>If <i>var</i> is set, <i>word</i> is substituted for var. The value of <i>var</i> does not change.</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Following is the example to show various states of the above substitution −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

echo $</span><span class="pun">{</span><span class="kwd">var</span><span class="pun">:-</span><span class="str">"Variable is not set"</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"1 - Value of var is ${var}"</span><span class="pln">

echo $</span><span class="pun">{</span><span class="kwd">var</span><span class="pun">:=</span><span class="str">"Variable is not set"</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"2 - Value of var is ${var}"</span><span class="pln">

unset </span><span class="kwd">var</span><span class="pln">
echo $</span><span class="pun">{</span><span class="kwd">var</span><span class="pun">:+</span><span class="str">"This is default value"</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"3 - Value of var is $var"</span><span class="pln">

</span><span class="kwd">var</span><span class="pun">=</span><span class="str">"Prefix"</span><span class="pln">
echo $</span><span class="pun">{</span><span class="kwd">var</span><span class="pun">:+</span><span class="str">"This is default value"</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"4 - Value of var is $var"</span><span class="pln">

echo $</span><span class="pun">{</span><span class="kwd">var</span><span class="pun">:?</span><span class="str">"Print this message"</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"5 - Value of var is ${var}"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Variable is not set
1 - Value of var is
Variable is not set
2 - Value of var is Variable is not set

3 - Value of var is
This is default value
4 - Value of var is Prefix
Prefix
5 - Value of var is Prefix
</pre>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="362_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="364_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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