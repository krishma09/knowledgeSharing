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
	$sid=305;
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
<p>We have studied the page life cycle and how a page contains various controls. The page itself is instantiated as a control object. All web forms are basically instances of the ASP.NET Page class. The page class has the following extremely useful properties that correspond to intrinsic objects:</p>
<ul class="list">
<li>Session</li>
<li>Application</li>
<li>Cache</li>
<li>Request</li>
<li>Response</li>
<li>Server</li>
<li>User</li>
<li>Trace</li>
</ul>
<p>We will discuss each of these objects in due time. In this tutorial we will explore the Server object, the Request object, and the Response object.</p>
<h4>Server Object</h4>
<p>The Server object in Asp.NET is an instance of the System.Web.HttpServerUtility class. The HttpServerUtility class provides numerous properties and methods to perform various jobs.</p>
<h5>Properties and Methods of the Server object</h5>
<p>The methods and properties of the HttpServerUtility class are exposed through the intrinsic Server object provided by ASP.NET.</p>
<p>The following table provides a list of the properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>MachineName</td>
<td>Name of server computer</td>
</tr>
<tr>
<td>ScriptTimeOut</td>
<td>Gets and sets the request time-out value in seconds.</td>
</tr>
</tbody></table>
<p>The following table provides a list of some important methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:35%">Method</th>
<th>Description</th>
</tr>
<tr>
<td>CreateObject(String)</td>
<td>Creates an instance of the COM object identified by its ProgID (Programmatic ID).</td>
</tr>
<tr>
<td>CreateObject(Type)</td>
<td>Creates an instance of the COM object identified by its Type.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified Object is equal to the current Object.</td>
</tr>
<tr>
<td>Execute(String)</td>
<td>Executes the handler for the specified virtual path in the context of the current request.</td>
</tr>
<tr>
<td>Execute(String, Boolean)</td>
<td>Executes the handler for the specified virtual path in the context of the current request and specifies whether to clear the QueryString and Form collections.</td>
</tr>
<tr>
<td>GetLastError</td>
<td>Returns the previous exception.</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the Type of the current instance.</td>
</tr>
<tr>
<td>HtmlEncode</td>
<td>Changes an ordinary string into a string with legal HTML characters.</td>
</tr>
<tr>
<td>HtmlDecode</td>
<td>Converts an Html string into an ordinary string.</td>
</tr>
<tr>
<td>ToString</td>
<td>Returns a String that represents the current Object.</td>
</tr>
<tr>
<td>Transfer(String)</td>
<td>For the current request, terminates execution of the current page and starts execution of a new page by using the specified URL path of the page.</td>
</tr>
<tr>
<td>UrlDecode</td>
<td>Converts an URL string into an ordinary string.</td>
</tr>
<tr>
<td>UrlEncodeToken</td>
<td>Works same as UrlEncode, but on a byte array that contains Base64-encoded data.</td>
</tr>
<tr>
<td>UrlDecodeToken</td>
<td>Works same as UrlDecode, but on a byte array that contains Base64-encoded data.</td>
</tr>
<tr>
<td>MapPath</td>
<td>Return the physical path that corresponds to a specified virtual file path on the server.</td>
</tr>
<tr>
<td>Transfer</td>
<td>Transfers execution to another web page in the current application.</td>
</tr>
</tbody></table>
<h4>Request Object</h4>
<p>The request object is an instance of the System.Web.HttpRequest class. It represents the values and properties of the HTTP request that makes the page loading into the browser.</p>
<p>The information presented by this object is wrapped by the higher level abstractions (the web control model). However, this object helps in checking some information such as the client browser and cookies.</p>
<h5>Properties and Methods of the Request Object</h5>
<p>The following table provides some noteworthy properties of the Request object:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:35%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>AcceptTypes</td>
<td>Gets a string array of client-supported MIME accept types.</td>
</tr>
<tr>
<td>ApplicationPath</td>
<td>Gets the ASP.NET application's virtual application root path on the server.</td>
</tr>
<tr>
<td>Browser</td>
<td>Gets or sets information about the requesting client's browser capabilities.</td>
</tr>
<tr>
<td>ContentEncoding</td>
<td>Gets or sets the character set of the entity-body.</td>
</tr>
<tr>
<td>ContentLength</td>
<td>Specifies the length, in bytes, of content sent by the client.</td>
</tr>
<tr>
<td>ContentType</td>
<td>Gets or sets the MIME content type of the incoming request.</td>
</tr>
<tr>
<td>Cookies</td>
<td>Gets a collection of cookies sent by the client.</td>
</tr>
<tr>
<td>FilePath</td>
<td>Gets the virtual path of the current request.</td>
</tr>
<tr>
<td>Files</td>
<td>Gets the collection of files uploaded by the client, in multipart MIME format.</td>
</tr>
<tr>
<td>Form</td>
<td>Gets a collection of form variables.</td>
</tr>
<tr>
<td>Headers</td>
<td>Gets a collection of HTTP headers.</td>
</tr>
<tr>
<td>HttpMethod</td>
<td>Gets the HTTP data transfer method (such as GET, POST, or HEAD) used by the client.</td>
</tr>
<tr>
<td>InputStream</td>
<td>Gets the contents of the incoming HTTP entity body.</td>
</tr>
<tr>
<td>IsSecureConnection</td>
<td>Gets a value indicating whether the HTTP connection uses secure sockets (that is, HTTPS).</td>
</tr>
<tr>
<td>QueryString</td>
<td>Gets the collection of HTTP query string variables.</td>
</tr>
<tr>
<td>RawUrl</td>
<td>Gets the raw URL of the current request.</td>
</tr>
<tr>
<td>RequestType</td>
<td>Gets or sets the HTTP data transfer method (GET or POST) used by the client.</td>
</tr>
<tr>
<td>ServerVariables</td>
<td>Gets a collection of Web server variables.</td>
</tr>
<tr>
<td>TotalBytes</td>
<td>Gets the number of bytes in the current input stream.</td>
</tr>
<tr>
<td>Url</td>
<td>Gets information about the URL of the current request.</td>
</tr>
<tr>
<td>UrlReferrer</td>
<td>Gets information about the URL of the client's previous request that is linked to the current URL.</td>
</tr>
<tr>
<td>UserAgent</td>
<td>Gets the raw user agent string of the client browser.</td>
</tr>
<tr>
<td>UserHostAddress</td>
<td>Gets the IP host address of the remote client.</td>
</tr>
<tr>
<td>UserHostName</td>
<td>Gets the DNS name of the remote client.</td>
</tr>
<tr>
<td>UserLanguages</td>
<td>Gets a sorted string array of client language preferences.</td>
</tr>
</tbody></table>
<p>The following table provides a list of some important methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:35%">Method</th>
<th>Description</th>
</tr>
<tr>
<td>BinaryRead</td>
<td>Performs a binary read of a specified number of bytes from the current input stream.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified object is equal to the current object. (Inherited from object.)</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the Type of the current instance.</td>
</tr>
<tr>
<td>MapImageCoordinates</td>
<td>Maps an incoming image-field form parameter to appropriate x-coordinate and y-coordinate values.</td>
</tr>
<tr>
<td>MapPath(String)</td>
<td>Maps the specified virtual path to a physical path.</td>
</tr>
<tr>
<td>SaveAs</td>
<td>Saves an HTTP request to disk.</td>
</tr>
<tr>
<td>ToString</td>
<td>Returns a String that represents the current object.</td>
</tr>
<tr>
<td>ValidateInput</td>
<td>Causes validation to occur for the collections accessed through the Cookies, Form, and QueryString properties.</td>
</tr>
</tbody></table>
<h4>Response Object</h4>
<p>The Response object represents the server's response to the client request. It is an instance of the System.Web.HttpResponse class.</p>

