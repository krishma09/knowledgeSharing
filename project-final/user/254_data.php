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
	$sid=254;
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
<p>An interface describes the behavior or capabilities of a C++ class without committing to a particular implementation of that class.</p>
<p>The C++ interfaces are implemented using <b>abstract classes</b> and these abstract classes should not be confused with data abstraction which is a concept of keeping implementation details separate from associated data.</p>
<p>A class is made abstract by declaring at least one of its functions as <b>pure virtual</b> function. A pure virtual function is specified by placing "= 0" in its declaration as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="com">// pure virtual function</span><span class="pln">
      </span><span class="kwd">virtual</span><span class="pln"> </span><span class="kwd">double</span><span class="pln"> getVolume</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> length</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Length of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> breadth</span><span class="pun">;</span><span class="pln">     </span><span class="com">// Breadth of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Height of a box</span><span class="pln">
</span><span class="pun">};</span></pre>
<p>The purpose of an <b>abstract class</b> (often referred to as an ABC) is to provide an appropriate base class from which other classes can inherit. Abstract classes cannot be used to instantiate objects and serves only as an <b>interface</b>. Attempting to instantiate an object of an abstract class causes a compilation error.</p>
<p>Thus, if a subclass of an ABC needs to be instantiated, it has to implement each of the virtual functions, which means that it supports the interface declared by the ABC.  Failure to override a pure virtual function in a derived class, then attempting to instantiate objects of that class, is a compilation error.</p>
<p>Classes that can be used to instantiate objects are called <b>concrete classes</b>.</p>
<h4>Abstract Class Example</h4>
<p>Consider the following example where parent class provides an interface to the base class  to implement a function called <b>getArea()</b>:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
 
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="com">// Base class</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln">  </span><span class="pun">{</span><span class="pln">

</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="com">// pure virtual function providing interface framework.</span><span class="pln">
   </span><span class="kwd">virtual</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> getArea</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
	
   </span><span class="kwd">void</span><span class="pln"> setWidth</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> w</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      width </span><span class="pun">=</span><span class="pln"> w</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   </span><span class="kwd">void</span><span class="pln"> setHeight</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> h</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      height </span><span class="pun">=</span><span class="pln"> h</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
</span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="com">// Derived classes</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> getArea</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
      </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">);</span><span class="pln"> 
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Triangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> getArea</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
      </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">)/</span><span class="lit">2</span><span class="pun">;</span><span class="pln"> 
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Rectangle</span><span class="pln"> </span><span class="typ">Rect</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Triangle</span><span class="pln">  </span><span class="typ">Tri</span><span class="pun">;</span><span class="pln">
 
   </span><span class="typ">Rect</span><span class="pun">.</span><span class="pln">setWidth</span><span class="pun">(</span><span class="lit">5</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Rect</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">7</span><span class="pun">);</span><span class="pln">
   </span><span class="com">// Print the area of the object.</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Total Rectangle area: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="typ">Rect</span><span class="pun">.</span><span class="pln">getArea</span><span class="pun">()</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="typ">Tri</span><span class="pun">.</span><span class="pln">setWidth</span><span class="pun">(</span><span class="lit">5</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Tri</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">7</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">// Print the area of the object.</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Total Triangle area: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="typ">Tri</span><span class="pun">.</span><span class="pln">getArea</span><span class="pun">()</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln"> 

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Total Rectangle area: 35
Total Triangle area: 17
</pre>
<p>You can see how an abstract class defined an interface in terms of getArea() and two other classes implemented same function but with different algorithm to calculate the area specific to the shape.</p>
<h4>Designing Strategy</h4>

<p>An object-oriented system might use an abstract base class to provide a common and standardized interface appropriate for all the external applications. Then, through inheritance from that abstract base class, derived classes are formed that all operate similarly.</p>
<p>The capabilities (i.e., the public functions) offered by the external applications are provided as pure virtual functions in the abstract base class. The implementations of these pure virtual functions are provided in the derived classes that correspond to the specific types of the application.</p>
<p>This architecture also allows new applications to be added to a system easily, even after the system has been defined.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="253_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="255_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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