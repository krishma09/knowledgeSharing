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
	$sid=75;
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




<p>JavaScript is an Object Oriented Programming (OOP) language. A programming language can be called object-oriented if it provides four basic capabilities to developers −</p>
<ul class="list">
<li><p><b>Encapsulation</b> − the capability to store related information, whether data or methods, together in an object.</p></li>
<li><p><b>Aggregation</b> − the capability to store one object inside another object.</p></li>
<li><p><b>Inheritance</b> − the capability of a class to rely upon another class (or number of classes) for some of its properties and methods.</p></li>
<li><p><b>Polymorphism</b> − the capability to write one function or method that works in a variety of different ways.</p></li>
</ul>
<p>Objects are composed of attributes. If an attribute contains a function, it is considered to be a method of the object, otherwise the attribute is considered a property.</p>
<h4>Object Properties</h4>
<p>Object properties can be any of the three primitive data types, or any of the abstract data types, such as another object. Object properties are usually variables that are used internally in the object's methods, but can also be globally visible variables that are used throughout the page.</p>
<p>The syntax for adding a property to an object is −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">objectName</span><span class="pun">.</span><span class="pln">objectProperty </span><span class="pun">=</span><span class="pln"> propertyValue</span><span class="pun">;</span></pre>
<p><b>For example</b> − The following code gets the document title using the <b>"title"</b> property of the <b>document</b> object.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> str </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">title</span><span class="pun">;</span></pre>
<h4>Object Methods</h4>
<p>Methods are the functions that let the object do something or let something be done to it. There is a small difference between a function and a method – at a function is a standalone unit of statements and a method is attached to an object and can be referenced by the <b>this</b> keyword.</p>
<p>Methods are useful for everything from displaying the contents of the object to the screen to performing complex mathematical operations on a group of local properties and parameters.</p>
<p><b>For example</b> − Following is a simple example to show how to use the <b>write()</b> method of document object to write any content on the document.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"This is test"</span><span class="pun">);</span></pre>
<h4>User-Defined Objects</h4>
<p>All user-defined objects and built-in objects are descendants of an object called <b>Object</b>.</p>
<h5>The new Operator</h5>
<p>The <b>new</b> operator is used to create an instance of an object. To create an object, the <b>new</b> operator is followed by the constructor method.</p>
<p>In the following example, the constructor methods are Object(), Array(), and Date(). These constructors are built-in JavaScript functions.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> employee </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">();</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> books </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Array</span><span class="pun">(</span><span class="str">"C++"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Perl"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Java"</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> day </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">(</span><span class="str">"August 15, 1947"</span><span class="pun">);</span></pre>
<h5>The Object() Constructor</h5>
<p>A constructor is a function that creates and initializes an object. JavaScript provides a special constructor function called <b>Object()</b> to build the object. The return value of the <b>Object()</b> constructor is assigned to a variable.</p>
<p>The variable contains a reference to the new object. The properties assigned to the object are not variables and are not defined with the <b>var</b> keyword.</p>
<h5>Example 1</h5>
<p>Try the following example; it demonstrates how to create an Object.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">User-defined objects</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> book </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">();</span><span class="pln">   </span><span class="com">// Create the object</span><span class="pln">
         book</span><span class="pun">.</span><span class="pln">subject </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Perl"</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Assign properties to the object</span><span class="pln">
         book</span><span class="pun">.</span><span class="pln">author  </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Mohtashim"</span><span class="pun">;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book name is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">subject </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book author is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">author </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Book name is : Perl 
Book author is : Mohtashim
</pre>
<h5>Example 2</h5>
<p>This example demonstrates how to create an object with a User-Defined Function. Here <b>this</b> keyword is used to refer to the object that has been passed to a function.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;title&gt;</span><span class="pln">User-defined objects</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> book</span><span class="pun">(</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> author</span><span class="pun">){</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">title </span><span class="pun">=</span><span class="pln"> title</span><span class="pun">;</span><span class="pln"> 
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">author  </span><span class="pun">=</span><span class="pln"> author</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> myBook </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> book</span><span class="pun">(</span><span class="str">"Perl"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Mohtashim"</span><span class="pun">);</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book title is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> myBook</span><span class="pun">.</span><span class="pln">title </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book author is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> myBook</span><span class="pun">.</span><span class="pln">author </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Book title is : Perl 
Book author is : Mohtashim
</pre>
<h4>The 'with' Keyword</h4>
<p>The <b>‘with’</b> keyword is used as a kind of shorthand for referencing an object's properties or methods.</p>
<p>The object specified as an argument to <b>with</b> becomes the default object for the duration of the block that follows. The properties and methods for the object can be used without naming the object.</p>
<h5>Syntax</h5>
<p>The syntax for with object is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">with</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">object</span><span class="pun">){</span><span class="pln">
   properties used without the </span><span class="kwd">object</span><span class="pln"> name </span><span class="kwd">and</span><span class="pln"> dot
</span><span class="pun">}</span></pre>
<h5>Example</h5>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;title&gt;</span><span class="pln">User-defined objects</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="com">// Define a function which will work as a method</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> addPrice</span><span class="pun">(</span><span class="pln">amount</span><span class="pun">){</span><span class="pln">
            </span><span class="kwd">with</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">){</span><span class="pln">
               price </span><span class="pun">=</span><span class="pln"> amount</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">function</span><span class="pln"> book</span><span class="pun">(</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> author</span><span class="pun">){</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">title </span><span class="pun">=</span><span class="pln"> title</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">author  </span><span class="pun">=</span><span class="pln"> author</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">price </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">addPrice </span><span class="pun">=</span><span class="pln"> addPrice</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Assign that method as property.</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> myBook </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> book</span><span class="pun">(</span><span class="str">"Perl"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Mohtashim"</span><span class="pun">);</span><span class="pln">
         myBook</span><span class="pun">.</span><span class="pln">addPrice</span><span class="pun">(</span><span class="lit">100</span><span class="pun">);</span><span class="pln">
         
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book title is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> myBook</span><span class="pun">.</span><span class="pln">title </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book author is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> myBook</span><span class="pun">.</span><span class="pln">author </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Book price is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> myBook</span><span class="pun">.</span><span class="pln">price </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br&gt;"</span><span class="pun">);</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>

Output

<pre class="result notranslate">Book title is : Perl 
Book author is : Mohtashim 
Book price is : 100
</pre>
<h4>JavaScript Native Objects</h4>
<p>JavaScript has several built-in or native objects. These objects are accessible anywhere in your program and will work the same way in any browser running in any operating system.</p>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="74_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="76_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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