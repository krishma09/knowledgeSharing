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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=256;
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

<h4>What is CGI?</h4>
<ul class="list">
<li><p>The Common Gateway Interface, or CGI, is a set of standards that define how information is exchanged between the web server and a custom script.</p></li>
<li><p>The CGI specs are currently maintained by the NCSA and NCSA defines CGI is as follows:</p></li>
<li><p>The Common Gateway Interface, or CGI, is a standard for external gateway programs to interface with information servers such as HTTP servers.</p> </li>
<li><p>The current version is CGI/1.1 and CGI/1.2 is under progress.</p></li>
</ul>
<h4>Web Browsing</h4>
<p>To understand the concept of CGI, let's see what happens when we click a hyperlink to browse a particular web page or URL.</p>
<ul class="list">
<li><p>Your browser contacts the HTTP web server and demand for the URL ie. filename.</p></li>
<li><p>Web Server will parse the URL and will look for the filename. If it finds requested file then web server sends that file back to the browser otherwise sends an error message indicating that you have requested a wrong file.</p></li>
<li><p>Web browser takes response from web server and displays either the received file or error message based on the received response.</p></li>
</ul>
<p>However, it is possible to set up the HTTP server in such a way that whenever a file in a certain directory is requested, that file is not sent back; instead it is executed as a program, and produced output from the program is sent back to your browser to display.</p>
<p>The Common Gateway Interface (CGI) is a standard protocol for enabling applications (called CGI programs or CGI scripts) to interact with Web servers and with clients. These CGI programs can be a written in Python, PERL, Shell, C or C++ etc.</p>
<h4>CGI Architecture Diagram</h4>
<h4>CGI Architecture Diagram</h4>
<p>The following simple program shows a simple architecture of CGI:</p>
<img src="images/cgiarch.gif" alt="CGI Architecture">
<h4>Web Server Configuration</h4>
<p class="alignment">Before you proceed with CGI Programming, make sure that your Web Server supports CGI and it is configured to handle CGI Programs. All the CGI Programs to be executed by the HTTP server are kept in a pre-configured directory. This directory is called CGI directory and by convention it is named as /var/www/cgi-bin. By convention CGI files will have extension as <b>.cgi</b>, though they are C++ executable.</p>
<p>By default, Apache Web Server is configured to run CGI programs in /var/www/cgi-bin. If you want to specify any other directory to run your CGI scripts, you can modify the following section in the httpd.conf file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;Directory</span><span class="pln"> </span><span class="atv">"/var/www/cgi-bin"</span><span class="tag">&gt;</span><span class="pln">
   AllowOverride None
   Options ExecCGI
   Order allow,deny
   Allow from all
</span><span class="tag">&lt;/Directory&gt;</span><span class="pln">
 
</span><span class="tag">&lt;Directory</span><span class="pln"> </span><span class="atv">"/var/www/cgi-bin"</span><span class="tag">&gt;</span><span class="pln">
   Options All
</span><span class="tag">&lt;/Directory&gt;</span></pre>
<p>Here, I assumed that you have Web Server up and running successfully and you are able to run any other CGI program like Perl or Shell etc.</p>
<h4>First CGI Program</h4>
<p>Consider the following C++ Program content:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Content-type:text/html\r\n\r\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;html&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;title&gt;Hello World - First CGI Program&lt;/title&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;body&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;h4&gt;Hello World! This is my first CGI program&lt;/h4&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/body&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/html&gt;\n"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Output</h4>
<pre class="result notranslate">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Hello World - First CGI Program&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h4&gt;Hello World! This is my first CGI program&lt;/h4&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Compile above code and name the executable  as cplusplus.cgi. This file is being kept in /var/www/cgi-bin directory and it has following content. Before running your CGI program make sure you have change mode of file using <b>chmod 755 cplusplus.cgi</b> UNIX command to make file executable.</p>
<h4>Hello World! This is my first CGI program</h4>
<p>Above C++ program is a simple program which is writing its output on STDOUT file ie. screen. There is one important and extra feature available which is first line to be printed <b>Content-type:text/html\r\n\r\n</b>. This line is sent back to the browser and specify the content type to be displayed on the browser screen. Now you must have understood basic concept of CGI and you can write many complicated CGI programs using Python. A C++ CGI program can interact with any other exernal system, such as RDBMS, to exchange information.</p>
<h4>HTTP Header</h4>
<p>The line <b>Content-type:text/html\r\n\r\n</b> is part of HTTP header, which is sent to the browser to understand the content.  All the HTTP header will be in the following form</p>
<p>The line <b>Content-type:text/html\r\n\r\n</b> is part of HTTP header, which is sent to the browser to understand the content.  All the HTTP header will be in the following form</p>
<pre class="result notranslate">HTTP Field Name: Field Content
 
