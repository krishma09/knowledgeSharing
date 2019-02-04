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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=328;
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

<p>A web service is a web-based functionality accessed using the protocols of the web to be used by the web applications. There are three aspects of web service development:</p>
<ul class="list">
<li>Creating the web service</li> 
<li>Creating a proxy</li> 
<li>Consuming the web service</li> 
</ul>
<h4>Creating a Web Service</h4>
<p>A web service is a web application which is basically a class consisting of methods that could be used by other applications. It also follows a code-behind architecture such as the ASP.NET web pages, although it does not have a user interface.</p>
<p>To understand the concept let us create a web service to provide stock price information. The clients can query about the name and price of a stock based on the stock symbol. To keep this example simple, the values are hardcoded in a two-dimensional array. This web service has three methods:</p>
<ul class="list">
<li>A default HelloWorld method</li>
<li>A GetName Method</li>
<li>A GetPrice Method</li>
</ul>
<p>Take the following steps to create the web service:</p>
<p><b>Step (1)</b> : Select File -&gt; New -&gt; Web Site in Visual Studio, and then select ASP.NET Web Service.</p>
<p><b>Step (2)</b> : A web service file called Service.asmx and its code behind file, Service.cs is created in the App_Code directory of the project.</p>
<p><b>Step (3)</b> : Change the names of the files to StockService.asmx and StockService.cs.</p>
<p><b>Step (4)</b> : The .asmx file has simply a WebService directive on it:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">WebService</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"~/App_Code/StockService.cs"</span><span class="pln"> </span><span class="typ">Class</span><span class="pun">=</span><span class="str">"StockService"</span><span class="pln"> %&gt;</span></pre>
<p><b>Step (5)</b> : Open the StockService.cs file, the code generated in it is the basic Hello World service. The default web service code behind file looks like the following:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Collections</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">ComponentModel</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Data</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">.</span><span class="typ">Protocols</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Xml</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> </span><span class="typ">StockService</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="com">// &lt;summary&gt;</span><span class="pln">
   </span><span class="com">// Summary description for Service1</span><span class="pln">
   </span><span class="com">// &lt;summary&gt;</span><span class="pln">
   
   </span><span class="pun">[</span><span class="typ">WebService</span><span class="pun">(</span><span class="typ">Namespace</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"http://tempuri.org/"</span><span class="pun">)]</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">WebServiceBinding</span><span class="pun">(</span><span class="typ">ConformsTo</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">WsiProfiles</span><span class="pun">.</span><span class="typ">BasicProfile1_1</span><span class="pun">)]</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">ToolboxItem</span><span class="pun">(</span><span class="kwd">false</span><span class="pun">)]</span><span class="pln">
   
   </span><span class="com">// To allow this Web Service to be called from script, </span><span class="pln">
   </span><span class="com">// using ASP.NET AJAX, uncomment the following line. </span><span class="pln">
   </span><span class="com">// [System.Web.Script.Services.ScriptService]</span><span class="pln">
   
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Service1</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">.</span><span class="typ">WebService</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">WebMethod</span><span class="pun">]</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">HelloWorld</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="str">"Hello World"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Step (6)</b> : Change the code behind file to add the two dimensional array of strings for stock symbol, name and price and two web methods for getting the stock information.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">.</span><span class="typ">Protocols</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Xml</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="pun">[</span><span class="typ">WebService</span><span class="pun">(</span><span class="typ">Namespace</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"http://tempuri.org/"</span><span class="pun">)]</span><span class="pln">
</span><span class="pun">[</span><span class="typ">WebServiceBinding</span><span class="pun">(</span><span class="typ">ConformsTo</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">WsiProfiles</span><span class="pun">.</span><span class="typ">BasicProfile1_1</span><span class="pun">)]</span><span class="pln">

</span><span class="com">// To allow this Web Service to be called from script, </span><span class="pln">
</span><span class="com">// using ASP.NET AJAX, uncomment the following line. </span><span class="pln">
</span><span class="com">// [System.Web.Script.Services.ScriptService]</span><span class="pln">

</span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">StockService</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Services</span><span class="pun">.</span><span class="typ">WebService</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">StockService</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">//Uncomment the following if using designed components </span><span class="pln">
      </span><span class="com">//InitializeComponent(); </span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">string</span><span class="pun">[,]</span><span class="pln"> stocks </span><span class="pun">=</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="pun">{</span><span class="str">"RELIND"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Reliance Industries"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"1060.15"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="str">"ICICI"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"ICICI Bank"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"911.55"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="str">"JSW"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"JSW Steel"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"1201.25"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="str">"WIPRO"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Wipro Limited"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"1194.65"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="str">"SATYAM"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Satyam Computers"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"91.10"</span><span class="pun">}</span><span class="pln">
   </span><span class="pun">};</span><span class="pln">

   </span><span class="pun">[</span><span class="typ">WebMethod</span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">HelloWorld</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> </span><span class="str">"Hello World"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="pun">[</span><span class="typ">WebMethod</span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">double</span><span class="pln"> </span><span class="typ">GetPrice</span><span class="pun">(</span><span class="kwd">string</span><span class="pln"> symbol</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln"> 
      </span><span class="com">//it takes the symbol as parameter and returns price</span><span class="pln">
      </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> stocks</span><span class="pun">.</span><span class="typ">GetLength</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">.</span><span class="typ">Compare</span><span class="pun">(</span><span class="pln">symbol</span><span class="pun">,</span><span class="pln"> stocks</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">],</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">)</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDouble</span><span class="pun">(</span><span class="pln">stocks</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">]);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="pun">[</span><span class="typ">WebMethod</span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">GetName</span><span class="pun">(</span><span class="kwd">string</span><span class="pln"> symbol</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// It takes the symbol as parameter and </span><span class="pln">
      </span><span class="com">// returns name of the stock</span><span class="pln">
      </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> stocks</span><span class="pun">.</span><span class="typ">GetLength</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">.</span><span class="typ">Compare</span><span class="pun">(</span><span class="pln">symbol</span><span class="pun">,</span><span class="pln"> stocks</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">],</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">)</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> stocks</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">];</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">return</span><span class="pln"> </span><span class="str">"Stock Not Found"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Step (7)</b> : Running the web service application gives a web service test page, which allows testing the service methods.</p>
