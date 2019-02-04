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
	$sid=103;
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




<p>In this chapter, we will discuss the Date and Time in PL/SQL. There are two classes of date and time related data types in PL/SQL −</p>
<ul class="list">
<li>Datetime data types</li>
<li>Interval data types</li>
</ul>
<p>The Datetime data types are −</p>
<ul class="list">
<li>DATE</li>
<li>TIMESTAMP</li>
<li>TIMESTAMP WITH TIME ZONE</li>
<li>TIMESTAMP WITH LOCAL TIME ZONE</li>
</ul>
<p>The Interval data types are −</p>
<ul class="list">
<li>INTERVAL YEAR TO MONTH</li>
<li>INTERVAL DAY TO SECOND</li>
</ul>
<h4>Field Values for Datetime and Interval Data Types</h4>
<p>Both <b>datetime</b> and <b>interval</b> data types consist of <b>fields</b>. The values of these fields determine the value of the data type. The following table lists the fields and their possible values for datetimes and intervals.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center; vertical-align:middle;">Field Name</th>
<th style="text-align:center; vertical-align:middle;">Valid Datetime Values</th>
<th style="text-align:center; vertical-align:middle;">Valid Interval Values</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">YEAR</td>
<td style="text-align:center; vertical-align:middle;">-4712 to 9999 (excluding year 0)</td>
<td style="text-align:center; vertical-align:middle;">Any nonzero integer</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">MONTH</td>
<td style="text-align:center; vertical-align:middle;">01 to 12</td>
<td style="text-align:center; vertical-align:middle;">0 to 11</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">DAY</td>
<td>01 to 31 (limited by the values of MONTH and YEAR, according to the rules of the calendar for the locale)</td>
<td style="text-align:center; vertical-align:middle;">Any nonzero integer</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">HOUR</td>
<td style="text-align:center; vertical-align:middle;">00 to 23</td>
<td style="text-align:center; vertical-align:middle;">0 to 23</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">MINUTE</td>
<td style="text-align:center; vertical-align:middle;">00 to 59</td>
<td style="text-align:center; vertical-align:middle;">0 to 59</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">SECOND</td>
<td><p>00 to 59.9(n), where 9(n) is the precision of time fractional seconds</p>
<p>The 9(n) portion is not applicable for DATE.</p>
</td>
<td style="text-align:center; vertical-align:middle;">0 to 59.9(n), where 9(n) is the precision of interval fractional seconds</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_HOUR</td>
<td><p>-12 to 14 (range accommodates daylight savings time changes)</p>
<p>Not applicable for DATE or TIMESTAMP.</p>
</td>
<td style="text-align:center; vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_MINUTE</td>
<td><p>00 to 59</p>
<p>Not applicable for DATE or TIMESTAMP.</p>
</td>
<td style="text-align:center; vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_REGION</td>
<td>Not applicable for DATE or TIMESTAMP.</td>
<td style="text-align:center; vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_ABBR</td>
<td>Not applicable for DATE or TIMESTAMP.</td>
<td style="text-align:center; vertical-align:middle;">Not applicable</td>
</tr>
</tbody></table>
<h4>The Datetime Data Types and Functions</h4>
<p>Following are the Datetime data types −</p>
<h5>DATE</h5>
<p>It stores date and time information in both character and number datatypes. It is made of information on century, year, month, date, hour, minute, and second. It is specified as −</p>
<h5>TIMESTAMP</h5>
<p>It is an extension of the DATE data type. It stores the year, month, and day of the DATE datatype, along with hour, minute, and second values. It is useful for storing precise time values.</p>
<h5>TIMESTAMP WITH TIME ZONE</h5>
<p>It is a variant of TIMESTAMP that includes a time zone region name or a time zone offset in its value. The time zone offset is the difference (in hours and minutes) between local time and UTC. This data type is useful for collecting and evaluating date information across geographic regions.</p>
<h5>TIMESTAMP WITH LOCAL TIME ZONE</h5>
<p>It is another variant of TIMESTAMP that includes a time zone offset in its value.</p>
<p>Following table provides the Datetime functions (where, x has the datetime value) −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Function Name &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>ADD_MONTHS(x, y);</b></p>
<p>Adds <b>y</b> months to <b>x</b>.</p> 
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>LAST_DAY(x);</b></p>
<p>Returns the last day of the month.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>MONTHS_BETWEEN(x, y);</b></p>
<p>Returns the number of months between <b>x</b> and <b>y</b>.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>NEXT_DAY(x, day);</b></p>
<p>Returns the datetime of the next <i>day</i> after <b>x</b>.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">5</td>
<td><p><b>NEW_TIME;</b></p>
<p>Returns the time/day value from a time zone specified by the user.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">6</td>
<td><p><b>ROUND(x [, unit]);</b></p>
<p>Rounds <b>x</b>.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">7</td>
<td><p><b>SYSDATE();</b></p>
<p>Returns the current datetime.</p>
</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">8</td>
<td><p><b>TRUNC(x [, unit]);</b></p>
<p>Truncates <b>x</b>.</p>
</td>
</tr>
</tbody></table>















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="102_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="104_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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