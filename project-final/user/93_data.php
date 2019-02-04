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
	$sid=93;
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




<p>In this chapter, we will discuss arrays in PL/SQL. The PL/SQL programming language provides a data structure called the <b>VARRAY</b>, which can store a fixed-size sequential collection of elements of the same type. A varray is used to store an ordered collection of data, however it is often better to think of an array as a collection of variables of the same type.</p>
<p>All varrays consist of contiguous memory locations. The lowest address corresponds to the first element and the highest address to the last element.</p>
<img src="images/varrays.jpg" alt="Varrays in PL/SQL">

<p>An array is a part of collection type data and it stands for variable-size arrays. We will study other collection types in a later chapter <b>'PL/SQL Collections'</b>.</p>
<p>Each element in a <b>varray</b> has an index associated with it. It also has a maximum size that can be changed dynamically.</p>
<h4>Creating a Varray Type</h4>
<p>A varray type is created with the <b>CREATE TYPE</b> statement. You must specify the maximum size and the type of elements stored in the varray.</p>
<p>The basic syntax for creating a VARRAY type at the schema level is −</p>
<pre class="result notranslate">CREATE OR REPLACE TYPE varray_type_name IS VARRAY(n) of &lt;element_type&gt;
</pre>
<p>Where,</p>
<ul class="list">
<li><i>varray_type_name</i> is a valid attribute name,</li>
<li><i>n</i> is the number of elements (maximum) in the varray,</li>
<li><i>element_type</i> is the data type of the elements of the array.</li>
</ul>
<p>Maximum size of a varray can be changed using the <b>ALTER TYPE</b> statement.</p>
<p>For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE </span><span class="typ">Or</span><span class="pln"> REPLACE TYPE namearray AS VARRAY</span><span class="pun">(</span><span class="lit">3</span><span class="pun">)</span><span class="pln"> OF VARCHAR2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> 

</span><span class="typ">Type</span><span class="pln"> created</span><span class="pun">.</span></pre>
<p>The basic syntax for creating a VARRAY type within a PL/SQL block is −</p>
<p>
</p>
<pre class="result notranslate">TYPE varray_type_name IS VARRAY(n) of &lt;element_type&gt;
</pre>
<p>For example −</p>

<pre class="prettyprint notranslate prettyprinted"><span class="pln">TYPE namearray IS VARRAY</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> OF VARCHAR2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">);</span><span class="pln"> 
</span><span class="typ">Type</span><span class="pln"> grades IS VARRAY</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> OF INTEGER</span><span class="pun">;</span></pre>
<p>Let us now work out on a few examples to understand the concept −</p>
<h5>Example 1</h5>
<p>The following program illustrates the use of varrays −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   type namesarray IS VARRAY</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> OF VARCHAR2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">);</span><span class="pln"> 
   type grades IS VARRAY</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> OF INTEGER</span><span class="pun">;</span><span class="pln"> 
   names namesarray</span><span class="pun">;</span><span class="pln"> 
   marks grades</span><span class="pun">;</span><span class="pln"> 
   total integer</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   names </span><span class="pun">:=</span><span class="pln"> namesarray</span><span class="pun">(</span><span class="str">'Kavita'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Pritam'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Ayan'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Rishav'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Aziz'</span><span class="pun">);</span><span class="pln"> 
   marks</span><span class="pun">:=</span><span class="pln"> grades</span><span class="pun">(</span><span class="lit">98</span><span class="pun">,</span><span class="pln"> </span><span class="lit">97</span><span class="pun">,</span><span class="pln"> </span><span class="lit">78</span><span class="pun">,</span><span class="pln"> </span><span class="lit">87</span><span class="pun">,</span><span class="pln"> </span><span class="lit">92</span><span class="pun">);</span><span class="pln"> 
   total </span><span class="pun">:=</span><span class="pln"> names</span><span class="pun">.</span><span class="pln">count</span><span class="pun">;</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Total '</span><span class="pun">||</span><span class="pln"> total </span><span class="pun">||</span><span class="pln"> </span><span class="str">' Students'</span><span class="pun">);</span><span class="pln"> 
   FOR i </span><span class="kwd">in</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">..</span><span class="pln"> total LOOP 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Student: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> names</span><span class="pun">(</span><span class="pln">i</span><span class="pun">)</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> </span><span class="str">' 
      Marks: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> marks</span><span class="pun">(</span><span class="pln">i</span><span class="pun">));</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Total 5 Students 