<img src="images/stock_service.jpg" alt="Stock Service">
<p><b>Step (8)</b> : Click on a method name, and check whether it runs properly.</p>
<img src="images/get_name_service.jpg" alt="Get Name">
<p><b>Step (9)</b> : For testing the GetName method, provide one of the stock symbols, which are hard coded, it returns the name of the stock</p>
<img src="images/name_of_stock.jpg" alt="the name of the stock">
<h4>Consuming the Web Service</h4>
<p>For using the web service, create a web site under the same solution. This could be done by right clicking on the Solution name in the Solution Explorer. The web page calling the web service should have a label control to display the returned results and two button controls one for post back and another for calling the service.</p>
<p>The content file for the web application is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"wsclient._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">
         Untitled Page
      </span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
         
            </span><span class="tag">&lt;h5&gt;</span><span class="pln">Using the Stock Service</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblmessage"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnpostback"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Button1_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Post Back"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">132px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            &nbsp;&nbsp;&nbsp;
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnservice"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnservice_Click</span><span class="atv">"</span><span class="pln">  </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Get Stock"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">99px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind file for the web application is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Collections</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Configuration</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Data</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Security</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">HtmlControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">.</span><span class="typ">WebParts</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Xml</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="com">//this is the proxy</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> localhost</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> wsclient
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"First Loading Time: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln">  </span><span class="typ">DateTime</span><span class="pun">.</span><span class="typ">Now</span><span class="pun">.</span><span class="typ">ToLongTimeString</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">else</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"PostBack at: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">DateTime</span><span class="pun">.</span><span class="typ">Now</span><span class="pun">.</span><span class="typ">ToLongTimeString</span><span class="pun">();</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnservice_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">StockService</span><span class="pln"> proxy </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">StockService</span><span class="pun">();</span><span class="pln">
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Format</span><span class="pun">(</span><span class="str">"Current SATYAM Price:{0}"</span><span class="pun">,</span><span class="pln">
         proxy</span><span class="pun">.</span><span class="typ">GetPrice</span><span class="pun">(</span><span class="str">"SATYAM"</span><span class="pun">).</span><span class="typ">ToString</span><span class="pun">());</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Creating the Proxy</h4>
<p>A proxy is a stand-in for the web service codes. Before using the web service, a proxy must be created. The proxy is registered with the client application. Then the client application makes the calls to the web service as it were using a local method.</p>
<p>The proxy takes the calls, wraps it in proper format and sends it as a SOAP request to the server. SOAP stands for Simple Object Access Protocol. This protocol is used for exchanging web service data.</p>

<p>When the server returns the SOAP package to the client, the proxy decodes everything and presents it to the client application.</p>
<p>Before calling the web service using the btnservice_Click, a web reference should be added to the application. This creates a proxy class transparently, which is used by the btnservice_Click event.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnservice_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">StockService</span><span class="pln"> proxy </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">StockService</span><span class="pun">();</span><span class="pln">
   lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Format</span><span class="pun">(</span><span class="str">"Current SATYAM Price: {0}"</span><span class="pun">,</span><span class="pln"> 
   proxy</span><span class="pun">.</span><span class="typ">GetPrice</span><span class="pun">(</span><span class="str">"SATYAM"</span><span class="pun">).</span><span class="typ">ToString</span><span class="pun">());</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Take the following steps for creating the proxy:</p>
<p><b>Step (1)</b> : Right click on the web application entry in the Solution Explorer and click on 'Add Web Reference'.</p>
<img src="images/add_web_reference.jpg" alt="Add Web Reference">
<p><b>Step (2)</b> : Select 'Web Services in this solution'. It returns the StockService reference.</p>
<img src="images/select_web_services.jpg" alt="Select Web Services">
<p><b>Step (3)</b> : Clicking on the service opens the test web page. By default the proxy created is called 'localhost', you can rename it. Click on 'Add Reference' to add the proxy to the client application.</p>
<img src="images/stock_service2.jpg" alt="Stock Service 2">
<p>Include the proxy in the code behind file by adding:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln"> </span><span class="kwd">using</span><span class="pln"> localhost</span><span class="pun">;</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="327_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="329_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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