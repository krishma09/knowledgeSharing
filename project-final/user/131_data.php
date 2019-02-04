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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=131;
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



<p>Dates are so much part of everyday life that it becomes easy to work with them without thinking. PHP also provides powerful tools for date arithmetic that make manipulating dates easy.</p>
<h4>Converting a Time Stamp with date()</h4>
<p>The <b>date()</b> function returns a formatted string representing a date. You can exercise an enormous amount of control over the format that date() returns with a string argument that you must pass to it.</p>
<pre class="result notranslate">date(format,timestamp)
</pre>
<p>The date() optionally accepts a time stamp if omitted then current date and time will be used. Any other data you include in the format string passed to date() will be included in the return value.</p>
<p>Following table lists the codes that a format string can contain −</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th width="60%">Format &amp; Description</th>
<th width="20%">Example</th>
</tr>
<tr>
<td>1</td>
<td><p><b>a</b></p>
<p>'am' or 'pm' lowercase</p></td>
<td>pm</td>
</tr>
<tr>
<td>2</td>
<td><p><b>A</b></p>
<p>'AM' or 'PM' uppercase</p></td>
<td>PM</td>
</tr>
<tr>
<td>3</td>
<td><p><b>d</b></p>
<p>Day of month, a number with leading zeroes</p></td>
<td>20</td>
</tr>
<tr>
<td>4</td>
<td><p><b>D</b></p>
<p>Day of week (three letters)</p></td>
<td>Thu</td>
</tr>
<tr>
<td>5</td>
<td><p><b>F</b></p>
<p>Month name</p></td>
<td>January</td>
</tr>
<tr>
<td>6</td>
<td><p><b>h</b></p>
<p>Hour (12-hour format - leading zeroes)</p></td>
<td>12</td>
</tr>
<tr>
<td>7</td>
<td><p><b>H</b></p>
<p>Hour (24-hour format - leading zeroes)</p></td>
<td>22</td>
</tr>
<tr>
<td>8</td>
<td><p><b>g</b></p>
<p>Hour (12-hour format - no leading zeroes)</p></td>
<td>12</td>
</tr>
<tr>
<td>9</td>
<td><p><b>G</b></p>
<p>Hour (24-hour format - no leading zeroes)</p></td>
<td>22</td>
</tr>
<tr>
<td>10</td>
<td><p><b>i</b></p>
<p>Minutes ( 0 - 59 )</p></td>
<td>23</td>
</tr>
<tr>
<td>11</td>
<td><p><b>j</b></p>
<p>Day of the month (no leading zeroes</p></td>
<td>20</td>
</tr>
<tr>
<td>12</td>
<td><p><b>l (Lower 'L')</b></p>
<p>Day of the week</p></td>
<td>Thursday</td>
</tr>
<tr>
<td>13</td>
<td><p><b>L</b></p>
<p>Leap year ('1' for yes, '0' for no)</p></td>
<td>1</td>
</tr>
<tr>
<td>14</td>
<td><p><b>m</b></p>
<p>Month of year (number - leading zeroes)</p></td>
<td>1</td>
</tr>
<tr>
<td>15</td>
<td><p><b>M</b></p>
<p>Month of year (three letters)</p></td>
<td>Jan</td>
</tr>
<tr>
<td>16</td>
<td><p><b>r</b></p>
<p>The RFC 2822 formatted date</p></td>
<td>Thu, 21 Dec 2000 16:01:07 +0200</td>
</tr>
<tr>
<td>17</td>
<td><p><b>n</b></p>
<p>Month of year (number - no leading zeroes)</p></td>
<td>2</td>
</tr>
<tr>
<td>18</td>
<td><p><b>s</b></p>
<p>Seconds of hour</p></td>
<td>20</td>
</tr>
<tr>
<td>19</td>
<td><p><b>U</b></p>
<p>Time stamp</p></td>
<td>948372444</td>
</tr>
<tr>
<td>20</td>
<td><p><b>y</b></p>
<p>Year (two digits)</p></td>
<td>06</td>
</tr>
<tr>
<td>21</td>
<td><p><b>Y</b></p>
<p>Year (four digits)</p></td>
<td>2006</td>
</tr>
<tr>
<td>22</td>
<td><p><b>z</b></p>
<p>Day of year (0 - 365)</p></td>
<td>206</td>
</tr>
<tr>
<td>23</td>
<td><p><b>Z</b></p>
<p>Offset in seconds from GMT</p></td>
<td>+5</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Try out following example</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">print</span><span class="pln"> date</span><span class="pun">(</span><span class="str">"m/d/y G.i:s&lt;br&gt;"</span><span class="pun">,</span><span class="pln"> time</span><span class="pun">());</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"Today is "</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> date</span><span class="pun">(</span><span class="str">"j of F Y, \a\\t g.i a"</span><span class="pun">,</span><span class="pln"> time</span><span class="pun">());</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>This will produce following result −</p>
<pre class="result notranslate">12/05/16 9.29:47Today is 5 2016f December 2016, at 9.29 am
</pre>
<p>Hope you have good understanding on how to format date and time according to your requirement. For your reference a complete list of all the date and time functions is given in <a href="/php/php_date_time_functions.htm">PHP Date &amp; Time Functions.</a></p>















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="130_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="132_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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