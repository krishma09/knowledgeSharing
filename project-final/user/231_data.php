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
	$sid=231;
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
<p>A variable provides us with named storage that our programs can manipulate. Each variable in C++ has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>
<p>The name of a variable can be composed of letters, digits, and the underscore character. It must begin with either a letter or an underscore. Upper and lowercase letters are distinct because C++ is case-sensitive:</p>
<p>There are following basic types of variable in C++ as explained in last chapter:</p>
<table class="table table-bordered">
<tbody><tr>
<th width="30%">Type</th>
<th>Description</th>
</tr>
<tr>
<td>bool</td>
<td>Stores either value true or false.</td>
</tr>
<tr>
<td>char</td>
<td>Typically a single octet(one byte). This is an integer type.</td>
</tr>
<tr>
<td>int</td>
<td>The most natural size of integer for the machine.</td>
</tr>
<tr>
<td>float</td>
<td>A single-precision floating point value.</td>
</tr>
<tr>
<td>double</td>
<td>A double-precision floating point value.</td>
</tr>
<tr>
<td>void</td>
<td>Represents the absence of type.</td>
</tr>
<tr>
<td>wchar_t</td>
<td>A wide character type.</td>
</tr>
</tbody></table><p>C++ also allows to define various other types of variables, which we will cover in subsequent chapters like <b>Enumeration, Pointer, Array, Reference, Data structures,</b> and <b>Classes</b>.</p>
<p>Following section will cover how to define, declare and use various types of variables.</p>
<h4>Variable Definition in C++</h4>
<p>A variable definition means to tell the compiler where and how much to create the storage for the variable. A variable definition specifies a data type, and contains a list of one or more variables of that type as follows −</p>
<pre class="result notranslate">type variable_list;
</pre>
<p>Here, <b>type</b> must be a valid C++ data type including char, w_char, int, float, double, bool or any user-defined object, etc., and <b>variable_list</b> may consist of one or more identifier names separated by commas. Some valid declarations are shown here −</p>
<pre class="result notranslate">int    i, j, k;
char   c, ch;
float  f, salary;
double d;
</pre>
<pre class="result notranslate">int    i, j, k;
char   c, ch;
float  f, salary;
double d;
</pre>
<p>The line <b>int    i, j, k;</b> both declares and defines the variables i, j and k; which instructs the compiler to create variables named i, j and k of type int.</p>
<p>Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of an equal sign followed by a constant expression as follows:</p>
<pre class="result notranslate">type variable_name = value;
</pre>
<p>Some examples are:</p>
<pre class="result notranslate">extern int d = 3, f = 5;    // declaration of d and f. 
int d = 3, f = 5;           // definition and initializing d and f. 
byte z = 22;                // definition and initializes z. 
char x = 'x';               // the variable x has the value 'x'.
</pre>
<p>For definition without an initializer: variables with static storage duration are implicitly initialized with NULL (all bytes have the value 0); the initial value of all other variables is undefined.</p>

<h4>Variable Declaration in C++</h4>
<p>A variable declaration provides assurance to the compiler that there is one variable existing with the given type and name so that compiler proceed for further compilation without needing complete detail about the variable. A variable declaration has its meaning at the time of compilation only, compiler needs actual variable definition at the time of linking of the program.</p>
<p>A variable declaration is useful when you are using multiple files and you define your variable in one of the files which will be available at the time of linking of the program. You will use <b>extern</b> keyword to declare a variable at any place. Though you can declare a variable multiple times in your C++ program, but it can be defined only once in a file, a function or a block of code.</p>
<h4>Example</h4>
<p>Try the following example where a variable has been declared at the top, but it has been defined inside the main function:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="com">// Variable declaration:</span><span class="pln">
</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
  
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// Variable definition:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// actual initialization</span><span class="pln">
   a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
   b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
   c </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
 
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> c </span><span class="pun">&lt;&lt;</span><span class="pln"> endl </span><span class="pun">;</span><span class="pln">

   f </span><span class="pun">=</span><span class="pln"> </span><span class="lit">70.0</span><span class="pun">/</span><span class="lit">3.0</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> f </span><span class="pun">&lt;&lt;</span><span class="pln"> endl </span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">30
23.3333
</pre>
<p>Same concept applies on function declaration where you provide a function name at the time of its declaration and its actual definition can be given anywhere else. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">// function declaration</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> func</span><span class="pun">();</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// function call</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> func</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">// function definition</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> func</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Lvalues and Rvalues</h4>
<p>There are two kinds of expressions in C++ −</p>
<ul class="list">
<li><p><b>lvalue</b> − Expressions that refer to a memory location is  called "lvalue" expression. An lvalue may appear as either the left-hand or right-hand side of an assignment.</p></li>
<li><p><b>rvalue</b> − The term rvalue refers to a data value that is stored at some address in memory. An rvalue is an expression that cannot have a value assigned to it which means an rvalue may appear on the right- but not left-hand side of an assignment.</p></li>
</ul>

<p>Variables are lvalues and so may appear on the left-hand side of an assignment. Numeric literals are rvalues and so may not be assigned and can not appear on the left-hand side. Following is a valid statement −</p>
<pre class="result notranslate">int g = 20;
</pre>
<p>But following is not a valid statement and would generate compile-time error −</p>
<pre class="result notranslate">10 = 20;
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="230_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="232_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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