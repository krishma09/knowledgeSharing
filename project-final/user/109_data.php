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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=109;
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




<p>This chapter will give you an idea of very basic syntax of PHP and very important to make your PHP foundation strong.</p>
<h4>Escaping to PHP</h4>
<p>The PHP parsing engine needs a way to differentiate PHP code from other elements in the page. The mechanism for doing so is known as 'escaping to PHP'. There are four ways to do this −</p>
<h5>Canonical PHP tags</h5>
<p>The most universally effective PHP tag style is −</p>
<pre class="result notranslate">&lt;?php...?&gt;
</pre>
<p>If you use this style, you can be positive that your tags will always be correctly interpreted.</p>
<h5>Short-open (SGML-style) tags</h5>
<p>Short or short-open tags look like this −</p>
<pre class="result notranslate">&lt;?...?&gt;
</pre>
<p>Short tags are, as one might expect, the shortest option You must do one of two things to enable PHP to recognize the tags −</p><ul class="list">
<li><p>Choose the --enable-short-tags configuration option when you're building PHP.</p></li>
<li><p>Set the short_open_tag setting in your php.ini file to on. This option must be disabled to parse XML with PHP because the same syntax is used for XML tags.</p></li>
</ul>
<h5>ASP-style tags</h5>
<p>ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. ASP-style tags look like this −</p>
<pre class="result notranslate">&lt;%...%&gt;
</pre>
<p>To use ASP-style tags, you will need to set the configuration option in your php.ini file.</p>
<h5>HTML script tags</h5>
<p>HTML script tags look like this −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"PHP"</span><span class="tag">&gt;</span><span class="pun">...</span><span class="tag">&lt;/script&gt;</span></pre>
<h4>Commenting PHP Code</h4>
<p>A <i>comment</i> is the portion of a program that exists only for the human reader and stripped out before displaying the programs result. There are two commenting formats in PHP −</p>
<p><b>Single-line comments</b> − They are generally used for short explanations or notes relevant to the local code. Here are the examples of single line comments.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">
   </span><span class="com"># This is a comment, and</span><span class="pln">
   </span><span class="com"># This is the second line of the comment</span><span class="pln">
   
   </span><span class="com">// This is a comment too. Each style comments only</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"An example with single line comments"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p><b>Multi-lines printing</b> − Here are the examples to print multiple lines in a single print statement −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">
   </span><span class="com"># First Example</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> </span><span class="pun">&lt;&lt;&lt;</span><span class="kwd">END</span><span class="pln">
   </span><span class="typ">This</span><span class="pln"> uses the </span><span class="str">"here document"</span><span class="pln"> syntax to output
   multiple lines </span><span class="kwd">with</span><span class="pln"> $variable interpolation</span><span class="pun">.</span><span class="pln"> </span><span class="typ">Note</span><span class="pln">
   that the here document terminator must appear on a
   line </span><span class="kwd">with</span><span class="pln"> just a semicolon </span><span class="kwd">no</span><span class="pln"> extra whitespace</span><span class="pun">!</span><span class="pln">
   </span><span class="kwd">END</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com"># Second Example</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"This spans
   multiple lines. The newlines will be
   output as well"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p><b>Multi-lines comments</b> − They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">
   </span><span class="com">/* This is a comment with multiline
      Author : Mohammad Mohtashim
      Purpose: Multiline Comments Demo
      Subject: PHP
   */</span><span class="pln">
   
   </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"An example with multi line comments"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<h4>PHP is whitespace insensitive</h4>
<p>Whitespace is the stuff you type that is typically invisible on the screen, including spaces, tabs, and carriage returns (end-of-line characters).</p>
<p>PHP whitespace insensitive means that it almost never matters how many whitespace characters you have in a row.one whitespace character is the same as many such characters.</p>
<p>For example, each of the following PHP statements that assigns the sum of 2 + 2 to the variable $four is equivalent −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$four </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln"> </span><span class="com">// single spaces</span><span class="pln">
$four </span><span class="str">&lt;tab&gt;</span><span class="pun">=&lt;</span><span class="pln">tab2</span><span class="str">&lt;tab&gt;</span><span class="pun">+&lt;</span><span class="pln">tab</span><span class="pun">&gt;</span><span class="lit">2</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> </span><span class="com">// spaces and tabs</span><span class="pln">
$four </span><span class="pun">=</span><span class="pln">
</span><span class="lit">2</span><span class="pun">+</span><span class="pln">
</span><span class="lit">2</span><span class="pun">;</span><span class="pln"> </span><span class="com">// multiple lines</span></pre>
<h4>PHP is case sensitive</h4>
<p>Yeah it is true that PHP is a case sensitive language. Try out following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $capital </span><span class="pun">=</span><span class="pln"> </span><span class="lit">67</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Variable capital is $capital&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Variable CaPiTaL is $CaPiTaL&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>x
<pre class="result notranslate">Variable capital is 67
Variable CaPiTaL is
</pre>
<h4>Statements are expressions terminated by semicolons</h4>
<p>A <i>statement</i> in PHP is any expression that is followed by a semicolon (;).Any sequence of valid PHP statements that is enclosed by the PHP tags is a valid PHP program. Here is a typical statement in PHP, which in this case assigns a string of characters to a variable called $greeting −</p>
<pre class="result notranslate">$greeting = "Welcome to PHP!";
</pre>
<h4>Expressions are combinations of tokens</h4>
<p>The smallest building blocks of PHP are the indivisible tokens, such as numbers (3.14159), strings (.two.), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself like if, else, while, for and so forth</p>
<h4>Braces make blocks</h4>
<p>Although statements cannot be combined like expressions, you can always put a sequence of statements anywhere a statement can go by enclosing them in a set of curly braces.</p>
<p>Here both statements are equivalent −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="lit">3</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">)</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Good - I haven't totally lost my mind.&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
   
</span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="lit">3</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Good - I haven't totally"</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"lost my mind.&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Running PHP Script from Command Prompt</h4>
<p>Yes you can run your PHP script on your command prompt. Assuming you have following content in test.php file</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   echo </span><span class="str">"Hello PHP!!!!!"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>Now run this script as command prompt as follows −</p>
<pre class="result notranslate">$ php test.php
<p>It will produce the following result −</p></pre>
<pre class="result notranslate">Hello PHP!!!!!
</pre>
<p>Hope now you have basic knowledge of PHP Syntax.</p>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="108_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="110_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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