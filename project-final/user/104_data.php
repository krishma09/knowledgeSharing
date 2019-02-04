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
	$sid=104;
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





<p>In this chapter, we will discuss the DBMS Output in PL/SQL. The <b>DBMS_OUTPUT</b> is a built-in package that enables you to display output, debugging information, and send messages from PL/SQL blocks, subprograms, packages, and triggers. We have already used this package throughout our tutorial.</p>
<p>Let us look at a small code snippet that will display all the user tables in the database. Try it in your database to list down all the table names −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">BEGIN</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line  </span><span class="pun">(</span><span class="pln">user </span><span class="pun">||</span><span class="pln"> </span><span class="str">' Tables in the database:'</span><span class="pun">);</span><span class="pln"> 
   FOR t IN </span><span class="pun">(</span><span class="pln">SELECT table_name FROM user_tables</span><span class="pun">)</span><span class="pln"> 
   LOOP 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln">t</span><span class="pun">.</span><span class="pln">table_name</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<h4>DBMS_OUTPUT Subprograms</h4>
<p>The DBMS_OUTPUT package has the following subprograms −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Subprogram &amp; Purpose</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>DBMS_OUTPUT.DISABLE;</b></p>
<p>Disables message output.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>DBMS_OUTPUT.ENABLE(buffer_size IN INTEGER DEFAULT 20000);</b></p>
<p>Enables message output. A NULL value of <b>buffer_size</b> represents unlimited buffer size.</p>
</td>
<td></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>DBMS_OUTPUT.GET_LINE (line OUT VARCHAR2, status OUT INTEGER);</b></p>
<p>Retrieves a single line of buffered information.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>DBMS_OUTPUT.GET_LINES (lines OUT CHARARR, numlines IN OUT INTEGER);</b></p>
<p>Retrieves an array of lines from the buffer.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">5</td>
<td><p><b>DBMS_OUTPUT.NEW_LINE;</b></p>
<p>Puts an end-of-line marker.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">6</td>
<td><p><b>DBMS_OUTPUT.PUT(item IN VARCHAR2);</b></p>
<p>Places a partial line in the buffer.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">7</td>
<td><p><b>DBMS_OUTPUT.PUT_LINE(item IN VARCHAR2);</b></p>
<p>Places a line in the buffer.</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   lines dbms_output</span><span class="pun">.</span><span class="pln">chararr</span><span class="pun">;</span><span class="pln"> 
   num_lines number</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="pun">--</span><span class="pln"> enable the buffer </span><span class="kwd">with</span><span class="pln"> </span><span class="kwd">default</span><span class="pln"> size </span><span class="lit">20000</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">enable</span><span class="pun">;</span><span class="pln"> 
   
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Hello Reader!'</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Hope you have enjoyed the tutorials!'</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Have a great time exploring pl/sql!'</span><span class="pun">);</span><span class="pln"> 
  
   num_lines </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">3</span><span class="pun">;</span><span class="pln"> 
  
   dbms_output</span><span class="pun">.</span><span class="pln">get_lines</span><span class="pun">(</span><span class="pln">lines</span><span class="pun">,</span><span class="pln"> num_lines</span><span class="pun">);</span><span class="pln"> 
  
   FOR i IN </span><span class="lit">1.</span><span class="pun">.</span><span class="pln">num_lines LOOP 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="pln">lines</span><span class="pun">(</span><span class="pln">i</span><span class="pun">));</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> LOOP</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">  </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Hello Reader! 
Hope you have enjoyed the tutorials! 
Have a great time exploring pl/sql!  

PL/SQL procedure successfully completed.
</pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="103_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="105_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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