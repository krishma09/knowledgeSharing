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
	$sid=306;
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
<p>Controls are small building blocks of the graphical user interface, which include text boxes, buttons, check boxes, list boxes, labels, and numerous other tools. Using these tools, the users can enter data, make selections and indicate their preferences.</p>
<p>Controls are also used for structural jobs, like validation, data access, security, creating master pages, and data manipulation.</p>
<p>ASP.NET uses five types of web controls, which are:</p>
<ul class="list">
<li>HTML controls</li>
<li>HTML Server controls</li>
<li>ASP.NET Server controls</li>
<li>ASP.NET Ajax Server controls</li>
<li>User controls and custom controls</li>
</ul>
<p>ASP.NET server controls are the primary controls used in ASP.NET. These controls can be grouped into the following categories:</p>
<ul class="list">
<li><p><b>Validation controls</b> - These are used to validate user input and they work by running client-side script.</p></li>
<li><p><b>Data source controls</b> - These controls provides  data binding to different data sources.</p></li>
<li><p><b>Data view controls</b> - These are various lists and tables, which can bind to data from data sources for displaying.</p></li>
<li><p><b>Personalization controls</b> - These are used for personalization of a page according to the user preferences, based on user information.</p></li>
<li><p><b>Login and security controls</b> - These controls provide user authentication.</p></li>
<li><p><b>Master pages</b> - These controls provide consistent layout and interface throughout the application.</p></li>
<li><p><b>Navigation controls</b> - These controls help in navigation. For example, menus, tree view etc.</p></li>
<li><p><b>Rich controls</b> - These controls implement special features. For example, AdRotator, FileUpload, and Calendar control.</p></li>
</ul>
<p>The syntax for using server controls is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:controlType</span><span class="pln">  </span><span class="atn">ID</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"ControlID"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Property1</span><span class="pun">=</span><span class="atv">value1</span><span class="pln">  [</span><span class="atn">Property2</span><span class="pun">=</span><span class="atv">value2]</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>In addition, visual studio has the following features, to help produce in error-free coding:</p>
<ul class="list">
<li>Dragging and dropping of controls in design view</li>
<li>IntelliSense feature that displays and auto-completes the properties</li>
<li>The properties window to set the property values directly</li>
</ul>
<h4>Properties of the Server Controls</h4>
<p>ASP.NET server controls with a visual aspect are derived from the WebControl class and inherit all the properties, events, and methods of this class.</p>
<p>The WebControl class itself and some other server controls that are not visually rendered are derived from the System.Web.UI.Control class. For example, PlaceHolder control or XML control.</p>
<p>ASP.Net server controls inherit all properties, events, and methods of the WebControl and System.Web.UI.Control class.</p>
<p>The following table shows the inherited properties, common to all server controls:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>AccessKey</td>
<td>Pressing this key with the Alt key moves focus to the control.</td>
</tr>
<tr>
<td>Attributes</td>
<td>It is the collection of arbitrary attributes (for rendering only) that do not correspond to properties on the control.</td>
</tr>
<tr>
<td>BackColor</td>
<td>Background color.</td>
</tr>
<tr>
<td>BindingContainer</td>
<td>The control that contains this control's data binding.</td>
</tr>
<tr>
<td>BorderColor</td>
<td>Border color.</td>
</tr>
<tr>
<td>BorderStyle</td>
<td>Border style.</td>
</tr>
<tr>
<td>BorderWidth</td>
<td>Border width.</td>
</tr>
<tr>
<td>CausesValidation</td>
<td>Indicates if it causes validation.</td>
</tr>
<tr>
<td>ChildControlCreated</td>
<td>It indicates whether the server control's child controls have been created.</td>
</tr>
<tr>
<td>ClientID</td>
<td>Control ID for HTML markup.</td>
</tr>
<tr>
<td>Context</td>
<td>The HttpContext object associated with the server control.</td>
</tr>
<tr>
<td>Controls</td>
<td>Collection of all controls contained within the control.</td>
</tr>
<tr>
<td>ControlStyle</td>
<td>The style of the Web server control.</td>
</tr>
<tr>
<td>CssClass</td>
<td>CSS class</td>
</tr>
<tr>
<td>DataItemContainer</td>
<td>Gets a reference to the naming container if the naming container implements IDataItemContainer.</td>
</tr>
<tr>
<td>DataKeysContainer</td>
<td>Gets a reference to the naming container if the naming container implements IDataKeysControl.</td>
</tr>
<tr>
<td>DesignMode</td>
<td>It indicates whether the control is being used on a design surface.</td>
</tr>
<tr>
<td>DisabledCssClass</td>
<td>Gets or sets the CSS class to apply to the rendered HTML element when the control is disabled.</td>
</tr>
<tr>
<td>Enabled</td>
<td>Indicates whether the control is grayed out.</td>
</tr>
<tr>
<td>EnableTheming</td>
<td>Indicates whether theming applies to the control.</td>
</tr>
<tr>
<td>EnableViewState</td>
<td>Indicates whether the view state of the control is maintained.</td>
</tr>
<tr>
<td>Events</td>
<td>Gets a list of event handler delegates for the control.</td>
</tr>
<tr>
<td>Font</td>
<td>Font.</td>
</tr>
<tr>
<td>Forecolor</td>
<td>Foreground color.</td>
</tr>
<tr>
<td>HasAttributes</td>
<td>Indicates whether the control has attributes set.</td>
</tr>
<tr>
<td>HasChildViewState</td>
<td>Indicates whether the current server control's child controls have any saved view-state settings.</td>
</tr>
<tr>
<td>Height</td>
<td>Height in pixels or %.</td>
</tr>
<tr>
<td>ID</td>
<td>Identifier for the control.</td>
</tr>
<tr>
<td>IsChildControlStateCleared</td>
<td>Indicates whether controls contained within this control have control state.</td>
</tr>
<tr>
<td>IsEnabled</td>
<td>Gets a value indicating whether the control is enabled.</td>
</tr>
<tr>
<td>IsTrackingViewState</td>
<td>It indicates whether the server control is saving changes to its view state.</td>
</tr>
<tr>
<td>IsViewStateEnabled</td>
<td>It indicates whether view state is enabled for this control.</td>
</tr>
<tr>
<td>LoadViewStateById</td>
<td>It indicates whether the control participates in loading its view state by ID instead of index.</td>
</tr>
<tr>
<td>Page</td>
<td>Page containing the control.</td>
</tr>
<tr>
<td>Parent</td>
<td>Parent control.</td>
</tr>
<tr>
<td>RenderingCompatibility</td>
<td>It specifies the ASP.NET version that the rendered HTML will be compatible with.</td>
</tr>
<tr>
<td>Site</td>
<td>The container that hosts the current control when rendered on a design surface.</td>
</tr>
<tr>
<td>SkinID</td>
<td>Gets or sets the skin to apply to the control.</td>
</tr>
<tr>
<td>Style</td>
<td>Gets a collection of text attributes that will be rendered as a style attribute on the outer tag of the Web server control.</td>
</tr>
<tr>
<td>TabIndex</td>
<td>Gets or sets the tab index of the Web server control.</td>
</tr>
<tr>
<td>TagKey</td>
<td>Gets the HtmlTextWriterTag value that corresponds to this Web server control. </td>
</tr>
<tr>
<td>TagName</td>
<td>Gets the name of the control tag.</td>
</tr>
<tr>
<td>TemplateControl</td>
<td>The template that contains this control.</td>
</tr>
<tr>
<td>TemplateSourceDirectory</td>
<td>Gets the virtual directory of the page or control containing this control.</td>
</tr>
<tr>
<td>ToolTip</td>
<td>Gets or sets the text displayed when the mouse pointer hovers over the web server control.</td>
</tr>
<tr>
<td>UniqueID</td>
<td>Unique identifier.</td>
</tr>
<tr>
<td>ViewState</td>
<td>Gets a dictionary of state information that saves and restores the view state of a server control across multiple requests for the same page.</td>
</tr>
<tr>
<td>ViewStateIgnoreCase</td>
<td>It indicates whether the StateBag object is case-insensitive.</td>
</tr>
<tr>
<td>ViewStateMode</td>
<td>Gets or sets the view-state mode of this control.</td>
</tr>
<tr>
<td>Visible</td>
<td>It indicates whether a server control is visible.</td>
</tr>
<tr>
<td>Width</td>
<td>Gets or sets the width of the Web server control.</td>
</tr>
</tbody></table>
<h4>Methods of the Server Controls</h4>
<p>The following table provides the methods of the server controls:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Method</th>
<th>Description</th>
</tr>
<tr>
<td>AddAttributesToRender</td>
<td>Adds HTML attributes and styles that need to be rendered to the specified HtmlTextWriterTag.</td>
</tr>
<tr>
<td>AddedControl</td>
<td>Called after a child control is added to the Controls collection of the control object.</td>
</tr>
<tr>
<td>AddParsedSubObject</td>
<td>Notifies the server control that an element, either XML or HTML, was parsed, and adds the element to the server control's control collection.</td>
</tr>
<tr>
<td>ApplyStyleSheetSkin</td>
<td>Applies the style properties defined in the page style sheet to the control. </td>
</tr>
<tr>
<td>ClearCachedClientID</td>
<td>Infrastructure. Sets the cached ClientID value to null.</td>
</tr>
<tr>
<td>ClearChildControlState</td>
<td>Deletes the control-state information for the server control's child controls.</td>
</tr>
<tr>
<td>ClearChildState</td>
<td>Deletes the view-state and control-state information for all the server control's child controls.</td>
</tr>
<tr>
<td>ClearChildViewState</td>
<td>Deletes the view-state information for all the server control's child controls.</td>
</tr>
<tr>
<td>CreateChildControls</td>
<td>Used in creating child controls.</td>
</tr>
<tr>
<td>CreateControlCollection</td>
<td>Creates a new ControlCollection object to hold the child controls.</td>
</tr>
<tr>
<td>CreateControlStyle</td>
<td>Creates the style object that is used to implement all style related properties.</td>
</tr>
<tr>
<td>DataBind</td>
<td>Binds a data source to the server control and all its child controls. </td>
</tr>
<tr>
<td>DataBind(Boolean)</td>
<td>Binds a data source to the server control and all its child controls with an option to raise the DataBinding event.</td>
</tr>
<tr>
<td>DataBindChildren</td>
<td>Binds a data source to the server control's child controls.</td>
</tr>
<tr>
<td>Dispose</td>
<td>Enables a server control to perform final clean up before it is released from memory.</td>
</tr>
<tr>
<td>EnsureChildControls</td>
<td>Determines whether the server control contains child controls. If it does not, it creates child controls.</td>
</tr>
<tr>
<td>EnsureID</td>
<td>Creates an identifier for controls that do not have an identifier.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified object is equal to the current object.</td>
</tr>
<tr>
<td>Finalize</td>
<td>Allows an object to attempt to free resources and perform other cleanup operations before the object is reclaimed by garbage collection.</td>
</tr>
<tr>
<td>FindControl(String)</td>
<td>Searches the current naming container for a server control with the specified id parameter.</td>
</tr>
<tr>
<td>FindControl(String, Int32)</td>
<td>Searches the current naming container for a server control with the specified id and an integer.</td>
</tr>
<tr>
<td>Focus</td>
<td>Sets input focus to a control.</td>
</tr>
<tr>
<td>GetDesignModeState</td>
<td>Gets design-time data for a control.</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the type of the current instance.</td>
</tr>
<tr>
<td>GetUniqueIDRelativeTo</td>
<td>Returns the prefixed portion of the UniqueID  property of the specified control.</td>
</tr>
<tr>
<td>HasControls</td>
<td>Determines if the server control contains any child controls.</td>
</tr>
<tr>
<td>HasEvents</td>
<td>Indicates whether events are registered for the control or any child controls.</td>
</tr>
<tr>
<td>IsLiteralContent</td>
<td>Determines if the server control holds only literal content.</td>
</tr>
<tr>
<td>LoadControlState</td>
<td>Restores control-state information.</td>
</tr>
<tr>
<td>LoadViewState</td>
<td>Restores view-state information.</td>
</tr>
<tr>
<td>MapPathSecure</td>
<td>Retrieves the physical path that a virtual path, either absolute or relative, maps to.</td>
</tr>
<tr>
<td>MemberwiseClone</td>
<td>Creates a shallow copy of the current object.</td>
</tr>
<tr>
<td>MergeStyle</td>
<td>Copies any nonblank elements of the specified style to the web control, but does not overwrite any existing style elements of the control.</td>
</tr>
<tr>
<td>OnBubbleEvent</td>
<td>Determines whether the event for the server control is passed up the page's UI server control hierarchy.</td>
</tr>
<tr>
<td>OnDataBinding</td>
<td>Raises the data binding event.</td>
</tr>
<tr>
<td>OnInit</td>
<td>Raises the Init event.</td>
</tr>
<tr>
<td>OnLoad</td>
<td>Raises the Load event.</td>
</tr>
<tr>
<td>OnPreRender</td>
<td>Raises the PreRender event.</td>
</tr>
<tr>
<td>OnUnload</td>
<td>Raises the Unload event.</td>
</tr>
<tr>
<td>OpenFile</td>
<td>Gets a Stream used to read a file.</td>
</tr>
<tr>
<td>RemovedControl</td>
<td>Called after a child control is removed from the controls collection of the control object.</td>
</tr>
<tr>
<td>Render</td>
<td>Renders the control to the specified HTML writer.</td>
</tr>
<tr>
<td>RenderBeginTag</td>
<td>Renders the HTML opening tag of the control to the specified writer.</td>
</tr>
<tr>
<td>RenderChildren</td>
<td>Outputs the contents of a server control's children to a provided HtmlTextWriter object, which writes the contents to be rendered on the client. </td>
</tr>
<tr>
<td>RenderContents</td>
<td>Renders the contents of the control to the specified writer.</td>
</tr>
<tr>
<td>RenderControl(HtmlTextWriter)</td>
<td>Outputs server control content to a provided HtmlTextWriter object and stores tracing information about the control if tracing is enabled.</td>
</tr>
<tr>
<td>RenderEndTag</td>
<td>Renders the HTML closing tag of the control into the specified writer.</td>
</tr>
<tr>
<td>ResolveAdapter</td>
<td>Gets the control adapter responsible for rendering the specified control.</td>
</tr>
<tr>
<td>SaveControlState</td>
<td>Saves any server control state changes that have occurred since the time the page was posted back to the server.</td>
</tr>
<tr>
<td>SaveViewState</td>
<td>Saves any state that was modified after the TrackViewState method was invoked.</td>
</tr>
<tr>
<td>SetDesignModeState</td>
<td>Sets design-time data for a control.</td>
</tr>
<tr>
<td>ToString</td>
<td>Returns a string that represents the current object.</td>
</tr>
<tr>
<td>TrackViewState</td>
<td>Causes the control to track changes to its view state so that they can be stored in the object's view state property.</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>Let us look at a particular server control - a tree view control. A Tree view control comes under navigation controls. Other Navigation controls are: Menu control and SiteMapPath control.</p>
<p>Add a tree view control on the page. Select Edit Nodes... from the tasks. Edit each of the nodes using the Tree view node editor as shown:</p>
<img src="images/asp.net_edit_nodes.jpg" alt="ASP.NET Edit Nodes">