For Example
Content-type: text/html\r\n\r\n
</pre>
<p>There are few other important HTTP headers, which you will use frequently in your CGI Programming.</p>
<table class="table table-bordered" border="1" cellpadding="5" cellspacing="0">
<tbody><tr>
<th width="30%">Header</th>
<th>Description</th></tr>
<tr> 
<td>Content-type: </td>
<td>A MIME string defining the format of the file being returned. Example is Content-type:text/html</td>
</tr>
<tr> 
<td>Expires: Date </td>
<td>The date the information becomes invalid. This should be used by the browser to decide when a page needs to be refreshed. A valid date string should be in the format 01 Jan 1998 12:00:00 GMT.</td> 
</tr>
<tr> 
<td>Location: URL </td>
<td>The URL that should be returned instead of the URL requested. You can use this filed to redirect a request to any file.</td> 
</tr>
<tr> 
<td>Last-modified: Date</td>
<td>The date of last modification of the resource.</td> 
</tr>
<tr> 
<td>Content-length: N</td>
<td>The length, in bytes, of the data being returned. The browser uses this value to report the estimated download time for a file.</td> 
</tr>
<tr> <td>Set-Cookie: String </td>
<td>Set the cookie passed through the <i>string</i></td> 
</tr>
</tbody></table>
<h4>CGI Environment Variables</h4>
<p>All the CGI program will have access to the following environment variables. These variables play an important role while writing any CGI program.</p>
<table class="table table-bordered" border="1" cellpadding="5" cellspacing="0">
<tbody><tr>
<th width="30%">Variable Name</th>
<th>Description</th>
</tr>
<tr> 
<td>CONTENT_TYPE</td>
<td>The data type of the content. Used when the client is sending attached content to the server. For example file upload etc.</td> 
</tr>
<tr> 
<td>CONTENT_LENGTH</td>
<td>The length of the query information. It's available only for POST requests</td> 
</tr>
<tr> 
<td>HTTP_COOKIE</td>
<td>Return the set cookies in the form of key &amp; value pair.</td> 
</tr>
<tr> 
<td>HTTP_USER_AGENT</td>
<td>The User-Agent request-header field contains information about the user agent originating the request. Its name of the web browser.</td> 
</tr>
<tr> 
<td>PATH_INFO</td>
<td>The path for the CGI script.</td>
</tr>
<tr> 
<td>QUERY_STRING</td>
<td>The URL-encoded information that is sent with GET method request.</td> 
</tr>
<tr> 
<td>REMOTE_ADDR</td>
<td>The IP address of the remote host making the request. This can be useful for logging or for authentication purpose.</td>
</tr>
<tr> 
<td>REMOTE_HOST</td>
<td>The fully qualified name of the host making the request. If this information is not available then REMOTE_ADDR can be used to get IR address.</td> 
</tr>
<tr> 
<td>REQUEST_METHOD</td>
<td>The method used to make the request. The most common methods are GET and POST.</td>
</tr>
<tr> 
<td>SCRIPT_FILENAME</td>
<td>The full path to the CGI script.</td>
</tr>
<tr> 
<td>SCRIPT_NAME</td>
<td>The name of the CGI script.</td>
</tr>
<tr> 
<td>SERVER_NAME</td>
<td>The server's hostname or IP Address</td>
</tr>
<tr> 
<td>SERVER_SOFTWARE</td>
<td>The name and version of the software the server is running.</td></tr>
</tbody></table>
<br>
<p>Here is small CGI program to list out all the CGI variables. Click this link to see the result <a href="http://www.tutorialspoint.com/cgi-bin/cpp_env.cgi" target="_blank">Get Environment</a></p>
<br>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">const</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> ENV</span><span class="pun">[</span><span class="pln"> </span><span class="lit">24</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">                 
   </span><span class="str">"COMSPEC"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"DOCUMENT_ROOT"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"GATEWAY_INTERFACE"</span><span class="pun">,</span><span class="pln">   
   </span><span class="str">"HTTP_ACCEPT"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"HTTP_ACCEPT_ENCODING"</span><span class="pun">,</span><span class="pln">             
   </span><span class="str">"HTTP_ACCEPT_LANGUAGE"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"HTTP_CONNECTION"</span><span class="pun">,</span><span class="pln">         
   </span><span class="str">"HTTP_HOST"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"HTTP_USER_AGENT"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"PATH"</span><span class="pun">,</span><span class="pln">            
   </span><span class="str">"QUERY_STRING"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"REMOTE_ADDR"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"REMOTE_PORT"</span><span class="pun">,</span><span class="pln">      
   </span><span class="str">"REQUEST_METHOD"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"REQUEST_URI"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"SCRIPT_FILENAME"</span><span class="pun">,</span><span class="pln">
   </span><span class="str">"SCRIPT_NAME"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"SERVER_ADDR"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"SERVER_ADMIN"</span><span class="pun">,</span><span class="pln">      
   </span><span class="str">"SERVER_NAME"</span><span class="pun">,</span><span class="str">"SERVER_PORT"</span><span class="pun">,</span><span class="str">"SERVER_PROTOCOL"</span><span class="pun">,</span><span class="pln">     
   </span><span class="str">"SERVER_SIGNATURE"</span><span class="pun">,</span><span class="str">"SERVER_SOFTWARE"</span><span class="pln"> 
