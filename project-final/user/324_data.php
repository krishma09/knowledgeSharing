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
	$sid=324;
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

<p>Error handling in ASP.NET has three aspects:</p>
<ul class="list">
<li><p><b>Tracing</b> - tracing the program execution at page level or application level.</p></li>
<li><p><b>Error handling</b> - handling standard errors or custom errors at page level or application level.</p></li>
<li><p><b>Debugging</b> - stepping through the program, setting break points to analyze the code</p></li>
</ul>
<p>In this chapter, we will discuss tracing and error handling and in this chapter, we will discuss debugging.</p>
<p>To understand the concepts, create the following sample application. It has a label control, a dropdown list, and a link. The dropdown list loads an array list of famous quotes and the selected quote is shown in the label below. It also has a hyperlink which has points to a nonexistent link.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"errorhandling._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">
         Tracing, debugging and error handling
      </span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblheading"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Tracing, Debuggin  and Error Handling"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ddlquotes"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln">  </span><span class="atn">onselectedindexchanged</span><span class="pun">=</span><span class="atv">"</span><span class="pln">ddlquotes_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblquotes"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:HyperLink</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"HyperLink1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">NavigateUrl</span><span class="pun">=</span><span class="atv">"mylink.htm"</span><span class="tag">&gt;</span><span class="pln">Link to:</span><span class="tag">&lt;/asp:HyperLink&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">string</span><span class="pun">[,]</span><span class="pln"> quotes </span><span class="pun">=</span><span class="pln"> 
         </span><span class="pun">{</span><span class="pln">
            </span><span class="pun">{</span><span class="str">"Imagination is more important than Knowledge."</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Albert Einsten"</span><span class="pun">},</span><span class="pln">
            </span><span class="pun">{</span><span class="str">"Assume a virtue, if you have it not"</span><span class="pln"> </span><span class="str">"Shakespeare"</span><span class="pun">},</span><span class="pln">
            </span><span class="pun">{</span><span class="str">"A man cannot be comfortable without his own approval"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Mark Twain"</span><span class="pun">},</span><span class="pln">
            </span><span class="pun">{</span><span class="str">"Beware the young doctor and the old barber"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Benjamin Franklin"</span><span class="pun">},</span><span class="pln">
            </span><span class="pun">{</span><span class="str">"Whatever begun in anger ends in shame"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Benjamin Franklin"</span><span class="pun">}</span><span class="pln">
         </span><span class="pun">};</span><span class="pln">
         
         </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="pln">quotes</span><span class="pun">.</span><span class="typ">GetLength</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
            ddlquotes</span><span class="pun">.</span><span class="typ">Items</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ListItem</span><span class="pun">(</span><span class="pln">quotes</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="lit">0</span><span class="pun">],</span><span class="pln"> quotes</span><span class="pun">[</span><span class="pln">i</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]));</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> ddlquotes_SelectedIndexChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">ddlquotes</span><span class="pun">.</span><span class="typ">SelectedIndex</span><span class="pln"> </span><span class="pun">!=</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         lblquotes</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Format</span><span class="pun">(</span><span class="str">"{0}, Quote: {1}"</span><span class="pun">,</span><span class="pln"> ddlquotes</span><span class="pun">.</span><span class="typ">SelectedItem</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">,</span><span class="pln"> ddlquotes</span><span class="pun">.</span><span class="typ">SelectedValue</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Tracing</h4>
<p>To enable page level tracing, you need to modify the Page directive and add a Trace attribute as shown:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln">
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"errorhandling._Default"</span><span class="pln"> </span><b><span class="typ">Trace</span></b><span class="pln"> </span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> %&gt;</span></pre>
   <p>Now when you execute the file, you get the tracing information:</p>
   <img src="images/tracing_info.jpg" alt="Tracing Info">
   <p>It provides the following information at the top:</p>
   <ul class="list">
<li>Session ID</li>
<li>Status Code</li>
<li>Time of Request</li>
<li>Type of Request</li>
<li>Request and Response Encoding</li>
</ul>
<p>The status code sent from the server, each time the page is requested shows the name and time of error if any. The following table shows the common HTTP status codes:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:45%">Number</th>
<th>Description</th>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<b>Informational (100 - 199)</b>
</td>
</tr>
<tr>
<td>100</td>
<td>Continue</td>
</tr>
<tr>
<td>101</td>
<td>Switching protocols</td>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<b>Successful (200 - 299)</b></td>
</tr>
<tr>
<td>200</td>
<td>OK</td>
</tr>
<tr>
<td>204</td>
<td>No content</td>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<b>Redirection (300 - 399)</b></td>
</tr>
<tr>
<td>301</td>
<td>
Moved permanently
</td>
</tr>
<tr>
<td>305</td>
<td>Use proxy</td>
</tr>
<tr>
<td>307</td>
<td>Temporary redirect</td>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<b>Client Errors (400 - 499)</b>
</td>
</tr>
<tr>
<td>400</td>
<td>Bad request</td>
</tr>
<tr>
<td>402</td>
<td>Payment required</td>
</tr>
<tr>
<td>404</td>
<td>Not found</td>
</tr>
<tr>
<td>408</td>
<td>Request timeout</td>
</tr>
<tr>
<td>417</td>
<td>Expectation failed</td>
</tr>
<tr>
<td colspan="2" style="text-align:center;">
<b>Server Errors (500 - 599)</b>
</td>
</tr>
<tr>
<td>500</td>
<td>Internal server error</td>
</tr>
<tr>
<td>503</td>
<td>Service unavailable</td>
</tr>
<tr>
<td>505</td>
<td>HTTP version not supported</td>
</tr>
</tbody></table>
<p>Under the top level information, there is Trace log, which provides details of page life cycle. It provides elapsed time in seconds since the page was initialized.</p>

<img src="images/tracing_info2.jpg" alt="Tracing Info2">
<p>The next section is control tree, which lists all controls on the page in a hierarchical manner:</p>
<img src="images/tracing_info3.jpg" alt="Tracing Info3">
<p>Last in the Session and Application state summaries, cookies, and headers collections followed by list of all server variables.</p>
<p>The Trace object allows you to add custom information to the trace output. It has two methods to accomplish this: the Write method and the Warn method.</p>
<p>Change the Page_Load event handler to check the Write method:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Trace</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Page Load"</span><span class="pun">);</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">Trace</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Not Post Back, Page Load"</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">string</span><span class="pun">[,]</span><span class="pln"> quotes </span><span class="pun">=</span><span class="pln"> 
      </span><span class="pun">.......................</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Run to observe the effects:</p>
<img src="images/tracing_info4.jpg" alt="Tracing Info4">
<p>To check the Warn method, let us forcibly enter some erroneous code in the selected index changed event handler:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">try</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">9</span><span class="pln"> </span><span class="pun">/</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Exception</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Trace</span><span class="pun">.</span><span class="typ">Warn</span><span class="pun">(</span><span class="str">"UserAction"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"processing 9/a"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Try-Catch is a C# programming construct. The try block holds any code that may or may not produce error and the catch block catches the error. When the program is run, it sends the warning in the trace log.</p>
<img src="images/tracing_info5.jpg" alt="Tracing Info5">
<p>Application level tracing applies to all the pages in the web site. It is implemented by putting the following code lines in the web.config file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;system.web&gt;</span><span class="pln">
   </span><span class="tag">&lt;trace</span><span class="pln"> </span><span class="atn">enabled</span><span class="pun">=</span><span class="atv">"true"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/system.web&gt;</span></pre>
<h4>Error Handling</h4>
<p>Although ASP.NET can detect all runtime errors, still some subtle errors may still be there. Observing the errors by tracing is meant for the developers, not for the users.</p>
<p>Hence, to intercept such occurrence, you can add error handing settings in the web.config file of the application. It is application-wide error handling. For example, you can add the following lines in the web.config file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configuration&gt;</span><span class="pln">
   </span><span class="tag">&lt;system.web&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;customErrors</span><span class="pln"> </span><span class="atn">mode</span><span class="pun">=</span><span class="atv">"RemoteOnly"</span><span class="pln"> </span><span class="atn">defaultRedirect</span><span class="pun">=</span><span class="atv">"GenericErrorPage.htm"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;error</span><span class="pln"> </span><span class="atn">statusCode</span><span class="pun">=</span><span class="atv">"403"</span><span class="pln"> </span><span class="atn">redirect</span><span class="pun">=</span><span class="atv">"NoAccess.htm"</span><span class="pln">	</span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;error</span><span class="pln"> </span><span class="atn">statusCode</span><span class="pun">=</span><span class="atv">"404"</span><span class="pln"> </span><span class="atn">redirect</span><span class="pun">=</span><span class="atv">"FileNotFound.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/customErrors&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/system.web&gt;</span><span class="pln">
</span><span class="tag">&lt;configuration&gt;</span></pre>
<p>The &lt;customErrors&gt; section has the possible attributes:</p>
<ul class="list">
<li><p><b>Mode</b> : It enables or disables custom error pages. It has the three possible values:</p>
<ul class="list">
<li><b>On</b> : displays the custom pages.</li>
<li><b>Off</b> : displays ASP.NET error pages (yellow pages)</li>
<li><b>remoteOnly</b> : It displays custom errors to client, display ASP.NET errors locally.</li>
</ul>
</li>
<li><p><b>defaultRedirect</b> : It contains the URL of the page to be displayed in case of unhandled errors.</p></li>
</ul>
<p>To put different custom error pages for different type of errors, the &lt;error&gt; sub tags are used, where different error pages are specified, based on the status code of the errors.</p>
<p>To implement page level error handling, the Page directive could be modified:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln">
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"errorhandling._Default"</span><span class="pln"> </span><span class="typ">Trace</span><span class="pln"> </span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">ErrorPage</span><span class="pun">=</span><span class="str">"PageError.htm"</span><span class="pln"> %&gt;</span></pre>
   <p>Because ASP.NET Debugging is an important subject in itself, so we would discuss it in the next chapter separately.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="323_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="325_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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