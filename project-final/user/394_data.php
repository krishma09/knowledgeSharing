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
<title>AJAX Tutorials | knowledge.com</title>
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
	$sid=394;
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
<h4>What is AJAX?</h4>
<ul class="list">
<li><p>AJAX stands for <b>A</b>synchronous <b>Ja</b>vaScript and <b>X</b>ML. AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Script.</p></li>
<li><p>Ajax uses XHTML for content, CSS for presentation, along with Document Object Model and JavaScript for dynamic content display.</p></li>
<li><p>Conventional web applications transmit information to and from the sever using synchronous requests. It means you fill out a form, hit submit, and get directed to a new page with new information from the server.</p></li>
<li><p>With AJAX, when you hit submit, JavaScript will make a request to the server, interpret the results, and update the current screen. In the purest sense, the user would never know that anything was even transmitted to the server.</p></li>
<li><p>XML is commonly used as the format for receiving server data, although any format, including plain text, can be used.</p></li>
<li><p>AJAX is a web browser technology independent of web server software.</p></li>
<li><p>A user can continue to use the application while the client program requests information from the server in the background.</p></li>
<li><p>Intuitive and natural user interaction. Clicking is not required, mouse movement is a sufficient event trigger.</p></li>
<li><p>Data-driven as opposed to page-driven.</p></li>
</ul>
<h4>Rich Internet Application Technology</h4>
<p>AJAX is the most viable Rich Internet Application (RIA) technology so far. It is getting tremendous industry momentum and several tool kit and frameworks are emerging. But at the same time, AJAX has browser incompatibility and it is supported by JavaScript, which is hard to maintain and debug.</p>
<h4>AJAX is Based on Open Standards</h4>
<p>AJAX is based on the following open standards:</p>
<ul class="list">
<li>Browser-based presentation using HTML and Cascading Style Sheets (CSS).</li>
<li>Data is stored in XML format and fetched from the server.</li>
<li>Behind-the-scenes data fetches using XMLHttpRequest objects in the browser.</li>
<li>JavaScript to make everything happen.</li>
</ul>
<h4>AJAX - Technologies</h4>
<p>AJAX cannot work independently. It is used in combination with other technologies to create interactive webpages.</p>
<h4>JavaScript</h4>
<ul class="list">
<li>Loosely typed scripting language.</li>
<li>JavaScript function is called when an event occurs in a page.</li>
<li>Glue for the whole AJAX operation.</li>
</ul>
<h4>DOM</h4>
<ul class="list">
<li>API for accessing and manipulating structured documents.</li>
<li>Represents the structure of XML and HTML documents.</li>
</ul>
<h4>CSS</h4>
<ul class="list">
<li>Allows for a clear separation of the presentation style from the content and may be changed programmatically by JavaScript.</li>
</ul>
<h4>XMLHttpRequest</h4>
<ul class="list">
<li>JavaScript object that performs asynchronous interaction with the server.</li>
</ul>
<h4>AJAX - Examples</h4>
<p>Here is a list of some famous web applications that make use of AJAX.</p>
<h4>Google Maps</h4>	
<p>A user can drag an entire map by using the mouse, rather than clicking on a button.</p>
<ul class="list">
<li><p><a href="http://maps.google.com/" target="blank">http://maps.google.com/</a></p></li>
</ul>
<h4>Google Suggest</h4>
<p>As you type, Google will offer suggestions. Use the arrow keys to navigate the results.</p>
<ul class="list">
<li><p><a href="http://www.google.com/webhp?complete=1&amp;hl=en" target="blank">http://www.google.com/webhp?complete=1&amp;hl=en</a></p></li>
</ul>
<h4>Gmail</h4>
<p>Gmail is a webmail, built on the idea that email can be more intuitive, efficient and useful.</p>
<ul class="list">
<li><p><a href="http://gmail.com/" target="blank">http://gmail.com/</a></p></li>
</ul>
<h4>Yahoo Maps (new)</h4>
<p>Now it's even easier and more fun to get where you're going!</p>
<ul class="list">
<li><p><a href="http://maps.yahoo.com/" target="blank">http://maps.yahoo.com/</a></p></li>
</ul>
<ul class="list">
<li><p><a href="http://maps.yahoo.com/" target="blank">http://maps.yahoo.com/</a></p></li>
</ul>
<h4>Difference in AJAX and Conventional CGI Program</h4>
<p>Try these two examples one by one and you will feel the difference. While trying AJAX example, there is not discontinuity and you get the response very quickly, but when you try the standard GCI example, you would have to wait for the response and your page also gets refreshed.</p>

