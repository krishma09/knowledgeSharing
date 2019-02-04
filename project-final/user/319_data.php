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
	$sid=319;
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

<p>AJAX stands for Asynchronous JavaScript and XML. This is a cross platform technology which speeds up response time. The AJAX server controls add script to the page which is executed and processed by the browser.</p>
<p>However like other ASP.NET server controls, these AJAX server controls also can have methods and event handlers associated with them, which are processed on the server side.</p>
<p>The control toolbox in the Visual Studio IDE contains a group of controls called the 'AJAX Extensions'</p>
<img src="images/ajax_extensions.jpg" alt="AJAX Extensions">
<h4>The ScriptManager Control</h4>
<p>The ScriptManager control is the most important control and must be present on the page for other controls to work.</p>
<p>It has the basic syntax:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:ScriptManager</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ScriptManager1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:ScriptManager&gt;</span></pre>
<p>If you create an 'Ajax Enabled site' or add an 'AJAX Web Form' from the 'Add Item' dialog box, the web form automatically contains the script manager control. The ScriptManager control takes care of the client-side script for all the server side controls.</p>
<h4>The UpdatePanel Control</h4>
<p>The UpdatePanel control is a container control and derives from the Control class. It acts as a container for the child controls within it and does not have its own interface. When a control inside it triggers a post back, the UpdatePanel intervenes to initiate the post asynchronously and update just that portion of the page.</p>
<p>For example, if a button control is inside the update panel and it is clicked, only the controls within the update panel will be affected, the controls on the other parts of the page will not be affected. This is called the partial post back or the asynchronous post back.</p>
<h5>Example</h5>
<p>Add an AJAX web form in your application. It contains the script manager control by default. Insert an update panel. Place a button control along with a label control within the update panel control. Place another set of button and label outside the panel.</p>
<p>The design view looks as follows:</p>
<img src="images/scriptmanager.jpg" alt="ScriptManager">
<p>The source file is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:ScriptManager</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ScriptManager1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;asp:UpdatePanel</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"UpdatePanel1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;ContentTemplate&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnpartial"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnpartial_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Partial PostBack"</span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblpartial"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ContentTemplate&gt;</span><span class="pln">
   </span><span class="tag">&lt;/asp:UpdatePanel&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;p&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;p&gt;</span><span class="pln">Outside the Update Panel</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;p&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btntotal"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btntotal_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Total PostBack"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lbltotal"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>Both the button controls have same code for the event handler:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">string</span><span class="pln"> time </span><span class="pun">=</span><span class="pln"> </span><span class="typ">DateTime</span><span class="pun">.</span><span class="typ">Now</span><span class="pun">.</span><span class="typ">ToLongTimeString</span><span class="pun">();</span><span class="pln">
lblpartial</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Showing time from panel"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> time</span><span class="pun">;</span><span class="pln">
lbltotal</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Showing time from outside"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> time</span><span class="pun">;</span></pre>
<p>Observe that when the page is executed, if the total post back button is clicked, it updates time in both the labels but if the partial post back button is clicked, it only updates the label within the update panel.</p>
<img src="images/update_panel.jpg" alt="update panel">
<p>A page can contain multiple update panels with each panel containing other controls like a grid and displaying different part of data.</p>
<p>When a total post back occurs, the update panel content is updated by default. This default mode could be changed by changing the UpdateMode property of the control. Let us look at other properties of the update panel.</p>	

