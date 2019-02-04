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
<title>NODE.JS Tutorials | knowledge.com</title>
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
	$sid=270;
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
<h4>What is a Web Server?</h4>
<p>A Web Server is a software application which handles HTTP requests sent by the HTTP client, like web browsers, and returns web pages in response to the clients. Web servers usually deliver html documents along with images, style sheets, and scripts.</p>
<p>Most of the web servers support server-side scripts, using scripting languages or redirecting the task to an application server which retrieves data from a database and performs complex logic and then sends a result to the HTTP client through the Web server.</p>
<p>Apache web server is one of the most commonly used web servers. It is an open source project.</p>
<h4>Web Application Architecture</h4>
<p>A Web application is usually divided into four layers −</p>
<img src="images/web_architecture.jpg" alt="Web Architecture">
<ul class="list">
<li><p><b>Client</b> − This layer consists of web browsers, mobile browsers or applications which can make HTTP requests to the web server.</p></li>
<li><p><b>Server</b> − This layer has the Web server which can intercept the requests made by the clients and pass them the response.</p></li>
<li><p><b>Business</b> − This layer contains the application server which is utilized by the web server to do the required processing. This layer interacts with the data layer via the database or some external programs.</p></li>
<li><p><b>Data</b> − This layer contains the databases or any other source of data.</p></li>
</ul>
<h4>Creating a Web Server using Node</h4>
<p>Node.js provides an <b>http</b> module which can be used to create an HTTP client of a server. Following is the bare minimum structure of the HTTP server which listens at 8081 port.</p>
<p>Create a js file named server.js −</p>
<p><b>File: server.js</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> http </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'http'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'fs'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'url'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Create a server</span><span class="pln">
http</span><span class="pun">.</span><span class="pln">createServer</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">request</span><span class="pun">,</span><span class="pln"> response</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">  
   </span><span class="com">// Parse the request containing file name</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> pathname </span><span class="pun">=</span><span class="pln"> url</span><span class="pun">.</span><span class="pln">parse</span><span class="pun">(</span><span class="pln">request</span><span class="pun">.</span><span class="pln">url</span><span class="pun">).</span><span class="pln">pathname</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">// Print the name of the file for which request is made.</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Request for "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> pathname </span><span class="pun">+</span><span class="pln"> </span><span class="str">" received."</span><span class="pun">);</span><span class="pln">
   
   </span><span class="com">// Read the requested file content from file system</span><span class="pln">
   fs</span><span class="pun">.</span><span class="pln">readFile</span><span class="pun">(</span><span class="pln">pathname</span><span class="pun">.</span><span class="pln">substr</span><span class="pun">(</span><span class="lit">1</span><span class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">err</span><span class="pun">);</span><span class="pln">
         </span><span class="com">// HTTP Status: 404 : NOT FOUND</span><span class="pln">
         </span><span class="com">// Content Type: text/plain</span><span class="pln">
         response</span><span class="pun">.</span><span class="pln">writeHead</span><span class="pun">(</span><span class="lit">404</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="str">'Content-Type'</span><span class="pun">:</span><span class="pln"> </span><span class="str">'text/html'</span><span class="pun">});</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">	
         </span><span class="com">//Page found	  </span><span class="pln">
         </span><span class="com">// HTTP Status: 200 : OK</span><span class="pln">
         </span><span class="com">// Content Type: text/plain</span><span class="pln">
         response</span><span class="pun">.</span><span class="pln">writeHead</span><span class="pun">(</span><span class="lit">200</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="str">'Content-Type'</span><span class="pun">:</span><span class="pln"> </span><span class="str">'text/html'</span><span class="pun">});</span><span class="pln">	
         
         </span><span class="com">// Write the content of the file to response body</span><span class="pln">
         response</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">data</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">());</span><span class="pln">		
      </span><span class="pun">}</span><span class="pln">
      </span><span class="com">// Send the response body </span><span class="pln">
      response</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">   
</span><span class="pun">}).</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Console will print the message</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">'Server running at http://127.0.0.1:8081/'</span><span class="pun">);</span></pre>
<p>Next let's create the following html file named index.htm in the same directory where you created server.js.</p>
<p><b>File: index.htm</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Sample Page</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      Hello World!
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Now let us run the server.js to see the result −</p>
<pre class="result notranslate">$ node server.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">Server running at http://127.0.0.1:8081/
</pre>
<h4>Make a request to Node.js server</h4>
<p>Open http://127.0.0.1:8081/index.htm in any browser to see the following result.</p>
<img src="images/nodejs_sample1.jpg" alt="First Server Application">
<p>Verify the Output at server end.</p>
<pre class="result notranslate">Server running at http://127.0.0.1:8081/
Request for /index.htm received.
</pre>
<h4>Creating Web client using Node</h4>
<p>A web client can be created using <b>http</b> module. Let's check the following example.</p>
<p>Create a js file named client.js −</p>
<p><b>File: client.js</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> http </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'http'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Options to be used by request </span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> options </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   host</span><span class="pun">:</span><span class="pln"> </span><span class="str">'localhost'</span><span class="pun">,</span><span class="pln">
   port</span><span class="pun">:</span><span class="pln"> </span><span class="str">'8081'</span><span class="pun">,</span><span class="pln">
   path</span><span class="pun">:</span><span class="pln"> </span><span class="str">'/index.htm'</span><span class="pln">  
</span><span class="pun">};</span><span class="pln">

</span><span class="com">// Callback function is used to deal with response</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> callback </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">response</span><span class="pun">){</span><span class="pln">
   </span><span class="com">// Continuously update stream with data</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> body </span><span class="pun">=</span><span class="pln"> </span><span class="str">''</span><span class="pun">;</span><span class="pln">
   response</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'data'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      body </span><span class="pun">+=</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
   
   response</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'end'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// Data received completely.</span><span class="pln">
      console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">body</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">// Make a request to the server</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> req </span><span class="pun">=</span><span class="pln"> http</span><span class="pun">.</span><span class="pln">request</span><span class="pun">(</span><span class="pln">options</span><span class="pun">,</span><span class="pln"> callback</span><span class="pun">);</span><span class="pln">
req</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">();</span></pre>
<p>Now run the client.js from a different command terminal other than server.js to see the result −</p>
<pre class="result notranslate">$ node client.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">&lt;html&gt;
   &lt;head&gt;
      &lt;title&gt;Sample Page&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      Hello World!
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Verify the Output at server end.</p>
<pre class="result notranslate">Server running at http://127.0.0.1:8081/
Request for /index.htm received.
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="269_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="271_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'nodejs_header.php'; ?></aside>
 
  
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