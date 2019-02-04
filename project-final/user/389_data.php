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
	$sid=389;
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
<p>If you have understood the above-mentioned seven steps, then you are almost done with AJAX. In the next chapter, we will see <i>XMLHttpRequest</i> object in more detail.</p>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="388_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="390_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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