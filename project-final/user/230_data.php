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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=230;
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
<p>While doing programming in any programming language, you need to use various variables to store various information. Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>
<p>You may like to store information of various data types like character, wide character, integer, floating point, double floating point, boolean etc. Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory.</p>
<h4>Primitive Built-in Types</h4>
<p>C++ offer the programmer a rich assortment of built-in as well as user defined data types. Following table lists down seven basic C++ data types:</p>
<table class="table table-bordered">
<tbody><tr>
<th width="50%">Type</th>
<th>Keyword</th>
</tr>
<tr>
<td>Boolean</td>
<td>bool</td>
</tr>
<tr>
<td>Character</td>
<td>char</td>
</tr>
<tr>
<td>Integer</td>
<td>int</td>
</tr>
<tr>
<td>Floating point</td>
<td>float</td>
</tr>
<tr>
<td>Double floating point</td>
<td>double</td>
</tr>
<tr>
<td>Valueless</td>
<td> void</td>
</tr>
<tr>
<td>Wide character</td>
<td>wchar_t</td>
</tr>
</tbody></table>
<p>Several of the basic types can be modified using one or more of these type modifiers:</p>
<ul class="list">
<li><p>signed</p></li>
<li><p>unsigned</p></li>
<li><p>short</p></li>
<li><p>long</p></li>
</ul>
<p>The following table shows the variable type, how much memory it takes to store the value in memory, and what is maximum and minimum value which can be stored in such type of variables.</p>
<table class="table table-bordered" border="1" cellpadding="5">
<tbody><tr>
<th>Type</th>
<th>Typical Bit Width</th>
<th>Typical Range</th>
</tr>
<tr>
<td>char</td>
<td>1byte</td>
<td>-128 to 127 or 0 to 255</td>
</tr>
<tr>
<td>unsigned char</td>
<td>1byte</td>
<td>0 to 255</td>
</tr>
<tr>
<td>signed char</td>
<td>1byte</td>
<td>-128 to 127</td>
</tr>
<tr>
<td>int</td>
<td>4bytes</td>
<td>-2147483648 to 2147483647</td>
</tr>
<tr>
<td>unsigned int</td>
<td>4bytes</td>
<td>0 to 4294967295</td>
</tr>
<tr>
<td>signed int</td>
<td>4bytes</td>
<td>-2147483648 to 2147483647</td>
</tr>
<tr>
<td>short int</td>
<td>2bytes</td>
<td>-32768 to 32767</td>
</tr>
<tr>
<td>unsigned short int</td>
<td>2bytes</td>
<td>0 to 65,535</td>
</tr>
<tr>
<td>signed short int</td>
<td>2bytes</td>
<td>-32768 to 32767</td>
</tr>
<tr>
<td>long int</td>
<td>8bytes</td>
<td>-9,223,372,036,854,775,808 to 9,223,372,036,854,775,807</td>
</tr>
<tr>
<td>signed long int</td>
<td>8bytes</td>
<td>-9,223,372,036,854,775,808 to 9,223,372,036,854,775,807</td>
</tr>
<tr>
<td>unsigned long int</td>
<td>8bytes</td>
<td>0 to 18,446,744,073,709,551,615</td>
</tr>
<tr>
<td>float</td>
<td>4bytes</td>
<td>+/- 3.4e +/- 38 (~7 digits)</td>
</tr>
<tr>
<td>double</td>
<td>8bytes</td>
<td>+/- 1.7e +/- 308 (~15 digits)</td>
</tr>
<tr>
<td>long double</td>
<td>8bytes</td>
<td>+/- 1.7e +/- 308 (~15 digits)</td>
</tr>
<tr>
<td>wchar_t</td>
<td>2 or 4 bytes</td>
<td>1 wide character</td>
</tr>
</tbody></table>
<p>The sizes of variables might be different from those shown in the above table, depending on the compiler and the computer you are using.</p>
<p>Following is the example, which will produce correct size of various data types on your computer.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of char : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of int : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of short int : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">short</span><span class="pln"> </span><span class="kwd">int</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of long int : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">long</span><span class="pln"> </span><span class="kwd">int</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of float : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">float</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of double : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">double</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Size of wchar_t : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="typ">wchar_t</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This example uses  <b>endl</b>, which inserts a new-line character after every line and &lt;&lt; operator is being used to pass multiple values out to the screen. We are also using <b>sizeof()</b> operator to get size of various data types.</p>
<p>When the above code is compiled and executed, it produces the following result which can vary from machine to machine −</p>
<pre class="result notranslate">Size of char : 1
Size of int : 4
Size of short int : 2
Size of long int : 8
Size of float : 4
Size of double : 8
Size of wchar_t : 4
</pre>
<h4>typedef Declarations:</h4>
<p>You can create a new name for an existing type using <b>typedef</b>. Following is the simple syntax to define a new type using typedef:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">typedef</span><span class="pln"> type newname</span><span class="pun">;</span><span class="pln"> </span></pre>
<p>For example, the following tells the compiler that feet is another name for int:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">typedef</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> feet</span><span class="pun">;</span></pre>
<p>Now, the following declaration is perfectly legal and creates an integer variable called distance:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">feet distance</span><span class="pun">;</span></pre>
<h4>Enumerated Types:</h4>
<p>An enumerated type declares an optional type name  and a set of zero or more identifiers that can be used as values of the type. Each enumerator is a constant whose type is the enumeration.</p>
<p>To create an enumeration requires the use of the keyword <b>enum</b>. The general form of an enumeration type is:</p>
<pre class="result notranslate">enum enum-name { list of names } var-list; 
</pre>
<p>Here, the enum-name is the enumeration's type name. The list of names is comma separated.</p>
<p>For example, the following code defines an enumeration of colors called colors and the variable c of type color. Finally, c is assigned the value "blue".</p>
<pre class="result notranslate">enum color { red, green, blue } c;
c = blue;
</pre>
<p>By default, the value of the first name is 0, the second name has the value 1, the third has the value 2, and so on. But you can give a name a specific value by adding an initializer. For example, in the following enumeration, <b>green</b> will have the value 5.</p>
<pre class="result notranslate">enum color { red, green=5, blue };
</pre>
<p>Here, <b>blue</b> will have a value of 6 because each name will be one greater than the one that precedes it.</p>






<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="229_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="231_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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