</span><span class="pun">};</span><span class="pln">   

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Content-type:text/html\r\n\r\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;html&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;title&gt;CGI Envrionment Variables&lt;/title&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;body&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;table border = \"0\" cellspacing = \"2\"&gt;"</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">24</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;tr&gt;&lt;td&gt;"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> ENV</span><span class="pun">[</span><span class="pln"> i </span><span class="pun">]</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/td&gt;&lt;td&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="com">// attempt to retrieve value of environment variable</span><span class="pln">
      </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">value </span><span class="pun">=</span><span class="pln"> getenv</span><span class="pun">(</span><span class="pln"> ENV</span><span class="pun">[</span><span class="pln"> i </span><span class="pun">].</span><span class="pln">c_str</span><span class="pun">()</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> 
		
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> value </span><span class="pun">!=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">                                 
      </span><span class="pun">}</span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Environment variable does not exist."</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/td&gt;&lt;/tr&gt;\n"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/table&gt;&lt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/body&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/html&gt;\n"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>C++ CGI Library</h4>
<p>For real examples, you would need to do many operations by your CGI program. There is a CGI library written for C++ program which you can download from <a rel="nofollow" href="ftp://ftp.gnu.org/gnu/cgicc/" target="_blank">ftp://ftp.gnu.org/gnu/cgicc/</a> and following the following steps to install the library:</p>
<pre class="result notranslate">$tar xzf cgicc-X.X.X.tar.gz 
$cd cgicc-X.X.X/ 
$./configure --prefix=/usr 
$make
$make install
</pre>
<pre class="result notranslate">$tar xzf cgicc-X.X.X.tar.gz 
$cd cgicc-X.X.X/ 
$./configure --prefix=/usr 
$make
$make install
</pre>
<p>You can check related documentation available at <a rel="nofollow" href="http://www.gnu.org/software/cgicc/doc/index.html" target="_blank">C++ CGI Lib Documentation</a>.</p>
<h4>GET and POST Methods</h4>
<p>You must have come across many situations when you need to pass some information from your browser to web server and ultimately to your CGI Program. Most frequently browser uses two methods two pass this information to web server. These methods are GET Method and POST Method.</p>
<h4>Passing Information using GET method:</h4>
<p>The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character as follows:</p>
<pre class="result notranslate">http://www.test.com/cgi-bin/cpp.cgi?key1=value1&amp;key2=value2
</pre>
<p>The GET method is the default  method to pass information from browser to web server and it produces a long string that appears in your browser's Location:box. Never use the GET method if you have password or other sensitive information to pass to the server. The GET method has size limitation  and you can pass upto 1024 characters in a request string. </p>
<p>When using GET method, information is passed using QUERY_STRING http header and will be accessible in your CGI Program through QUERY_STRING environment variable</p>
<p>You can pass information by simply concatenating key and value pairs alongwith any URL or you can use HTML &lt;FORM&gt; tags to pass information using GET method.</p>
<h4>Simple URL Example :  Get Method  </h4>
<p>Here is a simple URL which will pass two values to hello_get.py program using GET method.</p>
<a style="text-decoration:none;" href="/cgi-bin/cpp_get.cgi?first_name=ZARA&amp;last_name=ALI" target="_blank">/cgi-bin/cpp_get.cgi?first_name=ZARA&amp;last_name=ALI</a>
<p>Below is program to generate <b>cpp_get.cgi</b> CGI program to handle input given by web browser. We are going to use C++ CGI library which makes it very easy to access passed information:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;vector&gt;</span><span class="pln">  
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string&gt;</span><span class="pln">  
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">  
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln"> 

