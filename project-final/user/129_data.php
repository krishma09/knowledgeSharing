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
	$sid=129;
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



<p>Error handling is the process of catching errors raised by your program and then taking appropriate action. If you would handle errors properly then it may lead to many unforeseen consequences.</p>
<p>Its very simple in PHP to handle an errors.</p>
<h4>Using die() function</h4>
<p>While writing your PHP program you should check all possible error condition before going ahead and take appropriate action when required.</p>
<p>Try following example without having <b>/tmp/test.xt</b> file and with this file.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(!</span><span class="pln">file_exists</span><span class="pun">(</span><span class="str">"/tmp/test.txt"</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">die</span><span class="pun">(</span><span class="str">"File not found"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $file </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="str">"/tmp/test.txt"</span><span class="pun">,</span><span class="str">"r"</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"Opend file sucessfully"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="com">// Test of the code here.</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>This way you can write an efficient code. Using above technique you can stop your program whenever it errors out and display more meaningful and user friendly message.</p>
<h4>Defining Custom Error Handling Function</h4>
<p>You can write your own function to handling any error. PHP provides you a framework to define error handling function.</p>
<p>This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context) −</p>
<h5>Syntax</h5>
<pre class="result notranslate">error_function(error_level,error_message, error_file,error_line,error_context);
</pre>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th>Parameter &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>error_level</b></p>
<p>Required - Specifies the error report level for the user-defined error. Must be a value number.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>error_message</b></p>
<p>Required - Specifies the error message for the user-defined error</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>error_file</b></p>
<p>Optional - Specifies the file name in which the error occurred</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>error_line</b></p>
<p>Optional - Specifies the line number in which the error occurred</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><b>error_context</b></p>
<p>Optional - Specifies an array containing every variable and their values in use when the error occurred</p>
</td>
</tr>
</tbody></table>
<h4>Exceptions Handling</h4>
<p>PHP 5 has an exception model similar to that of other programming languages. Exceptions are important and provides a better control over error handling.</p>
<p>Lets explain there new keyword related to exceptions.</p>
<ul class="list">
<li><p><b>Try</b> − A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown".</p></li>
<li><p><b>Throw</b> − This is how you trigger an exception. Each "throw" must have at least one "catch".</p></li>
<li><p><b>Catch</b> − A "catch" block retrieves an exception and creates an object containing the exception information.</p></li>
</ul>
<p>When an exception is thrown, code following the statement will not be executed, and PHP will attempt to find the first matching catch block. If an exception is not caught, a PHP Fatal Error will be issued with an "Uncaught Exception ...</p>
<ul class="list">
<li><p>An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block.</p></li>
<li><p>Each try must have at least one corresponding catch block. Multiple catch blocks can be used to catch different classes of exceptions.</p></li>
<li><p>Exceptions can be thrown (or re-thrown) within a catch block.</p></li>
</ul>
<ul class="list">
<li><p>An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block.</p></li>
<li><p>Each try must have at least one corresponding catch block. Multiple catch blocks can be used to catch different classes of exceptions.</p></li>
<li><p>Exceptions can be thrown (or re-thrown) within a catch block.</p></li>
</ul>
<h5>Example</h5>
<p>Following is the piece of code, copy and paste this code into a file and verify the result.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">try</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $error </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Always throw this error'</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">throw</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Exception</span><span class="pun">(</span><span class="pln">$error</span><span class="pun">);</span><span class="pln">
      
      </span><span class="com">// Code following an exception is not executed.</span><span class="pln">
      echo </span><span class="str">'Never executed'</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Exception</span><span class="pln"> $e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      echo </span><span class="str">'Caught exception: '</span><span class="pun">,</span><span class="pln">  $e</span><span class="pun">-&gt;</span><span class="pln">getMessage</span><span class="pun">(),</span><span class="pln"> </span><span class="str">"\n"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// Continue execution</span><span class="pln">
   echo </span><span class="str">'Hello World'</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>In the above example $e-&gt;getMessage function is used to get error message. There are following functions which can be used from <b>Exception</b> class.</p>
<ul class="list">
<li><p><b>getMessage()</b> − message of exception </p></li>
<li><p><b>getCode()</b> − code of exception</p></li>
<li><p><b>getFile()</b> − source filename</p></li>
<li><p><b>getLine()</b> − source line</p></li>
<li><p><b>getTrace()</b> − n array of the backtrace()</p></li>
<li><p><b>getTraceAsString()</b> − formated string of trace</p></li>
</ul>
<h5>Creating Custom Exception Handler</h5>
<p>You can define your own custom exception handler. Use following function to set a user-defined exception handler function.</p>
<pre class="result notranslate">string set_exception_handler ( callback $exception_handler )
</pre>
<p>Here <b>exception_handler</b> is the name of the function to be called when an uncaught exception occurs. This function must be defined before calling set_exception_handler().</p>
<h5>Example</h5>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">function</span><span class="pln"> exception_handler</span><span class="pun">(</span><span class="pln">$exception</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      echo </span><span class="str">"Uncaught exception: "</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> $exception</span><span class="pun">-&gt;</span><span class="pln">getMessage</span><span class="pun">(),</span><span class="pln"> </span><span class="str">"\n"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   set_exception_handler</span><span class="pun">(</span><span class="str">'exception_handler'</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">throw</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Exception</span><span class="pun">(</span><span class="str">'Uncaught Exception'</span><span class="pun">);</span><span class="pln">
   
   echo </span><span class="str">"Not Executed\n"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>














</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="128_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="130_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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