<p>In ASP.NET, the response object does not play any vital role in sending HTML text to the client, because the server-side controls have nested, object oriented methods for rendering themselves.</p>
<p>However, the HttpResponse object still provides some important functionalities, like the cookie feature and the Redirect() method. The Response.Redirect() method allows transferring the user to another page, inside as well as outside the application. It requires a round trip.</p>
<h5>Properties and Methods of the Response Object</h5>
<p>The following table provides some noteworthy properties of the Response object:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:35%">Property</th><th>Description</th>
</tr>
<tr>
<td>Buffer</td>
<td>Gets or sets a value indicating whether to buffer the output and send it after the complete response is finished processing.</td>
</tr>
<tr>
<td>BufferOutput</td>
<td>Gets or sets a value indicating whether to buffer the output and send it after the complete page is finished processing.</td>
</tr>
<tr>
<td>Charset</td>
<td>Gets or sets the HTTP character set of the output stream.</td>
</tr>
<tr>
<td>ContentEncoding</td>
<td>Gets or sets the HTTP character set of the output stream.</td>
</tr>
<tr>
<td>ContentType</td>
<td>Gets or sets the HTTP MIME type of the output stream.</td>
</tr>
<tr>
<td>Cookies</td>
<td>Gets the response cookie collection.</td>
</tr>
<tr>
<td>Expires</td>
<td>Gets or sets the number of minutes before a page cached on a browser expires.</td>
</tr>
<tr>
<td>ExpiresAbsolute</td>
<td>Gets or sets the absolute date and time at which to remove cached information from the cache.</td>
</tr>
<tr>
<td>HeaderEncoding</td>
<td>Gets or sets an encoding object that represents the encoding for the current header output stream.</td>
</tr>
<tr>
<td>Headers</td>
<td>Gets the collection of response headers.</td>
</tr>
<tr>
<td>IsClientConnected</td>
<td>Gets a value indicating whether the client is still connected to the server.</td>
</tr>
<tr>
<td>Output</td>
<td>Enables output of text to the outgoing HTTP response stream.</td>
</tr>
<tr>
<td>OutputStream</td>
<td>Enables binary output to the outgoing HTTP content body.</td>
</tr>
<tr>
<td>RedirectLocation</td>
<td>Gets or sets the value of the Http Location header.</td>
</tr>
<tr>
<td>Status</td>
<td>Sets the status line that is returned to the client.</td>
</tr>
<tr>
<td>StatusCode</td>
<td>Gets or sets the HTTP status code of the output returned to the client.</td>
</tr>
<tr>
<td>StatusDescription</td>
<td>Gets or sets the HTTP status string of the output returned to the client.</td>
</tr>
<tr>
<td>SubStatusCode</td>
<td>Gets or sets a value qualifying the status code of the response.</td>
</tr>
<tr>
<td>SuppressContent</td>
<td>Gets or sets a value indicating whether to send HTTP content to the client.</td>
</tr>
</tbody></table>
<p>The following table provides a list of some important methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:35%">Method</th>
<th>Description</th>
</tr>
<tr>
<td>AddHeader</td>
<td>Adds an HTTP header to the output stream. AddHeader is provided for compatibility with earlier versions of ASP.</td>
</tr>
<tr>
<td>AppendCookie</td>
<td>Infrastructure adds an HTTP cookie to the intrinsic cookie collection.</td>
</tr>
<tr>
<td>AppendHeader</td>
<td>Adds an HTTP header to the output stream.</td>
</tr>
<tr>
<td>AppendToLog</td>
<td>Adds custom log information to the InterNET Information Services (IIS) log file.</td>
</tr>
<tr>
<td>BinaryWrite</td>
<td>Writes a string of binary characters to the HTTP output stream.</td>
</tr>
<tr>
<td>ClearContent</td>
<td>Clears all content output from the buffer stream.</td>
</tr>
<tr>
<td>Close</td>
<td>Closes the socket connection to a client.</td>
</tr>
<tr>
<td>End</td>
<td>Sends all currently buffered output to the client, stops execution of the page, and raises the EndRequest event.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified object is equal to the current object.</td>
</tr>
<tr>
<td>Flush</td>
<td>Sends all currently buffered output to the client.</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the Type of the current instance.</td>
</tr>
<tr>
<td>Pics</td>
<td>Appends a HTTP PICS-Label header to the output stream.</td>
</tr>
<tr>
<td>Redirect(String)</td>
<td>Redirects a request to a new URL and specifies the new URL.</td>
</tr>
<tr>
<td>Redirect(String, Boolean)</td>
<td>Redirects a client to a new URL. Specifies the new URL and whether execution of the current page should terminate.</td>
</tr>
<tr>
<td>SetCookie</td>
<td>Updates an existing cookie in the cookie collection.</td>
</tr>
<tr>
<td>ToString</td>
<td>Returns a String that represents the current Object.</td>
</tr>
<tr>
<td>TransmitFile(String)</td>
<td>Writes the specified file directly to an HTTP response output stream, without buffering it in memory.</td>
</tr>
<tr>
<td>Write(Char)</td>
<td>Writes a character to an HTTP response output stream.</td>
</tr>
<tr>
<td>Write(Object)</td>
<td>Writes an object to an HTTP response stream.</td>
</tr>
<tr>
<td>Write(String)</td>
<td>Writes a string to an HTTP response output stream.</td>
</tr>
<tr>
<td>WriteFile(String)</td>
<td>Writes the contents of the specified file directly to an HTTP response output stream as a file block.</td>
</tr>
<tr>
<td>WriteFile(String, Boolean)</td>
<td>Writes the contents of the specified file directly to an HTTP response output stream as a memory block.</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>The following simple example has a text box control where the user can enter name, a button to send the information to the server, and a label control to display the URL of the client computer.</p>
<p>The content file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> 
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"server_side._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Untitled Page</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            
            Enter your name:
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"TextBox1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:TextBox&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Button1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">OnClick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Button1_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Label1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">/&gt;</span><span class="pln">

         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind Button1_Click:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="typ">String</span><span class="pun">.</span><span class="typ">IsNullOrEmpty</span><span class="pun">(</span><span class="typ">TextBox1</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   
      </span><span class="com">// Access the HttpServerUtility methods through</span><span class="pln">
      </span><span class="com">// the intrinsic Server object.</span><span class="pln">
      </span><span class="typ">Label1</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Welcome, "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">Server</span><span class="pun">.</span><span class="typ">HtmlEncode</span><span class="pun">(</span><span class="typ">TextBox1</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">)</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">". &lt;br/&gt; The url is "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">Server</span><span class="pun">.</span><span class="typ">UrlEncode</span><span class="pun">(</span><span class="typ">Request</span><span class="pun">.</span><span class="typ">Url</span><span class="pun">.</span><span class="typ">ToString</span><span class="pun">())</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Run the page to see the following result:</p>
<img src="images/asp.net_server_side.jpg" alt="ASP.NET Server Side">





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="304_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="306_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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