<p>Once you have created the nodes, it looks like the following in design view:</p>
<img src="images/asp.net_edit_nodes2.jpg" alt="ASP.NET Edit Nodes2">
<p>The AutoFormat... task allows you to format the tree view as shown:</p>
<img src="images/asp.net_autoformat.jpg" alt="ASP.NET AutoFormat">
<p>Add a label control and a text box control on the page and name them lblmessage and txtmessage respectively.</p>
<p> Write a few lines of code to ensure that when a particular node is selected, the label control displays the node text and the text box displays all child nodes under it, if any. The code behind the file should look like this:</p>
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
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> treeviewdemo </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
         txtmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">" "</span><span class="pun">;</span><span class="pln"> 
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">TreeView1_SelectedNodeChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      
         txtmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">" "</span><span class="pun">;</span><span class="pln"> 
         lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Selected node changed to: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">TreeView1</span><span class="pun">.</span><span class="typ">SelectedNode</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
         </span><span class="typ">TreeNodeCollection</span><span class="pln"> childnodes </span><span class="pun">=</span><span class="pln"> </span><span class="typ">TreeView1</span><span class="pun">.</span><span class="typ">SelectedNode</span><span class="pun">.</span><span class="typ">ChildNodes</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">childnodes </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            txtmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">" "</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">foreach</span><span class="pln"> </span><span class="pun">(</span><span class="typ">TreeNode</span><span class="pln"> t </span><span class="kwd">in</span><span class="pln"> childnodes</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               txtmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> t</span><span class="pun">.</span><span class="typ">Value</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Execute the page to see the effects. You will  be able to expand and collapse the nodes.</p>
<img src="images/asp.net_control_nodes.jpg" alt="ASP.NET Control Nodes">






<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="305_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="307_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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