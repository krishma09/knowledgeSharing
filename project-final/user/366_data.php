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
	$sid=366;
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

<p>In this chapter, we will discuss in detail about the shell functions. Functions enable you to break down the overall functionality of a script into smaller, logical subsections, which can then be called upon to perform their individual tasks when needed.</p>
<p>Using functions to perform repetitive tasks is an excellent way to create <b>code reuse</b>. This is an important part of modern object-oriented programming principles.</p>
<p>Shell functions are similar to subroutines, procedures, and functions in other programming languages.</p>
<h4>Creating Functions</h4>
<p>To declare a function, simply use the following syntax −</p>
<pre class="result notranslate">function_name () { 
   list of commands
}
</pre>
<p>The name of your function is <b>function_name</b>, and that's what you will use to call it from elsewhere in your scripts. The function name must be followed by parentheses, followed by a list of commands enclosed within braces.</p>
<h5>Example</h5>
<p>Following example shows the use of function −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="com"># Define your function here</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo </span><span class="str">"Hello World"</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com"># Invoke your function</span><span class="pln">
</span><span class="typ">Hello</span></pre>
<p>Upon execution, you will receive the following output −</p>
<pre class="result notranslate">$./test.sh
Hello World
</pre>
<h4>Pass Parameters to a Function</h4>
<p>You can define a function that will accept parameters while calling the function. These parameters would be represented by <b>$1</b>, <b>$2</b> and so on.</p>
<p>Following is an example where we pass two parameters <i>Zara</i> and <i>Ali</i> and then we capture and print these parameters in the function.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="com"># Define your function here</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo </span><span class="str">"Hello World $1 $2"</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com"># Invoke your function</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">Zara</span><span class="pln"> </span><span class="typ">Ali</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">$./test.sh
Hello World Zara Ali
</pre>
<h4>Returning Values from Functions</h4>
<p>If you execute an <b>exit</b> command from inside a function, its effect is not only to terminate execution of the function but also of the shell program that called the function.</p>
<p>If you instead want to just terminate execution of the function, then there is way to come out of a defined function.</p>
<p>Based on the situation you can return any value from your function using the <b>return</b> command whose syntax is as follows −</p>
<pre class="result notranslate">return code
</pre>
<p>Here <b>code</b> can be anything you choose here, but obviously you should choose something that is meaningful or useful in the context of your script as a whole.</p>
<h5>Example</h5>
<p>Following function returns a value 1 −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="com"># Define your function here</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo </span><span class="str">"Hello World $1 $2"</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com"># Invoke your function</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">Zara</span><span class="pln"> </span><span class="typ">Ali</span><span class="pln">

</span><span class="com"># Capture value returnd by last command</span><span class="pln">
ret</span><span class="pun">=</span><span class="pln">$</span><span class="pun">?</span><span class="pln">

echo </span><span class="str">"Return value is $ret"</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">$./test.sh
Hello World Zara Ali
Return value is 10
</pre>
<h4>Nested Functions</h4>
<p>One of the more interesting features of functions is that they can call themselves and also other functions. A function that calls itself is known as a <b><i>recursive function</i></b>.</p>
<p>Following example demonstrates nesting of two functions −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="com"># Calling one function from another</span><span class="pln">
number_one </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo </span><span class="str">"This is the first function speaking..."</span><span class="pln">
   number_two
</span><span class="pun">}</span><span class="pln">

number_two </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   echo </span><span class="str">"This is now the second function speaking..."</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com"># Calling function one.</span><span class="pln">
number_one</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">This is the first function speaking...
This is now the second function speaking...
</pre>
<h4>Function Call from Prompt</h4>
<p>You can put definitions for commonly used functions inside your <b><i>.profile</i></b>. These definitions will be available whenever you log in and you can use them at the command prompt.</p>
<p>Alternatively, you can group the definitions in a file, say <b><i>test.sh</i></b>, and then execute the file in the current shell by typing −</p>
<pre class="result notranslate">$. test.sh
</pre>
<p>This has the effect of causing functions defined inside <b><i>test.sh</i></b> to be read and defined to the current shell as follows −</p>
<pre class="result notranslate">$ number_one
This is the first function speaking...
This is now the second function speaking...
$
</pre>
<p>To remove the definition of a function from the shell, use the unset command with the <b>.f</b> option. This command is also used to remove the definition of a variable to the shell.</p>
<pre class="result notranslate">$unset .f function_name
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="365_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="367_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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