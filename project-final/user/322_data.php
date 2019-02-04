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
	$sid=322;
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

<p>ASP.NET allows the users to create controls. These user defined controls are categorized into:</p>
<ul class="list">
<li>User controls</li>
<li>Custom controls</li>
</ul>
<h4>User Controls</h4>
<p>User controls behaves like miniature ASP.NET pages or web forms, which could be used by many other pages. These are derived from the System.Web.UI.UserControl class. These controls have the following characteristics:</p>
<ul class="list">
<li>They have an .ascx extension.</li>
<li>They may not contain any &lt;html&gt;, &lt;body&gt;, or &lt;form&gt; tags.</li>
<li>They have a Control directive instead of a Page directive.</li>
</ul>
<p>To understand the concept, let us create a simple user control, which will work as footer for the web pages. To create and use the user control, take the following steps:</p>
<ul class="list">
<li>Create a new web application.</li>
<li>Right click on the project folder on the Solution Explorer and choose Add New Item.
<img src="images/add_new_item.jpg" alt="Add New Item">
</li>
<li><p>Select Web User Control from the Add New Item dialog box and name it footer.ascx. Initially, the footer.ascx contains only a Control directive.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Control</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"footer.ascx.cs"</span><span class="pln"> 
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"customcontroldemo.footer"</span><span class="pln"> %&gt;</span></pre>
</li>
<li><p>Add the following code to the file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;table&gt;</span><span class="pln">
   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"center"</span><span class="tag">&gt;</span><span class="pln"> Copyright ©2010 TutorialPoints Ltd.</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"center"</span><span class="tag">&gt;</span><span class="pln"> Location: Hyderabad, A.P </span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span></pre>
</li>
</ul>
<p>To add the user control to your web page, you must add the Register directive and an instance of the user control to the page. The following code shows the content file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"customcontroldemo._Default"</span><span class="pln"> %&gt;
   
