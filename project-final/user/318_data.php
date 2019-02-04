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
	$sid=318;
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

<p>The Panel control works as a container for other controls on the page. It controls the appearance and visibility of the controls it contains. It also allows generating controls programmatically.</p>
<p>The basic syntax of panel control is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Panel</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Panel1"</span><span class="pln">  </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:Panel&gt;</span></pre>
<p>The Panel control is derived from the WebControl class. Hence it inherits all the properties, methods and events of the same. It does not have any method or event of its own. However it has the following properties of its own:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>BackImageUrl</td>
<td>URL of the background image of the panel.</td>
</tr>
<tr>
<td>DefaultButton</td>
<td>Gets or sets the identifier for the default button that is contained in the Panel control.</td>
</tr>
<tr>
<td>Direction</td>
<td>Text direction in the panel.</td>
</tr>
<tr>
<td>GroupingText</td>
<td>Allows grouping of text as a field.</td>
</tr>
<tr>
<td>HorizontalAlign</td>
<td>Horizontal alignment of the content in the panel.</td>
</tr>
<tr>
<td>ScrollBars</td>
<td>Specifies visibility and location of scrollbars within the panel.</td>
</tr>
<tr>
<td>Wrap</td>
<td>Allows text wrapping.</td>
</tr>
</tbody></table>
<h4>Working with the Panel Control</h4>
<p>Let us start with a simple scrollable panel of specific height and width and a border style. The ScrollBars property is set to both the scrollbars, hence both the scrollbars are rendered.</p>
<p>The source file has the following code for the panel tag:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:Panel</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"Panel1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">BorderColor</span><span class="pun">=</span><span class="atv">"#990000"</span><span class="pln"> </span><span class="atn">BorderStyle</span><span class="pun">=</span><span class="atv">"Solid"</span><span class="pln"> 
   </span><span class="atn">Borderstyle</span><span class="pun">=</span><span class="atv">"width:1px"</span><span class="pln"> </span><span class="atn">Height</span><span class="pun">=</span><span class="atv">"116px"</span><span class="pln"> </span><span class="atn">ScrollBars</span><span class="pun">=</span><span class="atv">"Both"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">278px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   This is a scrollable panel.
   </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">

   </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnpanel"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Button"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">82px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:Panel&gt;</span></pre>
<p>The panel is rendered as follows:</p>
<img src="images/panel.jpg" alt="Panel">
<h5>Example</h5>
<p>The following example demonstrates dynamic content generation. The user provides the number of label controls and textboxes to be generated on the panel. The controls are generated programmatically.</p>
<p>Change the properties of the panel using the properties window. When you select a control on the design view, the properties window displays the properties of that particular control and allows you to make changes without typing.</p>
<img src="images/panel2.jpg" alt="Panel2">
<p>The source file for the example is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:Panel</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"pnldynamic"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">BorderColor</span><span class="pun">=</span><span class="atv">"#990000"</span><span class="pln"> 
         </span><span class="atn">BorderStyle</span><span class="pun">=</span><span class="atv">"Solid"</span><span class="pln"> </span><span class="atn">Borderstyle</span><span class="pun">=</span><span class="atv">"width:1px"</span><span class="pln"> </span><span class="atn">Height</span><span class="pun">=</span><span class="atv">"150px"</span><span class="pln">  </span><span class="atn">ScrollBars</span><span class="pun">=</span><span class="atv">"Auto"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">60</span><span class="pun">%</span><span class="atv">"</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#CCCCFF"</span><span class="pln">  </span><span class="atn">Font-Names</span><span class="pun">=</span><span class="atv">"Courier"</span><span class="pln"> </span><span class="atn">HorizontalAlign</span><span class="pun">=</span><span class="atv">"Center"</span><span class="tag">&gt;</span><span class="pln">
     
         This panel shows dynamic control generation:
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/asp:Panel&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">

   </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">51</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">No of Labels:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ddllabels"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">0</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">1</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">2</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">3</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">4</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">No of Text Boxes :</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ddltextbox"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">0</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem</span><span class="pln"> </span><span class="atn">Value</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">2</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">3</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem</span><span class="pln"> </span><span class="atn">Value</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;&lt;/asp:ListItem&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">&nbsp;</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:CheckBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"chkvisible"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
               </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Make the Panel Visible"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnrefresh"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Refresh Panel"</span><span class="pln"> 
               </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">129px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;/table&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>The code behind the Page_Load event is responsible for generating the controls dynamically:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="com">//make the panel visible</span><span class="pln">
      pnldynamic</span><span class="pun">.</span><span class="typ">Visible</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> chkvisible</span><span class="pun">.</span><span class="typ">Checked</span><span class="pun">;</span><span class="pln">

      </span><span class="com">//generating the lable controls:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> n </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Int32</span><span class="pun">.</span><span class="typ">Parse</span><span class="pun">(</span><span class="pln">ddllabels</span><span class="pun">.</span><span class="typ">SelectedItem</span><span class="pun">.</span><span class="typ">Value</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;=</span><span class="pln"> n</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">Label</span><span class="pln"> lbl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Label</span><span class="pun">();</span><span class="pln">
         lbl</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Label"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="pun">(</span><span class="pln">i</span><span class="pun">).</span><span class="typ">ToString</span><span class="pun">();</span><span class="pln">
         pnldynamic</span><span class="pun">.</span><span class="typ">Controls</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">lbl</span><span class="pun">);</span><span class="pln">
         pnldynamic</span><span class="pun">.</span><span class="typ">Controls</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">LiteralControl</span><span class="pun">(</span><span class="str">"&lt;br /&gt;"</span><span class="pun">));</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="com">//generating the text box controls:</span><span class="pln">

      </span><span class="kwd">int</span><span class="pln"> m </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Int32</span><span class="pun">.</span><span class="typ">Parse</span><span class="pun">(</span><span class="pln">ddltextbox</span><span class="pun">.</span><span class="typ">SelectedItem</span><span class="pun">.</span><span class="typ">Value</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;=</span><span class="pln"> m</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">TextBox</span><span class="pln"> txt </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">TextBox</span><span class="pun">();</span><span class="pln">
         txt</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Text Box"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="pun">(</span><span class="pln">i</span><span class="pun">).</span><span class="typ">ToString</span><span class="pun">();</span><span class="pln">
         pnldynamic</span><span class="pun">.</span><span class="typ">Controls</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">txt</span><span class="pun">);</span><span class="pln">
         pnldynamic</span><span class="pun">.</span><span class="typ">Controls</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">LiteralControl</span><span class="pun">(</span><span class="str">"&lt;br /&gt;"</span><span class="pun">));</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When executed, the panel is rendered as:</p>
<img src="images/panel3.jpg" alt="Panel3">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="317_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="319_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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