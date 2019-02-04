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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=288;
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
<p>Most of the softwares you write need implementing some form of date functions returning current date and time. Dates are so much part of everyday life that it becomes easy to work with them without thinking. VB.Net also provides powerful tools for date arithmetic that makes manipulating dates easy. </p>
<p>The <b>Date</b> data type contains date values, time values, or date and time values. The default value of Date is 0:00:00 (midnight) on January 1, 0001. The equivalent .NET data type is <b>System.DateTime</b>.</p>
<p>The <b>DateTime</b> structure represents an instant in time, typically expressed as a date and time of day</p>
<pre class="prettyprint notranslate prettyprinted"><span class="str">'Declaration
&lt;SerializableAttribute&gt; _
Public Structure DateTime _
	Implements IComparable, IFormattable, IConvertible, ISerializable,  
	IComparable(Of DateTime), IEquatable(Of DateTime)</span></pre>
	<p>You can also get the current date and time from the DateAndTime class. </p>
	<p>The <b>DateAndTime</b> module contains the procedures and properties used in date and time operations.</p>
	<pre class="prettyprint notranslate prettyprinted"><span class="str">'Declaration
&lt;StandardModuleAttribute&gt; _
Public NotInheritable Class DateAndTime</span></pre>
<table class="table table-bordered">
<tbody><tr>
<td>
<p><b><u>Note:</u></b></p>
<p>Both the DateTime structure and the DateAndTime module contain properties like <b>Now</b> and <b>Today</b>, so often beginners find it confusing. The DateAndTime class belongs to the Microsoft.VisualBasic namespace and the DateTime structure belongs to the System namespace.<br> Therefore, using the later would help you in porting your code to another .Net language like C#. However, the DateAndTime class/module contains all the legacy date functions available in Visual Basic.</p>
</td>
</tr>
</tbody></table>
<h5>Properties and Methods of the DateTime Structure</h5>
<p>The following table lists some of the commonly used <b>properties</b> of the <b>DateTime</b> Structure:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th style="width:25%;">Property</th>
<th>Description</th></tr>
<tr>
<td>1</td>
<td>
<b>Date</b>
</td>
<td>Gets the date component of this instance.</td></tr>
<tr>
<td>2</td>
<td><b>Day</b></td>
<td>Gets the day of the month represented by this instance.</td>
</tr>
<tr>
<td>3</td>
<td><b>DayOfWeek</b></td>
<td>Gets the day of the week represented by this instance.</td>
</tr>
<tr>
<td>4</td>
<td><b>DayOfYear</b></td>
<td>Gets the day of the year represented by this instance.</td>
</tr>
<tr>
<td>5</td>
<td><b>Hour</b></td>
<td>Gets the hour component of the date represented by this instance.</td>
</tr>
<tr>
<td>6</td>
<td><b>Kind</b></td>
<td>Gets a value that indicates whether the time represented by this instance is based on local time, Coordinated Universal Time (UTC), or neither.</td>
</tr>
<tr>
<td>7</td>
<td><b>Millisecond</b></td>
<td>Gets the milliseconds component of the date represented by this instance.</td>
</tr>
<tr>
<td>8</td>
<td><b>Minute</b></td>
<td>Gets the minute component of the date represented by this instance.</td>
</tr>
<tr>
<td>9</td>
<td><b>Month</b></td>
<td>Gets the month component of the date represented by this instance.</td>
</tr>
<tr>
<td>10</td>
<td><b>Now</b></td>
<td>Gets a <b>DateTime</b> object that is set to the current date and time on this computer, expressed as the local time.</td>
</tr>
<tr>
<td>11</td>
<td><b>Second</b></td>
<td>Gets the seconds component of the date represented by this instance.</td>
</tr>
<tr>
<td>12</td>
<td><b>Ticks</b></td>
<td>Gets the number of ticks that represent the date and time of this instance.</td>
</tr>
<tr>
<td>13</td>
<td><b>TimeOfDay</b></td>
<td>Gets the time of day for this instance.</td>
</tr>
<tr>
<td>14</td>
<td><b>Today</b></td>
<td>Gets the current date.</td>
</tr>
<tr>
<td>15</td>
<td><b>UtcNow</b></td>
<td>Gets a <b>DateTime</b> object that is set to the current date and time on this computer, expressed as the Coordinated Universal Time (UTC).</td>
</tr>
<tr>
<td>16</td>
<td><b>Year</b></td>
<td>Gets the year component of the date represented by this instance.</td>
</tr>
</tbody></table>
<p>The following table lists some of the commonly used <b>methods</b> of the <b>DateTime</b> structure:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Method Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Public Function Add (value As TimeSpan) As DateTime</b></p>
<p>Returns a new DateTime that adds the value of the specified TimeSpan to the value of this instance.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Public Function AddDays ( value As Double) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of days to the value of this instance.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>Public Function AddHours (value As Double) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of hours to the value of this instance.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>Public Function AddMinutes (value As Double) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of minutes to the value of this instance.</p></td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Public Function AddMonths (months As Integer) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of months to the value of this instance.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>Public Function AddSeconds (value As Double) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of seconds to the value of this instance.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>Public Function AddYears (value As Integer ) As DateTime</b></p>
<p>Returns a new DateTime that adds the specified number of years to the value of this instance.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>Public Shared Function Compare (t1 As DateTime,t2 As DateTime) As Integer</b></p>
<p>Compares two instances of DateTime and returns an integer that indicates whether the first instance is earlier than, the same as, or later than the second instance.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>Public Function CompareTo (value As DateTime) As Integer</b></p>
<p>Compares the value of this instance to a specified DateTime value and returns an integer that indicates whether this instance is earlier than, the same as, or later than the specified DateTime value.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>Public Function Equals (value As DateTime) As Boolean</b></p>
<p>Returns a value indicating whether the value of this instance is equal to the value of the specified DateTime instance.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>Public Shared Function Equals (t1 As DateTime, t2 As DateTime) As Boolean</b></p>
<p>Returns a value indicating whether two DateTime instances have the same date and time value.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>Public Overrides Function ToString As String</b></p>
<p>Converts the value of the current DateTime object to its equivalent string representation.</p>
</td>
</tr>
</tbody></table>
<p>The above list of methods is not exhaustive, please visit <a rel="nofollow" target="_blank" href="http://msdn.microsoft.com/en-us/library/system.datetime.aspx">Microsoft documentation</a> for the complete list of methods and properties of the DateTime structure. </p>
<h5>Creating a DateTime Object</h5>
<p>You can create a DateTime object in one of the following ways:</p>
<ul class="list">
<li><p>By calling a DateTime constructor from any of the overloaded DateTime constructors.</p></li>
<li><p>By assigning the DateTime object a date and time value returned by a property or method.</p></li>
<li><p>By parsing the string representation of a date and time value.</p></li>
<li><p>By calling the DateTime structure's implicit default constructor.</p></li>
</ul>
<p>The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> </span><span class="typ">Module1</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="str">'DateTime constructor: parameters year, month, day, hour, min, sec
      Dim date1 As New Date(2012, 12, 16, 12, 0, 0)
      '</span><span class="pln">initializes a </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">DateTime</span><span class="pln"> value
      </span><span class="typ">Dim</span><span class="pln"> date2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="com">#12/16/2012 12:00:52 AM#</span><span class="pln">
      </span><span class="str">'using properties
      Dim date3 As Date = Date.Now
      Dim date4 As Date = Date.UtcNow
      Dim date5 As Date = Date.Today
      Console.WriteLine(date1)
      Console.WriteLine(date2)
      Console.WriteLine(date3)
      Console.WriteLine(date4)
      Console.WriteLine(date5)
      Console.ReadKey()
   End Sub
