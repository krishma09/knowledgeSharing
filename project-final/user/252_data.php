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
	$sid=252;
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
<p>Data abstraction refers to, providing only essential information to the outside world and hiding their background details, i.e., to represent the needed information in program without presenting the details.</p>
<p>Data abstraction is a programming (and design) technique that relies on the separation of interface and implementation.</p>
<p>Let's take one real life example of a TV, which you can turn on and off, change the channel, adjust the volume, and add external components such as speakers, VCRs, and DVD players, BUT you do not know its internal details, that is, you do not know how it receives signals over the air or through a cable, how it translates them, and  finally displays them on the screen.</p>
<p>Thus, we can say a television clearly separates its internal implementation from its external interface and you can play with its interfaces like the power button, channel changer, and volume control without having zero knowledge of its internals.</p>
<p>Now, if we talk in terms of C++ Programming, C++ classes provides great level of <b>data abstraction</b>. They provide sufficient public methods to the outside world to play with the functionality of the object and to manipulate object data, i.e., state without actually knowing how class has been implemented internally.</p>
<p>For example, your program can make a call to the <b>sort()</b> function without knowing what algorithm the function actually uses to sort the given values. In fact, the underlying implementation of the sorting functionality could change between releases of the library, and as long as the interface stays the same, your function call will still work.</p>
<p>In C++, we use <b>classes</b> to define our own abstract data types (ADT). You can use the <b>cout</b> object of class <b>ostream</b> to stream data to standard output like this:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Hello C++"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here, you don't need to understand how <b>cout</b> displays the text on the user's screen. You need to only know the public interface and the underlying implementation of cout is free to change.</p>
<h4>Access Labels Enforce Abstraction</h4>
<p>In C++, we use access labels to define the abstract interface to the class. A class may contain zero or more access labels:</p>
<ul class="list">
<li><p>Members defined with a public label are accessible to all parts of the program. The data-abstraction view of a type is defined by its public members.</p></li>
<li><p>Members defined with a private label are not accessible to code that uses the class. The private sections hide the implementation from code that uses the type.</p></li>
</ul>
<p>There are no restrictions on how often an access label may appear. Each access label specifies the access level of the succeeding member definitions. The specified access level remains in effect until the next access label is encountered or the closing right brace of the class body is seen.</p>

<h4>Benefits of Data Abstraction</h4>
<p>Data abstraction provides two important advantages:</p>
<ul class="list">
<li><p>Class internals are protected from inadvertent user-level errors, which might corrupt the state of the object.</p></li>
<li><p>The class implementation may evolve over time in response to changing requirements or bug reports without requiring change in user-level code.</p></li>
</ul>
<p>By defining data members only in the private section of the class, the class author is free to make changes in the data. If the implementation changes, only the class code needs to be examined to see what affect the change may have. If data are public, then any function that directly accesses the data members of the old representation might be broken.</p>
<h4>Data Abstraction Example:</h4>
<p>Any C++ program where you implement a class with public and private members is an example of data abstraction. Consider the following example:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Adder</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
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
<p>Above class adds numbers together, and returns the sum. The public members <b>addNum</b> and <b>getTotal</b> are the interfaces to the outside world and a user needs to know them to use the class. The private member <b>total</b> is something that the user doesn't need to know about, but is needed for the class to operate properly.</p>
<h4>Designing Strategy</h4>
<p>In this case whatever programs are using these interfaces, they would not be impacted and would just need a recompilation with the latest implementation.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="251_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="253_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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