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
	$sid=250;
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
<p>C++ allows you to specify more than one definition for a <b>function</b> name or an <b>operator</b> in the same scope, which is called <b>function overloading</b> and <b>operator overloading</b> respectively.</p>
<p>An overloaded declaration is a declaration that had been declared with the same name as a previously declared declaration in the same scope, except that both declarations have different arguments and obviously different definition (implementation).</p>
<p>When you call an overloaded <b>function</b> or <b>operator</b>, the compiler determines the most appropriate definition to use by comparing the argument types you used to call the function or operator with the parameter types specified in the definitions. The process of selecting the most appropriate overloaded function or operator is called <b>overload resolution</b>.</p>
<h4>Function overloading in C++</h4>
<p>You can have multiple definitions for the same function name in the same scope. The definition of the function must differ from each other by the types and/or the number of arguments in the argument list. You can not overload function declarations that differ only by return type.</p>
<p>Following is the example where same function <b>print()</b> is being used to print different data types:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">class</span><span class="pln"> printData </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing int: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">double</span><span class="pln">  f</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing float: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> f </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">*</span><span class="pln"> c</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing character: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> c </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printData pd</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// Call print to print integer</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="lit">5</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">// Call print to print float</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="lit">500.263</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">// Call print to print character</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Hello C++"</span><span class="pun">);</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">class</span><span class="pln"> printData </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing int: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">double</span><span class="pln">  f</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing float: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> f </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> </span><span class="kwd">print</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">*</span><span class="pln"> c</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Printing character: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> c </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printData pd</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// Call print to print integer</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="lit">5</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">// Call print to print float</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="lit">500.263</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">// Call print to print character</span><span class="pln">
   pd</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Hello C++"</span><span class="pun">);</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Printing int: 5
Printing float: 500.263
Printing character: Hello C++
</pre>
<h4>Operators overloading in C++</h4>
<p>You can redefine or overload most of the built-in operators available in C++. Thus a programmer can use operators with user-defined types as well.</p>
<p>Overloaded operators are functions with special names the keyword operator followed by the symbol for the operator being defined. Like any other function, an overloaded operator has a return type and a parameter list.</p>
<pre class="result notranslate">Box operator+(const Box&amp;);
</pre>
<p>declares the addition operator that can be used to <b>add</b> two Box objects and returns final Box object. Most overloaded operators may be defined as ordinary non-member functions or as class member functions. In case we define above function as non-member function of a class then we would have to pass two arguments for each operand as follows:</p>
<pre class="result notranslate">Box operator+(const Box&amp;, const Box&amp;);
</pre>
<p>Following is the example to show the concept of operator over loading using a member function. Here an object is passed as an argument whose properties will be accessed using this object, the object which will call this operator can be accessed using <b>this</b> operator as explained below:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">

      </span><span class="kwd">double</span><span class="pln"> getVolume</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> length </span><span class="pun">*</span><span class="pln"> breadth </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="kwd">void</span><span class="pln"> setLength</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">double</span><span class="pln"> len </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         length </span><span class="pun">=</span><span class="pln"> len</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> setBreadth</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">double</span><span class="pln"> bre </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         breadth </span><span class="pun">=</span><span class="pln"> bre</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">void</span><span class="pln"> setHeight</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">double</span><span class="pln"> hei </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> hei</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="com">// Overload + operator to add two Box objects.</span><span class="pln">
      </span><span class="typ">Box</span><span class="pln"> </span><span class="kwd">operator</span><span class="pun">+(</span><span class="kwd">const</span><span class="pln"> </span><span class="typ">Box</span><span class="pun">&amp;</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">Box</span><span class="pln"> box</span><span class="pun">;</span><span class="pln">
         box</span><span class="pun">.</span><span class="pln">length </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">length </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">.</span><span class="pln">length</span><span class="pun">;</span><span class="pln">
         box</span><span class="pun">.</span><span class="pln">breadth </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">breadth </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">.</span><span class="pln">breadth</span><span class="pun">;</span><span class="pln">
         box</span><span class="pun">.</span><span class="pln">height </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">height </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">.</span><span class="pln">height</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> box</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
   </span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> length</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Length of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> breadth</span><span class="pun">;</span><span class="pln">     </span><span class="com">// Breadth of a box</span><span class="pln">
      </span><span class="kwd">double</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">      </span><span class="com">// Height of a box</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="com">// Main function for the program</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Box</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">;</span><span class="pln">                </span><span class="com">// Declare Box1 of type Box</span><span class="pln">
   </span><span class="typ">Box</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">;</span><span class="pln">                </span><span class="com">// Declare Box2 of type Box</span><span class="pln">
   </span><span class="typ">Box</span><span class="pln"> </span><span class="typ">Box3</span><span class="pun">;</span><span class="pln">                </span><span class="com">// Declare Box3 of type Box</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> volume </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0.0</span><span class="pun">;</span><span class="pln">     </span><span class="com">// Store the volume of a box here</span><span class="pln">
 
   </span><span class="com">// box 1 specification</span><span class="pln">
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">setLength</span><span class="pun">(</span><span class="lit">6.0</span><span class="pun">);</span><span class="pln"> 
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">setBreadth</span><span class="pun">(</span><span class="lit">7.0</span><span class="pun">);</span><span class="pln"> 
   </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">5.0</span><span class="pun">);</span><span class="pln">
 
   </span><span class="com">// box 2 specification</span><span class="pln">
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setLength</span><span class="pun">(</span><span class="lit">12.0</span><span class="pun">);</span><span class="pln"> 
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setBreadth</span><span class="pun">(</span><span class="lit">13.0</span><span class="pun">);</span><span class="pln"> 
   </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">10.0</span><span class="pun">);</span><span class="pln">
 
   </span><span class="com">// volume of box 1</span><span class="pln">
   volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box1</span><span class="pun">.</span><span class="pln">getVolume</span><span class="pun">();</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Volume of Box1 : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> volume </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// volume of box 2</span><span class="pln">
   volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">getVolume</span><span class="pun">();</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Volume of Box2 : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> volume </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// Add two object as follows:</span><span class="pln">
   </span><span class="typ">Box3</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box1</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// volume of box 3</span><span class="pln">
   volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box3</span><span class="pun">.</span><span class="pln">getVolume</span><span class="pun">();</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Volume of Box3 : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> volume </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Volume of Box1 : 210
Volume of Box2 : 1560
Volume of Box3 : 5400
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="249_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="251_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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