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
<title>BOOTSTRAP Tutorials | knowledge.com</title>
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
	$sid=142;
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


<p>Bootstrap provides a clean layout for building tables. Some of the table elements supported by Bootstrap are −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Tag</th>
<th>Description</th>
</tr>
<tr>
<td>&lt;table&gt;</td>
<td>Wrapping element for displaying data in a tabular format</td>
</tr>
<tr>
<td>&lt;thead&gt;</td>
<td>Container element for table header rows (&lt;tr&gt;) to label table columns.</td>
</tr>
<tr>
<td>&lt;tbody&gt;</td>
<td>Container element for table rows (&lt;tr&gt;) in the body of the table.</td>
</tr>
<tr>
<td>&lt;tr&gt;</td>
<td>Container element for a set of table cells (&lt;td&gt; or &lt;th&gt;) that appears on a single row.</td>
</tr>
<tr>
<td>&lt;td&gt;</td>
<td>Default table cell.</td>
</tr>
<tr>
<td>&lt;th&gt;</td>
<td>Special table cell for column (or row, depending on scope and placement) labels. Must be used within a &lt;thead&gt;</td>
</tr>
<tr>
<td>&lt;caption&gt;</td>
<td>Description or summary of what the table holds.</td>
</tr>
</tbody></table>
<h4>Basic Table</h4>
<p>If you want a nice, basic table style with just some light padding and horizontal dividers, add the base class of <i>.table</i> to any table as shown in the following example −</p>
<pre class="prettyprint notranslate tryit" style="cursor: default;">&lt;table class = "table"&gt;
   &lt;caption&gt;Basic Table Layout&lt;/caption&gt;
   
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th&gt;Name&lt;/th&gt;
         &lt;th&gt;City&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;td&gt;Tanmay&lt;/td&gt;
         &lt;td&gt;Bangalore&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr&gt;
         &lt;td&gt;Sachin&lt;/td&gt;
         &lt;td&gt;Mumbai&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
	
&lt;/table&gt;
</pre>
<h4>Optional Table Classes</h4>
<p>Along with the base table markup and the .table class, there are a few additional classes that you can use to style the markup. Following sections will give you a glimpse of all these classes.</p>
<h5>Striped Table</h5>
<p>By adding the <i>.table-striped</i> class, you will get stripes on rows within the &lt;tbody&gt; as seen in the following example −</p>
<pre class="prettyprint notranslate tryit">&lt;table class = "table table-striped"&gt;
   &lt;caption&gt;Striped Table Layout&lt;/caption&gt;
   
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th&gt;Name&lt;/th&gt;
         &lt;th&gt;City&lt;/th&gt;
         &lt;th&gt;Pincode&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   
   &lt;tbody&gt;
      &lt;tr&gt;
         &lt;td&gt;Tanmay&lt;/td&gt;
         &lt;td&gt;Bangalore&lt;/td&gt;
         &lt;td&gt;560001&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr&gt;
         &lt;td&gt;Sachin&lt;/td&gt;
         &lt;td&gt;Mumbai&lt;/td&gt;
         &lt;td&gt;400003&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr&gt;
         &lt;td&gt;Uma&lt;/td&gt;
         &lt;td&gt;Pune&lt;/td&gt;
         &lt;td&gt;411027&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
   
&lt;/table&gt;
</pre>
<h4>Contextual classes</h4>
<p>The Contextual classes shown in following table will allow you to change the background color of your table rows or individual cells.</p>
<table class="table table-bordered">
<tbody><tr>
<th>Class</th>
<th>Description</th>
</tr>
<tr>
<td>.active</td>
<td>Applies the hover color to a particular row or cell</td>
</tr>
<tr>
<td>.success</td>
<td>Indicates a successful or positive action</td>
</tr>
<tr>
<td>.warning</td>
<td>Indicates a warning that might need attention</td>
</tr>
<tr>
<td>.danger</td>
<td>Indicates a dangerous or potentially negative action</td>
</tr>
</tbody></table>
<p>These classes can be applied to &lt;tr&gt;, &lt;td&gt; or &lt;th&gt;.</p>
<pre class="prettyprint notranslate tryit">&lt;table class = "table"&gt;
   &lt;caption&gt;Contextual Table Layout&lt;/caption&gt;
   
   &lt;thead&gt;
      &lt;tr&gt;
         &lt;th&gt;Product&lt;/th&gt;
         &lt;th&gt;Payment Date&lt;/th&gt;
         &lt;th&gt;Status&lt;/th&gt;
      &lt;/tr&gt;
   &lt;/thead&gt;
   
   &lt;tbody&gt;
      &lt;tr class = "active"&gt;
         &lt;td&gt;Product1&lt;/td&gt;
         &lt;td&gt;23/11/2013&lt;/td&gt;
         &lt;td&gt;Pending&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr class = "success"&gt;
         &lt;td&gt;Product2&lt;/td&gt;
         &lt;td&gt;10/11/2013&lt;/td&gt;
         &lt;td&gt;Delivered&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr class = "warning"&gt;
         &lt;td&gt;Product3&lt;/td&gt;
         &lt;td&gt;20/10/2013&lt;/td&gt;
         &lt;td&gt;In Call to confirm&lt;/td&gt;
      &lt;/tr&gt;
      
      &lt;tr class = "danger"&gt;
         &lt;td&gt;Product4&lt;/td&gt;
         &lt;td&gt;20/10/2013&lt;/td&gt;
         &lt;td&gt;Declined&lt;/td&gt;
      &lt;/tr&gt;
   &lt;/tbody&gt;
   
&lt;/table&gt;
</pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="141_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="143_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'bootstrap_header.php'; ?>
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