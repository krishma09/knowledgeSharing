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
	$sid=101;
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




<p>In this chapter, we will discuss the Collections in PL/SQL. A collection is an ordered group of elements having the same data type. Each element is identified by a unique subscript that represents its position in the collection.</p>
<p>PL/SQL provides three collection types −</p>
<ul class="list">
<li>Index-by tables or Associative array</li>
<li>Nested table</li>
<li>Variable-size array or Varray</li>
</ul>
<p>Oracle documentation provides the following characteristics for each type of collections −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center; vertical-align:middle;">Collection Type</th>
<th style="text-align:center; vertical-align:middle;">Number of Elements</th>
<th style="text-align:center; vertical-align:middle;">Subscript Type</th>
<th style="text-align:center; vertical-align:middle;">Dense or Sparse</th>
<th style="text-align:center; vertical-align:middle;">Where Created</th>
<th style="text-align:center; vertical-align:middle;">Can Be Object Type Attribute</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">Associative array (or index-by table)</td>
<td style="text-align:center; vertical-align:middle;">Unbounded</td>
<td style="text-align:center; vertical-align:middle;">String or integer</td>
<td style="text-align:center; vertical-align:middle;">Either</td>
<td style="vertical-align:middle;">Only in PL/SQL block</td>
<td style="text-align:center; vertical-align:middle;">No</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">Nested table</td>
<td style="text-align:center; vertical-align:middle;">Unbounded</td>
<td style="text-align:center; vertical-align:middle;">Integer</td>
<td style="text-align:center; vertical-align:middle;">Starts dense, can become sparse</td>
<td style="vertical-align:middle;">Either in PL/SQL block or at schema level</td>
<td style="text-align:center; vertical-align:middle;">Yes</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">Variablesize array (Varray)</td>
<td style="text-align:center; vertical-align:middle;">Bounded</td>
<td style="text-align:center; vertical-align:middle;">Integer</td>
<td style="text-align:center; vertical-align:middle;">Always dense</td>
<td style="vertical-align:middle;">Either in PL/SQL block or at schema level</td>
<td style="text-align:center; vertical-align:middle;">Yes</td>
</tr>
</tbody></table>
<p>We have already discussed varray in the chapter <b>'PL/SQL arrays'</b>. In this chapter, we will discuss the PL/SQL tables.</p>
<p>Both types of PL/SQL tables, i.e., the index-by tables and the nested tables have the same structure and their rows are accessed using the subscript notation. However, these two types of tables differ in one aspect; the nested tables can be stored in a database column and the index-by tables cannot.</p>
<h4>Index-By Table</h4>
<p>An <b>index-by</b> table (also called an <b>associative array</b>) is a set of <b>key-value</b> pairs. Each key is unique and is used to locate the corresponding value. The key can be either an integer or a string.</p>
<p>An index-by table is created using the following syntax. Here, we are creating an <b>index-by</b> table named <b>table_name</b>, the keys of which will be of the subscript_type and associated values will be of the <i>element_type</i></p>
<pre class="result notranslate">TYPE type_name IS TABLE OF element_type [NOT NULL] INDEX BY subscript_type; 
 
table_name type_name;
</pre>
<h5>Example</h5>
<p>Following example shows how to create a table to store integer values along with names and later it prints the same list of names.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   TYPE salary IS TABLE OF NUMBER INDEX BY VARCHAR2</span><span class="pun">(</span><span class="lit">20</span><span class="pun">);</span><span class="pln"> 
   salary_list salary</span><span class="pun">;</span><span class="pln"> 
   name   VARCHAR2</span><span class="pun">(</span><span class="lit">20</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="pun">--</span><span class="pln"> adding elements to the table 
   salary_list</span><span class="pun">(</span><span class="str">'Rajnish'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">62000</span><span class="pun">;</span><span class="pln"> 
   salary_list</span><span class="pun">(</span><span class="str">'Minakshi'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">75000</span><span class="pun">;</span><span class="pln"> 
   salary_list</span><span class="pun">(</span><span class="str">'Martin'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">100000</span><span class="pun">;</span><span class="pln"> 
   salary_list</span><span class="pun">(</span><span class="str">'James'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">78000</span><span class="pun">;</span><span class="pln">  
   
   </span><span class="pun">--</span><span class="pln"> printing the table 
   name </span><span class="pun">:=</span><span class="pln"> salary_list</span><span class="pun">.</span><span class="pln">FIRST</span><span class="pun">;</span><span class="pln"> 
   WHILE name IS NOT </span><span class="kwd">null</span><span class="pln"> LOOP 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line 
      </span><span class="pun">(</span><span class="str">'Salary of '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> name </span><span class="pun">||</span><span class="pln"> </span><span class="str">' is '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> TO_CHAR</span><span class="pun">(</span><span class="pln">salary_list</span><span class="pun">(</span><span class="pln">name</span><span class="pun">)));</span><span class="pln"> 
      name </span><span class="pun">:=</span><span class="pln"> salary_list</span><span class="pun">.</span><span class="pln">NEXT</span><span class="pun">(</span><span class="pln">name</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Salary of James is 78000 
Salary of Martin is 100000 
Salary of Minakshi is 75000 
Salary of Rajnish is 62000  

PL/SQL procedure successfully completed.
</pre>
<h5>Example</h5>
<p>Elements of an index-by table could also be a <b>%ROWTYPE</b> of any database table or <b>%TYPE</b> of any database table field. The following example illustrates the concept. We will use the <b>CUSTOMERS</b> table stored in our database as −</p>
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
<p></p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   CURSOR c_customers </span><span class="kwd">is</span><span class="pln"> 
      </span><span class="kwd">select</span><span class="pln">  name </span><span class="kwd">from</span><span class="pln"> customers</span><span class="pun">;</span><span class="pln"> 
    
   TYPE c_list IS TABLE of customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type INDEX BY binary_integer</span><span class="pun">;</span><span class="pln"> 
   name_list c_list</span><span class="pun">;</span><span class="pln"> 
   counter integer </span><span class="pun">:=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   FOR n IN c_customers LOOP 
      counter </span><span class="pun">:=</span><span class="pln"> counter </span><span class="pun">+</span><span class="lit">1</span><span class="pun">;</span><span class="pln"> 
      name_list</span><span class="pun">(</span><span class="pln">counter</span><span class="pun">)</span><span class="pln">  </span><span class="pun">:=</span><span class="pln"> n</span><span class="pun">.</span><span class="pln">name</span><span class="pun">;</span><span class="pln"> 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Customer('</span><span class="pun">||</span><span class="pln">counter</span><span class="pun">||</span><span class="pln"> </span><span class="str">'):'</span><span class="pun">||</span><span class="pln">name_list</span><span class="pun">(</span><span class="pln">counter</span><span class="pun">));</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">  </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Customer(1): Ramesh  
Customer(2): Khilan  
Customer(3): kaushik     
Customer(4): Chaitali  
Customer(5): Hardik  
Customer(6): Komal  

PL/SQL procedure successfully completed
</pre>
















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="100_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="102_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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