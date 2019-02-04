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
<title>C Tutorials | knowledge.com</title>
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
	$sid=218;
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

<p>The <b>C Preprocessor</b> is not a part of the compiler, but is a separate step in the compilation process. In simple terms, a C Preprocessor is just a text substitution tool and it instructs the compiler to do required pre-processing before the actual compilation. We'll refer to the C Preprocessor as CPP.</p>
<p>All preprocessor commands begin with a hash symbol (#). It must be the first nonblank character, and for readability, a preprocessor directive should begin in the first column. The following section lists down all the important preprocessor directives −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Directive</th>
<th>Description</th>
</tr>
<tr>
<td>#define</td>
<td>Substitutes a preprocessor macro.</td>
</tr>
<tr>
<td>#include</td>
<td>Inserts a particular header from another file.</td>
</tr>
<tr>
<td>#undef</td>
<td>Undefines a preprocessor macro.</td>
</tr>
<tr>
<td>#ifdef</td>
<td>Returns true if this macro is defined.</td>
</tr>
<tr>
<td>#ifndef</td>
<td>Returns true if this macro is not defined.</td>
</tr>
<tr>
<td>#if</td>
<td>Tests if a compile time condition is true.</td>
</tr>
<tr>
<td>#else</td>
<td>The alternative for #if.</td>
</tr>
<tr>
<td>#elif</td>
<td>#else and #if in one statement.</td>
</tr>
<tr>
<td>#endif</td>
<td>Ends preprocessor conditional.</td>
</tr>
<tr>
<td>#error</td>
<td>Prints error message on stderr.</td>
</tr>
<tr>
<td>#pragma</td>
<td>Issues special commands to the compiler, using a standardized method.</td>
</tr>
</tbody></table>
<h4>Preprocessors Examples</h4>
<p>Analyze the following examples to understand various directives.</p>
<pre class="result notranslate">#define MAX_ARRAY_LENGTH 20
</pre>
<p>This directive tells the CPP to replace instances of MAX_ARRAY_LENGTH with 20. Use <i>#define</i> for constants to increase readability.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">"myheader.h"</span></pre>
<p>These directives tell the CPP to get stdio.h from <b>System Libraries</b> and add the text to the current source file. The next line tells CPP to get <b>myheader.h</b> from the local directory and add the content to the current source file.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#undef</span><span class="pln">  FILE_SIZE
</span><span class="com">#define</span><span class="pln"> FILE_SIZE </span><span class="lit">42</span></pre>
<p>It tells the CPP to undefine existing FILE_SIZE and define it as 42.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#ifndef</span><span class="pln"> MESSAGE
   </span><span class="com">#define</span><span class="pln"> MESSAGE </span><span class="str">"You wish!"</span><span class="pln">
</span><span class="com">#endif</span></pre>
<p>It tells the CPP to define MESSAGE only if MESSAGE isn't already defined.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#ifdef</span><span class="pln"> DEBUG
   </span><span class="com">/* Your debugging statements here */</span><span class="pln">
</span><span class="com">#endif</span></pre>
<p>It tells the CPP to process the statements enclosed if DEBUG is defined. This is useful if you pass the <i>-DDEBUG</i> flag to the gcc compiler at the time of compilation. This will define DEBUG, so you can turn debugging on and off on the fly during compilation.</p>
<h4>Predefined Macros</h4>
<p>ANSI C defines a number of macros. Although each one is available for use in programming, the predefined macros should not be directly modified.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Macro</th>
<th>Description</th>
</tr>
<tr>
<td>__DATE__</td>
<td>The current date as a character literal in "MMM DD YYYY" format.</td>
</tr>
<tr>
<td>__TIME__</td>
<td>The current time as a character literal in "HH:MM:SS" format.</td>
</tr>
<tr>
<td>__FILE__</td>
<td>This contains the current filename as a string literal.</td>
</tr>
<tr>
<td>__LINE__</td>
<td>This contains the current line number as a decimal constant.</td>
</tr>
<tr>
<td>__STDC__</td>
<td>Defined as 1 when the compiler complies with the ANSI standard.</td>
</tr>
</tbody></table>
<p>Let's try the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   printf</span><span class="pun">(</span><span class="str">"File :%s\n"</span><span class="pun">,</span><span class="pln"> __FILE__ </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Date :%s\n"</span><span class="pun">,</span><span class="pln"> __DATE__ </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Time :%s\n"</span><span class="pun">,</span><span class="pln"> __TIME__ </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Line :%d\n"</span><span class="pun">,</span><span class="pln"> __LINE__ </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"ANSI :%d\n"</span><span class="pun">,</span><span class="pln"> __STDC__ </span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<p>When the above code in a file <b>test.c</b> is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">File :test.c
Date :Jun 2 2012
Time :03:36:24
Line :8
ANSI :1
</pre>
<h4>Preprocessor Operators</h4>
<p>The C preprocessor offers the following operators to help create macros −</p>
<h5>The Macro Continuation (\) Operator</h5>
<p>A macro is normally confined to a single line. The macro continuation operator (\) is used to continue a macro that is too long for a single line. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#define</span><span class="pln">  message_for</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">  \
   printf</span><span class="pun">(#</span><span class="pln">a </span><span class="str">" and "</span><span class="pln"> </span><span class="com">#b ": We love you!\n")</span></pre>
   <h5>The Stringize (#) Operator</h5>
   <p>The stringize or number-sign operator ( '#' ), when used within a macro definition, converts a macro parameter into a string constant. This operator may be used only in a macro having a specified argument or parameter list. For example −</p>
   <pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="com">#define</span><span class="pln">  message_for</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">  \
   printf</span><span class="pun">(#</span><span class="pln">a </span><span class="str">" and "</span><span class="pln"> </span><span class="com">#b ": We love you!\n")</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   message_for</span><span class="pun">(</span><span class="typ">Carole</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Debra</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Carole and Debra: We love you!
</pre>
<h5>The Token Pasting (##) Operator</h5>
<p>The token-pasting operator (##) within a macro definition combines two arguments. It permits two separate tokens in the macro definition to be joined into a single token. For example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> tokenpaster</span><span class="pun">(</span><span class="pln">n</span><span class="pun">)</span><span class="pln"> printf </span><span class="pun">(</span><span class="str">"token"</span><span class="pln"> </span><span class="com">#n " = %d", token##n)</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> token34 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40</span><span class="pun">;</span><span class="pln">
   tokenpaster</span><span class="pun">(</span><span class="lit">34</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">token34 = 40
</pre>
<p>It happened so because this example results in the following actual output from the preprocessor −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">printf </span><span class="pun">(</span><span class="str">"token34 = %d"</span><span class="pun">,</span><span class="pln"> token34</span><span class="pun">);</span></pre>
<p>This example shows the concatenation of token##n into token34 and here we have used both <b>stringize</b> and <b>token-pasting</b>.</p>
<h5>The Defined() Operator</h5>
<p>The preprocessor <b>defined</b> operator is used in constant expressions to determine if an identifier is defined using #define. If the specified identifier is defined, the value is true (non-zero). If the symbol is not defined, the value is false (zero). The defined operator is specified as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="com">#if !defined (MESSAGE)</span><span class="pln">
   </span><span class="com">#define</span><span class="pln"> MESSAGE </span><span class="str">"You wish!"</span><span class="pln">
</span><span class="com">#endif</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Here is the message: %s\n"</span><span class="pun">,</span><span class="pln"> MESSAGE</span><span class="pun">);</span><span class="pln">  
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Here is the message: You wish!
</pre>
<h4>Parameterized Macros</h4>
<p>One of the powerful functions of the CPP is the ability to simulate functions using parameterized macros. For example, we might have some code to square a number as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">int</span><span class="pln"> square</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> x</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> x </span><span class="pun">*</span><span class="pln"> x</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>We can rewrite above the code using a macro as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#define</span><span class="pln"> square</span><span class="pun">(</span><span class="pln">x</span><span class="pun">)</span><span class="pln"> </span><span class="pun">((</span><span class="pln">x</span><span class="pun">)</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x</span><span class="pun">))</span></pre>
<p>Macros with arguments must be defined using the <b>#define</b> directive before they can be used. The argument list is enclosed in parentheses and must immediately follow the macro name. Spaces are not allowed between the macro name and open parenthesis. For example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> MAX</span><span class="pun">(</span><span class="pln">x</span><span class="pun">,</span><span class="pln">y</span><span class="pun">)</span><span class="pln"> </span><span class="pun">((</span><span class="pln">x</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&gt;</span><span class="pln"> </span><span class="pun">(</span><span class="pln">y</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">(</span><span class="pln">y</span><span class="pun">))</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Max between 20 and 10 is %d\n"</span><span class="pun">,</span><span class="pln"> MAX</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">));</span><span class="pln">  
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Max between 20 and 10 is 20
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="217_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="219_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c_header.php'; ?></aside>
 
  
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