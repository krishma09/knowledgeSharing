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
	$sid=307;
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
<p>The HTML server controls are basically the standard HTML controls enhanced to enable server side processing. The HTML controls such as the header tags, anchor tags, and input elements are not processed by the server but are sent to the browser for display.</p>
<p>They are specifically converted to a server control by adding the attribute runat="server" and adding an id attribute to make them available for server-side processing.</p>
<p>For example, consider the HTML input control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"40"</span><span class="tag">&gt;</span></pre>
<p>It could be converted to a server control, by adding the runat and id attribute:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"testtext"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"40"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span></pre>
<h4>Advantages of using HTML Server Controls</h4>
<p>Although ASP.NET server controls can perform every job accomplished by the HTML server controls, the later controls are useful in the following cases:</p>
<ul class="list">
<li>Using static tables for layout purposes.</li>
<li>Converting a HTML page to run under ASP.NET</li>
</ul>
<p>The following table describes the HTML server controls:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Control Name</th>
<th>HTML tag</th>
</tr>
<tr>
<td>HtmlHead </td>
<td>&lt;head&gt;element</td>
</tr>
<tr>
<td>HtmlInputButton</td>
<td>&lt;input type=button|submit|reset&gt;</td>
</tr>
<tr>
<td>HtmlInputCheckbox</td>
<td>&lt;input type=checkbox&gt;</td>
</tr>
<tr>
<td>HtmlInputFile</td>
<td>&lt;input type = file&gt;</td>
</tr>
<tr>
<td>HtmlInputHidden</td>
<td>&lt;input type = hidden&gt;</td>
</tr>
<tr>
<td>HtmlInputImage</td>
<td>&lt;input type = image&gt;</td>
</tr>
<tr>
<td>HtmlInputPassword</td>
<td>&lt;input type = password&gt;</td>
</tr>
<tr>
<td>HtmlInputRadioButton</td>
<td>&lt;input type = radio&gt;</td>
</tr>
<tr>
<td>HtmlInputReset</td>
<td>&lt;input type = reset&gt;</td>
</tr>
<tr>
<td>HtmlText</td>
<td>&lt;input type = text|password&gt;</td>
</tr>
<tr>
<td>HtmlImage</td>
<td>&lt;img&gt; element</td>
</tr>
<tr>
<td>HtmlLink</td>
<td>&lt;link&gt; element</td>
</tr>
<tr>
<td>HtmlAnchor</td>
<td>&lt;a&gt; element</td>
</tr>
<tr>
<td>HtmlButton</td>
<td>&lt;button&gt; element</td>
</tr>
<tr>
<td>HtmlButton</td>
<td>&lt;button&gt; element</td>
</tr>
<tr>
<td>HtmlForm</td>
<td>&lt;form&gt; element</td>
</tr>
<tr>
<td>HtmlTable</td>
<td>&lt;table&gt; element</td>
</tr>
<tr>
<td>HtmlTableCell</td>
<td>&lt;td&gt; and &lt;th&gt;</td>
</tr>
<tr>

<td>HtmlTableRow</td>
<td>&lt;tr&gt; element</td>
</tr>
<tr>
<td>HtmlTitle</td>
<td>&lt;title&gt; element</td>
</tr>
<tr>
<td>HtmlSelect</td>
<td>&lt;select&amp;t; element</td>
</tr>
<tr>
<td>HtmlGenericControl</td>
<td>All HTML controls not listed</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>The following example uses a basic HTML table for layout. It uses some boxes for getting input from the users such as name, address, city, state etc. It also has a button control, which is clicked to get the user data displayed in the last row of the table.</p>
<img src="images/asp.net_server_controls.jpg" alt="ASP.NET Server Controls">
<p>The code for the content page shows the use of the HTML table element for layout.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"htmlserver._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Untitled Page</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">style1
         </span><span class="pun">{</span><span class="pln">  
            width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">156px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">style2
         </span><span class="pun">{</span><span class="pln">
            width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">332px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">54</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">Name:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtname"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">230px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">Street</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtstreet"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">230px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">City</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtcity"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">230px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">State</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtstate"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">230px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"displayrow"</span><span class="pln"> </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;/table&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Button1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Button1_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Click"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind the button control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">string</span><span class="pln"> str </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtname</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtstreet</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtcity</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtstate</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   displayrow</span><span class="pun">.</span><span class="typ">InnerHtml</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> str</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">string</span><span class="pln"> str </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtname</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtstreet</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtcity</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   str </span><span class="pun">+=</span><span class="pln"> txtstate</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   displayrow</span><span class="pun">.</span><span class="typ">InnerHtml</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> str</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Observe the following:</p>
<ul class="list">
<li><p>The standard HTML tags have been used for the page layout.</p></li>
<li><p>The last row of the HTML table is used for data display. It needed server side processing, so an ID attribute and the runat attribute has been added to it.</p></li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="306_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="308_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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