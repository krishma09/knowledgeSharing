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
	$sid=100;
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




<p>In this chapter, we will discuss the Packages in PL/SQL. Packages are schema objects that groups logically related PL/SQL types, variables, and subprograms.</p>
<p>A package will have two mandatory parts −</p>
<ul class="list">
<li>Package specification</li>
<li>Package body or definition</li>
</ul>
<h4>Package Specification</h4> 
<p>The specification is the interface to the package. It just <b>DECLARES</b> the types, variables, constants, exceptions, cursors, and subprograms that can be referenced from outside the package. In other words, it contains all information about the content of the package, but excludes the code for the subprograms.</p>
<p>All objects placed in the specification are called <b>public</b> objects. Any subprogram not in the package specification but coded in the package body is called a <b>private</b> object.</p>
<p>The following code snippet shows a package specification having a single procedure. You can have many global variables defined and multiple procedures or functions inside a package.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE PACKAGE cust_sal AS 
   PROCEDURE find_sal</span><span class="pun">(</span><span class="pln">c_id customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pln"> cust_sal</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Package created.
</pre>
<h4>Package Body</h4>
<p>The package body has the codes for various methods declared in the package specification and other private declarations, which are hidden from the code outside the package.</p>
<p>The <b>CREATE PACKAGE BODY</b> Statement is used for creating the package body. The following code snippet shows the package body declaration for the <b><i>cust_sal</i></b> package created above. I assumed that we already have CUSTOMERS table created in our database as mentioned in the <a href="/plsql/plsql_variable_types.htm">PL/SQL - Variables</a> chapter.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE PACKAGE BODY cust_sal AS  
   
   PROCEDURE find_sal</span><span class="pun">(</span><span class="pln">c_id customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">TYPE</span><span class="pun">)</span><span class="pln"> IS 
   c_sal customers</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">%</span><span class="pln">TYPE</span><span class="pun">;</span><span class="pln"> 
   </span><span class="kwd">BEGIN</span><span class="pln"> 
      SELECT salary INTO c_sal 
      FROM customers 
      WHERE id </span><span class="pun">=</span><span class="pln"> c_id</span><span class="pun">;</span><span class="pln"> 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Salary: '</span><span class="pun">||</span><span class="pln"> c_sal</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> find_sal</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pln"> cust_sal</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Package body created.
</pre>
<h4>Using the Package Elements</h4>

<p>The package elements (variables, procedures or functions) are accessed with the following syntax −</p>
<pre class="result notranslate">package_name.element_name;
<p>The package elements (variables, procedures or functions) are accessed with the following syntax −</p></pre>
<p>Consider, we already have created the above package in our database schema, the following program uses the <b><i>find_sal</i></b> method of the <b><i>cust_sal</i></b> package −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   code customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type </span><span class="pun">:=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">cc_id</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   cust_sal</span><span class="pun">.</span><span class="pln">find_sal</span><span class="pun">(</span><span class="pln">code</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it prompts to enter the customer ID and when you enter an ID, it displays the corresponding salary as follows −</p><pre class="result notranslate">Enter value for cc_id: 1 
Salary: 3000 

PL/SQL procedure successfully completed. 
</pre>
<h5>Example</h5>
<p>The following program provides a more complete package. We will use the CUSTOMERS table stored in our database with the following records −</p>
<pre class="result notranslate">Select * from customers;  

+----+----------+-----+-----------+----------+ 
| ID | NAME     | AGE | ADDRESS   | SALARY   | 
+----+----------+-----+-----------+----------+ 
|  1 | Ramesh   |  32 | Ahmedabad |  3000.00 | 
|  2 | Khilan   |  25 | Delhi     |  3000.00 | 
|  3 | kaushik  |  23 | Kota      |  3000.00 | 
|  4 | Chaitali |  25 | Mumbai    |  7500.00 | 
|  5 | Hardik   |  27 | Bhopal    |  9500.00 | 
|  6 | Komal    |  22 | MP        |  5500.00 | 
+----+----------+-----+-----------+----------+
</pre>
<h5>The Package Specification</h5>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE PACKAGE c_package AS 
   </span><span class="pun">--</span><span class="pln"> </span><span class="typ">Adds</span><span class="pln"> a customer 
   PROCEDURE addCustomer</span><span class="pun">(</span><span class="pln">c_id   customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type</span><span class="pun">,</span><span class="pln"> 
   c_name  customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type</span><span class="pun">,</span><span class="pln"> 
   c_age  customers</span><span class="pun">.</span><span class="pln">age</span><span class="pun">%</span><span class="pln">type</span><span class="pun">,</span><span class="pln"> 
   c_addr customers</span><span class="pun">.</span><span class="pln">address</span><span class="pun">%</span><span class="pln">type</span><span class="pun">,</span><span class="pln">  
   c_sal  customers</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">%</span><span class="pln">type</span><span class="pun">);</span><span class="pln"> 
   
   </span><span class="pun">--</span><span class="pln"> </span><span class="typ">Removes</span><span class="pln"> a customer 
   PROCEDURE delCustomer</span><span class="pun">(</span><span class="pln">c_id  customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">TYPE</span><span class="pun">);</span><span class="pln"> 
   </span><span class="pun">--</span><span class="typ">Lists</span><span class="pln"> all customers 
   PROCEDURE listCustomer</span><span class="pun">;</span><span class="pln"> 
  
</span><span class="kwd">END</span><span class="pln"> c_package</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it creates the above package and displays the following result −</p>
<pre class="result notranslate">Package created.
</pre>

















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="99_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="101_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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