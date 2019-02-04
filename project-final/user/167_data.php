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
<title>JQuery Tutorials | knowledge.com</title>
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
	$sid=167;
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





<p>jQuery is a framework built using JavaScript capabilities. So while developing your applications using jQuery, you can use all the functions and other capabilities available in JavaScript.</p>
<p>This chapter would explain most basic concepts but frequently used in jQuery based applications.</p>
<h4>String</h4>
<p>A string in JavaScript is an immutable object that contains none, one or many characters.</p>
<p>Following are the valid examples of a JavaScript String −</p>
<pre class="result notranslate">"This is JavaScript String"
'This is JavaScript String'
'This is "really" a JavaScript String'
"This is 'really' a JavaScript String"
</pre>
<h4>Numbers</h4>
<p>Numbers in JavaScript are double-precision 64-bit format IEEE 754 values. They are immutable, just as strings.</p>
<p>Following are the valid examples of a JavaScript Numbers −</p>
<pre class="result notranslate">5350
120.27
0.26
</pre>
<h4>Boolean</h4>
<p>A boolean in JavaScript can be either <b>true</b> or <b>false</b>. If a number is zero, it defaults to false. If an empty string defaults to false −</p>
<p>Following are the valid examples of a JavaScript Boolean −</p>
<pre class="result notranslate">true      // true
false     // false
0         // false
1         // true
""        // false
"hello"   // true
</pre>
<h4>Objects</h4>
<p>JavaScript supports Object concept very well. You can create an object using the object literal as follows −</p>
<pre class="result notranslate">var emp = {
   name: "Zara",
   age: 10
};
</pre>
<p>You can write and read properties of an object using the dot notation as follows −</p>
<pre class="result notranslate">// Getting object properties
emp.name  // ==&gt; Zara
emp.age   // ==&gt; 10

