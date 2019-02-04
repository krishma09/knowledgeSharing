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
	$sid=309;
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
<p>ASP.NET directives are instructions to specify optional settings, such as registering a custom control and page language. These settings describe how the web forms (.aspx) or user controls (.ascx) pages are processed by the .Net framework.</p>
<p>The syntax for declaring a directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln">  directive_name attribute</span><span class="pun">=</span><span class="pln">value  </span><span class="pun">[</span><span class="pln">attribute</span><span class="pun">=</span><span class="pln">value</span><span class="pun">]</span><span class="pln">  %&gt;</span></pre>
<p>In this section, we will just introduce the ASP.NET directives and we will use most of these directives throughout the tutorials.</p>
<h4>The Application Directive</h4>
<p>The Application directive defines application-specific attributes. It is provided at the top of the global.aspx file.</p>
<p>The basic syntax of Application directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Application</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> %&gt;</span></pre>
<p>The attributes of the Application directive are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Attributes</th>
<th>Description</th>
</tr>
<tr>
<td>Inherits</td>
<td>The name of the class from which to inherit.</td>
</tr>
<tr>
<td>Description</td>
<td>The text description of the application. Parsers and compilers ignore this.</td>
</tr>
<tr>
<td>Language</td>
<td>The language used in code blocks.</td>
</tr>
</tbody></table>
<h4>The Assembly Directive</h4>
<p>The Assembly directive links an assembly to the page or the application at parse time. This could appear either in the global.asax file for application-wide linking, in the page file, a user control file for linking to a page or user control.</p>
<p>The basic syntax of Assembly directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Assembly</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="str">"myassembly"</span><span class="pln"> %&gt;</span></pre>
<p>The attributes of the Assembly  directive are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Attributes</th>
<th>Description</th>
</tr>
<tr>
<td>Name</td>
<td>The name of the assembly to be linked.</td>
</tr>
<tr>
<td>Src</td>
<td>The path to the source file to be linked and compiled dynamically.</td>
</tr>
</tbody></table>
<h4>The Control Directive</h4>
<p>The control directive is used with the user controls and appears in the user control (.ascx) files.</p>
<p>The basic syntax of Control directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Control</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln">  </span><span class="typ">EnableViewState</span><span class="pun">=</span><span class="str">"false"</span><span class="pln"> %&gt;</span></pre>
<p>The attributes of the Control directive are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Attributes</th>
<th>Description</th>
</tr>
<tr>
<td>AutoEventWireup</td>
<td>The Boolean value that enables or disables automatic association of events to handlers.</td>
</tr>
<tr>
<td>ClassName</td>
<td>The file name for the control.</td>
</tr>
<tr>
<td>Debug</td>
<td>The Boolean value that enables or disables compiling with debug symbols.</td>
</tr>
<tr>
<td>Description</td>
<td>The text description of the control page, ignored by compiler.</td>
</tr>
<tr>
<td>EnableViewState</td>
<td>The Boolean value that indicates whether view state is maintained across page requests.</td>
</tr>
<tr>
<td>Explicit</td>
<td>For VB language, tells the compiler to use option explicit mode.</td>
</tr>
<tr>
<td>Inherits</td>
<td>The class from which the control page inherits.</td>
</tr>
<tr>
<td>Language</td>
<td>The language for code and script.</td>
</tr>
<tr>
<td>Src</td>
<td>The filename for the code-behind class.</td>
</tr>
<tr>
<td>Strict</td>
<td>For VB language, tells the compiler to use the option strict mode.</td>
</tr>
</tbody></table>
<h4>The Implements Directive</h4>
<p>The Implement directive indicates that the web page, master page or user control page must implement the specified .Net framework interface.</p>
<p>The basic syntax for implements directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Implements</span><span class="pln">  </span><span class="typ">Interface</span><span class="pun">=</span><span class="str">"interface_name"</span><span class="pln"> %&gt;</span></pre>
<h4>The Import Directive</h4>
<p>The Import directive imports a namespace into a web page, user control page of application. If the Import directive is specified in the global.asax file, then it is applied to the entire application. If it is in a page of user control page, then it is applied to that page or control.</p>
<p>The basic syntax for import directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pun">=</span><span class="str">"System.Drawing"</span><span class="pln"> %&gt;</span></pre>
<h4>The Master Directive</h4>
<p>The Master directive specifies a page file as being the mater page.</p>
<p>The basic syntax of sample MasterPage directive is:</p><pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">MasterPage</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln">  </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln">  </span><span class="typ">CodeFile</span><span class="pun">=</span><span class="str">"SiteMater.master.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"SiteMaster"</span><span class="pln">  %&gt;</span></pre>	

