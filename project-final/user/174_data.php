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
	$sid=174;
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




<p>AJAX is an acronym standing for Asynchronous JavaScript and XML and this technology help us to load data from the server without a browser page refresh.</p> 
<p>If you are new with AJAX, I would recommend you go through our <a href="/ajax/index.htm">Ajax Tutorial</a> before proceeding further.</p>
<p>JQuery is a great tool which provides a rich set of AJAX methods to develop next generation web application.</p>
<h4>Loading simple data</h4>
<p>This is very easy to load any static or dynamic data using JQuery AJAX. JQuery provides <b>load()</b> method to do the job −</p>
<h5>Syntax</h5>
<p>Here is the simple syntax for <b>load()</b> method −</p>
<pre class="result notranslate"><b>[selector].</b>load( URL, [data], [callback] );
</pre>
<p>Here is the description of all the parameters −</p>
<ul class="list">
<li><p><b>URL</b> − The URL of the server-side resource to which the request is sent. It could be a CGI, ASP, JSP, or PHP script which generates data dynamically or out of a database.</p></li>
<li><p><b>data</b> − This optional parameter represents an object whose properties are serialized into properly encoded parameters to be passed to the request. If specified, the request is made using the <b>POST</b> method. If omitted, the <b>GET</b> method is used.</p></li>
<li><p><b>callback</b> − A callback function invoked after the response data has been loaded into the elements of the matched set. The first parameter passed to this function is the response text received from the server and second parameter is the status code.</p></li>
</ul>
<h5>Example</h5>
<p>Consider the following HTML file with a small JQuery coding −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#driver"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">event</span><span class="pun">){</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">'#stage'</span><span class="pun">).</span><span class="pln">load</span><span class="pun">(</span><span class="str">'/jquery/result.html'</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on the button to load /jquery/result.html file −</span><span class="tag">&lt;/p&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stage"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">cc0</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         STAGE
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"driver"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Load Data"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Here <b>load()</b> initiates an Ajax request to the specified URL <b>/jquery/result.html</b> file. After loading this file, all the content would be populated inside &lt;div&gt; tagged with ID <i>stage</i>. Assuming, our /jquery/result.html file has just one HTML line −</p>
<pre class="result notranslate">&lt;h1&gt;THIS IS RESULT...&lt;/h1&gt;
</pre>
<p>When you click the given button, then result.html file gets loaded.</p>
<h4>Getting JSON data</h4>
<p>There would be a situation when server would return JSON string against your request. JQuery utility function <b>getJSON()</b> parses the returned JSON string and makes the resulting string available to the callback function as first parameter to take further action.</p>
<h5>Syntax</h5>
<p>Here is the simple syntax for <b>getJSON()</b> method −</p>
<pre class="result notranslate"><b>[selector].</b>getJSON( URL, [data], [callback] );
</pre>
<p>Here is the description of all the parameters −</p>
<ul class="list">
<li><p><b>URL</b> − The URL of the server-side resource contacted via the GET method.</p></li>
<li><p><b>data</b> − An object whose properties serve as the name/value pairs used to construct a query string to be appended to the URL, or a preformatted and encoded query string.</p></li>
<li><p><b>callback</b> − A function invoked when the request completes. The data value resulting from digesting the response body as a JSON string is passed as the first parameter to this callback, and the status as the second.</p></li>
</ul>
<h5>Example</h5>
<p>Consider the following HTML file with a small JQuery coding −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#driver"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">event</span><span class="pun">){</span><span class="pln">
				
               $</span><span class="pun">.</span><span class="pln">getJSON</span><span class="pun">(</span><span class="str">'/jquery/result.json'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">jd</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  $</span><span class="pun">(</span><span class="str">'#stage'</span><span class="pun">).</span><span class="pln">html</span><span class="pun">(</span><span class="str">'&lt;p&gt; Name: '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> jd</span><span class="pun">.</span><span class="pln">name </span><span class="pun">+</span><span class="pln"> </span><span class="str">'&lt;/p&gt;'</span><span class="pun">);</span><span class="pln">
                  $</span><span class="pun">(</span><span class="str">'#stage'</span><span class="pun">).</span><span class="pln">append</span><span class="pun">(</span><span class="str">'&lt;p&gt;Age : '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> jd</span><span class="pun">.</span><span class="pln">age</span><span class="pun">+</span><span class="pln"> </span><span class="str">'&lt;/p&gt;'</span><span class="pun">);</span><span class="pln">
                  $</span><span class="pun">(</span><span class="str">'#stage'</span><span class="pun">).</span><span class="pln">append</span><span class="pun">(</span><span class="str">'&lt;p&gt; Sex: '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> jd</span><span class="pun">.</span><span class="pln">sex</span><span class="pun">+</span><span class="pln"> </span><span class="str">'&lt;/p&gt;'</span><span class="pun">);</span><span class="pln">
               </span><span class="pun">});</span><span class="pln">
					
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on the button to load result.json file −</span><span class="tag">&lt;/p&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stage"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">eee</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         STAGE
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"driver"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Load Data"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Here JQuery utility method <b>getJSON()</b> initiates an Ajax request to the specified URL <b>result.json</b> file. After loading this file, all the content would be passed to the callback function which finally would be populated inside &lt;div&gt; tagged with ID <i>stage</i>. Assuming, our result.json file has following json formatted content −</p>
<pre class="result notranslate">{
"name": "Zara Ali",
"age" : "67",
"sex": "female"
}
</pre>
<p>When you click the given button, then result.json file gets loaded.</p>
<h4>Passing data to the Server</h4>
<p>Many times you collect input from the user and you pass that input to the server for further processing. JQuery AJAX made it easy enough to pass collected data to the server using <b>data</b> parameter of any available Ajax method.</p>
<h5>Example</h5>
<p>This example demonstrate how can pass user input to a web server script which would send the same result back and we would print it −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#driver"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">event</span><span class="pun">){</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> name </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">"#name"</span><span class="pun">).</span><span class="pln">val</span><span class="pun">();</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">"#stage"</span><span class="pun">).</span><span class="pln">load</span><span class="pun">(</span><span class="str">'/jquery/result.php'</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="str">"name"</span><span class="pun">:</span><span class="pln">name</span><span class="pun">}</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Enter your name and click on the button:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="atn">size</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"40"</span><span class="pln"> </span><span class="tag">/&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stage"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">cc0</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         STAGE
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"driver"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Show Result"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Here is the code written in <b>result.php</b> script −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
</span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">){</span><span class="pln">

   $name </span><span class="pun">=</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">];</span><span class="pln">
   echo </span><span class="str">"Welcome "</span><span class="pun">.</span><span class="pln"> $name</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln"> </span></pre>