<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln"> 
</span><span class="com">//Browser Support Code</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> ajaxFunction</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> ajaxRequest</span><span class="pun">;</span><span class="pln">  </span><span class="com">// The variable that makes Ajax possible!</span><span class="pln">
   
   </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
      </span><span class="com">// Opera 8.0+, Firefox, Safari </span><span class="pln">
      ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">XMLHttpRequest</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
   
      </span><span class="com">// Internet Explorer Browsers</span><span class="pln">
      </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
         ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Msxml2.XMLHTTP"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
            ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Microsoft.XMLHTTP"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
      
            </span><span class="com">// Something went wrong</span><span class="pln">
            alert</span><span class="pun">(</span><span class="str">"Your browser broke!"</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">'myForm'</span><span class="tag">&gt;</span><span class="pln">
   Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">'username'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   Time: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">'time'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>In the above JavaScript code, we try three times to make our XMLHttpRequest object.  Our first attempt:</p>
<ul class="list">
<li><i>ajaxRequest = new XMLHttpRequest();</i></li>
</ul>
<p>It is for Opera 8.0+, Firefox, and Safari browsers. If it fails, we try two more times to make the correct object for an Internet Explorer browser with:</p>
<ul class="list">
<li><p><i>ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");</i></p></li>
<li><p><i>ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");</i></p></li>
</ul>
<p>If it doesn't work, then we can use a very outdated browser that doesn't support <i>XMLHttpRequest</i>, which also means it doesn't support Ajax.</p>
<p>Most likely though, our variable <i>ajaxRequest</i> will now be set to whatever <i>XMLHttpRequest</i> standard the browser uses and we can start sending data to the server. The step-wise AJAX workflow is explained in the next chapter.</p>
<h4>AJAX - Action</h4>
<p>This chapter gives you a clear picture of the exact steps of AJAX operation.</p>
<h4>Steps of AJAX Operation</h4>
<ul class="list">
<li>A client event occurs.</li>
<li>An XMLHttpRequest object is created.</li>
<li>The XMLHttpRequest object is configured.</li>
<li>The XMLHttpRequest object makes an asynchronous request to the Webserver.</li>
<li>The Webserver returns the result containing XML document.</li>
<li>The XMLHttpRequest object calls the callback() function and processes the result.</li>
<li>The HTML DOM is updated.</li>
</ul>
<p>Let us take these steps one by one.</p>
<h4>A Client Event Occurs</h4>
<ul class="list">
<li><p>A JavaScript function is called as the result of an event.</p></li>
<li><p>Example: <i>validateUserId()</i> JavaScript function is mapped as an event handler to an <i>onkeyup</i> event on input form field whose id is set to <i>"userid"</i></p></li>
<li><p>&lt;input type="text" size="20" id="userid" name="id" onkeyup="validateUserId();"&gt;.</p></li>
</ul>
<h4>The XMLHttpRequest Object is Created</h4>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> ajaxRequest</span><span class="pun">;</span><span class="pln">  </span><span class="com">// The variable that makes Ajax possible!</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> ajaxFunction</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
      
      </span><span class="com">// Opera 8.0+, Firefox, Safari</span><span class="pln">
      ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">XMLHttpRequest</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
   
      </span><span class="com">// Internet Explorer Browsers</span><span class="pln">
      </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
         ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Msxml2.XMLHTTP"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      
         </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
            ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Microsoft.XMLHTTP"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
      
            </span><span class="com">// Something went wrong</span><span class="pln">
            alert</span><span class="pun">(</span><span class="str">"Your browser broke!"</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>The XMLHttpRequest Object is Configured</h4>
<p>In this step, we will write a function that will be triggered by the client event and a callback function processRequest() will be registered.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> validateUserId</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   ajaxFunction</span><span class="pun">();</span><span class="pln">
   
   </span><span class="com">// Here processRequest() is the callback function.</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">onreadystatechange </span><span class="pun">=</span><span class="pln"> processRequest</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">target</span><span class="pun">)</span><span class="pln"> target </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">"userid"</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="str">"validate?id="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> escape</span><span class="pun">(</span><span class="pln">target</span><span class="pun">.</span><span class="pln">value</span><span class="pun">);</span><span class="pln">
   
   ajaxRequest</span><span class="pun">.</span><span class="pln">open</span><span class="pun">(</span><span class="str">"GET"</span><span class="pun">,</span><span class="pln"> url</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Making Asynchronous Request to the Webserver</h4>
<p>Source code is available in the above piece of code. Code written in bold typeface is responsible to make a request to the webserver. This is all being done using the XMLHttpRequest object <i>ajaxRequest</i>.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> validateUserId</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   ajaxFunction</span><span class="pun">();</span><span class="pln">
   
   </span><span class="com">// Here processRequest() is the callback function.</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">onreadystatechange </span><span class="pun">=</span><span class="pln"> processRequest</span><span class="pun">;</span><span class="pln">
   
   </span><b><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">target</span><span class="pun">)</span><span class="pln"> target </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">"userid"</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="str">"validate?id="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> escape</span><span class="pun">(</span><span class="pln">target</span><span class="pun">.</span><span class="pln">value</span><span class="pun">);</span><span class="pln">
   
   ajaxRequest</span><span class="pun">.</span><span class="pln">open</span><span class="pun">(</span><span class="str">"GET"</span><span class="pun">,</span><span class="pln"> url</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">);</span></b><span class="pln">
</span><span class="pun">}</span></pre>
<p>Assume you enter <i>Zara</i> in the userid box, then in the above request, the URL is set to "validate?id=Zara".</p>
<h4>Webserver Returns the Result Containing XML Document</h4>
<p>You can implement your server-side script in any language, however its logic should be as follows.</p>
<ul class="list">
<li>Get a request from the client.</li>
<li>Parse the input from the client.</li>
<li>Do required processing.</li>
<li>Send the output to the client.</li>
</ul>
<p>If we assume that you are going to write a servlet, then here is the piece of code.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> doGet</span><span class="pun">(</span><span class="typ">HttpServletRequest</span><span class="pln"> request</span><span class="pun">,</span><span class="pln"> </span><span class="typ">HttpServletResponse</span><span class="pln"> response</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">throws</span><span class="pln"> </span><span class="typ">IOException</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ServletException</span><span class="pln"> 
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">String</span><span class="pln"> targetId </span><span class="pun">=</span><span class="pln"> request</span><span class="pun">.</span><span class="pln">getParameter</span><span class="pun">(</span><span class="str">"id"</span><span class="pun">);</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">((</span><span class="pln">targetId </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="pun">!</span><span class="pln">accounts</span><span class="pun">.</span><span class="pln">containsKey</span><span class="pun">(</span><span class="pln">targetId</span><span class="pun">.</span><span class="pln">trim</span><span class="pun">()))</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">setContentType</span><span class="pun">(</span><span class="str">"text/xml"</span><span class="pun">);</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">setHeader</span><span class="pun">(</span><span class="str">"Cache-Control"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"no-cache"</span><span class="pun">);</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">getWriter</span><span class="pun">().</span><span class="pln">write</span><span class="pun">(</span><span class="str">"</span><valid><span class="str">true</span></valid><span class="str">"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">setContentType</span><span class="pun">(</span><span class="str">"text/xml"</span><span class="pun">);</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">setHeader</span><span class="pun">(</span><span class="str">"Cache-Control"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"no-cache"</span><span class="pun">);</span><span class="pln">
      response</span><span class="pun">.</span><span class="pln">getWriter</span><span class="pun">().</span><span class="pln">write</span><span class="pun">(</span><span class="str">"</span><valid><span class="str">false</span></valid><span class="str">"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Callback Function processRequest() is Called</h4>
<p>The XMLHttpRequest object was configured to call the processRequest() function when there is a state change to the <i>readyState</i> of the <i>XMLHttpRequest</i> object. Now this function will receive the result from the server and will do the required processing. As in the following example, it sets a variable message on true or false based on the returned value from the Webserver.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln"> 
</span><span class="kwd">function</span><span class="pln"> processRequest</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">.</span><span class="pln">readyState </span><span class="pun">==</span><span class="pln"> </span><span class="lit">4</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">.</span><span class="pln">status </span><span class="pun">==</span><span class="pln"> </span><span class="lit">200</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> message </span><span class="pun">=</span><span class="pln"> </span><span class="pun">...;</span><span class="pln">
</span><span class="pun">...</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>The HTML DOM is Updated</h4>
<p>This is the final step and in this step, your HTML page will be updated. It happens in the following way:</p>
<ul class="list">
<li>JavaScript gets a reference to any element in a page using DOM API.</li>
<li>The recommended way to gain a reference to an element is to call.</li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">"userIdMessage"</span><span class="pun">),</span><span class="pln"> 
</span><span class="com">// where "userIdMessage" is the ID attribute </span><span class="pln">
</span><span class="com">// of an element appearing in the HTML document</span></pre>
<ul class="list">
<li><p>JavaScript may now be used to modify the element's attributes; modify the element's style properties; or add, remove, or modify the child elements. Here is an example:</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> setMessageUsingDOM</span><span class="pun">(</span><span class="pln">message</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> userMessageElement </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">"userIdMessage"</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> messageText</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">message </span><span class="pun">==</span><span class="pln"> </span><span class="str">"false"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      userMessageElement</span><span class="pun">.</span><span class="pln">style</span><span class="pun">.</span><span class="pln">color </span><span class="pun">=</span><span class="pln"> </span><span class="str">"red"</span><span class="pun">;</span><span class="pln">
      messageText </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Invalid User Id"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> 
   </span><span class="pun">{</span><span class="pln">
      userMessageElement</span><span class="pun">.</span><span class="pln">style</span><span class="pun">.</span><span class="pln">color </span><span class="pun">=</span><span class="pln"> </span><span class="str">"green"</span><span class="pun">;</span><span class="pln">
      messageText </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Valid User Id"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> messageBody </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">createTextNode</span><span class="pun">(</span><span class="pln">messageText</span><span class="pun">);</span><span class="pln">
   
   </span><span class="com">// if the messageBody element has been created simple </span><span class="pln">
   </span><span class="com">// replace it otherwise append the new element</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">userMessageElement</span><span class="pun">.</span><span class="pln">childNodes</span><span class="pun">[</span><span class="lit">0</span><span class="pun">])</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      userMessageElement</span><span class="pun">.</span><span class="pln">replaceChild</span><span class="pun">(</span><span class="pln">messageBody</span><span class="pun">,</span><span class="pln"> userMessageElement</span><span class="pun">.</span><span class="pln">childNodes</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln"> 
   </span><span class="kwd">else</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      userMessageElement</span><span class="pun">.</span><span class="pln">appendChild</span><span class="pun">(</span><span class="pln">messageBody</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"userIdMessage"</span><span class="tag">&gt;&lt;div&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span></pre>	
<h4>AJAX - XMLHttpRequest</h4>
<p>The XMLHttpRequest object is the key to AJAX. It has been available ever since Internet Explorer 5.5 was released in July 2000, but was not fully discovered until AJAX and Web 2.0 in 2005 became popular.</p>
<p>XMLHttpRequest (XHR) is an API that can be used by JavaScript, JScript, VBScript, and other web browser scripting languages to transfer and manipulate XML data to and from a webserver using HTTP, establishing an independent connection channel between a webpage's Client-Side and Server-Side.</p>
<p>The data returned from XMLHttpRequest calls will often be provided by back-end databases. Besides XML, XMLHttpRequest can be used to fetch data in other formats, e.g. JSON or even plain text.</p>
<p>You already have seen a couple of examples on how to create an XMLHttpRequest object.</p>
<p>Listed below is listed are some of the methods and properties that you have to get familiar with.</p>
<h4>XMLHttpRequest Methods</h4>
<ul class="list">
<li><b>abort()</b>
<p>Cancels the current request.</p></li>
<li><b>getAllResponseHeaders()</b>
<p>Returns the complete set of HTTP headers as a string.</p></li>
<li><b>getResponseHeader( headerName )</b>
<p>Returns the value of the specified HTTP header.</p></li>
<li><b>open( method, URL )</b><p></p>
<p><b>open( method, URL, async )</b></p>
<p><b>open( method, URL, async, userName )</b></p>
<p><b>open( method, URL, async, userName, password )</b></p>
<p>Specifies the method, URL, and other optional attributes of a request.</p>
<p>The method parameter can have a value of "GET", "POST", or "HEAD". Other HTTP methods, such as "PUT" and "DELETE" (primarily used in REST applications) may be possible.</p>
<p>The "async" parameter specifies whether the request should be handled asynchronously or not. "true" means that the script processing carries on after the send() method without waiting for a response, and "false" means that the script waits for a response before continuing script processing.</p>
</li>
<li><b>send( content )</b>
<p>Sends the request.</p></li>
<li><p><b>setRequestHeader( label, value )</b></p>
<p>Adds a label/value pair to the HTTP header to be sent.</p></li>
</ul>
<h4>XMLHttpRequest Properties</h4>
<ul class="list">
<li><b>onreadystatechange</b>
<p>An event handler for an event that fires at every state change.</p></li>
<li><b>readyState</b>
<p>The readyState property defines the current state of the XMLHttpRequest object.</p>
<p>The following table provides a list of the possible values for the readyState property:</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">State</th>
<th>Description</th>
</tr>
<tr>
<td>0</td>
<td>The request is not initialized.</td>
</tr>
<tr>
<td>1</td>
<td>The request has been set up.</td>
</tr>
<tr>
<td>2</td>
<td>The request has been sent.</td>
</tr>
<tr>
<td>3</td>
<td>The request is in process.</td>
</tr>
<tr>
<td>4</td>
<td>The request is completed.</td>
</tr>
</tbody></table>
<p><b>readyState = 0</b> After you have created the XMLHttpRequest object, but before you have called the open() method.</p>
<p><b>readyState = 1</b> After you have called the open() method, but before you have called send().</p>
<p><b>readyState = 2</b> After you have called send().</p>
<p><b>readyState = 3</b> After the browser has established a communication with the server, but before the server has completed the response.</p>
<p><b>readyState = 4</b> After the request has been completed, and the response data has been completely received from the server.</p></li>
<li><b>responseText</b>
<p>Returns the response as a string.</p></li>
<li><b>responseXML</b>
<p>Returns the response as XML. This property returns an XML document object, which can be examined and parsed using the W3C DOM node tree methods and properties.</p></li>
<li><b>status</b>
<p>Returns the status as a number (e.g., 404 for "Not Found" and 200 for "OK").</p></li>
<li><b>statusText</b>
<p>Returns the status as a string (e.g., "Not Found" or "OK").</p></li>
</ul>
<h4>AJAX - Database Operations</h4>
<p>To clearly illustrate how easy it is to access information from a database using AJAX, we are going to build MySQL queries on the fly and display the results on "ajax.html". But before we proceed, let us do the ground work. Create a table using the following command.</p>
<p><b>NOTE</b>: We are assuming you have sufficient privilege to perform the following MySQL operations</p>
<pre class="result notranslate">CREATE TABLE 'ajax_example' (
   'name' varchar(50) NOT NULL,
   'age' int(11) NOT NULL,
   'sex' varchar(1) NOT NULL,
   'wpm' int(11) NOT NULL,
   PRIMARY KEY  ('name')
) 
</pre>
<p>Now dump the following data into this table using the following SQL statements:</p>
<pre class="result notranslate">INSERT INTO 'ajax_example' VALUES ('Jerry', 120, 'm', 20);
INSERT INTO 'ajax_example' VALUES ('Regis', 75, 'm', 44);
INSERT INTO 'ajax_example' VALUES ('Frank', 45, 'm', 87);
INSERT INTO 'ajax_example' VALUES ('Jill', 22, 'f', 72);
INSERT INTO 'ajax_example' VALUES ('Tracy', 27, 'f', 0);
INSERT INTO 'ajax_example' VALUES ('Julie', 35, 'f', 90);
</pre>
<h4>Client Side HTML File</h4>
<p>Now let us have our client side HTML file, which is ajax.html, and it will have the following code:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln"> 
</span><span class="com">//Browser Support Code</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> ajaxFunction</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> ajaxRequest</span><span class="pun">;</span><span class="pln">  </span><span class="com">// The variable that makes Ajax possible!</span><span class="pln">
   </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
   
      </span><span class="com">// Opera 8.0+, Firefox, Safari</span><span class="pln">
      ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">XMLHttpRequest</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
      
      </span><span class="com">// Internet Explorer Browsers</span><span class="pln">
      </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
         ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Msxml2.XMLHTTP"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         
         </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
            ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Microsoft.XMLHTTP"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
         
            </span><span class="com">// Something went wrong</span><span class="pln">
            alert</span><span class="pun">(</span><span class="str">"Your browser broke!"</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// Create a function that will receive data</span><span class="pln">
   </span><span class="com">// sent from the server and will update</span><span class="pln">
   </span><span class="com">// div section in the same page.</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">onreadystatechange </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span class="pln">
   
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">ajaxRequest</span><span class="pun">.</span><span class="pln">readyState </span><span class="pun">==</span><span class="pln"> </span><span class="lit">4</span><span class="pun">){</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> ajaxDisplay </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'ajaxDiv'</span><span class="pun">);</span><span class="pln">
         ajaxDisplay</span><span class="pun">.</span><span class="pln">innerHTML </span><span class="pun">=</span><span class="pln"> ajaxRequest</span><span class="pun">.</span><span class="pln">responseText</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// Now get the value from user and pass it to</span><span class="pln">
   </span><span class="com">// server script.</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> age </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'age'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> wpm </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'wpm'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> sex </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'sex'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> queryString </span><span class="pun">=</span><span class="pln"> </span><span class="str">"?age="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> age </span><span class="pun">;</span><span class="pln">
   
   queryString </span><span class="pun">+=</span><span class="pln">  </span><span class="str">"&amp;wpm="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> wpm </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&amp;sex="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> sex</span><span class="pun">;</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">open</span><span class="pun">(</span><span class="str">"GET"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"ajax-example.php"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> queryString</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">}</span><span class="pln">
</span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">'myForm'</span><span class="tag">&gt;</span><span class="pln">
   Max Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'age'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   Max WPM: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'wpm'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   Sex: </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'sex'</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"m"</span><span class="tag">&gt;</span><span class="pln">m</span><span class="tag">&lt;/option&gt;</span><span class="pln">
   </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"f"</span><span class="tag">&gt;</span><span class="pln">f</span><span class="tag">&lt;/option&gt;</span><span class="pln">
   </span><span class="tag">&lt;/select&gt;</span><span class="pln">
   </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'button'</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">'</span><span class="pln">ajaxFunction</span><span class="pun">()</span><span class="atv">'</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">'Query MySQL'</span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'ajaxDiv'</span><span class="tag">&gt;</span><span class="pln">Your result will display here</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p><b>NOTE</b>: The way of passing variables in the Query is according to HTTP standard and have formA.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">URL</span><span class="pun">?</span><span class="pln">variable1</span><span class="pun">=</span><span class="pln">value1</span><span class="pun">;&amp;</span><span class="pln">variable2</span><span class="pun">=</span><span class="pln">value2</span><span class="pun">;</span></pre>
<p>The above code will give you a screen as given below:</p>
<p><b>NOTE</b>: This is dummy screen and would not work</p>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
   var ajaxRequest;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
   
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
      
            // Something went wrong
            alert("Your browser broke!");
            return false;
        }
     }
  }

   // Create a function that will receive data 
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function(){
   
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('ajaxDiv');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
   }
   // Now get the value from user and pass it to
   // server script.
   var age = document.getElementById('age').value;
   var wpm = document.getElementById('wpm').value;
   var sex = document.getElementById('sex').value;
   var queryString = "?age=" + age ;

   queryString +=  "&wpm=" + wpm + "&sex=" + sex;
   ajaxRequest.open("GET", "/ajax/ajax-example.php" + queryString, true);
   ajaxRequest.send(null); 
}
//-->
</script>

<p>Your result will display here in this section after you have made your entry.</p>
<p><b>NOTE</b>: This is a dummy screen.</p>
<h4>Server Side PHP File</h4>
<p>Your client-side script is ready. Now, we have to write our server-side script, which will fetch age, wpm, and sex from the database and will send it back to the client. Put the following code into the file "ajax-example.php".</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
$dbhost </span><span class="pun">=</span><span class="pln"> </span><span class="str">"localhost"</span><span class="pun">;</span><span class="pln">
$dbuser </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbusername"</span><span class="pun">;</span><span class="pln">
$dbpass </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbpassword"</span><span class="pun">;</span><span class="pln">
$dbname </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbname"</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">//Connect to MySQL Server</span><span class="pln">
mysql_connect</span><span class="pun">(</span><span class="pln">$dbhost</span><span class="pun">,</span><span class="pln"> $dbuser</span><span class="pun">,</span><span class="pln"> $dbpass</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">//Select Database</span><span class="pln">
mysql_select_db</span><span class="pun">(</span><span class="pln">$dbname</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">or</span><span class="pln"> </span><span class="kwd">die</span><span class="pun">(</span><span class="pln">mysql_error</span><span class="pun">());</span><span class="pln">
	
   </span><span class="com">// Retrieve data from Query String</span><span class="pln">
$age </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">];</span><span class="pln">
$sex </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'sex'</span><span class="pun">];</span><span class="pln">
$wpm </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'wpm'</span><span class="pun">];</span><span class="pln">
	
   </span><span class="com">// Escape User Input to help prevent SQL Injection</span><span class="pln">
$age </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$age</span><span class="pun">);</span><span class="pln">
$sex </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$sex</span><span class="pun">);</span><span class="pln">
$wpm </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$wpm</span><span class="pun">);</span><span class="pln">
	
   </span><span class="com">//build query</span><span class="pln">
$query </span><span class="pun">=</span><span class="pln"> </span><span class="str">"SELECT * FROM ajax_example WHERE sex = '$sex'"</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">if</span><span class="pun">(</span><span class="pln">is_numeric</span><span class="pun">(</span><span class="pln">$age</span><span class="pun">))</span><span class="pln">
	$query </span><span class="pun">.=</span><span class="pln"> </span><span class="str">" AND age &lt;= $age"</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">if</span><span class="pun">(</span><span class="pln">is_numeric</span><span class="pun">(</span><span class="pln">$wpm</span><span class="pun">))</span><span class="pln">
	$query </span><span class="pun">.=</span><span class="pln"> </span><span class="str">" AND wpm &lt;= $wpm"</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">//Execute query</span><span class="pln">
$qry_result </span><span class="pun">=</span><span class="pln"> mysql_query</span><span class="pun">(</span><span class="pln">$query</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">or</span><span class="pln"> </span><span class="kwd">die</span><span class="pun">(</span><span class="pln">mysql_error</span><span class="pun">());</span><span class="pln">

   </span><span class="com">//Build Result String</span><span class="pln">
$display_string </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;table&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;tr&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Name&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Age&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Sex&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;WPM&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/tr&gt;"</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// Insert a new row in the table for each person returned</span><span class="pln">
</span><span class="kwd">while</span><span class="pun">(</span><span class="pln">$row </span><span class="pun">=</span><span class="pln"> mysql_fetch_array</span><span class="pun">(</span><span class="pln">$qry_result</span><span class="pun">)){</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;tr&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[name]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[age]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[sex]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[wpm]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/tr&gt;"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
echo </span><span class="str">"Query: "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $query </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/table&gt;"</span><span class="pun">;</span><span class="pln">

echo $display_string</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>Now try by entering a valid value (e.g., 120) in <i>Max Age</i> or any other box and then click Query MySQL button.</p>


<p>If you have successfully completed this lesson, then you know how to use MySQL, PHP, HTML, and Javascript in tandem to write AJAX applications.</p>
<h3>AJAX - Security</h3>
<h4>AJAX Security: Server Side</h4>
<ul class="list">
<li><p>AJAX-based Web applications use the same server-side security schemes of regular Web applications.</p></li>
<li><p>You specify authentication, authorization, and data protection requirements in your web.xml file (declarative) or in your program (programmatic).</p></li>
<li><p>AJAX-based Web applications are subject to the same security threats as regular Web applications.</p></li>
</ul>
<h4>AJAX Security: Client Side</h4>
<ul class="list">
<li><p>JavaScript code is visible to a user/hacker. Hacker can use JavaScript code for inferring server-side weaknesses.</p></li>
<li><p>JavaScript code is downloaded from the server and executed ("eval") at the client and can compromise the client by mal-intended code.</p></li>
<li><p>Downloaded JavaScript code is constrained by the sand-box security model and can be relaxed for signed JavaScript.</p></li>
</ul>
<li><p>JavaScript code is visible to a user/hacker. Hacker can use JavaScript code for inferring server-side weaknesses.</p></li>
<li><p>JavaScript code is downloaded from the server and executed ("eval") at the client and can compromise the client by mal-intended code.</p></li>
<li><p>Downloaded JavaScript code is constrained by the sand-box security model and can be relaxed for signed JavaScript.</p></li>
<ul class="list">
<li><p>JavaScript code is visible to a user/hacker. Hacker can use JavaScript code for inferring server-side weaknesses.</p></li>
<li><p>JavaScript code is downloaded from the server and executed ("eval") at the client and can compromise the client by mal-intended code.</p></li>
<li><p>Downloaded JavaScript code is constrained by the sand-box security model and can be relaxed for signed JavaScript.</p></li>
</ul>
<h4>AJAX - Issues</h4>
<p>AJAX is growing very fast and that is the reason that it contains many issues with it. We hope with the passes of time, they will be resolved and AJAX will become ideal for web applications. We are listing down a few issues that AJAX currently suffers from.</p>
<p><b>Complexity is increased</b></p>
<ul class="list">
<li><p>Server-side developers will need to understand that presentation logic will be required in the HTML client pages as well as in the server-side logic.</p></li>
<li><p>Page developers must have JavaScript technology skills.</p></li>
</ul>
<p><b>AJAX-based applications can be difficult to debug, test, and maintain</b></p>
<ul class="list">
<li>JavaScript is hard to test - automatic testing is hard.</li>
<li>Weak modularity in JavaScript.</li>
<li>Lack of design patterns or best practice guidelines yet.</li>
</ul>
<p><b>Toolkits/Frameworks are not mature yet</b></p>
<ul class="list">
<li>Most of them are in beta phase.</li>
</ul>
<p><b>No standardization of the XMLHttpRequest yet</b></p>
<ul class="list">
<li>Future version of IE will address this.</li>
</ul>
<p><b>No support of XMLHttpRequest in old browsers</b></p>
<ul class="list">
<li>Iframe will help.</li>
</ul>
<p><b>JavaScript technology dependency and incompatibility</b></p>
<ul class="list">
<li>Must be enabled for applications to function.</li>
<li>Still some browser incompatibilities exist.</li>
</ul>
<p><b>JavaScript code is visible to a hacker</b></p>
<ul class="list">
<li>Poorly designed JavaScript code can invite security problems.</li>
</ul>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="393_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="395_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'ajax_header.php'; ?></aside>
 
  
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