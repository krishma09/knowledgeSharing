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
	$sid=95;
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



<p>In this chapter, we will discuss the functions in PL/SQL. A function is same as a procedure except that it returns a value. Therefore, all the discussions of the previous chapter are true for functions too.</p>
<h4>Creating a Function</h4>
<p>A standalone function is created using the <b>CREATE FUNCTION</b> statement. The simplified syntax for the <b>CREATE OR REPLACE PROCEDURE</b> statement is as follows −</p>

<pre class="result notranslate">CREATE [OR REPLACE] FUNCTION function_name 
[(parameter_name [IN | OUT | IN OUT] type [, ...])] 
RETURN return_datatype 
{IS | AS} 
BEGIN 
   &lt; function_body &gt; 
END [function_name];
</pre>
<p>Where,</p>
<ul class="list">
<li><p><i>function-name</i> specifies the name of the function.</p></li>
<li><p>[OR REPLACE] option allows the modification of an existing function.</p></li>
<li><p>The optional parameter list contains name, mode and types of the parameters. IN represents the value that will be passed from outside and OUT represents the parameter that will be used to return a value outside of the procedure.</p></li>
<li><p>The function must contain a <b>return</b> statement.</p></li>
<li><p>The <i>RETURN</i> clause specifies the data type you are going to return from the function.</p></li>
<li><p><i>function-body</i> contains the executable part.</p></li>
<li><p>The AS keyword is used instead of the IS keyword for creating a standalone function.</p></li>
</ul>
<h5>Example</h5>
<p>The following example illustrates how to create and call a standalone function. This function returns the total number of CUSTOMERS in the customers table.</p>
<p>We will use the CUSTOMERS table, which we had created in the <a href="/plsql/plsql_variable_types.htm">PL/SQL Variables</a> chapter −</p>
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

<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE FUNCTION totalCustomers 
RETURN number IS 
   total number</span><span class="pun">(</span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   SELECT count</span><span class="pun">(*)</span><span class="pln"> </span><span class="kwd">into</span><span class="pln"> total 
   FROM customers</span><span class="pun">;</span><span class="pln"> 
    
   RETURN total</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed using the SQL prompt, it will produce the following result −</p>
<pre class="result notranslate">Function created.
</pre>
<h4>Calling a Function</h4>
<p>While creating a function, you give a definition of what the function has to do. To use a function, you will have to call that function to perform the defined task. When a program calls a function, the program control is transferred to the called function.</p>
<p>A called function performs the defined task and when its return statement is executed or when the <b>last end statement</b> is reached, it returns the program control back to the main program.</p>
<p>To call a function, you simply need to pass the required parameters along with the function name and if the function returns a value, then you can store the returned value. Following program calls the function <b>totalCustomers</b> from an anonymous block −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   c number</span><span class="pun">(</span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   c </span><span class="pun">:=</span><span class="pln"> totalCustomers</span><span class="pun">();</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Total no. of Customers: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Total no. of Customers: 6  

PL/SQL procedure successfully completed. 
</pre>
<h5>Example</h5>
<p>The following example demonstrates Declaring, Defining, and Invoking a Simple PL/SQL Function that computes and returns the maximum of two values.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   a number</span><span class="pun">;</span><span class="pln"> 
   b number</span><span class="pun">;</span><span class="pln"> 
   c number</span><span class="pun">;</span><span class="pln"> 
FUNCTION findMax</span><span class="pun">(</span><span class="pln">x IN number</span><span class="pun">,</span><span class="pln"> y IN number</span><span class="pun">)</span><span class="pln">  
RETURN number 
IS 
    z number</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   IF x </span><span class="pun">&gt;</span><span class="pln"> y THEN 
      z</span><span class="pun">:=</span><span class="pln"> x</span><span class="pun">;</span><span class="pln"> 
   ELSE 
      Z</span><span class="pun">:=</span><span class="pln"> y</span><span class="pun">;</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> IF</span><span class="pun">;</span><span class="pln">  
   RETURN z</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   a</span><span class="pun">:=</span><span class="pln"> </span><span class="lit">23</span><span class="pun">;</span><span class="pln"> 
   b</span><span class="pun">:=</span><span class="pln"> </span><span class="lit">45</span><span class="pun">;</span><span class="pln">  
   c </span><span class="pun">:=</span><span class="pln"> findMax</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">' Maximum of (23,45): '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Maximum of (23,45): 45   

PL/SQL procedure successfully completed. 
</pre>



</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="94_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="96_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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