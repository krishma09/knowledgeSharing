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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=281;
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
<p>The <b>constants</b> refer to fixed values that the program may not alter during its execution. These fixed values are also called literals.</p>
<p>Constants can be of any of the basic data types like an integer constant, a floating constant, a character constant, or a string literal. There are also enumeration constants as well.</p>
<p>The constants are treated just like regular variables except that their values cannot be modified after their definition.</p>
<p>An <b>enumeration</b> is a set of named integer constants.</p>
<h4>Declaring Constants</h4>
<p>In VB.Net, constants are declared using the <b>Const</b> statement. The Const statement is used at module, class, structure, procedure, or block level for use in place of literal values. </p>
<p>The syntax for the Const statement is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="pln"> </span><span class="pun">&lt;</span><span class="pln"> attributelist</span><span class="pun">&gt;</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> accessmodifier </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Shadows</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> 
</span><span class="typ">Const</span><span class="pln"> constantlist</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><i><b>attributelist</b></i>: specifies the list of attributes applied to the constants; you can provide multiple attributes separated by commas. Optional. </p></li>
<li><p><b><i>accessmodifier</i></b>: specifies which code can access these constants. Optional. Values can be either of the: Public, Protected, Friend, Protected Friend, or Private.</p></li>
<li><p><b><i>Shadows</i></b>: this makes the constant hide a programming element of identical name in a base class. Optional.</p></li>
<li><p><b><i>Constantlist</i></b>: gives the list of names of constants declared. Required. </p></li>
</ul>
<p>Where, each constant name has the following syntax and parts:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">constantname </span><span class="pun">[</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> datatype </span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> initializer</span></pre>
<ul class="list">
<li><p><b><i>constantname</i></b>: specifies the name of the constant</p></li>
<li><p><b><i>datatype</i></b>: specifies the data type of the constant</p></li>
<li><p><b><i>initializer</i></b>: specifies the value assigned to the constant</p></li>
</ul>
<p>For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="str">'The following statements declare constants.'</span><span class="pln">
</span><span class="typ">Const</span><span class="pln"> maxval </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Long</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">4999</span><span class="pln">
</span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Const</span><span class="pln"> message </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"HELLO"</span><span class="pln"> 
</span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Const</span><span class="pln"> piValue </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3.1415</span></pre>
<h4>Example</h4>
<p>The following example demonstrates declaration and use of a constant value:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="typ">Module</span><span class="pln"> constantsNenum
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Const</span><span class="pln"> PI </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3.14149</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> radius</span><span class="pun">,</span><span class="pln"> area </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Single</span><span class="pln">
      radius </span><span class="pun">=</span><span class="pln"> </span><span class="lit">7</span><span class="pln">
      area </span><span class="pun">=</span><span class="pln"> PI </span><span class="pun">*</span><span class="pln"> radius </span><span class="pun">*</span><span class="pln"> radius
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Area = "</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> </span><span class="typ">Str</span><span class="pun">(</span><span class="pln">area</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Area</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">153.933</span></pre>
<h4>Print and Display Constants in VB.Net</h4>
<p>VB.Net provides the following print and display constants:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:25%">Constant</th>
<th>Description</th>
</tr>
<tr>
<td>vbCrLf</td>
<td>Carriage return/linefeed character combination.</td>
</tr>
<tr>
<td>vbCr</td>
<td>Carriage return character.</td>
</tr>
<tr>
<td>vbLf</td>
<td>Linefeed character.</td>
</tr>
<tr>
<td>vbNewLine</td>
<td>Newline character.</td>
</tr>
<tr>
<td>vbNullChar</td>
<td>Null character.</td>
</tr>
<tr>
<td>vbNullString</td>
<td>Not the same as a zero-length string (""); used for calling external procedures.</td>
</tr>
<tr>
<td>vbObjectError</td>
<td>Error number. User-defined error numbers should be greater than this value. For example: <br>Err.Raise(Number) = vbObjectError + 1000</td>
</tr>
<tr>
<td>vbTab</td>
<td>Tab character.</td>
</tr>
<tr>
<td>vbBack</td>
<td>Backspace character.</td>
</tr>
</tbody></table>
<h4>Declaring Enumerations</h4>
<p>An enumerated type is declared using the <b>Enum</b> statement. The Enum statement declares an enumeration and defines the values of its members. The Enum statement can be used at the module, class, structure, procedure, or block level. </p>
<p>The syntax for the Enum statement is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="pln"> </span><span class="pun">&lt;</span><span class="pln"> attributelist </span><span class="pun">&gt;</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> accessmodifier </span><span class="pun">]</span><span class="pln">  </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Shadows</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> 
</span><span class="typ">Enum</span><span class="pln"> enumerationname </span><span class="pun">[</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> datatype </span><span class="pun">]</span><span class="pln"> 
   memberlist
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Enum</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>attributelist</i></b>: refers to the list of attributes applied to the variable. Optional.</p></li>
<li><p><b><i>asscessmodifier</i></b>: specifies which code can access these enumerations. Optional. Values can be either of the: Public, Protected, Friend or Private.</p></li>
<li><p><b><i>Shadows</i></b>: this makes the enumeration hide a programming element of identical name in a base class. Optional.</p></li>
<li><p><b><i>enumerationname</i></b>: name of the enumeration. Required</p></li>
<li><p><b><i>datatype</i></b>: specifies the data type of the enumeration and all its members.</p></li>
<li><p><b><i>memberlist</i></b>: specifies the list of member constants being declared in this statement. Required. </p></li>
</ul>
<p>Each member in the memberlist has the following syntax and parts: </p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[&lt;</span><span class="pln"> attribute list</span><span class="pun">&gt;]</span><span class="pln"> member name </span><span class="pun">[</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> initializer </span><span class="pun">]</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>name</i></b>: specifies the name of the member. Required.</p></li>
<li><p><b><i>initializer</i></b>: value assigned to the enumeration member. Optional.</p></li>
</ul>
<p>For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Enum</span><span class="pln"> </span><span class="typ">Colors</span><span class="pln">
   red </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
   orange </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
   yellow </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
   green </span><span class="pun">=</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
   azure </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
   blue </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
   violet </span><span class="pun">=</span><span class="pln"> </span><span class="lit">7</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Enum</span></pre>
<h4>Example</h4>
<p>The following example demonstrates declaration and use of the Enum variable <i>Colors</i>:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> constantsNenum
   </span><span class="typ">Enum</span><span class="pln"> </span><span class="typ">Colors</span><span class="pln">
      red </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
      orange </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
      yellow </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
      green </span><span class="pun">=</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
      azure </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
      blue </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
      violet </span><span class="pun">=</span><span class="pln"> </span><span class="lit">7</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Enum</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The Color Red is : "</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> </span><span class="typ">Colors</span><span class="pun">.</span><span class="pln">red</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The Color Yellow is : "</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> </span><span class="typ">Colors</span><span class="pun">.</span><span class="pln">yellow</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The Color Blue is : "</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> </span><span class="typ">Colors</span><span class="pun">.</span><span class="pln">blue</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The Color Green is : "</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> </span><span class="typ">Colors</span><span class="pun">.</span><span class="pln">green</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">The</span><span class="pln"> </span><span class="typ">Color</span><span class="pln"> </span><span class="typ">Red</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Color</span><span class="pln"> </span><span class="typ">Yellow</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Color</span><span class="pln"> </span><span class="typ">Blue</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Color</span><span class="pln"> </span><span class="typ">Green</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">4</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="280_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="282_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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