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
	$sid=253;
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

<p>All C++ programs are composed of the following two fundamental elements: </p>
<ul class="list">
<li><p><b>Program statements (code):</b> This is the part of a program that performs actions and they are called functions.</p></li>
<li><p><b>Program data:</b> The data is the information of the program which affected by the program functions.</p></li>
</ul>
<p>Encapsulation is an Object Oriented Programming concept that binds together the data and functions that manipulate the data, and that keeps both safe from outside interference and misuse. Data encapsulation led to the important OOP concept of <b>data hiding</b>.</p>
<p><b>Data encapsulation</b> is a mechanism of bundling the data, and the functions that use them and <b>data abstraction</b> is a mechanism of exposing only the interfaces and hiding the implementation details from the user.</p>
<p>C++ supports the properties of encapsulation and data hiding through the creation of user-defined types, called <b>classes</b>. We already have studied that a class can contain <b>private, protected </b> and <b>public</b> members. By default, all items defined in a class are private. For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> getVolume</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> length </span><span class="pun">*</span><span class="pln"> breadth </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
   </span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> length</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Length of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> breadth</span><span class="pun">;</span><span class="pln">     </span><span class="com">// Breadth of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Height of a box</span><span class="pln">
</span><span class="pun">};</span></pre>
<p>The variables length, breadth, and height are <b>private</b>. This means that they can be accessed only by other members of the Box class, and not by any other part of your program. This is one way encapsulation is achieved.</p>
<p>To make parts of a class <b>public</b>  (i.e., accessible to other parts of your program), you must declare them after the <b>public</b> keyword. All variables or functions defined after the public specifier are accessible by all other functions in your program.</p>
<p>Making one class a friend of another exposes the implementation details and reduces encapsulation. The ideal is to keep as many of the details of each class hidden from all other classes as possible.</p>
<h4>Data Encapsulation Example</h4>
<p>Any C++ program where you implement a class with public and private members is an example of data encapsulation and data abstraction. Consider the following example:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Adder</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="com">// constructor</span><span class="pln">
      </span><span class="typ">Adder</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         total </span><span class="pun">=</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="com">// interface to outside world</span><span class="pln">
      </span><span class="kwd">void</span><span class="pln"> addNum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> number</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         total </span><span class="pun">+=</span><span class="pln"> number</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="com">// interface to outside world</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> getTotal</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> total</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">};</span><span class="pln">
		
   </span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
      </span><span class="com">// hidden data from outside world</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> total</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Adder</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
   
   a</span><span class="pun">.</span><span class="pln">addNum</span><span class="pun">(</span><span class="lit">10</span><span class="pun">);</span><span class="pln">
   a</span><span class="pun">.</span><span class="pln">addNum</span><span class="pun">(</span><span class="lit">20</span><span class="pun">);</span><span class="pln">
   a</span><span class="pun">.</span><span class="pln">addNum</span><span class="pun">(</span><span class="lit">30</span><span class="pun">);</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Total "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> a</span><span class="pun">.</span><span class="pln">getTotal</span><span class="pun">()</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Total 60
</pre>
<p>Above class adds numbers together, and returns the sum. The public members <b>addNum</b> and <b>getTotal </b> are the interfaces to the outside world and a user needs to know them to use the class. The private member <b>total</b> is something that is hidden from the outside world, but is needed for the class to operate properly.</p>
<h4>Designing Strategy:</h4>
<p>Most of us have learned through bitter experience to make class members private by default unless we really need to expose them. That's just good <b>encapsulation</b>.</p>
<p>This wisdom is applied most frequently to data members, but it applies equally to all members, including virtual functions.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="252_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="254_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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