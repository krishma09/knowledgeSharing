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
	$sid=317;
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

<p>MultiView and View controls allow you to divide the content of a page into different groups, displaying only one group at a time. Each View control manages one group of content and all the View controls are held together in a MultiView control.</p>
<p>The MultiView control is responsible for displaying one View control at a time. The View displayed is called the active view.</p>
<p>The syntax of MultiView control is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:MultView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"MultiView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:MultiView&gt;</span></pre>
<p>The syntax of View control is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:View</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"View1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:View&gt;</span></pre>
<p>However, the View control cannot exist on its own. It would render error if you try to use it stand-alone. It is always used with a Multiview control as:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:MultView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"MultiView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;asp:View</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"View1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/asp:View&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:MultiView&gt;</span></pre>
<h4>Properties of View and MultiView Controls</h4>
<p>Both View and MultiView controls are derived from Control class and inherit all its properties, methods, and events. The most important property of the View control is Visible property of type Boolean, which sets the visibility of a view.</p>
<p>The MultiView control has the following important properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Views</td>
<td>Collection of View controls within the MultiView.</td>
</tr>
<tr>
<td>ActiveViewIndex</td>
<td>A zero based index that denotes the active view. If no view is active, then the index is -1.</td>
</tr>
</tbody></table>
<p>The CommandName attribute of the button control associated with the navigation of the MultiView control are associated with some related field of the MultiView control.</p>
<p>For example, if a button control with CommandName value as NextView is associated with the navigation of the multiview, it automatically navigates to the next view when the button is clicked.</p>
<p>The following table shows the default command names of the above properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>NextViewCommandName</td>
<td>NextView</td>
</tr>
<tr>
<td>PreviousViewCommandName</td>
<td>PrevView</td>
</tr>
<tr>
<td>SwitchViewByIDCommandName</td>
<td>SwitchViewByID</td>
</tr>
<tr>
<td>SwitchViewByIndexCommandName</td>
<td>SwitchViewByIndex</td>
</tr>
</tbody></table>
<p>The important methods of the multiview control are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>SetActiveview</td>
<td>Sets the active view</td>
</tr>
<tr>
<td>GetActiveview</td>
<td>Retrieves the active view</td>
</tr>
</tbody></table>
<p>Every time a view is changed, the page is posted back to the server and a number of events are raised. Some important events are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Events</th>
<th>Description</th>
</tr>
<tr>
<td>ActiveViewChanged</td>
<td>Raised when a view is changed</td>
</tr>
<tr>
<td>Activate</td>
<td>Raised by the active view</td>
</tr>
<tr>
<td>Deactivate</td>
<td>Raised by the inactive view</td>
</tr>
</tbody></table>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Events</th>
<th>Description</th>
</tr>
<tr>
<td>ActiveViewChanged</td>
<td>Raised when a view is changed</td>
</tr>
<tr>
<td>Activate</td>
<td>Raised by the active view</td>
</tr>
<tr>
<td>Deactivate</td>
<td>Raised by the inactive view</td>
</tr>
</tbody></table>
<p>Apart from the above mentioned properties, methods and events, multiview control inherits the members of the control and object class.</p>
<h4>Example</h4>
<p>The example page has three views. Each view has two button for navigating through the views.</p>
<p>The content file code is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"multiviewdemo._Default"</span><span class="pln"> %&gt;

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
            </span><span class="tag">&lt;h4&gt;</span><span class="pln">MultiView and View Controls</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"DropDownList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onselectedindexchanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">DropDownList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;hr</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:MultiView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"MultiView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ActiveViewIndex</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln">  </span><span class="atn">onactiveviewchanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">MultiView1_ActiveViewChanged</span><span class="atv">"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:View</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"View1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;h5&gt;</span><span class="pln">This is view 1</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
                  </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"NextView"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnnext1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Go To Next"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">CommandArgument</span><span class="pun">=</span><span class="atv">"View3"</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"SwitchViewByID"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnlast"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln">  </span><span class="pun">=</span><span class="atv">"Go To Last"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:View&gt;</span><span class="pln"> 
					
               </span><span class="tag">&lt;asp:View</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"View2"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;h5&gt;</span><span class="pln">This is view 2</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"NextView"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnnext2"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Go To Next"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"PrevView"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnprevious2"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Go To Previous View"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:View&gt;</span><span class="pln"> 

               </span><span class="tag">&lt;asp:View</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"View3"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;h5&gt;</span><span class="pln"> This is view 3</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
                  </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Calendar</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Calender1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Calendar&gt;</span><span class="pln">
                  </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln">  </span><span class="atn">CommandArgument</span><span class="pun">=</span><span class="atv">"0"</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"SwitchViewByIndex"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnfirst"</span><span class="pln">   </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Go To Next"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">CommandName</span><span class="pun">=</span><span class="atv">"PrevView"</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnprevious"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Go To Previous View"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:View&gt;</span><span class="pln"> 
               
            </span><span class="tag">&lt;/asp:MultiView&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Observe the following:</p>
<p>The MultiView.ActiveViewIndex determines which view will be shown. This is the only view rendered on the page. The default value for the ActiveViewIndex is -1, when no view is shown. Since the ActiveViewIndex is defined as 2 in the example, it shows the third view, when executed.</p>
<img src="images/multiview.jpg" alt="MultiView">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="316_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="318_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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