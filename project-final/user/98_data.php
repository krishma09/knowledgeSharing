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
	$sid=98;
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





<p>In this chapter, we will discuss Exceptions in PL/SQL. An exception is an error condition during a program execution. PL/SQL supports programmers to catch such conditions using <b>EXCEPTION</b> block in the program and an appropriate action is taken against the error condition. There are two types of exceptions −</p>
<ul class="list">
<li>System-defined exceptions</li>
<li>User-defined exceptions</li>
</ul>
<h4>Syntax for Exception Handling</h4>
<p>The general syntax for exception handling is as follows. Here you can list down as many exceptions as you can handle. The default exception will be handled using <b><i>WHEN others THEN</i></b> −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   </span><span class="pun">&lt;</span><span class="pln">declarations section</span><span class="pun">&gt;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="pun">&lt;</span><span class="pln">executable command</span><span class="pun">(</span><span class="pln">s</span><span class="pun">)&gt;</span><span class="pln"> 
EXCEPTION 
   </span><span class="pun">&lt;</span><span class="pln">exception handling goes here </span><span class="pun">&gt;</span><span class="pln"> 
   WHEN exception1 THEN  
      exception1</span><span class="pun">-</span><span class="pln">handling</span><span class="pun">-</span><span class="pln">statements  
   WHEN exception2  THEN  
      exception2</span><span class="pun">-</span><span class="pln">handling</span><span class="pun">-</span><span class="pln">statements  
   WHEN exception3 THEN  
      exception3</span><span class="pun">-</span><span class="pln">handling</span><span class="pun">-</span><span class="pln">statements 
   </span><span class="pun">........</span><span class="pln"> 
   WHEN others THEN 
      exception3</span><span class="pun">-</span><span class="pln">handling</span><span class="pun">-</span><span class="pln">statements 
</span><span class="kwd">END</span><span class="pun">;</span></pre>
<h5>Example</h5>
<p>Let us write a code to illustrate the concept. We will be using the CUSTOMERS table we had created and used in the previous chapters −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   c_id customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">8</span><span class="pun">;</span><span class="pln"> 
   c_name  customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
   c_addr customers</span><span class="pun">.</span><span class="pln">address</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   SELECT  name</span><span class="pun">,</span><span class="pln"> address INTO  c_name</span><span class="pun">,</span><span class="pln"> c_addr 
   FROM customers 
   WHERE id </span><span class="pun">=</span><span class="pln"> c_id</span><span class="pun">;</span><span class="pln">  
   DBMS_OUTPUT</span><span class="pun">.</span><span class="pln">PUT_LINE </span><span class="pun">(</span><span class="str">'Name: '</span><span class="pun">||</span><span class="pln">  c_name</span><span class="pun">);</span><span class="pln"> 
   DBMS_OUTPUT</span><span class="pun">.</span><span class="pln">PUT_LINE </span><span class="pun">(</span><span class="str">'Address: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c_addr</span><span class="pun">);</span><span class="pln"> 

EXCEPTION 
   WHEN no_data_found THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'No such customer!'</span><span class="pun">);</span><span class="pln"> 
   WHEN others THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Error!'</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">No such customer!  

PL/SQL procedure successfully completed. 
</pre>
<p>The above program displays the name and address of a customer whose ID is given. Since there is no customer with ID value 8 in our database, the program raises the run-time exception <b>NO_DATA_FOUND</b>, which is captured in the <b>EXCEPTION block</b>.</p>
<h4>Raising Exceptions</h4>
<p>Exceptions are raised by the database server automatically whenever there is any internal database error, but exceptions can be raised explicitly by the programmer by using the command <b>RAISE</b>. Following is the simple syntax for raising an exception −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   exception_name EXCEPTION</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   IF condition THEN 
      RAISE exception_name</span><span class="pun">;</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> IF</span><span class="pun">;</span><span class="pln"> 
EXCEPTION 
   WHEN exception_name THEN 
   statement</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> </span></pre>
<p>You can use the above syntax in raising the Oracle standard exception or any user-defined exception. In the next section, we will give you an example on raising a user-defined exception. You can raise the Oracle standard exceptions in a similar way.</p>
<h4>User-defined Exceptions</h4>
<p>PL/SQL allows you to define your own exceptions according to the need of your program. A user-defined exception must be declared and then raised explicitly, using either a RAISE statement or the procedure <b>DBMS_STANDARD.RAISE_APPLICATION_ERROR</b>.</p>
<p>The syntax for declaring an exception is −</p>
<pre class="result notranslate">DECLARE 
   my-exception EXCEPTION; 
</pre>
<h5>Example</h5>
<p>The following example illustrates the concept. This program asks for a customer ID, when the user enters an invalid ID, the exception <b>invalid_id</b> is raised.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   c_id customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type </span><span class="pun">:=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">cc_id</span><span class="pun">;</span><span class="pln"> 
   c_name  customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
   c_addr customers</span><span class="pun">.</span><span class="pln">address</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln">  
   </span><span class="pun">--</span><span class="pln"> user </span><span class="kwd">defined</span><span class="pln"> exception 
   ex_invalid_id  EXCEPTION</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   IF c_id </span><span class="pun">&lt;=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> THEN 
      RAISE ex_invalid_id</span><span class="pun">;</span><span class="pln"> 
   ELSE 
      SELECT  name</span><span class="pun">,</span><span class="pln"> address INTO  c_name</span><span class="pun">,</span><span class="pln"> c_addr 
      FROM customers 
      WHERE id </span><span class="pun">=</span><span class="pln"> c_id</span><span class="pun">;</span><span class="pln">
      DBMS_OUTPUT</span><span class="pun">.</span><span class="pln">PUT_LINE </span><span class="pun">(</span><span class="str">'Name: '</span><span class="pun">||</span><span class="pln">  c_name</span><span class="pun">);</span><span class="pln">  
      DBMS_OUTPUT</span><span class="pun">.</span><span class="pln">PUT_LINE </span><span class="pun">(</span><span class="str">'Address: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c_addr</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> IF</span><span class="pun">;</span><span class="pln"> 

EXCEPTION 
   WHEN ex_invalid_id THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'ID must be greater than zero!'</span><span class="pun">);</span><span class="pln"> 
   WHEN no_data_found THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'No such customer!'</span><span class="pun">);</span><span class="pln"> 
   WHEN others THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Error!'</span><span class="pun">);</span><span class="pln">  
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Enter value for cc_id: -6 (let's enter a value -6) 
old  2: c_id customers.id%type := &amp;cc_id; 
new  2: c_id customers.id%type := -6; 
ID must be greater than zero! 
 
PL/SQL procedure successfully completed. 
<p>When the above code is executed at the SQL prompt, it produces the following result −</p></pre>

















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="97_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="99_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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