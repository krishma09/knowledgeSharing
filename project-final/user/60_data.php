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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=60;
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




<h4>JavaScript Datatypes</h4>
<p>One of the most fundamental characteristics of a programming language is the set of data types it supports. These are the type of values that can be represented and manipulated in a programming language.</p>
<p>JavaScript allows you to work with three primitive data types −</p>
<ul class="list">
<li><p><b>Numbers,</b> eg. 123, 120.50 etc.</p></li>
<li><p><b>Strings</b> of text  e.g. "This text string" etc.</p></li>
<li><p><b>Boolean</b> e.g. true or false.</p></li>
</ul>
<p>JavaScript also defines two trivial data types, <b>null</b> and <b>undefined,</b> each of which defines only a single value. In addition to these primitive data types, JavaScript supports a composite data type known as <b>object</b>. We will cover objects in detail in a separate chapter.</p>
<p><b>Note</b> − JavaScript does not make a distinction between integer values and floating-point values. All numbers in JavaScript are represented as floating-point values. JavaScript represents numbers using the 64-bit floating-point format defined by the IEEE 754 standard.</p>
<h4>JavaScript Variables</h4>
<p>Like many other programming languages, JavaScript has variables. Variables can be thought of as named containers. You can place data into these containers and then refer to the data simply by naming the container.</p>
<p>Before you use a variable in a JavaScript program, you must declare it. Variables are declared with the <b>var</b> keyword as follows.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> money</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> name</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>You can also declare multiple variables with the same <b>var</b> keyword as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> money</span><span class="pun">,</span><span class="pln"> name</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>Storing a value in a variable is called <b>variable initialization</b>. You can do variable initialization at the time of variable creation or at a later point in time when you need that variable.</p>
<p>For instance, you might create a variable named <b>money</b> and assign the value 2000.50 to it later. For another variable, you can assign a value at the time of initialization as follows.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Ali"</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> money</span><span class="pun">;</span><span class="pln">
      money </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2000.50</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p><b>Note</b> − Use the <b>var</b> keyword only for declaration or initialization, once for the life of any variable name in a document. You should not re-declare same variable twice.</p>
<p>JavaScript is <b>untyped</b> language. This means that a JavaScript variable can hold a value of any data type. Unlike many other languages, you don't have to tell JavaScript during variable declaration what type of value the variable will hold. The value type of a variable can change during the execution of a program and JavaScript takes care of it automatically.</p>
<h4>JavaScript Variable Scope</h4>
<p>The scope of a variable is the region of your program in which it is defined. JavaScript variables have only two scopes.</p>
<ul class="list">
<li><p><b>Global Variables</b> − A global variable has global scope which means it can be defined anywhere in your JavaScript code.</p></li>
<li><p><b>Local Variables</b> − A local variable will be visible only within a function where it is defined. Function parameters are always local to that function.</p></li>
</ul>
<p>Within the body of a function, a local variable takes precedence over a global variable with the same name. If you declare a local variable or function parameter with the same name as a global variable, you effectively hide the global variable. Take a look into the following example.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body</span><span class="pln"> </span><span class="atn">onload</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> checkscope</span><span class="pun">();</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> myVar </span><span class="pun">=</span><span class="pln"> </span><span class="str">"global"</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Declare a global variable</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> checkscope</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> myVar </span><span class="pun">=</span><span class="pln"> </span><span class="str">"local"</span><span class="pun">;</span><span class="pln">  </span><span class="com">// Declare a local variable</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">myVar</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This produces the following result −</p>
<pre class="result notranslate">local
</pre>
<h4>JavaScript Variable Names</h4>
<p>While naming your variables in JavaScript, keep the following rules in mind.</p>
<ul class="list">
<li><p>You should not use any of the JavaScript reserved keywords as a variable name. These keywords are mentioned in the next section. For example, <b>break</b> or <b>boolean</b> variable names are not valid.</p></li>
<li><p>JavaScript variable names should not start with a numeral (0-9). They must begin with a letter or an underscore character. For example, <b>123test</b> is an invalid variable name but <b>_123test</b> is a valid one.</p></li>
<li><p>JavaScript variable names are case-sensitive. For example, <b>Name</b> and <b>name</b> are two different variables.</p></li>
</ul>
<h4>JavaScript Reserved Words</h4>
<p>A list of all the reserved words in JavaScript are given in the following table. They cannot be used as JavaScript variables, functions, methods, loop labels, or any object names.</p>
<table class="table table-bordered">
<tbody><tr>
<td>
<p>abstract</p>
<p>boolean</p>
<p>break</p>
<p>byte</p>
<p>case</p>
<p>catch</p>
<p>char</p>
<p>class</p>
<p>const</p>
<p>continue</p>
<p>debugger</p>
<p>default</p>
<p>delete</p>
<p>do</p>
<p>double</p>
</td>
<td><p>else</p>
<p>enum</p>
<p>export</p>
<p>extends</p>
<p>false</p>
<p>final</p>
<p>finally</p>
<p>float</p>
<p>for</p>
<p>function</p>
<p>goto</p>
<p>if</p>
<p>implements</p>
<p>import</p>
<p>in</p>
</td>
<td>
<p>instanceof</p>
<p>int</p>
<p>interface</p>
<p>long</p>
<p>native</p>
<p>new</p>
<p>null</p>
<p>package</p>
<p>private</p>
<p>protected</p>
<p>public</p>
<p>return</p>
<p>short</p>
<p>static</p>
<p>super</p></td>
<td>
<p>switch</p>
<p>synchronized</p>
<p>this</p>
<p>throw</p>
<p>throws</p>
<p>transient</p>
<p>true</p>
<p>try</p>
<p>typeof</p>
<p>var</p>
<p>void</p>
<p>volatile</p>
<p>while</p>
<p>with</p>
</td>
</tr>
</tbody></table>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="59_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="61_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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