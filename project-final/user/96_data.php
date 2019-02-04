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
	$sid=96;
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



<p>In this chapter, we will discuss the cursors in PL/SQL. Oracle creates a memory area, known as the context area, for processing an SQL statement, which contains all the information needed for processing the statement; for example, the number of rows processed, etc.</p>
<p>A <b>cursor</b> is a pointer to this context area. PL/SQL controls the context area through a cursor. A cursor holds the rows (one or more) returned by a SQL statement. The set of rows the cursor holds is referred to as the <b>active set</b>.</p>
<p>You can name a cursor so that it could be referred to in a program to fetch and process the rows returned by the SQL statement, one at a time. There are two types of cursors −</p>
<ul class="list">
<li>Implicit cursors</li>
<li>Explicit cursors</li>
</ul>
<h4>Implicit Cursors</h4>

<p>Implicit cursors are automatically created by Oracle whenever an SQL statement is executed, when there is no explicit cursor for the statement. Programmers cannot control the implicit cursors and the information in it.</p>
<p>Whenever a DML statement (INSERT, UPDATE and DELETE) is issued, an implicit cursor is associated with this statement. For INSERT operations, the cursor holds the data that needs to be inserted. For UPDATE and DELETE operations, the cursor identifies the rows that would be affected.</p>
<p>In PL/SQL, you can refer to the most recent implicit cursor as the <b>SQL cursor</b>, which always has attributes such as <b>%FOUND, %ISOPEN, %NOTFOUND</b>, and <b>%ROWCOUNT</b>. The SQL cursor has additional attributes, <b>%BULK_ROWCOUNT</b> and <b>%BULK_EXCEPTIONS</b>, designed for use with the <b>FORALL</b> statement. The following table provides the description of the most used attributes −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Attribute &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>%FOUND</b></p>
<p>Returns TRUE if an INSERT, UPDATE, or DELETE statement affected one or more rows or a SELECT INTO statement returned one or more rows. Otherwise, it returns FALSE.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>%NOTFOUND</b></p>
<p>The logical opposite of %FOUND. It returns TRUE if an INSERT, UPDATE, or DELETE statement affected no rows, or a SELECT INTO statement returned no rows. Otherwise, it returns FALSE.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>%ISOPEN</b></p>
<p>Always returns FALSE for implicit cursors, because Oracle closes the SQL cursor automatically after executing its associated SQL statement.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>%ROWCOUNT</b></p>
<p>Returns the number of rows affected by an INSERT, UPDATE, or DELETE statement, or returned by a SELECT INTO statement.</p></td>
</tr>
</tbody></table>
<p>Any SQL cursor attribute will be accessed as <b>sql%attribute_name</b> as shown below in the example.</p>
<h5>Example</h5>
<p>We will be using the CUSTOMERS table we had created and used in the previous chapters.</p>
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
<p>The following program will update the table and increase the salary of each customer by 500 and use the <b>SQL%ROWCOUNT</b> attribute to determine the number of rows affected −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE  
   total_rows number</span><span class="pun">(</span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   UPDATE customers 
   SET salary </span><span class="pun">=</span><span class="pln"> salary </span><span class="pun">+</span><span class="pln"> </span><span class="lit">500</span><span class="pun">;</span><span class="pln"> 
   IF sql</span><span class="pun">%</span><span class="pln">notfound THEN 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'no customers selected'</span><span class="pun">);</span><span class="pln"> 
   ELSIF sql</span><span class="pun">%</span><span class="pln">found THEN 
      total_rows </span><span class="pun">:=</span><span class="pln"> sql</span><span class="pun">%</span><span class="pln">rowcount</span><span class="pun">;</span><span class="pln">
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln"> total_rows </span><span class="pun">||</span><span class="pln"> </span><span class="str">' customers selected '</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> IF</span><span class="pun">;</span><span class="pln">  
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">      </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">6 customers selected  

PL/SQL procedure successfully completed. 
</pre>
<p>If you check the records in customers table, you will find that the rows have been updated −</p>
<pre class="result notranslate">Select * from customers;  

+----+----------+-----+-----------+----------+ 
| ID | NAME     | AGE | ADDRESS   | SALARY   | 
+----+----------+-----+-----------+----------+ 
|  1 | Ramesh   |  32 | Ahmedabad |  2500.00 | 
|  2 | Khilan   |  25 | Delhi     |  2000.00 | 
|  3 | kaushik  |  23 | Kota      |  2500.00 | 
|  4 | Chaitali |  25 | Mumbai    |  7000.00 | 
|  5 | Hardik   |  27 | Bhopal    |  9000.00 | 
|  6 | Komal    |  22 | MP        |  5000.00 | 
+----+----------+-----+-----------+----------+
</pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="95_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="97_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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