<p>Now you can enter any text in the given input box and then click "Show Result" button to see what you have entered in the input box.</p>
<h4>JQuery AJAX Methods</h4>
<p>You have seen basic concept of AJAX using JQuery. Following table lists down all important JQuery AJAX methods which you can use based your programming need −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/ajax-jquery-ajax.htm">jQuery.ajax( options )</a>
<p>Load a remote page using an HTTP request.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/ajax-jquery-ajaxsetup.htm">jQuery.ajaxSetup( options )</a>
<p>Setup global settings for AJAX requests.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/ajax-jquery-get.htm">jQuery.get( url, [data], [callback], [type] )</a>
<p>Load a remote page using an HTTP GET request.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/ajax-jquery-getjson.htm">jQuery.getJSON( url, [data], [callback] )</a>
<p>Load JSON data using an HTTP GET request.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/ajax-jquery-getscript.htm">jQuery.getScript( url, [callback] )</a>
<p>Loads and executes a JavaScript file using an HTTP GET request.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/ajax-jquery-post.htm">jQuery.post( url, [data], [callback], [type] )</a>
<p>Load a remote page using an HTTP POST request.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/ajax-load.htm">load( url, [data], [callback] )</a>
<p>Load HTML from a remote file and inject it into the DOM.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/ajax-serialize.htm">serialize( )</a>
<p>Serializes a set of input elements into a string of data.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/ajax-serializearray.htm">serializeArray( )</a>
<p>Serializes all forms and form elements like the .serialize() method but returns a JSON data structure for you to work with.</p></td>
</tr>
</tbody></table>
<h4>JQuery AJAX Events</h4>
<p>You can call various JQuery methods during the life cycle of AJAX call progress. Based on different events/stages following methods are available −</p>
<p>You can go through all the <a href="/jquery/ajax-events.htm">AJAX Events</a>.</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/ajaxcomplete.htm">ajaxComplete( callback )</a>
<p>Attach a function to be executed whenever an AJAX request completes.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/ajaxstart.htm">ajaxStart( callback )</a>
<p>Attach a function to be executed whenever an AJAX request begins and there is none already active.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/ajaxerror.htm">ajaxError( callback )</a>
<p>Attach a function to be executed whenever an AJAX request fails.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/ajaxsend.htm">ajaxSend( callback )</a>
<p>Attach a function to be executed before an AJAX request is sent.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/ajaxstop.htm">ajaxStop( callback )</a>
<p>Attach a function to be executed whenever all AJAX requests have ended.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/ajaxsuccess.htm">ajaxSuccess( callback )</a>
<p>Attach a function to be executed whenever an AJAX request completes successfully.</p></td>
</tr>
</tbody></table>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="173_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="175_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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