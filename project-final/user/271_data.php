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
	$sid=271;
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


<h4>Express Overview</h4>
<p>Express is a minimal and flexible Node.js web application framework that provides a robust set of features to develop web and mobile applications. It facilitates the rapid development of Node based Web applications. Following are some of the core features of Express framework −</p>
<ul class="list">
<li><p>Allows to set up middlewares to respond to HTTP Requests.</p></li>
<li><p>Defines a routing table which is used to perform different actions based on HTTP Method and URL.</p></li>
<li><p>Allows to dynamically render HTML Pages based on passing arguments to templates.</p></li>
</ul>
<h4>Installing Express</h4>
<p>Firstly, install the Express framework globally using NPM so that it can be used to create a web application using node terminal.</p>
<pre class="result notranslate">$ npm install express --save
</pre>
<p>The above command saves the installation locally in the <b>node_modules</b> directory and creates a directory express inside node_modules. You should install the following important modules along with express −</p>
<ul class="list">
<li><p><b>body-parser</b> −  This is a node.js middleware for handling JSON, Raw, Text and URL encoded form data.</p></li>
<li><p><b>cookie-parser</b> −  Parse Cookie header and populate req.cookies with an object keyed by the cookie names.</p></li>
<li><p><b>multer</b> −  This is a node.js middleware for handling multipart/form-data.</p></li>
</ul>
<pre class="result notranslate">$ npm install body-parser --save
$ npm install cookie-parser --save
$ npm install multer --save
</pre>
<h4>Hello world Example</h4>
<p>Following is a very basic Express app which starts a server and listens on port 3000 for connection. This app responds with <b>Hello World!</b> for requests to the homepage. For every other path, it will respond with a <b>404 Not Found.</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Hello World'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
   </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port
   
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">
</span><span class="pun">})</span></pre>
<p>Save the above code in a file named server.js and run it with the following command.</p>
<pre class="result notranslate">$ node server.js
</pre>
<p>You will see the following output −</p>
<pre class="result notranslate">Example app listening at http://0.0.0.0:8081
</pre>
<p>Open http://127.0.0.1:8081/ in any browser to see the following result.</p>
<img src="images/nodejs_sample.jpg" alt="First Application">
<h4>Request &amp; Response</h4>
<p>Express application uses a callback function whose parameters are <b>request</b> and <b>response</b> objects.</p>
<pre class="result notranslate">app.get('/', function (req, res) {
   // --
})
</pre>
<ul class="list">
<li><p><a href="/nodejs/nodejs_request_object.htm">Request Object</a> −  The request object represents the HTTP request and has properties for the request query string, parameters, body, HTTP headers, and so on.</p></li>
<li><p><a href="/nodejs/nodejs_response_object.htm">Response Object</a>  − The response object represents the HTTP response that an Express app sends when it gets an HTTP request.</p></li>
</ul>
<p>You can print <b>req</b> and <b>res</b> objects which provide a lot of information related to HTTP request and response including cookies, sessions, URL, etc.</p>
<h4>Basic Routing</h4>
<p>We have seen a basic application which serves HTTP request for the homepage. Routing refers to determining how an application responds to a client request to a particular endpoint, which is a URI (or path) and a specific HTTP request method (GET, POST, and so on).</p>
<p>We will extend our Hello World program to handle more types of HTTP requests.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">

