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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=80;
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





<p>The Date object is a datatype built into the JavaScript language. Date objects are created with the <b>new Date( )</b> as shown below.</p>
<p>Once a Date object is created, a number of methods allow you to operate on it. Most methods simply allow you to get and set the year, month, day, hour, minute, second, and millisecond fields of the object, using either local time or UTC (universal, or GMT) time.</p>
<p>The ECMAScript standard requires the Date object to be able to represent any date and time, to millisecond precision, within 100 million days before or after 1/1/1970. This is a range of plus or minus 273,785 years, so JavaScript can represent date and time till the year 275755.</p>
<h5>Syntax</h5>
<p>You can use any of the following syntaxes to create a Date object using Date() constructor.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln">
</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="pln">milliseconds</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="pln">datestring</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="pln">year</span><span class="pun">,</span><span class="pln">month</span><span class="pun">,</span><span class="pln">date</span><span class="pun">[,</span><span class="pln">hour</span><span class="pun">,</span><span class="pln">minute</span><span class="pun">,</span><span class="pln">second</span><span class="pun">,</span><span class="pln">millisecond </span><span class="pun">])</span></pre>
<p><b>Note</b> − Parameters in the brackets are always optional.</p>
<p>Here is a description of the parameters −</p>
<ul class="list">
<li><p><b>No Argument</b> − With no arguments, the Date() constructor creates a Date object set to the current date and time.</p></li>
<li><p><b>milliseconds</b> − When one numeric argument is passed, it is taken as the internal numeric representation of the date in milliseconds, as returned by the getTime() method. For example, passing the argument 5000 creates a date that represents five seconds past midnight on 1/1/70.</p></li>
<li><p><b>datestring</b> − When one string argument is passed, it is a string representation of a date, in the format accepted by the <b>Date.parse()</b> method.</p></li>
<li><p><b>7 agruments</b> − To use the last form of the constructor shown above. Here is a description of each argument:</p></li>
<ul class="list">
<li><p><b>year</b> − Integer value representing the year. For compatibility (in order to avoid the Y2K problem), you should always specify the year in full; use 1998, rather than 98.</p></li>
<li><p><b>month</b> − Integer value representing the month, beginning with 0 for January to 11 for December.</p></li>
<li><p><b>date</b> − Integer value representing the day of the month.</p></li>
<li><p><b>hour</b> − Integer value representing the hour of the day (24-hour scale).</p></li>
<li><p><b>minute</b> − Integer value representing the minute segment of a time reading.</p></li>
<li><p><b>second</b> − Integer value representing the second segment of a time reading.</p></li>
<li><p><b>millisecond</b> − Integer value representing the millisecond segment of a time reading.</p></li>
</ul>
</ul>
<h4>Date Properties</h4>
<p>Here is a list of the properties of the Date object along with their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/date_constructor.htm">constructor</a></p></td>
<td>Specifies the function that creates an object's prototype.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to demonstrate the usage of different Date properties.</p>
<h4>Date Methods</h4>
<p>Here is a list of the methods used with <b>Date</b> and their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="30%">Method</th>
<th width="70%">Description</th></tr>
<tr><td><p><a href="/javascript/date_date.htm">Date()</a></p></td>
<td>Returns today's date and time</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getdate.htm">getDate()</a></p></td>
<td>Returns the day of the month for the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getday.htm">getDay()</a></p></td>
<td>Returns the day of the week for the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getfullyear.htm">getFullYear()</a></p></td>
<td>Returns the year of the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gethours.htm">getHours()</a></p></td>
<td>Returns the hour in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getmilliseconds.htm">getMilliseconds()</a></p></td>
<td>Returns the milliseconds in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getminutes.htm">getMinutes()</a></p></td>
<td>Returns the minutes in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getmonth.htm">getMonth()</a></p></td>
<td>Returns the month in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getseconds.htm">getSeconds()</a></p></td>
<td>Returns the seconds in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gettime.htm">getTime()</a></p></td>
<td>Returns the numeric value of the specified date as the number of milliseconds since January 1, 1970, 00:00:00 UTC.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gettimezoneoffset.htm">getTimezoneOffset()</a></p></td>
<td>Returns the time-zone offset in minutes for the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcdate.htm">getUTCDate()</a></p></td>
<td>Returns the day (date) of the month in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcday.htm">getUTCDay()</a></p></td>
<td>Returns the day of the week in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcfullyear.htm">getUTCFullYear()</a></p></td>
<td>Returns the year in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutchours.htm">getUTCHours()</a></p></td>
<td>Returns the hours in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcmilliseconds.htm">getUTCMilliseconds()</a></p></td>
<td>Returns the milliseconds in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcminutes.htm">getUTCMinutes()</a></p></td>
<td>Returns the minutes in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcmonth.htm">getUTCMonth()</a></p></td>
<td>Returns the month in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcseconds.htm">getUTCSeconds()</a></p></td>
<td>Returns the seconds in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getyear.htm">getYear()</a></p></td>
<td><b>Deprecated</b> - Returns the year in the specified date according to local time. Use getFullYear instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setdate.htm">setDate()</a></p></td>
<td>Sets the day of the month for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setfullyear.htm">setFullYear()</a></p></td>
<td>Sets the full year for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_sethours.htm">setHours()</a></p></td>
<td>Sets the hours for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setmilliseconds.htm">setMilliseconds()</a></p></td>
<td>Sets the milliseconds for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setminutes.htm">setMinutes()</a></p></td>
<td>Sets the minutes for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setmonth.htm">setMonth()</a></p></td>
<td>Sets the month for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setseconds.htm">setSeconds()</a></p></td>
<td>Sets the seconds for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_settime.htm">setTime()</a></p></td>
<td>Sets the Date object to the time represented by a number of milliseconds since January 1, 1970, 00:00:00 UTC.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcdate.htm">setUTCDate()</a></p></td>
<td>Sets the day of the month for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcfullyear.htm">setUTCFullYear()</a></p></td>
<td>Sets the full year for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutchours.htm">setUTCHours()</a></p></td>
<td>Sets the hour for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcmilliseconds.htm">setUTCMilliseconds()</a></p></td>
<td>Sets the milliseconds for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcminutes.htm">setUTCMinutes()</a></p></td>
<td>Sets the minutes for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcmonth.htm">setUTCMonth()</a></p></td>
<td>Sets the month for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcseconds.htm">setUTCSeconds()</a></p></td>
<td>Sets the seconds for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setyear.htm">setYear()</a></p></td>
<td><b>Deprecated - </b> Sets the year for a specified date according to local time. Use setFullYear instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_todatestring.htm">toDateString()</a></p></td>
<td>Returns the "date" portion of the Date as a human-readable string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_togmtstring.htm">toGMTString()</a></p></td>
<td><b>Deprecated - </b> Converts a date to a string, using the Internet GMT conventions. Use toUTCString instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaledatestring.htm">toLocaleDateString()</a></p></td>
<td>Returns the "date" portion of the Date as a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaleformat.htm">toLocaleFormat()</a></p></td>
<td>Converts a date to a string, using a format string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocalestring.htm">toLocaleString()</a></p></td>
<td>Converts a date to a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaletimestring.htm">toLocaleTimeString()</a></p></td>
<td>Returns the "time" portion of the Date as a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tosource.htm">toSource()</a></p></td>
<td>Returns a string representing the source for an equivalent Date object; you can use this value to create a new object.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the specified Date object.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_totimestring.htm">toTimeString()</a></p></td>
<td>Returns the "time" portion of the Date as a human-readable string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_toutcstring.htm">toUTCString()</a></p></td>
<td>Converts a date to a string, using the universal time convention.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_valueof.htm">valueOf()</a></p></td>
<td>Returns the primitive value of a Date object.</td>
</tr>
</tbody></table>
<p>Converts a date to a string, using the universal time convention.</p>
<h4>Date Static Methods</h4>
<p>In addition to the many instance methods listed previously, the Date object also defines two static methods. These methods are invoked through the Date() constructor itself.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="30%">Method</th>
<th width="70%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/date_parse.htm">Date.parse( )</a></p></td>
<td>Parses a string representation of a date and time and returns the internal millisecond representation of that date.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_utc.htm">Date.UTC( )</a></p></td>
<td>Returns the millisecond representation of the specified UTC date and time.</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to demonstrate the usages of Date Static methods.</p>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="79_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="81_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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