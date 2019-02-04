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
	$sid=261;
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

<p>Node Package Manager (NPM) provides two main functionalities −</p>
<ul class="list">
<li><p>Online repositories for node.js packages/modules which are searchable on <a href="https://search.nodejs.org" target="_blank" rel="nofollow" alt="node js repositories">search.nodejs.org</a></p></li>
<li><p>Command line utility to install Node.js packages, do version management and dependency management of Node.js packages.</p></li>
</ul>
<p>NPM comes bundled with Node.js installables after v0.6.3 version. To verify the same, open console and type the following command and see the result −</p>
<pre class="result notranslate">$ npm --version
2.7.1
</pre>
<p>If you are running an old version of NPM then it is quite easy to update it to the latest version. Just use the following command from root −</p>
<pre class="result notranslate">$ sudo npm install npm -g
/usr/bin/npm -&gt; /usr/lib/node_modules/npm/bin/npm-cli.js
npm@2.7.1 /usr/lib/node_modules/npm
</pre>
<h4>Installing Modules using NPM</h4>
<p>There is a simple syntax to install any Node.js module −</p>
<pre class="result notranslate">$ npm install &lt;Module Name&gt;
</pre>
<p>For example, following is the command to install a famous Node.js web framework module called express −</p>
<pre class="result notranslate">$ npm install express
</pre>
<p>Now you can use this module in your js file as following −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> express </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'express'</span><span class="pun">);</span></pre>
<h4>Global vs Local Installation</h4>
<p>By default, NPM installs any dependency in the local mode. Here local mode refers to the package installation in node_modules directory lying in the folder where Node application is present. Locally deployed packages are accessible via require() method. For example, when we installed express module, it created node_modules directory in the current directory where it installed the express module.</p>
<pre class="result notranslate">$ ls -l
total 0
drwxr-xr-x 3 root root 20 Mar 17 02:23 node_modules
</pre>
<p>Alternatively, you can use <b>npm ls</b> command to list down all the locally installed modules.</p>

<pre class="result notranslate">$ npm install express -g
</pre>
<p>This will produce a similar result but the module will be installed globally. Here, the first line shows the module version and the location where it is getting installed.</p>
<pre class="result notranslate"><b>express@4.12.2 /usr/lib/node_modules/express</b>
├── merge-descriptors@1.0.0
├── utils-merge@1.0.0
├── cookie-signature@1.0.6
├── methods@1.1.1
├── fresh@0.2.4
├── cookie@0.1.2
├── escape-html@1.0.1
├── range-parser@1.0.2
├── content-type@1.0.1
├── finalhandler@0.3.3
├── vary@1.0.0
├── parseurl@1.3.0
├── content-disposition@0.5.0
├── path-to-regexp@0.1.3
├── depd@1.0.0
├── qs@2.3.3
├── on-finished@2.2.0 (ee-first@1.1.0)
├── etag@1.5.1 (crc@3.2.1)
├── debug@2.1.3 (ms@0.7.0)
├── proxy-addr@1.0.7 (forwarded@0.1.0, ipaddr.js@0.1.9)
├── send@0.12.1 (destroy@1.0.3, ms@0.7.0, mime@1.3.4)
├── serve-static@1.9.2 (send@0.12.2)
├── accepts@1.2.5 (negotiator@0.5.1, mime-types@2.0.10)
└── type-is@1.6.1 (media-typer@0.3.0, mime-types@2.0.10)
</pre>
<p>You can use the following command to check all the modules installed globally −</p>
<pre class="result notranslate">$ npm ls -g
</pre>
<h4>Using package.json</h4>
<p>package.json is present in the root directory of any Node application/module and is used to define the properties of a package. Let's open package.json of express package present in <b>node_modules/express/</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"express"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"description"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Fast, unopinionated, minimalist web framework"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"version"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"4.11.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"author"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"TJ Holowaychuk"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"tj@vision-media.ca"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
   
   </span><span class="str">"contributors"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Aaron Heckmann"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"aaron.heckmann+github@gmail.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln"> 
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Ciaran Jessup"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"ciaranj@gmail.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Douglas Christopher Wilson"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"doug@somethingdoug.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Guillermo Rauch"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"rauchg@gmail.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Jonathan Ong"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"me@jongleberry.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Roman Shtylman"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"shtylman+expressjs@gmail.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Young Jae Sim"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"hanul@hanul.me"</span><span class="pln">
   </span><span class="pun">}</span><span class="pln"> </span><span class="pun">],</span><span class="pln">
   </span><span class="str">"license"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"MIT"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"repository"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"type"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"git"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"url"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://github.com/strongloop/express"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"homepage"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://expressjs.com/"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"keywords"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
      </span><span class="str">"express"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"framework"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"sinatra"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"web"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"rest"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"restful"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"router"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"app"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"api"</span><span class="pln">
   </span><span class="pun">],</span><span class="pln">
   </span><span class="str">"dependencies"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"accepts"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.2.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"content-disposition"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.5.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"cookie-signature"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"1.0.5"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"debug"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~2.1.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"depd"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.0.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"escape-html"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"1.0.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"etag"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.5.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"finalhandler"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.3.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"fresh"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.2.4"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"media-typer"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.3.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"methods"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.1.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"on-finished"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~2.2.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"parseurl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.3.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"path-to-regexp"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.1.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"proxy-addr"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.0.6"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"qs"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2.3.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"range-parser"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.0.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"send"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.11.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"serve-static"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.8.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"type-is"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.5.6"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"vary"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.0.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"cookie"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.1.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"merge-descriptors"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.0.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"utils-merge"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"1.0.0"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"devDependencies"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"after"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.8.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"ejs"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2.1.4"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"istanbul"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.3.5"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"marked"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.3.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"mocha"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~2.1.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"should"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~4.6.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"supertest"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~0.15.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"hjs"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~0.0.6"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"body-parser"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.11.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"connect-redis"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~2.2.0"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"cookie-parser"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.3.3"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"express-session"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.10.2"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"jade"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.9.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"method-override"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~2.3.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"morgan"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~1.5.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"multiparty"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~4.1.1"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"vhost"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"~3.0.0"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"engines"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"node"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"&gt;= 0.10.0"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"files"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
      </span><span class="str">"LICENSE"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"History.md"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"Readme.md"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"index.js"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"lib/"</span><span class="pln">
   </span><span class="pun">],</span><span class="pln">
   </span><span class="str">"scripts"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"test"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"mocha --require test/support/env 
         --reporter spec --bail --check-leaks test/ test/acceptance/"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"test-cov"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"istanbul cover node_modules/mocha/bin/_mocha 
         -- --require test/support/env --reporter dot --check-leaks test/ test/acceptance/"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"test-tap"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"mocha --require test/support/env 
         --reporter tap --check-leaks test/ test/acceptance/"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"test-travis"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"istanbul cover node_modules/mocha/bin/_mocha 
         --report lcovonly -- --require test/support/env 
         --reporter spec --check-leaks test/ test/acceptance/"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"gitHead"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"63ab25579bda70b4927a179b580a9c580b6c7ada"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"bugs"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"url"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://github.com/strongloop/express/issues"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"_id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"express@4.11.2"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"_shasum"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"8df3d5a9ac848585f00a0777601823faecd3b148"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"_from"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"express@*"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"_npmVersion"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"1.4.28"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"_npmUser"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"dougwilson"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"doug@somethingdoug.com"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"maintainers"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"tjholowaychuk"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"tj@vision-media.ca"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"jongleberry"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"jonathanrichardong@gmail.com"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"shtylman"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"shtylman@gmail.com"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"dougwilson"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"doug@somethingdoug.com"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"aredridel"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"aredridel@nbtsc.org"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"strongloop"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"callback@strongloop.com"</span><span class="pln">
      </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"rfeng"</span><span class="pun">,</span><span class="pln">
         </span><span class="str">"email"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"enjoyjava@gmail.com"</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">],</span><span class="pln">
   </span><span class="str">"dist"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"shasum"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"8df3d5a9ac848585f00a0777601823faecd3b148"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"tarball"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://registry.npmjs.org/express/-/express-4.11.2.tgz"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
   </span><span class="str">"directories"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{},</span><span class="pln">
      </span><span class="str">"_resolved"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://registry.npmjs.org/express/-/express-4.11.2.tgz"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"readme"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"ERROR: No README data found!"</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Attributes of Package.json</h4>