</span><span class="com">// This responds with "Hello World" on the homepage</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Got a GET request for the homepage"</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Hello GET'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="com">// This responds a POST request for the homepage</span><span class="pln">
app</span><span class="pun">.</span><span class="pln">post</span><span class="pun">(</span><span class="str">'/'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Got a POST request for the homepage"</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Hello POST'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="com">// This responds a DELETE request for the /del_user page.</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">delete</span><span class="pun">(</span><span class="str">'/del_user'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Got a DELETE request for /del_user"</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Hello DELETE'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="com">// This responds a GET request for the /list_user page.</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/list_user'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Got a GET request for /list_user"</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Page Listing'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="com">// This responds a GET request for abcd, abxcd, ab123cd, and so on</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/ab*cd'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">   
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Got a GET request for /ab*cd"</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Page Pattern Match'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
   </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port

   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">
</span><span class="pun">})</span></pre>
<p>Save the above code in a file named server.js and run it with the following command.</p>
<pre class="result notranslate">$ node server.js
</pre>
<p>You will see the following output −</p>
<pre class="result notranslate">Example app listening at http://0.0.0.0:8081
</pre>
<p>Now you can try different requests at http://127.0.0.1:8081 to see the output generated by server.js. Following are a few screens hots showing different responses for different URLs.</p>
<p>Screen showing again http://127.0.0.1:8081/list_user</p>
<img src="images/nodejs_sample2.jpg" alt="Second Application">
<p>Screen showing again http://127.0.0.1:8081/abcd</p>
<img src="images/nodejs_sample3.jpg" alt="Third Application">
<p>Screen showing again http://127.0.0.1:8081/abcdefg</p>
<img src="images/nodejs_sample4.jpg" alt="Fourth Application">
<h4>Serving Static Files</h4>
<p>Express provides a built-in middleware <b>express.static</b> to serve static files, such as images, CSS, JavaScript, etc.</p>
<p>You simply need to pass the name of the directory where you keep your static assets, to the <b>express.static</b> middleware to start serving the files directly. For example, if you keep your images, CSS, and JavaScript files in a directory named public, you can do this −</p>
<pre class="result notranslate">app.use(express.static('public'));
</pre>
<p>We will keep a few images in <b>public/images</b> sub-directory as follows −</p>
<pre class="result notranslate">node_modules
server.js
public/
public/images
public/images/logo.png
</pre>
<p>Let's modify "Hello Word" app to add the functionality to handle static files.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">use</span><span class="pun">(</span><span class="pln">express</span><span class="pun">.</span><span class="kwd">static</span><span class="pun">(</span><span class="str">'public'</span><span class="pun">));</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="str">'Hello World'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
   </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port

   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">

</span><span class="pun">})</span></pre>
<p>Save the above code in a file named server.js and run it with the following command.</p>
<pre class="result notranslate">$ node server.js
</pre>
<p>Now open http://127.0.0.1:8081/images/logo.png in any browser and see observe following result.</p>

<img src="images/nodejs_sample5.jpg" alt="Fifth Application">
<h4>GET Method</h4>
<p>Here is a simple example which passes two values using HTML FORM GET method. We are going to use <b>process_get</b> router inside server.js to handle this input.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://127.0.0.1:8081/process_get"</span><span class="pln"> </span><span class="atn">method</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"GET"</span><span class="tag">&gt;</span><span class="pln">
         First Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"first_name"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;br&gt;</span><span class="pln">
         Last Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"last_name"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Submit"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Let's save above code in index.htm and modify server.js to handle home page requests as well as the input sent by the HTML form.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">use</span><span class="pun">(</span><span class="pln">express</span><span class="pun">.</span><span class="kwd">static</span><span class="pun">(</span><span class="str">'public'</span><span class="pun">));</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/index.htm'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">sendFile</span><span class="pun">(</span><span class="pln"> __dirname </span><span class="pun">+</span><span class="pln"> </span><span class="str">"/"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"index.htm"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/process_get'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// Prepare output in JSON format</span><span class="pln">
   response </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      first_name</span><span class="pun">:</span><span class="pln">req</span><span class="pun">.</span><span class="pln">query</span><span class="pun">.</span><span class="pln">first_name</span><span class="pun">,</span><span class="pln">
      last_name</span><span class="pun">:</span><span class="pln">req</span><span class="pun">.</span><span class="pln">query</span><span class="pun">.</span><span class="pln">last_name
   </span><span class="pun">};</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">response</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">(</span><span class="pln">JSON</span><span class="pun">.</span><span class="pln">stringify</span><span class="pun">(</span><span class="pln">response</span><span class="pun">));</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
   </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">

