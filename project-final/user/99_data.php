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
	$sid=99;
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





<p>In this chapter, we will discuss Triggers in PL/SQL. Triggers are stored programs, which are automatically executed or fired when some events occur. Triggers are, in fact, written to be executed in response to any of the following events −</p>
<ul class="list">
<li><p>A <b>database manipulation (DML)</b> statement (DELETE, INSERT, or UPDATE)</p></li>
<li><p>A <b>database definition (DDL)</b> statement (CREATE, ALTER, or DROP).</p></li>
<li><p>A <b>database operation</b> (SERVERERROR, LOGON, LOGOFF, STARTUP, or SHUTDOWN).</p></li>
</ul>
<p>Triggers can be defined on the table, view, schema, or database with which the event is associated.</p>
<h5>Benefits of Triggers</h5>
<p>Triggers can be written for the following purposes −</p>
<ul class="list">
<li>Generating some derived column values automatically</li>
<li>Enforcing referential integrity</li>
<li>Event logging and storing information on table access</li>
<li>Auditing</li>
<li>Synchronous replication of tables</li>
<li>Imposing security authorizations</li>
<li>Preventing invalid transactions</li>
</ul>
<h4>Creating Triggers</h4>
<p>The syntax for creating a trigger is −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE </span><span class="pun">[</span><span class="pln">OR REPLACE </span><span class="pun">]</span><span class="pln"> TRIGGER trigger_name  
</span><span class="pun">{</span><span class="pln">BEFORE </span><span class="pun">|</span><span class="pln"> AFTER </span><span class="pun">|</span><span class="pln"> INSTEAD OF </span><span class="pun">}</span><span class="pln">  
</span><span class="pun">{</span><span class="pln">INSERT </span><span class="pun">[</span><span class="pln">OR</span><span class="pun">]</span><span class="pln"> </span><span class="pun">|</span><span class="pln"> UPDATE </span><span class="pun">[</span><span class="pln">OR</span><span class="pun">]</span><span class="pln"> </span><span class="pun">|</span><span class="pln"> DELETE</span><span class="pun">}</span><span class="pln">  
</span><span class="pun">[</span><span class="pln">OF col_name</span><span class="pun">]</span><span class="pln">  
ON table_name  
</span><span class="pun">[</span><span class="pln">REFERENCING OLD AS o NEW AS n</span><span class="pun">]</span><span class="pln">  
</span><span class="pun">[</span><span class="pln">FOR EACH ROW</span><span class="pun">]</span><span class="pln">  
WHEN </span><span class="pun">(</span><span class="pln">condition</span><span class="pun">)</span><span class="pln">   
DECLARE 
   </span><span class="typ">Declaration</span><span class="pun">-</span><span class="pln">statements 
</span><span class="kwd">BEGIN</span><span class="pln">  
   </span><span class="typ">Executable</span><span class="pun">-</span><span class="pln">statements 
EXCEPTION 
   </span><span class="typ">Exception</span><span class="pun">-</span><span class="pln">handling</span><span class="pun">-</span><span class="pln">statements 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> </span></pre>
<p>Where,</p>
<ul class="list">
<li><p>CREATE [OR REPLACE] TRIGGER trigger_name − Creates or replaces an existing trigger with the <i>trigger_name</i>.</p></li>
<li><p>{BEFORE | AFTER | INSTEAD OF} − This specifies when the trigger will be executed. The INSTEAD OF clause is used for creating trigger on a view.</p></li>
<li><p>{INSERT [OR] | UPDATE [OR] | DELETE} − This specifies the DML operation.</p></li>
<li><p>[OF col_name] − This specifies the column name that will be updated.</p></li>
<li><p>[ON table_name] − This specifies the name of the table associated with the trigger.</p></li>
<li><p>[REFERENCING OLD AS o NEW AS n] − This allows you to refer new and old values for various DML statements, such as INSERT, UPDATE, and DELETE.</p></li>
<li><p>[FOR EACH ROW] − This specifies a row-level trigger, i.e., the trigger will be executed for each row being affected. Otherwise the trigger will execute just once when the SQL statement is executed, which is called a table level trigger.</p></li>
<li><p>WHEN (condition) − This provides a condition for rows for which the trigger would fire. This clause is valid only for row-level triggers.</p></li>
</ul>
<h5>Example</h5>
<p>To start with, we will be using the CUSTOMERS table we had created and used in the previous chapters −</p>
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
<p>The following program creates a <b>row-level</b> trigger for the customers table that would fire for INSERT or UPDATE or DELETE operations performed on the CUSTOMERS table. This trigger will display the salary difference between the old values and new values −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE TRIGGER display_salary_changes 
BEFORE DELETE OR INSERT OR UPDATE ON customers 
FOR EACH ROW 
WHEN </span><span class="pun">(</span><span class="pln">NEW</span><span class="pun">.</span><span class="pln">ID </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> 
DECLARE 
   sal_diff number</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   sal_diff </span><span class="pun">:=</span><span class="pln"> </span><span class="pun">:</span><span class="pln">NEW</span><span class="pun">.</span><span class="pln">salary  </span><span class="pun">-</span><span class="pln"> </span><span class="pun">:</span><span class="pln">OLD</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">;</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Old salary: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> </span><span class="pun">:</span><span class="pln">OLD</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'New salary: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> </span><span class="pun">:</span><span class="pln">NEW</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Salary difference: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> sal_diff</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Trigger created.
</pre>
<p>The following points need to be considered here −</p>
<ul class="list">
<li><p>OLD and NEW references are not available for table-level triggers, rather you can use them for record-level triggers.</p></li>
<li><p>If you want to query the table in the same trigger, then you should use the AFTER keyword, because triggers can query the table or change it again only after the initial changes are applied and the table is back in a consistent state.</p></li>
<li><p>The above trigger has been written in such a way that it will fire before any DELETE or INSERT or UPDATE operation on the table, but you can write your trigger on a single or multiple operations, for example BEFORE DELETE, which will fire whenever a record will be deleted using the DELETE operation on the table.</p></li>
</ul>

















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="98_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="100_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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