<h5>Properties of the UpdatePanel Control</h5>
<p>The following table shows the properties of the update panel control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>ChildrenAsTriggers</td>
<td>This property indicates whether the post backs are coming from the child controls, which cause the update panel to refresh.</td>
</tr>
<tr>
<td>ContentTemplate</td>
<td>It is the content template and defines what appears in the update panel when it is rendered.</td>
</tr>
<tr>
<td>ContentTemplateContainer</td>
<td>Retrieves the dynamically created template container object and used for adding child controls programmatically.</td>
</tr>
<tr>
<td>IsInPartialRendering</td>
<td>Indicates whether the panel is being updated as part of the partial post back.</td>
</tr>
<tr>
<td>RenderMode</td>
<td>Shows the render modes. The available modes are Block and Inline.</td>
</tr>
<tr>
<td>UpdateMode</td>
<td>Gets or sets the rendering mode by determining some conditions.</td>
</tr>
<tr>
<td>Triggers</td>
<td>Defines the collection trigger objects each corresponding to an event causing the panel to refresh automatically.</td>
</tr>
</tbody></table>
<h5>Methods of the UpdatePanel Control</h5>
<p>The following table shows the methods of the update panel control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>CreateContentTemplateContainer</td>
<td>Creates a Control object that acts as a container for child controls that define the UpdatePanel control's content.</td>
</tr>
<tr>
<td>CreateControlCollection</td>
<td>Returns the collection of all controls that are contained in the UpdatePanel control.</td>
</tr>
<tr>
<td>Initialize</td>
<td>Initializes the UpdatePanel control trigger collection if partial-page rendering is enabled.</td>
</tr>
<tr>
<td>Update</td>
<td>Causes an update of the content of an UpdatePanel control.</td>
</tr>
</tbody></table>
<p>The behavior of the update panel depends upon the values of the UpdateMode property and ChildrenAsTriggers property.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">UpdateMode</th>
<th>ChildrenAsTriggers</th>
<th>Effect</th>
</tr>
<tr>
<td>Always</td>
<td>False</td>
<td>Illegal parameters.</td>
</tr>
<tr>
<td>Always</td>
<td>True</td>
<td>UpdatePanel refreshes if whole page refreshes or a child control on it posts back.</td>
</tr>
<tr>
<td>Conditional</td>
<td>False</td>
<td>UpdatePanel refreshes if whole page refreshes or a triggering control outside it initiates a refresh.</td>
</tr>
<tr>
<td>Conditional</td>
<td>True</td>
<td>UpdatePanel refreshes if whole page refreshes or a child control on it posts back or a triggering control outside it initiates a refresh.</td>
</tr>
</tbody></table>
<h4>The UpdateProgress Control</h4>
<p>The UpdateProgress control provides a sort of feedback on the browser while one or more update panel controls are being updated. For example, while a user logs in or waits for server response while performing some database oriented job.</p>
<p>It provides a visual acknowledgement like "Loading page...", indicating the work is in progress.</p>
<p>The syntax for the UpdateProgress control is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:UpdateProgress</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"UpdateProgress1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">DynamicLayout</span><span class="pun">=</span><span class="atv">"true"</span><span class="pln"> </span><span class="atn">AssociatedUpdatePanelID</span><span class="pun">=</span><span class="atv">"UpdatePanel1"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;ProgressTemplate&gt;</span><span class="pln">
      Loading...
   </span><span class="tag">&lt;/ProgressTemplate&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:UpdateProgress&gt;</span></pre>
<p>The above snippet shows a simple message within the ProgressTemplate tag. However, it could be an image or other relevant controls. The UpdateProgress control displays for every asynchronous postback unless it is assigned to a single update panel using the AssociatedUpdatePanelID property.</p>
<h5>Properties of the UpdateProgress Control</h5>

<p>The following table shows the properties of the update progress control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>AssociatedUpdatePanelID</td>
<td>Gets and sets the ID of the update panel with which this control is associated.</td>
</tr>
<tr>
<td>Attributes</td>
<td>Gets or sets the cascading style sheet (CSS) attributes of the UpdateProgress control.</td>
</tr>
<tr>
<td>DisplayAfter</td>
<td>Gets and sets the time in milliseconds after which the progress template is displayed. The default is 500.</td>
</tr>
<tr>
<td>DynamicLayout</td>
<td>Indicates whether the progress template is dynamically rendered.</td>
</tr>
<tr>
<td>ProgressTemplate</td>
<td>Indicates the template displayed during an asynchronous post back which takes more time than the DisplayAfter time.</td>
</tr>
</tbody></table>
<h5>Methods of the UpdateProgress Control</h5>
<p>The following table shows the methods of the update progress control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>GetScriptDescriptors</td>
<td>Returns a list of components, behaviors, and client controls that are required for the UpdateProgress control's client functionality.</td>
</tr>
<tr>
<td>GetScriptReferences</td>
<td>Returns a list of client script library dependencies for the UpdateProgress control.</td>
</tr>
</tbody></table>
<h4>The Timer Control</h4>
<p>The timer control is used to initiate the post back automatically. This could be done in two ways:</p>
<p>(1) Setting the Triggers property of the UpdatePanel control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;Triggers&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;asp:AsyncPostBackTrigger</span><span class="pln"> </span><span class="atn">ControlID</span><span class="pun">=</span><span class="atv">"btnpanel2"</span><span class="pln"> </span><span class="atn">EventName</span><span class="pun">=</span><span class="atv">"Click"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/Triggers&gt;</span></pre>
<p>(2) Placing a timer control directly inside the UpdatePanel to act as a child control trigger. A single timer can be the trigger for multiple UpdatePanels.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:UpdatePanel</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"UpdatePanel1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">UpdateMode</span><span class="pun">=</span><span class="atv">"Always"</span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;ContentTemplate&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:Timer</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Timer1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Interval</span><span class="pun">=</span><span class="atv">"1000"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;/asp:Timer&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Label1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Height</span><span class="pun">=</span><span class="atv">"101px"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">304px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ContentTemplate&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:UpdatePanel&gt;</span></pre>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="318_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="320_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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