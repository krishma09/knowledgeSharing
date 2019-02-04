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
<title>PL/SQL Tutorials | knowledge.com</title>
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
	$sid=85;
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




<p>In this chapter, we will discuss the Basic Syntax of PL/SQL which is a <b>block-structured</b> language; this means that the PL/SQL programs are divided and written in logical blocks of code. Each block consists of three sub-parts −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Sections &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td>
<p><b>Declarations</b></p>
<p>This section starts with the keyword <b>DECLARE</b>. It is an optional section and defines all variables, cursors, subprograms, and other elements to be used in the program.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td>
<p><b>Executable Commands</b></p>
<p>This section is enclosed between the keywords <b>BEGIN</b> and <b>END</b> and it is a mandatory section. It consists of the executable PL/SQL statements of the program. It should have at least one executable line of code, which may be just a <b>NULL command</b> to indicate that nothing should be executed.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>Exception Handling</b></p>
<p>This section starts with the keyword <b>EXCEPTION</b>. This optional section contains <b>exception(s)</b> that handle errors in the program.</p></td>

</tr>
</tbody></table>
<p>Every PL/SQL statement ends with a semicolon (;). PL/SQL blocks can be nested within other PL/SQL blocks using <b>BEGIN</b> and <b>END</b>. Following is the basic structure of a PL/SQL block −</p>
<pre class="result notranslate">DECLARE 
   &lt;declarations section&gt; 
BEGIN 
   &lt;executable command(s)&gt;
EXCEPTION 
   &lt;exception handling&gt; 
END;
</pre>
<h4>The 'Hello World' Example</h4>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   message  varchar2</span><span class="pun">(</span><span class="lit">20</span><span class="pun">):=</span><span class="pln"> </span><span class="str">'Hello, World!'</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln">message</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>The <b>end;</b> line signals the end of the PL/SQL block. To run the code from the SQL command line, you may need to type / at the beginning of the first blank line after the last line of the code. When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Hello World  

PL/SQL procedure successfully completed.
</pre>
<h4>The PL/SQL Identifiers</h4>
<p>PL/SQL identifiers are constants, variables, exceptions, procedures, cursors, and reserved words. The identifiers consist of a letter optionally followed by more letters, numerals, dollar signs, underscores, and number signs and should not exceed 30 characters.
</p>
<p>By default, <b>identifiers are not case-sensitive</b>. So you can use <b>integer</b> or <b>INTEGER</b> to represent a numeric value. You cannot use a reserved keyword as an identifier.</p>
<h4>The PL/SQL Delimiters</h4>
<p>A delimiter is a symbol with a special meaning. Following is the list of delimiters in PL/SQL −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Delimiter</th>
<th style="text-align:center;">Description</th>
</tr>
<tr>
<td style="text-align:center;"><b>+, -, *, /</b></td>
<td>Addition, subtraction/negation, multiplication, division</td>
</tr>
<tr>
<td style="text-align:center;"><b>%</b></td>
<td>Attribute indicator</td>
</tr>
<tr>
<td style="text-align:center;"><b>'</b></td>
<td>Character string delimiter</td>
</tr>
<tr>
<td style="text-align:center;"><b>.</b></td>
<td>Component selector</td>
</tr>
<tr>
<td style="text-align:center;"><b>(,)</b></td>
<td>Expression or list delimiter</td>
</tr>
<tr>
<td style="text-align:center;"><b>:</b></td>
<td>Host variable indicator</td>
</tr>
<tr>
<td style="text-align:center;"><b>,</b></td>
<td>Item separator</td>
</tr>
<tr>
<td style="text-align:center;"><b>"</b></td>
<td>Quoted identifier delimiter</td>
</tr>
<tr>
<td style="text-align:center;"><b>=</b></td>
<td>Relational operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>@</b></td>
<td>Remote access indicator</td>
</tr>
<tr>
<td style="text-align:center;"><b>;</b></td>
<td>Statement terminator</td>
</tr>
<tr>
<td style="text-align:center;"><b>:=</b></td>
<td>Assignment operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>=&gt;</b></td>
<td>Association operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>||</b></td>
<td>Concatenation operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>**</b></td>
<td>Exponentiation operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>&lt;&lt;, &gt;&gt;</b></td>
<td>Label delimiter (begin and end)</td>
</tr>
<tr>
<td style="text-align:center;"><b>/*, */</b></td>
<td>Multi-line comment delimiter (begin and end)</td>
</tr>
<tr>
<td style="text-align:center;"><b>--</b></td>
<td>Single-line comment indicator</td>
</tr>
<tr>
<td style="text-align:center;"><b>..</b></td>
<td>Range operator</td>
</tr>
<tr>
<td style="text-align:center;"><b>&lt;, &gt;, &lt;=, &gt;=</b></td>
<td>Relational operators</td>
</tr>
<tr>
<td style="text-align:center;"><b>&lt;&gt;, '=, ~=, ^=</b></td>
<td>Different versions of NOT EQUAL</td>
</tr>
</tbody></table>
<h4>The PL/SQL Comments</h4>
<p>Program comments are explanatory statements that can be included in the PL/SQL code that you write and helps anyone reading its source code. All programming languages allow some form of comments.</p>
<p>The PL/SQL supports single-line and multi-line comments. All characters available inside any comment are ignored by the PL/SQL compiler. The PL/SQL single-line comments start with the delimiter -- (double hyphen) and multi-line comments are enclosed by /* and */.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   </span><span class="pun">--</span><span class="pln"> variable declaration 
   message  varchar2</span><span class="pun">(</span><span class="lit">20</span><span class="pun">):=</span><span class="pln"> </span><span class="str">'Hello, World!'</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="com">/* 
   *  PL/SQL executable statement(s) 
   */</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln">message</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span><span class="pln">

PL</span><span class="pun">/</span><span class="pln">SQL procedure successfully completed</span><span class="pun">.</span></pre>
<h4>PL/SQL Program Units</h4>
<p>A PL/SQL unit is any one of the following −</p>
<ul class="list">
<li>PL/SQL block</li>
<li>Function</li>
<li>Package</li>
<li>Package body</li>
<li>Procedure</li>
<li>Trigger</li>
<li>Type</li>
<li>Type body</li>
</ul>
<p>Each of these units will be discussed in the following chapters.</p>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="84_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="86_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'plsql_header.php'; ?>
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