</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cgicc/CgiDefs.h&gt;</span><span class="pln"> 
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cgicc/Cgicc.h&gt;</span><span class="pln"> 
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cgicc/HTTPHTMLHeader.h&gt;</span><span class="pln"> 
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cgicc/HTMLClasses.h&gt;</span><span class="pln">  

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> cgicc</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Cgicc</span><span class="pln"> formData</span><span class="pun">;</span><span class="pln">
   
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Content-type:text/html\r\n\r\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;html&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;title&gt;Using GET and POST Methods&lt;/title&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/head&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;body&gt;\n"</span><span class="pun">;</span><span class="pln">

   form_iterator </span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> formData</span><span class="pun">.</span><span class="pln">getElement</span><span class="pun">(</span><span class="str">"first_name"</span><span class="pun">);</span><span class="pln">  
	
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> </span><span class="pun">!</span><span class="kwd">fi</span><span class="pun">-&gt;</span><span class="pln">isEmpty</span><span class="pun">()</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">!=</span><span class="pln"> </span><span class="pun">(*</span><span class="pln">formData</span><span class="pun">).</span><span class="kwd">end</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span><span class="pln">  
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"First name: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="pun">**</span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">  
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"No text entered for first name"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">  
   </span><span class="pun">}</span><span class="pln">
	
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;br/&gt;\n"</span><span class="pun">;</span><span class="pln">
	
   </span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> formData</span><span class="pun">.</span><span class="pln">getElement</span><span class="pun">(</span><span class="str">"last_name"</span><span class="pun">);</span><span class="pln"> 
	
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> </span><span class="pun">!</span><span class="kwd">fi</span><span class="pun">-&gt;</span><span class="pln">isEmpty</span><span class="pun">()</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">!=</span><span class="pln"> </span><span class="pun">(*</span><span class="pln">formData</span><span class="pun">).</span><span class="kwd">end</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span><span class="pln">  
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Last name: "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="pun">**</span><span class="kwd">fi</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">  
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"No text entered for last name"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">  
   </span><span class="pun">}</span><span class="pln">
	
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;br/&gt;\n"</span><span class="pun">;</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/body&gt;\n"</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"&lt;/html&gt;\n"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Now, compile the above program as follows:</p>
<pre class="result notranslate">$g++ -o cpp_get.cgi cpp_get.cpp -lcgicc
</pre>
<p>Generate cpp_get.cgi and put it in your CGI directory and try to access using following link:</p>
<a style="text-decoration:none;" href="/cgi-bin/cpp_get.cgi?first_name=ZARA&amp;last_name=ALI" target="_blank">/cgi-bin/cpp_get.cgi?first_name=ZARA&amp;last_name=ALI</a>
<p>This would generate following result:</p>
<pre class="result notranslate">First name: ZARA 
Last name: ALI 
</pre>
<h4>Simple FORM Example: GET Method</h4>
<p>Here is a simple example which passes two values using HTML FORM and submit button. We are going to use same CGI script cpp_get.cgi to handle this input.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">"/cgi-bin/cpp_get.cgi"</span><span class="pln"> </span><span class="atn">method</span><span class="pun">=</span><span class="atv">"get"</span><span class="tag">&gt;</span><span class="pln">
First Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"first_name"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
 
Last Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"last_name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="255_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<!--<a href="2_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>-->
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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