End Module</span></pre>
<p>When the above code was compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">12</span><span class="pun">/</span><span class="lit">16</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> PM
</span><span class="lit">12</span><span class="pun">/</span><span class="lit">16</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">52</span><span class="pln"> PM
</span><span class="lit">12</span><span class="pun">/</span><span class="lit">12</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">10</span><span class="pun">:</span><span class="lit">22</span><span class="pun">:</span><span class="lit">50</span><span class="pln"> PM
</span><span class="lit">12</span><span class="pun">/</span><span class="lit">12</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> PM</span></pre>
<h5>Getting the Current Date and Time:</h5>
<p>The following programs demonstrate how to get the current date and time in VB.Net:</p>
<b><p>Current Time:</p></b>
<pre class="prettyprint notranslates prettyprinted"><span class="typ">Module</span><span class="pln"> dateNtime
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Current Time: "</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">Now</span><span class="pun">.</span><span class="typ">ToLongTimeString</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Current</span><span class="pln"> </span><span class="typ">Time</span><span class="pun">:</span><span class="pln"> </span><span class="lit">11</span><span class="pln"> </span><span class="pun">:</span><span class="lit">05</span><span class="pln"> </span><span class="pun">:</span><span class="lit">32</span><span class="pln"> AM</span></pre>
<b><p>Current Date:</p></b>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> dateNtime
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Current Date: "</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> dt </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Today</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Today is: {0}"</span><span class="pun">,</span><span class="pln"> dt</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Today</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">12</span><span class="pun">/</span><span class="lit">11</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM</span></pre>
<h5>Formatting Date</h5>
<p>A Date literal should be enclosed within hash signs (# #), and specified in the format M/d/yyyy, for example #12/16/2012#. Otherwise, your code may change depending on the locale in which your application is running. </p>
<p>For example, you specified Date literal of #2/6/2012# for the date February 6, 2012. It is alright for the locale that uses mm/dd/yyyy format. However, in a locale that uses dd/mm/yyyy format, your literal would compile to June 2, 2012. If a locale uses another format say, yyyy/mm/dd, the literal would be invalid and cause a compiler error.</p>
<p>To convert a Date literal to the format of your locale or to a custom format, use the <b>Format</b> function of String class, specifying either a predefined or user-defined date format. </p>
<p>The following example demonstrates this.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> dateNtime
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"India Wins Freedom: "</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> independenceDay </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="lit">1947</span><span class="pun">,</span><span class="pln"> </span><span class="lit">8</span><span class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln">
      </span><span class="str">' Use format specifiers to control the date display.
      Console.WriteLine(" Format '</span><span class="pln">d</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("d"))
      Console.WriteLine(" Format '</span><span class="pln">D</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("D"))
      Console.WriteLine(" Format '</span><span class="pln">t</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("t"))
      Console.WriteLine(" Format '</span><span class="pln">T</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("T"))
      Console.WriteLine(" Format '</span><span class="pln">f</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("f"))
      Console.WriteLine(" Format '</span><span class="pln">F</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("F"))
      Console.WriteLine(" Format '</span><span class="pln">g</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("g"))
      Console.WriteLine(" Format '</span><span class="pln">G</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("G"))
      Console.WriteLine(" Format '</span><span class="pln">M</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("M"))
      Console.WriteLine(" Format '</span><span class="pln">R</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("R"))
      Console.WriteLine(" Format '</span><span class="pln">y</span><span class="pun">:</span><span class="str">' " &amp; independenceDay.ToString("y"))
      Console.ReadKey()
   End Sub
End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">India</span><span class="pln"> </span><span class="typ">Wins</span><span class="pln"> </span><span class="typ">Freedom</span><span class="pun">:</span><span class="pln">
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'d:'</span><span class="pln"> </span><span class="lit">8</span><span class="pun">/</span><span class="lit">15</span><span class="pun">/</span><span class="lit">1947</span><span class="pln">
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'D:'</span><span class="pln"> </span><span class="typ">Friday</span><span class="pun">,</span><span class="pln"> </span><span class="typ">August</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1947</span><span class="pln">
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'t:'</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'T:'</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'f:'</span><span class="pln"> </span><span class="typ">Friday</span><span class="pun">,</span><span class="pln"> </span><span class="typ">August</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1947</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'F:'</span><span class="pln"> </span><span class="typ">Friday</span><span class="pun">,</span><span class="pln"> </span><span class="typ">August</span><span class="pln"> </span><span class="lit">15</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1947</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'g:'</span><span class="pln"> </span><span class="lit">8</span><span class="pun">/</span><span class="lit">15</span><span class="pun">/</span><span class="lit">1947</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'G:'</span><span class="pln"> </span><span class="lit">8</span><span class="pun">/</span><span class="lit">15</span><span class="pun">/</span><span class="lit">1947</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'M:'</span><span class="pln"> </span><span class="lit">8</span><span class="pun">/</span><span class="lit">15</span><span class="pun">/</span><span class="lit">1947</span><span class="pln"> </span><span class="typ">August</span><span class="pln"> </span><span class="lit">15</span><span class="pln">
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'R:'</span><span class="pln"> </span><span class="typ">Fri</span><span class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span class="pln"> </span><span class="typ">August</span><span class="pln"> </span><span class="lit">1947</span><span class="pln"> </span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> GMT
</span><span class="typ">Format</span><span class="pln"> </span><span class="str">'y:'</span><span class="pln"> </span><span class="typ">August</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1947</span></pre>
<h5>Predefined Date/Time Formats</h5>
<p>The following table identifies the predefined date and time format names. These may be used by name as the style argument for the <b>Format</b> function:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:25%;">Format</th>
<th>Description</th>
</tr>
<tr>
<td><b>General Date, or G</b></td>
<td>Displays a date and/or time. For example, 1/12/2012 07:07:30 AM.</td>
</tr>
<tr>
<td><b>Long Date,Medium Date, or D</b></td>
<td>Displays a date according to your current culture's long date format. For example, Sunday, December 16, 2012.</td>
</tr>
<tr>
<td><b>Short Date, or d</b></td>
<td>Displays a date using your current culture's short date format. For example, 12/12/2012.</td>
</tr>
<tr>
<td><b>Long Time,Medium Time, orT</b></td>
<td>Displays a time using your current culture's long time format; typically includes hours, minutes, seconds. For example, 01:07:30 AM.</td>
</tr>
<tr>
<td><b>Short Time or t</b></td>
<td>Displays a time using your current culture's short time format. For example, 11:07 AM.</td>
</tr>
<tr>
<td><b>f</b></td>
<td>Displays the long date and short time according to your current culture's format. For example, Sunday, December 16, 2012 12:15 AM.</td></tr>
<tr>
<td><b>F</b>
</td>
<td>Displays the long date and long time according to your current culture's format. For example, Sunday, December 16, 2012  12:15:31 AM.</td></tr>
<tr>
<td><b>g</b></td>
<td>Displays the short date and short time according to your current culture's format. For example, 12/16/2012 12:15 AM.</td>
</tr>
<tr>
<td><b>M, m</b></td>
<td>Displays the month and the day of a date. For example, December 16.</td>
</tr>
<tr>
<td><b>R, r</b></td>
<td>Formats the date according to the RFC1123Pattern property. </td></tr>
<tr>
<td><b>s</b></td>
<td>Formats the date and time as a sortable index. For example, 2012-12-16T12:07:31.</td>
</tr>
<tr>
<td><b>u</b></td>
<td>Formats the date and time as a GMT sortable index. For example, 2012-12-16 12:15:31Z.</td>
</tr>
<tr>
<td><b>U</b></td>
<td>Formats the date and time with the long date and long time as GMT. For example, Sunday, December 16, 2012  6:07:31 PM.</td>
</tr>
<tr>
<td><b>Y, y</b></td>
<td>Formats the date as the year and month. For example, December, 2012.</td>
</tr>
</tbody></table>
<p>For other formats like user-defined formats, please consult <a rel="nofollow" target="_blank" href="http://msdn.microsoft.com/en-us/library/microsoft.visualbasic.strings.format.aspx">Microsoft Documentation</a>.</p>
<h5>Properties and Methods of the DateAndTime Class</h5>
<p>The following table lists some of the commonly used <b>properties</b> of the <b>DateAndTime</b> Class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th style="width:25%;">Property</th>
<th>Description</th>
</tr>
<tr>
<td>1</td>
<td><b>Date</b></td>
<td>Returns or sets a String value representing the current date according to your system.</td>
</tr>
<tr>
<td>2</td>
<td><b>Now</b></td>
<td>Returns a Date value containing the current date and time according to your system.</td>
</tr>
<tr>
<td>3</td>
<td><b>TimeOfDay</b></td>
<td>Returns or sets a Date value containing the current time of day according to your system.</td>
</tr>
<tr>
<td>4</td>
<td><b>Timer</b></td>
<td>Returns a Double value representing the number of seconds elapsed since midnight.</td>
</tr>
<tr>
<td>5</td>
<td><b>TimeString</b></td>
<td>Returns or sets a String value representing the current time of day according to your system.</td>
</tr>
<tr>
<td>6</td>
<td><b>Today</b></td>
<td>Gets the current date.</td>
</tr>
</tbody></table>
<p>The following table lists some of the commonly used <b>methods</b> of the <b>DateAndTime</b> class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Method Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Public Shared Function DateAdd (Interval As DateInterval, Number As Double, DateValue As DateTime) As DateTime</b></p>
<p>Returns a Date value containing a date and time value to which a specified time interval has been added.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Public Shared Function DateAdd (Interval As String,Number As Double,DateValue As Object 
) As DateTime</b></p>
<p>Returns a Date value containing a date and time value to which a specified time interval has been added.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>Public Shared Function DateDiff (Interval As DateInterval, Date1 As DateTime, Date2 As DateTime, DayOfWeek As FirstDayOfWeek, WeekOfYear As FirstWeekOfYear ) As Long</b></p>
<p>Returns a Long value specifying the number of time intervals between two Date values.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>Public Shared Function DatePart (Interval As DateInterval, DateValue As DateTime,  
FirstDayOfWeekValue As FirstDayOfWeek, FirstWeekOfYearValue As FirstWeekOfYear ) As Integer</b></p>
<p>Returns an Integer value containing the specified component of a given Date value.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Public Shared Function Day (DateValue As DateTime) As Integer</b></p>
<p>Returns an Integer value from 1 through 31 representing the day of the month.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>Public Shared Function Hour (TimeValue As DateTime) As Integer</b><p></p>
<p>Returns an Integer value from 0 through 23 representing the hour of the day.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>Public Shared Function Minute (TimeValue As DateTime) As Integer</b></p>
<p>Returns an Integer value from 0 through 59 representing the minute of the hour.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>Public Shared Function Month (DateValue As DateTime) As Integer</b></p>
<p>Returns an Integer value from 1 through 12 representing the month of the year.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>Public Shared Function MonthName (Month As Integer, Abbreviate As Boolean) As String</b></p>
<p>Returns a String value containing the name of the specified month.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>Public Shared Function Second (TimeValue As DateTime) As Integer</b></p>
<p>Returns an Integer value from 0 through 59 representing the second of the minute.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>Public Overridable Function ToString As String</b></p>
<p>Returns a string that represents the current object.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>Public Shared Function Weekday (DateValue As DateTime, DayOfWeek As FirstDayOfWeek) As Integer</b></p>
<p>Returns an Integer value containing a number representing the day of the week.</p></td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>Public Shared Function WeekdayName (Weekday As Integer, Abbreviate As Boolean, 
FirstDayOfWeekValue As FirstDayOfWeek) As String</b></p>
<p>Returns a String value containing the name of the specified weekday.</p>
</td>
</tr>
<tr>
<td>14</td>
<td>
<p><b>Public Shared Function Year (DateValue As DateTime) As Integer</b></p>
<p>Returns an Integer value from 1 through 9999 representing the year.</p>
</td>
</tr>
</tbody></table>
<p>The above list is not exhaustive. For complete list of properties and methods of the DateAndTime class, please consult <a rel="nofollow" target="_blank" href="http://msdn.microsoft.com/en-us/library/microsoft.visualbasic.dateandtime.aspx">Microsoft Documentation</a>.</p>
<p>The following program demonstrates some of these and methods:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> </span><span class="typ">Module1</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> birthday </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> bday </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> month </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> monthname </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      </span><span class="str">' Assign a date using standard short format.
      birthday = #7/27/1998#
      bday = Microsoft.VisualBasic.DateAndTime.Day(birthday)
      month = Microsoft.VisualBasic.DateAndTime.Month(birthday)
      monthname = Microsoft.VisualBasic.DateAndTime.MonthName(month)
      Console.WriteLine(birthday)
      Console.WriteLine(bday)
      Console.WriteLine(month)
      Console.WriteLine(monthname)
      Console.ReadKey()
   End Sub
End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">7</span><span class="pun">/</span><span class="lit">27</span><span class="pun">/</span><span class="lit">1998</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> AM
</span><span class="lit">27</span><span class="pln">
</span><span class="lit">7</span><span class="pln">
</span><span class="typ">July</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="287_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="289_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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