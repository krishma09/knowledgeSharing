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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=316;
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
<p>The calendar control is a functionally rich web control, which provides the following capabilities:</p>
<ul class="list">
<li>Displaying one month at a time</li>
<li>Selecting a day, a week or a month</li>
<li>Selecting a range of days</li>
<li>Moving from month to month</li>
<li>Controlling the display of the days programmatically</li>
</ul>
<p>The basic syntax of a calendar control is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Calender</span><span class="pln"> </span><span class="atn">ID</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Calendar1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:Calender&gt;</span></pre>
<h4>Properties and Events of the Calendar Control</h4>
<p>The calendar control has many properties and events, using which you can customize the actions and display of the control. The following table provides some important properties of the Calendar control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Caption</td>
<td>Gets or sets the caption for the calendar control.</td>
</tr>
<tr>
<td>CaptionAlign</td>
<td>Gets or sets the alignment for the caption.</td>
</tr>
<tr>
<td>CellPadding</td>
<td>Gets or sets the number of spaces between the data and the cell border.</td>
</tr>
<tr>
<td>CellSpacing</td>
<td>Gets or sets the space between cells.</td>
</tr>
<tr>
<td>DayHeaderStyle</td>
<td>Gets the style properties for the section that displays the day of the week.</td>
</tr>
<tr>
<td>DayNameFormat</td>
<td>Gets or sets format of days of the week.</td>
</tr>
<tr>
<td>DayStyle</td>
<td>Gets the style properties for the days in the displayed month.</td>
</tr>
<tr>
<td>FirstDayOfWeek</td>
<td>Gets or sets the day of week to display in the first column.</td>
</tr>
<tr>
<td>NextMonthText</td>
<td>Gets or sets the text for next month navigation control. The default value is &gt;.</td>
</tr>
<tr>
<td>NextPrevFormat</td>
<td>Gets or sets the format of the next and previous month navigation control.</td>
</tr>
<tr>
<td>OtherMonthDayStyle</td>
<td>Gets the style properties for the days on the Calendar control that are not in the displayed month.</td>
</tr>
<tr>
<td>PrevMonthText</td>
<td>Gets or sets the text for previous month navigation control. The default value is &lt;.</td>
</tr>
<tr>
<td>SelectedDate</td>
<td>Gets or sets the selected date.</td>
</tr>
<tr>
<td>SelectedDates</td>
<td>Gets a collection of DateTime objects representing the selected dates.</td>
</tr>
<tr>
<td>SelectedDayStyle</td>
<td>Gets the style properties for the selected dates.</td>
</tr>
<tr>
<td>SelectionMode</td>
<td>Gets or sets the selection mode that specifies whether the user can select a single day, a week or an entire month.</td>
</tr>
<tr>
<td>SelectMonthText</td>
<td>Gets or sets the text for the month selection element in the selector column.</td>
</tr>
<tr>
<td>SelectorStyle</td>
<td>Gets the style properties for the week and month selector column.</td>
</tr>
<tr>
<td>SelectWeekText</td>
<td>Gets or sets the text displayed for the week selection element in the selector column.</td>
</tr>
<tr>
<td>ShowDayHeader</td>
<td>Gets or sets the value indicating whether the heading for the days of the week is displayed.</td>
</tr>
<tr>
<td>ShowGridLines</td>
<td>Gets or sets the value indicating whether the gridlines would be shown.</td>
</tr>
<tr>
<td>ShowNextPrevMonth</td>
<td>Gets or sets a value indicating whether next and previous month navigation elements are shown in the title section.</td>
</tr>
<tr>
<td>ShowTitle</td>
<td>Gets or sets a value indicating whether the title section is displayed.</td>
</tr>
<tr>
<td>TitleFormat</td>
<td>Gets or sets the format for the title section.</td>
</tr>
<tr>
<td>Titlestyle</td>
<td>Get the style properties of the title heading for the Calendar control.</td>
</tr>
<tr>
<td>TodayDayStyle</td>
<td>Gets the style properties for today's date on the Calendar control.</td>
</tr>
<tr>
<td>TodaysDate</td>
<td>Gets or sets the value for today's date.</td>
</tr>
<tr>
<td>UseAccessibleHeader</td>
<td>Gets or sets a value that indicates whether to render the table header &lt;th&gt; HTML element for the day headers instead of the table data &lt;td&gt; HTML element.</td>
</tr>
<tr>
<td>VisibleDate</td>
<td>Gets or sets the date that specifies the month to display.</td>
</tr>
<tr>
<td>WeekendDayStyle</td>
<td>Gets the style properties for the weekend dates on the Calendar control.</td>
</tr>
</tbody></table>
<p>The Calendar control has the following three most important events that allow the developers to program the calendar control. They are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Events</th>
<th>Description</th>
</tr>
<tr>
<td>SelectionChanged</td>
<td>It is raised when a day, a week or an entire month is selected.</td>
</tr>
<tr>
<td>DayRender</td>
<td>It is raised when each data cell of the calendar control is rendered.</td>
</tr>
<tr>
<td>VisibleMonthChanged</td>
<td>It is raised when user changes a month.</td>
</tr>
</tbody></table>
<h4>Working with the Calendar Control</h4>
<p>Putting a bare-bone calendar control without any code behind file provides a workable calendar to a site, which shows the months and days of the year. It also allows navigation to next and previous months.</p>
<img src="images/calendar.jpg" alt="Calendar">
<p>Calendar controls allow the users to select a single day, a week, or an entire month. This is done by using the SelectionMode property. This property has the following values:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Day</td>
<td>To select a single day.</td>
</tr>
<tr>
<td>DayWeek</td>
<td>To select a single day or an entire week.</td>
</tr>
<tr>
<td>DayWeekMonth</td>
<td>To select a single day, a week, or an entire month.</td>
</tr>
<tr>
<td>None</td>
<td>Nothing can be selected.</td>
</tr>
</tbody></table>
<p>The syntax for selecting days:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Calender</span><span class="pln"> </span><span class="atn">ID</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Calendar1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">SelectionMode</span><span class="pun">=</span><span class="atv">"DayWeekMonth"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:Calender&gt;</span></pre>
<p>When the selection mode is set to the value DayWeekMonth, an extra column with the &gt; symbol appears for selecting the week, and a &gt;&gt; symbol appears to the left of the days name for selecting the month.</p>
<img src="images/calendar2.jpg" alt="Calendar2">
<h4>Example</h4>
<p>The following example demonstrates selecting a date and displays the date in a label:</p>
<p>The content file code is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"calendardemo._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">
         Untitled Page
      </span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            </span><span class="tag">&lt;h5&gt;</span><span class="pln"> Your Birthday:</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Calendar</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Calendar1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server  SelectionMode="</span><span class="atn">DayWeekMonth</span><span class="atv">" onselectionchanged="</span><span class="atn">Calendar1_SelectionChanged</span><span class="atv">"&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:Calendar&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;p&gt;</span><span class="pln">Todays date is:&nbsp;
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblday"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
         </span><span class="tag">&lt;/p&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;p&gt;</span><span class="pln">Your Birday is:&nbsp;
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblbday"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
         </span><span class="tag">&lt;/p&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The event handler for the event SelectionChanged:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Calendar1_SelectionChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   lblday</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">TodaysDate</span><span class="pun">.</span><span class="typ">ToShortDateString</span><span class="pun">();</span><span class="pln">
   lblbday</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">SelectedDate</span><span class="pun">.</span><span class="typ">ToShortDateString</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Calendar1_SelectionChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   lblday</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">TodaysDate</span><span class="pun">.</span><span class="typ">ToShortDateString</span><span class="pun">();</span><span class="pln">
   lblbday</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">SelectedDate</span><span class="pun">.</span><span class="typ">ToShortDateString</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the file is run, it should produce the following output:</p>
<img src="images/calendar3.jpg" alt="Calendar3">





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="315_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="317_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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