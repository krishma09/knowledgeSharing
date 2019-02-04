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
	$sid=296;
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
<p>An object is a type of user interface element you create on a Visual Basic form by using a toolbox control. In fact, in Visual Basic, the form itself is an object.  Every Visual Basic control consists of three important elements: </p>
<ul class="list">
<li><p><b>Properties</b> which describe the object, </p></li>
<li><p><b>Methods</b> cause an object to do something and </p></li>
<li><p><b>Events</b> are what happens when an object does something.</p></li>
</ul>
<h4>Control Properties</h4>
<p>All the Visual Basic Objects can be moved, resized or customized by setting their properties.  A property is a value or characteristic held by a Visual Basic object, such as Caption or Fore Color. </p>
<p>Properties can be set at design time by using the Properties window or at run time by using statements in the program code.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Object</span><span class="pun">.</span><span class="pln"> </span><span class="typ">Property</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Value</span></pre>
<p>Where</p>
<ul class="list">
<li><p><b>Object</b> is the name of the object you're customizing.</p></li>
<li><p><b>Property</b> is the characteristic you want to change.</p></li>
<li><p><b>Value</b> is the new property setting.</p></li>
</ul>
<p>For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Form1</span><span class="pun">.</span><span class="typ">Caption</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Hello"</span></pre>
<p>You can set any of the form properties using Properties Window. Most of the properties can be set or read during application execution. You can refer to Microsoft documentation for a complete list of properties associated with different controls and restrictions applied to them.</p>
<h4>Control Methods</h4>
<p>A method is a procedure created as a member of a class and they cause an object to do something. Methods are used to access or manipulate the characteristics of an object or a variable. There are mainly two categories of methods you will use in your classes:</p>
<ul class="list">
<li><p>If you are using a control such as one of those provided by the Toolbox, you can call any of its public methods. The requirements of such a method depend on the class being used.</p></li>
<li><p>If none of the existing methods can perform your desired task, you can add a method to a class.</p></li>
</ul>
<p>For example, the <i>MessageBox</i> control has a method named <i>Show, which is called in the code snippet below:</i></p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Form1</span><span class="pln">
    </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> 
	</span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">Button1</span><span class="pun">.</span><span class="typ">Click</span><span class="pln">
        </span><span class="typ">MessageBox</span><span class="pun">.</span><span class="typ">Show</span><span class="pun">(</span><span class="str">"Hello, World"</span><span class="pun">)</span><span class="pln">
    </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
<h4>Control Events</h4>
<p>An event is a signal that informs an application that something important has occurred. For example, when a user clicks a control on a form, the form can raise a <b>Click</b> event and call a procedure that handles the event. There are various types of events associated with a Form like click, double click, close, load, resize, etc.</p>
<p>Following is the default structure of a form <b>Load</b> event handler subroutine. You can see this code by double clicking the code which will give you a complete list of the all events associated with Form control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Form1_Load</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">Load</span><span class="pln">
 </span><span class="str">'event handler code goes here
End Sub</span></pre>
<p>Here, <b>Handles MyBase.Load</b> indicates that <b>Form1_Load()</b> subroutine handles <b>Load</b> event. Similar way, you can check stub code for click, double click. If you want to initialize some variables like properties, etc., then you will keep  such code inside Form1_Load() subroutine. Here, important point to note is the name of the event handler, which is by default Form1_Load, but you can change this name based on your naming convention you use in your application programming.
</p>
<h4>Basic Controls</h4>
<p>VB.Net provides a huge variety of controls that help you to create rich user interface. Functionalities of all these controls are defined in the respective control classes. The control classes are defined in the <b>System.Windows.Forms</b> namespace. </p>
<p>The following table lists some of the commonly used controls:</p>
<table class="table table-bordered">
<tbody><tr><th style="width:5%;">S.N.</th>
<th>Widget &amp; Description</th></tr>
<tr>
<td>1</td>
<td><p>Forms</a></p>
<p>The container for all the controls that make up the user interface.</p></td>
</tr>
<tr>
<td>2</td>
<td><p>TextBox</a></p>
<p>It represents a Windows text box control.</p></td>
</tr>
<tr>
<td>3</td>
<td><p>Label</a></p>
<p>It represents a standard Windows label.</p></td>
</tr>
<tr>
<td>4</td>
<td><p>Button</a></p>
<p>It represents a Windows button control.</p></td>
</tr>
<tr>
<td>5</td>
<td><p>ListBox</a></p>
<p>It represents a Windows control to display a list of items.</p></td>
</tr>
<tr>
<td>6</td>
<td><p>ComboBox</a></p>
<p>It represents a Windows combo box control.</p></td>
</tr>
<tr>
<td>7</td>
<td><p>RadioButton</a></p>
<p>It enables the user to select a single option from a group of choices when paired with other RadioButton controls.</p></td>
</tr>
<tr>
<td>8</td>
<td><p>CheckBox</a></p>
<p>It represents a Windows CheckBox.</p></td>
</tr>
<tr>
<td>9</td>
<td><p>PictureBox</a></p>
<p>It represents a Windows picture box control for displaying an image.</p></td>
</tr>
<tr>
<td>10</td>
<td><p>ProgressBar</a></p>
<p>It represents a Windows progress bar control.</p></td>
</tr>
<tr>
<td>11</td>
<td><p>ScrollBar</a></p>
<p>It Implements the basic functionality of a scroll bar control.</p></td>
</tr>
<tr>
<td>12</td>
<td><p>DateTimePicker</a></p>
<p>It represents a Windows control that allows the user to select a date and a time and to display the date and time with a specified format.</p></td>
</tr>
<tr>
<td>13</td>
<td><p>TreeView</a></p>
<p>It displays a hierarchical collection of labeled items, each represented by a TreeNode.</p></td>
</tr>
<tr>
<td>14</td>
<td><p>ListView</a></p>
<p>It represents a Windows list view control, which displays a collection of items that can be displayed using one of four different views.</p></td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="295_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="297_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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