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
	$sid=88;
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




<p>In this chapter, we will discuss <b>constants</b> and <b>literals</b> in PL/SQL. A constant holds a value that once declared, does not change in the program. A constant declaration specifies its name, data type, and value, and allocates storage for it. The declaration can also impose the <b>NOT NULL constraint</b>.</p>
<h4>Declaring a Constant</h4>
<p>A constant is declared using the <b>CONSTANT</b> keyword. It requires an initial value and does not allow that value to be changed. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">PI CONSTANT NUMBER </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">3.141592654</span><span class="pun">;</span><span class="pln"> 
DECLARE 
   </span><span class="pun">--</span><span class="pln"> constant declaration 
   pi constant number </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">3.141592654</span><span class="pun">;</span><span class="pln"> 
   </span><span class="pun">--</span><span class="pln"> other declarations 
   radius number</span><span class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span class="lit">2</span><span class="pun">);</span><span class="pln">  
   dia number</span><span class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span class="lit">2</span><span class="pun">);</span><span class="pln">  
   circumference number</span><span class="pun">(</span><span class="lit">7</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
   area number </span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln">  
   </span><span class="pun">--</span><span class="pln"> processing 
   radius </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">9.5</span><span class="pun">;</span><span class="pln">  
   dia </span><span class="pun">:=</span><span class="pln"> radius </span><span class="pun">*</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">  
   circumference </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">2.0</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> pi </span><span class="pun">*</span><span class="pln"> radius</span><span class="pun">;</span><span class="pln"> 
   area </span><span class="pun">:=</span><span class="pln"> pi </span><span class="pun">*</span><span class="pln"> radius </span><span class="pun">*</span><span class="pln"> radius</span><span class="pun">;</span><span class="pln"> 
   </span><span class="pun">--</span><span class="pln"> output 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Radius: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> radius</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Diameter: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> dia</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Circumference: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> circumference</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Area: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> area</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Radius: 9.5 
Diameter: 19 
Circumference: 59.69 
Area: 283.53  

Pl/SQL procedure successfully completed. 
</pre>
<h4>The PL/SQL Literals</h4>
<p>A literal is an explicit numeric, character, string, or Boolean value not represented by an identifier. For example, TRUE, 786, NULL, 'tutorialspoint' are all literals of type Boolean, number, or string. PL/SQL, literals are case-sensitive. PL/SQL supports the following kinds of literals −</p>
<ul class="list">
<li>Numeric Literals</li>
<li>Character Literals</li>
<li>String Literals</li>
<li>BOOLEAN Literals</li>
<li>Date and Time Literals</li>
</ul>
<p>The following table provides examples from all these categories of literal values.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center; width:10%">S.No</th>
<th style="text-align:center;">Literal Type &amp; Example</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>Numeric Literals</b></p>
<p>050   78   -14   0   +32767</p>
<p>6.6667   0.0   -12.0   3.14159   +7800.00</p>
<p>6E5   1.0E-8   3.14159e0   -1E38   -9.5e-3</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>Character Literals</b></p>
<p>'A'   '%'   '9'   ' '   'z'   '('</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>String Literals</b></p>
<p>'Hello, world!'</p>
<p>'Tutorials Point'</p>
<p>'19-NOV-12'</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>BOOLEAN Literals</b></p>
<p>TRUE, FALSE, and NULL.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">5</td>
<td><p><b>Date and Time Literals</b></p>
<p>DATE '1978-12-25';</p>
<p>TIMESTAMP '2012-10-29 12:01:01';</p>
</td>
</tr>
</tbody></table>
<p>To embed single quotes within a string literal, place two single quotes next to each other as shown in the following program −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   message  varchar2</span><span class="pun">(</span><span class="lit">30</span><span class="pun">):=</span><span class="pln"> </span><span class="str">'That''s tutorialspoint.com!'</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln">message</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">  </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">That's tutorialspoint.com!  

PL/SQL procedure successfully completed.
</pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="87_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="89_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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