</span><span class="pun">})</span></pre>
<p>Accessing the HTML document using <i>http://127.0.0.1:8081/index.htm</i> will generate the following form −</p>
<pre class="result notranslate"><form action="http://127.0.0.1:8081/process_post" method="POST">
<table>
<tbody><tr>
<td>First Name:</td>
<td><input type="text" name="first_name"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="last_name"></td>
</tr>
<tr>
<td colspan="2"><input type="button" value="Submit"></td>
</tr>
</tbody></table>
</form>
</pre>
<p>Now you can enter the First and Last Name and then click submit button to see the result and it should return the following result −</p>
<pre class="result notranslate">{"first_name":"John","last_name":"Paul"}
</pre>
<h4>POST Method</h4>
<p>Here is a simple example which passes two values using HTML FORM POST method. We are going to use <b>process_get</b> router inside server.js to handle this input.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://127.0.0.1:8081/process_post"</span><span class="pln"> </span><span class="atn">method</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"POST"</span><span class="tag">&gt;</span><span class="pln">
         First Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"first_name"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;br&gt;</span><span class="pln">
         Last Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"last_name"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Submit"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Let's save the above code in index.htm and modify server.js to handle home page requests as well as the input sent by the HTML form.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> bodyParser </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'body-parser'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Create application/x-www-form-urlencoded parser</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> urlencodedParser </span><span class="pun">=</span><span class="pln"> bodyParser</span><span class="pun">.</span><span class="pln">urlencoded</span><span class="pun">({</span><span class="pln"> extended</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span><span class="pln"> </span><span class="pun">})</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">use</span><span class="pun">(</span><span class="pln">express</span><span class="pun">.</span><span class="kwd">static</span><span class="pun">(</span><span class="str">'public'</span><span class="pun">));</span><span class="pln">
app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/index.htm'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   res</span><span class="pun">.</span><span class="pln">sendFile</span><span class="pun">(</span><span class="pln"> __dirname </span><span class="pun">+</span><span class="pln"> </span><span class="str">"/"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"index.htm"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

app</span><span class="pun">.</span><span class="pln">post</span><span class="pun">(</span><span class="str">'/process_post'</span><span class="pun">,</span><span class="pln"> urlencodedParser</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// Prepare output in JSON format</span><span class="pln">
   response </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      first_name</span><span class="pun">:</span><span class="pln">req</span><span class="pun">.</span><span class="pln">body</span><span class="pun">.</span><span class="pln">first_name</span><span class="pun">,</span><span class="pln">
      last_name</span><span class="pun">:</span><span class="pln">req</span><span class="pun">.</span><span class="pln">body</span><span class="pun">.</span><span class="pln">last_name
   </span><span class="pun">};</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">response</span><span class="pun">);</span><span class="pln">
   res</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">(</span><span class="pln">JSON</span><span class="pun">.</span><span class="pln">stringify</span><span class="pun">(</span><span class="pln">response</span><span class="pun">));</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
   </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port
   
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">

</span><span class="pun">})</span></pre>
<p>Accessing the HTML document using <i>http://127.0.0.1:8081/index.htm</i> will generate the following form −</p>
<pre class="result notranslate"><form action="http://127.0.0.1:8081/process_post" method="POST">
<table>
<tbody><tr>
<td>First Name:</td>
<td><input type="text" name="first_name"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="last_name"></td>
</tr>
<tr>
<td colspan="2"><input type="button" value="Submit"></td>
</tr>
</tbody></table>
</form>
</pre>
<p>Now you can enter the First and Last Name and then click the submit button to see the following result −</p>
<pre class="result notranslate">{"first_name":"John","last_name":"Paul"}
</pre>
<h4>File Upload</h4>
<p>The following HTML code creates a file uploader form. This form has method attribute set to <b>POST</b> and enctype attribute is set to <b>multipart/form-data</b></p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="270_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="272_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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