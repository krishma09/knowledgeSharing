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
	$sid=248;
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
<p>The main purpose of C++ programming is to add object orientation to the C programming language and classes are the central feature of C++ that supports object-oriented programming and are often called user-defined types.</p>
<p>A class is used to specify the form of an object and it combines data representation and methods for manipulating that data into one neat package. The data and functions within a class are called members of the class.</p>
<h4>C++ Class Definitions</h4>
<p>When you define a class, you define a blueprint for a data type. This doesn't actually define any data, but it does define what the class name means, that is, what an object of the class will consist of and what operations can be performed on such an object.</p>
<p>A class definition starts with the keyword <b>class</b> followed by the class name; and the class body, enclosed by a pair of curly braces. A class definition must be followed either by a semicolon or a list of declarations. For example, we defined the Box data type using the keyword <b>class</b> as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> length</span><span class="pun">;</span><span class="pln">   </span><span class="com">// Length of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> breadth</span><span class="pun">;</span><span class="pln">  </span><span class="com">// Breadth of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">   </span><span class="com">// Height of a box</span><span class="pln">
</span><span class="pun">};</span></pre>

<p>The keyword <b>public</b> determines the access attributes of the members of the class that follow it. A public member can be accessed from outside the class anywhere within the scope of the class object. You can also specify the members of a class as <b>private</b> or <b>protected</b> which we will discuss in a sub-section.</p>
<h4>Define C++ Objects</h4>

<p>A class provides the blueprints for objects, so basically an object is created from a class. We declare objects of a class with exactly the same sort of declaration that we declare variables of basic types. Following statements declare two objects of class Box:</p>
<pre class="result notranslate">Box Box1;          // Declare Box1 of type Box
Box Box2;          // Declare Box2 of type Box
</pre>
<p>Both of the objects Box1 and Box2 will have their own copy of data members.</p>
<h4>Accessing the Data Members</h4>
<p>The public data members of objects of a class can be accessed using the direct member access operator (.). Let us try the following example to make the things clear:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> length</span><span class="pun">;</span><span class="pln">   </span><span class="com">// Length of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> breadth</span><span class="pun">;</span><span class="pln">  </span><span class="com">// Breadth of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">   </span><span class="com">// Height of a box</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Box</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">;</span><span class="pln">        </span><span class="com">// Declare Box1 of type Box</span><span class="pln">
   </span><span class="typ">Box</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">;</span><span class="pln">        </span><span class="com">// Declare Box2 of type Box</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> volume </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0.0</span><span class="pun">;</span><span class="pln">     </span><span class="com">// Store the volume of a box here</span><span class="pln">
 
   </span><span class="com">// box 1 specification</span><span class="pln">
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">height </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5.0</span><span class="pun">;</span><span class="pln"> 
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">length </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6.0</span><span class="pun">;</span><span class="pln"> 
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">breadth </span><span class="pun">=</span><span class="pln"> </span><span class="lit">7.0</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// box 2 specification</span><span class="pln">
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">height </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10.0</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">length </span><span class="pun">=</span><span class="pln"> </span><span class="lit">12.0</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">breadth </span><span class="pun">=</span><span class="pln"> </span><span class="lit">13.0</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">// volume of box 1</span><span class="pln">
   volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">height </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">length </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">breadth</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Volume of Box1 : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> volume </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// volume of box 2</span><span class="pln">
   volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">height </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">length </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">breadth</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Volume of Box2 : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> volume </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
	
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Volume of Box1 : 210
Volume of Box2 : 1560
</pre>
<p>It is important to note that private and protected members can not be accessed directly using direct member access operator (.). We will learn how private and protected members can be accessed.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="247_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="249_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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