// Setting object properties
emp.name = "Daisy"  // &lt;== Daisy
emp.age  =  20      // &lt;== 20
</pre>
<h4>Arrays</h4>
<p>You can define arrays using the array literal as follows −</p>
<pre class="result notranslate">var x = [];
var y = [1, 2, 3, 4, 5];
</pre>
<p>An array has a <b>length</b> property that is useful for iteration −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> x </span><span class="pun">=</span><span class="pln"> </span><span class="pun">[</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">];</span><span class="pln">

</span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> x</span><span class="pun">.</span><span class="pln">length</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// Do something with x[i]</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Functions</h4>
<p>A function in JavaScript can be either named or anonymous. A named function can be defined using <i>function</i> keyword as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> named</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">// do some stuff here</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>An anonymous function can be defined in similar way as a normal function but it would not have any name.</p>
<p>A anonymous function can be assigned to a variable or passed to a method as shown below.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> handler </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(){</span><span class="pln">
   </span><span class="com">// do some stuff here</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>JQuery makes a use of anonymous functions very frequently as follows −</p> 
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">// do some stuff here</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>Arguments</h4>
<p>JavaScript variable <i>arguments</i> is a kind of array which has <i>length</i> property. Following example explains it very well −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> func</span><span class="pun">(</span><span class="pln">x</span><span class="pun">){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="kwd">typeof</span><span class="pln"> x</span><span class="pun">,</span><span class="pln"> arguments</span><span class="pun">.</span><span class="pln">length</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

func</span><span class="pun">();</span><span class="pln">                </span><span class="com">//==&gt; "undefined", 0</span><span class="pln">
func</span><span class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">               </span><span class="com">//==&gt; "number", 1</span><span class="pln">
func</span><span class="pun">(</span><span class="str">"1"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"2"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"3"</span><span class="pun">);</span><span class="pln">   </span><span class="com">//==&gt; "string", 3</span></pre>
<p>The arguments object also has a <i>callee</i> property, which refers to the function you're inside of. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> func</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> arguments</span><span class="pun">.</span><span class="pln">callee</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span><span class="pln">

func</span><span class="pun">();</span><span class="pln">                </span><span class="com">// ==&gt; func</span></pre>
<h4>Context</h4>
<p>JavaScript famous keyword <b>this</b> always refers to the current context.  Within a function <b>this</b> context can change, depending on how the function is called −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// this refers to window.document</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

$</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// this refers to a div DOM element</span><span class="pln">
</span><span class="pun">});</span></pre>
<p>You can specify the context for a function call using the function-built-in methods <b>call()</b> and <b>apply()</b> methods.</p>
<p>The difference between them is how they pass arguments. Call passes all arguments through as arguments to the function, while apply accepts an array as the arguments.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> scope</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">,</span><span class="pln"> arguments</span><span class="pun">.</span><span class="pln">length</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

scope</span><span class="pun">()</span><span class="pln"> </span><span class="com">// window, 0</span><span class="pln">
scope</span><span class="pun">.</span><span class="pln">call</span><span class="pun">(</span><span class="str">"foobar"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[</span><span class="lit">1</span><span class="pun">,</span><span class="lit">2</span><span class="pun">]);</span><span class="pln">  </span><span class="com">//==&gt; "foobar", 1</span><span class="pln">
scope</span><span class="pun">.</span><span class="pln">apply</span><span class="pun">(</span><span class="str">"foobar"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[</span><span class="lit">1</span><span class="pun">,</span><span class="lit">2</span><span class="pun">]);</span><span class="pln"> </span><span class="com">//==&gt; "foobar", 2</span></pre>
<h4>Scope</h4>
<p>The scope of a variable is the region of your program in which it is defined. JavaScript variable will have only two scopes.</p>
<ul class="list">
<li><p><b>Global Variables</b> − A global variable has global scope which means it is defined everywhere in your JavaScript code.</p></li>
<li><p><b>Local Variables</b> − A local variable will be visible only within a function  where it is defined. Function parameters are always local to that function.</p></li>
</ul>
<p>Within the body of a function, a local variable takes precedence over a global variable with the same name −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> myVar </span><span class="pun">=</span><span class="pln"> </span><span class="str">"global"</span><span class="pun">;</span><span class="pln">     </span><span class="com">// ==&gt; Declare a global variable</span><span class="pln">

</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> myVar </span><span class="pun">=</span><span class="pln"> </span><span class="str">"local"</span><span class="pun">;</span><span class="pln">   </span><span class="com">// ==&gt; Declare a local variable</span><span class="pln">
   document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">myVar</span><span class="pun">);</span><span class="pln"> </span><span class="com">// ==&gt; local</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Callback</h4>
<p>A callback is a plain JavaScript function passed to some method as an argument or option. Some callbacks are just events, called to give the user a chance to react when a certain state is triggered.</p>
<p>jQuery's event system uses such callbacks everywhere for example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">(</span><span class="str">"body"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="kwd">event</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"clicked: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="kwd">event</span><span class="pun">.</span><span class="pln">target</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span></pre>
<p>Most callbacks provide arguments and a context. In the event-handler example, the callback is called with one argument, an Event.</p>
<p>Some callbacks are required to return something, others make that return value optional. To prevent a form submission, a submit event handler can return false as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">(</span><span class="str">"#myform"</span><span class="pun">).</span><span class="pln">submit</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>Closures</h4>
<p>Closures are created whenever a variable that is defined outside the current scope is accessed from within some inner scope.</p>
<p>Following example shows how the variable <b>counter</b> is visible within the create, increment, and print functions, but not outside of them −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> create</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> counter </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
	
   </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      increment</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         counter</span><span class="pun">++;</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
		
      </span><span class="kwd">print</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">counter</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> create</span><span class="pun">();</span><span class="pln">
c</span><span class="pun">.</span><span class="pln">increment</span><span class="pun">();</span><span class="pln">
c</span><span class="pun">.</span><span class="kwd">print</span><span class="pun">();</span><span class="pln">     </span><span class="com">// ==&gt; 1</span></pre>
<p>This pattern allows you to create objects with methods that operate on data that isn't visible to the outside world. It should be noted that <b>data hiding</b> is the very basis of object-oriented programming.</p>
<h4>Proxy Pattern</h4>
<p>A proxy is an object that can be used to control access to another object. It implements the same interface as this other object and passes on any method invocations to it. This other object is often called the real subject.</p>
<p>A proxy can be instantiated in place of this real subject and allow it to be accessed remotely. We can saves jQuery's setArray method in a closure and overwrites it as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// log all calls to setArray</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> proxied </span><span class="pun">=</span><span class="pln"> jQuery</span><span class="pun">.</span><span class="pln">fn</span><span class="pun">.</span><span class="pln">setArray</span><span class="pun">;</span><span class="pln">

   jQuery</span><span class="pun">.</span><span class="pln">fn</span><span class="pun">.</span><span class="pln">setArray </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">,</span><span class="pln"> arguments</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> proxied</span><span class="pun">.</span><span class="pln">apply</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">,</span><span class="pln"> arguments</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">};</span><span class="pln">
	
</span><span class="pun">})();</span></pre>
<p>The above wraps its code in a function to hide the <i>proxied</i> variable. The proxy then logs all calls to the method and delegates the call to the original method. Using <i>apply(this, arguments)</i> guarantees that the caller won't be able to notice the difference between the original and the proxied method.</p>
<h4>Built-in Functions</h4>
<p>JavaScript comes along with a useful set of built-in functions. These methods can be used to manipulate Strings, Numbers and Dates.</p>
<p>Following are important JavaScript functions −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>charAt()</b>
<p>Returns the character at the specified index.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>concat()</b>
<p>Combines the text of two strings and returns a new string.</p></td>
</tr>
<tr>
<td>3</td>
<td><b>forEach()</b>
<p>Calls a function for each element in the array.</p></td>
</tr>
<tr>
<td>4</td>
<td><b>indexOf()</b>
<p>Returns the index within the calling String object of the first occurrence of the specified value, or -1 if not found.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>length()</b>
<p>Returns the length of the string.</p></td>
</tr>
<tr>
<td>6</td>
<td>
<b>pop()</b>
<p>Removes the last element from an array and returns that element.</p></td>
</tr>
<tr>
<td>7</td>
<td>
<b>push()</b>
<p>Adds one or more elements to the end of an array and returns the new length of the array.</p></td>
</tr>
<tr>
<td>8</td>
<td>
<b>reverse()</b>
<p>Reverses the order of the elements of an array -- the first becomes the last, and the last becomes the first.</p></td>
</tr>
<tr>
<td>9</td>
<td>
<b>sort()</b>
<p>Sorts the elements of an array.</p></td>
</tr>
<tr>
<td>10</td>
<td>
<b>substr()</b>
<p>Returns the characters in a string beginning at the specified location through the specified number of characters.</p></td>
</tr>
<tr>
<td>11</td>
<td>
<b>toLowerCase()</b>
<p>Returns the calling string value converted to lower case.</p></td>
</tr>
<tr>
<td>12</td>
<td>
<b>toString()</b>
<p>Returns the string representation of the number's value.</p></td>
</tr>
<tr>
<td>13</td>
<td>
<b>toUpperCase()</b>
<p>Returns the calling string value converted to uppercase.</p></td>
</tr>
</tbody></table>
<h4>The Document Object Model</h4>
<p>The Document Object Model is a tree structure of various elements of HTML as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">This is a paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">This is second paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">This is third paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<p>Following are the important points about the above tree structure −</p>
<ul class="list">
<li><p>The &lt;html&gt; is the ancestor of all the other elements; in other words, all the other elements are descendants of &lt;html&gt;.</p></li>
<li><p>The &lt;head&gt; and &lt;body&gt; elements are not only descendants, but children of &lt;html&gt;, as well.</p></li>
<li><p>Likewise, in addition to being the ancestor of &lt;head&gt; and &lt;body&gt;, &lt;html&gt; is also their parent.</p></li>
<li><p>The &lt;p&gt; elements are children (and descendants) of &lt;div&gt;, descendants of &lt;body&gt; and &lt;html&gt;, and siblings of each other &lt;p&gt; elements.</p></li>
</ul>
<p>While learning jQuery concepts, it will be helpful to have understanding on DOM, if you are not aware of DOM then I would suggest to go through our simple tutorial on <a href="/dom/index.htm" target="_blank">DOM Tutorial</a>.</p>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="166_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="168_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'jquery_header.php'; ?>
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