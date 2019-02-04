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
	$sid=304;
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
<p>An event is an action or occurrence such as a mouse click, a key press, mouse movements, or any system-generated notification. A process communicates through events. For example, interrupts are system-generated events. When events occur, the application should be able to respond to it and manage it.</p>
<p>Events in ASP.NET raised at the client machine, and handled at the server machine. For example, a user clicks a button displayed in the browser. A Click event is raised. The browser handles this client-side event by posting it to the server.</p>
<p>The server has a subroutine describing what to do when the event is raised; it is called the event-handler. Therefore, when the event message is transmitted to the server, it checks whether the Click event has an associated event handler. If it has, the event handler is executed.</p>
<h4>Event Arguments</h4>
<p>ASP.NET event handlers generally take two parameters and return void. The first parameter represents the object raising the event and the second parameter is event argument.</p>
<p>The general syntax of an event is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">private</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">EventName</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">);</span></pre>
<h4>Application and Session Events</h4>
<p>The most important application events are:</p>
<ul class="list">
<li><p><b>Application_Start</b> - It is raised when the application/website is started.</p></li>
<li><p><b>Application_End</b> - It is raised when the application/website is stopped.</p></li>
</ul>
<p>Similarly, the most used Session events are:</p>
<ul class="list">
<li><p><b>Session_Start</b> - It is raised when a user first requests a page from the application.</p></li>
<li><p><b>Session_End</b> - It is raised when the session ends.</p></li>
</ul>
<h4>Page and Control Events</h4>
<p>Common page and control events are:</p>
<ul class="list">
<li><p><b>DataBinding</b> - It is raised when a control binds to a data source.</p></li>
<li><p><b>Disposed</b> - It is raised when the page or the control is released.</p></li>
<li><p><b>Error</b> - It is a page event, occurs when an unhandled exception is thrown.</p></li>
<li><p><b>Init</b> - It is raised when the page or the control is initialized.</p></li>
<li><p><b>Load</b> - It is raised when the page or a control is loaded.</p></li>
<li><p><b>PreRender</b> - It is raised when the page or the control is to be rendered.</p></li>
<li><p><b>Unload</b> - It is raised when the page or control is unloaded from memory.</p></li>
</ul>
<h4>Event Handling Using Controls</h4>
<p>All ASP.NET controls are implemented as classes, and they have events which are fired when a user performs a certain action on them. For example, when a user clicks a button the 'Click' event is generated. For handling events, there are in-built attributes and event handlers. Event handler is coded to respond to an event, and take appropriate action on it.</p>
<p>By default, Visual Studio creates an event handler by including a Handles clause on the Sub procedure. This clause names the control and event that the procedure handles.</p>
<p>The ASP tag for a button control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnCancel"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Cancel"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>The event handler for the Click event:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Protected</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> btnCancel_Click</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> 

   </span><span class="typ">Handles</span><span class="pln"> btnCancel</span><span class="pun">.</span><span class="typ">Click</span><span class="pln">
   
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<p>An event can also be coded without Handles clause. Then, the handler must be named according to the appropriate event attribute of the control.</p>
<p>The ASP tag for a button control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnCancel"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Cancel"</span><span class="pln"> </span><span class="atn">Onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnCancel_Click</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>The event handler for the Click event:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Protected</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> btnCancel_Click</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln">

</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<p>The common control events are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Event</th>
<th style="width:20%">Attribute</th>
<th>Controls</th>
</tr>
<tr>
<td>Click</td>
<td>OnClick</td>
<td>Button, image button, link button, image map</td>
</tr>
<tr>
<td>Command</td>
<td>OnCommand</td>
<td>Button, image button, link button</td>
</tr>
<tr>
<td>TextChanged</td>
<td>OnTextChanged</td>
<td>Text box</td>
</tr>
<tr>
<td>SelectedIndexChanged</td>
<td>OnSelectedIndexChanged</td>
<td>Drop-down list, list box, radio button list, check box list.</td>
</tr>
<tr>
<td>CheckedChanged</td>
<td>OnCheckedChanged</td>
<td>Check box, radio button</td>
</tr>
</tbody></table>
<p>Some events cause the form to be posted back to the server immediately, these are called the postback events. For example, the click event such as, Button.Click.</p>
<p>Some events are not posted back to the server immediately, these are called non-postback events.</p>
<p>For example, the change events or selection events such as TextBox.TextChanged or CheckBox.CheckedChanged. The nonpostback events could be made to post back immediately by setting their AutoPostBack property to true.</p>
<h4>Default Events</h4>
<p>The default event for the Page object is Load event. Similarly, every control has a default event. For example, default event for the button control is the Click event.</p>
<p>The default event handler could be created in Visual Studio, just by double clicking the control in design view. The following table shows some of the default events for common controls:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:50%">Control</th>
<th style="width:50%">Default Event</th>
</tr>
<tr>
<td>AdRotator</td>
<td>AdCreated</td>
</tr>
<tr>
<td>BulletedList</td>
<td>Click</td>
</tr>
<tr>
<td>Button</td>
<td>Click</td>
</tr>
<tr>
<td>Calender</td>
<td>SelectionChanged</td>
</tr>
<tr>
<td>CheckBox</td>
<td>CheckedChanged</td>
</tr>
<tr>
<td>CheckBoxList</td>
<td>SelectedIndexChanged</td>
</tr>
<tr>
<td>DataGrid</td>
<td>SelectedIndexChanged</td>
</tr>
<tr>
<td>DataList</td>
<td>SelectedIndexChanged</td>
</tr>
<tr>
<td>DropDownList</td>
<td>SelectedIndexChanged</td>
</tr>
<tr>
<td>HyperLink</td>
<td>Click</td>
</tr>
<tr>
<td>ImageButton</td>
<td>Click</td>
</tr>
<tr>
<td>ImageMap</td>
<td>Click</td>
</tr>
<tr>
<td>LinkButton</td>
<td>Click</td>
</tr>
<tr>
<td>ListBox</td>
<td>SelectedIndexChanged</td>
</tr>
<tr>
<td>Menu</td>
<td>MenuItemClick</td>
</tr>
<tr>
<td>RadioButton</td>
<td>CheckedChanged</td>
</tr>
<tr>
<td>RadioButtonList</td>
<td>SelectedIndexChanged</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>This example includes a simple page with a label control and a button control on it. As the page events such as Page_Load, Page_Init, Page_PreRender etc. take place, it sends a message, which is displayed by the label control. When the button is clicked, the Button_Click event is raised and that also sends a message to be displayed on the label.</p>
<p>Create a new website and drag a label control and a button control on it from the control tool box. Using the properties window, set the IDs of the controls as .lblmessage. and .btnclick. respectively. Set the Text property of the Button control as 'Click'.</p>
<p>The markup file (.aspx):</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> 
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"eventdemo._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Untitled Page</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblmessage"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnclick"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Click"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnclick_Click</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Double click on the design view to move to the code behind file. The Page_Load event is automatically created without any code in it. Write down the following self-explanatory code lines:</p>
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

</span><span class="kwd">namespace</span><span class="pln"> eventdemo </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Page load event handled. &lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Page</span><span class="pun">.</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Page post back event handled.&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Init</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Page initialization event handled.&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_PreRender</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Page prerender event handled. &lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnclick_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Button click event handled. &lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Execute the page. The label shows page load, page initialization and, the page pre-render events. Click the button to see effect:</p>
<img src="images/asp.net_event_example.jpg" alt="ASP.NET Event Example">





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="303_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="305_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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