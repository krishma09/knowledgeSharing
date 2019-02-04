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
	$sid=228;
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
<p>When we consider a C++ program, it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what do class, object, methods and Instance variables mean.</p>
<ul class="list">
<li><p><b>Object</b> − Objects have Properties and Behaviors. Example: A dog has Properties - color, name, breed as well as Behaviors - wagging, barking, eating. An object is an instance of a class.</p></li>
<li><p><b>Class</b> − A class can be defined as a template/blueprint that describes the behaviors/states that object of its type support.</p></li>
<li><p><b>Methods</b> − A method is basically a behavior. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.</p></li>
<li><p><b>Instance Variables</b> − Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.</p></li>
</ul>
<h4>C++ Program Structure:</h4>
<p>Let us look at a simple code that would print the words <i>Hello World</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="com">// main() is where program execution begins.</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Hello World"</span><span class="pun">;</span><span class="pln"> </span><span class="com">// prints Hello World</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Let us look various parts of the above program:</p>
<ul class="list">
<li><p>The C++ language defines several headers, which contain information that is either necessary or useful to your program. For this program, the header <b>&lt;iostream&gt;</b> is needed.</p></li>
<li><p>The line <b>using namespace std;</b> tells the compiler to use the std namespace. Namespaces are a relatively recent addition to C++.</p></li>
<li><p>The next line <b>// main() is where program execution begins.</b> is a single-line comment available in C++. Single-line comments begin with // and stop at the end of the line.</p></li>
<li><p>The line <b>int main()</b> is the main function where program execution begins.</p></li>
<li><p>The next line <b>cout &lt;&lt; "This is my first C++ program.";</b> causes the message "This is my first C++ program" to be displayed on the screen.</p></li>
<li><p>The next line <b>return 0;</b> terminates main( )function and causes it to return the value 0 to the calling process.</p></li>
</ul>
<h4>Compile &amp; Execute C++ Program</h4>
<p>Let's look at how to save the file, compile and run the program. Please follow the steps given below:</p>
<ul class="list">
<li><p>Open a text editor and add the code as above.</p></li>
<li><p>Save the file as:  hello.cpp</p></li>
<li><p>Open a command prompt and go to the directory where you saved the file.</p></li>
<li><p>Type 'g++ hello.cpp ' and press enter to compile your code. If there are no errors in your code the command prompt will take you to the next line and would generate a.out executable file.</p></li>
<li><p>Now, type ' a.out' to run your program.</p></li>	
<li><p>You will be able to see ' Hello World ' printed on the window.</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$ g</span><span class="pun">++</span><span class="pln"> hello</span><span class="pun">.</span><span class="pln">cpp
$ </span><span class="pun">./</span><span class="pln">a</span><span class="pun">.</span><span class="kwd">out</span><span class="pln">
</span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span></pre>
<p>Make sure that g++ is in your path and that you are running it in the directory containing file hello.cpp.</p>
<p>You can compile C/C++ programs using makefile. For more details, you can check Makefile Tutorial</a>.</p>
<h4>Semicolons &amp; Blocks in C++</h4>
<p>In C++, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.</p>
<p>For example, following are three different statements −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">x </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">;</span><span class="pln">
y </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">+</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
add</span><span class="pun">(</span><span class="pln">x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">);</span></pre>
<p>A block is a set of logically connected statements that are surrounded by opening and closing braces. For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Hello World"</span><span class="pun">;</span><span class="pln"> </span><span class="com">// prints Hello World</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>C++ does not recognize the end of the line as a terminator. For this reason, it does not matter where on a line you put a statement. For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">x </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">;</span><span class="pln">
y </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">+</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
add</span><span class="pun">(</span><span class="pln">x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">);</span></pre>
<p>is the same as</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">x </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">;</span><span class="pln"> y </span><span class="pun">=</span><span class="pln"> y</span><span class="pun">+</span><span class="lit">1</span><span class="pun">;</span><span class="pln"> add</span><span class="pun">(</span><span class="pln">x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">);</span></pre>
<h4>C++ Identifiers</h4>
<p>A C++ identifier is a name used to identify a variable, function, class, module, or any other user-defined item. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores, and digits (0 to 9).</p>
<p>C++ does not allow punctuation characters such as @, $, and % within identifiers. C++ is a case-sensitive programming language. Thus, <b>Manpower</b> and <b>manpower</b> are two different identifiers in C++.</p>
<p>Here are some examples of acceptable identifiers −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">mohd       zara    abc   move_name  a_123
myname50   _temp   j     a23b9      retVal</span></pre>
<h4>C++ Keywords</h4>
<p>The following list shows the reserved words in C++. These reserved words may not be used as constant or variable or any other identifier names.</p>
<table class="table table-bordered">
<tbody><tr>
<td>asm</td>
<td>else</td>
<td>new</td>
<td>this</td>
</tr>
<tr>
<td>auto</td>
<td>enum</td>
<td>operator</td>
<td>throw</td>
</tr>
<tr>
<td>bool</td>
<td>explicit</td>
<td>private</td>
<td>true</td>
</tr>
<tr>
<td>break</td>
<td>export</td>
<td>protected</td>
<td>try</td>
</tr>
<tr>
<td>case</td>
<td>extern</td>
<td>public</td>
<td>typedef</td>
</tr>
<tr>
<td>catch</td>
<td>false</td>
<td>register</td>
<td>typeid</td>
</tr>
<tr>
<td>char</td>
<td>float</td>
<td>reinterpret_cast</td>
<td>typename</td>
</tr>
<tr>
<td>class</td>
<td>for</td>
<td>return</td>
<td>union</td>
</tr>
<tr>
<td>const</td>
<td>friend</td>
<td>short</td>
<td>unsigned</td>
</tr>
<tr>
<td>const_cast</td>
<td>goto</td>
<td>signed</td>
<td>using</td>
</tr>
<tr>
<td>continue</td>
<td>if</td>
<td>sizeof</td>
<td>virtual</td>
</tr>
<tr>
<td>default</td>
<td>inline</td>
<td>static</td>
<td>void</td>
</tr>
<tr>
<td>delete</td>
<td>int</td>
<td>static_cast</td>
<td>volatile</td>
</tr>
<tr>
<td>do</td>
<td>long</td>
<td>struct</td>
<td>wchar_t</td>
</tr>
<tr>
<td>double</td>
<td>mutable</td>
<td>switch</td>
<td>while</td>
</tr>
<tr>
<td>dynamic_cast</td>
<td>namespace</td>
<td>template</td>
<td>&nbsp;</td>
</tr>
</tbody></table>
<h4>Trigraphs</h4>
<p>A few characters have an alternative representation, called a trigraph sequence. A trigraph is a three-character sequence that represents a single character and the sequence always starts with two question marks.</p>
<p>Trigraphs are expanded anywhere they appear, including within string literals and character literals, in comments, and in preprocessor directives.</p>
<p>Following are most frequently used trigraph sequences −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Trigraph</th>
<th>Replacement</th>
</tr>
<tr>
<td>??=</td>
<td>#</td>
</tr>
<tr>
<td>??/</td>
<td>\</td>
</tr>
<tr>
<td>??'</td>
<td>^</td>
</tr>
<tr>
<td>??(</td>
<td>[</td>
</tr>
<tr>
<td>??)</td>
<td>]</td>
</tr>
<tr>
<td>??!</td>
<td>|</td>
</tr>
<tr>
<td>??&lt;</td>
<td>{</td>
</tr>
<tr>
<td>??&gt;</td>
<td>}</td>
</tr>
<tr>
<td>??-</td>
<td>~</td>
</tr>
</tbody></table>
<p>All the compilers do not support trigraphs and they are not advised to be used because of their confusing nature.</p>
<h4>Whitespace in C++</h4>
<p>A line containing only whitespace, possibly with a comment, is known as a blank line, and C++ compiler totally ignores it.</p>
<p>Whitespace is the term used in C++ to describe blanks, tabs, newline characters and comments. Whitespace separates one part of a statement from another and enables the compiler to identify where one element in a statement, such as int, ends and the next element begins. Therefore, in the statement,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">int</span><span class="pln"> age</span><span class="pun">;</span></pre>

<p>there must be at least one whitespace character (usually a space) between int and age for the compiler to be able to distinguish them. On the other hand, in the statement</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">fruit </span><span class="pun">=</span><span class="pln"> apples </span><span class="pun">+</span><span class="pln"> oranges</span><span class="pun">;</span><span class="pln">   </span><span class="com">// Get the total fruit</span></pre>
<p>no whitespace characters are necessary between fruit and =, or between = and apples, although you are free to include some if you wish for readability purpose.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="227_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="229_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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