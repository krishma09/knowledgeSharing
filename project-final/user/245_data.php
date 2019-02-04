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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=245;
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
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p>The C++ standard library does not provide a proper date type. C++ inherits the structs and functions for date and time manipulation from C. To access date and time related functions and structures, you would need to include &lt;ctime&gt; header file in your C++ program.</p>
<p>There are four time-related types: <b>clock_t, time_t, size_t</b>, and <b>tm</b>. The types clock_t, size_t and time_t are capable of representing the system time and date as some sort of integer.</p>
<p>The structure type <b>tm</b> holds the date and time in the form of a C structure having the following elements:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">struct</span><span class="pln"> tm </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_sec</span><span class="pun">;</span><span class="pln">   </span><span class="com">// seconds of minutes from 0 to 61</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_min</span><span class="pun">;</span><span class="pln">   </span><span class="com">// minutes of hour from 0 to 59</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_hour</span><span class="pun">;</span><span class="pln">  </span><span class="com">// hours of day from 0 to 24</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_mday</span><span class="pun">;</span><span class="pln">  </span><span class="com">// day of month from 1 to 31</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_mon</span><span class="pun">;</span><span class="pln">   </span><span class="com">// month of year from 0 to 11</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_year</span><span class="pun">;</span><span class="pln">  </span><span class="com">// year since 1900</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_wday</span><span class="pun">;</span><span class="pln">  </span><span class="com">// days since sunday</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_yday</span><span class="pun">;</span><span class="pln">  </span><span class="com">// days since January 1st</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> tm_isdst</span><span class="pun">;</span><span class="pln"> </span><span class="com">// hours of daylight savings time</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Following are the important functions, which we use while working with date and time in C or C++. All these functions are part of standard C and C++ library and you can check their detail using reference to C++ standard library given below.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="5%">SN</th>
<th>Function &amp; Purpose</th>
</tr>
<tr>
<td>1</td>
<td><b>time_t time(time_t *time);</b>
<p>This returns the current calendar time of the system in number of seconds elapsed since January 1, 1970. If the system has no time, .1 is returned.</p>
</td> 
</tr>
<tr>
<td>2</td>
<td><b>char *ctime(const time_t *time);</b>
<p>This returns a pointer to a string of the form <i>day month year hours:minutes:seconds year\n\0</i>.</p>
</td> 
</tr>
<tr>
<td>3</td>
<td><b>struct tm *localtime(const time_t *time);</b>
<p>This returns a pointer to the <b>tm</b> structure representing local time.</p>
</td> 
</tr>
<tr>
<td>4</td>
<td><b>clock_t clock(void);</b>
<p>This returns a value that approximates the amount of time the calling program has been running. A value of .1 is returned if the time is not available.</p>
</td> 
</tr>
<tr>
<td>5</td>
<td><b>char * asctime ( const struct tm * time );</b>
<p>This returns a pointer to a string that contains the information stored in the structure pointed to by time converted into the form: day month date hours:minutes:seconds year\n\0</p>
</td> 
</tr>
<tr>
<td>6</td>
<td><b>struct tm *gmtime(const time_t *time);</b>
<p>This returns a pointer to the time in the form of a tm structure. The time is represented in Coordinated Universal Time (UTC), which is essentially Greenwich Mean Time (GMT).</p>
</td>
</tr>
<tr>
<td>7</td>
<td><b>time_t mktime(struct tm *time);</b>
<p>This returns the calendar-time equivalent of the time found in the structure pointed to by time.</p>
</td> 
</tr>
<tr>
<td>8</td>
<td><b>double difftime ( time_t time2, time_t time1 );</b>
<p>This function calculates the difference in seconds between time1 and time2.</p>
</td> 
</tr>
<tr>
<td>9</td>
<td><b>size_t strftime();</b>
<p>This function can be used to format date and time a specific format.</p>
</td> 
</tr>
</tbody></table>
<h4>Current date and time:</h4>

<p>Consider you want to retrieve the current system date and time, either as a local time or as a Coordinated Universal Time (UTC). Following is the example to achieve the same:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;ctime&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// current date/time based on current system</span><span class="pln">
   </span><span class="typ">time_t</span><span class="pln"> now </span><span class="pun">=</span><span class="pln"> time</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln">
   
   </span><span class="com">// convert now to string form</span><span class="pln">
   </span><span class="kwd">char</span><span class="pun">*</span><span class="pln"> dt </span><span class="pun">=</span><span class="pln"> ctime</span><span class="pun">(&amp;</span><span class="pln">now</span><span class="pun">);</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"The local date and time is: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> dt </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// convert now to tm struct for UTC</span><span class="pln">
   tm </span><span class="pun">*</span><span class="pln">gmtm </span><span class="pun">=</span><span class="pln"> gmtime</span><span class="pun">(&amp;</span><span class="pln">now</span><span class="pun">);</span><span class="pln">
   dt </span><span class="pun">=</span><span class="pln"> asctime</span><span class="pun">(</span><span class="pln">gmtm</span><span class="pun">);</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"The UTC date and time is:"</span><span class="pun">&lt;&lt;</span><span class="pln"> dt </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">The local date and time is: Sat Jan  8 20:07:41 2011

The UTC date and time is:Sun Jan  9 03:07:41 2011
</pre>
<h4>Format time using struct tm</h4>
<p>The <b>tm</b> structure is very important while working with date and time in either C or C++. This structure holds the date and time in the form of a C structure as mentioned above. Most of the time related functions makes use of tm structure. Following is an example which makes use of various date and time related functions and tm structure:</p>
<p>While using structure in this chapter, I'm making an assumption that you have basic understanding on C structure and how to access structure members using arrow -&gt; operator.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;ctime&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// current date/time based on current system</span><span class="pln">
   </span><span class="typ">time_t</span><span class="pln"> now </span><span class="pun">=</span><span class="pln"> time</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Number of sec since January 1,1970:"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> now </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   tm </span><span class="pun">*</span><span class="pln">ltm </span><span class="pun">=</span><span class="pln"> localtime</span><span class="pun">(&amp;</span><span class="pln">now</span><span class="pun">);</span><span class="pln">

   </span><span class="com">// print various components of tm structure.</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Year"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">1900</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> ltm</span><span class="pun">-&gt;</span><span class="pln">tm_year</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Month: "</span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> ltm</span><span class="pun">-&gt;</span><span class="pln">tm_mon</span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Day: "</span><span class="pun">&lt;&lt;</span><span class="pln">  ltm</span><span class="pun">-&gt;</span><span class="pln">tm_mday </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Time: "</span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> ltm</span><span class="pun">-&gt;</span><span class="pln">tm_hour </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">":"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> ltm</span><span class="pun">-&gt;</span><span class="pln">tm_min </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">":"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> ltm</span><span class="pun">-&gt;</span><span class="pln">tm_sec </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Number of sec since January 1, 1970:1294548238
Year: 2011
Month: 1
Day: 8
Time: 22: 44:59
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="244_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="246_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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