<h4>The MasterType Directive</h4>
<p>The MasterType directive assigns a class name to the Master property of a page, to make it strongly typed.</p>
<p>The basic syntax of MasterType directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">MasterType</span><span class="pln"> attribute</span><span class="pun">=</span><span class="str">"value"</span><span class="pun">[</span><span class="pln">attribute</span><span class="pun">=</span><span class="str">"value"</span><span class="pln"> </span><span class="pun">...]</span><span class="pln">  %&gt;</span></pre>
<h4>The OutputCache Directive</h4>
<p>The OutputCache directive controls the output caching policies of a web page or a user control.</p>
<p>The basic syntax of OutputCache directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">OutputCache</span><span class="pln"> </span><span class="typ">Duration</span><span class="pun">=</span><span class="str">"15"</span><span class="pln"> </span><span class="typ">VaryByParam</span><span class="pun">=</span><span class="str">"None"</span><span class="pln">  %&gt;</span></pre>
<h4>The Page Directive</h4>
<p>The Page directive defines the attributes specific to the page file for the page parser and the compiler.</p>
<p>The basic syntax of Page directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln">  </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeFile</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln">  </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"_Default"</span><span class="pln">  </span><span class="typ">Trace</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> %&gt;</span></pre>
<p>The attributes of the Page directive are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Attributes</th>
<th>Description</th>
</tr>
<tr>
<td>AutoEventWireup</td>
<td>The Boolean value that enables or disables page events that are being automatically bound to methods; for example, Page_Load.</td>
</tr>
<tr>
<td>Buffer</td>
<td>The Boolean value that enables or disables HTTP response buffering.</td>
</tr>
<tr>
<td>ClassName</td>
<td>The class name for the page.</td>
</tr>
<tr>
<td>ClientTarget</td>
<td>The browser for which the server controls should render content.</td>
</tr>
<tr>
<td>CodeFile</td>
<td>The name of the code behind file.</td>
</tr>
<tr>
<td>Debug</td>
<td>The Boolean value that enables or disables compilation with debug symbols.</td>
</tr>
<tr>
<td>Description</td>
<td>The text description of the page, ignored by the parser.</td>
</tr>
<tr>
<td>EnableSessionState</td>
<td>It enables, disables, or makes session state read-only.</td>
</tr>
<tr>
<td>EnableViewState</td>
<td>The Boolean value that enables or disables view state across page requests.</td>
</tr>
<tr>
<td>ErrorPage</td>
<td>URL for redirection if an unhandled page exception occurs.</td>
</tr>
<tr>
<td>Inherits</td>
<td>The name of the code behind or other class.</td>
</tr>
<tr>
<td>Language</td>
<td>The programming language for code.</td>
</tr>
<tr>
<td>Src</td>
<td>The file name of the code behind class.</td>
</tr>
<tr>
<td>Trace</td>
<td>It enables or disables tracing.</td>
</tr>
<tr>
<td>TraceMode</td>
<td>It indicates how trace messages are displayed, and sorted by time or category.</td>
</tr>
<tr>
<td>Transaction</td>
<td>It indicates if transactions are supported.</td>
</tr>
<tr>
<td>ValidateRequest </td>
<td>The Boolean value that indicates whether all input data is validated against a hardcoded list of values.</td>
</tr>
</tbody></table>
<h4>The PreviousPageType Directive</h4>
<p>The PreviousPageType directive assigns a class to a page, so that the page is strongly typed.</p>
<p>The basic syntax for a sample PreviousPagetype directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">PreviousPageType</span><span class="pln"> attribute</span><span class="pun">=</span><span class="str">"value"</span><span class="pun">[</span><span class="pln">attribute</span><span class="pun">=</span><span class="str">"value"</span><span class="pln"> </span><span class="pun">...]</span><span class="pln">   %&gt;</span></pre>
<h4>The Reference Directive</h4>
<p>The Reference directive indicates that another page or user control should be compiled and linked to the current page.</p>
<p>The basic syntax of Reference directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Reference</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="pun">=</span><span class="str">"somepage.aspx"</span><span class="pln"> %&gt;</span></pre>
<h4>The Register Directive</h4>
<p>The Register derivative is used for registering the custom server controls and user controls.</p>
<p>The basic syntax of Register  directive is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Register</span><span class="pln"> </span><span class="typ">Src</span><span class="pun">=</span><span class="str">"~/footer.ascx"</span><span class="pln"> </span><span class="typ">TagName</span><span class="pun">=</span><span class="str">"footer"</span><span class="pln"> </span><span class="typ">TagPrefix</span><span class="pun">=</span><span class="str">"Tfooter"</span><span class="pln"> %&gt;</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="308_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="310_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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