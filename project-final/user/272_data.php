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
	$sid=272;
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
<h4>What is REST architecture?</h4>
<p>REST stands for REpresentational State Transfer. REST is web standards based architecture and uses HTTP Protocol. It revolves around resource where every component is a resource and a resource is accessed by a common interface using HTTP standard methods. REST was first introduced by Roy Fielding in 2000.</p>
<p>A REST Server simply provides access to resources and REST client accesses and modifies the resources using HTTP protocol. Here each resource is identified by URIs/ global IDs. REST uses various representation to represent a resource like text, JSON, XML but JSON is the most popular one.</p>
<h5>HTTP methods</h5>
<p>Following four HTTP methods are commonly used in REST based architecture.</p>
<p>Following four HTTP methods are commonly used in REST based architecture.</p>
<ul class="list">
<li><p><b>GET</b> - This is used to provide a read only access to a resource.</p></li>
<li><p><b>PUT</b> - This is used to create a new resource.</p></li>
<li><p><b>DELETE</b> - This is used to remove a resource.</p></li>
<li><p><b>POST</b> - This is used to update a existing resource or create a new resource.</p></li>
</ul>
<h4>RESTful Web Services</h4>
<p>A web service is a collection of open protocols and standards used for exchanging data between applications or systems. Software applications written in various programming languages and running on various platforms can use web services to exchange data over computer networks like the Internet in a manner similar to inter-process communication on a single computer. This interoperability (e.g., communication between Java and Python, or Windows and Linux applications) is due to the use of open standards.</p>
<p>Web services based on REST Architecture are known as RESTful web services. These webservices uses HTTP methods to implement the concept of REST architecture. A RESTful web service usually defines a URI, Uniform Resource Identifier a service, which provides resource representation such as JSON and set of HTTP Methods.</p>
<h4>Creating RESTful for A Library</h4>
<p>Consider we have a JSON based database of users having the following users in a file <b>users.json</b>:</p><pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   </span><span class="str">"user1"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"mahesh"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password1"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"teacher"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"user2"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"suresh"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password2"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"librarian"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"user3"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"ramesh"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password3"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"clerk"</span><span class="pun">,</span><span class="pln">
	  </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Based on this information we are going to provide following RESTful APIs.</p>

<table class="src">
<tbody><tr><th>S. N.</th><th>URI</th><th>HTTP Method</th><th>POST body</th><th>Result</th>
</tr><tr><td>1</td><td>listUsers</td><td>GET</td><td>empty</td><td>Show list of all the users.</td>
</tr><tr><td>2</td><td>addUser</td><td>POST</td><td>JSON String</td><td>Add details of new user.</td>
</tr><tr><td>3</td><td>deleteUser</td><td>DELETE</td><td>JSON String</td><td>Delete an existing user.</td>
</tr><tr><td>4</td><td>:id</td><td>GET</td><td>empty</td><td>Show details of a user.</td>
</tr></tbody></table>
<p>I'm keeping most of the part of all the examples in the form of hard coding assuming you already know how to pass values from front end using Ajax or simple form data and how to process them using express <b>Request</b> object.</p>
<h4>List Users</h4>
<p>Let's implement our first RESTful API <b>listUsers</b> using the following code in a server.js file:</p>
<i>server.js</i>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">

app</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'/listUsers'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   fs</span><span class="pun">.</span><span class="pln">readFile</span><span class="pun">(</span><span class="pln"> __dirname </span><span class="pun">+</span><span class="pln"> </span><span class="str">"/"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"users.json"</span><span class="pun">,</span><span class="pln"> </span><span class="str">'utf8'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
       console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> data </span><span class="pun">);</span><span class="pln">
       res</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">(</span><span class="pln"> data </span><span class="pun">);</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
  </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port

  console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">

</span><span class="pun">})</span></pre>
<p>Now try to access defined API using <i> URL: http://127.0.0.1:8081/listUsers</i> and <i>HTTP Method : GET</i> on local machine using any REST client. This should produce following result:</p>
<p>You can change given IP address when you will put the solution in production environment.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   </span><span class="str">"user1"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"mahesh"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"teacher"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"user2"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"suresh"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"librarian"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"user3"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"ramesh"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"clerk"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Add User</h4>
<p>Following API will show you how to add new user in the list. Following is the detail of the new user:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">user </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="str">"user4"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"mohit"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password4"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"teacher"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>You can accept the same input in the form of JSON using Ajax call but for teaching point of view, we are making it hard coded here. Following is the <b>addUser</b> API to a new user in the database:</p>
<i>server.js</i>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> app </span><span class="pun">=</span><span class="pln"> express</span><span class="pun">();</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> user </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="str">"user4"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"mohit"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"password"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"password4"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"profession"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"teacher"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