Student: Kavita  Marks: 98 
Student: Pritam  Marks: 97 
Student: Ayan  Marks: 78 
Student: Rishav  Marks: 87 
Student: Aziz  Marks: 92 

PL/SQL procedure successfully completed. 
</pre>
<p><b>Please note</b> −</p>
<ul class="list">
<li><p>In Oracle environment, the starting index for varrays is always 1.</p></li>
<li><p>You can initialize the varray elements using the constructor method of the varray type, which has the same name as the varray.</p></li>
<li><p>Varrays are one-dimensional arrays.</p></li>
<li><p>A varray is automatically NULL when it is declared and must be initialized before its elements can be referenced.</p></li>
</ul>
<h5>Example 2</h5>
<p>Elements of a varray could also be a %ROWTYPE of any database table or %TYPE of any database table field. The following example illustrates the concept.</p>
<p>We will use the CUSTOMERS table stored in our database as −</p>
<pre class="result notranslate">Select * from customers;  

+----+----------+-----+-----------+----------+ 
| ID | NAME     | AGE | ADDRESS   | SALARY   | 
+----+----------+-----+-----------+----------+ 
|  1 | Ramesh   |  32 | Ahmedabad |  2000.00 | 
|  2 | Khilan   |  25 | Delhi     |  1500.00 | 
|  3 | kaushik  |  23 | Kota      |  2000.00 | 
|  4 | Chaitali |  25 | Mumbai    |  6500.00 | 
|  5 | Hardik   |  27 | Bhopal    |  8500.00 | 
|  6 | Komal    |  22 | MP        |  4500.00 | 
+----+----------+-----+-----------+----------+ 
</pre>
<p>Following example makes the use of <b>cursor</b>, which you will study in detail in a separate chapter.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   CURSOR c_customers </span><span class="kwd">is</span><span class="pln"> 
   SELECT  name FROM customers</span><span class="pun">;</span><span class="pln"> 
   type c_list </span><span class="kwd">is</span><span class="pln"> varray </span><span class="pun">(</span><span class="lit">6</span><span class="pun">)</span><span class="pln"> of customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
   name_list c_list </span><span class="pun">:=</span><span class="pln"> c_list</span><span class="pun">();</span><span class="pln"> 
   counter integer </span><span class="pun">:=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   FOR n IN c_customers LOOP 
      counter </span><span class="pun">:=</span><span class="pln"> counter </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln"> 
      name_list</span><span class="pun">.</span><span class="pln">extend</span><span class="pun">;</span><span class="pln"> 
      name_list</span><span class="pun">(</span><span class="pln">counter</span><span class="pun">)</span><span class="pln">  </span><span class="pun">:=</span><span class="pln"> n</span><span class="pun">.</span><span class="pln">name</span><span class="pun">;</span><span class="pln"> 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Customer('</span><span class="pun">||</span><span class="pln">counter </span><span class="pun">||</span><span class="str">'):'</span><span class="pun">||</span><span class="pln">name_list</span><span class="pun">(</span><span class="pln">counter</span><span class="pun">));</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Customer</span><span class="pun">(</span><span class="lit">1</span><span class="pun">):</span><span class="pln"> </span><span class="typ">Ramesh</span><span class="pln">  
</span><span class="typ">Customer</span><span class="pun">(</span><span class="lit">2</span><span class="pun">):</span><span class="pln"> </span><span class="typ">Khilan</span><span class="pln">  
</span><span class="typ">Customer</span><span class="pun">(</span><span class="lit">3</span><span class="pun">):</span><span class="pln"> kaushik     
</span><span class="typ">Customer</span><span class="pun">(</span><span class="lit">4</span><span class="pun">):</span><span class="pln"> </span><span class="typ">Chaitali</span><span class="pln">  
</span><span class="typ">Customer</span><span class="pun">(</span><span class="lit">5</span><span class="pun">):</span><span class="pln"> </span><span class="typ">Hardik</span><span class="pln">  
</span><span class="typ">Customer</span><span class="pun">(</span><span class="lit">6</span><span class="pun">):</span><span class="pln"> </span><span class="typ">Komal</span><span class="pln">  

PL</span><span class="pun">/</span><span class="pln">SQL procedure successfully completed</span><span class="pun">.</span><span class="pln"> </span></pre>





</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="92_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="94_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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