<ul class="list">
<li><p><b>name</b> − name of the package</p></li>
<li><p><b>version</b> − version of the package</p></li>
<li><p><b>description</b> − description of the package</p></li>
<li><p><b>homepage</b> − homepage of the package</p></li>
<li><p><b>author</b> − author of the package</p></li>
<li><p><b>contributors</b> − name of the contributors to the package</p></li>
<li><p><b>dependencies</b> − list of dependencies. NPM automatically installs all the dependencies mentioned here in the node_module folder of the package.</p></li>
<li><p><b>repository</b> − repository type and URL of the package</p></li>
<li><p><b>main</b> − entry point of the package</p></li>
<li><p><b>keywords</b> − keywords</p></li>
</ul>
<h4>Uninstalling a Module</h4>
<p>Use the following command to uninstall a Node.js module.</p>
<pre class="result notranslate">$ npm uninstall express
</pre>
<p>Once NPM uninstalls the package, you can verify it by looking at the content of /node_modules/ directory or type the following command −</p>

<pre class="result notranslate">$ npm ls
</pre>
<h4>Updating a Module</h4>
<p>Update package.json and change the version of the dependency to be updated and run the following command.</p>
<pre class="result notranslate">$ npm update express
</pre>
<h4>Search a Module</h4>
<p>Search a package name using NPM.</p>
<pre class="result notranslate">$ npm search express
</pre>
<h4>Create a Module</h4>
<p>Creating a module requires package.json to be generated. Let's generate package.json using NPM, which will generate the basic skeleton of the package.json.</p>
<pre class="result notranslate">$ npm init
This utility will walk you through creating a package.json file.
It only covers the most common items, and tries to guess sane defaults.

See 'npm help json' for definitive documentation on these fields
and exactly what they do.

Use 'npm install &lt;pkg&gt; --save' afterwards to install a package and
save it as a dependency in the package.json file.

Press ^C at any time to quit.
name: (webmaster)
</pre>
<p>You will need to provide all the required information about your module. You can take help from the above-mentioned package.json file to understand the meanings of various information demanded. Once package.json is generated, use the following command to register yourself with NPM repository site using a valid email address.</p>
<pre class="result notranslate">$ npm adduser
Username: mcmohd
Password:
Email: (this IS public) mcmohd@gmail.com
</pre>
<p>It is time now to publish your module −</p>
<pre class="result notranslate">$ npm publish
</pre>

<p>If everything is fine with your module, then it will be published in the repository and will be accessible to install using NPM like any other Node.js module.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="260_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="262_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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