app</span><span class="pun">.</span><span class="pln">post</span><span class="pun">(</span><span class="str">'/addUser'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">req</span><span class="pun">,</span><span class="pln"> res</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// First read existing users.</span><span class="pln">
   fs</span><span class="pun">.</span><span class="pln">readFile</span><span class="pun">(</span><span class="pln"> __dirname </span><span class="pun">+</span><span class="pln"> </span><span class="str">"/"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"users.json"</span><span class="pun">,</span><span class="pln"> </span><span class="str">'utf8'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
       data </span><span class="pun">=</span><span class="pln"> JSON</span><span class="pun">.</span><span class="pln">parse</span><span class="pun">(</span><span class="pln"> data </span><span class="pun">);</span><span class="pln">
       data</span><span class="pun">[</span><span class="str">"user4"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> user</span><span class="pun">[</span><span class="str">"user4"</span><span class="pun">];</span><span class="pln">
       console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> data </span><span class="pun">);</span><span class="pln">
       res</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">(</span><span class="pln"> JSON</span><span class="pun">.</span><span class="pln">stringify</span><span class="pun">(</span><span class="pln">data</span><span class="pun">));</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> server </span><span class="pun">=</span><span class="pln"> app</span><span class="pun">.</span><span class="pln">listen</span><span class="pun">(</span><span class="lit">8081</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="kwd">var</span><span class="pln"> host </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">address
  </span><span class="kwd">var</span><span class="pln"> port </span><span class="pun">=</span><span class="pln"> server</span><span class="pun">.</span><span class="pln">address</span><span class="pun">().</span><span class="pln">port
  console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Example app listening at http://%s:%s"</span><span class="pun">,</span><span class="pln"> host</span><span class="pun">,</span><span class="pln"> port</span><span class="pun">)</span><span class="pln">

</span><span class="pun">})</span></pre>
<p>Now try to access defined API using <i> URL: http://127.0.0.1:8081/addUser</i> and <i>HTTP Method : POST</i> on local machine using any REST client. This should produce following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
</span><span class="str">"user1"</span><span class="pun">:{</span><span class="str">"name"</span><span class="pun">:</span><span class="str">"mahesh"</span><span class="pun">,</span><span class="str">"password"</span><span class="pun">:</span><span class="str">"password1"</span><span class="pun">,</span><span class="str">"profession"</span><span class="pun">:</span><span class="str">"teacher"</span><span class="pun">,</span><span class="str">"id"</span><span class="pun">:</span><span class="lit">1</span><span class="pun">},</span><span class="pln">
</span><span class="str">"user2"</span><span class="pun">:{</span><span class="str">"name"</span><span class="pun">:</span><span class="str">"suresh"</span><span class="pun">,</span><span class="str">"password"</span><span class="pun">:</span><span class="str">"password2"</span><span class="pun">,</span><span class="str">"profession"</span><span class="pun">:</span><span class="str">"librarian"</span><span class="pun">,</span><span class="str">"id"</span><span class="pun">:</span><span class="lit">2</span><span class="pun">},</span><span class="pln">
</span><span class="str">"user3"</span><span class="pun">:{</span><span class="str">"name"</span><span class="pun">:</span><span class="str">"ramesh"</span><span class="pun">,</span><span class="str">"password"</span><span class="pun">:</span><span class="str">"password3"</span><span class="pun">,</span><span class="str">"profession"</span><span class="pun">:</span><span class="str">"clerk"</span><span class="pun">,</span><span class="str">"id"</span><span class="pun">:</span><span class="lit">3</span><span class="pun">},</span><span class="pln">
</span><span class="str">"user4"</span><span class="pun">:{</span><span class="str">"name"</span><span class="pun">:</span><span class="str">"mohit"</span><span class="pun">,</span><span class="str">"password"</span><span class="pun">:</span><span class="str">"password4"</span><span class="pun">,</span><span class="str">"profession"</span><span class="pun">:</span><span class="str">"teacher"</span><span class="pun">,</span><span class="str">"id"</span><span class="pun">:</span><span class="lit">4</span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="271_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="273_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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