</span><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Register</span><span class="pln"> </span><span class="typ">Src</span><span class="pun">=</span><span class="str">"~/footer.ascx"</span><span class="pln"> </span><span class="typ">TagName</span><span class="pun">=</span><span class="str">"footer"</span><span class="pln"> </span><span class="typ">TagPrefix</span><span class="pun">=</span><span class="str">"Tfooter"</span><span class="pln"> %&gt;

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
         
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Label1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Welcome to ASP.Net Tutorials "</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">  </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Button1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Button1_Click</span><span class="atv">"</span><span class="pln">  </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Copyright Info"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;Tfooter:footer</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"footer1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>When executed, the page shows the footer and this control could be used in all the pages of your website.</p>
<img src="images/custom_result.jpg" alt="Custom Result">
<p>Observe the following:</p>
<p><b>(1)</b> The Register directive specifies a tag name as well as tag prefix for the control.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Register</span><span class="pln"> </span><span class="typ">Src</span><span class="pun">=</span><span class="str">"~/footer.ascx"</span><span class="pln"> </span><span class="typ">TagName</span><span class="pun">=</span><span class="str">"footer"</span><span class="pln"> </span><span class="typ">TagPrefix</span><span class="pun">=</span><span class="str">"Tfooter"</span><span class="pln"> %&gt;</span></pre>
<p><b>(2)</b> The following tag name and prefix should be used while adding the user control on the page:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;Tfooter:footer</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"footer1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<h4>Custom Controls</h4>
<p>Custom controls are deployed as individual assemblies. They are compiled into a Dynamic Link Library (DLL) and used as any other ASP.NET server control. They could be created in either of the following way:</p>
<ul class="list">
<li>By deriving a custom control from an existing control</li>
<li>By composing a new custom control combing two or more existing controls.</li>
<li>By deriving from the base control class.</li>
</ul>
<p>To understand the concept, let us create a custom control, which will simply render a text message on the browser. To create this control, take the following steps:</p>
<p>Create a new website. Right click the solution (not the project) at the top of the tree in the Solution Explorer.</p>
<img src="images/solution_explorer.jpg" alt="Solution Explorer">
<p>In the New Project dialog box, select ASP.NET Server Control from the project templates.</p>
<img src="images/project_templates.jpg" alt="project templates">
<p>The above step adds a new project and creates a complete custom control to the solution, called ServerControl1. In this example, let us name the project CustomControls.  To use this control, this must be added as a reference to the web site before registering it on a page. To add a reference to the existing project, right click on the project (not the solution), and click Add Reference.</p>
<p>Select the CustomControls project from the Projects tab of the Add Reference dialog box. The Solution Explorer should show the reference.</p>
<img src="/asp.net/images/custom_controls.jpg" alt="Custom Controls">
<p>To use the control on a page, add the Register directive just below the @Page directive:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Register</span><span class="pln"> </span><span class="typ">Assembly</span><span class="pun">=</span><span class="str">"CustomControls"</span><span class="pln">  </span><span class="typ">Namespace</span><span class="pun">=</span><span class="str">"CustomControls"</span><span class="pln">  </span><span class="typ">TagPrefix</span><span class="pun">=</span><span class="str">"ccs"</span><span class="pln"> %&gt;</span></pre>
<p>Further, you can use the control, similar to any other controls.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ccs:ServerControl1</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"I am a Custom Server Control"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>When executed, the Text property of the control is rendered on the browser as shown:</p>
<img src="images/custom_server_controls.jpg" alt="Custom Server Controls">
<h4>Working with Custom Controls</h4>
<p>In the previous example, the value for the Text property of the custom control was set. ASP.NET added this property by default, when the control was created. The following code behind file of the control reveals this.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Collections</span><span class="pun">.</span><span class="typ">Generic</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">ComponentModel</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> </span><span class="typ">CustomControls</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">DefaultProperty</span><span class="pun">(</span><span class="str">"Text"</span><span class="pun">)]</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">ToolboxData</span><span class="pun">(</span><span class="str">"&lt;{0}:ServerControl1 runat=server&gt;&lt;/{0}:ServerControl1 &gt;"</span><span class="pun">)]</span><span class="pln">
   
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ServerControl1</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">WebControl</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Bindable</span><span class="pun">(</span><span class="kwd">true</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Category</span><span class="pun">(</span><span class="str">"Appearance"</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">DefaultValue</span><span class="pun">(</span><span class="str">""</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Localizable</span><span class="pun">(</span><span class="kwd">true</span><span class="pun">)]</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">Text</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">get</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">String</span><span class="pln"> s </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">)</span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"Text"</span><span class="pun">];</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">((</span><span class="pln">s </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="str">"["</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">ID </span><span class="pun">+</span><span class="pln"> </span><span class="str">"]"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> s</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">set</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"Text"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">override</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">RenderContents</span><span class="pun">(</span><span class="typ">HtmlTextWriter</span><span class="pln"> output</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="typ">Text</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The above code is automatically generated for a custom control. Events and methods could be added to the custom control class.</p>
<h5>Example</h5>
<p>Let us expand the previous custom control named SeverControl1. Let us give it a method named checkpalindrome, which gives it a power to check for palindromes.</p>
<p>Palindromes are words/literals that spell the same when reversed. For example, Malayalam, madam, saras, etc.</p>
<p>Extend the code for the custom control, which should look as:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Collections</span><span class="pun">.</span><span class="typ">Generic</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">ComponentModel</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> </span><span class="typ">CustomControls</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">DefaultProperty</span><span class="pun">(</span><span class="str">"Text"</span><span class="pun">)]</span><span class="pln">
   </span><span class="pun">[</span><span class="typ">ToolboxData</span><span class="pun">(</span><span class="str">"&lt;{0}:ServerControl1 runat=server&gt;&lt;/{0}:ServerControl1  &gt;"</span><span class="pun">)]</span><span class="pln">
   
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ServerControl1</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">WebControl</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Bindable</span><span class="pun">(</span><span class="kwd">true</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Category</span><span class="pun">(</span><span class="str">"Appearance"</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">DefaultValue</span><span class="pun">(</span><span class="str">""</span><span class="pun">)]</span><span class="pln">
      </span><span class="pun">[</span><span class="typ">Localizable</span><span class="pun">(</span><span class="kwd">true</span><span class="pun">)]</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">Text</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">get</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">String</span><span class="pln"> s </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">)</span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"Text"</span><span class="pun">];</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">((</span><span class="pln">s </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="str">"["</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">ID </span><span class="pun">+</span><span class="pln"> </span><span class="str">"]"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> s</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">set</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"Text"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">override</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">RenderContents</span><span class="pun">(</span><span class="typ">HtmlTextWriter</span><span class="pln"> output</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">this</span><span class="pun">.</span><span class="pln">checkpanlindrome</span><span class="pun">())</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"This is a palindrome: &lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;FONT size=5 color=Blue&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;B&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="typ">Text</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;/B&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;/FONT&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">else</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"This is not a palindrome: &lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;FONT size=5 color=red&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;B&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="typ">Text</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;/B&gt;"</span><span class="pun">);</span><span class="pln">
            output</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;/FONT&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">bool</span><span class="pln"> checkpanlindrome</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">String</span><span class="pln"> str </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
            </span><span class="typ">String</span><span class="pln"> strtoupper </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Text</span><span class="pun">.</span><span class="typ">ToUpper</span><span class="pun">();</span><span class="pln">
            </span><span class="kwd">char</span><span class="pun">[]</span><span class="pln"> rev </span><span class="pun">=</span><span class="pln"> strtoupper</span><span class="pun">.</span><span class="typ">ToCharArray</span><span class="pun">();</span><span class="pln">
            </span><span class="typ">Array</span><span class="pun">.</span><span class="typ">Reverse</span><span class="pun">(</span><span class="pln">rev</span><span class="pun">);</span><span class="pln">
            </span><span class="typ">String</span><span class="pln"> strrev </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">String</span><span class="pun">(</span><span class="pln">rev</span><span class="pun">);</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">strtoupper </span><span class="pun">==</span><span class="pln"> strrev</span><span class="pun">)</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            </span><span class="kwd">else</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">else</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When you change the code for the control, you must build the solution by clicking Build --&gt; Build Solution, so that the changes are reflected in your project. Add a text box and a button control to the page, so that the user can provide a text, it is checked for palindrome, when the button is clicked.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      Enter a word:
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"TextBox1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">198px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Button1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server onclick="</span><span class="atn">Button1_Click</span><span class="atv">" Text="</span><span class="atn">Check</span><span class="pln"> </span><span class="atn">Palindrome</span><span class="atv">" style="</span><span class="atn">width:132px</span><span class="atv">" /&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;ccs:ServerControl1</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ServerControl11"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>The Click event handler for the button simply copies the text from the text box to the text property of the custom control.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">ServerControl11</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">TextBox1</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When executed, the control successfully checks palindromes.</p>
<img src="images/checks_palindromes.jpg" alt="checks palindromes">
<p>Observe the following:</p>
<p><b>(1)</b> When you add a reference to the custom control, it is added to the toolbox and you can directly use it from the toolbox similar to any other control. </p>
<img src="images/custom_control_reference.jpg" alt="custom control reference">
<p><b>(2)</b> The RenderContents method of the custom control class is overridden here, as you can add your own methods and events.</p>
<p><b>(3)</b> The RenderContents method takes a parameter of HtmlTextWriter type, which is responsible for rendering on the browser.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="321_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="323_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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