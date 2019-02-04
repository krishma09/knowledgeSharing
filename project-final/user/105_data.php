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
	$sid=105;
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




<p>In this chapter, we will discuss Object-Oriented PL/SQL. PL/SQL allows defining an object type, which helps in designing object-oriented database in Oracle. An object type allows you to create composite types. Using objects allow you to implement real world objects with specific structure of data and methods for operating it. Objects have attributes and methods. Attributes are properties of an object and are used for storing an object's state; and methods are used for modeling its behavior.</p>
<p>Objects are created using the CREATE [OR REPLACE] TYPE statement. Following is an example to create a simple <b>address</b> object consisting of few attributes −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE TYPE address AS OBJECT 
</span><span class="pun">(</span><span class="pln">house_no varchar2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">),</span><span class="pln"> 
 street varchar2</span><span class="pun">(</span><span class="lit">30</span><span class="pun">),</span><span class="pln"> 
 city varchar2</span><span class="pun">(</span><span class="lit">20</span><span class="pun">),</span><span class="pln"> 
 state varchar2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">),</span><span class="pln"> 
 pincode varchar2</span><span class="pun">(</span><span class="lit">10</span><span class="pun">)</span><span class="pln"> 
</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Type created. 
</pre>
<p>Let's create one more object <b>customer</b> where we will wrap <b>attributes</b> and <b>methods</b> together to have object-oriented feeling −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE OR REPLACE TYPE customer AS OBJECT 
</span><span class="pun">(</span><span class="pln">code number</span><span class="pun">(</span><span class="lit">5</span><span class="pun">),</span><span class="pln"> 
 name varchar2</span><span class="pun">(</span><span class="lit">30</span><span class="pun">),</span><span class="pln"> 
 contact_no varchar2</span><span class="pun">(</span><span class="lit">12</span><span class="pun">),</span><span class="pln"> 
 addr address</span><span class="pun">,</span><span class="pln"> 
 member procedure display 
</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Type created.
</pre>
<h4>Instantiating an Object</h4>
<p>Defining an object type provides a blueprint for the object. To use this object, you need to create instances of this object. You can access the attributes and methods of the object using the instance name and <b>the access operator (.)</b> as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   residence address</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   residence </span><span class="pun">:=</span><span class="pln"> address</span><span class="pun">(</span><span class="str">'103A'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'M.G.Road'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Jaipur'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Rajasthan'</span><span class="pun">,</span><span class="str">'201301'</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'House No: '</span><span class="pun">||</span><span class="pln"> residence</span><span class="pun">.</span><span class="pln">house_no</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Street: '</span><span class="pun">||</span><span class="pln"> residence</span><span class="pun">.</span><span class="pln">street</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'City: '</span><span class="pun">||</span><span class="pln"> residence</span><span class="pun">.</span><span class="pln">city</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'State: '</span><span class="pun">||</span><span class="pln"> residence</span><span class="pun">.</span><span class="pln">state</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Pincode: '</span><span class="pun">||</span><span class="pln"> residence</span><span class="pun">.</span><span class="pln">pincode</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">House No: 103A 
Street: M.G.Road 
City: Jaipur 
State: Rajasthan 
Pincode: 201301  

PL/SQL procedure successfully completed. 
</pre>
<h4>Member Methods</h4>
<p><b>Member methods</b> are used for manipulating the <b>attributes</b> of the object. You provide the declaration of a member method while declaring the object type. The object body defines the code for the member methods. The object body is created using the CREATE TYPE BODY statement.</p>
<p><b>Constructors</b> are functions that return a new object as its value. Every object has a system defined constructor method. The name of the constructor is same as the object type. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">residence </span><span class="pun">:=</span><span class="pln"> address</span><span class="pun">(</span><span class="str">'103A'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'M.G.Road'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Jaipur'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Rajasthan'</span><span class="pun">,</span><span class="str">'201301'</span><span class="pun">);</span><span class="pln"> </span></pre>
<p>The <b>comparison methods</b> are used for comparing objects. There are two ways to compare objects −</p>
<h5>Map method</h5>
<p>The <b>Map method</b> is a function implemented in such a way that its value depends upon the value of the attributes. For example, for a customer object, if the customer code is same for two customers, both customers could be the same. So the relationship between these two objects would depend upon the value of code.</p>
<h5>Order method</h5>
<p>The <b>Order method</b> implements some internal logic for comparing two objects. For example, for a rectangle object, a rectangle is bigger than another rectangle if both its sides are bigger.</p>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="104_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

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